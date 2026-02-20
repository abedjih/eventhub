<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Cache/UseCacheBackendTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Cache\UseCacheBackendTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c04e6673fa0e937009202b53feb1f1e3c01e865c71bbb7ff9a3b03407cda3ba1-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Cache/UseCacheBackendTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Cache',
    'name' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
    'shortName' => 'UseCacheBackendTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides methods to use a cache backend while respecting a \'use caches\' flag.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 75,
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
      'cacheBackend' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
        'implementingClassName' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
        'name' => 'cacheBackend',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Cache backend instance.
 *
 * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'useCaches' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
        'implementingClassName' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
        'name' => 'useCaches',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'TRUE',
          'attributes' => 
          array (
            'startLine' => 22,
            'endLine' => 22,
            'startTokenPos' => 30,
            'startFilePos' => 390,
            'endTokenPos' => 30,
            'endFilePos' => 393,
          ),
        ),
        'docComment' => '/**
 * Flag whether caches should be used or skipped.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'cacheGet' => 
      array (
        'name' => 'cacheGet',
        'parameters' => 
        array (
          'cid' => 
          array (
            'name' => 'cid',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 31,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Fetches from the cache backend, respecting the use caches flag.
 *
 * @param string $cid
 *   The cache ID of the data to retrieve.
 *
 * @return object|false
 *   The cache item or FALSE on failure.
 *
 * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::get()
 */',
        'startLine' => 35,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
        'implementingClassName' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
        'currentClassName' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
        'aliasName' => NULL,
      ),
      'cacheSet' => 
      array (
        'name' => 'cacheSet',
        'parameters' => 
        array (
          'cid' => 
          array (
            'name' => 'cid',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 31,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 37,
            'endColumn' => 41,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'expire' => 
          array (
            'name' => 'expire',
            'default' => 
            array (
              'code' => '\\Drupal\\Core\\Cache\\Cache::PERMANENT',
              'attributes' => 
              array (
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 101,
                'startFilePos' => 2291,
                'endTokenPos' => 103,
                'endFilePos' => 2306,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 44,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'tags' => 
          array (
            'name' => 'tags',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 112,
                'startFilePos' => 2323,
                'endTokenPos' => 113,
                'endFilePos' => 2324,
              ),
            ),
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
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 72,
            'endColumn' => 87,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Stores data in the persistent cache, respecting the use caches flag.
 *
 * @param string $cid
 *   The cache ID of the data to store.
 * @param mixed $data
 *   The data to store in the cache.
 *   Some storage engines only allow objects up to a maximum of 1MB in size to
 *   be stored by default. When caching large arrays or similar, take care to
 *   ensure $data does not exceed this size.
 * @param int $expire
 *   One of the following values:
 *   - CacheBackendInterface::CACHE_PERMANENT: Indicates that the item should
 *     not be removed unless it is deleted explicitly.
 *   - A Unix timestamp: Indicates that the item will be considered invalid
 *     after this time, i.e. it will not be returned by get() unless
 *     $allow_invalid has been set to TRUE. When the item has expired, it may
 *     be permanently deleted by the garbage collector at any time.
 * @param array $tags
 *   An array of tags to be stored with the cache item. These should normally
 *   identify objects used to build the cache item, which should trigger
 *   cache invalidation when updated. For example if a cached item represents
 *   a node, both the node ID and the author\'s user ID might be passed in as
 *   tags. For example, [\'node\' => [123], \'user\' => [92]].
 *
 * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::set()
 */',
        'startLine' => 69,
        'endLine' => 73,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
        'implementingClassName' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
        'currentClassName' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
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