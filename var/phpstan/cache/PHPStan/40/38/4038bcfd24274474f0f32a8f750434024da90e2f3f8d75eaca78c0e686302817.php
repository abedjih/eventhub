<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityTypeManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityTypeManager
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-abf36a9045c942aa8e1baf4119dd8ff8c37e7b5726622bf1ae5e32f3580efb46-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityTypeManager.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityTypeManager',
    'shortName' => 'EntityTypeManager',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Manages entity type plugin definitions.
 *
 * Each entity type definition array is set in the entity type\'s annotation and
 * altered by hook_entity_type_alter().
 *
 * Do not use hook_entity_type_alter() hook to add information to entity types,
 * unless one of the following is true:
 * - You are filling in default values.
 * - You need to dynamically add information only in certain circumstances.
 * - Your hook needs to run after hook_entity_type_build() implementations.
 * Use hook_entity_type_build() instead in all other cases.
 *
 * @see \\Drupal\\Core\\Entity\\Annotation\\EntityType
 * @see \\Drupal\\Core\\Entity\\EntityInterface
 * @see \\Drupal\\Core\\Entity\\EntityTypeInterface
 * @see hook_entity_type_alter()
 * @see hook_entity_type_build()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 36,
    'endLine' => 295,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'handlers' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'name' => 'handlers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 86,
            'startFilePos' => 1654,
            'endTokenPos' => 87,
            'endFilePos' => 1655,
          ),
        ),
        'docComment' => '/**
 * Contains instantiated handlers keyed by handler type and entity type.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'stringTranslation' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'name' => 'stringTranslation',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The string translation service.
 *
 * @var \\Drupal\\Core\\StringTranslation\\TranslationInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'classResolver' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'name' => 'classResolver',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The class resolver.
 *
 * @var \\Drupal\\Core\\DependencyInjection\\ClassResolverInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entityLastInstalledSchemaRepository' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'name' => 'entityLastInstalledSchemaRepository',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The entity last installed schema repository.
 *
 * @var \\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 3,
        'endColumn' => 49,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'container' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'name' => 'container',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 296,
        'endColumn' => 334,
        'isPromoted' => true,
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
          'namespaces' => 
          array (
            'name' => 'namespaces',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Traversable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 31,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'module_handler' => 
          array (
            'name' => 'module_handler',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 57,
            'endColumn' => 94,
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
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 97,
            'endColumn' => 124,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'string_translation' => 
          array (
            'name' => 'string_translation',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 127,
            'endColumn' => 166,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'class_resolver' => 
          array (
            'name' => 'class_resolver',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 169,
            'endColumn' => 206,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
          'entity_last_installed_schema_repository' => 
          array (
            'name' => 'entity_last_installed_schema_repository',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 209,
            'endColumn' => 293,
            'parameterIndex' => 5,
            'isOptional' => false,
          ),
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 296,
            'endColumn' => 334,
            'parameterIndex' => 6,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs a new Entity plugin manager.
 *
 * @param \\Traversable $namespaces
 *   An object that implements \\Traversable which contains the root paths
 *   keyed by the corresponding namespace to look for plugin implementations.
 * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
 *   The module handler.
 * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache
 *   The cache backend to use.
 * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $string_translation
 *   The string translation.
 * @param \\Drupal\\Core\\DependencyInjection\\ClassResolverInterface $class_resolver
 *   The class resolver.
 * @param \\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface $entity_last_installed_schema_repository
 *   The entity last installed schema repository.
 * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
 *   The service container.
 */',
        'startLine' => 85,
        'endLine' => 95,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'processDefinition' => 
      array (
        'name' => 'processDefinition',
        'parameters' => 
        array (
          'definition' => 
          array (
            'name' => 'definition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'plugin_id' => 
          array (
            'name' => 'plugin_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 51,
            'endColumn' => 60,
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
        'startLine' => 100,
        'endLine' => 110,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'findDefinitions' => 
      array (
        'name' => 'findDefinitions',
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
        'startLine' => 115,
        'endLine' => 126,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'getDefinition' => 
      array (
        'name' => 'getDefinition',
        'parameters' => 
        array (
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
            'startLine' => 131,
            'endLine' => 131,
            'startColumn' => 33,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exception_on_invalid' => 
          array (
            'name' => 'exception_on_invalid',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 131,
                'endLine' => 131,
                'startTokenPos' => 479,
                'startFilePos' => 5193,
                'endTokenPos' => 479,
                'endFilePos' => 5196,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 131,
            'endLine' => 131,
            'startColumn' => 50,
            'endColumn' => 77,
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
        'startLine' => 131,
        'endLine' => 140,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'getActiveDefinition' => 
      array (
        'name' => 'getActiveDefinition',
        'parameters' => 
        array (
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
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 39,
            'endColumn' => 53,
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
 * Gets the active definition for a content entity type.
 *
 * @param string $entity_type_id
 *   The entity type ID.
 *
 * @return \\Drupal\\Core\\Entity\\EntityTypeInterface
 *   The active entity type definition.
 *
 * @internal
 */',
        'startLine' => 153,
        'endLine' => 156,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
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
 * {@inheritdoc}
 */',
        'startLine' => 161,
        'endLine' => 164,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
                'startLine' => 169,
                'endLine' => 169,
                'startTokenPos' => 648,
                'startFilePos' => 6251,
                'endTokenPos' => 648,
                'endFilePos' => 6255,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 169,
            'endLine' => 169,
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
 * {@inheritdoc}
 */',
        'startLine' => 169,
        'endLine' => 175,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'hasHandler' => 
      array (
        'name' => 'hasHandler',
        'parameters' => 
        array (
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
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 30,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'handler_type' => 
          array (
            'name' => 'handler_type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 47,
            'endColumn' => 59,
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
        'startLine' => 180,
        'endLine' => 186,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'getStorage' => 
      array (
        'name' => 'getStorage',
        'parameters' => 
        array (
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
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 30,
            'endColumn' => 44,
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
        'startLine' => 191,
        'endLine' => 193,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'getListBuilder' => 
      array (
        'name' => 'getListBuilder',
        'parameters' => 
        array (
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
            'startLine' => 198,
            'endLine' => 198,
            'startColumn' => 34,
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
        'startLine' => 198,
        'endLine' => 200,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'getFormObject' => 
      array (
        'name' => 'getFormObject',
        'parameters' => 
        array (
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
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 33,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operation' => 
          array (
            'name' => 'operation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 50,
            'endColumn' => 59,
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
        'startLine' => 205,
        'endLine' => 224,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'getRouteProviders' => 
      array (
        'name' => 'getRouteProviders',
        'parameters' => 
        array (
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
            'startLine' => 229,
            'endLine' => 229,
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
 * {@inheritdoc}
 */',
        'startLine' => 229,
        'endLine' => 239,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'getViewBuilder' => 
      array (
        'name' => 'getViewBuilder',
        'parameters' => 
        array (
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
            'startLine' => 244,
            'endLine' => 244,
            'startColumn' => 34,
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
        'startLine' => 244,
        'endLine' => 246,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'getAccessControlHandler' => 
      array (
        'name' => 'getAccessControlHandler',
        'parameters' => 
        array (
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
            'startLine' => 251,
            'endLine' => 251,
            'startColumn' => 43,
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
 * {@inheritdoc}
 */',
        'startLine' => 251,
        'endLine' => 253,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'getHandler' => 
      array (
        'name' => 'getHandler',
        'parameters' => 
        array (
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
            'startLine' => 258,
            'endLine' => 258,
            'startColumn' => 30,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'handler_type' => 
          array (
            'name' => 'handler_type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 258,
            'endLine' => 258,
            'startColumn' => 47,
            'endColumn' => 59,
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
        'startLine' => 258,
        'endLine' => 273,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'aliasName' => NULL,
      ),
      'createHandlerInstance' => 
      array (
        'name' => 'createHandlerInstance',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 278,
            'endLine' => 278,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'definition' => 
          array (
            'name' => 'definition',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 278,
                'endLine' => 278,
                'startTokenPos' => 1425,
                'startFilePos' => 10224,
                'endTokenPos' => 1425,
                'endFilePos' => 10227,
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
                      'name' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 278,
            'endLine' => 278,
            'startColumn' => 49,
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
        'startLine' => 278,
        'endLine' => 293,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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