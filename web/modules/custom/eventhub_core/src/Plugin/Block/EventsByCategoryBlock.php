<?php

namespace Drupal\eventhub_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\eventhub_core\Service\EventManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Provides a 'Event Category' block.
 *
 * @Block(
 *  id = "events_by_category_block",
 *  admin_label = @Translation("Events by category block"),
 * )
 */
final class EventsByCategoryBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * Construct.
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    protected EventManagerInterface $eventManager,
    protected EntityTypeManagerInterface $entityTypeManager,
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);

  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('eventhub_core.event_manager'),
      $container->get('entity_type.manager'),
    );
    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $category_id = 1;
    $events = $this->eventManager->getEventsByCategory($category_id, 5);
    $view_builder = $this->entityTypeManager->getViewBuilder('node');
    $events_rendered = $view_builder->viewMultiple($events, 'sidebare');
    return [
      '#theme' => 'eventhub_events',
      '#events' => $events_rendered,
      '#attached' => [
        'library' => [
          'eventhub_core/global',
        ],
      ],
    ];
  }

}
