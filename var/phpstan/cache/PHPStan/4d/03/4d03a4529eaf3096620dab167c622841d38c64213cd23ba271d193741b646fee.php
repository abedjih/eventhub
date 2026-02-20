<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Form/FormBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Form\FormBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3e6b73b1ab856726d468d12adeee9d8dd1ace0d5b4944f8848b60d2609eba0d6-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Form\\FormBase',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Form/FormBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Form',
    'name' => 'Drupal\\Core\\Form\\FormBase',
    'shortName' => 'FormBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Provides a base class for forms.
 *
 * This class exists as a mid-point between dependency injection through
 * ContainerInjectionInterface, and a less-structured use of traits which
 * default to using the \\Drupal accessor for service discovery.
 *
 * To properly inject services, override create() and use the setters provided
 * by the traits to inject the needed services.
 *
 * @code
 * public static function create($container) {
 *   $form = new static();
 *   // In this example we only need string translation so we use the
 *   // setStringTranslation() method provided by StringTranslationTrait.
 *   $form->setStringTranslation($container->get(\'string_translation\'));
 *   return $form;
 * }
 * @endcode
 *
 * Alternately, do not use FormBase. A class can implement FormInterface, use
 * the traits it needs, and inject services from the container as required.
 *
 * @ingroup form_api
 *
 * @see \\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 45,
    'endLine' => 252,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Form\\FormInterface',
      1 => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
      1 => 'Drupal\\Core\\Htmx\\HtmxRequestInfoTrait',
      2 => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
      3 => 'Drupal\\Core\\Messenger\\MessengerTrait',
      4 => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
      5 => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'requestStack' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'name' => 'requestStack',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The request stack.
 *
 * @var \\Symfony\\Component\\HttpFoundation\\RequestStack
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'configFactory' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'name' => 'configFactory',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The config factory.
 *
 * Subclasses should use the self::config() method, which may be overridden to
 * address specific needs when loading config, rather than this property
 * directly. See \\Drupal\\Core\\Form\\ConfigFormBase::config() for an example of
 * this.
 *
 * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'routeMatch' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'name' => 'routeMatch',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The route match.
 *
 * @var \\Drupal\\Core\\Routing\\RouteMatchInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 3,
        'endColumn' => 24,
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
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 33,
            'endColumn' => 61,
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
        'startLine' => 83,
        'endLine' => 85,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
      'validateForm' => 
      array (
        'name' => 'validateForm',
        'parameters' => 
        array (
          'form' => 
          array (
            'name' => 'form',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 32,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'form_state' => 
          array (
            'name' => 'form_state',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Form\\FormStateInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 46,
            'endColumn' => 75,
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
 * {@inheritdoc}
 */',
        'startLine' => 90,
        'endLine' => 92,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
      'config' => 
      array (
        'name' => 'config',
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
            'startLine' => 110,
            'endLine' => 110,
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
 * Retrieves a configuration object.
 *
 * This is the main entry point to the configuration API. Calling
 * "$this->config(\'my_module.admin\')" will return a configuration object in
 * which the my_module module can store its administrative settings.
 *
 * @param string $name
 *   The name of the configuration object to retrieve. The name corresponds to
 *   a configuration file. For "\\Drupal::config(\'my_module.admin\')", the
 *   config object returned will contain the contents of my_module.admin
 *   configuration file.
 *
 * @return \\Drupal\\Core\\Config\\ImmutableConfig
 *   A configuration object.
 */',
        'startLine' => 110,
        'endLine' => 112,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
      'configFactory' => 
      array (
        'name' => 'configFactory',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the config factory for this form.
 *
 * When accessing configuration values, use $this->config(). Only use this
 * when the config factory needs to be manipulated directly.
 *
 * @return \\Drupal\\Core\\Config\\ConfigFactoryInterface
 *   The configuration factory for this form.
 */',
        'startLine' => 123,
        'endLine' => 128,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
      'setConfigFactory' => 
      array (
        'name' => 'setConfigFactory',
        'parameters' => 
        array (
          'config_factory' => 
          array (
            'name' => 'config_factory',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 138,
            'endLine' => 138,
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
 * Sets the config factory for this form.
 *
 * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
 *   The config factory.
 *
 * @return $this
 */',
        'startLine' => 138,
        'endLine' => 141,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
      'resetConfigFactory' => 
      array (
        'name' => 'resetConfigFactory',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the configuration factory.
 */',
        'startLine' => 146,
        'endLine' => 148,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
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
        'startLine' => 156,
        'endLine' => 161,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
      'getRouteMatch' => 
      array (
        'name' => 'getRouteMatch',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the route match.
 *
 * @return \\Drupal\\Core\\Routing\\RouteMatchInterface
 *   The currently active route match object.
 */',
        'startLine' => 169,
        'endLine' => 174,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
      'setRequestStack' => 
      array (
        'name' => 'setRequestStack',
        'parameters' => 
        array (
          'request_stack' => 
          array (
            'name' => 'request_stack',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 184,
            'endLine' => 184,
            'startColumn' => 35,
            'endColumn' => 61,
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
 * Sets the request stack object to use.
 *
 * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $request_stack
 *   The request stack object.
 *
 * @return $this
 */',
        'startLine' => 184,
        'endLine' => 187,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
      'currentUser' => 
      array (
        'name' => 'currentUser',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the current user.
 *
 * @return \\Drupal\\Core\\Session\\AccountInterface
 *   The current user.
 */',
        'startLine' => 195,
        'endLine' => 197,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
      'redirect' => 
      array (
        'name' => 'redirect',
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
            'startLine' => 215,
            'endLine' => 215,
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
                'startLine' => 215,
                'endLine' => 215,
                'startTokenPos' => 493,
                'startFilePos' => 6272,
                'endTokenPos' => 494,
                'endFilePos' => 6273,
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
            'startLine' => 215,
            'endLine' => 215,
            'startColumn' => 44,
            'endColumn' => 71,
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
                'startLine' => 215,
                'endLine' => 215,
                'startTokenPos' => 503,
                'startFilePos' => 6293,
                'endTokenPos' => 504,
                'endFilePos' => 6294,
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
            'startLine' => 215,
            'endLine' => 215,
            'startColumn' => 74,
            'endColumn' => 92,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'status' => 
          array (
            'name' => 'status',
            'default' => 
            array (
              'code' => '302',
              'attributes' => 
              array (
                'startLine' => 215,
                'endLine' => 215,
                'startTokenPos' => 511,
                'startFilePos' => 6307,
                'endTokenPos' => 511,
                'endFilePos' => 6309,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 215,
            'endLine' => 215,
            'startColumn' => 95,
            'endColumn' => 107,
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
 * Returns a redirect response object for the specified route.
 *
 * @param string $route_name
 *   The name of the route to which to redirect.
 * @param array $route_parameters
 *   (optional) Parameters for the route.
 * @param array $options
 *   (optional) An associative array of additional options.
 * @param int $status
 *   (optional) The HTTP redirect status code for the redirect. The default is
 *   302 Found.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse
 *   A redirect response object that may be returned by the controller.
 */',
        'startLine' => 215,
        'endLine' => 218,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
      'container' => 
      array (
        'name' => 'container',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the service container.
 *
 * This method is marked private to prevent sub-classes from retrieving
 * services from the container through it. Instead,
 * \\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface should be used
 * for injecting services.
 *
 * @return \\Symfony\\Component\\DependencyInjection\\ContainerInterface
 *   The service container.
 */',
        'startLine' => 231,
        'endLine' => 233,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
        'aliasName' => NULL,
      ),
      'logger' => 
      array (
        'name' => 'logger',
        'parameters' => 
        array (
          'channel' => 
          array (
            'name' => 'channel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 248,
            'endLine' => 248,
            'startColumn' => 29,
            'endColumn' => 36,
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
 * Gets the logger for a specific channel.
 *
 * This method exists for backward-compatibility between FormBase and
 * LoggerChannelTrait. Use LoggerChannelTrait::getLogger() instead.
 *
 * @param string $channel
 *   The name of the channel. Can be any string, but the general practice is
 *   to use the name of the subsystem calling this.
 *
 * @return \\Psr\\Log\\LoggerInterface
 *   The logger for the given channel.
 */',
        'startLine' => 248,
        'endLine' => 250,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\FormBase',
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