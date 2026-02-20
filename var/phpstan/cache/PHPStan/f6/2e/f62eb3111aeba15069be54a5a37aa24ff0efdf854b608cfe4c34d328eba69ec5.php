<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Schema.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Schema
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-70c0333ec9824f66274fa3daf998b83d69bfd306007b6ffaaab5fc9094e5fa8d-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Schema',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Database/Schema.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database',
    'name' => 'Drupal\\Core\\Database\\Schema',
    'shortName' => 'Schema',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Provides a base implementation for Database Schema.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 759,
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
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'name' => 'connection',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The database connection.
 *
 * @var \\Drupal\\Core\\Database\\Connection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'placeholder' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'name' => 'placeholder',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 24,
            'startTokenPos' => 41,
            'startFilePos' => 418,
            'endTokenPos' => 41,
            'endFilePos' => 418,
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
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 3,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultSchema' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'name' => 'defaultSchema',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'public\'',
          'attributes' => 
          array (
            'startLine' => 37,
            'endLine' => 37,
            'startTokenPos' => 52,
            'startFilePos' => 749,
            'endTokenPos' => 52,
            'endFilePos' => 756,
          ),
        ),
        'docComment' => '/**
 * Definition of prefixInfo array structure.
 *
 * Rather than redefining DatabaseSchema::getPrefixInfo() for each driver,
 * by defining the defaultSchema variable only MySQL has to re-write the
 * method.
 *
 * @var string
 *
 * @see DatabaseSchema::getPrefixInfo()
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 3,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'uniqueIdentifier' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
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
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 3,
        'endColumn' => 30,
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
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 31,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 46,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
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
        'startLine' => 54,
        'endLine' => 56,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
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
 * {@inheritdoc}
 */',
        'startLine' => 61,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
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
 * {@inheritdoc}
 */',
        'startLine' => 68,
        'endLine' => 70,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'getPrefixInfo' => 
      array (
        'name' => 'getPrefixInfo',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => 
            array (
              'code' => '\'default\'',
              'attributes' => 
              array (
                'startLine' => 84,
                'endLine' => 84,
                'startTokenPos' => 183,
                'startFilePos' => 1846,
                'endTokenPos' => 183,
                'endFilePos' => 1854,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 36,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'add_prefix' => 
          array (
            'name' => 'add_prefix',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 84,
                'endLine' => 84,
                'startTokenPos' => 190,
                'startFilePos' => 1871,
                'endTokenPos' => 190,
                'endFilePos' => 1874,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 56,
            'endColumn' => 73,
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
 * Get information about the table name and schema from the prefix.
 *
 * @param string $table
 *   Name of table to look prefix up for. Defaults to \'default\' because that\'s
 *   default key for prefix.
 * @param bool $add_prefix
 *   Boolean that indicates whether the given table name should be prefixed.
 *
 * @return array
 *   A keyed array with information about the schema, table name and prefix.
 */',
        'startLine' => 84,
        'endLine' => 106,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'prefixNonTable' => 
      array (
        'name' => 'prefixNonTable',
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
            'startLine' => 113,
            'endLine' => 113,
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
 * Create names for indexes, primary keys and constraints.
 *
 * This prevents using {} around non-table names like indexes and keys.
 */',
        'startLine' => 113,
        'endLine' => 118,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'executeDdlStatement' => 
      array (
        'name' => 'executeDdlStatement',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 42,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 136,
                'endLine' => 136,
                'startTokenPos' => 426,
                'startFilePos' => 3669,
                'endTokenPos' => 427,
                'endFilePos' => 3670,
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
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 55,
            'endColumn' => 75,
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
                'startLine' => 136,
                'endLine' => 136,
                'startTokenPos' => 436,
                'startFilePos' => 3690,
                'endTokenPos' => 437,
                'endFilePos' => 3691,
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
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 78,
            'endColumn' => 96,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Executes a data definition language (DDL) statement.
 *
 * This method allows to void an active transaction when the driver does
 * not support transactional DDL.
 *
 * @param string $sql
 *   The DDL statement to execute. This is a SQL string that may contain
 *   placeholders.
 * @param array $arguments
 *   (Optional) The associative array of arguments for the prepared
 *   statement.
 * @param array $options
 *   (Optional) An associative array of options to control how the query is
 *   run. The given options will be merged with self::defaultOptions().
 */',
        'startLine' => 136,
        'endLine' => 143,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'buildTableNameCondition' => 
      array (
        'name' => 'buildTableNameCondition',
        'parameters' => 
        array (
          'table_name' => 
          array (
            'name' => 'table_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 46,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => '\'=\'',
              'attributes' => 
              array (
                'startLine' => 171,
                'endLine' => 171,
                'startTokenPos' => 526,
                'startFilePos' => 5514,
                'endTokenPos' => 526,
                'endFilePos' => 5516,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 59,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'add_prefix' => 
          array (
            'name' => 'add_prefix',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 171,
                'endLine' => 171,
                'startTokenPos' => 533,
                'startFilePos' => 5533,
                'endTokenPos' => 533,
                'endFilePos' => 5536,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 76,
            'endColumn' => 93,
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
 * Builds a condition to match a table name against the information_schema.
 *
 * The information_schema is a SQL standard that provides information about
 * the database server and the databases, schemas, tables, columns and users
 * within it. This makes information_schema a useful tool to use across the
 * drupal database drivers and is used by a few different functions. The
 * function below describes the conditions to be meet when querying
 * information_schema.tables for drupal tables or information associated with
 * drupal tables. Even though this is the standard method, not all databases
 * follow standards and so this method should be overwritten by a database
 * driver if the database provider uses alternate methods. Because
 * information_schema.tables is used in a few different functions, a database
 * driver will only need to override this function to make all the others
 * work. For example see core/includes/databases/mysql/schema.inc.
 *
 * @param string $table_name
 *   The name of the table in question.
 * @param string $operator
 *   The operator to apply on the \'table\' part of the condition.
 * @param bool $add_prefix
 *   Boolean to indicate whether the table name needs to be prefixed.
 *
 * @return \\Drupal\\Core\\Database\\Query\\Condition
 *   A Condition object.
 */',
        'startLine' => 171,
        'endLine' => 182,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'tableExists' => 
      array (
        'name' => 'tableExists',
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
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'add_prefix' => 
          array (
            'name' => 'add_prefix',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 195,
                'endLine' => 195,
                'startTokenPos' => 651,
                'startFilePos' => 6357,
                'endTokenPos' => 651,
                'endFilePos' => 6360,
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
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 39,
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
 * Check if a table exists.
 *
 * @param string $table
 *   The name of the table in drupal (no prefixing).
 * @param bool $add_prefix
 *   Boolean to indicate whether the table name needs to be prefixed.
 *
 * @return bool
 *   TRUE if the given table exists, otherwise FALSE.
 */',
        'startLine' => 195,
        'endLine' => 205,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'findTables' => 
      array (
        'name' => 'findTables',
        'parameters' => 
        array (
          'table_expression' => 
          array (
            'name' => 'table_expression',
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
            'startColumn' => 30,
            'endColumn' => 46,
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
 * Finds all tables that are like the specified base table name.
 *
 * @param string $table_expression
 *   A case-insensitive pattern against which table names are compared. Both
 *   \'_\' and \'%\' are treated like wildcards in MySQL \'LIKE\' expressions, where
 *   \'_\' matches any single character and \'%\' matches an arbitrary number of
 *   characters (including zero characters). So \'foo%bar\' matches table names
 *   like \'foobar\', \'fooXBar\', \'fooXBaR\',  or \'fooXxBar\'; whereas \'foo_bar\'
 *   matches \'fooXBar\' and \'fooXBaR\' but not \'fooBar\' or \'fooXxxBar\'.
 *
 * @return array
 *   Both the keys and the values are the matching tables.
 */',
        'startLine' => 221,
        'endLine' => 262,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'fieldExists' => 
      array (
        'name' => 'fieldExists',
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
            'startLine' => 275,
            'endLine' => 275,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 275,
            'endLine' => 275,
            'startColumn' => 39,
            'endColumn' => 45,
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
 * Check if a column exists in the given table.
 *
 * @param string $table
 *   The name of the table in drupal (no prefixing).
 * @param string $column
 *   The name of the column.
 *
 * @return bool
 *   TRUE if the given column exists, otherwise FALSE.
 */',
        'startLine' => 275,
        'endLine' => 285,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'getFieldTypeMap' => 
      array (
        'name' => 'getFieldTypeMap',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a mapping of Drupal schema field names to DB-native field types.
 *
 * Because different field types do not map 1:1 between databases, Drupal has
 * its own normalized field type names. This function returns a
 * driver-specific mapping table from Drupal names to the native names for
 * each database.
 *
 * @return array
 *   An array of Schema API field types to driver-specific field types.
 */',
        'startLine' => 298,
        'endLine' => 298,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'renameTable' => 
      array (
        'name' => 'renameTable',
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
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'new_name' => 
          array (
            'name' => 'new_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 48,
            'endColumn' => 56,
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
 * Rename a table.
 *
 * @param string $table
 *   The table to be renamed.
 * @param string $new_name
 *   The new name for the table.
 *
 * @throws \\Drupal\\Core\\Database\\SchemaObjectDoesNotExistException
 *   If the specified table doesn\'t exist.
 * @throws \\Drupal\\Core\\Database\\SchemaObjectExistsException
 *   If a table with the specified new name already exists.
 */',
        'startLine' => 313,
        'endLine' => 313,
        'startColumn' => 3,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'dropTable' => 
      array (
        'name' => 'dropTable',
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
            'startLine' => 325,
            'endLine' => 325,
            'startColumn' => 38,
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
 * Drop a table.
 *
 * @param string $table
 *   The table to be dropped.
 *
 * @return bool
 *   TRUE if the table was successfully dropped, FALSE if there was no table
 *   by that name to begin with.
 */',
        'startLine' => 325,
        'endLine' => 325,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'addField' => 
      array (
        'name' => 'addField',
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
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 37,
            'endColumn' => 42,
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
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'spec' => 
          array (
            'name' => 'spec',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 53,
            'endColumn' => 57,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'keys_new' => 
          array (
            'name' => 'keys_new',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 355,
                'endLine' => 355,
                'startTokenPos' => 1190,
                'startFilePos' => 13404,
                'endTokenPos' => 1191,
                'endFilePos' => 13405,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 60,
            'endColumn' => 73,
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
 * Add a new field to a table.
 *
 * @param string $table
 *   Name of the table to be altered.
 * @param string $field
 *   Name of the field to be added.
 * @param array $spec
 *   The field specification array, as taken from a schema definition.
 *   The specification may also contain the key \'initial\', the newly
 *   created field will be set to the value of the key in all rows.
 *   This is most useful for creating NOT NULL columns with no default
 *   value in existing tables.
 *   Alternatively, the \'initial_from_field\' key may be used, which will
 *   auto-populate the new field with values from the specified field.
 * @param array|null $keys_new
 *   (optional) Keys and indexes specification to be created on the
 *   table along with adding the field. The format is the same as a
 *   table specification but without the \'fields\' element. If you are
 *   adding a type \'serial\' field, you MUST specify at least one key
 *   or index including it in this array. See ::changeField() for more
 *   explanation why.
 *
 * @throws \\Drupal\\Core\\Database\\SchemaObjectDoesNotExistException
 *   If the specified table doesn\'t exist.
 * @throws \\Drupal\\Core\\Database\\SchemaObjectExistsException
 *   If the specified table already has a field by that name.
 */',
        'startLine' => 355,
        'endLine' => 355,
        'startColumn' => 3,
        'endColumn' => 75,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'dropField' => 
      array (
        'name' => 'dropField',
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
            'startLine' => 369,
            'endLine' => 369,
            'startColumn' => 38,
            'endColumn' => 43,
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
            'startLine' => 369,
            'endLine' => 369,
            'startColumn' => 46,
            'endColumn' => 51,
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
 * Drop a field.
 *
 * @param string $table
 *   The table to be altered.
 * @param string $field
 *   The field to be dropped.
 *
 * @return bool
 *   TRUE if the field was successfully dropped, FALSE if there was no field
 *   by that name to begin with.
 */',
        'startLine' => 369,
        'endLine' => 369,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'indexExists' => 
      array (
        'name' => 'indexExists',
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
            'startLine' => 382,
            'endLine' => 382,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 382,
            'endLine' => 382,
            'startColumn' => 48,
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
 * Checks if an index exists in the given table.
 *
 * @param string $table
 *   The name of the table in drupal (no prefixing).
 * @param string $name
 *   The name of the index in drupal (no prefixing).
 *
 * @return bool
 *   TRUE if the given index exists, otherwise FALSE.
 */',
        'startLine' => 382,
        'endLine' => 382,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'addPrimaryKey' => 
      array (
        'name' => 'addPrimaryKey',
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
            'startLine' => 397,
            'endLine' => 397,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fields' => 
          array (
            'name' => 'fields',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 397,
            'endLine' => 397,
            'startColumn' => 50,
            'endColumn' => 56,
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
 * Add a primary key.
 *
 * @param string $table
 *   The table to be altered.
 * @param array $fields
 *   Fields for the primary key.
 *
 * @throws \\Drupal\\Core\\Database\\SchemaObjectDoesNotExistException
 *   If the specified table doesn\'t exist.
 * @throws \\Drupal\\Core\\Database\\SchemaObjectExistsException
 *   If the specified table already has a primary key.
 */',
        'startLine' => 397,
        'endLine' => 397,
        'startColumn' => 3,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'dropPrimaryKey' => 
      array (
        'name' => 'dropPrimaryKey',
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
            'startLine' => 409,
            'endLine' => 409,
            'startColumn' => 43,
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
 * Drop the primary key.
 *
 * @param string $table
 *   The table to be altered.
 *
 * @return bool
 *   TRUE if the primary key was successfully dropped, FALSE if there was no
 *   primary key on this table to begin with.
 */',
        'startLine' => 409,
        'endLine' => 409,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'findPrimaryKeyColumns' => 
      array (
        'name' => 'findPrimaryKeyColumns',
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
            'startLine' => 424,
            'endLine' => 424,
            'startColumn' => 44,
            'endColumn' => 49,
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
 * Finds the primary key columns of a table, from the database.
 *
 * @param string $table
 *   The name of the table.
 *
 * @return string[]|false
 *   A simple array with the names of the columns composing the table\'s
 *   primary key, or FALSE if the table does not exist.
 *
 * @throws \\RuntimeException
 *   If the driver does not override this method.
 */',
        'startLine' => 424,
        'endLine' => 429,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'addUniqueKey' => 
      array (
        'name' => 'addUniqueKey',
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
            'startLine' => 446,
            'endLine' => 446,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 446,
            'endLine' => 446,
            'startColumn' => 49,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'fields' => 
          array (
            'name' => 'fields',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 446,
            'endLine' => 446,
            'startColumn' => 56,
            'endColumn' => 62,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a unique key.
 *
 * @param string $table
 *   The table to be altered.
 * @param string $name
 *   The name of the key.
 * @param array $fields
 *   An array of field names.
 *
 * @throws \\Drupal\\Core\\Database\\SchemaObjectDoesNotExistException
 *   If the specified table doesn\'t exist.
 * @throws \\Drupal\\Core\\Database\\SchemaObjectExistsException
 *   If the specified table already has a key by that name.
 */',
        'startLine' => 446,
        'endLine' => 446,
        'startColumn' => 3,
        'endColumn' => 64,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'dropUniqueKey' => 
      array (
        'name' => 'dropUniqueKey',
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
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 50,
            'endColumn' => 54,
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
 * Drop a unique key.
 *
 * @param string $table
 *   The table to be altered.
 * @param string $name
 *   The name of the key.
 *
 * @return bool
 *   TRUE if the key was successfully dropped, FALSE if there was no key by
 *   that name to begin with.
 */',
        'startLine' => 460,
        'endLine' => 460,
        'startColumn' => 3,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'addIndex' => 
      array (
        'name' => 'addIndex',
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
            'startLine' => 522,
            'endLine' => 522,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 522,
            'endLine' => 522,
            'startColumn' => 45,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'fields' => 
          array (
            'name' => 'fields',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 522,
            'endLine' => 522,
            'startColumn' => 52,
            'endColumn' => 58,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'spec' => 
          array (
            'name' => 'spec',
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
            'startLine' => 522,
            'endLine' => 522,
            'startColumn' => 61,
            'endColumn' => 71,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an index.
 *
 * @param string $table
 *   The table to be altered.
 * @param string $name
 *   The name of the index.
 * @param array $fields
 *   An array of field names or field information; if field information is
 *   passed, it\'s an array whose first element is the field name and whose
 *   second is the maximum length in the index. For example, the following
 *   will use the full length of the `foo` field, but limit the `bar` field to
 *   4 characters:
 *   @code
 *     $fields = [\'foo\', [\'bar\', 4]];
 *   @endcode
 * @param array $spec
 *   The table specification for the table to be altered. This is used in
 *   order to be able to ensure that the index length is not too long.
 *   This schema definition can usually be obtained through hook_schema(), or
 *   in case the table was created by the Entity API, through the schema
 *   handler listed in the entity class definition. For reference, see
 *   SqlContentEntityStorageSchema::getDedicatedTableSchema() and
 *   SqlContentEntityStorageSchema::getSharedTableFieldSchema().
 *
 *   In order to prevent human error, it is recommended to pass in the
 *   complete table specification. However, in the edge case of the complete
 *   table specification not being available, we can pass in a partial table
 *   definition containing only the fields that apply to the index:
 *   @code
 *   $spec = [
 *     // Example partial specification for a table:
 *     \'fields\' => [
 *       \'example_field\' => [
 *         \'description\' => \'An example field\',
 *         \'type\' => \'varchar\',
 *         \'length\' => 32,
 *         \'not null\' => TRUE,
 *         \'default\' => \'\',
 *       ],
 *     ],
 *     \'indexes\' => [
 *       \'table_example_field\' => [\'example_field\'],
 *     ],
 *   ];
 *   @endcode
 *   Note that the above is a partial table definition and that we would
 *   usually pass a complete table definition as obtained through
 *   hook_schema() instead.
 *
 * @see schemaapi
 * @see hook_schema()
 *
 * @throws \\Drupal\\Core\\Database\\SchemaObjectDoesNotExistException
 *   If the specified table doesn\'t exist.
 * @throws \\Drupal\\Core\\Database\\SchemaObjectExistsException
 *   If the specified table already has an index by that name.
 *
 * @todo remove the $spec argument whenever schema introspection is added.
 */',
        'startLine' => 522,
        'endLine' => 522,
        'startColumn' => 3,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'dropIndex' => 
      array (
        'name' => 'dropIndex',
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
            'startLine' => 536,
            'endLine' => 536,
            'startColumn' => 38,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 536,
            'endLine' => 536,
            'startColumn' => 46,
            'endColumn' => 50,
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
 * Drop an index.
 *
 * @param string $table
 *   The table to be altered.
 * @param string $name
 *   The name of the index.
 *
 * @return bool
 *   TRUE if the index was successfully dropped, FALSE if there was no index
 *   by that name to begin with.
 */',
        'startLine' => 536,
        'endLine' => 536,
        'startColumn' => 3,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'introspectIndexSchema' => 
      array (
        'name' => 'introspectIndexSchema',
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
            'startLine' => 554,
            'endLine' => 554,
            'startColumn' => 44,
            'endColumn' => 49,
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
 * Finds the columns for the primary key, unique keys and indexes of a table.
 *
 * @param string $table
 *   The name of the table.
 *
 * phpcs:ignore Drupal.Commenting.FunctionComment.InvalidNoReturn
 * @return array
 *   A schema array with the following keys: \'primary key\', \'unique keys\' and
 *   \'indexes\', and values as arrays of database columns.
 *
 * @throws \\Drupal\\Core\\Database\\SchemaObjectDoesNotExistException
 *   If the specified table doesn\'t exist.
 * @throws \\RuntimeException
 *   If the driver does not implement this method.
 */',
        'startLine' => 554,
        'endLine' => 559,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'changeField' => 
      array (
        'name' => 'changeField',
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
            'startLine' => 628,
            'endLine' => 628,
            'startColumn' => 40,
            'endColumn' => 45,
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
            'startLine' => 628,
            'endLine' => 628,
            'startColumn' => 48,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'field_new' => 
          array (
            'name' => 'field_new',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 628,
            'endLine' => 628,
            'startColumn' => 56,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'spec' => 
          array (
            'name' => 'spec',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 628,
            'endLine' => 628,
            'startColumn' => 68,
            'endColumn' => 72,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'keys_new' => 
          array (
            'name' => 'keys_new',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 628,
                'endLine' => 628,
                'startTokenPos' => 1500,
                'startFilePos' => 23115,
                'endTokenPos' => 1501,
                'endFilePos' => 23116,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 628,
            'endLine' => 628,
            'startColumn' => 75,
            'endColumn' => 88,
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
 * Change a field definition.
 *
 * IMPORTANT NOTE: To maintain database portability, you have to explicitly
 * recreate all indices and primary keys that are using the changed field.
 *
 * That means that you have to drop all affected keys and indexes with
 * Schema::dropPrimaryKey(), Schema::dropUniqueKey(), or Schema::dropIndex()
 * before calling ::changeField().
 * To recreate the keys and indices, pass the key definitions as the
 * optional $keys_new argument directly to ::changeField().
 *
 * For example, suppose you have:
 * @code
 * $schema[\'foo\'] = [
 *   \'fields\' => [
 *     \'bar\' => [\'type\' => \'int\', \'not null\' => TRUE]
 *   ],
 *   \'primary key\' => [\'bar\']
 * ];
 * @endcode
 * and you want to change foo.bar to be type serial, leaving it as the
 * primary key. The correct sequence is:
 * @code
 * $injected_database->schema()->dropPrimaryKey(\'foo\');
 * $injected_database->schema()->changeField(\'foo\', \'bar\', \'bar\',
 *   [\'type\' => \'serial\', \'not null\' => TRUE],
 *   [\'primary key\' => [\'bar\'])];
 * @endcode
 *
 * The reasons for this are due to the different database engines:
 *
 * On PostgreSQL, changing a field definition involves adding a new field and
 * dropping an old one which* causes any indices, primary keys and sequences
 * (from serial-type fields) that use the changed field to be dropped.
 *
 * On MySQL, all type \'serial\' fields must be part of at least one key
 * or index as soon as they are created. You cannot use
 * Schema::addPrimaryKey, Schema::addUniqueKey(), or Schema::addIndex()
 * for this purpose because the ALTER TABLE command will fail to add
 * the column without a key or index specification.
 * The solution is to use the optional $keys_new argument to create the key
 * or index at the same time as field.
 *
 * You could use Schema::addPrimaryKey, Schema::addUniqueKey(), or
 * Schema::addIndex() in all cases unless you are converting a field to
 * be type serial. You can use the $keys_new argument in all cases.
 *
 * @param string $table
 *   Name of the table.
 * @param string $field
 *   Name of the field to change.
 * @param string $field_new
 *   New name for the field (set to the same as $field if you don\'t want to
 *   change the name).
 * @param array $spec
 *   The field specification for the new field.
 * @param array|null $keys_new
 *   (optional) Keys and indexes specification to be created on the
 *   table along with changing the field. The format is the same as a
 *   table specification but without the \'fields\' element.
 *
 * @throws \\Drupal\\Core\\Database\\SchemaObjectDoesNotExistException
 *   If the specified table or source field doesn\'t exist.
 * @throws \\Drupal\\Core\\Database\\SchemaObjectExistsException
 *   If the specified destination field already exists.
 */',
        'startLine' => 628,
        'endLine' => 628,
        'startColumn' => 3,
        'endColumn' => 90,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'createTable' => 
      array (
        'name' => 'createTable',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 643,
            'endLine' => 643,
            'startColumn' => 31,
            'endColumn' => 35,
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
            'startLine' => 643,
            'endLine' => 643,
            'startColumn' => 38,
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
 * Create a new table from a Drupal table definition.
 *
 * @param string $name
 *   The name of the table to create.
 * @param array $table
 *   A Schema API table definition array.
 *
 * @throws \\Drupal\\Core\\Database\\SchemaObjectExistsException
 *   If the specified table already exists.
 * @throws \\BadMethodCallException
 *   When ::createTableSql() is not implemented in the concrete driver class.
 */',
        'startLine' => 643,
        'endLine' => 651,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'createTableSql' => 
      array (
        'name' => 'createTableSql',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 676,
            'endLine' => 676,
            'startColumn' => 37,
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
            'startLine' => 676,
            'endLine' => 676,
            'startColumn' => 44,
            'endColumn' => 49,
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
 * Generate SQL to create a new table from a Drupal schema definition.
 *
 * This method should be implemented in extending classes.
 *
 * @param string $name
 *   The name of the table to create.
 * @param array $table
 *   A Schema API table definition array.
 *
 * phpcs:ignore Drupal.Commenting.FunctionComment.InvalidNoReturn
 * @return array
 *   An array of SQL statements to create the table.
 *
 * @throws \\BadMethodCallException
 *   If the method is not implemented in the concrete driver class.
 *
 * @todo This method is called by Schema::createTable on the abstract class,
 *   and therefore should be defined as well on the abstract class to prevent
 *   static analysis errors. In D11, consider changing it to an abstract
 *   method, or to make it private for each driver, and ::createTable actually
 *   an abstract method here for implementation in each driver.
 */',
        'startLine' => 676,
        'endLine' => 678,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'fieldNames' => 
      array (
        'name' => 'fieldNames',
        'parameters' => 
        array (
          'fields' => 
          array (
            'name' => 'fields',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 692,
            'endLine' => 692,
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
 * Gets an array of field names from an array of key/index column specifiers.
 *
 * This is usually an identity function but if a key/index uses a column
 * prefix specification, this function extracts just the name.
 *
 * @param array $fields
 *   An array of key/index column specifiers.
 *
 * @return array
 *   An array of field names.
 */',
        'startLine' => 692,
        'endLine' => 703,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'prepareComment' => 
      array (
        'name' => 'prepareComment',
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
            'startLine' => 716,
            'endLine' => 716,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 716,
                'endLine' => 716,
                'startTokenPos' => 1721,
                'startFilePos' => 25917,
                'endTokenPos' => 1721,
                'endFilePos' => 25920,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 716,
            'endLine' => 716,
            'startColumn' => 44,
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
 * Prepare a table or column comment for database query.
 *
 * @param string $comment
 *   The comment string to prepare.
 * @param int $length
 *   Optional upper limit on the returned string length.
 *
 * @return string
 *   The prepared comment.
 */',
        'startLine' => 716,
        'endLine' => 720,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'escapeDefaultValue' => 
      array (
        'name' => 'escapeDefaultValue',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 731,
            'endLine' => 731,
            'startColumn' => 41,
            'endColumn' => 46,
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
 * Escapes a value to be used as the default value on a column.
 *
 * @param mixed $value
 *   The value to be escaped (int, float, null or string).
 *
 * @return string|int|float
 *   The escaped value.
 */',
        'startLine' => 731,
        'endLine' => 736,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
        'aliasName' => NULL,
      ),
      'ensureNotNullPrimaryKey' => 
      array (
        'name' => 'ensureNotNullPrimaryKey',
        'parameters' => 
        array (
          'primary_key' => 
          array (
            'name' => 'primary_key',
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
            'startLine' => 751,
            'endLine' => 751,
            'startColumn' => 46,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 751,
            'endLine' => 751,
            'startColumn' => 66,
            'endColumn' => 78,
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
 * Ensures that all the primary key fields are correctly defined.
 *
 * @param array $primary_key
 *   An array containing the fields that will form the primary key of a table.
 * @param array $fields
 *   An array containing the field specifications of the table, as per the
 *   schema data structure format.
 *
 * @throws \\Drupal\\Core\\Database\\SchemaException
 *   Thrown if any primary key field specification does not exist or if they
 *   do not define \'not null\' as TRUE.
 */',
        'startLine' => 751,
        'endLine' => 757,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Database',
        'declaringClassName' => 'Drupal\\Core\\Database\\Schema',
        'implementingClassName' => 'Drupal\\Core\\Database\\Schema',
        'currentClassName' => 'Drupal\\Core\\Database\\Schema',
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