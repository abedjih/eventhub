<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Url.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Url
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3802f857be54fb0672c99b77f38f1913c1d3a15f540c92f65179729329a78b18-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Url',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Url.php',
      ),
    ),
    'namespace' => 'Drupal\\Core',
    'name' => 'Drupal\\Core\\Url',
    'shortName' => 'Url',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an object that holds information about a URL.
 *
 * In most cases, these should be created with the following methods:
 * - \\Drupal\\Core\\Url::fromRoute()
 * - \\Drupal\\Core\\Url::fromRouteMatch()
 * - \\Drupal\\Core\\Url::fromUri()
 * - \\Drupal\\Core\\Url::fromUserInput()
 *
 * @see \\Drupal\\Core\\Entity\\EntityBase::toUrl()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 30,
    'endLine' => 893,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'urlGenerator' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'name' => 'urlGenerator',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The URL generator.
 *
 * @var \\Drupal\\Core\\Routing\\UrlGeneratorInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'urlAssembler' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'name' => 'urlAssembler',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The unrouted URL assembler.
 *
 * @var \\Drupal\\Core\\Utility\\UnroutedUrlAssemblerInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'accessManager' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'name' => 'accessManager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The access manager.
 *
 * @var \\Drupal\\Core\\Access\\AccessManagerInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'routeName' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'name' => 'routeName',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The route name.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 3,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'routeParameters' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'name' => 'routeParameters',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 117,
            'startFilePos' => 1552,
            'endTokenPos' => 118,
            'endFilePos' => 1553,
          ),
        ),
        'docComment' => '/**
 * The route parameters.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 3,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'options' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'name' => 'options',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 75,
            'endLine' => 75,
            'startTokenPos' => 129,
            'startFilePos' => 1705,
            'endTokenPos' => 130,
            'endFilePos' => 1706,
          ),
        ),
        'docComment' => '/**
 * The URL options.
 *
 * See \\Drupal\\Core\\Url::fromUri() for details on the options.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'external' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'name' => 'external',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 82,
            'endLine' => 82,
            'startTokenPos' => 141,
            'startFilePos' => 1827,
            'endTokenPos' => 141,
            'endFilePos' => 1831,
          ),
        ),
        'docComment' => '/**
 * Indicates whether this object contains an external URL.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 82,
        'endLine' => 82,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'unrouted' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'name' => 'unrouted',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 89,
            'endLine' => 89,
            'startTokenPos' => 152,
            'startFilePos' => 1960,
            'endTokenPos' => 152,
            'endFilePos' => 1964,
          ),
        ),
        'docComment' => '/**
 * Indicates whether this URL is for a URI without a Drupal route.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 89,
        'endLine' => 89,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'uri' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'name' => 'uri',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The non-route URI.
 *
 * Only used if self::$unrouted is TRUE.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 98,
        'endLine' => 98,
        'startColumn' => 3,
        'endColumn' => 17,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'internalPath' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'name' => 'internalPath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Stores the internal path, if already requested by getInternalPath().
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 105,
        'endLine' => 105,
        'startColumn' => 3,
        'endColumn' => 26,
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
          'route_name' => 
          array (
            'name' => 'route_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 127,
            'endLine' => 127,
            'startColumn' => 31,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'route_parameters' => 
          array (
            'name' => 'route_parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 127,
                'endLine' => 127,
                'startTokenPos' => 184,
                'startFilePos' => 2950,
                'endTokenPos' => 185,
                'endFilePos' => 2951,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 127,
            'endLine' => 127,
            'startColumn' => 44,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 127,
                'endLine' => 127,
                'startTokenPos' => 192,
                'startFilePos' => 2965,
                'endTokenPos' => 193,
                'endFilePos' => 2966,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 127,
            'endLine' => 127,
            'startColumn' => 68,
            'endColumn' => 80,
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
 * Constructs a new Url object.
 *
 * In most cases, use Url::fromRoute() or Url::fromUri() rather than
 * constructing Url objects directly in order to avoid ambiguity and make your
 * code more self-documenting.
 *
 * @param string $route_name
 *   The name of the route.
 * @param array $route_parameters
 *   (optional) An associative array of parameter names and values.
 * @param array $options
 *   See \\Drupal\\Core\\Url::fromUri() for details.
 *
 * @see static::fromRoute()
 * @see static::fromUri()
 *
 * @todo Update this documentation for non-routed URIs in
 *   https://www.drupal.org/node/2346787
 */',
        'startLine' => 127,
        'endLine' => 131,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'fromRoute' => 
      array (
        'name' => 'fromRoute',
        'parameters' => 
        array (
          'route_name' => 
          array (
            'name' => 'route_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 36,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'route_parameters' => 
          array (
            'name' => 'route_parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 153,
                'endLine' => 153,
                'startTokenPos' => 244,
                'startFilePos' => 3891,
                'endTokenPos' => 245,
                'endFilePos' => 3892,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 49,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 153,
                'endLine' => 153,
                'startTokenPos' => 252,
                'startFilePos' => 3906,
                'endTokenPos' => 253,
                'endFilePos' => 3907,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 73,
            'endColumn' => 85,
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
 * Creates a new Url object for a URL that has a Drupal route.
 *
 * This method is for URLs that have Drupal routes (that is, most pages
 * generated by Drupal). For non-routed local URIs relative to the base
 * path (like robots.txt) use Url::fromUri() with the base: scheme.
 *
 * @param string $route_name
 *   The name of the route.
 * @param array $route_parameters
 *   (optional) An associative array of route parameter names and values.
 * @param array $options
 *   See \\Drupal\\Core\\Url::fromUri() for details.
 *
 * @return static
 *   A new Url object for a routed (internal to Drupal) URL.
 *
 * @see \\Drupal\\Core\\Url::fromUserInput()
 * @see \\Drupal\\Core\\Url::fromUri()
 */',
        'startLine' => 153,
        'endLine' => 155,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'fromRouteMatch' => 
      array (
        'name' => 'fromRouteMatch',
        'parameters' => 
        array (
          'route_match' => 
          array (
            'name' => 'route_match',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 165,
            'endLine' => 165,
            'startColumn' => 41,
            'endColumn' => 72,
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
 * Creates a new URL object from a route match.
 *
 * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
 *   The route match.
 *
 * @return static
 */',
        'startLine' => 165,
        'endLine' => 172,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'fromUserInput' => 
      array (
        'name' => 'fromUserInput',
        'parameters' => 
        array (
          'user_input' => 
          array (
            'name' => 'user_input',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 210,
            'endLine' => 210,
            'startColumn' => 40,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 210,
                'endLine' => 210,
                'startTokenPos' => 367,
                'startFilePos' => 6426,
                'endTokenPos' => 368,
                'endFilePos' => 6427,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 210,
            'endLine' => 210,
            'startColumn' => 53,
            'endColumn' => 65,
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
 * Creates a Url object for a relative URI reference submitted by user input.
 *
 * Use this method to create a URL for user-entered paths that may or may not
 * correspond to a valid Drupal route.
 *
 * @param string $user_input
 *   User input for a link or path. The first character must be one of the
 *   following characters:
 *   - \'/\': A path within the current site. This path might be to a Drupal
 *     route (e.g., \'/admin\'), to a file (e.g., \'/README.txt\'), or to
 *     something processed by a non-Drupal script (e.g.,
 *     \'/not/a/drupal/page\'). If the path matches a Drupal route, then the
 *     URL generation will include Drupal\'s path processors (e.g.,
 *     language-prefixing and aliasing). Otherwise, the URL generation will
 *     just append the passed-in path to Drupal\'s base path.
 *   - \'?\': A query string for the current page or resource.
 *   - \'#\': A fragment (jump-link) on the current page or resource.
 *   This helps reduce ambiguity for user-entered links and paths, and
 *   supports user interfaces where users may normally use auto-completion
 *   to search for existing resources, but also may type one of these
 *   characters to link to (e.g.) a specific path on the site.
 *   (With regard to the URI specification, the user input is treated as a
 *   @link https://tools.ietf.org/html/rfc3986#section-4.2 relative URI reference @endlink
 *   where the relative part is of type
 *   @link https://tools.ietf.org/html/rfc3986#section-3.3 path-abempty @endlink.)
 * @param array $options
 *   (optional) An array of options. See Url::fromUri() for details.
 *
 * @return static
 *   A new Url object based on user input.
 *
 * @throws \\InvalidArgumentException
 *   Thrown when the user input does not begin with one of the following
 *   characters: \'/\', \'?\', or \'#\'.
 */',
        'startLine' => 210,
        'endLine' => 222,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'fromUri' => 
      array (
        'name' => 'fromUri',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 278,
            'endLine' => 278,
            'startColumn' => 34,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 278,
                'endLine' => 278,
                'startTokenPos' => 474,
                'startFilePos' => 10021,
                'endTokenPos' => 475,
                'endFilePos' => 10022,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 278,
            'endLine' => 278,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Creates a new Url object from a URI.
 *
 * This method is for generating URLs for URIs that:
 * - do not have Drupal routes: both external URLs and unrouted local URIs
 *   like base:robots.txt
 * - do have a Drupal route but have a custom scheme to simplify linking.
 *   Currently, there is only the entity: scheme (This allows URIs of the
 *   form entity:{entity_type}/{entity_id}. For example: entity:node/1
 *   resolves to the entity.node.canonical route with a node parameter of 1.)
 *
 * For URLs that have Drupal routes (that is, most pages generated by Drupal),
 * use Url::fromRoute().
 *
 * @param string $uri
 *   The URI of the resource including the scheme. For user input that may
 *   correspond to a Drupal route, use internal: for the scheme. For paths
 *   that are known not to be handled by the Drupal routing system (such as
 *   static files), use base: for the scheme to get a link relative to the
 *   Drupal base path (like the <base> HTML element). For a link to an entity
 *   you may use entity:{entity_type}/{entity_id} URIs. The internal: scheme
 *   should be avoided except when processing actual user input that may or
 *   may not correspond to a Drupal route. Normally use Url::fromRoute() for
 *   code linking to any Drupal page.
 * @param array $options
 *   (optional) An associative array of additional URL options, with the
 *   following elements:
 *   - \'query\': An array of query key/value-pairs (without any URL-encoding)
 *     to append to the URL.
 *   - \'fragment\': A fragment identifier (named anchor) to append to the URL.
 *     Do not include the leading \'#\' character.
 *   - \'absolute\': Defaults to FALSE. Whether to force the output to be an
 *     absolute link (beginning with http:). Useful for links that will be
 *     displayed outside the site, such as in an RSS feed.
 *   - \'attributes\': An associative array of HTML attributes that will be
 *     added to the anchor tag if you use the \\Drupal\\Core\\Link class to make
 *     the link.
 *   - \'language\': An optional language object used to look up the alias
 *     for the URL. If $options[\'language\'] is omitted, it defaults to the
 *     current language for the language type LanguageInterface::TYPE_URL.
 *   - \'https\': Whether this URL should point to a secure location. If not
 *     defined, the current scheme is used, so the user stays on HTTP or HTTPS
 *     respectively. TRUE enforces HTTPS and FALSE enforces HTTP.
 *
 * @return static
 *   A new Url object with properties depending on the URI scheme. Call the
 *   access() method on this to do access checking.
 *
 * @throws \\InvalidArgumentException
 *   Thrown when the passed in path has no scheme.
 *
 * @see \\Drupal\\Core\\Url::fromRoute()
 * @see \\Drupal\\Core\\Url::fromUserInput()
 */',
        'startLine' => 278,
        'endLine' => 334,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'fromEntityUri' => 
      array (
        'name' => 'fromEntityUri',
        'parameters' => 
        array (
          'uri_parts' => 
          array (
            'name' => 'uri_parts',
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
            'startLine' => 353,
            'endLine' => 353,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 353,
            'endLine' => 353,
            'startColumn' => 61,
            'endColumn' => 74,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 353,
            'endLine' => 353,
            'startColumn' => 77,
            'endColumn' => 80,
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
 * Create a new Url object for entity URIs.
 *
 * @param array $uri_parts
 *   Parts from a URI of the form entity:{entity_type}/{entity_id} as from
 *   parse_url().
 * @param array $options
 *   An array of options, see \\Drupal\\Core\\Url::fromUri() for details.
 * @param string $uri
 *   The original entered URI.
 *
 * @return static
 *   A new Url object for an entity\'s canonical route.
 *
 * @throws \\InvalidArgumentException
 *   Thrown if the entity URI is invalid.
 */',
        'startLine' => 353,
        'endLine' => 360,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'fromInternalUri' => 
      array (
        'name' => 'fromInternalUri',
        'parameters' => 
        array (
          'uri_parts' => 
          array (
            'name' => 'uri_parts',
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
            'startLine' => 403,
            'endLine' => 403,
            'startColumn' => 45,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 403,
            'endLine' => 403,
            'startColumn' => 63,
            'endColumn' => 76,
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
 * Creates a new Url object for \'internal:\' URIs.
 *
 * Important note: the URI minus the scheme can NOT simply be validated by a
 * \\Drupal\\Core\\Path\\PathValidatorInterface implementation. The semantics of
 * the \'internal:\' URI scheme are different:
 * - PathValidatorInterface accepts paths without a leading slash (e.g.
 *   \'node/add\') as well as 2 special paths: \'<front>\' and \'<none>\', which are
 *   mapped to the correspondingly named routes.
 * - \'internal:\' URIs store paths with a leading slash that represents the
 *   root — i.e. the front page — (e.g. \'internal:/node/add\'), and doesn\'t
 *   have any exceptions.
 *
 * To clarify, a few examples of path plus corresponding \'internal:\' URI:
 * - \'node/add\' -> \'internal:/node/add\'
 * - \'node/add?foo=bar\' -> \'internal:/node/add?foo=bar\'
 * - \'node/add#kitten\' -> \'internal:/node/add#kitten\'
 * - \'<front>\' -> \'internal:/\'
 * - \'<front>foo=bar\' -> \'internal:/?foo=bar\'
 * - \'<front>#kitten\' -> \'internal:/#kitten\'
 * - \'<none>\' -> \'internal:\'
 * - \'<none>foo=bar\' -> \'internal:?foo=bar\'
 * - \'<none>#kitten\' -> \'internal:#kitten\'
 *
 * Therefore, when using a PathValidatorInterface to validate \'internal:\'
 * URIs, we must map:
 * - \'internal:\' (path component is \'\')  to the special \'<none>\' path
 * - \'internal:/\' (path component is \'/\') to the special \'<front>\' path
 * - \'internal:/some-path\' (path component is \'/some-path\') to \'some-path\'
 *
 * @param array $uri_parts
 *   Parts from a URI of the form internal:{path} as from parse_url().
 * @param array $options
 *   An array of options, see \\Drupal\\Core\\Url::fromUri() for details.
 *
 * @return static
 *   A new Url object for an \'internal:\' URI.
 *
 * @throws \\InvalidArgumentException
 *   Thrown when the URI\'s path component doesn\'t have a leading slash.
 */',
        'startLine' => 403,
        'endLine' => 432,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'fromRouteUri' => 
      array (
        'name' => 'fromRouteUri',
        'parameters' => 
        array (
          'uri_parts' => 
          array (
            'name' => 'uri_parts',
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
            'startLine' => 452,
            'endLine' => 452,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 452,
            'endLine' => 452,
            'startColumn' => 60,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 452,
            'endLine' => 452,
            'startColumn' => 76,
            'endColumn' => 79,
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
 * Creates a new Url object for \'route:\' URIs.
 *
 * @param array $uri_parts
 *   Parts from a URI of the form route:{route_name};{route_parameters} as
 *   from parse_url(), where the path is the route name optionally followed by
 *   a ";" followed by route parameters in key=value format with & separators.
 * @param array $options
 *   An array of options, see \\Drupal\\Core\\Url::fromUri() for details.
 * @param string $uri
 *   The original passed in URI.
 *
 * @return static
 *   A new Url object for a \'route:\' URI.
 *
 * @throws \\InvalidArgumentException
 *   Thrown when the route URI does not have a route name.
 */',
        'startLine' => 452,
        'endLine' => 464,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'createFromRequest' => 
      array (
        'name' => 'createFromRequest',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 492,
            'endLine' => 492,
            'startColumn' => 44,
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
 * Returns the Url object matching a request.
 *
 * SECURITY NOTE: The request path is not checked to be valid and accessible
 * by the current user to allow storing and reusing Url objects by different
 * users. The \'path.validator\' service getUrlIfValid() method should be used
 * instead of this one if validation and access check is desired. Otherwise,
 * \'access_manager\' service checkNamedRoute() method should be used on the
 * router name and parameters stored in the Url object returned by this
 * method.
 *
 * @param \\Symfony\\Component\\HttpFoundation\\Request $request
 *   A request object.
 *
 * @return static
 *   A Url object. Warning: the object is created even if the current user
 *   would get an access denied running the same request via the normal page
 *   flow.
 *
 * @throws Symfony\\Component\\Routing\\Exception\\NoConfigurationException
 *   If no routing configuration could be found.
 * @throws Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException
 *   If no matching resource could be found.
 * @throws Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException
 *   If a matching resource was found but the request method is not allowed.
 */',
        'startLine' => 492,
        'endLine' => 499,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'setUnrouted' => 
      array (
        'name' => 'setUnrouted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets this URL to encapsulate an unrouted URI.
 *
 * @return $this
 */',
        'startLine' => 506,
        'endLine' => 515,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'toUriString' => 
      array (
        'name' => 'toUriString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generates a URI string that represents the data in the Url object.
 *
 * The URI will typically have the scheme of route: even if the object was
 * constructed using an entity: or internal: scheme. An internal: URI that
 * does not match a Drupal route with be returned here with the base: scheme,
 * and external URLs will be returned in their original form.
 *
 * @return string
 *   A URI representation of the Url object data.
 */',
        'startLine' => 528,
        'endLine' => 541,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'isExternal' => 
      array (
        'name' => 'isExternal',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates if this URL is external.
 *
 * @return bool
 *   TRUE if the URL is external, FALSE otherwise.
 */',
        'startLine' => 549,
        'endLine' => 551,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'isRouted' => 
      array (
        'name' => 'isRouted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates if this URL has a Drupal route.
 *
 * @return bool
 *   TRUE if there is a Drupal route for the URL, FALSE otherwise.
 */',
        'startLine' => 559,
        'endLine' => 561,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
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
 * @return string
 *   The name of the route.
 *
 * @throws \\UnexpectedValueException
 *   If this is a URI with no corresponding route.
 */',
        'startLine' => 572,
        'endLine' => 578,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'getRouteParameters' => 
      array (
        'name' => 'getRouteParameters',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the route parameters.
 *
 * @return array
 *   An associative array of route parameters.
 *
 * @throws \\UnexpectedValueException
 *   If this is a URI with no corresponding route.
 */',
        'startLine' => 589,
        'endLine' => 595,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'setRouteParameters' => 
      array (
        'name' => 'setRouteParameters',
        'parameters' => 
        array (
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 608,
            'endLine' => 608,
            'startColumn' => 38,
            'endColumn' => 48,
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
 * Sets the route parameters.
 *
 * @param array $parameters
 *   The array of parameters.
 *
 * @return $this
 *
 * @throws \\UnexpectedValueException
 *   If this is a URI with no corresponding route.
 */',
        'startLine' => 608,
        'endLine' => 614,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'setRouteParameter' => 
      array (
        'name' => 'setRouteParameter',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 629,
            'endLine' => 629,
            'startColumn' => 37,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 629,
            'endLine' => 629,
            'startColumn' => 43,
            'endColumn' => 48,
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
 * Sets a specific route parameter.
 *
 * @param string $key
 *   The key of the route parameter.
 * @param mixed $value
 *   The route parameter.
 *
 * @return $this
 *
 * @throws \\UnexpectedValueException
 *   If this is a URI with no corresponding route.
 */',
        'startLine' => 629,
        'endLine' => 635,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'getOptions' => 
      array (
        'name' => 'getOptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the URL options.
 *
 * @return array
 *   The array of options. See \\Drupal\\Core\\Url::fromUri() for details on what
 *   it contains.
 */',
        'startLine' => 644,
        'endLine' => 646,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'getOption' => 
      array (
        'name' => 'getOption',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 659,
            'endLine' => 659,
            'startColumn' => 29,
            'endColumn' => 33,
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
 * Gets a specific option.
 *
 * See \\Drupal\\Core\\Url::fromUri() for details on the options.
 *
 * @param string $name
 *   The name of the option.
 *
 * @return mixed
 *   The value for a specific option, or NULL if it does not exist.
 */',
        'startLine' => 659,
        'endLine' => 665,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'setOptions' => 
      array (
        'name' => 'setOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 676,
            'endLine' => 676,
            'startColumn' => 30,
            'endColumn' => 37,
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
 * Sets the URL options.
 *
 * @param array $options
 *   The array of options. See \\Drupal\\Core\\Url::fromUri() for details on what
 *   it contains.
 *
 * @return $this
 */',
        'startLine' => 676,
        'endLine' => 679,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'setOption' => 
      array (
        'name' => 'setOption',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 693,
            'endLine' => 693,
            'startColumn' => 29,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 693,
            'endLine' => 693,
            'startColumn' => 36,
            'endColumn' => 41,
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
 * Sets a specific option.
 *
 * See \\Drupal\\Core\\Url::fromUri() for details on the options.
 *
 * @param string $name
 *   The name of the option.
 * @param mixed $value
 *   The option value.
 *
 * @return $this
 */',
        'startLine' => 693,
        'endLine' => 696,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'mergeOptions' => 
      array (
        'name' => 'mergeOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 710,
            'endLine' => 710,
            'startColumn' => 32,
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
 * Merges the URL options with any currently set.
 *
 * In the case of conflict with existing options, the new options will replace
 * the existing options.
 *
 * @param array $options
 *   The array of options. See \\Drupal\\Core\\Url::fromUri() for details on what
 *   it contains.
 *
 * @return $this
 */',
        'startLine' => 710,
        'endLine' => 713,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'getUri' => 
      array (
        'name' => 'getUri',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the URI value for this Url object.
 *
 * Only to be used if self::$unrouted is TRUE.
 *
 * @return string
 *   A URI not connected to a route. May be an external URL.
 *
 * @throws \\UnexpectedValueException
 *   Thrown when the URI was requested for a routed URL.
 */',
        'startLine' => 726,
        'endLine' => 732,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'setAbsolute' => 
      array (
        'name' => 'setAbsolute',
        'parameters' => 
        array (
          'absolute' => 
          array (
            'name' => 'absolute',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 742,
                'endLine' => 742,
                'startTokenPos' => 2288,
                'startFilePos' => 25598,
                'endTokenPos' => 2288,
                'endFilePos' => 25601,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 742,
            'endLine' => 742,
            'startColumn' => 31,
            'endColumn' => 46,
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
 * Sets the value of the absolute option for this Url.
 *
 * @param bool $absolute
 *   (optional) Whether to make this URL absolute or not. Defaults to TRUE.
 *
 * @return $this
 */',
        'startLine' => 742,
        'endLine' => 745,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'toString' => 
      array (
        'name' => 'toString',
        'parameters' => 
        array (
          'collect_bubbleable_metadata' => 
          array (
            'name' => 'collect_bubbleable_metadata',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 768,
                'endLine' => 768,
                'startTokenPos' => 2324,
                'startFilePos' => 26701,
                'endTokenPos' => 2324,
                'endFilePos' => 26705,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 768,
            'endLine' => 768,
            'startColumn' => 28,
            'endColumn' => 63,
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
 * Generates the string URL representation for this Url object.
 *
 * For an external URL, the string will contain the input plus any query
 * string or fragment specified by the options array.
 *
 * If this Url object was constructed from a Drupal route or from an internal
 * URI (URIs using the internal:, base:, or entity: schemes), the returned
 * string will either be a relative URL like /node/1 or an absolute URL like
 * https://example.com/node/1 depending on the options array, plus any
 * specified query string or fragment.
 *
 * @param bool $collect_bubbleable_metadata
 *   (optional) Defaults to FALSE. When TRUE, both the generated URL and its
 *   associated bubbleable metadata are returned.
 *
 * @return string|\\Drupal\\Core\\GeneratedUrl
 *   A string URL.
 *   When $collect_bubbleable_metadata is TRUE, a GeneratedUrl object is
 *   returned, containing the generated URL plus bubbleable metadata.
 */',
        'startLine' => 768,
        'endLine' => 774,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'getInternalPath' => 
      array (
        'name' => 'getInternalPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the internal path (system path) for this route.
 *
 * This path will not include any prefixes, fragments, or query strings.
 *
 * @return string
 *   The internal path for this route.
 *
 * @throws \\UnexpectedValueException
 *   If this is a URI with no corresponding system path.
 */',
        'startLine' => 787,
        'endLine' => 796,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'access' => 
      array (
        'name' => 'access',
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
                'startLine' => 815,
                'endLine' => 815,
                'startTokenPos' => 2509,
                'startFilePos' => 28606,
                'endTokenPos' => 2509,
                'endFilePos' => 28609,
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
            'startLine' => 815,
            'endLine' => 815,
            'startColumn' => 26,
            'endColumn' => 58,
            'parameterIndex' => 0,
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
                'startLine' => 815,
                'endLine' => 815,
                'startTokenPos' => 2516,
                'startFilePos' => 28632,
                'endTokenPos' => 2516,
                'endFilePos' => 28636,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 815,
            'endLine' => 815,
            'startColumn' => 61,
            'endColumn' => 85,
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
 * Checks this Url object against applicable access check services.
 *
 * Determines whether the route is accessible or not.
 *
 * @param \\Drupal\\Core\\Session\\AccountInterface|null $account
 *   (optional) Run access checks for this account. NULL for the current user.
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
        'startLine' => 815,
        'endLine' => 820,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'accessManager' => 
      array (
        'name' => 'accessManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return \\Drupal\\Core\\Access\\AccessManagerInterface
 *   The access manager service.
 */',
        'startLine' => 826,
        'endLine' => 831,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'urlGenerator' => 
      array (
        'name' => 'urlGenerator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the URL generator.
 *
 * @return \\Drupal\\Core\\Routing\\UrlGeneratorInterface
 *   The URL generator.
 */',
        'startLine' => 839,
        'endLine' => 844,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'unroutedUrlAssembler' => 
      array (
        'name' => 'unroutedUrlAssembler',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the unrouted URL assembler for non-Drupal URLs.
 *
 * @return \\Drupal\\Core\\Utility\\UnroutedUrlAssemblerInterface
 *   The unrouted URL assembler.
 */',
        'startLine' => 852,
        'endLine' => 857,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'setUrlGenerator' => 
      array (
        'name' => 'setUrlGenerator',
        'parameters' => 
        array (
          'url_generator' => 
          array (
            'name' => 'url_generator',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 867,
                'endLine' => 867,
                'startTokenPos' => 2746,
                'startFilePos' => 30108,
                'endTokenPos' => 2746,
                'endFilePos' => 30111,
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
                      'name' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
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
            'startLine' => 867,
            'endLine' => 867,
            'startColumn' => 35,
            'endColumn' => 78,
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
 * Sets the URL generator.
 *
 * @param \\Drupal\\Core\\Routing\\UrlGeneratorInterface $url_generator
 *   (optional) The URL generator, specify NULL to reset it.
 *
 * @return $this
 */',
        'startLine' => 867,
        'endLine' => 871,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'setUnroutedUrlAssembler' => 
      array (
        'name' => 'setUnroutedUrlAssembler',
        'parameters' => 
        array (
          'url_assembler' => 
          array (
            'name' => 'url_assembler',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Utility\\UnroutedUrlAssemblerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 881,
            'endLine' => 881,
            'startColumn' => 43,
            'endColumn' => 86,
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
 * Sets the unrouted URL assembler.
 *
 * @param \\Drupal\\Core\\Utility\\UnroutedUrlAssemblerInterface $url_assembler
 *   The unrouted URL assembler.
 *
 * @return $this
 */',
        'startLine' => 881,
        'endLine' => 884,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
        'aliasName' => NULL,
      ),
      'trustedCallbacks' => 
      array (
        'name' => 'trustedCallbacks',
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
        'startLine' => 889,
        'endLine' => 891,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core',
        'declaringClassName' => 'Drupal\\Core\\Url',
        'implementingClassName' => 'Drupal\\Core\\Url',
        'currentClassName' => 'Drupal\\Core\\Url',
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