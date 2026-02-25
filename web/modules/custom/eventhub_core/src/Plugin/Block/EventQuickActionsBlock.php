<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Url;

/**
 * Block showing a CSRF-protected link example.
 */
#[Block(
  id: 'eventhub_quick_actions',
  admin_label: new TranslatableMarkup('Actions rapides événements'),
  category: new TranslatableMarkup('EventHub'),
)]
class EventQuickActionsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    // Url::fromRoute() ajoute automatiquement ?token=xxx
    // quand la route a _csrf_token: 'TRUE'.
    return [
      '#type' => 'link',
      '#title' => $this->t('Toggler le statut du premier événement'),
      '#url' => Url::fromRoute('eventhub.event.toggle_status', [
        'event' => 1,
      ]),
      '#attributes' => ['class' => ['btn', 'btn-outline-warning']],
    ];
  }

}
