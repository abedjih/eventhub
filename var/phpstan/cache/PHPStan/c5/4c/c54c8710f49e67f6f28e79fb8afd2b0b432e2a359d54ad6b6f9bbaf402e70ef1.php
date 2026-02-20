<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldConfigInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Field\FieldConfigInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-528e80ffe1e636cc2dfb2d074d7ec0f2b53fb0287fd5fb71882daa0d78e6e09e-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldConfigInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Field',
    'name' => 'Drupal\\Core\\Field\\FieldConfigInterface',
    'shortName' => 'FieldConfigInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for configurable field definitions.
 *
 * This interface allows both configurable fields and overridden base fields to
 * share a common interface. The interface also extends ConfigEntityInterface
 * to ensure that implementations have the expected save() method.
 *
 * @see \\Drupal\\Core\\Field\\Entity\\BaseFieldOverride
 * @see \\Drupal\\field\\Entity\\FieldConfig
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 280,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
      1 => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
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
            'startLine' => 27,
            'endLine' => 27,
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
 * Sets the field definition label.
 *
 * @param string $label
 *   The label to set.
 *
 * @return $this
 */',
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
            'startLine' => 40,
            'endLine' => 40,
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
 * Sets a human readable description.
 *
 * Descriptions are usually used on user interfaces where the data is edited
 * or displayed.
 *
 * @param string $description
 *   The description for this field.
 *
 * @return $this
 */',
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
            'startLine' => 50,
            'endLine' => 50,
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
 */',
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 3,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
            'startLine' => 82,
            'endLine' => 82,
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
 * Sets field settings.
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
 *
 * @param array $settings
 *   The array of field settings.
 *
 * @return $this
 */',
        'startLine' => 82,
        'endLine' => 82,
        'startColumn' => 3,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
            'startLine' => 94,
            'endLine' => 94,
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
            'startLine' => 94,
            'endLine' => 94,
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
 * Sets the value for a field setting by name.
 *
 * @param string $setting_name
 *   The name of the setting.
 * @param mixed $value
 *   The value of the setting.
 *
 * @return $this
 */',
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 3,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
            'startLine' => 111,
            'endLine' => 111,
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
 * Sets whether the field can be empty.
 *
 * If a field is required, an entity needs to have at least a valid,
 * non-empty item in that field\'s FieldItemList in order to pass validation.
 *
 * An item is considered empty if its isEmpty() method returns TRUE.
 * Typically, that is if at least one of its required properties is empty.
 *
 * @param bool $required
 *   TRUE if the field is required. FALSE otherwise.
 *
 * @return $this
 *   The current object, for a fluent interface.
 */',
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
            'startLine' => 131,
            'endLine' => 131,
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
 * Sets a default value.
 *
 * Note that if a default value callback is set, it will take precedence over
 * any value set here.
 *
 * @param mixed $value
 *   The default value for the field. This can be either:
 *   - a literal, in which case it will be assigned to the first property of
 *     the first item.
 *   - a numerically indexed array of items, each item being a property/value
 *     array.
 *   - a non-numerically indexed array, in which case the array is assumed to
 *     be a property/value array and used as the first item
 *   - NULL or [] for no default value.
 *
 * @return $this
 */',
        'startLine' => 131,
        'endLine' => 131,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
            'startLine' => 151,
            'endLine' => 151,
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
 * Sets a custom default value callback.
 *
 * If set, the callback overrides any set default value.
 *
 * @param string|null $callback
 *   The callback to invoke for getting the default value (pass NULL to unset
 *   a previously set callback). The callback will be invoked with the
 *   following arguments:
 *   - \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
 *     The entity being created.
 *   - \\Drupal\\Core\\Field\\FieldDefinitionInterface $definition
 *     The field definition.
 *   It should return the default value in the format accepted by the
 *   setDefaultValue() method.
 *
 * @return $this
 */',
        'startLine' => 151,
        'endLine' => 151,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
            'startLine' => 174,
            'endLine' => 174,
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
            'startLine' => 174,
            'endLine' => 174,
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
 * \\Drupal\\Core\\Field\\FieldConfigInterface::addPropertyConstraints()
 *
 * Note that constraints added via this method are not stored in configuration
 * and as such need to be added at runtime using
 * hook_entity_bundle_field_info_alter().
 *
 * @param string $name
 *   The name of the property to set constraints for.
 * @param array $constraints
 *   The constraints to set.
 *
 * @return static
 *   The object itself for chaining.
 *
 * @see hook_entity_bundle_field_info_alter()
 */',
        'startLine' => 174,
        'endLine' => 174,
        'startColumn' => 3,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
            'startLine' => 213,
            'endLine' => 213,
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
            'startLine' => 213,
            'endLine' => 213,
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
 * Adds a constraint to a property of a field item. e.g.
 * @code
 * // Limit the field item\'s value property to the range 0 through 10.
 * // e.g. $node->field_how_many->value.
 * $field->addPropertyConstraints(\'value\', [
 *   \'Range\' => [
 *     \'min\' => 0,
 *     \'max\' => 10,
 *   ]
 * ]);
 * @endcode
 *
 * If you want to add a validation constraint that applies to the
 * \\Drupal\\Core\\Field\\FieldItemList, use FieldConfigInterface::addConstraint()
 * instead.
 *
 * Note: passing a new set of options for an existing property constraint will
 * overwrite with the new options.
 *
 * Note that constraints added via this method are not stored in configuration
 * and as such need to be added at runtime using
 * hook_entity_bundle_field_info_alter().
 *
 * @param string $name
 *   The name of the property to set constraints for.
 * @param array $constraints
 *   The constraints to set.
 *
 * @return static
 *   The object itself for chaining.
 *
 * @see \\Drupal\\Core\\Field\\FieldConfigInterface::addConstraint()
 * @see hook_entity_bundle_field_info_alter()
 */',
        'startLine' => 213,
        'endLine' => 213,
        'startColumn' => 3,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
            'startLine' => 255,
            'endLine' => 255,
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
                'startLine' => 255,
                'endLine' => 255,
                'startTokenPos' => 177,
                'startFilePos' => 8112,
                'endTokenPos' => 177,
                'endFilePos' => 8115,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 255,
            'endLine' => 255,
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
 * Adds a validation constraint to the FieldItemList.
 *
 * Note: If you wish to apply a constraint to just a property of a FieldItem
 * use \\Drupal\\Core\\Field\\FieldConfigInterface::addPropertyConstraints()
 * instead.
 * @code
 *   // Add a constraint to the \'field_username\' FieldItemList.
 *   // e.g. $node->field_username
 *   $fields[\'field_username\']->addConstraint(\'UniqueField\');
 * @endcode
 *
 * If you wish to apply a constraint to a \\Drupal\\Core\\Field\\FieldItem instead
 * of a property or FieldItemList, you can use the
 * \\Drupal\\Core\\Field\\FieldConfigBase::getItemDefinition() method.
 * @code
 *   // Add a constraint to the \'field_entity_reference\' FieldItem (entity
 *   // reference item).
 *   $fields[\'field_entity_reference\']->getItemDefinition()->addConstraint(\'MyCustomFieldItemValidationPlugin\', []);
 * @endcode
 *
 * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
 * details.
 *
 * Note that constraints added via this method are not stored in configuration
 * and as such need to be added at runtime using
 * hook_entity_bundle_field_info_alter().
 *
 * @param string $constraint_name
 *   The name of the constraint to add, i.e. its plugin id.
 * @param array|null $options
 *   The constraint options as required by the constraint plugin, or NULL.
 *
 * @return static
 *   The object itself for chaining.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemList
 * @see \\Drupal\\Core\\Field\\FieldConfigInterface::addPropertyConstraints()
 * @see hook_entity_bundle_field_info_alter()
 */',
        'startLine' => 255,
        'endLine' => 255,
        'startColumn' => 3,
        'endColumn' => 67,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
            'startLine' => 278,
            'endLine' => 278,
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
 * Sets the array of validation constraints for the FieldItemList.
 *
 * NOTE: This will overwrite any previously set constraints. In most cases
 * FieldConfigInterface::addConstraint() should be used instead.
 *
 * Note that constraints added via this method are not stored in configuration
 * and as such need to be added at runtime using
 * hook_entity_bundle_field_info_alter().
 *
 * @param array $constraints
 *   The array of constraints. See
 *   \\Drupal\\Core\\TypedData\\TypedDataManager::getConstraints() for details.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\TypedData\\DataDefinition::addConstraint()
 * @see \\Drupal\\Core\\TypedData\\DataDefinition::getConstraints()
 * @see \\Drupal\\Core\\Field\\FieldItemList
 * @see hook_entity_bundle_field_info_alter()
 */',
        'startLine' => 278,
        'endLine' => 278,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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