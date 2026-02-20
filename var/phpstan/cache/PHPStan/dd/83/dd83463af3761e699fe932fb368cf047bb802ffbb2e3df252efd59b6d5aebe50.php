<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Logger/LoggerChannelTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Logger\LoggerChannelTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-59eab97cefb8e4db939d5adfd278898014af8f3f4d3cf226413d0679e01ef004-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Logger/LoggerChannelTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Logger',
    'name' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
    'shortName' => 'LoggerChannelTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Wrapper methods for the logger factory service.
 *
 * This utility trait should only be used in application-level code, such as
 * classes that would implement ContainerInjectionInterface. Services registered
 * in the Container should not use this trait but inject the appropriate service
 * directly for easier testing.
 *
 * @see \\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 58,
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
      'loggerFactory' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
        'name' => 'loggerFactory',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The logger channel factory service.
 *
 * @var \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 22,
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
      'getLogger' => 
      array (
        'name' => 'getLogger',
        'parameters' => 
        array (
          'channel' => 
          array (
            'name' => 'channel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 32,
            'endColumn' => 39,
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
 * Gets the logger for a specific channel.
 *
 * @param string $channel
 *   The name of the channel. Can be any string, but the general practice is
 *   to use the name of the subsystem calling this.
 *
 * @return \\Psr\\Log\\LoggerInterface
 *   The logger for the given channel.
 *
 * @todo Require the use of injected services:
 *   https://www.drupal.org/node/2733703
 */',
        'startLine' => 37,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
        'aliasName' => NULL,
      ),
      'setLoggerFactory' => 
      array (
        'name' => 'setLoggerFactory',
        'parameters' => 
        array (
          'logger_factory' => 
          array (
            'name' => 'logger_factory',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 36,
            'endColumn' => 80,
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
 * Injects the logger channel factory.
 *
 * @param \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface $logger_factory
 *   The logger channel factory service.
 *
 * @return $this
 */',
        'startLine' => 52,
        'endLine' => 56,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
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