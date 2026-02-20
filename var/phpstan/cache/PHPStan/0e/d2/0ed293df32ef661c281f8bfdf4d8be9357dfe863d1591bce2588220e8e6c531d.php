<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Cache/CacheableDependencyInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Cache\CacheableDependencyInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-d346cc03cfd0233c5be9ddf63a16e3add85de7a1c58f4ac2953fc825395a09f4-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Cache/CacheableDependencyInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Cache',
    'name' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
    'shortName' => 'CacheableDependencyInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for objects which may be used by other cached objects.
 *
 * All cacheability metadata exposed in this interface is bubbled to parent
 * objects when they are cached: if a child object needs to be varied by certain
 * cache contexts, invalidated by certain cache tags, expire after a certain
 * maximum age, then so should any parent object.
 *
 * @ingroup cache
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 54,
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
    ),
    'immediateMethods' => 
    array (
      'getCacheContexts' => 
      array (
        'name' => 'getCacheContexts',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The cache contexts associated with this object.
 *
 * These identify a specific variation/representation of the object.
 *
 * Cache contexts are tokens: placeholders that are converted to cache keys by
 * the @cache_contexts_manager service. The replacement value depends on the
 * request context (the current URL, language, and so on). They\'re converted
 * before storing an object in cache.
 *
 * @return string[]
 *   An array of cache context tokens, used to generate a cache ID.
 *
 * @see \\Drupal\\Core\\Cache\\Context\\CacheContextsManager::convertTokensToKeys()
 */',
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
        'implementingClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
        'currentClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
        'aliasName' => NULL,
      ),
      'getCacheTags' => 
      array (
        'name' => 'getCacheTags',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The cache tags associated with this object.
 *
 * When this object is modified, these cache tags will be invalidated.
 *
 * @return list<string>
 *   A set of cache tags.
 */',
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
        'implementingClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
        'currentClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
        'aliasName' => NULL,
      ),
      'getCacheMaxAge' => 
      array (
        'name' => 'getCacheMaxAge',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The maximum age for which this object may be cached.
 *
 * @return int
 *   The maximum time in seconds that this object may be cached.
 *   An object may be cached permanently by returning
 *   \\Drupal\\Core\\Cache\\Cache::PERMANENT.
 */',
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
        'implementingClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
        'currentClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
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