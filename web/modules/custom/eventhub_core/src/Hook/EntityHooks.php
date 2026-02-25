<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Hook;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\eventhub_core\Entity\Event;
use Drupal\eventhub_registration\Service\RegistrationManager;

/**
 * Entity hooks for EventHub.
 */
class EntityHooks {

  use StringTranslationTrait;

  public function __construct(
    private readonly RegistrationManager $registrationManager,
    private readonly MessengerInterface $messenger,
  ) {}

  /**
   * Validates capacity on event presave.
   */
  #[Hook('entity_presave')]
  public function entityPresave(EntityInterface $entity): void {
    if (!$entity instanceof Event) {
      return;
    }

    // Validate that capacity is not reduced below current registrations.
    if (!$entity->isNew()) {
      $capacity = $entity->getCapacity();
      if ($capacity > 0) {
        $count = $this->registrationManager->getRegistrationCount((int) $entity->id());
        if ($capacity < $count) {
          $entity->set('field_capacity', $count);
          $this->messenger->addWarning(
            $this->t("La capacité a été ajustée à @count (nombre d'inscrits actuel).", [
              '@count' => $count,
            ])
          );
        }
      }
    }
  }

  /**
   * Invalidates cache when an event is updated.
   */
  #[Hook('entity_update')]
  public function entityUpdate(EntityInterface $entity): void {
    if (!$entity instanceof Event) {
      return;
    }

    Cache::invalidateTags([
      'event:' . $entity->id(),
      'event_list',
    ]);
  }

  /**
   * Deletes related registrations when an event is deleted.
   */
  #[Hook('entity_delete')]
  public function entityDelete(EntityInterface $entity): void {
    if (!$entity instanceof Event) {
      return;
    }

    $this->registrationManager->deleteRegistrationsForEvent((int) $entity->id());

    Cache::invalidateTags(['event_list']);
  }

  /**
   * Adds geodata autocomplete to the location field on event add form.
   */
  #[Hook('form_event_add_form_alter')]
  public function eventAddFormAlter(array &$form, FormStateInterface $form_state): void {
    $this->addLocationAutocomplete($form);
  }

  /**
   * Adds geodata autocomplete to the location field on event edit form.
   */
  #[Hook('form_event_edit_form_alter')]
  public function eventEditFormAlter(array &$form, FormStateInterface $form_state): void {
    $this->addLocationAutocomplete($form);
  }

  /**
   * Attaches autocomplete route to the location field.
   */
  private function addLocationAutocomplete(array &$form): void {
    if (isset($form['field_location']['widget'][0]['value'])) {
      $form['field_location']['widget'][0]['value']['#autocomplete_route_name'] = 'eventhub.geodata_autocomplete';
    }
  }

}
