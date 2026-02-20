<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ImportableEntityStorageInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Config\Entity\ImportableEntityStorageInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e6aebd53bdeef1c096dd7459dcab5ef951755748bbdcb0f4877208e3fd48818a-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ImportableEntityStorageInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Config\\Entity',
    'name' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
    'shortName' => 'ImportableEntityStorageInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides an interface for responding to configuration imports.
 *
 * When configuration is synchronized between storages, the entity storage must
 * handle the synchronization of configuration data for its entity.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 66,
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
      'importCreate' => 
      array (
        'name' => 'importCreate',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 25,
            'endLine' => 25,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'new_config' => 
          array (
            'name' => 'new_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 25,
            'endLine' => 25,
            'startColumn' => 39,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'old_config' => 
          array (
            'name' => 'old_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 25,
            'endLine' => 25,
            'startColumn' => 59,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates entities upon synchronizing configuration changes.
 *
 * @param string $name
 *   The name of the configuration object.
 * @param \\Drupal\\Core\\Config\\Config $new_config
 *   A configuration object containing the new configuration data.
 * @param \\Drupal\\Core\\Config\\Config $old_config
 *   A configuration object containing the old configuration data.
 */',
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 3,
        'endColumn' => 78,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'aliasName' => NULL,
      ),
      'importUpdate' => 
      array (
        'name' => 'importUpdate',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'new_config' => 
          array (
            'name' => 'new_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 39,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'old_config' => 
          array (
            'name' => 'old_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 59,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Updates entities upon synchronizing configuration changes.
 *
 * @param string $name
 *   The name of the configuration object.
 * @param \\Drupal\\Core\\Config\\Config $new_config
 *   A configuration object containing the new configuration data.
 * @param \\Drupal\\Core\\Config\\Config $old_config
 *   A configuration object containing the old configuration data.
 *
 * @throws \\Drupal\\Core\\Config\\ConfigImporterException
 *   Thrown when the config entity that should be updated can not be found.
 */',
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 78,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'aliasName' => NULL,
      ),
      'importDelete' => 
      array (
        'name' => 'importDelete',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'new_config' => 
          array (
            'name' => 'new_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 39,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'old_config' => 
          array (
            'name' => 'old_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 59,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Delete entities upon synchronizing configuration changes.
 *
 * @param string $name
 *   The name of the configuration object.
 * @param \\Drupal\\Core\\Config\\Config $new_config
 *   A configuration object containing the new configuration data.
 * @param \\Drupal\\Core\\Config\\Config $old_config
 *   A configuration object containing the old configuration data.
 */',
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 3,
        'endColumn' => 78,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'aliasName' => NULL,
      ),
      'importRename' => 
      array (
        'name' => 'importRename',
        'parameters' => 
        array (
          'old_name' => 
          array (
            'name' => 'old_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 32,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'new_config' => 
          array (
            'name' => 'new_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 43,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'old_config' => 
          array (
            'name' => 'old_config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 63,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Renames entities upon synchronizing configuration changes.
 *
 * @param string $old_name
 *   The original name of the configuration object.
 * @param \\Drupal\\Core\\Config\\Config $new_config
 *   A configuration object containing the new configuration data.
 * @param \\Drupal\\Core\\Config\\Config $old_config
 *   A configuration object containing the old configuration data.
 */',
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 3,
        'endColumn' => 82,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
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