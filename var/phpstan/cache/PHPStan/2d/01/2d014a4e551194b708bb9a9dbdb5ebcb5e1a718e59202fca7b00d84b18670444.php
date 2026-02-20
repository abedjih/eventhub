<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/RevisionLogInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\RevisionLogInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4561d6aad02dec9acd8eb7aca647bd6165dd96df1d1883f29a0b9fb7cfd55351-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/RevisionLogInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
    'shortName' => 'RevisionLogInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines methods for an entity that supports revision logging and ownership.
 *
 * @ingroup entity_type_characteristics
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 87,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\RevisionableInterface',
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
      'getRevisionCreationTime' => 
      array (
        'name' => 'getRevisionCreationTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the entity revision creation timestamp.
 *
 * @return int
 *   The UNIX timestamp of when this revision was created.
 */',
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'aliasName' => NULL,
      ),
      'setRevisionCreationTime' => 
      array (
        'name' => 'setRevisionCreationTime',
        'parameters' => 
        array (
          'timestamp' => 
          array (
            'name' => 'timestamp',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 43,
            'endColumn' => 52,
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
 * Sets the entity revision creation timestamp.
 *
 * @param int $timestamp
 *   The UNIX timestamp of when this revision was created.
 *
 * @return $this
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'aliasName' => NULL,
      ),
      'getRevisionUser' => 
      array (
        'name' => 'getRevisionUser',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the entity revision author.
 *
 * @return \\Drupal\\user\\UserInterface|null
 *   The user entity for the revision author, or NULL if not set or user was
 *   deleted.
 */',
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'aliasName' => NULL,
      ),
      'setRevisionUser' => 
      array (
        'name' => 'setRevisionUser',
        'parameters' => 
        array (
          'account' => 
          array (
            'name' => 'account',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\user\\UserInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 35,
            'endColumn' => 56,
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
 * Sets the entity revision author.
 *
 * @param \\Drupal\\user\\UserInterface $account
 *   The user account of the revision author.
 *
 * @return $this
 */',
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'aliasName' => NULL,
      ),
      'getRevisionUserId' => 
      array (
        'name' => 'getRevisionUserId',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the entity revision author ID.
 *
 * @return int|null
 *   The user ID, or NULL if not set or user was deleted.
 */',
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'aliasName' => NULL,
      ),
      'setRevisionUserId' => 
      array (
        'name' => 'setRevisionUserId',
        'parameters' => 
        array (
          'user_id' => 
          array (
            'name' => 'user_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 67,
            'endLine' => 67,
            'startColumn' => 37,
            'endColumn' => 44,
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
 * Sets the entity revision author by ID.
 *
 * @param int $user_id
 *   The user ID of the revision author.
 *
 * @return $this
 */',
        'startLine' => 67,
        'endLine' => 67,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'aliasName' => NULL,
      ),
      'getRevisionLogMessage' => 
      array (
        'name' => 'getRevisionLogMessage',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the entity revision log message.
 *
 * @return string|null
 *   The revision log message, or NULL if not set.
 */',
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'aliasName' => NULL,
      ),
      'setRevisionLogMessage' => 
      array (
        'name' => 'setRevisionLogMessage',
        'parameters' => 
        array (
          'revision_log_message' => 
          array (
            'name' => 'revision_log_message',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 41,
            'endColumn' => 61,
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
 * Sets the entity revision log message.
 *
 * @param string $revision_log_message
 *   The revision log message.
 *
 * @return $this
 */',
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 3,
        'endColumn' => 63,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
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