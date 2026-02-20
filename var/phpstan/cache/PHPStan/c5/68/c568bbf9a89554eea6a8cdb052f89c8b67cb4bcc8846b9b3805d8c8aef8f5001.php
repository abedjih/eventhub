<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldStorageDefinitionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Field\FieldStorageDefinitionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-aeebe963b74c70b46216ae2abc758ce2609f2026eb02399637602a79cce4c416-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldStorageDefinitionInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Field',
    'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
    'shortName' => 'FieldStorageDefinitionInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for entity field storage definitions.
 *
 * Field storage definitions represent the part of full field definitions (see
 * FieldDefinitionInterface) that is responsible for defining how the field is
 * stored. While field definitions may differ by entity bundle, all of those
 * bundle fields have to share the same common field storage definition. Thus,
 * the storage definitions can be defined by entity type only.
 * The bundle fields corresponding to a field storage definition may provide
 * additional information; e.g., they may provide bundle-specific settings or
 * constraints that are not present in the storage definition. However bundle
 * fields may not override or alter any information provided by the storage
 * definition except for the label and the description; e.g., any constraints
 * and settings on the storage definition must be present on the bundle field as
 * well.
 *
 * @see hook_entity_field_storage_info()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 26,
    'endLine' => 341,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'CARDINALITY_UNLIMITED' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'name' => 'CARDINALITY_UNLIMITED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '-1',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 37,
            'startFilePos' => 1305,
            'endTokenPos' => 38,
            'endFilePos' => 1306,
          ),
        ),
        'docComment' => '/**
 * Value indicating a field accepts an unlimited number of values.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 3,
        'endColumn' => 35,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
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
 * Returns the machine name of the field.
 *
 * This defines how the field data is accessed from the entity. For example,
 * if the field name is "foo", then $entity->foo returns its data.
 *
 * @return string
 *   The field name.
 */',
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the field type.
 *
 * @return string
 *   The field type, i.e. the id of a field type plugin. For example \'text\'.
 *
 * @see \\Drupal\\Core\\Field\\FieldTypePluginManagerInterface
 */',
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the storage settings.
 *
 * Each field type defines the settings that are meaningful for that type.
 * For example, a text field can define a \'max_length\' setting, and an image
 * field can define an \'alt_field_required\' setting.
 *
 * The method always returns an array of all available settings for this field
 * type, possibly with the default values merged in if values have not been
 * provided for all available settings.
 *
 * @return mixed[]
 *   An array of key/value pairs.
 */',
        'startLine' => 68,
        'endLine' => 68,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
            'startLine' => 79,
            'endLine' => 79,
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
 * Returns the value of a given storage setting.
 *
 * @param string $setting_name
 *   The setting name.
 *
 * @return mixed
 *   The setting value or NULL if the setting name doesn\'t exist.
 */',
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns whether the field supports translation.
 *
 * @return bool
 *   TRUE if the field supports translation.
 */',
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
            'startLine' => 97,
            'endLine' => 97,
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
 * Sets whether the field supports translation.
 *
 * @param bool $translatable
 *   Whether the field supports translation.
 *
 * @return $this
 */',
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 3,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns whether the field storage is revisionable.
 *
 * Note that if the entity type is revisionable and the field storage has a
 * cardinality higher than 1, the field storage is considered revisionable
 * by default.
 *
 * @return bool
 *   TRUE if the field is revisionable.
 */',
        'startLine' => 109,
        'endLine' => 109,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the human-readable label for the field.
 *
 * @return string
 *   The field label.
 */',
        'startLine' => 117,
        'endLine' => 117,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the human-readable description for the field.
 *
 * This is displayed in addition to the label in places where additional
 * descriptive information is helpful. For example, as help text below the
 * form element in entity edit forms.
 *
 * @return string|null
 *   The field description, or NULL if no description is available.
 */',
        'startLine' => 129,
        'endLine' => 129,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
            'startLine' => 142,
            'endLine' => 142,
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
            'startLine' => 142,
            'endLine' => 142,
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
 * Gets an options provider for the given field item property.
 *
 * @param string $property_name
 *   The name of the property to get options for; e.g., \'value\'.
 * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
 *   The entity for which the options should be provided.
 *
 * @return \\Drupal\\Core\\TypedData\\OptionsProviderInterface|null
 *   An options provider, or NULL if no options are defined.
 */',
        'startLine' => 142,
        'endLine' => 142,
        'startColumn' => 3,
        'endColumn' => 87,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns whether the field can contain multiple items.
 *
 * @return bool
 *   TRUE if the field can contain multiple items, FALSE otherwise.
 */',
        'startLine' => 150,
        'endLine' => 150,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the maximum number of items allowed for the field.
 *
 * Possible values are positive integers or
 * FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED.
 *
 * @return int
 *   The field cardinality.
 */',
        'startLine' => 161,
        'endLine' => 161,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
            'startLine' => 172,
            'endLine' => 172,
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
 * Gets the definition of a contained property.
 *
 * @param string $name
 *   The name of property.
 *
 * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface|null
 *   The definition of the property or NULL if the property does not exist.
 */',
        'startLine' => 172,
        'endLine' => 172,
        'startColumn' => 3,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Gets an array of property definitions of contained properties.
 *
 * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface[]
 *   An array of property definitions of contained properties, keyed by
 *   property name.
 */',
        'startLine' => 181,
        'endLine' => 181,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the names of the field\'s subproperties.
 *
 * A field is a list of items, and each item can contain one or more
 * properties. All items for a given field contain the same property names,
 * but the values can be different for each item.
 *
 * For example, an email field might just contain a single \'value\' property,
 * while a link field might contain \'title\' and \'url\' properties, and a text
 * field might contain \'value\', \'summary\', and \'format\' properties.
 *
 * @return string[]
 *   The property names.
 */',
        'startLine' => 197,
        'endLine' => 197,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the name of the main property, if any.
 *
 * Some field items consist mainly of one main property, e.g. the value of a
 * text field or the "target_id" of an entity reference. If the field item has
 * no main property, the method returns NULL.
 *
 * @return string|null
 *   The name of the value property, or NULL if there is none.
 */',
        'startLine' => 209,
        'endLine' => 209,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the ID of the entity type the field is attached to.
 *
 * This method should not be confused with EntityInterface::getEntityTypeId()
 * (configurable fields are config entities, and thus implement both
 * interfaces):
 *   - FieldStorageDefinitionInterface::getTargetEntityTypeId() answers "as a
 *     field storage, which entity type are you attached to?".
 *   - EntityInterface::getEntityTypeId() answers "as a (config) entity, what
 *     is your own entity type?".
 *
 * @return string
 *   The entity type ID.
 */',
        'startLine' => 225,
        'endLine' => 225,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the field schema.
 *
 * Note that this method returns an empty array for computed fields which have
 * no schema.
 *
 * @return array[]
 *   The field schema, as an array of key/value pairs in the format returned
 *   by \\Drupal\\Core\\Field\\FieldItemInterface::schema():
 *   - columns: An array of Schema API column specifications, keyed by column
 *     name. This specifies what comprises a single value for a given field.
 *     No assumptions should be made on how storage backends internally use
 *     the original column name to structure their storage.
 *   - indexes: An array of Schema API index definitions. Some storage
 *     backends might not support indexes.
 *   - unique keys: An array of Schema API unique key definitions.  Some
 *     storage backends might not support unique keys.
 *   - foreign keys: An array of Schema API foreign key definitions. Note,
 *     however, that depending on the storage backend specified for the field,
 *     the field data is not necessarily stored in SQL.
 */',
        'startLine' => 248,
        'endLine' => 248,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the field columns, as defined in the field schema.
 *
 * @return array[]
 *   The array of field columns, keyed by column name, in the same format
 *   returned by getSchema().
 *
 * @see \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface::getSchema()
 */',
        'startLine' => 259,
        'endLine' => 259,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns an array of validation constraints.
 *
 * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
 * details.
 *
 * @return array[]
 *   An array of validation constraint definitions, keyed by constraint name.
 *   Each constraint definition can be used for instantiating
 *   \\Symfony\\Component\\Validator\\Constraint objects.
 *
 * @see \\Symfony\\Component\\Validator\\Constraint
 */',
        'startLine' => 274,
        'endLine' => 274,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
            'startLine' => 291,
            'endLine' => 291,
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
 * Returns a validation constraint.
 *
 * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
 * details.
 *
 * @param string $constraint_name
 *   The name of the constraint, i.e. its plugin id.
 *
 * @return array
 *   A validation constraint definition which can be used for instantiating a
 *   \\Symfony\\Component\\Validator\\Constraint object.
 *
 * @see \\Symfony\\Component\\Validator\\Constraint
 */',
        'startLine' => 291,
        'endLine' => 291,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the name of the provider of this field.
 *
 * @return string
 *   The provider name; e.g., the module name.
 */',
        'startLine' => 299,
        'endLine' => 299,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns the storage behavior for this field.
 *
 * Indicates whether the entity type\'s storage should take care of storing the
 * field values or whether it is handled separately; e.g. by the
 * module providing the field.
 *
 * @return bool
 *   FALSE if the storage takes care of storing the field, TRUE otherwise.
 */',
        'startLine' => 311,
        'endLine' => 311,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Determines whether the field is a base field.
 *
 * Base fields are not specific to a given bundle or a set of bundles. This
 * excludes configurable fields, as they are always attached to a specific
 * bundle.
 *
 * @return bool
 *   Whether the field is a base field.
 */',
        'startLine' => 323,
        'endLine' => 323,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns a unique identifier for the field storage.
 *
 * @return string
 *   A unique identifier for the field storage.
 */',
        'startLine' => 331,
        'endLine' => 331,
        'startColumn' => 3,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
 * Returns whether the field is deleted or not.
 *
 * @return bool
 *   TRUE if the field is deleted, FALSE otherwise.
 */',
        'startLine' => 339,
        'endLine' => 339,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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