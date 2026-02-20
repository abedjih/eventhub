<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/StringTranslation/TranslationInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\StringTranslation\TranslationInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8c394062b5447252fbe5a183f09e1526cc8732374d315f999c87eb8d29e2da6e-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/StringTranslation/TranslationInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\StringTranslation',
    'name' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
    'shortName' => 'TranslationInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for the translation.manager translation service.
 *
 * @ingroup i18n
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 112,
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
      'translate' => 
      array (
        'name' => 'translate',
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
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 29,
            'endColumn' => 35,
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
                'startLine' => 48,
                'endLine' => 48,
                'startTokenPos' => 32,
                'startFilePos' => 1933,
                'endTokenPos' => 33,
                'endFilePos' => 1934,
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
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 38,
            'endColumn' => 53,
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
                'startLine' => 48,
                'endLine' => 48,
                'startTokenPos' => 42,
                'startFilePos' => 1954,
                'endTokenPos' => 43,
                'endFilePos' => 1955,
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
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 56,
            'endColumn' => 74,
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
 * Never call this translate() method directly. In order for strings to be
 * localized, make them available in one of the ways supported by the
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
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 76,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        'aliasName' => NULL,
      ),
      'translateString' => 
      array (
        'name' => 'translateString',
        'parameters' => 
        array (
          'translated_string' => 
          array (
            'name' => 'translated_string',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 35,
            'endColumn' => 71,
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
 * Translates a TranslatableMarkup object to a string.
 *
 * @param \\Drupal\\Core\\StringTranslation\\TranslatableMarkup $translated_string
 *   A TranslatableMarkup object.
 *
 * @return string
 *   The translated string.
 */',
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 3,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
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
            'startLine' => 110,
            'endLine' => 110,
            'startColumn' => 32,
            'endColumn' => 37,
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
            'startLine' => 110,
            'endLine' => 110,
            'startColumn' => 40,
            'endColumn' => 48,
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
            'startLine' => 110,
            'endLine' => 110,
            'startColumn' => 51,
            'endColumn' => 57,
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
                'startLine' => 110,
                'endLine' => 110,
                'startTokenPos' => 84,
                'startFilePos' => 4628,
                'endTokenPos' => 85,
                'endFilePos' => 4629,
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
            'startLine' => 110,
            'endLine' => 110,
            'startColumn' => 60,
            'endColumn' => 75,
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
                'startLine' => 110,
                'endLine' => 110,
                'startTokenPos' => 94,
                'startFilePos' => 4649,
                'endTokenPos' => 95,
                'endFilePos' => 4650,
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
            'startLine' => 110,
            'endLine' => 110,
            'startColumn' => 78,
            'endColumn' => 96,
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
 * This function ensures that the string is pluralized correctly. Since
 * TranslationInterface::translate() is called by this function, make sure not
 * to pass already-localized strings to it. See
 * PluralTranslatableMarkup::createFromTranslatedString() for that.
 *
 * For example:
 * @code
 *   $output = $string_translation->formatPlural($node->comment_count, \'1 comment\', \'@count comments\');
 * @endcode
 *
 * Example with additional replacements:
 * @code
 *   $output = $string_translation->formatPlural($update_count,
 *     \'Changed the content type of 1 post from %old-type to %new-type.\',
 *     \'Changed the content type of @count posts from %old-type to %new-type.\',
 *     [\'%old-type\' => $info->old_type, \'%new-type\' => $info->new_type)];
 * @endcode
 *
 * @param int $count
 *   The item count to display.
 * @param string $singular
 *   The string for the singular case. Make sure it is clear this is singular,
 *   to ease translation (e.g. use "1 new comment" instead of "1 new"). Do not
 *   use @count in the singular string.
 * @param string $plural
 *   The string for the plural case. Make sure it is clear this is plural, to
 *   ease translation. Use @count in place of the item count, as in
 *   "@count new comments".
 * @param array $args
 *   An associative array of replacements to make after translation. Instances
 *   of any key in this array are replaced with the corresponding value.
 *   Based on the first character of the key, the value is escaped and/or
 *   themed. See \\Drupal\\Component\\Render\\FormattableMarkup. Note that you do
 *   not need to include @count in this array; this replacement is done
 *   automatically for the plural cases.
 * @param array $options
 *   An associative array of additional options. See t() for allowed keys.
 *
 * @return \\Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup
 *   A translated string.
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface::translate()
 * @see t()
 * @see \\Drupal\\Component\\Render\\FormattableMarkup
 * @see \\Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup::createFromTranslatedString()
 */',
        'startLine' => 110,
        'endLine' => 110,
        'startColumn' => 3,
        'endColumn' => 98,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
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