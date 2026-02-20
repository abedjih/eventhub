<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Definition/PluginDefinitionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Plugin\Definition\PluginDefinitionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-0efd090da8f33758f86731347577543c710bc6dcf1d06aca4fd73142ac1c3c8e-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Definition/PluginDefinitionInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Plugin\\Definition',
    'name' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
    'shortName' => 'PluginDefinitionInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines a plugin definition.
 *
 * Object-based plugin definitions MUST implement this interface.
 *
 * @ingroup Plugin
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 54,
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
 * Gets the unique identifier of the plugin.
 *
 * @return string
 *   The unique identifier of the plugin.
 */',
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 3,
        'endColumn' => 23,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Definition',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        'aliasName' => NULL,
      ),
      'setClass' => 
      array (
        'name' => 'setClass',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 33,
            'endLine' => 33,
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
        ),
        'docComment' => '/**
 * Sets the class.
 *
 * @param string $class
 *   A fully qualified class name.
 *
 * @return static
 *
 * @throws \\InvalidArgumentException
 *   If the class is invalid.
 */',
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Definition',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
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
 * Gets the class.
 *
 * @return string
 *   A fully qualified class name.
 */',
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Definition',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        'aliasName' => NULL,
      ),
      'getProvider' => 
      array (
        'name' => 'getProvider',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the plugin provider.
 *
 * The provider is the name of the module that provides the plugin, or "core\',
 * or "component".
 *
 * @return string
 *   The provider.
 */',
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Definition',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
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