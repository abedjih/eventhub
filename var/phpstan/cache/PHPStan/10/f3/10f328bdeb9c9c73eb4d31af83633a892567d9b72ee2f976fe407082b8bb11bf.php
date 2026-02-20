<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/ComplexDataInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\TypedData\ComplexDataInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6c02ec4ba80828fbc73641bc8d66a3722dfdf1fa9d8e7bc5f46cf98014fb9273-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/ComplexDataInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\TypedData',
    'name' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
    'shortName' => 'ComplexDataInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for complex data; i.e. data containing named and typed properties.
 *
 * The name of a property has to be a valid PHP variable name, starting with
 * an alphabetic character.
 *
 * This is implemented by entities as well as by field item classes of
 * entities.
 *
 * When implementing this interface which extends Traversable, make sure to list
 * IteratorAggregate or Iterator before this interface in the implements clause.
 *
 * @see \\Drupal\\Core\\TypedData\\ComplexDataDefinitionInterface
 *
 * @ingroup typed_data
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 105,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
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
 * @return \\Drupal\\Core\\TypedData\\ComplexDataDefinitionInterface
 *   The data definition object describing the complex data.
 */',
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'property_name' => 
          array (
            'name' => 'property_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 23,
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
 * Gets a property object.
 *
 * @param string $property_name
 *   The name of the property to get; e.g., \'title\' or \'name\'.
 *
 * @return \\Drupal\\Core\\TypedData\\TypedDataInterface
 *   The property object.
 *
 * @throws \\InvalidArgumentException
 *   If an invalid property name is given.
 * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
 *   If the complex data structure is unset and no property can be created.
 */',
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'property_name' => 
          array (
            'name' => 'property_name',
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
            'startColumn' => 23,
            'endColumn' => 36,
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 1,
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
                'startTokenPos' => 60,
                'startFilePos' => 2136,
                'endTokenPos' => 60,
                'endFilePos' => 2139,
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
            'startColumn' => 47,
            'endColumn' => 60,
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
 * Sets a property value.
 *
 * @param string $property_name
 *   The name of the property to set; e.g., \'title\' or \'name\'.
 * @param mixed|null $value
 *   The value to set, or NULL to unset the property.
 * @param bool $notify
 *   (optional) Whether to notify the parent object of the change. Defaults to
 *   TRUE. If the update stems from a parent object, set it to FALSE to avoid
 *   being notified again.
 *
 * @return $this
 *
 * @throws \\InvalidArgumentException
 *   If the specified property does not exist.
 * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
 *   If the complex data structure is unset and no property can be set.
 */',
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 3,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'aliasName' => NULL,
      ),
      'getProperties' => 
      array (
        'name' => 'getProperties',
        'parameters' => 
        array (
          'include_computed' => 
          array (
            'name' => 'include_computed',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 81,
                'endLine' => 81,
                'startTokenPos' => 76,
                'startFilePos' => 2680,
                'endTokenPos' => 76,
                'endFilePos' => 2684,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 81,
            'endLine' => 81,
            'startColumn' => 33,
            'endColumn' => 57,
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
 * Gets an array of property objects.
 *
 * @param bool $include_computed
 *   If set to TRUE, computed properties are included. Defaults to FALSE.
 *
 * @return \\Drupal\\Core\\TypedData\\TypedDataInterface[]
 *   An array of property objects implementing the TypedDataInterface, keyed
 *   by property name.
 *
 * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
 *   If the complex data structure is unset and no property can be created.
 */',
        'startLine' => 81,
        'endLine' => 81,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'aliasName' => NULL,
      ),
      'toArray' => 
      array (
        'name' => 'toArray',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns an array of all property values.
 *
 * Gets an array of plain property values including all not-computed
 * properties.
 *
 * @return array
 *   An array of property values, keyed by property name.
 *
 * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
 *   If the complex data structure is unset and no property can be created.
 */',
        'startLine' => 95,
        'endLine' => 95,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
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
 * Determines whether the data structure is empty.
 *
 * @return bool
 *   TRUE if the data structure is empty, FALSE otherwise.
 */',
        'startLine' => 103,
        'endLine' => 103,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
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