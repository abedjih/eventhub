<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Entity;

use Drupal\Core\Entity\Attribute\ContentEntityType;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\ContentEntityDeleteForm;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\Form\DeleteMultipleForm;
use Drupal\Core\Entity\Routing\AdminHtmlRouteProvider;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\eventhub_core\EventInterface;
use Drupal\eventhub_core\EventListBuilder;
use Drupal\eventhub_core\Form\EventForm;
use Drupal\user\EntityOwnerTrait;
use Drupal\views\EntityViewsData;

/**
 * Defines the event entity class.
 */
#[ContentEntityType(
  id: 'event',
  label: new TranslatableMarkup('Event'),
  label_collection: new TranslatableMarkup('Events'),
  label_singular: new TranslatableMarkup('event'),
  label_plural: new TranslatableMarkup('events'),
  entity_keys: [
    'id' => 'id',
    'label' => 'label',
    'owner' => 'uid',
    'published' => 'status',
    'uuid' => 'uuid',
  ],
  handlers: [
    'list_builder' => EventListBuilder::class,
    'views_data' => EntityViewsData::class,
    'form' => [
      'add' => EventForm::class,
      'edit' => EventForm::class,
      'delete' => ContentEntityDeleteForm::class,
      'delete-multiple-confirm' => DeleteMultipleForm::class,
    ],
    'route_provider' => [
      'html' => AdminHtmlRouteProvider::class,
    ],
  ],
  links: [
    'collection' => '/admin/content/event',
    'add-form' => '/event/add',
    'canonical' => '/event/{event}',
    'edit-form' => '/event/{event}/edit',
    'delete-form' => '/event/{event}/delete',
    'delete-multiple-form' => '/admin/content/event/delete-multiple',
  ],
  admin_permission: 'administer event',
  base_table: 'event',
  label_count: [
    'singular' => '@count events',
    'plural' => '@count events',
  ],
  field_ui_base_route: 'entity.event.settings',
)]
class Event extends ContentEntityBase implements EventInterface {

  use EntityChangedTrait;
  use EntityOwnerTrait;

  /**
   * {@inheritdoc}
   */
  public function preSave(EntityStorageInterface $storage): void {
    parent::preSave($storage);
    if (!$this->getOwnerId()) {
      $this->setOwnerId(0);
    }
  }

  /**
   * Gets the event name (label).
   */
  public function getName(): string {
    return (string) $this->label();
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
    return $this->get('field_date')->value;
  }

  /**
   * Gets the event location.
   */
  public function getLocation(): ?string {
    return $this->get('field_location')->value;
  }

  /**
   * Gets the event capacity.
   */
  public function getCapacity(): int {
    return (int) $this->get('field_capacity')->value;
  }

  /**
   * Gets the category term ID.
   */
  public function getCategoryId(): ?int {
    /** @var string|null $value */
    $value = $this->get('field_category')->target_id;
    return $value !== NULL ? (int) $value : NULL;
  }

  /**
   * Gets the category label.
   */
  public function getCategoryLabel(): ?string {
    /** @var \Drupal\Core\Entity\EntityInterface|null $term */
    $term = $this->get('field_category')->entity;
    return $term !== NULL ? $term->label() : NULL;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type): array {

    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['label'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Label'))
      ->setRequired(TRUE)
      ->setSetting('max_length', 255)
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['status'] = BaseFieldDefinition::create('boolean')
      ->setLabel(t('Status'))
      ->setDefaultValue(TRUE)
      ->setSetting('on_label', 'Enabled')
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'settings' => [
          'display_label' => FALSE,
        ],
        'weight' => 0,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'type' => 'boolean',
        'label' => 'above',
        'weight' => 0,
        'settings' => [
          'format' => 'enabled-disabled',
        ],
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['description'] = BaseFieldDefinition::create('text_long')
      ->setLabel(t('Description'))
      ->setDisplayOptions('form', [
        'type' => 'text_textarea',
        'weight' => 10,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'type' => 'text_default',
        'label' => 'above',
        'weight' => 10,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['uid'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(t('Author'))
      ->setSetting('target_type', 'user')
      ->setDefaultValueCallback(self::class . '::getDefaultEntityOwner')
      ->setDisplayOptions('form', [
        'type' => 'entity_reference_autocomplete',
        'settings' => [
          'match_operator' => 'CONTAINS',
          'size' => 60,
          'placeholder' => '',
        ],
        'weight' => 15,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'author',
        'weight' => 15,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Authored on'))
      ->setDescription(t('The time that the event was created.'))
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'timestamp',
        'weight' => 20,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('form', [
        'type' => 'datetime_timestamp',
        'weight' => 20,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the event was last edited.'));

    return $fields;
  }

}
