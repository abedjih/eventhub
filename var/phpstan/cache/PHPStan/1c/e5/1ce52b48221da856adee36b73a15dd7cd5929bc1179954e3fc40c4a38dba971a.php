<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/TranslatableStorageInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\TranslatableStorageInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-75b12f8646fdb9a50812986c1ce76776ca00535d1142c680dc9e6d2697b516af-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\TranslatableStorageInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/TranslatableStorageInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\TranslatableStorageInterface',
    'shortName' => 'TranslatableStorageInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A storage that supports translatable entity types.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 30,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
      'createTranslation' => 
      array (
        'name' => 'createTranslation',
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
                'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 37,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 69,
            'endColumn' => 77,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 28,
                'endLine' => 28,
                'startTokenPos' => 41,
                'startFilePos' => 1053,
                'endTokenPos' => 42,
                'endFilePos' => 1054,
              ),
            ),
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
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 80,
            'endColumn' => 97,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs a new entity translation object, without permanently saving it.
 *
 * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
 *   The entity object being translated.
 * @param string $langcode
 *   The translation language code.
 * @param array $values
 *   (optional) An associative array of initial field values keyed by field
 *   name. If none is provided default values will be applied.
 *
 * @return \\Drupal\\Core\\Entity\\ContentEntityInterface
 *   Another instance of the specified entity object class with the specified
 *   active language and initial values.
 *
 * @todo Consider accepting \\Drupal\\Core\\Entity\\TranslatableInterface as first
 *   parameter. See https://www.drupal.org/project/drupal/issues/2932049.
 */',
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 99,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\TranslatableStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\TranslatableStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\TranslatableStorageInterface',
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