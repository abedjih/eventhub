<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Form/ConfirmFormInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Form\ConfirmFormInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-89f7a4324daf6ea8e75124bcfc1bac1e1e435988882478fc077177cd985125cd-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Form/ConfirmFormInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Form',
    'name' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
    'shortName' => 'ConfirmFormInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the behavior a confirmation form.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 58,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Form\\FormInterface',
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
      'getQuestion' => 
      array (
        'name' => 'getQuestion',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the question to ask the user.
 *
 * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   The form question. The page title will be set to this value.
 */',
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'aliasName' => NULL,
      ),
      'getCancelUrl' => 
      array (
        'name' => 'getCancelUrl',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the route to go to if the user cancels the action.
 *
 * @return \\Drupal\\Core\\Url
 *   A URL object.
 */',
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'aliasName' => NULL,
      ),
      'getDescription' => 
      array (
        'name' => 'getDescription',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns additional text to display as a description.
 *
 * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   The form description.
 */',
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'aliasName' => NULL,
      ),
      'getConfirmText' => 
      array (
        'name' => 'getConfirmText',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a caption for the button that confirms the action.
 *
 * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   The form confirmation text.
 */',
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'aliasName' => NULL,
      ),
      'getCancelText' => 
      array (
        'name' => 'getCancelText',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a caption for the link which cancels the action.
 *
 * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   The form cancellation text.
 */',
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'aliasName' => NULL,
      ),
      'getFormName' => 
      array (
        'name' => 'getFormName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the internal name used to refer to the confirmation item.
 *
 * @return string
 *   The internal form name.
 */',
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Form',
        'declaringClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'implementingClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
        'currentClassName' => 'Drupal\\Core\\Form\\ConfirmFormInterface',
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