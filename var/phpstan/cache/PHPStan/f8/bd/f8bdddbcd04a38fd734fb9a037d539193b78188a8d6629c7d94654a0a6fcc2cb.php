<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Config/ConfigBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Config\ConfigBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b0c09fe36a4908d8812dd47334b6f564c93c821cb46a3ace118682f3f4217dc9-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Config\\ConfigBase',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Config/ConfigBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Config',
    'name' => 'Drupal\\Core\\Config\\ConfigBase',
    'shortName' => 'ConfigBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Provides a base class for configuration objects with get/set support.
 *
 * Encapsulates all capabilities needed for runtime configuration handling for
 * a specific configuration object.
 *
 * Extend directly from this class for non-storable configuration where the
 * configuration API is desired but storage is not possible; for example, if
 * the data is derived at runtime. For storable configuration, extend
 * \\Drupal\\Core\\Config\\StorableConfigBase.
 *
 * @see \\Drupal\\Core\\Config\\StorableConfigBase
 * @see \\Drupal\\Core\\Config\\Config
 * @see \\Drupal\\Core\\Theme\\ThemeSettings
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 27,
    'endLine' => 296,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
      1 => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
    ),
    'immediateConstants' => 
    array (
      'MAX_NAME_LENGTH' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'name' => 'MAX_NAME_LENGTH',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '250',
          'attributes' => 
          array (
            'startLine' => 58,
            'endLine' => 58,
            'startTokenPos' => 88,
            'startFilePos' => 1902,
            'endTokenPos' => 88,
            'endFilePos' => 1904,
          ),
        ),
        'docComment' => '/**
 * The maximum length of a configuration object name.
 *
 * Many filesystems (including HFS, NTFS, and ext4) have a maximum file name
 * length of 255 characters. To ensure that no configuration objects
 * incompatible with this limitation are created, we enforce a maximum name
 * length of 250 characters (leaving 5 characters for the file extension).
 *
 * @see http://wikipedia.org/wiki/Comparison_of_file_systems
 *
 * Configuration objects not stored on the filesystem should still be
 * restricted in name length so name can be used as a cache key.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 3,
        'endColumn' => 30,
      ),
    ),
    'immediateProperties' => 
    array (
      'name' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'name' => 'name',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the configuration object.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 3,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'data' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'name' => 'data',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 76,
            'startFilePos' => 1281,
            'endTokenPos' => 77,
            'endFilePos' => 1282,
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
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 3,
        'endColumn' => 23,
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
 * Returns the name of this configuration object.
 *
 * @return string
 *   The name of the configuration object.
 */',
        'startLine' => 66,
        'endLine' => 68,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
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
            'startLine' => 79,
            'endLine' => 79,
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
 * Sets the name of this configuration object.
 *
 * @param string $name
 *   The name of the configuration object.
 *
 * @return $this
 *   The configuration object.
 */',
        'startLine' => 79,
        'endLine' => 82,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'aliasName' => NULL,
      ),
      'validateName' => 
      array (
        'name' => 'validateName',
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
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 39,
            'endColumn' => 43,
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
 * Validates the configuration object name.
 *
 * @param string $name
 *   The name of the configuration object.
 *
 * @throws \\Drupal\\Core\\Config\\ConfigNameException
 *
 * @see Config::MAX_NAME_LENGTH
 */',
        'startLine' => 94,
        'endLine' => 109,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
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
                'startLine' => 131,
                'endLine' => 131,
                'startTokenPos' => 282,
                'startFilePos' => 3939,
                'endTokenPos' => 282,
                'endFilePos' => 3940,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 131,
            'endLine' => 131,
            'startColumn' => 23,
            'endColumn' => 31,
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
 * Gets data from this configuration object.
 *
 * @param string $key
 *   A string that maps to a key within the configuration data.
 *   For instance in the following configuration array:
 *   @code
 *   [
 *     \'foo\' => [
 *       \'bar\' => \'baz\',
 *     ],
 *   ];
 *   @endcode
 *   A key of \'foo.bar\' would return the string \'baz\'. However, a key of \'foo\'
 *   would return [\'bar\' => \'baz\'].
 *   If no key is specified, then the entire data array is returned.
 *
 * @return mixed
 *   The data that was requested.
 */',
        'startLine' => 131,
        'endLine' => 145,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'aliasName' => NULL,
      ),
      'setData' => 
      array (
        'name' => 'setData',
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
            'startLine' => 159,
            'endLine' => 159,
            'startColumn' => 27,
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
 * Replaces the data of this configuration object.
 *
 * @param array $data
 *   The new configuration data.
 *
 * @return $this
 *   The configuration object.
 *
 * @throws \\Drupal\\Core\\Config\\ConfigValueException
 *   If any key in $data in any depth contains a dot.
 */',
        'startLine' => 159,
        'endLine' => 164,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
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
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 23,
            'endColumn' => 26,
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
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 29,
            'endColumn' => 34,
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
 * Sets a value in this configuration object.
 *
 * @param string $key
 *   Identifier to store value in configuration.
 * @param mixed $value
 *   Value to associate with identifier.
 *
 * @return $this
 *   The configuration object.
 *
 * @throws \\Drupal\\Core\\Config\\ConfigValueException
 *   If $value is an array and any of its keys in any depth contains a dot.
 */',
        'startLine' => 180,
        'endLine' => 195,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'aliasName' => NULL,
      ),
      'validateKeys' => 
      array (
        'name' => 'validateKeys',
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
            'startLine' => 206,
            'endLine' => 206,
            'startColumn' => 35,
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
 * Validates all keys in a passed in config array structure.
 *
 * @param array $data
 *   Configuration array structure.
 *
 * @throws \\Drupal\\Core\\Config\\ConfigValueException
 *   If any key in $data in any depth contains a dot.
 */',
        'startLine' => 206,
        'endLine' => 215,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'aliasName' => NULL,
      ),
      'clear' => 
      array (
        'name' => 'clear',
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
            'startLine' => 226,
            'endLine' => 226,
            'startColumn' => 25,
            'endColumn' => 28,
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
 * Unsets a value in this configuration object.
 *
 * @param string $key
 *   Name of the key whose value should be unset.
 *
 * @return $this
 *   The configuration object.
 */',
        'startLine' => 226,
        'endLine' => 235,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'aliasName' => NULL,
      ),
      'merge' => 
      array (
        'name' => 'merge',
        'parameters' => 
        array (
          'data_to_merge' => 
          array (
            'name' => 'data_to_merge',
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
            'startLine' => 246,
            'endLine' => 246,
            'startColumn' => 25,
            'endColumn' => 44,
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
 * Merges data into a configuration object.
 *
 * @param array $data_to_merge
 *   An array containing data to merge.
 *
 * @return $this
 *   The configuration object.
 */',
        'startLine' => 246,
        'endLine' => 250,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'aliasName' => NULL,
      ),
      'getCacheContexts' => 
      array (
        'name' => 'getCacheContexts',
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
        'startLine' => 255,
        'endLine' => 257,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'aliasName' => NULL,
      ),
      'getCacheTags' => 
      array (
        'name' => 'getCacheTags',
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
        'startLine' => 262,
        'endLine' => 264,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'aliasName' => NULL,
      ),
      'getCacheMaxAge' => 
      array (
        'name' => 'getCacheMaxAge',
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
        'startLine' => 269,
        'endLine' => 271,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'aliasName' => NULL,
      ),
      'castSafeStrings' => 
      array (
        'name' => 'castSafeStrings',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 282,
            'endLine' => 282,
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
 * Casts any objects that implement MarkupInterface to string.
 *
 * @param mixed $data
 *   The configuration data.
 *
 * @return mixed
 *   The data with any safe strings cast to string.
 */',
        'startLine' => 282,
        'endLine' => 294,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigBase',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigBase',
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