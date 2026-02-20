<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/FieldableEntityInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\FieldableEntityInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-9b97d1e7b0bd94cf1c2e48bfe02653a2f7c2abd10ca68d7c8d7c6a8134eca144-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/FieldableEntityInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
    'shortName' => 'FieldableEntityInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for entities having fields.
 *
 * This interface builds upon the general interfaces provided by the typed data
 * API, while extending them with entity-specific additions. I.e., fieldable
 * entities implement the ComplexDataInterface among others, thus it is complex
 * data containing fields as its data properties. The contained fields have to
 * implement \\Drupal\\Core\\Field\\FieldItemListInterface, which builds upon typed
 * data interfaces as well.
 *
 * When implementing this interface which extends Traversable, make sure to list
 * IteratorAggregate or Iterator before this interface in the implements clause.
 *
 * @see \\Drupal\\Core\\TypedData\\TypedDataManager
 * @see \\Drupal\\Core\\Field\\FieldItemListInterface
 *
 * @ingroup entity_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 239,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityInterface',
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
      'baseFieldDefinitions' => 
      array (
        'name' => 'baseFieldDefinitions',
        'parameters' => 
        array (
          'entity_type' => 
          array (
            'name' => 'entity_type',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 47,
            'endColumn' => 78,
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
 * Provides base field definitions for an entity type.
 *
 * Implementations typically use the class
 * \\Drupal\\Core\\Field\\BaseFieldDefinition for creating the field definitions;
 * for example a \'name\' field could be defined as the following:
 * @code
 * $fields[\'name\'] = BaseFieldDefinition::create(\'string\')
 *   ->setLabel(t(\'Name\'));
 * @endcode
 *
 * By definition, base fields are fields that exist for every bundle. To
 * provide definitions for fields that should only exist on some bundles, use
 * \\Drupal\\Core\\Entity\\FieldableEntityInterface::bundleFieldDefinitions().
 *
 * The definitions returned by this function can be overridden for all
 * bundles by hook_entity_base_field_info_alter() or overridden on a
 * per-bundle basis via \'base_field_override\' configuration entities.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition. Useful when a single class is used for
 *   multiple, possibly dynamic entity types.
 *
 * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface[]
 *   An array of base field definitions for the entity type, keyed by field
 *   name.
 *
 * @see \\Drupal\\Core\\Entity\\EntityFieldManagerInterface::getFieldDefinitions()
 * @see \\Drupal\\Core\\Entity\\FieldableEntityInterface::bundleFieldDefinitions()
 */',
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 3,
        'endColumn' => 80,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'aliasName' => NULL,
      ),
      'bundleFieldDefinitions' => 
      array (
        'name' => 'bundleFieldDefinitions',
        'parameters' => 
        array (
          'entity_type' => 
          array (
            'name' => 'entity_type',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 49,
            'endColumn' => 80,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 83,
            'endColumn' => 89,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'base_field_definitions' => 
          array (
            'name' => 'base_field_definitions',
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
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 92,
            'endColumn' => 120,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Provides field definitions for a specific bundle.
 *
 * This function can return definitions both for bundle fields (fields that
 * are not defined in $base_field_definitions, and therefore might not exist
 * on some bundles) as well as bundle-specific overrides of base fields
 * (fields that are defined in $base_field_definitions, and therefore exist
 * for all bundles). However, bundle-specific base field overrides can also
 * be provided by \'base_field_override\' configuration entities, and that is
 * the recommended approach except in cases where an entity type needs to
 * provide a bundle-specific base field override that is decoupled from
 * configuration. Note that for most entity types, the bundles themselves are
 * derived from configuration (e.g., \'node\' bundles are managed via
 * \'node_type\' configuration entities), so decoupling bundle-specific base
 * field overrides from configuration only makes sense for entity types that
 * also decouple their bundles from configuration. In cases where both this
 * function returns a bundle-specific override of a base field and a
 * \'base_field_override\' configuration entity exists, the latter takes
 * precedence.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition. Useful when a single class is used for
 *   multiple, possibly dynamic entity types.
 * @param string $bundle
 *   The bundle.
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface[] $base_field_definitions
 *   The list of base field definitions.
 *
 * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface[]
 *   An array of bundle field definitions, keyed by field name.
 *
 * @see \\Drupal\\Core\\Entity\\EntityFieldManagerInterface::getFieldDefinitions()
 * @see \\Drupal\\Core\\Entity\\FieldableEntityInterface::baseFieldDefinitions()
 *
 * @todo WARNING: This method will be changed in
 *   https://www.drupal.org/node/2346347.
 */',
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 3,
        'endColumn' => 122,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'aliasName' => NULL,
      ),
      'hasField' => 
      array (
        'name' => 'hasField',
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
            'startLine' => 105,
            'endLine' => 105,
            'startColumn' => 28,
            'endColumn' => 38,
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
 * Determines whether the entity has a field with the given name.
 *
 * @param string $field_name
 *   The field name.
 *
 * @return bool
 *   TRUE if the entity has a field with the given name. FALSE otherwise.
 */',
        'startLine' => 105,
        'endLine' => 105,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'aliasName' => NULL,
      ),
      'getFieldDefinition' => 
      array (
        'name' => 'getFieldDefinition',
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
            'startLine' => 116,
            'endLine' => 116,
            'startColumn' => 38,
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
 * Gets the definition of a contained field.
 *
 * @param string $name
 *   The name of the field.
 *
 * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface|null
 *   The definition of the field or null if the field does not exist.
 */',
        'startLine' => 116,
        'endLine' => 116,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'aliasName' => NULL,
      ),
      'getFieldDefinitions' => 
      array (
        'name' => 'getFieldDefinitions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets an array of field definitions of all contained fields.
 *
 * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface[]
 *   An array of field definitions, keyed by field name.
 *
 * @see \\Drupal\\Core\\Entity\\EntityFieldManagerInterface::getFieldDefinitions()
 */',
        'startLine' => 126,
        'endLine' => 126,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
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
 * Gets an array of all field values.
 *
 * Gets an array of plain field values, including only non-computed values.
 * Note that the structure varies by entity type and bundle.
 *
 * @return array
 *   An array of field values, keyed by field name.
 */',
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
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
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 23,
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
 * Gets a field item list.
 *
 * @param string $field_name
 *   The name of the field to get; e.g., \'title\' or \'name\'.
 *
 * @return \\Drupal\\Core\\Field\\FieldItemListInterface
 *   The field item list, containing the field items.
 *
 * @throws \\InvalidArgumentException
 *   If an invalid field name is given.
 */',
        'startLine' => 151,
        'endLine' => 151,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
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
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 23,
            'endColumn' => 33,
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
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 36,
            'endColumn' => 41,
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
                'startLine' => 170,
                'endLine' => 170,
                'startTokenPos' => 135,
                'startFilePos' => 6597,
                'endTokenPos' => 135,
                'endFilePos' => 6600,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 44,
            'endColumn' => 57,
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
 * Sets a field value.
 *
 * @param string $field_name
 *   The name of the field to set; e.g., \'title\' or \'name\'.
 * @param mixed $value
 *   The value to set, or NULL to unset the field.
 * @param bool $notify
 *   (optional) Whether to notify the entity of the change. Defaults to
 *   TRUE. If the update stems from the entity, set it to FALSE to avoid
 *   being notified again.
 *
 * @return $this
 *
 * @throws \\InvalidArgumentException
 *   If the specified field does not exist.
 */',
        'startLine' => 170,
        'endLine' => 170,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'aliasName' => NULL,
      ),
      'getFields' => 
      array (
        'name' => 'getFields',
        'parameters' => 
        array (
          'include_computed' => 
          array (
            'name' => 'include_computed',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 181,
                'endLine' => 181,
                'startTokenPos' => 151,
                'startFilePos' => 6953,
                'endTokenPos' => 151,
                'endFilePos' => 6956,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 29,
            'endColumn' => 52,
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
 * Gets an array of all field item lists.
 *
 * @param bool $include_computed
 *   If set to TRUE, computed fields are included. Defaults to TRUE.
 *
 * @return \\Drupal\\Core\\Field\\FieldItemListInterface[]
 *   An array of field item lists implementing, keyed by field name.
 */',
        'startLine' => 181,
        'endLine' => 181,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'aliasName' => NULL,
      ),
      'getTranslatableFields' => 
      array (
        'name' => 'getTranslatableFields',
        'parameters' => 
        array (
          'include_computed' => 
          array (
            'name' => 'include_computed',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 192,
                'endLine' => 192,
                'startTokenPos' => 167,
                'startFilePos' => 7341,
                'endTokenPos' => 167,
                'endFilePos' => 7344,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 41,
            'endColumn' => 64,
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
 * Gets an array of field item lists for translatable fields.
 *
 * @param bool $include_computed
 *   If set to TRUE, computed fields are included. Defaults to TRUE.
 *
 * @return \\Drupal\\Core\\Field\\FieldItemListInterface[]
 *   An array of field item lists implementing, keyed by field name.
 */',
        'startLine' => 192,
        'endLine' => 192,
        'startColumn' => 3,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'aliasName' => NULL,
      ),
      'onChange' => 
      array (
        'name' => 'onChange',
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
            'startLine' => 210,
            'endLine' => 210,
            'startColumn' => 28,
            'endColumn' => 38,
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
 * Reacts to changes to a field.
 *
 * Note that this is invoked after any changes have been applied.
 *
 * @param string $field_name
 *   The name of the field which is changed.
 *
 * @throws \\InvalidArgumentException
 *   When trying to assign a value to the language field that matches an
 *   existing translation.
 * @throws \\LogicException
 *   When trying to change:
 *   - The language of a translation.
 *   - The value of the flag identifying the default translation object.
 */',
        'startLine' => 210,
        'endLine' => 210,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
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
 * Validates the currently set values.
 *
 * @return \\Drupal\\Core\\Entity\\EntityConstraintViolationListInterface
 *   A list of constraint violations. If the list is empty, validation
 *   succeeded.
 */',
        'startLine' => 219,
        'endLine' => 219,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'aliasName' => NULL,
      ),
      'isValidationRequired' => 
      array (
        'name' => 'isValidationRequired',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether entity validation is required before saving the entity.
 *
 * @return bool
 *   TRUE if validation is required, FALSE if not.
 */',
        'startLine' => 227,
        'endLine' => 227,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'aliasName' => NULL,
      ),
      'setValidationRequired' => 
      array (
        'name' => 'setValidationRequired',
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
            'startLine' => 237,
            'endLine' => 237,
            'startColumn' => 41,
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
 * Sets whether entity validation is required before saving the entity.
 *
 * @param bool $required
 *   TRUE if validation is required, FALSE otherwise.
 *
 * @return $this
 */',
        'startLine' => 237,
        'endLine' => 237,
        'startColumn' => 3,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
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