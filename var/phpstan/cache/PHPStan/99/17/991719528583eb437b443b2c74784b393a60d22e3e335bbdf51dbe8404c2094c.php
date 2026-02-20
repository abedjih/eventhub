<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/RevisionableInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\RevisionableInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-96dd84e3b2eeb274c51117c261a18ad4d2994dbc75dc8bb30390b61e596a7c17-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/RevisionableInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\RevisionableInterface',
    'shortName' => 'RevisionableInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides methods for an entity to support revisions.
 *
 * Classes implementing this interface do not necessarily support revisions.
 *
 * To detect whether an entity type supports revisions, call
 * EntityTypeInterface::isRevisionable().
 *
 * Many entity interfaces are composed of numerous other interfaces such as this
 * one, which allow implementations to pick and choose which features to.
 * support through stub implementations of various interface methods. This means
 * that even if an entity class implements RevisionableInterface, it might only
 * have a stub implementation and not a functional one.
 *
 * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::isRevisionable()
 * @see https://www.drupal.org/docs/8/api/entity-api/structure-of-an-entity-annotation
 * @see https://www.drupal.org/docs/8/api/entity-api/making-an-entity-revisionable
 *
 * @ingroup entity_type_characteristics
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 118,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityInterface',
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
      'isNewRevision' => 
      array (
        'name' => 'isNewRevision',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines whether a new revision should be created on save.
 *
 * @return bool
 *   TRUE if a new revision should be created.
 *
 * @see \\Drupal\\Core\\Entity\\EntityInterface::setNewRevision()
 */',
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'aliasName' => NULL,
      ),
      'setNewRevision' => 
      array (
        'name' => 'setNewRevision',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 48,
                'endLine' => 48,
                'startTokenPos' => 42,
                'startFilePos' => 1613,
                'endTokenPos' => 42,
                'endFilePos' => 1616,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 34,
            'endColumn' => 46,
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
 * Enforces an entity to be saved as a new revision.
 *
 * @param bool $value
 *   (optional) Whether a new revision should be saved.
 *
 * @throws \\LogicException
 *   Thrown if the entity does not support revisions.
 *
 * @see \\Drupal\\Core\\Entity\\EntityInterface::isNewRevision()
 */',
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'aliasName' => NULL,
      ),
      'getRevisionId' => 
      array (
        'name' => 'getRevisionId',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the revision identifier of the entity.
 *
 * @return int|null|string
 *   The revision identifier of the entity, or NULL if the entity does not
 *   have a revision identifier.
 */',
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'aliasName' => NULL,
      ),
      'getLoadedRevisionId' => 
      array (
        'name' => 'getLoadedRevisionId',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the loaded Revision ID of the entity.
 *
 * @return int
 *   The loaded Revision identifier of the entity, or NULL if the entity
 *   does not have a revision identifier.
 */',
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'aliasName' => NULL,
      ),
      'updateLoadedRevisionId' => 
      array (
        'name' => 'updateLoadedRevisionId',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Updates the loaded Revision ID with the revision ID.
 *
 * This method should not be used, it could unintentionally cause the original
 * revision ID property value to be lost.
 *
 * @internal
 *
 * @return $this
 */',
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'aliasName' => NULL,
      ),
      'isDefaultRevision' => 
      array (
        'name' => 'isDefaultRevision',
        'parameters' => 
        array (
          'new_value' => 
          array (
            'name' => 'new_value',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 90,
                'endLine' => 90,
                'startTokenPos' => 91,
                'startFilePos' => 2765,
                'endTokenPos' => 91,
                'endFilePos' => 2768,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 37,
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
 * Checks if this entity is the default revision.
 *
 * @param bool $new_value
 *   (optional) A Boolean to (re)set the isDefaultRevision flag.
 *
 * @return bool
 *   TRUE if the entity is the default revision, FALSE otherwise. If
 *   $new_value was passed, the previous value is returned.
 */',
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'aliasName' => NULL,
      ),
      'wasDefaultRevision' => 
      array (
        'name' => 'wasDefaultRevision',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether the entity object was a default revision when it was saved.
 *
 * @return bool
 *   TRUE if the entity object was a revision, FALSE otherwise.
 */',
        'startLine' => 98,
        'endLine' => 98,
        'startColumn' => 3,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'aliasName' => NULL,
      ),
      'isLatestRevision' => 
      array (
        'name' => 'isLatestRevision',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if this entity is the latest revision.
 *
 * @return bool
 *   TRUE if the entity is the latest revision, FALSE otherwise.
 */',
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'aliasName' => NULL,
      ),
      'preSaveRevision' => 
      array (
        'name' => 'preSaveRevision',
        'parameters' => 
        array (
          'storage' => 
          array (
            'name' => 'storage',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
            'startColumn' => 35,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'record' => 
          array (
            'name' => 'record',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'stdClass',
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
            'startColumn' => 68,
            'endColumn' => 84,
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
 * Acts on a revision before it gets saved.
 *
 * @param EntityStorageInterface $storage
 *   The entity storage object.
 * @param object $record
 *   The revision object.
 */',
        'startLine' => 116,
        'endLine' => 116,
        'startColumn' => 3,
        'endColumn' => 86,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionableInterface',
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