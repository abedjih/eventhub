<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ConfigEntityStorageInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Config\Entity\ConfigEntityStorageInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-12d2ad3ee4fcd6ced17a4610b80c603f0f8cc27c0b92dcf0a298d5419cb645be-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ConfigEntityStorageInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Config\\Entity',
    'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
    'shortName' => 'ConfigEntityStorageInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides an interface for configuration entity storage.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 85,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityStorageInterface',
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
      'getIDFromConfigName' => 
      array (
        'name' => 'getIDFromConfigName',
        'parameters' => 
        array (
          'config_name' => 
          array (
            'name' => 'config_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 24,
            'endLine' => 24,
            'startColumn' => 46,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'config_prefix' => 
          array (
            'name' => 'config_prefix',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 24,
            'endLine' => 24,
            'startColumn' => 60,
            'endColumn' => 73,
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
 * Extracts the configuration entity ID from the full configuration name.
 *
 * @param string $config_name
 *   The full configuration name to extract the ID from; for example,
 *   \'views.view.archive\'.
 * @param string $config_prefix
 *   The config prefix of the configuration entity; for example, \'views.view\'.
 *
 * @return string
 *   The ID of the configuration entity.
 */',
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 3,
        'endColumn' => 75,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'aliasName' => NULL,
      ),
      'createFromStorageRecord' => 
      array (
        'name' => 'createFromStorageRecord',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 41,
            'endLine' => 41,
            'startColumn' => 43,
            'endColumn' => 55,
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
 * Creates a configuration entity from storage values.
 *
 * Allows the configuration entity storage to massage storage values before
 * creating an entity.
 *
 * @param array $values
 *   The array of values from the configuration storage.
 *
 * @return ConfigEntityInterface
 *   The configuration entity.
 *
 * @see \\Drupal\\Core\\Entity\\EntityStorageBase::mapFromStorageRecords()
 * @see \\Drupal\\field\\FieldStorageConfigStorage::mapFromStorageRecords()
 */',
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 3,
        'endColumn' => 57,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'aliasName' => NULL,
      ),
      'updateFromStorageRecord' => 
      array (
        'name' => 'updateFromStorageRecord',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 43,
            'endColumn' => 71,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 74,
            'endColumn' => 86,
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
 * Updates a configuration entity from storage values.
 *
 * Allows the configuration entity storage to massage storage values before
 * updating an entity.
 *
 * @param ConfigEntityInterface $entity
 *   The configuration entity to update.
 * @param array $values
 *   The array of values from the configuration storage.
 *
 * @return ConfigEntityInterface
 *   The configuration entity.
 *
 * @see \\Drupal\\Core\\Entity\\EntityStorageBase::mapFromStorageRecords()
 * @see \\Drupal\\field\\FieldStorageConfigStorage::mapFromStorageRecords()
 */',
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 3,
        'endColumn' => 88,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'aliasName' => NULL,
      ),
      'loadOverrideFree' => 
      array (
        'name' => 'loadOverrideFree',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 36,
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
 * Loads one entity in their original form without overrides.
 *
 * @param mixed $id
 *   The ID of the entity to load.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface|null
 *   An entity object. NULL if no matching entity is found.
 */',
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'aliasName' => NULL,
      ),
      'loadMultipleOverrideFree' => 
      array (
        'name' => 'loadMultipleOverrideFree',
        'parameters' => 
        array (
          'ids' => 
          array (
            'name' => 'ids',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 83,
                'endLine' => 83,
                'startTokenPos' => 101,
                'startFilePos' => 2659,
                'endTokenPos' => 101,
                'endFilePos' => 2662,
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 44,
            'endColumn' => 61,
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
 * Loads one or more entities in their original form without overrides.
 *
 * @param string[]|null $ids
 *   An array of entity IDs, or NULL to load all entities.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface[]
 *   An array of entity objects indexed by their IDs. Returns an empty array
 *   if no matching entities are found.
 */',
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 3,
        'endColumn' => 63,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
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