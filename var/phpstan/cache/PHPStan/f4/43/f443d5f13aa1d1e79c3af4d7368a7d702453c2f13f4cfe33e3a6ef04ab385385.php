<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Discovery/CachedDiscoveryInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-322e620a2b7afd5c844862ecb9e16630f8fd5244ed8f46cd8f55cdc112e2e5a7-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Discovery/CachedDiscoveryInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
    'name' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
    'shortName' => 'CachedDiscoveryInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for discovery components holding a cache of plugin definitions.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 32,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'clearCachedDefinitions' => 
      array (
        'name' => 'clearCachedDefinitions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clears static and persistent plugin definition caches.
 *
 * Don\'t resort to calling \\Drupal::cache()->delete() and friends to make
 * Drupal detect new or updated plugin definitions. Always use this method on
 * the appropriate plugin type\'s plugin manager!
 */',
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
        'aliasName' => NULL,
      ),
      'useCaches' => 
      array (
        'name' => 'useCaches',
        'parameters' => 
        array (
          'use_caches' => 
          array (
            'name' => 'use_caches',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 30,
                'endLine' => 30,
                'startTokenPos' => 42,
                'startFilePos' => 874,
                'endTokenPos' => 42,
                'endFilePos' => 878,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 29,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disable the use of caches.
 *
 * Can be used to ensure that uncached plugin definitions are returned,
 * without invalidating all cached information.
 *
 * This will also remove all local/static caches.
 *
 * @param bool $use_caches
 *   FALSE to not use any caches.
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 3,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
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