<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Access/AccessResultInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Access\AccessResultInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-386144c52ec1df841d480526f00a85a27fdb1aaeea74f7eb38e18284d3075d26-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Access/AccessResultInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Access',
    'name' => 'Drupal\\Core\\Access\\AccessResultInterface',
    'shortName' => 'AccessResultInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for access result value objects.
 *
 * IMPORTANT NOTE: You have to call isAllowed() when you want to know whether
 * someone has access. Just using
 * @code
 * if ($access_result) {
 *   // The user has access!
 * }
 * else {
 *   // The user doesn\'t have access!
 * }
 * @endcode
 * would never enter the else-statement and hence introduce a critical security
 * issue.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 108,
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
      'isAllowed' => 
      array (
        'name' => 'isAllowed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether this access result indicates access is explicitly allowed.
 *
 * Call this method to check whether someone has access, to convert an access
 * result object to boolean.
 *
 * @return bool
 *   When TRUE then isForbidden() and isNeutral() are FALSE.
 */',
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'aliasName' => NULL,
      ),
      'isForbidden' => 
      array (
        'name' => 'isForbidden',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether this access result indicates access is explicitly forbidden.
 *
 * Call this when optimizing an access checker (for hook_entity_access() or a
 * route requirement): if this is TRUE, the final result will be forbidden and
 * no further checking is necessary.
 *
 * Do not use this method to decide whether someone has access, to convert an
 * access result to boolean: just because this returns FALSE, the end result
 * might be neutral which is not allowed. Always use isAllowed() for this.
 *
 * @return bool
 *   When TRUE then isAllowed() and isNeutral() are FALSE.
 */',
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'aliasName' => NULL,
      ),
      'isNeutral' => 
      array (
        'name' => 'isNeutral',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether this access result indicates access is not yet determined.
 *
 * @return bool
 *   When TRUE then isAllowed() and isForbidden() are FALSE.
 *
 * @internal
 */',
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'aliasName' => NULL,
      ),
      'orIf' => 
      array (
        'name' => 'orIf',
        'parameters' => 
        array (
          'other' => 
          array (
            'name' => 'other',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Access\\AccessResultInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 24,
            'endColumn' => 51,
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
 * Combine this access result with another using OR.
 *
 * When ORing two access results, the result is:
 * - isForbidden() in either ⇒ isForbidden()
 * - otherwise if isAllowed() in either ⇒ isAllowed()
 * - otherwise both must be isNeutral() ⇒ isNeutral()
 *
 * Truth table:
 * @code
 *   |A N F
 * --+-----
 * A |A A F
 * N |A N F
 * F |F F F
 * @endcode
 *
 * @param \\Drupal\\Core\\Access\\AccessResultInterface $other
 *   The other access result to OR this one with.
 *
 * @return static
 */',
        'startLine' => 82,
        'endLine' => 82,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'aliasName' => NULL,
      ),
      'andIf' => 
      array (
        'name' => 'andIf',
        'parameters' => 
        array (
          'other' => 
          array (
            'name' => 'other',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Access\\AccessResultInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 106,
            'endLine' => 106,
            'startColumn' => 25,
            'endColumn' => 52,
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
 * Combine this access result with another using AND.
 *
 * When AND is performed on two access results, the result is:
 * - isForbidden() in either ⇒ isForbidden()
 * - otherwise, if isAllowed() in both ⇒ isAllowed()
 * - otherwise, one of them is isNeutral()  ⇒ isNeutral()
 *
 * Truth table:
 * @code
 *   |A N F
 * --+-----
 * A |A N F
 * N |N N F
 * F |F F F
 * @endcode
 *
 * @param \\Drupal\\Core\\Access\\AccessResultInterface $other
 *   The other access result to AND this one with.
 *
 * @return static
 */',
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResultInterface',
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