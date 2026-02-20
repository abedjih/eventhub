<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/Truncate.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Query\Truncate
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-00ec2c63fb8fc9997a9f3161d3ce3e9f44580f35c0527cbfeb21fda0ca8896e7-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Query\\Truncate',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/Truncate.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database\\Query',
    'name' => 'Drupal\\Core\\Database\\Query\\Truncate',
    'shortName' => 'Truncate',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * General class for an abstracted TRUNCATE operation.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 85,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
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
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Truncate',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Truncate',
        'name' => 'table',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The table to truncate.
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
            'startLine' => 29,
            'endLine' => 29,
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
            'startLine' => 29,
            'endLine' => 29,
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
                'startLine' => 29,
                'endLine' => 29,
                'startTokenPos' => 53,
                'startFilePos' => 626,
                'endTokenPos' => 54,
                'endFilePos' => 627,
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
            'startLine' => 29,
            'endLine' => 29,
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
 * Constructs a Truncate query object.
 *
 * @param \\Drupal\\Core\\Database\\Connection $connection
 *   A Connection object.
 * @param string $table
 *   Name of the table to associate with this query.
 * @param array $options
 *   Array of database options.
 */',
        'startLine' => 29,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Truncate',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Truncate',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Truncate',
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
 * Executes the TRUNCATE query.
 *
 * In most cases, TRUNCATE is not a transaction safe statement as it is a DDL
 * statement which results in an implicit COMMIT. When we are in a
 * transaction, fallback to the slower, but transactional, DELETE.
 * PostgreSQL also locks the entire table for a TRUNCATE strongly reducing
 * the concurrency with other transactions.
 *
 * @return int|null
 *   Return value is dependent on whether the executed SQL statement is a
 *   TRUNCATE or a DELETE. TRUNCATE is DDL and no information on affected
 *   rows is available. DELETE is DML and will return the number of affected
 *   rows. In general, do not rely on the value returned by this method in
 *   calling code.
 *
 * @see https://learnsql.com/blog/difference-between-truncate-delete-and-drop-table-in-sql
 */',
        'startLine' => 52,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Truncate',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Truncate',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Truncate',
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
        'startLine' => 71,
        'endLine' => 83,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Truncate',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Truncate',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Truncate',
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