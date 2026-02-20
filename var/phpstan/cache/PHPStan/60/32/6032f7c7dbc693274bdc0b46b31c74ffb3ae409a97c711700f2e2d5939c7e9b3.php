<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/PluginBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Plugin\PluginBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-266873761d4515378638bdb972a7e68ab2f5d553ffb039973c042f61afccf5a4-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Plugin\\PluginBase',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/PluginBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Plugin',
    'name' => 'Drupal\\Component\\Plugin\\PluginBase',
    'shortName' => 'PluginBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for plugins wishing to support metadata inspection.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 113,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
      1 => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'DERIVATIVE_SEPARATOR' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'name' => 'DERIVATIVE_SEPARATOR',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\':\'',
          'attributes' => 
          array (
            'startLine' => 13,
            'endLine' => 13,
            'startTokenPos' => 32,
            'startFilePos' => 337,
            'endTokenPos' => 32,
            'endFilePos' => 339,
          ),
        ),
        'docComment' => '/**
 * A string which is used to separate base plugin IDs from the derivative ID.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 13,
        'endLine' => 13,
        'startColumn' => 3,
        'endColumn' => 35,
      ),
    ),
    'immediateProperties' => 
    array (
      'pluginId' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'name' => 'pluginId',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The plugin ID.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 3,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pluginDefinition' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'name' => 'pluginDefinition',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The plugin implementation definition.
 *
 * @var \\Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface|array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'configuration' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'name' => 'configuration',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Configuration information passed into the plugin.
 *
 * When using an interface like
 * \\Drupal\\Component\\Plugin\\ConfigurableInterface, this is where the
 * configuration should be stored.
 *
 * Plugin configuration is optional, so plugin implementations must provide
 * their own setters and getters.
 *
 * @var array
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
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'configuration' => 
          array (
            'name' => 'configuration',
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
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 31,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 53,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'plugin_definition' => 
          array (
            'name' => 'plugin_definition',
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
            'startColumn' => 65,
            'endColumn' => 82,
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
 * Constructs a \\Drupal\\Component\\Plugin\\PluginBase object.
 *
 * @param array $configuration
 *   A configuration array containing information about the plugin instance.
 * @param string $plugin_id
 *   The plugin ID for the plugin instance.
 * @param mixed $plugin_definition
 *   The plugin implementation definition.
 */',
        'startLine' => 53,
        'endLine' => 57,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'aliasName' => NULL,
      ),
      'getPluginId' => 
      array (
        'name' => 'getPluginId',
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
        'startLine' => 62,
        'endLine' => 64,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'aliasName' => NULL,
      ),
      'getBaseId' => 
      array (
        'name' => 'getBaseId',
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
        'startLine' => 69,
        'endLine' => 75,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'aliasName' => NULL,
      ),
      'getDerivativeId' => 
      array (
        'name' => 'getDerivativeId',
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
        'startLine' => 80,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'aliasName' => NULL,
      ),
      'getPluginDefinition' => 
      array (
        'name' => 'getPluginDefinition',
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
        'startLine' => 92,
        'endLine' => 94,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'aliasName' => NULL,
      ),
      'isConfigurable' => 
      array (
        'name' => 'isConfigurable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the plugin is configurable.
 *
 * @return bool
 *   A boolean indicating whether the plugin is configurable.
 *
 * @deprecated in drupal:11.1.0 and is removed from drupal:12.0.0. Use
 * instanceof to check if the plugin implements
 * \\Drupal\\Component\\Plugin\\ConfigurableInterface instead.
 *
 * @see https://www.drupal.org/node/3198285
 */',
        'startLine' => 108,
        'endLine' => 111,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginBase',
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