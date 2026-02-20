<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldDefinitionListenerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Field\FieldDefinitionListenerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-dcb835ea1c7ce97b5782482e04f8f26c3ea0278bb5a4d62ed5b072b3e83c3bf0-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Field/FieldDefinitionListenerInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Field',
    'name' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
    'shortName' => 'FieldDefinitionListenerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for reacting to field creation, deletion, and updates.
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
      'onFieldDefinitionCreate' => 
      array (
        'name' => 'onFieldDefinitionCreate',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
            'startColumn' => 43,
            'endColumn' => 84,
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
 * Reacts to the creation of a field.
 *
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The field definition created.
 */',
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 3,
        'endColumn' => 86,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
        'aliasName' => NULL,
      ),
      'onFieldDefinitionUpdate' => 
      array (
        'name' => 'onFieldDefinitionUpdate',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 43,
            'endColumn' => 84,
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
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 87,
            'endColumn' => 120,
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
 * Reacts to the update of a field.
 *
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The field definition being updated.
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $original
 *   The original field definition; i.e., the definition before the update.
 */',
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 3,
        'endColumn' => 122,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
        'aliasName' => NULL,
      ),
      'onFieldDefinitionDelete' => 
      array (
        'name' => 'onFieldDefinitionDelete',
        'parameters' => 
        array (
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
            'startColumn' => 43,
            'endColumn' => 84,
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
 * Reacts to the deletion of a field.
 *
 * Stored values should not be wiped at once, but marked as \'deleted\' so that
 * they can go through a proper purge process later on.
 *
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The field definition being deleted.
 */',
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 3,
        'endColumn' => 86,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Field',
        'declaringClassName' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
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