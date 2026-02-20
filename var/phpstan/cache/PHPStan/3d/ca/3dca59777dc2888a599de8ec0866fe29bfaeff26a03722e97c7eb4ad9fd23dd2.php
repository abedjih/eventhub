<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Schema/EntityStorageSchemaInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\Schema\EntityStorageSchemaInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ee3707d3e4f72e659430ff41dbba551dc19a4b74586b89002b8bbaf715f92745-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Schema/EntityStorageSchemaInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity\\Schema',
    'name' => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
    'shortName' => 'EntityStorageSchemaInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the interface for entity storage schema handler classes.
 *
 * An entity type\'s storage schema handler is responsible for creating the
 * storage backend\'s schema that the entity type\'s storage handler needs for
 * storing its entities. For example, if the storage handler is for a SQL
 * backend, then the storage schema handler is responsible for creating the
 * needed tables. During the application lifetime, an entity type\'s definition
 * can change in a way that requires changes to the storage schema, so this
 * interface defines methods for that as well.
 *
 * @see \\Drupal\\Core\\Entity\\EntityStorageInterface
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 72,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
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
            'startLine' => 34,
            'endLine' => 34,
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
            'startLine' => 34,
            'endLine' => 34,
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
 * Checks if the changes to the entity type requires storage schema changes.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The updated entity type definition.
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
 *   The original entity type definition.
 *
 * @return bool
 *   TRUE if storage schema changes are required, FALSE otherwise.
 */',
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 3,
        'endColumn' => 118,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Schema',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
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
            'startLine' => 70,
            'endLine' => 70,
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
            'startLine' => 70,
            'endLine' => 70,
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
 * Checks if existing data would be lost if the schema changes were applied.
 *
 * If there are no schema changes needed, then no data needs to be migrated,
 * but it is not the responsibility of this function to recheck what
 * requiresEntityStorageSchemaChanges() checks. Rather, the meaning of what
 * this function returns when requiresEntityStorageSchemaChanges() returns
 * FALSE is undefined. Callers are expected to only call this function when
 * requiresEntityStorageSchemaChanges() is TRUE.
 *
 * This function can return FALSE if any of these conditions apply:
 * - There are no existing entities for the entity type.
 * - There are existing entities, but the schema changes can be applied
 *   without losing their data (e.g., if the schema changes can be performed
 *   by altering tables rather than dropping and recreating them).
 * - The only entity data that would be lost are ones that are not valid for
 *   the new definition (e.g., if changing an entity type from revisionable
 *   to non-revisionable, then it\'s okay to drop data for the non-default
 *   revision).
 *
 * When this function returns FALSE, site administrators will be unable to
 * perform an automated update, and will instead need to perform a site
 * migration or invoke some custom update process.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The updated entity type definition.
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
 *   The original entity type definition.
 *
 * @return bool
 *   TRUE if data migration is required, FALSE otherwise.
 *
 * @see self::requiresEntityStorageSchemaChanges()
 */',
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 3,
        'endColumn' => 111,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Schema',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
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