<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Form;

use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\eventhub_core\Entity\Event;
use Drupal\eventhub_core\Service\EventManager;
use Drupal\eventhub_core\Service\RegistrationManager;

/**
 * Registration form with #states, validation and AJAX concepts.
 */
final class RegistrationForm extends FormBase {

  use AutowireTrait;

  public function __construct(
    private readonly EntityTypeManagerInterface $entityTypeManager,
    private readonly EventManager $eventManager,
    private readonly RegistrationManager $registrationManager,
  ) {}

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'eventhub_registration_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    /** @var \Drupal\eventhub_core\Entity\Event|null $event */
    $event = $this->getRouteMatch()->getParameter('event');

    if ($event instanceof Event) {
      $form['event_id'] = [
        '#type' => 'hidden',
        '#value' => $event->id(),
      ];
      $form['event_info'] = [
        '#type' => 'markup',
        '#markup' => '<h3>' . $this->t('Inscription à : @name', [
          '@name' => $event->getName(),
        ]) . '</h3>',
      ];
    }
    else {
      $form['event_id'] = [
        '#type' => 'entity_autocomplete',
        '#title' => $this->t('Événement'),
        '#target_type' => 'event',
        '#required' => TRUE,
      ];
    }

    $form['participant_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Nom complet'),
      '#required' => TRUE,
      '#maxlength' => 255,
    ];

    $form['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Adresse email'),
      '#required' => TRUE,
    ];

    $form['add_phone'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Ajouter mon numéro de téléphone'),
    ];

    // Conditional field: phone visible only if checkbox is checked.
    $form['phone'] = [
      '#type' => 'tel',
      '#title' => $this->t('Téléphone'),
      '#maxlength' => 20,
      '#states' => [
        'visible' => [
          ':input[name="add_phone"]' => ['checked' => TRUE],
        ],
      ],
    ];

    $form['additional'] = [
      '#type' => 'details',
      '#title' => $this->t('Informations complémentaires'),
      '#open' => FALSE,
    ];

    $form['additional']['notes'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Notes ou commentaires'),
      '#rows' => 3,
    ];

    $form['actions'] = [
      '#type' => 'actions',
    ];
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t("S'inscrire"),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state): void {
    $eventId = (int) $form_state->getValue('event_id');

    if ($eventId <= 0) {
      $form_state->setErrorByName('event_id', $this->t('Veuillez sélectionner un événement valide.'));
      return;
    }

    // Check if the event is full.
    if ($this->eventManager->isEventFull($eventId)) {
      $form_state->setErrorByName('event_id', $this->t("Cet événement est complet, il n'y a plus de places disponibles."));
    }

    // Check if already registered.
    $email = (string) $form_state->getValue('email');
    if ($this->registrationManager->isAlreadyRegistered($eventId, $email)) {
      $form_state->setErrorByName('email', $this->t("L'adresse email @email est déjà inscrite à cet événement.", [
        '@email' => $email,
      ]));
    }

    // Validate participant name length.
    $name = (string) $form_state->getValue('participant_name');
    if (mb_strlen($name) < 2) {
      $form_state->setErrorByName('participant_name', $this->t('Le nom doit contenir au moins 2 caractères.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $values = [
      'event' => $form_state->getValue('event_id'),
      'participant_name' => $form_state->getValue('participant_name'),
      'email' => $form_state->getValue('email'),
      'registration_status' => 'confirmed',
    ];

    $phone = $form_state->getValue('phone');
    if (!empty($phone)) {
      $values['phone'] = $phone;
    }

    $notes = $form_state->getValue('notes');
    if (!empty($notes)) {
      $values['notes'] = $notes;
    }

    /** @var \Drupal\eventhub_core\Entity\Registration $registration */
    $registration = $this->entityTypeManager
      ->getStorage('registration')
      ->create($values);
    $registration->save();

    $this->messenger()->addStatus(
      $this->t('Votre inscription a bien été enregistrée. Merci !')
    );

    $form_state->setRedirect('eventhub.event_view', [
      'event' => $form_state->getValue('event_id'),
    ]);
  }

}
