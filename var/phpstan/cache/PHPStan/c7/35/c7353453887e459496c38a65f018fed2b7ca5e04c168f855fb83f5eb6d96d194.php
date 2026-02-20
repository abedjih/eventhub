<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/SynchronizableInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\SynchronizableInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8c47ee2e425536b84b00ef5734b64010e7e061949b6761bedbb0d44b012b82ab-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/SynchronizableInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
    'shortName' => 'SynchronizableInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines methods for an entity that supports synchronization.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 49,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityInterface',
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
      'setSyncing' => 
      array (
        'name' => 'setSyncing',
        'parameters' => 
        array (
          'status' => 
          array (
            'name' => 'status',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 18,
            'endLine' => 18,
            'startColumn' => 30,
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
 * Sets the status of the synchronization flag.
 *
 * @param bool $status
 *   The status of the synchronization flag.
 *
 * @return $this
 */',
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        'aliasName' => NULL,
      ),
      'isSyncing' => 
      array (
        'name' => 'isSyncing',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns whether this entity is being changed as part of a synchronization.
 *
 * If you are writing code that responds to a change in this entity (insert,
 * update, delete, presave, etc.), and your code would result in a change to
 * this entity itself, a configuration change (whether related to this entity,
 * another entity, or non-entity configuration), you need to check and see if
 * this entity change is part of a synchronization process, and skip executing
 * your code if that is the case.
 *
 * For example, \\Drupal\\node\\Entity\\NodeType::postSave() adds the default body
 * field to newly created node type configuration entities, which is a
 * configuration change. You would not want this code to run during an import,
 * because imported entities were already given the body field when they were
 * originally created, and the imported configuration includes all of their
 * currently-configured fields. On the other hand,
 * \\Drupal\\field\\Entity\\FieldStorageConfig::preSave() and the methods it calls
 * make sure that the storage tables are created or updated for the field
 * storage configuration entity, which is not a configuration change, and it
 * must be done whether due to an import or not. So, the first method should
 * check $entity->isSyncing() and skip executing if it returns TRUE, and the
 * second should not perform this check.
 *
 * @return bool
 *   TRUE if the configuration entity is being created, updated, or deleted
 *   through a synchronization process.
 */',
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
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