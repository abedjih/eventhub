<?php declare(strict_types = 1);

// odsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.29-7080c2370e459622e9005b141c711e18af2231fdca566e2410cf34576e57a3e1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal.php',
      ),
    ),
    'namespace' => NULL,
    'name' => 'Drupal',
    'shortName' => 'Drupal',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Static Service Container wrapper.
 *
 * Generally, code in Drupal should accept its dependencies via either
 * constructor injection or setter method injection. However, there are cases,
 * particularly in legacy procedural code, where that is infeasible. This
 * class acts as a unified global accessor to arbitrary services within the
 * system in order to ease the transition from procedural code to injected OO
 * code.
 *
 * The container is built by the kernel and passed in to this class which stores
 * it statically. The container always contains the services from
 * \\Drupal\\Core\\CoreServiceProvider, the service providers of enabled modules
 * and any other service providers defined in
 * $GLOBALS[\'conf\'][\'container_service_providers\'].
 *
 * This class exists only to support legacy code that cannot be dependency
 * injected. If your code needs it, consider refactoring it to be object
 * oriented, if possible. When this is not possible, for instance in the case of
 * hook implementations, and your code is more than a few non-reusable lines, it
 * is recommended to instantiate an object implementing the actual logic.
 *
 * @code
 *   // Legacy procedural code.
 *   function hook_do_stuff() {
 *     $lock = lock()->acquire(\'stuff_lock\');
 *     // ...
 *   }
 *
 *   // Correct procedural code.
 *   function hook_do_stuff() {
 *     $lock = \\Drupal::lock()->acquire(\'stuff_lock\');
 *     // ...
 *   }
 *
 *   // The preferred way: dependency injected code.
 *   function hook_do_stuff() {
 *     // Move the actual implementation to a class and instantiate it.
 *     $instance = new StuffDoingClass(\\Drupal::lock());
 *     $instance->doStuff();
 *
 *     // Or, even better, rely on the service container to avoid hard coding a
 *     // specific interface implementation, so that the actual logic can be
 *     // swapped. This might not always make sense, but in general it is a good
 *     // practice.
 *     \\Drupal::service(\'stuff.doing\')->doStuff();
 *   }
 *
 *   interface StuffDoingInterface {
 *     public function doStuff();
 *   }
 *
 *   class StuffDoingClass implements StuffDoingInterface {
 *     protected $lockBackend;
 *
 *     public function __construct(LockBackendInterface $lock_backend) {
 *       $this->lockBackend = $lock_backend;
 *     }
 *
 *     public function doStuff() {
 *       $lock = $this->lockBackend->acquire(\'stuff_lock\');
 *       // ...
 *     }
 *   }
 * @endcode
 *
 * @see \\Drupal\\Core\\DrupalKernel
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 74,
    'endLine' => 765,
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
      'VERSION' => 
      array (
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'name' => 'VERSION',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'11.3.2\'',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 79,
            'startTokenPos' => 28,
            'startFilePos' => 2703,
            'endTokenPos' => 28,
            'endFilePos' => 2710,
          ),
        ),
        'docComment' => '/**
 * The current system version.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 3,
        'endColumn' => 27,
      ),
      'CORE_COMPATIBILITY' => 
      array (
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'name' => 'CORE_COMPATIBILITY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'8.x\'',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 94,
            'startTokenPos' => 39,
            'startFilePos' => 3394,
            'endTokenPos' => 39,
            'endFilePos' => 3398,
          ),
        ),
        'docComment' => '/**
 * Core API compatibility.
 *
 * This constant is set to \'8.x\' to provide legacy compatibility with
 * extensions that use the \'8.x-\' prefix to denote Drupal core major version
 * compatibility, for example \'8.x-1.0\'. These extensions can specify
 * compatibility with multiple major versions of Drupal core by setting the
 * version constraint in \'core_version_requirement\'. Drupal does not support
 * using this core major version number prefix with versions greater than 8.
 * For example \'9.x-\' prefixed extensions are not supported.
 *
 * @todo Remove or rename this constant in https://www.drupal.org/i/3085662
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 3,
        'endColumn' => 35,
      ),
      'CORE_MINIMUM_SCHEMA_VERSION' => 
      array (
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'name' => 'CORE_MINIMUM_SCHEMA_VERSION',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '8000',
          'attributes' => 
          array (
            'startLine' => 99,
            'endLine' => 99,
            'startTokenPos' => 50,
            'startFilePos' => 3486,
            'endTokenPos' => 50,
            'endFilePos' => 3489,
          ),
        ),
        'docComment' => '/**
 * Core minimum schema version.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 3,
        'endColumn' => 43,
      ),
      'MINIMUM_PHP' => 
      array (
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'name' => 'MINIMUM_PHP',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'8.3.0\'',
          'attributes' => 
          array (
            'startLine' => 117,
            'endLine' => 117,
            'startTokenPos' => 61,
            'startFilePos' => 4236,
            'endTokenPos' => 61,
            'endFilePos' => 4242,
          ),
        ),
        'docComment' => '/**
 * Minimum allowed version of PHP for Drupal to be bootstrapped.
 *
 * Below this version:
 * - The installer cannot be run.
 * - Updates cannot be run.
 * - Modules and themes cannot be enabled.
 * - If a site managed to bypass all of the above, then an error is shown in
 *   the status report and various fatal errors occur on various pages.
 *
 * Note: To prevent the installer from having fatal errors on older versions
 * of PHP, the value of this constant is hardcoded twice in core/install.php:
 * - Once as a parameter of version_compare()
 * - Once in the error message printed to the user immediately after.
 * Remember to update both whenever this constant is updated.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 117,
        'endLine' => 117,
        'startColumn' => 3,
        'endColumn' => 30,
      ),
      'MINIMUM_PHP_MEMORY_LIMIT' => 
      array (
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'name' => 'MINIMUM_PHP_MEMORY_LIMIT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'64M\'',
          'attributes' => 
          array (
            'startLine' => 126,
            'endLine' => 126,
            'startTokenPos' => 72,
            'startFilePos' => 4568,
            'endTokenPos' => 72,
            'endFilePos' => 4572,
          ),
        ),
        'docComment' => '/**
 * Minimum recommended value of PHP memory_limit.
 *
 * 64M was chosen as a minimum requirement in order to allow for additional
 * contributed modules to be installed prior to hitting the limit. However,
 * 40M is the target for the Standard installation profile.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 126,
        'endLine' => 126,
        'startColumn' => 3,
        'endColumn' => 41,
      ),
      'RECOMMENDED_PHP' => 
      array (
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'name' => 'RECOMMENDED_PHP',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'8.4\'',
          'attributes' => 
          array (
            'startLine' => 135,
            'endLine' => 135,
            'startTokenPos' => 83,
            'startFilePos' => 4879,
            'endTokenPos' => 83,
            'endFilePos' => 4883,
          ),
        ),
        'docComment' => '/**
 * Minimum recommended version of PHP.
 *
 * Sites installing Drupal on PHP versions lower than this will see a warning
 * message, but Drupal can still be installed. Used for (e.g.) PHP versions
 * that have reached their EOL or will in the near future.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 135,
        'endLine' => 135,
        'startColumn' => 3,
        'endColumn' => 32,
      ),
      'TRANSLATION_DEFAULT_SERVER_PATTERN' => 
      array (
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'name' => 'TRANSLATION_DEFAULT_SERVER_PATTERN',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'https://ftp.drupal.org/files/translations/%core/%project/%project-%version.%language.po\'',
          'attributes' => 
          array (
            'startLine' => 142,
            'endLine' => 142,
            'startTokenPos' => 94,
            'startFilePos' => 5072,
            'endTokenPos' => 94,
            'endFilePos' => 5160,
          ),
        ),
        'docComment' => '/**
 * Default location of gettext file on the translation server.
 *
 * @see locale_translation_default_translation_server()
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 142,
        'endLine' => 142,
        'startColumn' => 3,
        'endColumn' => 135,
      ),
    ),
    'immediateProperties' => 
    array (
      'container' => 
      array (
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'name' => 'container',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The currently active container object, or NULL if not initialized yet.
 *
 * @var \\Drupal\\Component\\DependencyInjection\\ContainerInterface|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 149,
        'endLine' => 149,
        'startColumn' => 3,
        'endColumn' => 30,
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
      'setContainer' => 
      array (
        'name' => 'setContainer',
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
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 39,
            'endColumn' => 67,
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
 * Sets a new global container.
 *
 * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
 *   A new container instance to replace the current.
 */',
        'startLine' => 157,
        'endLine' => 159,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'unsetContainer' => 
      array (
        'name' => 'unsetContainer',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Unsets the global container.
 */',
        'startLine' => 164,
        'endLine' => 166,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'getContainer' => 
      array (
        'name' => 'getContainer',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the currently active global container.
 *
 * @return \\Drupal\\Component\\DependencyInjection\\ContainerInterface
 *   The currently active global container.
 *
 * @throws \\Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException
 */',
        'startLine' => 176,
        'endLine' => 181,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'hasContainer' => 
      array (
        'name' => 'hasContainer',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns TRUE if the container has been initialized, FALSE otherwise.
 *
 * @return bool
 *   TRUE if the container is initialized, FALSE otherwise.
 */',
        'startLine' => 189,
        'endLine' => 191,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'service' => 
      array (
        'name' => 'service',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
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
            'startLine' => 204,
            'endLine' => 204,
            'startColumn' => 34,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'object',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves a service from the container.
 *
 * @param class-string<T>|string $id
 *   The ID of the service to retrieve.
 *
 * @template T of object
 *
 * @return ($id is class-string<T> ? T : object)
 *   The specified service.
 */',
        'startLine' => 204,
        'endLine' => 206,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'hasService' => 
      array (
        'name' => 'hasService',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 217,
            'endLine' => 217,
            'startColumn' => 37,
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
 * Indicates if a service is defined in the container.
 *
 * @param string $id
 *   The ID of the service to check.
 *
 * @return bool
 *   TRUE if the specified service exists, FALSE otherwise.
 */',
        'startLine' => 217,
        'endLine' => 220,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'root' => 
      array (
        'name' => 'root',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the app root.
 *
 * @return string
 *   The app root directory path.
 */',
        'startLine' => 228,
        'endLine' => 230,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'installProfile' => 
      array (
        'name' => 'installProfile',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the active install profile.
 *
 * @return string|false|null
 *   The name of the active install profile. FALSE indicates that the site is
 *   not using an install profile. NULL indicates that the site has not yet
 *   been installed.
 */',
        'startLine' => 240,
        'endLine' => 242,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'hasRequest' => 
      array (
        'name' => 'hasRequest',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicates if there is a currently active request object.
 *
 * @return bool
 *   TRUE if there is a currently active request object, FALSE otherwise.
 */',
        'startLine' => 250,
        'endLine' => 253,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'request' => 
      array (
        'name' => 'request',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the currently active request object.
 *
 * Note: The use of this wrapper in particular is especially discouraged. Most
 * code should not need to access the request directly.  Doing so means it
 * will only function when handling an HTTP request, and will require special
 * modification or wrapping when run from a command line tool, from certain
 * queue processors, or from automated tests.
 *
 * If code must access the request, it is considerably better to register
 * an object with the Service Container and give it a setRequest() method
 * that is configured to run when the service is created.  That way, the
 * correct request object can always be provided by the container and the
 * service can still be unit tested.
 *
 * If this method must be used, never save the request object that is
 * returned.  Doing so may lead to inconsistencies as the request object is
 * volatile and may change at various times, such as during a subrequest.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\Request
 *   The currently active request object.
 */',
        'startLine' => 277,
        'endLine' => 279,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'requestStack' => 
      array (
        'name' => 'requestStack',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the request stack.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\RequestStack
 *   The request stack
 */',
        'startLine' => 287,
        'endLine' => 289,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'routeMatch' => 
      array (
        'name' => 'routeMatch',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the currently active route match object.
 *
 * @return \\Drupal\\Core\\Routing\\RouteMatchInterface
 *   The currently active route match object.
 */',
        'startLine' => 297,
        'endLine' => 299,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
 * Gets the current active user.
 *
 * This method will return the \\Drupal\\Core\\Session\\AccountProxy object of the
 * current user. You can use the \\Drupal\\user\\Entity\\User::load() method to
 * load the full user entity object. For example:
 * @code
 *   $user = \\Drupal\\user\\Entity\\User::load(\\Drupal::currentUser()->id());
 * @endcode
 *
 * @return \\Drupal\\Core\\Session\\AccountProxyInterface
 *   The current user account proxy.
 */',
        'startLine' => 314,
        'endLine' => 316,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
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
        'startLine' => 324,
        'endLine' => 326,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'database' => 
      array (
        'name' => 'database',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the current primary database.
 *
 * @return \\Drupal\\Core\\Database\\Connection
 *   The current active database\'s master connection.
 */',
        'startLine' => 334,
        'endLine' => 336,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
                'startLine' => 350,
                'endLine' => 350,
                'startTokenPos' => 631,
                'startFilePos' => 11620,
                'endTokenPos' => 631,
                'endFilePos' => 11628,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 350,
            'endLine' => 350,
            'startColumn' => 32,
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
 * Returns the requested cache bin.
 *
 * @param string $bin
 *   (optional) The cache bin for which the cache object should be returned,
 *   defaults to \'default\'.
 *
 * @return \\Drupal\\Core\\Cache\\CacheBackendInterface
 *   The cache object associated with the specified bin.
 *
 * @ingroup cache
 */',
        'startLine' => 350,
        'endLine' => 352,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'classResolver' => 
      array (
        'name' => 'classResolver',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => 
            array (
              'code' => '\\NULL',
              'attributes' => 
              array (
                'startLine' => 374,
                'endLine' => 374,
                'startTokenPos' => 670,
                'startFilePos' => 12476,
                'endTokenPos' => 670,
                'endFilePos' => 12479,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 374,
            'endLine' => 374,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Retrieves the class resolver.
 *
 * This is to be used in procedural code such as module files to instantiate
 * an object of a class that implements
 * \\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface.
 *
 * One common use case is to provide a class which contains the actual code
 * of a hook implementation, without having to create a service.
 *
 * @param string $class
 *   (optional) A class name to instantiate.
 *
 * @return \\Drupal\\Core\\DependencyInjection\\ClassResolverInterface|object
 *   The class resolver or if $class is provided, a class instance with a
 *   given class definition.
 *
 * @throws \\InvalidArgumentException
 *   If $class does not exist.
 */',
        'startLine' => 374,
        'endLine' => 379,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'keyValueExpirable' => 
      array (
        'name' => 'keyValueExpirable',
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
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 44,
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
 * Returns an expirable key value store collection.
 *
 * @param string $collection
 *   The name of the collection holding key and value pairs.
 *
 * @return \\Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface
 *   An expirable key value store collection.
 */',
        'startLine' => 390,
        'endLine' => 392,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'lock' => 
      array (
        'name' => 'lock',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the locking layer instance.
 *
 * @return \\Drupal\\Core\\Lock\\LockBackendInterface
 *   The locking layer instance.
 *
 * @ingroup lock
 */',
        'startLine' => 402,
        'endLine' => 404,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
            'startLine' => 422,
            'endLine' => 422,
            'startColumn' => 33,
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
 * Retrieves a configuration object.
 *
 * This is the main entry point to the configuration API. Calling
 * \\Drupal::config(\'my_module.admin\') will return a configuration object the
 * my_module module can use to read its administrative settings.
 *
 * @param string $name
 *   The name of the configuration object to retrieve, which typically
 *   corresponds to a configuration file. For
 *   \\Drupal::config(\'my_module.admin\'), the configuration object returned
 *   will contain the content of the my_module.admin configuration file.
 *
 * @return \\Drupal\\Core\\Config\\ImmutableConfig
 *   An immutable configuration object.
 */',
        'startLine' => 422,
        'endLine' => 424,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
 * Retrieves the configuration factory.
 *
 * This is mostly used to change the override settings on the configuration
 * factory. For example, changing the language, or turning all overrides on
 * or off.
 *
 * @return \\Drupal\\Core\\Config\\ConfigFactoryInterface
 *   The configuration factory service.
 */',
        'startLine' => 436,
        'endLine' => 438,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'queue' => 
      array (
        'name' => 'queue',
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
            'startLine' => 462,
            'endLine' => 462,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'reliable' => 
          array (
            'name' => 'reliable',
            'default' => 
            array (
              'code' => '\\FALSE',
              'attributes' => 
              array (
                'startLine' => 462,
                'endLine' => 462,
                'startTokenPos' => 869,
                'startFilePos' => 15527,
                'endTokenPos' => 869,
                'endFilePos' => 15531,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 462,
            'endLine' => 462,
            'startColumn' => 39,
            'endColumn' => 55,
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
 * Returns a queue for the given queue name.
 *
 * The following values can be set in your settings.php file\'s $settings
 * array to define which services are used for queues:
 * - queue_reliable_service_$name: The container service to use for the
 *   reliable queue $name.
 * - queue_service_$name: The container service to use for the
 *   queue $name.
 * - queue_default: The container service to use by default for queues
 *   without overrides. This defaults to \'queue.database\'.
 *
 * @param string $name
 *   The name of the queue to work with.
 * @param bool $reliable
 *   (optional) TRUE if the ordering of items and guaranteeing every item
 *   executes at least once is important, FALSE if scalability is the main
 *   concern. Defaults to FALSE.
 *
 * @return \\Drupal\\Core\\Queue\\QueueInterface
 *   The queue object for a given name.
 */',
        'startLine' => 462,
        'endLine' => 464,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
            'startLine' => 475,
            'endLine' => 475,
            'startColumn' => 35,
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
 * Returns a key/value storage collection.
 *
 * @param string $collection
 *   Name of the key/value collection to return.
 *
 * @return \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
 *   The key/value storage collection for the specified name.
 */',
        'startLine' => 475,
        'endLine' => 477,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
 * needs to be the same across development, production, etc. environments (for
 * example, the system maintenance message) should use \\Drupal::config()
 * instead.
 *
 * @return \\Drupal\\Core\\State\\StateInterface
 *   The state storage service.
 */',
        'startLine' => 492,
        'endLine' => 494,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'httpClient' => 
      array (
        'name' => 'httpClient',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the default http client.
 *
 * @return \\GuzzleHttp\\Client
 *   A guzzle http client instance.
 */',
        'startLine' => 502,
        'endLine' => 504,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'entityQuery' => 
      array (
        'name' => 'entityQuery',
        'parameters' => 
        array (
          'entity_type' => 
          array (
            'name' => 'entity_type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 519,
            'endLine' => 519,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 0,
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
                'startLine' => 519,
                'endLine' => 519,
                'startTokenPos' => 1011,
                'startFilePos' => 17441,
                'endTokenPos' => 1011,
                'endFilePos' => 17445,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 519,
            'endLine' => 519,
            'startColumn' => 52,
            'endColumn' => 71,
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
 * Returns the entity query object for this entity type.
 *
 * @param string $entity_type
 *   The entity type (for example, node) for which the query object should be
 *   returned.
 * @param string $conjunction
 *   (optional) Either \'AND\' if all conditions in the query need to apply, or
 *   \'OR\' if any of them is sufficient. Defaults to \'AND\'.
 *
 * @return \\Drupal\\Core\\Entity\\Query\\QueryInterface
 *   The query object that can query the given entity type.
 */',
        'startLine' => 519,
        'endLine' => 521,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'entityQueryAggregate' => 
      array (
        'name' => 'entityQueryAggregate',
        'parameters' => 
        array (
          'entity_type' => 
          array (
            'name' => 'entity_type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 536,
            'endLine' => 536,
            'startColumn' => 47,
            'endColumn' => 58,
            'parameterIndex' => 0,
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
                'startLine' => 536,
                'endLine' => 536,
                'startTokenPos' => 1054,
                'startFilePos' => 18138,
                'endTokenPos' => 1054,
                'endFilePos' => 18142,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 536,
            'endLine' => 536,
            'startColumn' => 61,
            'endColumn' => 80,
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
 * Returns the entity query aggregate object for this entity type.
 *
 * @param string $entity_type
 *   The entity type (for example, node) for which the query object should be
 *   returned.
 * @param string $conjunction
 *   (optional) Either \'AND\' if all conditions in the query need to apply, or
 *   \'OR\' if any of them is sufficient. Defaults to \'AND\'.
 *
 * @return \\Drupal\\Core\\Entity\\Query\\QueryAggregateInterface
 *   The query object that can query the given entity type.
 */',
        'startLine' => 536,
        'endLine' => 538,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'flood' => 
      array (
        'name' => 'flood',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the flood instance.
 *
 * @return \\Drupal\\Core\\Flood\\FloodInterface
 *   The flood instance.
 */',
        'startLine' => 546,
        'endLine' => 548,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
 *   The module handler interface.
 */',
        'startLine' => 556,
        'endLine' => 558,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'typedDataManager' => 
      array (
        'name' => 'typedDataManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the typed data manager service.
 *
 * Use the typed data manager service for creating typed data objects.
 *
 * @return \\Drupal\\Core\\TypedData\\TypedDataManagerInterface
 *   The typed data manager.
 *
 * @see \\Drupal\\Core\\TypedData\\TypedDataManager::create()
 */',
        'startLine' => 570,
        'endLine' => 572,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'token' => 
      array (
        'name' => 'token',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the token service.
 *
 * @return \\Drupal\\Core\\Utility\\Token
 *   The token service.
 */',
        'startLine' => 580,
        'endLine' => 582,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
 * Returns the URL generator service.
 *
 * @return \\Drupal\\Core\\Routing\\UrlGeneratorInterface
 *   The URL generator service.
 */',
        'startLine' => 590,
        'endLine' => 592,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'linkGenerator' => 
      array (
        'name' => 'linkGenerator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the link generator service.
 *
 * @return \\Drupal\\Core\\Utility\\LinkGeneratorInterface
 *   The link generator service.
 */',
        'startLine' => 600,
        'endLine' => 602,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'translation' => 
      array (
        'name' => 'translation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the string translation service.
 *
 * @return \\Drupal\\Core\\StringTranslation\\TranslationManager
 *   The string translation manager.
 */',
        'startLine' => 610,
        'endLine' => 612,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
        'startLine' => 620,
        'endLine' => 622,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'csrfToken' => 
      array (
        'name' => 'csrfToken',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the CSRF token manager service.
 *
 * The generated token is based on the session ID of the current user.
 * Normally, anonymous users do not have a session, so the generated token
 * will be different on every page request. To generate a token for users
 * without a session, manually start a session prior to calling this function.
 *
 * @return \\Drupal\\Core\\Access\\CsrfTokenGenerator
 *   The CSRF token manager.
 *
 * @see \\Drupal\\Core\\Session\\SessionManager::start()
 */',
        'startLine' => 637,
        'endLine' => 639,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'transliteration' => 
      array (
        'name' => 'transliteration',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the transliteration service.
 *
 * @return \\Drupal\\Core\\Transliteration\\PhpTransliteration
 *   The transliteration manager.
 */',
        'startLine' => 647,
        'endLine' => 649,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
 *   The form builder.
 */',
        'startLine' => 657,
        'endLine' => 659,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'theme' => 
      array (
        'name' => 'theme',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the theme service.
 *
 * @return \\Drupal\\Core\\Theme\\ThemeManagerInterface
 *   The theme manager service.
 */',
        'startLine' => 667,
        'endLine' => 669,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'isConfigSyncing' => 
      array (
        'name' => 'isConfigSyncing',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the syncing state.
 *
 * @return bool
 *   Returns TRUE is syncing flag set.
 */',
        'startLine' => 677,
        'endLine' => 679,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
            'startLine' => 691,
            'endLine' => 691,
            'startColumn' => 33,
            'endColumn' => 40,
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
 * Returns a channel logger object.
 *
 * @param string $channel
 *   The name of the channel. Can be any string, but the general practice is
 *   to use the name of the subsystem calling this.
 *
 * @return \\Psr\\Log\\LoggerInterface
 *   The logger for this channel.
 */',
        'startLine' => 691,
        'endLine' => 693,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'menuTree' => 
      array (
        'name' => 'menuTree',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the menu tree.
 *
 * @return \\Drupal\\Core\\Menu\\MenuLinkTreeInterface
 *   The menu tree.
 */',
        'startLine' => 701,
        'endLine' => 703,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'pathValidator' => 
      array (
        'name' => 'pathValidator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the path validator.
 *
 * @return \\Drupal\\Core\\Path\\PathValidatorInterface
 *   The path validator service.
 */',
        'startLine' => 711,
        'endLine' => 713,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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
 * Returns the access manager service.
 *
 * @return \\Drupal\\Core\\Access\\AccessManagerInterface
 *   The access manager service.
 */',
        'startLine' => 721,
        'endLine' => 723,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'destination' => 
      array (
        'name' => 'destination',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the redirect destination helper.
 *
 * @return \\Drupal\\Core\\Routing\\RedirectDestinationInterface
 *   The redirect destination helper.
 */',
        'startLine' => 731,
        'endLine' => 733,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'entityDefinitionUpdateManager' => 
      array (
        'name' => 'entityDefinitionUpdateManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the entity definition update manager.
 *
 * @return \\Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface
 *   The entity definition update manager.
 */',
        'startLine' => 741,
        'endLine' => 743,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'time' => 
      array (
        'name' => 'time',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the time service.
 *
 * @return \\Drupal\\Component\\Datetime\\TimeInterface
 *   The time service.
 */',
        'startLine' => 751,
        'endLine' => 753,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
        'aliasName' => NULL,
      ),
      'messenger' => 
      array (
        'name' => 'messenger',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the messenger.
 *
 * @return \\Drupal\\Core\\Messenger\\MessengerInterface
 *   The messenger.
 */',
        'startLine' => 761,
        'endLine' => 763,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'Drupal',
        'implementingClassName' => 'Drupal',
        'currentClassName' => 'Drupal',
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