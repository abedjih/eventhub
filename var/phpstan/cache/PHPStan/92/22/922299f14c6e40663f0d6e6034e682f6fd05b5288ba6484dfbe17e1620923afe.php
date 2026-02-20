<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/ListDataDefinition.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\TypedData\ListDataDefinition
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-02ec9113cf36a34949a414636b22f1ff9b8a31f2da408ac8b7b0aaf636de87a9-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/ListDataDefinition.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\TypedData',
    'name' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
    'shortName' => 'ListDataDefinition',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A typed data definition class for defining lists.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 118,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'itemDefinition' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'name' => 'itemDefinition',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The data definition of a list item.
 *
 * @var \\Drupal\\Core\\TypedData\\DataDefinitionInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 3,
        'endColumn' => 28,
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
      'create' => 
      array (
        'name' => 'create',
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
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 33,
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
 * Creates a new list definition.
 *
 * @param string $item_type
 *   The data type of the list items; e.g., \'string\', \'integer\' or \'any\'.
 *
 * @return static
 *   A new List Data Definition object.
 */',
        'startLine' => 26,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'aliasName' => NULL,
      ),
      'createFromDataType' => 
      array (
        'name' => 'createFromDataType',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 45,
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
 * {@inheritdoc}
 */',
        'startLine' => 33,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'aliasName' => NULL,
      ),
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
            'startLine' => 43,
            'endLine' => 43,
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
 * {@inheritdoc}
 */',
        'startLine' => 43,
        'endLine' => 45,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'aliasName' => NULL,
      ),
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 50,
                'endLine' => 50,
                'startTokenPos' => 161,
                'startFilePos' => 1221,
                'endTokenPos' => 162,
                'endFilePos' => 1222,
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
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 31,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'item_definition' => 
          array (
            'name' => 'item_definition',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 50,
                'endLine' => 50,
                'startTokenPos' => 172,
                'startFilePos' => 1269,
                'endTokenPos' => 172,
                'endFilePos' => 1272,
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
                      'name' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 51,
            'endColumn' => 98,
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
 * {@inheritdoc}
 */',
        'startLine' => 50,
        'endLine' => 53,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'aliasName' => NULL,
      ),
      'getDataType' => 
      array (
        'name' => 'getDataType',
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
        'startLine' => 58,
        'endLine' => 60,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'aliasName' => NULL,
      ),
      'setDataType' => 
      array (
        'name' => 'setDataType',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 31,
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
 * {@inheritdoc}
 */',
        'startLine' => 65,
        'endLine' => 69,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'aliasName' => NULL,
      ),
      'getClass' => 
      array (
        'name' => 'getClass',
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
        'startLine' => 74,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
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
 * {@inheritdoc}
 */',
        'startLine' => 92,
        'endLine' => 94,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'aliasName' => NULL,
      ),
      'setItemDefinition' => 
      array (
        'name' => 'setItemDefinition',
        'parameters' => 
        array (
          'definition' => 
          array (
            'name' => 'definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 104,
            'endLine' => 104,
            'startColumn' => 37,
            'endColumn' => 71,
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
 * Sets the item definition.
 *
 * @param \\Drupal\\Core\\TypedData\\DataDefinitionInterface $definition
 *   A list item\'s data definition.
 *
 * @return $this
 */',
        'startLine' => 104,
        'endLine' => 107,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
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
 * Magic method: Implements a deep clone.
 */',
        'startLine' => 112,
        'endLine' => 116,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
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