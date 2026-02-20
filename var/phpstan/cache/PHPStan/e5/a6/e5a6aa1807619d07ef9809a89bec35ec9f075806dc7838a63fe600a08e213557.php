<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/ImmutableConfig.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Config\ImmutableConfig
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f34ec549dc0e4fca8ba5b750081cfb4028416c0c43d42d73e85269bbccb443ae-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/ImmutableConfig.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Config',
    'name' => 'Drupal\\Core\\Config\\ImmutableConfig',
    'shortName' => 'ImmutableConfig',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the immutable configuration object.
 *
 * Encapsulates all capabilities needed for runtime configuration handling
 * except being able to change the configuration.
 *
 * If you need to be able to change configuration use
 * \\Drupal\\Core\\Form\\ConfigFormBaseTrait or
 * \\Drupal\\Core\\Config\\ConfigFactoryInterface::getEditable().
 *
 * @see \\Drupal\\Core\\Form\\ConfigFormBaseTrait
 * @see \\Drupal\\Core\\Config\\ConfigFactoryInterface::getEditable()
 * @see \\Drupal\\Core\\Config\\ConfigFactoryInterface::get()
 *
 * @ingroup config_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 51,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Config\\Config',
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
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 23,
            'endColumn' => 26,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 29,
            'endColumn' => 34,
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
 * {@inheritdoc}
 */',
        'startLine' => 26,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'implementingClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'currentClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'aliasName' => NULL,
      ),
      'clear' => 
      array (
        'name' => 'clear',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startColumn' => 25,
            'endColumn' => 28,
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
        'startLine' => 33,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'implementingClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'currentClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'aliasName' => NULL,
      ),
      'save' => 
      array (
        'name' => 'save',
        'parameters' => 
        array (
          'has_trusted_data' => 
          array (
            'name' => 'has_trusted_data',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 108,
                'startFilePos' => 1284,
                'endTokenPos' => 108,
                'endFilePos' => 1288,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 24,
            'endColumn' => 48,
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
        'startLine' => 40,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'implementingClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'currentClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
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
        'startLine' => 47,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config',
        'declaringClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'implementingClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
        'currentClassName' => 'Drupal\\Core\\Config\\ImmutableConfig',
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