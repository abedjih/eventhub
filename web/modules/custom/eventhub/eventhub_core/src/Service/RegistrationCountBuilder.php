<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Service;

use Drupal\Core\Security\TrustedCallbackInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Lazy builder for the registration count display.
 */
class RegistrationCountBuilder implements TrustedCallbackInterface {

  use StringTranslationTrait;

  public function __construct(
    private readonly RegistrationManager $registrationManager,
    private readonly EventManager $eventManager,
  ) {}

  /**
   * Builds the registration count render array.
   *
   * @param int $eventId
   *   The event ID.
   *
   * @return array
   *   A render array.
   */
  public function build(int $eventId): array {
    $count = $this->registrationManager->getRegistrationCount($eventId);
    $remaining = $this->eventManager->getRemainingCapacity($eventId);

    return [
      '#markup' => '<span class="registration-count">'
        . $this->t('@count inscrit(s) – @remaining place(s) restante(s)', [
          '@count' => $count,
          '@remaining' => $remaining,
        ])
        . '</span>',
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public static function trustedCallbacks(): array {
    return ['build'];
  }

}
