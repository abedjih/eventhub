<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\eventhub_core\Service\UpcomingEventsBuilder;

/**
 * Provides a block listing upcoming events via lazy builder.
 */
#[Block(
  id: 'eventhub_upcoming_events',
  admin_label: new TranslatableMarkup('Événements à venir'),
  category: new TranslatableMarkup('EventHub'),
)]
class UpcomingEventsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    return [
      '#lazy_builder' => [
        UpcomingEventsBuilder::class . ':build',
        [],
      ],
      '#create_placeholder' => TRUE,
    ];
  }

}
