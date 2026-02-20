<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityAccessControlHandler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityAccessControlHandler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a8e7236c5bc57a4cd7f74333dd223eaa720eaa7f9afefc27391aa4f2cafba17f-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityAccessControlHandler.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
    'shortName' => 'EntityAccessControlHandler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines a default implementation for entity access control handler.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 435,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Entity\\EntityHandlerBase',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'accessCache' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'name' => 'accessCache',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 21,
            'endLine' => 21,
            'startTokenPos' => 56,
            'startFilePos' => 549,
            'endTokenPos' => 57,
            'endFilePos' => 550,
          ),
        ),
        'docComment' => '/**
 * Stores calculated access check results.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entityTypeId' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'name' => 'entityTypeId',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The entity type ID of the access control handler instance.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entityType' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'name' => 'entityType',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Information about the entity type.
 *
 * @var \\Drupal\\Core\\Entity\\EntityTypeInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'viewLabelOperation' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'name' => 'viewLabelOperation',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 45,
            'startTokenPos' => 82,
            'startFilePos' => 1089,
            'endTokenPos' => 82,
            'endFilePos' => 1093,
          ),
        ),
        'docComment' => '/**
 * Allows to grant access to just the labels.
 *
 * By default, the "view label" operation falls back to "view". Set this to
 * TRUE to allow returning different access when just listing entity labels.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 3,
        'endColumn' => 40,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'entity_type' => 
          array (
            'name' => 'entity_type',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 31,
            'endColumn' => 62,
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
 * Constructs an access control handler instance.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition.
 */',
        'startLine' => 53,
        'endLine' => 56,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'aliasName' => NULL,
      ),
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
            'startLine' => 61,
            'endLine' => 61,
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
            'startLine' => 61,
            'endLine' => 61,
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
                'startLine' => 61,
                'endLine' => 61,
                'startTokenPos' => 147,
                'startFilePos' => 1543,
                'endTokenPos' => 147,
                'endFilePos' => 1546,
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
            'startLine' => 61,
            'endLine' => 61,
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
                'startLine' => 61,
                'endLine' => 61,
                'startTokenPos' => 154,
                'startFilePos' => 1569,
                'endTokenPos' => 154,
                'endFilePos' => 1573,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 61,
            'endLine' => 61,
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
 * {@inheritdoc}
 */',
        'startLine' => 61,
        'endLine' => 113,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'aliasName' => NULL,
      ),
      'processAccessHookResults' => 
      array (
        'name' => 'processAccessHookResults',
        'parameters' => 
        array (
          'access' => 
          array (
            'name' => 'access',
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
            'startLine' => 131,
            'endLine' => 131,
            'startColumn' => 47,
            'endColumn' => 59,
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
 * Determines entity access.
 *
 * We grant access to the entity if both of these conditions are met:
 * - No modules say to deny access.
 * - At least one module says to grant access.
 *
 * @param \\Drupal\\Core\\Access\\AccessResultInterface[] $access
 *   An array of access results of the fired access hook.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultInterface
 *   The combined result of the various access checks\' results. All their
 *   cacheability metadata is merged as well.
 *
 * @see \\Drupal\\Core\\Access\\AccessResultInterface::orIf()
 */',
        'startLine' => 131,
        'endLine' => 143,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'aliasName' => NULL,
      ),
      'checkAccess' => 
      array (
        'name' => 'checkAccess',
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
            'startLine' => 162,
            'endLine' => 162,
            'startColumn' => 34,
            'endColumn' => 56,
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
            'startLine' => 162,
            'endLine' => 162,
            'startColumn' => 59,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'account' => 
          array (
            'name' => 'account',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Session\\AccountInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 162,
            'endLine' => 162,
            'startColumn' => 71,
            'endColumn' => 95,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Performs access checks.
 *
 * This method is supposed to be overwritten by extending classes that
 * do their own custom access checking.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
 *   The entity for which to check access.
 * @param string $operation
 *   The entity operation. Usually one of \'view\', \'view label\', \'update\' or
 *   \'delete\'.
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The user for which to check access.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultInterface
 *   The access result.
 */',
        'startLine' => 162,
        'endLine' => 173,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'aliasName' => NULL,
      ),
      'getCache' => 
      array (
        'name' => 'getCache',
        'parameters' => 
        array (
          'cid' => 
          array (
            'name' => 'cid',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 31,
            'endColumn' => 34,
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
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 37,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 49,
            'endColumn' => 57,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'account' => 
          array (
            'name' => 'account',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Session\\AccountInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 60,
            'endColumn' => 84,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Tries to retrieve a previously cached access value from the static cache.
 *
 * @param string $cid
 *   Unique string identifier for the entity/operation, for example the
 *   entity UUID or a custom string.
 * @param string $operation
 *   The entity operation. Usually one of \'view\', \'update\', \'create\' or
 *   \'delete\'.
 * @param string $langcode
 *   The language code for which to check access.
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The user for which to check access.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultInterface|null
 *   The cached AccessResult, or NULL if there is no record for the given
 *   user, operation, langcode and entity in the cache.
 */',
        'startLine' => 193,
        'endLine' => 198,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'aliasName' => NULL,
      ),
      'setCache' => 
      array (
        'name' => 'setCache',
        'parameters' => 
        array (
          'access' => 
          array (
            'name' => 'access',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 219,
            'endLine' => 219,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'cid' => 
          array (
            'name' => 'cid',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 219,
            'endLine' => 219,
            'startColumn' => 40,
            'endColumn' => 43,
            'parameterIndex' => 1,
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
            'startLine' => 219,
            'endLine' => 219,
            'startColumn' => 46,
            'endColumn' => 55,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 219,
            'endLine' => 219,
            'startColumn' => 58,
            'endColumn' => 66,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'account' => 
          array (
            'name' => 'account',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Session\\AccountInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 219,
            'endLine' => 219,
            'startColumn' => 69,
            'endColumn' => 93,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Statically caches whether the given user has access.
 *
 * @param \\Drupal\\Core\\Access\\AccessResultInterface $access
 *   The access result.
 * @param string $cid
 *   Unique string identifier for the entity/operation, for example the
 *   entity UUID or a custom string.
 * @param string $operation
 *   The entity operation. Usually one of \'view\', \'update\', \'create\' or
 *   \'delete\'.
 * @param string $langcode
 *   The language code for which to check access.
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The user for which to check access.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultInterface
 *   Whether the user has access, plus cacheability metadata.
 */',
        'startLine' => 219,
        'endLine' => 222,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
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
 * {@inheritdoc}
 */',
        'startLine' => 227,
        'endLine' => 229,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
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
                'startLine' => 234,
                'endLine' => 234,
                'startTokenPos' => 941,
                'startFilePos' => 8244,
                'endTokenPos' => 941,
                'endFilePos' => 8247,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 234,
            'endLine' => 234,
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
                'startLine' => 234,
                'endLine' => 234,
                'startTokenPos' => 951,
                'startFilePos' => 8279,
                'endTokenPos' => 951,
                'endFilePos' => 8282,
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
            'startLine' => 234,
            'endLine' => 234,
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
                'startLine' => 234,
                'endLine' => 234,
                'startTokenPos' => 960,
                'startFilePos' => 8302,
                'endTokenPos' => 961,
                'endFilePos' => 8303,
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
            'startLine' => 234,
            'endLine' => 234,
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
                'startLine' => 234,
                'endLine' => 234,
                'startTokenPos' => 968,
                'startFilePos' => 8326,
                'endTokenPos' => 968,
                'endFilePos' => 8330,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 234,
            'endLine' => 234,
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
 * {@inheritdoc}
 */',
        'startLine' => 234,
        'endLine' => 270,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'aliasName' => NULL,
      ),
      'checkCreateAccess' => 
      array (
        'name' => 'checkCreateAccess',
        'parameters' => 
        array (
          'account' => 
          array (
            'name' => 'account',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Session\\AccountInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 289,
            'endLine' => 289,
            'startColumn' => 40,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'context' => 
          array (
            'name' => 'context',
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
            'startLine' => 289,
            'endLine' => 289,
            'startColumn' => 67,
            'endColumn' => 80,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'entity_bundle' => 
          array (
            'name' => 'entity_bundle',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 289,
                'endLine' => 289,
                'startTokenPos' => 1294,
                'startFilePos' => 10783,
                'endTokenPos' => 1294,
                'endFilePos' => 10786,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 289,
            'endLine' => 289,
            'startColumn' => 83,
            'endColumn' => 103,
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
 * Performs create access checks.
 *
 * This method is supposed to be overwritten by extending classes that
 * do their own custom access checking.
 *
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The user for which to check access.
 * @param array $context
 *   An array of key-value pairs to pass additional context when needed.
 * @param string|null $entity_bundle
 *   (optional) The bundle of the entity. Required if the entity supports
 *   bundles, defaults to NULL otherwise.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultInterface
 *   The access result.
 */',
        'startLine' => 289,
        'endLine' => 297,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'aliasName' => NULL,
      ),
      'prepareUser' => 
      array (
        'name' => 'prepareUser',
        'parameters' => 
        array (
          'account' => 
          array (
            'name' => 'account',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 308,
                'endLine' => 308,
                'startTokenPos' => 1366,
                'startFilePos' => 11370,
                'endTokenPos' => 1366,
                'endFilePos' => 11373,
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
            'startLine' => 308,
            'endLine' => 308,
            'startColumn' => 34,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Loads the current account object, if it does not exist yet.
 *
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The account interface instance.
 *
 * @return \\Drupal\\Core\\Session\\AccountInterface
 *   Returns the current account object.
 */',
        'startLine' => 308,
        'endLine' => 313,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
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
            'startLine' => 318,
            'endLine' => 318,
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
            'startLine' => 318,
            'endLine' => 318,
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
                'startLine' => 318,
                'endLine' => 318,
                'startTokenPos' => 1423,
                'startFilePos' => 11618,
                'endTokenPos' => 1423,
                'endFilePos' => 11621,
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
            'startLine' => 318,
            'endLine' => 318,
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
                'startLine' => 318,
                'endLine' => 318,
                'startTokenPos' => 1433,
                'startFilePos' => 11657,
                'endTokenPos' => 1433,
                'endFilePos' => 11660,
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
            'startLine' => 318,
            'endLine' => 318,
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
                'startLine' => 318,
                'endLine' => 318,
                'startTokenPos' => 1440,
                'startFilePos' => 11683,
                'endTokenPos' => 1440,
                'endFilePos' => 11687,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 318,
            'endLine' => 318,
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
 * {@inheritdoc}
 */',
        'startLine' => 318,
        'endLine' => 371,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'aliasName' => NULL,
      ),
      'checkFieldAccess' => 
      array (
        'name' => 'checkFieldAccess',
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
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 39,
            'endColumn' => 48,
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
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 51,
            'endColumn' => 92,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'account' => 
          array (
            'name' => 'account',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Session\\AccountInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 95,
            'endColumn' => 119,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'items' => 
          array (
            'name' => 'items',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 394,
                'endLine' => 394,
                'startTokenPos' => 1936,
                'startFilePos' => 15100,
                'endTokenPos' => 1936,
                'endFilePos' => 15103,
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
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 122,
            'endColumn' => 158,
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
 * Default field access as determined by this access control handler.
 *
 * Most fields return AccessResultAllowed by default. It is recommended to use
 * it in conjunction with entity access conditions for robust access control.
 *
 * @param string $operation
 *   The operation access should be checked for.
 *   Usually one of "view" or "edit".
 * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
 *   The field definition.
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The user session for which to check access.
 * @param \\Drupal\\Core\\Field\\FieldItemListInterface $items
 *   (optional) The field values for which to check access, or NULL if access
 *   is checked for the field definition, without any specific value
 *   available. Defaults to NULL.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultInterface
 *   The access result.
 */',
        'startLine' => 394,
        'endLine' => 407,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'aliasName' => NULL,
      ),
      'buildCreateAccessCid' => 
      array (
        'name' => 'buildCreateAccessCid',
        'parameters' => 
        array (
          'context' => 
          array (
            'name' => 'context',
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
            'startLine' => 425,
            'endLine' => 425,
            'startColumn' => 43,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity_bundle' => 
          array (
            'name' => 'entity_bundle',
            'default' => NULL,
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 425,
            'endLine' => 425,
            'startColumn' => 59,
            'endColumn' => 80,
            'parameterIndex' => 1,
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
 * Builds the create access result cache ID.
 *
 * If there is no context other than langcode and entity type id, then the
 * cache id can be simply the bundle. Otherwise, a custom implementation is
 * needed to ensure cacheability, and the default implementation here
 * returns null.
 *
 * @param array $context
 *   The create access context.
 * @param string|null $entity_bundle
 *   The entity bundle, if the entity type has bundles.
 *
 * @return string|null
 *   The create access result cache ID, or null if uncacheable.
 */',
        'startLine' => 425,
        'endLine' => 433,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
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