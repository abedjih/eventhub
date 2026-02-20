<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ThirdPartySettingsInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Config\Entity\ThirdPartySettingsInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4b62f73bf64865d1e48811f37f9e583ac41c788df20b9cb73309cb50603bc35a-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ThirdPartySettingsInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Config\\Entity',
    'name' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
    'shortName' => 'ThirdPartySettingsInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for configuration entities to store third party information.
 *
 * A third party is a module that needs to store tightly coupled information to
 * the configuration entity. For example, a module that alters the node type
 * form can use this to store its configuration so that it will be deployed
 * with the node type.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 76,
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
      'setThirdPartySetting' => 
      array (
        'name' => 'setThirdPartySetting',
        'parameters' => 
        array (
          'module' => 
          array (
            'name' => 'module',
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
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 49,
            'endColumn' => 52,
            'parameterIndex' => 1,
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 55,
            'endColumn' => 60,
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
 * Sets the value of a third-party setting.
 *
 * @param string $module
 *   The module providing the third-party setting.
 * @param string $key
 *   The setting name.
 * @param mixed $value
 *   The setting value.
 *
 * @return $this
 */',
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 3,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'aliasName' => NULL,
      ),
      'getThirdPartySetting' => 
      array (
        'name' => 'getThirdPartySetting',
        'parameters' => 
        array (
          'module' => 
          array (
            'name' => 'module',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 49,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 42,
                'endLine' => 42,
                'startTokenPos' => 51,
                'startFilePos' => 1110,
                'endTokenPos' => 51,
                'endFilePos' => 1113,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 55,
            'endColumn' => 69,
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
 * Gets the value of a third-party setting.
 *
 * @param string $module
 *   The module providing the third-party setting.
 * @param string $key
 *   The setting name.
 * @param mixed $default
 *   The default value.
 *
 * @return mixed
 *   The value.
 */',
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 71,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'aliasName' => NULL,
      ),
      'getThirdPartySettings' => 
      array (
        'name' => 'getThirdPartySettings',
        'parameters' => 
        array (
          'module' => 
          array (
            'name' => 'module',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 41,
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
 * Gets all third-party settings of a given module.
 *
 * @param string $module
 *   The module providing the third-party settings.
 *
 * @return array
 *   An array of key-value pairs.
 */',
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 3,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'aliasName' => NULL,
      ),
      'unsetThirdPartySetting' => 
      array (
        'name' => 'unsetThirdPartySetting',
        'parameters' => 
        array (
          'module' => 
          array (
            'name' => 'module',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 51,
            'endColumn' => 54,
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
 * Unsets a third-party setting.
 *
 * @param string $module
 *   The module providing the third-party setting.
 * @param string $key
 *   The setting name.
 *
 * @return mixed
 *   The value.
 */',
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 3,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'aliasName' => NULL,
      ),
      'getThirdPartyProviders' => 
      array (
        'name' => 'getThirdPartyProviders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the list of third parties that store information.
 *
 * @return array
 *   The list of third parties.
 */',
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
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