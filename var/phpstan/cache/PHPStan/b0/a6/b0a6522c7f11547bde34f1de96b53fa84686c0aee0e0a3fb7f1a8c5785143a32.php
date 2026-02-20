<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\StringTranslation\StringTranslationTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-015b4dc2c55b8184fef00a4dc56a9e143d60f12caf8ecea323150144c3d73647-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\StringTranslation',
    'name' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
    'shortName' => 'StringTranslationTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Wrapper methods for \\Drupal\\Core\\StringTranslation\\TranslationInterface.
 *
 * Using this trait will add t() and formatPlural() methods to the class. These
 * must be used for every translatable string, similar to how procedural code
 * must use the global functions t() and \\Drupal::translation()->formatPlural().
 * This allows string extractor tools to find translatable strings.
 *
 * If the class is capable of injecting services from the container, it should
 * inject the \'string_translation\' service and assign it to
 * $this->stringTranslation.
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface
 * @see container
 *
 * @ingroup i18n
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 131,
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
      'stringTranslation' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'name' => 'stringTranslation',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The string translation service.
 *
 * @var \\Drupal\\Core\\StringTranslation\\TranslationInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 3,
        'endColumn' => 31,
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
      't' => 
      array (
        'name' => 't',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 24,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 70,
                'endLine' => 70,
                'startTokenPos' => 39,
                'startFilePos' => 2747,
                'endTokenPos' => 40,
                'endFilePos' => 2748,
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
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 70,
                'endLine' => 70,
                'startTokenPos' => 49,
                'startFilePos' => 2768,
                'endTokenPos' => 50,
                'endFilePos' => 2769,
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
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 51,
            'endColumn' => 69,
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
 * Translates a string to the current language or to a given language.
 *
 * See \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct() for
 * important security information and usage guidelines.
 *
 * In order for strings to be localized, make them available in one of the
 * ways supported by the
 * @link https://www.drupal.org/node/322729 Localization API @endlink. When
 * possible, use the \\Drupal\\Core\\StringTranslation\\StringTranslationTrait
 * $this->t(). Otherwise create a new
 * \\Drupal\\Core\\StringTranslation\\TranslatableMarkup object.
 *
 * @param string $string
 *   A string containing the English text to translate.
 * @param array $args
 *   (optional) An associative array of replacements to make after
 *   translation. Based on the first character of the key, the value is
 *   escaped and/or themed. See
 *   \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
 *   details.
 * @param array $options
 *   (optional) An associative array of additional options, with the following
 *   elements:
 *   - \'langcode\' (defaults to the current language): A language code, to
 *     translate to a language other than what is used to display the page.
 *   - \'context\' (defaults to the empty context): The context the source
 *     string belongs to. See the
 *     @link i18n Internationalization topic @endlink for more information
 *     about string contexts.
 *
 * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   An object that, when cast to a string, returns the translated string.
 *
 * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
 * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct()
 *
 * @ingroup sanitization
 */',
        'startLine' => 70,
        'endLine' => 73,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'aliasName' => NULL,
      ),
      'formatPlural' => 
      array (
        'name' => 'formatPlural',
        'parameters' => 
        array (
          'count' => 
          array (
            'name' => 'count',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'singular' => 
          array (
            'name' => 'singular',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 43,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'plural' => 
          array (
            'name' => 'plural',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 54,
            'endColumn' => 60,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 83,
                'endLine' => 83,
                'startTokenPos' => 105,
                'startFilePos' => 3308,
                'endTokenPos' => 106,
                'endFilePos' => 3309,
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
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 63,
            'endColumn' => 78,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 83,
                'endLine' => 83,
                'startTokenPos' => 115,
                'startFilePos' => 3329,
                'endTokenPos' => 116,
                'endFilePos' => 3330,
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
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 81,
            'endColumn' => 99,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Formats a string containing a count of items.
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface::formatPlural()
 *
 * @return \\Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup
 *   An object that, when cast to a string, returns the translated string.
 */',
        'startLine' => 83,
        'endLine' => 85,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'aliasName' => NULL,
      ),
      'getNumberOfPlurals' => 
      array (
        'name' => 'getNumberOfPlurals',
        'parameters' => 
        array (
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 95,
                'endLine' => 95,
                'startTokenPos' => 164,
                'startFilePos' => 3724,
                'endTokenPos' => 164,
                'endFilePos' => 3727,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 95,
            'endLine' => 95,
            'startColumn' => 41,
            'endColumn' => 56,
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
 * Returns the number of plurals supported by a given language.
 *
 * @see \\Drupal\\locale\\PluralFormulaInterface::getNumberOfPlurals()
 *
 * @return int
 *   The number of plurals supported.
 */',
        'startLine' => 95,
        'endLine' => 101,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'aliasName' => NULL,
      ),
      'getStringTranslation' => 
      array (
        'name' => 'getStringTranslation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the string translation service.
 *
 * @return \\Drupal\\Core\\StringTranslation\\TranslationInterface
 *   The string translation service.
 */',
        'startLine' => 109,
        'endLine' => 115,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'aliasName' => NULL,
      ),
      'setStringTranslation' => 
      array (
        'name' => 'setStringTranslation',
        'parameters' => 
        array (
          'translation' => 
          array (
            'name' => 'translation',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 40,
            'endColumn' => 72,
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
 * Sets the string translation service to use.
 *
 * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $translation
 *   The string translation service.
 *
 * @return $this
 */',
        'startLine' => 125,
        'endLine' => 129,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
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