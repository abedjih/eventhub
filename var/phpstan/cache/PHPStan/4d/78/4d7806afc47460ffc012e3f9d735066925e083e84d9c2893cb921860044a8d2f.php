<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Connection.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Connection
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6b525f5d731e798580cd726cb37b9eed8c9ffd24bb31f16a9f5955595d9fa431-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Connection',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Connection.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database',
    'name' => 'Drupal\\Core\\Database\\Connection',
    'shortName' => 'Connection',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base Database API class.
 *
 * This class provides a Drupal extension for a client database connection.
 * Every database driver implementation must provide a concrete implementation
 * of it to support special handling required by that database.
 * The most common database abstraction layer in PHP is PDO.
 *
 * @see http://php.net/manual/book.pdo.php
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 29,
    'endLine' => 1631,
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
      'target' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'target',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'NULL',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 38,
            'startTokenPos' => 90,
            'startFilePos' => 1183,
            'endTokenPos' => 90,
            'endFilePos' => 1186,
          ),
        ),
        'docComment' => '/**
 * The database target this connection is for.
 *
 * We need this information for later auditing and logging.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'key' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'key',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'NULL',
          'attributes' => 
          array (
            'startLine' => 49,
            'endLine' => 49,
            'startTokenPos' => 101,
            'startFilePos' => 1501,
            'endTokenPos' => 101,
            'endFilePos' => 1504,
          ),
        ),
        'docComment' => '/**
 * The key representing this connection.
 *
 * The key is a unique string which identifies a database connection. A
 * connection can be a single server or a cluster of primary and replicas
 * (use target to pick between primary and replica).
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'logger' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'logger',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'NULL',
          'attributes' => 
          array (
            'startLine' => 56,
            'endLine' => 56,
            'startTokenPos' => 112,
            'startFilePos' => 1650,
            'endTokenPos' => 112,
            'endFilePos' => 1653,
          ),
        ),
        'docComment' => '/**
 * The current database logging object for this connection.
 *
 * @var \\Drupal\\Core\\Database\\Log|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'driverClasses' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'driverClasses',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 63,
            'endLine' => 63,
            'startTokenPos' => 123,
            'startFilePos' => 1791,
            'endTokenPos' => 124,
            'endFilePos' => 1792,
          ),
        ),
        'docComment' => '/**
 * Index of what driver-specific class to use for various operations.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'statementWrapperClass' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'statementWrapperClass',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'NULL',
          'attributes' => 
          array (
            'startLine' => 70,
            'endLine' => 70,
            'startTokenPos' => 135,
            'startFilePos' => 1937,
            'endTokenPos' => 135,
            'endFilePos' => 1940,
          ),
        ),
        'docComment' => '/**
 * The name of the StatementWrapper class for this connection.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 3,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transactionalDDLSupport' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'transactionalDDLSupport',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 79,
            'startTokenPos' => 146,
            'startFilePos' => 2159,
            'endTokenPos' => 146,
            'endFilePos' => 2163,
          ),
        ),
        'docComment' => '/**
 * Whether this database connection supports transactional DDL.
 *
 * Set to FALSE by default because few databases support this feature.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 3,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'connection' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'connection',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The actual client connection.
 *
 * @var object
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'connectionOptions' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'connectionOptions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 93,
            'endLine' => 93,
            'startTokenPos' => 164,
            'startFilePos' => 2388,
            'endTokenPos' => 165,
            'endFilePos' => 2389,
          ),
        ),
        'docComment' => '/**
 * The connection information for this connection object.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 93,
        'endLine' => 93,
        'startColumn' => 3,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'schema' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'schema',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'NULL',
          'attributes' => 
          array (
            'startLine' => 102,
            'endLine' => 102,
            'startTokenPos' => 176,
            'startFilePos' => 2572,
            'endTokenPos' => 176,
            'endFilePos' => 2575,
          ),
        ),
        'docComment' => '/**
 * The schema object for this connection.
 *
 * Set to NULL when the schema is destroyed.
 *
 * @var \\Drupal\\Core\\Database\\Schema|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 102,
        'endLine' => 102,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'prefix' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'prefix',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The prefix used by this database connection.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 109,
        'endLine' => 109,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tablePlaceholderReplacements' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'tablePlaceholderReplacements',
        'modifiers' => 2,
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
 * Replacements to fully qualify {table} placeholders in SQL strings.
 *
 * An array of two strings, the first being the replacement for opening curly
 * brace \'{\', the second for closing curly brace \'}\'.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 119,
        'endLine' => 119,
        'startColumn' => 3,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'escapedTables' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'escapedTables',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 126,
            'endLine' => 126,
            'startTokenPos' => 205,
            'startFilePos' => 3113,
            'endTokenPos' => 206,
            'endFilePos' => 3114,
          ),
        ),
        'docComment' => '/**
 * List of escaped table names, keyed by unescaped names.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 126,
        'endLine' => 126,
        'startColumn' => 3,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'escapedFields' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'escapedFields',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '["" => ""]',
          'attributes' => 
          array (
            'startLine' => 136,
            'endLine' => 136,
            'startTokenPos' => 217,
            'startFilePos' => 3378,
            'endTokenPos' => 223,
            'endFilePos' => 3387,
          ),
        ),
        'docComment' => '/**
 * List of escaped field names, keyed by unescaped names.
 *
 * There are cases in which escapeField() is called on an empty string. In
 * this case it should always return an empty string.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 3,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'escapedAliases' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'escapedAliases',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 143,
            'endLine' => 143,
            'startTokenPos' => 234,
            'startFilePos' => 3518,
            'endTokenPos' => 235,
            'endFilePos' => 3519,
          ),
        ),
        'docComment' => '/**
 * List of escaped aliases names, keyed by unescaped aliases.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 143,
        'endLine' => 143,
        'startColumn' => 3,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'identifierQuotes' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'identifierQuotes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The identifier quote characters for the database type.
 *
 * An array containing the start and end identifier quote characters for the
 * database type. The ANSI SQL standard identifier quote character is a double
 * quotation mark.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 154,
        'endLine' => 154,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'enabledEvents' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'enabledEvents',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 162,
            'endLine' => 162,
            'startTokenPos' => 255,
            'startFilePos' => 4062,
            'endTokenPos' => 256,
            'endFilePos' => 4063,
          ),
        ),
        'docComment' => '/**
 * Tracks the database API events to be dispatched.
 *
 * For performance reasons, database API events are not yielded by default.
 * Call ::enableEvents() to enable them.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 162,
        'endLine' => 162,
        'startColumn' => 3,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transactionManager' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'name' => 'transactionManager',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Database\\Transaction\\TransactionManagerInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The transaction manager.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 167,
        'endLine' => 167,
        'startColumn' => 3,
        'endColumn' => 60,
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
                'name' => 'object',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 31,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'connection_options' => 
          array (
            'name' => 'connection_options',
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
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 51,
            'endColumn' => 75,
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
 * Constructs a Connection object.
 *
 * @param object $connection
 *   An object of the client class representing a database connection.
 * @param array $connection_options
 *   An array of options for the connection. May include the following:
 *   - prefix
 *   - namespace
 *   - Other driver-specific options.
 */',
        'startLine' => 180,
        'endLine' => 196,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'open' => 
      array (
        'name' => 'open',
        'parameters' => 
        array (
          'connection_options' => 
          array (
            'name' => 'connection_options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 207,
                'endLine' => 207,
                'startTokenPos' => 429,
                'startFilePos' => 5648,
                'endTokenPos' => 430,
                'endFilePos' => 5649,
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 207,
            'endLine' => 207,
            'startColumn' => 40,
            'endColumn' => 70,
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
 * Opens a client connection.
 *
 * @param array $connection_options
 *   The database connection settings array.
 *
 * @return object
 *   A client connection object.
 */',
        'startLine' => 207,
        'endLine' => 207,
        'startColumn' => 3,
        'endColumn' => 72,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 81,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      '__destruct' => 
      array (
        'name' => '__destruct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensures that the client connection can be garbage collected.
 */',
        'startLine' => 212,
        'endLine' => 217,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'commitAll' => 
      array (
        'name' => 'commitAll',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Commits all the open transactions.
 *
 * @internal
 *   This method exists only to work around a bug caused by Drupal incorrectly
 *   relying on object destruction order to commit transactions. Xdebug 3.3.0
 *   changes the order of object destruction when the develop mode is enabled.
 */',
        'startLine' => 227,
        'endLine' => 232,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getClientConnection' => 
      array (
        'name' => 'getClientConnection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'object',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the client-level database connection object.
 *
 * This method should normally be used only within database driver code. Not
 * doing so constitutes a risk of introducing code that is not database
 * independent.
 *
 * @return object
 *   The client-level database connection, for example \\PDO.
 */',
        'startLine' => 244,
        'endLine' => 246,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'defaultOptions' => 
      array (
        'name' => 'defaultOptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the default query options for any given query.
 *
 * A given query can be customized with a number of option flags in an
 * associative array:
 * - fetch: This element controls how rows from a result set will be
 *   returned. Legal values include one of the enumeration cases of FetchAs or
 *   a string representing the name of a class. If a string is specified, each
 *   record will be fetched into a new object of that class. The behavior of
 *   all other values is described in the FetchAs enum.
 * - allow_delimiter_in_query: By default, queries which have the ; delimiter
 *   any place in them will cause an exception. This reduces the chance of SQL
 *   injection attacks that terminate the original query and add one or more
 *   additional queries (such as inserting new user accounts). In rare cases,
 *   such as creating an SQL function, a ; is needed and can be allowed by
 *   changing this option to TRUE.
 * - allow_square_brackets: By default, queries which contain square brackets
 *   will have them replaced with the identifier quote character for the
 *   database type. In rare cases, such as creating an SQL function, []
 *   characters might be needed and can be allowed by changing this option to
 *   TRUE.
 * - pdo: By default, queries will execute with the client connection options
 *   set on the connection. In particular cases, it could be necessary to
 *   override the driver options on the statement level. In such case, pass
 *   the required setting as an array here, and they will be passed to the
 *   prepared statement.
 *
 * @return array
 *   An array of default query options.
 */',
        'startLine' => 278,
        'endLine' => 285,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getConnectionOptions' => 
      array (
        'name' => 'getConnectionOptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the connection information for this connection object.
 *
 * Note that Database::getConnectionInfo() is for requesting information
 * about an arbitrary database connection that is defined. This method
 * is for requesting the connection information of this specific
 * open connection object.
 *
 * @return array
 *   An array of the connection information. The exact list of
 *   properties is driver-dependent.
 */',
        'startLine' => 299,
        'endLine' => 301,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'attachDatabase' => 
      array (
        'name' => 'attachDatabase',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 322,
            'endLine' => 322,
            'startColumn' => 34,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
 * Allows the connection to access additional databases.
 *
 * Database systems usually group tables in \'databases\' or \'schemas\', that
 * can be accessed with syntax like \'SELECT * FROM database.table\'. Normally
 * Drupal accesses tables in a single database/schema, but in some cases it
 * may be necessary to access tables from other databases/schemas in the same
 * database server. This method can be called to ensure that the additional
 * database/schema is accessible.
 *
 * For MySQL, PostgreSQL and most other databases no action need to be taken
 * to query data in another database or schema. For SQLite this is however
 * necessary and the database driver for SQLite will override this method.
 *
 * @param string $database
 *   The database to be attached to the connection.
 *
 * @internal
 */',
        'startLine' => 322,
        'endLine' => 323,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getPrefix' => 
      array (
        'name' => 'getPrefix',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the prefix of the tables.
 *
 * @return string
 *   The table prefix.
 */',
        'startLine' => 331,
        'endLine' => 333,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setPrefix' => 
      array (
        'name' => 'setPrefix',
        'parameters' => 
        array (
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 341,
            'endLine' => 341,
            'startColumn' => 32,
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
 * Set the prefix used by this database connection.
 *
 * @param string $prefix
 *   A single prefix.
 */',
        'startLine' => 341,
        'endLine' => 348,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'prefixTables' => 
      array (
        'name' => 'prefixTables',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 364,
            'endLine' => 364,
            'startColumn' => 32,
            'endColumn' => 35,
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
 * Appends a database prefix to all tables in a query.
 *
 * Queries sent to Drupal should wrap all table names in curly brackets. This
 * function searches for this syntax and adds Drupal\'s table prefix to all
 * tables, allowing Drupal to coexist with other systems in the same database
 * and/or schema if necessary.
 *
 * @param string $sql
 *   A string containing a partial or entire SQL query.
 *
 * @return string
 *   The properly-prefixed string.
 */',
        'startLine' => 364,
        'endLine' => 366,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'quoteIdentifiers' => 
      array (
        'name' => 'quoteIdentifiers',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 388,
            'endLine' => 388,
            'startColumn' => 36,
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
 * Quotes all identifiers in a query.
 *
 * Queries sent to Drupal should wrap all unquoted identifiers in square
 * brackets. This function searches for this syntax and replaces them with the
 * database specific identifier. In ANSI SQL this a double quote.
 *
 * Note that :variable[] is used to denote array arguments but
 * Connection::expandArguments() is always called first.
 *
 * @param string $sql
 *   A string containing a partial or entire SQL query.
 *
 * @return string
 *   The string containing a partial or entire SQL query with all identifiers
 *   quoted.
 *
 * @internal
 *   This method should only be called by database API code.
 */',
        'startLine' => 388,
        'endLine' => 390,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getFullQualifiedTableName' => 
      array (
        'name' => 'getFullQualifiedTableName',
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
            'startLine' => 401,
            'endLine' => 401,
            'startColumn' => 45,
            'endColumn' => 50,
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
 * Get a fully qualified table name.
 *
 * @param string $table
 *   The name of the table in question.
 *
 * @return string
 *   The fully qualified table name.
 */',
        'startLine' => 401,
        'endLine' => 405,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'prepareStatement' => 
      array (
        'name' => 'prepareStatement',
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
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 433,
            'endLine' => 433,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 433,
            'endLine' => 433,
            'startColumn' => 51,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'allow_row_count' => 
          array (
            'name' => 'allow_row_count',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 433,
                'endLine' => 433,
                'startTokenPos' => 919,
                'startFilePos' => 14022,
                'endTokenPos' => 919,
                'endFilePos' => 14026,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 433,
            'endLine' => 433,
            'startColumn' => 67,
            'endColumn' => 95,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Database\\StatementInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a prepared statement given a SQL string.
 *
 * This method caches prepared statements, reusing them when possible. It also
 * prefixes tables names enclosed in curly braces and, optionally, quotes
 * identifiers enclosed in square brackets.
 *
 * @param string $query
 *   The query string as SQL, with curly braces surrounding the table names,
 *   and square brackets surrounding identifiers.
 * @param array $options
 *   An associative array of options to control how the query is run. See
 *   the documentation for self::defaultOptions() for details. The content of
 *   the \'pdo\' key will be passed to the prepared statement.
 * @param bool $allow_row_count
 *   (optional) A flag indicating if row count is allowed on the statement
 *   object. Defaults to FALSE.
 *
 * @return \\Drupal\\Core\\Database\\StatementInterface
 *   A prepared statement ready for its execute() method.
 *
 * @throws \\InvalidArgumentException
 *   If multiple statements are included in the string, and delimiters are
 *   not allowed in the query.
 * @throws \\Drupal\\Core\\Database\\DatabaseExceptionWrapper
 */',
        'startLine' => 433,
        'endLine' => 448,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'preprocessStatement' => 
      array (
        'name' => 'preprocessStatement',
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
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 471,
            'endLine' => 471,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 471,
            'endLine' => 471,
            'startColumn' => 57,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a string SQL statement ready for preparation.
 *
 * This method replaces table names in curly braces and identifiers in square
 * brackets with platform specific replacements, appropriately escaping them
 * and wrapping them with platform quote characters.
 *
 * @param string $query
 *   The query string as SQL, with curly braces surrounding the table names,
 *   and square brackets surrounding identifiers.
 * @param array $options
 *   An associative array of options to control how the query is run. See
 *   the documentation for self::defaultOptions() for details.
 *
 * @return string
 *   A string SQL statement ready for preparation.
 *
 * @throws \\InvalidArgumentException
 *   If multiple statements are included in the string, and delimiters are
 *   not allowed in the query.
 */',
        'startLine' => 471,
        'endLine' => 494,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setTarget' => 
      array (
        'name' => 'setTarget',
        'parameters' => 
        array (
          'target' => 
          array (
            'name' => 'target',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 507,
                'endLine' => 507,
                'startTokenPos' => 1252,
                'startFilePos' => 17331,
                'endTokenPos' => 1252,
                'endFilePos' => 17334,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 29,
            'endColumn' => 42,
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
 * Tells this connection object what its target value is.
 *
 * This is needed for logging and auditing. It\'s sloppy to do in the
 * constructor because the constructor for child classes has a different
 * signature. We therefore also ensure that this function is only ever
 * called once.
 *
 * @param string $target
 *   (optional) The target this connection is for.
 */',
        'startLine' => 507,
        'endLine' => 511,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getTarget' => 
      array (
        'name' => 'getTarget',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the target this connection is associated with.
 *
 * @return string|null
 *   The target string of this connection, or NULL if no target is set.
 */',
        'startLine' => 519,
        'endLine' => 521,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setKey' => 
      array (
        'name' => 'setKey',
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
            'startLine' => 529,
            'endLine' => 529,
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
 * Tells this connection object what its key is.
 *
 * @param string $key
 *   The key this connection is for.
 */',
        'startLine' => 529,
        'endLine' => 533,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getKey' => 
      array (
        'name' => 'getKey',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the key this connection is associated with.
 *
 * @return string|null
 *   The key of this connection, or NULL if no key is set.
 */',
        'startLine' => 541,
        'endLine' => 543,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'setLogger' => 
      array (
        'name' => 'setLogger',
        'parameters' => 
        array (
          'logger' => 
          array (
            'name' => 'logger',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Database\\Log',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 551,
            'endLine' => 551,
            'startColumn' => 29,
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
 * Associates a logging object with this connection.
 *
 * @param \\Drupal\\Core\\Database\\Log $logger
 *   The logging object we want to use.
 */',
        'startLine' => 551,
        'endLine' => 553,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getLogger' => 
      array (
        'name' => 'getLogger',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the current logging object for this connection.
 *
 * @return \\Drupal\\Core\\Database\\Log|null
 *   The current logging object for this connection. If there isn\'t one,
 *   NULL is returned.
 */',
        'startLine' => 562,
        'endLine' => 564,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'makeComment' => 
      array (
        'name' => 'makeComment',
        'parameters' => 
        array (
          'comments' => 
          array (
            'name' => 'comments',
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
            'startColumn' => 31,
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
 * Flatten an array of query comments into a single comment string.
 *
 * The comment string will be sanitized to avoid SQL injection attacks.
 *
 * @param string[] $comments
 *   An array of query comment strings.
 *
 * @return string
 *   A sanitized comment string.
 */',
        'startLine' => 577,
        'endLine' => 587,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'filterComment' => 
      array (
        'name' => 'filterComment',
        'parameters' => 
        array (
          'comment' => 
          array (
            'name' => 'comment',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 620,
                'endLine' => 620,
                'startTokenPos' => 1493,
                'startFilePos' => 20290,
                'endTokenPos' => 1493,
                'endFilePos' => 20291,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 620,
            'endLine' => 620,
            'startColumn' => 36,
            'endColumn' => 48,
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
 * Sanitize a query comment string.
 *
 * Ensure a query comment does not include strings such as "* /" that might
 * terminate the comment early. This avoids SQL injection attacks via the
 * query comment. The comment strings in this example are separated by a
 * space to avoid PHP parse errors.
 *
 * For example, the comment:
 * @code
 * \\Drupal::database()->update(\'example\')
 *  ->condition(\'id\', $id)
 *  ->fields([\'field2\' => 10])
 *  ->comment(\'Exploit * / DROP TABLE node; --\')
 *  ->execute()
 * @endcode
 *
 * Would result in the following SQL statement being generated:
 * @code
 * "/ * Exploit * / DROP TABLE node. -- * / UPDATE example SET field2=..."
 * @endcode
 *
 * Unless the comment is sanitized first, the SQL server would drop the
 * node table and ignore the rest of the SQL statement.
 *
 * @param string $comment
 *   A query comment string.
 *
 * @return string
 *   A sanitized version of the query comment string.
 */',
        'startLine' => 620,
        'endLine' => 623,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'query' => 
      array (
        'name' => 'query',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 652,
            'endLine' => 652,
            'startColumn' => 25,
            'endColumn' => 30,
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
                'startLine' => 652,
                'endLine' => 652,
                'startTokenPos' => 1543,
                'startFilePos' => 21628,
                'endTokenPos' => 1544,
                'endFilePos' => 21629,
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
            'startLine' => 652,
            'endLine' => 652,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 1,
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
                'startLine' => 652,
                'endLine' => 652,
                'startTokenPos' => 1551,
                'startFilePos' => 21643,
                'endTokenPos' => 1552,
                'endFilePos' => 21644,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 652,
            'endLine' => 652,
            'startColumn' => 51,
            'endColumn' => 63,
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
 * Executes a query string against the database.
 *
 * This method provides a central handler for the actual execution of every
 * query. All queries executed by Drupal are executed as prepared statements.
 *
 * @param string $query
 *   The query to execute. This is a string containing an SQL query with
 *   placeholders.
 * @param array $args
 *   The associative array of arguments for the prepared statement.
 * @param array $options
 *   An associative array of options to control how the query is run. The
 *   given options will be merged with self::defaultOptions(). See the
 *   documentation for self::defaultOptions() for details.
 *   Typically, $options[\'return\'] will be set by a default or by a query
 *   builder, and should not be set by a user.
 *
 * @return \\Drupal\\Core\\Database\\StatementInterface|null
 *   The executed statement.
 *
 * @throws \\Drupal\\Core\\Database\\DatabaseExceptionWrapper
 * @throws \\Drupal\\Core\\Database\\IntegrityConstraintViolationException
 * @throws \\InvalidArgumentException
 *
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
        'startLine' => 652,
        'endLine' => 673,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'expandArguments' => 
      array (
        'name' => 'expandArguments',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 696,
            'endLine' => 696,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 696,
            'endLine' => 696,
            'startColumn' => 47,
            'endColumn' => 52,
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
 * Expands out shorthand placeholders.
 *
 * Drupal supports an alternate syntax for doing arrays of values. We
 * therefore need to expand them out into a full, executable query string.
 *
 * @param string $query
 *   The query string to modify.
 * @param array $args
 *   The arguments for the query.
 *
 * @return bool
 *   TRUE if the query was modified, FALSE otherwise.
 *
 * @throws \\InvalidArgumentException
 *   This exception is thrown when:
 *   - A placeholder that ends in [] is supplied, and the supplied value is
 *     not an array.
 *   - A placeholder that does not end in [] is supplied, and the supplied
 *     value is an array.
 */',
        'startLine' => 696,
        'endLine' => 739,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getDriverClass' => 
      array (
        'name' => 'getDriverClass',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 750,
            'endLine' => 750,
            'startColumn' => 34,
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
 * Gets the driver-specific override class if any for the specified class.
 *
 * @param string $class
 *   The class for which we want the potentially driver-specific class.
 *
 * @return string
 *   The name of the class that should be used for this driver.
 */',
        'startLine' => 750,
        'endLine' => 771,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'exceptionHandler' => 
      array (
        'name' => 'exceptionHandler',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the database exceptions handler.
 *
 * @return \\Drupal\\Core\\Database\\ExceptionHandler
 *   The database exceptions handler.
 */',
        'startLine' => 779,
        'endLine' => 781,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'select' => 
      array (
        'name' => 'select',
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
            'startLine' => 802,
            'endLine' => 802,
            'startColumn' => 26,
            'endColumn' => 31,
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
                'startLine' => 802,
                'endLine' => 802,
                'startTokenPos' => 2229,
                'startFilePos' => 27553,
                'endTokenPos' => 2229,
                'endFilePos' => 27556,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 802,
            'endLine' => 802,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 1,
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
                'startLine' => 802,
                'endLine' => 802,
                'startTokenPos' => 2238,
                'startFilePos' => 27576,
                'endTokenPos' => 2239,
                'endFilePos' => 27577,
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
            'startLine' => 802,
            'endLine' => 802,
            'startColumn' => 49,
            'endColumn' => 67,
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
 * Prepares and returns a SELECT query object.
 *
 * @param string|\\Drupal\\Core\\Database\\Query\\SelectInterface $table
 *   The base table name or subquery for this query, used in the FROM clause.
 *   If a string, the table specified will also be used as the "base" table
 *   for query_alter hook implementations.
 * @param string $alias
 *   (optional) The alias of the base table of this query.
 * @param array $options
 *   An array of options on the query.
 *
 * @return \\Drupal\\Core\\Database\\Query\\SelectInterface
 *   An appropriate SelectQuery object for this database connection. Note that
 *   it may be a driver-specific subclass of SelectQuery, depending on the
 *   driver.
 *
 * @see \\Drupal\\Core\\Database\\Query\\Select
 */',
        'startLine' => 802,
        'endLine' => 805,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'insert' => 
      array (
        'name' => 'insert',
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
            'startLine' => 823,
            'endLine' => 823,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
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
                'startLine' => 823,
                'endLine' => 823,
                'startTokenPos' => 2310,
                'startFilePos' => 28374,
                'endTokenPos' => 2311,
                'endFilePos' => 28375,
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
            'startLine' => 823,
            'endLine' => 823,
            'startColumn' => 34,
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
 * Prepares and returns an INSERT query object.
 *
 * @param string $table
 *   The table to use for the insert statement.
 * @param array $options
 *   (optional) An associative array of options to control how the query is
 *   run. The given options will be merged with
 *   \\Drupal\\Core\\Database\\Connection::defaultOptions().
 *
 * @return \\Drupal\\Core\\Database\\Query\\Insert
 *   A new Insert query object.
 *
 * @see \\Drupal\\Core\\Database\\Query\\Insert
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
        'startLine' => 823,
        'endLine' => 825,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'lastInsertId' => 
      array (
        'name' => 'lastInsertId',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 850,
                'endLine' => 850,
                'startTokenPos' => 2349,
                'startFilePos' => 29353,
                'endTokenPos' => 2349,
                'endFilePos' => 29356,
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
                      'name' => 'string',
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
            'startLine' => 850,
            'endLine' => 850,
            'startColumn' => 32,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the ID of the last inserted row or sequence value.
 *
 * This method should normally be used only within database driver code.
 *
 * This is a proxy to invoke lastInsertId() from the wrapped connection.
 * If a sequence name is not specified for the name parameter, this returns a
 * string representing the row ID of the last row that was inserted into the
 * database.
 * If a sequence name is specified for the name parameter, this returns a
 * string representing the last value retrieved from the specified sequence
 * object.
 *
 * @param string|null $name
 *   (Optional) Name of the sequence object from which the ID should be
 *   returned.
 *
 * @return string
 *   The value returned by the wrapped connection.
 *
 * @throws \\Drupal\\Core\\Database\\DatabaseExceptionWrapper
 *   In case of failure.
 */',
        'startLine' => 850,
        'endLine' => 855,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'merge' => 
      array (
        'name' => 'merge',
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
            'startLine' => 870,
            'endLine' => 870,
            'startColumn' => 25,
            'endColumn' => 30,
            'parameterIndex' => 0,
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
                'startLine' => 870,
                'endLine' => 870,
                'startTokenPos' => 2437,
                'startFilePos' => 30016,
                'endTokenPos' => 2438,
                'endFilePos' => 30017,
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
            'startLine' => 870,
            'endLine' => 870,
            'startColumn' => 33,
            'endColumn' => 51,
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
 * Prepares and returns a MERGE query object.
 *
 * @param string $table
 *   The table to use for the merge statement.
 * @param array $options
 *   (optional) An array of options on the query.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Merge
 *   A new Merge query object.
 *
 * @see \\Drupal\\Core\\Database\\Query\\Merge
 */',
        'startLine' => 870,
        'endLine' => 872,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'upsert' => 
      array (
        'name' => 'upsert',
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
            'startLine' => 887,
            'endLine' => 887,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
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
                'startLine' => 887,
                'endLine' => 887,
                'startTokenPos' => 2480,
                'startFilePos' => 30488,
                'endTokenPos' => 2481,
                'endFilePos' => 30489,
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
            'startLine' => 887,
            'endLine' => 887,
            'startColumn' => 43,
            'endColumn' => 61,
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
 * Prepares and returns an UPSERT query object.
 *
 * @param string $table
 *   The table to use for the upsert query.
 * @param array $options
 *   (optional) An array of options on the query.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Upsert
 *   A new Upsert query object.
 *
 * @see \\Drupal\\Core\\Database\\Query\\Upsert
 */',
        'startLine' => 887,
        'endLine' => 887,
        'startColumn' => 3,
        'endColumn' => 63,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
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
            'startLine' => 905,
            'endLine' => 905,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
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
                'startLine' => 905,
                'endLine' => 905,
                'startTokenPos' => 2502,
                'startFilePos' => 31099,
                'endTokenPos' => 2503,
                'endFilePos' => 31100,
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
            'startLine' => 905,
            'endLine' => 905,
            'startColumn' => 34,
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
 * Prepares and returns an UPDATE query object.
 *
 * @param string $table
 *   The table to use for the update statement.
 * @param array $options
 *   (optional) An associative array of options to control how the query is
 *   run. The given options will be merged with
 *   \\Drupal\\Core\\Database\\Connection::defaultOptions().
 *
 * @return \\Drupal\\Core\\Database\\Query\\Update
 *   A new Update query object.
 *
 * @see \\Drupal\\Core\\Database\\Query\\Update
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
        'startLine' => 905,
        'endLine' => 907,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
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
            'startLine' => 925,
            'endLine' => 925,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
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
                'startLine' => 925,
                'endLine' => 925,
                'startTokenPos' => 2543,
                'startFilePos' => 31762,
                'endTokenPos' => 2544,
                'endFilePos' => 31763,
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
            'startLine' => 925,
            'endLine' => 925,
            'startColumn' => 34,
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
 * Prepares and returns a DELETE query object.
 *
 * @param string $table
 *   The table to use for the delete statement.
 * @param array $options
 *   (optional) An associative array of options to control how the query is
 *   run. The given options will be merged with
 *   \\Drupal\\Core\\Database\\Connection::defaultOptions().
 *
 * @return \\Drupal\\Core\\Database\\Query\\Delete
 *   A new Delete query object.
 *
 * @see \\Drupal\\Core\\Database\\Query\\Delete
 * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
 */',
        'startLine' => 925,
        'endLine' => 927,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'truncate' => 
      array (
        'name' => 'truncate',
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
            'startLine' => 942,
            'endLine' => 942,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
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
                'startLine' => 942,
                'endLine' => 942,
                'startTokenPos' => 2584,
                'startFilePos' => 32241,
                'endTokenPos' => 2585,
                'endFilePos' => 32242,
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
            'startLine' => 942,
            'endLine' => 942,
            'startColumn' => 36,
            'endColumn' => 54,
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
 * Prepares and returns a TRUNCATE query object.
 *
 * @param string $table
 *   The table to use for the truncate statement.
 * @param array $options
 *   (optional) An array of options on the query.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Truncate
 *   A new Truncate query object.
 *
 * @see \\Drupal\\Core\\Database\\Query\\Truncate
 */',
        'startLine' => 942,
        'endLine' => 944,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'schema' => 
      array (
        'name' => 'schema',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a DatabaseSchema object for manipulating the schema.
 *
 * This method will lazy-load the appropriate schema library file.
 *
 * @return \\Drupal\\Core\\Database\\Schema
 *   The database Schema object for this connection.
 */',
        'startLine' => 954,
        'endLine' => 954,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'condition' => 
      array (
        'name' => 'condition',
        'parameters' => 
        array (
          'conjunction' => 
          array (
            'name' => 'conjunction',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 967,
            'endLine' => 967,
            'startColumn' => 29,
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
 * Prepares and returns a CONDITION query object.
 *
 * @param string $conjunction
 *   The operator to use to combine conditions: \'AND\' or \'OR\'.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Condition
 *   A new Condition query object.
 *
 * @see \\Drupal\\Core\\Database\\Query\\Condition
 */',
        'startLine' => 967,
        'endLine' => 972,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'escapeDatabase' => 
      array (
        'name' => 'escapeDatabase',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 987,
            'endLine' => 987,
            'startColumn' => 34,
            'endColumn' => 42,
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
 * Escapes a database name string.
 *
 * Force all database names to be strictly alphanumeric-plus-underscore.
 * For some database drivers, it may also wrap the database name in
 * database-specific escape characters.
 *
 * @param string $database
 *   An unsanitized database name.
 *
 * @return string
 *   The sanitized database name.
 */',
        'startLine' => 987,
        'endLine' => 991,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'escapeTable' => 
      array (
        'name' => 'escapeTable',
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
            'startLine' => 1010,
            'endLine' => 1010,
            'startColumn' => 31,
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
 * Escapes a table name string.
 *
 * Force all table names to be strictly alphanumeric-plus-underscore.
 * Database drivers should never wrap the table name in database-specific
 * escape characters. This is done in Connection::prefixTables(). The
 * database-specific escape characters are added in Connection::setPrefix().
 *
 * @param string $table
 *   An unsanitized table name.
 *
 * @return string
 *   The sanitized table name.
 *
 * @see \\Drupal\\Core\\Database\\Connection::prefixTables()
 * @see \\Drupal\\Core\\Database\\Connection::setPrefix()
 */',
        'startLine' => 1010,
        'endLine' => 1015,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'escapeField' => 
      array (
        'name' => 'escapeField',
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
            'startLine' => 1030,
            'endLine' => 1030,
            'startColumn' => 31,
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
 * Escapes a field name string.
 *
 * Force all field names to be strictly alphanumeric-plus-underscore.
 * For some database drivers, it may also wrap the field name in
 * database-specific escape characters.
 *
 * @param string $field
 *   An unsanitized field name.
 *
 * @return string
 *   The sanitized field name.
 */',
        'startLine' => 1030,
        'endLine' => 1039,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'escapeAlias' => 
      array (
        'name' => 'escapeAlias',
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
            'startLine' => 1055,
            'endLine' => 1055,
            'startColumn' => 31,
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
 * Escapes an alias name string.
 *
 * Force all alias names to be strictly alphanumeric-plus-underscore. In
 * contrast to DatabaseConnection::escapeField() /
 * DatabaseConnection::escapeTable(), this doesn\'t allow the period (".")
 * because that is not allowed in aliases.
 *
 * @param string $field
 *   An unsanitized alias name.
 *
 * @return string
 *   The sanitized alias name.
 */',
        'startLine' => 1055,
        'endLine' => 1061,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
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
            'startLine' => 1088,
            'endLine' => 1088,
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
 * The wildcard characters "%" and "_" as well as backslash are prefixed with
 * a backslash. Use this to do a search for a verbatim string without any
 * wildcard behavior.
 *
 * For example, the following does a case-insensitive query for all rows whose
 * name starts with $prefix:
 * @code
 * $result = $injected_connection->query(
 *   \'SELECT * FROM person WHERE name LIKE :pattern\',
 *   [\':pattern\' => $injected_connection->escapeLike($prefix) . \'%\']
 * );
 * @endcode
 *
 * Backslash is defined as escape character for LIKE patterns in
 * Drupal\\Core\\Database\\Query\\Condition::mapConditionOperator().
 *
 * @param string $string
 *   The string to escape.
 *
 * @return string
 *   The escaped string.
 */',
        'startLine' => 1088,
        'endLine' => 1090,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'transactionManager' => 
      array (
        'name' => 'transactionManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Database\\Transaction\\TransactionManagerInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the transaction manager.
 *
 * @return \\Drupal\\Core\\Database\\Transaction\\TransactionManagerInterface
 *   The transaction manager, or FALSE if not available.
 *
 * @throws \\LogicException
 *   If the transaction manager is undefined or unavailable.
 */',
        'startLine' => 1101,
        'endLine' => 1106,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'driverTransactionManager' => 
      array (
        'name' => 'driverTransactionManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Database\\Transaction\\TransactionManagerInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a new instance of the driver\'s transaction manager.
 *
 * Database drivers must implement their own class extending from
 * \\Drupal\\Core\\Database\\Transaction\\TransactionManagerBase, and instantiate
 * it here.
 *
 * phpcs:ignore Drupal.Commenting.FunctionComment.InvalidNoReturn
 * @return \\Drupal\\Core\\Database\\Transaction\\TransactionManagerInterface
 *   The transaction manager.
 *
 * @throws \\LogicException
 *   If the transaction manager is undefined or unavailable.
 */',
        'startLine' => 1122,
        'endLine' => 1124,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'inTransaction' => 
      array (
        'name' => 'inTransaction',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if there is an active transaction open.
 *
 * @return bool
 *   TRUE if we\'re currently in a transaction, FALSE otherwise.
 */',
        'startLine' => 1132,
        'endLine' => 1134,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'startTransaction' => 
      array (
        'name' => 'startTransaction',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 1147,
                'endLine' => 1147,
                'startTokenPos' => 3122,
                'startFilePos' => 38991,
                'endTokenPos' => 3122,
                'endFilePos' => 38992,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1147,
            'endLine' => 1147,
            'startColumn' => 36,
            'endColumn' => 45,
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
 * Returns a new DatabaseTransaction object on this connection.
 *
 * @param string $name
 *   (optional) The name of the savepoint.
 *
 * @return \\Drupal\\Core\\Database\\Transaction
 *   A Transaction object.
 *
 * @see \\Drupal\\Core\\Database\\Transaction
 */',
        'startLine' => 1147,
        'endLine' => 1149,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'queryRange' => 
      array (
        'name' => 'queryRange',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1175,
            'endLine' => 1175,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1175,
            'endLine' => 1175,
            'startColumn' => 47,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'count' => 
          array (
            'name' => 'count',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1175,
            'endLine' => 1175,
            'startColumn' => 54,
            'endColumn' => 59,
            'parameterIndex' => 2,
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
                'startLine' => 1175,
                'endLine' => 1175,
                'startTokenPos' => 3168,
                'startFilePos' => 40023,
                'endTokenPos' => 3169,
                'endFilePos' => 40024,
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
            'startLine' => 1175,
            'endLine' => 1175,
            'startColumn' => 62,
            'endColumn' => 77,
            'parameterIndex' => 3,
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
                'startLine' => 1175,
                'endLine' => 1175,
                'startTokenPos' => 3178,
                'startFilePos' => 40044,
                'endTokenPos' => 3179,
                'endFilePos' => 40045,
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
            'startLine' => 1175,
            'endLine' => 1175,
            'startColumn' => 80,
            'endColumn' => 98,
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
 * Runs a limited-range query on this database object.
 *
 * Use this as a substitute for ->query() when a subset of the query is to be
 * returned. User-supplied arguments to the query should be passed in as
 * separate parameters so that they can be properly escaped to avoid SQL
 * injection attacks.
 *
 * @param string $query
 *   A string containing an SQL query.
 * @param int $from
 *   The first result row to return.
 * @param int $count
 *   The maximum number of result rows to return.
 * @param array $args
 *   (optional) An array of values to substitute into the query at placeholder
 *    markers.
 * @param array $options
 *   (optional) An array of options on the query.
 *
 * @return \\Drupal\\Core\\Database\\StatementInterface
 *   A database query result resource, or NULL if the query was not executed
 *   correctly.
 */',
        'startLine' => 1175,
        'endLine' => 1175,
        'startColumn' => 3,
        'endColumn' => 100,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'driver' => 
      array (
        'name' => 'driver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the type of database driver.
 *
 * This is not necessarily the same as the type of the database itself. For
 * instance, there could be two MySQL drivers, mysql and mysqlMock. This
 * function would return different values for each, but both would return
 * "mysql" for databaseType().
 *
 * @return string
 *   The type of database driver.
 */',
        'startLine' => 1188,
        'endLine' => 1188,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'version' => 
      array (
        'name' => 'version',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the version of the database server.
 *
 * Assumes the client connection is \\PDO. Non-PDO based drivers need to
 * override this method.
 *
 * @return string
 *   The version of the database server.
 */',
        'startLine' => 1199,
        'endLine' => 1201,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'clientVersion' => 
      array (
        'name' => 'clientVersion',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the version of the database client.
 *
 * Assumes the client connection is \\PDO. Non-PDO based drivers need to
 * override this method.
 *
 * @return string
 *   The version of the database client.
 */',
        'startLine' => 1212,
        'endLine' => 1214,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'supportsTransactionalDDL' => 
      array (
        'name' => 'supportsTransactionalDDL',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if this driver supports transactional DDL.
 *
 * DDL queries are those that change the schema, such as ALTER queries.
 *
 * @return bool
 *   TRUE if this connection supports transactions for DDL queries, FALSE
 *   otherwise.
 */',
        'startLine' => 1225,
        'endLine' => 1227,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'databaseType' => 
      array (
        'name' => 'databaseType',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the name of the database engine accessed by this driver.
 *
 * @return string
 *   The database engine name.
 */',
        'startLine' => 1235,
        'endLine' => 1235,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'createDatabase' => 
      array (
        'name' => 'createDatabase',
        'parameters' => 
        array (
          'database' => 
          array (
            'name' => 'database',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1246,
            'endLine' => 1246,
            'startColumn' => 43,
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
 * Creates a database.
 *
 * In order to use this method, you must be connected without a database
 * specified.
 *
 * @param string $database
 *   The name of the database to create.
 */',
        'startLine' => 1246,
        'endLine' => 1246,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'mapConditionOperator' => 
      array (
        'name' => 'mapConditionOperator',
        'parameters' => 
        array (
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1264,
            'endLine' => 1264,
            'startColumn' => 49,
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
 * Gets any special processing requirements for the condition operator.
 *
 * Some condition types require special processing, such as IN, because
 * the value data they pass in is not a simple value. This is a simple
 * overridable lookup function. Database connections should define only
 * those operators they wish to be handled differently than the default.
 *
 * @param string $operator
 *   The condition operator, such as "IN", "BETWEEN", etc. Case-sensitive.
 *
 * @return array|null
 *   The extra handling directives for the specified operator, or NULL.
 *
 * @see \\Drupal\\Core\\Database\\Query\\Condition::compile()
 */',
        'startLine' => 1264,
        'endLine' => 1264,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'quote' => 
      array (
        'name' => 'quote',
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
            'startLine' => 1281,
            'endLine' => 1281,
            'startColumn' => 25,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameter_type' => 
          array (
            'name' => 'parameter_type',
            'default' => 
            array (
              'code' => '\\PDO::PARAM_STR',
              'attributes' => 
              array (
                'startLine' => 1281,
                'endLine' => 1281,
                'startTokenPos' => 3329,
                'startFilePos' => 43237,
                'endTokenPos' => 3331,
                'endFilePos' => 43251,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1281,
            'endLine' => 1281,
            'startColumn' => 34,
            'endColumn' => 66,
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
 * Quotes a string for use in a query.
 *
 * @param string $string
 *   The string to be quoted.
 * @param int $parameter_type
 *   (optional) Provides a data type hint for drivers that have alternate
 *   quoting styles. Defaults to \\PDO::PARAM_STR.
 *
 * @return string|false
 *   A quoted string that is theoretically safe to pass into an SQL statement.
 *   Returns FALSE if the driver does not support quoting in this way.
 *
 * @see \\PDO::quote()
 */',
        'startLine' => 1281,
        'endLine' => 1283,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getSQLState' => 
      array (
        'name' => 'getSQLState',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Exception',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1294,
            'endLine' => 1294,
            'startColumn' => 41,
            'endColumn' => 53,
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
 * Extracts the SQLSTATE error from a PDOException.
 *
 * @param \\Exception $e
 *   The exception.
 *
 * @return string
 *   The five character error code.
 */',
        'startLine' => 1294,
        'endLine' => 1303,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
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
 * Prevents the database connection from being serialized.
 */',
        'startLine' => 1308,
        'endLine' => 1310,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'createConnectionOptionsFromUrl' => 
      array (
        'name' => 'createConnectionOptionsFromUrl',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1334,
            'endLine' => 1334,
            'startColumn' => 57,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'root' => 
          array (
            'name' => 'root',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1334,
            'endLine' => 1334,
            'startColumn' => 63,
            'endColumn' => 67,
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
 * Creates an array of database connection options from a URL.
 *
 * @param string $url
 *   The URL.
 * @param string|null $root
 *   (deprecated) The root directory of the Drupal installation. Some
 *   database drivers, like for example SQLite, need this information.
 *
 * @return array
 *   The connection options.
 *
 * @throws \\InvalidArgumentException
 *   Exception thrown when the provided URL does not meet the minimum
 *   requirements.
 *
 * @internal
 *   This method should only be called from
 *   \\Drupal\\Core\\Database\\Database::convertDbUrlToConnectionInfo().
 *
 * @see \\Drupal\\Core\\Database\\Database::convertDbUrlToConnectionInfo()
 */',
        'startLine' => 1334,
        'endLine' => 1376,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'createUrlFromConnectionOptions' => 
      array (
        'name' => 'createUrlFromConnectionOptions',
        'parameters' => 
        array (
          'connection_options' => 
          array (
            'name' => 'connection_options',
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
            'startLine' => 1399,
            'endLine' => 1399,
            'startColumn' => 57,
            'endColumn' => 81,
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
 * Creates a URL from an array of database connection options.
 *
 * @param array $connection_options
 *   The array of connection options for a database connection. An additional
 *   key of \'module\' is added by Database::getConnectionInfoAsUrl() for
 *   drivers provided my contributed or custom modules for convenience.
 *
 * @return string
 *   The connection info as a URL.
 *
 * @throws \\InvalidArgumentException
 *   Exception thrown when the provided array of connection options does not
 *   meet the minimum requirements.
 *
 * @internal
 *   This method should only be called from
 *   \\Drupal\\Core\\Database\\Database::getConnectionInfoAsUrl().
 *
 * @see \\Drupal\\Core\\Database\\Database::getConnectionInfoAsUrl()
 */',
        'startLine' => 1399,
        'endLine' => 1433,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getProvider' => 
      array (
        'name' => 'getProvider',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the module name of the module that is providing the database driver.
 *
 * @return string
 *   The module name of the module that is providing the database driver, or
 *   "core" when the driver is not provided as part of a module.
 */',
        'startLine' => 1442,
        'endLine' => 1451,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getPagerManager' => 
      array (
        'name' => 'getPagerManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Pager\\PagerManagerInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the pager manager service, if available.
 *
 * @return \\Drupal\\Core\\Pager\\PagerManagerInterface
 *   The pager manager service, if available.
 *
 * @throws \\Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException
 *   If the container has not been initialized yet.
 */',
        'startLine' => 1462,
        'endLine' => 1464,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'hasJson' => 
      array (
        'name' => 'hasJson',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Runs a simple query to validate json datatype support.
 *
 * @return bool
 *   Returns the query result.
 */',
        'startLine' => 1472,
        'endLine' => 1479,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'isEventEnabled' => 
      array (
        'name' => 'isEventEnabled',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1491,
            'endLine' => 1491,
            'startColumn' => 34,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the status of a database API event toggle.
 *
 * @param string $eventName
 *   The name of the event to check.
 *
 * @return bool
 *   TRUE if the event is going to be fired by the database API, FALSE
 *   otherwise.
 */',
        'startLine' => 1491,
        'endLine' => 1493,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'enableEvents' => 
      array (
        'name' => 'enableEvents',
        'parameters' => 
        array (
          'eventNames' => 
          array (
            'name' => 'eventNames',
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
            'startLine' => 1503,
            'endLine' => 1503,
            'startColumn' => 32,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enables database API events dispatching.
 *
 * @param string[] $eventNames
 *   A list of database events to be enabled.
 *
 * @return static
 */',
        'startLine' => 1503,
        'endLine' => 1509,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'disableEvents' => 
      array (
        'name' => 'disableEvents',
        'parameters' => 
        array (
          'eventNames' => 
          array (
            'name' => 'eventNames',
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
            'startLine' => 1519,
            'endLine' => 1519,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disables database API events dispatching.
 *
 * @param string[] $eventNames
 *   A list of database events to be disabled.
 *
 * @return static
 */',
        'startLine' => 1519,
        'endLine' => 1525,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'dispatchEvent' => 
      array (
        'name' => 'dispatchEvent',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Database\\Event\\DatabaseEvent',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1541,
            'endLine' => 1541,
            'startColumn' => 33,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 1541,
                'endLine' => 1541,
                'startTokenPos' => 4417,
                'startFilePos' => 51913,
                'endTokenPos' => 4417,
                'endFilePos' => 51916,
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
                      'name' => 'string',
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
            'startLine' => 1541,
            'endLine' => 1541,
            'startColumn' => 55,
            'endColumn' => 79,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Database\\Event\\DatabaseEvent',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dispatches a database API event via the container dispatcher.
 *
 * @param \\Drupal\\Core\\Database\\Event\\DatabaseEvent $event
 *   The database event.
 * @param string|null $eventName
 *   (Optional) the name of the event to dispatch.
 *
 * @return \\Drupal\\Core\\Database\\Event\\DatabaseEvent
 *   The database event.
 *
 * @throws \\Drupal\\Core\\Database\\Exception\\EventException
 *   If the container is not initialized.
 */',
        'startLine' => 1541,
        'endLine' => 1546,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'findCallerFromDebugBacktrace' => 
      array (
        'name' => 'findCallerFromDebugBacktrace',
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
 * Determine the last non-database method that called the database API.
 *
 * Traversing the call stack from the very first call made during the
 * request, we define "the routine that called this query" as the last entry
 * in the call stack that is not any method called from the namespace of the
 * database driver, is not inside the Drupal\\Core\\Database namespace and does
 * have a file (which excludes call_user_func_array(), anonymous functions
 * and similar). That makes the climbing logic very simple, and handles the
 * variable stack depth caused by the query builders.
 *
 * See the @link http://php.net/debug_backtrace debug_backtrace() @endlink
 * function.
 *
 * @return array
 *   This method returns a stack trace entry similar to that generated by
 *   debug_backtrace(). However, it flattens the trace entry and the trace
 *   entry before it so that we get the function and args of the function that
 *   called into the database system, not the function and args of the
 *   database call itself.
 */',
        'startLine' => 1569,
        'endLine' => 1587,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'removeDatabaseEntriesFromDebugBacktrace' => 
      array (
        'name' => 'removeDatabaseEntriesFromDebugBacktrace',
        'parameters' => 
        array (
          'backtrace' => 
          array (
            'name' => 'backtrace',
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
            'startLine' => 1600,
            'endLine' => 1600,
            'startColumn' => 66,
            'endColumn' => 81,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'driver_namespace' => 
          array (
            'name' => 'driver_namespace',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1600,
            'endLine' => 1600,
            'startColumn' => 84,
            'endColumn' => 107,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
 * Removes database related calls from a backtrace array.
 *
 * @param array $backtrace
 *   A standard PHP backtrace. Passed by reference.
 * @param string $driver_namespace
 *   The PHP namespace of the database driver.
 *
 * @return array
 *   The cleaned backtrace array.
 */',
        'startLine' => 1600,
        'endLine' => 1614,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
        'aliasName' => NULL,
      ),
      'getDebugBacktrace' => 
      array (
        'name' => 'getDebugBacktrace',
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
 * Gets the debug backtrace.
 *
 * Wraps the debug_backtrace function to allow mocking results in PHPUnit
 * tests.
 *
 * @return array[]
 *   The debug backtrace.
 */',
        'startLine' => 1625,
        'endLine' => 1629,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Connection',
        'implementingClassName' => 'Drupal\\Core\\Database\\Connection',
        'currentClassName' => 'Drupal\\Core\\Database\\Connection',
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