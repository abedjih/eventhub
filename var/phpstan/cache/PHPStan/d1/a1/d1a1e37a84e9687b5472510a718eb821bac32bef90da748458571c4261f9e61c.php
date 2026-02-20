<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Plugin/DefaultPluginManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Plugin\DefaultPluginManager
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-10783979785072f83e285b18cfbdb8608edc13ac354c2131ff7a2ab8dd64c3bf-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Plugin/DefaultPluginManager.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Plugin',
    'name' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
    'shortName' => 'DefaultPluginManager',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Base class for plugin managers.
 *
 * @ingroup plugin_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 30,
    'endLine' => 424,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
      1 => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
      2 => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
      1 => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'cacheKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'cacheKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The cache key.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cacheTags' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'cacheTags',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 47,
            'startTokenPos' => 149,
            'startFilePos' => 1513,
            'endTokenPos' => 150,
            'endFilePos' => 1514,
          ),
        ),
        'docComment' => '/**
 * An array of cache tags to use for the cached definitions.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 3,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'alterHook' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'alterHook',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Name of the alter hook if one should be invoked.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 3,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'subdir' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'subdir',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The subdirectory within a namespace to look for plugins.
 *
 * Set to FALSE if the plugins are in the top level of the namespace.
 *
 * @var string|bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'moduleHandler' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'moduleHandler',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The module handler to invoke the alter hook.
 *
 * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'moduleExtensionList' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'moduleExtensionList',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Drupal\\Core\\Extension\\ModuleExtensionList',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The module extension list.
 *
 * @var \\Drupal\\Core\\Extension\\ModuleExtensionList
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 3,
        'endColumn' => 54,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaults' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'defaults',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 192,
            'startFilePos' => 2380,
            'endTokenPos' => 193,
            'endFilePos' => 2381,
          ),
        ),
        'docComment' => '/**
 * A set of defaults to be referenced by $this->processDefinition().
 *
 * Allows for additional processing of plugins when necessary or helpful for
 * development purposes.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pluginDefinitionAnnotationName' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'pluginDefinitionAnnotationName',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the annotation that contains the plugin definition.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 3,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pluginDefinitionAttributeName' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'pluginDefinitionAttributeName',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the attribute that contains the plugin definition.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 3,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pluginInterface' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'pluginInterface',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The interface each plugin should implement.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 3,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'namespaces' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'namespaces',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * An object of root paths that are traversable.
 *
 * The root paths are keyed by the corresponding namespace to look for plugin
 * implementations.
 *
 * @var \\Traversable
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 118,
        'endLine' => 118,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'additionalAnnotationNamespaces' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'name' => 'additionalAnnotationNamespaces',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 128,
            'endLine' => 128,
            'startTokenPos' => 232,
            'startFilePos' => 3241,
            'endTokenPos' => 233,
            'endFilePos' => 3242,
          ),
        ),
        'docComment' => '/**
 * Additional annotation namespaces.
 *
 * The annotation discovery mechanism should scan these for annotation
 * definitions.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 128,
        'endLine' => 128,
        'startColumn' => 3,
        'endColumn' => 49,
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
          'subdir' => 
          array (
            'name' => 'subdir',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'namespaces' => 
          array (
            'name' => 'namespaces',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Traversable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 40,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'module_handler' => 
          array (
            'name' => 'module_handler',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 66,
            'endColumn' => 103,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'plugin_interface' => 
          array (
            'name' => 'plugin_interface',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 154,
                'endLine' => 154,
                'startTokenPos' => 261,
                'startFilePos' => 4593,
                'endTokenPos' => 261,
                'endFilePos' => 4596,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 106,
            'endColumn' => 129,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'plugin_definition_attribute_name' => 
          array (
            'name' => 'plugin_definition_attribute_name',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 154,
                'endLine' => 154,
                'startTokenPos' => 271,
                'startFilePos' => 4643,
                'endTokenPos' => 271,
                'endFilePos' => 4646,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 132,
            'endColumn' => 179,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'plugin_definition_annotation_name' => 
          array (
            'name' => 'plugin_definition_annotation_name',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 154,
                'endLine' => 154,
                'startTokenPos' => 284,
                'startFilePos' => 4704,
                'endTokenPos' => 284,
                'endFilePos' => 4707,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 182,
            'endColumn' => 240,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'additional_annotation_namespaces' => 
          array (
            'name' => 'additional_annotation_namespaces',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 154,
                'endLine' => 154,
                'startTokenPos' => 293,
                'startFilePos' => 4752,
                'endTokenPos' => 294,
                'endFilePos' => 4753,
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
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 243,
            'endColumn' => 286,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs a new \\Drupal\\Core\\Plugin\\DefaultPluginManager object.
 *
 * @param string|bool $subdir
 *   The plugin\'s subdirectory, for example Plugin/views/filter.
 * @param \\Traversable $namespaces
 *   An object that implements \\Traversable which contains the root paths
 *   keyed by the corresponding namespace to look for plugin implementations.
 * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
 *   The module handler.
 * @param string|null $plugin_interface
 *   (optional) The interface each plugin should implement.
 * @param string|null $plugin_definition_attribute_name
 *   (optional) The name of the attribute that contains the plugin definition.
 * @param string|array|null $plugin_definition_annotation_name
 *   (optional) The name of the annotation that contains the plugin
 *   definition. Defaults to \'Drupal\\Component\\Annotation\\Plugin\'.
 * @param string[] $additional_annotation_namespaces
 *   (optional) Additional namespaces to scan for annotation definitions.
 *
 * @todo $plugin_definition_attribute_name should default to
 * \'Drupal\\Component\\Plugin\\Attribute\\Plugin\' once annotations are no longer
 * supported.
 */',
        'startLine' => 154,
        'endLine' => 172,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
      'setCacheBackend' => 
      array (
        'name' => 'setCacheBackend',
        'parameters' => 
        array (
          'cache_backend' => 
          array (
            'name' => 'cache_backend',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 35,
            'endColumn' => 70,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'cache_key' => 
          array (
            'name' => 'cache_key',
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
            'startColumn' => 73,
            'endColumn' => 82,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'cache_tags' => 
          array (
            'name' => 'cache_tags',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 192,
                'endLine' => 192,
                'startTokenPos' => 469,
                'startFilePos' => 6802,
                'endTokenPos' => 470,
                'endFilePos' => 6803,
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
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 85,
            'endColumn' => 106,
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
 * Initialize the cache backend.
 *
 * Plugin definitions are cached using the provided cache backend.
 *
 * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
 *   Cache backend instance to use.
 * @param string $cache_key
 *   Cache key prefix to use.
 * @param array $cache_tags
 *   (optional) When providing a list of cache tags, the cached plugin
 *   definitions are tagged with the provided cache tags. These cache tags can
 *   then be used to clear the corresponding cached plugin definitions. Note
 *   that this should be used with care! For clearing all cached plugin
 *   definitions of a plugin manager, call that plugin manager\'s
 *   clearCachedDefinitions() method. Only use cache tags when cached plugin
 *   definitions should be cleared along with other, related cache entries.
 */',
        'startLine' => 192,
        'endLine' => 197,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
      'alterInfo' => 
      array (
        'name' => 'alterInfo',
        'parameters' => 
        array (
          'alter_hook' => 
          array (
            'name' => 'alter_hook',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 206,
            'endLine' => 206,
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
 * Sets the alter hook name.
 *
 * @param string $alter_hook
 *   Name of the alter hook; for example, to invoke
 *   hook_my_module_data_alter() pass in "my_module_data".
 */',
        'startLine' => 206,
        'endLine' => 208,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
        'startLine' => 213,
        'endLine' => 220,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
      'clearCachedDefinitions' => 
      array (
        'name' => 'clearCachedDefinitions',
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
        'startLine' => 225,
        'endLine' => 239,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
      'getCachedDefinitions' => 
      array (
        'name' => 'getCachedDefinitions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the cached plugin definitions of the decorated discovery class.
 *
 * @return array|null
 *   On success this will return an array of plugin definitions. On failure
 *   this should return NULL, indicating to other methods that this has not
 *   yet been defined. Success with no values should return as an empty array
 *   and would actually be returned by the getDefinitions() method.
 */',
        'startLine' => 250,
        'endLine' => 255,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
      'setCachedDefinitions' => 
      array (
        'name' => 'setCachedDefinitions',
        'parameters' => 
        array (
          'definitions' => 
          array (
            'name' => 'definitions',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 263,
            'endLine' => 263,
            'startColumn' => 43,
            'endColumn' => 54,
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
 * Sets a cache of plugin definitions for the decorated discovery class.
 *
 * @param array $definitions
 *   List of definitions to store in cache.
 */',
        'startLine' => 263,
        'endLine' => 266,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
      'useCaches' => 
      array (
        'name' => 'useCaches',
        'parameters' => 
        array (
          'use_caches' => 
          array (
            'name' => 'use_caches',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 271,
                'endLine' => 271,
                'startTokenPos' => 829,
                'startFilePos' => 9122,
                'endTokenPos' => 829,
                'endFilePos' => 9126,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 29,
            'endColumn' => 47,
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
        'startLine' => 271,
        'endLine' => 279,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
      'processDefinition' => 
      array (
        'name' => 'processDefinition',
        'parameters' => 
        array (
          'definition' => 
          array (
            'name' => 'definition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 288,
            'endLine' => 288,
            'startColumn' => 37,
            'endColumn' => 48,
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
            'startLine' => 288,
            'endLine' => 288,
            'startColumn' => 51,
            'endColumn' => 60,
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
 * Performs extra processing on plugin definitions.
 *
 * By default we add defaults for the type to the definition. If a type has
 * additional processing logic they can do that by replacing or extending the
 * method.
 */',
        'startLine' => 288,
        'endLine' => 302,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
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
 * {@inheritdoc}
 */',
        'startLine' => 307,
        'endLine' => 321,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
 * {@inheritdoc}
 */',
        'startLine' => 326,
        'endLine' => 331,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
      'findDefinitions' => 
      array (
        'name' => 'findDefinitions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Finds plugin definitions.
 *
 * @return array
 *   List of definitions to store in cache.
 */',
        'startLine' => 339,
        'endLine' => 354,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
      'extractProviderFromDefinition' => 
      array (
        'name' => 'extractProviderFromDefinition',
        'parameters' => 
        array (
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
            'startLine' => 366,
            'endLine' => 366,
            'startColumn' => 52,
            'endColumn' => 69,
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
 * Extracts the provider from a plugin definition.
 *
 * @param mixed $plugin_definition
 *   The plugin definition. Usually either an array or an instance of
 *   \\Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface.
 *
 * @return string|null
 *   The provider string, if it exists. NULL otherwise.
 */',
        'startLine' => 366,
        'endLine' => 379,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
      'alterDefinitions' => 
      array (
        'name' => 'alterDefinitions',
        'parameters' => 
        array (
          'definitions' => 
          array (
            'name' => 'definitions',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 387,
            'endLine' => 387,
            'startColumn' => 39,
            'endColumn' => 51,
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
 * Invokes the hook to alter the definitions if the alter hook is set.
 *
 * @param array $definitions
 *   The discovered plugin definitions.
 */',
        'startLine' => 387,
        'endLine' => 391,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'aliasName' => NULL,
      ),
      'providerExists' => 
      array (
        'name' => 'providerExists',
        'parameters' => 
        array (
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 399,
            'endLine' => 399,
            'startColumn' => 37,
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
 * Determines if the provider of a definition exists.
 *
 * @return bool
 *   TRUE if provider exists, FALSE otherwise.
 */',
        'startLine' => 399,
        'endLine' => 401,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
        'startLine' => 406,
        'endLine' => 408,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
        'startLine' => 413,
        'endLine' => 415,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
        'startLine' => 420,
        'endLine' => 422,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        'currentClassName' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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