<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ConfigEntityStorage.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Config\Entity\ConfigEntityStorage
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-24d42c2b7ce4473fa8ebb66e43d052bbb28640a7b5ab4f8156017a62f51c2669-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ConfigEntityStorage.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Config\\Entity',
    'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
    'shortName' => 'ConfigEntityStorage',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the storage class for configuration entities.
 *
 * Configuration object names of configuration entities are comprised of two
 * parts, separated by a dot:
 * - config_prefix: A string denoting the owner (module/extension) of the
 *   configuration object, followed by arbitrary other namespace identifiers
 *   that are declared by the owning extension; e.g., \'node.type\'. The
 *   config_prefix does NOT contain a trailing dot. It is defined by the entity
 *   type\'s annotation.
 * - ID: A string denoting the entity ID within the entity type namespace; e.g.,
 *   \'article\'. Entity IDs may contain dots/periods. The entire remaining string
 *   after the config_prefix in a config name forms the entity ID. Additional or
 *   custom suffixes are not possible.
 *
 * @ingroup entity_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 36,
    'endLine' => 485,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Entity\\EntityStorageBase',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
      1 => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'MAX_ID_LENGTH' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'name' => 'MAX_ID_LENGTH',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '166',
          'attributes' => 
          array (
            'startLine' => 51,
            'endLine' => 51,
            'startTokenPos' => 99,
            'startFilePos' => 2265,
            'endTokenPos' => 99,
            'endFilePos' => 2267,
          ),
        ),
        'docComment' => '/**
 * Length limit of the configuration entity ID.
 *
 * Most file systems limit a file name\'s length to 255 characters, so
 * ConfigBase::MAX_NAME_LENGTH restricts the full configuration object name
 * to 250 characters (leaving 5 for the file extension). The config prefix
 * is limited by ConfigEntityType::PREFIX_LENGTH to 83 characters, so this
 * leaves 166 remaining characters for the configuration entity ID, with 1
 * additional character needed for the joining dot.
 *
 * @see \\Drupal\\Core\\Config\\ConfigBase::MAX_NAME_LENGTH
 * @see \\Drupal\\Core\\Config\\Entity\\ConfigEntityType::PREFIX_LENGTH
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 3,
        'endColumn' => 28,
      ),
    ),
    'immediateProperties' => 
    array (
      'uuidKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'name' => 'uuidKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'uuid\'',
          'attributes' => 
          array (
            'startLine' => 56,
            'endLine' => 56,
            'startTokenPos' => 110,
            'startFilePos' => 2325,
            'endTokenPos' => 110,
            'endFilePos' => 2330,
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'configFactory' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'name' => 'configFactory',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The config factory service.
 *
 * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'configStorage' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'name' => 'configStorage',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The config storage service.
 *
 * @var \\Drupal\\Core\\Config\\StorageInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 70,
        'endLine' => 70,
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
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 3,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'overrideFree' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'name' => 'overrideFree',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 84,
            'endLine' => 84,
            'startTokenPos' => 142,
            'startFilePos' => 2860,
            'endTokenPos' => 142,
            'endFilePos' => 2864,
          ),
        ),
        'docComment' => '/**
 * Determines if the underlying configuration is retrieved override free.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 3,
        'endColumn' => 34,
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
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 31,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'config_factory' => 
          array (
            'name' => 'config_factory',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 65,
            'endColumn' => 102,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'uuid_service' => 
          array (
            'name' => 'uuid_service',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Component\\Uuid\\UuidInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 105,
            'endColumn' => 131,
            'parameterIndex' => 2,
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
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 134,
            'endColumn' => 175,
            'parameterIndex' => 3,
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
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 178,
            'endColumn' => 211,
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
 * Constructs a ConfigEntityStorage object.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition.
 * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
 *   The config factory service.
 * @param \\Drupal\\Component\\Uuid\\UuidInterface $uuid_service
 *   The UUID service.
 * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
 *   The language manager.
 * @param \\Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface $memory_cache
 *   The memory cache backend.
 */',
        'startLine' => 100,
        'endLine' => 106,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
            'startLine' => 111,
            'endLine' => 111,
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
            'startLine' => 111,
            'endLine' => 111,
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
        'startLine' => 111,
        'endLine' => 119,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'aliasName' => NULL,
      ),
      'getPrefix' => 
      array (
        'name' => 'getPrefix',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the prefix used to create the configuration name.
 *
 * The prefix consists of the config prefix from the entity type plus a dot
 * for separating from the ID.
 *
 * @return string
 *   The full configuration prefix, for example \'views.view.\'.
 */',
        'startLine' => 130,
        'endLine' => 132,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'aliasName' => NULL,
      ),
      'getIDFromConfigName' => 
      array (
        'name' => 'getIDFromConfigName',
        'parameters' => 
        array (
          'config_name' => 
          array (
            'name' => 'config_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 46,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'config_prefix' => 
          array (
            'name' => 'config_prefix',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 60,
            'endColumn' => 73,
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
        'startLine' => 137,
        'endLine' => 139,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
                'startLine' => 144,
                'endLine' => 144,
                'startTokenPos' => 370,
                'startFilePos' => 4835,
                'endTokenPos' => 370,
                'endFilePos' => 4838,
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
            'startLine' => 144,
            'endLine' => 144,
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
        'startLine' => 144,
        'endLine' => 195,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
            'startLine' => 200,
            'endLine' => 200,
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
        'startLine' => 200,
        'endLine' => 207,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
            'startLine' => 212,
            'endLine' => 212,
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
        'startLine' => 212,
        'endLine' => 216,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
            'startLine' => 224,
            'endLine' => 224,
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
 * Implements Drupal\\Core\\Entity\\EntityStorageInterface::save().
 *
 * @throws \\Drupal\\Core\\Entity\\EntityMalformedException
 *   When attempting to save a configuration entity that has no ID.
 */',
        'startLine' => 224,
        'endLine' => 240,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
            'startLine' => 245,
            'endLine' => 245,
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
            'startLine' => 245,
            'endLine' => 245,
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
        'startLine' => 245,
        'endLine' => 275,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
            'startLine' => 286,
            'endLine' => 286,
            'startColumn' => 41,
            'endColumn' => 63,
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
 * Maps from an entity object to the storage record.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity object.
 *
 * @return array
 *   The record to store.
 */',
        'startLine' => 286,
        'endLine' => 288,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
            'startLine' => 293,
            'endLine' => 293,
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
            'startLine' => 293,
            'endLine' => 293,
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
        'startLine' => 293,
        'endLine' => 297,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
        'startLine' => 302,
        'endLine' => 304,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
            'startLine' => 309,
            'endLine' => 309,
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
 * {@inheritdoc}
 */',
        'startLine' => 309,
        'endLine' => 311,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
                'startLine' => 316,
                'endLine' => 316,
                'startTokenPos' => 1379,
                'startFilePos' => 11090,
                'endTokenPos' => 1379,
                'endFilePos' => 11093,
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
            'startLine' => 316,
            'endLine' => 316,
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
        'startLine' => 316,
        'endLine' => 322,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
            'startLine' => 332,
            'endLine' => 332,
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
            'startLine' => 332,
            'endLine' => 332,
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
 *   One of \'presave\', \'insert\', \'update\', \'predelete\', or \'delete\'.
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity object.
 */',
        'startLine' => 332,
        'endLine' => 337,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
        'startLine' => 342,
        'endLine' => 344,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'aliasName' => NULL,
      ),
      'importCreate' => 
      array (
        'name' => 'importCreate',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 349,
            'endLine' => 349,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'new_config' => 
          array (
            'name' => 'new_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 349,
            'endLine' => 349,
            'startColumn' => 39,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'old_config' => 
          array (
            'name' => 'old_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 349,
            'endLine' => 349,
            'startColumn' => 59,
            'endColumn' => 76,
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
 * {@inheritdoc}
 */',
        'startLine' => 349,
        'endLine' => 353,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'aliasName' => NULL,
      ),
      'importUpdate' => 
      array (
        'name' => 'importUpdate',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 358,
            'endLine' => 358,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'new_config' => 
          array (
            'name' => 'new_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 358,
            'endLine' => 358,
            'startColumn' => 39,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'old_config' => 
          array (
            'name' => 'old_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 358,
            'endLine' => 358,
            'startColumn' => 59,
            'endColumn' => 76,
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
 * {@inheritdoc}
 */',
        'startLine' => 358,
        'endLine' => 368,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'aliasName' => NULL,
      ),
      'importDelete' => 
      array (
        'name' => 'importDelete',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 373,
            'endLine' => 373,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'new_config' => 
          array (
            'name' => 'new_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 373,
            'endLine' => 373,
            'startColumn' => 39,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'old_config' => 
          array (
            'name' => 'old_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 373,
            'endLine' => 373,
            'startColumn' => 59,
            'endColumn' => 76,
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
 * {@inheritdoc}
 */',
        'startLine' => 373,
        'endLine' => 379,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'aliasName' => NULL,
      ),
      'importRename' => 
      array (
        'name' => 'importRename',
        'parameters' => 
        array (
          'old_name' => 
          array (
            'name' => 'old_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 384,
            'endLine' => 384,
            'startColumn' => 32,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'new_config' => 
          array (
            'name' => 'new_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 384,
            'endLine' => 384,
            'startColumn' => 43,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'old_config' => 
          array (
            'name' => 'old_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 384,
            'endLine' => 384,
            'startColumn' => 63,
            'endColumn' => 80,
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
 * {@inheritdoc}
 */',
        'startLine' => 384,
        'endLine' => 386,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'aliasName' => NULL,
      ),
      'createFromStorageRecord' => 
      array (
        'name' => 'createFromStorageRecord',
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
            'startLine' => 391,
            'endLine' => 391,
            'startColumn' => 43,
            'endColumn' => 55,
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
        'startLine' => 391,
        'endLine' => 393,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'aliasName' => NULL,
      ),
      '_doCreateFromStorageRecord' => 
      array (
        'name' => '_doCreateFromStorageRecord',
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
            'startLine' => 412,
            'endLine' => 412,
            'startColumn' => 49,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'is_syncing' => 
          array (
            'name' => 'is_syncing',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 412,
                'endLine' => 412,
                'startTokenPos' => 1853,
                'startFilePos' => 14152,
                'endTokenPos' => 1853,
                'endFilePos' => 14156,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 412,
            'endLine' => 412,
            'startColumn' => 64,
            'endColumn' => 82,
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
 * Helps create a configuration entity from storage values.
 *
 * Allows the configuration entity storage to massage storage values before
 * creating an entity.
 *
 * @param array $values
 *   The array of values from the configuration storage.
 * @param bool $is_syncing
 *   Is the configuration entity being created as part of a config sync.
 *
 * @return \\Drupal\\Core\\Config\\Entity\\ConfigEntityInterface
 *   The configuration entity.
 *
 * @see \\Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface::createFromStorageRecord()
 * @see \\Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface::importCreate()
 */',
        'startLine' => 412,
        'endLine' => 430,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'aliasName' => NULL,
      ),
      'updateFromStorageRecord' => 
      array (
        'name' => 'updateFromStorageRecord',
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
                'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 435,
            'endLine' => 435,
            'startColumn' => 43,
            'endColumn' => 71,
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
            'startLine' => 435,
            'endLine' => 435,
            'startColumn' => 74,
            'endColumn' => 86,
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
        'startLine' => 435,
        'endLine' => 465,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'aliasName' => NULL,
      ),
      'loadOverrideFree' => 
      array (
        'name' => 'loadOverrideFree',
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
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 36,
            'endColumn' => 38,
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
        'startLine' => 470,
        'endLine' => 473,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'aliasName' => NULL,
      ),
      'loadMultipleOverrideFree' => 
      array (
        'name' => 'loadMultipleOverrideFree',
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
                'startLine' => 478,
                'endLine' => 478,
                'startTokenPos' => 2237,
                'startFilePos' => 16413,
                'endTokenPos' => 2237,
                'endFilePos' => 16416,
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
            'startLine' => 478,
            'endLine' => 478,
            'startColumn' => 44,
            'endColumn' => 61,
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
        'startLine' => 478,
        'endLine' => 483,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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