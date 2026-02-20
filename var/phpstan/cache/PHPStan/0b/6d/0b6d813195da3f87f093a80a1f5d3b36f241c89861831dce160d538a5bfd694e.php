<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/StringTranslation/TranslatableMarkup.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\StringTranslation\TranslatableMarkup
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-d0b46edb7920a2848b81be101e9e1782427b3bb4350b501e439e95f646f8b443-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/StringTranslation/TranslatableMarkup.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\StringTranslation',
    'name' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
    'shortName' => 'TranslatableMarkup',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides translatable markup class.
 *
 * This object, when cast to a string, will return the formatted, translated
 * string. Avoid casting it to a string yourself, because it is preferable to
 * let the rendering system do the cast as late as possible in the rendering
 * process, so that this object itself can be put, untranslated, into render
 * caches and thus the cache can be shared between different language contexts.
 *
 * @see \\Drupal\\Component\\Render\\FormattableMarkup
 * @see \\Drupal\\Core\\StringTranslation\\TranslationManager::translateString()
 * @see \\Drupal\\Core\\Annotation\\Translation
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 231,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Component\\Utility\\ToStringTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'translatedMarkup' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'name' => 'translatedMarkup',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The translated markup without placeholder replacements.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'options' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'name' => 'options',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The translation options.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 3,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'stringTranslation' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
        'startLine' => 44,
        'endLine' => 44,
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
      '__construct' => 
      array (
        'name' => '__construct',
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
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 129,
                'endLine' => 129,
                'startTokenPos' => 72,
                'startFilePos' => 5495,
                'endTokenPos' => 73,
                'endFilePos' => 5496,
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
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 40,
            'endColumn' => 60,
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
                'startLine' => 129,
                'endLine' => 129,
                'startTokenPos' => 82,
                'startFilePos' => 5516,
                'endTokenPos' => 83,
                'endFilePos' => 5517,
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
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 63,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'string_translation' => 
          array (
            'name' => 'string_translation',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 129,
                'endLine' => 129,
                'startTokenPos' => 93,
                'startFilePos' => 5564,
                'endTokenPos' => 93,
                'endFilePos' => 5567,
              ),
            ),
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
                      'name' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 84,
            'endColumn' => 131,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs a new class instance.
 *
 * When possible, use the
 * \\Drupal\\Core\\StringTranslation\\StringTranslationTrait $this->t(). Otherwise
 * create a new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup object
 * directly.
 *
 * Calling the trait\'s t() method or instantiating a new TranslatableMarkup
 * object serves two purposes:
 * - At run-time it translates user-visible text into the appropriate
 *   language.
 * - Static analyzers detect calls to t() and new TranslatableMarkup, and add
 *   the first argument (the string to be translated) to the database of
 *   strings that need translation. These strings are expected to be in
 *   English, so the first argument should always be in English.
 * To allow the site to be localized, it is important that all human-readable
 * text that will be displayed on the site or sent to a user is made available
 * in one of the ways supported by the
 * @link https://www.drupal.org/node/322729 Localization API @endlink.
 * See the @link https://www.drupal.org/node/322729 Localization API @endlink
 * pages for more information, including recommendations on how to break up or
 * not break up strings for translation.
 *
 * @section sec_translating_vars Translating Variables
 * $string should always be an English literal string.
 *
 * $string should never contain a variable, such as:
 * @code
 * new TranslatableMarkup($text)
 * @endcode
 * There are several reasons for this:
 * - Using a variable for $string that is user input is a security risk.
 * - Using a variable for $string that has even guaranteed safe text (for
 *   example, user interface text provided literally in code), will not be
 *   picked up by the localization static text processor. (The parameter could
 *   be a variable if the entire string in $text has been passed into t() or
 *   new TranslatableMarkup() elsewhere as the first argument, but that
 *   strategy is not recommended.)
 *
 * It is especially important never to call new TranslatableMarkup($user_text)
 * or t($user_text) where $user_text is some text that a user entered -- doing
 * that can lead to cross-site scripting and other security problems. However,
 * you can use variable substitution in your string, to put variable text such
 * as user names or link URLs into translated text. Variable substitution
 * looks like this:
 * @code
 * new TranslatableMarkup("@name\'s blog", [\'@name\' => $account->getDisplayName()]);
 * @endcode
 * Basically, you can put placeholders like @name into your string, and the
 * method will substitute the sanitized values at translation time. (See the
 * Localization API pages referenced above and the documentation of
 * \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
 * for details about how to safely and correctly define variables in your
 * string.) Translators can then rearrange the string as necessary for the
 * language (e.g., in Spanish, it might be "blog de @name").
 *
 * @param string $string
 *   A string containing the English text to translate.
 * @param array $arguments
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
 *     string belongs to.
 * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $string_translation
 *   (optional) The string translation service.
 *
 * @throws \\InvalidArgumentException
 *   Exception thrown when $string is not a string.
 *
 * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
 * @see \\Drupal\\Core\\StringTranslation\\StringTranslationTrait::t()
 *
 * @ingroup sanitization
 */',
        'startLine' => 129,
        'endLine' => 137,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'aliasName' => NULL,
      ),
      'getUntranslatedString' => 
      array (
        'name' => 'getUntranslatedString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the untranslated string value stored in this translated string.
 *
 * @return string
 *   The string stored in this wrapper.
 */',
        'startLine' => 145,
        'endLine' => 147,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'aliasName' => NULL,
      ),
      'getOption' => 
      array (
        'name' => 'getOption',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 158,
            'endLine' => 158,
            'startColumn' => 29,
            'endColumn' => 33,
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
 * Gets a specific option from this translated string.
 *
 * @param string $name
 *   Option name.
 *
 * @return mixed
 *   The value of this option or empty string of option is not set.
 */',
        'startLine' => 158,
        'endLine' => 160,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'aliasName' => NULL,
      ),
      'getOptions' => 
      array (
        'name' => 'getOptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets all options from this translated string.
 *
 * @return mixed[]
 *   The array of options.
 */',
        'startLine' => 168,
        'endLine' => 170,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'aliasName' => NULL,
      ),
      'getArguments' => 
      array (
        'name' => 'getArguments',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets all arguments from this translated string.
 *
 * @return mixed[]
 *   The array of arguments.
 */',
        'startLine' => 178,
        'endLine' => 180,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'aliasName' => NULL,
      ),
      'render' => 
      array (
        'name' => 'render',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Renders the object as a string.
 *
 * @return string
 *   The translated string.
 */',
        'startLine' => 188,
        'endLine' => 198,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'aliasName' => NULL,
      ),
      '__sleep' => 
      array (
        'name' => '__sleep',
        'parameters' => 
        array (
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
 * Magic __sleep() method to avoid serializing the string translator.
 */',
        'startLine' => 203,
        'endLine' => 205,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
        'startLine' => 213,
        'endLine' => 219,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
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
 * Returns the string length.
 *
 * @return int
 *   The length of the string.
 */',
        'startLine' => 227,
        'endLine' => 229,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\StringTranslation',
        'declaringClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'implementingClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        'currentClassName' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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