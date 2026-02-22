<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Form;

use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\eventhub_core\Entity\Event;
use Drupal\taxonomy\TermInterface;

/**
 * Event edit form.
 */
final class EventEditForm extends FormBase {

  use AutowireTrait;

  public function __construct(
    protected EntityTypeManagerInterface $entityTypeManager,
  ) {}

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'eventhub_event_edit_form';
  }

  /**
   * Gets the event from the route.
   */
  private function getEvent(): Event {
    return $this->getRouteMatch()->getParameter('event');
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $event = $this->getEvent();

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t("Titre de l'événement"),
      '#required' => TRUE,
      '#maxlength' => 255,
      '#default_value' => $event->getName(),
    ];

    $description = $event->get('description');
    $form['description'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Description'),
      '#default_value' => $description->value ?? '',
      '#format' => $description->format ?? 'full_html',
      '#allowed_formats' => ['full_html'],
    ];

    $form['event_date'] = [
      '#type' => 'datetime',
      '#title' => $this->t('Date et heure'),
      '#required' => TRUE,
      '#default_value' => $event->getEventDate() ? new DrupalDateTime($event->getEventDate()) : NULL,
    ];

    $form['location'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Lieu (commune)'),
      '#required' => TRUE,
      '#autocomplete_route_name' => 'eventhub.geodata_autocomplete',
      '#default_value' => $event->getLocation(),
    ];

    $categories = $this->getCategoryOptions();
    $form['category'] = [
      '#type' => 'select',
      '#title' => $this->t('Catégorie'),
      '#options' => $categories,
      '#required' => TRUE,
      '#default_value' => $event->getCategoryId(),
      '#ajax' => [
        'callback' => '::updateCapacity',
        'wrapper' => 'capacity-wrapper',
        'event' => 'change',
      ],
    ];

    $selectedCategory = $form_state->getValue('category');
    $capacity = $selectedCategory ? $this->getDefaultCapacity($selectedCategory) : $event->getCapacity();

    $form['capacity'] = [
      '#type' => 'number',
      '#title' => $this->t('Capacité maximale'),
      '#required' => TRUE,
      '#min' => 1,
      '#default_value' => $capacity,
      '#prefix' => '<div id="capacity-wrapper">',
      '#suffix' => '</div>',
    ];

    $form['status'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Publié'),
      '#default_value' => $event->isPublished(),
    ];

    $form['actions'] = [
      '#type' => 'actions',
    ];
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Enregistrer les modifications'),
    ];

    return $form;
  }

  /**
   * AJAX callback to update capacity based on category.
   */
  public function updateCapacity(array &$form, FormStateInterface $form_state): array {
    $selectedCategory = $form_state->getValue('category');
    $defaultCapacity = $this->getDefaultCapacity($selectedCategory);
    $form['capacity']['#value'] = $defaultCapacity;
    return $form['capacity'];
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state): void {
    $capacity = (int) $form_state->getValue('capacity');
    if ($capacity < 1) {
      $form_state->setErrorByName('capacity', $this->t("La capacité doit être d'au moins 1 participant."));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $event = $this->getEvent();
    $description = $form_state->getValue('description');

    $event->set('name', $form_state->getValue('name'));
    $descriptionValue = is_array($description)
      ? $description
      : ['value' => $description, 'format' => 'basic_html'];
    $event->set('description', $descriptionValue);
    $event->set('event_date', $form_state->getValue('event_date')?->format('Y-m-d\TH:i:s'));
    $event->set('location', $form_state->getValue('location'));
    $event->set('category', $form_state->getValue('category'));
    $event->set('capacity', $form_state->getValue('capacity'));
    $event->set('status', $form_state->getValue('status'));
    $event->save();

    $this->messenger()->addStatus(
      $this->t("L'événement « @name » a été modifié.", [
        '@name' => $event->getName(),
      ])
    );

    $form_state->setRedirect('eventhub.event_view', [
      'event' => $event->id(),
    ]);
  }

  /**
   * Gets category options.
   */
  private function getCategoryOptions(): array {
    $options = ['' => $this->t('- Sélectionner -')];

    /** @var \Drupal\taxonomy\TermInterface[] $terms */
    $terms = $this->entityTypeManager
      ->getStorage('taxonomy_term')
      ->loadByProperties(['vid' => 'event_categories']);

    foreach ($terms as $term) {
      $options[$term->id()] = $term->label();
    }

    return $options;
  }

  /**
   * Gets the default capacity for a category.
   */
  private function getDefaultCapacity(?string $categoryId): int {
    if (empty($categoryId)) {
      return 50;
    }

    $term = $this->entityTypeManager
      ->getStorage('taxonomy_term')
      ->load($categoryId);

    if ($term instanceof TermInterface && $term->hasField('field_max_capacity') && !$term->get('field_max_capacity')->isEmpty()) {
      return (int) $term->get('field_max_capacity')->value;
    }

    return 50;
  }

}
