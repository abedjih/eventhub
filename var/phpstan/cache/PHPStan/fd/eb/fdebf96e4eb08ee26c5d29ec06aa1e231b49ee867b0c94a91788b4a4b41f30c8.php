<?php declare(strict_types = 1);

// odsl-/var/www/html/web/modules/custom/eventhub_core/src/Hook/EntityHooks.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_core\Hook\EntityHooks
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-8259cab5438616eb0dabc3d05fede640aa07384322e50b1698cafed85bc94e1b',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'filename' => '/var/www/html/web/modules/custom/eventhub_core/src/Hook/EntityHooks.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_core\\Hook',
    'name' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
    'shortName' => 'EntityHooks',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Entity hooks for EventHub.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 148,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
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
        'declaringClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'implementingClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
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
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 61,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'messenger' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'implementingClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'name' => 'messenger',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Messenger\\MessengerInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 50,
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
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 5,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'messenger' => 
          array (
            'name' => 'messenger',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Messenger\\MessengerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 5,
            'endColumn' => 50,
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
        'startLine' => 27,
        'endLine' => 30,
        'startColumn' => 3,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Hook',
        'declaringClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'implementingClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'currentClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'aliasName' => NULL,
      ),
      'entityPresave' => 
      array (
        'name' => 'entityPresave',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 33,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'entity_presave\'',
                'attributes' => 
                array (
                  'startLine' => 35,
                  'endLine' => 35,
                  'startTokenPos' => 123,
                  'startFilePos' => 903,
                  'endTokenPos' => 123,
                  'endFilePos' => 918,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Generates a slug for events and validates capacity.
 */',
        'startLine' => 35,
        'endLine' => 59,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Hook',
        'declaringClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'implementingClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'currentClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'aliasName' => NULL,
      ),
      'entityInsert' => 
      array (
        'name' => 'entityInsert',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 32,
            'endColumn' => 54,
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
          0 => 
          array (
            'name' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'entity_insert\'',
                'attributes' => 
                array (
                  'startLine' => 64,
                  'endLine' => 64,
                  'startTokenPos' => 296,
                  'startFilePos' => 1854,
                  'endTokenPos' => 296,
                  'endFilePos' => 1868,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Notifies organizer when a new registration is created.
 */',
        'startLine' => 64,
        'endLine' => 84,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Hook',
        'declaringClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'implementingClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'currentClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'aliasName' => NULL,
      ),
      'entityUpdate' => 
      array (
        'name' => 'entityUpdate',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 32,
            'endColumn' => 54,
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
          0 => 
          array (
            'name' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'entity_update\'',
                'attributes' => 
                array (
                  'startLine' => 89,
                  'endLine' => 89,
                  'startTokenPos' => 436,
                  'startFilePos' => 2492,
                  'endTokenPos' => 436,
                  'endFilePos' => 2506,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Invalidates cache when an event is updated.
 */',
        'startLine' => 89,
        'endLine' => 99,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Hook',
        'declaringClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'implementingClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'currentClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'aliasName' => NULL,
      ),
      'entityDelete' => 
      array (
        'name' => 'entityDelete',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 105,
            'endLine' => 105,
            'startColumn' => 32,
            'endColumn' => 54,
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
          0 => 
          array (
            'name' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'entity_delete\'',
                'attributes' => 
                array (
                  'startLine' => 104,
                  'endLine' => 104,
                  'startTokenPos' => 505,
                  'startFilePos' => 2807,
                  'endTokenPos' => 505,
                  'endFilePos' => 2821,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Deletes related registrations when an event is deleted.
 */',
        'startLine' => 104,
        'endLine' => 113,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Hook',
        'declaringClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'implementingClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'currentClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'aliasName' => NULL,
      ),
      'entityAccess' => 
      array (
        'name' => 'entityAccess',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 119,
            'endLine' => 119,
            'startColumn' => 32,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operation' => 
          array (
            'name' => 'operation',
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
            'startLine' => 119,
            'endLine' => 119,
            'startColumn' => 57,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'account' => 
          array (
            'name' => 'account',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Session\\AccountInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 119,
            'endLine' => 119,
            'startColumn' => 76,
            'endColumn' => 100,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Access\\AccessResultInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'entity_access\'',
                'attributes' => 
                array (
                  'startLine' => 118,
                  'endLine' => 118,
                  'startTokenPos' => 576,
                  'startFilePos' => 3138,
                  'endTokenPos' => 576,
                  'endFilePos' => 3152,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Controls access to registrations.
 */',
        'startLine' => 118,
        'endLine' => 146,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Hook',
        'declaringClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'implementingClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
        'currentClassName' => 'Drupal\\eventhub_core\\Hook\\EntityHooks',
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