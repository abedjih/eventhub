<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Datetime/DateFormatterInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Datetime\DateFormatterInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3ebe85cfc5c294ac5de4e5597673f9970137af353d6e96c852fc1ca2339abbb2-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Datetime/DateFormatterInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Datetime',
    'name' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
    'shortName' => 'DateFormatterInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides an interface defining a date formatter.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 179,
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
      'format' => 
      array (
        'name' => 'format',
        'parameters' => 
        array (
          'timestamp' => 
          array (
            'name' => 'timestamp',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 26,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'medium\'',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 30,
                'startFilePos' => 1562,
                'endTokenPos' => 30,
                'endFilePos' => 1569,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 38,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 37,
                'startFilePos' => 1582,
                'endTokenPos' => 37,
                'endFilePos' => 1583,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 56,
            'endColumn' => 67,
            'parameterIndex' => 2,
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
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 44,
                'startFilePos' => 1598,
                'endTokenPos' => 44,
                'endFilePos' => 1601,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 70,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 51,
                'startFilePos' => 1616,
                'endTokenPos' => 51,
                'endFilePos' => 1619,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 88,
            'endColumn' => 103,
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
 * Formats a date, using a date type or a custom date format string.
 *
 * @param int $timestamp
 *   A UNIX timestamp to format.
 * @param non-empty-string $type
 *   (optional) The format to use, one of:
 *   - One of the built-in formats: \'short\', \'medium\',
 *     \'long\', \'html_datetime\', \'html_date\', \'html_time\',
 *     \'html_yearless_date\', \'html_week\', \'html_month\', \'html_year\'.
 *   - The name of a date type defined by a date format config entity.
 *   - The machine name of an administrator-defined date format.
 *   - \'custom\', to use $format.
 *   Defaults to \'medium\'.
 * @param string $format
 *   (optional) If $type is \'custom\', a PHP date format string suitable for
 *   input to date(). Use a backslash to escape ordinary text, so it does not
 *   get interpreted as date format characters.
 * @param string|null $timezone
 *   (optional) Time zone identifier, as described at
 *   http://php.net/manual/timezones.php Defaults to the time zone used to
 *   display the page.
 * @param string|null $langcode
 *   (optional) Language code to translate to. NULL (default) means to use
 *   the user interface language for the page.
 *
 * @return string
 *   A translated date string in the requested format. Since the format may
 *   contain user input, this value should be escaped when output.
 */',
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 105,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Datetime',
        'declaringClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'implementingClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'currentClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'aliasName' => NULL,
      ),
      'formatInterval' => 
      array (
        'name' => 'formatInterval',
        'parameters' => 
        array (
          'interval' => 
          array (
            'name' => 'interval',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 34,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'granularity' => 
          array (
            'name' => 'granularity',
            'default' => 
            array (
              'code' => '2',
              'attributes' => 
              array (
                'startLine' => 66,
                'endLine' => 66,
                'startTokenPos' => 70,
                'startFilePos' => 2733,
                'endTokenPos' => 70,
                'endFilePos' => 2733,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 45,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 66,
                'endLine' => 66,
                'startTokenPos' => 77,
                'startFilePos' => 2748,
                'endTokenPos' => 77,
                'endFilePos' => 2751,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 63,
            'endColumn' => 78,
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
 * Formats a time interval with the requested granularity.
 *
 * Note that for intervals over 30 days, the output is approximate: a "month"
 * is always exactly 30 days, and a "year" is always 365 days. It is not
 * possible to make a more exact representation, given that there is only one
 * input in seconds. If you are formatting an interval between two specific
 * timestamps, use \\Drupal\\Core\\Datetime\\DateFormatter::formatDiff() instead.
 *
 * @param int $interval
 *   The length of the interval in seconds.
 * @param int $granularity
 *   (optional) How many different units to display in the string (2 by
 *   default).
 * @param string|null $langcode
 *   (optional) langcode: The language code for the language used to format
 *   the date. Defaults to NULL, which results in the user interface language
 *   for the page being used.
 *
 * @return string
 *   A translated string representation of the interval.
 *
 * @see \\Drupal\\Core\\Datetime\\DateFormatterInterface::formatDiff()
 */',
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 3,
        'endColumn' => 80,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Datetime',
        'declaringClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'implementingClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'currentClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'aliasName' => NULL,
      ),
      'getSampleDateFormats' => 
      array (
        'name' => 'getSampleDateFormats',
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
                'startLine' => 85,
                'endLine' => 85,
                'startTokenPos' => 93,
                'startFilePos' => 3400,
                'endTokenPos' => 93,
                'endFilePos' => 3403,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 40,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'timestamp' => 
          array (
            'name' => 'timestamp',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 85,
                'endLine' => 85,
                'startTokenPos' => 100,
                'startFilePos' => 3419,
                'endTokenPos' => 100,
                'endFilePos' => 3422,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 58,
            'endColumn' => 74,
            'parameterIndex' => 1,
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
                'startLine' => 85,
                'endLine' => 85,
                'startTokenPos' => 107,
                'startFilePos' => 3437,
                'endTokenPos' => 107,
                'endFilePos' => 3440,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 77,
            'endColumn' => 92,
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
 * Provides values for all date formatting characters for a given timestamp.
 *
 * @param string|null $langcode
 *   (optional) Language code of the date format, if different from the site
 *   default language.
 * @param int|null $timestamp
 *   (optional) The Unix timestamp to format, defaults to current time.
 * @param string|null $timezone
 *   (optional) The timezone to use, if different from the site\'s default
 *   timezone.
 *
 * @return array
 *   An array of formatted date values, indexed by the date format character.
 *
 * @see date()
 */',
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 3,
        'endColumn' => 94,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Datetime',
        'declaringClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'implementingClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'currentClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'aliasName' => NULL,
      ),
      'formatTimeDiffUntil' => 
      array (
        'name' => 'formatTimeDiffUntil',
        'parameters' => 
        array (
          'timestamp' => 
          array (
            'name' => 'timestamp',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 39,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 115,
                'endLine' => 115,
                'startTokenPos' => 126,
                'startFilePos' => 4988,
                'endTokenPos' => 127,
                'endFilePos' => 4989,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 51,
            'endColumn' => 63,
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
 * Formats the time difference from the current request time to a timestamp.
 *
 * @param int $timestamp
 *   A UNIX timestamp to compare against the current request time.
 * @param array $options
 *   (optional) An associative array with additional options. The following
 *   keys can be used:
 *   - granularity: An integer value that signals how many different units to
 *     display in the string. Defaults to 2.
 *   - langcode: The language code for the language used to format the date.
 *     Defaults to NULL, which results in the user interface language for the
 *     page being used.
 *   - strict: A Boolean value indicating whether or not the timestamp can be
 *     before the current request time. If TRUE (default) and $timestamp is
 *     before the current request time, the result string will be "0 seconds".
 *     If FALSE and $timestamp is before the current request time, the result
 *     string will be the formatted time difference.
 *   - return_as_object: A Boolean value whether to return a FormattedDateDiff
 *     object.
 *
 * @return string|\\Drupal\\Core\\Datetime\\FormattedDateDiff
 *   A translated string representation of the difference between the given
 *   timestamp and the current request time. This interval is always positive.
 *
 * @see \\Drupal\\Core\\Datetime\\DateFormatterInterface::formatDiff()
 * @see \\Drupal\\Core\\Datetime\\DateFormatterInterface::formatTimeDiffSince()
 */',
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 3,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Datetime',
        'declaringClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'implementingClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'currentClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'aliasName' => NULL,
      ),
      'formatTimeDiffSince' => 
      array (
        'name' => 'formatTimeDiffSince',
        'parameters' => 
        array (
          'timestamp' => 
          array (
            'name' => 'timestamp',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 39,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 145,
                'endLine' => 145,
                'startTokenPos' => 146,
                'startFilePos' => 6534,
                'endTokenPos' => 147,
                'endFilePos' => 6535,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 51,
            'endColumn' => 63,
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
 * Formats the time difference from a timestamp to the current request time.
 *
 * @param int $timestamp
 *   A UNIX timestamp to compare against the current request time.
 * @param array $options
 *   (optional) An associative array with additional options. The following
 *   keys can be used:
 *   - granularity: An integer value that signals how many different units to
 *     display in the string. Defaults to 2.
 *   - langcode: The language code for the language used to format the date.
 *     Defaults to NULL, which results in the user interface language for the
 *     page being used.
 *   - strict: A Boolean value indicating whether or not the timestamp can be
 *     after the current request time. If TRUE (default) and $timestamp is
 *     after the current request time, the result string will be "0 seconds".
 *     If FALSE and $timestamp is after the current request time, the result
 *     string will be the formatted time difference.
 *   - return_as_object: A Boolean value whether to return a FormattedDateDiff
 *     object.
 *
 * @return string|\\Drupal\\Core\\Datetime\\FormattedDateDiff
 *   A translated string representation of the difference between the given
 *   timestamp and the current request time. This interval is always positive.
 *
 * @see \\Drupal\\Core\\Datetime\\DateFormatterInterface::formatDiff()
 * @see \\Drupal\\Core\\Datetime\\DateFormatterInterface::formatTimeDiffUntil()
 */',
        'startLine' => 145,
        'endLine' => 145,
        'startColumn' => 3,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Datetime',
        'declaringClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'implementingClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'currentClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'aliasName' => NULL,
      ),
      'formatDiff' => 
      array (
        'name' => 'formatDiff',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 30,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 37,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 177,
                'endLine' => 177,
                'startTokenPos' => 169,
                'startFilePos' => 8066,
                'endTokenPos' => 170,
                'endFilePos' => 8067,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Formats a time interval between two timestamps.
 *
 * @param int $from
 *   A UNIX timestamp, defining the from date and time.
 * @param int $to
 *   A UNIX timestamp, defining the to date and time.
 * @param array $options
 *   (optional) An associative array with additional options. The following
 *   keys can be used:
 *   - granularity: An integer value that signals how many different units to
 *     display in the string. Defaults to 2.
 *   - langcode: The language code for the language used to format the date.
 *     Defaults to NULL, which results in the user interface language for the
 *     page being used.
 *   - strict: A Boolean value indicating whether or not the $from timestamp
 *     can be after the $to timestamp. If TRUE (default) and $from is after
 *     $to, the result string will be "0 seconds". If FALSE and $from is
 *     after $to, the result string will be the formatted time difference.
 *   - return_as_object: A Boolean value whether to return a FormattedDateDiff
 *     object.
 *
 * @return string|\\Drupal\\Core\\Datetime\\FormattedDateDiff
 *   A translated string representation of the interval. This interval is
 *   always positive.
 *
 * @see \\Drupal\\Core\\Datetime\\DateFormatterInterface::formatInterval()
 * @see \\Drupal\\Core\\Datetime\\DateFormatterInterface::formatTimeDiffSince()
 * @see \\Drupal\\Core\\Datetime\\DateFormatterInterface::formatTimeDiffUntil()
 */',
        'startLine' => 177,
        'endLine' => 177,
        'startColumn' => 3,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Datetime',
        'declaringClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'implementingClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
        'currentClassName' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
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