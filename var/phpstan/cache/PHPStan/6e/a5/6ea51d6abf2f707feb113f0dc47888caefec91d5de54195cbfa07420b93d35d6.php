<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/DependencyTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\DependencyTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-cfb8c50f810c71b0e22b818e1af6d5cfcea5e0ebad8b88f375534bd63a52071c-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\DependencyTrait',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/DependencyTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\DependencyTrait',
    'shortName' => 'DependencyTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides a trait for managing an object\'s dependencies.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 72,
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
      'dependencies' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\DependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\DependencyTrait',
        'name' => 'dependencies',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 23,
            'startFilePos' => 223,
            'endTokenPos' => 24,
            'endFilePos' => 224,
          ),
        ),
        'docComment' => '/**
 * The object\'s dependencies.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'addDependency' => 
      array (
        'name' => 'addDependency',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 36,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 43,
            'endColumn' => 47,
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
 * Adds a dependency.
 *
 * @param string $type
 *   Type of dependency being added: \'module\', \'theme\', \'config\', \'content\'.
 * @param string $name
 *   If $type is \'module\' or \'theme\', the name of the module or theme. If
 *   $type is \'config\' or \'content\', the result of
 *   EntityInterface::getConfigDependencyName().
 *
 * @see \\Drupal\\Core\\Entity\\EntityInterface::getConfigDependencyName()
 *
 * @return $this
 */',
        'startLine' => 31,
        'endLine' => 45,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\DependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\DependencyTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\DependencyTrait',
        'aliasName' => NULL,
      ),
      'addDependencies' => 
      array (
        'name' => 'addDependencies',
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
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 38,
            'endColumn' => 56,
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
 * Adds multiple dependencies.
 *
 * @param array $dependencies
 *   An array of dependencies keyed by the type of dependency. One example:
 *   @code
 *   [
 *     \'module\' => [
 *       \'node\',
 *       \'field\',
 *       \'image\',
 *     ],
 *   ];
 *   @endcode
 *
 * @see \\Drupal\\Core\\Entity\\DependencyTrait::addDependency
 */',
        'startLine' => 64,
        'endLine' => 70,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\DependencyTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\DependencyTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\DependencyTrait',
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