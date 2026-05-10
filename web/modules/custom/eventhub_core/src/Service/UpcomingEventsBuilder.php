<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Service;

use Drupal\Core\Security\TrustedCallbackInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;

/**
 * Lazy builder for the upcoming events list.
 */
class UpcomingEventsBuilder implements TrustedCallbackInterface {

  use StringTranslationTrait;

  public function __construct(
    private readonly EventManager $eventManager,
  ) {}

  /**
   * Builds the upcoming events render array.
   *
   * @return array
   *   A render array.
   */
  public function build(): array {
    $events = $this->eventManager->getUpcomingEvents(5);

    $items = [];
    foreach ($events as $event) {
      $items[] = [
        '#type' => 'link',
        '#title' => $event->label() . ' – ' . $event->getEventDate(),
        '#url' => Url::fromRoute('entity.event.canonical', [
          'event' => $event->id(),
        ]),
      ];
    }

    return [
      '#theme' => 'item_list',
      '#items' => $items,
      '#empty' => $this->t('Aucun événement à venir.'),
      '#cache' => ['max-age' => 0],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public static function trustedCallbacks(): array {
    return ['build'];
  }

}
