<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Queue/Attribute/QueueWorker.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Queue\Attribute\QueueWorker
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-96a5c06cbb8f52999b1380e2af272901d11c65679e9901694ed24b566c455cca-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Queue/Attribute/QueueWorker.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Queue\\Attribute',
    'name' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
    'shortName' => 'QueueWorker',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Declare a worker class for processing a queue item.
 *
 * Worker plugins are used by some queues for processing the individual items
 * in the queue. In that case, the ID of the worker plugin needs to match the
 * machine name of a queue, so that you can retrieve the queue back end by
 * calling \\Drupal\\Core\\Queue\\QueueFactory::get($plugin_id).
 *
 * \\Drupal\\Core\\Cron::processQueues() processes queues that use workers; they
 * can also be processed outside of the cron process.
 *
 * Some queues do not use worker plugins: you can create queues, add items to
 * them, claim them, etc. without using a QueueWorker plugin. However, you will
 * need to take care of processing the items in the queue in that case. You can
 * look at \\Drupal\\Core\\Cron::processQueues() for an example of how to process
 * a queue that uses workers, and adapt it to your queue.
 *
 * Plugin Namespace: Plugin\\QueueWorker
 *
 * For a working example, see
 * \\Drupal\\locale\\Plugin\\QueueWorker\\LocaleTranslation.
 *
 * @see \\Drupal\\Core\\Queue\\QueueWorkerInterface
 * @see \\Drupal\\Core\\Queue\\QueueWorkerBase
 * @see \\Drupal\\Core\\Queue\\QueueWorkerManager
 * @see plugin_api
 *
 * @ingroup queue
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Attribute',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '\\Attribute::TARGET_CLASS',
            'attributes' => 
            array (
              'startLine' => 37,
              'endLine' => 37,
              'startTokenPos' => 22,
              'startFilePos' => 1344,
              'endTokenPos' => 24,
              'endFilePos' => 1367,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 37,
    'endLine' => 60,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Component\\Plugin\\Attribute\\Plugin',
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
      'id' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'implementingClassName' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'name' => 'id',
        'modifiers' => 2177,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'title' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'implementingClassName' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'name' => 'title',
        'modifiers' => 2177,
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
                  'name' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 53,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cron' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'implementingClassName' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'name' => 'cron',
        'modifiers' => 2177,
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
                  'name' => 'array',
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
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'deriver' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'implementingClassName' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'name' => 'deriver',
        'modifiers' => 2177,
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
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 43,
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
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 5,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'title' => 
          array (
            'name' => 'title',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 55,
                'endLine' => 55,
                'startTokenPos' => 67,
                'startFilePos' => 2080,
                'endTokenPos' => 67,
                'endFilePos' => 2083,
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
                      'name' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 5,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'cron' => 
          array (
            'name' => 'cron',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 56,
                'endLine' => 56,
                'startTokenPos' => 81,
                'startFilePos' => 2121,
                'endTokenPos' => 81,
                'endFilePos' => 2124,
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
                      'name' => 'array',
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 5,
            'endColumn' => 39,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'deriver' => 
          array (
            'name' => 'deriver',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 57,
                'endLine' => 57,
                'startTokenPos' => 95,
                'startFilePos' => 2166,
                'endTokenPos' => 95,
                'endFilePos' => 2169,
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
                      'name' => 'string',
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 5,
            'endColumn' => 43,
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
 * @param string $id
 *   The plugin ID.
 * @param \\Drupal\\Core\\StringTranslation\\TranslatableMarkup|null $title
 *   The human-readable title of the plugin.
 * @param array|null $cron
 *   (optional) An associative array of settings for cron. The array has one
 *   key, time, which is set to the time Drupal cron should spend on calling
 *   this worker in seconds. The default is set in
 *   \\Drupal\\Core\\Queue\\QueueWorkerManager::processDefinition().
 * @param class-string|null $deriver
 *   (optional) The deriver class.
 */',
        'startLine' => 53,
        'endLine' => 58,
        'startColumn' => 3,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue\\Attribute',
        'declaringClassName' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'implementingClassName' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'currentClassName' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
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