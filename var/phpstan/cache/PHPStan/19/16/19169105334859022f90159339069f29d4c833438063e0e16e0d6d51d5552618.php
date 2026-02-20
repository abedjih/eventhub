<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityBundleListenerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityBundleListenerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b70abe8ee44ae85a90109565beed1c4856be381b53c36e21b83d6351ef31e9a7-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityBundleListenerInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
    'shortName' => 'EntityBundleListenerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * An interface for reacting to entity bundle creation and deletion.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 32,
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
      'onBundleCreate' => 
      array (
        'name' => 'onBundleCreate',
        'parameters' => 
        array (
          'bundle' => 
          array (
            'name' => 'bundle',
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
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity_type_id' => 
          array (
            'name' => 'entity_type_id',
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
            'startColumn' => 43,
            'endColumn' => 57,
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
 * Reacts to a bundle being created.
 *
 * @param string $bundle
 *   The name of the bundle created.
 * @param string $entity_type_id
 *   The entity type to which the bundle is bound; e.g. \'node\' or \'user\'.
 */',
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
        'aliasName' => NULL,
      ),
      'onBundleDelete' => 
      array (
        'name' => 'onBundleDelete',
        'parameters' => 
        array (
          'bundle' => 
          array (
            'name' => 'bundle',
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
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity_type_id' => 
          array (
            'name' => 'entity_type_id',
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
            'endColumn' => 57,
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
 * Reacts to a bundle being deleted.
 *
 * This method runs before fields are deleted.
 *
 * @param string $bundle
 *   The name of the bundle being deleted.
 * @param string $entity_type_id
 *   The entity type to which the bundle is bound; e.g. \'node\' or \'user\'.
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
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