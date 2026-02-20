<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Form;

use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\taxonomy\TermInterface;

/**
 * Event creation form with AJAX-powered category selection.
 */
final class EventForm extends FormBase {

  use AutowireTrait;

  public function __construct(
    private readonly EntityTypeManagerInterface $entityTypeManager,
  ) {}

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'eventhub_event_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t("Titre de l'événement"),
      '#required' => TRUE,
      '#maxlength' => 255,
    ];

    $form['description'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Description'),
      '#format' => 'full_html',
      '#allowed_formats' => ['full_html'],
    ];

    $form['event_date'] = [
      '#type' => 'datetime',
      '#title' => $this->t('Date et heure'),
      '#required' => TRUE,
    ];

    $form['location'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Lieu (commune)'),
      '#required' => TRUE,
      '#autocomplete_route_name' => 'eventhub.geodata_autocomplete',
    ];

    // Category select with AJAX.
    $categories = $this->getCategoryOptions();
    $form['category'] = [
      '#type' => 'select',
      '#title' => $this->t('Catégorie'),
      '#options' => $categories,
      '#required' => TRUE,
      '#ajax' => [
        'callback' => '::updateCapacity',
        'wrapper' => 'capacity-wrapper',
        'event' => 'change',
      ],
    ];

    // Get default capacity from selected category.
    $selectedCategory = $form_state->getValue('category');
    $defaultCapacity = $this->getDefaultCapacity($selectedCategory);

    $form['capacity'] = [
      '#type' => 'number',
      '#title' => $this->t('Capacité maximale'),
      '#required' => TRUE,
      '#min' => 1,
      '#default_value' => $defaultCapacity,
      '#prefix' => '<div id="capacity-wrapper">',
      '#suffix' => '</div>',
    ];

    $form['status'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Publier immédiatement'),
      '#default_value' => TRUE,
    ];

    $form['actions'] = [
      '#type' => 'actions',
    ];
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t("Créer l'événement"),
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
    $description = $form_state->getValue('description');

    $values = [
      'name' => $form_state->getValue('name'),
      'description' => is_array($description) ? $description : ['value' => $description, 'format' => 'basic_html'],
      'event_date' => $form_state->getValue('event_date')?->format('Y-m-d\TH:i:s'),
      'location' => $form_state->getValue('location'),
      'category' => $form_state->getValue('category'),
      'capacity' => $form_state->getValue('capacity'),
      'status' => $form_state->getValue('status'),
      'uid' => $this->currentUser()->id(),
    ];

    /** @var \Drupal\eventhub_core\Entity\Event $event */
    $event = $this->entityTypeManager
      ->getStorage('event')
      ->create($values);
    $event->save();

    $this->messenger()->addStatus(
      $this->t("L'événement « @name » a été créé avec succès.", [
        '@name' => $event->getName(),
      ])
    );

    $form_state->setRedirect('eventhub.event_view', [
      'event' => $event->id(),
    ]);
  }

  /**
   * Gets the category options for the select field.
   *
   * @return array
   *   An associative array of category ID => label.
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
   *
   * @param string|null $categoryId
   *   The category ID.
   *
   * @return int
   *   The default capacity.
   */
  private function getDefaultCapacity(?string $categoryId): int {
    if (empty($categoryId)) {
      return 50;
    }

    /** @var \Drupal\taxonomy\TermInterface|null $term */
    $term = $this->entityTypeManager
      ->getStorage('taxonomy_term')
      ->load($categoryId);

    if ($term instanceof TermInterface && $term->hasField('field_max_capacity') && !$term->get('field_max_capacity')->isEmpty()) {
      return (int) $term->get('field_max_capacity')->value;
    }

    return 50;
  }

}
