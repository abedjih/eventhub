<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Access/AccessibleInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Access\AccessibleInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c910d00d67e67d3d5c5a386f9e47037dc5669075a79b6e251bb7aa279fa14fcb-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Access\\AccessibleInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Access/AccessibleInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Access',
    'name' => 'Drupal\\Core\\Access\\AccessibleInterface',
    'shortName' => 'AccessibleInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for checking access.
 *
 * @ingroup entity_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 34,
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
      'access' => 
      array (
        'name' => 'access',
        'parameters' => 
        array (
          'operation' => 
          array (
            'name' => 'operation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 26,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'account' => 
          array (
            'name' => 'account',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 32,
                'endLine' => 32,
                'startTokenPos' => 38,
                'startFilePos' => 1085,
                'endTokenPos' => 38,
                'endFilePos' => 1088,
              ),
            ),
            'type' => 
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
                      'name' => 'Drupal\\Core\\Session\\AccountInterface',
                      'isIdentifier' => false,
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 38,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'return_as_object' => 
          array (
            'name' => 'return_as_object',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 32,
                'endLine' => 32,
                'startTokenPos' => 45,
                'startFilePos' => 1111,
                'endTokenPos' => 45,
                'endFilePos' => 1115,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 73,
            'endColumn' => 97,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks data value access.
 *
 * @param string $operation
 *   The operation to be performed.
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   (optional) The user for which to check access, or NULL to check access
 *   for the current user. Defaults to NULL.
 * @param bool $return_as_object
 *   (optional) Defaults to FALSE.
 *
 * @return ($return_as_object is true ? \\Drupal\\Core\\Access\\AccessResultInterface : bool)
 *   The access result. Returns a boolean if $return_as_object is FALSE (this
 *   is the default) and otherwise an AccessResultInterface object.
 *   When a boolean is returned, the result of AccessInterface::isAllowed() is
 *   returned, i.e. TRUE means access is explicitly allowed, FALSE means
 *   access is either explicitly forbidden or "no opinion".
 */',
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 99,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessibleInterface',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessibleInterface',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessibleInterface',
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