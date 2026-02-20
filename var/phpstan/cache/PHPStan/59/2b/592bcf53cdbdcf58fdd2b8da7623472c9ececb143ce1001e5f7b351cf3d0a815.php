<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Config/Config.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Config\Config
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8455133a1b6a9962db00f19f737f8044b7b918d0e772082c251122900ad1dbe6-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Config\\Config',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Config/Config.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Config',
    'name' => 'Drupal\\Core\\Config\\Config',
    'shortName' => 'Config',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the default configuration object.
 *
 * Encapsulates all capabilities needed for configuration handling for a
 * specific configuration object, including support for runtime overrides. The
 * overrides are handled on top of the stored configuration so they are not
 * saved back to storage.
 *
 * @ingroup config_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 337,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Config\\StorableConfigBase',
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
      'eventDispatcher' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'name' => 'eventDispatcher',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * An event dispatcher instance to use for configuration events.
 *
 * @var \\Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 3,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'overriddenData' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'name' => 'overriddenData',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The current runtime data.
 *
 * The configuration data from storage merged with module and settings
 * overrides.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 3,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'moduleOverrides' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'name' => 'moduleOverrides',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The current module overrides.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 3,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'settingsOverrides' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'name' => 'settingsOverrides',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The current settings overrides.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
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
      '__construct' => 
      array (
        'name' => '__construct',
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
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 31,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'storage' => 
          array (
            'name' => 'storage',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\StorageInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 38,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'event_dispatcher' => 
          array (
            'name' => 'event_dispatcher',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 65,
            'endColumn' => 106,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'typed_config' => 
          array (
            'name' => 'typed_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 109,
            'endColumn' => 149,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs a configuration object.
 *
 * @param string $name
 *   The name of the configuration object being constructed.
 * @param \\Drupal\\Core\\Config\\StorageInterface $storage
 *   A storage object to use for reading and writing the
 *   configuration data.
 * @param \\Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface $event_dispatcher
 *   An event dispatcher instance to use for configuration events.
 * @param \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config
 *   The typed configuration manager service.
 */',
        'startLine' => 65,
        'endLine' => 70,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
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
            'startLine' => 75,
            'endLine' => 75,
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
 * {@inheritdoc}
 */',
        'startLine' => 75,
        'endLine' => 79,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
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
                'startLine' => 84,
                'endLine' => 84,
                'startTokenPos' => 177,
                'startFilePos' => 2234,
                'endTokenPos' => 177,
                'endFilePos' => 2235,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
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
 * {@inheritdoc}
 */',
        'startLine' => 84,
        'endLine' => 101,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
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
            'startLine' => 106,
            'endLine' => 106,
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
 * {@inheritdoc}
 */',
        'startLine' => 106,
        'endLine' => 110,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
        'aliasName' => NULL,
      ),
      'setSettingsOverride' => 
      array (
        'name' => 'setSettingsOverride',
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
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 39,
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
 * Sets settings.php overrides for this configuration object.
 *
 * The overridden data only applies to this configuration object.
 *
 * @param array $data
 *   The overridden values of the configuration data.
 *
 * @return $this
 *   The configuration object.
 */',
        'startLine' => 123,
        'endLine' => 127,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
        'aliasName' => NULL,
      ),
      'setModuleOverride' => 
      array (
        'name' => 'setModuleOverride',
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
            'startLine' => 138,
            'endLine' => 138,
            'startColumn' => 37,
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
 * Sets module overrides for this configuration object.
 *
 * @param array $data
 *   The overridden values of the configuration data.
 *
 * @return $this
 *   The configuration object.
 */',
        'startLine' => 138,
        'endLine' => 142,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
        'aliasName' => NULL,
      ),
      'setOverriddenData' => 
      array (
        'name' => 'setOverriddenData',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the current data for this configuration object.
 *
 * Configuration overrides operate at two distinct layers: modules and
 * settings.php. Overrides in settings.php take precedence over values
 * provided by modules. Precedence or different module overrides is
 * determined by the priority of the config.factory.override tagged services.
 *
 * @return $this
 *   The configuration object.
 */',
        'startLine' => 155,
        'endLine' => 164,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
        'aliasName' => NULL,
      ),
      'resetOverriddenData' => 
      array (
        'name' => 'resetOverriddenData',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the current data, so overrides are re-applied.
 *
 * This method should be called after the original data or the overridden data
 * has been changed.
 *
 * @return $this
 *   The configuration object.
 */',
        'startLine' => 175,
        'endLine' => 178,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
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
            'startLine' => 183,
            'endLine' => 183,
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
            'startLine' => 183,
            'endLine' => 183,
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
 * {@inheritdoc}
 */',
        'startLine' => 183,
        'endLine' => 187,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
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
            'startLine' => 192,
            'endLine' => 192,
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
 * {@inheritdoc}
 */',
        'startLine' => 192,
        'endLine' => 196,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
        'aliasName' => NULL,
      ),
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
                'startLine' => 201,
                'endLine' => 201,
                'startTokenPos' => 674,
                'startFilePos' => 5286,
                'endTokenPos' => 674,
                'endFilePos' => 5290,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 24,
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
 * {@inheritdoc}
 */',
        'startLine' => 201,
        'endLine' => 235,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
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
 * @return $this
 *   The configuration object.
 */',
        'startLine' => 243,
        'endLine' => 253,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
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
                'startLine' => 272,
                'endLine' => 272,
                'startTokenPos' => 1077,
                'startFilePos' => 7823,
                'endTokenPos' => 1077,
                'endFilePos' => 7824,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 272,
            'endLine' => 272,
            'startColumn' => 31,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'apply_overrides' => 
          array (
            'name' => 'apply_overrides',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 272,
                'endLine' => 272,
                'startTokenPos' => 1084,
                'startFilePos' => 7846,
                'endTokenPos' => 1084,
                'endFilePos' => 7849,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 272,
            'endLine' => 272,
            'startColumn' => 42,
            'endColumn' => 64,
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
 * Gets original data from this configuration object.
 *
 * Original data is the data as it is immediately after loading from
 * configuration storage before any changes. If this is a new configuration
 * object it will be an empty array.
 *
 * @param string $key
 *   A string that maps to a key within the configuration data.
 * @param bool $apply_overrides
 *   Apply any overrides to the original data. Defaults to TRUE.
 *
 * @return mixed
 *   The data that was requested.
 *
 * @see \\Drupal\\Core\\Config\\Config::get()
 */',
        'startLine' => 272,
        'endLine' => 297,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
        'aliasName' => NULL,
      ),
      'hasOverrides' => 
      array (
        'name' => 'hasOverrides',
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
                'startLine' => 320,
                'endLine' => 320,
                'startTokenPos' => 1319,
                'startFilePos' => 9417,
                'endTokenPos' => 1319,
                'endFilePos' => 9418,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 320,
            'endLine' => 320,
            'startColumn' => 32,
            'endColumn' => 40,
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
 * Determines if overrides are applied to a key for this configuration object.
 *
 * @param string $key
 *   (optional) A string that maps to a key within the configuration data.
 *   For instance in the following configuration array:
 *   @code
 *   [
 *     \'foo\' => [
 *       \'bar\' => \'baz\',
 *     ],
 *   ];
 *   @endcode
 *   A key of \'foo.bar\' would map to the string \'baz\'. However, a key of \'foo\'
 *   would map to the [\'bar\' => \'baz\'].
 *   If not supplied TRUE will be returned if there are any overrides at all
 *   for this configuration object.
 *
 * @return bool
 *   TRUE if there are any overrides for the key, otherwise FALSE.
 */',
        'startLine' => 320,
        'endLine' => 335,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\Config',
        'implementingClassName' => 'Drupal\\Core\\Config\\Config',
        'currentClassName' => 'Drupal\\Core\\Config\\Config',
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