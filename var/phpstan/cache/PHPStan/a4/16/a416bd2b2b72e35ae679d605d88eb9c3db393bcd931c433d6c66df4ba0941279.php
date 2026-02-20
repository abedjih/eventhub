<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/InsertTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Query\InsertTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-48fec29c86588b5e01a60ca75f116c93cf9ef4a9fce0d55e21fd8c60f36a9143-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/InsertTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database\\Query',
    'name' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
    'shortName' => 'InsertTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides common functionality for INSERT and UPSERT queries.
 *
 * @ingroup database
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 187,
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
      'table' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'name' => 'table',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The table on which to insert.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 3,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'insertFields' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'name' => 'insertFields',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 24,
            'startTokenPos' => 30,
            'startFilePos' => 358,
            'endTokenPos' => 31,
            'endFilePos' => 359,
          ),
        ),
        'docComment' => '/**
 * An array of fields on which to insert.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultFields' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'name' => 'defaultFields',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 42,
            'startFilePos' => 504,
            'endTokenPos' => 43,
            'endFilePos' => 505,
          ),
        ),
        'docComment' => '/**
 * An array of fields that should be set to their database-defined defaults.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 3,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'insertValues' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'name' => 'insertValues',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 48,
            'endLine' => 48,
            'startTokenPos' => 54,
            'startFilePos' => 1138,
            'endTokenPos' => 55,
            'endFilePos' => 1139,
          ),
        ),
        'docComment' => '/**
 * A nested array of values to insert.
 *
 * $insertValues is an array of arrays. Each sub-array is either an
 * associative array whose keys are field names and whose values are field
 * values to insert, or a non-associative array of values in the same order
 * as $insertFields.
 *
 * Whether multiple insert sets will be run in a single query or multiple
 * queries is left to individual drivers to implement in whatever manner is
 * most appropriate. The order of values in each sub-array must match the
 * order of fields in $insertFields.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'fields' => 
      array (
        'name' => 'fields',
        'parameters' => 
        array (
          'fields' => 
          array (
            'name' => 'fields',
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
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 26,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 70,
                'endLine' => 70,
                'startTokenPos' => 77,
                'startFilePos' => 2059,
                'endTokenPos' => 78,
                'endFilePos' => 2060,
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
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 41,
            'endColumn' => 58,
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
 * Adds a set of field->value pairs to be inserted.
 *
 * This method may only be called once. Calling it a second time will be
 * ignored. To queue up multiple sets of values to be inserted at once,
 * use the values() method.
 *
 * @param array $fields
 *   An array of fields on which to insert. This array may be indexed or
 *   associative. If indexed, the array is taken to be the list of fields.
 *   If associative, the keys of the array are taken to be the fields and
 *   the values are taken to be corresponding values to insert. If a
 *   $values argument is provided, $fields must be indexed.
 * @param array $values
 *   (optional) An array of fields to insert into the database. The values
 *   must be specified in the same order as the $fields array.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 70,
        'endLine' => 85,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'aliasName' => NULL,
      ),
      'values' => 
      array (
        'name' => 'values',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 101,
            'endLine' => 101,
            'startColumn' => 26,
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
 * Adds another set of values to the query to be inserted.
 *
 * If $values is a numeric-keyed array, it will be assumed to be in the same
 * order as the original fields() call. If it is associative, it may be
 * in any order as long as the keys of the array match the names of the
 * fields.
 *
 * @param array $values
 *   An array of values to add to the query.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 101,
        'endLine' => 114,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'aliasName' => NULL,
      ),
      'useDefaults' => 
      array (
        'name' => 'useDefaults',
        'parameters' => 
        array (
          'fields' => 
          array (
            'name' => 'fields',
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
            'startLine' => 135,
            'endLine' => 135,
            'startColumn' => 31,
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
 * Specifies fields for which the database defaults should be used.
 *
 * If you want to force a given field to use the database-defined default,
 * not NULL or undefined, use this method to instruct the database to use
 * default values explicitly. In most cases this will not be necessary
 * unless you are inserting a row that is all default values, as you cannot
 * specify no values in an INSERT query.
 *
 * Specifying a field both in fields() and in useDefaults() is an error
 * and will not execute.
 *
 * @param array $fields
 *   An array of values for which to use the default values
 *   specified in the table definition.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 135,
        'endLine' => 138,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'aliasName' => NULL,
      ),
      'getInsertPlaceholderFragment' => 
      array (
        'name' => 'getInsertPlaceholderFragment',
        'parameters' => 
        array (
          'nested_insert_values' => 
          array (
            'name' => 'nested_insert_values',
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
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 51,
            'endColumn' => 77,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default_fields' => 
          array (
            'name' => 'default_fields',
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
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 80,
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
 * Returns the query placeholders for values that will be inserted.
 *
 * @param array $nested_insert_values
 *   A nested array of values to insert.
 * @param array $default_fields
 *   An array of fields that should be set to their database-defined defaults.
 *
 * @return array
 *   An array of insert placeholders.
 */',
        'startLine' => 151,
        'endLine' => 178,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 183,
        'endLine' => 185,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\InsertTrait',
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