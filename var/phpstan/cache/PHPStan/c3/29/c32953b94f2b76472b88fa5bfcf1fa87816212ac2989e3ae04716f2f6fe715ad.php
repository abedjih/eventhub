<?php declare(strict_types = 1);

// osfsl-/var/www/html/web/modules/custom/eventhub_core/src/Service/EventManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_core\Service\EventManager
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-31ee41ed74c059b90e7f960553791cbc9d4e6398ff7b50bdf7cba3dcb807bde1-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'filename' => '/var/www/html/web/modules/custom/eventhub_core/src/Service/EventManager.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_core\\Service',
    'name' => 'Drupal\\eventhub_core\\Service\\EventManager',
    'shortName' => 'EventManager',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Service for managing Event entities.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 166,
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
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
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
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 66,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'registrationManager' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
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
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 61,
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
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 5,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 5,
            'endColumn' => 61,
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
        'startLine' => 15,
        'endLine' => 18,
        'startColumn' => 3,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'aliasName' => NULL,
      ),
      'getUpcomingEvents' => 
      array (
        'name' => 'getUpcomingEvents',
        'parameters' => 
        array (
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => '10',
              'attributes' => 
              array (
                'startLine' => 29,
                'endLine' => 29,
                'startTokenPos' => 77,
                'startFilePos' => 663,
                'endTokenPos' => 77,
                'endFilePos' => 664,
              ),
            ),
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
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 37,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
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
 * Gets upcoming published events.
 *
 * @param int $limit
 *   Maximum number of events to return.
 *
 * @return \\Drupal\\eventhub_core\\Entity\\Event[]
 *   Array of Event entities.
 */',
        'startLine' => 29,
        'endLine' => 52,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'aliasName' => NULL,
      ),
      'getEventsByCategory' => 
      array (
        'name' => 'getEventsByCategory',
        'parameters' => 
        array (
          'termId' => 
          array (
            'name' => 'termId',
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
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 39,
            'endColumn' => 49,
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
 * Gets events by category.
 *
 * @param int $termId
 *   The taxonomy term ID.
 *
 * @return \\Drupal\\eventhub_core\\Entity\\Event[]
 *   Array of Event entities.
 */',
        'startLine' => 63,
        'endLine' => 83,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'aliasName' => NULL,
      ),
      'getEventsByOrganizer' => 
      array (
        'name' => 'getEventsByOrganizer',
        'parameters' => 
        array (
          'uid' => 
          array (
            'name' => 'uid',
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
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 40,
            'endColumn' => 47,
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
 * Gets events by organizer.
 *
 * @param int $uid
 *   The user ID.
 *
 * @return \\Drupal\\eventhub_core\\Entity\\Event[]
 *   Array of Event entities.
 */',
        'startLine' => 94,
        'endLine' => 113,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'aliasName' => NULL,
      ),
      'getRemainingCapacity' => 
      array (
        'name' => 'getRemainingCapacity',
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
            'startLine' => 124,
            'endLine' => 124,
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
 * Gets the remaining capacity for an event.
 *
 * @param int $eventId
 *   The event ID.
 *
 * @return int
 *   The number of remaining spots.
 */',
        'startLine' => 124,
        'endLine' => 138,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'aliasName' => NULL,
      ),
      'isEventFull' => 
      array (
        'name' => 'isEventFull',
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
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 31,
            'endColumn' => 42,
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
 * Checks if an event is full.
 *
 * @param int $eventId
 *   The event ID.
 *
 * @return bool
 *   TRUE if the event is full.
 */',
        'startLine' => 149,
        'endLine' => 151,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'aliasName' => NULL,
      ),
      'getTotalEventCount' => 
      array (
        'name' => 'getTotalEventCount',
        'parameters' => 
        array (
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
 * Gets the total number of events.
 */',
        'startLine' => 156,
        'endLine' => 164,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Service',
        'declaringClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'implementingClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
        'currentClassName' => 'Drupal\\eventhub_core\\Service\\EventManager',
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