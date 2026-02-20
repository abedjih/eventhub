<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Datetime/TimeInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Datetime\TimeInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c503605ec460404fa5186d89341e8c6905558c5560c5e7bc786cafc7adfcaf33-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Datetime/TimeInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Datetime',
    'name' => 'Drupal\\Component\\Datetime\\TimeInterface',
    'shortName' => 'TimeInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for obtaining system time.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 154,
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
      'getRequestTime' => 
      array (
        'name' => 'getRequestTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the timestamp for the current request.
 *
 * This method should be used to obtain the current system time at the start
 * of the request. It will be the same value for the life of the request
 * (even for long execution times).
 *
 * If the request is not available it will fallback to the current system
 * time.
 *
 * This method can replace instances of
 * @code
 * $request_time = $_SERVER[\'REQUEST_TIME\'];
 * $request_time = $requestStack->getCurrentRequest()->server->get(\'REQUEST_TIME\');
 * $request_time = $request->server->get(\'REQUEST_TIME\');
 * @endcode
 * and most instances of
 * @code
 * $time = time();
 * @endcode
 * with
 * @code
 * $request_time = \\Drupal::time()->getRequestTime();
 * @endcode
 * or the equivalent using the injected service.
 *
 * Using the time service, rather than other methods, is especially important
 * when creating tests, which require predictable timestamps.
 *
 * @return int
 *   A Unix timestamp.
 *
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestMicroTime()
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentTime()
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentMicroTime()
 */',
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'currentClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'aliasName' => NULL,
      ),
      'getRequestMicroTime' => 
      array (
        'name' => 'getRequestMicroTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the timestamp for the current request with microsecond precision.
 *
 * This method should be used to obtain the current system time, with
 * microsecond precision, at the start of the request. It will be the same
 * value for the life of the request (even for long execution times).
 *
 * If the request is not available it will fallback to the current system
 * time with microsecond precision.
 *
 * This method can replace instances of
 * @code
 * $request_time_float = $_SERVER[\'REQUEST_TIME_FLOAT\'];
 * $request_time_float = $requestStack->getCurrentRequest()->server->get(\'REQUEST_TIME_FLOAT\');
 * $request_time_float = $request->server->get(\'REQUEST_TIME_FLOAT\');
 * @endcode
 * and many instances of
 * @code
 * $microtime = microtime();
 * $microtime = microtime(TRUE);
 * @endcode
 * with
 * @code
 * $request_time = \\Drupal::time()->getRequestMicroTime();
 * @endcode
 * or the equivalent using the injected service.
 *
 * Using the time service, rather than other methods, is especially important
 * when creating tests, which require predictable timestamps.
 *
 * @return float
 *   A Unix timestamp with a fractional portion.
 *
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestTime()
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentTime()
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentMicroTime()
 */',
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'currentClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'aliasName' => NULL,
      ),
      'getCurrentTime' => 
      array (
        'name' => 'getCurrentTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the current system time as an integer.
 *
 * This method should be used to obtain the current system time, at the time
 * the method was called.
 *
 * This method can replace many instances of
 * @code
 * $time = time();
 * @endcode
 * with
 * @code
 * $request_time = \\Drupal::time()->getCurrentTime();
 * @endcode
 * or the equivalent using the injected service.
 *
 * This method should only be used when the current system time is actually
 * needed, such as with timers or time interval calculations. If only the
 * time at the start of the request is needed,
 * use TimeInterface::getRequestTime().
 *
 * Using the time service, rather than other methods, is especially important
 * when creating tests, which require predictable timestamps.
 *
 * @return int
 *   A Unix timestamp.
 *
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestTime()
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestMicroTime()
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentMicroTime()
 */',
        'startLine' => 118,
        'endLine' => 118,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'currentClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'aliasName' => NULL,
      ),
      'getCurrentMicroTime' => 
      array (
        'name' => 'getCurrentMicroTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the current system time with microsecond precision.
 *
 * This method should be used to obtain the current system time, with
 * microsecond precision, at the time the method was called.
 *
 * This method can replace many instances of
 * @code
 * $microtime = microtime();
 * $microtime = microtime(TRUE);
 * @endcode
 * with
 * @code
 * $request_time = \\Drupal::time()->getCurrentMicroTime();
 * @endcode
 * or the equivalent using the injected service.
 *
 * This method should only be used when the current system time is actually
 * needed, such as with timers or time interval calculations. If only the
 * time at the start of the request and microsecond precision is needed,
 * use TimeInterface::getRequestMicroTime().
 *
 * Using the time service, rather than other methods, is especially important
 * when creating tests, which require predictable timestamps.
 *
 * @return float
 *   A Unix timestamp with a fractional portion.
 *
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestTime()
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestMicroTime()
 * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentTime()
 */',
        'startLine' => 152,
        'endLine' => 152,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Datetime',
        'declaringClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'implementingClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
        'currentClassName' => 'Drupal\\Component\\Datetime\\TimeInterface',
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