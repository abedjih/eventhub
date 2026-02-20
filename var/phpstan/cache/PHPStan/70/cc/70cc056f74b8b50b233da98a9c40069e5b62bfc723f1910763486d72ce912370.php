<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/ContentEntityStorageBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\ContentEntityStorageBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-dd74ee19efa2f23a167c216ea7ffe01928fcf8a63fe81f2f07233bb45d58d71e-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/ContentEntityStorageBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
    'shortName' => 'ContentEntityStorageBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for content entity storage handlers.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 20,
    'endLine' => 1522,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
      1 => 'Drupal\\Core\\Entity\\DynamicallyFieldableEntityStorageInterface',
      2 => 'Drupal\\Core\\Entity\\BundleEntityStorageInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'bundleKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'name' => 'bundleKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 27,
            'startTokenPos' => 94,
            'startFilePos' => 959,
            'endTokenPos' => 94,
            'endFilePos' => 963,
          ),
        ),
        'docComment' => '/**
 * The entity bundle key.
 *
 * @var string|bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entityFieldManager' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'name' => 'entityFieldManager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The entity field manager service.
 *
 * @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 3,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entityTypeBundleInfo' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'name' => 'entityTypeBundleInfo',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The entity bundle info.
 *
 * @var \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 3,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cacheBackend' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'name' => 'cacheBackend',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Cache backend.
 *
 * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'ignoreStaticRevisionCache' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'name' => 'ignoreStaticRevisionCache',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 128,
            'startFilePos' => 1890,
            'endTokenPos' => 128,
            'endFilePos' => 1894,
          ),
        ),
        'docComment' => '/**
 * Whether the static revision cache should be ignored.
 *
 * This property will be set internally when loading an unchanged revision
 * via ::loadRevisionUnchanged() before calling ::loadRevision() to load the
 * revision without using the static revision cache.
 *
 * @var bool
 *
 * @see \\Drupal\\Core\\Entity\\ContentEntityStorageBase::loadRevisionUnchanged()
 * @see \\Drupal\\Core\\Entity\\ContentEntityStorageBase::loadMultipleRevisions()
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 3,
        'endColumn' => 52,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'entity_type' => 
          array (
            'name' => 'entity_type',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 31,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity_field_manager' => 
          array (
            'name' => 'entity_field_manager',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 65,
            'endColumn' => 113,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'cache' => 
          array (
            'name' => 'cache',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 116,
            'endColumn' => 143,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'memory_cache' => 
          array (
            'name' => 'memory_cache',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 146,
            'endColumn' => 179,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'entity_type_bundle_info' => 
          array (
            'name' => 'entity_type_bundle_info',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 182,
            'endColumn' => 235,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs a ContentEntityStorageBase object.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition.
 * @param \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager
 *   The entity field manager.
 * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache
 *   The cache backend to be used.
 * @param \\Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface $memory_cache
 *   The memory cache backend.
 * @param \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface $entity_type_bundle_info
 *   The entity type bundle info.
 */',
        'startLine' => 78,
        'endLine' => 84,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 89,
                'endLine' => 89,
                'startTokenPos' => 236,
                'startFilePos' => 3091,
                'endTokenPos' => 237,
                'endFilePos' => 3092,
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
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 26,
            'endColumn' => 43,
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
 * {@inheritdoc}
 */',
        'startLine' => 89,
        'endLine' => 111,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'createInstance' => 
      array (
        'name' => 'createInstance',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 116,
            'endLine' => 116,
            'startColumn' => 41,
            'endColumn' => 69,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity_type' => 
          array (
            'name' => 'entity_type',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 116,
            'endLine' => 116,
            'startColumn' => 72,
            'endColumn' => 103,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 116,
        'endLine' => 124,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'doCreate' => 
      array (
        'name' => 'doCreate',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 31,
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
 * {@inheritdoc}
 */',
        'startLine' => 129,
        'endLine' => 138,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'getBundleFromClass' => 
      array (
        'name' => 'getBundleFromClass',
        'parameters' => 
        array (
          'class_name' => 
          array (
            'name' => 'class_name',
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 38,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 143,
        'endLine' => 158,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'getBundleFromValues' => 
      array (
        'name' => 'getBundleFromValues',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 169,
            'endLine' => 169,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the bundle from an array of values.
 *
 * @param array $values
 *   An array of values to set, keyed by field name.
 *
 * @return string|null
 *   The bundle or NULL if not set.
 */',
        'startLine' => 169,
        'endLine' => 195,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'getEntityClass' => 
      array (
        'name' => 'getEntityClass',
        'parameters' => 
        array (
          'bundle' => 
          array (
            'name' => 'bundle',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 200,
                'endLine' => 200,
                'startTokenPos' => 857,
                'startFilePos' => 6538,
                'endTokenPos' => 857,
                'endFilePos' => 6541,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 200,
            'endLine' => 200,
            'startColumn' => 34,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 200,
        'endLine' => 222,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'createWithSampleValues' => 
      array (
        'name' => 'createWithSampleValues',
        'parameters' => 
        array (
          'bundle' => 
          array (
            'name' => 'bundle',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 227,
                'endLine' => 227,
                'startTokenPos' => 1018,
                'startFilePos' => 7444,
                'endTokenPos' => 1018,
                'endFilePos' => 7448,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 227,
            'endLine' => 227,
            'startColumn' => 42,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 227,
                'endLine' => 227,
                'startTokenPos' => 1027,
                'startFilePos' => 7467,
                'endTokenPos' => 1028,
                'endFilePos' => 7468,
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
            'startLine' => 227,
            'endLine' => 227,
            'startColumn' => 59,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 227,
        'endLine' => 256,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'initFieldValues' => 
      array (
        'name' => 'initFieldValues',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 270,
            'endLine' => 270,
            'startColumn' => 38,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 270,
                'endLine' => 270,
                'startTokenPos' => 1297,
                'startFilePos' => 9255,
                'endTokenPos' => 1298,
                'endFilePos' => 9256,
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
            'startLine' => 270,
            'endLine' => 270,
            'startColumn' => 70,
            'endColumn' => 87,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'field_names' => 
          array (
            'name' => 'field_names',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 270,
                'endLine' => 270,
                'startTokenPos' => 1307,
                'startFilePos' => 9280,
                'endTokenPos' => 1308,
                'endFilePos' => 9281,
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
            'startLine' => 270,
            'endLine' => 270,
            'startColumn' => 90,
            'endColumn' => 112,
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
 * Initializes field values.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   An entity object.
 * @param array $values
 *   (optional) An associative array of initial field values keyed by field
 *   name. If none is provided default values will be applied.
 * @param array $field_names
 *   (optional) An associative array of field names to be initialized. If none
 *   is provided all fields will be initialized.
 */',
        'startLine' => 270,
        'endLine' => 291,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'isAnyRevisionTranslated' => 
      array (
        'name' => 'isAnyRevisionTranslated',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\TranslatableInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 46,
            'endColumn' => 74,
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
 * Checks whether any entity revision is translated.
 *
 * @param \\Drupal\\Core\\Entity\\TranslatableInterface $entity
 *   The entity object to be checked.
 *
 * @return bool
 *   TRUE if the entity has at least one translation in any revision, FALSE
 *   otherwise.
 *
 * @see \\Drupal\\Core\\TypedData\\TranslatableInterface::getTranslationLanguages()
 * @see \\Drupal\\Core\\Entity\\ContentEntityStorageBase::isAnyStoredRevisionTranslated()
 */',
        'startLine' => 306,
        'endLine' => 308,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'isAnyStoredRevisionTranslated' => 
      array (
        'name' => 'isAnyStoredRevisionTranslated',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\TranslatableInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 328,
            'endLine' => 328,
            'startColumn' => 52,
            'endColumn' => 80,
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
 * Checks whether any stored entity revision is translated.
 *
 * A revisionable entity can have translations in a pending revision, hence
 * the default revision may appear as not translated. This determines whether
 * the entity has any translation in the storage and thus should be considered
 * as multilingual.
 *
 * @param \\Drupal\\Core\\Entity\\TranslatableInterface $entity
 *   The entity object to be checked.
 *
 * @return bool
 *   TRUE if the entity has at least one translation in any revision, FALSE
 *   otherwise.
 *
 * @see \\Drupal\\Core\\TypedData\\TranslatableInterface::getTranslationLanguages()
 * @see \\Drupal\\Core\\Entity\\ContentEntityStorageBase::isAnyRevisionTranslated()
 */',
        'startLine' => 328,
        'endLine' => 354,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'createTranslation' => 
      array (
        'name' => 'createTranslation',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 359,
            'endLine' => 359,
            'startColumn' => 37,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 359,
            'endLine' => 359,
            'startColumn' => 69,
            'endColumn' => 77,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 359,
                'endLine' => 359,
                'startTokenPos' => 1730,
                'startFilePos' => 12307,
                'endTokenPos' => 1731,
                'endFilePos' => 12308,
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
            'startLine' => 359,
            'endLine' => 359,
            'startColumn' => 80,
            'endColumn' => 97,
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
 * {@inheritdoc}
 */',
        'startLine' => 359,
        'endLine' => 372,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'createRevision' => 
      array (
        'name' => 'createRevision',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\RevisionableInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 34,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 377,
                'endLine' => 377,
                'startTokenPos' => 1896,
                'startFilePos' => 13055,
                'endTokenPos' => 1896,
                'endFilePos' => 13058,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 65,
            'endColumn' => 79,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'keep_untranslatable_fields' => 
          array (
            'name' => 'keep_untranslatable_fields',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 377,
                'endLine' => 377,
                'startTokenPos' => 1903,
                'startFilePos' => 13091,
                'endTokenPos' => 1903,
                'endFilePos' => 13094,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 82,
            'endColumn' => 115,
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
 * {@inheritdoc}
 */',
        'startLine' => 377,
        'endLine' => 459,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'getRevisionTranslationMergeSkippedFieldNames' => 
      array (
        'name' => 'getRevisionTranslationMergeSkippedFieldNames',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns an array of field names to skip when merging revision translations.
 *
 * @return array
 *   An array of field names.
 */',
        'startLine' => 467,
        'endLine' => 480,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'getLatestRevisionId' => 
      array (
        'name' => 'getLatestRevisionId',
        'parameters' => 
        array (
          'entity_id' => 
          array (
            'name' => 'entity_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 485,
            'endLine' => 485,
            'startColumn' => 39,
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
 * {@inheritdoc}
 */',
        'startLine' => 485,
        'endLine' => 504,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'getLatestTranslationAffectedRevisionId' => 
      array (
        'name' => 'getLatestTranslationAffectedRevisionId',
        'parameters' => 
        array (
          'entity_id' => 
          array (
            'name' => 'entity_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 509,
            'endLine' => 509,
            'startColumn' => 58,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 509,
            'endLine' => 509,
            'startColumn' => 70,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 509,
        'endLine' => 537,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'onFieldStorageDefinitionCreate' => 
      array (
        'name' => 'onFieldStorageDefinitionCreate',
        'parameters' => 
        array (
          'storage_definition' => 
          array (
            'name' => 'storage_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 542,
            'endLine' => 542,
            'startColumn' => 50,
            'endColumn' => 100,
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
 * {@inheritdoc}
 */',
        'startLine' => 542,
        'endLine' => 542,
        'startColumn' => 3,
        'endColumn' => 104,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'onFieldStorageDefinitionUpdate' => 
      array (
        'name' => 'onFieldStorageDefinitionUpdate',
        'parameters' => 
        array (
          'storage_definition' => 
          array (
            'name' => 'storage_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 547,
            'endLine' => 547,
            'startColumn' => 50,
            'endColumn' => 100,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'original' => 
          array (
            'name' => 'original',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 547,
            'endLine' => 547,
            'startColumn' => 103,
            'endColumn' => 143,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 547,
        'endLine' => 547,
        'startColumn' => 3,
        'endColumn' => 147,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'onFieldStorageDefinitionDelete' => 
      array (
        'name' => 'onFieldStorageDefinitionDelete',
        'parameters' => 
        array (
          'storage_definition' => 
          array (
            'name' => 'storage_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 552,
            'endLine' => 552,
            'startColumn' => 50,
            'endColumn' => 100,
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
 * {@inheritdoc}
 */',
        'startLine' => 552,
        'endLine' => 552,
        'startColumn' => 3,
        'endColumn' => 104,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'onFieldDefinitionCreate' => 
      array (
        'name' => 'onFieldDefinitionCreate',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 557,
            'endLine' => 557,
            'startColumn' => 43,
            'endColumn' => 84,
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
 * {@inheritdoc}
 */',
        'startLine' => 557,
        'endLine' => 557,
        'startColumn' => 3,
        'endColumn' => 88,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'onFieldDefinitionUpdate' => 
      array (
        'name' => 'onFieldDefinitionUpdate',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 562,
            'endLine' => 562,
            'startColumn' => 43,
            'endColumn' => 84,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'original' => 
          array (
            'name' => 'original',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 562,
            'endLine' => 562,
            'startColumn' => 87,
            'endColumn' => 120,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 562,
        'endLine' => 562,
        'startColumn' => 3,
        'endColumn' => 124,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'onFieldDefinitionDelete' => 
      array (
        'name' => 'onFieldDefinitionDelete',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 567,
            'endLine' => 567,
            'startColumn' => 43,
            'endColumn' => 84,
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
 * {@inheritdoc}
 */',
        'startLine' => 567,
        'endLine' => 567,
        'startColumn' => 3,
        'endColumn' => 88,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'purgeFieldData' => 
      array (
        'name' => 'purgeFieldData',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 572,
            'endLine' => 572,
            'startColumn' => 34,
            'endColumn' => 75,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'batch_size' => 
          array (
            'name' => 'batch_size',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 572,
            'endLine' => 572,
            'startColumn' => 78,
            'endColumn' => 88,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 572,
        'endLine' => 580,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'readFieldItemsToPurge' => 
      array (
        'name' => 'readFieldItemsToPurge',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 596,
            'endLine' => 596,
            'startColumn' => 53,
            'endColumn' => 94,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'batch_size' => 
          array (
            'name' => 'batch_size',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 596,
            'endLine' => 596,
            'startColumn' => 97,
            'endColumn' => 107,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reads values to be purged for a single field.
 *
 * This method is called during field data purge, on fields for which
 * onFieldDefinitionDelete() has previously run.
 *
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The field definition.
 * @param int $batch_size
 *   The maximum number of field data records to purge before returning.
 *
 * @return array<int,\\Drupal\\Core\\Field\\FieldItemListInterface<\\Drupal\\Core\\Field\\FieldItemInterface>>
 *   An array of field item lists, keyed by entity revision id.
 */',
        'startLine' => 596,
        'endLine' => 596,
        'startColumn' => 3,
        'endColumn' => 109,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'purgeFieldItems' => 
      array (
        'name' => 'purgeFieldItems',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 606,
            'endLine' => 606,
            'startColumn' => 47,
            'endColumn' => 76,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 606,
            'endLine' => 606,
            'startColumn' => 79,
            'endColumn' => 120,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Removes field items from storage per entity during purge.
 *
 * @param ContentEntityInterface $entity
 *   The entity revision, whose values are being purged.
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The field whose values are bing purged.
 */',
        'startLine' => 606,
        'endLine' => 606,
        'startColumn' => 3,
        'endColumn' => 122,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'finalizePurge' => 
      array (
        'name' => 'finalizePurge',
        'parameters' => 
        array (
          'storage_definition' => 
          array (
            'name' => 'storage_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 611,
            'endLine' => 611,
            'startColumn' => 33,
            'endColumn' => 83,
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
 * {@inheritdoc}
 */',
        'startLine' => 611,
        'endLine' => 611,
        'startColumn' => 3,
        'endColumn' => 87,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'preLoad' => 
      array (
        'name' => 'preLoad',
        'parameters' => 
        array (
          'ids' => 
          array (
            'name' => 'ids',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 616,
                'endLine' => 616,
                'startTokenPos' => 3225,
                'startFilePos' => 22683,
                'endTokenPos' => 3225,
                'endFilePos' => 22686,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 616,
            'endLine' => 616,
            'startColumn' => 30,
            'endColumn' => 48,
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
 * {@inheritdoc}
 */',
        'startLine' => 616,
        'endLine' => 644,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'loadRevision' => 
      array (
        'name' => 'loadRevision',
        'parameters' => 
        array (
          'revision_id' => 
          array (
            'name' => 'revision_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 649,
            'endLine' => 649,
            'startColumn' => 32,
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
 * {@inheritdoc}
 */',
        'startLine' => 649,
        'endLine' => 653,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'loadMultipleRevisions' => 
      array (
        'name' => 'loadMultipleRevisions',
        'parameters' => 
        array (
          'revision_ids' => 
          array (
            'name' => 'revision_ids',
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
            'startLine' => 658,
            'endLine' => 658,
            'startColumn' => 41,
            'endColumn' => 59,
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
 * {@inheritdoc}
 */',
        'startLine' => 658,
        'endLine' => 735,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'getGroupedEntitiesFromRevisions' => 
      array (
        'name' => 'getGroupedEntitiesFromRevisions',
        'parameters' => 
        array (
          'revisions' => 
          array (
            'name' => 'revisions',
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
            'startLine' => 765,
            'endLine' => 765,
            'startColumn' => 54,
            'endColumn' => 69,
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
 * Splits revisions into groups which are keyed by entity ID.
 *
 * Load hooks expect entities to be grouped by entity ID. As we could load
 * multiple revisions for the same entity ID at once we have to build
 * groups of entities where the same entity ID is present only once.
 *
 * Given 3 revisions, 1 and 2 for entity ID 1 and revision 3 for entity ID 2,
 * it will return the following two groups:
 *
 * @code
 * $entity_groups = [
 *   0 => [
 *     1 => $revision_1,
 *     2 => $revision_3,
 *   ],
 *   1 => [
 *     1 => $revision_2,
 *   ],
 * ];
 * @endcode
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface[] $revisions
 *   List of revisions.
 *
 * @return array<int, array<int, \\Drupal\\Core\\Entity\\ContentEntityInterface>>
 *   Groups of entities keyed by entity ID.
 */',
        'startLine' => 765,
        'endLine' => 775,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'loadRevisionUnchanged' => 
      array (
        'name' => 'loadRevisionUnchanged',
        'parameters' => 
        array (
          'revision_id' => 
          array (
            'name' => 'revision_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 780,
            'endLine' => 780,
            'startColumn' => 41,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Drupal\\Core\\Entity\\EntityInterface',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 780,
        'endLine' => 795,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'doLoadMultipleRevisionsFieldItems' => 
      array (
        'name' => 'doLoadMultipleRevisionsFieldItems',
        'parameters' => 
        array (
          'revision_ids' => 
          array (
            'name' => 'revision_ids',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 806,
            'endLine' => 806,
            'startColumn' => 65,
            'endColumn' => 77,
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
 * Actually loads revision field item values from the storage.
 *
 * @param array $revision_ids
 *   An array of revision identifiers.
 *
 * @return \\Drupal\\Core\\Entity\\ContentEntityInterface[]
 *   The specified entity revisions or an empty array if none are found.
 */',
        'startLine' => 806,
        'endLine' => 806,
        'startColumn' => 3,
        'endColumn' => 79,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'doSave' => 
      array (
        'name' => 'doSave',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 811,
            'endLine' => 811,
            'startColumn' => 29,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 811,
            'endLine' => 811,
            'startColumn' => 34,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 811,
        'endLine' => 844,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'doSaveFieldItems' => 
      array (
        'name' => 'doSaveFieldItems',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 858,
            'endLine' => 858,
            'startColumn' => 48,
            'endColumn' => 77,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'names' => 
          array (
            'name' => 'names',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 858,
                'endLine' => 858,
                'startTokenPos' => 4421,
                'startFilePos' => 31880,
                'endTokenPos' => 4422,
                'endFilePos' => 31881,
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
            'startLine' => 858,
            'endLine' => 858,
            'startColumn' => 80,
            'endColumn' => 96,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Writes entity field values to the storage.
 *
 * This method is responsible for allocating entity and revision identifiers
 * and updating the entity object with their values.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   The entity object.
 * @param string[] $names
 *   (optional) The name of the fields to be written to the storage. If an
 *   empty value is passed all field values are saved.
 */',
        'startLine' => 858,
        'endLine' => 858,
        'startColumn' => 3,
        'endColumn' => 98,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'doPreSave' => 
      array (
        'name' => 'doPreSave',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 863,
            'endLine' => 863,
            'startColumn' => 32,
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
 * {@inheritdoc}
 */',
        'startLine' => 863,
        'endLine' => 906,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'doPostSave' => 
      array (
        'name' => 'doPostSave',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 911,
            'endLine' => 911,
            'startColumn' => 33,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'update' => 
          array (
            'name' => 'update',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 911,
            'endLine' => 911,
            'startColumn' => 58,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 911,
        'endLine' => 925,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'doDelete' => 
      array (
        'name' => 'doDelete',
        'parameters' => 
        array (
          'entities' => 
          array (
            'name' => 'entities',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 930,
            'endLine' => 930,
            'startColumn' => 31,
            'endColumn' => 39,
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
 * {@inheritdoc}
 */',
        'startLine' => 930,
        'endLine' => 936,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'doDeleteFieldItems' => 
      array (
        'name' => 'doDeleteFieldItems',
        'parameters' => 
        array (
          'entities' => 
          array (
            'name' => 'entities',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 944,
            'endLine' => 944,
            'startColumn' => 50,
            'endColumn' => 58,
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
 * Deletes entity field values from the storage.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface[] $entities
 *   An array of entity objects to be deleted.
 */',
        'startLine' => 944,
        'endLine' => 944,
        'startColumn' => 3,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'deleteRevision' => 
      array (
        'name' => 'deleteRevision',
        'parameters' => 
        array (
          'revision_id' => 
          array (
            'name' => 'revision_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 949,
            'endLine' => 949,
            'startColumn' => 34,
            'endColumn' => 45,
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
 * {@inheritdoc}
 */',
        'startLine' => 949,
        'endLine' => 961,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'doDeleteRevisionFieldItems' => 
      array (
        'name' => 'doDeleteRevisionFieldItems',
        'parameters' => 
        array (
          'revision' => 
          array (
            'name' => 'revision',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 969,
            'endLine' => 969,
            'startColumn' => 58,
            'endColumn' => 89,
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
 * Deletes field values of an entity revision from the storage.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $revision
 *   An entity revision object to be deleted.
 */',
        'startLine' => 969,
        'endLine' => 969,
        'startColumn' => 3,
        'endColumn' => 91,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'invokeTranslationHooks' => 
      array (
        'name' => 'invokeTranslationHooks',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 977,
            'endLine' => 977,
            'startColumn' => 45,
            'endColumn' => 74,
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
 * Checks translation statuses and invokes the related hooks if needed.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   The entity being saved.
 */',
        'startLine' => 977,
        'endLine' => 991,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'invokeStorageLoadHook' => 
      array (
        'name' => 'invokeStorageLoadHook',
        'parameters' => 
        array (
          'entities' => 
          array (
            'name' => 'entities',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 999,
            'endLine' => 999,
            'startColumn' => 44,
            'endColumn' => 59,
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
 * Invokes hook_entity_storage_load().
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface[] $entities
 *   List of entities, keyed on the entity ID.
 */',
        'startLine' => 999,
        'endLine' => 1016,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'invokeHook' => 
      array (
        'name' => 'invokeHook',
        'parameters' => 
        array (
          'hook' => 
          array (
            'name' => 'hook',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1021,
            'endLine' => 1021,
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1021,
            'endLine' => 1021,
            'startColumn' => 40,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 1021,
        'endLine' => 1039,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'invokeFieldMethod' => 
      array (
        'name' => 'invokeFieldMethod',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1055,
            'endLine' => 1055,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1055,
            'endLine' => 1055,
            'startColumn' => 49,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Invokes a method on the Field objects within an entity.
 *
 * Any argument passed will be forwarded to the invoked method.
 *
 * @param string $method
 *   The name of the method to be invoked.
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   The entity object.
 *
 * @return array
 *   A multidimensional associative array of results, keyed by entity
 *   translation language code and field name.
 */',
        'startLine' => 1055,
        'endLine' => 1103,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'invokeFieldPostSave' => 
      array (
        'name' => 'invokeFieldPostSave',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1113,
            'endLine' => 1113,
            'startColumn' => 42,
            'endColumn' => 71,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'update' => 
          array (
            'name' => 'update',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1113,
            'endLine' => 1113,
            'startColumn' => 74,
            'endColumn' => 80,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Invokes the post save method on the Field objects within an entity.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   The entity object.
 * @param bool $update
 *   Specifies whether the entity is being updated or created.
 */',
        'startLine' => 1113,
        'endLine' => 1123,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'hasFieldValueChanged' => 
      array (
        'name' => 'hasFieldValueChanged',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1138,
            'endLine' => 1138,
            'startColumn' => 43,
            'endColumn' => 84,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1138,
            'endLine' => 1138,
            'startColumn' => 87,
            'endColumn' => 116,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'original' => 
          array (
            'name' => 'original',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1138,
            'endLine' => 1138,
            'startColumn' => 119,
            'endColumn' => 150,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether the field values changed compared to the original entity.
 *
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   Field definition of field to compare for changes.
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   Entity to check for field changes.
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $original
 *   Original entity to compare against.
 *
 * @return bool
 *   True if the field value changed from the original entity.
 */',
        'startLine' => 1138,
        'endLine' => 1155,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'populateAffectedRevisionTranslations' => 
      array (
        'name' => 'populateAffectedRevisionTranslations',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1163,
            'endLine' => 1163,
            'startColumn' => 59,
            'endColumn' => 88,
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
 * Populates the affected flag for all the revision translations.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   An entity object being saved.
 */',
        'startLine' => 1163,
        'endLine' => 1182,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'cleanIds' => 
      array (
        'name' => 'cleanIds',
        'parameters' => 
        array (
          'ids' => 
          array (
            'name' => 'ids',
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
            'startLine' => 1199,
            'endLine' => 1199,
            'startColumn' => 31,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity_key' => 
          array (
            'name' => 'entity_key',
            'default' => 
            array (
              'code' => '\'id\'',
              'attributes' => 
              array (
                'startLine' => 1199,
                'endLine' => 1199,
                'startTokenPos' => 6318,
                'startFilePos' => 45415,
                'endTokenPos' => 6318,
                'endFilePos' => 45418,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1199,
            'endLine' => 1199,
            'startColumn' => 43,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensures integer entity key values are valid.
 *
 * The identifier sanitization provided by this method has been introduced
 * as Drupal used to rely on the database to facilitate this, which worked
 * correctly with MySQL but led to errors with other DBMS such as PostgreSQL.
 *
 * @param array $ids
 *   The entity key values to verify.
 * @param string $entity_key
 *   (optional) The entity key to sanitize values for. Defaults to \'id\'.
 *
 * @return array
 *   The sanitized list of entity key values.
 */',
        'startLine' => 1199,
        'endLine' => 1209,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'getFromPersistentCache' => 
      array (
        'name' => 'getFromPersistentCache',
        'parameters' => 
        array (
          'ids' => 
          array (
            'name' => 'ids',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 1221,
                'endLine' => 1221,
                'startTokenPos' => 6453,
                'startFilePos' => 46228,
                'endTokenPos' => 6453,
                'endFilePos' => 46231,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1221,
            'endLine' => 1221,
            'startColumn' => 45,
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
 * Gets entities from the persistent cache backend.
 *
 * @param array|null &$ids
 *   If not empty, return entities that match these IDs. IDs that were found
 *   will be removed from the list.
 *
 * @return \\Drupal\\Core\\Entity\\ContentEntityInterface[]
 *   Array of entities from the persistent cache.
 */',
        'startLine' => 1221,
        'endLine' => 1243,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'getFromPersistentRevisionCache' => 
      array (
        'name' => 'getFromPersistentRevisionCache',
        'parameters' => 
        array (
          'ids' => 
          array (
            'name' => 'ids',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1255,
            'endLine' => 1255,
            'startColumn' => 53,
            'endColumn' => 63,
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
 * Gets entity revisions from the persistent cache backend.
 *
 * @param int[] &$ids
 *   Revision IDs to load from the revision cache. IDs that were found will be
 *   removed from the list.
 *
 * @return \\Drupal\\Core\\Entity\\ContentEntityInterface[]
 *   Array of entities from the persistent cache.
 */',
        'startLine' => 1255,
        'endLine' => 1277,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'setPersistentCache' => 
      array (
        'name' => 'setPersistentCache',
        'parameters' => 
        array (
          'entities' => 
          array (
            'name' => 'entities',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1285,
            'endLine' => 1285,
            'startColumn' => 41,
            'endColumn' => 49,
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
 * Stores entities in the persistent cache backend.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface[] $entities
 *   Entities to store in the cache.
 */',
        'startLine' => 1285,
        'endLine' => 1298,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'setPersistentRevisionCache' => 
      array (
        'name' => 'setPersistentRevisionCache',
        'parameters' => 
        array (
          'entities' => 
          array (
            'name' => 'entities',
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
            'startLine' => 1306,
            'endLine' => 1306,
            'startColumn' => 49,
            'endColumn' => 63,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Stores revisions in the persistent cache backend.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface[] $entities
 *   Entities to store in the cache.
 */',
        'startLine' => 1306,
        'endLine' => 1325,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'buildRevisionCacheId' => 
      array (
        'name' => 'buildRevisionCacheId',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1336,
            'endLine' => 1336,
            'startColumn' => 43,
            'endColumn' => 45,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Builds the cache ID for the passed in revision ID.
 *
 * @param int $id
 *   Entity ID or revision ID for which the cache ID should be built.
 *
 * @return string
 *   Cache ID that can be passed to the cache backend.
 */',
        'startLine' => 1336,
        'endLine' => 1338,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'getFromStaticRevisionCache' => 
      array (
        'name' => 'getFromStaticRevisionCache',
        'parameters' => 
        array (
          'revision_ids' => 
          array (
            'name' => 'revision_ids',
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
            'startLine' => 1349,
            'endLine' => 1349,
            'startColumn' => 49,
            'endColumn' => 67,
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
 * Gets entity revisions from the static cache.
 *
 * @param int[] $revision_ids
 *   Revision IDs to return from the static revision cache.
 *
 * @return \\Drupal\\Core\\Entity\\ContentEntityInterface[]
 *   An array of revisions from the cache.
 */',
        'startLine' => 1349,
        'endLine' => 1364,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'setStaticCache' => 
      array (
        'name' => 'setStaticCache',
        'parameters' => 
        array (
          'entities' => 
          array (
            'name' => 'entities',
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
            'startLine' => 1372,
            'endLine' => 1372,
            'startColumn' => 37,
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
 * Stores entities in the static entity and entity revision cache.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface[] $entities
 *   Entities to store in the cache.
 */',
        'startLine' => 1372,
        'endLine' => 1385,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'loadUnchanged' => 
      array (
        'name' => 'loadUnchanged',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1390,
            'endLine' => 1390,
            'startColumn' => 33,
            'endColumn' => 35,
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
 * {@inheritdoc}
 */',
        'startLine' => 1390,
        'endLine' => 1432,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'resetCache' => 
      array (
        'name' => 'resetCache',
        'parameters' => 
        array (
          'ids' => 
          array (
            'name' => 'ids',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 1445,
                'endLine' => 1445,
                'startTokenPos' => 7601,
                'startFilePos' => 54068,
                'endTokenPos' => 7601,
                'endFilePos' => 54071,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1445,
            'endLine' => 1445,
            'startColumn' => 30,
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
 * Resets the entity cache.
 *
 * Content entities have both an in-memory static cache and a persistent
 * cache. Use this method to clear all caches. To clear just the in-memory
 * cache, use the \'entity.memory_cache\' service.
 *
 * @param array $ids
 *   (optional) If specified, the cache is reset for the entities with the
 *   given ids only.
 */',
        'startLine' => 1445,
        'endLine' => 1481,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 1492,
            'endLine' => 1492,
            'startColumn' => 25,
            'endColumn' => 36,
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
 * Warns about deprecated/removed properties.
 *
 * @param string $name
 *   The property to get the value of.
 *
 * @return mixed
 *   The value of the deprecated/removed $name property.
 */',
        'startLine' => 1492,
        'endLine' => 1500,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'aliasName' => NULL,
      ),
      'resetRevisionCache' => 
      array (
        'name' => 'resetRevisionCache',
        'parameters' => 
        array (
          'revision_ids' => 
          array (
            'name' => 'revision_ids',
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
            'startLine' => 1509,
            'endLine' => 1509,
            'startColumn' => 41,
            'endColumn' => 59,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the static and persistent revision caches.
 *
 * @param int[] $revision_ids
 *   The entity revision IDs to reset the static and persistent revision
 *   caches for.
 */',
        'startLine' => 1509,
        'endLine' => 1520,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
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