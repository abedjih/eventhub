<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Logger/LoggerChannel.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Logger\LoggerChannel
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-03f23b7c450e358ad698be80666b6554fe28cb6283c322e28f3af491aeee6dc7-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Logger/LoggerChannel.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Logger',
    'name' => 'Drupal\\Core\\Logger\\LoggerChannel',
    'shortName' => 'LoggerChannel',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines a logger channel that most implementations will use.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 172,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Psr\\Log\\LoggerTrait',
    ),
    'immediateConstants' => 
    array (
      'MAX_CALL_DEPTH' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'name' => 'MAX_CALL_DEPTH',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '5',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 57,
            'startFilePos' => 849,
            'endTokenPos' => 57,
            'endFilePos' => 849,
          ),
        ),
        'docComment' => '/**
 * Maximum call depth to self::log() for a single log message.
 *
 * It\'s very easy for logging channel code to call out to other library code
 * that will create log messages. In that case, we will recurse back in to
 * LoggerChannel::log() multiple times while processing a single originating
 * message. To prevent infinite recursion, we track the call depth and bail
 * out at LoggerChannel::MAX_CALL_DEPTH iterations.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 27,
      ),
    ),
    'immediateProperties' => 
    array (
      'callDepth' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'name' => 'callDepth',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 68,
            'startFilePos' => 989,
            'endTokenPos' => 68,
            'endFilePos' => 989,
          ),
        ),
        'docComment' => '/**
 * Number of times LoggerChannel::log() has been called for a single message.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'channel' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'name' => 'channel',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the channel of this logger instance.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'levelTranslation' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'name' => 'levelTranslation',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\\Psr\\Log\\LogLevel::EMERGENCY => \\Drupal\\Core\\Logger\\RfcLogLevel::EMERGENCY, \\Psr\\Log\\LogLevel::ALERT => \\Drupal\\Core\\Logger\\RfcLogLevel::ALERT, \\Psr\\Log\\LogLevel::CRITICAL => \\Drupal\\Core\\Logger\\RfcLogLevel::CRITICAL, \\Psr\\Log\\LogLevel::ERROR => \\Drupal\\Core\\Logger\\RfcLogLevel::ERROR, \\Psr\\Log\\LogLevel::WARNING => \\Drupal\\Core\\Logger\\RfcLogLevel::WARNING, \\Psr\\Log\\LogLevel::NOTICE => \\Drupal\\Core\\Logger\\RfcLogLevel::NOTICE, \\Psr\\Log\\LogLevel::INFO => \\Drupal\\Core\\Logger\\RfcLogLevel::INFO, \\Psr\\Log\\LogLevel::DEBUG => \\Drupal\\Core\\Logger\\RfcLogLevel::DEBUG]',
          'attributes' => 
          array (
            'startLine' => 49,
            'endLine' => 58,
            'startTokenPos' => 86,
            'startFilePos' => 1227,
            'endTokenPos' => 176,
            'endFilePos' => 1593,
          ),
        ),
        'docComment' => '/**
 * Map of PSR3 log constants to RFC 5424 log constants.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 58,
        'startColumn' => 3,
        'endColumn' => 4,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'loggers' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'name' => 'loggers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 65,
            'endLine' => 65,
            'startTokenPos' => 187,
            'startFilePos' => 1724,
            'endTokenPos' => 188,
            'endFilePos' => 1725,
          ),
        ),
        'docComment' => '/**
 * An array of arrays of \\Psr\\Log\\LoggerInterface keyed by priority.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'requestStack' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'name' => 'requestStack',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The request stack object.
 *
 * @var \\Symfony\\Component\\HttpFoundation\\RequestStack
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'currentUser' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'name' => 'currentUser',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The current user object.
 *
 * @var \\Drupal\\Core\\Session\\AccountInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 3,
        'endColumn' => 25,
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
          'channel' => 
          array (
            'name' => 'channel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 31,
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
 * Constructs a LoggerChannel object.
 *
 * @param string $channel
 *   The channel name for this instance.
 */',
        'startLine' => 87,
        'endLine' => 89,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'aliasName' => NULL,
      ),
      'log' => 
      array (
        'name' => 'log',
        'parameters' => 
        array (
          'level' => 
          array (
            'name' => 'level',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 23,
            'endColumn' => 28,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
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
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Stringable',
                      'isIdentifier' => false,
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
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 31,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'context' => 
          array (
            'name' => 'context',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 94,
                'endLine' => 94,
                'startTokenPos' => 253,
                'startFilePos' => 2297,
                'endTokenPos' => 254,
                'endFilePos' => 2298,
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
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 60,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 94,
        'endLine' => 131,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'aliasName' => NULL,
      ),
      'setRequestStack' => 
      array (
        'name' => 'setRequestStack',
        'parameters' => 
        array (
          'requestStack' => 
          array (
            'name' => 'requestStack',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 136,
                'endLine' => 136,
                'startTokenPos' => 546,
                'startFilePos' => 3474,
                'endTokenPos' => 546,
                'endFilePos' => 3477,
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
                      'name' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
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
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 35,
            'endColumn' => 68,
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
 * {@inheritdoc}
 */',
        'startLine' => 136,
        'endLine' => 138,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'aliasName' => NULL,
      ),
      'setCurrentUser' => 
      array (
        'name' => 'setCurrentUser',
        'parameters' => 
        array (
          'current_user' => 
          array (
            'name' => 'current_user',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 143,
                'endLine' => 143,
                'startTokenPos' => 577,
                'startFilePos' => 3626,
                'endTokenPos' => 577,
                'endFilePos' => 3629,
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
                      'name' => 'Drupal\\Core\\Session\\AccountInterface',
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 34,
            'endColumn' => 71,
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
 * {@inheritdoc}
 */',
        'startLine' => 143,
        'endLine' => 145,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'aliasName' => NULL,
      ),
      'setLoggers' => 
      array (
        'name' => 'setLoggers',
        'parameters' => 
        array (
          'loggers' => 
          array (
            'name' => 'loggers',
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
            'startLine' => 150,
            'endLine' => 150,
            'startColumn' => 30,
            'endColumn' => 43,
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
 * {@inheritdoc}
 */',
        'startLine' => 150,
        'endLine' => 152,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'aliasName' => NULL,
      ),
      'addLogger' => 
      array (
        'name' => 'addLogger',
        'parameters' => 
        array (
          'logger' => 
          array (
            'name' => 'logger',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Psr\\Log\\LoggerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 29,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'priority' => 
          array (
            'name' => 'priority',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 157,
                'endLine' => 157,
                'startTokenPos' => 636,
                'startFilePos' => 3889,
                'endTokenPos' => 636,
                'endFilePos' => 3889,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 54,
            'endColumn' => 66,
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
 * {@inheritdoc}
 */',
        'startLine' => 157,
        'endLine' => 159,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'aliasName' => NULL,
      ),
      'sortLoggers' => 
      array (
        'name' => 'sortLoggers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sorts loggers according to priority.
 *
 * @return array
 *   An array of sorted loggers by priority.
 */',
        'startLine' => 167,
        'endLine' => 170,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannel',
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