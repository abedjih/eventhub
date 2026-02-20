<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/ConditionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Query\ConditionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a7532c586d3396867d0e0f55f5d31983cfa764b81c6fc4dc8ac6856b7a548995-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/ConditionInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database\\Query',
    'name' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
    'shortName' => 'ConditionInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for a conditional clause in a query.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 230,
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
      'condition' => 
      array (
        'name' => 'condition',
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
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 35,
                'startFilePos' => 3311,
                'endTokenPos' => 35,
                'endFilePos' => 3314,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 37,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => '\'=\'',
              'attributes' => 
              array (
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 42,
                'startFilePos' => 3329,
                'endTokenPos' => 42,
                'endFilePos' => 3331,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 52,
            'endColumn' => 66,
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
 * Helper function: builds the most common conditional clauses.
 *
 * This method takes 1 to 3 parameters.
 *
 * If called with 1 parameter, it should be a ConditionInterface that in
 * itself forms a valid where clause. Use e.g. to build clauses with nested
 * ANDs and ORs.
 *
 * If called with 2 parameters, they are taken as $field and $value with
 * $operator having a value of =.
 *
 * Do not use this method to test for NULL values. Instead, use
 * ConditionInterface::isNull() or ConditionInterface::isNotNull().
 *
 * To improve readability, the operators EXISTS and NOT EXISTS have their own
 * utility method defined.
 *
 * Drupal considers LIKE case insensitive and the following is often used
 * to tell the database that case insensitive equivalence is desired:
 * @code
 * \\Drupal::database()->select(\'users\')
 *  ->condition(\'name\', $injected_connection->escapeLike($name), \'LIKE\')
 * @endcode
 * Use \'LIKE BINARY\' instead of \'LIKE\' for case sensitive queries.
 *
 * Note: When using MySQL, the exact behavior also depends on the used
 * collation. if the field is set to binary, then a LIKE condition will also
 * be case sensitive and when a case insensitive collation is used, the =
 * operator will also be case insensitive.
 *
 * @param string|\\Drupal\\Core\\Database\\Query\\ConditionInterface $field
 *   The name of the field to check. This can also be ConditionInterface
 *   in itself. Use where(), if you would like to add a more complex condition
 *   involving operators or functions, or an already compiled condition.
 * @param string|int|array|\\Drupal\\Core\\Database\\Query\\SelectInterface|null $value
 *   The value to test the field against. In most cases, and depending on the
 *   operator, this will be a scalar or an array. As SQL accepts select
 *   queries on any place where a scalar value or set is expected, $value may
 *   also be a SelectInterface or an array of SelectInterfaces. If $operator
 *   is a unary operator, e.g. IS NULL, $value will be ignored and should be
 *   null. If the operator requires a subquery, e.g. EXISTS, the $field will
 *   be ignored and $value should be a SelectInterface object.
 * @param string|null $operator
 *   The operator to use. Supported for all supported databases are at least:
 *   - The comparison operators =, <>, <, <=, >, >=.
 *   - The operators (NOT) BETWEEN, (NOT) IN, (NOT) EXISTS, (NOT) LIKE.
 *   Other operators (e.g. LIKE BINARY) may or may not work. Defaults to =.
 *
 * @return $this
 *   The called object.
 *
 * @throws \\Drupal\\Core\\Database\\InvalidQueryException
 *   If passed invalid arguments, such as an empty array as $value.
 *
 * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::isNull()
 * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::isNotNull()
 * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::exists()
 * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::notExist()
 * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::where()
 */',
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 3,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'where' => 
      array (
        'name' => 'where',
        'parameters' => 
        array (
          'snippet' => 
          array (
            'name' => 'snippet',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 25,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 89,
                'endLine' => 89,
                'startTokenPos' => 61,
                'startFilePos' => 3903,
                'endTokenPos' => 62,
                'endFilePos' => 3904,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 35,
            'endColumn' => 44,
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
 * Adds an arbitrary WHERE clause to the query.
 *
 * @param string $snippet
 *   A portion of a WHERE clause as a prepared statement. It must use named
 *   placeholders, not ? placeholders. The caller is responsible for providing
 *   unique placeholders that do not interfere with the placeholders generated
 *   by this ConditionInterface object.
 * @param array $args
 *   An associative array of arguments keyed by the named placeholders.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 89,
        'endLine' => 89,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'isNull' => 
      array (
        'name' => 'isNull',
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
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 26,
            'endColumn' => 31,
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
 * Sets a condition that the specified field be NULL.
 *
 * @param string|\\Drupal\\Core\\Database\\Query\\SelectInterface $field
 *   The name of the field or a subquery to check.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'isNotNull' => 
      array (
        'name' => 'isNotNull',
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
            'startLine' => 111,
            'endLine' => 111,
            'startColumn' => 29,
            'endColumn' => 34,
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
 * Sets a condition that the specified field be NOT NULL.
 *
 * @param string|\\Drupal\\Core\\Database\\Query\\SelectInterface $field
 *   The name of the field or a subquery to check.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'exists' => 
      array (
        'name' => 'exists',
        'parameters' => 
        array (
          'select' => 
          array (
            'name' => 'select',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 122,
            'endLine' => 122,
            'startColumn' => 26,
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
 * Sets a condition that the specified subquery returns values.
 *
 * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $select
 *   The subquery that must contain results.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'notExists' => 
      array (
        'name' => 'notExists',
        'parameters' => 
        array (
          'select' => 
          array (
            'name' => 'select',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
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
            'startColumn' => 29,
            'endColumn' => 51,
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
 * Sets a condition that the specified subquery returns no values.
 *
 * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $select
 *   The subquery that must not contain results.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 133,
        'endLine' => 133,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'alwaysFalse' => 
      array (
        'name' => 'alwaysFalse',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets a condition that is always false.
 *
 * @return $this
 */',
        'startLine' => 140,
        'endLine' => 140,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'conditions' => 
      array (
        'name' => 'conditions',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the, possibly nested, list of conditions in this conditional clause.
 *
 * This method returns by reference. That allows alter hooks to access the
 * data structure directly and manipulate it before it gets compiled.
 *
 * The data structure that is returned is an indexed array of entries, where
 * each entry looks like the following:
 * @code
 * [
 *   \'field\' => $field,
 *   \'value\' => $value,
 *   \'operator\' => $operator,
 * ];
 * @endcode
 *
 * In the special case that $operator is NULL, the $field is taken as a raw
 * SQL snippet (possibly containing a function) and $value is an associative
 * array of placeholders for the snippet.
 *
 * There will also be a single array entry of #conjunction, which is the
 * conjunction that will be applied to the array, such as AND.
 *
 * @return array
 *   The, possibly nested, list of all conditions (by reference).
 */',
        'startLine' => 168,
        'endLine' => 168,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
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
 * Gets a complete list of all values to insert into the prepared statement.
 *
 * @return array
 *   An associative array of placeholders and values.
 */',
        'startLine' => 176,
        'endLine' => 176,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'compile' => 
      array (
        'name' => 'compile',
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
            'startLine' => 190,
            'endLine' => 190,
            'startColumn' => 27,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'queryPlaceholder' => 
          array (
            'name' => 'queryPlaceholder',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Database\\Query\\PlaceholderInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 190,
            'endLine' => 190,
            'startColumn' => 51,
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
 * Compiles the saved conditions for later retrieval.
 *
 * This method does not return anything, but simply prepares data to be
 * retrieved via __toString() and arguments().
 *
 * @param \\Drupal\\Core\\Database\\Connection $connection
 *   The database connection for which to compile the conditionals.
 * @param \\Drupal\\Core\\Database\\Query\\PlaceholderInterface $queryPlaceholder
 *   The query this condition belongs to. If not given, the current query is
 *   used.
 */',
        'startLine' => 190,
        'endLine' => 190,
        'startColumn' => 3,
        'endColumn' => 90,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'compiled' => 
      array (
        'name' => 'compiled',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check whether a condition has been previously compiled.
 *
 * @return bool
 *   TRUE if the condition has been previously compiled.
 */',
        'startLine' => 198,
        'endLine' => 198,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'conditionGroupFactory' => 
      array (
        'name' => 'conditionGroupFactory',
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
                'startLine' => 212,
                'endLine' => 212,
                'startTokenPos' => 194,
                'startFilePos' => 7614,
                'endTokenPos' => 194,
                'endFilePos' => 7618,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 212,
            'endLine' => 212,
            'startColumn' => 41,
            'endColumn' => 60,
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
 * Creates an object holding a group of conditions.
 *
 * See andConditionGroup() and orConditionGroup() for more.
 *
 * @param string $conjunction
 *   - AND (default): this is the equivalent of andConditionGroup().
 *   - OR: this is the equivalent of orConditionGroup().
 *
 * @return \\Drupal\\Core\\Database\\Query\\ConditionInterface
 *   An object holding a group of conditions.
 */',
        'startLine' => 212,
        'endLine' => 212,
        'startColumn' => 3,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'andConditionGroup' => 
      array (
        'name' => 'andConditionGroup',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new group of conditions ANDed together.
 *
 * @return \\Drupal\\Core\\Database\\Query\\ConditionInterface
 *   An object holding a group of conditions.
 */',
        'startLine' => 220,
        'endLine' => 220,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'orConditionGroup' => 
      array (
        'name' => 'orConditionGroup',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new group of conditions ORed together.
 *
 * @return \\Drupal\\Core\\Database\\Query\\ConditionInterface
 *   An object holding a group of conditions.
 */',
        'startLine' => 228,
        'endLine' => 228,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
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