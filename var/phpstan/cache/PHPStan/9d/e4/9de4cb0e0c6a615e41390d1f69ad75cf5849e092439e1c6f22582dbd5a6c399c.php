<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Security/DoTrustedCallbackTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Security\DoTrustedCallbackTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a169e896c9c3de0c6b35f990cdb2c788e3a30c50d602447f564057f5f7747174-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Security/DoTrustedCallbackTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Security',
    'name' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
    'shortName' => 'DoTrustedCallbackTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Ensures that only predefined methods can be used as callback methods.
 *
 * @see \\Drupal\\Core\\Security\\Attribute\\TrustedCallback
 * @see \\Drupal\\Core\\Security\\TrustedCallbackInterface
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 110,
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
      'doTrustedCallback' => 
      array (
        'name' => 'doTrustedCallback',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 37,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
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
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 57,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 70,
            'endColumn' => 77,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'error_type' => 
          array (
            'name' => 'error_type',
            'default' => 
            array (
              'code' => '\\Drupal\\Core\\Security\\TrustedCallbackInterface::THROW_EXCEPTION',
              'attributes' => 
              array (
                'startLine' => 56,
                'endLine' => 56,
                'startTokenPos' => 45,
                'startFilePos' => 2387,
                'endTokenPos' => 47,
                'endFilePos' => 2427,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 80,
            'endColumn' => 134,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'extra_trusted_interface' => 
          array (
            'name' => 'extra_trusted_interface',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 56,
                'endLine' => 56,
                'startTokenPos' => 54,
                'startFilePos' => 2457,
                'endTokenPos' => 54,
                'endFilePos' => 2460,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 137,
            'endColumn' => 167,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Performs a callback.
 *
 * If the callback is trusted the callback will occur. Trusted callbacks must
 * be methods that are tagged with the
 * \\Drupal\\Core\\Security\\Attribute\\TrustedCallback attribute, or be methods of
 * a class that implements
 * \\Drupal\\Core\\Security\\TrustedCallbackInterface or $extra_trusted_interface,
 * or be an anonymous function. If the callback is not trusted then whether or
 * not the callback is called and what type of error is thrown depends on
 * $error_type. To provide time for dependent code to use trusted callbacks
 * use TrustedCallbackInterface::TRIGGER_SILENCED_DEPRECATION and then at a
 * later date change this to TrustedCallbackInterface::THROW_EXCEPTION.
 *
 * @param callable $callback
 *   The callback to call. Note that callbacks which are objects and use the
 *   magic method __invoke() are not supported.
 * @param array $args
 *   The arguments to pass the callback.
 * @param string $message
 *   The error message if the callback is not trusted. If the message contains
 *   "%s" it will be replaced in with the resolved callback.
 * @param string $error_type
 *   (optional) The type of error to trigger. One of:
 *   - TrustedCallbackInterface::THROW_EXCEPTION
 *   - TrustedCallbackInterface::TRIGGER_SILENCED_DEPRECATION
 *   Defaults to TrustedCallbackInterface::THROW_EXCEPTION.
 * @param string $extra_trusted_interface
 *   (optional) An additional interface that if implemented by the callback
 *   object means any public methods on that object are trusted.
 *
 * @return mixed
 *   The callback\'s return value.
 *
 * @throws \\Drupal\\Core\\Security\\UntrustedCallbackException
 *   Exception thrown if the callback is not trusted and $error_type equals
 *   TrustedCallbackInterface::THROW_EXCEPTION.
 *
 * @see \\Drupal\\Core\\Security\\Attribute\\TrustedCallback
 * @see \\Drupal\\Core\\Security\\TrustedCallbackInterface
 */',
        'startLine' => 56,
        'endLine' => 108,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Security',
        'declaringClassName' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
        'implementingClassName' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
        'currentClassName' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
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