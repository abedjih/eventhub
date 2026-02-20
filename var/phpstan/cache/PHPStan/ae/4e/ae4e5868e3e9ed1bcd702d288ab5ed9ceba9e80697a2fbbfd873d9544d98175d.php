<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Routing/RedirectDestinationTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Routing\RedirectDestinationTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-30ed62eb4f4208ce30ba665e421eda3625ab1b6233d92d85403ac2ba66d89d7a-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Routing/RedirectDestinationTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Routing',
    'name' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
    'shortName' => 'RedirectDestinationTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Wrapper methods for the Redirect Destination.
 *
 * This utility trait should only be used in application-level code, such as
 * classes that would implement ContainerInjectionInterface. Services registered
 * in the Container should not use this trait but inject the appropriate service
 * directly for easier testing.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 67,
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
      'redirectDestination' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
        'implementingClassName' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
        'name' => 'redirectDestination',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The redirect destination service.
 *
 * @var \\Drupal\\Core\\Routing\\RedirectDestinationInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 3,
        'endColumn' => 33,
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
      'getDestinationArray' => 
      array (
        'name' => 'getDestinationArray',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepares a \'destination\' URL query parameter for use with \\Drupal\\Core\\Url.
 *
 * @see \\Drupal\\Core\\Routing\\RedirectDestinationInterface::getAsArray()
 *
 * @return array
 *   An associative array containing the key:
 *   - destination: The value of the current request\'s \'destination\' query
 *     parameter, if present. This can be either a relative or absolute URL.
 *     However, for security, redirection to external URLs is not performed.
 *     If the query parameter isn\'t present, then the URL of the current
 *     request is returned.
 */',
        'startLine' => 35,
        'endLine' => 37,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Routing',
        'declaringClassName' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
        'implementingClassName' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
        'currentClassName' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
        'aliasName' => NULL,
      ),
      'getRedirectDestination' => 
      array (
        'name' => 'getRedirectDestination',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the redirect destination service.
 *
 * @return \\Drupal\\Core\\Routing\\RedirectDestinationInterface
 *   The redirect destination helper.
 */',
        'startLine' => 45,
        'endLine' => 51,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Routing',
        'declaringClassName' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
        'implementingClassName' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
        'currentClassName' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
        'aliasName' => NULL,
      ),
      'setRedirectDestination' => 
      array (
        'name' => 'setRedirectDestination',
        'parameters' => 
        array (
          'redirect_destination' => 
          array (
            'name' => 'redirect_destination',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 61,
            'endLine' => 61,
            'startColumn' => 42,
            'endColumn' => 91,
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
 * Sets the redirect destination service.
 *
 * @param \\Drupal\\Core\\Routing\\RedirectDestinationInterface $redirect_destination
 *   The redirect destination service.
 *
 * @return $this
 */',
        'startLine' => 61,
        'endLine' => 65,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Routing',
        'declaringClassName' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
        'implementingClassName' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
        'currentClassName' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
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