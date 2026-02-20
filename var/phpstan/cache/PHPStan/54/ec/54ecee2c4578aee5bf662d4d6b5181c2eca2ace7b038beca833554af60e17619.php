<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/BaseFieldDefinition.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Field\BaseFieldDefinition
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a76c2750105ebd0e4886a43925f3abc5afc397bf21bd22f43229d3b1b69170ab-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/BaseFieldDefinition.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Field',
    'name' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
    'shortName' => 'BaseFieldDefinition',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A class for defining entity fields.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 842,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\TypedData\\ListDataDefinition',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
      1 => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
      2 => 'Drupal\\Core\\Field\\RequiredFieldStorageDefinitionInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Cache\\UnchangingCacheableDependencyTrait',
      1 => 'Drupal\\Core\\Field\\FieldInputValueNormalizerTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'type' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'name' => 'type',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The field type.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 3,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'propertyDefinitions' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'name' => 'propertyDefinitions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * An array of field property definitions.
 *
 * @var \\Drupal\\Core\\TypedData\\DataDefinitionInterface[]
 *
 * @see \\Drupal\\Core\\TypedData\\ComplexDataDefinitionInterface::getPropertyDefinitions()
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 3,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'schema' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'name' => 'schema',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The field schema.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 3,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'indexes' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'name' => 'indexes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 46,
            'endLine' => 46,
            'startTokenPos' => 98,
            'startFilePos' => 1097,
            'endTokenPos' => 99,
            'endFilePos' => 1098,
          ),
        ),
        'docComment' => '/**
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 3,
        'endColumn' => 26,
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
            'startLine' => 57,
            'endLine' => 57,
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
 * Creates a new field definition.
 *
 * @param string $type
 *   The type of the field.
 *
 * @return static
 *   A new field definition object.
 */',
        'startLine' => 57,
        'endLine' => 67,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'createFromFieldStorageDefinition' => 
      array (
        'name' => 'createFromFieldStorageDefinition',
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
                'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 59,
            'endColumn' => 101,
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
 * Creates a new field definition based upon a field storage definition.
 *
 * In cases where one needs a field storage definitions to act like full
 * field definitions, this creates a new field definition based upon the
 * (limited) information available. That way it is possible to use the field
 * definition in places where a full field definition is required; e.g., with
 * widgets or formatters.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $definition
 *   The field storage definition to base the new field definition upon.
 *
 * @return $this
 */',
        'startLine' => 83,
        'endLine' => 96,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
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
            'startLine' => 101,
            'endLine' => 101,
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
        'startLine' => 101,
        'endLine' => 105,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
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
 * {@inheritdoc}
 */',
        'startLine' => 110,
        'endLine' => 112,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setName' => 
      array (
        'name' => 'setName',
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
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 27,
            'endColumn' => 31,
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
 * Sets the field name.
 *
 * @param string $name
 *   The field name to set.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 123,
        'endLine' => 126,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getType' => 
      array (
        'name' => 'getType',
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
        'startLine' => 131,
        'endLine' => 133,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
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
        'startLine' => 138,
        'endLine' => 140,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
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
            'startLine' => 167,
            'endLine' => 167,
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
 * {@inheritdoc}
 *
 * Note that the method does not unset existing settings not specified in the
 * incoming $settings array.
 *
 * For example:
 * @code
 *   // Given these are the default settings.
 *   $field_definition->getSettings() === [
 *     \'fruit\' => \'apple\',
 *     \'season\' => \'summer\',
 *   ];
 *   // Change only the \'fruit\' setting.
 *   $field_definition->setSettings([\'fruit\' => \'banana\']);
 *   // The \'season\' setting persists unchanged.
 *   $field_definition->getSettings() === [
 *     \'fruit\' => \'banana\',
 *     \'season\' => \'summer\',
 *   ];
 * @endcode
 *
 * For clarity, it is preferred to use setSetting() if not all available
 * settings are supplied.
 */',
        'startLine' => 167,
        'endLine' => 174,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
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
            'startLine' => 179,
            'endLine' => 179,
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
        'startLine' => 179,
        'endLine' => 181,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
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
            'startLine' => 186,
            'endLine' => 186,
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
            'startLine' => 186,
            'endLine' => 186,
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
 * {@inheritdoc}
 */',
        'startLine' => 186,
        'endLine' => 189,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getProvider' => 
      array (
        'name' => 'getProvider',
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
        'startLine' => 194,
        'endLine' => 196,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setProvider' => 
      array (
        'name' => 'setProvider',
        'parameters' => 
        array (
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 206,
            'endLine' => 206,
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
 * Sets the name of the provider of this field.
 *
 * @param string $provider
 *   The provider name to set.
 *
 * @return $this
 */',
        'startLine' => 206,
        'endLine' => 209,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'isTranslatable' => 
      array (
        'name' => 'isTranslatable',
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
        'startLine' => 214,
        'endLine' => 216,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setTranslatable' => 
      array (
        'name' => 'setTranslatable',
        'parameters' => 
        array (
          'translatable' => 
          array (
            'name' => 'translatable',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 227,
            'endLine' => 227,
            'startColumn' => 35,
            'endColumn' => 47,
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
 * Sets whether the field is translatable.
 *
 * @param bool $translatable
 *   Whether the field is translatable.
 *
 * @return $this
 *   The object itself for chaining.
 */',
        'startLine' => 227,
        'endLine' => 230,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'isRevisionable' => 
      array (
        'name' => 'isRevisionable',
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
        'startLine' => 235,
        'endLine' => 239,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setRevisionable' => 
      array (
        'name' => 'setRevisionable',
        'parameters' => 
        array (
          'revisionable' => 
          array (
            'name' => 'revisionable',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 250,
            'endLine' => 250,
            'startColumn' => 35,
            'endColumn' => 47,
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
 * Sets whether the field is revisionable.
 *
 * @param bool $revisionable
 *   Whether the field is revisionable.
 *
 * @return $this
 *   The object itself for chaining.
 */',
        'startLine' => 250,
        'endLine' => 253,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getCardinality' => 
      array (
        'name' => 'getCardinality',
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
        'startLine' => 258,
        'endLine' => 261,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setCardinality' => 
      array (
        'name' => 'setCardinality',
        'parameters' => 
        array (
          'cardinality' => 
          array (
            'name' => 'cardinality',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 278,
            'endLine' => 278,
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
 * Sets the maximum number of items allowed for the field.
 *
 * Possible values are positive integers or
 * FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED.
 *
 * Note that if the entity type that this base field is attached to is
 * revisionable and the field has a cardinality higher than 1, the field is
 * considered revisionable by default.
 *
 * @param int $cardinality
 *   The field cardinality.
 *
 * @return $this
 */',
        'startLine' => 278,
        'endLine' => 281,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'isMultiple' => 
      array (
        'name' => 'isMultiple',
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
        'startLine' => 286,
        'endLine' => 289,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setPropertyConstraints' => 
      array (
        'name' => 'setPropertyConstraints',
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
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 42,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 49,
            'endColumn' => 66,
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
 * Sets constraints for a given field item property.
 *
 * Note: this overwrites any existing property constraints. If you need to
 * add to the existing constraints, use
 * \\Drupal\\Core\\Field\\BaseFieldDefinition::addPropertyConstraints()
 *
 * @param string $name
 *   The name of the property to set constraints for.
 * @param array $constraints
 *   The constraints to set.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 306,
        'endLine' => 311,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'addPropertyConstraints' => 
      array (
        'name' => 'addPropertyConstraints',
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
            'startLine' => 345,
            'endLine' => 345,
            'startColumn' => 42,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 345,
            'endLine' => 345,
            'startColumn' => 49,
            'endColumn' => 66,
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
 * Adds constraints for a given field item property.
 *
 * Adds a constraint to a property of a base field item. e.g.
 * @code
 * // Limit the field item\'s value property to the range 0 through 10.
 * // e.g. $node->size->value.
 * $field->addPropertyConstraints(\'value\', [
 *   \'Range\' => [
 *     \'min\' => 0,
 *     \'max\' => 10,
 *   ]
 * ]);
 * @endcode
 *
 * If you want to add a validation constraint that applies to the
 * \\Drupal\\Core\\Field\\FieldItemList, use BaseFieldDefinition::addConstraint()
 * instead.
 *
 * Note: passing a new set of options for an existing property constraint will
 * overwrite with the new options.
 *
 * @param string $name
 *   The name of the property to set constraints for.
 * @param array $constraints
 *   The constraints to set.
 *
 * @return static
 *   The object itself for chaining.
 *
 * @see \\Drupal\\Core\\Field\\BaseFieldDefinition::addConstraint()
 */',
        'startLine' => 345,
        'endLine' => 356,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setDisplayOptions' => 
      array (
        'name' => 'setDisplayOptions',
        'parameters' => 
        array (
          'display_context' => 
          array (
            'name' => 'display_context',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 37,
            'endColumn' => 52,
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
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 55,
            'endColumn' => 68,
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
 * Sets the display options for the field in forms or rendered entities.
 *
 * This enables generic rendering of the field with widgets / formatters,
 * including automated support for "In place editing", and with optional
 * configurability in the "Manage display" / "Manage form display" UI screens.
 *
 * Unless this method is called, the field remains invisible (or requires
 * ad-hoc rendering logic).
 *
 * @param string $display_context
 *   The display context. Either \'view\' or \'form\'.
 * @param array $options
 *   An array of display options. Refer to
 *   \\Drupal\\Core\\Field\\FieldDefinitionInterface::getDisplayOptions() for
 *   a list of supported keys. The options should include at least a \'weight\',
 *   or specify \'region\' = \'hidden\'. The \'default_widget\' /
 *   \'default_formatter\' for the field type will be used if no \'type\' is
 *   specified.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 381,
        'endLine' => 384,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setDisplayConfigurable' => 
      array (
        'name' => 'setDisplayConfigurable',
        'parameters' => 
        array (
          'display_context' => 
          array (
            'name' => 'display_context',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 399,
            'endLine' => 399,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'configurable' => 
          array (
            'name' => 'configurable',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 399,
            'endLine' => 399,
            'startColumn' => 60,
            'endColumn' => 72,
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
 * Sets whether the display for the field can be configured.
 *
 * @param string $display_context
 *   The display context. Either \'view\' or \'form\'.
 * @param bool $configurable
 *   Whether the display options can be configured (e.g., via the "Manage
 *   display" / "Manage form display" UI screens). If TRUE, the options
 *   specified via getDisplayOptions() act as defaults.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 399,
        'endLine' => 406,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getDisplayOptions' => 
      array (
        'name' => 'getDisplayOptions',
        'parameters' => 
        array (
          'display_context' => 
          array (
            'name' => 'display_context',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 411,
            'endLine' => 411,
            'startColumn' => 37,
            'endColumn' => 52,
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
        'startLine' => 411,
        'endLine' => 413,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'isDisplayConfigurable' => 
      array (
        'name' => 'isDisplayConfigurable',
        'parameters' => 
        array (
          'display_context' => 
          array (
            'name' => 'display_context',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 418,
            'endLine' => 418,
            'startColumn' => 41,
            'endColumn' => 56,
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
        'startLine' => 418,
        'endLine' => 420,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getDefaultValueLiteral' => 
      array (
        'name' => 'getDefaultValueLiteral',
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
        'startLine' => 425,
        'endLine' => 427,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getDefaultValueCallback' => 
      array (
        'name' => 'getDefaultValueCallback',
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
        'startLine' => 432,
        'endLine' => 434,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getDefaultValue' => 
      array (
        'name' => 'getDefaultValue',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 439,
            'endLine' => 439,
            'startColumn' => 35,
            'endColumn' => 66,
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
        'startLine' => 439,
        'endLine' => 451,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setDefaultValue' => 
      array (
        'name' => 'setDefaultValue',
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
            'startLine' => 456,
            'endLine' => 456,
            'startColumn' => 35,
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
 * {@inheritdoc}
 */',
        'startLine' => 456,
        'endLine' => 471,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setDefaultValueCallback' => 
      array (
        'name' => 'setDefaultValueCallback',
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
            'startLine' => 476,
            'endLine' => 476,
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
 * {@inheritdoc}
 */',
        'startLine' => 476,
        'endLine' => 482,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getInitialValue' => 
      array (
        'name' => 'getInitialValue',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the initial value for the field.
 *
 * @return array
 *   The initial value for the field, as a numerically indexed array of items,
 *   each item being a property/value array. An empty array when there is no
 *   default value.
 */',
        'startLine' => 492,
        'endLine' => 494,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setInitialValue' => 
      array (
        'name' => 'setInitialValue',
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
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 35,
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
 * Sets an initial value for the field.
 *
 * @param mixed $value
 *   The initial value for the field. This can be either:
 *   - a literal, in which case it will be assigned to the first property of
 *     the first item;
 *   - a numerically indexed array of items, each item being a property/value
 *     array;
 *   - a non-numerically indexed array, in which case the array is assumed to
 *     be a property/value array and used as the first item;
 *   - an empty array for no initial value.
 *
 * @return $this
 */',
        'startLine' => 511,
        'endLine' => 520,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getInitialValueFromField' => 
      array (
        'name' => 'getInitialValueFromField',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the name of the field that will be used for getting initial values.
 *
 * @return string|null
 *   The field name.
 */',
        'startLine' => 528,
        'endLine' => 530,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setInitialValueFromField' => 
      array (
        'name' => 'setInitialValueFromField',
        'parameters' => 
        array (
          'field_name' => 
          array (
            'name' => 'field_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 552,
            'endLine' => 552,
            'startColumn' => 44,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default_value' => 
          array (
            'name' => 'default_value',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 552,
                'endLine' => 552,
                'startTokenPos' => 1849,
                'startFilePos' => 16849,
                'endTokenPos' => 1849,
                'endFilePos' => 16852,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 552,
            'endLine' => 552,
            'startColumn' => 57,
            'endColumn' => 77,
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
 * Sets a field that will be used for getting initial values.
 *
 * @param string $field_name
 *   The name of the field that will be used for getting initial values.
 * @param mixed $default_value
 *   (optional) The default value for the field, in case the inherited value
 *   is NULL. This can be either:
 *   - a literal, in which case it will be assigned to the first property of
 *     the first item;
 *   - a numerically indexed array of items, each item being a property/value
 *     array;
 *   - a non-numerically indexed array, in which case the array is assumed to
 *     be a property/value array and used as the first item;
 *   - an empty array for no initial value.
 *   If the field being added is required or an entity key, it is recommended
 *   to provide a default value.
 *
 * @return $this
 */',
        'startLine' => 552,
        'endLine' => 556,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getOptionsProvider' => 
      array (
        'name' => 'getOptionsProvider',
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
            'startLine' => 561,
            'endLine' => 561,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 561,
            'endLine' => 561,
            'startColumn' => 54,
            'endColumn' => 85,
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
 * {@inheritdoc}
 */',
        'startLine' => 561,
        'endLine' => 571,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getPropertyDefinition' => 
      array (
        'name' => 'getPropertyDefinition',
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
            'startLine' => 576,
            'endLine' => 576,
            'startColumn' => 54,
            'endColumn' => 58,
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
        'startLine' => 576,
        'endLine' => 586,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getPropertyDefinitions' => 
      array (
        'name' => 'getPropertyDefinitions',
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
        'startLine' => 591,
        'endLine' => 597,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getPropertyNames' => 
      array (
        'name' => 'getPropertyNames',
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
        'startLine' => 602,
        'endLine' => 604,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getMainPropertyName' => 
      array (
        'name' => 'getMainPropertyName',
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
        'startLine' => 609,
        'endLine' => 612,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
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
        'startLine' => 617,
        'endLine' => 622,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getTargetEntityTypeId' => 
      array (
        'name' => 'getTargetEntityTypeId',
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
        'startLine' => 627,
        'endLine' => 629,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setTargetEntityTypeId' => 
      array (
        'name' => 'setTargetEntityTypeId',
        'parameters' => 
        array (
          'entity_type_id' => 
          array (
            'name' => 'entity_type_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 639,
            'endLine' => 639,
            'startColumn' => 41,
            'endColumn' => 55,
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
 * Sets the ID of the type of the entity this field is attached to.
 *
 * @param string $entity_type_id
 *   The name of the target entity type to set.
 *
 * @return $this
 */',
        'startLine' => 639,
        'endLine' => 642,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getTargetBundle' => 
      array (
        'name' => 'getTargetBundle',
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
        'startLine' => 647,
        'endLine' => 649,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setTargetBundle' => 
      array (
        'name' => 'setTargetBundle',
        'parameters' => 
        array (
          'bundle' => 
          array (
            'name' => 'bundle',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 659,
            'endLine' => 659,
            'startColumn' => 35,
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
        'docComment' => '/**
 * Sets the bundle this field is defined for.
 *
 * @param string|null $bundle
 *   The bundle, or NULL if the field is not bundle-specific.
 *
 * @return $this
 */',
        'startLine' => 659,
        'endLine' => 662,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getSchema' => 
      array (
        'name' => 'getSchema',
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
        'startLine' => 667,
        'endLine' => 689,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getColumns' => 
      array (
        'name' => 'getColumns',
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
        'startLine' => 694,
        'endLine' => 697,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'hasCustomStorage' => 
      array (
        'name' => 'hasCustomStorage',
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
        'startLine' => 702,
        'endLine' => 704,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'isBaseField' => 
      array (
        'name' => 'isBaseField',
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
        'startLine' => 709,
        'endLine' => 711,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setCustomStorage' => 
      array (
        'name' => 'setCustomStorage',
        'parameters' => 
        array (
          'custom_storage' => 
          array (
            'name' => 'custom_storage',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 725,
            'endLine' => 725,
            'startColumn' => 36,
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
 * Sets the storage behavior for this field.
 *
 * @param bool $custom_storage
 *   Pass FALSE if the storage takes care of storing the field,
 *   TRUE otherwise.
 *
 * @return $this
 *
 * @throws \\LogicException
 *   Thrown if custom storage is to be set to FALSE for a computed field.
 */',
        'startLine' => 725,
        'endLine' => 731,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getFieldStorageDefinition' => 
      array (
        'name' => 'getFieldStorageDefinition',
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
        'startLine' => 736,
        'endLine' => 738,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getUniqueStorageIdentifier' => 
      array (
        'name' => 'getUniqueStorageIdentifier',
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
        'startLine' => 743,
        'endLine' => 745,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getUniqueIdentifier' => 
      array (
        'name' => 'getUniqueIdentifier',
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
        'startLine' => 750,
        'endLine' => 758,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'isDeleted' => 
      array (
        'name' => 'isDeleted',
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
        'startLine' => 763,
        'endLine' => 765,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setDeleted' => 
      array (
        'name' => 'setDeleted',
        'parameters' => 
        array (
          'deleted' => 
          array (
            'name' => 'deleted',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 775,
            'endLine' => 775,
            'startColumn' => 30,
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
 * Sets whether the field storage is deleted.
 *
 * @param bool $deleted
 *   Whether the field storage is deleted.
 *
 * @return $this
 */',
        'startLine' => 775,
        'endLine' => 778,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'getConfig' => 
      array (
        'name' => 'getConfig',
        'parameters' => 
        array (
          'bundle' => 
          array (
            'name' => 'bundle',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 783,
            'endLine' => 783,
            'startColumn' => 29,
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
        'startLine' => 783,
        'endLine' => 789,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'isStorageRequired' => 
      array (
        'name' => 'isStorageRequired',
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
        'startLine' => 794,
        'endLine' => 801,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'aliasName' => NULL,
      ),
      'setStorageRequired' => 
      array (
        'name' => 'setStorageRequired',
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
            'startLine' => 812,
            'endLine' => 812,
            'startColumn' => 38,
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
 * Sets whether the field storage is required.
 *
 * @param bool $required
 *   Whether the field storage is required.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 812,
        'endLine' => 815,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
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
        'startLine' => 820,
        'endLine' => 832,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
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
        'startLine' => 837,
        'endLine' => 840,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'implementingClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        'currentClassName' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
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