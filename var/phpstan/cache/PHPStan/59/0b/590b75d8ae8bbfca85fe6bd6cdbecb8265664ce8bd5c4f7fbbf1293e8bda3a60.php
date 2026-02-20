<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Routing/RouteMatchInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Routing\RouteMatchInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-2ba941a2bab2cf8b9fa7de961db113ee97fc8a490fcde234fb0409859904d93c-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Routing/RouteMatchInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Routing',
    'name' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
    'shortName' => 'RouteMatchInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides an interface for classes representing the result of routing.
 *
 * Routing is the process of selecting the best matching candidate from a
 * collection of routes for an incoming request. The relevant properties of a
 * request include the path as well as a list of raw parameter values derived
 * from the URL. If an appropriate route is found, raw parameter values will be
 * upcast automatically if possible.
 *
 * The route match object contains useful information about the selected route
 * as well as the raw and upcast parameters derived from the incoming
 * request.
 *
 * @ingroup routing
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 20,
    'endLine' => 99,
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
      'getRouteName' => 
      array (
        'name' => 'getRouteName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the route name.
 *
 * @return string|null
 *   The route name. NULL if no route is matched.
 */',
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Routing',
        'declaringClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'implementingClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'currentClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'aliasName' => NULL,
      ),
      'getRouteObject' => 
      array (
        'name' => 'getRouteObject',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the route object.
 *
 * @return \\Symfony\\Component\\Routing\\Route|null
 *   The route object. NULL if no route is matched.
 */',
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Routing',
        'declaringClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'implementingClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'currentClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'aliasName' => NULL,
      ),
      'getParameter' => 
      array (
        'name' => 'getParameter',
        'parameters' => 
        array (
          'parameter_name' => 
          array (
            'name' => 'parameter_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 32,
            'endColumn' => 46,
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
 * Returns the processed value of a named route parameter.
 *
 * Raw URL parameters are processed by the parameter conversion system, which
 * does operations such as converting entity ID parameters to fully-loaded
 * entities. For example, the path node/12345 would have a raw node ID
 * parameter value of 12345, while the processed parameter value would be the
 * corresponding loaded node object.
 *
 * @param string $parameter_name
 *   The parameter name.
 *
 * @return mixed|null
 *   The parameter value. NULL if the route doesn\'t define the parameter or
 *   if the parameter value can\'t be determined from the request.
 *
 * @see \\Drupal\\Core\\Routing\\RouteMatchInterface::getRawParameter()
 */',
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 3,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Routing',
        'declaringClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'implementingClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'currentClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'aliasName' => NULL,
      ),
      'getParameters' => 
      array (
        'name' => 'getParameters',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the bag of all processed route parameters.
 *
 * Raw URL parameters are processed by the parameter conversion system, which
 * does operations such as converting entity ID parameters to fully-loaded
 * entities. For example, the path node/12345 would have a raw node ID
 * parameter value of 12345, while the processed parameter value would be the
 * corresponding loaded node object.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\ParameterBag
 *   The parameter bag.
 *
 * @see \\Drupal\\Core\\Routing\\RouteMatchInterface::getRawParameters()
 */',
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Routing',
        'declaringClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'implementingClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'currentClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'aliasName' => NULL,
      ),
      'getRawParameter' => 
      array (
        'name' => 'getRawParameter',
        'parameters' => 
        array (
          'parameter_name' => 
          array (
            'name' => 'parameter_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 35,
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
 * Returns the raw value of a named route parameter.
 *
 * @param string $parameter_name
 *   The parameter name.
 *
 * @return string|null
 *   The raw (non-upcast) parameter value. NULL if the route doesn\'t define
 *   the parameter or if the raw parameter value can\'t be determined from the
 *   request.
 *
 * @see \\Drupal\\Core\\Routing\\RouteMatchInterface::getParameter()
 */',
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Routing',
        'declaringClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'implementingClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'currentClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'aliasName' => NULL,
      ),
      'getRawParameters' => 
      array (
        'name' => 'getRawParameters',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the bag of all raw route parameters.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\ParameterBag
 *   The parameter bag.
 *
 * @see \\Drupal\\Core\\Routing\\RouteMatchInterface::getParameters()
 */',
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Routing',
        'declaringClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'implementingClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        'currentClassName' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
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