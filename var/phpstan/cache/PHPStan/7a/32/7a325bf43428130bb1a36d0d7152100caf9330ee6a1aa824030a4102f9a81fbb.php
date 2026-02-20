<?php declare(strict_types = 1);

// odsl-/var/www/html/web/modules/custom/eventhub_core/src/Service/GeoDataRepository.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_core\Service\GeoDataRepository
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-6bee61e788ccdb56d2ae9f0adf21213938722ad2029fcfeedcd41e36591efa68',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'filename' => '/var/www/html/web/modules/custom/eventhub_core/src/Service/GeoDataRepository.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_core\\Service',
    'name' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
    'shortName' => 'GeoDataRepository',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Repository for geodata custom table operations.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 151,
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
    ),
    'immediateProperties' => 
    array (
      'database' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'name' => 'database',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Database\\Connection',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'time' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'name' => 'time',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Component\\Datetime\\TimeInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Database\\Connection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 5,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'time' => 
          array (
            'name' => 'time',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Component\\Datetime\\TimeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 5,
            'endColumn' => 40,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 15,
        'endLine' => 18,
        'startColumn' => 3,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'aliasName' => NULL,
      ),
      'upsert' => 
      array (
        'name' => 'upsert',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 26,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Inserts or updates a commune record.
 *
 * @param array $data
 *   Associative array with keys: code_commune, nom, population,
 *   departement, region.
 *
 * @return int
 *   The record ID.
 */',
        'startLine' => 30,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'aliasName' => NULL,
      ),
      'insertBatch' => 
      array (
        'name' => 'insertBatch',
        'parameters' => 
        array (
          'records' => 
          array (
            'name' => 'records',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74,
            'endLine' => 74,
            'startColumn' => 31,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Inserts multiple records in a transaction.
 *
 * @param array $records
 *   Array of commune data arrays.
 *
 * @return int
 *   Number of records processed.
 */',
        'startLine' => 74,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'aliasName' => NULL,
      ),
      'findByName' => 
      array (
        'name' => 'findByName',
        'parameters' => 
        array (
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 103,
            'endLine' => 103,
            'startColumn' => 30,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => '10',
              'attributes' => 
              array (
                'startLine' => 103,
                'endLine' => 103,
                'startTokenPos' => 463,
                'startFilePos' => 2508,
                'endTokenPos' => 463,
                'endFilePos' => 2509,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 103,
            'endLine' => 103,
            'startColumn' => 46,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Finds communes by name (for autocomplete).
 *
 * @param string $search
 *   The search string.
 * @param int $limit
 *   Maximum number of results.
 *
 * @return array
 *   Array of commune records.
 */',
        'startLine' => 103,
        'endLine' => 111,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'aliasName' => NULL,
      ),
      'findByDepartement' => 
      array (
        'name' => 'findByDepartement',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 122,
            'endLine' => 122,
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Finds communes by department code.
 *
 * @param string $code
 *   The department code.
 *
 * @return array
 *   Array of commune records.
 */',
        'startLine' => 122,
        'endLine' => 129,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'aliasName' => NULL,
      ),
      'getCount' => 
      array (
        'name' => 'getCount',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the total record count.
 *
 * @return int
 *   The number of records.
 */',
        'startLine' => 137,
        'endLine' => 142,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'aliasName' => NULL,
      ),
      'deleteAll' => 
      array (
        'name' => 'deleteAll',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Deletes all records.
 */',
        'startLine' => 147,
        'endLine' => 149,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
        'aliasName' => NULL,
      ),
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