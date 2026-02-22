<?php

declare(strict_types=1);

namespace Drupal\eventhub_registration\Hook;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Access\AccessResultInterface;
use Drupal\Core\Cache\Cache;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\eventhub_registration\Entity\Registration;

/**
 * Entity hooks for EventHub Registration.
 */
class EntityHooks {

  use StringTranslationTrait;

  public function __construct(
    private readonly MessengerInterface $messenger,
  ) {}

  /**
   * Notifies organizer when a new registration is created.
   */
  #[Hook('entity_insert')]
  public function entityInsert(EntityInterface $entity): void {
    if (!$entity instanceof Registration) {
      return;
    }

    $event = $entity->getEvent();
    if ($event === NULL) {
      return;
    }

    $this->messenger->addStatus(
      $this->t("Inscription de @name à l'événement « @event » confirmée.", [
        '@name' => $entity->getParticipantName(),
        '@event' => $event->getName(),
      ])
    );

    // Invalidate event-related cache tags.
    Cache::invalidateTags(['event:' . $event->id(), 'event_list']);
  }

  /**
   * Controls access to registrations.
   */
  #[Hook('entity_access')]
  public function entityAccess(EntityInterface $entity, string $operation, AccountInterface $account): AccessResultInterface {
    if (!$entity instanceof Registration) {
      return AccessResult::neutral();
    }

    if ($operation !== 'view') {
      return AccessResult::neutral();
    }

    // Admins can always view.
    if ($account->hasPermission('administer eventhub')) {
      return AccessResult::allowed()
        ->cachePerPermissions();
    }

    // Organizers can view registrations for their own events.
    if ($account->hasPermission('view event registrations')) {
      $event = $entity->getEvent();
      if ($event !== NULL && $event->getOwnerId() === (int) $account->id()) {
        return AccessResult::allowed()
          ->cachePerPermissions()
          ->cachePerUser()
          ->addCacheableDependency($entity);
      }
    }

    return AccessResult::neutral();
  }

}
