<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Access/AccessResult.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Access\AccessResult
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-50e371f8d4506bbb394b73e2e940e5a2864bd84440cfe55ecb53fa1ab3b5a551-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Access\\AccessResult',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Access/AccessResult.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Access',
    'name' => 'Drupal\\Core\\Access\\AccessResult',
    'shortName' => 'AccessResult',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Value object for passing an access result with cacheability metadata.
 *
 * The access result itself — excluding the cacheability metadata — is
 * immutable. There are subclasses for each of the three possible access results
 * themselves:
 *
 * @see \\Drupal\\Core\\Access\\AccessResultAllowed
 * @see \\Drupal\\Core\\Access\\AccessResultForbidden
 * @see \\Drupal\\Core\\Access\\AccessResultNeutral
 *
 * When using ::orIf() and ::andIf(), cacheability metadata will be merged
 * accordingly as well.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 424,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Access\\AccessResultInterface',
      1 => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'neutral' => 
      array (
        'name' => 'neutral',
        'parameters' => 
        array (
          'reason' => 
          array (
            'name' => 'reason',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 39,
                'endLine' => 39,
                'startTokenPos' => 68,
                'startFilePos' => 1295,
                'endTokenPos' => 68,
                'endFilePos' => 1298,
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
            'startColumn' => 34,
            'endColumn' => 47,
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
 * Creates an AccessResultInterface object with isNeutral() === TRUE.
 *
 * @param string|null $reason
 *   (optional) The reason why access is neutral. Intended for developers,
 *   hence not translatable.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultNeutral
 *   isNeutral() will be TRUE.
 */',
        'startLine' => 39,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'allowed' => 
      array (
        'name' => 'allowed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates an AccessResultInterface object with isAllowed() === TRUE.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultAllowed
 *   isAllowed() will be TRUE.
 */',
        'startLine' => 50,
        'endLine' => 52,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'forbidden' => 
      array (
        'name' => 'forbidden',
        'parameters' => 
        array (
          'reason' => 
          array (
            'name' => 'reason',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 64,
                'endLine' => 64,
                'startTokenPos' => 140,
                'startFilePos' => 2033,
                'endTokenPos' => 140,
                'endFilePos' => 2036,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 36,
            'endColumn' => 49,
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
 * Creates an AccessResultInterface object with isForbidden() === TRUE.
 *
 * @param string|null $reason
 *   (optional) The reason why access is forbidden. Intended for developers,
 *   hence not translatable.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultForbidden
 *   isForbidden() will be TRUE.
 */',
        'startLine' => 64,
        'endLine' => 67,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'allowedIf' => 
      array (
        'name' => 'allowedIf',
        'parameters' => 
        array (
          'condition' => 
          array (
            'name' => 'condition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 79,
            'endLine' => 79,
            'startColumn' => 36,
            'endColumn' => 45,
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
 * Creates an allowed or neutral access result.
 *
 * @param bool $condition
 *   The condition to evaluate.
 *
 * @return \\Drupal\\Core\\Access\\AccessResult
 *   If $condition is TRUE, isAllowed() will be TRUE, otherwise isNeutral()
 *   will be TRUE.
 */',
        'startLine' => 79,
        'endLine' => 81,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'forbiddenIf' => 
      array (
        'name' => 'forbiddenIf',
        'parameters' => 
        array (
          'condition' => 
          array (
            'name' => 'condition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 96,
            'endLine' => 96,
            'startColumn' => 38,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'reason' => 
          array (
            'name' => 'reason',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 96,
                'endLine' => 96,
                'startTokenPos' => 228,
                'startFilePos' => 3024,
                'endTokenPos' => 228,
                'endFilePos' => 3027,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 96,
            'endLine' => 96,
            'startColumn' => 50,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a forbidden or neutral access result.
 *
 * @param bool $condition
 *   The condition to evaluate.
 * @param string|null $reason
 *   (optional) The reason why access is forbidden. Intended for developers,
 *   hence not translatable.
 *
 * @return \\Drupal\\Core\\Access\\AccessResult
 *   If $condition is TRUE, isForbidden() will be TRUE, otherwise isNeutral()
 *   will be TRUE.
 */',
        'startLine' => 96,
        'endLine' => 98,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'allowedIfHasPermission' => 
      array (
        'name' => 'allowedIfHasPermission',
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
            'startLine' => 114,
            'endLine' => 114,
            'startColumn' => 49,
            'endColumn' => 73,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'permission' => 
          array (
            'name' => 'permission',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 114,
            'endLine' => 114,
            'startColumn' => 76,
            'endColumn' => 86,
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
 * Creates an access result if the permission is present, neutral otherwise.
 *
 * Checks the permission and adds a \'user.permissions\' cache context.
 *
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The account for which to check a permission.
 * @param string $permission
 *   The permission to check for.
 *
 * @return \\Drupal\\Core\\Access\\AccessResult
 *   If the account has the permission, isAllowed() will be TRUE, otherwise
 *   isNeutral() will be TRUE.
 */',
        'startLine' => 114,
        'endLine' => 121,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'allowedIfHasPermissions' => 
      array (
        'name' => 'allowedIfHasPermissions',
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
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 50,
            'endColumn' => 74,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'permissions' => 
          array (
            'name' => 'permissions',
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
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 77,
            'endColumn' => 94,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'conjunction' => 
          array (
            'name' => 'conjunction',
            'default' => 
            array (
              'code' => '\'AND\'',
              'attributes' => 
              array (
                'startLine' => 140,
                'endLine' => 140,
                'startTokenPos' => 358,
                'startFilePos' => 4774,
                'endTokenPos' => 358,
                'endFilePos' => 4778,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 97,
            'endColumn' => 116,
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
 * Creates an access result if the permissions are present, neutral otherwise.
 *
 * Checks the permission and adds a \'user.permissions\' cache contexts.
 *
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The account for which to check permissions.
 * @param array $permissions
 *   The permissions to check.
 * @param string $conjunction
 *   (optional) \'AND\' if all permissions are required, \'OR\' in case just one.
 *   Defaults to \'AND\'.
 *
 * @return \\Drupal\\Core\\Access\\AccessResult
 *   If the account has the permissions, isAllowed() will be TRUE, otherwise
 *   isNeutral() will be TRUE.
 */',
        'startLine' => 140,
        'endLine' => 176,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
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
 * {@inheritdoc}
 *
 * @see \\Drupal\\Core\\Access\\AccessResultAllowed
 */',
        'startLine' => 183,
        'endLine' => 185,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
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
 * {@inheritdoc}
 *
 * @see \\Drupal\\Core\\Access\\AccessResultForbidden
 */',
        'startLine' => 192,
        'endLine' => 194,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
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
 * {@inheritdoc}
 *
 * @see \\Drupal\\Core\\Access\\AccessResultNeutral
 */',
        'startLine' => 201,
        'endLine' => 203,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'getCacheContexts' => 
      array (
        'name' => 'getCacheContexts',
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
        'startLine' => 208,
        'endLine' => 210,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'getCacheTags' => 
      array (
        'name' => 'getCacheTags',
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
        'startLine' => 215,
        'endLine' => 217,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'getCacheMaxAge' => 
      array (
        'name' => 'getCacheMaxAge',
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
        'startLine' => 222,
        'endLine' => 224,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'resetCacheContexts' => 
      array (
        'name' => 'resetCacheContexts',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets cache contexts (to the empty array).
 *
 * @return $this
 */',
        'startLine' => 231,
        'endLine' => 234,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'resetCacheTags' => 
      array (
        'name' => 'resetCacheTags',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets cache tags (to the empty array).
 *
 * @return $this
 */',
        'startLine' => 241,
        'endLine' => 244,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'setCacheMaxAge' => 
      array (
        'name' => 'setCacheMaxAge',
        'parameters' => 
        array (
          'max_age' => 
          array (
            'name' => 'max_age',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 34,
            'endColumn' => 41,
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
 * Sets the maximum age for which this access result may be cached.
 *
 * @param int $max_age
 *   The maximum time in seconds that this access result may be cached.
 *
 * @return $this
 */',
        'startLine' => 254,
        'endLine' => 257,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'cachePerPermissions' => 
      array (
        'name' => 'cachePerPermissions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convenience method, adds the "user.permissions" cache context.
 *
 * @return $this
 */',
        'startLine' => 264,
        'endLine' => 267,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'cachePerUser' => 
      array (
        'name' => 'cachePerUser',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convenience method, adds the "user" cache context.
 *
 * @return $this
 */',
        'startLine' => 274,
        'endLine' => 277,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
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
            'startLine' => 282,
            'endLine' => 282,
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
 * {@inheritdoc}
 */',
        'startLine' => 282,
        'endLine' => 338,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
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
            'startLine' => 343,
            'endLine' => 343,
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
 * {@inheritdoc}
 */',
        'startLine' => 343,
        'endLine' => 392,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'aliasName' => NULL,
      ),
      'inheritCacheability' => 
      array (
        'name' => 'inheritCacheability',
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
            'startLine' => 408,
            'endLine' => 408,
            'startColumn' => 39,
            'endColumn' => 66,
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
 * Inherits the cacheability of the other access result, if any.
 *
 * This method differs from addCacheableDependency() in how it handles
 * max-age, because it is designed to inherit the cacheability of the second
 * operand in the andIf() and orIf() operations. There, the situation
 * "allowed, max-age=0 OR allowed, max-age=1000" needs to yield max-age 1000
 * as the end result.
 *
 * @param \\Drupal\\Core\\Access\\AccessResultInterface $other
 *   The other access result, whose cacheability (if any) to inherit.
 *
 * @return $this
 */',
        'startLine' => 408,
        'endLine' => 422,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResult',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResult',
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