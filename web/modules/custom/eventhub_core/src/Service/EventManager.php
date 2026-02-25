<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Service;

use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\eventhub_registration\Service\RegistrationManager;

/**
 * Service for managing Event entities.
 */
class EventManager {

  public function __construct(
    private readonly EntityTypeManagerInterface $entityTypeManager,
    private readonly RegistrationManager $registrationManager,
  ) {}

  /**
   * Gets upcoming published events.
   *
   * @param int $limit
   *   Maximum number of events to return.
   *
   * @return \Drupal\eventhub_core\Entity\Event[]
   *   Array of Event entities.
   */
  public function getUpcomingEvents(int $limit = 10): array {
    $now = new DrupalDateTime('now', 'UTC');

    $ids = $this->entityTypeManager
      ->getStorage('event')
      ->getQuery()
      ->accessCheck(TRUE)
      ->condition('status', 1)
      ->condition('field_date', $now->format('Y-m-d\TH:i:s'), '>=')
      ->sort('field_date', 'ASC')
      ->range(0, $limit)
      ->execute();

    if (empty($ids)) {
      return [];
    }

    /** @var \Drupal\eventhub_core\Entity\Event[] $events */
    $events = $this->entityTypeManager
      ->getStorage('event')
      ->loadMultiple($ids);

    return $events;
  }

  /**
   * Gets events by category.
   *
   * @param int $termId
   *   The taxonomy term ID.
   *
   * @return \Drupal\eventhub_core\Entity\Event[]
   *   Array of Event entities.
   */
  public function getEventsByCategory(int $termId): array {
    $ids = $this->entityTypeManager
      ->getStorage('event')
      ->getQuery()
      ->accessCheck(TRUE)
      ->condition('status', 1)
      ->condition('field_category', $termId)
      ->sort('field_date', 'ASC')
      ->execute();

    if (empty($ids)) {
      return [];
    }

    /** @var \Drupal\eventhub_core\Entity\Event[] $events */
    $events = $this->entityTypeManager
      ->getStorage('event')
      ->loadMultiple($ids);

    return $events;
  }

  /**
   * Gets events by organizer.
   *
   * @param int $uid
   *   The user ID.
   *
   * @return \Drupal\eventhub_core\Entity\Event[]
   *   Array of Event entities.
   */
  public function getEventsByOrganizer(int $uid): array {
    $ids = $this->entityTypeManager
      ->getStorage('event')
      ->getQuery()
      ->accessCheck(TRUE)
      ->condition('uid', $uid)
      ->sort('field_date', 'DESC')
      ->execute();

    if (empty($ids)) {
      return [];
    }

    /** @var \Drupal\eventhub_core\Entity\Event[] $events */
    $events = $this->entityTypeManager
      ->getStorage('event')
      ->loadMultiple($ids);

    return $events;
  }

  /**
   * Gets the remaining capacity for an event.
   *
   * @param int $eventId
   *   The event ID.
   *
   * @return int
   *   The number of remaining spots.
   */
  public function getRemainingCapacity(int $eventId): int {
    /** @var \Drupal\eventhub_core\Entity\Event|null $event */
    $event = $this->entityTypeManager
      ->getStorage('event')
      ->load($eventId);

    if ($event === NULL) {
      return 0;
    }

    $capacity = $event->getCapacity();
    if ($capacity <= 0) {
      return 0;
    }

    $count = $this->registrationManager->getRegistrationCount($eventId);
    $remaining = $capacity - $count;

    return max(0, $remaining);
  }

  /**
   * Checks if an event is full.
   *
   * @param int $eventId
   *   The event ID.
   *
   * @return bool
   *   TRUE if the event is full.
   */
  public function isEventFull(int $eventId): bool {
    return $this->getRemainingCapacity($eventId) <= 0;
  }

  /**
   * Gets the total number of events.
   */
  public function getTotalEventCount(): int {
    return (int) $this->entityTypeManager
      ->getStorage('event')
      ->getQuery()
      ->accessCheck(FALSE)
      ->condition('status', 1)
      ->count()
      ->execute();
  }

}
