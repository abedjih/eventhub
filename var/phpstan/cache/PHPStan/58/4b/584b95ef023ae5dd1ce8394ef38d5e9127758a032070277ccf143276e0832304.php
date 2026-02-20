<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Sql/SqlContentEntityStorage.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\Sql\SqlContentEntityStorage
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-396030ddb221e7f21b3b4244c0d1e1458b78637bbcc56cfc1151346a6fab27a9-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Sql/SqlContentEntityStorage.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity\\Sql',
    'name' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
    'shortName' => 'SqlContentEntityStorage',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A content entity database storage implementation.
 *
 * This class can be used as-is by most content entity types. Entity types
 * requiring special handling can extend the class.
 *
 * The class uses \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema
 * internally in order to automatically generate the database schema based on
 * the defined base fields. Entity types can override the schema handler to
 * customize the generated schema; e.g., to add additional indexes.
 *
 * @ingroup entity_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 43,
    'endLine' => 1812,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
      1 => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
      2 => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'fieldStorageDefinitions' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'fieldStorageDefinitions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The entity type\'s field storage definitions.
 *
 * @var \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 3,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tableMapping' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'tableMapping',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The mapping of field columns to SQL tables.
 *
 * @var \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'revisionKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'revisionKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 171,
            'startFilePos' => 2449,
            'endTokenPos' => 171,
            'endFilePos' => 2453,
          ),
        ),
        'docComment' => '/**
 * Name of entity\'s revision database table field, if it supports revisions.
 *
 * Has the value FALSE if this entity does not use revisions.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 3,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'langcodeKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'langcodeKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 182,
            'startFilePos' => 2553,
            'endTokenPos' => 182,
            'endFilePos' => 2557,
          ),
        ),
        'docComment' => '/**
 * The entity langcode key.
 *
 * @var string|bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 3,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultLangcodeKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'defaultLangcodeKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 80,
            'endLine' => 80,
            'startTokenPos' => 193,
            'startFilePos' => 2667,
            'endTokenPos' => 193,
            'endFilePos' => 2671,
          ),
        ),
        'docComment' => '/**
 * The default language entity key.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 3,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'baseTable' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'baseTable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The base table of the entity.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'revisionTable' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'revisionTable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The table that stores revisions, if the entity supports revisions.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dataTable' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'dataTable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The table that stores properties, if the entity has multilingual support.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 3,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'revisionDataTable' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'revisionDataTable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The table that stores revision field data if the entity supports revisions.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'database' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'database',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Active database connection.
 *
 * @var \\Drupal\\Core\\Database\\Connection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 3,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'storageSchema' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'storageSchema',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The entity type\'s storage schema object.
 *
 * @var \\Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'languageManager' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'languageManager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The language manager.
 *
 * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 129,
        'endLine' => 129,
        'startColumn' => 3,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entityTypeManager' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'entityTypeManager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The entity type manager.
 *
 * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'temporary' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'name' => 'temporary',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 143,
            'endLine' => 143,
            'startTokenPos' => 260,
            'startFilePos' => 3857,
            'endTokenPos' => 260,
            'endFilePos' => 3861,
          ),
        ),
        'docComment' => '/**
 * Whether this storage should use the temporary table mapping.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 143,
        'endLine' => 143,
        'startColumn' => 3,
        'endColumn' => 31,
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
            'startLine' => 148,
            'endLine' => 148,
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
            'startLine' => 148,
            'endLine' => 148,
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
        'startLine' => 148,
        'endLine' => 159,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
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
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 31,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 65,
            'endColumn' => 84,
            'parameterIndex' => 1,
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
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 87,
            'endColumn' => 135,
            'parameterIndex' => 2,
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
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 138,
            'endColumn' => 165,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'language_manager' => 
          array (
            'name' => 'language_manager',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 168,
            'endColumn' => 209,
            'parameterIndex' => 4,
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
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 212,
            'endColumn' => 245,
            'parameterIndex' => 5,
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
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 248,
            'endColumn' => 301,
            'parameterIndex' => 6,
            'isOptional' => false,
          ),
          'entity_type_manager' => 
          array (
            'name' => 'entity_type_manager',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 304,
            'endColumn' => 350,
            'parameterIndex' => 7,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs a SqlContentEntityStorage object.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition.
 * @param \\Drupal\\Core\\Database\\Connection $database
 *   The database connection to be used.
 * @param \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager
 *   The entity field manager.
 * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache
 *   The cache backend to be used.
 * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
 *   The language manager.
 * @param \\Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface $memory_cache
 *   The memory cache backend to be used.
 * @param \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface $entity_type_bundle_info
 *   The entity type bundle info.
 * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
 *   The entity type manager.
 */',
        'startLine' => 181,
        'endLine' => 190,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'initTableLayout' => 
      array (
        'name' => 'initTableLayout',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Initializes table name variables.
 */',
        'startLine' => 195,
        'endLine' => 220,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'getBaseTable' => 
      array (
        'name' => 'getBaseTable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the base table name.
 *
 * @return string
 *   The table name.
 */',
        'startLine' => 228,
        'endLine' => 230,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'getRevisionTable' => 
      array (
        'name' => 'getRevisionTable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the revision table name.
 *
 * @return string|false
 *   The table name or FALSE if it is not available.
 */',
        'startLine' => 238,
        'endLine' => 240,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'getDataTable' => 
      array (
        'name' => 'getDataTable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the data table name.
 *
 * @return string|false
 *   The table name or FALSE if it is not available.
 */',
        'startLine' => 248,
        'endLine' => 250,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'getRevisionDataTable' => 
      array (
        'name' => 'getRevisionDataTable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the revision data table name.
 *
 * @return string|false
 *   The table name or FALSE if it is not available.
 */',
        'startLine' => 258,
        'endLine' => 260,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'getStorageSchema' => 
      array (
        'name' => 'getStorageSchema',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the entity type\'s storage schema object.
 *
 * @return \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema
 *   The schema object.
 */',
        'startLine' => 268,
        'endLine' => 274,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'setEntityType' => 
      array (
        'name' => 'setEntityType',
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
            'startLine' => 285,
            'endLine' => 285,
            'startColumn' => 33,
            'endColumn' => 64,
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
 * Updates the wrapped entity type definition.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The update entity type.
 *
 * @internal Only to be used internally by Entity API. Expected to be
 *   removed by https://www.drupal.org/node/2274017.
 */',
        'startLine' => 285,
        'endLine' => 293,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'setFieldStorageDefinitions' => 
      array (
        'name' => 'setFieldStorageDefinitions',
        'parameters' => 
        array (
          'field_storage_definitions' => 
          array (
            'name' => 'field_storage_definitions',
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
            'startLine' => 303,
            'endLine' => 303,
            'startColumn' => 46,
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
 * Updates the internal list of field storage definitions.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
 *   An array of field storage definitions.
 *
 * @internal Only to be used internally by Entity API.
 */',
        'startLine' => 303,
        'endLine' => 311,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'setTableMapping' => 
      array (
        'name' => 'setTableMapping',
        'parameters' => 
        array (
          'table_mapping' => 
          array (
            'name' => 'table_mapping',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 322,
            'endLine' => 322,
            'startColumn' => 35,
            'endColumn' => 70,
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
 * Sets the wrapped table mapping definition.
 *
 * @param \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface $table_mapping
 *   The table mapping.
 *
 * @internal Only to be used internally by Entity API. Expected to be removed
 *   by https://www.drupal.org/node/2554235.
 */',
        'startLine' => 322,
        'endLine' => 329,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'setTemporary' => 
      array (
        'name' => 'setTemporary',
        'parameters' => 
        array (
          'temporary' => 
          array (
            'name' => 'temporary',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 339,
            'endLine' => 339,
            'startColumn' => 32,
            'endColumn' => 41,
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
 * Changes the temporary state of the storage.
 *
 * @param bool $temporary
 *   Whether to use a temporary table mapping or not.
 *
 * @internal Only to be used internally by Entity API.
 */',
        'startLine' => 339,
        'endLine' => 341,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'getTableMapping' => 
      array (
        'name' => 'getTableMapping',
        'parameters' => 
        array (
          'storage_definitions' => 
          array (
            'name' => 'storage_definitions',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 346,
                'endLine' => 346,
                'startTokenPos' => 1196,
                'startFilePos' => 11023,
                'endTokenPos' => 1196,
                'endFilePos' => 11026,
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
            'startLine' => 346,
            'endLine' => 346,
            'startColumn' => 35,
            'endColumn' => 68,
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
        'startLine' => 346,
        'endLine' => 361,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'getCustomTableMapping' => 
      array (
        'name' => 'getCustomTableMapping',
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
                'name' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 380,
            'endLine' => 380,
            'startColumn' => 41,
            'endColumn' => 79,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'storage_definitions' => 
          array (
            'name' => 'storage_definitions',
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
            'startLine' => 380,
            'endLine' => 380,
            'startColumn' => 82,
            'endColumn' => 107,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 380,
                'endLine' => 380,
                'startTokenPos' => 1304,
                'startFilePos' => 12443,
                'endTokenPos' => 1304,
                'endFilePos' => 12444,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 380,
            'endLine' => 380,
            'startColumn' => 110,
            'endColumn' => 121,
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
 * Gets a table mapping for the specified entity type and storage definitions.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
 *   An entity type definition.
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $storage_definitions
 *   An array of field storage definitions to be used to compute the table
 *   mapping.
 * @param string $prefix
 *   (optional) A prefix to be used by all the tables of this mapping.
 *   Defaults to an empty string.
 *
 * @return \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface
 *   A table mapping object for the entity\'s tables.
 *
 * @internal
 */',
        'startLine' => 380,
        'endLine' => 383,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
                'startLine' => 388,
                'endLine' => 388,
                'startTokenPos' => 1366,
                'startFilePos' => 12679,
                'endTokenPos' => 1366,
                'endFilePos' => 12682,
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
            'startLine' => 388,
            'endLine' => 388,
            'startColumn' => 37,
            'endColumn' => 54,
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
        'startLine' => 388,
        'endLine' => 400,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'getFromStorage' => 
      array (
        'name' => 'getFromStorage',
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
                'startLine' => 412,
                'endLine' => 412,
                'startTokenPos' => 1450,
                'startFilePos' => 13507,
                'endTokenPos' => 1450,
                'endFilePos' => 13510,
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
            'startLine' => 412,
            'endLine' => 412,
            'startColumn' => 37,
            'endColumn' => 54,
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
 * Gets entities from the storage.
 *
 * @param array|null $ids
 *   If not empty, return entities that match these IDs. Return all entities
 *   when NULL.
 *
 * @return \\Drupal\\Core\\Entity\\ContentEntityInterface[]
 *   Array of entities from the storage.
 */',
        'startLine' => 412,
        'endLine' => 433,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
          'load_from_revision' => 
          array (
            'name' => 'load_from_revision',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 448,
                'endLine' => 448,
                'startTokenPos' => 1591,
                'startFilePos' => 14642,
                'endTokenPos' => 1591,
                'endFilePos' => 14646,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 448,
            'endLine' => 448,
            'startColumn' => 60,
            'endColumn' => 86,
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
 * Maps from storage records to entity objects, and attaches fields.
 *
 * @param array $records
 *   Associative array of query results, keyed on the entity ID or revision
 *   ID.
 * @param bool $load_from_revision
 *   (optional) Flag to indicate whether revisions should be loaded or not.
 *   Defaults to FALSE.
 *
 * @return array
 *   An array of entity objects implementing the EntityInterface.
 */',
        'startLine' => 448,
        'endLine' => 514,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'loadFromSharedTables' => 
      array (
        'name' => 'loadFromSharedTables',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 527,
            'endLine' => 527,
            'startColumn' => 43,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'translations' => 
          array (
            'name' => 'translations',
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
            'startLine' => 527,
            'endLine' => 527,
            'startColumn' => 59,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'load_from_revision' => 
          array (
            'name' => 'load_from_revision',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 527,
            'endLine' => 527,
            'startColumn' => 81,
            'endColumn' => 99,
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
 * Loads values for fields stored in the shared data tables.
 *
 * @param array &$values
 *   Associative array of entities values, keyed on the entity ID or the
 *   revision ID.
 * @param array &$translations
 *   List of translations, keyed on the entity ID.
 * @param bool $load_from_revision
 *   Flag to indicate whether revisions should be loaded or not.
 */',
        'startLine' => 527,
        'endLine' => 610,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 615,
            'endLine' => 615,
            'startColumn' => 56,
            'endColumn' => 68,
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
        'startLine' => 615,
        'endLine' => 634,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 639,
            'endLine' => 639,
            'startColumn' => 49,
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
 * {@inheritdoc}
 */',
        'startLine' => 639,
        'endLine' => 651,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 656,
            'endLine' => 656,
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
            'startLine' => 656,
            'endLine' => 656,
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
 * {@inheritdoc}
 */',
        'startLine' => 656,
        'endLine' => 674,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'buildQuery' => 
      array (
        'name' => 'buildQuery',
        'parameters' => 
        array (
          'ids' => 
          array (
            'name' => 'ids',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 695,
            'endLine' => 695,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'revision_ids' => 
          array (
            'name' => 'revision_ids',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 695,
                'endLine' => 695,
                'startTokenPos' => 3330,
                'startFilePos' => 25659,
                'endTokenPos' => 3330,
                'endFilePos' => 25663,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 695,
            'endLine' => 695,
            'startColumn' => 39,
            'endColumn' => 59,
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
 * Builds the query to load the entity.
 *
 * This has full revision support. For entities requiring special queries,
 * the class can be extended, and the default query can be constructed by
 * calling parent::buildQuery(). This is usually necessary when the object
 * being loaded needs to be augmented with additional data from another
 * table, such as loading vocabulary machine name into terms, however it
 * can also support $conditions on different tables.
 *
 * @param array|null $ids
 *   An array of entity IDs, or NULL to load all entities.
 * @param array|bool $revision_ids
 *   The IDs of the revisions to load, or FALSE if this query is asking for
 *   the default revisions. Defaults to FALSE.
 *
 * @return \\Drupal\\Core\\Database\\Query\\SelectInterface
 *   A SelectQuery object for loading the entity.
 */',
        'startLine' => 695,
        'endLine' => 740,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 745,
            'endLine' => 745,
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
        'startLine' => 745,
        'endLine' => 765,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 770,
            'endLine' => 770,
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
 * {@inheritdoc}
 */',
        'startLine' => 770,
        'endLine' => 796,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 801,
            'endLine' => 801,
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
        'startLine' => 801,
        'endLine' => 817,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 822,
            'endLine' => 822,
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
        'startLine' => 822,
        'endLine' => 866,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 871,
            'endLine' => 871,
            'startColumn' => 39,
            'endColumn' => 68,
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
                'startLine' => 871,
                'endLine' => 871,
                'startTokenPos' => 4512,
                'startFilePos' => 31312,
                'endTokenPos' => 4513,
                'endFilePos' => 31313,
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
            'startLine' => 871,
            'endLine' => 871,
            'startColumn' => 71,
            'endColumn' => 87,
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
        'startLine' => 871,
        'endLine' => 970,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 975,
            'endLine' => 975,
            'startColumn' => 26,
            'endColumn' => 28,
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
            'startLine' => 975,
            'endLine' => 975,
            'startColumn' => 31,
            'endColumn' => 53,
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
        'startLine' => 975,
        'endLine' => 977,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'saveToSharedTables' => 
      array (
        'name' => 'saveToSharedTables',
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
            'startLine' => 990,
            'endLine' => 990,
            'startColumn' => 41,
            'endColumn' => 70,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table_name' => 
          array (
            'name' => 'table_name',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 990,
                'endLine' => 990,
                'startTokenPos' => 5280,
                'startFilePos' => 35780,
                'endTokenPos' => 5280,
                'endFilePos' => 35783,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 990,
            'endLine' => 990,
            'startColumn' => 73,
            'endColumn' => 90,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'new_revision' => 
          array (
            'name' => 'new_revision',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 990,
                'endLine' => 990,
                'startTokenPos' => 5287,
                'startFilePos' => 35802,
                'endTokenPos' => 5287,
                'endFilePos' => 35805,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 990,
            'endLine' => 990,
            'startColumn' => 93,
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
 * Saves fields that use the shared tables.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   The entity object.
 * @param string $table_name
 *   (optional) The table name to save to. Defaults to the data table.
 * @param bool $new_revision
 *   (optional) Whether we are dealing with a new revision. By default fetches
 *   the information from the entity object.
 */',
        'startLine' => 990,
        'endLine' => 1020,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'mapToStorageRecord' => 
      array (
        'name' => 'mapToStorageRecord',
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
            'startLine' => 1033,
            'endLine' => 1033,
            'startColumn' => 41,
            'endColumn' => 70,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table_name' => 
          array (
            'name' => 'table_name',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 1033,
                'endLine' => 1033,
                'startTokenPos' => 5553,
                'startFilePos' => 37166,
                'endTokenPos' => 5553,
                'endFilePos' => 37169,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1033,
            'endLine' => 1033,
            'startColumn' => 73,
            'endColumn' => 90,
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
 * Maps from an entity object to the storage record.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   The entity object.
 * @param string $table_name
 *   (optional) The table name to map records to. Defaults to the base table.
 *
 * @return object
 *   The record to store.
 */',
        'startLine' => 1033,
        'endLine' => 1082,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'isColumnSerial' => 
      array (
        'name' => 'isColumnSerial',
        'parameters' => 
        array (
          'table_name' => 
          array (
            'name' => 'table_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1095,
            'endLine' => 1095,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'schema_name' => 
          array (
            'name' => 'schema_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1095,
            'endLine' => 1095,
            'startColumn' => 50,
            'endColumn' => 61,
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
 * Checks whether a field column should be treated as serial.
 *
 * @param string $table_name
 *   The name of the table the field column belongs to.
 * @param string $schema_name
 *   The schema name of the field column.
 *
 * @return bool
 *   TRUE if the column is serial, FALSE otherwise.
 */',
        'startLine' => 1095,
        'endLine' => 1109,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'mapToDataStorageRecord' => 
      array (
        'name' => 'mapToDataStorageRecord',
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
            'startLine' => 1122,
            'endLine' => 1122,
            'startColumn' => 45,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table_name' => 
          array (
            'name' => 'table_name',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 1122,
                'endLine' => 1122,
                'startTokenPos' => 6040,
                'startFilePos' => 40398,
                'endTokenPos' => 6040,
                'endFilePos' => 40401,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1122,
            'endLine' => 1122,
            'startColumn' => 70,
            'endColumn' => 87,
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
 * Maps from an entity object to the storage record of the field data.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity object.
 * @param string $table_name
 *   (optional) The table name to map records to. Defaults to the data table.
 *
 * @return object
 *   The record to store.
 */',
        'startLine' => 1122,
        'endLine' => 1128,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'saveRevision' => 
      array (
        'name' => 'saveRevision',
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
            'startLine' => 1139,
            'endLine' => 1139,
            'startColumn' => 35,
            'endColumn' => 64,
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
 * Saves an entity revision.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   The entity object.
 *
 * @return int
 *   The revision id.
 */',
        'startLine' => 1139,
        'endLine' => 1175,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
 * {@inheritdoc}
 */',
        'startLine' => 1180,
        'endLine' => 1182,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'loadFromDedicatedTables' => 
      array (
        'name' => 'loadFromDedicatedTables',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1192,
            'endLine' => 1192,
            'startColumn' => 46,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'load_from_revision' => 
          array (
            'name' => 'load_from_revision',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1192,
            'endLine' => 1192,
            'startColumn' => 62,
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
 * Loads values of fields stored in dedicated tables for a group of entities.
 *
 * @param array &$values
 *   An array of values keyed by entity ID.
 * @param bool $load_from_revision
 *   Flag to indicate whether revisions should be loaded or not.
 */',
        'startLine' => 1192,
        'endLine' => 1273,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'saveToDedicatedTables' => 
      array (
        'name' => 'saveToDedicatedTables',
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
            'startLine' => 1286,
            'endLine' => 1286,
            'startColumn' => 44,
            'endColumn' => 73,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'update' => 
          array (
            'name' => 'update',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 1286,
                'endLine' => 1286,
                'startTokenPos' => 7209,
                'startFilePos' => 47150,
                'endTokenPos' => 7209,
                'endFilePos' => 47153,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1286,
            'endLine' => 1286,
            'startColumn' => 76,
            'endColumn' => 89,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'names' => 
          array (
            'name' => 'names',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1286,
                'endLine' => 1286,
                'startTokenPos' => 7216,
                'startFilePos' => 47165,
                'endTokenPos' => 7217,
                'endFilePos' => 47166,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1286,
            'endLine' => 1286,
            'startColumn' => 92,
            'endColumn' => 102,
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
 * Saves values of fields that use dedicated tables.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   The entity.
 * @param bool $update
 *   TRUE if the entity is being updated, FALSE if it is being inserted.
 * @param string[] $names
 *   (optional) The names of the fields to be stored. Defaults to all the
 *   available fields.
 */',
        'startLine' => 1286,
        'endLine' => 1402,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'deleteFromDedicatedTables' => 
      array (
        'name' => 'deleteFromDedicatedTables',
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
            'startLine' => 1410,
            'endLine' => 1410,
            'startColumn' => 48,
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
 * Deletes values of fields in dedicated tables for all revisions.
 *
 * @param array $ids
 *   An array of entity IDs.
 */',
        'startLine' => 1410,
        'endLine' => 1427,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'deleteRevisionFromDedicatedTables' => 
      array (
        'name' => 'deleteRevisionFromDedicatedTables',
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
            'startLine' => 1435,
            'endLine' => 1435,
            'startColumn' => 56,
            'endColumn' => 85,
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
 * Deletes values of fields in dedicated tables for all revisions.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   The entity. It must have a revision ID.
 */',
        'startLine' => 1435,
        'endLine' => 1450,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'requiresEntityStorageSchemaChanges' => 
      array (
        'name' => 'requiresEntityStorageSchemaChanges',
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
            'startLine' => 1455,
            'endLine' => 1455,
            'startColumn' => 54,
            'endColumn' => 85,
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
            'startLine' => 1455,
            'endLine' => 1455,
            'startColumn' => 88,
            'endColumn' => 116,
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
        'startLine' => 1455,
        'endLine' => 1457,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'requiresFieldStorageSchemaChanges' => 
      array (
        'name' => 'requiresFieldStorageSchemaChanges',
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
            'startLine' => 1462,
            'endLine' => 1462,
            'startColumn' => 53,
            'endColumn' => 103,
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
            'startLine' => 1462,
            'endLine' => 1462,
            'startColumn' => 106,
            'endColumn' => 146,
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
        'startLine' => 1462,
        'endLine' => 1464,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'requiresEntityDataMigration' => 
      array (
        'name' => 'requiresEntityDataMigration',
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
            'startLine' => 1469,
            'endLine' => 1469,
            'startColumn' => 47,
            'endColumn' => 78,
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
            'startLine' => 1469,
            'endLine' => 1469,
            'startColumn' => 81,
            'endColumn' => 109,
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
        'startLine' => 1469,
        'endLine' => 1471,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'requiresFieldDataMigration' => 
      array (
        'name' => 'requiresFieldDataMigration',
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
            'startLine' => 1476,
            'endLine' => 1476,
            'startColumn' => 46,
            'endColumn' => 96,
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
            'startLine' => 1476,
            'endLine' => 1476,
            'startColumn' => 99,
            'endColumn' => 139,
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
        'startLine' => 1476,
        'endLine' => 1478,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'onEntityTypeCreate' => 
      array (
        'name' => 'onEntityTypeCreate',
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
            'startLine' => 1483,
            'endLine' => 1483,
            'startColumn' => 38,
            'endColumn' => 69,
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
        'startLine' => 1483,
        'endLine' => 1487,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'onEntityTypeUpdate' => 
      array (
        'name' => 'onEntityTypeUpdate',
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
            'startLine' => 1492,
            'endLine' => 1492,
            'startColumn' => 38,
            'endColumn' => 69,
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
            'startLine' => 1492,
            'endLine' => 1492,
            'startColumn' => 72,
            'endColumn' => 100,
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
        'startLine' => 1492,
        'endLine' => 1502,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'onEntityTypeDelete' => 
      array (
        'name' => 'onEntityTypeDelete',
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
            'startLine' => 1507,
            'endLine' => 1507,
            'startColumn' => 38,
            'endColumn' => 69,
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
        'startLine' => 1507,
        'endLine' => 1511,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'onFieldableEntityTypeCreate' => 
      array (
        'name' => 'onFieldableEntityTypeCreate',
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
            'startLine' => 1516,
            'endLine' => 1516,
            'startColumn' => 47,
            'endColumn' => 78,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'field_storage_definitions' => 
          array (
            'name' => 'field_storage_definitions',
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
            'startLine' => 1516,
            'endLine' => 1516,
            'startColumn' => 81,
            'endColumn' => 112,
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
        'startLine' => 1516,
        'endLine' => 1520,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'onFieldableEntityTypeUpdate' => 
      array (
        'name' => 'onFieldableEntityTypeUpdate',
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
            'startLine' => 1525,
            'endLine' => 1525,
            'startColumn' => 47,
            'endColumn' => 78,
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
            'startLine' => 1525,
            'endLine' => 1525,
            'startColumn' => 81,
            'endColumn' => 109,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'field_storage_definitions' => 
          array (
            'name' => 'field_storage_definitions',
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
            'startLine' => 1525,
            'endLine' => 1525,
            'startColumn' => 112,
            'endColumn' => 143,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'original_field_storage_definitions' => 
          array (
            'name' => 'original_field_storage_definitions',
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
            'startLine' => 1525,
            'endLine' => 1525,
            'startColumn' => 146,
            'endColumn' => 186,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'sandbox' => 
          array (
            'name' => 'sandbox',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 1525,
                'endLine' => 1525,
                'startTokenPos' => 8837,
                'startFilePos' => 56203,
                'endTokenPos' => 8837,
                'endFilePos' => 56206,
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
            'startLine' => 1525,
            'endLine' => 1525,
            'startColumn' => 189,
            'endColumn' => 211,
            'parameterIndex' => 4,
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
        'startLine' => 1525,
        'endLine' => 1529,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 1534,
            'endLine' => 1534,
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
        'startLine' => 1534,
        'endLine' => 1540,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 1545,
            'endLine' => 1545,
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
            'startLine' => 1545,
            'endLine' => 1545,
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
        'startLine' => 1545,
        'endLine' => 1551,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 1556,
            'endLine' => 1556,
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
        'startLine' => 1556,
        'endLine' => 1578,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'wrapSchemaException' => 
      array (
        'name' => 'wrapSchemaException',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1589,
            'endLine' => 1589,
            'startColumn' => 42,
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
 * Wraps a database schema exception into an entity storage exception.
 *
 * @param callable $callback
 *   The callback to be executed.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *   When a database schema exception is thrown.
 */',
        'startLine' => 1589,
        'endLine' => 1602,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 1607,
            'endLine' => 1607,
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
        'startLine' => 1607,
        'endLine' => 1625,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'onBundleCreate' => 
      array (
        'name' => 'onBundleCreate',
        'parameters' => 
        array (
          'bundle' => 
          array (
            'name' => 'bundle',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1630,
            'endLine' => 1630,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity_type_id' => 
          array (
            'name' => 'entity_type_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1630,
            'endLine' => 1630,
            'startColumn' => 43,
            'endColumn' => 57,
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
        'startLine' => 1630,
        'endLine' => 1630,
        'startColumn' => 3,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'onBundleDelete' => 
      array (
        'name' => 'onBundleDelete',
        'parameters' => 
        array (
          'bundle' => 
          array (
            'name' => 'bundle',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1635,
            'endLine' => 1635,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity_type_id' => 
          array (
            'name' => 'entity_type_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1635,
            'endLine' => 1635,
            'startColumn' => 43,
            'endColumn' => 57,
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
        'startLine' => 1635,
        'endLine' => 1635,
        'startColumn' => 3,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 1640,
            'endLine' => 1640,
            'startColumn' => 44,
            'endColumn' => 85,
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
            'startLine' => 1640,
            'endLine' => 1640,
            'startColumn' => 88,
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
 * {@inheritdoc}
 */',
        'startLine' => 1640,
        'endLine' => 1696,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 1701,
            'endLine' => 1701,
            'startColumn' => 38,
            'endColumn' => 67,
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
            'startLine' => 1701,
            'endLine' => 1701,
            'startColumn' => 70,
            'endColumn' => 111,
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
        'startLine' => 1701,
        'endLine' => 1718,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
            'startLine' => 1723,
            'endLine' => 1723,
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
        'startLine' => 1723,
        'endLine' => 1725,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'countFieldData' => 
      array (
        'name' => 'countFieldData',
        'parameters' => 
        array (
          'storage_definition' => 
          array (
            'name' => 'storage_definition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1730,
            'endLine' => 1730,
            'startColumn' => 34,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as_bool' => 
          array (
            'name' => 'as_bool',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 1730,
                'endLine' => 1730,
                'startTokenPos' => 10362,
                'startFilePos' => 64355,
                'endTokenPos' => 10362,
                'endFilePos' => 64359,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1730,
            'endLine' => 1730,
            'startColumn' => 55,
            'endColumn' => 70,
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
        'startLine' => 1730,
        'endLine' => 1792,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'aliasName' => NULL,
      ),
      'handleNullableFieldUnserialize' => 
      array (
        'name' => 'handleNullableFieldUnserialize',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1803,
            'endLine' => 1803,
            'startColumn' => 53,
            'endColumn' => 64,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handles NULL values before passing data to unserialize().
 *
 * @param mixed|null $value
 *   The serialized value.
 *
 * @return mixed|null
 *   The unserialized data, or NULL if the original value is NULL.
 */',
        'startLine' => 1803,
        'endLine' => 1810,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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