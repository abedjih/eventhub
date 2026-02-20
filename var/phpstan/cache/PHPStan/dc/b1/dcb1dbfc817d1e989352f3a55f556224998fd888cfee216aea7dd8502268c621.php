<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/Insert.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Query\Insert
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f08fe0ea211718a4c2218cdf460cc26cfab19c65f849a450c17958f1ed0f433c-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Query\\Insert',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/Insert.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database\\Query',
    'name' => 'Drupal\\Core\\Database\\Query\\Insert',
    'shortName' => 'Insert',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * General class for an abstracted INSERT query.
 *
 * @ingroup database
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 172,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Database\\Query\\Query',
    'implementsClassNames' => 
    array (
      0 => 'Countable',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Database\\Query\\InsertTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'fromQuery' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'name' => 'fromQuery',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * A SelectQuery object to fetch the rows that should be inserted.
 *
 * @var \\Drupal\\Core\\Database\\Query\\SelectInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 3,
        'endColumn' => 23,
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
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 31,
            'endColumn' => 41,
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
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 44,
            'endColumn' => 49,
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
                'startLine' => 31,
                'endLine' => 31,
                'startTokenPos' => 55,
                'startFilePos' => 710,
                'endTokenPos' => 56,
                'endFilePos' => 711,
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
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 52,
            'endColumn' => 70,
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
 * Constructs an Insert object.
 *
 * @param \\Drupal\\Core\\Database\\Connection $connection
 *   A Connection object.
 * @param string $table
 *   Name of the table to associate with this query.
 * @param array $options
 *   Array of database options.
 */',
        'startLine' => 31,
        'endLine' => 34,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'aliasName' => NULL,
      ),
      'from' => 
      array (
        'name' => 'from',
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
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 24,
            'endColumn' => 45,
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
 * Sets the fromQuery on this InsertQuery object.
 *
 * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $query
 *   The query to fetch the rows that should be inserted.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 45,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
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
 * Executes the insert query.
 *
 * @return int|null|string
 *   The last insert ID of the query, if one exists. If the query was given
 *   multiple sets of values to insert, the return value is undefined. If no
 *   fields are specified, this method will do nothing and return NULL. That
 *   That makes it safe to use in multi-insert loops.
 */',
        'startLine' => 59,
        'endLine' => 103,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
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
        'startLine' => 111,
        'endLine' => 130,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'aliasName' => NULL,
      ),
      'preExecute' => 
      array (
        'name' => 'preExecute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Preprocesses and validates the query.
 *
 * @return bool
 *   TRUE if the validation was successful, FALSE if not.
 *
 * @throws \\Drupal\\Core\\Database\\Query\\FieldsOverlapException
 * @throws \\Drupal\\Core\\Database\\Query\\NoFieldsException
 */',
        'startLine' => 141,
        'endLine' => 170,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\Insert',
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