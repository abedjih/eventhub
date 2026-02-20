<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Form/ConfigFormBaseTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Form\ConfigFormBaseTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-08205dffe9b19c858df3ff49878bd243a26c83cf520ced0faa89e5914c62302e-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Form/ConfigFormBaseTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Form',
    'name' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
    'shortName' => 'ConfigFormBaseTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides access to configuration for forms.
 *
 * This trait provides a config() method that returns override free and mutable
 * config objects if the configuration name is in the array returned by the
 * getEditableConfigNames() implementation.
 *
 * Forms that present configuration to the user have to take care not to save
 * configuration overrides to the stored configuration since overrides are often
 * environment specific. Default values of form elements should be obtained from
 * override free configuration objects. However, if a form reacts to
 * configuration in any way, for example sends an email to the system.site:mail
 * address, then it is important that the value comes from a configuration
 * object with overrides. Therefore, override free and editable configuration
 * objects are limited to those listed by the getEditableConfigNames() method.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 68,
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
      'config' => 
      array (
        'name' => 'config',
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
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 29,
            'endColumn' => 33,
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
 * Retrieves a configuration object.
 *
 * @param string $name
 *   The name of the configuration object to retrieve. The name corresponds to
 *   a configuration file. For Drupal::config(\'my_module.admin\'), the config
 *   object returned will contain the contents of node.admin configuration
 *   file.
 *
 * @return \\Drupal\\Core\\Config\\Config|\\Drupal\\Core\\Config\\ImmutableConfig
 *   An editable configuration object if the given name is listed in the
 *   getEditableConfigNames() method or an immutable configuration object if
 *   not.
 */',
        'startLine' => 39,
        'endLine' => 57,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
        'aliasName' => NULL,
      ),
      'getEditableConfigNames' => 
      array (
        'name' => 'getEditableConfigNames',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the configuration names that will be editable.
 *
 * @return array
 *   An array of configuration object names that are editable if called in
 *   conjunction with the trait\'s config() method.
 */',
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 3,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
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