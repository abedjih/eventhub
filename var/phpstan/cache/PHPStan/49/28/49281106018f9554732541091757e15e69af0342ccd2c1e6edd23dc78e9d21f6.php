<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Plugin/PluginDependencyTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Plugin\PluginDependencyTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-7db918af0cb602716e23cd1cb05cd5aa0e5433cd9769091b97ad49c78030a9c0-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Plugin/PluginDependencyTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Plugin',
    'name' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
    'shortName' => 'PluginDependencyTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides a trait for calculating the dependencies of a plugin.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 112,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\DependencyTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'getPluginDependencies' => 
      array (
        'name' => 'getPluginDependencies',
        'parameters' => 
        array (
          'instance' => 
          array (
            'name' => 'instance',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 44,
            'endColumn' => 78,
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
 * Calculates and returns dependencies of a specific plugin instance.
 *
 * Dependencies are added for the module that provides the plugin, as well
 * as any dependencies declared by the instance\'s calculateDependencies()
 * method, if it implements
 * \\Drupal\\Component\\Plugin\\DependentPluginInterface.
 *
 * @param \\Drupal\\Component\\Plugin\\PluginInspectionInterface $instance
 *   The plugin instance.
 *
 * @return array
 *   An array of dependencies keyed by the type of dependency.
 */',
        'startLine' => 33,
        'endLine' => 75,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'currentClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'aliasName' => NULL,
      ),
      'calculatePluginDependencies' => 
      array (
        'name' => 'calculatePluginDependencies',
        'parameters' => 
        array (
          'instance' => 
          array (
            'name' => 'instance',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 50,
            'endColumn' => 84,
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
 * Calculates and adds dependencies of a specific plugin instance.
 *
 * Dependencies are added for the module that provides the plugin, as well
 * as any dependencies declared by the instance\'s calculateDependencies()
 * method, if it implements
 * \\Drupal\\Component\\Plugin\\DependentPluginInterface.
 *
 * @param \\Drupal\\Component\\Plugin\\PluginInspectionInterface $instance
 *   The plugin instance.
 */',
        'startLine' => 88,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'currentClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'aliasName' => NULL,
      ),
      'moduleHandler' => 
      array (
        'name' => 'moduleHandler',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Wraps the module handler.
 *
 * @return \\Drupal\\Core\\Extension\\ModuleHandlerInterface
 *   The module handler.
 */',
        'startLine' => 98,
        'endLine' => 100,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'currentClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'aliasName' => NULL,
      ),
      'themeHandler' => 
      array (
        'name' => 'themeHandler',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Wraps the theme handler.
 *
 * @return \\Drupal\\Core\\Extension\\ThemeHandlerInterface
 *   The theme handler.
 */',
        'startLine' => 108,
        'endLine' => 110,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        'currentClassName' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
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