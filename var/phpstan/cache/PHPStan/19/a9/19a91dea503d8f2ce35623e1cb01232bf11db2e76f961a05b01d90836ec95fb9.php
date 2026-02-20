<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/ConfigFactoryInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Config\ConfigFactoryInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b60822381ca49cfc0679c8f0256be651340ae1006a5021117b3f11737a9b3548-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/ConfigFactoryInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Config',
    'name' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
    'shortName' => 'ConfigFactoryInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the interface for a configuration object factory.
 *
 * @ingroup config_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 120,
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
      'get' => 
      array (
        'name' => 'get',
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
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 23,
            'endColumn' => 27,
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
 * Returns an immutable configuration object for a given name.
 *
 * @param string $name
 *   The name of the configuration object to construct.
 *
 * @return \\Drupal\\Core\\Config\\ImmutableConfig
 *   A configuration object.
 */',
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'aliasName' => NULL,
      ),
      'getEditable' => 
      array (
        'name' => 'getEditable',
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
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 31,
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
 * Returns a mutable configuration object for a given name.
 *
 * Should not be used for config that will have runtime effects. Therefore it
 * is always loaded override free.
 *
 * @param string $name
 *   The name of the configuration object to construct.
 *
 * @return \\Drupal\\Core\\Config\\Config
 *   A configuration object.
 */',
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'aliasName' => NULL,
      ),
      'loadMultiple' => 
      array (
        'name' => 'loadMultiple',
        'parameters' => 
        array (
          'names' => 
          array (
            'name' => 'names',
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
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 32,
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
 * Returns a list of configuration objects for the given names.
 *
 * This will pre-load all requested configuration objects does not create
 * new configuration objects. This method always return immutable objects.
 * ConfigFactoryInterface::getEditable() should be used to retrieve mutable
 * configuration objects, one by one.
 *
 * @param array $names
 *   List of names of configuration objects.
 *
 * @return \\Drupal\\Core\\Config\\ImmutableConfig[]
 *   List of successfully loaded configuration objects, keyed by name.
 */',
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'aliasName' => NULL,
      ),
      'reset' => 
      array (
        'name' => 'reset',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 62,
                'endLine' => 62,
                'startTokenPos' => 65,
                'startFilePos' => 1753,
                'endTokenPos' => 65,
                'endFilePos' => 1756,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 25,
            'endColumn' => 36,
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
 * Resets and re-initializes configuration objects. Internal use only.
 *
 * @param string|null $name
 *   (optional) The name of the configuration object to reset. If omitted, all
 *   configuration objects are reset.
 *
 * @return $this
 */',
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'aliasName' => NULL,
      ),
      'rename' => 
      array (
        'name' => 'rename',
        'parameters' => 
        array (
          'old_name' => 
          array (
            'name' => 'old_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74,
            'endLine' => 74,
            'startColumn' => 26,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'new_name' => 
          array (
            'name' => 'new_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74,
            'endLine' => 74,
            'startColumn' => 37,
            'endColumn' => 45,
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
 * Renames a configuration object using the storage.
 *
 * @param string $old_name
 *   The old name of the configuration object.
 * @param string $new_name
 *   The new name of the configuration object.
 *
 * @return $this
 */',
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 3,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'aliasName' => NULL,
      ),
      'getCacheKeys' => 
      array (
        'name' => 'getCacheKeys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The cache keys associated with the state of the config factory.
 *
 * All state information that can influence the result of a get() should be
 * included. Typically, this includes a key for each override added via
 * addOverride(). This allows external code to maintain caches of
 * configuration data in addition to or instead of caches maintained by the
 * factory.
 *
 * @return array
 *   An array of strings, used to generate a cache ID.
 */',
        'startLine' => 88,
        'endLine' => 88,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'aliasName' => NULL,
      ),
      'clearStaticCache' => 
      array (
        'name' => 'clearStaticCache',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clears the config factory static cache.
 *
 * @return $this
 */',
        'startLine' => 95,
        'endLine' => 95,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'aliasName' => NULL,
      ),
      'listAll' => 
      array (
        'name' => 'listAll',
        'parameters' => 
        array (
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 109,
                'endLine' => 109,
                'startTokenPos' => 118,
                'startFilePos' => 3113,
                'endTokenPos' => 118,
                'endFilePos' => 3114,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 27,
            'endColumn' => 38,
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
 * Gets configuration object names starting with a given prefix.
 *
 * @param string $prefix
 *   (optional) The prefix to search for. If omitted, all configuration object
 *   names that exist are returned.
 *
 * @return array
 *   An array containing matching configuration object names.
 *
 * @see \\Drupal\\Core\\Config\\StorageInterface::listAll()
 */',
        'startLine' => 109,
        'endLine' => 109,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'aliasName' => NULL,
      ),
      'addOverride' => 
      array (
        'name' => 'addOverride',
        'parameters' => 
        array (
          'config_factory_override' => 
          array (
            'name' => 'config_factory_override',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\ConfigFactoryOverrideInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 118,
            'endLine' => 118,
            'startColumn' => 31,
            'endColumn' => 85,
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
 * Adds config factory override services.
 *
 * @param \\Drupal\\Core\\Config\\ConfigFactoryOverrideInterface $config_factory_override
 *   The config factory override service to add. It is added at the end of the
 *   priority list (lower priority relative to existing ones).
 */',
        'startLine' => 118,
        'endLine' => 118,
        'startColumn' => 3,
        'endColumn' => 87,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
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