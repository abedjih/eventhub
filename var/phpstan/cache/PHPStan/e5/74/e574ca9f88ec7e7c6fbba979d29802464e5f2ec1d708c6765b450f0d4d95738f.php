<?php declare(strict_types = 1);

// odsl-/home/ben/projects/training/eventhub/web/modules/custom/eventhub_import/src/Constants/GeoApiConstants.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_import\Constants\GeoApiConstants
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.29-c41ca7fbd49fde89abeb0e5d43fb233082c244dbee307c490a140c8f32b67bfd',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'filename' => '/home/ben/projects/training/eventhub/web/modules/custom/eventhub_import/src/Constants/GeoApiConstants.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_import\\Constants',
    'name' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
    'shortName' => 'GeoApiConstants',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * Constants for the geo.api.gouv.fr API integration.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 44,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'API_BASE' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'implementingClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'name' => 'API_BASE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'https://geo.api.gouv.fr\'',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 33,
            'startFilePos' => 232,
            'endTokenPos' => 33,
            'endFilePos' => 256,
          ),
        ),
        'docComment' => '/**
 * Base URL of the geo API.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 3,
        'endColumn' => 45,
      ),
      'DEPARTMENTS_ENDPOINT' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'implementingClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'name' => 'DEPARTMENTS_ENDPOINT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'/departements\'',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 20,
            'startTokenPos' => 44,
            'startFilePos' => 346,
            'endTokenPos' => 44,
            'endFilePos' => 360,
          ),
        ),
        'docComment' => '/**
 * API endpoint to list all departments.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 3,
        'endColumn' => 47,
      ),
      'COMMUNES_ENDPOINT' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'implementingClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'name' => 'COMMUNES_ENDPOINT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'/departements/%s/communes\'',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 27,
            'startTokenPos' => 55,
            'startFilePos' => 514,
            'endTokenPos' => 55,
            'endFilePos' => 540,
          ),
        ),
        'docComment' => '/**
 * API endpoint pattern to list communes of a department.
 *
 * Use sprintf() with the department code.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 3,
        'endColumn' => 56,
      ),
      'COMMUNES_FIELDS' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'implementingClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'name' => 'COMMUNES_FIELDS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'nom,code,population,codeDepartement,codeRegion\'',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 66,
            'startFilePos' => 628,
            'endTokenPos' => 66,
            'endFilePos' => 675,
          ),
        ),
        'docComment' => '/**
 * Fields requested when fetching communes.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 75,
      ),
      'REQUEST_TIMEOUT' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'implementingClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'name' => 'REQUEST_TIMEOUT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '30',
          'attributes' => 
          array (
            'startLine' => 37,
            'endLine' => 37,
            'startTokenPos' => 77,
            'startFilePos' => 755,
            'endTokenPos' => 77,
            'endFilePos' => 756,
          ),
        ),
        'docComment' => '/**
 * HTTP request timeout in seconds.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 3,
        'endColumn' => 29,
      ),
      'QUEUE_NAME' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'implementingClassName' => 'Drupal\\eventhub_import\\Constants\\GeoApiConstants',
        'name' => 'QUEUE_NAME',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'eventhub_geodata_import\'',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 88,
            'startFilePos' => 831,
            'endTokenPos' => 88,
            'endFilePos' => 855,
          ),
        ),
        'docComment' => '/**
 * Queue ID for the geodata import.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 47,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));