<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Mapper/MapperInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Plugin\Mapper\MapperInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4584002793289521af7154807944acc1c247e50fecf890cae907cdb49436f4c5-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Mapper/MapperInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Plugin\\Mapper',
    'name' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
    'shortName' => 'MapperInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Plugin mapper interface.
 *
 * Plugin mappers are responsible for mapping a plugin request to its
 * implementation. For example, it might map a cache bin to a memcache bin.
 *
 * Mapper objects incorporate the best practices of retrieving configurations,
 * type information, and factory instantiation.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 30,
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
            'startLine' => 28,
            'endLine' => 28,
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
 * Gets or creates a plugin instance that satisfies the given options.
 *
 * @param array $options
 *   An array of options that can be used to determine a suitable plugin to
 *   instantiate and how to configure it.
 *
 * @return object|false
 *   A fully configured plugin instance. The interface of the plugin instance
 *   will depend on the plugin type. If no instance can be retrieved, FALSE
 *   will be returned.
 */',
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Mapper',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
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