<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldItemInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Field\FieldItemInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-308169491fccd89da2e69635461159f4df80d7486075d1afe5daccacd42940ce-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldItemInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Field',
    'name' => 'Drupal\\Core\\Field\\FieldItemInterface',
    'shortName' => 'FieldItemInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for entity field items.
 *
 * Entity field items are typed data objects containing the field values, i.e.
 * implementing the ComplexDataInterface.
 *
 * When implementing this interface which extends Traversable, make sure to list
 * IteratorAggregate or Iterator before this interface in the implements clause.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemListInterface
 * @see \\Drupal\\Core\\Field\\FieldItemBase
 * @ingroup field_types
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 509,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
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
      'propertyDefinitions' => 
      array (
        'name' => 'propertyDefinitions',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
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
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 46,
            'endColumn' => 94,
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
 * Defines field item properties.
 *
 * Properties that are required to constitute a valid, non-empty item should
 * be denoted with \\Drupal\\Core\\TypedData\\DataDefinition::setRequired().
 *
 * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface[]
 *   An array of property definitions of contained properties, keyed by
 *   property name.
 *
 * @see \\Drupal\\Core\\Field\\BaseFieldDefinition
 */',
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 96,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'mainPropertyName' => 
      array (
        'name' => 'mainPropertyName',
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
 * text field or the target_id of an entity reference. If the field item has
 * no main property, the method returns NULL.
 *
 * @return string|null
 *   The name of the value property, or NULL if there is none.
 *
 * @see \\Drupal\\Core\\Field\\BaseFieldDefinition
 */',
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'schema' => 
      array (
        'name' => 'schema',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
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
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 33,
            'endColumn' => 81,
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
 * Returns the schema for the field.
 *
 * This method is static because the field schema information is needed on
 * creation of the field. FieldItemInterface objects instantiated at that
 * time are not reliable as field settings might be missing.
 *
 * Computed fields having no schema should return an empty array.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $field_definition
 *   The field definition.
 *
 * @return array
 *   An empty array if there is no schema, or an associative array with the
 *   following key/value pairs:
 *   - columns: An array of Schema API column specifications, keyed by column
 *     name. The columns need to be a subset of the properties defined in
 *     propertyDefinitions(). The \'not null\' property is ignored if present,
 *     as it is determined automatically by the storage controller depending
 *     on the table layout and the property definitions. It is recommended to
 *     avoid having the column definitions depend on field settings when
 *     possible. No assumptions should be made on how storage engines
 *     internally use the original column name to structure their storage.
 *   - unique keys: (optional) An array of Schema API unique key definitions.
 *     Only columns that appear in the \'columns\' array are allowed.
 *   - indexes: (optional) An array of Schema API index definitions. Only
 *     columns that appear in the \'columns\' array are allowed. Those indexes
 *     will be used as default indexes. Field definitions can specify
 *     additional indexes or, at their own risk, modify the default indexes
 *     specified by the field-type module. Some storage engines might not
 *     support indexes.
 *   - foreign keys: (optional) An array of Schema API foreign key
 *     definitions. Note, however, that the field data is not necessarily
 *     stored in SQL. Also, the possible usage is limited, as you cannot
 *     specify another field as related, only existing SQL tables,
 *     such as {taxonomy_term_data}.
 *
 * @throws \\Drupal\\Core\\Field\\FieldException
 *   Throws an exception if the schema is invalid.
 */',
        'startLine' => 91,
        'endLine' => 91,
        'startColumn' => 3,
        'endColumn' => 83,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'getEntity' => 
      array (
        'name' => 'getEntity',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the entity that field belongs to.
 *
 * @return \\Drupal\\Core\\Entity\\FieldableEntityInterface
 *   The entity object.
 */',
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'getLangcode' => 
      array (
        'name' => 'getLangcode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the langcode of the field values held in the object.
 *
 * @return string
 *   The langcode.
 */',
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'getFieldDefinition' => 
      array (
        'name' => 'getFieldDefinition',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the field definition.
 *
 * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface
 *   The field definition.
 */',
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 3,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
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
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 25,
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
 * Magic method: Gets a property value.
 *
 * @param string $property_name
 *   The name of the property to get; e.g., \'title\' or \'name\'.
 *
 * @return mixed
 *   The property value.
 *
 * @throws \\InvalidArgumentException
 *   If a non-existent property is accessed.
 */',
        'startLine' => 129,
        'endLine' => 129,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      '__set' => 
      array (
        'name' => '__set',
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
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 25,
            'endColumn' => 38,
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
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 41,
            'endColumn' => 46,
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
 * Magic method: Sets a property value.
 *
 * @param string $property_name
 *   The name of the property to set; e.g., \'title\' or \'name\'.
 * @param mixed $value
 *   The value to set, or NULL to unset the property. Optionally, a typed
 *   data object implementing Drupal\\Core\\TypedData\\TypedDataInterface may be
 *   passed instead of a plain value.
 *
 * @throws \\InvalidArgumentException
 *   If a non-existent property is set.
 */',
        'startLine' => 144,
        'endLine' => 144,
        'startColumn' => 3,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      '__isset' => 
      array (
        'name' => '__isset',
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
            'startLine' => 155,
            'endLine' => 155,
            'startColumn' => 27,
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
 * Magic method: Determines whether a property is set.
 *
 * @param string $property_name
 *   The name of the property to get; e.g., \'title\' or \'name\'.
 *
 * @return bool
 *   Returns TRUE if the property exists and is set, FALSE otherwise.
 */',
        'startLine' => 155,
        'endLine' => 155,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      '__unset' => 
      array (
        'name' => '__unset',
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
            'startLine' => 163,
            'endLine' => 163,
            'startColumn' => 27,
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
 * Magic method: Unsets a property.
 *
 * @param string $property_name
 *   The name of the property to get; e.g., \'title\' or \'name\'.
 */',
        'startLine' => 163,
        'endLine' => 163,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'view' => 
      array (
        'name' => 'view',
        'parameters' => 
        array (
          'display_options' => 
          array (
            'name' => 'display_options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 179,
                'endLine' => 179,
                'startTokenPos' => 170,
                'startFilePos' => 6385,
                'endTokenPos' => 171,
                'endFilePos' => 6386,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 24,
            'endColumn' => 44,
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
 * Returns a renderable array for a single field item.
 *
 * @param string|array $display_options
 *   Can be either the name of a view mode, or an array of display settings.
 *   See EntityViewBuilderInterface::viewField() for more information.
 *
 * @return array
 *   A renderable array for the field item.
 *
 * @see \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::viewField()
 * @see \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::viewFieldItem()
 * @see \\Drupal\\Core\\Field\\FieldItemListInterface::view()
 */',
        'startLine' => 179,
        'endLine' => 179,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'preSave' => 
      array (
        'name' => 'preSave',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Defines custom presave behavior for field values.
 *
 * This method is called during the process of saving an entity, just before
 * values are written into storage. When storing a new entity, its identifier
 * will not be available yet. This should be used to massage item property
 * values or perform any other operation that needs to happen before values
 * are stored. For instance this is the proper phase to auto-create a new
 * entity for an entity reference field item, because this way it will be
 * possible to store the referenced entity identifier.
 */',
        'startLine' => 192,
        'endLine' => 192,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'postSave' => 
      array (
        'name' => 'postSave',
        'parameters' => 
        array (
          'update' => 
          array (
            'name' => 'update',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 28,
            'endColumn' => 34,
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
 * Defines custom post-save behavior for field values.
 *
 * This method is called during the process of saving an entity, just after
 * values are written into storage. This is useful mostly when the business
 * logic to be implemented always requires the entity identifier, even when
 * storing a new entity. For instance, when implementing circular entity
 * references, the referenced entity will be created on pre-save with a dummy
 * value for the referring entity identifier, which will be updated with the
 * actual one on post-save.
 *
 * In the rare cases where item properties depend on the entity identifier,
 * massaging logic will have to be implemented on post-save and returning TRUE
 * will allow them to be rewritten to the storage with the updated values.
 *
 * @param bool $update
 *   Specifies whether the entity is being updated or created.
 *
 * @return bool
 *   Whether field items should be rewritten to the storage as a consequence
 *   of the logic implemented by the custom behavior.
 */',
        'startLine' => 216,
        'endLine' => 216,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Defines custom delete behavior for field values.
 *
 * This method is called during the process of deleting an entity, just before
 * values are deleted from storage.
 */',
        'startLine' => 224,
        'endLine' => 224,
        'startColumn' => 3,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'deleteRevision' => 
      array (
        'name' => 'deleteRevision',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Defines custom revision delete behavior for field values.
 *
 * This method is called from during the process of deleting an entity
 * revision, just before the field values are deleted from storage. It is only
 * called for entity types that support revisioning.
 */',
        'startLine' => 233,
        'endLine' => 233,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'generateSampleValue' => 
      array (
        'name' => 'generateSampleValue',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 247,
            'endLine' => 247,
            'startColumn' => 46,
            'endColumn' => 87,
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
 * Generates placeholder field values.
 *
 * Useful when populating site with placeholder content during site building
 * or profiling.
 *
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The field definition.
 *
 * @return array
 *   An associative array of values.
 */',
        'startLine' => 247,
        'endLine' => 247,
        'startColumn' => 3,
        'endColumn' => 89,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'defaultStorageSettings' => 
      array (
        'name' => 'defaultStorageSettings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Defines the storage-level settings for this plugin.
 *
 * Setting names defined by this method must not duplicate the setting names
 * returned by this plugin\'s implementation of defaultFieldSettings(), as
 * both lists of settings are merged.
 *
 * @return array
 *   A list of default settings, keyed by the setting name.
 */',
        'startLine' => 259,
        'endLine' => 259,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'defaultFieldSettings' => 
      array (
        'name' => 'defaultFieldSettings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Defines the field-level settings for this plugin.
 *
 * Setting names defined by this method must not duplicate the setting names
 * returned by this plugin\'s implementation of defaultStorageSettings(), as
 * both lists of settings are merged.
 *
 * @return array
 *   A list of default settings, keyed by the setting name.
 */',
        'startLine' => 271,
        'endLine' => 271,
        'startColumn' => 3,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'storageSettingsSummary' => 
      array (
        'name' => 'storageSettingsSummary',
        'parameters' => 
        array (
          'storage_definition' => 
          array (
            'name' => 'storage_definition',
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
            'startLine' => 287,
            'endLine' => 287,
            'startColumn' => 49,
            'endColumn' => 99,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a short summary of the field\'s storage-level settings.
 *
 * All information returned by this function should communicate fundamental
 * information about the field storage settings for users. For example, in the
 * case of a reference field, the configured target entity type is a crucial
 * piece of information for understanding how the field can be used.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
 *   The field storage definition.
 *
 * @return array
 *   A renderable array summarizing storage-level settings.
 */',
        'startLine' => 287,
        'endLine' => 287,
        'startColumn' => 3,
        'endColumn' => 108,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'fieldSettingsSummary' => 
      array (
        'name' => 'fieldSettingsSummary',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 303,
            'endLine' => 303,
            'startColumn' => 47,
            'endColumn' => 88,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a short summary of the field\'s field-level settings.
 *
 * All information returned by this function should communicate fundamental
 * information about the field settings for users. For example, in the case of
 * a reference field, the selected target entity bundles are a crucial
 * piece of information for understanding how the field can be used.
 *
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The field entity.
 *
 * @return array
 *   A renderable array summarizing the field-level settings.
 */',
        'startLine' => 303,
        'endLine' => 303,
        'startColumn' => 3,
        'endColumn' => 97,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'storageSettingsToConfigData' => 
      array (
        'name' => 'storageSettingsToConfigData',
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
            'startLine' => 337,
            'endLine' => 337,
            'startColumn' => 54,
            'endColumn' => 68,
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
 * Returns a settings array that can be stored as a configuration value.
 *
 * For all use cases where field settings are stored and managed as
 * configuration, this method is used to map from the field type\'s
 * representation of its settings to a representation compatible with
 * deployable configuration. This includes:
 * - Array keys at any depth must not contain a ".".
 * - Ideally, array keys at any depth are either numeric or can be enumerated
 *   as a "mapping" within the configuration schema. While not strictly
 *   required, this simplifies configuration translation UIs, configuration
 *   migrations between Drupal versions, and other use cases.
 * - To support configuration deployments, references to content entities
 *   must use UUIDs rather than local IDs.
 *
 * An example of a conversion between representations might be an
 * "allowed_values" setting that\'s structured by the field type as a
 * \\Drupal\\Core\\TypedData\\OptionsProviderInterface::getPossibleOptions()
 * result (i.e., values as keys and labels as values). For such a use case,
 * in order to comply with the above, this method could convert that
 * representation to a numerically indexed array whose values are sub-arrays
 * with the schema definable keys of "value" and "label".
 *
 * @param array $settings
 *   The field\'s settings in the field type\'s canonical representation.
 *
 * @return array
 *   An array (either the unmodified $settings or a modified representation)
 *   that is suitable for storing as a deployable configuration value.
 *
 * @see \\Drupal\\Core\\Config\\Config::set()
 */',
        'startLine' => 337,
        'endLine' => 337,
        'startColumn' => 3,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'storageSettingsFromConfigData' => 
      array (
        'name' => 'storageSettingsFromConfigData',
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
            'startLine' => 354,
            'endLine' => 354,
            'startColumn' => 56,
            'endColumn' => 70,
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
 * Returns a settings array in the field type\'s canonical representation.
 *
 * This function does the inverse of static::storageSettingsToConfigData().
 * It\'s called when loading a field\'s settings from a configuration object.
 *
 * @param array $settings
 *   The field\'s settings, as it is stored within a configuration object.
 *
 * @return array
 *   The settings, in the representation expected by the field type and code
 *   that interacts with it.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemInterface::storageSettingsToConfigData()
 */',
        'startLine' => 354,
        'endLine' => 354,
        'startColumn' => 3,
        'endColumn' => 72,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'fieldSettingsToConfigData' => 
      array (
        'name' => 'fieldSettingsToConfigData',
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
            'startLine' => 371,
            'endLine' => 371,
            'startColumn' => 52,
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
 * Returns a settings array that can be stored as a configuration value.
 *
 * Same as static::storageSettingsToConfigData(), but for the field\'s
 * settings.
 *
 * @param array $settings
 *   The field\'s settings in the field type\'s canonical representation.
 *
 * @return array
 *   An array (either the unmodified $settings or a modified representation)
 *   that is suitable for storing as a deployable configuration value.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemInterface::storageSettingsToConfigData()
 */',
        'startLine' => 371,
        'endLine' => 371,
        'startColumn' => 3,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'fieldSettingsFromConfigData' => 
      array (
        'name' => 'fieldSettingsFromConfigData',
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
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 54,
            'endColumn' => 68,
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
 * Returns a settings array in the field type\'s canonical representation.
 *
 * This function does the inverse of static::fieldSettingsToConfigData().
 * It\'s called when loading a field\'s settings from a configuration
 * object.
 *
 * @param array $settings
 *   The field\'s settings, as it is stored within a configuration
 *   object.
 *
 * @return array
 *   The field settings, in the representation expected by the field type
 *   and code that interacts with it.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemInterface::fieldSettingsToConfigData()
 */',
        'startLine' => 390,
        'endLine' => 390,
        'startColumn' => 3,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'storageSettingsForm' => 
      array (
        'name' => 'storageSettingsForm',
        'parameters' => 
        array (
          'form' => 
          array (
            'name' => 'form',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 414,
            'endLine' => 414,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'form_state' => 
          array (
            'name' => 'form_state',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Form\\FormStateInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 414,
            'endLine' => 414,
            'startColumn' => 53,
            'endColumn' => 82,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'has_data' => 
          array (
            'name' => 'has_data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 414,
            'endLine' => 414,
            'startColumn' => 85,
            'endColumn' => 93,
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
 * Returns a form for the storage-level settings.
 *
 * Invoked from \\Drupal\\field_ui\\Form\\FieldStorageConfigEditForm to allow
 * administrators to configure storage-level settings.
 *
 * Field storage might reject settings changes that affect the field
 * storage schema if the storage already has data. When the $has_data
 * parameter is TRUE, the form should not allow changing the settings that
 * take part in the schema() method. It is recommended to set #access to
 * FALSE on the corresponding elements.
 *
 * @param array $form
 *   The form where the settings form is being included in.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The form state of the (entire) configuration form.
 * @param bool $has_data
 *   TRUE if the field already has data, FALSE if not.
 *
 * @return array
 *   The form definition for the field settings.
 */',
        'startLine' => 414,
        'endLine' => 414,
        'startColumn' => 3,
        'endColumn' => 95,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'fieldSettingsForm' => 
      array (
        'name' => 'fieldSettingsForm',
        'parameters' => 
        array (
          'form' => 
          array (
            'name' => 'form',
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
            'startLine' => 430,
            'endLine' => 430,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'form_state' => 
          array (
            'name' => 'form_state',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Form\\FormStateInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 430,
            'endLine' => 430,
            'startColumn' => 50,
            'endColumn' => 79,
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
 * Returns a form for the field-level settings.
 *
 * Invoked from \\Drupal\\field_ui\\Form\\FieldConfigEditForm to allow
 * administrators to configure field-level settings.
 *
 * @param array $form
 *   The form where the settings form is being included in.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The form state of the (entire) configuration form.
 *
 * @return array
 *   The form definition for the field settings.
 */',
        'startLine' => 430,
        'endLine' => 430,
        'startColumn' => 3,
        'endColumn' => 81,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'calculateDependencies' => 
      array (
        'name' => 'calculateDependencies',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 458,
            'endLine' => 458,
            'startColumn' => 48,
            'endColumn' => 89,
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
 * Calculates dependencies for field items.
 *
 * Dependencies are saved in the field configuration entity and are used to
 * determine configuration synchronization order. For example, if the field
 * type\'s default value is a content entity, this method should return an
 * array of dependencies listing the content entities.
 *
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The field definition.
 *
 * @return array
 *   An array of dependencies grouped by type (config, content, module,
 *   theme). For example:
 *   @code
 *   [
 *     \'config\' => [\'user.role.anonymous\', \'user.role.authenticated\'],
 *     \'content\' => [\'node:article:f0a189e6-55fb-47fb-8005-5bef81c44d6d\'],
 *     \'module\' => [\'node\', \'user\'],
 *     \'theme\' => [\'claro\'],
 *   ];
 *   @endcode
 *
 * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
 * @see \\Drupal\\Core\\Config\\Entity\\ConfigEntityInterface::getConfigDependencyName()
 */',
        'startLine' => 458,
        'endLine' => 458,
        'startColumn' => 3,
        'endColumn' => 91,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'calculateStorageDependencies' => 
      array (
        'name' => 'calculateStorageDependencies',
        'parameters' => 
        array (
          'field_storage_definition' => 
          array (
            'name' => 'field_storage_definition',
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
            'startLine' => 491,
            'endLine' => 491,
            'startColumn' => 55,
            'endColumn' => 111,
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
 * Calculates dependencies for field items on the storage level.
 *
 * Dependencies are saved in the field storage configuration entity and are
 * used to determine configuration synchronization order. For example, if the
 * field type storage depends on a particular entity type, this method should
 * return an array of dependencies listing the module that provides the entity
 * type.
 *
 * Dependencies returned from this method are stored in field storage
 * configuration and are always considered hard dependencies. If the
 * dependency is removed the field storage configuration must be deleted.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $field_storage_definition
 *   The field storage definition.
 *
 * @return array
 *   An array of dependencies grouped by type (config, content, module,
 *   theme). For example:
 *   @code
 *   [
 *     \'config\' => [\'user.role.anonymous\', \'user.role.authenticated\'],
 *     \'content\' => [\'node:article:f0a189e6-55fb-47fb-8005-5bef81c44d6d\'],
 *     \'module\' => [\'node\', \'user\'],
 *     \'theme\' => [\'claro\'],
 *   ];
 *   @endcode
 *
 * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
 * @see \\Drupal\\Core\\Config\\Entity\\ConfigEntityInterface::getConfigDependencyName()
 */',
        'startLine' => 491,
        'endLine' => 491,
        'startColumn' => 3,
        'endColumn' => 113,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'aliasName' => NULL,
      ),
      'onDependencyRemoval' => 
      array (
        'name' => 'onDependencyRemoval',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 46,
            'endColumn' => 87,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 90,
            'endColumn' => 108,
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
 * Informs the plugin that a dependency of the field will be deleted.
 *
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The field definition.
 * @param array $dependencies
 *   An array of dependencies that will be deleted keyed by dependency type.
 *   Dependency types are, for example, entity, module and theme.
 *
 * @return bool
 *   TRUE if the field definition has been changed as a result, FALSE if not.
 *
 * @see \\Drupal\\Core\\Config\\ConfigEntityInterface::onDependencyRemoval()
 */',
        'startLine' => 507,
        'endLine' => 507,
        'startColumn' => 3,
        'endColumn' => 110,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemInterface',
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