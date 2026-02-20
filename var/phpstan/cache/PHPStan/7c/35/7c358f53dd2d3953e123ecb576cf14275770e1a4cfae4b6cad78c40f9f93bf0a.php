<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/BundleEntityStorageInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\BundleEntityStorageInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c42b1019cabcadc6445e6e9b13729c10354e1b626dec6e0ccae8214aae5a4af1-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\BundleEntityStorageInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/BundleEntityStorageInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\BundleEntityStorageInterface',
    'shortName' => 'BundleEntityStorageInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A storage that supports entities with bundle specific classes.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 25,
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
      'getBundleFromClass' => 
      array (
        'name' => 'getBundleFromClass',
        'parameters' => 
        array (
          'class_name' => 
          array (
            'name' => 'class_name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
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
            'startColumn' => 38,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the bundle name for a provided class name.
 *
 * @param string $class_name
 *   The class name to check.
 *
 * @return string|null
 *   The bundle name of the class provided or NULL if unable to determine the
 *   bundle from the provided class.
 *
 * @throws \\Drupal\\Core\\Entity\\Exception\\AmbiguousBundleClassException
 *   Thrown when multiple bundles are using the provided class.
 */',
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 3,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\BundleEntityStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\BundleEntityStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\BundleEntityStorageInterface',
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