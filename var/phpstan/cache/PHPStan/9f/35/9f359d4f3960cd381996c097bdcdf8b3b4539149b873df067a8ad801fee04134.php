<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldStorageDefinitionListenerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Field\FieldStorageDefinitionListenerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-1f7fe8245881bf6689e31db8d008e83be42ca17151a75c8049b17928f7b8df7f-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldStorageDefinitionListenerInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Field',
    'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
    'shortName' => 'FieldStorageDefinitionListenerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for field storage definition create, delete and update operations.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 39,
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
      'onFieldStorageDefinitionCreate' => 
      array (
        'name' => 'onFieldStorageDefinitionCreate',
        'parameters' => 
        array (
          'storage_definition' => 
          array (
            'name' => 'storage_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 50,
            'endColumn' => 100,
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
 * Reacts to the creation of a field storage definition.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
 *   The definition being created.
 */',
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 3,
        'endColumn' => 102,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
        'aliasName' => NULL,
      ),
      'onFieldStorageDefinitionUpdate' => 
      array (
        'name' => 'onFieldStorageDefinitionUpdate',
        'parameters' => 
        array (
          'storage_definition' => 
          array (
            'name' => 'storage_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 50,
            'endColumn' => 100,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'original' => 
          array (
            'name' => 'original',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 103,
            'endColumn' => 143,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reacts to the update of a field storage definition.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
 *   The field being updated.
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $original
 *   The original storage definition; i.e., the definition before the update.
 *
 * @throws \\Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException
 *   Thrown when the update to the field is forbidden.
 */',
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 3,
        'endColumn' => 145,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
        'aliasName' => NULL,
      ),
      'onFieldStorageDefinitionDelete' => 
      array (
        'name' => 'onFieldStorageDefinitionDelete',
        'parameters' => 
        array (
          'storage_definition' => 
          array (
            'name' => 'storage_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 50,
            'endColumn' => 100,
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
 * Reacts to the deletion of a field storage definition.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
 *   The field being deleted.
 */',
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 3,
        'endColumn' => 102,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
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