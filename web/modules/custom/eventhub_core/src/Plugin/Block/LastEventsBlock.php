<?php

namespace Drupal\eventhub_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\eventhub_core\Service\EventManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Provides a 'Event hub' block.
 *
 * @Block(
 *  id = "last_events_block",
 *  admin_label = @Translation("Last events block"),
 * )
 */
final class LastEventsBlock extends BlockBase implements ContainerFactoryPluginInterface {

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
    $build = [];
    $events = $this->eventManager->getLastEvents(5);
    $view_builder = $this->entityTypeManager->getViewBuilder('node');
    foreach ($events as $event) {
      $build[] = $view_builder->view($event, 'teaser');
    }
    return $build;
  }

  /**
   * {@inheritDoc}
   */
  public function getCacheMaxAge() {
    return 0;
  }

}
