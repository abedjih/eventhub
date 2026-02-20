<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/ExtendableInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Database\Query\ExtendableInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-274fa68bc3c72142afadb3cbcdea334cc4065ea2d21385bdee1687450451726d-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Database\\Query\\ExtendableInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Database/Query/ExtendableInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Database\\Query',
    'name' => 'Drupal\\Core\\Database\\Query\\ExtendableInterface',
    'shortName' => 'ExtendableInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for extendable query objects.
 *
 * "Extenders" follow the "Decorator" OOP design pattern.  That is, they wrap
 * and "decorate" another object. In our case, they implement the same
 * interface as select queries and wrap a select query, to which they delegate
 * almost all operations. Subclasses of this class may implement additional
 * methods or override existing methods as appropriate. Extenders may also wrap
 * other extender objects, allowing for arbitrarily complex "enhanced" queries.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 32,
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
      'extend' => 
      array (
        'name' => 'extend',
        'parameters' => 
        array (
          'extender_name' => 
          array (
            'name' => 'extender_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 26,
            'endColumn' => 39,
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
 * Enhance this object by wrapping it in an extender object.
 *
 * @param class-string $extender_name
 *   The fully-qualified name of the extender class, without the leading \'\\\'
 *   (for example, Drupal\\my_module\\myExtenderClass). The extender name will
 *   be checked against the current database connection to allow
 *   driver-specific subclasses as well, using the same logic as the query
 *   objects themselves.
 *
 * @return \\Drupal\\Core\\Database\\Query\\ExtendableInterface
 *   The extender object, which now contains a reference to this object.
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Database\\Query',
        'declaringClassName' => 'Drupal\\Core\\Database\\Query\\ExtendableInterface',
        'implementingClassName' => 'Drupal\\Core\\Database\\Query\\ExtendableInterface',
        'currentClassName' => 'Drupal\\Core\\Database\\Query\\ExtendableInterface',
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