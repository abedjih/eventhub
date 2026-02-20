<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/TranslationStatusInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\TypedData\TranslationStatusInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-22c7bd19cf996a17a2be8dad71c01feb2da1fed5225e7d27927765af23e01fb3-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/TranslationStatusInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\TypedData',
    'name' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
    'shortName' => 'TranslationStatusInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for checking the status of an entity translation.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
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
      'TRANSLATION_REMOVED' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
        'name' => 'TRANSLATION_REMOVED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 13,
            'endLine' => 13,
            'startTokenPos' => 23,
            'startFilePos' => 257,
            'endTokenPos' => 23,
            'endFilePos' => 257,
          ),
        ),
        'docComment' => '/**
 * Status code identifying a removed translation.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 13,
        'endLine' => 13,
        'startColumn' => 3,
        'endColumn' => 32,
      ),
      'TRANSLATION_EXISTING' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
        'name' => 'TRANSLATION_EXISTING',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 18,
            'startTokenPos' => 34,
            'startFilePos' => 358,
            'endTokenPos' => 34,
            'endFilePos' => 358,
          ),
        ),
        'docComment' => '/**
 * Status code identifying an existing translation.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 3,
        'endColumn' => 33,
      ),
      'TRANSLATION_CREATED' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
        'name' => 'TRANSLATION_CREATED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 23,
            'endLine' => 23,
            'startTokenPos' => 45,
            'startFilePos' => 462,
            'endTokenPos' => 45,
            'endFilePos' => 462,
          ),
        ),
        'docComment' => '/**
 * Status code identifying a newly created translation.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 3,
        'endColumn' => 32,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'getTranslationStatus' => 
      array (
        'name' => 'getTranslationStatus',
        'parameters' => 
        array (
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
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the translation status.
 *
 * @param string $langcode
 *   The language code identifying the translation.
 *
 * @return int|null
 *   One of the TRANSLATION_* constants or NULL if the given translation does
 *   not exist.
 */',
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
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