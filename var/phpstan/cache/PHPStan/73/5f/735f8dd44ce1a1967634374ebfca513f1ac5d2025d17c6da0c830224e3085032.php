<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Queue/QueueInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Queue\QueueInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-72fb4319361c875871b087fe7ef6393bf69cd9e9323c36aa9c8c587b5c1bcb13-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Queue\\QueueInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Queue/QueueInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Queue',
    'name' => 'Drupal\\Core\\Queue\\QueueInterface',
    'shortName' => 'QueueInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for a queue.
 *
 * Classes implementing this interface will do a best effort to preserve order
 * in messages and to execute them at least once.
 *
 * @ingroup queue
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 110,
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
      'createItem' => 
      array (
        'name' => 'createItem',
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 30,
            'endColumn' => 34,
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
 * Adds a queue item and store it directly to the queue.
 *
 * @param mixed $data
 *   Arbitrary data to be associated with the new task in the queue.
 *
 * @return false|int|string
 *   A unique ID if the item was successfully created and was (best effort)
 *   added to the queue, otherwise FALSE. We don\'t guarantee the item was
 *   committed to disk etc, but as far as we know, the item is now in the
 *   queue.
 */',
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'currentClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'aliasName' => NULL,
      ),
      'numberOfItems' => 
      array (
        'name' => 'numberOfItems',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the number of items in the queue.
 *
 * This is intended to provide a "best guess" count of the number of items in
 * the queue. Depending on the implementation and the setup, the accuracy of
 * the results of this function may vary.
 *
 * e.g. On a busy system with a large number of consumers and items, the
 * result might only be valid for a fraction of a second and not provide an
 * accurate representation.
 *
 * @return int
 *   An integer estimate of the number of items in the queue.
 */',
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'currentClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'aliasName' => NULL,
      ),
      'claimItem' => 
      array (
        'name' => 'claimItem',
        'parameters' => 
        array (
          'lease_time' => 
          array (
            'name' => 'lease_time',
            'default' => 
            array (
              'code' => '3600',
              'attributes' => 
              array (
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 50,
                'startFilePos' => 2574,
                'endTokenPos' => 50,
                'endFilePos' => 2577,
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
            'startColumn' => 29,
            'endColumn' => 46,
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
 * Claims an item in the queue for processing.
 *
 * @param int $lease_time
 *   How long the processing is expected to take in seconds, defaults to an
 *   hour. After this lease expires, the item will be reset and another
 *   consumer can claim the item. For idempotent tasks (which can be run
 *   multiple times without side effects), shorter lease times would result
 *   in lower latency in case a consumer fails. For tasks that should not be
 *   run more than once (non-idempotent), a larger lease time will make it
 *   more rare for a given task to run multiple times in cases of failure,
 *   at the cost of higher latency.
 *
 * @return bool|object
 *   On success we return an item object. If the queue is unable to claim an
 *   item it returns false. This implies a best effort to retrieve an item
 *   and either the queue is empty or there is some other non-recoverable
 *   problem.
 *
 *   If returned, the object will have at least the following properties:
 *   - data: the same as what passed into createItem().
 *   - item_id: the unique ID returned from createItem().
 *   - created: timestamp when the item was put into the queue.
 */',
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 3,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'currentClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'aliasName' => NULL,
      ),
      'deleteItem' => 
      array (
        'name' => 'deleteItem',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 30,
            'endColumn' => 34,
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
 * Deletes a finished item from the queue.
 *
 * @param bool|object $item
 *   The item returned by \\Drupal\\Core\\Queue\\QueueInterface::claimItem().
 */',
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'currentClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'aliasName' => NULL,
      ),
      'releaseItem' => 
      array (
        'name' => 'releaseItem',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
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
 * Releases an item that the worker could not process.
 *
 * Another worker can come in and process it before the timeout expires.
 *
 * @param bool|object $item
 *   The item returned by \\Drupal\\Core\\Queue\\QueueInterface::claimItem().
 *
 * @return bool
 *   TRUE if the item has been released, FALSE otherwise.
 */',
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'currentClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'aliasName' => NULL,
      ),
      'createQueue' => 
      array (
        'name' => 'createQueue',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a queue.
 *
 * Called during installation and should be used to perform any necessary
 * initialization operations. This should not be confused with the
 * constructor for these objects, which is called every time an object is
 * instantiated to operate on a queue. This operation is only needed the
 * first time a given queue is going to be initialized (for example, to make
 * a new database table or directory to hold tasks for the queue -- it
 * depends on the queue implementation if this is necessary at all).
 */',
        'startLine' => 103,
        'endLine' => 103,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'currentClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'aliasName' => NULL,
      ),
      'deleteQueue' => 
      array (
        'name' => 'deleteQueue',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Deletes a queue and every item in the queue.
 */',
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
        'currentClassName' => 'Drupal\\Core\\Queue\\QueueInterface',
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