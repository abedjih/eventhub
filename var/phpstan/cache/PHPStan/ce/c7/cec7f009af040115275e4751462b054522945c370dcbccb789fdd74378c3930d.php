<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Cache/RefinableCacheableDependencyInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Cache\RefinableCacheableDependencyInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-bb52e0dd32df6dad547a4878982a2ffc042e8f4df5153fbd1294c4f43947dbe5-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Cache/RefinableCacheableDependencyInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Cache',
    'name' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
    'shortName' => 'RefinableCacheableDependencyInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Allows to add cacheability metadata to an object for the current runtime.
 *
 * This must be used when changing an object in a way that affects its
 * cacheability. For example, when changing the active translation of an entity
 * based on the current content language then a cache context for that must be
 * added.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 65,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
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
      'addCacheContexts' => 
      array (
        'name' => 'addCacheContexts',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 36,
            'endColumn' => 56,
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
 * Adds cache contexts.
 *
 * @param string[] $cache_contexts
 *   The cache contexts to be added.
 *
 * @return $this
 */',
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 3,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'implementingClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'currentClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'aliasName' => NULL,
      ),
      'addCacheTags' => 
      array (
        'name' => 'addCacheTags',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 32,
            'endColumn' => 48,
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
 * Adds cache tags.
 *
 * @param string[] $cache_tags
 *   The cache tags to be added.
 *
 * @return $this
 */',
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'implementingClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'currentClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'aliasName' => NULL,
      ),
      'mergeCacheMaxAge' => 
      array (
        'name' => 'mergeCacheMaxAge',
        'parameters' => 
        array (
          'max_age' => 
          array (
            'name' => 'max_age',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 36,
            'endColumn' => 43,
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
 * Merges the maximum age (in seconds) with the existing maximum age.
 *
 * The max age will be set to the given value if it is lower than the existing
 * value.
 *
 * @param int $max_age
 *   The max age to associate.
 *
 * @return $this
 *
 * @throws \\InvalidArgumentException
 *   Thrown if a non-integer value is supplied.
 */',
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'implementingClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'currentClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'aliasName' => NULL,
      ),
      'addCacheableDependency' => 
      array (
        'name' => 'addCacheableDependency',
        'parameters' => 
        array (
          'other_object' => 
          array (
            'name' => 'other_object',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Adds a dependency on an object: merges its cacheability metadata.
 *
 * @param \\Drupal\\Core\\Cache\\CacheableDependencyInterface|object $other_object
 *   The dependency. If the object implements CacheableDependencyInterface,
 *   then its cacheability metadata will be used. Otherwise, the passed in
 *   object must be assumed to be uncacheable, so max-age 0 is set.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Cache\\CacheableMetadata::createFromObject()
 */',
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'implementingClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        'currentClassName' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
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