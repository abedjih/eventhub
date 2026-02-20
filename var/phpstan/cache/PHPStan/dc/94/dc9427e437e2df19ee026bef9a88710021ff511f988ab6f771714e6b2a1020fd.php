<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Messenger/MessengerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Messenger\MessengerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-1243142637fcc05f8696a43eb7308581a3fe58e094111b47374bd1114060f88c-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Messenger/MessengerInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Messenger',
    'name' => 'Drupal\\Core\\Messenger\\MessengerInterface',
    'shortName' => 'MessengerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Stores runtime messages sent out to individual users on the page.
 *
 * An example for these messages is for example: "Content X got saved".
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 134,
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
      'TYPE_STATUS' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'implementingClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'name' => 'TYPE_STATUS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'status\'',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 23,
            'startFilePos' => 282,
            'endTokenPos' => 23,
            'endFilePos' => 289,
          ),
        ),
        'docComment' => '/**
 * A status message.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 3,
        'endColumn' => 31,
      ),
      'TYPE_WARNING' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'implementingClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'name' => 'TYPE_WARNING',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'warning\'',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 20,
            'startTokenPos' => 34,
            'startFilePos' => 344,
            'endTokenPos' => 34,
            'endFilePos' => 352,
          ),
        ),
        'docComment' => '/**
 * A warning.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 3,
        'endColumn' => 33,
      ),
      'TYPE_ERROR' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'implementingClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'name' => 'TYPE_ERROR',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'error\'',
          'attributes' => 
          array (
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 45,
            'startFilePos' => 404,
            'endTokenPos' => 45,
            'endFilePos' => 410,
          ),
        ),
        'docComment' => '/**
 * An error.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 3,
        'endColumn' => 29,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'addMessage' => 
      array (
        'name' => 'addMessage',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 30,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => 'self::TYPE_STATUS',
              'attributes' => 
              array (
                'startLine' => 45,
                'endLine' => 45,
                'startTokenPos' => 63,
                'startFilePos' => 1147,
                'endTokenPos' => 65,
                'endFilePos' => 1163,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 40,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'repeat' => 
          array (
            'name' => 'repeat',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 45,
                'endLine' => 45,
                'startTokenPos' => 72,
                'startFilePos' => 1176,
                'endTokenPos' => 72,
                'endFilePos' => 1180,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 67,
            'endColumn' => 81,
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
 * Adds a new message to the queue.
 *
 * The messages will be displayed in the order they got added later.
 *
 * @param string|\\Drupal\\Component\\Render\\MarkupInterface $message
 *   The translated message to be displayed to the user. For consistency with
 *   other messages, it should begin with a capital letter and end with a
 *   period.
 * @param string $type
 *   (optional) The message\'s type. Either self::TYPE_STATUS,
 *   self::TYPE_WARNING, or self::TYPE_ERROR.
 * @param bool $repeat
 *   (optional) If this is FALSE and the message is already set, then the
 *   message won\'t be repeated. Defaults to FALSE.
 *
 * @return $this
 */',
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 3,
        'endColumn' => 83,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Messenger',
        'declaringClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'implementingClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'currentClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'aliasName' => NULL,
      ),
      'addStatus' => 
      array (
        'name' => 'addStatus',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 29,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'repeat' => 
          array (
            'name' => 'repeat',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 60,
                'endLine' => 60,
                'startTokenPos' => 91,
                'startFilePos' => 1713,
                'endTokenPos' => 91,
                'endFilePos' => 1717,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 39,
            'endColumn' => 53,
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
 * Adds a new status message to the queue.
 *
 * @param string|\\Drupal\\Component\\Render\\MarkupInterface $message
 *   The translated message to be displayed to the user. For consistency with
 *   other messages, it should begin with a capital letter and end with a
 *   period.
 * @param bool $repeat
 *   (optional) If this is FALSE and the message is already set, then the
 *   message won\'t be repeated. Defaults to FALSE.
 *
 * @return $this
 */',
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 3,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Messenger',
        'declaringClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'implementingClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'currentClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'aliasName' => NULL,
      ),
      'addError' => 
      array (
        'name' => 'addError',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 75,
            'endLine' => 75,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'repeat' => 
          array (
            'name' => 'repeat',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 75,
                'endLine' => 75,
                'startTokenPos' => 110,
                'startFilePos' => 2248,
                'endTokenPos' => 110,
                'endFilePos' => 2252,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 75,
            'endLine' => 75,
            'startColumn' => 38,
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
 * Adds a new error message to the queue.
 *
 * @param string|\\Drupal\\Component\\Render\\MarkupInterface $message
 *   The translated message to be displayed to the user. For consistency with
 *   other messages, it should begin with a capital letter and end with a
 *   period.
 * @param bool $repeat
 *   (optional) If this is FALSE and the message is already set, then the
 *   message won\'t be repeated. Defaults to FALSE.
 *
 * @return $this
 */',
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Messenger',
        'declaringClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'implementingClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'currentClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'aliasName' => NULL,
      ),
      'addWarning' => 
      array (
        'name' => 'addWarning',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
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
            'startColumn' => 30,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'repeat' => 
          array (
            'name' => 'repeat',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 90,
                'endLine' => 90,
                'startTokenPos' => 129,
                'startFilePos' => 2787,
                'endTokenPos' => 129,
                'endFilePos' => 2791,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 40,
            'endColumn' => 54,
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
 * Adds a new warning message to the queue.
 *
 * @param string|\\Drupal\\Component\\Render\\MarkupInterface $message
 *   The translated message to be displayed to the user. For consistency with
 *   other messages, it should begin with a capital letter and end with a
 *   period.
 * @param bool $repeat
 *   (optional) If this is FALSE and the message is already set, then the
 *   message won\'t be repeated. Defaults to FALSE.
 *
 * @return $this
 */',
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Messenger',
        'declaringClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'implementingClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'currentClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'aliasName' => NULL,
      ),
      'all' => 
      array (
        'name' => 'all',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets all messages.
 *
 * @return string[][]|\\Drupal\\Component\\Render\\MarkupInterface[][]
 *   Keys are message types and values are indexed arrays of messages. Message
 *   types are either self::TYPE_STATUS, self::TYPE_WARNING, or
 *   self::TYPE_ERROR.
 */',
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 3,
        'endColumn' => 24,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Messenger',
        'declaringClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'implementingClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'currentClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'aliasName' => NULL,
      ),
      'messagesByType' => 
      array (
        'name' => 'messagesByType',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 112,
            'endLine' => 112,
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
 * Gets all messages of a certain type.
 *
 * @param string $type
 *   The messages\' type. Either self::TYPE_STATUS, self::TYPE_WARNING,
 *   or self::TYPE_ERROR.
 *
 * @return string[]|\\Drupal\\Component\\Render\\MarkupInterface[]
 *   The messages of given type.
 */',
        'startLine' => 112,
        'endLine' => 112,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Messenger',
        'declaringClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'implementingClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'currentClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'aliasName' => NULL,
      ),
      'deleteAll' => 
      array (
        'name' => 'deleteAll',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Deletes all messages.
 *
 * @return string[]|\\Drupal\\Component\\Render\\MarkupInterface[]
 *   The deleted messages.
 */',
        'startLine' => 120,
        'endLine' => 120,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Messenger',
        'declaringClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'implementingClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'currentClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'aliasName' => NULL,
      ),
      'deleteByType' => 
      array (
        'name' => 'deleteByType',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 132,
            'endLine' => 132,
            'startColumn' => 32,
            'endColumn' => 36,
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
 * Deletes all messages of a certain type.
 *
 * @param string $type
 *   The messages\' type. Either self::TYPE_STATUS, self::TYPE_WARNING, or
 *   self::TYPE_ERROR.
 *
 * @return string[]|\\Drupal\\Component\\Render\\MarkupInterface[]
 *   The deleted messages of given type.
 */',
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Messenger',
        'declaringClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'implementingClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        'currentClassName' => 'Drupal\\Core\\Messenger\\MessengerInterface',
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