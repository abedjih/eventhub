<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/Select.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Query\Select
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-d4ea9c0a9885af9788ce5281c1844511fd4fa576c359e8d44fb3005e0108bca0-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Query\\Select',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/Select.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database\\Query',
    'name' => 'Drupal\\Core\\Database\\Query\\Select',
    'shortName' => 'Select',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Query builder for SELECT statements.
 *
 * @ingroup database
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 949,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Database\\Query\\SelectInterface',
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
      'fields' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'fields',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 21,
            'endLine' => 21,
            'startTokenPos' => 41,
            'startFilePos' => 323,
            'endTokenPos' => 42,
            'endFilePos' => 324,
          ),
        ),
        'docComment' => '/**
 * The fields to SELECT.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'expressions' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'expressions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 53,
            'startFilePos' => 438,
            'endTokenPos' => 54,
            'endFilePos' => 439,
          ),
        ),
        'docComment' => '/**
 * The expressions to SELECT as virtual fields.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tables' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'tables',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 54,
            'endLine' => 54,
            'startTokenPos' => 65,
            'startFilePos' => 1386,
            'endTokenPos' => 66,
            'endFilePos' => 1387,
          ),
        ),
        'docComment' => '/**
 * The tables against which to JOIN.
 *
 * @var array
 * This property is a nested array. Each entry is an array representing
 * a single table against which to join. The structure of each entry is:
 *
 * @code
 * [
 *   \'type\' => $join_type (one of INNER, LEFT OUTER, RIGHT OUTER),
 *   \'table\' => $table,
 *   \'alias\' => $alias_of_the_table,
 *   \'condition\' => $join_condition (string or Condition object),
 *   \'arguments\' => $array_of_arguments_for_placeholders_in_the condition.
 *   \'all_fields\' => TRUE to SELECT $alias.*, FALSE or NULL otherwise.
 * ]
 * @endcode
 * If $table is a string, it is taken as the name of a table. If it is
 * a Select query object, it is taken as a subquery.
 *
 * If $join_condition is a Condition object, any arguments should be
 * incorporated into the object; a separate array of arguments does not
 * need to be provided.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'order' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'order',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 77,
            'startFilePos' => 1631,
            'endTokenPos' => 78,
            'endFilePos' => 1632,
          ),
        ),
        'docComment' => '/**
 * The fields by which to order this query.
 *
 * This is an associative array. The keys are the fields to order, and the
 * value is the direction to order, either ASC or DESC.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'group' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'group',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 71,
            'endLine' => 71,
            'startTokenPos' => 89,
            'startFilePos' => 1725,
            'endTokenPos' => 90,
            'endFilePos' => 1726,
          ),
        ),
        'docComment' => '/**
 * The fields by which to group.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'having' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'having',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The conditional object for the HAVING clause.
 *
 * @var \\Drupal\\Core\\Database\\Query\\Condition
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 3,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'distinct' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'distinct',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 85,
            'endLine' => 85,
            'startTokenPos' => 108,
            'startFilePos' => 1975,
            'endTokenPos' => 108,
            'endFilePos' => 1979,
          ),
        ),
        'docComment' => '/**
 * Whether or not this query should be DISTINCT.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'range' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'range',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The range limiters for this query.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 3,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'union' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'union',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 106,
            'endLine' => 106,
            'startTokenPos' => 126,
            'startFilePos' => 2547,
            'endTokenPos' => 127,
            'endFilePos' => 2548,
          ),
        ),
        'docComment' => '/**
 * An array whose elements specify a query to UNION, and the UNION type.
 *
 * The \'type\' key may be \'\', \'ALL\', or \'DISTINCT\' to represent a \'UNION\',
 * \'UNION ALL\', or \'UNION DISTINCT\' statement, respectively.
 *
 * All entries in this array will be applied from front to back, with the
 * first query to union on the right of the original query, the second union
 * to the right of the first, etc.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'prepared' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'prepared',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 113,
            'endLine' => 113,
            'startTokenPos' => 138,
            'startFilePos' => 2664,
            'endTokenPos' => 138,
            'endFilePos' => 2668,
          ),
        ),
        'docComment' => '/**
 * Indicates if preExecute() has already been called.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 113,
        'endLine' => 113,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'forUpdate' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'forUpdate',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 120,
            'endLine' => 120,
            'startTokenPos' => 149,
            'startFilePos' => 2757,
            'endTokenPos' => 149,
            'endFilePos' => 2761,
          ),
        ),
        'docComment' => '/**
 * The FOR UPDATE status.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 120,
        'endLine' => 120,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'alterMetaData' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'alterMetaData',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The query metadata for alter purposes.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'alterTags' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'name' => 'alterTags',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The query tags.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 130,
        'endLine' => 130,
        'startColumn' => 3,
        'endColumn' => 26,
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
            'startLine' => 144,
            'endLine' => 144,
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
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 55,
            'endColumn' => 60,
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
                'startLine' => 144,
                'endLine' => 144,
                'startTokenPos' => 190,
                'startFilePos' => 3370,
                'endTokenPos' => 190,
                'endFilePos' => 3373,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 63,
            'endColumn' => 75,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 144,
                'endLine' => 144,
                'startTokenPos' => 197,
                'startFilePos' => 3387,
                'endTokenPos' => 198,
                'endFilePos' => 3388,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 78,
            'endColumn' => 90,
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
 * Constructs a Select object.
 *
 * @param \\Drupal\\Core\\Database\\Connection $connection
 *   Database connection object.
 * @param string|\\Drupal\\Core\\Database\\Query\\SelectInterface $table
 *   The table name or subquery that is being queried.
 * @param string $alias
 *   The alias for the table.
 * @param array $options
 *   Array of query options.
 */',
        'startLine' => 144,
        'endLine' => 150,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'aliasName' => NULL,
      ),
      'addTag' => 
      array (
        'name' => 'addTag',
        'parameters' => 
        array (
          'tag' => 
          array (
            'name' => 'tag',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 155,
            'endLine' => 155,
            'startColumn' => 26,
            'endColumn' => 29,
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
 * {@inheritdoc}
 */',
        'startLine' => 155,
        'endLine' => 158,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'aliasName' => NULL,
      ),
      'hasTag' => 
      array (
        'name' => 'hasTag',
        'parameters' => 
        array (
          'tag' => 
          array (
            'name' => 'tag',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 163,
            'endLine' => 163,
            'startColumn' => 26,
            'endColumn' => 29,
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
 * {@inheritdoc}
 */',
        'startLine' => 163,
        'endLine' => 165,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'aliasName' => NULL,
      ),
      'hasAllTags' => 
      array (
        'name' => 'hasAllTags',
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
        'startLine' => 170,
        'endLine' => 172,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'aliasName' => NULL,
      ),
      'hasAnyTag' => 
      array (
        'name' => 'hasAnyTag',
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
        'startLine' => 177,
        'endLine' => 179,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'aliasName' => NULL,
      ),
      'addMetaData' => 
      array (
        'name' => 'addMetaData',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 184,
            'endLine' => 184,
            'startColumn' => 31,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'object' => 
          array (
            'name' => 'object',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 184,
            'endLine' => 184,
            'startColumn' => 37,
            'endColumn' => 43,
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
 * {@inheritdoc}
 */',
        'startLine' => 184,
        'endLine' => 187,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'aliasName' => NULL,
      ),
      'getMetaData' => 
      array (
        'name' => 'getMetaData',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 31,
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
 * {@inheritdoc}
 */',
        'startLine' => 192,
        'endLine' => 194,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
        'startLine' => 199,
        'endLine' => 233,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 238,
            'endLine' => 238,
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
            'startLine' => 238,
            'endLine' => 238,
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
 * {@inheritdoc}
 */',
        'startLine' => 238,
        'endLine' => 257,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 262,
        'endLine' => 288,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 293,
            'endLine' => 293,
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
                'startLine' => 293,
                'endLine' => 293,
                'startTokenPos' => 1108,
                'startFilePos' => 7277,
                'endTokenPos' => 1108,
                'endFilePos' => 7280,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 293,
            'endLine' => 293,
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
                'startLine' => 293,
                'endLine' => 293,
                'startTokenPos' => 1115,
                'startFilePos' => 7295,
                'endTokenPos' => 1115,
                'endFilePos' => 7298,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 293,
            'endLine' => 293,
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
 * {@inheritdoc}
 */',
        'startLine' => 293,
        'endLine' => 296,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 301,
        'endLine' => 303,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 308,
        'endLine' => 310,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 315,
            'endLine' => 315,
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
                'startLine' => 315,
                'endLine' => 315,
                'startTokenPos' => 1209,
                'startFilePos' => 7686,
                'endTokenPos' => 1210,
                'endFilePos' => 7687,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 315,
            'endLine' => 315,
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
 * {@inheritdoc}
 */',
        'startLine' => 315,
        'endLine' => 318,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 323,
            'endLine' => 323,
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
 * {@inheritdoc}
 */',
        'startLine' => 323,
        'endLine' => 325,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'aliasName' => NULL,
      ),
      'extend' => 
      array (
        'name' => 'extend',
        'parameters' => 
        array (
          'extender_name' => 
          array (
            'name' => 'extender_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 330,
            'endLine' => 330,
            'startColumn' => 26,
            'endColumn' => 39,
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
 * {@inheritdoc}
 */',
        'startLine' => 330,
        'endLine' => 338,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 343,
            'endLine' => 343,
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
 * {@inheritdoc}
 */',
        'startLine' => 343,
        'endLine' => 346,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 351,
            'endLine' => 351,
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
 * {@inheritdoc}
 */',
        'startLine' => 351,
        'endLine' => 354,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 359,
            'endLine' => 359,
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
 * {@inheritdoc}
 */',
        'startLine' => 359,
        'endLine' => 362,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 367,
            'endLine' => 367,
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
 * {@inheritdoc}
 */',
        'startLine' => 367,
        'endLine' => 370,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
                'startLine' => 375,
                'endLine' => 375,
                'startTokenPos' => 1497,
                'startFilePos' => 8903,
                'endTokenPos' => 1497,
                'endFilePos' => 8906,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 375,
            'endLine' => 375,
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
 * {@inheritdoc}
 */',
        'startLine' => 375,
        'endLine' => 380,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'aliasName' => NULL,
      ),
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
 * {@inheritdoc}
 */',
        'startLine' => 385,
        'endLine' => 387,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 392,
        'endLine' => 394,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 399,
        'endLine' => 401,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 406,
        'endLine' => 408,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 413,
        'endLine' => 415,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 420,
        'endLine' => 422,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 427,
            'endLine' => 427,
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
 * {@inheritdoc}
 */',
        'startLine' => 427,
        'endLine' => 429,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 434,
            'endLine' => 434,
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
 * {@inheritdoc}
 */',
        'startLine' => 434,
        'endLine' => 436,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
                'startLine' => 441,
                'endLine' => 441,
                'startTokenPos' => 1732,
                'startFilePos' => 9932,
                'endTokenPos' => 1732,
                'endFilePos' => 9935,
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
            'startLine' => 441,
            'endLine' => 441,
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
 * {@inheritdoc}
 */',
        'startLine' => 441,
        'endLine' => 447,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 452,
        'endLine' => 454,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
                'startLine' => 459,
                'endLine' => 459,
                'startTokenPos' => 1818,
                'startFilePos' => 10293,
                'endTokenPos' => 1818,
                'endFilePos' => 10296,
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
            'startLine' => 459,
            'endLine' => 459,
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
 * {@inheritdoc}
 */',
        'startLine' => 459,
        'endLine' => 508,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 513,
        'endLine' => 522,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
                'startLine' => 527,
                'endLine' => 527,
                'startTokenPos' => 2182,
                'startFilePos' => 12484,
                'endTokenPos' => 2182,
                'endFilePos' => 12487,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 527,
            'endLine' => 527,
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
 * {@inheritdoc}
 */',
        'startLine' => 527,
        'endLine' => 530,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 535,
            'endLine' => 535,
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
            'startLine' => 535,
            'endLine' => 535,
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
                'startLine' => 535,
                'endLine' => 535,
                'startTokenPos' => 2221,
                'startFilePos' => 12637,
                'endTokenPos' => 2221,
                'endFilePos' => 12640,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 535,
            'endLine' => 535,
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
 * {@inheritdoc}
 */',
        'startLine' => 535,
        'endLine' => 562,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 567,
            'endLine' => 567,
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
                'startLine' => 567,
                'endLine' => 567,
                'startTokenPos' => 2403,
                'startFilePos' => 13433,
                'endTokenPos' => 2404,
                'endFilePos' => 13434,
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
            'startLine' => 567,
            'endLine' => 567,
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
 * {@inheritdoc}
 */',
        'startLine' => 567,
        'endLine' => 580,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 585,
            'endLine' => 585,
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
                'startLine' => 585,
                'endLine' => 585,
                'startTokenPos' => 2491,
                'startFilePos' => 13832,
                'endTokenPos' => 2491,
                'endFilePos' => 13835,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 585,
            'endLine' => 585,
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
                'startLine' => 585,
                'endLine' => 585,
                'startTokenPos' => 2498,
                'startFilePos' => 13851,
                'endTokenPos' => 2499,
                'endFilePos' => 13852,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 585,
            'endLine' => 585,
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
 * {@inheritdoc}
 */',
        'startLine' => 585,
        'endLine' => 604,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 609,
            'endLine' => 609,
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
                'startLine' => 609,
                'endLine' => 609,
                'startTokenPos' => 2637,
                'startFilePos' => 14343,
                'endTokenPos' => 2637,
                'endFilePos' => 14346,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 609,
            'endLine' => 609,
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
                'startLine' => 609,
                'endLine' => 609,
                'startTokenPos' => 2644,
                'startFilePos' => 14362,
                'endTokenPos' => 2644,
                'endFilePos' => 14365,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 609,
            'endLine' => 609,
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
                'startLine' => 609,
                'endLine' => 609,
                'startTokenPos' => 2651,
                'startFilePos' => 14381,
                'endTokenPos' => 2652,
                'endFilePos' => 14382,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 609,
            'endLine' => 609,
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
 * {@inheritdoc}
 */',
        'startLine' => 609,
        'endLine' => 611,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 616,
            'endLine' => 616,
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
                'startLine' => 616,
                'endLine' => 616,
                'startTokenPos' => 2696,
                'startFilePos' => 14544,
                'endTokenPos' => 2696,
                'endFilePos' => 14547,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 616,
            'endLine' => 616,
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
                'startLine' => 616,
                'endLine' => 616,
                'startTokenPos' => 2703,
                'startFilePos' => 14563,
                'endTokenPos' => 2703,
                'endFilePos' => 14566,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 616,
            'endLine' => 616,
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
                'startLine' => 616,
                'endLine' => 616,
                'startTokenPos' => 2710,
                'startFilePos' => 14582,
                'endTokenPos' => 2711,
                'endFilePos' => 14583,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 616,
            'endLine' => 616,
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
 * {@inheritdoc}
 */',
        'startLine' => 616,
        'endLine' => 618,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 623,
            'endLine' => 623,
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
                'startLine' => 623,
                'endLine' => 623,
                'startTokenPos' => 2755,
                'startFilePos' => 14744,
                'endTokenPos' => 2755,
                'endFilePos' => 14747,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 623,
            'endLine' => 623,
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
                'startLine' => 623,
                'endLine' => 623,
                'startTokenPos' => 2762,
                'startFilePos' => 14763,
                'endTokenPos' => 2762,
                'endFilePos' => 14766,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 623,
            'endLine' => 623,
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
                'startLine' => 623,
                'endLine' => 623,
                'startTokenPos' => 2769,
                'startFilePos' => 14782,
                'endTokenPos' => 2770,
                'endFilePos' => 14783,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 623,
            'endLine' => 623,
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
 * {@inheritdoc}
 */',
        'startLine' => 623,
        'endLine' => 625,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 630,
            'endLine' => 630,
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
            'startLine' => 630,
            'endLine' => 630,
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
                'startLine' => 630,
                'endLine' => 630,
                'startTokenPos' => 2817,
                'startFilePos' => 14955,
                'endTokenPos' => 2817,
                'endFilePos' => 14958,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 630,
            'endLine' => 630,
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
                'startLine' => 630,
                'endLine' => 630,
                'startTokenPos' => 2824,
                'startFilePos' => 14974,
                'endTokenPos' => 2824,
                'endFilePos' => 14977,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 630,
            'endLine' => 630,
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
                'startLine' => 630,
                'endLine' => 630,
                'startTokenPos' => 2831,
                'startFilePos' => 14993,
                'endTokenPos' => 2832,
                'endFilePos' => 14994,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 630,
            'endLine' => 630,
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
 * {@inheritdoc}
 */',
        'startLine' => 630,
        'endLine' => 660,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 665,
            'endLine' => 665,
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
                'startLine' => 665,
                'endLine' => 665,
                'startTokenPos' => 3040,
                'startFilePos' => 15736,
                'endTokenPos' => 3040,
                'endFilePos' => 15740,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 665,
            'endLine' => 665,
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
 * {@inheritdoc}
 */',
        'startLine' => 665,
        'endLine' => 670,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 675,
        'endLine' => 679,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
                'startLine' => 684,
                'endLine' => 684,
                'startTokenPos' => 3142,
                'startFilePos' => 16164,
                'endTokenPos' => 3142,
                'endFilePos' => 16167,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 684,
            'endLine' => 684,
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
                'startLine' => 684,
                'endLine' => 684,
                'startTokenPos' => 3149,
                'startFilePos' => 16180,
                'endTokenPos' => 3149,
                'endFilePos' => 16183,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 684,
            'endLine' => 684,
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
 * {@inheritdoc}
 */',
        'startLine' => 684,
        'endLine' => 687,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 692,
            'endLine' => 692,
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
                'startLine' => 692,
                'endLine' => 692,
                'startTokenPos' => 3213,
                'startFilePos' => 16382,
                'endTokenPos' => 3213,
                'endFilePos' => 16383,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 692,
            'endLine' => 692,
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
 * {@inheritdoc}
 */',
        'startLine' => 692,
        'endLine' => 712,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
            'startLine' => 717,
            'endLine' => 717,
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
 * {@inheritdoc}
 */',
        'startLine' => 717,
        'endLine' => 720,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 725,
        'endLine' => 732,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'aliasName' => NULL,
      ),
      'prepareCountQuery' => 
      array (
        'name' => 'prepareCountQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepares a count query from the current query object.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Select
 *   A new query object ready to have COUNT(*) performed on it.
 */',
        'startLine' => 740,
        'endLine' => 796,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 801,
        'endLine' => 925,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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
 * {@inheritdoc}
 */',
        'startLine' => 930,
        'endLine' => 947,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Select',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Select',
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