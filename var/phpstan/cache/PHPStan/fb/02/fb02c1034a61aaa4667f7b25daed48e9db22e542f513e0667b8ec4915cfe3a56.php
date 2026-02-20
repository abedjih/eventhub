<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Controller/ControllerBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Controller\ControllerBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-98065bd1430753318ab44d465ac2111b3ef26f93524ca9246ae5278b4e20d91f-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Controller\\ControllerBase',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Controller/ControllerBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Controller',
    'name' => 'Drupal\\Core\\Controller\\ControllerBase',
    'shortName' => 'ControllerBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Utility base class for thin controllers.
 *
 * Controllers that use this base class have access to a number of utility
 * methods and to the Container, which can greatly reduce boilerplate dependency
 * handling code.  However, it also makes the class considerably more
 * difficult to unit test. Therefore this base class should only be used by
 * controller classes that contain only trivial glue code.  Controllers that
 * contain sufficiently complex logic that it\'s worth testing should not use
 * this base class but use ContainerInjectionInterface instead, or even
 * better be refactored to be trivial glue code.
 *
 * The services exposed here are those that it is reasonable for a well-behaved
 * controller to leverage. A controller that needs other services may
 * need to be refactored into a thin controller and a dependent unit-testable
 * service.
 *
 * @see \\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface
 *
 * @ingroup routing
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 35,
    'endLine' => 292,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\DependencyInjection\\AutowireTrait',
      1 => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
      2 => 'Drupal\\Core\\Messenger\\MessengerTrait',
      3 => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
      4 => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'entityTypeManager' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'name' => 'entityTypeManager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The entity type manager.
 *
 * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entityFormBuilder' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'name' => 'entityFormBuilder',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The entity form builder.
 *
 * @var \\Drupal\\Core\\Entity\\EntityFormBuilderInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'languageManager' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'name' => 'languageManager',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The language manager.
 *
 * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 3,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'configFactory' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'name' => 'configFactory',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The configuration factory.
 *
 * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'keyValue' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'name' => 'keyValue',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The key-value storage.
 *
 * @var \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 76,
        'endLine' => 76,
        'startColumn' => 3,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'currentUser' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'name' => 'currentUser',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The current user service.
 *
 * @var \\Drupal\\Core\\Session\\AccountInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'stateService' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'name' => 'stateService',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The state service.
 *
 * @var \\Drupal\\Core\\State\\StateInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'moduleHandler' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'name' => 'moduleHandler',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The module handler.
 *
 * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'formBuilder' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'name' => 'formBuilder',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The form builder.
 *
 * @var \\Drupal\\Core\\Form\\FormBuilderInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 3,
        'endColumn' => 25,
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
      'entityTypeManager' => 
      array (
        'name' => 'entityTypeManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the entity type manager.
 *
 * @return \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
 *   The entity type manager.
 */',
        'startLine' => 112,
        'endLine' => 117,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'aliasName' => NULL,
      ),
      'entityFormBuilder' => 
      array (
        'name' => 'entityFormBuilder',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the entity form builder.
 *
 * @return \\Drupal\\Core\\Entity\\EntityFormBuilderInterface
 *   The entity form builder.
 */',
        'startLine' => 125,
        'endLine' => 130,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'aliasName' => NULL,
      ),
      'cache' => 
      array (
        'name' => 'cache',
        'parameters' => 
        array (
          'bin' => 
          array (
            'name' => 'bin',
            'default' => 
            array (
              'code' => '\'default\'',
              'attributes' => 
              array (
                'startLine' => 142,
                'endLine' => 142,
                'startTokenPos' => 268,
                'startFilePos' => 3810,
                'endTokenPos' => 268,
                'endFilePos' => 3818,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 142,
            'endLine' => 142,
            'startColumn' => 28,
            'endColumn' => 43,
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
 * Returns the requested cache bin.
 *
 * @param string $bin
 *   (optional) The cache bin for which the cache object should be returned,
 *   defaults to \'default\'.
 *
 * @return \\Drupal\\Core\\Cache\\CacheBackendInterface
 *   The cache object associated with the specified bin.
 */',
        'startLine' => 142,
        'endLine' => 144,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
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
            'startLine' => 162,
            'endLine' => 162,
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
 * $this->config(\'my_module.admin\') will return a configuration object in
 * which the my_module module can store its administrative settings.
 *
 * @param string $name
 *   The name of the configuration object to retrieve. The name corresponds to
 *   a configuration file. For \\Drupal::config(\'my_module.admin\'), the config
 *   object returned will contain the contents of my_module.admin
 *   configuration file.
 *
 * @return \\Drupal\\Core\\Config\\Config
 *   A configuration object.
 */',
        'startLine' => 162,
        'endLine' => 167,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'aliasName' => NULL,
      ),
      'keyValue' => 
      array (
        'name' => 'keyValue',
        'parameters' => 
        array (
          'collection' => 
          array (
            'name' => 'collection',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 178,
            'endLine' => 178,
            'startColumn' => 31,
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
 * Returns a key/value storage collection.
 *
 * @param string $collection
 *   Name of the key/value collection to return.
 *
 * @return \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
 *   The key/value storage.
 */',
        'startLine' => 178,
        'endLine' => 183,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'aliasName' => NULL,
      ),
      'state' => 
      array (
        'name' => 'state',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the state storage service.
 *
 * Use this to store machine-generated data, local to a specific environment
 * that does not need deploying and does not need human editing; for example,
 * the last time cron was run. Data which needs to be edited by humans and
 * needs to be the same across development, production, etc. environments
 * (for example, the system maintenance message) should use config() instead.
 *
 * @return \\Drupal\\Core\\State\\StateInterface
 *   The state storage service.
 */',
        'startLine' => 197,
        'endLine' => 202,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'aliasName' => NULL,
      ),
      'moduleHandler' => 
      array (
        'name' => 'moduleHandler',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the module handler.
 *
 * @return \\Drupal\\Core\\Extension\\ModuleHandlerInterface
 *   The module handler service.
 */',
        'startLine' => 210,
        'endLine' => 215,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'aliasName' => NULL,
      ),
      'formBuilder' => 
      array (
        'name' => 'formBuilder',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the form builder service.
 *
 * @return \\Drupal\\Core\\Form\\FormBuilderInterface
 *   The form builder service.
 */',
        'startLine' => 223,
        'endLine' => 228,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
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
 * Returns the current user.
 *
 * @return \\Drupal\\Core\\Session\\AccountInterface
 *   The current user.
 */',
        'startLine' => 236,
        'endLine' => 241,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'aliasName' => NULL,
      ),
      'languageManager' => 
      array (
        'name' => 'languageManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the language manager service.
 *
 * @return \\Drupal\\Core\\Language\\LanguageManagerInterface
 *   The language manager.
 */',
        'startLine' => 249,
        'endLine' => 254,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
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
            'startLine' => 272,
            'endLine' => 272,
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
                'startLine' => 272,
                'endLine' => 272,
                'startTokenPos' => 686,
                'startFilePos' => 7816,
                'endTokenPos' => 687,
                'endFilePos' => 7817,
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
            'startLine' => 272,
            'endLine' => 272,
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
                'startLine' => 272,
                'endLine' => 272,
                'startTokenPos' => 696,
                'startFilePos' => 7837,
                'endTokenPos' => 697,
                'endFilePos' => 7838,
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
            'startLine' => 272,
            'endLine' => 272,
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
                'startLine' => 272,
                'endLine' => 272,
                'startTokenPos' => 704,
                'startFilePos' => 7851,
                'endTokenPos' => 704,
                'endFilePos' => 7853,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 272,
            'endLine' => 272,
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
        'startLine' => 272,
        'endLine' => 275,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
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
        'startLine' => 288,
        'endLine' => 290,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Drupal\\Core\\Controller',
        'declaringClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'implementingClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
        'currentClassName' => 'Drupal\\Core\\Controller\\ControllerBase',
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