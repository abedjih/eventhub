<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Datetime/DrupalDateTime.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Datetime\DrupalDateTime
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-1cc3ffee034a726fce310ddead2770d2511281beb90e48a5d4e0b534da8b219e-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Datetime/DrupalDateTime.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Datetime',
    'name' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
    'shortName' => 'DrupalDateTime',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Extends DateTimePlus().
 *
 * This class extends the basic component and adds in Drupal-specific
 * handling, like translation of the format() method.
 *
 * Static methods in base class can also be used to create DrupalDateTime
 * objects. For example:
 *
 * @code
 * DrupalDateTime::createFromArray([\'year\' => 2010, \'month\' => 9, \'day\' => 28])
 * @endcode
 *
 * @see \\Drupal\\Component\\Datetime\\DateTimePlus
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 189,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
      1 => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'formatTranslationCache' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'implementingClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'name' => 'formatTranslationCache',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 62,
            'startFilePos' => 1721,
            'endTokenPos' => 63,
            'endFilePos' => 1722,
          ),
        ),
        'docComment' => '/**
 * Formatted strings translation cache.
 *
 * @var array
 * Translation cache represents an instance storage for formatted date
 * strings. It contains a multidimensional array where:
 * - first level keys - are drupal language codes;
 * - second level keys - are each symbols of given format string (like \'F\');
 * - third level keys - are original matched strings related to the symbol;
 * - values - are translated or not-translated original strings (depends on
 *   if a particular symbol represents translatable value according to PHP\'s
 *   date() format character).
 *
 * For example:
 * @code
 *   [
 *     \'en\' => [
 *       \'F\' => [
 *         \'November\' => t(\'November\'),
 *         \'December\' => t(\'December\'),
 *       ],
 *       \'d\' => [
 *         \'10\' => \'10\',
 *         \'31\' => \'31\',
 *       ],
 *     ],
 *   ]
 * @endcode
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 3,
        'endColumn' => 41,
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
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => '\'now\'',
              'attributes' => 
              array (
                'startLine' => 88,
                'endLine' => 88,
                'startTokenPos' => 78,
                'startFilePos' => 3125,
                'endTokenPos' => 78,
                'endFilePos' => 3129,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 31,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'timezone' => 
          array (
            'name' => 'timezone',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 88,
                'endLine' => 88,
                'startTokenPos' => 85,
                'startFilePos' => 3144,
                'endTokenPos' => 85,
                'endFilePos' => 3147,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'settings' => 
          array (
            'name' => 'settings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 88,
                'endLine' => 88,
                'startTokenPos' => 92,
                'startFilePos' => 3162,
                'endTokenPos' => 93,
                'endFilePos' => 3163,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 64,
            'endColumn' => 77,
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
 * Constructs a date object.
 *
 * @param string $time
 *   A date/input_time_adjusted string. Defaults to \'now\'.
 * @param mixed $timezone
 *   PHP DateTimeZone object, string or NULL allowed.
 *   Defaults to NULL. Note that the $timezone parameter and the current
 *   timezone are ignored when the $time parameter either is a UNIX timestamp
 *   (e.g. @946684800) or specifies a timezone
 *   (e.g. 2010-01-28T15:00:00+02:00).
 *   phpcs:ignore Drupal.Commenting.FunctionComment.ParamCommentFullStop
 *   @see http://php.net/manual/datetime.construct.php
 * @param array $settings
 *   - validate_format: (optional) Boolean choice to validate the
 *     created date using the input format. The format used in
 *     createFromFormat() allows slightly different values than format().
 *     Using an input format that works in both functions makes it
 *     possible to a validation step to confirm that the date created
 *     from a format string exactly matches the input. This option
 *     indicates the format can be used for validation. Defaults to TRUE.
 *   - langcode: (optional) Used to control the result of the format() method.
 *     Defaults to NULL.
 *   - debug: (optional) Boolean choice to leave debug values in the
 *     date object for debugging purposes. Defaults to FALSE.
 */',
        'startLine' => 88,
        'endLine' => 96,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Datetime',
        'declaringClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'implementingClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'currentClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'aliasName' => NULL,
      ),
      'prepareTimezone' => 
      array (
        'name' => 'prepareTimezone',
        'parameters' => 
        array (
          'timezone' => 
          array (
            'name' => 'timezone',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 104,
            'endLine' => 104,
            'startColumn' => 38,
            'endColumn' => 46,
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
 * Overrides prepareTimezone().
 *
 * Override basic component timezone handling to use Drupal\'s
 * knowledge of the preferred user timezone.
 */',
        'startLine' => 104,
        'endLine' => 110,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Datetime',
        'declaringClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'implementingClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'currentClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'aliasName' => NULL,
      ),
      'format' => 
      array (
        'name' => 'format',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
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
            'startColumn' => 26,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'settings' => 
          array (
            'name' => 'settings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 127,
                'endLine' => 127,
                'startTokenPos' => 219,
                'startFilePos' => 4395,
                'endTokenPos' => 220,
                'endFilePos' => 4396,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 127,
            'endLine' => 127,
            'startColumn' => 35,
            'endColumn' => 48,
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
 * Overrides format().
 *
 * @param string $format
 *   A format string using either PHP\'s date().
 * @param array $settings
 *   - timezone: (optional) String timezone name. Defaults to the timezone
 *     of the date object.
 *   - langcode: (optional) String two letter language code used to control
 *     the result of the format() method. Defaults to NULL.
 *
 * @return string
 *   The formatted value of the date. Since the format may contain user input,
 *   this value should be escaped when output.
 */',
        'startLine' => 127,
        'endLine' => 180,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Datetime',
        'declaringClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'implementingClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'currentClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
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
 * {@inheritdoc}
 */',
        'startLine' => 185,
        'endLine' => 187,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Datetime',
        'declaringClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'implementingClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'currentClassName' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
        'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait' => 
        array (
          0 => 
          array (
            'alias' => 'defaultSleep',
            'method' => '__sleep',
            'hash' => 'drupal\\core\\dependencyinjection\\dependencyserializationtrait::__sleep',
          ),
        ),
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
        'drupal\\core\\dependencyinjection\\dependencyserializationtrait::__sleep' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait::__sleep',
      ),
    ),
  ),
));