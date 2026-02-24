<?php

declare(strict_types=1);

namespace Drupal\eventhub_entity_example\Hook;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Render\Element;
use Drupal\user\UserInterface;

/**
 * Entity and theme hooks for eventhub_entity_example.
 */
class EntityHooks {

  public function __construct(
    private readonly EntityTypeManagerInterface $entityTypeManager,
  ) {}

  /**
   * Implements hook_theme().
   */
  #[Hook('theme')]
  public function theme(): array {
    return [
      'event_example' => ['render element' => 'elements'],
    ];
  }

  /**
   * Prepares variables for event_example templates.
   *
   * Default template: event-example.html.twig.
   */
  #[Hook('preprocess_event_example')]
  public function preprocessEventExample(array &$variables): void {
    $variables['view_mode'] = $variables['elements']['#view_mode'];
    foreach (Element::children($variables['elements']) as $key) {
      $variables['content'][$key] = $variables['elements'][$key];
    }
  }

  /**
   * Implements hook_user_cancel().
   */
  #[Hook('user_cancel')]
  public function userCancel(array $edit, UserInterface $account, string $method): void {
    $storage = $this->entityTypeManager->getStorage('event_example');

    switch ($method) {
      case 'user_cancel_block_unpublish':
        $event_example_ids = $storage->getQuery()
          ->condition('uid', $account->id())
          ->condition('status', 1)
          ->accessCheck(FALSE)
          ->execute();
        /** @var \Drupal\eventhub_entity_example\Entity\EventExample $event_example */
        foreach ($storage->loadMultiple($event_example_ids) as $event_example) {
          $event_example->set('status', FALSE)->save();
        }
        break;

      case 'user_cancel_reassign':
        $event_example_ids = $storage->getQuery()
          ->condition('uid', $account->id())
          ->accessCheck(FALSE)
          ->execute();
        /** @var \Drupal\eventhub_entity_example\Entity\EventExample $event_example */
        foreach ($storage->loadMultiple($event_example_ids) as $event_example) {
          $event_example->setOwnerId(0)->save();
        }
        break;
    }
  }

  /**
   * Implements hook_ENTITY_TYPE_predelete() for user entities.
   */
  #[Hook('user_predelete')]
  public function userPredelete(UserInterface $account): void {
    $storage = $this->entityTypeManager->getStorage('event_example');
    $event_example_ids = $storage->getQuery()
      ->condition('uid', $account->id())
      ->accessCheck(FALSE)
      ->execute();
    $storage->delete(
      $storage->loadMultiple($event_example_ids),
    );
  }

}
