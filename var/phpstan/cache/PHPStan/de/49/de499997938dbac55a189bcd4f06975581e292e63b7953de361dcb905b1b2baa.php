<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Logger/LoggerChannelInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Logger\LoggerChannelInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f3b7cb5df5519f0c11c21468b37860c6fac81739a9b16249b088298f89110a67-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Logger/LoggerChannelInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Logger',
    'name' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
    'shortName' => 'LoggerChannelInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Logger channel interface.
 *
 * This interface defines the full behavior of the central Drupal logger
 * facility. However, when writing code that does logging, use the generic
 * \\Psr\\Log\\LoggerInterface for type hinting instead (you shouldn\'t need the
 * methods here).
 *
 * To add a new logger to the system, implement \\Psr\\Log\\LoggerInterface and
 * add a service for that class to a services.yml file tagged with the \'logger\'
 * tag. The default logger channel implementation will call the log() method
 * of every logger service with some useful data set in the $context argument
 * of log(): request_uri, referer, ip, uid, link, channel, timestamp.
 *
 * SECURITY NOTE: the caller might also set a \'link\' in the $context array
 * which will be printed as-is by the dblog module under an "operations"
 * header. Usually this is a "view", "edit" or similar relevant link. Make sure
 * to use proper, secure link generation facilities; some are listed below.
 *
 * @see \\Drupal\\Core\\Logger\\RfcLoggerTrait
 * @see \\Psr\\Log\\LoggerInterface
 * @see \\Drupal\\Core\\Logger\\\\LoggerChannelFactoryInterface
 * @see \\Drupal\\Core\\Utility\\LinkGeneratorInterface
 * @see \\Drupal\\Core\\Link::fromTextAndUrl()
 * @see \\Drupal\\Core\\Entity\\EntityInterface::link()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 35,
    'endLine' => 71,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Psr\\Log\\LoggerInterface',
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
                'startLine' => 43,
                'endLine' => 43,
                'startTokenPos' => 49,
                'startFilePos' => 1705,
                'endTokenPos' => 49,
                'endFilePos' => 1708,
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
            'startLine' => 43,
            'endLine' => 43,
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
 * Sets the request stack.
 *
 * @param \\Symfony\\Component\\HttpFoundation\\RequestStack|null $requestStack
 *   The current request object.
 */',
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 3,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
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
                'startLine' => 51,
                'endLine' => 51,
                'startTokenPos' => 68,
                'startFilePos' => 1926,
                'endTokenPos' => 68,
                'endFilePos' => 1929,
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
            'startLine' => 51,
            'endLine' => 51,
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
 * Sets the current user.
 *
 * @param \\Drupal\\Core\\Session\\AccountInterface|null $current_user
 *   The current user object.
 */',
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 3,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
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
            'startLine' => 59,
            'endLine' => 59,
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
 * Sets the loggers for this channel.
 *
 * @param array $loggers
 *   An array of arrays of \\Psr\\Log\\LoggerInterface keyed by priority.
 */',
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
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
            'startLine' => 69,
            'endLine' => 69,
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
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 103,
                'startFilePos' => 2390,
                'endTokenPos' => 103,
                'endFilePos' => 2390,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
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
 * Adds a logger.
 *
 * @param \\Psr\\Log\\LoggerInterface $logger
 *   The PSR-3 logger to add.
 * @param int $priority
 *   The priority of the logger being added.
 */',
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 3,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Logger',
        'declaringClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
        'implementingClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
        'currentClassName' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
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