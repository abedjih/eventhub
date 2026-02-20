<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/PluginManagerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Plugin\PluginManagerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8f1e840a9be8ba5c3c4a9e7067d3b91388a2ce6e0ae4573366182c1e21065574-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/PluginManagerInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Plugin',
    'name' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
    'shortName' => 'PluginManagerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface implemented by plugin managers.
 *
 * There are no explicit methods on the manager interface. Instead plugin
 * managers broker the interactions of the different plugin components, and
 * therefore, must implement each component interface, which is enforced by
 * this interface extending all of the component ones.
 *
 * While a plugin manager may directly implement these interface methods with
 * custom logic, it is expected to be more common for plugin managers to proxy
 * the method invocations to the respective components, and directly implement
 * only the additional functionality needed by the specific pluggable system.
 * To follow this pattern, plugin managers can extend from the PluginManagerBase
 * class, which contains the proxying logic.
 *
 * @see \\Drupal\\Component\\Plugin\\PluginManagerBase
 *
 * @ingroup plugin_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 28,
    'endLine' => 29,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
      1 => 'Drupal\\Component\\Plugin\\Factory\\FactoryInterface',
      2 => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
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