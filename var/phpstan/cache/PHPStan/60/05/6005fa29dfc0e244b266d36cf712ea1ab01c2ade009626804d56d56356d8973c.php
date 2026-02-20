<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityStorageBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityStorageBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-08a277617df79dd1054fc9ff37f70858b5c7acb829c773bca9628962a4707102-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityStorageBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityStorageBase',
    'shortName' => 'EntityStorageBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * A base entity storage class.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 699,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Entity\\EntityHandlerBase',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityStorageInterface',
      1 => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'entityTypeId' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'name' => 'entityTypeId',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Entity type ID for this storage.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entityType' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'name' => 'entityType',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Information about the entity type.
 *
 * @var \\Drupal\\Core\\Entity\\EntityTypeInterface
 *
 * The following code returns the same object:
 * @code
 * \\Drupal::entityTypeManager()->getDefinition($this->entityTypeId)
 * @endcode
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'idKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'name' => 'idKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Name of the entity\'s ID field in the entity database table.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'uuidKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'name' => 'uuidKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Name of entity\'s UUID database table field, if it supports UUIDs.
 *
 * Has the value FALSE if this entity does not use UUIDs.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 3,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'langcodeKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'name' => 'langcodeKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the entity langcode property.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'uuidService' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'name' => 'uuidService',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The UUID service.
 *
 * @var \\Drupal\\Component\\Uuid\\UuidInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61,
        'endLine' => 61,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'baseEntityClass' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'name' => 'baseEntityClass',
        'modifiers' => 4,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Name of the base entity class.
 *
 * This is a private property since it\'s not meant to be set by child classes.
 * It holds the name of the entity class defined in the entity type that is
 * passed in to the constructor when instantiating an entity storage class.
 *
 * Normally, the entity class is defined via an annotation when defining an
 * entity type, via hook_entity_bundle_info() or via
 * hook_entity_bundle_info_alter(). However, due to how this property works,
 * the entity class can also be controlled via hook_entity_type_alter().
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'memoryCache' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'name' => 'memoryCache',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The memory cache.
 *
 * @var \\Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'memoryCacheTag' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'name' => 'memoryCacheTag',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The memory cache tag.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 91,
        'endLine' => 91,
        'startColumn' => 3,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entityIdsToLoad' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'name' => 'entityIdsToLoad',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 96,
            'endLine' => 96,
            'startTokenPos' => 116,
            'startFilePos' => 2199,
            'endTokenPos' => 117,
            'endFilePos' => 2200,
          ),
        ),
        'docComment' => '/**
 * Entity IDs awaiting loading.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 96,
        'endLine' => 96,
        'startColumn' => 3,
        'endColumn' => 40,
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
            'startLine' => 106,
            'endLine' => 106,
            'startColumn' => 31,
            'endColumn' => 62,
            'parameterIndex' => 0,
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
            'startLine' => 106,
            'endLine' => 106,
            'startColumn' => 65,
            'endColumn' => 98,
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
 * Constructs an EntityStorageBase instance.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition.
 * @param \\Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface $memory_cache
 *   The memory cache.
 */',
        'startLine' => 106,
        'endLine' => 115,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
                'startLine' => 120,
                'endLine' => 120,
                'startTokenPos' => 264,
                'startFilePos' => 3085,
                'endTokenPos' => 264,
                'endFilePos' => 3088,
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
            'startLine' => 120,
            'endLine' => 120,
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
        'startLine' => 120,
        'endLine' => 122,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'getEntityTypeId' => 
      array (
        'name' => 'getEntityTypeId',
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
        'startLine' => 127,
        'endLine' => 129,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'getEntityType' => 
      array (
        'name' => 'getEntityType',
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
        'startLine' => 134,
        'endLine' => 136,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'buildCacheId' => 
      array (
        'name' => 'buildCacheId',
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
            'startLine' => 147,
            'endLine' => 147,
            'startColumn' => 35,
            'endColumn' => 37,
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
 * Builds the cache ID for the passed in entity ID.
 *
 * @param int $id
 *   Entity ID for which the cache ID should be built.
 *
 * @return string
 *   Cache ID that can be passed to the cache backend.
 */',
        'startLine' => 147,
        'endLine' => 149,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
            'startLine' => 154,
            'endLine' => 154,
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
        'startLine' => 154,
        'endLine' => 157,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
                'startLine' => 162,
                'endLine' => 162,
                'startTokenPos' => 402,
                'startFilePos' => 3880,
                'endTokenPos' => 402,
                'endFilePos' => 3883,
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
            'startLine' => 162,
            'endLine' => 162,
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
 * {@inheritdoc}
 */',
        'startLine' => 162,
        'endLine' => 172,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'getFromStaticCache' => 
      array (
        'name' => 'getFromStaticCache',
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
            'startLine' => 183,
            'endLine' => 183,
            'startColumn' => 41,
            'endColumn' => 50,
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
 * Gets entities from the static cache.
 *
 * @param array $ids
 *   If not empty, return entities that match these IDs.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface[]
 *   Array of entities from the entity cache, keyed by entity ID.
 */',
        'startLine' => 183,
        'endLine' => 192,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
            'startLine' => 200,
            'endLine' => 200,
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
 * Stores entities in the static entity cache.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
 *   Entities to store in the cache.
 */',
        'startLine' => 200,
        'endLine' => 206,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
            'startLine' => 217,
            'endLine' => 217,
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
            'startLine' => 217,
            'endLine' => 217,
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
 * Invokes a hook on behalf of the entity.
 *
 * @param string $hook
 *   One of \'create\', \'presave\', \'insert\', \'update\', \'predelete\', \'delete\', or
 *   \'revision_delete\'.
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity object.
 */',
        'startLine' => 217,
        'endLine' => 222,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
                'startLine' => 227,
                'endLine' => 227,
                'startTokenPos' => 734,
                'startFilePos' => 5895,
                'endTokenPos' => 735,
                'endFilePos' => 5896,
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
        'startLine' => 227,
        'endLine' => 246,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
            'startLine' => 257,
            'endLine' => 257,
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
 * Performs storage-specific creation of entities.
 *
 * @param array $values
 *   An array of values to set, keyed by property name.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface
 *   The created entity.
 */',
        'startLine' => 257,
        'endLine' => 260,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'load' => 
      array (
        'name' => 'load',
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
            'startLine' => 265,
            'endLine' => 265,
            'startColumn' => 24,
            'endColumn' => 26,
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
        'startLine' => 265,
        'endLine' => 269,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'loadMultiple' => 
      array (
        'name' => 'loadMultiple',
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
                'startLine' => 274,
                'endLine' => 274,
                'startTokenPos' => 982,
                'startFilePos' => 7220,
                'endTokenPos' => 982,
                'endFilePos' => 7223,
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
            'startLine' => 274,
            'endLine' => 274,
            'startColumn' => 32,
            'endColumn' => 49,
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
        'startLine' => 274,
        'endLine' => 370,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'doLoadMultiple' => 
      array (
        'name' => 'doLoadMultiple',
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
                'startLine' => 385,
                'endLine' => 385,
                'startTokenPos' => 1519,
                'startFilePos' => 11795,
                'endTokenPos' => 1519,
                'endFilePos' => 11798,
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
            'startLine' => 385,
            'endLine' => 385,
            'startColumn' => 46,
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
 * Performs storage-specific loading of entities.
 *
 * Override this method to add custom functionality directly after loading.
 * This is always called, while self::postLoad() is only called when there are
 * actual results.
 *
 * @param array|null $ids
 *   (optional) An array of entity IDs, or NULL to load all entities.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface[]
 *   Associative array of entities, keyed on the entity ID.
 */',
        'startLine' => 385,
        'endLine' => 385,
        'startColumn' => 3,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
                'startLine' => 397,
                'endLine' => 397,
                'startTokenPos' => 1539,
                'startFilePos' => 12173,
                'endTokenPos' => 1539,
                'endFilePos' => 12176,
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
            'startLine' => 397,
            'endLine' => 397,
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
 * Gathers entities from a \'preload\' step.
 *
 * @param array|null &$ids
 *   If not empty, return entities that match these IDs. IDs that were found
 *   will be removed from the list.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface[]
 *   Associative array of entities, keyed by the entity ID.
 */',
        'startLine' => 397,
        'endLine' => 399,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'postLoad' => 
      array (
        'name' => 'postLoad',
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
            'startLine' => 412,
            'endLine' => 412,
            'startColumn' => 31,
            'endColumn' => 46,
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
 * Attaches data to entities upon loading.
 *
 * If there are multiple bundle classes involved, each one gets a sub array
 * with only the entities of the same bundle. If there\'s only a single bundle,
 * the entity\'s postLoad() method will get a copy of the original $entities
 * array.
 *
 * @param array $entities
 *   Associative array of query results, keyed on the entity ID.
 */',
        'startLine' => 412,
        'endLine' => 437,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'mapFromStorageRecords' => 
      array (
        'name' => 'mapFromStorageRecords',
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
            'startLine' => 448,
            'endLine' => 448,
            'startColumn' => 44,
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
        'docComment' => '/**
 * Maps from storage records to entity objects.
 *
 * @param array $records
 *   Associative array of query results, keyed on the entity ID.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface[]
 *   An array of entity objects implementing the EntityInterface.
 */',
        'startLine' => 448,
        'endLine' => 461,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'has' => 
      array (
        'name' => 'has',
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
            'startLine' => 474,
            'endLine' => 474,
            'startColumn' => 35,
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
            'startLine' => 474,
            'endLine' => 474,
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
 * Determines if this entity already exists in storage.
 *
 * @param int|string $id
 *   The original entity ID.
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity being saved.
 *
 * @return bool
 *   TRUE if this entity exists in storage, FALSE otherwise.
 */',
        'startLine' => 474,
        'endLine' => 474,
        'startColumn' => 3,
        'endColumn' => 64,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
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
            'startLine' => 479,
            'endLine' => 479,
            'startColumn' => 26,
            'endColumn' => 40,
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
        'startLine' => 479,
        'endLine' => 504,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
            'startLine' => 512,
            'endLine' => 512,
            'startColumn' => 40,
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
 * Performs storage-specific entity deletion.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
 *   An array of entity objects to delete.
 */',
        'startLine' => 512,
        'endLine' => 512,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'save' => 
      array (
        'name' => 'save',
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
            'startLine' => 517,
            'endLine' => 517,
            'startColumn' => 24,
            'endColumn' => 46,
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
        'startLine' => 517,
        'endLine' => 531,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
            'startLine' => 545,
            'endLine' => 545,
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
 * Performs presave entity processing.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The saved entity.
 *
 * @return int|string|null
 *   The processed entity identifier, or null for new entities.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *   If the entity identifier is invalid.
 */',
        'startLine' => 545,
        'endLine' => 571,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
            'startLine' => 585,
            'endLine' => 585,
            'startColumn' => 38,
            'endColumn' => 40,
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
            'startLine' => 585,
            'endLine' => 585,
            'startColumn' => 43,
            'endColumn' => 65,
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
 * Performs storage-specific saving of the entity.
 *
 * @param int|string $id
 *   The original entity ID.
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity to save.
 *
 * @return bool|int
 *   If the record insert or update failed, returns FALSE. If it succeeded,
 *   returns SAVED_NEW or SAVED_UPDATED, depending on the operation performed.
 */',
        'startLine' => 585,
        'endLine' => 585,
        'startColumn' => 3,
        'endColumn' => 67,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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
            'startLine' => 595,
            'endLine' => 595,
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
            'startLine' => 595,
            'endLine' => 595,
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
 * Performs post save entity processing.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The saved entity.
 * @param bool $update
 *   Specifies whether the entity is being updated or created.
 */',
        'startLine' => 595,
        'endLine' => 611,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'restore' => 
      array (
        'name' => 'restore',
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
            'startLine' => 616,
            'endLine' => 616,
            'startColumn' => 27,
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
 * {@inheritdoc}
 */',
        'startLine' => 616,
        'endLine' => 619,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'buildPropertyQuery' => 
      array (
        'name' => 'buildPropertyQuery',
        'parameters' => 
        array (
          'entity_query' => 
          array (
            'name' => 'entity_query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 631,
            'endLine' => 631,
            'startColumn' => 41,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 631,
            'endLine' => 631,
            'startColumn' => 71,
            'endColumn' => 83,
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
 * Builds an entity query.
 *
 * @param \\Drupal\\Core\\Entity\\Query\\QueryInterface $entity_query
 *   EntityQuery instance.
 * @param array $values
 *   An associative array where the keys are the property names and the
 *   values are the values those properties must have. If a property takes
 *   multiple values, passing an array of values will produce an IN condition.
 */',
        'startLine' => 631,
        'endLine' => 636,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'loadByProperties' => 
      array (
        'name' => 'loadByProperties',
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
                'startLine' => 641,
                'endLine' => 641,
                'startTokenPos' => 2563,
                'startFilePos' => 20021,
                'endTokenPos' => 2564,
                'endFilePos' => 20022,
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
            'startLine' => 641,
            'endLine' => 641,
            'startColumn' => 36,
            'endColumn' => 53,
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
        'startLine' => 641,
        'endLine' => 648,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'hasData' => 
      array (
        'name' => 'hasData',
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
        'startLine' => 653,
        'endLine' => 658,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'getQuery' => 
      array (
        'name' => 'getQuery',
        'parameters' => 
        array (
          'conjunction' => 
          array (
            'name' => 'conjunction',
            'default' => 
            array (
              'code' => '\'AND\'',
              'attributes' => 
              array (
                'startLine' => 663,
                'endLine' => 663,
                'startTokenPos' => 2690,
                'startFilePos' => 20548,
                'endTokenPos' => 2690,
                'endFilePos' => 20552,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 663,
            'endLine' => 663,
            'startColumn' => 28,
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
 * {@inheritdoc}
 */',
        'startLine' => 663,
        'endLine' => 665,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'getAggregateQuery' => 
      array (
        'name' => 'getAggregateQuery',
        'parameters' => 
        array (
          'conjunction' => 
          array (
            'name' => 'conjunction',
            'default' => 
            array (
              'code' => '\'AND\'',
              'attributes' => 
              array (
                'startLine' => 670,
                'endLine' => 670,
                'startTokenPos' => 2733,
                'startFilePos' => 20741,
                'endTokenPos' => 2733,
                'endFilePos' => 20745,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 670,
            'endLine' => 670,
            'startColumn' => 37,
            'endColumn' => 56,
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
        'startLine' => 670,
        'endLine' => 672,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'getQueryServiceName' => 
      array (
        'name' => 'getQueryServiceName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the name of the service for the query for this entity storage.
 *
 * @return string
 *   The name of the service for the query for this entity storage.
 */',
        'startLine' => 680,
        'endLine' => 680,
        'startColumn' => 3,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'aliasName' => NULL,
      ),
      'getEntitiesByClass' => 
      array (
        'name' => 'getEntitiesByClass',
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
            'startLine' => 691,
            'endLine' => 691,
            'startColumn' => 41,
            'endColumn' => 55,
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
 * Indexes the given array of entities by their class name and ID.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
 *   The array of entities to index.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface[][]
 *   An array of the passed-in entities, indexed by their class name and ID.
 */',
        'startLine' => 691,
        'endLine' => 697,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
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