<?php

namespace Drupal\eventhub_core\Service;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\node\NodeInterface;

/**
 * Service for managing events.
 */
class EventManager implements EventManagerInterface {

  /**
   * Construct.
   */
  public function __construct(
    protected EntityTypeManagerInterface $entityTypeManager,
  ) {}

  /**
   * {@inheritdoc}
   */
  public function getLastEvents(int $limit = 5): array {
    $storage = $this->entityTypeManager->getStorage('node');
    $query = $storage->getQuery()
      ->condition('type', 'event')
      ->condition('status', NodeInterface::PUBLISHED)
      ->sort('field_event_date', 'DESC')
      ->accessCheck(TRUE)
      ->range(0, $limit);

    $nids = $query->execute();
    return $storage->loadMultiple($nids);
  }

  /**
   * {@inheritdoc}
   */
  public function getEventsByCategory(int $category_id, int $limit = 5): array {
    $storage = $this->entityTypeManager->getStorage('node');
    $query = $storage->getQuery()
      ->condition('type', 'event')
      ->condition('field_event_category', $category_id)
      ->condition('status', NodeInterface::PUBLISHED)
      ->sort('field_event_date', 'DESC')
      ->accessCheck(TRUE)
      ->range(0, $limit);

    $nids = $query->execute();
    return $storage->loadMultiple($nids);
  }

}
