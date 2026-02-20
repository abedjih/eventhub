<?php declare(strict_types = 1);

// odsl-/var/www/html/web/modules/custom/eventhub_core/src/Controller/GeoDataController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_core\Controller\GeoDataController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-47fb7b959ffd8762855f6dfc25f406677ad39ad0d48d9b9326e8c6942a277e21',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_core\\Controller\\GeoDataController',
        'filename' => '/var/www/html/web/modules/custom/eventhub_core/src/Controller/GeoDataController.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_core\\Controller',
    'name' => 'Drupal\\eventhub_core\\Controller\\GeoDataController',
    'shortName' => 'GeoDataController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Controller for geodata autocomplete.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 46,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\DependencyInjection\\AutowireTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'geoDataRepository' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_core\\Controller\\GeoDataController',
        'implementingClassName' => 'Drupal\\eventhub_core\\Controller\\GeoDataController',
        'name' => 'geoDataRepository',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 57,
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
          'geoDataRepository' => 
          array (
            'name' => 'geoDataRepository',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 5,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 20,
        'endLine' => 22,
        'startColumn' => 3,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Controller',
        'declaringClassName' => 'Drupal\\eventhub_core\\Controller\\GeoDataController',
        'implementingClassName' => 'Drupal\\eventhub_core\\Controller\\GeoDataController',
        'currentClassName' => 'Drupal\\eventhub_core\\Controller\\GeoDataController',
        'aliasName' => NULL,
      ),
      'autocomplete' => 
      array (
        'name' => 'autocomplete',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 32,
            'endColumn' => 47,
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
            'name' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Autocomplete handler for commune names.
 */',
        'startLine' => 27,
        'endLine' => 44,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Controller',
        'declaringClassName' => 'Drupal\\eventhub_core\\Controller\\GeoDataController',
        'implementingClassName' => 'Drupal\\eventhub_core\\Controller\\GeoDataController',
        'currentClassName' => 'Drupal\\eventhub_core\\Controller\\GeoDataController',
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