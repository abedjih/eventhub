<?php declare(strict_types = 1);

// odsl-/home/ben/projects/training/eventhub/web/modules/custom/eventhub_import/src/Hook/CronHooks.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_import\Hook\CronHooks
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.29-dffc09c2a24339d6370bbdc4e79570d13344e641d06506d85a82360561618f1f',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'filename' => '/home/ben/projects/training/eventhub/web/modules/custom/eventhub_import/src/Hook/CronHooks.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_import\\Hook',
    'name' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
    'shortName' => 'CronHooks',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Cron hooks for EventHub Import.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 77,
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
      'httpClient' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'implementingClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'name' => 'httpClient',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'GuzzleHttp\\ClientInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queueFactory' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'implementingClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'name' => 'queueFactory',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Queue\\QueueFactory',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'logger' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'implementingClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'name' => 'logger',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Psr\\Log\\LoggerInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Symfony\\Component\\DependencyInjection\\Attribute\\Autowire',
            'isRepeated' => false,
            'arguments' => 
            array (
              'service' => 
              array (
                'code' => '\'logger.channel.eventhub_import\'',
                'attributes' => 
                array (
                  'startLine' => 22,
                  'endLine' => 22,
                  'startTokenPos' => 84,
                  'startFilePos' => 540,
                  'endTokenPos' => 84,
                  'endFilePos' => 571,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 22,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => true,
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
          'httpClient' => 
          array (
            'name' => 'httpClient',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'GuzzleHttp\\ClientInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 20,
            'endLine' => 20,
            'startColumn' => 5,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'queueFactory' => 
          array (
            'name' => 'queueFactory',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Queue\\QueueFactory',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 5,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'isPromoted' => true,
            'attributes' => 
            array (
              0 => 
              array (
                'name' => 'Symfony\\Component\\DependencyInjection\\Attribute\\Autowire',
                'isRepeated' => false,
                'arguments' => 
                array (
                  'service' => 
                  array (
                    'code' => '\'logger.channel.eventhub_import\'',
                    'attributes' => 
                    array (
                      'startLine' => 22,
                      'endLine' => 22,
                      'startTokenPos' => 84,
                      'startFilePos' => 540,
                      'endTokenPos' => 84,
                      'endFilePos' => 571,
                    ),
                  ),
                ),
              ),
            ),
            'startLine' => 22,
            'endLine' => 23,
            'startColumn' => 5,
            'endColumn' => 44,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 19,
        'endLine' => 24,
        'startColumn' => 3,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_import\\Hook',
        'declaringClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'implementingClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'currentClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'aliasName' => NULL,
      ),
      'cron' => 
      array (
        'name' => 'cron',
        'parameters' => 
        array (
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
          0 => 
          array (
            'name' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'cron\'',
                'attributes' => 
                array (
                  'startLine' => 32,
                  'endLine' => 32,
                  'startTokenPos' => 107,
                  'startFilePos' => 798,
                  'endTokenPos' => 107,
                  'endFilePos' => 803,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Implements hook_cron().
 *
 * Fetches the list of departments from the geo API and queues one item
 * per department for commune import.
 */',
        'startLine' => 32,
        'endLine' => 75,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_import\\Hook',
        'declaringClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'implementingClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
        'currentClassName' => 'Drupal\\eventhub_import\\Hook\\CronHooks',
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