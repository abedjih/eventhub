<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Form/ConfigFormBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Form\ConfigFormBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-dacf937f3386fa9f367c7e0888627e8a3755121da1df89d48b1ee4ae7ccb2e56-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Form/ConfigFormBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Form',
    'name' => 'Drupal\\Core\\Form\\ConfigFormBase',
    'shortName' => 'ConfigFormBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for implementing system configuration forms.
 *
 * Subclasses of this form can choose to use config validation instead of form-
 * -specific validation logic. To do that, override copyFormValuesToConfig().
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 398,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Form\\FormBase',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
    ),
    'immediateConstants' => 
    array (
      'CONFIG_KEY_TO_FORM_ELEMENT_MAP' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'name' => 'CONFIG_KEY_TO_FORM_ELEMENT_MAP',
        'modifiers' => 2,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'config_targets\'',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 81,
            'startFilePos' => 1055,
            'endTokenPos' => 81,
            'endFilePos' => 1070,
          ),
        ),
        'docComment' => '/**
 * The $form_state key which stores a map of config keys to form elements.
 *
 * This map is generated and stored by ::storeConfigKeyToFormElementMap(),
 * which is one of the form\'s #after_build callbacks.
 *
 * @see ::storeConfigKeyToFormElementMap()
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 3,
        'endColumn' => 68,
      ),
    ),
    'immediateProperties' => 
    array (
      'typedConfigManager' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'name' => 'typedConfigManager',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 61,
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
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 5,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'typedConfigManager' => 
          array (
            'name' => 'typedConfigManager',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 5,
            'endColumn' => 61,
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
 * Constructs a \\Drupal\\system\\ConfigFormBase object.
 *
 * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
 *   The factory for configuration objects.
 * @param \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typedConfigManager
 *   The typed config manager.
 */',
        'startLine' => 44,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'aliasName' => NULL,
      ),
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
            'startLine' => 54,
            'endLine' => 54,
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
        'startLine' => 54,
        'endLine' => 59,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'aliasName' => NULL,
      ),
      'typedConfigManager' => 
      array (
        'name' => 'typedConfigManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the typed config manager service.
 *
 * @return \\Drupal\\Core\\Config\\TypedConfigManagerInterface
 *   The typed config manager service.
 */',
        'startLine' => 67,
        'endLine' => 72,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'aliasName' => NULL,
      ),
      'buildForm' => 
      array (
        'name' => 'buildForm',
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
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 29,
            'endColumn' => 39,
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
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 42,
            'endColumn' => 71,
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
        'startLine' => 77,
        'endLine' => 94,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'aliasName' => NULL,
      ),
      'loadDefaultValuesFromConfig' => 
      array (
        'name' => 'loadDefaultValuesFromConfig',
        'parameters' => 
        array (
          'element' => 
          array (
            'name' => 'element',
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
            'startLine' => 105,
            'endLine' => 105,
            'startColumn' => 47,
            'endColumn' => 60,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Process callback to recursively load default values from #config_target.
 *
 * @param array $element
 *   The form element.
 *
 * @return array
 *   The form element, with its default value populated.
 */',
        'startLine' => 105,
        'endLine' => 120,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'aliasName' => NULL,
      ),
      'storeConfigKeyToFormElementMap' => 
      array (
        'name' => 'storeConfigKeyToFormElementMap',
        'parameters' => 
        array (
          'element' => 
          array (
            'name' => 'element',
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
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 50,
            'endColumn' => 63,
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
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 66,
            'endColumn' => 95,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Render API callback: Stores a map of element names to config keys.
 *
 * This function is assigned as a #after_build callback.
 *
 * This will store an array in the form state whose keys are strings in the
 * form of `CONFIG_NAME:PROPERTY_PATH`, and whose values are instances of
 * \\Drupal\\Core\\Form\\ConfigTarget.
 *
 * This callback is run in the form\'s #after_build stage, rather than
 * #process, to guarantee that all of the form\'s elements have their final
 * #name and #parents properties set.
 *
 * @param array $element
 *   The element being processed.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The current form state.
 *
 * @return array
 *   The processed element.
 *
 * @see \\Drupal\\Core\\Form\\ConfigFormBase::buildForm()
 */',
        'startLine' => 145,
        'endLine' => 151,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'aliasName' => NULL,
      ),
      'doStoreConfigMap' => 
      array (
        'name' => 'doStoreConfigMap',
        'parameters' => 
        array (
          'element' => 
          array (
            'name' => 'element',
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
            'startLine' => 166,
            'endLine' => 166,
            'startColumn' => 39,
            'endColumn' => 52,
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
            'startLine' => 166,
            'endLine' => 166,
            'startColumn' => 55,
            'endColumn' => 84,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Helper method for #after_build callback ::storeConfigKeyToFormElementMap().
 *
 * @param array $element
 *   The element being processed.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The current form state.
 *
 * @return array
 *   The processed element.
 *
 * @see \\Drupal\\Core\\Form\\ConfigFormBase::storeConfigKeyToFormElementMap()
 */',
        'startLine' => 166,
        'endLine' => 198,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
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
            'startLine' => 203,
            'endLine' => 203,
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
            'startLine' => 203,
            'endLine' => 203,
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
        'startLine' => 203,
        'endLine' => 262,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'aliasName' => NULL,
      ),
      'formatMultipleViolationsMessage' => 
      array (
        'name' => 'formatMultipleViolationsMessage',
        'parameters' => 
        array (
          'form_element_name' => 
          array (
            'name' => 'form_element_name',
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
            'startLine' => 285,
            'endLine' => 285,
            'startColumn' => 54,
            'endColumn' => 78,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'violations' => 
          array (
            'name' => 'violations',
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
            'startLine' => 285,
            'endLine' => 285,
            'startColumn' => 81,
            'endColumn' => 97,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'Drupal\\Component\\Render\\MarkupInterface',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Stringable',
                  'isIdentifier' => false,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Formats multiple violation messages associated with a single form element.
 *
 * Validation constraints only know the internal data structure (the
 * configuration schema structure), but this need not be a disadvantage:
 * rather than informing the user some values are wrong, it is possible
 * guide them directly to the Nth entry in the sequence.
 *
 * To further improve the user experience, it is possible to override
 * method in subclasses to use specific knowledge about the structure of the
 * form and the nature of the data being validated, to instead generate more
 * precise and/or shortened violation messages.
 *
 * @param string $form_element_name
 *   The form element for which to format multiple violation messages.
 * @param \\Symfony\\Component\\Validator\\ConstraintViolationListInterface $violations
 *   The list of constraint violations that apply to this form element.
 *
 * @return \\Drupal\\Component\\Render\\MarkupInterface|\\Stringable
 *   The rendered HTML.
 */',
        'startLine' => 285,
        'endLine' => 301,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'aliasName' => NULL,
      ),
      'submitForm' => 
      array (
        'name' => 'submitForm',
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
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 30,
            'endColumn' => 41,
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
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 44,
            'endColumn' => 73,
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
        'startLine' => 306,
        'endLine' => 314,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'aliasName' => NULL,
      ),
      'copyFormValuesToConfig' => 
      array (
        'name' => 'copyFormValuesToConfig',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Config',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 50,
            'endColumn' => 63,
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
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 66,
            'endColumn' => 95,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 98,
            'endColumn' => 108,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Copies form values to Config keys.
 *
 * This should not change existing Config key-value pairs that are not being
 * edited by this form.
 *
 * @param \\Drupal\\Core\\Config\\Config $config
 *   The configuration being edited.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The current state of the form.
 * @param array $form
 *   The form array.
 *
 * @see \\Drupal\\Core\\Entity\\EntityForm::copyFormValuesToEntity()
 */',
        'startLine' => 331,
        'endLine' => 342,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'aliasName' => NULL,
      ),
      'checkConfigOverrides' => 
      array (
        'name' => 'checkConfigOverrides',
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
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 40,
            'endColumn' => 50,
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
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 53,
            'endColumn' => 82,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Form #after_build callback: Adds message if overrides exist.
 */',
        'startLine' => 347,
        'endLine' => 396,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfigFormBase',
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