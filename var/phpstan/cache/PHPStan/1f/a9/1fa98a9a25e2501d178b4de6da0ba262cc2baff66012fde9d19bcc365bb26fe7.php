<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityStorageInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityStorageInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-94978e95c1b8ebbbeb94e14728323986c4a8f2404b28f433460af089cc352564-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityStorageInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
    'shortName' => 'EntityStorageInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the interface for entity storage classes.
 *
 * For common default implementations, see
 * \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage for content entities and
 * \\Drupal\\Core\\Config\\Entity\\ConfigEntityStorage for config entities. Those
 * implementations are used by default when the
 * \\Drupal\\Core\\Entity\\Attribute\\ContentEntityType or
 * \\Drupal\\Core\\Entity\\Attribute\\ConfigEntityType attributes are used.
 *
 * @ingroup entity_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 214,
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
      'FIELD_LOAD_CURRENT' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'name' => 'FIELD_LOAD_CURRENT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'FIELD_LOAD_CURRENT\'',
          'attributes' => 
          array (
            'startLine' => 22,
            'endLine' => 22,
            'startTokenPos' => 23,
            'startFilePos' => 635,
            'endTokenPos' => 23,
            'endFilePos' => 654,
          ),
        ),
        'docComment' => '/**
 * Load the most recent version of an entity\'s field data.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 3,
        'endColumn' => 50,
      ),
      'FIELD_LOAD_REVISION' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'name' => 'FIELD_LOAD_REVISION',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'FIELD_LOAD_REVISION\'',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 27,
            'startTokenPos' => 34,
            'startFilePos' => 773,
            'endTokenPos' => 34,
            'endFilePos' => 793,
          ),
        ),
        'docComment' => '/**
 * Load the version of an entity\'s field data specified in the entity.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 3,
        'endColumn' => 52,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
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
                'startLine' => 36,
                'endLine' => 36,
                'startTokenPos' => 52,
                'startFilePos' => 1036,
                'endTokenPos' => 52,
                'endFilePos' => 1039,
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
            'startLine' => 36,
            'endLine' => 36,
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
 * Resets the internal entity cache.
 *
 * @param array<string|int>|null $ids
 *   (optional) If specified, the cache is reset for the entities with the
 *   given ids only.
 */',
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 3,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
                'startLine' => 48,
                'endLine' => 48,
                'startTokenPos' => 71,
                'startFilePos' => 1430,
                'endTokenPos' => 71,
                'endFilePos' => 1433,
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
            'startLine' => 48,
            'endLine' => 48,
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
 * Loads one or more entities.
 *
 * @param array<string|int>|null $ids
 *   An array of entity IDs, or NULL to load all entities.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface[]
 *   An array of successfully loaded objects indexed by their IDs.
 *   Returns an empty array if no matching entities are found.
 */',
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
            'startLine' => 59,
            'endLine' => 59,
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
 * Loads one entity.
 *
 * @param string|int $id
 *   The ID of the entity to load.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface|null
 *   An entity object. NULL if no matching entity is found.
 */',
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
            'startLine' => 73,
            'endLine' => 73,
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
 * Loads an unchanged entity from the database.
 *
 * @param string|int $id
 *   The ID of the entity to load.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface|null
 *   The unchanged entity, or NULL if the entity cannot be loaded.
 *
 * @todo Remove this method once we have a reliable way to retrieve the
 *   unchanged entity from the entity object.
 */',
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
                'startLine' => 86,
                'endLine' => 86,
                'startTokenPos' => 113,
                'startFilePos' => 2627,
                'endTokenPos' => 114,
                'endFilePos' => 2628,
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
            'startLine' => 86,
            'endLine' => 86,
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
 * Load entities by their property values without any access checks.
 *
 * @param array $values
 *   An associative array where the keys are the property names and the
 *   values are the values those properties must have. If a property takes
 *   multiple values, passing an array of values will produce an IN condition.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface[]
 *   An array of entity objects indexed by their ids.
 */',
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 3,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
                'startLine' => 98,
                'endLine' => 98,
                'startTokenPos' => 132,
                'startFilePos' => 3011,
                'endTokenPos' => 133,
                'endFilePos' => 3012,
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
            'startLine' => 98,
            'endLine' => 98,
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
 * Constructs a new entity object, without permanently saving it.
 *
 * @param array $values
 *   (optional) An array of values to set, keyed by property name. If the
 *   entity type has bundles, the bundle key has to be specified.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface
 *   A new entity object.
 */',
        'startLine' => 98,
        'endLine' => 98,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
            'startLine' => 109,
            'endLine' => 109,
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
 * Deletes permanently saved entities.
 *
 * @param array $entities
 *   An array of entity objects to delete.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *   In case of failures, an exception is thrown.
 */',
        'startLine' => 109,
        'endLine' => 109,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
            'startLine' => 124,
            'endLine' => 124,
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
 * Saves the entity permanently.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity to save.
 *
 * @return int|null
 *   SAVED_NEW or SAVED_UPDATED is returned depending on the operation
 *   performed.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *   In case of failures, an exception is thrown.
 */',
        'startLine' => 124,
        'endLine' => 124,
        'startColumn' => 3,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
            'startLine' => 146,
            'endLine' => 146,
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
 * Restores a previously saved entity.
 *
 * Note that the entity is assumed to be in a valid state for the storage, so
 * the restore process does not invoke any hooks, nor does it perform any pre
 * or post-save operations.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity to restore.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *   In case of failures, an exception is thrown.
 *
 * @internal
 *   This method should never be used to perform a regular entity save. Its
 *   only use-case is to assist updating entity types when there are complex
 *   schema changes, for example, to make them revisionable. Note that
 *   overriding this method to fix data prior to restoring is a likely sign
 *   that the current data is corrupt.
 */',
        'startLine' => 146,
        'endLine' => 146,
        'startColumn' => 3,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
 * Determines if the storage contains any data.
 *
 * @return bool
 *   TRUE if the storage contains data, FALSE if not.
 */',
        'startLine' => 154,
        'endLine' => 154,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
                'startLine' => 169,
                'endLine' => 169,
                'startTokenPos' => 202,
                'startFilePos' => 5253,
                'endTokenPos' => 202,
                'endFilePos' => 5257,
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
 * Gets an entity query instance.
 *
 * @param string $conjunction
 *   (optional) The logical operator for the query, either:
 *   - AND: all of the conditions on the query need to match.
 *   - OR: at least one of the conditions on the query need to match.
 *
 * @return \\Drupal\\Core\\Entity\\Query\\QueryInterface
 *   The query instance.
 *
 * @see \\Drupal\\Core\\Entity\\EntityStorageBase::getQueryServiceName()
 */',
        'startLine' => 169,
        'endLine' => 169,
        'startColumn' => 3,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
                'startLine' => 184,
                'endLine' => 184,
                'startTokenPos' => 218,
                'startFilePos' => 5817,
                'endTokenPos' => 218,
                'endFilePos' => 5821,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 184,
            'endLine' => 184,
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
 * Gets an aggregated query instance.
 *
 * @param string $conjunction
 *   (optional) The logical operator for the query, either:
 *   - AND: all of the conditions on the query need to match.
 *   - OR: at least one of the conditions on the query need to match.
 *
 * @return \\Drupal\\Core\\Entity\\Query\\QueryAggregateInterface
 *   The aggregated query object that can query the given entity type.
 *
 * @see \\Drupal\\Core\\Entity\\EntityStorageBase::getQueryServiceName()
 */',
        'startLine' => 184,
        'endLine' => 184,
        'startColumn' => 3,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
 * Gets the entity type ID.
 *
 * @return string
 *   The entity type ID.
 */',
        'startLine' => 192,
        'endLine' => 192,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
 * Gets the entity type definition.
 *
 * @return \\Drupal\\Core\\Entity\\EntityTypeInterface
 *   Entity type definition.
 */',
        'startLine' => 200,
        'endLine' => 200,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
                'startLine' => 212,
                'endLine' => 212,
                'startTokenPos' => 259,
                'startFilePos' => 6483,
                'endTokenPos' => 259,
                'endFilePos' => 6486,
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
            'startLine' => 212,
            'endLine' => 212,
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
 * Retrieves the class name used to create the entity.
 *
 * @param string|null $bundle
 *   (optional) A specific entity type bundle identifier. Can be omitted in
 *   the case of entity types without bundles, like User.
 *
 * @return string
 *   The entity class name.
 */',
        'startLine' => 212,
        'endLine' => 212,
        'startColumn' => 3,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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