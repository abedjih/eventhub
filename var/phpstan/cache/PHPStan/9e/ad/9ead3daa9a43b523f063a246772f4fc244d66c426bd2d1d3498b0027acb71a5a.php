<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Htmx/HtmxRequestInfoTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Htmx\HtmxRequestInfoTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a1bfe35e746ee7c825c81086b6461194cf58646a788ca71a8c1058772bcaec2b-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Htmx/HtmxRequestInfoTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Htmx',
    'name' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
    'shortName' => 'HtmxRequestInfoTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides methods for getting information about the HTMX request.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 102,
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
      'getRequest' => 
      array (
        'name' => 'getRequest',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the request object.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\Request
 *   The request object.
 */',
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Drupal\\Core\\Htmx',
        'declaringClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'implementingClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'currentClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'aliasName' => NULL,
      ),
      'isHtmxRequest' => 
      array (
        'name' => 'isHtmxRequest',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the request is sent by HTMX.
 *
 * @return bool
 *   TRUE if the \'HX-Request\' header is present.
 */',
        'startLine' => 26,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Htmx',
        'declaringClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'implementingClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'currentClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'aliasName' => NULL,
      ),
      'isHtmxBoosted' => 
      array (
        'name' => 'isHtmxBoosted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the request is boosted by HTMX.
 *
 * @return bool
 *   TRUE if the \'HX-Boosted\' header is present.
 */',
        'startLine' => 36,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Htmx',
        'declaringClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'implementingClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'currentClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'aliasName' => NULL,
      ),
      'getHtmxCurrentUrl' => 
      array (
        'name' => 'getHtmxCurrentUrl',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the URL of the requesting page from an HTMX request header.
 *
 * @return string
 *   The value of the \'HX-Current-URL\' header, or an empty string if not set.
 */',
        'startLine' => 46,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Htmx',
        'declaringClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'implementingClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'currentClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'aliasName' => NULL,
      ),
      'isHtmxHistoryRestoration' => 
      array (
        'name' => 'isHtmxHistoryRestoration',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if if the request is for history restoration.
 *
 * Sent after a miss in the local history cache
 *
 * @return bool
 *   TRUE if the \'HX-History-Restore-Request\' header is present.
 */',
        'startLine' => 58,
        'endLine' => 60,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Htmx',
        'declaringClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'implementingClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'currentClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'aliasName' => NULL,
      ),
      'getHtmxPrompt' => 
      array (
        'name' => 'getHtmxPrompt',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the prompt from an HTMX request header.
 *
 * @return string
 *   The value of the \'HX-Prompt\' header, or an empty string if not set.
 */',
        'startLine' => 68,
        'endLine' => 70,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Htmx',
        'declaringClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'implementingClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'currentClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'aliasName' => NULL,
      ),
      'getHtmxTarget' => 
      array (
        'name' => 'getHtmxTarget',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the target identifier from an HTMX request header.
 *
 * @return string
 *   The value of the \'HX-Target\' header, or an empty string if not set.
 */',
        'startLine' => 78,
        'endLine' => 80,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Htmx',
        'declaringClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'implementingClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'currentClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'aliasName' => NULL,
      ),
      'getHtmxTrigger' => 
      array (
        'name' => 'getHtmxTrigger',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the trigger identifier from an HTMX request header.
 *
 * @return string
 *   The value of the \'HX-Trigger\' header, or an empty string if not set.
 */',
        'startLine' => 88,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Htmx',
        'declaringClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'implementingClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'currentClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'aliasName' => NULL,
      ),
      'getHtmxTriggerName' => 
      array (
        'name' => 'getHtmxTriggerName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the trigger name from an HTMX request header.
 *
 * @return string
 *   The value of the \'HX-Trigger-Name\' header, or an empty string if not set.
 */',
        'startLine' => 98,
        'endLine' => 100,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Htmx',
        'declaringClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'implementingClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
        'currentClassName' => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
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