<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Cache/CacheableDependencyTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Cache\CacheableDependencyTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-1668f1f4919793759e5530335ae3d45d0aa4d03dfcd0586b4d81a1d143c925ef-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Cache/CacheableDependencyTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Cache',
    'name' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
    'shortName' => 'CacheableDependencyTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Trait for \\Drupal\\Core\\Cache\\CacheableDependencyInterface.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 67,
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
      'cacheContexts' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'name' => 'cacheContexts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 23,
            'startFilePos' => 227,
            'endTokenPos' => 24,
            'endFilePos' => 228,
          ),
        ),
        'docComment' => '/**
 * Cache contexts.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 3,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cacheTags' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'name' => 'cacheTags',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 22,
            'endLine' => 22,
            'startTokenPos' => 35,
            'startFilePos' => 314,
            'endTokenPos' => 36,
            'endFilePos' => 315,
          ),
        ),
        'docComment' => '/**
 * Cache tags.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 3,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cacheMaxAge' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'name' => 'cacheMaxAge',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\Drupal\\Core\\Cache\\Cache::PERMANENT',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 29,
            'startTokenPos' => 47,
            'startFilePos' => 397,
            'endTokenPos' => 49,
            'endFilePos' => 412,
          ),
        ),
        'docComment' => '/**
 * Cache max-age.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 3,
        'endColumn' => 44,
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
      'setCacheability' => 
      array (
        'name' => 'setCacheability',
        'parameters' => 
        array (
          'cacheability' => 
          array (
            'name' => 'cacheability',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 38,
            'endColumn' => 79,
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
 * Sets cacheability; useful for value object constructors.
 *
 * @param \\Drupal\\Core\\Cache\\CacheableDependencyInterface $cacheability
 *   The cacheability to set.
 *
 * @return $this
 */',
        'startLine' => 39,
        'endLine' => 44,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'currentClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
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
 * {@inheritdoc}
 */',
        'startLine' => 49,
        'endLine' => 51,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'currentClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'aliasName' => NULL,
      ),
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
 * {@inheritdoc}
 */',
        'startLine' => 56,
        'endLine' => 58,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'currentClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
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
 * {@inheritdoc}
 */',
        'startLine' => 63,
        'endLine' => 65,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Cache',
        'declaringClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
        'currentClassName' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
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