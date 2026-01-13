<?php

namespace Drupal\eventhub_core\Hook;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Database\Connection;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Utility\Error;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Psr\Log\LoggerInterface;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
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



