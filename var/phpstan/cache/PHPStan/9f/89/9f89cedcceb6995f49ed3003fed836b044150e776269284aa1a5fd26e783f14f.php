<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityAccessControlHandlerInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityAccessControlHandlerInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c1a5eeb4c24a854bd2a3421dee1c962d8a2001f3afb957b12b029ce9688e9ce5-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityAccessControlHandlerInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
    'shortName' => 'EntityAccessControlHandlerInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for entity access control handlers.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 115,
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
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 26,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 51,
            'endColumn' => 60,
            'parameterIndex' => 1,
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
                'startLine' => 39,
                'endLine' => 39,
                'startTokenPos' => 58,
                'startFilePos' => 1631,
                'endTokenPos' => 58,
                'endFilePos' => 1634,
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
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 63,
            'endColumn' => 95,
            'parameterIndex' => 2,
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
                'startLine' => 39,
                'endLine' => 39,
                'startTokenPos' => 65,
                'startFilePos' => 1657,
                'endTokenPos' => 65,
                'endFilePos' => 1661,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 98,
            'endColumn' => 122,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks access to an operation on a given entity or entity translation.
 *
 * Use \\Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface::createAccess()
 * to check access to create an entity.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity for which to check access.
 * @param string $operation
 *   The operation access should be checked for.
 *   Usually one of "view", "view label", "update" or "delete".
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   (optional) The user session for which to check access, or NULL to check
 *   access for the current user. Defaults to NULL.
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
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 3,
        'endColumn' => 124,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'aliasName' => NULL,
      ),
      'createAccess' => 
      array (
        'name' => 'createAccess',
        'parameters' => 
        array (
          'entity_bundle' => 
          array (
            'name' => 'entity_bundle',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 81,
                'startFilePos' => 2774,
                'endTokenPos' => 81,
                'endFilePos' => 2777,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 32,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'account' => 
          array (
            'name' => 'account',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 91,
                'startFilePos' => 2809,
                'endTokenPos' => 91,
                'endFilePos' => 2812,
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
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 55,
            'endColumn' => 87,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'context' => 
          array (
            'name' => 'context',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 100,
                'startFilePos' => 2832,
                'endTokenPos' => 101,
                'endFilePos' => 2833,
              ),
            ),
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
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 90,
            'endColumn' => 108,
            'parameterIndex' => 2,
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
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 108,
                'startFilePos' => 2856,
                'endTokenPos' => 108,
                'endFilePos' => 2860,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 111,
            'endColumn' => 135,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks access to create an entity.
 *
 * @param string $entity_bundle
 *   (optional) The bundle of the entity. Required if the entity supports
 *   bundles, defaults to NULL otherwise.
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   (optional) The user session for which to check access, or NULL to check
 *   access for the current user. Defaults to NULL.
 * @param array $context
 *   (optional) An array of key-value pairs to pass additional context when
 *   needed.
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
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 137,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'aliasName' => NULL,
      ),
      'resetCache' => 
      array (
        'name' => 'resetCache',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clears all cached access checks.
 */',
        'startLine' => 68,
        'endLine' => 68,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'aliasName' => NULL,
      ),
      'setModuleHandler' => 
      array (
        'name' => 'setModuleHandler',
        'parameters' => 
        array (
          'module_handler' => 
          array (
            'name' => 'module_handler',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 36,
            'endColumn' => 73,
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
 * Sets the module handler for this access control handler.
 *
 * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
 *   The module handler.
 *
 * @return $this
 */',
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 3,
        'endColumn' => 75,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'aliasName' => NULL,
      ),
      'fieldAccess' => 
      array (
        'name' => 'fieldAccess',
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
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 31,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'field_definition' => 
          array (
            'name' => 'field_definition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 43,
            'endColumn' => 84,
            'parameterIndex' => 1,
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
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 160,
                'startFilePos' => 5098,
                'endTokenPos' => 160,
                'endFilePos' => 5101,
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
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 87,
            'endColumn' => 119,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'items' => 
          array (
            'name' => 'items',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 170,
                'startFilePos' => 5137,
                'endTokenPos' => 170,
                'endFilePos' => 5140,
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
                      'name' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 122,
            'endColumn' => 158,
            'parameterIndex' => 3,
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
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 177,
                'startFilePos' => 5163,
                'endTokenPos' => 177,
                'endFilePos' => 5167,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 161,
            'endColumn' => 185,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks access to an operation on a given entity field.
 *
 * This method does not determine whether access is granted to the entity
 * itself, only the specific field. Callers are responsible for ensuring that
 * entity access is also respected, for example by using
 * \\Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface::access().
 *
 * @param string $operation
 *   The operation access should be checked for. Usually one of "view" or
 *   "edit". Unlike entity access, for field access there is no distinction
 *   between creating and updating.
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The field definition.
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   (optional) The user session for which to check access, or NULL to check
 *   access for the current user. Defaults to NULL.
 * @param \\Drupal\\Core\\Field\\FieldItemListInterface $items
 *   (optional) The field values for which to check access, or NULL if access
 *    is checked for the field definition, without any specific value
 *    available. Defaults to NULL.
 * @param bool $return_as_object
 *   (optional) Defaults to FALSE.
 *
 * @return ($return_as_object is true ? \\Drupal\\Core\\Access\\AccessResultInterface : bool)
 *   The access result. Returns a boolean if $return_as_object is FALSE (this
 *   is the default) and otherwise an AccessResultInterface object.
 *   When a boolean is returned, the result of AccessInterface::isAllowed() is
 *   returned, i.e. TRUE means access is explicitly allowed, FALSE means
 *   access is either explicitly forbidden or "no opinion".
 *
 * @see \\Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface::access()
 */',
        'startLine' => 113,
        'endLine' => 113,
        'startColumn' => 3,
        'endColumn' => 187,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
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