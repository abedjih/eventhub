<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/AlterableInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Query\AlterableInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-7dc963a7a18cd8fa376a7fbbf47e5b572a397f11afd773b0001abe4ac6a599f3-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/AlterableInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database\\Query',
    'name' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
    'shortName' => 'AlterableInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for a query that can be manipulated via an alter hook.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 103,
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
            'startLine' => 25,
            'endLine' => 25,
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
 * Adds a tag to a query.
 *
 * Tags are strings that identify a query. A query may have any number of
 * tags. Tags are used to mark a query so that alter hooks may decide if they
 * wish to take action. Tags should be all lower-case and contain only
 * letters, numbers, and underscore, and start with a letter. That is, they
 * should follow the same rules as PHP identifiers in general.
 *
 * @param string $tag
 *   The tag to add.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
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
            'startLine' => 36,
            'endLine' => 36,
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
 * Determines if a given query has a given tag.
 *
 * @param string $tag
 *   The tag to check.
 *
 * @return bool
 *   TRUE if this query has been marked with this tag, FALSE otherwise.
 */',
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
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
 * Determines if a given query has all specified tags.
 *
 * Each tag to check should be supplied as a separate argument.
 *
 * phpcs:ignore
 * @param string ...$tags
 *   A variable number of arguments, one for each tag to check.
 *
 * @return bool
 *   TRUE if this query has been marked with all specified tags, FALSE
 *   otherwise.
 *
 * @todo Remove PHPCS ignore and uncomment new method parameters before
 *   drupal:12.0.0. See https://www.drupal.org/project/drupal/issues/3501046.
 */',
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 3,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
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
 * Determines if a given query has any specified tag.
 *
 * Each tag to check should be supplied as a separate argument.
 *
 * phpcs:ignore
 * @param string ...$tags
 *   A variable number of arguments, one for each tag to check.
 *
 * @return bool
 *   TRUE if this query has been marked with at least one of the specified
 *   tags, FALSE otherwise.
 *
 * @todo Remove PHPCS ignore and uncomment new method parameters before
 *   drupal:12.0.0. See https://www.drupal.org/project/drupal/issues/3501046.
 */',
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
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
            'startLine' => 90,
            'endLine' => 90,
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
            'startLine' => 90,
            'endLine' => 90,
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
 * Adds additional metadata to the query.
 *
 * Often, a query may need to provide additional contextual data to alter
 * hooks. Alter hooks may then use that information to decide if and how
 * to take action.
 *
 * @param string $key
 *   The unique identifier for this piece of metadata. Must be a string that
 *   follows the same rules as any other PHP identifier.
 * @param mixed $object
 *   The additional data to add to the query. May be any valid PHP variable.
 *
 * @return $this
 *   The called object.
 */',
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
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
            'startLine' => 101,
            'endLine' => 101,
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
 * Retrieves a given piece of metadata.
 *
 * @param string $key
 *   The unique identifier for the piece of metadata to retrieve.
 *
 * @return mixed
 *   The previously attached metadata object, or NULL if one doesn\'t exist.
 */',
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
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