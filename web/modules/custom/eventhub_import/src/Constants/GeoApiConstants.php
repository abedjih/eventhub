<?php

declare(strict_types=1);

namespace Drupal\eventhub_import\Constants;

/**
 * Constants for the geo.api.gouv.fr API integration.
 */
final class GeoApiConstants {

  /**
   * Base URL of the geo API.
   */
  const API_BASE = 'https://geo.api.gouv.fr';

  /**
   * API endpoint to list all departments.
   */
  const DEPARTMENTS_ENDPOINT = '/departements';

  /**
   * API endpoint pattern to list communes of a department.
   *
   * Use sprintf() with the department code.
   */
  const COMMUNES_ENDPOINT = '/departements/%s/communes';

  /**
   * Fields requested when fetching communes.
   */
  const COMMUNES_FIELDS = 'nom,code,population,codeDepartement,codeRegion';

  /**
   * HTTP request timeout in seconds.
   */
  const REQUEST_TIMEOUT = 30;

  /**
   * Queue ID for the geodata import.
   */
  const QUEUE_NAME = 'eventhub_geodata_import';

}
