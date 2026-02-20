<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ConfigEntityInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Config\Entity\ConfigEntityInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b19c9a5788a4db42f437fa7db1b7a9eb413a1cec0d95214546bea71826c89b76-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ConfigEntityInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Config\\Entity',
    'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
    'shortName' => 'ConfigEntityInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines a common interface for configuration entities.
 *
 * @ingroup config_api
 * @ingroup entity_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 183,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityInterface',
      1 => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
      2 => 'Drupal\\Core\\Entity\\SynchronizableInterface',
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
      'enable' => 
      array (
        'name' => 'enable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enables the configuration entity.
 *
 * @return $this
 */',
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 3,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'disable' => 
      array (
        'name' => 'disable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disables the configuration entity.
 *
 * @return $this
 */',
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'setStatus' => 
      array (
        'name' => 'setStatus',
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
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 29,
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
 * Sets the status of the configuration entity.
 *
 * @param bool $status
 *   The status of the configuration entity.
 *
 * @return $this
 */',
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'status' => 
      array (
        'name' => 'status',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns whether the configuration entity is enabled.
 *
 * Status implementations for configuration entities should follow these
 * general rules:
 *   - Status does not affect the loading of entities. I.e. Disabling
 *     configuration entities should only have UI/access implications.
 *   - It should only take effect when a \'status\' key is explicitly declared
 *     in the entity_keys info of a configuration entity\'s annotation data.
 *   - Each entity implementation (entity/controller) is responsible for
 *     checking and managing the status.
 *
 * @return bool
 *   Whether the entity is enabled or not.
 */',
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 3,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'isUninstalling' => 
      array (
        'name' => 'isUninstalling',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns whether this entity is being changed during the uninstall process.
 *
 * If you are writing code that responds to a change in this entity (insert,
 * update, delete, presave, etc.), and your code would result in a
 * configuration change (whether related to this configuration entity, another
 * configuration entity, or non-entity configuration) or your code would
 * result in a change to this entity itself, you need to check and see if this
 * entity change is part of an uninstall process, and skip executing your code
 * if that is the case.
 *
 * For example, \\Drupal\\language\\Entity\\ConfigurableLanguage::preDelete()
 * prevents the API from deleting the default language. However during an
 * uninstall of the language module it is expected that the default language
 * should be deleted.
 *
 * @return bool
 *   TRUE if the configuration entity is being changed during the uninstall
 *   process, FALSE otherwise.
 */',
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'property_name' => 
          array (
            'name' => 'property_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 23,
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
 * Returns the value of a property.
 *
 * @param string $property_name
 *   The name of the property that should be returned.
 *
 * @return mixed
 *   The property if it exists, or NULL otherwise.
 */',
        'startLine' => 88,
        'endLine' => 88,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'property_name' => 
          array (
            'name' => 'property_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 23,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 39,
            'endColumn' => 44,
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
 * Sets the value of a property.
 *
 * @param string $property_name
 *   The name of the property that should be set.
 * @param mixed $value
 *   The value the property should be set to.
 *
 * @return $this
 */',
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'calculateDependencies' => 
      array (
        'name' => 'calculateDependencies',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Calculates dependencies and stores them in the dependency property.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
 */',
        'startLine' => 109,
        'endLine' => 109,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'onDependencyRemoval' => 
      array (
        'name' => 'onDependencyRemoval',
        'parameters' => 
        array (
          'dependencies' => 
          array (
            'name' => 'dependencies',
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
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 39,
            'endColumn' => 57,
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
 * Informs the entity that entities it depends on will be deleted.
 *
 * This method allows configuration entities to remove dependencies instead
 * of being deleted themselves. Configuration entities can use this method to
 * avoid being unnecessarily deleted during an extension uninstallation.
 * For example, entity displays remove references to widgets and formatters if
 * the plugin that supplies them depends on a module that is being
 * uninstalled.
 *
 * If this method returns TRUE then the entity needs to be re-saved by the
 * caller for the changes to take effect. Implementations should not save the
 * entity.
 *
 * @param array $dependencies
 *   An array of dependencies that will be deleted keyed by dependency type.
 *   Dependency types are, for example, entity, module and theme.
 *
 * @return bool
 *   TRUE if the entity has been changed as a result, FALSE if not.
 *
 * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
 * @see \\Drupal\\Core\\Config\\ConfigEntityBase::preDelete()
 * @see \\Drupal\\Core\\Config\\ConfigManager::uninstall()
 * @see \\Drupal\\Core\\Entity\\EntityDisplayBase::onDependencyRemoval()
 */',
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'getDependencies' => 
      array (
        'name' => 'getDependencies',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the configuration dependencies.
 *
 * @return array
 *   An array of dependencies, keyed by $type.
 *
 * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
 */',
        'startLine' => 147,
        'endLine' => 147,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'isInstallable' => 
      array (
        'name' => 'isInstallable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether this entity is installable.
 *
 * For example, a default view might not be installable if the base table
 * doesn\'t exist.
 *
 * @return bool
 *   TRUE if the entity is installable, FALSE otherwise.
 */',
        'startLine' => 158,
        'endLine' => 158,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'trustData' => 
      array (
        'name' => 'trustData',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets that the data should be trusted.
 *
 * If the data is trusted then dependencies will not be calculated on save and
 * schema will not be used to cast the values. Generally this is only used
 * during module and theme installation. Once the config entity has been saved
 * the data will no longer be marked as trusted. This is an optimization for
 * creation of configuration during installation.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Config\\ConfigInstaller::createConfiguration()
 */',
        'startLine' => 173,
        'endLine' => 173,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'aliasName' => NULL,
      ),
      'hasTrustedData' => 
      array (
        'name' => 'hasTrustedData',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets whether on not the data is trusted.
 *
 * @return bool
 *   TRUE if the configuration data is trusted, FALSE if not.
 */',
        'startLine' => 181,
        'endLine' => 181,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
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