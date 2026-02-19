<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Hook;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Access\AccessResultInterface;
use Drupal\Core\Cache\Cache;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Component\Utility\Html;
use Drupal\eventhub_core\Entity\Event;
use Drupal\eventhub_core\Entity\Registration;
use Drupal\Core\Session\AccountInterface;
use Drupal\eventhub_core\Service\RegistrationManager;

/**
 * Entity hooks for EventHub.
 */
class EntityHooks {

  use StringTranslationTrait;

  public function __construct(
    private readonly RegistrationManager $registrationManager,
    private readonly EntityTypeManagerInterface $entityTypeManager,
    private readonly MessengerInterface $messenger,
    private readonly AccountProxyInterface $currentUser,
  ) {}

  /**
   * Generates a slug for events and validates capacity.
   */
  #[Hook('entity_presave')]
  public function entityPresave(EntityInterface $entity): void {
    if (!$entity instanceof Event) {
      return;
    }

    // Generate a clean slug from the title if this is a new event.
    if ($entity->isNew()) {
      $name = $entity->getName();
      $slug = Html::cleanCssIdentifier(mb_strtolower($name));
      // Store slug as a computed value (could be used for URL alias).
    }

    // Validate that capacity is not reduced below current registrations.
    if (!$entity->isNew()) {
      $count = $this->registrationManager->getRegistrationCount((int) $entity->id());
      if ($entity->getCapacity() < $count) {
        $entity->set('capacity', $count);
        $this->messenger->addWarning(
          $this->t('La capacité a été ajustée à @count (nombre d\'inscrits actuel).', [
            '@count' => $count,
          ])
        );
      }
    }
  }

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
      $this->t('Inscription de @name à l\'événement « @event » confirmée.', [
        '@name' => $entity->getParticipantName(),
        '@event' => $event->getName(),
      ])
    );

    // Invalidate event-related cache tags.
    Cache::invalidateTags(['event:' . $event->id(), 'event_list']);
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
