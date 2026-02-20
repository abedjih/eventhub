<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Queue/SuspendQueueException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Queue\SuspendQueueException
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-795547fb6d383d27bc07ff638fdbb2a754de3c759a16e80782f8875ab4498f41-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Queue\\SuspendQueueException',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Queue/SuspendQueueException.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Queue',
    'name' => 'Drupal\\Core\\Queue\\SuspendQueueException',
    'shortName' => 'SuspendQueueException',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Exception class to throw to indicate that a cron queue should be skipped.
 *
 * An implementation of \\Drupal\\Core\\Queue\\QueueWorkerInterface::processItem()
 * throws this class of exception to indicate that processing of the whole queue
 * should be skipped. This should be thrown rather than a normal Exception if
 * the problem encountered by the queue worker is such that it can be deduced
 * that workers of subsequent items would encounter it too. For example, if a
 * remote site that the queue worker depends on appears to be inaccessible.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 65,
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
        'declaringClassName' => 'Drupal\\Core\\Queue\\SuspendQueueException',
        'implementingClassName' => 'Drupal\\Core\\Queue\\SuspendQueueException',
        'name' => 'delay',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'NULL',
          'attributes' => 
          array (
            'startLine' => 22,
            'endLine' => 22,
            'startTokenPos' => 27,
            'startFilePos' => 779,
            'endTokenPos' => 27,
            'endFilePos' => 782,
          ),
        ),
        'docComment' => '/**
 * Seconds to wait before resuming the queue, or NULL if unknown.
 *
 * @var float|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 3,
        'endColumn' => 26,
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
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 38,
                'endLine' => 38,
                'startTokenPos' => 44,
                'startFilePos' => 1320,
                'endTokenPos' => 44,
                'endFilePos' => 1321,
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
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 31,
            'endColumn' => 50,
            'parameterIndex' => 0,
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
                'startLine' => 38,
                'endLine' => 38,
                'startTokenPos' => 53,
                'startFilePos' => 1336,
                'endTokenPos' => 53,
                'endFilePos' => 1336,
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
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 1,
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
                'startLine' => 38,
                'endLine' => 38,
                'startTokenPos' => 63,
                'startFilePos' => 1363,
                'endTokenPos' => 63,
                'endFilePos' => 1366,
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
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 68,
            'endColumn' => 95,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'delay' => 
          array (
            'name' => 'delay',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 38,
                'endLine' => 38,
                'startTokenPos' => 73,
                'startFilePos' => 1385,
                'endTokenPos' => 73,
                'endFilePos' => 1388,
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
                      'name' => 'float',
                      'isIdentifier' => true,
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
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 98,
            'endColumn' => 117,
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
 * Constructs a SuspendQueueException.
 *
 * @param string $message
 *   The error message.
 * @param int $code
 *   The error code.
 * @param \\Throwable|null $previous
 *   The previous throwable used for the exception chaining.
 * @param float|null $delay
 *   If the time for when the queue will be ready to resume processing is
 *   known, pass an interval in seconds. Otherwise NULL if the time to resume
 *   processing the queue is not known.
 */',
        'startLine' => 38,
        'endLine' => 41,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\SuspendQueueException',
        'implementingClassName' => 'Drupal\\Core\\Queue\\SuspendQueueException',
        'currentClassName' => 'Drupal\\Core\\Queue\\SuspendQueueException',
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
                  'name' => 'float',
                  'isIdentifier' => true,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the desired delay interval for this item.
 *
 * @return float|null
 *   If the time for when the queue will be ready to resume processing is
 *   known, pass an interval in seconds. Otherwise NULL if the time to resume
 *   processing the queue is not known.
 */',
        'startLine' => 51,
        'endLine' => 53,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\SuspendQueueException',
        'implementingClassName' => 'Drupal\\Core\\Queue\\SuspendQueueException',
        'currentClassName' => 'Drupal\\Core\\Queue\\SuspendQueueException',
        'aliasName' => NULL,
      ),
      'isDelayable' => 
      array (
        'name' => 'isDelayable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine whether the next time the queue should be checked is known.
 *
 * @return bool
 *   Whether the time to resume processing the queue is known.
 */',
        'startLine' => 61,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\SuspendQueueException',
        'implementingClassName' => 'Drupal\\Core\\Queue\\SuspendQueueException',
        'currentClassName' => 'Drupal\\Core\\Queue\\SuspendQueueException',
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