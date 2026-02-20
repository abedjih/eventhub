<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Schema/DynamicallyFieldableEntityStorageSchemaInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\Schema\DynamicallyFieldableEntityStorageSchemaInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-26b9433dfc244abc77b338643ae0d0cf7d670aa112cd839fefcf125b48fa7aa6-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Schema/DynamicallyFieldableEntityStorageSchemaInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity\\Schema',
    'name' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
    'shortName' => 'DynamicallyFieldableEntityStorageSchemaInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A storage schema that supports entity types with dynamic field definitions.
 *
 * A storage schema that implements this interface can react to the entity
 * type\'s field definitions changing, due to modules being installed or
 * uninstalled, or via field UI, or via code changes to the entity class.
 *
 * For example, configurable fields defined and exposed by field.module.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 79,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
      1 => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
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
            'startLine' => 30,
            'endLine' => 30,
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
            'startLine' => 30,
            'endLine' => 30,
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
 * Checks if the changes to the storage definition requires schema changes.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
 *   The updated field storage definition.
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $original
 *   The original field storage definition.
 *
 * @return bool
 *   TRUE if storage schema changes are required, FALSE otherwise.
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 3,
        'endColumn' => 148,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Schema',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
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
            'startLine' => 69,
            'endLine' => 69,
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
            'startLine' => 69,
            'endLine' => 69,
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
 * Checks if existing data would be lost if the schema changes were applied.
 *
 * If there are no schema changes needed, then no data needs to be migrated,
 * but it is not the responsibility of this function to recheck what
 * requiresFieldStorageSchemaChanges() checks. Rather, the meaning of what
 * this function returns when requiresFieldStorageSchemaChanges() returns
 * FALSE is undefined. Callers are expected to only call this function when
 * requiresFieldStorageSchemaChanges() is TRUE.
 *
 * This function can return FALSE if any of these conditions apply:
 * - There are no existing entities for the entity type to which this field
 *   is attached.
 * - There are existing entities, but none with existing values for this
 *   field.
 * - There are existing field values, but the schema changes can be applied
 *   without losing them (e.g., if the schema changes can be performed by
 *   altering tables rather than dropping and recreating them).
 * - The only field values that would be lost are ones that are not valid for
 *   the new definition (e.g., if changing a field from revisionable to
 *   non-revisionable, then it\'s okay to drop data for the non-default
 *   revision).
 *
 * When this function returns FALSE, site administrators will be unable to
 * perform an automated update, and will instead need to perform a site
 * migration or invoke some custom update process.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
 *   The updated field storage definition.
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $original
 *   The original field storage definition.
 *
 * @return bool
 *   TRUE if data migration is required, FALSE otherwise.
 *
 * @see self::requiresFieldStorageSchemaChanges()
 */',
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 3,
        'endColumn' => 141,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Schema',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
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
            'startLine' => 77,
            'endLine' => 77,
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
 * Performs final cleanup after all data of a field has been purged.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
 *   The field being purged.
 */',
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 3,
        'endColumn' => 85,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Schema',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
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