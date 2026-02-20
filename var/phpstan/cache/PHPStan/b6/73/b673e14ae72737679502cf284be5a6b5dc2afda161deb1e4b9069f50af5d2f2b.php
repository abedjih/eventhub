<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Form/FormStateInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Form\FormStateInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-692a3a0f2a7d751914ec2aa18bc679a0899109d6fe9ab66a1dd4fc9721fff6f1-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Form\\FormStateInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Form/FormStateInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Form',
    'name' => 'Drupal\\Core\\Form\\FormStateInterface',
    'shortName' => 'FormStateInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides an interface for an object containing the current state of a form.
 *
 * This is passed to all form related code so that the caller can use it to
 * examine what in the form changed when the form submission process is
 * complete. Furthermore, it may be used to store information related to the
 * processed data in the form, which will persist across page requests when the
 * \'cache\' or \'rebuild\' flag is set. See \\Drupal\\Core\\Form\\FormState for
 * documentation of the available flags.
 *
 * @see \\Drupal\\Core\\Form\\FormBuilderInterface
 * @see \\Drupal\\Core\\Form\\FormValidatorInterface
 * @see \\Drupal\\Core\\Form\\FormSubmitterInterface
 * @ingroup form_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 1160,
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
      'getCompleteForm' => 
      array (
        'name' => 'getCompleteForm',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a reference to the complete form array.
 *
 * @return array
 *   The complete form array.
 */',
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setCompleteForm' => 
      array (
        'name' => 'setCompleteForm',
        'parameters' => 
        array (
          'complete_form' => 
          array (
            'name' => 'complete_form',
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
            'startLine' => 41,
            'endLine' => 41,
            'startColumn' => 35,
            'endColumn' => 55,
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
 * Stores the complete form array.
 *
 * @param array $complete_form
 *   The complete form array.
 *
 * @return $this
 */',
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 3,
        'endColumn' => 57,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'loadInclude' => 
      array (
        'name' => 'loadInclude',
        'parameters' => 
        array (
          'module' => 
          array (
            'name' => 'module',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 72,
            'endLine' => 72,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 72,
            'endLine' => 72,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 72,
                'endLine' => 72,
                'startTokenPos' => 70,
                'startFilePos' => 2437,
                'endTokenPos' => 70,
                'endFilePos' => 2440,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 72,
            'endLine' => 72,
            'startColumn' => 47,
            'endColumn' => 58,
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
 * Ensures an include file is loaded whenever the form is processed.
 *
 * Example:
 * @code
 *   // Load node.admin.inc from Node module.
 *   $form_state->loadInclude(\'node\', \'inc\', \'node.admin\');
 * @endcode
 *
 * Use this function instead of \\Drupal::moduleHandler()->loadInclude()
 * from inside a form constructor or any form processing logic as it ensures
 * that the include file is loaded whenever the form is processed. In contrast
 * to using \\Drupal::moduleHandler()->loadInclude() directly, this method
 * makes sure the include file is correctly loaded also if the form is cached.
 *
 * @param string $module
 *   The module to which the include file belongs.
 * @param string $type
 *   The include file\'s type (file extension).
 * @param string|null $name
 *   (optional) The base file name (without the $type extension). If omitted,
 *   $module is used; i.e., resulting in "$module.$type" by default.
 *
 * @return string|false
 *   The filepath of the loaded include file, or FALSE if the include file was
 *   not found or has been loaded already.
 *
 * @see \\Drupal\\Core\\Extension\\ModuleHandlerInterface::loadInclude()
 */',
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 3,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getCacheableArray' => 
      array (
        'name' => 'getCacheableArray',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns an array representation of the cacheable portion of the form state.
 *
 * @return array
 *   The cacheable portion of the form state.
 */',
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setFormState' => 
      array (
        'name' => 'setFormState',
        'parameters' => 
        array (
          'form_state_additions' => 
          array (
            'name' => 'form_state_additions',
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
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 32,
            'endColumn' => 58,
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
 * Sets the value of the form state.
 *
 * @param array $form_state_additions
 *   An array of values to add to the form state.
 *
 * @return $this
 */',
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setResponse' => 
      array (
        'name' => 'setResponse',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\HttpFoundation\\Response',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 103,
            'endLine' => 103,
            'startColumn' => 31,
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
 * Sets a response for this form.
 *
 * If a response is set, it will be used during processing and returned
 * directly. The form will not be rebuilt or redirected.
 *
 * @param \\Symfony\\Component\\HttpFoundation\\Response $response
 *   The response to return.
 *
 * @return $this
 */',
        'startLine' => 103,
        'endLine' => 103,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getResponse' => 
      array (
        'name' => 'getResponse',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a response for this form.
 *
 * If a response is set, it will be used during processing and returned
 * directly. The form will not be rebuilt or redirected.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\Response|null
 *   The response to return, or NULL.
 */',
        'startLine' => 114,
        'endLine' => 114,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setRedirect' => 
      array (
        'name' => 'setRedirect',
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
            'startLine' => 132,
            'endLine' => 132,
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
                'startLine' => 132,
                'endLine' => 132,
                'startTokenPos' => 141,
                'startFilePos' => 4175,
                'endTokenPos' => 142,
                'endFilePos' => 4176,
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
            'startLine' => 132,
            'endLine' => 132,
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
                'startLine' => 132,
                'endLine' => 132,
                'startTokenPos' => 151,
                'startFilePos' => 4196,
                'endTokenPos' => 152,
                'endFilePos' => 4197,
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
            'startLine' => 132,
            'endLine' => 132,
            'startColumn' => 74,
            'endColumn' => 92,
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
 * Sets the redirect for the form.
 *
 * @param string $route_name
 *   The name of the route.
 * @param array $route_parameters
 *   (optional) An associative array of parameter names and values.
 * @param array $options
 *   (optional) An associative array of additional options containing the
 *   same values accepted from \\Drupal\\Core\\Url::fromUri() for $options.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Form\\FormSubmitterInterface::redirectForm()
 * @see \\Drupal\\Core\\Url::fromUri()
 */',
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 3,
        'endColumn' => 94,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setRedirectUrl' => 
      array (
        'name' => 'setRedirectUrl',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Url',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 34,
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
 * Sets the redirect URL for the form.
 *
 * @param \\Drupal\\Core\\Url $url
 *   The URL to redirect to.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Form\\FormSubmitterInterface::redirectForm()
 */',
        'startLine' => 144,
        'endLine' => 144,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getRedirect' => 
      array (
        'name' => 'getRedirect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the value to use for redirecting after the form has been executed.
 *
 * @see \\Drupal\\Core\\Form\\FormSubmitterInterface::redirectForm()
 *
 * @return mixed
 *   The value will be one of the following:
 *   - A fully prepared \\Symfony\\Component\\HttpFoundation\\RedirectResponse.
 *   - An instance of \\Drupal\\Core\\Url to use for the redirect.
 *   - NULL, to signify that no redirect was specified and that the current
 *     path should be used for the redirect.
 *   - FALSE, to signify that no redirect should take place.
 */',
        'startLine' => 159,
        'endLine' => 159,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setIgnoreDestination' => 
      array (
        'name' => 'setIgnoreDestination',
        'parameters' => 
        array (
          'status' => 
          array (
            'name' => 'status',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 170,
                'endLine' => 170,
                'startTokenPos' => 195,
                'startFilePos' => 5402,
                'endTokenPos' => 195,
                'endFilePos' => 5405,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 40,
            'endColumn' => 58,
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
 * Determines whether the redirect respects the destination query parameter.
 *
 * @param bool $status
 *   (optional) TRUE if the redirect should take precedence over the
 *   destination query parameter. FALSE if not. Defaults to TRUE.
 *
 * @return $this
 */',
        'startLine' => 170,
        'endLine' => 170,
        'startColumn' => 3,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getIgnoreDestination' => 
      array (
        'name' => 'getIgnoreDestination',
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
 * Gets whether the redirect respects the destination query parameter.
 *
 * @return bool
 *   TRUE if the redirect should take precedence over the destination query
 *   parameter.
 */',
        'startLine' => 179,
        'endLine' => 179,
        'startColumn' => 3,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setStorage' => 
      array (
        'name' => 'setStorage',
        'parameters' => 
        array (
          'storage' => 
          array (
            'name' => 'storage',
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
            'startLine' => 194,
            'endLine' => 194,
            'startColumn' => 30,
            'endColumn' => 43,
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
 * Sets the entire set of arbitrary data.
 *
 * @param array $storage
 *   The entire set of arbitrary data to store for this form.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Form\\FormStateInterface::get()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::set()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::has()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::getStorage()
 */',
        'startLine' => 194,
        'endLine' => 194,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getStorage' => 
      array (
        'name' => 'getStorage',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the entire set of arbitrary data.
 *
 * @return array
 *   The entire set of arbitrary data to store for this form.
 *
 * @see \\Drupal\\Core\\Form\\FormStateInterface::get()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::set()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::has()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::setStorage()
 */',
        'startLine' => 207,
        'endLine' => 207,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'property' => 
          array (
            'name' => 'property',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 227,
            'endLine' => 227,
            'startColumn' => 24,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the value for a property in the form state storage.
 *
 * @param string|array $property
 *   Properties are often stored as multi-dimensional associative arrays. If
 *   $property is a string, it will return $storage[$property]. If $property
 *   is an array, each element of the array will be used as a nested key. If
 *   $property = [\'foo\', \'bar\'] it will return $storage[\'foo\'][\'bar\'].
 *
 * @return mixed
 *   A reference to the value for that property, or NULL if the property does
 *   not exist.
 *
 * @see \\Drupal\\Core\\Form\\FormStateInterface::set()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::has()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::getStorage()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::setStorage()
 */',
        'startLine' => 227,
        'endLine' => 227,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'property' => 
          array (
            'name' => 'property',
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
            'startColumn' => 23,
            'endColumn' => 31,
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
            'startLine' => 248,
            'endLine' => 248,
            'startColumn' => 34,
            'endColumn' => 39,
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
 * Sets the value for a property in the form state storage.
 *
 * @param string|array $property
 *   Properties are often stored as multi-dimensional associative arrays. If
 *   $property is a string, it will use $storage[$property] = $value. If
 *   $property is an array, each element of the array will be used as a nested
 *   key. If $property = [\'foo\', \'bar\'] it will use
 *   $storage[\'foo\'][\'bar\'] = $value.
 * @param mixed $value
 *   The value to set.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Form\\FormStateInterface::get()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::has()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::getStorage()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::setStorage()
 */',
        'startLine' => 248,
        'endLine' => 248,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'has' => 
      array (
        'name' => 'has',
        'parameters' => 
        array (
          'property' => 
          array (
            'name' => 'property',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 265,
            'endLine' => 265,
            'startColumn' => 23,
            'endColumn' => 31,
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
 * Determines if a property is present in the form state storage.
 *
 * @param string|array $property
 *   Properties are often stored as multi-dimensional associative arrays. If
 *   $property is a string, it will return isset($storage[$property]). If
 *   $property is an array, each element of the array will be used as a nested
 *   key. If $property = [\'foo\', \'bar\'] it will return
 *   isset($storage[\'foo\'][\'bar\']).
 *
 * @see \\Drupal\\Core\\Form\\FormStateInterface::get()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::set()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::getStorage()
 * @see \\Drupal\\Core\\Form\\FormStateInterface::setStorage()
 */',
        'startLine' => 265,
        'endLine' => 265,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setBuildInfo' => 
      array (
        'name' => 'setBuildInfo',
        'parameters' => 
        array (
          'build_info' => 
          array (
            'name' => 'build_info',
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
            'startLine' => 277,
            'endLine' => 277,
            'startColumn' => 32,
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
 * Sets the build info for the form.
 *
 * @param array $build_info
 *   An array of build info.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Form\\FormState::$build_info
 */',
        'startLine' => 277,
        'endLine' => 277,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getBuildInfo' => 
      array (
        'name' => 'getBuildInfo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the build info for the form.
 *
 * @return array
 *   An array of build info.
 *
 * @see \\Drupal\\Core\\Form\\FormState::$build_info
 */',
        'startLine' => 287,
        'endLine' => 287,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'addBuildInfo' => 
      array (
        'name' => 'addBuildInfo',
        'parameters' => 
        array (
          'property' => 
          array (
            'name' => 'property',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 299,
            'endLine' => 299,
            'startColumn' => 32,
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
            'startLine' => 299,
            'endLine' => 299,
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
 * Adds a value to the build info.
 *
 * @param string $property
 *   The property to use for the value.
 * @param mixed $value
 *   The value to set.
 *
 * @return $this
 */',
        'startLine' => 299,
        'endLine' => 299,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getUserInput' => 
      array (
        'name' => 'getUserInput',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the form values as they were submitted by the user.
 *
 * These are raw and non validated, so should not be used without a thorough
 * understanding of security implications. In almost all cases, code should
 * use self::getValues() and self::getValue() exclusively.
 *
 * @return array
 *   An associative array of values submitted to the form.
 */',
        'startLine' => 311,
        'endLine' => 311,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setUserInput' => 
      array (
        'name' => 'setUserInput',
        'parameters' => 
        array (
          'user_input' => 
          array (
            'name' => 'user_input',
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
            'startLine' => 321,
            'endLine' => 321,
            'startColumn' => 32,
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
 * Sets the form values as though they were submitted by a user.
 *
 * @param array $user_input
 *   An associative array of raw and non validated values.
 *
 * @return $this
 */',
        'startLine' => 321,
        'endLine' => 321,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getValues' => 
      array (
        'name' => 'getValues',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the submitted and sanitized form values.
 *
 * @return array
 *   An associative array of values submitted to the form.
 */',
        'startLine' => 329,
        'endLine' => 329,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getValue' => 
      array (
        'name' => 'getValue',
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
            'startLine' => 345,
            'endLine' => 345,
            'startColumn' => 29,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 345,
                'endLine' => 345,
                'startTokenPos' => 373,
                'startFilePos' => 11010,
                'endTokenPos' => 373,
                'endFilePos' => 11013,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 345,
            'endLine' => 345,
            'startColumn' => 35,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the submitted form value for a specific key.
 *
 * @param string|array $key
 *   Values are stored as a multi-dimensional associative array. If $key is a
 *   string, it will return $values[$key]. If $key is an array, each element
 *   of the array will be used as a nested key. If $key = [\'foo\', \'bar\']
 *   it will return $values[\'foo\'][\'bar\'].
 * @param mixed $default
 *   (optional) The default value if the specified key does not exist.
 *
 * @return mixed
 *   The value for the given key, or NULL.
 */',
        'startLine' => 345,
        'endLine' => 345,
        'startColumn' => 3,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setValues' => 
      array (
        'name' => 'setValues',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 358,
            'endLine' => 358,
            'startColumn' => 29,
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
 * Sets the submitted form values.
 *
 * This should be avoided, since these values have been validated already. Use
 * self::setUserInput() instead.
 *
 * @param array $values
 *   The multi-dimensional associative array of form values.
 *
 * @return $this
 */',
        'startLine' => 358,
        'endLine' => 358,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setValue' => 
      array (
        'name' => 'setValue',
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
            'startLine' => 373,
            'endLine' => 373,
            'startColumn' => 28,
            'endColumn' => 31,
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
            'startLine' => 373,
            'endLine' => 373,
            'startColumn' => 34,
            'endColumn' => 39,
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
 * Sets the submitted form value for a specific key.
 *
 * @param string|array $key
 *   Values are stored as a multi-dimensional associative array. If $key is a
 *   string, it will use $values[$key] = $value. If $key is an array, each
 *   element of the array will be used as a nested key. If
 *   $key = [\'foo\', \'bar\'] it will use $values[\'foo\'][\'bar\'] = $value.
 * @param mixed $value
 *   The value to set.
 *
 * @return $this
 */',
        'startLine' => 373,
        'endLine' => 373,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'unsetValue' => 
      array (
        'name' => 'unsetValue',
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
            'startLine' => 386,
            'endLine' => 386,
            'startColumn' => 30,
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
 * Removes a specific key from the submitted form values.
 *
 * @param string|array $key
 *   Values are stored as a multi-dimensional associative array. If $key is a
 *   string, it will use unset($values[$key]). If $key is an array, each
 *   element of the array will be used as a nested key. If
 *   $key = [\'foo\', \'bar\'] it will use unset($values[\'foo\'][\'bar\']).
 *
 * @return $this
 */',
        'startLine' => 386,
        'endLine' => 386,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'hasValue' => 
      array (
        'name' => 'hasValue',
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
            'startLine' => 400,
            'endLine' => 400,
            'startColumn' => 28,
            'endColumn' => 31,
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
 * Determines if a specific key is present in the submitted form values.
 *
 * @param string|array $key
 *   Values are stored as a multi-dimensional associative array. If $key is a
 *   string, it will return isset($values[$key]). If $key is an array, each
 *   element of the array will be used as a nested key. If
 *   $key = [\'foo\', \'bar\'] it will return isset($values[\'foo\'][\'bar\']).
 *
 * @return bool
 *   TRUE if the $key is set, FALSE otherwise.
 */',
        'startLine' => 400,
        'endLine' => 400,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isValueEmpty' => 
      array (
        'name' => 'isValueEmpty',
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
            'startLine' => 414,
            'endLine' => 414,
            'startColumn' => 32,
            'endColumn' => 35,
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
 * Determines if a specific key has a value in the submitted form values.
 *
 * @param string|array $key
 *   Values are stored as a multi-dimensional associative array. If $key is a
 *   string, it will return empty($values[$key]). If $key is an array, each
 *   element of the array will be used as a nested key. If
 *   $key = [\'foo\', \'bar\'] it will return empty($values[\'foo\'][\'bar\']).
 *
 * @return bool
 *   TRUE if the $key has no value, FALSE otherwise.
 */',
        'startLine' => 414,
        'endLine' => 414,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setValueForElement' => 
      array (
        'name' => 'setValueForElement',
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
            'startLine' => 443,
            'endLine' => 443,
            'startColumn' => 38,
            'endColumn' => 51,
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
            'startLine' => 443,
            'endLine' => 443,
            'startColumn' => 54,
            'endColumn' => 59,
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
 * Changes submitted form values during form validation.
 *
 * Use this function to change the submitted value of a form element in a form
 * validation function, so that the changed value persists in $form_state
 * through to the submission handlers.
 *
 * Note that form validation functions are specified in the \'#validate\'
 * component of the form array (the value of $form[\'#validate\'] is an array of
 * validation function names). If the form does not originate in your module,
 * you can implement hook_form_FORM_ID_alter() to add a validation function
 * to $form[\'#validate\'].
 *
 * @param array $element
 *   The form element that should have its value updated; in most cases you
 *   can just pass in the element from the $form array, although the only
 *   component that is actually used is \'#parents\'. If constructing yourself,
 *   set $element[\'#parents\'] to be an array giving the path through the form
 *   array\'s keys to the element whose value you want to update. For instance,
 *   if you want to update the value of $form[\'elem1\'][\'elem2\'], which should
 *   be stored in $form_state->getValue([\'elem1\', \'elem2\']), you would
 *   set $element[\'#parents\'] = [\'elem1\',\'elem2\'].
 * @param mixed $value
 *   The new value for the form element.
 *
 * @return $this
 */',
        'startLine' => 443,
        'endLine' => 443,
        'startColumn' => 3,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'hasAnyErrors' => 
      array (
        'name' => 'hasAnyErrors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if any forms have any errors.
 *
 * @return bool
 *   TRUE if any form has any errors, FALSE otherwise.
 */',
        'startLine' => 451,
        'endLine' => 451,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setErrorByName' => 
      array (
        'name' => 'setErrorByName',
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
            'startLine' => 544,
            'endLine' => 544,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 544,
                'endLine' => 544,
                'startTokenPos' => 487,
                'startFilePos' => 19674,
                'endTokenPos' => 487,
                'endFilePos' => 19675,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 544,
            'endLine' => 544,
            'startColumn' => 41,
            'endColumn' => 53,
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
 * Files an error against a form element.
 *
 * When a validation error is detected, the validator calls this method to
 * indicate which element needs to be changed and provide an error message.
 * This causes the Form API to not execute the form submit handlers, and
 * instead to re-display the form to the user with the corresponding elements
 * rendered with an \'error\' CSS class (shown as red by default).
 *
 * The standard behavior of this method can be changed if a button provides
 * the #limit_validation_errors property. Multistep forms not wanting to
 * validate the whole form can set #limit_validation_errors on buttons to
 * limit validation errors to only certain elements. For example, pressing the
 * "Previous" button in a multistep form should not fire validation errors
 * just because the current step has invalid values. If
 * #limit_validation_errors is set on a clicked button, the button must also
 * define a #submit property (may be set to an empty array). Any #submit
 * handlers will be executed even if there is invalid input, so extreme care
 * should be taken with respect to any actions taken by them. This is
 * typically not a problem with buttons like "Previous" or "Add more" that do
 * not invoke persistent storage of the submitted form values. Do not use the
 * #limit_validation_errors property on buttons that trigger saving of form
 * values to the database.
 *
 * The #limit_validation_errors property is a list of "sections" within
 * $form_state->getValues() that must contain valid values. Each "section" is
 * an array with the ordered set of keys needed to reach that part of
 * $form_state->getValues() (i.e., the #parents property of the element).
 *
 * Example 1: Allow the "Previous" button to function, regardless of whether
 * any user input is valid.
 *
 * @code
 *   $form[\'actions\'][\'previous\'] = [
 *     \'#type\' => \'submit\',
 *     \'#value\' => t(\'Previous\'),
 *     \'#limit_validation_errors\' => [],       // No validation.
 *     \'#submit\' => [\'some_submit_function\'],  // #submit required.
 *   ];
 * @endcode
 *
 * Example 2: Require some, but not all, user input to be valid to process the
 * submission of a "Previous" button.
 *
 * @code
 *   $form[\'actions\'][\'previous\'] = [
 *     \'#type\' => \'submit\',
 *     \'#value\' => t(\'Previous\'),
 *     \'#limit_validation_errors\' => [
 *       // Validate $form_state->getValue(\'step1\').
 *       [\'step1\'],
 *       // Validate $form_state->getValue([\'foo\', \'bar\']).
 *       [\'foo\', \'bar\'],
 *     ),
 *     \'#submit\' => [\'some_submit_function\'], // #submit required.
 *   );
 * @endcode
 *
 * This will require $form_state->getValue(\'step1\') and everything within it
 * (for example, $form_state->getValue([\'step1\', \'choice\'])) to be valid,
 * so calls to self::setErrorByName(\'step1\', $message) or
 * self::setErrorByName(\'step1][choice\', $message) will prevent the submit
 * handlers from running, and result in the error message being displayed to
 * the user. However, calls to self::setErrorByName(\'step2\', $message) and
 * self::setErrorByName(\'step2][groupX][choiceY\', $message) will be
 * suppressed, resulting in the message not being displayed to the user, and
 * the submit handlers will run despite $form_state->getValue(\'step2\') and
 * $form_state->getValue([\'step2\', \'groupX\', \'choiceY\']) containing
 * invalid values. Errors for an invalid $form_state->getValue(\'foo\') will be
 * suppressed, but errors flagging invalid values for
 * $form_state->getValue([\'foo\', \'bar\']) and everything within it will
 * be flagged and submission prevented.
 *
 * Partial form validation is implemented by suppressing errors rather than by
 * skipping the input processing and validation steps entirely, because some
 * forms have button-level submit handlers that call Drupal API functions that
 * assume that certain data exists within $form_state->getValues(), and while
 * not doing anything with that data that requires it to be valid, PHP errors
 * would be triggered if the input processing and validation steps were fully
 * skipped.
 *
 * @param string $name
 *   The name of the form element. If the #parents property of your form
 *   element is [\'foo\', \'bar\', \'baz\'] then you may set an error on \'foo\'
 *   or \'foo][bar][baz\'. Setting an error on \'foo\' sets an error for every
 *   element where the #parents array starts with \'foo\'.
 * @param string|\\Stringable $message
 *   (optional) The error message to present to the user.
 *
 * @return $this
 */',
        'startLine' => 544,
        'endLine' => 544,
        'startColumn' => 3,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setError' => 
      array (
        'name' => 'setError',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 556,
            'endLine' => 556,
            'startColumn' => 28,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 556,
                'endLine' => 556,
                'startTokenPos' => 509,
                'startFilePos' => 19970,
                'endTokenPos' => 509,
                'endFilePos' => 19971,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 556,
            'endLine' => 556,
            'startColumn' => 45,
            'endColumn' => 57,
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
 * Flags an element as having an error.
 *
 * @param array $element
 *   The form element.
 * @param string|\\Stringable $message
 *   (optional) The error message to present to the user.
 *
 * @return $this
 */',
        'startLine' => 556,
        'endLine' => 556,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'clearErrors' => 
      array (
        'name' => 'clearErrors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clears all errors against all form elements made by self::setErrorByName().
 */',
        'startLine' => 561,
        'endLine' => 561,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getErrors' => 
      array (
        'name' => 'getErrors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns an associative array of all errors.
 *
 * @return array
 *   An array of all errors, keyed by the name of the form element.
 */',
        'startLine' => 569,
        'endLine' => 569,
        'startColumn' => 3,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getError' => 
      array (
        'name' => 'getError',
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
            'startLine' => 583,
            'endLine' => 583,
            'startColumn' => 28,
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
 * Returns the error message filed against the given form element.
 *
 * Form errors higher up in the form structure override deeper errors as well
 * as errors on the element itself.
 *
 * @param array $element
 *   The form element to check for errors.
 *
 * @return string|null
 *   Either the error message for this element or NULL if there are no errors.
 */',
        'startLine' => 583,
        'endLine' => 583,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setRebuild' => 
      array (
        'name' => 'setRebuild',
        'parameters' => 
        array (
          'rebuild' => 
          array (
            'name' => 'rebuild',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 593,
                'endLine' => 593,
                'startTokenPos' => 561,
                'startFilePos' => 20964,
                'endTokenPos' => 561,
                'endFilePos' => 20967,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 593,
            'endLine' => 593,
            'startColumn' => 30,
            'endColumn' => 44,
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
 * Sets the form to be rebuilt after processing.
 *
 * @param bool $rebuild
 *   (optional) Whether the form should be rebuilt or not. Defaults to TRUE.
 *
 * @return $this
 */',
        'startLine' => 593,
        'endLine' => 593,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isRebuilding' => 
      array (
        'name' => 'isRebuilding',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the form should be rebuilt after processing.
 *
 * @return bool
 *   TRUE if the form should be rebuilt, FALSE otherwise.
 */',
        'startLine' => 601,
        'endLine' => 601,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setInvalidToken' => 
      array (
        'name' => 'setInvalidToken',
        'parameters' => 
        array (
          'invalid_token' => 
          array (
            'name' => 'invalid_token',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 611,
            'endLine' => 611,
            'startColumn' => 35,
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
 * Flags the form state as having or not an invalid token.
 *
 * @param bool $invalid_token
 *   Whether the form has an invalid token.
 *
 * @return $this
 */',
        'startLine' => 611,
        'endLine' => 611,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'hasInvalidToken' => 
      array (
        'name' => 'hasInvalidToken',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the form has an invalid token.
 *
 * @return bool
 *   TRUE if the form has an invalid token, FALSE otherwise.
 */',
        'startLine' => 619,
        'endLine' => 619,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'prepareCallback' => 
      array (
        'name' => 'prepareCallback',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 633,
            'endLine' => 633,
            'startColumn' => 35,
            'endColumn' => 43,
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
 * Converts support notations for a form callback to a valid callable.
 *
 * Specifically, supports methods on the form/callback object as strings when
 * they start with ::, for example "::submitForm()".
 *
 * @param string|array $callback
 *   The callback.
 *
 * @return array|string
 *   A valid callable.
 */',
        'startLine' => 633,
        'endLine' => 633,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getFormObject' => 
      array (
        'name' => 'getFormObject',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the form object that is responsible for building this form.
 *
 * @return \\Drupal\\Core\\Form\\FormInterface
 *   The form object.
 */',
        'startLine' => 641,
        'endLine' => 641,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setFormObject' => 
      array (
        'name' => 'setFormObject',
        'parameters' => 
        array (
          'form_object' => 
          array (
            'name' => 'form_object',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Form\\FormInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 651,
            'endLine' => 651,
            'startColumn' => 33,
            'endColumn' => 58,
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
 * Sets the form object that is responsible for building this form.
 *
 * @param \\Drupal\\Core\\Form\\FormInterface $form_object
 *   The form object.
 *
 * @return $this
 */',
        'startLine' => 651,
        'endLine' => 651,
        'startColumn' => 3,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setAlwaysProcess' => 
      array (
        'name' => 'setAlwaysProcess',
        'parameters' => 
        array (
          'always_process' => 
          array (
            'name' => 'always_process',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 665,
                'endLine' => 665,
                'startTokenPos' => 648,
                'startFilePos' => 22899,
                'endTokenPos' => 648,
                'endFilePos' => 22902,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 665,
            'endLine' => 665,
            'startColumn' => 36,
            'endColumn' => 57,
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
 * Sets this form to always be processed.
 *
 * This should only be used on RESTful GET forms that do NOT write data, as
 * this could lead to security issues. It is useful so that searches do not
 * need to have a form_id in their query arguments to trigger the search.
 *
 * @param bool $always_process
 *   TRUE if the form should always be processed, FALSE otherwise.
 *
 * @return $this
 */',
        'startLine' => 665,
        'endLine' => 665,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getAlwaysProcess' => 
      array (
        'name' => 'getAlwaysProcess',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if this form should always be processed.
 *
 * @return bool
 *   TRUE if the form should always be processed, FALSE otherwise.
 */',
        'startLine' => 673,
        'endLine' => 673,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setButtons' => 
      array (
        'name' => 'setButtons',
        'parameters' => 
        array (
          'buttons' => 
          array (
            'name' => 'buttons',
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
            'startLine' => 683,
            'endLine' => 683,
            'startColumn' => 30,
            'endColumn' => 43,
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
 * Stores the submit and button elements for the form.
 *
 * @param array $buttons
 *   The submit and button elements.
 *
 * @return $this
 */',
        'startLine' => 683,
        'endLine' => 683,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getButtons' => 
      array (
        'name' => 'getButtons',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the submit and button elements for the form.
 *
 * @return array
 *   The submit and button elements.
 */',
        'startLine' => 691,
        'endLine' => 691,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setCached' => 
      array (
        'name' => 'setCached',
        'parameters' => 
        array (
          'cache' => 
          array (
            'name' => 'cache',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 705,
                'endLine' => 705,
                'startTokenPos' => 700,
                'startFilePos' => 23814,
                'endTokenPos' => 700,
                'endFilePos' => 23817,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 705,
            'endLine' => 705,
            'startColumn' => 29,
            'endColumn' => 41,
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
 * Sets this form to be cached.
 *
 * @param bool $cache
 *   TRUE if the form should be cached, FALSE otherwise.
 *
 * @return $this
 *
 * @throws \\LogicException
 *   If the current request is using an HTTP method that must not change
 *   state (e.g., GET).
 */',
        'startLine' => 705,
        'endLine' => 705,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isCached' => 
      array (
        'name' => 'isCached',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the form should be cached.
 *
 * @return bool
 *   TRUE if the form should be cached, FALSE otherwise.
 */',
        'startLine' => 713,
        'endLine' => 713,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'disableCache' => 
      array (
        'name' => 'disableCache',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prevents the form from being cached.
 *
 * @return $this
 */',
        'startLine' => 720,
        'endLine' => 720,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setExecuted' => 
      array (
        'name' => 'setExecuted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets that the form was submitted and has been processed and executed.
 *
 * @return $this
 */',
        'startLine' => 727,
        'endLine' => 727,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isExecuted' => 
      array (
        'name' => 'isExecuted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the form was submitted and has been processed and executed.
 *
 * @return bool
 *   TRUE if the form was submitted and has been processed and executed.
 */',
        'startLine' => 735,
        'endLine' => 735,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setGroups' => 
      array (
        'name' => 'setGroups',
        'parameters' => 
        array (
          'groups' => 
          array (
            'name' => 'groups',
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
            'startLine' => 745,
            'endLine' => 745,
            'startColumn' => 29,
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
 * Sets references to details elements to render them within vertical tabs.
 *
 * @param array $groups
 *   References to details elements to render them within vertical tabs.
 *
 * @return $this
 */',
        'startLine' => 745,
        'endLine' => 745,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getGroups' => 
      array (
        'name' => 'getGroups',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns references to details elements to render them within vertical tabs.
 *
 * @return array
 *   References to details elements to render them within vertical tabs.
 */',
        'startLine' => 753,
        'endLine' => 753,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setHasFileElement' => 
      array (
        'name' => 'setHasFileElement',
        'parameters' => 
        array (
          'has_file_element' => 
          array (
            'name' => 'has_file_element',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 763,
                'endLine' => 763,
                'startTokenPos' => 786,
                'startFilePos' => 25185,
                'endTokenPos' => 786,
                'endFilePos' => 25188,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 763,
            'endLine' => 763,
            'startColumn' => 37,
            'endColumn' => 60,
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
 * Sets that this form has a file element.
 *
 * @param bool $has_file_element
 *   Whether this form has a file element.
 *
 * @return $this
 */',
        'startLine' => 763,
        'endLine' => 763,
        'startColumn' => 3,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'hasFileElement' => 
      array (
        'name' => 'hasFileElement',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns whether this form has a file element.
 *
 * @return bool
 *   Whether this form has a file element.
 */',
        'startLine' => 771,
        'endLine' => 771,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setLimitValidationErrors' => 
      array (
        'name' => 'setLimitValidationErrors',
        'parameters' => 
        array (
          'limit_validation_errors' => 
          array (
            'name' => 'limit_validation_errors',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 783,
            'endLine' => 783,
            'startColumn' => 44,
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
 * Sets the limited validation error sections.
 *
 * @param array|null $limit_validation_errors
 *   The limited validation error sections.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Form\\FormState::$limit_validation_errors
 */',
        'startLine' => 783,
        'endLine' => 783,
        'startColumn' => 3,
        'endColumn' => 69,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getLimitValidationErrors' => 
      array (
        'name' => 'getLimitValidationErrors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the limited validation error sections.
 *
 * @return array|null
 *   The limited validation error sections.
 *
 * @see \\Drupal\\Core\\Form\\FormState::$limit_validation_errors
 */',
        'startLine' => 793,
        'endLine' => 793,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setMethod' => 
      array (
        'name' => 'setMethod',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 812,
            'endLine' => 812,
            'startColumn' => 29,
            'endColumn' => 35,
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
 * Sets the HTTP method to use for the form\'s submission.
 *
 * This is what the form\'s "method" attribute should be, not necessarily what
 * the current request\'s HTTP method is. For example, a form can have a
 * method attribute of POST, but the request that initially builds it uses
 * GET.
 *
 * @param string $method
 *   Either "GET" or "POST". Other HTTP methods are not valid form submission
 *   methods.
 *
 * @see \\Drupal\\Core\\Form\\FormState::$method
 * @see \\Drupal\\Core\\Form\\FormStateInterface::setRequestMethod()
 *
 * @return $this
 */',
        'startLine' => 812,
        'endLine' => 812,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setRequestMethod' => 
      array (
        'name' => 'setRequestMethod',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 824,
            'endLine' => 824,
            'startColumn' => 36,
            'endColumn' => 42,
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
 * Sets the HTTP method used by the request that is building the form.
 *
 * @param string $method
 *   Can be any valid HTTP method, such as GET, POST, HEAD, etc.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Form\\FormStateInterface::setMethod()
 */',
        'startLine' => 824,
        'endLine' => 824,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isMethodType' => 
      array (
        'name' => 'isMethodType',
        'parameters' => 
        array (
          'method_type' => 
          array (
            'name' => 'method_type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 837,
            'endLine' => 837,
            'startColumn' => 32,
            'endColumn' => 43,
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
 * Returns the HTTP form method.
 *
 * @param string $method_type
 *   The HTTP form method.
 *
 * @return bool
 *   TRUE if the HTTP form method matches.
 *
 * @see \\Drupal\\Core\\Form\\FormState::$method
 */',
        'startLine' => 837,
        'endLine' => 837,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setValidationEnforced' => 
      array (
        'name' => 'setValidationEnforced',
        'parameters' => 
        array (
          'must_validate' => 
          array (
            'name' => 'must_validate',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 847,
                'endLine' => 847,
                'startTokenPos' => 872,
                'startFilePos' => 27384,
                'endTokenPos' => 872,
                'endFilePos' => 27387,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 847,
            'endLine' => 847,
            'startColumn' => 41,
            'endColumn' => 61,
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
 * Enforces that validation is run.
 *
 * @param bool $must_validate
 *   If TRUE, validation will always be run.
 *
 * @return $this
 */',
        'startLine' => 847,
        'endLine' => 847,
        'startColumn' => 3,
        'endColumn' => 63,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isValidationEnforced' => 
      array (
        'name' => 'isValidationEnforced',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if validation is enforced.
 *
 * @return bool
 *   If TRUE, validation will always be run.
 */',
        'startLine' => 855,
        'endLine' => 855,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'disableRedirect' => 
      array (
        'name' => 'disableRedirect',
        'parameters' => 
        array (
          'no_redirect' => 
          array (
            'name' => 'no_redirect',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 865,
                'endLine' => 865,
                'startTokenPos' => 899,
                'startFilePos' => 27761,
                'endTokenPos' => 899,
                'endFilePos' => 27764,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 865,
            'endLine' => 865,
            'startColumn' => 35,
            'endColumn' => 53,
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
 * Prevents the form from redirecting.
 *
 * @param bool $no_redirect
 *   If TRUE, the form will not redirect.
 *
 * @return $this
 */',
        'startLine' => 865,
        'endLine' => 865,
        'startColumn' => 3,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isRedirectDisabled' => 
      array (
        'name' => 'isRedirectDisabled',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if redirecting has been prevented.
 *
 * @return bool
 *   If TRUE, the form will not redirect.
 */',
        'startLine' => 873,
        'endLine' => 873,
        'startColumn' => 3,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setProcessInput' => 
      array (
        'name' => 'setProcessInput',
        'parameters' => 
        array (
          'process_input' => 
          array (
            'name' => 'process_input',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 883,
                'endLine' => 883,
                'startTokenPos' => 926,
                'startFilePos' => 28160,
                'endTokenPos' => 926,
                'endFilePos' => 28163,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 883,
            'endLine' => 883,
            'startColumn' => 35,
            'endColumn' => 55,
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
 * Sets that the form should process input.
 *
 * @param bool $process_input
 *   If TRUE, the form input will be processed.
 *
 * @return $this
 */',
        'startLine' => 883,
        'endLine' => 883,
        'startColumn' => 3,
        'endColumn' => 57,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isProcessingInput' => 
      array (
        'name' => 'isProcessingInput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the form input will be processed.
 *
 * @return bool
 *   If TRUE, the form input will be processed.
 */',
        'startLine' => 891,
        'endLine' => 891,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setProgrammed' => 
      array (
        'name' => 'setProgrammed',
        'parameters' => 
        array (
          'programmed' => 
          array (
            'name' => 'programmed',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 901,
                'endLine' => 901,
                'startTokenPos' => 953,
                'startFilePos' => 28576,
                'endTokenPos' => 953,
                'endFilePos' => 28579,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 901,
            'endLine' => 901,
            'startColumn' => 33,
            'endColumn' => 50,
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
 * Sets that this form was submitted programmatically.
 *
 * @param bool $programmed
 *   If TRUE, the form was submitted programmatically.
 *
 * @return $this
 */',
        'startLine' => 901,
        'endLine' => 901,
        'startColumn' => 3,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isProgrammed' => 
      array (
        'name' => 'isProgrammed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns if this form was submitted programmatically.
 *
 * @return bool
 *   If TRUE, the form was submitted programmatically.
 */',
        'startLine' => 909,
        'endLine' => 909,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setProgrammedBypassAccessCheck' => 
      array (
        'name' => 'setProgrammedBypassAccessCheck',
        'parameters' => 
        array (
          'programmed_bypass_access_check' => 
          array (
            'name' => 'programmed_bypass_access_check',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 922,
                'endLine' => 922,
                'startTokenPos' => 980,
                'startFilePos' => 29179,
                'endTokenPos' => 980,
                'endFilePos' => 29182,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 922,
            'endLine' => 922,
            'startColumn' => 50,
            'endColumn' => 87,
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
 * Sets if this form submission should bypass #access.
 *
 * @param bool $programmed_bypass_access_check
 *   If TRUE, programmatic form submissions are processed without taking
 *   #access into account.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Form\\FormState::$programmed_bypass_access_check
 */',
        'startLine' => 922,
        'endLine' => 922,
        'startColumn' => 3,
        'endColumn' => 89,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isBypassingProgrammedAccessChecks' => 
      array (
        'name' => 'isBypassingProgrammedAccessChecks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if this form submission should bypass #access.
 *
 * @return bool
 *   TRUE if this form bypassing access checked, otherwise FALSE.
 *
 * @see \\Drupal\\Core\\Form\\FormState::$programmed_bypass_access_check
 */',
        'startLine' => 932,
        'endLine' => 932,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setRebuildInfo' => 
      array (
        'name' => 'setRebuildInfo',
        'parameters' => 
        array (
          'rebuild_info' => 
          array (
            'name' => 'rebuild_info',
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
            'startLine' => 944,
            'endLine' => 944,
            'startColumn' => 34,
            'endColumn' => 52,
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
 * Sets the rebuild info.
 *
 * @param array $rebuild_info
 *   The rebuild info.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Form\\FormState::$rebuild_info
 */',
        'startLine' => 944,
        'endLine' => 944,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getRebuildInfo' => 
      array (
        'name' => 'getRebuildInfo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the rebuild info.
 *
 * @return array
 *   The rebuild info.
 *
 * @see \\Drupal\\Core\\Form\\FormState::$rebuild_info
 */',
        'startLine' => 954,
        'endLine' => 954,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'addRebuildInfo' => 
      array (
        'name' => 'addRebuildInfo',
        'parameters' => 
        array (
          'property' => 
          array (
            'name' => 'property',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 966,
            'endLine' => 966,
            'startColumn' => 34,
            'endColumn' => 42,
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
            'startLine' => 966,
            'endLine' => 966,
            'startColumn' => 45,
            'endColumn' => 50,
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
 * Adds a value to the rebuild info.
 *
 * @param string $property
 *   The property to use for the value.
 * @param mixed $value
 *   The value to set.
 *
 * @return $this
 */',
        'startLine' => 966,
        'endLine' => 966,
        'startColumn' => 3,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setSubmitHandlers' => 
      array (
        'name' => 'setSubmitHandlers',
        'parameters' => 
        array (
          'submit_handlers' => 
          array (
            'name' => 'submit_handlers',
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
            'startLine' => 976,
            'endLine' => 976,
            'startColumn' => 37,
            'endColumn' => 58,
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
 * Sets the submit handlers.
 *
 * @param array $submit_handlers
 *   An array of submit handlers.
 *
 * @return $this
 */',
        'startLine' => 976,
        'endLine' => 976,
        'startColumn' => 3,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getSubmitHandlers' => 
      array (
        'name' => 'getSubmitHandlers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the submit handlers.
 *
 * @return array
 *   An array of submit handlers.
 */',
        'startLine' => 984,
        'endLine' => 984,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setSubmitted' => 
      array (
        'name' => 'setSubmitted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets that the form has been submitted.
 *
 * @return $this
 */',
        'startLine' => 991,
        'endLine' => 991,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isSubmitted' => 
      array (
        'name' => 'isSubmitted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the form has been submitted.
 *
 * @return bool
 *   TRUE if the form has been submitted, FALSE otherwise.
 */',
        'startLine' => 999,
        'endLine' => 999,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setTemporary' => 
      array (
        'name' => 'setTemporary',
        'parameters' => 
        array (
          'temporary' => 
          array (
            'name' => 'temporary',
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
            'startLine' => 1009,
            'endLine' => 1009,
            'startColumn' => 32,
            'endColumn' => 47,
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
 * Sets temporary data.
 *
 * @param array $temporary
 *   Temporary data accessible during the current page request only.
 *
 * @return $this
 */',
        'startLine' => 1009,
        'endLine' => 1009,
        'startColumn' => 3,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getTemporary' => 
      array (
        'name' => 'getTemporary',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets temporary data.
 *
 * @return array
 *   Temporary data accessible during the current page request only.
 */',
        'startLine' => 1017,
        'endLine' => 1017,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getTemporaryValue' => 
      array (
        'name' => 'getTemporaryValue',
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
            'startLine' => 1032,
            'endLine' => 1032,
            'startColumn' => 38,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets an arbitrary value from temporary storage.
 *
 * @param string|array $key
 *   Properties are often stored as multi-dimensional associative arrays. If
 *   $key is a string, it will return $temporary[$key]. If $key is an array,
 *   each element of the array will be used as a nested key. If
 *   $key = [\'foo\', \'bar\'] it will return $temporary[\'foo\'][\'bar\'].
 *
 * @return mixed
 *   A reference to the value for that key, or NULL if the property does
 *   not exist.
 */',
        'startLine' => 1032,
        'endLine' => 1032,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setTemporaryValue' => 
      array (
        'name' => 'setTemporaryValue',
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
            'startLine' => 1047,
            'endLine' => 1047,
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
            'startLine' => 1047,
            'endLine' => 1047,
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
 * Sets an arbitrary value in temporary storage.
 *
 * @param string|array $key
 *   Properties are often stored as multi-dimensional associative arrays. If
 *   $key is a string, it will use $temporary[$key] = $value. If $key is an
 *   array, each element of the array will be used as a nested key. If
 *   $key = [\'foo\', \'bar\'] it will use $temporary[\'foo\'][\'bar\'] = $value.
 * @param mixed $value
 *   The value to set.
 *
 * @return $this
 */',
        'startLine' => 1047,
        'endLine' => 1047,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'hasTemporaryValue' => 
      array (
        'name' => 'hasTemporaryValue',
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
            'startLine' => 1058,
            'endLine' => 1058,
            'startColumn' => 37,
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
 * Determines if a temporary value is present.
 *
 * @param string $key
 *   Properties are often stored as multi-dimensional associative arrays. If
 *   $key is a string, it will return isset($temporary[$key]). If $key is an
 *   array, each element of the array will be used as a nested key. If
 *   $key = [\'foo\', \'bar\'] it will return isset($temporary[\'foo\'][\'bar\']).
 */',
        'startLine' => 1058,
        'endLine' => 1058,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setTriggeringElement' => 
      array (
        'name' => 'setTriggeringElement',
        'parameters' => 
        array (
          'triggering_element' => 
          array (
            'name' => 'triggering_element',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1068,
            'endLine' => 1068,
            'startColumn' => 40,
            'endColumn' => 58,
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
 * Sets the form element that triggered submission.
 *
 * @param array|null $triggering_element
 *   The form element that triggered submission, of NULL if there is none.
 *
 * @return $this
 */',
        'startLine' => 1068,
        'endLine' => 1068,
        'startColumn' => 3,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getTriggeringElement' => 
      array (
        'name' => 'getTriggeringElement',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the form element that triggered submission.
 *
 * @return array|null
 *   The form element that triggered submission, of NULL if there is none.
 */',
        'startLine' => 1076,
        'endLine' => 1076,
        'startColumn' => 3,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setValidateHandlers' => 
      array (
        'name' => 'setValidateHandlers',
        'parameters' => 
        array (
          'validate_handlers' => 
          array (
            'name' => 'validate_handlers',
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
            'startLine' => 1086,
            'endLine' => 1086,
            'startColumn' => 39,
            'endColumn' => 62,
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
 * Sets the validate handlers.
 *
 * @param array $validate_handlers
 *   An array of validate handlers.
 *
 * @return $this
 */',
        'startLine' => 1086,
        'endLine' => 1086,
        'startColumn' => 3,
        'endColumn' => 64,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getValidateHandlers' => 
      array (
        'name' => 'getValidateHandlers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the validate handlers.
 *
 * @return array
 *   An array of validate handlers.
 */',
        'startLine' => 1094,
        'endLine' => 1094,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setValidationComplete' => 
      array (
        'name' => 'setValidationComplete',
        'parameters' => 
        array (
          'validation_complete' => 
          array (
            'name' => 'validation_complete',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 1104,
                'endLine' => 1104,
                'startTokenPos' => 1208,
                'startFilePos' => 33820,
                'endTokenPos' => 1208,
                'endFilePos' => 33823,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1104,
            'endLine' => 1104,
            'startColumn' => 41,
            'endColumn' => 67,
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
 * Sets that validation has been completed.
 *
 * @param bool $validation_complete
 *   TRUE if validation is complete, FALSE otherwise.
 *
 * @return $this
 */',
        'startLine' => 1104,
        'endLine' => 1104,
        'startColumn' => 3,
        'endColumn' => 69,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'isValidationComplete' => 
      array (
        'name' => 'isValidationComplete',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if validation has been completed.
 *
 * @return bool
 *   TRUE if validation is complete, FALSE otherwise.
 */',
        'startLine' => 1112,
        'endLine' => 1112,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'getCleanValueKeys' => 
      array (
        'name' => 'getCleanValueKeys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the keys of the form values that will be cleaned.
 *
 * @return array
 *   An array of form value keys to be cleaned.
 */',
        'startLine' => 1120,
        'endLine' => 1120,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'setCleanValueKeys' => 
      array (
        'name' => 'setCleanValueKeys',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
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
            'startLine' => 1130,
            'endLine' => 1130,
            'startColumn' => 37,
            'endColumn' => 47,
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
 * Sets the keys of the form values that will be cleaned.
 *
 * @param array $keys
 *   An array of form value keys to be cleaned.
 *
 * @return $this
 */',
        'startLine' => 1130,
        'endLine' => 1130,
        'startColumn' => 3,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'addCleanValueKey' => 
      array (
        'name' => 'addCleanValueKey',
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
            'startLine' => 1140,
            'endLine' => 1140,
            'startColumn' => 36,
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
 * Adds a key to the array of form values that will be cleaned.
 *
 * @param string $key
 *   The form value key to be cleaned.
 *
 * @return $this
 */',
        'startLine' => 1140,
        'endLine' => 1140,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'aliasName' => NULL,
      ),
      'cleanValues' => 
      array (
        'name' => 'cleanValues',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Removes internal Form API elements and buttons from submitted form values.
 *
 * This function can be used when a module wants to store all submitted form
 * values, for example, by serializing them into a single database column. In
 * such cases, all internal Form API values and all form button elements
 * should not be contained, and this function allows their removal before the
 * module proceeds to storage. Next to button elements, the following internal
 * values are removed by default.
 * - form_id
 * - form_token
 * - form_build_id
 * - op
 *
 * @return $this
 */',
        'startLine' => 1158,
        'endLine' => 1158,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\FormStateInterface',
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