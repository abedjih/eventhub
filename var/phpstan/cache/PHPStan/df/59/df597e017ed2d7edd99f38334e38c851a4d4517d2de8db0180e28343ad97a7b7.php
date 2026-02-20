<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/TraversableTypedDataInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\TypedData\TraversableTypedDataInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-fff688519ebeeff520ffb9e424e45e54364ad6392de377f514cd60933d549b87-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/TypedData/TraversableTypedDataInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\TypedData',
    'name' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
    'shortName' => 'TraversableTypedDataInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * An interface for typed data objects that can be traversed.
 *
 * @template I of int|string
 * @template T of \\Drupal\\Core\\TypedData\\TypedDataInterface
 * @extends \\Traversable<I, T>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 24,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\TypedData\\TypedDataInterface',
      1 => 'Traversable',
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
      'onChange' => 
      array (
        'name' => 'onChange',
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
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 28,
            'endColumn' => 32,
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
 * React to changes to a child property or item.
 *
 * Note that this is invoked after any changes have been applied.
 *
 * @param string $name
 *   The name of the property or the delta of the list item which is changed.
 */',
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\TypedData',
        'declaringClassName' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
        'implementingClassName' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
        'currentClassName' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
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