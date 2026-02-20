<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldItemListInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Field\FieldItemListInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-de686b67aad7848e1d4c1f40e065d99977bf83172343c205579a543a898a94e0-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldItemListInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Field',
    'name' => 'Drupal\\Core\\Field\\FieldItemListInterface',
    'shortName' => 'FieldItemListInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for fields, being lists of field items.
 *
 * This interface must be implemented by every entity field, whereas contained
 * field items must implement the FieldItemInterface.
 * Some methods of the fields are delegated to the first contained item, in
 * particular get() and set() as well as their magic equivalences.
 *
 * Optionally, a typed data object implementing
 * Drupal\\Core\\TypedData\\TypedDataInterface may be passed to
 * ArrayAccess::offsetSet() instead of a plain value.
 *
 * When implementing this interface which extends Traversable, make sure to list
 * IteratorAggregate or Iterator before this interface in the implements clause.
 *
 * @template T of \\Drupal\\Core\\Field\\FieldItemInterface
 * @extends \\Drupal\\Core\\TypedData\\ListInterface<T>
 * @property mixed $value
 *
 * @see \\Drupal\\Core\\Field\\FieldItemInterface
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 32,
    'endLine' => 304,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\TypedData\\ListInterface',
      1 => 'Drupal\\Core\\Access\\AccessibleInterface',
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
 *   The entity object. If the entity is translatable and a specific
 *   translation is required, always request it by calling ::getTranslation()
 *   or ::getUntranslated() as the language of the returned object is not
 *   defined.
 */',
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'aliasName' => NULL,
      ),
      'setLangcode' => 
      array (
        'name' => 'setLangcode',
        'parameters' => 
        array (
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 51,
            'endLine' => 51,
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
 * Sets the langcode of the field values held in the object.
 *
 * @param string $langcode
 *   The langcode.
 */',
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
        'startLine' => 67,
        'endLine' => 67,
        'startColumn' => 3,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
 * Returns the array of field settings.
 *
 * @return array
 *   An array of key/value pairs.
 */',
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
            'startLine' => 86,
            'endLine' => 86,
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
 * Returns the value of a given field setting.
 *
 * @param string $setting_name
 *   The setting name.
 *
 * @return mixed
 *   The setting value.
 */',
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'aliasName' => NULL,
      ),
      'defaultAccess' => 
      array (
        'name' => 'defaultAccess',
        'parameters' => 
        array (
          'operation' => 
          array (
            'name' => 'operation',
            'default' => 
            array (
              'code' => '\'view\'',
              'attributes' => 
              array (
                'startLine' => 97,
                'endLine' => 97,
                'startTokenPos' => 127,
                'startFilePos' => 2777,
                'endTokenPos' => 127,
                'endFilePos' => 2782,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 33,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'account' => 
          array (
            'name' => 'account',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 97,
                'endLine' => 97,
                'startTokenPos' => 137,
                'startFilePos' => 2814,
                'endTokenPos' => 137,
                'endFilePos' => 2817,
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
                      'name' => 'Drupal\\Core\\Session\\AccountInterface',
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
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 54,
            'endColumn' => 86,
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
 * Contains the default access logic of this field.
 *
 * See \\Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface::fieldAccess()
 * for the parameter documentation.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultInterface
 *   The access result.
 */',
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 3,
        'endColumn' => 88,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'aliasName' => NULL,
      ),
      'filterEmptyItems' => 
      array (
        'name' => 'filterEmptyItems',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Filters out empty field items and re-numbers the item deltas.
 *
 * @return $this
 */',
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
            'startLine' => 111,
            'endLine' => 111,
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
 * Magic method: Gets a property value of to the first field item.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemInterface::__set()
 */',
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
            'startLine' => 118,
            'endLine' => 118,
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
            'startLine' => 118,
            'endLine' => 118,
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
 * Magic method: Sets a property value of the first field item.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemInterface::__get()
 */',
        'startLine' => 118,
        'endLine' => 118,
        'startColumn' => 3,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
            'startLine' => 125,
            'endLine' => 125,
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
 * Magic method: Determines whether a property of the first field item is set.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemInterface::__unset()
 */',
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
            'startLine' => 132,
            'endLine' => 132,
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
 * Magic method: Unsets a property of the first field item.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemInterface::__isset()
 */',
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
 * item values are written into storage.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemInterface::preSave()
 */',
        'startLine' => 142,
        'endLine' => 142,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
            'startLine' => 159,
            'endLine' => 159,
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
 * item values are written into storage.
 *
 * @param bool $update
 *   Specifies whether the entity is being updated or created.
 *
 * @return bool
 *   Whether field items should be rewritten to the storage as a consequence
 *   of the logic implemented by the custom behavior.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemInterface::postSave()
 */',
        'startLine' => 159,
        'endLine' => 159,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
        'startLine' => 167,
        'endLine' => 167,
        'startColumn' => 3,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
        'startLine' => 176,
        'endLine' => 176,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
                'startLine' => 191,
                'endLine' => 191,
                'startTokenPos' => 260,
                'startFilePos' => 5615,
                'endTokenPos' => 261,
                'endFilePos' => 5616,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 191,
            'endLine' => 191,
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
 * Returns a renderable array for the field items.
 *
 * @param string|array $display_options
 *   Can be either the name of a view mode, or an array of display settings.
 *   See EntityViewBuilderInterface::viewField() for more information.
 *
 * @return array
 *   A renderable array for the field values.
 *
 * @see \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::viewField()
 * @see \\Drupal\\Core\\Field\\FieldItemInterface::view()
 */',
        'startLine' => 191,
        'endLine' => 191,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'aliasName' => NULL,
      ),
      'generateSampleItems' => 
      array (
        'name' => 'generateSampleItems',
        'parameters' => 
        array (
          'count' => 
          array (
            'name' => 'count',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 199,
                'endLine' => 199,
                'startTokenPos' => 277,
                'startFilePos' => 5819,
                'endTokenPos' => 277,
                'endFilePos' => 5819,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 199,
            'endLine' => 199,
            'startColumn' => 39,
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
 * Populates a specified number of field items with valid sample data.
 *
 * @param int $count
 *   The number of items to create.
 */',
        'startLine' => 199,
        'endLine' => 199,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'aliasName' => NULL,
      ),
      'defaultValuesForm' => 
      array (
        'name' => 'defaultValuesForm',
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
            'startLine' => 215,
            'endLine' => 215,
            'startColumn' => 37,
            'endColumn' => 48,
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
            'startLine' => 215,
            'endLine' => 215,
            'startColumn' => 51,
            'endColumn' => 80,
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
 * Returns a form for the default value input.
 *
 * Invoked from \\Drupal\\field_ui\\Form\\FieldConfigEditForm to allow
 * administrators to configure instance-level default value.
 *
 * @param array $form
 *   The form where the settings form is being included in.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The form state of the (entire) configuration form.
 *
 * @return array
 *   The form definition for the field default value.
 */',
        'startLine' => 215,
        'endLine' => 215,
        'startColumn' => 3,
        'endColumn' => 82,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'aliasName' => NULL,
      ),
      'defaultValuesFormValidate' => 
      array (
        'name' => 'defaultValuesFormValidate',
        'parameters' => 
        array (
          'element' => 
          array (
            'name' => 'element',
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
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 230,
            'endLine' => 230,
            'startColumn' => 61,
            'endColumn' => 72,
            'parameterIndex' => 1,
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
            'startLine' => 230,
            'endLine' => 230,
            'startColumn' => 75,
            'endColumn' => 104,
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
 * Validates the submitted default value.
 *
 * Invoked from \\Drupal\\field_ui\\Form\\FieldConfigEditForm to allow
 * administrators to configure instance-level default value.
 *
 * @param array $element
 *   The default value form element.
 * @param array $form
 *   The form where the settings form is being included in.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The form state of the (entire) configuration form.
 */',
        'startLine' => 230,
        'endLine' => 230,
        'startColumn' => 3,
        'endColumn' => 106,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'aliasName' => NULL,
      ),
      'defaultValuesFormSubmit' => 
      array (
        'name' => 'defaultValuesFormSubmit',
        'parameters' => 
        array (
          'element' => 
          array (
            'name' => 'element',
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
            'startLine' => 248,
            'endLine' => 248,
            'startColumn' => 43,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 248,
            'endLine' => 248,
            'startColumn' => 59,
            'endColumn' => 70,
            'parameterIndex' => 1,
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
            'startLine' => 248,
            'endLine' => 248,
            'startColumn' => 73,
            'endColumn' => 102,
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
 * Processes the submitted default value.
 *
 * Invoked from \\Drupal\\field_ui\\Form\\FieldConfigEditForm to allow
 * administrators to configure instance-level default value.
 *
 * @param array $element
 *   The default value form element.
 * @param array $form
 *   The form where the settings form is being included in.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The form state of the (entire) configuration form.
 *
 * @return array
 *   The field default value.
 */',
        'startLine' => 248,
        'endLine' => 248,
        'startColumn' => 3,
        'endColumn' => 104,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'aliasName' => NULL,
      ),
      'processDefaultValue' => 
      array (
        'name' => 'processDefaultValue',
        'parameters' => 
        array (
          'default_value' => 
          array (
            'name' => 'default_value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 268,
            'endLine' => 268,
            'startColumn' => 46,
            'endColumn' => 59,
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
            'startLine' => 268,
            'endLine' => 268,
            'startColumn' => 62,
            'endColumn' => 93,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'definition' => 
          array (
            'name' => 'definition',
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
            'startLine' => 268,
            'endLine' => 268,
            'startColumn' => 96,
            'endColumn' => 131,
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
 * Processes the default value before being applied.
 *
 * Defined or configured default values of a field might need some processing
 * in order to be a valid runtime value for the field type; e.g., a date field
 * could process the defined value of \'NOW\' to a valid date.
 *
 * @param array $default_value
 *   The unprocessed default value defined for the field, as a numerically
 *   indexed array of items, each item being an array of property/value pairs.
 * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
 *   The entity for which the default value is generated.
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $definition
 *   The definition of the field.
 *
 * @return array
 *   The return default value for the field.
 */',
        'startLine' => 268,
        'endLine' => 268,
        'startColumn' => 3,
        'endColumn' => 133,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'aliasName' => NULL,
      ),
      'equals' => 
      array (
        'name' => 'equals',
        'parameters' => 
        array (
          'list_to_compare' => 
          array (
            'name' => 'list_to_compare',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldItemListInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 282,
            'endLine' => 282,
            'startColumn' => 26,
            'endColumn' => 64,
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
 * Determines equality to another object implementing FieldItemListInterface.
 *
 * This method is usually used by the storage to check for not computed
 * value changes, which will be saved into the storage.
 *
 * @param \\Drupal\\Core\\Field\\FieldItemListInterface $list_to_compare
 *   The field item list to compare to.
 *
 * @return bool
 *   TRUE if the field item lists are equal, FALSE if not.
 */',
        'startLine' => 282,
        'endLine' => 282,
        'startColumn' => 3,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'aliasName' => NULL,
      ),
      'hasAffectingChanges' => 
      array (
        'name' => 'hasAffectingChanges',
        'parameters' => 
        array (
          'original_items' => 
          array (
            'name' => 'original_items',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldItemListInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 302,
            'endLine' => 302,
            'startColumn' => 39,
            'endColumn' => 76,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 302,
            'endLine' => 302,
            'startColumn' => 79,
            'endColumn' => 87,
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
 * Determines whether the field has relevant changes.
 *
 * This is for example used to determine if a revision of an entity has
 * changes in a given translation. Unlike
 * \\Drupal\\Core\\Field\\FieldItemListInterface::equals(), this can report
 * that for example an untranslatable field, despite being changed and
 * therefore technically affecting all translations, is only internal metadata
 * or only affects a single translation.
 *
 * @param \\Drupal\\Core\\Field\\FieldItemListInterface $original_items
 *   The original field items to compare against.
 * @param string $langcode
 *   The language that should be checked.
 *
 * @return bool
 *   TRUE if the field has relevant changes, FALSE if not.
 */',
        'startLine' => 302,
        'endLine' => 302,
        'startColumn' => 3,
        'endColumn' => 89,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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