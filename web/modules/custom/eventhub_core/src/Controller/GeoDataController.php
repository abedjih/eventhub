<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\eventhub_core\Service\GeoDataRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for geodata autocomplete.
 */
class GeoDataController extends ControllerBase {

  use AutowireTrait;

  public function __construct(
    private readonly GeoDataRepository $geoDataRepository,
  ) {}

  /**
   * Autocomplete handler for commune names.
   */
  public function autocomplete(Request $request): JsonResponse {
    $input = $request->query->get('q', '');
    $results = [];

    if (mb_strlen($input) >= 2) {
      $communes = $this->geoDataRepository->findByName($input, 10);

      foreach ($communes as $commune) {
        $label = $commune->nom . ' (' . $commune->departement . ')';
        $results[] = [
          'value' => $commune->nom,
          'label' => $label,
        ];
      }
    }

    return new JsonResponse($results);
  }

}
