<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Config/StorableConfigBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Config\StorableConfigBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-7d12f94d2064f23992f37f3dd3dcb253d2f8d72093520fe442daa9795c628b4d-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Config/StorableConfigBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Config',
    'name' => 'Drupal\\Core\\Config\\StorableConfigBase',
    'shortName' => 'StorableConfigBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Provides a base class for configuration objects with storage support.
 *
 * Encapsulates all capabilities needed for configuration handling for a
 * specific configuration object, including storage and data type casting.
 *
 * The default implementation in \\Drupal\\Core\\Config\\Config adds support for
 * runtime overrides. Extend from StorableConfigBase directly to manage
 * configuration with a storage backend that does not support overrides.
 *
 * @see \\Drupal\\Core\\Config\\Config
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 27,
    'endLine' => 299,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
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
      'storage' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'name' => 'storage',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The storage used to load and save this configuration object.
 *
 * @var \\Drupal\\Core\\Config\\StorageInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 3,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'schemaWrapper' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'name' => 'schemaWrapper',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The config schema wrapper object for this configuration object.
 *
 * @var \\Drupal\\Core\\Config\\Schema\\Element
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'typedConfigManager' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'name' => 'typedConfigManager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The typed config manager.
 *
 * @var \\Drupal\\Core\\Config\\TypedConfigManagerInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isNew' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'name' => 'isNew',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'TRUE',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 95,
            'startFilePos' => 1571,
            'endTokenPos' => 95,
            'endFilePos' => 1574,
          ),
        ),
        'docComment' => '/**
 * Whether the configuration object is new or has been saved to the storage.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'originalData' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'name' => 'originalData',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 106,
            'startFilePos' => 1682,
            'endTokenPos' => 107,
            'endFilePos' => 1683,
          ),
        ),
        'docComment' => '/**
 * The data of the configuration object.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 3,
        'endColumn' => 31,
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
      'save' => 
      array (
        'name' => 'save',
        'parameters' => 
        array (
          'has_trusted_data' => 
          array (
            'name' => 'has_trusted_data',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 78,
                'endLine' => 78,
                'startTokenPos' => 124,
                'startFilePos' => 2192,
                'endTokenPos' => 124,
                'endFilePos' => 2196,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 33,
            'endColumn' => 57,
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
 * Saves the configuration object.
 *
 * Must invalidate the cache tags associated with the configuration object.
 *
 * @param bool $has_trusted_data
 *   Set to TRUE if the configuration data has already been checked to ensure
 *   it conforms to schema. Generally this is only used during module and
 *   theme installation.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Config\\ConfigInstaller::createConfiguration()
 */',
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
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
 * Deletes the configuration object.
 *
 * Must invalidate the cache tags associated with the configuration object.
 *
 * @return $this
 */',
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'aliasName' => NULL,
      ),
      'initWithData' => 
      array (
        'name' => 'initWithData',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 98,
            'endLine' => 98,
            'startColumn' => 32,
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
 * Initializes a configuration object with pre-loaded data.
 *
 * @param array $data
 *   Array of loaded data for this configuration object.
 *
 * @return $this
 *   The configuration object.
 */',
        'startLine' => 98,
        'endLine' => 103,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'aliasName' => NULL,
      ),
      'isNew' => 
      array (
        'name' => 'isNew',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns whether this configuration object is new.
 *
 * @return bool
 *   TRUE if this configuration object does not exist in storage.
 */',
        'startLine' => 111,
        'endLine' => 113,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'aliasName' => NULL,
      ),
      'getStorage' => 
      array (
        'name' => 'getStorage',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the storage used to load and save this configuration object.
 *
 * @return \\Drupal\\Core\\Config\\StorageInterface
 *   The configuration storage object.
 */',
        'startLine' => 121,
        'endLine' => 123,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'aliasName' => NULL,
      ),
      'getOriginal' => 
      array (
        'name' => 'getOriginal',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 140,
                'endLine' => 140,
                'startTokenPos' => 246,
                'startFilePos' => 3742,
                'endTokenPos' => 246,
                'endFilePos' => 3743,
              ),
            ),
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
            'endColumn' => 39,
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
 * Gets original data from this configuration object.
 *
 * Original data is the data as it is immediately after loading from
 * configuration storage before any changes. If this is a new configuration
 * object it will be an empty array.
 *
 * @param string $key
 *   A string that maps to a key within the configuration data.
 *
 * @return mixed
 *   The data that was requested.
 *
 * @see \\Drupal\\Core\\Config\\Config::get()
 */',
        'startLine' => 140,
        'endLine' => 154,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'aliasName' => NULL,
      ),
      'getRawData' => 
      array (
        'name' => 'getRawData',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the raw data without any manipulations.
 *
 * @return array
 *   The raw data.
 */',
        'startLine' => 162,
        'endLine' => 164,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'aliasName' => NULL,
      ),
      'getSchemaWrapper' => 
      array (
        'name' => 'getSchemaWrapper',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the schema wrapper for the whole configuration object.
 *
 * The schema wrapper is dependent on the configuration name and the whole
 * data structure, so if the name or the data changes in any way, the wrapper
 * should be reset.
 *
 * @return \\Drupal\\Core\\Config\\Schema\\Element
 *   A configuration element.
 */',
        'startLine' => 176,
        'endLine' => 181,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'aliasName' => NULL,
      ),
      'validateValue' => 
      array (
        'name' => 'validateValue',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 194,
            'endLine' => 194,
            'startColumn' => 36,
            'endColumn' => 39,
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
            'startLine' => 194,
            'endLine' => 194,
            'startColumn' => 42,
            'endColumn' => 47,
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
 * Validate the values are allowed data types.
 *
 * @param string $key
 *   A string that maps to a key within the configuration data.
 * @param mixed $value
 *   Value to associate with the key.
 *
 * @throws \\Drupal\\Core\\Config\\UnsupportedDataTypeConfigException
 *   If the value is unsupported in configuration.
 */',
        'startLine' => 194,
        'endLine' => 204,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'aliasName' => NULL,
      ),
      'castValue' => 
      array (
        'name' => 'castValue',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 221,
            'endLine' => 221,
            'startColumn' => 32,
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
            'startLine' => 221,
            'endLine' => 221,
            'startColumn' => 38,
            'endColumn' => 43,
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
 * Casts the value to correct data type using the configuration schema.
 *
 * @param string|null $key
 *   A string that maps to a key within the configuration data. If NULL the
 *   top level mapping will be processed.
 * @param mixed $value
 *   Value to associate with the key.
 *
 * @return mixed
 *   The value cast to the type indicated in the schema.
 *
 * @throws \\Drupal\\Core\\Config\\UnsupportedDataTypeConfigException
 *   If the value is unsupported in configuration.
 */',
        'startLine' => 221,
        'endLine' => 297,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
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