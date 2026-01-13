<?php

namespace Drupal\eventhub_core\Hook;

use Drupal\Core\Hook\Attribute\Hook;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Implements hooks relating to cache optimizations.
 */
final class EventHubHook {
  use StringTranslationTrait;

  /**
   * Construct.
   */
  public function __construct(
    #[Autowire(service: 'current_route_match')]
    private RouteMatchInterface $route_match,
  ) {
  }

  /**
   * Implements help().
   */
  #[Hook('help')]
  public function help($route_name) {
    if ($route_name == 'help.page.eventhub_core') {
      return $this->t('Eventhub Core module provides core functionalities for the Eventhub site.');
    }
  }

}
