<?php declare(strict_types = 1);

// osfsl-/var/www/html/web/modules/custom/eventhub_core/src/Entity/Registration.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_core\Entity\Registration
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-0e5f963d542285398387a7142a651967772dfd5aa037c0d6083181316587ef3b-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'filename' => '/var/www/html/web/modules/custom/eventhub_core/src/Entity/Registration.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_core\\Entity',
    'name' => 'Drupal\\eventhub_core\\Entity\\Registration',
    'shortName' => 'Registration',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the Registration entity.
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Drupal\\Core\\Entity\\Attribute\\ContentEntityType',
        'isRepeated' => false,
        'arguments' => 
        array (
          'id' => 
          array (
            'code' => '\'registration\'',
            'attributes' => 
            array (
              'startLine' => 17,
              'endLine' => 17,
              'startTokenPos' => 49,
              'startFilePos' => 380,
              'endTokenPos' => 49,
              'endFilePos' => 393,
            ),
          ),
          'label' => 
          array (
            'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Registration\')',
            'attributes' => 
            array (
              'startLine' => 18,
              'endLine' => 18,
              'startTokenPos' => 55,
              'startFilePos' => 405,
              'endTokenPos' => 60,
              'endFilePos' => 442,
            ),
          ),
          'label_collection' => 
          array (
            'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Registrations\')',
            'attributes' => 
            array (
              'startLine' => 19,
              'endLine' => 19,
              'startTokenPos' => 66,
              'startFilePos' => 465,
              'endTokenPos' => 71,
              'endFilePos' => 503,
            ),
          ),
          'label_singular' => 
          array (
            'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'registration\')',
            'attributes' => 
            array (
              'startLine' => 20,
              'endLine' => 20,
              'startTokenPos' => 77,
              'startFilePos' => 524,
              'endTokenPos' => 82,
              'endFilePos' => 561,
            ),
          ),
          'label_plural' => 
          array (
            'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'registrations\')',
            'attributes' => 
            array (
              'startLine' => 21,
              'endLine' => 21,
              'startTokenPos' => 88,
              'startFilePos' => 580,
              'endTokenPos' => 93,
              'endFilePos' => 618,
            ),
          ),
          'base_table' => 
          array (
            'code' => '\'eventhub_registration\'',
            'attributes' => 
            array (
              'startLine' => 22,
              'endLine' => 22,
              'startTokenPos' => 99,
              'startFilePos' => 635,
              'endTokenPos' => 99,
              'endFilePos' => 657,
            ),
          ),
          'entity_keys' => 
          array (
            'code' => '[\'id\' => \'id\', \'uuid\' => \'uuid\', \'label\' => \'participant_name\']',
            'attributes' => 
            array (
              'startLine' => 23,
              'endLine' => 27,
              'startTokenPos' => 105,
              'startFilePos' => 675,
              'endTokenPos' => 128,
              'endFilePos' => 754,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 16,
    'endLine' => 145,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
      'baseFieldDefinitions' => 
      array (
        'name' => 'baseFieldDefinitions',
        'parameters' => 
        array (
          'entity_type' => 
          array (
            'name' => 'entity_type',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 34,
            'endLine' => 34,
            'startColumn' => 47,
            'endColumn' => 78,
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
 * {@inheritdoc}
 */',
        'startLine' => 34,
        'endLine' => 100,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'aliasName' => NULL,
      ),
      'getEventId' => 
      array (
        'name' => 'getEventId',
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
 * Gets the referenced event ID.
 */',
        'startLine' => 105,
        'endLine' => 107,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'aliasName' => NULL,
      ),
      'getEvent' => 
      array (
        'name' => 'getEvent',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'Drupal\\eventhub_core\\Entity\\Event',
                  'isIdentifier' => false,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the referenced event entity.
 */',
        'startLine' => 112,
        'endLine' => 115,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'aliasName' => NULL,
      ),
      'getParticipantName' => 
      array (
        'name' => 'getParticipantName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the participant name.
 */',
        'startLine' => 120,
        'endLine' => 122,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'aliasName' => NULL,
      ),
      'getEmail' => 
      array (
        'name' => 'getEmail',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the email.
 */',
        'startLine' => 127,
        'endLine' => 129,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'aliasName' => NULL,
      ),
      'getRegistrationStatus' => 
      array (
        'name' => 'getRegistrationStatus',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the registration status.
 */',
        'startLine' => 134,
        'endLine' => 136,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'aliasName' => NULL,
      ),
      'isCancelled' => 
      array (
        'name' => 'isCancelled',
        'parameters' => 
        array (
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
 * Checks if the registration is cancelled.
 */',
        'startLine' => 141,
        'endLine' => 143,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Registration',
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