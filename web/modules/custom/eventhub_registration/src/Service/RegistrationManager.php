<?php

declare(strict_types=1);

namespace Drupal\eventhub_registration\Service;

use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Database\Connection;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Service for managing registrations via custom table.
 */
class RegistrationManager {

  public function __construct(
    private readonly Connection $database,
    private readonly TimeInterface $time,
    private readonly EntityTypeManagerInterface $entityTypeManager,
  ) {}

  /**
   * Gets all active registrations for an event.
   *
   * @param int $eventId
   *   The event ID.
   *
   * @return \stdClass[]
   *   Array of registration records.
   */
  public function getRegistrationsForEvent(int $eventId): array {
    return $this->database->select('eventhub_registration', 'r')
      ->fields('r')
      ->condition('event_id', $eventId)
      ->condition('registration_status', 'cancelled', '<>')
      ->orderBy('created', 'DESC')
      ->execute()
      ->fetchAll();
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
    return (int) $this->database->select('eventhub_registration', 'r')
      ->condition('event_id', $eventId)
      ->condition('registration_status', 'cancelled', '<>')
      ->countQuery()
      ->execute()
      ->fetchField();
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
    $query = $this->database->select('eventhub_registration', 'r')
      ->condition('event_id', $eventId)
      ->condition('email', $email)
      ->condition('registration_status', 'cancelled', '<>');

    if ($excludeRegistrationId !== NULL) {
      $query->condition('id', $excludeRegistrationId, '<>');
    }

    return (int) $query->countQuery()->execute()->fetchField() > 0;
  }

  /**
   * Creates a new registration.
   *
   * @param array $data
   *   Registration data with keys: event_id, participant_name, email,
   *   phone (optional), registration_status, notes (optional).
   *
   * @return int
   *   The new registration ID.
   */
  public function createRegistration(array $data): int {
    $fields = [
      'event_id' => $data['event_id'],
      'participant_name' => $data['participant_name'],
      'email' => $data['email'],
      'registration_status' => $data['registration_status'] ?? 'confirmed',
      'created' => $this->time->getRequestTime(),
    ];

    if (!empty($data['phone'])) {
      $fields['phone'] = $data['phone'];
    }

    if (!empty($data['notes'])) {
      $fields['notes'] = $data['notes'];
    }

    $id = (int) $this->database->insert('eventhub_registration')
      ->fields($fields)
      ->execute();

    // Decrement event capacity.
    $this->decrementEventCapacity((int) $data['event_id']);

    return $id;
  }

  /**
   * Decrements the available capacity of an event by 1.
   */
  private function decrementEventCapacity(int $eventId): void {
    /** @var \Drupal\eventhub_core\Entity\Event|null $event */
    $event = $this->entityTypeManager->getStorage('event')->load($eventId);
    if ($event === NULL) {
      return;
    }

    $capacity = (int) $event->get('field_capacity')->value;
    if ($capacity > 0) {
      $event->set('field_capacity', $capacity - 1);
      $event->save();
    }
  }

  /**
   * Loads a single registration by ID.
   *
   * @param int $registrationId
   *   The registration ID.
   *
   * @return \stdClass|null
   *   The registration record, or NULL if not found.
   */
  public function loadRegistration(int $registrationId): ?\stdClass {
    $record = $this->database->select('eventhub_registration', 'r')
      ->fields('r')
      ->condition('id', $registrationId)
      ->execute()
      ->fetchObject();

    return $record ?: NULL;
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
    $registration = $this->loadRegistration($registrationId);

    if ($registration === NULL || $registration->registration_status === 'cancelled') {
      return FALSE;
    }

    $this->database->update('eventhub_registration')
      ->fields(['registration_status' => 'cancelled'])
      ->condition('id', $registrationId)
      ->execute();

    return TRUE;
  }

  /**
   * Deletes all registrations for an event.
   *
   * @param int $eventId
   *   The event ID.
   */
  public function deleteRegistrationsForEvent(int $eventId): void {
    $this->database->delete('eventhub_registration')
      ->condition('event_id', $eventId)
      ->execute();
  }

}
