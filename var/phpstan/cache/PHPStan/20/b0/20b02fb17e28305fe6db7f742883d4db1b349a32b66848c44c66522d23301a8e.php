<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/DataDefinition.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\TypedData\DataDefinition
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-137cf28e4b1776badf1c943ada187dc33b8e05f869d7082eb8f892570c226b8d-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/DataDefinition.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\TypedData',
    'name' => 'Drupal\\Core\\TypedData\\DataDefinition',
    'shortName' => 'DataDefinition',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A typed data definition class for defining data based on defined data types.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 406,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
      1 => 'ArrayAccess',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\TypedData\\TypedDataTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'definition' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'name' => 'definition',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 35,
            'startFilePos' => 339,
            'endTokenPos' => 36,
            'endFilePos' => 340,
          ),
        ),
        'docComment' => '/**
 * The array holding values for all definition keys.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 3,
        'endColumn' => 29,
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
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 33,
            'endColumn' => 37,
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
 * Creates a new data definition.
 *
 * @param string $type
 *   The data type of the data; e.g., \'string\', \'integer\' or \'any\'.
 *
 * @return static
 *   A new DataDefinition object.
 */',
        'startLine' => 28,
        'endLine' => 31,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
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
            'startLine' => 36,
            'endLine' => 36,
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
        'startLine' => 36,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
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
                'startLine' => 46,
                'endLine' => 46,
                'startTokenPos' => 117,
                'startFilePos' => 1005,
                'endTokenPos' => 118,
                'endFilePos' => 1006,
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
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 31,
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
 * Constructs a new data definition object.
 *
 * @param array $values
 *   (optional) If given, an array of initial values to set on the definition.
 */',
        'startLine' => 46,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
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
        'startLine' => 53,
        'endLine' => 55,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
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
            'startLine' => 66,
            'endLine' => 66,
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
 * Sets the data type.
 *
 * @param string $type
 *   The data type to set.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 66,
        'endLine' => 69,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'getLabel' => 
      array (
        'name' => 'getLabel',
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
        'endLine' => 76,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'setLabel' => 
      array (
        'name' => 'setLabel',
        'parameters' => 
        array (
          'label' => 
          array (
            'name' => 'label',
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
            'startColumn' => 28,
            'endColumn' => 33,
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
 * Sets the human-readable label.
 *
 * @param string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup $label
 *   The label to set.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 87,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'getDescription' => 
      array (
        'name' => 'getDescription',
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
        'startLine' => 95,
        'endLine' => 97,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'setDescription' => 
      array (
        'name' => 'setDescription',
        'parameters' => 
        array (
          'description' => 
          array (
            'name' => 'description',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 34,
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
 * Sets the human-readable description.
 *
 * @param string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup $description
 *   The description to set.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 108,
        'endLine' => 111,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'isList' => 
      array (
        'name' => 'isList',
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
        'startLine' => 116,
        'endLine' => 118,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'isReadOnly' => 
      array (
        'name' => 'isReadOnly',
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
        'startLine' => 123,
        'endLine' => 129,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'setReadOnly' => 
      array (
        'name' => 'setReadOnly',
        'parameters' => 
        array (
          'read_only' => 
          array (
            'name' => 'read_only',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 31,
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
 * Sets whether the data is read-only.
 *
 * @param bool $read_only
 *   Whether the data is read-only.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 140,
        'endLine' => 143,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'isComputed' => 
      array (
        'name' => 'isComputed',
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
        'startLine' => 148,
        'endLine' => 150,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'setComputed' => 
      array (
        'name' => 'setComputed',
        'parameters' => 
        array (
          'computed' => 
          array (
            'name' => 'computed',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 161,
            'endLine' => 161,
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
 * Sets whether the data is computed.
 *
 * @param bool $computed
 *   Whether the data is computed.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 161,
        'endLine' => 164,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'isRequired' => 
      array (
        'name' => 'isRequired',
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
        'startLine' => 169,
        'endLine' => 171,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'setRequired' => 
      array (
        'name' => 'setRequired',
        'parameters' => 
        array (
          'required' => 
          array (
            'name' => 'required',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 182,
            'endLine' => 182,
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
 * Sets whether the data is required.
 *
 * @param bool $required
 *   Whether the data is required.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 182,
        'endLine' => 185,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
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
        'startLine' => 190,
        'endLine' => 198,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'setClass' => 
      array (
        'name' => 'setClass',
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
            'startLine' => 209,
            'endLine' => 209,
            'startColumn' => 28,
            'endColumn' => 33,
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
 * Sets the class used for creating the typed data object.
 *
 * @param string|null $class
 *   The class to use.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 209,
        'endLine' => 212,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'getSettings' => 
      array (
        'name' => 'getSettings',
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
        'startLine' => 217,
        'endLine' => 219,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'setSettings' => 
      array (
        'name' => 'setSettings',
        'parameters' => 
        array (
          'settings' => 
          array (
            'name' => 'settings',
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
            'startLine' => 230,
            'endLine' => 230,
            'startColumn' => 31,
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
 * Sets the array of settings, as required by the used class.
 *
 * @param array $settings
 *   The array of settings.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 230,
        'endLine' => 233,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'getSetting' => 
      array (
        'name' => 'getSetting',
        'parameters' => 
        array (
          'setting_name' => 
          array (
            'name' => 'setting_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 238,
            'endLine' => 238,
            'startColumn' => 30,
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
 * {@inheritdoc}
 */',
        'startLine' => 238,
        'endLine' => 240,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'setSetting' => 
      array (
        'name' => 'setSetting',
        'parameters' => 
        array (
          'setting_name' => 
          array (
            'name' => 'setting_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 253,
            'endLine' => 253,
            'startColumn' => 30,
            'endColumn' => 42,
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
            'startLine' => 253,
            'endLine' => 253,
            'startColumn' => 45,
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
 * Sets a definition setting.
 *
 * @param string $setting_name
 *   The definition setting to set.
 * @param mixed $value
 *   The value to set.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 253,
        'endLine' => 256,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
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
 * {@inheritdoc}
 */',
        'startLine' => 261,
        'endLine' => 278,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'getConstraint' => 
      array (
        'name' => 'getConstraint',
        'parameters' => 
        array (
          'constraint_name' => 
          array (
            'name' => 'constraint_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 283,
            'endLine' => 283,
            'startColumn' => 33,
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
 * {@inheritdoc}
 */',
        'startLine' => 283,
        'endLine' => 286,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'setConstraints' => 
      array (
        'name' => 'setConstraints',
        'parameters' => 
        array (
          'constraints' => 
          array (
            'name' => 'constraints',
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
            'startLine' => 298,
            'endLine' => 298,
            'startColumn' => 34,
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
 * Sets an array of validation constraints.
 *
 * @param array $constraints
 *   An array of validation constraint definitions, keyed by constraint name.
 *   Each constraint definition can be used for instantiating
 *   \\Symfony\\Component\\Validator\\Constraint objects.
 *
 * @return $this
 */',
        'startLine' => 298,
        'endLine' => 301,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'addConstraint' => 
      array (
        'name' => 'addConstraint',
        'parameters' => 
        array (
          'constraint_name' => 
          array (
            'name' => 'constraint_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 306,
                'endLine' => 306,
                'startTokenPos' => 1009,
                'startFilePos' => 7265,
                'endTokenPos' => 1009,
                'endFilePos' => 7268,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 51,
            'endColumn' => 65,
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
        'startLine' => 306,
        'endLine' => 309,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'offsetExists' => 
      array (
        'name' => 'offsetExists',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 318,
            'endLine' => 318,
            'startColumn' => 32,
            'endColumn' => 38,
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
 * {@inheritdoc}
 *
 * This is for BC support only.
 *
 * @todo Remove in https://www.drupal.org/node/1928868.
 */',
        'startLine' => 318,
        'endLine' => 322,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'offsetGet' => 
      array (
        'name' => 'offsetGet',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => true,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 *
 * This is for BC support only.
 *
 * @todo Remove in https://www.drupal.org/node/1928868.
 */',
        'startLine' => 331,
        'endLine' => 336,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'offsetSet' => 
      array (
        'name' => 'offsetSet',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 345,
            'endLine' => 345,
            'startColumn' => 29,
            'endColumn' => 35,
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
            'startLine' => 345,
            'endLine' => 345,
            'startColumn' => 38,
            'endColumn' => 43,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 *
 * This is for BC support only.
 *
 * @todo Remove in https://www.drupal.org/node/1928868.
 */',
        'startLine' => 345,
        'endLine' => 347,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'offsetUnset' => 
      array (
        'name' => 'offsetUnset',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 356,
            'endLine' => 356,
            'startColumn' => 31,
            'endColumn' => 37,
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
 * {@inheritdoc}
 *
 * This is for BC support only.
 *
 * @todo Remove in https://www.drupal.org/node/1928868.
 */',
        'startLine' => 356,
        'endLine' => 358,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
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
 * Returns all definition values as array.
 *
 * @return array
 *   The array holding values for all definition keys.
 */',
        'startLine' => 366,
        'endLine' => 368,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
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
 * {@inheritdoc}
 */',
        'startLine' => 373,
        'endLine' => 378,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'isInternal' => 
      array (
        'name' => 'isInternal',
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
        'startLine' => 383,
        'endLine' => 389,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'aliasName' => NULL,
      ),
      'setInternal' => 
      array (
        'name' => 'setInternal',
        'parameters' => 
        array (
          'internal' => 
          array (
            'name' => 'internal',
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
 * Sets the whether the data value should be internal.
 *
 * @param bool $internal
 *   Whether the data value should be internal.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\TypedData\\DataDefinitionInterface::isInternal
 */',
        'startLine' => 401,
        'endLine' => 404,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinition',
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