<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityTypeManagerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityTypeManagerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c945d36b76a975a6c2a28f17fc4ef93e50b8263054746023a8ead99eb6698f34-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityTypeManagerInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
    'shortName' => 'EntityTypeManagerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides an interface for entity type managers.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 156,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
      1 => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
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
            'startLine' => 22,
            'endLine' => 22,
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
 * Creates a new access control handler instance.
 *
 * @param string $entity_type_id
 *   The entity type ID for this access control handler.
 *
 * @return \\Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface
 *   An access control handler instance.
 */',
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
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
            'startLine' => 38,
            'endLine' => 38,
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
 * Creates a new storage instance.
 *
 * @param string $entity_type_id
 *   The entity type ID for this storage.
 *
 * @return \\Drupal\\Core\\Entity\\EntityStorageInterface
 *   A storage instance.
 *
 * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException
 *   Thrown if the entity type doesn\'t exist.
 * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException
 *   Thrown if the storage handler couldn\'t be loaded.
 */',
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
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
            'startLine' => 49,
            'endLine' => 49,
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
 * Creates a new view builder instance.
 *
 * @param string $entity_type_id
 *   The entity type ID for this view builder.
 *
 * @return \\Drupal\\Core\\Entity\\EntityViewBuilderInterface
 *   A view builder instance.
 */',
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
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
            'startLine' => 60,
            'endLine' => 60,
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
 * Creates a new entity list builder.
 *
 * @param string $entity_type_id
 *   The entity type ID for this list builder.
 *
 * @return \\Drupal\\Core\\Entity\\EntityListBuilderInterface
 *   An entity list builder instance.
 */',
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
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
            'startLine' => 73,
            'endLine' => 73,
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
            'startLine' => 73,
            'endLine' => 73,
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
 * Creates a new form instance.
 *
 * @param string $entity_type_id
 *   The entity type ID for this form.
 * @param string $operation
 *   The name of the operation to use, e.g., \'default\'.
 *
 * @return \\Drupal\\Core\\Entity\\EntityFormInterface
 *   A form instance.
 */',
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 3,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
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
            'startLine' => 84,
            'endLine' => 84,
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
 * Gets all route provider instances.
 *
 * @param string $entity_type_id
 *   The entity type ID for the route providers.
 *
 * @return \\Drupal\\Core\\Entity\\Routing\\EntityRouteProviderInterface[]
 *   An array of all the route providers for this entity type.
 */',
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
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
            'startLine' => 97,
            'endLine' => 97,
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
            'startLine' => 97,
            'endLine' => 97,
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
 * Checks whether a certain entity type has a certain handler.
 *
 * @param string $entity_type_id
 *   The ID of the entity type.
 * @param string $handler_type
 *   The name of the handler.
 *
 * @return bool
 *   Returns TRUE if the entity type has the handler, else FALSE.
 */',
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 3,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
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
            'startLine' => 119,
            'endLine' => 119,
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
            'startLine' => 119,
            'endLine' => 119,
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
 * Returns a handler instance for the given entity type and handler.
 *
 * Entity handlers are instantiated once per entity type and then cached
 * in the entity type manager, and so subsequent calls to getHandler() for
 * a particular entity type and handler type will return the same object.
 * This means that properties on a handler may be used as a static cache,
 * although as the handler is common to all entities of the same type,
 * any data that is per-entity should be keyed by the entity ID.
 *
 * @param string $entity_type_id
 *   The entity type ID for this handler.
 * @param string $handler_type
 *   The handler type to create an instance for.
 *
 * @return object
 *   A handler instance.
 *
 * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException
 */',
        'startLine' => 119,
        'endLine' => 119,
        'startColumn' => 3,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
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
            'startLine' => 136,
            'endLine' => 136,
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
                'startLine' => 136,
                'endLine' => 136,
                'startTokenPos' => 155,
                'startFilePos' => 4286,
                'endTokenPos' => 155,
                'endFilePos' => 4289,
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
            'startLine' => 136,
            'endLine' => 136,
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
 * Creates new handler instance.
 *
 * Usually \\Drupal\\Core\\Entity\\EntityTypeManagerInterface::getHandler() is
 * preferred since that method has additional checking that the class exists
 * and has static caches.
 *
 * @param mixed $class
 *   The handler class to instantiate.
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $definition
 *   The entity type definition.
 *
 * @return object
 *   A handler instance.
 */',
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 3,
        'endColumn' => 89,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
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
            'startLine' => 145,
            'endLine' => 145,
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
                'startLine' => 145,
                'endLine' => 145,
                'startTokenPos' => 174,
                'startFilePos' => 4568,
                'endTokenPos' => 174,
                'endFilePos' => 4571,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 145,
            'endLine' => 145,
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
 *
 * @return \\Drupal\\Core\\Entity\\EntityTypeInterface|null
 *   A plugin definition, or NULL if the plugin ID is invalid and
 *   $exception_on_invalid is FALSE.
 */',
        'startLine' => 145,
        'endLine' => 145,
        'startColumn' => 3,
        'endColumn' => 79,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'aliasName' => NULL,
      ),
      'getDefinitions' => 
      array (
        'name' => 'getDefinitions',
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
 *
 * @return \\Drupal\\Core\\Entity\\EntityTypeInterface[]
 *   An array of plugin definitions (empty array if no definitions were
 *   found). Keys are plugin IDs.
 */',
        'startLine' => 154,
        'endLine' => 154,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
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