<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Hook/Order/OrderInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Hook\Order\OrderInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5864bcc13c47f08aaf2d7bcebe92a3fe56d8bfdb4f968b02e0b62dd461ddc384-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Hook\\Order\\OrderInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Hook/Order/OrderInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Hook\\Order',
    'name' => 'Drupal\\Core\\Hook\\Order\\OrderInterface',
    'shortName' => 'OrderInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for order specifiers used in hook attributes.
 *
 * Objects implementing this interface allow for relative ordering of hooks.
 * These objects are passed as an order parameter to a Hook or ReorderHook
 * attribute.
 * Order::First and Order::Last are simple order operations that move the hook
 * implementation to the first or last position of hooks at the time the order
 * directive is executed.
 *   @code
 *   #[Hook(\'custom_hook\', order: Order::First)]
 *   @endcode
 * OrderBefore and OrderAfter take additional parameters
 * for ordering. See Drupal\\Core\\Hook\\Order\\RelativeOrderBase.
 *   @code
 *   #[Hook(\'custom_hook\', order: new OrderBefore([\'other_module\']))]
 *   @endcode
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 27,
    'endLine' => 42,
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
      'getOperation' => 
      array (
        'name' => 'getOperation',
        'parameters' => 
        array (
          'identifier' => 
          array (
            'name' => 'identifier',
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
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 32,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Hook\\OrderOperation\\OrderOperation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets order operations specified by this object.
 *
 * @param string $identifier
 *   Identifier of the implementation to move to a new position. The format
 *   is the class followed by "::" then the method name. For example,
 *   "Drupal\\my_module\\Hook\\MyModuleHooks::methodName".
 *
 * @return \\Drupal\\Core\\Hook\\OrderOperation\\OrderOperation
 *   Order operation to apply to a hook implementation list.
 */',
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 67,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Hook\\Order',
        'declaringClassName' => 'Drupal\\Core\\Hook\\Order\\OrderInterface',
        'implementingClassName' => 'Drupal\\Core\\Hook\\Order\\OrderInterface',
        'currentClassName' => 'Drupal\\Core\\Hook\\Order\\OrderInterface',
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