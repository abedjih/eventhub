<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Security/TrustedCallbackInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Security\TrustedCallbackInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-0d91143913c3f75672a33ff8cc0af1d0819367e57c30ee1ed493015e3f4dc7b1-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Security/TrustedCallbackInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Security',
    'name' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
    'shortName' => 'TrustedCallbackInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface to declare trusted callbacks.
 *
 * @see \\Drupal\\Core\\Security\\DoTrustedCallbackTrait
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 37,
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
      'THROW_EXCEPTION' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
        'implementingClassName' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
        'name' => 'THROW_EXCEPTION',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'exception\'',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 23,
            'startFilePos' => 266,
            'endTokenPos' => 23,
            'endFilePos' => 276,
          ),
        ),
        'docComment' => '/**
 * Untrusted callbacks throw exceptions.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 3,
        'endColumn' => 38,
      ),
      'TRIGGER_SILENCED_DEPRECATION' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
        'implementingClassName' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
        'name' => 'TRIGGER_SILENCED_DEPRECATION',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'silenced_deprecation\'',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 20,
            'startTokenPos' => 34,
            'startFilePos' => 400,
            'endTokenPos' => 34,
            'endFilePos' => 421,
          ),
        ),
        'docComment' => '/**
 * Untrusted callbacks trigger silenced E_USER_DEPRECATION errors.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 3,
        'endColumn' => 62,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'trustedCallbacks' => 
      array (
        'name' => 'trustedCallbacks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Lists the trusted callbacks provided by the implementing class.
 *
 * Trusted callbacks are public methods on the implementing class and can be
 * invoked via
 * \\Drupal\\Core\\Security\\DoTrustedCallbackTrait::doTrustedCallback().
 *
 * @return string[]
 *   List of method names implemented by the class that can be used as trusted
 *   callbacks.
 *
 * @see \\Drupal\\Core\\Security\\DoTrustedCallbackTrait::doTrustedCallback()
 */',
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Security',
        'declaringClassName' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
        'implementingClassName' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
        'currentClassName' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
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