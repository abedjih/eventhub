<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Datetime/DateTimePlus.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Datetime\DateTimePlus
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-145258a46b7b4be062a5f058763bf62c2f448d5738263e065de4f3e4e283a07d-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Datetime/DateTimePlus.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Datetime',
    'name' => 'Drupal\\Component\\Datetime\\DateTimePlus',
    'shortName' => 'DateTimePlus',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Wraps DateTime().
 *
 * This class wraps the PHP DateTime class with more flexible initialization
 * parameters, allowing a date to be created from an existing date object,
 * a timestamp, a string with an unknown format, a string with a known
 * format, or an array of date parts. It also adds an errors array
 * and a __toString() method to the date object.
 *
 * This class is less lenient than the DateTime class. It changes
 * the default behavior for handling date values like \'2011-00-00\'.
 * The DateTime class would convert that value to \'2010-11-30\' and report
 * a warning but not an error. This extension treats that as an error.
 *
 * As with the DateTime class, a date object may be created even if it has
 * errors. It has an errors array attached to it that explains what the
 * errors are. This is less disruptive than allowing datetime exceptions
 * to abort processing. The calling script can decide what to do about
 * errors using hasErrors() and getErrors().
 *
 * @method $this add(\\DateInterval $interval)
 * @method static array getLastErrors()
 * @method $this modify(string $modify)
 * @method $this setDate(int $year, int $month, int $day)
 * @method $this setISODate(int $year, int $week, int $day = 1)
 * @method $this setTime(int $hour, int $minute, int $second = 0, int $microseconds = 0)
 * @method $this setTimestamp(int $unix_timestamp)
 * @method $this setTimezone(\\DateTimeZone $timezone)
 * @method $this sub(\\DateInterval $interval)
 * @method int getOffset()
 * @method int getTimestamp()
 * @method \\DateTimeZone getTimezone()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 40,
    'endLine' => 679,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Component\\Utility\\ToStringTrait',
    ),
    'immediateConstants' => 
    array (
      'FORMAT' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'name' => 'FORMAT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'Y-m-d H:i:s\'',
          'attributes' => 
          array (
            'startLine' => 44,
            'endLine' => 44,
            'startTokenPos' => 31,
            'startFilePos' => 1730,
            'endTokenPos' => 31,
            'endFilePos' => 1742,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 3,
        'endColumn' => 31,
      ),
      'RFC7231' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'name' => 'RFC7231',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'D, d M Y H:i:s \\G\\M\\T\'',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 42,
            'startFilePos' => 1922,
            'endTokenPos' => 42,
            'endFilePos' => 1944,
          ),
        ),
        'docComment' => '/**
 * A RFC7231 Compliant date.
 *
 * @see http://tools.ietf.org/html/rfc7231#section-7.1.1.1
 *
 * Example: Sun, 06 Nov 1994 08:49:37 GMT
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 3,
        'endColumn' => 42,
      ),
    ),
    'immediateProperties' => 
    array (
      'langcode' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'name' => 'langcode',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'NULL',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 53,
            'startFilePos' => 2074,
            'endTokenPos' => 53,
            'endFilePos' => 2077,
          ),
        ),
        'docComment' => '/**
 * The value of the language code passed to the constructor.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 3,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'errors' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'name' => 'errors',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 67,
            'endLine' => 67,
            'startTokenPos' => 64,
            'startFilePos' => 2200,
            'endTokenPos' => 65,
            'endFilePos' => 2201,
          ),
        ),
        'docComment' => '/**
 * An array of errors encountered when creating this date.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 67,
        'endLine' => 67,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dateTimeObject' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'name' => 'dateTimeObject',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'NULL',
          'attributes' => 
          array (
            'startLine' => 74,
            'endLine' => 74,
            'startTokenPos' => 76,
            'startFilePos' => 2298,
            'endTokenPos' => 76,
            'endFilePos' => 2301,
          ),
        ),
        'docComment' => '/**
 * The DateTime object.
 *
 * @var \\DateTime
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 3,
        'endColumn' => 35,
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
      'createFromDateTime' => 
      array (
        'name' => 'createFromDateTime',
        'parameters' => 
        array (
          'datetime' => 
          array (
            'name' => 'datetime',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DateTimeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 45,
            'endColumn' => 72,
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
                'startLine' => 88,
                'endLine' => 88,
                'startTokenPos' => 98,
                'startFilePos' => 2711,
                'endTokenPos' => 99,
                'endFilePos' => 2712,
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
            'startColumn' => 75,
            'endColumn' => 88,
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
 * Creates a date object from an input date object.
 *
 * @param \\DateTimeInterface $datetime
 *   A DateTime object.
 * @param array $settings
 *   (optional) A keyed array for settings, suitable for passing on to
 *   __construct().
 *
 * @return static
 *   A new DateTimePlus object.
 */',
        'startLine' => 88,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'createFromArray' => 
      array (
        'name' => 'createFromArray',
        'parameters' => 
        array (
          'date_parts' => 
          array (
            'name' => 'date_parts',
            'default' => NULL,
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
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 42,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'timezone' => 
          array (
            'name' => 'timezone',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 152,
                'startFilePos' => 3629,
                'endTokenPos' => 152,
                'endFilePos' => 3632,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 61,
            'endColumn' => 76,
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
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 159,
                'startFilePos' => 3647,
                'endTokenPos' => 160,
                'endFilePos' => 3648,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 79,
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
 * Creates a date object from an array of date parts.
 *
 * Converts the input value into an ISO date, forcing a full ISO
 * date even if some values are missing.
 *
 * @param array $date_parts
 *   An array of date parts, like (\'year\' => 2014, \'month\' => 4).
 * @param mixed $timezone
 *   (optional) \\DateTimeZone object, time zone string or NULL. NULL uses the
 *   default system time zone. Defaults to NULL.
 * @param array $settings
 *   (optional) A keyed array for settings, suitable for passing on to
 *   __construct().
 *
 * @return static
 *   A new DateTimePlus object.
 *
 * @throws \\InvalidArgumentException
 *   If the array date values or value combination is not correct.
 */',
        'startLine' => 113,
        'endLine' => 126,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'createFromTimestamp' => 
      array (
        'name' => 'createFromTimestamp',
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
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 46,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'timezone' => 
          array (
            'name' => 'timezone',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 149,
                'endLine' => 149,
                'startTokenPos' => 266,
                'startFilePos' => 4938,
                'endTokenPos' => 266,
                'endFilePos' => 4941,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 58,
            'endColumn' => 73,
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
                'startLine' => 149,
                'endLine' => 149,
                'startTokenPos' => 273,
                'startFilePos' => 4956,
                'endTokenPos' => 274,
                'endFilePos' => 4957,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 76,
            'endColumn' => 89,
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
 * Creates a date object from timestamp input.
 *
 * The timezone of a timestamp is always UTC. The timezone for a
 * timestamp indicates the timezone used by the format() method.
 *
 * @param int $timestamp
 *   A UNIX timestamp.
 * @param mixed $timezone
 *   (optional) \\DateTimeZone object, time zone string or NULL. See
 *   __construct() for more details.
 * @param array $settings
 *   (optional) A keyed array for settings, suitable for passing on to
 *   __construct().
 *
 * @return static
 *   A new DateTimePlus object.
 *
 * @throws \\InvalidArgumentException
 *   If the timestamp is not numeric.
 */',
        'startLine' => 149,
        'endLine' => 156,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'createFromFormat' => 
      array (
        'name' => 'createFromFormat',
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
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'time' => 
          array (
            'name' => 'time',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 52,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'timezone' => 
          array (
            'name' => 'timezone',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 192,
                'endLine' => 192,
                'startTokenPos' => 356,
                'startFilePos' => 6896,
                'endTokenPos' => 356,
                'endFilePos' => 6899,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 59,
            'endColumn' => 74,
            'parameterIndex' => 2,
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
                'startLine' => 192,
                'endLine' => 192,
                'startTokenPos' => 363,
                'startFilePos' => 6914,
                'endTokenPos' => 364,
                'endFilePos' => 6915,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 77,
            'endColumn' => 90,
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
 * Creates a date object from an input format.
 *
 * @param string $format
 *   PHP date() type format for parsing the input. This is recommended
 *   to use things like negative years, which php\'s parser fails on, or
 *   any other specialized input with a known format. If provided the
 *   date will be created using the createFromFormat() method.
 *   phpcs:ignore Drupal.Commenting.FunctionComment.ParamCommentFullStop
 *   @see http://php.net/manual/datetime.createfromformat.php
 * @param string $time
 *   String representing the time.
 * @param mixed $timezone
 *   (optional) \\DateTimeZone object, time zone string or NULL. See
 *   __construct() for more details.
 * @param array $settings
 *   (optional) A keyed array for settings, suitable for passing on to
 *   __construct(). Supports an additional key:
 *   - validate_format: (optional) Boolean choice to validate the
 *     created date using the input format. The format used in
 *     createFromFormat() allows slightly different values than format().
 *     Using an input format that works in both functions makes it
 *     possible to a validation step to confirm that the date created
 *     from a format string exactly matches the input. This option
 *     indicates the format can be used for validation. Defaults to TRUE.
 *
 * @return static
 *   A new DateTimePlus object.
 *
 * @throws \\InvalidArgumentException
 *   If the a date cannot be created from the given format.
 * @throws \\UnexpectedValueException
 *   If the created date does not match the input value.
 */',
        'startLine' => 192,
        'endLine' => 220,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
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
                'startLine' => 242,
                'endLine' => 242,
                'startTokenPos' => 562,
                'startFilePos' => 9274,
                'endTokenPos' => 562,
                'endFilePos' => 9278,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 242,
            'endLine' => 242,
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
                'startLine' => 242,
                'endLine' => 242,
                'startTokenPos' => 569,
                'startFilePos' => 9293,
                'endTokenPos' => 569,
                'endFilePos' => 9296,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 242,
            'endLine' => 242,
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
                'startLine' => 242,
                'endLine' => 242,
                'startTokenPos' => 576,
                'startFilePos' => 9311,
                'endTokenPos' => 577,
                'endFilePos' => 9312,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 242,
            'endLine' => 242,
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
 * Constructs a date object set to a requested date and timezone.
 *
 * @param string $time
 *   (optional) A date/time string. Defaults to \'now\'.
 * @param mixed $timezone
 *   (optional) \\DateTimeZone object, time zone string or NULL. NULL uses the
 *   default system time zone. Defaults to NULL. Note that the $timezone
 *   parameter and the current timezone are ignored when the $time parameter
 *   either is a UNIX timestamp (e.g. @946684800) or specifies a timezone
 *   (e.g. 2010-01-28T15:00:00+02:00).
 *   phpcs:ignore Drupal.Commenting.FunctionComment.ParamCommentFullStop
 *   @see http://php.net/manual/datetime.construct.php
 * @param array $settings
 *   (optional) Keyed array of settings. Defaults to empty array.
 *   - langcode: (optional) String two letter language code used to control
 *     the result of the format(). Defaults to NULL.
 *   - debug: (optional) Boolean choice to leave debug values in the
 *     date object for debugging purposes. Defaults to FALSE.
 */',
        'startLine' => 242,
        'endLine' => 270,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
 * Renders the timezone name.
 *
 * @return string
 *   The formatted value of the date including the name of the timezone.
 */',
        'startLine' => 278,
        'endLine' => 280,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 304,
            'endLine' => 304,
            'startColumn' => 26,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
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
            'startLine' => 304,
            'endLine' => 304,
            'startColumn' => 35,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Implements the magic __call method.
 *
 * Passes through all unknown calls onto the DateTime object.
 *
 * @param string $method
 *   The method to call on the decorated object.
 * @param array $args
 *   Call arguments.
 *
 * @return mixed
 *   The return value from the method on the decorated object. If the proxied
 *   method call returns a DateTime object, then return the original
 *   DateTimePlus object, which allows function chaining to work properly.
 *   Otherwise, the value from the proxied method call is returned.
 *
 * @throws \\Exception
 *   Thrown when the DateTime object is not set.
 * @throws \\BadMethodCallException
 *   Thrown when there is no corresponding method on the DateTime object to
 *   call.
 */',
        'startLine' => 304,
        'endLine' => 316,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'diff' => 
      array (
        'name' => 'diff',
        'parameters' => 
        array (
          'datetime2' => 
          array (
            'name' => 'datetime2',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 332,
            'endLine' => 332,
            'startColumn' => 24,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 332,
                'endLine' => 332,
                'startTokenPos' => 960,
                'startFilePos' => 12198,
                'endTokenPos' => 960,
                'endFilePos' => 12202,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 332,
            'endLine' => 332,
            'startColumn' => 36,
            'endColumn' => 52,
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
 * Returns the difference between two DateTimePlus objects.
 *
 * @param \\Drupal\\Component\\Datetime\\DateTimePlus|\\DateTime $datetime2
 *   The date to compare to.
 * @param bool $absolute
 *   Should the interval be forced to be positive?
 *
 * @return \\DateInterval
 *   A DateInterval object representing the difference between the two dates.
 *
 * @throws \\BadMethodCallException
 *    If the input isn\'t a DateTime or DateTimePlus object.
 */',
        'startLine' => 332,
        'endLine' => 340,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      '__callStatic' => 
      array (
        'name' => '__callStatic',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 48,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Implements the magic __callStatic method.
 *
 * Passes through all unknown static calls onto the DateTime object.
 */',
        'startLine' => 347,
        'endLine' => 352,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      '__clone' => 
      array (
        'name' => '__clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Implements the magic __clone method.
 *
 * Deep-clones the DateTime object we\'re wrapping.
 */',
        'startLine' => 359,
        'endLine' => 361,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'prepareTime' => 
      array (
        'name' => 'prepareTime',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 376,
            'endLine' => 376,
            'startColumn' => 34,
            'endColumn' => 38,
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
 * Prepares the input time value.
 *
 * Changes the input value before trying to use it, if necessary.
 * Can be overridden to handle special cases.
 *
 * @param mixed $time
 *   An input value, which could be a timestamp, a string,
 *   or an array of date parts.
 *
 * @return mixed
 *   The massaged time.
 */',
        'startLine' => 376,
        'endLine' => 378,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
            'startLine' => 393,
            'endLine' => 393,
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
 * Prepares the input timezone value.
 *
 * Changes the timezone before trying to use it, if necessary.
 * Most importantly, makes sure there is a valid timezone
 * object before moving further.
 *
 * @param mixed $timezone
 *   Either a timezone name or a timezone object or NULL.
 *
 * @return \\DateTimeZone
 *   The massaged time zone.
 */',
        'startLine' => 393,
        'endLine' => 414,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'prepareFormat' => 
      array (
        'name' => 'prepareFormat',
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
            'startLine' => 428,
            'endLine' => 428,
            'startColumn' => 36,
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
 * Prepares the input format value.
 *
 * Changes the input format before trying to use it, if necessary.
 * Can be overridden to handle special cases.
 *
 * @param string $format
 *   A PHP format string.
 *
 * @return string
 *   The massaged PHP format string.
 */',
        'startLine' => 428,
        'endLine' => 430,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'checkErrors' => 
      array (
        'name' => 'checkErrors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Examines getLastErrors() to see what errors to report.
 *
 * Two kinds of errors are important: anything that DateTime
 * considers an error, and also a warning that the date was invalid.
 * PHP creates a valid date from invalid data with only a warning,
 * 2011-02-30 becomes 2011-03-03, for instance, but we don\'t want that.
 *
 * @see http://php.net/manual/time.getlasterrors.php
 */',
        'startLine' => 442,
        'endLine' => 456,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'hasErrors' => 
      array (
        'name' => 'hasErrors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Detects if there were errors in the processing of this date.
 *
 * @return bool
 *   TRUE if there were errors in the processing of this date, FALSE
 *   otherwise.
 */',
        'startLine' => 465,
        'endLine' => 467,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'getErrors' => 
      array (
        'name' => 'getErrors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets error messages.
 *
 * Public function to return the error messages.
 *
 * @return array
 *   An array of errors encountered when creating this date.
 */',
        'startLine' => 477,
        'endLine' => 479,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'arrayToISO' => 
      array (
        'name' => 'arrayToISO',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 493,
            'endLine' => 493,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'force_valid_date' => 
          array (
            'name' => 'force_valid_date',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 493,
                'endLine' => 493,
                'startTokenPos' => 1505,
                'startFilePos' => 17188,
                'endTokenPos' => 1505,
                'endFilePos' => 17192,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 493,
            'endLine' => 493,
            'startColumn' => 45,
            'endColumn' => 69,
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
 * Creates an ISO date from an array of values.
 *
 * @param array $array
 *   An array of date values keyed by date part.
 * @param bool $force_valid_date
 *   (optional) Whether to force a full date by filling in missing
 *   values. Defaults to FALSE.
 *
 * @return string
 *   The date as an ISO string.
 */',
        'startLine' => 493,
        'endLine' => 516,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'prepareArray' => 
      array (
        'name' => 'prepareArray',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 531,
            'endLine' => 531,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'force_valid_date' => 
          array (
            'name' => 'force_valid_date',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 531,
                'endLine' => 531,
                'startTokenPos' => 1816,
                'startFilePos' => 18615,
                'endTokenPos' => 1816,
                'endFilePos' => 18619,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 531,
            'endLine' => 531,
            'startColumn' => 47,
            'endColumn' => 71,
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
 * Creates a complete array from a possibly incomplete array of date parts.
 *
 * @param array $array
 *   An array of date values keyed by date part.
 * @param bool $force_valid_date
 *   (optional) Whether to force a valid date by filling in missing
 *   values with valid values or just to use empty values instead.
 *   Defaults to FALSE.
 *
 * @return array
 *   A complete array of date parts.
 */',
        'startLine' => 531,
        'endLine' => 554,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'checkArray' => 
      array (
        'name' => 'checkArray',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 570,
            'endLine' => 570,
            'startColumn' => 37,
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
 * Checks that arrays of date parts will create a valid date.
 *
 * Checks that an array of date parts has a year, month, and day,
 * and that those values create a valid date. If time is provided,
 * verifies that the time values are valid. Sort of an
 * equivalent to checkdate().
 *
 * @param array $array
 *   An array of datetime values keyed by date part.
 *
 * @return bool
 *   TRUE if the datetime parts contain valid values, otherwise FALSE.
 */',
        'startLine' => 570,
        'endLine' => 602,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'datePad' => 
      array (
        'name' => 'datePad',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 617,
            'endLine' => 617,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'size' => 
          array (
            'name' => 'size',
            'default' => 
            array (
              'code' => '2',
              'attributes' => 
              array (
                'startLine' => 617,
                'endLine' => 617,
                'startTokenPos' => 2223,
                'startFilePos' => 21056,
                'endTokenPos' => 2223,
                'endFilePos' => 21056,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 617,
            'endLine' => 617,
            'startColumn' => 42,
            'endColumn' => 50,
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
 * Pads date parts with zeros.
 *
 * Helper function for a task that is often required when working with dates.
 *
 * @param int $value
 *   The value to pad.
 * @param int $size
 *   (optional) Size expected, usually 2 or 4. Defaults to 2.
 *
 * @return string
 *   The padded value.
 */',
        'startLine' => 617,
        'endLine' => 619,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
            'startLine' => 634,
            'endLine' => 634,
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
                'startLine' => 634,
                'endLine' => 634,
                'startTokenPos' => 2264,
                'startFilePos' => 21526,
                'endTokenPos' => 2265,
                'endFilePos' => 21527,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 634,
            'endLine' => 634,
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
 * Formats the date for display.
 *
 * @param string $format
 *   Format accepted by date().
 * @param array $settings
 *   - timezone: (optional) String timezone name. Defaults to the timezone
 *     of the date object.
 *
 * @return string|null
 *   The formatted value of the date or NULL if there were construction
 *   errors.
 */',
        'startLine' => 634,
        'endLine' => 656,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'setDefaultDateTime' => 
      array (
        'name' => 'setDefaultDateTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the default time for an object built from date-only data.
 *
 * The default time for a date without time can be anything, so long as it is
 * consistently applied. If we use noon, dates in most timezones will have the
 * same value for in both the local timezone and UTC.
 */',
        'startLine' => 665,
        'endLine' => 667,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'aliasName' => NULL,
      ),
      'getPhpDateTime' => 
      array (
        'name' => 'getPhpDateTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a clone of the proxied PHP \\DateTime object wrapped by this class.
 *
 * @return \\DateTime
 *   A clone of the wrapped PHP \\DateTime object.
 */',
        'startLine' => 675,
        'endLine' => 677,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
        'currentClassName' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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