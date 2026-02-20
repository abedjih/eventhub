<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Hook/Attribute/Hook.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Hook\Attribute\Hook
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6daeb5c404fcb47c7e9d25dbeaf4b24bf21214d373d2c718fddc7de9957632e0-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Hook/Attribute/Hook.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Hook\\Attribute',
    'name' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
    'shortName' => 'Hook',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Attribute for defining a class method as a hook implementation.
 *
 * Hook implementations in classes need to be marked with this attribute,
 * using one of the following techniques:
 * - On a method, use this attribute with the hook name:
 *   @code
 *   #[Hook(\'user_cancel\')]
 *   public function userCancel(...) {}
 *   @endcode
 * - On a class, specifying the method name:
 *   @code
 *   #[Hook(\'user_cancel\', method: \'userCancel\')]
 *   class Hooks {
 *     public function userCancel(...) {}
 *   }
 *   @endcode
 * - On a class with an __invoke method, which is taken to be the hook
 *   implementation:
 *   @code
 *   #[Hook(\'user_cancel\')]
 *   class Hooks {
 *     public function __invoke(...) {}
 *   }
 *   @endcode
 *
 * Ordering hook implementations can be done by using the order parameter.
 * See Drupal\\Core\\Hook\\Order\\OrderInterface for more information.
 *
 * Removing hook implementations can be done by using the attribute
 * \\Drupal\\Core\\Hook\\Attribute\\RemoveHook.
 *
 * Ordering hook implementations in other modules can be done by using the
 * attribute \\Drupal\\Core\\Hook\\Attribute\\ReorderHook.
 *
 * Classes that use this annotation on the class or on their methods are
 * automatically registered as autowired services with the class name as the
 * service ID. If autowire does not suffice, they can be registered manually as
 * well.
 *
 * Implementing a hook on behalf of another module can be done by by specifying
 * the \'module\' parameter in the attribute.
 *
 * @section sec_multiple_implementations Multiple implementations
 *
 * Multiple implementations are allowed on multiple axes:
 * - One method can implement multiple hooks by adding a Hook attribute for each
 *   method.
 * - One module can implement a particular hook multiple times in multiple
 *   classes, although see below for some exceptions. This allows, for example,
 *   adding hook_form_alter() implementations firing on other conditions than
 *   form ID without modifying any existing implementations.
 *
 * The following hooks may not have multiple implementations by a single module:
 * - hook_library_info_build()
 * - hook_mail()
 * - hook_help()
 * - hook_node_update_index()
 *
 * @section sec_procedural Procedural hooks
 *
 * The following hooks can only have procedural hook implementations:
 *
 * Legacy meta hooks:
 * - hook_hook_info()
 * - hook_module_implements_alter()
 *
 * Install hooks:
 * - hook_install()
 * - hook_install_tasks()
 * - hook_install_tasks_alter()
 * - hook_post_update_NAME()
 * - hook_removed_post_updates()
 * - hook_schema()
 * - hook_uninstall()
 * - hook_update_dependencies()
 * - hook_update_last_removed()
 * - hook_update_N()
 *
 * Hooks implemented by themes must remain procedural.
 *
 * @section sec_backwards_compatibility Backwards-compatibility
 *
 * To allow hook implementations to work on older versions of Drupal as well,
 * add both an attribute-based hook implementation and a procedural hook
 * implementation, with the \\Drupal\\Core\\Hook\\Attribute\\LegacyHook attribute on
 * the procedural hook implementations.
 *
 * See \\Drupal\\Core\\Hook\\Attribute\\LegacyHook for additional information.
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Attribute',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '\\Attribute::TARGET_CLASS | \\Attribute::TARGET_METHOD | \\Attribute::IS_REPEATABLE',
            'attributes' => 
            array (
              'startLine' => 99,
              'endLine' => 99,
              'startTokenPos' => 25,
              'startFilePos' => 3295,
              'endTokenPos' => 39,
              'endFilePos' => 3374,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 99,
    'endLine' => 126,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Hook\\Attribute\\HookAttributeInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'hook' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
        'implementingClassName' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
        'name' => 'hook',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 120,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'method' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
        'implementingClassName' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
        'name' => 'method',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 121,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'module' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
        'implementingClassName' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
        'name' => 'module',
        'modifiers' => 1,
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
                  'name' => 'string',
                  'isIdentifier' => true,
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
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'order' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
        'implementingClassName' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
        'name' => 'order',
        'modifiers' => 1,
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
                  'name' => 'Drupal\\Core\\Hook\\Order\\OrderInterface',
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
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 123,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => true,
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
          'hook' => 
          array (
            'name' => 'hook',
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 120,
            'endLine' => 120,
            'startColumn' => 5,
            'endColumn' => 23,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'method' => 
          array (
            'name' => 'method',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 121,
                'endLine' => 121,
                'startTokenPos' => 77,
                'startFilePos' => 4288,
                'endTokenPos' => 77,
                'endFilePos' => 4289,
              ),
            ),
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 5,
            'endColumn' => 30,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'module' => 
          array (
            'name' => 'module',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 122,
                'endLine' => 122,
                'startTokenPos' => 89,
                'startFilePos' => 4321,
                'endTokenPos' => 89,
                'endFilePos' => 4324,
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
                      'name' => 'string',
                      'isIdentifier' => true,
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 122,
            'endLine' => 122,
            'startColumn' => 5,
            'endColumn' => 33,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'order' => 
          array (
            'name' => 'order',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 123,
                'endLine' => 123,
                'startTokenPos' => 101,
                'startFilePos' => 4363,
                'endTokenPos' => 101,
                'endFilePos' => 4366,
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
                      'name' => 'Drupal\\Core\\Hook\\Order\\OrderInterface',
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 5,
            'endColumn' => 40,
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
 * Constructs a Hook attribute object.
 *
 * @param string $hook
 *   The short hook name, without the \'hook_\' prefix.
 * @param string $method
 *   (optional) The method name. If this attribute is on a method, this
 *   parameter is not required. If this attribute is on a class and this
 *   parameter is omitted, the class must have an __invoke() method, which is
 *   taken as the hook implementation.
 * @param string|null $module
 *   (optional) The module this implementation is for. This allows one module
 *   to implement a hook on behalf of another module. Defaults to the module
 *   the implementation is in.
 * @param \\Drupal\\Core\\Hook\\Order\\OrderInterface|null $order
 *   (optional) Set the order of the implementation.
 */',
        'startLine' => 119,
        'endLine' => 124,
        'startColumn' => 3,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Hook\\Attribute',
        'declaringClassName' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
        'implementingClassName' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
        'currentClassName' => 'Drupal\\Core\\Hook\\Attribute\\Hook',
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