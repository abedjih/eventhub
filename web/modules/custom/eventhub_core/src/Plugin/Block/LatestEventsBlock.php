<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Url;
use Drupal\eventhub_core\Service\EventManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a block listing the 5 latest events.
 */
#[Block(
  id: 'eventhub_latest_events',
  admin_label: new TranslatableMarkup('5 derniers événements'),
  category: new TranslatableMarkup('EventHub'),
)]
class LatestEventsBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The cache backend.
   */
  private readonly CacheBackendInterface $cache;

  /**
   * The event manager service.
   */
  private readonly EventManager $eventManager;

  /**
   * {@inheritdoc}
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    CacheBackendInterface $cache,
    EventManager $eventManager,
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->cache = $cache;
    $this->eventManager = $eventManager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition): static {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('cache.data'),
      $container->get(EventManager::class),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $cached = $this->cache->get('eventhub:latest_events');

    if ($cached) {
      $events = $cached->data;
    }
    else {
      $events = $this->eventManager->getLatestEvents(5);

      $this->cache->set(
        'eventhub:latest_events',
        $events,
        CacheBackendInterface::CACHE_PERMANENT,
        ['event_list'],
      );
    }

    $rows = [];
    /** @var \Drupal\eventhub_core\Entity\Event $event */
    foreach ($events as $event) {
      $rows[] = [
        [
          'data' => [
            '#type' => 'link',
            '#title' => $event->label(),
            '#url' => Url::fromRoute('entity.event.canonical', ['event' => $event->id()]),
          ],
        ],
        $event->getEventDate() ?? '',
        $event->getLocation() ?? '',
      ];
    }

    return [
      '#theme' => 'table',
      '#header' => [
        $this->t('Événement'),
        $this->t('Date'),
        $this->t('Lieu'),
      ],
      '#rows' => $rows,
      '#empty' => $this->t('Aucun événement.'),
      '#cache' => [
        'tags' => ['event_list'],
        'max-age' => CacheBackendInterface::CACHE_PERMANENT,
      ],
    ];
  }

}
