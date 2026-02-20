<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/ListDataDefinitionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\TypedData\ListDataDefinitionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8b49297b4710ac7f4559317bebf124bf98cd913667c13e0ccffb63e9a3284923-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/ListDataDefinitionInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\TypedData',
    'name' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
    'shortName' => 'ListDataDefinitionInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for data definitions of lists.
 *
 * This interface is present on a data definition if it describes a list. The
 * actual lists implement the \\Drupal\\Core\\TypedData\\ListInterface.
 *
 * @see \\Drupal\\Core\\TypedData\\ListDefinition
 * @see \\Drupal\\Core\\TypedData\\ListInterface
 *
 * @ingroup typed_data
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 49,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
      'createFromItemType' => 
      array (
        'name' => 'createFromItemType',
        'parameters' => 
        array (
          'item_type' => 
          array (
            'name' => 'item_type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 45,
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
 * Creates a new list data definition for items of the given data type.
 *
 * This method is typically used by
 * \\Drupal\\Core\\TypedData\\TypedDataManager::createListDataDefinition() to
 * build a definition object for an arbitrary item type. When the definition
 * class is known, it is recommended to directly use the static create()
 * method on that class instead; e.g.:
 * @code
 *   $list_definition = \\Drupal\\Core\\TypedData\\ListDataDefinition::create(\'string\');
 * @endcode
 *
 * @param string $item_type
 *   The item type, for which a list data definition should be created.
 *
 * @return static
 *
 * @throws \\InvalidArgumentException
 *   If an unsupported data type gets passed to the class; e.g., \'string\' to a
 *   definition class handling lists of \'field_item:* data types.
 */',
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 3,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
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
 * Gets the data definition of an item of the list.
 *
 * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface
 *   A data definition describing the list items.
 */',
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
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