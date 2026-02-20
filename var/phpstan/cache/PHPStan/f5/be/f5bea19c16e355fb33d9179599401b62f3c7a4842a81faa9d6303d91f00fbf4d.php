<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/FieldableEntityStorageInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\FieldableEntityStorageInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8a168836abb923ef71f57fba8a7a65331fbcbd68a4eae79dc1a7fd3f9b67666b-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/FieldableEntityStorageInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
    'shortName' => 'FieldableEntityStorageInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A storage that supports entity types with field definitions.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 53,
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
      'countFieldData' => 
      array (
        'name' => 'countFieldData',
        'parameters' => 
        array (
          'storage_definition' => 
          array (
            'name' => 'storage_definition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 34,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as_bool' => 
          array (
            'name' => 'as_bool',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 28,
                'endLine' => 28,
                'startTokenPos' => 44,
                'startFilePos' => 941,
                'endTokenPos' => 44,
                'endFilePos' => 945,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 55,
            'endColumn' => 70,
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
 * Determines the number of entities with values for a given field.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
 *   The field for which to count data records.
 * @param bool $as_bool
 *   (Optional) Optimizes the query for checking whether there are any records
 *   or not. Defaults to FALSE.
 *
 * @return bool|int
 *   The number of entities. If $as_bool parameter is TRUE then the
 *   value will either be TRUE or FALSE.
 *
 * @see \\Drupal\\Core\\Entity\\FieldableEntityStorageInterface::purgeFieldData()
 */',
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 72,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
        'aliasName' => NULL,
      ),
      'purgeFieldData' => 
      array (
        'name' => 'purgeFieldData',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 34,
            'endColumn' => 75,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'batch_size' => 
          array (
            'name' => 'batch_size',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 78,
            'endColumn' => 88,
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
 * Purges a batch of field data.
 *
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The deleted field whose data is being purged.
 * @param int $batch_size
 *   The maximum number of field data records to purge before returning,
 *   relating to the count of field data records returned by
 *   \\Drupal\\Core\\Entity\\FieldableEntityStorageInterface::countFieldData().
 *
 * @return int
 *   The number of field data records that have been purged.
 */',
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 3,
        'endColumn' => 90,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
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
            'startLine' => 51,
            'endLine' => 51,
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
 *   The field storage being purged.
 */',
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 3,
        'endColumn' => 85,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
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