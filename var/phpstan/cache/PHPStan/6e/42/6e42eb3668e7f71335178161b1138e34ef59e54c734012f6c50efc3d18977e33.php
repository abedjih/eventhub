<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Queue/DelayedRequeueException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Queue\DelayedRequeueException
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-dbd938debec5893e996b4c3688aa0290b1bb06858efb5473db9d0f43b348ba3c-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Queue\\DelayedRequeueException',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Queue/DelayedRequeueException.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Queue',
    'name' => 'Drupal\\Core\\Queue\\DelayedRequeueException',
    'shortName' => 'DelayedRequeueException',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Throw this exception to leave an item in the queue until its lock expires.
 *
 * @see \\Drupal\\Core\\Cron::processQueues()
 *   For more information about how this exception interacts with Drupal\'s queue
 *   processing via the built-in cron service.
 * @see \\Drupal\\Core\\Queue\\DelayableQueueInterface
 *   Queues must implement this interface to support custom delay intervals; if
 *   this interface is missing, any custom delay interval specified for this
 *   exception will be ignored and the remaining time in the original lease will
 *   be used as the duration of the delay interval.
 * @see \\Drupal\\Core\\Queue\\RequeueException
 *   For use when an item needs to be requeued immediately.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 60,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'RuntimeException',
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
      'delay' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Queue\\DelayedRequeueException',
        'implementingClassName' => 'Drupal\\Core\\Queue\\DelayedRequeueException',
        'name' => 'delay',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 26,
            'startTokenPos' => 27,
            'startFilePos' => 928,
            'endTokenPos' => 27,
            'endFilePos' => 928,
          ),
        ),
        'docComment' => '/**
 * The interval of time that the item should remain locked (in seconds).
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 3,
        'endColumn' => 23,
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
          'delay' => 
          array (
            'name' => 'delay',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 44,
                'startFilePos' => 1320,
                'endTokenPos' => 44,
                'endFilePos' => 1320,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 31,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 53,
                'startFilePos' => 1341,
                'endTokenPos' => 53,
                'endFilePos' => 1342,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 47,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'code' => 
          array (
            'name' => 'code',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 62,
                'startFilePos' => 1357,
                'endTokenPos' => 62,
                'endFilePos' => 1357,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 69,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'previous' => 
          array (
            'name' => 'previous',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 72,
                'startFilePos' => 1384,
                'endTokenPos' => 72,
                'endFilePos' => 1387,
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
                      'name' => 'Throwable',
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
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 84,
            'endColumn' => 111,
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
 * Constructs a DelayedRequeueException.
 *
 * @param int $delay
 *   The desired delay interval for this item (in seconds).
 * @param string $message
 *   The error message.
 * @param int $code
 *   The error code.
 * @param \\Throwable|null $previous
 *   The previous throwable used for the exception chaining.
 */',
        'startLine' => 40,
        'endLine' => 45,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\DelayedRequeueException',
        'implementingClassName' => 'Drupal\\Core\\Queue\\DelayedRequeueException',
        'currentClassName' => 'Drupal\\Core\\Queue\\DelayedRequeueException',
        'aliasName' => NULL,
      ),
      'getDelay' => 
      array (
        'name' => 'getDelay',
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
 * Get the desired delay interval for this item.
 *
 * @see self::$delay
 *   For recommended value usage in a queue processor.
 *
 * @return int
 *   The desired delay interval for this item.
 */',
        'startLine' => 56,
        'endLine' => 58,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\DelayedRequeueException',
        'implementingClassName' => 'Drupal\\Core\\Queue\\DelayedRequeueException',
        'currentClassName' => 'Drupal\\Core\\Queue\\DelayedRequeueException',
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