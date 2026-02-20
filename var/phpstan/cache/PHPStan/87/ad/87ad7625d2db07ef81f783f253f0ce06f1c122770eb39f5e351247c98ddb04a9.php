<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityDefinitionUpdateManagerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityDefinitionUpdateManagerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e60dbdf5da13050dfd8eca22bcf0e6ab842b5cea2c54c1dc4a8b9d1b97e95858-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityDefinitionUpdateManagerInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
    'shortName' => 'EntityDefinitionUpdateManagerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for managing entity definition updates.
 *
 * During the application lifetime, the definitions of various entity types and
 * their data components (e.g., fields for fieldable entity types) can change.
 * For example, updated code can be deployed. Some entity handlers may need to
 * perform complex or long-running logic in response to the change. For
 * example, a SQL-based storage handler may need to update the database schema.
 *
 * To support this,
 * \\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface has methods
 * to retrieve the last installed definitions as well as the definitions
 * specified by the current codebase. It also has create/update/delete methods
 * to bring the former up to date with the latter.
 *
 * However, it is not the responsibility of entity last installed schema
 * repository to decide how to report the differences or when to apply each
 * update. This interface is for managing that.
 *
 * This interface also provides methods to retrieve instances of the definitions
 * to be updated ready to be manipulated. In fact when definitions change in
 * code the system needs to be notified about that and the definitions stored in
 * state need to be reconciled with the ones living in code. This typically
 * happens in Update API functions, which need to take the system from a known
 * state to another known state. Relying on the definitions living in code might
 * prevent this, as the system might transition directly to the last available
 * state, and thus skipping the intermediate steps. Manipulating the definitions
 * in state allows to avoid this and ensures that the various steps of the
 * update process are predictable and repeatable.
 *
 * @see \\Drupal\\Core\\Entity\\EntityTypeManagerInterface::getDefinition()
 * @see \\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface::getLastInstalledDefinition()
 * @see \\Drupal\\Core\\Entity\\EntityFieldManagerInterface::getFieldStorageDefinitions()
 * @see \\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface::getLastInstalledFieldStorageDefinitions()
 * @see hook_update_N()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 43,
    'endLine' => 226,
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
      'DEFINITION_CREATED' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'name' => 'DEFINITION_CREATED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 28,
            'startFilePos' => 2400,
            'endTokenPos' => 28,
            'endFilePos' => 2400,
          ),
        ),
        'docComment' => '/**
 * Indicates that a definition has just been created.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 3,
        'endColumn' => 31,
      ),
      'DEFINITION_UPDATED' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'name' => 'DEFINITION_UPDATED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 57,
            'endLine' => 57,
            'startTokenPos' => 39,
            'startFilePos' => 2510,
            'endTokenPos' => 39,
            'endFilePos' => 2510,
          ),
        ),
        'docComment' => '/**
 * Indicates that a definition has changes.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 3,
        'endColumn' => 31,
      ),
      'DEFINITION_DELETED' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'name' => 'DEFINITION_DELETED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '3',
          'attributes' => 
          array (
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 50,
            'startFilePos' => 2630,
            'endTokenPos' => 50,
            'endFilePos' => 2630,
          ),
        ),
        'docComment' => '/**
 * Indicates that a definition has just been deleted.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 3,
        'endColumn' => 31,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'needsUpdates' => 
      array (
        'name' => 'needsUpdates',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if there are any definition updates that need to be applied.
 *
 * @return bool
 *   TRUE if updates are needed.
 */',
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'getChangeSummary' => 
      array (
        'name' => 'getChangeSummary',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a human readable summary of the detected changes.
 *
 * @return array
 *   An associative array keyed by entity type id. Each entry is an array of
 *   human-readable strings, each describing a change.
 */',
        'startLine' => 81,
        'endLine' => 81,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'getChangeList' => 
      array (
        'name' => 'getChangeList',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a list of changes to entity type and field storage definitions.
 *
 * @return array
 *   An associative array keyed by entity type ID of change descriptors. Every
 *   entry is an associative array with the following optional keys:
 *   - entity_type: a scalar having one value among:
 *     - EntityDefinitionUpdateManagerInterface::DEFINITION_CREATED
 *     - EntityDefinitionUpdateManagerInterface::DEFINITION_UPDATED
 *   - field_storage_definitions: an associative array keyed by field name of
 *     scalars having one value among:
 *     - EntityDefinitionUpdateManagerInterface::DEFINITION_CREATED
 *     - EntityDefinitionUpdateManagerInterface::DEFINITION_UPDATED
 *     - EntityDefinitionUpdateManagerInterface::DEFINITION_DELETED
 */',
        'startLine' => 98,
        'endLine' => 98,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'getEntityType' => 
      array (
        'name' => 'getEntityType',
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
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 33,
            'endColumn' => 47,
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
 * Returns an entity type definition ready to be manipulated.
 *
 * When needing to apply updates to existing entity type definitions, this
 * method should always be used to retrieve a definition ready to be
 * manipulated.
 *
 * @param string $entity_type_id
 *   The entity type identifier.
 *
 * @return \\Drupal\\Core\\Entity\\EntityTypeInterface|null
 *   The entity type definition. Or NULL if not found.
 */',
        'startLine' => 113,
        'endLine' => 113,
        'startColumn' => 3,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'getEntityTypes' => 
      array (
        'name' => 'getEntityTypes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns all the entity type definitions, ready to be manipulated.
 *
 * When needing to apply updates to existing entity type definitions, this
 * method should always be used to retrieve all the definitions ready to be
 * manipulated.
 *
 * @return \\Drupal\\Core\\Entity\\EntityTypeInterface[]
 *   The last installed entity type definitions, keyed by the entity type ID.
 */',
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'installEntityType' => 
      array (
        'name' => 'installEntityType',
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
            'startLine' => 133,
            'endLine' => 133,
            'startColumn' => 37,
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
 * Installs a new entity type definition.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition.
 */',
        'startLine' => 133,
        'endLine' => 133,
        'startColumn' => 3,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'installFieldableEntityType' => 
      array (
        'name' => 'installFieldableEntityType',
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 46,
            'endColumn' => 77,
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 80,
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
 * Installs a new fieldable entity type definition.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition.
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
 *   The entity type\'s field storage definitions.
 */',
        'startLine' => 143,
        'endLine' => 143,
        'startColumn' => 3,
        'endColumn' => 113,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'updateEntityType' => 
      array (
        'name' => 'updateEntityType',
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
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 36,
            'endColumn' => 67,
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
 * Applies any change performed to the passed entity type definition.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition.
 */',
        'startLine' => 151,
        'endLine' => 151,
        'startColumn' => 3,
        'endColumn' => 69,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'uninstallEntityType' => 
      array (
        'name' => 'uninstallEntityType',
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
            'startLine' => 159,
            'endLine' => 159,
            'startColumn' => 39,
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
 * Uninstalls an entity type definition.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition.
 */',
        'startLine' => 159,
        'endLine' => 159,
        'startColumn' => 3,
        'endColumn' => 72,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'updateFieldableEntityType' => 
      array (
        'name' => 'updateFieldableEntityType',
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
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 45,
            'endColumn' => 76,
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
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 79,
            'endColumn' => 110,
            'parameterIndex' => 1,
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
                'startLine' => 173,
                'endLine' => 173,
                'startTokenPos' => 196,
                'startFilePos' => 6739,
                'endTokenPos' => 196,
                'endFilePos' => 6742,
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
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 113,
            'endColumn' => 135,
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
 * Applies any change performed to a fieldable entity type definition.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The updated entity type definition.
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
 *   The updated field storage definitions, including possibly new ones.
 * @param array &$sandbox
 *   (optional) A sandbox array provided by a hook_update_N() implementation
 *   or a Batch API callback. If the entity schema update requires a data
 *   migration, this parameter is mandatory. Defaults to NULL.
 */',
        'startLine' => 173,
        'endLine' => 173,
        'startColumn' => 3,
        'endColumn' => 137,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'getFieldStorageDefinition' => 
      array (
        'name' => 'getFieldStorageDefinition',
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
            'startLine' => 194,
            'endLine' => 194,
            'startColumn' => 45,
            'endColumn' => 49,
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
            'startLine' => 194,
            'endLine' => 194,
            'startColumn' => 52,
            'endColumn' => 66,
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
 * Returns a field storage definition ready to be manipulated.
 *
 * When needing to apply updates to existing field storage definitions, this
 * method should always be used to retrieve a storage definition ready to be
 * manipulated.
 *
 * @param string $name
 *   The field name.
 * @param string $entity_type_id
 *   The entity type identifier.
 *
 * @return \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface|null
 *   The field storage definition or NULL if there is none for the given field
 *   name and entity type.
 *
 * @todo Make this return a mutable storage definition interface when we have
 *   one. See https://www.drupal.org/node/2346329.
 */',
        'startLine' => 194,
        'endLine' => 194,
        'startColumn' => 3,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'installFieldStorageDefinition' => 
      array (
        'name' => 'installFieldStorageDefinition',
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
            'startLine' => 208,
            'endLine' => 208,
            'startColumn' => 49,
            'endColumn' => 53,
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
            'startLine' => 208,
            'endLine' => 208,
            'startColumn' => 56,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 208,
            'endLine' => 208,
            'startColumn' => 73,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
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
            'startLine' => 208,
            'endLine' => 208,
            'startColumn' => 84,
            'endColumn' => 134,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Installs a new field storage definition.
 *
 * @param string $name
 *   The field storage definition name.
 * @param string $entity_type_id
 *   The target entity type identifier.
 * @param string $provider
 *   The name of the definition provider.
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
 *   The field storage definition.
 */',
        'startLine' => 208,
        'endLine' => 208,
        'startColumn' => 3,
        'endColumn' => 136,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'updateFieldStorageDefinition' => 
      array (
        'name' => 'updateFieldStorageDefinition',
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
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 48,
            'endColumn' => 98,
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
 * Applies any change performed to the passed field storage definition.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
 *   The field storage definition.
 */',
        'startLine' => 216,
        'endLine' => 216,
        'startColumn' => 3,
        'endColumn' => 100,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'aliasName' => NULL,
      ),
      'uninstallFieldStorageDefinition' => 
      array (
        'name' => 'uninstallFieldStorageDefinition',
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
            'startLine' => 224,
            'endLine' => 224,
            'startColumn' => 51,
            'endColumn' => 101,
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
 * Uninstalls a field storage definition.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
 *   The field storage definition.
 */',
        'startLine' => 224,
        'endLine' => 224,
        'startColumn' => 3,
        'endColumn' => 103,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
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