<?php declare(strict_types = 1);

// osfsl-/var/www/html/web/modules/custom/eventhub_core/src/Service/RegistrationCountBuilder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_core\Service\RegistrationCountBuilder
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-503ee9e2546edef6e0a5a80bfa1579360d977b46fa7c0d99351e69b0c37890ed-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'filename' => '/var/www/html/web/modules/custom/eventhub_core/src/Service/RegistrationCountBuilder.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_core\\Service',
    'name' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
    'shortName' => 'RegistrationCountBuilder',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Lazy builder for the registration count display.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 55,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'registrationManager' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'name' => 'registrationManager',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 61,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'eventManager' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'name' => 'eventManager',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\eventhub_core\\Service\\EventManager',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => true,
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
          'registrationManager' => 
          array (
            'name' => 'registrationManager',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 18,
            'endLine' => 18,
            'startColumn' => 5,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'eventManager' => 
          array (
            'name' => 'eventManager',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\eventhub_core\\Service\\EventManager',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 5,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 17,
        'endLine' => 20,
        'startColumn' => 3,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'aliasName' => NULL,
      ),
      'build' => 
      array (
        'name' => 'build',
        'parameters' => 
        array (
          'eventId' => 
          array (
            'name' => 'eventId',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 25,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Builds the registration count render array.
 *
 * @param int $eventId
 *   The event ID.
 *
 * @return array
 *   A render array.
 */',
        'startLine' => 31,
        'endLine' => 46,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'aliasName' => NULL,
      ),
      'trustedCallbacks' => 
      array (
        'name' => 'trustedCallbacks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 51,
        'endLine' => 53,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationCountBuilder',
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