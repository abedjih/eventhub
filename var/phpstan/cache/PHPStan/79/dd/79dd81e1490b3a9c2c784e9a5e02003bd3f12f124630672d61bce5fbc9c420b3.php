<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/DataDefinitionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\TypedData\DataDefinitionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-96c38c3098a05c73d399fe8cb922cf07c7cc981ada837fed4fdc0dd9199f57cc-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/DataDefinitionInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\TypedData',
    'name' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
    'shortName' => 'DataDefinitionInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for data definitions.
 *
 * Data definitions are used to describe data based upon available data types.
 * For example, a plugin could describe its parameters using data definitions
 * in order to specify what kind of data is required for it.
 *
 * Definitions that describe lists or complex data have to implement the
 * respective interfaces, such that the metadata about contained list items or
 * properties can be retrieved from the definition.
 *
 * @see \\Drupal\\Core\\TypedData\\DataDefinition
 * @see \\Drupal\\Core\\TypedData\\ListDataDefinitionInterface
 * @see \\Drupal\\Core\\TypedData\\ComplexDataDefinitionInterface
 * @see \\Drupal\\Core\\TypedData\\DataReferenceDefinitionInterface
 * @see \\Drupal\\Core\\TypedData\\TypedDataInterface
 *
 * @ingroup typed_data
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 240,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
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
      'createFromDataType' => 
      array (
        'name' => 'createFromDataType',
        'parameters' => 
        array (
          'data_type' => 
          array (
            'name' => 'data_type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
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
 * Creates a new data definition object.
 *
 * This method is typically used by
 * \\Drupal\\Core\\TypedData\\TypedDataManager::createDataDefinition() to build a
 * definition object for an arbitrary data type. When the definition class is
 * known, it is recommended to directly use the static create() method on that
 * class instead; e.g.:
 * @code
 *   $map_definition = \\Drupal\\Core\\TypedData\\MapDataDefinition::create();
 * @endcode
 *
 * @param string $data_type
 *   The data type, for which a data definition should be created.
 *
 * @return static
 *
 * @throws \\InvalidArgumentException
 *   If an unsupported data type gets passed to the class; e.g., \'string\' to a
 *   definition class handling \'entity:* data types.
 */',
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 3,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
 * Returns the data type of the data.
 *
 * @return string
 *   The data type.
 */',
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
 * Returns a human readable label.
 *
 * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup|null
 *   The label. A string or an instance of TranslatableMarkup will be returned
 *   based on the way the label translation is handled. NULL if no label is
 *   available.
 */',
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
 * Returns a human readable description.
 *
 * Descriptions are usually used on user interfaces where the data is edited
 * or displayed.
 *
 * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup|null
 *   The description. A string or an instance of TranslatableMarkup will be
 *   returned based on the way the description translation is handled. NULL if
 *   no description is available.
 */',
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
 * Returns whether the data is multi-valued, i.e. a list of data items.
 *
 * This is equivalent to checking whether the data definition implements the
 * \\Drupal\\Core\\TypedData\\ListDataDefinitionInterface interface.
 *
 * @return bool
 *   Whether the data is multi-valued.
 */',
        'startLine' => 89,
        'endLine' => 89,
        'startColumn' => 3,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
 * Determines whether the data is read-only.
 *
 * @return bool
 *   Whether the data is read-only.
 */',
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
 * Determines whether the data value is computed.
 *
 * For example, data could be computed depending on some other values.
 *
 * @return bool
 *   Whether the data value is computed.
 */',
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
 * Determines whether a data value is required.
 *
 * For required data a non-NULL value is mandatory.
 *
 * @return bool
 *   Whether a data value is required.
 */',
        'startLine' => 117,
        'endLine' => 117,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
 * Returns the class used for creating the typed data object.
 *
 * If not specified, the default class of the data type will be returned.
 *
 * @return string
 *   The class used for creating the typed data object.
 */',
        'startLine' => 127,
        'endLine' => 127,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
 * Returns the array of settings, as required by the used class.
 *
 * See the documentation of the class for supported or required settings.
 *
 * @return array
 *   The array of settings.
 */',
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
            'startLine' => 148,
            'endLine' => 148,
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
 * Returns the value of a given setting.
 *
 * @param string $setting_name
 *   The setting name.
 *
 * @return mixed
 *   The setting value or NULL if the setting name doesn\'t exist.
 */',
        'startLine' => 148,
        'endLine' => 148,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
 * The validation constraints of a definition consist of any for it defined
 * constraints and default constraints, which are generated based on the
 * definition and its data type. See
 * \\Drupal\\Core\\TypedData\\TypedDataManager::getDefaultConstraints().
 *
 * Constraints are defined via an array, having constraint plugin IDs as key
 * and constraint options as values, e.g.
 * @code
 * $constraints = [
 *   \'Range\' => [\'min\' => 5, \'max\' => 10],
 *   \'NotBlank\' => [],
 * ];
 * @endcode
 * Options have to be specified using another array if the constraint has more
 * than one or zero options. If it has exactly one option, the value should be
 * specified without nesting it into another array:
 * @code
 * $constraints = [
 *   \'EntityType\' => \'node\',
 *   \'Bundle\' => \'article\',
 * ];
 * @endcode
 *
 * Note that the specified constraints must be compatible with the data type,
 * e.g. for data of type \'entity\' the \'EntityType\' and \'Bundle\' constraints
 * may be specified.
 *
 * @see \\Drupal\\Core\\Validation\\ConstraintManager
 *
 * @return array[]
 *   An array of validation constraint definitions, keyed by constraint name.
 *   Each constraint definition can be used for instantiating
 *   \\Symfony\\Component\\Validator\\Constraint objects.
 *
 * @see \\Symfony\\Component\\Validator\\Constraint
 */',
        'startLine' => 189,
        'endLine' => 189,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
            'startLine' => 206,
            'endLine' => 206,
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
        'startLine' => 206,
        'endLine' => 206,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
            'startLine' => 222,
            'endLine' => 222,
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
                'startLine' => 222,
                'endLine' => 222,
                'startTokenPos' => 178,
                'startFilePos' => 6815,
                'endTokenPos' => 178,
                'endFilePos' => 6818,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 222,
            'endLine' => 222,
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
 * Adds a validation constraint.
 *
 * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
 * details.
 *
 * @param string $constraint_name
 *   The name of the constraint to add, i.e. its plugin id.
 * @param array|null $options
 *   The constraint options as required by the constraint plugin, or NULL.
 *
 * @return static
 *   The object itself for chaining.
 */',
        'startLine' => 222,
        'endLine' => 222,
        'startColumn' => 3,
        'endColumn' => 67,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
 * Determines whether the data value is internal.
 *
 * This can be used in a scenario when it is not desirable to expose this data
 * value to an external system.
 *
 * The implications of this method are left to the discretion of the caller.
 * For example, a module providing an HTTP API may not expose entities of
 * this type or a custom entity reference field settings form may reduce the
 * priority for entities of this type in a select list.
 *
 * @return bool
 *   Whether the data value is internal.
 */',
        'startLine' => 238,
        'endLine' => 238,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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