<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/TypedDataInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\TypedData\TypedDataInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-2596e3574d9a0f27794c04f59f2ef7b5c70741fb598ff863a421eb9fa9f61932-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/TypedDataInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\TypedData',
    'name' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
    'shortName' => 'TypedDataInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for typed data objects.
 *
 * @see \\Drupal\\Core\\TypedData\\DataDefinitionInterface
 *
 * @ingroup typed_data
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 163,
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
      'createInstance' => 
      array (
        'name' => 'createInstance',
        'parameters' => 
        array (
          'definition' => 
          array (
            'name' => 'definition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 41,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 32,
                'endLine' => 32,
                'startTokenPos' => 32,
                'startFilePos' => 1079,
                'endTokenPos' => 32,
                'endFilePos' => 1082,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 54,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'parent' => 
          array (
            'name' => 'parent',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 32,
                'endLine' => 32,
                'startTokenPos' => 42,
                'startFilePos' => 1126,
                'endTokenPos' => 42,
                'endFilePos' => 1129,
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
                      'name' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 68,
            'endColumn' => 112,
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
 * Constructs a TypedData object given its definition and context.
 *
 * @param \\Drupal\\Core\\TypedData\\DataDefinitionInterface $definition
 *   The data definition.
 * @param string|null $name
 *   (optional) The name of the created property, or NULL if it is the root
 *   of a typed data tree. Defaults to NULL.
 * @param \\Drupal\\Core\\TypedData\\TraversableTypedDataInterface $parent
 *   (optional) The parent object of the data property, or NULL if it is the
 *   root of a typed data tree. Defaults to NULL.
 *
 * @todo When \\Drupal\\Core\\Config\\TypedConfigManager has been fixed to use
 *   class-based definitions, type-hint $definition to
 *   DataDefinitionInterface. https://www.drupal.org/node/1928868
 *
 * @see \\Drupal\\Core\\TypedData\\TypedDataManager::create()
 */',
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 114,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
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
 * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface
 *   The data definition object.
 */',
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
      'getValue' => 
      array (
        'name' => 'getValue',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the data value.
 *
 * @return mixed
 *   The data value.
 */',
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
      'setValue' => 
      array (
        'name' => 'setValue',
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'notify' => 
          array (
            'name' => 'notify',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 66,
                'endLine' => 66,
                'startTokenPos' => 83,
                'startFilePos' => 2066,
                'endTokenPos' => 83,
                'endFilePos' => 2069,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 36,
            'endColumn' => 49,
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
 * Sets the data value.
 *
 * @param mixed|null $value
 *   The value to set in the format as documented for the data type or NULL to
 *   unset the data value.
 * @param bool $notify
 *   (optional) Whether to notify the parent object of the change. Defaults to
 *   TRUE. If a property is updated from a parent object, set it to FALSE to
 *   avoid being notified again.
 *
 * @throws \\InvalidArgumentException
 *   If the value input is inappropriate.
 * @throws \\Drupal\\Core\\TypedData\\Exception\\ReadOnlyException
 *   If the data is read-only.
 */',
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 3,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
      'getString' => 
      array (
        'name' => 'getString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a string representation of the data.
 *
 * @return string
 *   The string representation of the data.
 */',
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
      'getConstraints' => 
      array (
        'name' => 'getConstraints',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a list of validation constraints.
 *
 * @return array
 *   Array of constraints, each being an instance of
 *   \\Symfony\\Component\\Validator\\Constraint.
 */',
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validates the currently set data value.
 *
 * @return \\Symfony\\Component\\Validator\\ConstraintViolationListInterface
 *   A list of constraint violations. If the list is empty, validation
 *   succeeded.
 */',
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
      'applyDefaultValue' => 
      array (
        'name' => 'applyDefaultValue',
        'parameters' => 
        array (
          'notify' => 
          array (
            'name' => 'notify',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 105,
                'endLine' => 105,
                'startTokenPos' => 132,
                'startFilePos' => 3102,
                'endTokenPos' => 132,
                'endFilePos' => 3105,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 105,
            'endLine' => 105,
            'startColumn' => 37,
            'endColumn' => 50,
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
 * Applies the default value.
 *
 * @param bool $notify
 *   (optional) Whether to notify the parent object of the change. Defaults to
 *   TRUE. If a property is updated from a parent object, set it to FALSE to
 *   avoid being notified again.
 *
 * @return $this
 *   Returns itself to allow for chaining.
 */',
        'startLine' => 105,
        'endLine' => 105,
        'startColumn' => 3,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
      'getName' => 
      array (
        'name' => 'getName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the name of a property or item.
 *
 * @return string|int|null
 *   If the data is a property of some complex data, the name of the property.
 *   If the data is an item of a list, the name is the numeric position of the
 *   item in the list, starting with 0. Otherwise, NULL is returned.
 */',
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
      'getParent' => 
      array (
        'name' => 'getParent',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the parent data structure; i.e. either complex data or a list.
 *
 * @return \\Drupal\\Core\\TypedData\\TraversableTypedDataInterface|null
 *   The parent data structure, either complex data or a list; or NULL if this
 *   is the root of the typed data tree.
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
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
      'getRoot' => 
      array (
        'name' => 'getRoot',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the root of the typed data tree.
 *
 * Returns the root data for a tree of typed data objects; e.g. for an entity
 * field item the root of the tree is its parent entity object.
 *
 * @return \\Drupal\\Core\\TypedData\\TraversableTypedDataInterface
 *   The root data structure, either complex data or a list.
 */',
        'startLine' => 135,
        'endLine' => 135,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
      'getPropertyPath' => 
      array (
        'name' => 'getPropertyPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the property path of the data.
 *
 * The trail of property names relative to the root of the typed data tree,
 * separated by dots; e.g. \'field_text.0.format\'.
 *
 * @return string
 *   The property path relative to the root of the typed tree, or an empty
 *   string if this is the root.
 */',
        'startLine' => 147,
        'endLine' => 147,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'aliasName' => NULL,
      ),
      'setContext' => 
      array (
        'name' => 'setContext',
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
                'startLine' => 161,
                'endLine' => 161,
                'startTokenPos' => 192,
                'startFilePos' => 5103,
                'endTokenPos' => 192,
                'endFilePos' => 5106,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 30,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'parent' => 
          array (
            'name' => 'parent',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 161,
                'endLine' => 161,
                'startTokenPos' => 202,
                'startFilePos' => 5150,
                'endTokenPos' => 202,
                'endFilePos' => 5153,
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
                      'name' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
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
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 44,
            'endColumn' => 88,
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
 * Sets the context of a property or item via a context aware parent.
 *
 * This method is supposed to be called by the factory only.
 *
 * @param string|null $name
 *   (optional) The name of the property or the delta of the list item,
 *   or NULL if it is the root of a typed data tree. Defaults to NULL.
 * @param \\Drupal\\Core\\TypedData\\TraversableTypedDataInterface|null $parent
 *   (optional) The parent object of the data property, or NULL if it is the
 *   root of a typed data tree. Defaults to NULL.
 */',
        'startLine' => 161,
        'endLine' => 161,
        'startColumn' => 3,
        'endColumn' => 90,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
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