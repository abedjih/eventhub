<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Form/FormInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Form\FormInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e38de20fdeefbaed57b4d6ebfc72fb0c74405c2174155febb6ea3179c41e3040-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Form\\FormInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Form/FormInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Form',
    'name' => 'Drupal\\Core\\Form\\FormInterface',
    'shortName' => 'FormInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides an interface for a Form.
 *
 * @ingroup form_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 57,
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
      'getFormId' => 
      array (
        'name' => 'getFormId',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a unique string identifying the form.
 *
 * The returned ID should be a unique string that can be a valid PHP function
 * name, since it\'s used in hook implementation names such as
 * hook_form_FORM_ID_alter().
 *
 * @return string
 *   The unique string identifying the form.
 */',
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormInterface',
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
            'startLine' => 35,
            'endLine' => 35,
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
            'startLine' => 35,
            'endLine' => 35,
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
 * Form constructor.
 *
 * @param array $form
 *   An associative array containing the structure of the form.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The current state of the form.
 *
 * @return array
 *   The form structure.
 */',
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormInterface',
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
            'startLine' => 45,
            'endLine' => 45,
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
            'startLine' => 45,
            'endLine' => 45,
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
 * Form validation handler.
 *
 * @param array $form
 *   An associative array containing the structure of the form.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The current state of the form.
 */',
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 3,
        'endColumn' => 77,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormInterface',
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
            'startLine' => 55,
            'endLine' => 55,
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
            'startLine' => 55,
            'endLine' => 55,
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
 * Form submission handler.
 *
 * @param array $form
 *   An associative array containing the structure of the form.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The current state of the form.
 */',
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 3,
        'endColumn' => 75,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormInterface',
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