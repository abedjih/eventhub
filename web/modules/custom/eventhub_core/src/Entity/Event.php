<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Entity;

use Drupal\Core\Entity\Attribute\ContentEntityType;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\taxonomy\TermInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\user\EntityOwnerTrait;

/**
 * Defines the Event entity.
 */
#[ContentEntityType(
  id: 'event',
  label: new TranslatableMarkup('Event'),
  label_collection: new TranslatableMarkup('Events'),
  label_singular: new TranslatableMarkup('event'),
  label_plural: new TranslatableMarkup('events'),
  base_table: 'eventhub_event',
  entity_keys: [
    'id' => 'id',
    'uuid' => 'uuid',
    'label' => 'name',
    'owner' => 'uid',
    'published' => 'status',
  ],
  handlers: [
    'access' => 'Drupal\eventhub_core\Access\EventAccessControlHandler',
    'views_data' => 'Drupal\views\EntityViewsData',
  ],
)]
class Event extends ContentEntityBase implements EntityChangedInterface, EntityOwnerInterface {

  use EntityChangedTrait;
  use EntityOwnerTrait;

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type): array {
    $fields = parent::baseFieldDefinitions($entity_type);
    $fields += static::ownerBaseFieldDefinitions($entity_type);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(new TranslatableMarkup('Titre'))
      ->setDescription(new TranslatableMarkup("Le titre de l'événement."))
      ->setRequired(TRUE)
      ->setSetting('max_length', 255)
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => 0,
      ]);

    $fields['description'] = BaseFieldDefinition::create('text_long')
      ->setLabel(new TranslatableMarkup('Description'))
      ->setDescription(new TranslatableMarkup("Description complète de l'événement."))
      ->setDisplayOptions('form', [
        'type' => 'text_textarea',
        'weight' => 5,
      ]);

    $fields['event_date'] = BaseFieldDefinition::create('datetime')
      ->setLabel(new TranslatableMarkup("Date de l'événement"))
      ->setDescription(new TranslatableMarkup("Date et heure de l'événement."))
      ->setRequired(TRUE)
      ->setSetting('datetime_type', 'datetime')
      ->addConstraint('FutureDate')
      ->setDisplayOptions('form', [
        'type' => 'datetime_default',
        'weight' => 10,
      ]);

    $fields['location'] = BaseFieldDefinition::create('string')
      ->setLabel(new TranslatableMarkup('Lieu'))
      ->setDescription(new TranslatableMarkup('Nom de la commune.'))
      ->setRequired(TRUE)
      ->setSetting('max_length', 255)
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => 15,
      ]);

    $fields['capacity'] = BaseFieldDefinition::create('integer')
      ->setLabel(new TranslatableMarkup('Capacité'))
      ->setDescription(new TranslatableMarkup('Nombre maximum de participants.'))
      ->setRequired(TRUE)
      ->setSetting('min', 1)
      ->setDefaultValue(50)
      ->setDisplayOptions('form', [
        'type' => 'number',
        'weight' => 20,
      ]);

    $fields['category'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(new TranslatableMarkup('Catégorie'))
      ->setDescription(new TranslatableMarkup("Catégorie de l'événement."))
      ->setRequired(TRUE)
      ->setSetting('target_type', 'taxonomy_term')
      ->setSetting('handler', 'default:taxonomy_term')
      ->setSetting('handler_settings', [
        'target_bundles' => [
          'event_categories' => 'event_categories',
        ],
        'sort' => [
          'field' => 'name',
          'direction' => 'asc',
        ],
        'auto_create' => FALSE,
      ])
      ->setDisplayOptions('form', [
        'type' => 'options_select',
        'weight' => 25,
      ]);

    $fields['status'] = BaseFieldDefinition::create('boolean')
      ->setLabel(new TranslatableMarkup('Publié'))
      ->setDefaultValue(TRUE)
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => 30,
      ]);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(new TranslatableMarkup('Créé le'));

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(new TranslatableMarkup('Modifié le'));

    return $fields;
  }

  /**
   * Gets the event name.
   */
  public function getName(): string {
    return (string) $this->get('name')->value;
  }

  /**
   * Gets the event description.
   */
  public function getDescription(): ?string {
    return $this->get('description')->value;
  }

  /**
   * Gets the event date.
   */
  public function getEventDate(): ?string {
    return $this->get('event_date')->value;
  }

  /**
   * Gets the location.
   */
  public function getLocation(): string {
    return (string) $this->get('location')->value;
  }

  /**
   * Gets the capacity.
   */
  public function getCapacity(): int {
    return (int) $this->get('capacity')->value;
  }

  /**
   * Gets the category term ID.
   */
  public function getCategoryId(): ?int {
    $target_id = $this->get('category')->target_id;
    return $target_id ? (int) $target_id : NULL;
  }

  /**
   * Gets the referenced category taxonomy term.
   */
  public function getCategory(): ?TermInterface {
    $entity = $this->get('category')->entity;
    return $entity instanceof TermInterface ? $entity : NULL;
  }

  /**
   * Gets the category label.
   */
  public function getCategoryLabel(): string {
    $term = $this->getCategory();
    return $term !== NULL ? $term->label() : '';
  }

  /**
   * Checks if the event is published.
   */
  public function isPublished(): bool {
    return (bool) $this->get('status')->value;
  }

}
