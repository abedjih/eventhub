<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Sql/SqlEntityStorageInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\Sql\SqlEntityStorageInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6beb112b6fabbf7baf8192291e040e5e6667b60f88d1c9ecc3f470d6dd3f1cc8-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Sql/SqlEntityStorageInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity\\Sql',
    'name' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
    'shortName' => 'SqlEntityStorageInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A common interface for SQL-based entity storage implementations.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 25,
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
      'getTableMapping' => 
      array (
        'name' => 'getTableMapping',
        'parameters' => 
        array (
          'storage_definitions' => 
          array (
            'name' => 'storage_definitions',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 23,
                'endLine' => 23,
                'startTokenPos' => 39,
                'startFilePos' => 747,
                'endTokenPos' => 39,
                'endFilePos' => 750,
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
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 35,
            'endColumn' => 68,
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
 * Gets a table mapping for the entity\'s SQL tables.
 *
 * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $storage_definitions
 *   (optional) An array of field storage definitions to be used to compute
 *   the table mapping. Defaults to the ones provided by the entity field
 *   manager.
 *
 * @return \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface
 *   A table mapping object for the entity\'s tables.
 */',
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 3,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Sql',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
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