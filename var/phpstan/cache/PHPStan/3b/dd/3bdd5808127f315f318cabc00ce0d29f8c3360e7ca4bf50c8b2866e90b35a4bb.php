<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/SelectInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Query\SelectInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-faca6119690dc6edfd779a2d9ce9d6925cb6cd3c697a12f85c2e136fee1cacf1-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/SelectInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database\\Query',
    'name' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
    'shortName' => 'SelectInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface definition for a Select Query object.
 *
 * @ingroup database
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 642,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
      1 => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
      2 => 'Drupal\\Core\\Database\\Query\\ExtendableInterface',
      3 => 'Drupal\\Core\\Database\\Query\\PlaceholderInterface',
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
      'getFields' => 
      array (
        'name' => 'getFields',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a reference to the fields array for this query.
 *
 * Because this method returns by reference, alter hooks may edit the fields
 * array directly to make their changes. If just adding fields, however, the
 * use of addField() is preferred.
 *
 * Note that this method must be called by reference as well:
 *
 * @code
 * $fields =& $query->getFields();
 * @endcode
 *
 * @return array
 *   A reference to the fields array structure.
 */',
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'getExpressions' => 
      array (
        'name' => 'getExpressions',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a reference to the expressions array for this query.
 *
 * Because this method returns by reference, alter hooks may edit the
 * expressions array directly to make their changes. If just adding
 * expressions, however, the use of addExpression() is preferred.
 *
 * Note that this method must be called by reference as well:
 *
 * @code
 * $fields =& $query->getExpressions();
 * @endcode
 *
 * @return array
 *   A reference to the expression array structure.
 */',
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'getOrderBy' => 
      array (
        'name' => 'getOrderBy',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a reference to the order by array for this query.
 *
 * Because this method returns by reference, alter hooks may edit the order-by
 * array directly to make their changes. If just adding additional ordering
 * fields, however, the use of orderBy() is preferred.
 *
 * Note that this method must be called by reference as well:
 *
 * @code
 * $fields =& $query->getOrderBy();
 * @endcode
 *
 * @return array
 *   A reference to the expression array structure.
 */',
        'startLine' => 68,
        'endLine' => 68,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'getGroupBy' => 
      array (
        'name' => 'getGroupBy',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a reference to the group-by array for this query.
 *
 * Because this method returns by reference, alter hooks may edit the group-by
 * array directly to make their changes. If just adding additional grouping
 * fields, however, the use of groupBy() is preferred.
 *
 * Note that this method must be called by reference as well:
 *
 * @code
 * $fields =& $query->getGroupBy();
 * @endcode
 *
 * @return array
 *   A reference to the group-by array structure.
 */',
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'getTables' => 
      array (
        'name' => 'getTables',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a reference to the tables array for this query.
 *
 * Because this method returns by reference, alter hooks may edit the tables
 * array directly to make their changes. If just adding tables, however, the
 * use of the join() methods is preferred.
 *
 * Note that this method must be called by reference as well:
 *
 * @code
 * $tables =& $query->getTables();
 * @endcode
 *
 * @return array
 *   A reference to the tables array structure.
 */',
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'getUnion' => 
      array (
        'name' => 'getUnion',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a reference to the union queries for this query.
 *
 * This includes queries for UNION, UNION ALL, and UNION DISTINCT.
 *
 * Because this method returns by reference, alter hooks may edit the tables
 * array directly to make their changes. If just adding union queries,
 * however, the use of the union() method is preferred.
 *
 * Note that this method must be called by reference as well:
 *
 * @code
 * $fields =& $query->getUnion();
 * @endcode
 *
 * @return array
 *   A reference to the union query array structure.
 */',
        'startLine' => 124,
        'endLine' => 124,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'escapeLike' => 
      array (
        'name' => 'escapeLike',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 30,
            'endColumn' => 36,
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
 * Escapes characters that work as wildcard characters in a LIKE pattern.
 *
 * @param string $string
 *   The string to escape.
 *
 * @return string
 *   The escaped string.
 *
 * @see \\Drupal\\Core\\Database\\Connection::escapeLike()
 */',
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'escapeField' => 
      array (
        'name' => 'escapeField',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 152,
            'endLine' => 152,
            'startColumn' => 31,
            'endColumn' => 37,
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
 * Escapes a field name string.
 *
 * Force all field names to be strictly alphanumeric-plus-underscore.
 * For some database drivers, it may also wrap the field name in
 * database-specific escape characters.
 *
 * @param string $string
 *   An unsanitized field name.
 *
 * @return string
 *   The sanitized field name string.
 */',
        'startLine' => 152,
        'endLine' => 152,
        'startColumn' => 3,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'getArguments' => 
      array (
        'name' => 'getArguments',
        'parameters' => 
        array (
          'queryPlaceholder' => 
          array (
            'name' => 'queryPlaceholder',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 164,
                'endLine' => 164,
                'startTokenPos' => 146,
                'startFilePos' => 4821,
                'endTokenPos' => 146,
                'endFilePos' => 4824,
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
                      'name' => 'Drupal\\Core\\Database\\Query\\PlaceholderInterface',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 32,
            'endColumn' => 77,
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
 * Compiles and returns an array of the arguments for this prepared statement.
 *
 * @param \\Drupal\\Core\\Database\\Query\\PlaceholderInterface|null $queryPlaceholder
 *   When collecting the arguments of a subquery, the main placeholder
 *   object should be passed as this parameter.
 *
 * @return array
 *   An associative array of all placeholder arguments for this query.
 */',
        'startLine' => 164,
        'endLine' => 164,
        'startColumn' => 3,
        'endColumn' => 79,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'distinct' => 
      array (
        'name' => 'distinct',
        'parameters' => 
        array (
          'distinct' => 
          array (
            'name' => 'distinct',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 177,
                'endLine' => 177,
                'startTokenPos' => 164,
                'startFilePos' => 5096,
                'endTokenPos' => 164,
                'endFilePos' => 5099,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 28,
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
 * Sets this query to be DISTINCT.
 *
 * @param bool $distinct
 *   TRUE to flag this query DISTINCT, FALSE to disable it.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 177,
        'endLine' => 177,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'addField' => 
      array (
        'name' => 'addField',
        'parameters' => 
        array (
          'table_alias' => 
          array (
            'name' => 'table_alias',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 197,
            'endLine' => 197,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 197,
            'endLine' => 197,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'alias' => 
          array (
            'name' => 'alias',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 197,
                'endLine' => 197,
                'startTokenPos' => 186,
                'startFilePos' => 5860,
                'endTokenPos' => 186,
                'endFilePos' => 5863,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 197,
            'endLine' => 197,
            'startColumn' => 50,
            'endColumn' => 62,
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
 * Adds a field to the list to be SELECTed.
 *
 * @param string $table_alias
 *   The name of the table from which the field comes, as an alias. Generally
 *   you will want to use the return value of join() here to ensure that it is
 *   valid.
 * @param string $field
 *   The name of the field.
 * @param string $alias
 *   The alias for this field. If not specified, one will be generated
 *   automatically based on the $table_alias and $field. The alias will be
 *   checked for uniqueness, so the requested alias may not be the alias
 *   that is assigned in all cases.
 *
 * @return string
 *   The unique alias that was assigned for this field.
 */',
        'startLine' => 197,
        'endLine' => 197,
        'startColumn' => 3,
        'endColumn' => 64,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'parameters' => 
        array (
          'table_alias' => 
          array (
            'name' => 'table_alias',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 221,
            'endLine' => 221,
            'startColumn' => 26,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fields' => 
          array (
            'name' => 'fields',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 221,
                'endLine' => 221,
                'startTokenPos' => 207,
                'startFilePos' => 6889,
                'endTokenPos' => 208,
                'endFilePos' => 6890,
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
            'startLine' => 221,
            'endLine' => 221,
            'startColumn' => 40,
            'endColumn' => 57,
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
 * Add multiple fields from the same table to be SELECTed.
 *
 * This method does not return the aliases set for the passed fields. In the
 * majority of cases that is not a problem, as the alias will be the field
 * name. However, if you do need to know the alias you can call getFields()
 * and examine the result to determine what alias was created. Alternatively,
 * simply use addField() for the few fields you care about and this method for
 * the rest.
 *
 * @param string $table_alias
 *   The name of the table from which the field comes, as an alias. Generally
 *   you will want to use the return value of join() here to ensure that it is
 *   valid.
 * @param array $fields
 *   An indexed array of fields present in the specified table that should be
 *   included in this query. If not specified, $table_alias.* will be
 *   generated without any aliases.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 221,
        'endLine' => 221,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'addExpression' => 
      array (
        'name' => 'addExpression',
        'parameters' => 
        array (
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
            'startLine' => 243,
            'endLine' => 243,
            'startColumn' => 33,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'alias' => 
          array (
            'name' => 'alias',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 243,
                'endLine' => 243,
                'startTokenPos' => 227,
                'startFilePos' => 7812,
                'endTokenPos' => 227,
                'endFilePos' => 7815,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 243,
            'endLine' => 243,
            'startColumn' => 46,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 243,
                'endLine' => 243,
                'startTokenPos' => 234,
                'startFilePos' => 7831,
                'endTokenPos' => 235,
                'endFilePos' => 7832,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 243,
            'endLine' => 243,
            'startColumn' => 61,
            'endColumn' => 75,
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
 * Adds an expression to the list of "fields" to be SELECTed.
 *
 * An expression can be any arbitrary string that is valid SQL. That includes
 * various functions, which may in some cases be database-dependent. This
 * method makes no effort to correct for database-specific functions.
 *
 * @param string $expression
 *   The expression string. May contain placeholders.
 * @param string $alias
 *   The alias for this expression. If not specified, one will be generated
 *   automatically in the form "expression_#". The alias will be checked for
 *   uniqueness, so the requested alias may not be the alias that is assigned
 *   in all cases.
 * @param array $arguments
 *   Any placeholder arguments needed for this expression.
 *
 * @return string
 *   The unique alias that was assigned for this expression.
 */',
        'startLine' => 243,
        'endLine' => 243,
        'startColumn' => 3,
        'endColumn' => 77,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'join' => 
      array (
        'name' => 'join',
        'parameters' => 
        array (
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
            'startLine' => 272,
            'endLine' => 272,
            'startColumn' => 24,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'alias' => 
          array (
            'name' => 'alias',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 272,
                'endLine' => 272,
                'startTokenPos' => 254,
                'startFilePos' => 9292,
                'endTokenPos' => 254,
                'endFilePos' => 9295,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 272,
            'endLine' => 272,
            'startColumn' => 32,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'condition' => 
          array (
            'name' => 'condition',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 272,
                'endLine' => 272,
                'startTokenPos' => 261,
                'startFilePos' => 9311,
                'endTokenPos' => 261,
                'endFilePos' => 9314,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 272,
            'endLine' => 272,
            'startColumn' => 47,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 272,
                'endLine' => 272,
                'startTokenPos' => 268,
                'startFilePos' => 9330,
                'endTokenPos' => 269,
                'endFilePos' => 9331,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 272,
            'endLine' => 272,
            'startColumn' => 66,
            'endColumn' => 80,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Default Join against another table in the database.
 *
 * This method is a convenience method for innerJoin().
 *
 * @param \\Drupal\\Core\\Database\\Query\\SelectInterface|string $table
 *   The table against which to join. May be a string or another SelectQuery
 *   object. If a query object is passed, it will be used as a subselect.
 *   Unless the table name starts with the database / schema name and a dot
 *   it will be prefixed.
 * @param string|null $alias
 *   The alias for the table. In most cases this should be the first letter
 *   of the table, or the first letter of each "word" in the table.
 * @param string|null $condition
 *   The condition on which to join this table. If the join requires values,
 *   this clause should use a named placeholder and the value or values to
 *   insert should be passed in the 4th parameter. For the first table joined
 *   on a query, this value is ignored as the first table is taken as the base
 *   table. The token %alias can be used in this string to be replaced with
 *   the actual alias. This is useful when $alias is modified by the database
 *   system, for example, when joining the same table more than once.
 * @param array $arguments
 *   An array of arguments to replace into the $condition of this join.
 *
 * @return string
 *   The unique alias that was assigned for this table.
 */',
        'startLine' => 272,
        'endLine' => 272,
        'startColumn' => 3,
        'endColumn' => 82,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'innerJoin' => 
      array (
        'name' => 'innerJoin',
        'parameters' => 
        array (
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
            'startLine' => 299,
            'endLine' => 299,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'alias' => 
          array (
            'name' => 'alias',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 299,
                'endLine' => 299,
                'startTokenPos' => 288,
                'startFilePos' => 10731,
                'endTokenPos' => 288,
                'endFilePos' => 10734,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 299,
            'endLine' => 299,
            'startColumn' => 37,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'condition' => 
          array (
            'name' => 'condition',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 299,
                'endLine' => 299,
                'startTokenPos' => 295,
                'startFilePos' => 10750,
                'endTokenPos' => 295,
                'endFilePos' => 10753,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 299,
            'endLine' => 299,
            'startColumn' => 52,
            'endColumn' => 68,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 299,
                'endLine' => 299,
                'startTokenPos' => 302,
                'startFilePos' => 10769,
                'endTokenPos' => 303,
                'endFilePos' => 10770,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 299,
            'endLine' => 299,
            'startColumn' => 71,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Inner Join against another table in the database.
 *
 * @param \\Drupal\\Core\\Database\\Query\\SelectInterface|string $table
 *   The table against which to join. May be a string or another SelectQuery
 *   object. If a query object is passed, it will be used as a subselect.
 *   Unless the table name starts with the database / schema name and a dot
 *   it will be prefixed.
 * @param string|null $alias
 *   The alias for the table. In most cases this should be the first letter
 *   of the table, or the first letter of each "word" in the table.
 * @param string|null $condition
 *   The condition on which to join this table. If the join requires values,
 *   this clause should use a named placeholder and the value or values to
 *   insert should be passed in the 4th parameter. For the first table joined
 *   on a query, this value is ignored as the first table is taken as the base
 *   table. The token %alias can be used in this string to be replaced with
 *   the actual alias. This is useful when $alias is modified by the database
 *   system, for example, when joining the same table more than once.
 * @param array $arguments
 *   An array of arguments to replace into the $condition of this join.
 *
 * @return string
 *   The unique alias that was assigned for this table.
 */',
        'startLine' => 299,
        'endLine' => 299,
        'startColumn' => 3,
        'endColumn' => 87,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'leftJoin' => 
      array (
        'name' => 'leftJoin',
        'parameters' => 
        array (
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
            'startLine' => 326,
            'endLine' => 326,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'alias' => 
          array (
            'name' => 'alias',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 326,
                'endLine' => 326,
                'startTokenPos' => 322,
                'startFilePos' => 12174,
                'endTokenPos' => 322,
                'endFilePos' => 12177,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 326,
            'endLine' => 326,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'condition' => 
          array (
            'name' => 'condition',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 326,
                'endLine' => 326,
                'startTokenPos' => 329,
                'startFilePos' => 12193,
                'endTokenPos' => 329,
                'endFilePos' => 12196,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 326,
            'endLine' => 326,
            'startColumn' => 51,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 326,
                'endLine' => 326,
                'startTokenPos' => 336,
                'startFilePos' => 12212,
                'endTokenPos' => 337,
                'endFilePos' => 12213,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 326,
            'endLine' => 326,
            'startColumn' => 70,
            'endColumn' => 84,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Left Outer Join against another table in the database.
 *
 * @param \\Drupal\\Core\\Database\\Query\\SelectInterface|string $table
 *   The table against which to join. May be a string or another SelectQuery
 *   object. If a query object is passed, it will be used as a subselect.
 *   Unless the table name starts with the database / schema name and a dot
 *   it will be prefixed.
 * @param string|null $alias
 *   The alias for the table. In most cases this should be the first letter
 *   of the table, or the first letter of each "word" in the table.
 * @param string|null $condition
 *   The condition on which to join this table. If the join requires values,
 *   this clause should use a named placeholder and the value or values to
 *   insert should be passed in the 4th parameter. For the first table joined
 *   on a query, this value is ignored as the first table is taken as the base
 *   table. The token %alias can be used in this string to be replaced with
 *   the actual alias. This is useful when $alias is modified by the database
 *   system, for example, when joining the same table more than once.
 * @param array $arguments
 *   An array of arguments to replace into the $condition of this join.
 *
 * @return string
 *   The unique alias that was assigned for this table.
 */',
        'startLine' => 326,
        'endLine' => 326,
        'startColumn' => 3,
        'endColumn' => 86,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'addJoin' => 
      array (
        'name' => 'addJoin',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 360,
            'endLine' => 360,
            'startColumn' => 27,
            'endColumn' => 31,
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
            'startLine' => 360,
            'endLine' => 360,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'alias' => 
          array (
            'name' => 'alias',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 360,
                'endLine' => 360,
                'startTokenPos' => 359,
                'startFilePos' => 13969,
                'endTokenPos' => 359,
                'endFilePos' => 13972,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 360,
            'endLine' => 360,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'condition' => 
          array (
            'name' => 'condition',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 360,
                'endLine' => 360,
                'startTokenPos' => 366,
                'startFilePos' => 13988,
                'endTokenPos' => 366,
                'endFilePos' => 13991,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 360,
            'endLine' => 360,
            'startColumn' => 57,
            'endColumn' => 73,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 360,
                'endLine' => 360,
                'startTokenPos' => 373,
                'startFilePos' => 14007,
                'endTokenPos' => 374,
                'endFilePos' => 14008,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 360,
            'endLine' => 360,
            'startColumn' => 76,
            'endColumn' => 90,
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
 * Join against another table in the database.
 *
 * This method does the "hard" work of queueing up a table to be joined
 * against. In some cases, that may include dipping into the Schema API to
 * find the necessary fields on which to join.
 *
 * @param string $type
 *   The type of join. Typically one of INNER, LEFT OUTER, and RIGHT OUTER.
 * @param \\Drupal\\Core\\Database\\Query\\SelectInterface|string $table
 *   The table against which to join. May be a string or another SelectQuery
 *   object. If a query object is passed, it will be used as a subselect.
 *   Unless the table name starts with the database / schema name and a dot
 *   it will be prefixed.
 * @param string $alias
 *   The alias for the table. In most cases this should be the first letter of
 *   the table, or the first letter of each "word" in the table. If omitted,
 *   one will be dynamically generated.
 * @param string|null $condition
 *   The condition on which to join this table. If the join requires values,
 *   this clause should use a named placeholder and the value or values to
 *   insert should be passed in the 4th parameter. For the first table joined
 *   on a query, this value is ignored as the first table is taken as the base
 *   table. The token %alias can be used in this string to be replaced with
 *   the actual alias. This is useful when $alias is modified by the database
 *   system, for example, when joining the same table more than once.
 * @param array $arguments
 *   An array of arguments to replace into the $condition of this join.
 *
 * @return string
 *   The unique alias that was assigned for this table.
 */',
        'startLine' => 360,
        'endLine' => 360,
        'startColumn' => 3,
        'endColumn' => 92,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'orderBy' => 
      array (
        'name' => 'orderBy',
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
            'startLine' => 393,
            'endLine' => 393,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'direction' => 
          array (
            'name' => 'direction',
            'default' => 
            array (
              'code' => '\'ASC\'',
              'attributes' => 
              array (
                'startLine' => 393,
                'endLine' => 393,
                'startTokenPos' => 393,
                'startFilePos' => 15315,
                'endTokenPos' => 393,
                'endFilePos' => 15319,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 393,
            'endLine' => 393,
            'startColumn' => 35,
            'endColumn' => 52,
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
 * Orders the result set by a given field.
 *
 * If called multiple times, the query will order by each specified field in
 * the order this method is called.
 *
 * If the query uses DISTINCT or GROUP BY conditions, fields or expressions
 * that are used for the order must be selected to be compatible with some
 * databases like PostgreSQL. The PostgreSQL driver can handle simple cases
 * automatically but it is suggested to explicitly specify them. Additionally,
 * when ordering on an alias, the alias must be added before orderBy() is
 * called.
 *
 * @param string $field
 *   The field on which to order. The field is escaped for security so only
 *   valid field and alias names are possible. To order by an expression, add
 *   the expression with addExpression() first and then use the alias to order
 *   on.
 *
 *   Example:
 *   @code
 *   $query->addExpression(\'SUBSTRING([thread], 1, (LENGTH([thread]) - 1))\', \'order_field\');
 *   $query->orderBy(\'order_field\', \'ASC\');
 *   @endcode
 * @param string $direction
 *   The direction to sort. Legal values are "ASC" and "DESC". Any other value
 *   will be converted to "ASC".
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 393,
        'endLine' => 393,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'orderRandom' => 
      array (
        'name' => 'orderRandom',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Orders the result set by a random value.
 *
 * This may be stacked with other orderBy() calls. If so, the query will order
 * by each specified field, including this one, in the order called. Although
 * this method may be called multiple times on the same query, doing so
 * is not particularly useful.
 *
 * Note: The method used by most drivers may not scale to very large result
 * sets. If you need to work with extremely large data sets, you may create
 * your own database driver by subclassing off of an existing driver and
 * implementing your own randomization mechanism. See
 *
 * http://jan.kneschke.de/projects/mysql/order-by-rand/
 *
 * for an example of such an alternate sorting mechanism.
 *
 * @return $this
 *   The called object
 */',
        'startLine' => 415,
        'endLine' => 415,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'range' => 
      array (
        'name' => 'range',
        'parameters' => 
        array (
          'start' => 
          array (
            'name' => 'start',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 432,
                'endLine' => 432,
                'startTokenPos' => 420,
                'startFilePos' => 16661,
                'endTokenPos' => 420,
                'endFilePos' => 16664,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 25,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 432,
                'endLine' => 432,
                'startTokenPos' => 427,
                'startFilePos' => 16677,
                'endTokenPos' => 427,
                'endFilePos' => 16680,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 40,
            'endColumn' => 53,
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
 * Restricts a query to a given range in the result set.
 *
 * If this method is called with no parameters, will remove any range
 * directives that have been set.
 *
 * @param int|null $start
 *   The first record from the result set to return. If NULL, removes any
 *   range directives that are set.
 * @param int|null $length
 *   The number of records to return from the result set.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 432,
        'endLine' => 432,
        'startColumn' => 3,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'union' => 
      array (
        'name' => 'union',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 458,
            'endLine' => 458,
            'startColumn' => 25,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 458,
                'endLine' => 458,
                'startTokenPos' => 448,
                'startFilePos' => 17625,
                'endTokenPos' => 448,
                'endFilePos' => 17626,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 458,
            'endLine' => 458,
            'startColumn' => 49,
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
 * Add another Select query to UNION to this one.
 *
 * Union queries consist of two or more queries whose
 * results are effectively concatenated together. Queries
 * will be UNIONed in the order they are specified, with
 * this object\'s query coming first. Duplicate columns will
 * be discarded. All forms of UNION are supported, using
 * the second \'$type\' argument.
 *
 * Note: All queries UNIONed together must have the same
 * field structure, in the same order. It is up to the
 * caller to ensure that they match properly. If they do
 * not, an SQL syntax error will result.
 *
 * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $query
 *   The query to UNION to this query.
 * @param string $type
 *   The type of UNION to add to the query. Defaults to plain
 *   UNION.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 458,
        'endLine' => 458,
        'startColumn' => 3,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'groupBy' => 
      array (
        'name' => 'groupBy',
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
            'startLine' => 469,
            'endLine' => 469,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Groups the result set by the specified field.
 *
 * @param string $field
 *   The field on which to group. This should be the field as aliased.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 469,
        'endLine' => 469,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'countQuery' => 
      array (
        'name' => 'countQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the equivalent COUNT query of this query as a new query object.
 *
 * @return \\Drupal\\Core\\Database\\Query\\SelectInterface
 *   A new SelectQuery object with no fields or expressions besides COUNT(*).
 */',
        'startLine' => 477,
        'endLine' => 477,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'isPrepared' => 
      array (
        'name' => 'isPrepared',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates if preExecute() has already been called on that object.
 *
 * @return bool
 *   TRUE is this query has already been prepared, FALSE otherwise.
 */',
        'startLine' => 485,
        'endLine' => 485,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'preExecute' => 
      array (
        'name' => 'preExecute',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 493,
                'endLine' => 493,
                'startTokenPos' => 501,
                'startFilePos' => 18563,
                'endTokenPos' => 501,
                'endFilePos' => 18566,
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
                      'name' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 493,
            'endLine' => 493,
            'startColumn' => 30,
            'endColumn' => 59,
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
 * Generic preparation and validation for a SELECT query.
 *
 * @return bool
 *   TRUE if the validation was successful, FALSE if not.
 */',
        'startLine' => 493,
        'endLine' => 493,
        'startColumn' => 3,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
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
 * Runs the query against the database.
 *
 * @return \\Drupal\\Core\\Database\\StatementInterface|null
 *   A prepared statement, or NULL if the query is not valid.
 */',
        'startLine' => 501,
        'endLine' => 501,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'havingCondition' => 
      array (
        'name' => 'havingCondition',
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
            'startLine' => 525,
            'endLine' => 525,
            'startColumn' => 35,
            'endColumn' => 40,
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
                'startLine' => 525,
                'endLine' => 525,
                'startTokenPos' => 531,
                'startFilePos' => 19851,
                'endTokenPos' => 531,
                'endFilePos' => 19854,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 525,
            'endLine' => 525,
            'startColumn' => 43,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 525,
                'endLine' => 525,
                'startTokenPos' => 538,
                'startFilePos' => 19869,
                'endTokenPos' => 538,
                'endFilePos' => 19872,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 525,
            'endLine' => 525,
            'startColumn' => 58,
            'endColumn' => 73,
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
 * Helper function to build most common HAVING conditional clauses.
 *
 * This method can take a variable number of parameters. If called with two
 * parameters, they are taken as $field and $value with $operator having a
 * value of IN if $value is an array and = otherwise.
 *
 * @param string $field
 *   The name of the field to check. If you would like to add a more complex
 *   condition involving operators or functions, use having().
 * @param mixed|null $value
 *   The value to test the field against. In most cases, this is a scalar. For
 *   more complex options, it is an array. The meaning of each element in the
 *   array is dependent on the $operator.
 * @param string|null $operator
 *   The comparison operator, such as =, <, or >=. It also accepts more
 *   complex options such as IN, LIKE, or BETWEEN. Defaults to IN if $value is
 *   an array = otherwise.
 *
 * @return \\Drupal\\Core\\Database\\Query\\ConditionInterface
 *   The called object.
 */',
        'startLine' => 525,
        'endLine' => 525,
        'startColumn' => 3,
        'endColumn' => 75,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'havingConditions' => 
      array (
        'name' => 'havingConditions',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a list of all conditions in the HAVING clause.
 *
 * This method returns by reference. That allows alter hooks to access the
 * data structure directly and manipulate it before it gets compiled.
 *
 * @return array
 *   An array of conditions.
 *
 * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::conditions()
 */',
        'startLine' => 538,
        'endLine' => 538,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'havingArguments' => 
      array (
        'name' => 'havingArguments',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a list of all values to insert into the HAVING clause.
 *
 * @return array
 *   An associative array of placeholders and values.
 */',
        'startLine' => 546,
        'endLine' => 546,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'having' => 
      array (
        'name' => 'having',
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
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 26,
            'endColumn' => 33,
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
                'startLine' => 559,
                'endLine' => 559,
                'startTokenPos' => 580,
                'startFilePos' => 20826,
                'endTokenPos' => 581,
                'endFilePos' => 20827,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 36,
            'endColumn' => 45,
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
 * Adds an arbitrary HAVING clause to the query.
 *
 * @param string $snippet
 *   A portion of a HAVING clause as a prepared statement. It must use named
 *   placeholders, not ? placeholders.
 * @param array $args
 *   (optional) An associative array of arguments.
 *
 * @return $this
 */',
        'startLine' => 559,
        'endLine' => 559,
        'startColumn' => 3,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'havingCompile' => 
      array (
        'name' => 'havingCompile',
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
            'startLine' => 567,
            'endLine' => 567,
            'startColumn' => 33,
            'endColumn' => 54,
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
 * Compiles the HAVING clause for later retrieval.
 *
 * @param \\Drupal\\Core\\Database\\Connection $connection
 *   The database connection for which to compile the clause.
 */',
        'startLine' => 567,
        'endLine' => 567,
        'startColumn' => 3,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'havingIsNull' => 
      array (
        'name' => 'havingIsNull',
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
            'startLine' => 577,
            'endLine' => 577,
            'startColumn' => 32,
            'endColumn' => 37,
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
 * Sets a condition in the HAVING clause that the specified field be NULL.
 *
 * @param string $field
 *   The name of the field to check.
 *
 * @return $this
 */',
        'startLine' => 577,
        'endLine' => 577,
        'startColumn' => 3,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'havingIsNotNull' => 
      array (
        'name' => 'havingIsNotNull',
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
            'startLine' => 587,
            'endLine' => 587,
            'startColumn' => 35,
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
 * Sets a condition in the HAVING clause that the specified field be NOT NULL.
 *
 * @param string $field
 *   The name of the field to check.
 *
 * @return $this
 */',
        'startLine' => 587,
        'endLine' => 587,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'havingExists' => 
      array (
        'name' => 'havingExists',
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
            'startLine' => 597,
            'endLine' => 597,
            'startColumn' => 32,
            'endColumn' => 54,
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
 * Sets a HAVING condition that the specified subquery returns values.
 *
 * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $select
 *   The subquery that must contain results.
 *
 * @return $this
 */',
        'startLine' => 597,
        'endLine' => 597,
        'startColumn' => 3,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'havingNotExists' => 
      array (
        'name' => 'havingNotExists',
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
            'startLine' => 607,
            'endLine' => 607,
            'startColumn' => 35,
            'endColumn' => 57,
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
 * Sets a HAVING condition that the specified subquery returns no values.
 *
 * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $select
 *   The subquery that must contain results.
 *
 * @return $this
 */',
        'startLine' => 607,
        'endLine' => 607,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      '__clone' => 
      array (
        'name' => '__clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clone magic method.
 *
 * Select queries have dependent objects that must be deep-cloned.  The
 * connection object itself, however, should not be cloned as that would
 * duplicate the connection itself.
 */',
        'startLine' => 616,
        'endLine' => 616,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'aliasName' => NULL,
      ),
      'forUpdate' => 
      array (
        'name' => 'forUpdate',
        'parameters' => 
        array (
          'set' => 
          array (
            'name' => 'set',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 632,
                'endLine' => 632,
                'startTokenPos' => 674,
                'startFilePos' => 22962,
                'endTokenPos' => 674,
                'endFilePos' => 22965,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 632,
            'endLine' => 632,
            'startColumn' => 29,
            'endColumn' => 39,
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
 * Add FOR UPDATE to the query.
 *
 * FOR UPDATE prevents the rows retrieved by the SELECT statement from being
 * modified or deleted by other transactions until the current transaction
 * ends. Other transactions that attempt UPDATE, DELETE, or SELECT FOR UPDATE
 * of these rows will be blocked until the current transaction ends.
 *
 * @param bool|null $set
 *   IF TRUE, FOR UPDATE will be added to the query, if FALSE then it won\'t.
 *
 * @return \\Drupal\\Core\\Database\\Query\\ConditionInterface
 *   The called object.
 */',
        'startLine' => 632,
        'endLine' => 632,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
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
 * Returns a string representation of how the query will be executed in SQL.
 *
 * @return string
 *   The Select Query object expressed as a string.
 */',
        'startLine' => 640,
        'endLine' => 640,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
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