<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/TranslatableInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\TypedData\TranslatableInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-1debfd749432bac7c17096510e9b7b5dcf1b2c4326773907fda27342cfb62f04-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/TranslatableInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\TypedData',
    'name' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
    'shortName' => 'TranslatableInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for translatable data.
 *
 * Classes implementing this interface do not necessarily support translations.
 *
 * To detect whether an entity type supports translation, call
 * EntityTypeInterface::isTranslatable().
 *
 * Many entity interfaces are composed of numerous other interfaces such as this
 * one, which allow implementations to pick and choose which features to support
 * through stub implementations of various interface methods. This means that
 * even if an entity class implements TranslatableInterface, it might only have
 * a stub implementation and not a functional one.
 *
 * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::isTranslatable()
 * @see https://www.drupal.org/docs/8/api/entity-api/structure-of-an-entity-annotation
 * @see https://www.drupal.org/docs/8/api/entity-api/entity-translation-api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 137,
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
    ),
    'immediateMethods' => 
    array (
      'language' => 
      array (
        'name' => 'language',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the translation language.
 *
 * @return \\Drupal\\Core\\Language\\LanguageInterface
 *   The language object.
 */',
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'aliasName' => NULL,
      ),
      'isDefaultTranslation' => 
      array (
        'name' => 'isDefaultTranslation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether the translation is the default one.
 *
 * @return bool
 *   TRUE if the translation is the default one, FALSE otherwise.
 */',
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'aliasName' => NULL,
      ),
      'isNewTranslation' => 
      array (
        'name' => 'isNewTranslation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether the translation is new.
 *
 * @return bool
 *   TRUE if the translation is new, FALSE otherwise.
 */',
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'aliasName' => NULL,
      ),
      'getTranslationLanguages' => 
      array (
        'name' => 'getTranslationLanguages',
        'parameters' => 
        array (
          'include_default' => 
          array (
            'name' => 'include_default',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 59,
                'endLine' => 59,
                'startTokenPos' => 60,
                'startFilePos' => 1853,
                'endTokenPos' => 60,
                'endFilePos' => 1856,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 43,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the languages the data is translated to.
 *
 * @param bool $include_default
 *   (optional) Whether the default language should be included. Defaults to
 *   TRUE.
 *
 * @return \\Drupal\\Core\\Language\\LanguageInterface[]
 *   An associative array of language objects, keyed by language codes.
 */',
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 3,
        'endColumn' => 67,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'aliasName' => NULL,
      ),
      'getTranslation' => 
      array (
        'name' => 'getTranslation',
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
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 34,
            'endColumn' => 42,
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
 * Gets a translation of the data.
 *
 * The returned translation has to be of the same type than this typed data
 * object.
 *
 * @param string $langcode
 *   The language code of the translation to get or
 *   LanguageInterface::LANGCODE_DEFAULT
 *   to get the data in default language.
 *
 * @return static
 *   A typed data object for the translated data.
 *
 * @throws \\InvalidArgumentException
 *   If an invalid or non-existing translation language is specified.
 */',
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'aliasName' => NULL,
      ),
      'getUntranslated' => 
      array (
        'name' => 'getUntranslated',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the translatable object in the language it was created.
 *
 * @return static
 *   The translation object referring to the original language.
 */',
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'aliasName' => NULL,
      ),
      'hasTranslation' => 
      array (
        'name' => 'hasTranslation',
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
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 34,
            'endColumn' => 42,
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
 * Checks there is a translation for the given language code.
 *
 * @param string $langcode
 *   The language code identifying the translation.
 *
 * @return bool
 *   TRUE if the translation exists, FALSE otherwise.
 */',
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'aliasName' => NULL,
      ),
      'addTranslation' => 
      array (
        'name' => 'addTranslation',
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
            'startLine' => 119,
            'endLine' => 119,
            'startColumn' => 34,
            'endColumn' => 42,
            'parameterIndex' => 0,
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
                'startLine' => 119,
                'endLine' => 119,
                'startTokenPos' => 116,
                'startFilePos' => 3619,
                'endTokenPos' => 117,
                'endFilePos' => 3620,
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
            'startLine' => 119,
            'endLine' => 119,
            'startColumn' => 45,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new translation to the translatable object.
 *
 * To create a translation of an entity prefilled with the original data:
 * @code
 *   $entity->addTranslation($langcode, $entity->toArray())
 * @endcode
 *
 * @param string $langcode
 *   The language code identifying the translation.
 * @param array $values
 *   (optional) An array of initial values to be assigned to the translatable
 *   fields. Defaults to none.
 *
 * @return static
 *   A new entity translation object.
 *
 * @throws \\InvalidArgumentException
 *   If an invalid or existing translation language is specified.
 */',
        'startLine' => 119,
        'endLine' => 119,
        'startColumn' => 3,
        'endColumn' => 64,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'aliasName' => NULL,
      ),
      'removeTranslation' => 
      array (
        'name' => 'removeTranslation',
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
            'startLine' => 127,
            'endLine' => 127,
            'startColumn' => 37,
            'endColumn' => 45,
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
 * Removes the translation identified by the given language code.
 *
 * @param string $langcode
 *   The language code identifying the translation to be removed.
 */',
        'startLine' => 127,
        'endLine' => 127,
        'startColumn' => 3,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'aliasName' => NULL,
      ),
      'isTranslatable' => 
      array (
        'name' => 'isTranslatable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the translation support status.
 *
 * @return bool
 *   TRUE if the object has translation support enabled.
 */',
        'startLine' => 135,
        'endLine' => 135,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
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