<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Cache/Cache.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Cache\Cache
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-0c2fe5df24b9d678e672b04fe035463e06cfa193fd19306a3f78b6df60031643-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Cache\\Cache',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Cache/Cache.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Cache',
    'name' => 'Drupal\\Core\\Cache\\Cache',
    'shortName' => 'Cache',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Helper methods for cache.
 *
 * @ingroup cache
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 143,
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
      'PERMANENT' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Cache\\Cache',
        'implementingClassName' => 'Drupal\\Core\\Cache\\Cache',
        'name' => 'PERMANENT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\\Drupal\\Core\\Cache\\CacheBackendInterface::CACHE_PERMANENT',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 28,
            'startFilePos' => 265,
            'endTokenPos' => 30,
            'endFilePos' => 302,
          ),
        ),
        'docComment' => '/**
 * Indicates that the item should never be removed unless explicitly deleted.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 3,
        'endColumn' => 59,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'mergeContexts' => 
      array (
        'name' => 'mergeContexts',
        'parameters' => 
        array (
          'cache_contexts' => 
          array (
            'name' => 'cache_contexts',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 40,
            'endColumn' => 63,
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
 * Merges lists of cache contexts and removes duplicates.
 *
 * @param list<string> ...$cache_contexts
 *   Cache contexts to merge.
 *
 * @return list<string>
 *   The merged list of cache contexts.
 */',
        'startLine' => 28,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\Cache',
        'implementingClassName' => 'Drupal\\Core\\Cache\\Cache',
        'currentClassName' => 'Drupal\\Core\\Cache\\Cache',
        'aliasName' => NULL,
      ),
      'mergeTags' => 
      array (
        'name' => 'mergeTags',
        'parameters' => 
        array (
          'cache_tags' => 
          array (
            'name' => 'cache_tags',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 36,
            'endColumn' => 55,
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
 * Merges lists of cache tags and removes duplicates.
 *
 * The cache tags list is returned in a format that is valid for
 * \\Drupal\\Core\\Cache\\CacheBackendInterface::set().
 *
 * When caching elements, it is necessary to collect all cache tags into a
 * single list, from both the element itself and all child elements. This
 * allows items to be invalidated based on all tags attached to the content
 * they\'re constituted from.
 *
 * @param list<string> ...$cache_tags
 *   Cache tags to merge.
 *
 * @return list<string>
 *   The merged list of cache tags.
 */',
        'startLine' => 51,
        'endLine' => 55,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\Cache',
        'implementingClassName' => 'Drupal\\Core\\Cache\\Cache',
        'currentClassName' => 'Drupal\\Core\\Cache\\Cache',
        'aliasName' => NULL,
      ),
      'mergeMaxAges' => 
      array (
        'name' => 'mergeMaxAges',
        'parameters' => 
        array (
          'max_ages' => 
          array (
            'name' => 'max_ages',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 68,
            'endLine' => 68,
            'startColumn' => 39,
            'endColumn' => 50,
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
 * Merges max-age values (expressed in seconds), finds the lowest max-age.
 *
 * Ensures infinite max-age (Cache::PERMANENT) is taken into account.
 *
 * @param int ...$max_ages
 *   Max age values to merge.
 *
 * @return int
 *   The minimum max-age value.
 */',
        'startLine' => 68,
        'endLine' => 77,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\Cache',
        'implementingClassName' => 'Drupal\\Core\\Cache\\Cache',
        'currentClassName' => 'Drupal\\Core\\Cache\\Cache',
        'aliasName' => NULL,
      ),
      'buildTags' => 
      array (
        'name' => 'buildTags',
        'parameters' => 
        array (
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 95,
            'endLine' => 95,
            'startColumn' => 36,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'suffixes' => 
          array (
            'name' => 'suffixes',
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
            'startLine' => 95,
            'endLine' => 95,
            'startColumn' => 45,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'glue' => 
          array (
            'name' => 'glue',
            'default' => 
            array (
              'code' => '\':\'',
              'attributes' => 
              array (
                'startLine' => 95,
                'endLine' => 95,
                'startTokenPos' => 261,
                'startFilePos' => 3042,
                'endTokenPos' => 261,
                'endFilePos' => 3044,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 95,
            'endLine' => 95,
            'startColumn' => 62,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Build a list of cache tags from a given prefix and an array of suffixes.
 *
 * Each suffix will be converted to a cache tag by appending it to the prefix,
 * with a colon between them.
 *
 * @param string $prefix
 *   A prefix string.
 * @param array $suffixes
 *   An array of suffixes. Will be cast to strings.
 * @param string $glue
 *   A string to be used as glue for concatenation. Defaults to a colon.
 *
 * @return list<string>
 *   A list of cache tags.
 */',
        'startLine' => 95,
        'endLine' => 101,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\Cache',
        'implementingClassName' => 'Drupal\\Core\\Cache\\Cache',
        'currentClassName' => 'Drupal\\Core\\Cache\\Cache',
        'aliasName' => NULL,
      ),
      'invalidateTags' => 
      array (
        'name' => 'invalidateTags',
        'parameters' => 
        array (
          'tags' => 
          array (
            'name' => 'tags',
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
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 41,
            'endColumn' => 51,
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
 * Marks cache items from all bins with any of the specified tags as invalid.
 *
 * @param string[] $tags
 *   The list of tags to invalidate cache items for.
 */',
        'startLine' => 109,
        'endLine' => 111,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\Cache',
        'implementingClassName' => 'Drupal\\Core\\Cache\\Cache',
        'currentClassName' => 'Drupal\\Core\\Cache\\Cache',
        'aliasName' => NULL,
      ),
      'getBins' => 
      array (
        'name' => 'getBins',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets all cache bin services.
 *
 * @return \\Drupal\\Core\\Cache\\CacheBackendInterface[]
 *   An array of cache backend objects keyed by cache bins.
 */',
        'startLine' => 119,
        'endLine' => 126,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\Cache',
        'implementingClassName' => 'Drupal\\Core\\Cache\\Cache',
        'currentClassName' => 'Drupal\\Core\\Cache\\Cache',
        'aliasName' => NULL,
      ),
      'getMemoryBins' => 
      array (
        'name' => 'getMemoryBins',
        'parameters' => 
        array (
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
 * Gets all memory cache bin services.
 *
 * @return \\Drupal\\Core\\Cache\\CacheBackendInterface[]
 *   An array of cache backend objects keyed by memory cache bins.
 */',
        'startLine' => 134,
        'endLine' => 141,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\Cache',
        'implementingClassName' => 'Drupal\\Core\\Cache\\Cache',
        'currentClassName' => 'Drupal\\Core\\Cache\\Cache',
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