<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Hook;

use Drupal\Core\Hook\Attribute\Hook;

/**
 * Theme hooks for EventHub Core.
 */
class ThemeHooks {

  /**
   * Implements hook_theme().
   */
  #[Hook('theme')]
  public function theme(): array {
    return [
      'event' => ['render element' => 'elements'],
    ];
  }

}
