<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldDefinitionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Field\FieldDefinitionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-68b8be2c5ea8c4d15da323b1b9ff83a0745be4ecfdbb0e5da586bb1944c8e1e7-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldDefinitionInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Field',
    'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
    'shortName' => 'FieldDefinitionInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for entity field definitions.
 *
 * An entity field is a data object that holds the values of a particular field
 * for a particular entity (see \\Drupal\\Core\\Field\\FieldItemListInterface). For
 * example, $node_1->body and $node_2->body contain different data and therefore
 * are different field objects.
 *
 * In contrast, an entity field *definition* is an object that returns
 * information *about* a field (e.g., its type and settings) rather than its
 * values. As such, if all the information about $node_1->body and $node_2->body
 * is the same, then the same field definition object can be used to describe
 * both.
 *
 * It is up to the class implementing this interface to manage where the
 * information comes from. For example, field.module provides an implementation
 * based on two levels of configuration. It allows the site administrator to add
 * custom fields to any entity type and bundle via the "field_storage_config"
 * and "field_config" configuration entities. The former for storing
 * configuration that is independent of which entity type and bundle the field
 * is added to, and the latter for storing configuration that is specific to the
 * entity type and bundle. The class that implements "field_config"
 * configuration entities also implements this interface, returning information
 * from either itself, or from the corresponding "field_storage_config"
 * configuration, as appropriate.
 *
 * However, entity base fields, such as $node->title, are not managed by
 * field.module and its "field_storage_config"/"field_config"
 * configuration entities. Therefore, their definitions are provided by
 * different objects based on the class \\Drupal\\Core\\Field\\BaseFieldDefinition,
 * which implements this interface as well.
 *
 * Field definitions may fully define a concrete data object (e.g.,
 * $node_1->body), or may provide a best-guess definition for a data object that
 * might come into existence later. For example, $node_1->body and $node_2->body
 * may have different definitions (e.g., if the node types are different). When
 * adding the "body" field to a View that can return nodes of different types,
 * the View can get a field definition that represents the "body" field
 * abstractly, and present Views configuration options to the administrator
 * based on that abstract definition, even though that abstract definition can
 * differ from the concrete definition of any particular node\'s body field.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 51,
    'endLine' => 273,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
      1 => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
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
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
 *   - FieldDefinitionInterface::getTargetEntityTypeId() answers "as a field,
 *     which entity type are you attached to?".
 *   - EntityInterface::getEntityTypeId() answers "as a (config) entity, what
 *     is your own entity type?".
 *
 * @return string
 *   The entity type ID.
 */',
        'startLine' => 88,
        'endLine' => 88,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
 * Gets the bundle the field is attached to.
 *
 * This method should not be confused with EntityInterface::bundle()
 * (configurable fields are config entities, and thus implement both
 * interfaces):
 *   - FieldDefinitionInterface::getTargetBundle() answers "as a field,
 *     which bundle are you attached to?".
 *   - EntityInterface::bundle() answers "as a (config) entity, what
 *     is your own bundle?" (not relevant in our case, the config entity types
 *     used to store the definitions of configurable fields do not have
 *     bundles).
 *
 * @return string|null
 *   The bundle the field is defined for, or NULL if it is a base field; i.e.,
 *   it is not bundle-specific.
 */',
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
            'startLine' => 122,
            'endLine' => 122,
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
 * Returns whether the display for the field can be configured.
 *
 * @param string $display_context
 *   The display context. Either \'view\' or \'form\'.
 *
 * @return bool
 *   TRUE if the display for this field is configurable in the given context.
 *   If TRUE, the display options returned by getDisplayOptions() may be
 *   overridden via the respective entity display.
 *
 * @see \\Drupal\\Core\\Entity\\Display\\EntityDisplayInterface
 */',
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 3,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
            'startLine' => 158,
            'endLine' => 158,
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
 * Returns the default display options for the field.
 *
 * If the field\'s display is configurable, the returned display options act
 * as default values and may be overridden via the respective entity display.
 * Otherwise, the display options will be applied to entity displays as is.
 *
 * @param string $display_context
 *   The display context. Either \'view\' or \'form\'.
 *
 * @return array|null
 *   The array of display options for the field, or NULL if the field is not
 *   displayed. The following key/value pairs may be present:
 *   - label: (string) Position of the field label. The default \'field\' theme
 *     implementation supports the values \'inline\', \'above\' and \'hidden\'.
 *     Defaults to \'above\'. Only applies to \'view\' context.
 *   - region: (string) The region the field is in, or \'hidden\'. If not
 *     specified, the default region will be used.
 *   - type: (string) The plugin (widget or formatter depending on
 *     $display_context) to use. If not specified or if the requested plugin
 *     is unknown, the \'default_widget\' / \'default_formatter\' for the field
 *     type will be used. Previously \'hidden\' was a valid value, it is now
 *     deprecated in favor of specifying \'region\' => \'hidden\'.
 *   - settings: (array) Settings for the plugin specified above. The default
 *     settings for the plugin will be used for settings left unspecified.
 *   - third_party_settings: (array) Settings provided by other extensions
 *     through hook_field_formatter_third_party_settings_form().
 *   - weight: (float) The weight of the element. Not needed if \'type\' is
 *     \'hidden\'.
 *   The defaults of the various display options above get applied by the used
 *   entity display.
 *
 * @see \\Drupal\\Core\\Entity\\Display\\EntityDisplayInterface
 */',
        'startLine' => 158,
        'endLine' => 158,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
 * Returns whether the field can be empty.
 *
 * If a field is required, an entity needs to have at least a valid,
 * non-empty item in that field\'s FieldItemList in order to pass validation.
 *
 * An item is considered empty if its isEmpty() method returns TRUE.
 * Typically, that is if at least one of its required properties is empty.
 *
 * @return bool
 *   TRUE if the field is required.
 *
 * @see \\Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList::isEmpty()
 * @see \\Drupal\\Core\\Field\\FieldItemInterface::isEmpty()
 * @see \\Drupal\\Core\\TypedData\\DataDefinitionInterface:isRequired()
 * @see \\Drupal\\Core\\TypedData\\TypedDataManager::getDefaultConstraints()
 */',
        'startLine' => 177,
        'endLine' => 177,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
 * Returns the default value literal for the field.
 *
 * This method retrieves the raw property assigned to the field definition.
 * When computing the runtime default value for a field in a given entity,
 * ::getDefaultValue() should be used instead.
 *
 * @return array
 *   The default value for the field, as a numerically indexed array of items,
 *   each item being a property/value array. An empty array when there is no
 *   default value.
 *
 * @see FieldDefinitionInterface::getDefaultValue()
 * @see FieldDefinitionInterface::getDefaultValueCallback()
 */',
        'startLine' => 194,
        'endLine' => 194,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
 * Returns the default value callback for the field.
 *
 * This method retrieves the raw property assigned to the field definition.
 * When computing the runtime default value for a field in a given entity,
 * ::getDefaultValue() should be used instead.
 *
 * @return string|null
 *   The default value callback for the field.
 *
 * @see FieldDefinitionInterface::getDefaultValue()
 * @see FieldDefinitionInterface::getDefaultValueLiteral()
 */',
        'startLine' => 209,
        'endLine' => 209,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
            'startLine' => 230,
            'endLine' => 230,
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
 * Returns the default value for the field in a newly created entity.
 *
 * This method computes the runtime default value for a field in a given
 * entity. To access the raw properties assigned to the field definition,
 * ::getDefaultValueLiteral() or ::getDefaultValueCallback() should be used
 * instead.
 *
 * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
 *   The entity for which the default value is generated.
 *
 * @return array
 *   The default value for the field, as a numerically indexed array of items,
 *   each item being a property/value array. An empty array when there is no
 *    default value.
 *
 * @see FieldDefinitionInterface::getDefaultValueLiteral()
 * @see FieldDefinitionInterface::getDefaultValueCallback()
 */',
        'startLine' => 230,
        'endLine' => 230,
        'startColumn' => 3,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
 * Returns whether the field is translatable.
 *
 * @return bool
 *   TRUE if the field is translatable.
 */',
        'startLine' => 238,
        'endLine' => 238,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
 * Returns the field storage definition.
 *
 * @return \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface
 *   The field storage definition.
 */',
        'startLine' => 246,
        'endLine' => 246,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
            'startLine' => 263,
            'endLine' => 263,
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
 * Gets an object that can be saved in configuration.
 *
 * Base fields are defined in code. In order to configure field definition
 * properties per bundle use this method to create an override that can be
 * saved in configuration.
 *
 * @param string $bundle
 *   The bundle to get the configurable field for.
 *
 * @return \\Drupal\\Core\\Field\\FieldConfigInterface
 *   The configuration entity for the field.
 *
 * @see \\Drupal\\Core\\Field\\Entity\\BaseFieldBundleOverride
 */',
        'startLine' => 263,
        'endLine' => 263,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
 * Returns a unique identifier for the field.
 *
 * @return string
 *   The unique ID for the field.
 */',
        'startLine' => 271,
        'endLine' => 271,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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