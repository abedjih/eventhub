<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldConfigBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Field\FieldConfigBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-681e9bf82dc3068e70b28f196011ca294ef7ecd018896e539c8e71877df2a3d9-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldConfigBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Field',
    'name' => 'Drupal\\Core\\Field\\FieldConfigBase',
    'shortName' => 'FieldConfigBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for configurable field definitions.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 637,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Field\\FieldConfigInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Field\\FieldInputValueNormalizerTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'id' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'id',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The field ID.
 *
 * The ID consists of 3 parts: the entity type, bundle and the field name.
 *
 * Example: node.article.body, user.user.field_main_image.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 16,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'field_name' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'field_name',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The field name.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'field_type' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'field_type',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The field type.
 *
 * This property is denormalized from the field storage for optimization of
 * the "entity and render cache hits" critical paths. If not present in the
 * $values passed to create(), it is populated from the field storage in
 * postCreate(), and saved in config records so that it is present on
 * subsequent loads.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entity_type' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'entity_type',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the entity type the field is attached to.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bundle' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'bundle',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the bundle the field is attached to.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 3,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'label' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'label',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The human-readable label for the field.
 *
 * This will be used as the title of Form API elements for the field in entity
 * edit forms, or as the label for the field values in displayed entities.
 *
 * If not specified, this defaults to the field_name (mostly useful for fields
 * created in tests).
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 3,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'description' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'description',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 86,
            'endLine' => 86,
            'startTokenPos' => 110,
            'startFilePos' => 2139,
            'endTokenPos' => 110,
            'endFilePos' => 2140,
          ),
        ),
        'docComment' => '/**
 * The field description.
 *
 * A human-readable description for the field when used with this bundle.
 * For example, the description will be the help text of Form API elements for
 * this field in entity edit forms.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'settings' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'settings',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 96,
            'endLine' => 96,
            'startTokenPos' => 121,
            'startFilePos' => 2339,
            'endTokenPos' => 122,
            'endFilePos' => 2340,
          ),
        ),
        'docComment' => '/**
 * Field-type specific settings.
 *
 * An array of key/value pairs. The keys and default values are defined by the
 * field type.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 96,
        'endLine' => 96,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'required' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'required',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 107,
            'endLine' => 107,
            'startTokenPos' => 133,
            'startFilePos' => 2675,
            'endTokenPos' => 133,
            'endFilePos' => 2679,
          ),
        ),
        'docComment' => '/**
 * Flag indicating whether the field is required.
 *
 * TRUE if a value for this field is required when used with this bundle,
 * FALSE otherwise. Currently, required-ness is only enforced at the Form API
 * level in entity edit forms, not during direct API saves.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'translatable' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'translatable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'TRUE',
          'attributes' => 
          array (
            'startLine' => 116,
            'endLine' => 116,
            'startTokenPos' => 144,
            'startFilePos' => 2827,
            'endTokenPos' => 144,
            'endFilePos' => 2830,
          ),
        ),
        'docComment' => '/**
 * Flag indicating whether the field is translatable.
 *
 * Defaults to TRUE.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 116,
        'endLine' => 116,
        'startColumn' => 3,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'default_value' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'default_value',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 146,
            'endLine' => 146,
            'startTokenPos' => 155,
            'startFilePos' => 3936,
            'endTokenPos' => 156,
            'endFilePos' => 3937,
          ),
        ),
        'docComment' => '/**
 * Default field value.
 *
 * @var array
 * The default value is used when an entity is created, either:
 * - through an entity creation form; the form elements for the field are
 *   prepopulated with the default value.
 * - through direct API calls (i.e. $entity->save()); the default value is
 *   added if the $entity object provides no explicit entry (actual values or
 *   "the field is empty") for the field.
 *
 * The default value is expressed as a numerically indexed array of items,
 * each item being an array of key/value pairs matching the set of \'columns\'
 * defined by the "field schema" for the field type, as exposed in the class
 * implementing \\Drupal\\Core\\Field\\FieldItemInterface::schema() method. If the
 * number of items exceeds the cardinality of the field, extraneous items will
 * be ignored.
 *
 * This property is overlooked if the $default_value_callback is non-empty.
 *
 * Example for an integer field:
 * @code
 * [
 *   [\'value\' => 1],
 *   [\'value\' => 2],
 * ]
 * @endcode
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 146,
        'endLine' => 146,
        'startColumn' => 3,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'default_value_callback' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'default_value_callback',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 164,
            'endLine' => 164,
            'startTokenPos' => 167,
            'startFilePos' => 4554,
            'endTokenPos' => 167,
            'endFilePos' => 4555,
          ),
        ),
        'docComment' => '/**
 * The name of a callback function that returns default values.
 *
 * The function will be called with the following arguments:
 * - \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
 *   The entity being created.
 * - \\Drupal\\Core\\Field\\FieldDefinitionInterface $definition
 *   The field definition.
 * It should return an array of default values, in the same format as the
 * $default_value property.
 *
 * This property takes precedence on the list of fixed values specified in the
 * $default_value property.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 164,
        'endLine' => 164,
        'startColumn' => 3,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fieldStorage' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'fieldStorage',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The field storage object.
 *
 * @var \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 171,
        'endLine' => 171,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'itemDefinition' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'itemDefinition',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The data definition of a field item.
 *
 * @var \\Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinition
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 178,
        'endLine' => 178,
        'startColumn' => 3,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'constraints' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'constraints',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 185,
            'endLine' => 185,
            'startTokenPos' => 192,
            'startFilePos' => 4972,
            'endTokenPos' => 193,
            'endFilePos' => 4973,
          ),
        ),
        'docComment' => '/**
 * Array of constraint options keyed by constraint plugin ID.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 185,
        'endLine' => 185,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'propertyConstraints' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'name' => 'propertyConstraints',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 195,
            'endLine' => 195,
            'startTokenPos' => 204,
            'startFilePos' => 5212,
            'endTokenPos' => 205,
            'endFilePos' => 5213,
          ),
        ),
        'docComment' => '/**
 * Array of property constraint options keyed by property ID.
 *
 * The values are associative array of constraint options keyed by constraint
 * plugin ID.
 *
 * @var array[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 195,
        'endLine' => 195,
        'startColumn' => 3,
        'endColumn' => 38,
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
      'id' => 
      array (
        'name' => 'id',
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
        'startLine' => 200,
        'endLine' => 202,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 207,
        'endLine' => 209,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 221,
        'endLine' => 223,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 228,
        'endLine' => 230,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'aliasName' => NULL,
      ),
      'calculateDependencies' => 
      array (
        'name' => 'calculateDependencies',
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
        'endLine' => 257,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'aliasName' => NULL,
      ),
      'onDependencyRemoval' => 
      array (
        'name' => 'onDependencyRemoval',
        'parameters' => 
        array (
          'dependencies' => 
          array (
            'name' => 'dependencies',
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
            'startLine' => 262,
            'endLine' => 262,
            'startColumn' => 39,
            'endColumn' => 57,
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
        'startLine' => 262,
        'endLine' => 270,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'aliasName' => NULL,
      ),
      'postCreate' => 
      array (
        'name' => 'postCreate',
        'parameters' => 
        array (
          'storage' => 
          array (
            'name' => 'storage',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 275,
            'endLine' => 275,
            'startColumn' => 30,
            'endColumn' => 60,
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
        'startLine' => 275,
        'endLine' => 290,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'aliasName' => NULL,
      ),
      'postDelete' => 
      array (
        'name' => 'postDelete',
        'parameters' => 
        array (
          'storage' => 
          array (
            'name' => 'storage',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 295,
            'endLine' => 295,
            'startColumn' => 37,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fields' => 
          array (
            'name' => 'fields',
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
            'startLine' => 295,
            'endLine' => 295,
            'startColumn' => 70,
            'endColumn' => 82,
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
        'startLine' => 295,
        'endLine' => 305,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'aliasName' => NULL,
      ),
      'postSave' => 
      array (
        'name' => 'postSave',
        'parameters' => 
        array (
          'storage' => 
          array (
            'name' => 'storage',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 310,
            'endLine' => 310,
            'startColumn' => 28,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'update' => 
          array (
            'name' => 'update',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 310,
                'endLine' => 310,
                'startTokenPos' => 810,
                'startFilePos' => 8951,
                'endTokenPos' => 810,
                'endFilePos' => 8954,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 310,
            'endLine' => 310,
            'startColumn' => 61,
            'endColumn' => 74,
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
        'startLine' => 310,
        'endLine' => 319,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 324,
        'endLine' => 326,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 332,
            'endLine' => 332,
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
          0 => 
          array (
            'name' => 'Drupal\\Core\\Config\\Action\\Attribute\\ActionMethod',
            'isRepeated' => false,
            'arguments' => 
            array (
              'adminLabel' => 
              array (
                'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Set field label\')',
                'attributes' => 
                array (
                  'startLine' => 331,
                  'endLine' => 331,
                  'startTokenPos' => 917,
                  'startFilePos' => 9526,
                  'endTokenPos' => 922,
                  'endFilePos' => 9566,
                ),
              ),
              'pluralize' => 
              array (
                'code' => 'FALSE',
                'attributes' => 
                array (
                  'startLine' => 331,
                  'endLine' => 331,
                  'startTokenPos' => 928,
                  'startFilePos' => 9580,
                  'endTokenPos' => 928,
                  'endFilePos' => 9584,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 331,
        'endLine' => 335,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 340,
        'endLine' => 342,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 348,
            'endLine' => 348,
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
          0 => 
          array (
            'name' => 'Drupal\\Core\\Config\\Action\\Attribute\\ActionMethod',
            'isRepeated' => false,
            'arguments' => 
            array (
              'adminLabel' => 
              array (
                'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Set field description\')',
                'attributes' => 
                array (
                  'startLine' => 347,
                  'endLine' => 347,
                  'startTokenPos' => 988,
                  'startFilePos' => 9839,
                  'endTokenPos' => 993,
                  'endFilePos' => 9885,
                ),
              ),
              'pluralize' => 
              array (
                'code' => 'FALSE',
                'attributes' => 
                array (
                  'startLine' => 347,
                  'endLine' => 347,
                  'startTokenPos' => 999,
                  'startFilePos' => 9899,
                  'endTokenPos' => 999,
                  'endFilePos' => 9903,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 347,
        'endLine' => 351,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 356,
        'endLine' => 359,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 365,
            'endLine' => 365,
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
          0 => 
          array (
            'name' => 'Drupal\\Core\\Config\\Action\\Attribute\\ActionMethod',
            'isRepeated' => false,
            'arguments' => 
            array (
              'adminLabel' => 
              array (
                'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Set whether field is translatable\')',
                'attributes' => 
                array (
                  'startLine' => 364,
                  'endLine' => 364,
                  'startTokenPos' => 1073,
                  'startFilePos' => 10319,
                  'endTokenPos' => 1078,
                  'endFilePos' => 10377,
                ),
              ),
              'pluralize' => 
              array (
                'code' => 'FALSE',
                'attributes' => 
                array (
                  'startLine' => 364,
                  'endLine' => 364,
                  'startTokenPos' => 1084,
                  'startFilePos' => 10391,
                  'endTokenPos' => 1084,
                  'endFilePos' => 10395,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 364,
        'endLine' => 368,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 373,
        'endLine' => 375,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 381,
            'endLine' => 381,
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
          0 => 
          array (
            'name' => 'Drupal\\Core\\Config\\Action\\Attribute\\ActionMethod',
            'isRepeated' => false,
            'arguments' => 
            array (
              'adminLabel' => 
              array (
                'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Set field settings\')',
                'attributes' => 
                array (
                  'startLine' => 380,
                  'endLine' => 380,
                  'startTokenPos' => 1156,
                  'startFilePos' => 10724,
                  'endTokenPos' => 1161,
                  'endFilePos' => 10767,
                ),
              ),
              'pluralize' => 
              array (
                'code' => 'FALSE',
                'attributes' => 
                array (
                  'startLine' => 380,
                  'endLine' => 380,
                  'startTokenPos' => 1167,
                  'startFilePos' => 10781,
                  'endTokenPos' => 1167,
                  'endFilePos' => 10785,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 380,
        'endLine' => 384,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 389,
            'endLine' => 389,
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
        'startLine' => 389,
        'endLine' => 396,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 401,
            'endLine' => 401,
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
            'startLine' => 401,
            'endLine' => 401,
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
        'startLine' => 401,
        'endLine' => 404,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 409,
        'endLine' => 411,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 417,
            'endLine' => 417,
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
          0 => 
          array (
            'name' => 'Drupal\\Core\\Config\\Action\\Attribute\\ActionMethod',
            'isRepeated' => false,
            'arguments' => 
            array (
              'adminLabel' => 
              array (
                'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Set whether field is required\')',
                'attributes' => 
                array (
                  'startLine' => 416,
                  'endLine' => 416,
                  'startTokenPos' => 1333,
                  'startFilePos' => 11508,
                  'endTokenPos' => 1338,
                  'endFilePos' => 11562,
                ),
              ),
              'pluralize' => 
              array (
                'code' => 'FALSE',
                'attributes' => 
                array (
                  'startLine' => 416,
                  'endLine' => 416,
                  'startTokenPos' => 1344,
                  'startFilePos' => 11576,
                  'endTokenPos' => 1344,
                  'endFilePos' => 11580,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 416,
        'endLine' => 420,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 425,
            'endLine' => 425,
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
        'startLine' => 425,
        'endLine' => 437,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 442,
        'endLine' => 444,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 450,
            'endLine' => 450,
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
          0 => 
          array (
            'name' => 'Drupal\\Core\\Config\\Action\\Attribute\\ActionMethod',
            'isRepeated' => false,
            'arguments' => 
            array (
              'adminLabel' => 
              array (
                'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Set default value\')',
                'attributes' => 
                array (
                  'startLine' => 449,
                  'endLine' => 449,
                  'startTokenPos' => 1526,
                  'startFilePos' => 12481,
                  'endTokenPos' => 1531,
                  'endFilePos' => 12523,
                ),
              ),
              'pluralize' => 
              array (
                'code' => 'FALSE',
                'attributes' => 
                array (
                  'startLine' => 449,
                  'endLine' => 449,
                  'startTokenPos' => 1537,
                  'startFilePos' => 12537,
                  'endTokenPos' => 1537,
                  'endFilePos' => 12541,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 449,
        'endLine' => 453,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 458,
        'endLine' => 460,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 465,
            'endLine' => 465,
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
        'startLine' => 465,
        'endLine' => 468,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
 * Implements the magic __sleep() method.
 *
 * Using the Serialize interface and serialize() / unserialize() methods
 * breaks entity forms in PHP 5.4.
 *
 * @todo Investigate in https://www.drupal.org/node/1977206.
 */',
        'startLine' => 478,
        'endLine' => 486,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 491,
            'endLine' => 491,
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
        'startLine' => 491,
        'endLine' => 495,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 500,
            'endLine' => 500,
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
        'startLine' => 500,
        'endLine' => 504,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 509,
        'endLine' => 517,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 522,
        'endLine' => 524,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 529,
        'endLine' => 534,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 539,
        'endLine' => 541,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 546,
            'endLine' => 546,
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
        'startLine' => 546,
        'endLine' => 549,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 554,
        'endLine' => 573,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 578,
            'endLine' => 578,
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
        'startLine' => 578,
        'endLine' => 580,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 585,
            'endLine' => 585,
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
 * {@inheritdoc}
 */',
        'startLine' => 585,
        'endLine' => 588,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 593,
            'endLine' => 593,
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
                'startLine' => 593,
                'endLine' => 593,
                'startTokenPos' => 2149,
                'startFilePos' => 16364,
                'endTokenPos' => 2149,
                'endFilePos' => 16367,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 593,
            'endLine' => 593,
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
        'startLine' => 593,
        'endLine' => 596,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 601,
            'endLine' => 601,
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
            'startLine' => 601,
            'endLine' => 601,
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
 * {@inheritdoc}
 */',
        'startLine' => 601,
        'endLine' => 609,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
            'startLine' => 614,
            'endLine' => 614,
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
            'startLine' => 614,
            'endLine' => 614,
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
 * {@inheritdoc}
 */',
        'startLine' => 614,
        'endLine' => 624,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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
        'startLine' => 629,
        'endLine' => 635,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldConfigBase',
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