<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Queue/QueueWorkerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Queue\QueueWorkerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4a0129640beb4af7b2539b8e31846c8e91ab4f56fd3c15a26e95c4d0cd62c0e5-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Queue\\QueueWorkerInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Queue/QueueWorkerInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Queue',
    'name' => 'Drupal\\Core\\Queue\\QueueWorkerInterface',
    'shortName' => 'QueueWorkerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for a QueueWorker plugin.
 *
 * @see \\Drupal\\Core\\Queue\\QueueWorkerBase
 * @see \\Drupal\\Core\\Queue\\QueueWorkerManager
 * @see \\Drupal\\Core\\Annotation\\QueueWorker
 * @see plugin_api
 *
 * @ingroup queue
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 48,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
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
      'processItem' => 
      array (
        'name' => 'processItem',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 31,
            'endColumn' => 35,
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
 * Works on a single queue item.
 *
 * @param mixed $data
 *   The data that was passed to
 *   \\Drupal\\Core\\Queue\\QueueInterface::createItem() when the item was queued.
 *
 * @throws \\Drupal\\Core\\Queue\\RequeueException
 *   Processing is not yet finished. This will allow another process to claim
 *   the item immediately.
 * @throws \\Exception
 *   A QueueWorker plugin may throw an exception to indicate there was a
 *   problem. The cron process will log the exception, and leave the item in
 *   the queue to be processed again later.
 * @throws \\Drupal\\Core\\Queue\\SuspendQueueException
 *   More specifically, a SuspendQueueException should be thrown when a
 *   QueueWorker plugin is aware that the problem will affect all subsequent
 *   workers of its queue. For example, a callback that makes HTTP requests
 *   may find that the remote server is not responding. The cron process will
 *   behave as with a normal Exception, and in addition will not attempt to
 *   process further items from the current item\'s queue during the current
 *   cron run.
 * @throws \\Drupal\\Core\\Queue\\DelayedRequeueException
 *   To leave an item in the queue until its lock expires.
 *
 * @see \\Drupal\\Core\\Cron::processQueues()
 */',
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueWorkerInterface',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueWorkerInterface',
        'currentClassName' => 'Drupal\\Core\\Queue\\QueueWorkerInterface',
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