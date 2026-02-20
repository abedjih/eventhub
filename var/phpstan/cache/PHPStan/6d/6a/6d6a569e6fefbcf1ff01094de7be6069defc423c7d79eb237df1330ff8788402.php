<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Discovery/DiscoveryInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Plugin\Discovery\DiscoveryInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ddf2c7d429d733eddac1d3bce82885827633f6d54e8283546d33d49f737ad2d0-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Discovery/DiscoveryInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
    'name' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
    'shortName' => 'DiscoveryInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the minimum requirements for a plugin discovery component.
 *
 * @ingroup plugin_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 51,
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
      'getDefinition' => 
      array (
        'name' => 'getDefinition',
        'parameters' => 
        array (
          'plugin_id' => 
          array (
            'name' => 'plugin_id',
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
            'startColumn' => 33,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exception_on_invalid' => 
          array (
            'name' => 'exception_on_invalid',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 27,
                'endLine' => 27,
                'startTokenPos' => 30,
                'startFilePos' => 758,
                'endTokenPos' => 30,
                'endFilePos' => 761,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 45,
            'endColumn' => 72,
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
 * Gets a specific plugin definition.
 *
 * @param string $plugin_id
 *   A plugin id.
 * @param bool $exception_on_invalid
 *   (optional) If TRUE, an invalid plugin ID will throw an exception.
 *
 * @return mixed
 *   A plugin definition, or NULL if the plugin ID is invalid and
 *   $exception_on_invalid is FALSE.
 *
 * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException
 *   Thrown if $plugin_id is invalid and $exception_on_invalid is TRUE.
 */',
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 3,
        'endColumn' => 74,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        'aliasName' => NULL,
      ),
      'getDefinitions' => 
      array (
        'name' => 'getDefinitions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the definition of all plugins for this type.
 *
 * @return mixed[]
 *   An array of plugin definitions (empty array if no definitions were
 *   found). Keys are plugin IDs.
 *
 * @see \\Drupal\\Core\\Plugin\\FilteredPluginManagerInterface::getFilteredDefinitions()
 */',
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        'aliasName' => NULL,
      ),
      'hasDefinition' => 
      array (
        'name' => 'hasDefinition',
        'parameters' => 
        array (
          'plugin_id' => 
          array (
            'name' => 'plugin_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 33,
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
 * Indicates if a specific plugin definition exists.
 *
 * @param string $plugin_id
 *   A plugin ID.
 *
 * @return bool
 *   TRUE if the definition exists, FALSE otherwise.
 */',
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
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