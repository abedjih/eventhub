<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Service;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\eventhub_core\Entity\Registration;

/**
 * Service for managing Registration entities.
 */
class RegistrationManager {

  public function __construct(
    private readonly EntityTypeManagerInterface $entityTypeManager,
  ) {}

  /**
   * Gets all registrations for an event.
   *
   * @param int $eventId
   *   The event ID.
   *
   * @return \Drupal\eventhub_core\Entity\Registration[]
   *   Array of Registration entities.
   */
  public function getRegistrationsForEvent(int $eventId): array {
    $ids = $this->entityTypeManager
      ->getStorage('registration')
      ->getQuery()
      ->accessCheck(FALSE)
      ->condition('event', $eventId)
      ->condition('registration_status', 'cancelled', '<>')
      ->sort('created', 'DESC')
      ->execute();

    if (empty($ids)) {
      return [];
    }

    /** @var \Drupal\eventhub_core\Entity\Registration[] $registrations */
    $registrations = $this->entityTypeManager
      ->getStorage('registration')
      ->loadMultiple($ids);

    return $registrations;
  }

  /**
   * Gets the count of active registrations for an event.
   *
   * @param int $eventId
   *   The event ID.
   *
   * @return int
   *   The number of active registrations.
   */
  public function getRegistrationCount(int $eventId): int {
    return (int) $this->entityTypeManager
      ->getStorage('registration')
      ->getQuery()
      ->accessCheck(FALSE)
      ->condition('event', $eventId)
      ->condition('registration_status', 'cancelled', '<>')
      ->count()
      ->execute();
  }

  /**
   * Checks if an email is already registered for an event.
   *
   * @param int $eventId
   *   The event ID.
   * @param string $email
   *   The email address.
   * @param int|null $excludeRegistrationId
   *   Optional registration ID to exclude (for updates).
   *
   * @return bool
   *   TRUE if already registered.
   */
  public function isAlreadyRegistered(int $eventId, string $email, ?int $excludeRegistrationId = NULL): bool {
    $query = $this->entityTypeManager
      ->getStorage('registration')
      ->getQuery()
      ->accessCheck(FALSE)
      ->condition('event', $eventId)
      ->condition('email', $email)
      ->condition('registration_status', 'cancelled', '<>');

    if ($excludeRegistrationId !== NULL) {
      $query->condition('id', $excludeRegistrationId, '<>');
    }

    return (int) $query->count()->execute() > 0;
  }

  /**
   * Cancels a registration.
   *
   * @param int $registrationId
   *   The registration ID.
   *
   * @return bool
   *   TRUE if successfully cancelled.
   */
  public function cancelRegistration(int $registrationId): bool {
    /** @var \Drupal\eventhub_core\Entity\Registration|null $registration */
    $registration = $this->entityTypeManager
      ->getStorage('registration')
      ->load($registrationId);

    if ($registration === NULL || $registration->isCancelled()) {
      return FALSE;
    }

    $registration->set('registration_status', 'cancelled');
    $registration->save();

    return TRUE;
  }

  /**
   * Deletes all registrations for an event.
   *
   * @param int $eventId
   *   The event ID.
   */
  public function deleteRegistrationsForEvent(int $eventId): void {
    $ids = $this->entityTypeManager
      ->getStorage('registration')
      ->getQuery()
      ->accessCheck(FALSE)
      ->condition('event', $eventId)
      ->execute();

    if (!empty($ids)) {
      $registrations = $this->entityTypeManager
        ->getStorage('registration')
        ->loadMultiple($ids);
      $this->entityTypeManager
        ->getStorage('registration')
        ->delete($registrations);
    }
  }

}
