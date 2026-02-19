<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Entity;

use Drupal\Core\Entity\Attribute\ContentEntityType;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines the Registration entity.
 */
#[ContentEntityType(
  id: 'registration',
  label: new TranslatableMarkup('Registration'),
  label_collection: new TranslatableMarkup('Registrations'),
  label_singular: new TranslatableMarkup('registration'),
  label_plural: new TranslatableMarkup('registrations'),
  base_table: 'eventhub_registration',
  entity_keys: [
    'id' => 'id',
    'uuid' => 'uuid',
    'label' => 'participant_name',
  ],
)]
class Registration extends ContentEntityBase {

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type): array {
    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['event'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(new TranslatableMarkup('Événement'))
      ->setDescription(new TranslatableMarkup('L\'événement auquel le participant s\'inscrit.'))
      ->setRequired(TRUE)
      ->setSetting('target_type', 'event')
      ->setDisplayOptions('form', [
        'type' => 'entity_reference_autocomplete',
        'weight' => 0,
      ]);

    $fields['participant_name'] = BaseFieldDefinition::create('string')
      ->setLabel(new TranslatableMarkup('Nom du participant'))
      ->setRequired(TRUE)
      ->setSetting('max_length', 255)
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => 5,
      ]);

    $fields['email'] = BaseFieldDefinition::create('email')
      ->setLabel(new TranslatableMarkup('Email'))
      ->setDescription(new TranslatableMarkup('Adresse email du participant.'))
      ->setRequired(TRUE)
      ->addConstraint('UniqueRegistration')
      ->setDisplayOptions('form', [
        'type' => 'email_default',
        'weight' => 10,
      ]);

    $fields['phone'] = BaseFieldDefinition::create('string')
      ->setLabel(new TranslatableMarkup('Téléphone'))
      ->setSetting('max_length', 20)
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => 15,
      ]);

    $fields['registration_status'] = BaseFieldDefinition::create('list_string')
      ->setLabel(new TranslatableMarkup('Statut'))
      ->setRequired(TRUE)
      ->setDefaultValue('confirmed')
      ->setSetting('allowed_values', [
        'confirmed' => 'Confirmée',
        'pending' => 'En attente',
        'cancelled' => 'Annulée',
      ])
      ->setDisplayOptions('form', [
        'type' => 'options_select',
        'weight' => 20,
      ]);

    $fields['notes'] = BaseFieldDefinition::create('text_long')
      ->setLabel(new TranslatableMarkup('Notes'))
      ->setDescription(new TranslatableMarkup('Notes ou commentaires du participant.'))
      ->setDisplayOptions('form', [
        'type' => 'text_textarea',
        'weight' => 25,
      ]);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(new TranslatableMarkup('Date d\'inscription'));

    return $fields;
  }

  /**
   * Gets the referenced event ID.
   */
  public function getEventId(): int {
    return (int) $this->get('event')->target_id;
  }

  /**
   * Gets the referenced event entity.
   */
  public function getEvent(): ?Event {
    $entity = $this->get('event')->entity;
    return $entity instanceof Event ? $entity : NULL;
  }

  /**
   * Gets the participant name.
   */
  public function getParticipantName(): string {
    return (string) $this->get('participant_name')->value;
  }

  /**
   * Gets the email.
   */
  public function getEmail(): string {
    return (string) $this->get('email')->value;
  }

  /**
   * Gets the registration status.
   */
  public function getRegistrationStatus(): string {
    return (string) $this->get('registration_status')->value;
  }

  /**
   * Checks if the registration is cancelled.
   */
  public function isCancelled(): bool {
    return $this->getRegistrationStatus() === 'cancelled';
  }

}
