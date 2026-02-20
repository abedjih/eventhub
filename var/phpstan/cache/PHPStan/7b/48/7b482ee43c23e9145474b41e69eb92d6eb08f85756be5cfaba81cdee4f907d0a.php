<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Plugin/ContainerFactoryPluginInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Plugin\ContainerFactoryPluginInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a3e5e9641d7041fea8b7fa93723a4e2911c62776a3e569dd766f867b4f4e1da8-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Plugin/ContainerFactoryPluginInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Plugin',
    'name' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
    'shortName' => 'ContainerFactoryPluginInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for pulling plugin dependencies from the container.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 29,
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
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 33,
            'endColumn' => 61,
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 64,
            'endColumn' => 83,
            'parameterIndex' => 1,
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 86,
            'endColumn' => 95,
            'parameterIndex' => 2,
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 98,
            'endColumn' => 115,
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
 * Creates an instance of the plugin.
 *
 * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
 *   The container to pull out services used in the plugin.
 * @param array $configuration
 *   A configuration array containing information about the plugin instance.
 * @param string $plugin_id
 *   The plugin ID for the plugin instance.
 * @param mixed $plugin_definition
 *   The plugin implementation definition.
 *
 * @return static
 *   Returns an instance of this plugin.
 */',
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 3,
        'endColumn' => 117,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Plugin',
        'declaringClassName' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
        'implementingClassName' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
        'currentClassName' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
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