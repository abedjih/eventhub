<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityTypeInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityTypeInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-bb864b3c47ebc91ae64461924682145b0999e2726cd523cb916a701525a4650b-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityTypeInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
    'shortName' => 'EntityTypeInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides an interface for an entity type and its metadata.
 *
 * Entity type classes can provide docblock annotations. The entity type manager
 * will use these annotations to populate the entity type object with
 * properties.
 *
 * Additional properties can be defined by module implementations of
 * hook_entity_type_build(). Existing data can be altered in implementations of
 * hook_entity_type_alter(), which can also be used to fill in defaults.
 * Module-specific properties should be documented in the hook implementations
 * defining them.
 *
 * @see \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
 * @see hook_entity_type_build()
 * @see hook_entity_type_alter()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 837,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'ID_MAX_LENGTH' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'name' => 'ID_MAX_LENGTH',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '32',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 29,
            'startTokenPos' => 32,
            'startFilePos' => 939,
            'endTokenPos' => 32,
            'endFilePos' => 940,
          ),
        ),
        'docComment' => '/**
 * The maximum length of ID, in characters.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 3,
        'endColumn' => 27,
      ),
      'BUNDLE_MAX_LENGTH' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'name' => 'BUNDLE_MAX_LENGTH',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '32',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 43,
            'startFilePos' => 1039,
            'endTokenPos' => 43,
            'endFilePos' => 1040,
          ),
        ),
        'docComment' => '/**
 * The maximum length of bundle name, in characters.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 3,
        'endColumn' => 31,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'property' => 
          array (
            'name' => 'property',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 23,
            'endColumn' => 31,
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
 * Gets any arbitrary property.
 *
 * @param string $property
 *   The property to retrieve.
 *
 * @return mixed
 *   The value for that property, or NULL if the property does not exist.
 */',
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'property' => 
          array (
            'name' => 'property',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 23,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 34,
            'endColumn' => 39,
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
 * Sets a value to an arbitrary property.
 *
 * @param string $property
 *   The property to use for the value.
 * @param mixed $value
 *   The value to set.
 *
 * @return $this
 */',
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getOriginalClass' => 
      array (
        'name' => 'getOriginalClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the name of the original entity type class.
 *
 * In case the class name was changed with setClass(), this will return
 * the initial value. Useful when trying to identify the entity type ID based
 * on the class.
 *
 * @return string
 *   The name of the original entity type class.
 */',
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getDecoratedClasses' => 
      array (
        'name' => 'getDecoratedClasses',
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
 * Gets the list of all the classes for this entity type.
 *
 * In case the class name was changed with setClass(), this will return
 * the list of all the changes.
 *
 * @return class-string[]
 *   The list of classes.
 */',
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 3,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getKeys' => 
      array (
        'name' => 'getKeys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets an array of entity keys.
 *
 * @return array
 *   An array describing how information can be extracted from entities of
 *   this entity type:
 *   - id: The name of the property that contains the primary ID of the
 *     entity. Entities that can be saved to storage must have this.
 *   - revision: (optional) The name of the property that contains the
 *     revision ID of the entity. It is assumed that all revision IDs are
 *     unique across all entities of a type. If this entry is omitted the
 *     entities of this type are not revisionable.
 *   - bundle: (optional) The name of the property that contains the bundle
 *     name for the entity. The bundle name defines which set of fields are
 *     attached to the entity (e.g. what nodes call "content type"). This
 *     entry can be omitted if this entity type exposes a single bundle (such
 *     that all entities have the same collection of fields). The name of this
 *     single bundle will be the same as the entity type.
 *   - label: (optional) The name of the property that contains the entity
 *     label. For example, if the entity\'s label is located in
 *     $entity->subject, then \'subject\' should be specified here. If complex
 *     logic is required to build the label,
 *     \\Drupal\\Core\\Entity\\EntityInterface::label() should be used.
 *   - langcode: (optional) The name of the property that contains the
 *     language code. For instance, if the entity\'s language is located in
 *     $entity->langcode, then \'langcode\' should be specified here.
 *   - uuid: (optional) The name of the property that contains the universally
 *     unique identifier of the entity, which is used to distinctly identify
 *     an entity across different systems.
 */',
        'startLine' => 112,
        'endLine' => 112,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getKey' => 
      array (
        'name' => 'getKey',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 26,
            'endColumn' => 29,
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
 * Gets a specific entity key.
 *
 * @param string $key
 *   The name of the entity key to return.
 *
 * @return string|false
 *   The entity key, or FALSE if it does not exist.
 *
 * @see self::getKeys()
 */',
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'hasKey' => 
      array (
        'name' => 'hasKey',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startColumn' => 26,
            'endColumn' => 29,
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
 * Indicates if a given entity key exists.
 *
 * @param string $key
 *   The name of the entity key to check.
 *
 * @return bool
 *   TRUE if a given entity key exists, FALSE otherwise.
 */',
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'isStaticallyCacheable' => 
      array (
        'name' => 'isStaticallyCacheable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates whether entities should be statically cached.
 *
 * @return bool
 *   TRUE if static caching should be used; FALSE otherwise.
 */',
        'startLine' => 144,
        'endLine' => 144,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'isRenderCacheable' => 
      array (
        'name' => 'isRenderCacheable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates whether the rendered output of entities should be cached.
 *
 * @return bool
 *   TRUE if the rendered output can be cached, FALSE otherwise.
 */',
        'startLine' => 152,
        'endLine' => 152,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'isPersistentlyCacheable' => 
      array (
        'name' => 'isPersistentlyCacheable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates if the persistent cache of field data should be used.
 *
 * @todo Used by ContentEntityStorageBase only.
 *
 * The persistent cache should usually only be disabled if a higher level
 * persistent cache is available for the entity type.
 *
 * @return bool
 *   TRUE if the persistent cache of field data is used, FALSE otherwise.
 */',
        'startLine' => 165,
        'endLine' => 165,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'hasHandlerClass' => 
      array (
        'name' => 'hasHandlerClass',
        'parameters' => 
        array (
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
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'nested' => 
          array (
            'name' => 'nested',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 179,
                'endLine' => 179,
                'startTokenPos' => 181,
                'startFilePos' => 5845,
                'endTokenPos' => 181,
                'endFilePos' => 5849,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 50,
            'endColumn' => 64,
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
 * Determines if there is a handler for a given type.
 *
 * @param string $handler_type
 *   The type of handler to check.
 * @param string|false $nested
 *   (optional) The nested handler definition key, or FALSE if the handler
 *   does not have a nested definition. Defaults to FALSE.
 *
 * @return bool
 *   TRUE if a handler of this type exists, FALSE otherwise.
 */',
        'startLine' => 179,
        'endLine' => 179,
        'startColumn' => 3,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getHandlerClass' => 
      array (
        'name' => 'getHandlerClass',
        'parameters' => 
        array (
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
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'nested' => 
          array (
            'name' => 'nested',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 191,
                'endLine' => 191,
                'startTokenPos' => 200,
                'startFilePos' => 6258,
                'endTokenPos' => 200,
                'endFilePos' => 6262,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 50,
            'endColumn' => 64,
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
 * @param string $handler_type
 *   The handler type to get.
 * @param string|false $nested
 *   (optional) The nested handler definition key, or FALSE if the handler
 *   does not have a nested definition. Defaults to FALSE.
 *
 * @return array|string|null
 *   The handlers for a given type, or NULL if none exist.
 */',
        'startLine' => 191,
        'endLine' => 191,
        'startColumn' => 3,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getHandlerClasses' => 
      array (
        'name' => 'getHandlerClasses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets an array of handlers.
 *
 * @return array
 *   An associative array where the keys are the names of different handler
 *   types (listed below) and the values are the names of the classes that
 *   implement that handler:
 *   - storage: The name of the class used to load the objects. The class must
 *     implement \\Drupal\\Core\\Entity\\EntityStorageInterface.
 *   - form: An associative array where the keys are the names of the
 *     different form operations (such as \'create\', \'edit\', or \'delete\') and
 *     the values are the names of the handler classes for those
 *     operations. The name of the operation is passed also to the form
 *     handler\'s constructor, so that one class can be used for multiple
 *     entity forms when the forms are similar. The classes must implement
 *     \\Drupal\\Core\\Entity\\EntityFormInterface.
 *   - list_builder: The name of the class that provides listings of the
 *     entities. The class must implement
 *     \\Drupal\\Core\\Entity\\EntityListBuilderInterface.
 *   - view_builder: The name of the class that is used to render the
 *     entities. The class must implement
 *     \\Drupal\\Core\\Entity\\EntityViewBuilderInterface.
 *   - access: The name of the class that is used for access checks. The class
 *     must implement \\Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface.
 *     Defaults to \\Drupal\\Core\\Entity\\EntityAccessControlHandler.
 *   - route_provider: (optional) A list of class names, keyed by a group
 *     string, which will be used to define routes related to this entity
 *     type. These classes must implement
 *     \\Drupal\\Core\\Entity\\Routing\\EntityRouteProviderInterface.
 */',
        'startLine' => 223,
        'endLine' => 223,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getStorageClass' => 
      array (
        'name' => 'getStorageClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the storage class.
 *
 * @return string
 *   The class for this entity type\'s storage.
 */',
        'startLine' => 231,
        'endLine' => 231,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'setStorageClass' => 
      array (
        'name' => 'setStorageClass',
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
            'startLine' => 241,
            'endLine' => 241,
            'startColumn' => 35,
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
 * Sets the storage class.
 *
 * @param string $class
 *   The class for this entity type\'s storage.
 *
 * @return $this
 */',
        'startLine' => 241,
        'endLine' => 241,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getFormClass' => 
      array (
        'name' => 'getFormClass',
        'parameters' => 
        array (
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
            'startLine' => 255,
            'endLine' => 255,
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
 * Gets the form class for a specific operation.
 *
 * @param string $operation
 *   The name of the operation to use, e.g., \'default\'.
 *
 * @return string|null
 *   The class for this operation\'s form for this entity type or NULL if the
 *   entity type does not have a form class for this operation.
 *
 * @see \\Drupal\\Core\\Entity\\EntityFormBuilderInterface
 */',
        'startLine' => 255,
        'endLine' => 255,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'setFormClass' => 
      array (
        'name' => 'setFormClass',
        'parameters' => 
        array (
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
            'startLine' => 270,
            'endLine' => 270,
            'startColumn' => 32,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 270,
            'endLine' => 270,
            'startColumn' => 44,
            'endColumn' => 49,
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
 * Sets a form class for a specific operation.
 *
 * @param string $operation
 *   The operation to use this form class for.
 * @param string $class
 *   The form class implementing
 *   \\Drupal\\Core\\Entity\\EntityFormInterface.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Entity\\EntityFormBuilderInterface
 */',
        'startLine' => 270,
        'endLine' => 270,
        'startColumn' => 3,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'hasFormClasses' => 
      array (
        'name' => 'hasFormClasses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates if this entity type has any forms.
 *
 * @return bool
 *   TRUE if there are any forms for this entity type, FALSE otherwise.
 */',
        'startLine' => 278,
        'endLine' => 278,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'hasRouteProviders' => 
      array (
        'name' => 'hasRouteProviders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates if this entity type has any route provider.
 *
 * @return bool
 *   TRUE when this entity type has any route provider, FALSE otherwise.
 */',
        'startLine' => 286,
        'endLine' => 286,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getRouteProviderClasses' => 
      array (
        'name' => 'getRouteProviderClasses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets all the route provide handlers.
 *
 * Much like forms you can define multiple route provider handlers.
 *
 * @return string[]
 *   An array of all the route provider handlers.
 */',
        'startLine' => 296,
        'endLine' => 296,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getListBuilderClass' => 
      array (
        'name' => 'getListBuilderClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the list class.
 *
 * @return string
 *   The class for this entity type\'s list.
 */',
        'startLine' => 304,
        'endLine' => 304,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'setListBuilderClass' => 
      array (
        'name' => 'setListBuilderClass',
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
            'startLine' => 314,
            'endLine' => 314,
            'startColumn' => 39,
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
 * Sets the list class.
 *
 * @param string $class
 *   The list class to use for the operation.
 *
 * @return $this
 */',
        'startLine' => 314,
        'endLine' => 314,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'hasListBuilderClass' => 
      array (
        'name' => 'hasListBuilderClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates if this entity type has a list class.
 *
 * @return bool
 *   TRUE if there is a list for this entity type, FALSE otherwise.
 */',
        'startLine' => 322,
        'endLine' => 322,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getViewBuilderClass' => 
      array (
        'name' => 'getViewBuilderClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the view builder class.
 *
 * @return string
 *   The class for this entity type\'s view builder.
 */',
        'startLine' => 330,
        'endLine' => 330,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'setViewBuilderClass' => 
      array (
        'name' => 'setViewBuilderClass',
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
            'startLine' => 340,
            'endLine' => 340,
            'startColumn' => 39,
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
 * Gets the view builder class.
 *
 * @param string $class
 *   The class for this entity type\'s view builder.
 *
 * @return $this
 */',
        'startLine' => 340,
        'endLine' => 340,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'hasViewBuilderClass' => 
      array (
        'name' => 'hasViewBuilderClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates if this entity type has a view builder.
 *
 * @return bool
 *   TRUE if there is a view builder for this entity type, FALSE otherwise.
 */',
        'startLine' => 348,
        'endLine' => 348,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getAccessControlClass' => 
      array (
        'name' => 'getAccessControlClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the access control class.
 *
 * @return string
 *   The class for this entity type\'s access control.
 */',
        'startLine' => 356,
        'endLine' => 356,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'setAccessClass' => 
      array (
        'name' => 'setAccessClass',
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
            'startLine' => 366,
            'endLine' => 366,
            'startColumn' => 34,
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
 * Sets the access control handler class.
 *
 * @param string $class
 *   The class for this entity type\'s access control handler.
 *
 * @return $this
 */',
        'startLine' => 366,
        'endLine' => 366,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'entityClassImplements' => 
      array (
        'name' => 'entityClassImplements',
        'parameters' => 
        array (
          'interface' => 
          array (
            'name' => 'interface',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
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
 * Indicates if the entity type class implements the given interface.
 *
 * @param string $interface
 *   The class or interface to check.
 *
 * @return bool
 *   TRUE if the entity type class implements the given interface.
 */',
        'startLine' => 377,
        'endLine' => 377,
        'startColumn' => 3,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'setHandlerClass' => 
      array (
        'name' => 'setHandlerClass',
        'parameters' => 
        array (
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
            'startLine' => 389,
            'endLine' => 389,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 389,
            'endLine' => 389,
            'startColumn' => 50,
            'endColumn' => 55,
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
 * Sets the handlers for a given type.
 *
 * @param string $handler_type
 *   The type of handler to set.
 * @param array|string $value
 *   The value for a handler type.
 *
 * @return $this
 */',
        'startLine' => 389,
        'endLine' => 389,
        'startColumn' => 3,
        'endColumn' => 57,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getAdminPermission' => 
      array (
        'name' => 'getAdminPermission',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the name of the default administrative permission.
 *
 * The default \\Drupal\\Core\\Entity\\EntityAccessControlHandler class checks
 * this permission for all operations in its checkAccess() method. Entities
 * with more complex permissions can extend this class to do their own access
 * checks.
 *
 * @return string|false
 *   The name of the administrative permission. Defaults to FALSE, if the
 *   permission does not exist.
 */',
        'startLine' => 403,
        'endLine' => 403,
        'startColumn' => 3,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getCollectionPermission' => 
      array (
        'name' => 'getCollectionPermission',
        'parameters' => 
        array (
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
 * Gets the name of the default collection permission.
 *
 * @see \\Drupal\\Core\\Entity\\Routing\\DefaultHtmlRouteProvider::getCollectionRoute()
 *
 * @return string|null
 *   The collection permission name, or NULL if none.
 */',
        'startLine' => 413,
        'endLine' => 413,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getPermissionGranularity' => 
      array (
        'name' => 'getPermissionGranularity',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the permission granularity level.
 *
 * The allowed values are respectively "entity_type" or "bundle".
 *
 * @return string
 *   Whether a module exposing permissions for the current entity type
 *   should use entity-type level granularity or bundle level granularity.
 */',
        'startLine' => 424,
        'endLine' => 424,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getLinkTemplates' => 
      array (
        'name' => 'getLinkTemplates',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the link templates using the URI template syntax.
 *
 * Links are an array of standard link relations to the URI template that
 * should be used for them. Where possible, link relationships should use
 * established IANA relationships rather than custom relationships.
 *
 * Entities which can be viewed should define "canonical", which is the
 * pattern for URIs to that entity including REST. Entities that will be
 * user-editable via an HTML page should define an "edit-form" relationship.
 *
 * By default, the following placeholders are supported:
 * - [entityType]: The entity type itself will also be a valid token for the
 *   ID of the entity. For instance, a placeholder of {node} used on the Node
 *   class.
 * - [bundleEntityType]: The bundle machine name itself. For instance, a
 *   placeholder of {node_type} used on the Node class.
 *
 * Specific entity types may also expand upon this list by overriding the
 * EntityBase::urlRouteParameters() method.
 *
 * @link http://www.iana.org/assignments/link-relations/link-relations.xml @endlink
 * @link http://tools.ietf.org/html/rfc6570 @endlink
 *
 * @return array
 *   An array of link templates using the URI template syntax.
 */',
        'startLine' => 453,
        'endLine' => 453,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getLinkTemplate' => 
      array (
        'name' => 'getLinkTemplate',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 464,
            'endLine' => 464,
            'startColumn' => 35,
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
 * Gets the link template for a given key.
 *
 * @param string $key
 *   The link type.
 *
 * @return string|false
 *   The path for this link, or FALSE if it doesn\'t exist.
 */',
        'startLine' => 464,
        'endLine' => 464,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'hasLinkTemplate' => 
      array (
        'name' => 'hasLinkTemplate',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 475,
            'endLine' => 475,
            'startColumn' => 35,
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
 * Indicates if a link template exists for a given key.
 *
 * @param string $key
 *   The link type.
 *
 * @return bool
 *   TRUE if the link template exists, FALSE otherwise.
 */',
        'startLine' => 475,
        'endLine' => 475,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'setLinkTemplate' => 
      array (
        'name' => 'setLinkTemplate',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 490,
            'endLine' => 490,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 490,
            'endLine' => 490,
            'startColumn' => 41,
            'endColumn' => 45,
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
 * Sets a single link template.
 *
 * @param string $key
 *   The name of a link.
 * @param string $path
 *   The route path to use for the link.
 *
 * @return $this
 *
 * @throws \\InvalidArgumentException
 *   Thrown when the path does not start with a leading slash.
 */',
        'startLine' => 490,
        'endLine' => 490,
        'startColumn' => 3,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getBundleEntityType' => 
      array (
        'name' => 'getBundleEntityType',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the name of the entity type which provides bundles.
 *
 * @return string|null
 *   The name of the entity type which provides bundles, or NULL if the entity
 *   type does not have a bundle entity type.
 */',
        'startLine' => 499,
        'endLine' => 499,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getBundleOf' => 
      array (
        'name' => 'getBundleOf',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the entity type ID for which this entity provides bundles.
 *
 * It can be used by other modules to act accordingly; for example,
 * the Field UI module uses it to add operation links to manage fields and
 * displays.
 *
 * @return string|null
 *   The entity type ID for which this entity provides bundles, or NULL if
 *   does not provide bundles for another entity type.
 */',
        'startLine' => 512,
        'endLine' => 512,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getBundleLabel' => 
      array (
        'name' => 'getBundleLabel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the label for the bundle.
 *
 * @return string
 *   The bundle label.
 */',
        'startLine' => 520,
        'endLine' => 520,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
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
 * Gets the name of the entity\'s base table.
 *
 * @todo Used by SqlContentEntityStorage only.
 *
 * @return string|null
 *   The name of the entity\'s base table, or NULL if none exists.
 */',
        'startLine' => 530,
        'endLine' => 530,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'isInternal' => 
      array (
        'name' => 'isInternal',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates whether the entity data is internal.
 *
 * This can be used in a scenario when it is not desirable to expose data of
 * this entity type to an external system.
 *
 * The implications of this method are left to the discretion of the caller.
 * For example, a module providing an HTTP API may not expose entities of
 * this type or a custom entity reference field settings form may reduce the
 * priority for entities of this type in a select list.
 *
 * @return bool
 *   TRUE if the entity data is internal, FALSE otherwise.
 *
 * @see \\Drupal\\Core\\TypedData\\DataDefinitionInterface::isInternal()
 */',
        'startLine' => 548,
        'endLine' => 548,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'isTranslatable' => 
      array (
        'name' => 'isTranslatable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates whether entities of this type have multilingual support.
 *
 * At an entity level, this indicates language support and at a bundle level
 * this indicates translation support.
 *
 * @return bool
 *   TRUE if the entity can be translated, FALSE otherwise.
 */',
        'startLine' => 559,
        'endLine' => 559,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'showRevisionUi' => 
      array (
        'name' => 'showRevisionUi',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates whether the revision form fields should be added to the form.
 *
 * @return bool
 *   TRUE if the form field should be added, FALSE otherwise.
 */',
        'startLine' => 567,
        'endLine' => 567,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'isRevisionable' => 
      array (
        'name' => 'isRevisionable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates whether entities of this type have revision support.
 *
 * @return bool
 *   TRUE if the entity has revision support, FALSE otherwise.
 */',
        'startLine' => 575,
        'endLine' => 575,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
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
 * Gets the name of the entity\'s revision data table.
 *
 * @todo Used by SqlContentEntityStorage only.
 *
 * @return string|null
 *   The name of the entity type\'s revision data table, or NULL if none
 *   exists.
 */',
        'startLine' => 586,
        'endLine' => 586,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
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
 * Gets the name of the entity\'s revision table.
 *
 * @todo Used by SqlContentEntityStorage only.
 *
 * @return string|null
 *   The name of the entity type\'s revision table, or NULL if none exists.
 */',
        'startLine' => 596,
        'endLine' => 596,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
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
 * Gets the name of the entity\'s data table.
 *
 * @todo Used by SqlContentEntityStorage only.
 *
 * @return string|null
 *   The name of the entity type\'s data table, or NULL if none exists.
 */',
        'startLine' => 606,
        'endLine' => 606,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getLabel' => 
      array (
        'name' => 'getLabel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the human-readable name of the entity type.
 *
 * This label should be used to present a human-readable name of the
 * entity type.
 *
 * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   The human-readable name of the entity type.
 */',
        'startLine' => 617,
        'endLine' => 617,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getCollectionLabel' => 
      array (
        'name' => 'getCollectionLabel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the uppercase plural form of the name of the entity type.
 *
 * This should return a human-readable version of the name that can refer
 * to all the entities of the given type, collectively. An example usage of
 * this is the page title of a page devoted to a collection of entities such
 * as "Workflows" (instead of "Workflow entities").
 *
 * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   The collection label.
 */',
        'startLine' => 630,
        'endLine' => 630,
        'startColumn' => 3,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getSingularLabel' => 
      array (
        'name' => 'getSingularLabel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the indefinite singular form of the name of the entity type.
 *
 * This should return the human-readable name for a single instance of
 * the entity type. For example: "opportunity" (with the plural as
 * "opportunities"), "child" (with the plural as "children"), or "content
 * item" (with the plural as "content items").
 *
 * Think of it as an "in a full sentence, this is what we call this" label. As
 * a consequence, the English version is lowercase.
 *
 * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   The singular label.
 */',
        'startLine' => 646,
        'endLine' => 646,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getPluralLabel' => 
      array (
        'name' => 'getPluralLabel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the indefinite plural form of the name of the entity type.
 *
 * This should return the human-readable name for more than one instance of
 * the entity type. For example: "opportunities" (with the singular as
 * "opportunity"), "children" (with the singular as "child"), or "content
 * items" (with the singular as "content item").
 *
 * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   The plural label.
 */',
        'startLine' => 659,
        'endLine' => 659,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getCountLabel' => 
      array (
        'name' => 'getCountLabel',
        'parameters' => 
        array (
          'count' => 
          array (
            'name' => 'count',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 675,
            'endLine' => 675,
            'startColumn' => 33,
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
 * Gets the label\'s definite article form for use with a count of entities.
 *
 * This label should be used when the quantity of entities is provided. The
 * name should be returned in a form usable with a count of the
 * entities. For example: "1 opportunity", "5 opportunities", "1 child",
 * "6 children", "1 content item", "25 content items".
 *
 * @param int $count
 *   The item count to display if the plural form was requested.
 *
 * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   The count label.
 */',
        'startLine' => 675,
        'endLine' => 675,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getUriCallback' => 
      array (
        'name' => 'getUriCallback',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a callable that can be used to provide the entity URI.
 *
 * This is only called if there is no matching link template for the link
 * relationship type, and there is no bundle-specific callback provided.
 *
 * @return callable|null
 *   A valid callback that is passed the entity or NULL if none is specified.
 */',
        'startLine' => 686,
        'endLine' => 686,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'setUriCallback' => 
      array (
        'name' => 'setUriCallback',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 696,
            'endLine' => 696,
            'startColumn' => 34,
            'endColumn' => 42,
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
 * Sets a callable to use to provide the entity URI.
 *
 * @param callable $callback
 *   A callback to use to provide a URI for the entity.
 *
 * @return $this
 */',
        'startLine' => 696,
        'endLine' => 696,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getGroup' => 
      array (
        'name' => 'getGroup',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the machine name of the entity type group.
 *
 * The entity type group is an annotation property of the entity type.
 *
 * Drupal core defines two entity type groups:
 *  - content: Entities which form the information on a site. Content entities
 *    are typically customized with fields.
 *  - config: Entities which define structural elements of a site, which are
 *    managed as part of the site\'s configuration.
 *
 * @return string
 *   The machine name of the entity type group.
 */',
        'startLine' => 712,
        'endLine' => 712,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getGroupLabel' => 
      array (
        'name' => 'getGroupLabel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the human-readable name of the entity type group.
 *
 * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   The group label.
 *
 * @see self::getGroup()
 */',
        'startLine' => 722,
        'endLine' => 722,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getListCacheContexts' => 
      array (
        'name' => 'getListCacheContexts',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The list cache contexts associated with this entity type.
 *
 * Enables code listing entities of this type to ensure that rendered listings
 * are varied as necessary, typically to ensure users of role A see other
 * entities listed than users of role B.
 *
 * @return string[]
 *   An array of cache contexts associated with this entity type.
 */',
        'startLine' => 734,
        'endLine' => 734,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getListCacheTags' => 
      array (
        'name' => 'getListCacheTags',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The list cache tags associated with this entity type.
 *
 * Enables code listing entities of this type to ensure that newly created
 * entities show up immediately.
 *
 * @return string[]
 *   An array of the cache tags for this entity type.
 */',
        'startLine' => 745,
        'endLine' => 745,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getBundleListCacheTags' => 
      array (
        'name' => 'getBundleListCacheTags',
        'parameters' => 
        array (
          'bundle' => 
          array (
            'name' => 'bundle',
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
            'startLine' => 756,
            'endLine' => 756,
            'startColumn' => 42,
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
 * The list cache tags associated with a specific bundle.
 *
 * Enables code listing entities of this type and bundle to ensure that newly
 * created entities show up immediately.
 *
 * @return string[]
 *   An array of the cache tags for this bundle.
 */',
        'startLine' => 756,
        'endLine' => 756,
        'startColumn' => 3,
        'endColumn' => 64,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getConfigDependencyKey' => 
      array (
        'name' => 'getConfigDependencyKey',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the key that is used to store configuration dependencies.
 *
 * @return string
 *   The key to be used in configuration dependencies when storing
 *   dependencies on entities of this type.
 */',
        'startLine' => 765,
        'endLine' => 765,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'isCommonReferenceTarget' => 
      array (
        'name' => 'isCommonReferenceTarget',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates whether this entity type is commonly used as a reference target.
 *
 * @return bool
 *   TRUE if the entity type is a common reference; FALSE otherwise.
 */',
        'startLine' => 773,
        'endLine' => 773,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getConstraints' => 
      array (
        'name' => 'getConstraints',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets an array of validation constraints.
 *
 * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
 * details on how constraints are defined.
 *
 * @return array[]
 *   An array of validation constraint definitions, keyed by constraint name.
 *   Each constraint definition can be used for instantiating
 *   \\Symfony\\Component\\Validator\\Constraint objects.
 *
 * @see \\Symfony\\Component\\Validator\\Constraint
 */',
        'startLine' => 788,
        'endLine' => 788,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'setConstraints' => 
      array (
        'name' => 'setConstraints',
        'parameters' => 
        array (
          'constraints' => 
          array (
            'name' => 'constraints',
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
            'startLine' => 807,
            'endLine' => 807,
            'startColumn' => 34,
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
 * Sets the array of validation constraints for the FieldItemList.
 *
 * NOTE: This will overwrite any previously set constraints. In most cases
 * ContentEntityTypeInterface::addConstraint() should be used instead.
 * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
 * details on how constraints are defined.
 *
 * @param array $constraints
 *   An array of validation constraint definitions, keyed by constraint name.
 *   Each constraint definition can be used for instantiating
 *   \\Symfony\\Component\\Validator\\Constraint objects.
 *
 * @return $this
 *
 * @see \\Symfony\\Component\\Validator\\Constraint
 */',
        'startLine' => 807,
        'endLine' => 807,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'addConstraint' => 
      array (
        'name' => 'addConstraint',
        'parameters' => 
        array (
          'constraint_name' => 
          array (
            'name' => 'constraint_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 822,
            'endLine' => 822,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 822,
                'endLine' => 822,
                'startTokenPos' => 826,
                'startFilePos' => 25866,
                'endTokenPos' => 826,
                'endFilePos' => 25869,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 822,
            'endLine' => 822,
            'startColumn' => 51,
            'endColumn' => 65,
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
 * Adds a validation constraint.
 *
 * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
 * details on how constraints are defined.
 *
 * @param string $constraint_name
 *   The name of the constraint to add, i.e. its plugin id.
 * @param array|null $options
 *   The constraint options as required by the constraint plugin, or NULL.
 *
 * @return $this
 */',
        'startLine' => 822,
        'endLine' => 822,
        'startColumn' => 3,
        'endColumn' => 67,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'aliasName' => NULL,
      ),
      'getBundleConfigDependency' => 
      array (
        'name' => 'getBundleConfigDependency',
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
            'startLine' => 835,
            'endLine' => 835,
            'startColumn' => 45,
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
 * Gets the config dependency info for this entity, if any exists.
 *
 * @param string $bundle
 *   The bundle name.
 *
 * @return array
 *   An associative array containing the following keys:
 *   - \'type\': The config dependency type (e.g. \'module\', \'config\').
 *   - \'name\': The name of the config dependency.
 */',
        'startLine' => 835,
        'endLine' => 835,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
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