<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Access/AccessResultReasonInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Access\AccessResultReasonInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-15c8bc64570f731f3379cf91a26725772cf121300da015148b19ae9c801d1119-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Access/AccessResultReasonInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Access',
    'name' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
    'shortName' => 'AccessResultReasonInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for access result value objects with stored reason for developers.
 *
 * For example, a developer can specify the reason for forbidden access:
 * @code
 * new AccessResultForbidden(\'You are not authorized to hack core\');
 * @endcode
 *
 * @see \\Drupal\\Core\\Access\\AccessResultInterface
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 37,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Access\\AccessResultInterface',
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
      'getReason' => 
      array (
        'name' => 'getReason',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the reason for this access result.
 *
 * @return string
 *   The reason of this access result or an empty string if no reason is
 *   provided.
 */',
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
        'aliasName' => NULL,
      ),
      'setReason' => 
      array (
        'name' => 'setReason',
        'parameters' => 
        array (
          'reason' => 
          array (
            'name' => 'reason',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
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
 * Sets the reason for this access result.
 *
 * @param string|null $reason
 *   The reason of this access result or NULL if no reason is provided.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultInterface
 *   The access result instance.
 */',
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
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