<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Hook;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\user\UserInterface;

/**
 * User-related hooks for EventHub Core.
 */
class UserHooks {

  public function __construct(
    private readonly EntityTypeManagerInterface $entityTypeManager,
  ) {}

  /**
   * Implements hook_user_cancel().
   */
  #[Hook('user_cancel')]
  public function userCancel(array $edit, UserInterface $account, string $method): void {
    $storage = $this->entityTypeManager->getStorage('event');

    switch ($method) {
      case 'user_cancel_block_unpublish':
        $event_ids = $storage->getQuery()
          ->condition('uid', $account->id())
          ->condition('status', 1)
          ->accessCheck(FALSE)
          ->execute();
        /** @var \Drupal\eventhub_core\Entity\Event $event */
        foreach ($storage->loadMultiple($event_ids) as $event) {
          $event->set('status', FALSE)->save();
        }
        break;

      case 'user_cancel_reassign':
        $event_ids = $storage->getQuery()
          ->condition('uid', $account->id())
          ->accessCheck(FALSE)
          ->execute();
        /** @var \Drupal\eventhub_core\Entity\Event $event */
        foreach ($storage->loadMultiple($event_ids) as $event) {
          $event->setOwnerId(0)->save();
        }
        break;
    }
  }

  /**
   * Implements hook_ENTITY_TYPE_predelete() for user entities.
   */
  #[Hook('user_predelete')]
  public function userPredelete(UserInterface $account): void {
    $storage = $this->entityTypeManager->getStorage('event');
    $event_ids = $storage->getQuery()
      ->condition('uid', $account->id())
      ->accessCheck(FALSE)
      ->execute();
    $storage->delete(
      $storage->loadMultiple($event_ids)
    );
  }

}
