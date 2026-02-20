<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/PluginManagerBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Plugin\PluginManagerBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-418fb5afbc0a38b1b374120a4cf06f9bf16882bfcb004f2fd3647edca0011767-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/PluginManagerBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Plugin',
    'name' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
    'shortName' => 'PluginManagerBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for plugin managers.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 144,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'discovery' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'name' => 'discovery',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The object that discovers plugins managed by this manager.
 *
 * @var \\Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 3,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'factory' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'name' => 'factory',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The object that instantiates plugins managed by this manager.
 *
 * @var \\Drupal\\Component\\Plugin\\Factory\\FactoryInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 3,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'mapper' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'name' => 'mapper',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The preconfigured plugin instance for a particular runtime condition.
 *
 * @var \\Drupal\\Component\\Plugin\\Mapper\\MapperInterface|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 3,
        'endColumn' => 20,
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
      'getDiscovery' => 
      array (
        'name' => 'getDiscovery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the plugin discovery.
 *
 * @return \\Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface
 *   The plugin discovery.
 */',
        'startLine' => 42,
        'endLine' => 44,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'aliasName' => NULL,
      ),
      'getFactory' => 
      array (
        'name' => 'getFactory',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the plugin factory.
 *
 * @return \\Drupal\\Component\\Plugin\\Factory\\FactoryInterface
 *   The plugin factory.
 */',
        'startLine' => 52,
        'endLine' => 54,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'aliasName' => NULL,
      ),
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
            'startLine' => 59,
            'endLine' => 59,
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
                'startLine' => 59,
                'endLine' => 59,
                'startTokenPos' => 114,
                'startFilePos' => 1332,
                'endTokenPos' => 114,
                'endFilePos' => 1335,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 59,
            'endLine' => 59,
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
 * {@inheritdoc}
 */',
        'startLine' => 59,
        'endLine' => 61,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
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
 * {@inheritdoc}
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
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'aliasName' => NULL,
      ),
      'createInstance' => 
      array (
        'name' => 'createInstance',
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
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 34,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'configuration' => 
          array (
            'name' => 'configuration',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 182,
                'startFilePos' => 1653,
                'endTokenPos' => 183,
                'endFilePos' => 1654,
              ),
            ),
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
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 46,
            'endColumn' => 70,
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
 * {@inheritdoc}
 */',
        'startLine' => 73,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'aliasName' => NULL,
      ),
      'handlePluginNotFound' => 
      array (
        'name' => 'handlePluginNotFound',
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
            'startLine' => 104,
            'endLine' => 104,
            'startColumn' => 43,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 104,
            'endLine' => 104,
            'startColumn' => 55,
            'endColumn' => 74,
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
 * Allows plugin managers to specify custom behavior if a plugin is not found.
 *
 * @param string $plugin_id
 *   The ID of the missing requested plugin.
 * @param array $configuration
 *   An array of configuration relevant to the plugin instance.
 *
 * @return object
 *   A fallback plugin instance.
 *
 * @throws \\BadMethodCallException
 *   When ::getFallbackPluginId() is not implemented in the concrete plugin
 *   manager class.
 */',
        'startLine' => 104,
        'endLine' => 107,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'aliasName' => NULL,
      ),
      'getFallbackPluginId' => 
      array (
        'name' => 'getFallbackPluginId',
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
            'startLine' => 130,
            'endLine' => 130,
            'startColumn' => 42,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'configuration' => 
          array (
            'name' => 'configuration',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 130,
                'endLine' => 130,
                'startTokenPos' => 346,
                'startFilePos' => 3766,
                'endTokenPos' => 347,
                'endFilePos' => 3767,
              ),
            ),
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
            'startLine' => 130,
            'endLine' => 130,
            'startColumn' => 54,
            'endColumn' => 78,
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
 * Gets a fallback id for a missing plugin.
 *
 * This method should be implemented in extending classes that also implement
 * FallbackPluginManagerInterface. It is called by
 * PluginManagerBase::handlePluginNotFound on the abstract class, and
 * therefore should be defined as well on the abstract class to prevent static
 * analysis errors.
 *
 * @param string $plugin_id
 *   The ID of the missing requested plugin.
 * @param array $configuration
 *   An array of configuration relevant to the plugin instance.
 *
 * phpcs:ignore Drupal.Commenting.FunctionComment.InvalidNoReturn
 * @return string
 *   The id of an existing plugin to use when the plugin does not exist.
 *
 * @throws \\BadMethodCallException
 *   If the method is not implemented in the concrete plugin manager class.
 */',
        'startLine' => 130,
        'endLine' => 132,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'aliasName' => NULL,
      ),
      'getInstance' => 
      array (
        'name' => 'getInstance',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 31,
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
 * {@inheritdoc}
 */',
        'startLine' => 137,
        'endLine' => 142,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
        'currentClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
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