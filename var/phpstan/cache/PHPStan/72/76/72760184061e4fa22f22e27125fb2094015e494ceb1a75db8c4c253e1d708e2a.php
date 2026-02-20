<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Factory/FactoryInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Plugin\Factory\FactoryInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a6fd61a9b3c40e978ad9a0b37429617d5fa51e5fdba13601e7edf217ea4c6480-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Plugin\\Factory\\FactoryInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Factory/FactoryInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Plugin\\Factory',
    'name' => 'Drupal\\Component\\Plugin\\Factory\\FactoryInterface',
    'shortName' => 'FactoryInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Factory interface implemented by all plugin factories.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 26,
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
            'startLine' => 24,
            'endLine' => 24,
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
                'startLine' => 24,
                'endLine' => 24,
                'startTokenPos' => 32,
                'startFilePos' => 693,
                'endTokenPos' => 33,
                'endFilePos' => 694,
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
            'startLine' => 24,
            'endLine' => 24,
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
 * Creates a plugin instance based on the provided ID and configuration.
 *
 * @param string $plugin_id
 *   The ID of the plugin being instantiated.
 * @param array $configuration
 *   An array of configuration relevant to the plugin instance.
 *
 * @return object
 *   A fully configured plugin instance.
 *
 * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
 *   If the instance cannot be created, such as if the ID is invalid.
 */',
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 3,
        'endColumn' => 72,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Factory',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Factory\\FactoryInterface',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Factory\\FactoryInterface',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Factory\\FactoryInterface',
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