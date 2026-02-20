<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityTypeListenerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityTypeListenerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-80557e2d65a2ffaa2224490fd47a53bd215315f3846e0ce27019639330c51a42-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityTypeListenerInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
    'shortName' => 'EntityTypeListenerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for entity type create, delete and update operations.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 64,
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
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'onEntityTypeCreate' => 
      array (
        'name' => 'onEntityTypeCreate',
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
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 38,
            'endColumn' => 69,
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
 * Reacts to the creation of the entity type.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type being created.
 */',
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 3,
        'endColumn' => 71,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'aliasName' => NULL,
      ),
      'onFieldableEntityTypeCreate' => 
      array (
        'name' => 'onFieldableEntityTypeCreate',
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
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 47,
            'endColumn' => 78,
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
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 81,
            'endColumn' => 112,
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
 * Reacts to the creation of the fieldable entity type.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type being created.
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
 *   The entity type\'s field storage definitions.
 */',
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 3,
        'endColumn' => 114,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'aliasName' => NULL,
      ),
      'onEntityTypeUpdate' => 
      array (
        'name' => 'onEntityTypeUpdate',
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
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 38,
            'endColumn' => 69,
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
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 72,
            'endColumn' => 100,
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
 * Reacts to the update of the entity type.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The updated entity type definition.
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
 *   The original entity type definition.
 */',
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 3,
        'endColumn' => 102,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'aliasName' => NULL,
      ),
      'onFieldableEntityTypeUpdate' => 
      array (
        'name' => 'onFieldableEntityTypeUpdate',
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
            'startLine' => 54,
            'endLine' => 54,
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
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 81,
            'endColumn' => 109,
            'parameterIndex' => 1,
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
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 112,
            'endColumn' => 143,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'original_field_storage_definitions' => 
          array (
            'name' => 'original_field_storage_definitions',
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
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 146,
            'endColumn' => 186,
            'parameterIndex' => 3,
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
                'startLine' => 54,
                'endLine' => 54,
                'startTokenPos' => 103,
                'startFilePos' => 2269,
                'endTokenPos' => 103,
                'endFilePos' => 2272,
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
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 189,
            'endColumn' => 211,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reacts to the update of a fieldable entity type.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The updated entity type definition.
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
 *   The original entity type definition.
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
 *   The updated field storage definitions, including possibly new ones.
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $original_field_storage_definitions
 *   The original field storage definitions.
 * @param array &$sandbox
 *   (optional) A sandbox array provided by a hook_update_N() implementation
 *   or a Batch API callback. If the entity schema update requires a data
 *   migration, this parameter is mandatory. Defaults to NULL.
 */',
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 3,
        'endColumn' => 213,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'aliasName' => NULL,
      ),
      'onEntityTypeDelete' => 
      array (
        'name' => 'onEntityTypeDelete',
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
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 38,
            'endColumn' => 69,
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
 * Reacts to the deletion of the entity type.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type being deleted.
 */',
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 3,
        'endColumn' => 71,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
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