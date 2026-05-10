<?php

declare(strict_types=1);

namespace Drupal\eventhub_registration\Hook;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
use Drupal\eventhub_core\Entity\Event;
use Drupal\eventhub_registration\Service\RegistrationManager;

/**
 * Entity hooks for EventHub Registration.
 */
class EntityHooks {

  use StringTranslationTrait;

  public function __construct(
    private readonly RegistrationManager $registrationManager,
  ) {}

  /**
   * Deletes registrations when an event is deleted.
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
   * Adds registration link on event view page.
   */
  #[Hook('entity_view')]
  public function entityView(array &$build, EntityInterface $entity, EntityViewDisplayInterface $display, string $view_mode): void {
    if (!$entity instanceof Event) {
      return;
    }

    $build['register_link'] = [
      '#type' => 'link',
      '#title' => $this->t("S'inscrire à cet événement"),
      '#url' => Url::fromRoute('eventhub.registration_create', [
        'event' => $entity->id(),
      ]),
      '#attributes' => ['class' => ['button', 'button--primary']],
      '#weight' => 100,
    ];
  }

}
