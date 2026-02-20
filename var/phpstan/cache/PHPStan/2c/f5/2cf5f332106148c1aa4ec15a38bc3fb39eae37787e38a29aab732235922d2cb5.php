<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Session/AccountProxyInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Session\AccountProxyInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c11dae9fd33ceffbf9482f11d6f6c0121240d2f12b295bcfaa83653be26cfdd9-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Session\\AccountProxyInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Session/AccountProxyInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Session',
    'name' => 'Drupal\\Core\\Session\\AccountProxyInterface',
    'shortName' => 'AccountProxyInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for a service which has the current account stored.
 *
 * It is generally more useful to use \\Drupal\\Core\\Session\\AccountInterface
 * unless one specifically needs the proxying features of this interface.
 *
 * @see \\Drupal\\Core\\Session\\AccountInterface
 *
 * @ingroup user_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 51,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Session\\AccountInterface',
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
      'setAccount' => 
      array (
        'name' => 'setAccount',
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
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 30,
            'endColumn' => 54,
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
 * Sets the currently wrapped account.
 *
 * Setting the current account is highly discouraged! Instead, make sure to
 * inject the desired user object into the dependent code directly.
 *
 * A preferable method of account impersonation is to use
 * \\Drupal\\Core\\Session\\AccountSwitcherInterface::switchTo() and
 * \\Drupal\\Core\\Session\\AccountSwitcherInterface::switchBack().
 *
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The current account.
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 3,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountProxyInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountProxyInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountProxyInterface',
        'aliasName' => NULL,
      ),
      'getAccount' => 
      array (
        'name' => 'getAccount',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the currently wrapped account.
 *
 * @return \\Drupal\\Core\\Session\\AccountInterface
 *   The current account.
 */',
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountProxyInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountProxyInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountProxyInterface',
        'aliasName' => NULL,
      ),
      'setInitialAccountId' => 
      array (
        'name' => 'setInitialAccountId',
        'parameters' => 
        array (
          'account_id' => 
          array (
            'name' => 'account_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 39,
            'endColumn' => 49,
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
 * Sets the id of the initial account.
 *
 * Never use this method, its sole purpose is to work around weird effects
 * during mid-request container rebuilds.
 *
 * @param int $account_id
 *   The id of the initial account.
 */',
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Session',
        'declaringClassName' => 'Drupal\\Core\\Session\\AccountProxyInterface',
        'implementingClassName' => 'Drupal\\Core\\Session\\AccountProxyInterface',
        'currentClassName' => 'Drupal\\Core\\Session\\AccountProxyInterface',
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