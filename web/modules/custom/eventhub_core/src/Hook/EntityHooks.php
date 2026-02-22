<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Hook;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Component\Utility\Html;
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
   * Generates a slug for events and validates capacity.
   */
  #[Hook('entity_presave')]
  public function entityPresave(EntityInterface $entity): void {
    if (!$entity instanceof Event) {
      return;
    }

    // Generate a clean slug from the title if this is a new event.
    if ($entity->isNew()) {
      // Generate a clean slug from the title (could be used for URL alias).
      Html::cleanCssIdentifier(mb_strtolower($entity->getName()));
    }

    // Validate that capacity is not reduced below current registrations.
    if (!$entity->isNew()) {
      $count = $this->registrationManager->getRegistrationCount((int) $entity->id());
      if ($entity->getCapacity() < $count) {
        $entity->set('capacity', $count);
        $this->messenger->addWarning(
          $this->t("La capacité a été ajustée à @count (nombre d'inscrits actuel).", [
            '@count' => $count,
          ])
        );
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

}
