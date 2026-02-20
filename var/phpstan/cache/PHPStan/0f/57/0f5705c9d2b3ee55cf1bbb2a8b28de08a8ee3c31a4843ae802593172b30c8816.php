<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Session/AccountInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Session\AccountInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ba8b25ab5d1ba59c5523fad4c68905ea03ddd8f2033b24e053e73c3342d4fe01-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Session\\AccountInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Session/AccountInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Session',
    'name' => 'Drupal\\Core\\Session\\AccountInterface',
    'shortName' => 'AccountInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an account interface which represents the current user.
 *
 * Defines an object that has a user id, roles and can have session data. The
 * interface is implemented both by the global session and the user entity.
 *
 * @ingroup user_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 162,
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
      'ANONYMOUS_ROLE' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'name' => 'ANONYMOUS_ROLE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'anonymous\'',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 18,
            'startTokenPos' => 23,
            'startFilePos' => 396,
            'endTokenPos' => 23,
            'endFilePos' => 406,
          ),
        ),
        'docComment' => '/**
 * Role ID for anonymous users.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 3,
        'endColumn' => 37,
      ),
      'AUTHENTICATED_ROLE' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'name' => 'AUTHENTICATED_ROLE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'authenticated\'',
          'attributes' => 
          array (
            'startLine' => 23,
            'endLine' => 23,
            'startTokenPos' => 34,
            'startFilePos' => 489,
            'endTokenPos' => 34,
            'endFilePos' => 503,
          ),
        ),
        'docComment' => '/**
 * Role ID for authenticated users.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 3,
        'endColumn' => 45,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the user ID or 0 for anonymous.
 *
 * @return int
 *   The user ID.
 */',
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 3,
        'endColumn' => 23,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'aliasName' => NULL,
      ),
      'getRoles' => 
      array (
        'name' => 'getRoles',
        'parameters' => 
        array (
          'exclude_locked_roles' => 
          array (
            'name' => 'exclude_locked_roles',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 43,
                'endLine' => 43,
                'startTokenPos' => 60,
                'startFilePos' => 908,
                'endTokenPos' => 60,
                'endFilePos' => 912,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 28,
            'endColumn' => 56,
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
 * Returns a list of roles.
 *
 * @param bool $exclude_locked_roles
 *   (optional) If TRUE, locked roles (anonymous/authenticated) are not
 *   returned.
 *
 * @return array
 *   List of role IDs.
 */',
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 3,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'aliasName' => NULL,
      ),
      'hasPermission' => 
      array (
        'name' => 'hasPermission',
        'parameters' => 
        array (
          'permission' => 
          array (
            'name' => 'permission',
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
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 33,
            'endColumn' => 50,
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
 * Checks whether a user has a certain permission.
 *
 * @param string $permission
 *   The permission string to check.
 *
 * @return bool
 *   TRUE if the user has the permission, FALSE otherwise.
 */',
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 3,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'aliasName' => NULL,
      ),
      'isAuthenticated' => 
      array (
        'name' => 'isAuthenticated',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns TRUE if the account is authenticated.
 *
 * @return bool
 *   TRUE if the account is authenticated.
 */',
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'aliasName' => NULL,
      ),
      'isAnonymous' => 
      array (
        'name' => 'isAnonymous',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns TRUE if the account is anonymous.
 *
 * @return bool
 *   TRUE if the account is anonymous.
 */',
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'aliasName' => NULL,
      ),
      'getPreferredLangcode' => 
      array (
        'name' => 'getPreferredLangcode',
        'parameters' => 
        array (
          'fallback_to_default' => 
          array (
            'name' => 'fallback_to_default',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 87,
                'endLine' => 87,
                'startTokenPos' => 112,
                'startFilePos' => 2244,
                'endTokenPos' => 112,
                'endFilePos' => 2247,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 40,
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
 * Returns the preferred language code of the account.
 *
 * @param bool $fallback_to_default
 *   (optional) Whether the return value will fall back to the site default
 *   language if the user has no language preference.
 *
 * @return string
 *   Returned language code depends upon following:
 *   - The user preferred language code is returned if set in the account.
 *   - If the user has no preferred language and $fallback_to_default is TRUE
 *     then the site default language code is returned.
 *   - If the user has no preferred language and $fallback_to_default is FALSE
 *     then empty string is returned.
 */',
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'aliasName' => NULL,
      ),
      'getPreferredAdminLangcode' => 
      array (
        'name' => 'getPreferredAdminLangcode',
        'parameters' => 
        array (
          'fallback_to_default' => 
          array (
            'name' => 'fallback_to_default',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 104,
                'endLine' => 104,
                'startTokenPos' => 128,
                'startFilePos' => 2977,
                'endTokenPos' => 128,
                'endFilePos' => 2980,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 104,
            'endLine' => 104,
            'startColumn' => 45,
            'endColumn' => 71,
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
 * Returns the preferred administrative language code of the account.
 *
 * Defines which language is used on administrative pages.
 *
 * @param bool $fallback_to_default
 *   (optional) Whether the return value will fall back to the site default
 *   language if the user has no administration language preference.
 *
 * @return string
 *   The language code that is preferred by the account for administration
 *   pages. If the preferred language is not set or is a language not
 *   configured anymore on the site, the site default is returned or an empty
 *   string is returned (if $fallback_to_default is FALSE).
 */',
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 3,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'aliasName' => NULL,
      ),
      'getAccountName' => 
      array (
        'name' => 'getAccountName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the unaltered login name of this account.
 *
 * @return string
 *   An unsanitized plain-text string with the name of this account that is
 *   used to log in. Only display this name to admins and to the user who owns
 *   this account, and only in the context of the name used to login. For
 *   any other display purposes, use
 *   \\Drupal\\Core\\Session\\AccountInterface::getDisplayName() instead.
 */',
        'startLine' => 116,
        'endLine' => 116,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'aliasName' => NULL,
      ),
      'getDisplayName' => 
      array (
        'name' => 'getDisplayName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the display name of this account.
 *
 * By default, the passed-in object\'s \'name\' property is used if it exists, or
 * else, the site-defined value for the \'anonymous\' variable. However, a
 * module may override this by implementing
 * hook_user_format_name_alter(&$name, $account).
 *
 * @see hook_user_format_name_alter()
 *
 * @return string|\\Drupal\\Component\\Render\\MarkupInterface
 *   Either a string that will be auto-escaped on output or a
 *   MarkupInterface object that is already HTML escaped. Either is safe
 *   to be printed within HTML fragments.
 */',
        'startLine' => 133,
        'endLine' => 133,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'aliasName' => NULL,
      ),
      'getEmail' => 
      array (
        'name' => 'getEmail',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the email address of this account.
 *
 * @return string|null
 *   The email address, or NULL if the account is anonymous or the user does
 *   not have an email address.
 */',
        'startLine' => 142,
        'endLine' => 142,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'aliasName' => NULL,
      ),
      'getTimeZone' => 
      array (
        'name' => 'getTimeZone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the timezone of this account.
 *
 * @return string
 *   Name of the timezone.
 */',
        'startLine' => 150,
        'endLine' => 150,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'aliasName' => NULL,
      ),
      'getLastAccessedTime' => 
      array (
        'name' => 'getLastAccessedTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The timestamp when the account last accessed the site.
 *
 * A value of 0 means the user has never accessed the site.
 *
 * @return int
 *   Timestamp of the last access.
 */',
        'startLine' => 160,
        'endLine' => 160,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountInterface',
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