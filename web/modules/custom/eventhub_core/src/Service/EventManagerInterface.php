<?php

namespace Drupal\eventhub_core\Service;

/**
 * Interface for the Event Manager service.
 */
interface EventManagerInterface {

  /**
   * Get the last events.
   *
   * @param int $limit
   *   Maximum number of events to return.
   *
   * @return \Drupal\node\NodeInterface[]
   *   Array of event nodes.
   */
  public function getLastEvents(int $limit = 5): array;

  /**
   * Get events by category.
   *
   * @param int $category_id
   *   The category term ID.
   * @param int $limit
   *   Maximum number of events to return.
   *
   * @return \Drupal\node\NodeInterface[]
   *   Array of event nodes.
   */
  public function getEventsByCategory(int $category_id, int $limit = 5): array;

}
