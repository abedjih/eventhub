<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/ListInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\TypedData\ListInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ab6bfb29dacb0ce5050c6a7474fbd9d8a83f3b8d65bd02a8f7b0688b13149fcd-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\TypedData\\ListInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/ListInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\TypedData',
    'name' => 'Drupal\\Core\\TypedData\\ListInterface',
    'shortName' => 'ListInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for a list of typed data.
 *
 * A list of typed data contains only items of the same type, is ordered and may
 * contain duplicates. Note that the data type of a list is always \'list\'.
 *
 * When implementing this interface which extends Traversable, make sure to list
 * IteratorAggregate or Iterator before this interface in the implements clause.
 *
 * @template T of \\Drupal\\Core\\TypedData\\TypedDataInterface
 * @extends \\Drupal\\Core\\TypedData\\TraversableTypedDataInterface<int, T>
 * @extends \\ArrayAccess<int, T>
 *
 * @see \\Drupal\\Core\\TypedData\\ListDataDefinitionInterface
 *
 * @ingroup typed_data
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 147,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
      1 => 'ArrayAccess',
      2 => 'Countable',
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
      'getDataDefinition' => 
      array (
        'name' => 'getDataDefinition',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the data definition.
 *
 * @return \\Drupal\\Core\\TypedData\\ListDataDefinitionInterface
 *   The data definition object describing the list.
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'aliasName' => NULL,
      ),
      'isEmpty' => 
      array (
        'name' => 'isEmpty',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines whether the list contains any non-empty items.
 *
 * @return bool
 *   TRUE if the list is empty, FALSE otherwise.
 */',
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'aliasName' => NULL,
      ),
      'getItemDefinition' => 
      array (
        'name' => 'getItemDefinition',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the definition of a contained item.
 *
 * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface
 *   The data definition of contained items.
 */',
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 23,
            'endColumn' => 28,
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
 * Returns the item at the specified position in this list.
 *
 * @param int $index
 *   Index of the item to return.
 *
 * @return \\Drupal\\Core\\TypedData\\TypedDataInterface|null
 *   The item at the specified position in this list, or NULL if no item
 *   exists at that position.
 *
 * @phpstan-return ?T
 *
 * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
 *   If the complex data structure is unset and no item can be created.
 */',
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 23,
            'endColumn' => 28,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 31,
            'endColumn' => 36,
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
 * Sets the value of the item at a given position in the list.
 *
 * @param int $index
 *   The position of the item in the list. Since a List only contains
 *   sequential, 0-based indexes, $index has to be:
 *   - Either the position of an existing item in the list. This updates the
 *   item value.
 *   - Or the next available position in the sequence of the current list
 *   indexes. This appends a new item with the provided value at the end of
 *   the list.
 * @param mixed $value
 *   The value of the item to be stored at the specified position.
 *
 * @return $this
 *
 * @throws \\InvalidArgumentException
 *   If the $index is invalid (non-numeric, or pointing to an invalid
 *   position in the list).
 * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
 *   If the complex data structure is unset and no item can be set.
 */',
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'aliasName' => NULL,
      ),
      'first' => 
      array (
        'name' => 'first',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the first item in this list.
 *
 * @return \\Drupal\\Core\\TypedData\\TypedDataInterface|null
 *   The first item in this list, or NULL if there are no items.
 *
 * @phpstan-return ?T
 *
 * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
 *   If the complex data structure is unset and no item can be created.
 */',
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 3,
        'endColumn' => 26,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'aliasName' => NULL,
      ),
      'last' => 
      array (
        'name' => 'last',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the last item in this list.
 *
 * @return \\Drupal\\Core\\TypedData\\TypedDataInterface|null
 *   The last item in this list, or NULL if there are no items.
 *
 * @phpstan-return ?T
 */',
        'startLine' => 110,
        'endLine' => 110,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'aliasName' => NULL,
      ),
      'appendItem' => 
      array (
        'name' => 'appendItem',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 123,
                'endLine' => 123,
                'startTokenPos' => 123,
                'startFilePos' => 3738,
                'endTokenPos' => 123,
                'endFilePos' => 3741,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 30,
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
 * Appends a new item to the list.
 *
 * @param mixed $value
 *   The value of the new item.
 *
 * @return \\Drupal\\Core\\TypedData\\TypedDataInterface
 *   The item that was appended.
 *
 * @phpstan-return T
 */',
        'startLine' => 123,
        'endLine' => 123,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'aliasName' => NULL,
      ),
      'removeItem' => 
      array (
        'name' => 'removeItem',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 133,
            'endLine' => 133,
            'startColumn' => 30,
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
 * Removes the item at the specified position.
 *
 * @param int $index
 *   Index of the item to remove.
 *
 * @return $this
 */',
        'startLine' => 133,
        'endLine' => 133,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'aliasName' => NULL,
      ),
      'filter' => 
      array (
        'name' => 'filter',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 26,
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
 * Filters the items in the list using a custom callback.
 *
 * @param callable $callback
 *   The callback to use for filtering. Like with array_filter(), the
 *   callback is called for each item in the list. Only items for which the
 *   callback returns TRUE are preserved.
 *
 * @return $this
 */',
        'startLine' => 145,
        'endLine' => 145,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListInterface',
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