<?php declare(strict_types = 1);

// odsl-/var/www/html/web/modules/custom/eventhub_core/src/Service/RegistrationManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_core\Service\RegistrationManager
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-4bddc803d60e97139486b2d131996c9f83f717bc1a265afa5eaa4ff4290a8e52',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'filename' => '/var/www/html/web/modules/custom/eventhub_core/src/Service/RegistrationManager.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_core\\Service',
    'name' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
    'shortName' => 'RegistrationManager',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Service for managing Registration entities.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 147,
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
      'entityTypeManager' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'name' => 'entityTypeManager',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 66,
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
          'entityTypeManager' => 
          array (
            'name' => 'entityTypeManager',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 15,
            'endLine' => 15,
            'startColumn' => 5,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 14,
        'endLine' => 16,
        'startColumn' => 3,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'aliasName' => NULL,
      ),
      'getRegistrationsForEvent' => 
      array (
        'name' => 'getRegistrationsForEvent',
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 44,
            'endColumn' => 55,
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
 * Gets all registrations for an event.
 *
 * @param int $eventId
 *   The event ID.
 *
 * @return \\Drupal\\eventhub_core\\Entity\\Registration[]
 *   Array of Registration entities.
 */',
        'startLine' => 27,
        'endLine' => 47,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'aliasName' => NULL,
      ),
      'getRegistrationCount' => 
      array (
        'name' => 'getRegistrationCount',
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
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 40,
            'endColumn' => 51,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the count of active registrations for an event.
 *
 * @param int $eventId
 *   The event ID.
 *
 * @return int
 *   The number of active registrations.
 */',
        'startLine' => 58,
        'endLine' => 67,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'aliasName' => NULL,
      ),
      'isAlreadyRegistered' => 
      array (
        'name' => 'isAlreadyRegistered',
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
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'email' => 
          array (
            'name' => 'email',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'excludeRegistrationId' => 
          array (
            'name' => 'excludeRegistrationId',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 82,
                'endLine' => 82,
                'startTokenPos' => 279,
                'startFilePos' => 2057,
                'endTokenPos' => 279,
                'endFilePos' => 2060,
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
                      'name' => 'int',
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
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 68,
            'endColumn' => 101,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if an email is already registered for an event.
 *
 * @param int $eventId
 *   The event ID.
 * @param string $email
 *   The email address.
 * @param int|null $excludeRegistrationId
 *   Optional registration ID to exclude (for updates).
 *
 * @return bool
 *   TRUE if already registered.
 */',
        'startLine' => 82,
        'endLine' => 96,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'aliasName' => NULL,
      ),
      'cancelRegistration' => 
      array (
        'name' => 'cancelRegistration',
        'parameters' => 
        array (
          'registrationId' => 
          array (
            'name' => 'registrationId',
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
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 38,
            'endColumn' => 56,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Cancels a registration.
 *
 * @param int $registrationId
 *   The registration ID.
 *
 * @return bool
 *   TRUE if successfully cancelled.
 */',
        'startLine' => 107,
        'endLine' => 121,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'aliasName' => NULL,
      ),
      'deleteRegistrationsForEvent' => 
      array (
        'name' => 'deleteRegistrationsForEvent',
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
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 47,
            'endColumn' => 58,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Deletes all registrations for an event.
 *
 * @param int $eventId
 *   The event ID.
 */',
        'startLine' => 129,
        'endLine' => 145,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
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