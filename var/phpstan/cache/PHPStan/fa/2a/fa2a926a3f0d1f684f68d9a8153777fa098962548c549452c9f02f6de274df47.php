<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/Query.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Query\Query
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-d4efea4e10fbe8b044081a37ad8be0664fec7cb2d0fd91655e49de27df00079b-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Query\\Query',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/Query.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database\\Query',
    'name' => 'Drupal\\Core\\Database\\Query\\Query',
    'shortName' => 'Query',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for query builders.
 *
 * Note that query builders use PHP\'s magic __toString() method to compile the
 * query object into a prepared statement.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 196,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Database\\Query\\PlaceholderInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'connection' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'name' => 'connection',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The connection object on which to run this query.
 *
 * @var \\Drupal\\Core\\Database\\Connection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'connectionTarget' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'name' => 'connectionTarget',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The target of the connection object.
 *
 * @var string
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
      'connectionKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'name' => 'connectionKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The key of the connection object.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queryOptions' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'name' => 'queryOptions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The query options to pass on to the connection object.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'uniqueIdentifier' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'name' => 'uniqueIdentifier',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * A unique identifier for this query object.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'nextPlaceholder' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'name' => 'nextPlaceholder',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 56,
            'endLine' => 56,
            'startTokenPos' => 74,
            'startFilePos' => 1020,
            'endTokenPos' => 74,
            'endFilePos' => 1020,
          ),
        ),
        'docComment' => '/**
 * The placeholder counter.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 3,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'comments' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'name' => 'comments',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 63,
            'endLine' => 63,
            'startTokenPos' => 85,
            'startFilePos' => 1141,
            'endTokenPos' => 86,
            'endFilePos' => 1142,
          ),
        ),
        'docComment' => '/**
 * An array of comments that can be prepended to a query.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 27,
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
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 31,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
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
            'startColumn' => 55,
            'endColumn' => 62,
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
 * Constructs a Query object.
 *
 * @param \\Drupal\\Core\\Database\\Connection $connection
 *   Database connection object.
 * @param array $options
 *   Array of query options.
 */',
        'startLine' => 73,
        'endLine' => 81,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'aliasName' => NULL,
      ),
      '__sleep' => 
      array (
        'name' => '__sleep',
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
 * Implements the magic __sleep function to disconnect from the database.
 */',
        'startLine' => 86,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'aliasName' => NULL,
      ),
      '__wakeup' => 
      array (
        'name' => '__wakeup',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Implements the magic __wakeup function to reconnect to the database.
 */',
        'startLine' => 95,
        'endLine' => 97,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
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
 * Implements the magic __clone function.
 */',
        'startLine' => 102,
        'endLine' => 104,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
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
        'startLine' => 112,
        'endLine' => 112,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
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
 * The toString operation is how we compile a query object to a prepared
 * statement.
 *
 * @return string
 *   A prepared statement query string for this object.
 *
 * @throws \\BadMethodCallException
 *   Thrown when the operation is a Merge or the operation is not implemented,
 *   as in test.
 */',
        'startLine' => 127,
        'endLine' => 127,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'aliasName' => NULL,
      ),
      'uniqueIdentifier' => 
      array (
        'name' => 'uniqueIdentifier',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a unique identifier for this object.
 */',
        'startLine' => 132,
        'endLine' => 134,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'aliasName' => NULL,
      ),
      'nextPlaceholder' => 
      array (
        'name' => 'nextPlaceholder',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the next placeholder value for this query object.
 *
 * @return int
 *   The next placeholder value.
 */',
        'startLine' => 142,
        'endLine' => 144,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'aliasName' => NULL,
      ),
      'comment' => 
      array (
        'name' => 'comment',
        'parameters' => 
        array (
          'comment' => 
          array (
            'name' => 'comment',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 162,
            'endLine' => 162,
            'startColumn' => 27,
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
 * Adds a comment to the query.
 *
 * By adding a comment to a query, you can more easily find it in your
 * query log or the list of active queries on an SQL server. This allows
 * for easier debugging and allows you to more easily find where a query
 * with a performance problem is being generated.
 *
 * The comment string will be sanitized to remove * / and other characters
 * that may terminate the string early so as to avoid SQL injection attacks.
 *
 * @param string $comment
 *   The comment string to be inserted into the query.
 *
 * @return $this
 */',
        'startLine' => 162,
        'endLine' => 165,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'aliasName' => NULL,
      ),
      'getComments' => 
      array (
        'name' => 'getComments',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a reference to the comments array for the query.
 *
 * Because this method returns by reference, alter hooks may edit the comments
 * array directly to make their changes. If just adding comments, however, the
 * use of comment() is preferred.
 *
 * Note that this method must be called by reference as well:
 * @code
 * $comments =& $query->getComments();
 * @endcode
 *
 * @return array
 *   A reference to the comments array structure.
 */',
        'startLine' => 182,
        'endLine' => 184,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'aliasName' => NULL,
      ),
      'getConnection' => 
      array (
        'name' => 'getConnection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the database connection to be used for the query.
 *
 * @return \\Drupal\\Core\\Database\\Connection
 *   The database connection to be used for the query.
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
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Query',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
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