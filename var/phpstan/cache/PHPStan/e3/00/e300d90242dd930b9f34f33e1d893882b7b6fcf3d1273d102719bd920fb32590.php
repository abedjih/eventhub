<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/RevisionableStorageInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\RevisionableStorageInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-95db3c9d6a0db98ce22372da1c2a360519d770b8a328b80ceb53c0e8b92afa91-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/RevisionableStorageInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
    'shortName' => 'RevisionableStorageInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A storage that supports revisionable entity types.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 82,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
            'startLine' => 22,
            'endLine' => 22,
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
                'startLine' => 22,
                'endLine' => 22,
                'startTokenPos' => 36,
                'startFilePos' => 676,
                'endTokenPos' => 36,
                'endFilePos' => 679,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 65,
            'endColumn' => 79,
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
 * Creates a new revision starting off from the specified entity object.
 *
 * @param \\Drupal\\Core\\Entity\\RevisionableInterface $entity
 *   The revisionable entity object being modified.
 * @param bool $default
 *   (optional) Whether the new revision should be marked as default. Defaults
 *   to TRUE.
 *
 * @return \\Drupal\\Core\\Entity\\RevisionableInterface
 *   A new entity revision object.
 */',
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 3,
        'endColumn' => 81,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
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
            'startLine' => 33,
            'endLine' => 33,
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
 * Loads a specific entity revision.
 *
 * @param int|string $revision_id
 *   The revision ID.
 *
 * @return \\Drupal\\Core\\Entity\\RevisionableInterface|null
 *   The specified entity revision or NULL if not found.
 */',
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
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
            'startLine' => 45,
            'endLine' => 45,
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
 * Loads multiple entity revisions.
 *
 * @param int[]|string[] $revision_ids
 *   An array of revision IDs to load.
 *
 * @return \\Drupal\\Core\\Entity\\RevisionableInterface[]
 *   An array of entity revisions keyed by their revision ID, or an empty
 *   array if none found.
 */',
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 3,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
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
            'startLine' => 59,
            'endLine' => 59,
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
 * Loads an unchanged entity by revision ID from the database.
 *
 * @param int $revision_id
 *   The revision ID of the entity to load.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface|null
 *   The unchanged entity, or NULL if the entity cannot be loaded.
 *
 * @todo Remove this method once we have a reliable way to retrieve the
 *   unchanged revision from the entity object.
 */',
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 3,
        'endColumn' => 72,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
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
            'startLine' => 69,
            'endLine' => 69,
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
 * Deletes a specific entity revision.
 *
 * A revision can only be deleted if it\'s not the currently active one.
 *
 * @param int|string $revision_id
 *   The revision ID.
 */',
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 3,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
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
            'startLine' => 80,
            'endLine' => 80,
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
 * Returns the latest revision identifier for an entity.
 *
 * @param int|string $entity_id
 *   The entity identifier.
 *
 * @return int|string|null
 *   The latest revision identifier or NULL if no revision could be found.
 */',
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
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