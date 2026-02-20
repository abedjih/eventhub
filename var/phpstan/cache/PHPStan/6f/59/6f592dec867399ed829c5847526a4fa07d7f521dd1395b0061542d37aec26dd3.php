<?php declare(strict_types = 1);

// odsl-/var/www/html/web/modules/custom/eventhub_core/tests/src/Unit/Service/EventManagerTest.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Tests\eventhub_core\Unit\Service\EventManagerTest
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-f11fe4edbacc87736165b674b06df6e3008cd1c5fa48d9f998cf5b7ad1df1967',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'filename' => '/var/www/html/web/modules/custom/eventhub_core/tests/src/Unit/Service/EventManagerTest.php',
      ),
    ),
    'namespace' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service',
    'name' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
    'shortName' => 'EventManagerTest',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Tests the EventManager service.
 *
 * @group eventhub
 * @coversDefaultClass \\Drupal\\eventhub_core\\Service\\EventManager
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 195,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Tests\\UnitTestCase',
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
      'eventManager' => 
      array (
        'declaringClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'name' => 'eventManager',
        'modifiers' => 4,
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
        'docComment' => '/**
 * The event manager under test.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 3,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entityTypeManager' => 
      array (
        'declaringClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'name' => 'entityTypeManager',
        'modifiers' => 4,
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
        'docComment' => '/**
 * The mocked entity type manager.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 3,
        'endColumn' => 56,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'registrationManager' => 
      array (
        'declaringClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'name' => 'registrationManager',
        'modifiers' => 4,
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
                  'name' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'PHPUnit\\Framework\\MockObject\\MockObject',
                  'isIdentifier' => false,
                ),
              ),
            ),
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The mocked registration manager.
 *
 * @var \\Drupal\\eventhub_core\\Service\\RegistrationManager|\\PHPUnit\\Framework\\MockObject\\MockObject
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 62,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'storage' => 
      array (
        'declaringClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'name' => 'storage',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The mocked entity storage.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 3,
        'endColumn' => 42,
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
      'setUp' => 
      array (
        'name' => 'setUp',
        'parameters' => 
        array (
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
 * {@inheritdoc}
 */',
        'startLine' => 48,
        'endLine' => 64,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'aliasName' => NULL,
      ),
      'testGetRemainingCapacityWithAvailableSpots' => 
      array (
        'name' => 'testGetRemainingCapacityWithAvailableSpots',
        'parameters' => 
        array (
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
 * Tests getRemainingCapacity with available spots.
 *
 * @covers ::getRemainingCapacity
 */',
        'startLine' => 71,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'aliasName' => NULL,
      ),
      'testGetRemainingCapacityWhenFull' => 
      array (
        'name' => 'testGetRemainingCapacityWhenFull',
        'parameters' => 
        array (
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
 * Tests getRemainingCapacity when event is full.
 *
 * @covers ::getRemainingCapacity
 */',
        'startLine' => 94,
        'endLine' => 110,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'aliasName' => NULL,
      ),
      'testGetRemainingCapacityEventNotFound' => 
      array (
        'name' => 'testGetRemainingCapacityEventNotFound',
        'parameters' => 
        array (
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
 * Tests getRemainingCapacity when event does not exist.
 *
 * @covers ::getRemainingCapacity
 */',
        'startLine' => 117,
        'endLine' => 125,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'aliasName' => NULL,
      ),
      'testIsEventFullReturnsTrue' => 
      array (
        'name' => 'testIsEventFullReturnsTrue',
        'parameters' => 
        array (
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
 * Tests isEventFull returns true when full.
 *
 * @covers ::isEventFull
 */',
        'startLine' => 132,
        'endLine' => 147,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'aliasName' => NULL,
      ),
      'testIsEventFullReturnsFalse' => 
      array (
        'name' => 'testIsEventFullReturnsFalse',
        'parameters' => 
        array (
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
 * Tests isEventFull returns false when not full.
 *
 * @covers ::isEventFull
 */',
        'startLine' => 154,
        'endLine' => 169,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'aliasName' => NULL,
      ),
      'testGetRemainingCapacityNeverNegative' => 
      array (
        'name' => 'testGetRemainingCapacityNeverNegative',
        'parameters' => 
        array (
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
 * Tests getRemainingCapacity never returns negative.
 *
 * @covers ::getRemainingCapacity
 */',
        'startLine' => 176,
        'endLine' => 193,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_core\\Unit\\Service\\EventManagerTest',
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