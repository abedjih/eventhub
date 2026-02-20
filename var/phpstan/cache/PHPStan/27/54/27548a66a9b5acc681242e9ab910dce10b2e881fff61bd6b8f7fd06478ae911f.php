<?php declare(strict_types = 1);

// osfsl-/var/www/html/web/modules/custom/eventhub_core/src/Entity/Event.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_core\Entity\Event
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5436879ad7a0dfc97087757a43a66be359c88f4affda63f43c7537c8222ca0a7-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_core\\Entity\\Event',
        'filename' => '/var/www/html/web/modules/custom/eventhub_core/src/Entity/Event.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_core\\Entity',
    'name' => 'Drupal\\eventhub_core\\Entity\\Event',
    'shortName' => 'Event',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the Event entity.
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
            'code' => '\'event\'',
            'attributes' => 
            array (
              'startLine' => 22,
              'endLine' => 22,
              'startTokenPos' => 74,
              'startFilePos' => 570,
              'endTokenPos' => 74,
              'endFilePos' => 576,
            ),
          ),
          'label' => 
          array (
            'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Event\')',
            'attributes' => 
            array (
              'startLine' => 23,
              'endLine' => 23,
              'startTokenPos' => 80,
              'startFilePos' => 588,
              'endTokenPos' => 85,
              'endFilePos' => 618,
            ),
          ),
          'label_collection' => 
          array (
            'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Events\')',
            'attributes' => 
            array (
              'startLine' => 24,
              'endLine' => 24,
              'startTokenPos' => 91,
              'startFilePos' => 641,
              'endTokenPos' => 96,
              'endFilePos' => 672,
            ),
          ),
          'label_singular' => 
          array (
            'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'event\')',
            'attributes' => 
            array (
              'startLine' => 25,
              'endLine' => 25,
              'startTokenPos' => 102,
              'startFilePos' => 693,
              'endTokenPos' => 107,
              'endFilePos' => 723,
            ),
          ),
          'label_plural' => 
          array (
            'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'events\')',
            'attributes' => 
            array (
              'startLine' => 26,
              'endLine' => 26,
              'startTokenPos' => 113,
              'startFilePos' => 742,
              'endTokenPos' => 118,
              'endFilePos' => 773,
            ),
          ),
          'base_table' => 
          array (
            'code' => '\'eventhub_event\'',
            'attributes' => 
            array (
              'startLine' => 27,
              'endLine' => 27,
              'startTokenPos' => 124,
              'startFilePos' => 790,
              'endTokenPos' => 124,
              'endFilePos' => 805,
            ),
          ),
          'entity_keys' => 
          array (
            'code' => '[\'id\' => \'id\', \'uuid\' => \'uuid\', \'label\' => \'name\', \'owner\' => \'uid\', \'published\' => \'status\']',
            'attributes' => 
            array (
              'startLine' => 28,
              'endLine' => 34,
              'startTokenPos' => 130,
              'startFilePos' => 823,
              'endTokenPos' => 167,
              'endFilePos' => 941,
            ),
          ),
          'handlers' => 
          array (
            'code' => '[\'access\' => \'Drupal\\eventhub_core\\Access\\EventAccessControlHandler\', \'views_data\' => \'Drupal\\views\\EntityViewsData\']',
            'attributes' => 
            array (
              'startLine' => 35,
              'endLine' => 38,
              'startTokenPos' => 173,
              'startFilePos' => 956,
              'endTokenPos' => 189,
              'endFilePos' => 1085,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 21,
    'endLine' => 206,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityChangedInterface',
      1 => 'Drupal\\user\\EntityOwnerInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityChangedTrait',
      1 => 'Drupal\\user\\EntityOwnerTrait',
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
            'startLine' => 48,
            'endLine' => 48,
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
        'startLine' => 48,
        'endLine' => 138,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'aliasName' => NULL,
      ),
      'getName' => 
      array (
        'name' => 'getName',
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
 * Gets the event name.
 */',
        'startLine' => 143,
        'endLine' => 145,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'aliasName' => NULL,
      ),
      'getDescription' => 
      array (
        'name' => 'getDescription',
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
                  'name' => 'string',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the event description.
 */',
        'startLine' => 150,
        'endLine' => 152,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'aliasName' => NULL,
      ),
      'getEventDate' => 
      array (
        'name' => 'getEventDate',
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
                  'name' => 'string',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the event date.
 */',
        'startLine' => 157,
        'endLine' => 159,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'aliasName' => NULL,
      ),
      'getLocation' => 
      array (
        'name' => 'getLocation',
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
 * Gets the location.
 */',
        'startLine' => 164,
        'endLine' => 166,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'aliasName' => NULL,
      ),
      'getCapacity' => 
      array (
        'name' => 'getCapacity',
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
 * Gets the capacity.
 */',
        'startLine' => 171,
        'endLine' => 173,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'aliasName' => NULL,
      ),
      'getCategoryId' => 
      array (
        'name' => 'getCategoryId',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the category term ID.
 */',
        'startLine' => 178,
        'endLine' => 181,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'aliasName' => NULL,
      ),
      'getCategory' => 
      array (
        'name' => 'getCategory',
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
                  'name' => 'Drupal\\taxonomy\\TermInterface',
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
 * Gets the referenced category taxonomy term.
 */',
        'startLine' => 186,
        'endLine' => 189,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'aliasName' => NULL,
      ),
      'getCategoryLabel' => 
      array (
        'name' => 'getCategoryLabel',
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
 * Gets the category label.
 */',
        'startLine' => 194,
        'endLine' => 197,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'aliasName' => NULL,
      ),
      'isPublished' => 
      array (
        'name' => 'isPublished',
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
 * Checks if the event is published.
 */',
        'startLine' => 202,
        'endLine' => 204,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Entity',
        'declaringClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'implementingClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
        'currentClassName' => 'Drupal\\eventhub_core\\Entity\\Event',
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