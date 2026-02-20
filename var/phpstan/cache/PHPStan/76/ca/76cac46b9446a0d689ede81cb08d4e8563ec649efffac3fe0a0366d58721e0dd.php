<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/Update.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Query\Update
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-dd6e35d33824b010a46cf5216b96404657dddf30e522b8db873f100e9b1b07b4-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Query\\Update',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/Update.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database\\Query',
    'name' => 'Drupal\\Core\\Database\\Query\\Update',
    'shortName' => 'Update',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * General class for an abstracted UPDATE operation.
 *
 * @ingroup database
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 222,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Database\\Query\\QueryConditionTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'table' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'name' => 'table',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The table to update.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 3,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fields' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'name' => 'fields',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 48,
            'startFilePos' => 439,
            'endTokenPos' => 49,
            'endFilePos' => 440,
          ),
        ),
        'docComment' => '/**
 * An array of fields that will be updated.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'arguments' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'name' => 'arguments',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 60,
            'startFilePos' => 540,
            'endTokenPos' => 61,
            'endFilePos' => 541,
          ),
        ),
        'docComment' => '/**
 * An array of values to update to.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'expressionFields' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'name' => 'expressionFields',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 72,
            'startFilePos' => 945,
            'endTokenPos' => 73,
            'endFilePos' => 946,
          ),
        ),
        'docComment' => '/**
 * Array of fields to update to an expression in case of a duplicate record.
 *
 * @var array
 *
 * This variable is a nested array in the following format:
 * @code
 * <some field> => [
 *  \'condition\' => <condition to execute, as a string>,
 *  \'arguments\' => <array of arguments for condition, or NULL for none>,
 * ];
 * @endcode
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 3,
        'endColumn' => 35,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Database\\Connection',
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
            'startColumn' => 31,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 55,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 62,
                'endLine' => 62,
                'startTokenPos' => 98,
                'startFilePos' => 1313,
                'endTokenPos' => 99,
                'endFilePos' => 1314,
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
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 63,
            'endColumn' => 81,
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
 * Constructs an Update query object.
 *
 * @param \\Drupal\\Core\\Database\\Connection $connection
 *   A Connection object.
 * @param string $table
 *   Name of the table to associate with this query.
 * @param array $options
 *   Array of database options.
 */',
        'startLine' => 62,
        'endLine' => 67,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'aliasName' => NULL,
      ),
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
            'startLine' => 79,
            'endLine' => 79,
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
 * Adds a set of field->value pairs to be updated.
 *
 * @param array $fields
 *   An associative array of fields to write into the database. The array keys
 *   are the field names and the values are the values to which to set them.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 79,
        'endLine' => 82,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'aliasName' => NULL,
      ),
      'expression' => 
      array (
        'name' => 'expression',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 38,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 102,
                'endLine' => 102,
                'startTokenPos' => 194,
                'startFilePos' => 2517,
                'endTokenPos' => 194,
                'endFilePos' => 2520,
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
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 51,
            'endColumn' => 74,
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
 * Specifies fields to be updated as an expression.
 *
 * Expression fields are cases such as counter=counter+1. This method takes
 * precedence over fields().
 *
 * @param string $field
 *   The field to set.
 * @param string $expression
 *   The field will be set to the value of this expression. This parameter
 *   may include named placeholders.
 * @param array|null $arguments
 *   If specified, this is an array of key/value pairs for named placeholders
 *   corresponding to the expression.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 102,
        'endLine' => 109,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'aliasName' => NULL,
      ),
      'execute' => 
      array (
        'name' => 'execute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Executes the UPDATE query.
 *
 * @return int|null
 *   The number of rows matched by the update query. This includes rows that
 *   actually didn\'t have to be updated because the values didn\'t change.
 */',
        'startLine' => 118,
        'endLine' => 136,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'aliasName' => NULL,
      ),
      '__toString' => 
      array (
        'name' => '__toString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Implements PHP magic __toString method to convert the query to a string.
 *
 * @return string
 *   The prepared statement.
 */',
        'startLine' => 144,
        'endLine' => 178,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'aliasName' => NULL,
      ),
      'arguments' => 
      array (
        'name' => 'arguments',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 183,
        'endLine' => 186,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'aliasName' => NULL,
      ),
      'getQueryArguments' => 
      array (
        'name' => 'getQueryArguments',
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
 * Returns the query arguments with placeholders mapped to their values.
 *
 * @return array
 *   An array containing arguments and update values.
 *   Both arguments and update values are associative array where the keys
 *   are the placeholder names and the values are the placeholder values.
 */',
        'startLine' => 196,
        'endLine' => 220,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Update',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Update',
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