<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\eventhub_core\Service\EventManagerInterface;

/**
 * Controller for Events pages.
 */
class EventsController extends ControllerBase {


  /**
   * Constructs an EventsController object.
   */
  public function __construct(
    protected EventManagerInterface $eventManager,
    EntityTypeManagerInterface $entityTypeManager,
  ) {
    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * Returns a Hello World page.
   */
  public function page(): array {
    $events = $this->eventManager->getLastEvents(10);
    $view_builder = $this->entityTypeManager->getViewBuilder('node');
    $events_rendered = $view_builder->viewMultiple($events, 'teaser');
    return $events_rendered;
  }

}
