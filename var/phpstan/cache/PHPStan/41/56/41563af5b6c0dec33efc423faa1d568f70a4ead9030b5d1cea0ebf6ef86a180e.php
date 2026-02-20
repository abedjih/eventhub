<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Render/AttachmentsTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Render\AttachmentsTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-dacd1446b83e7009169f3f42d7fb3e68afcdde542e829fa27f69eb3c30c9dc26-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Render\\AttachmentsTrait',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Render/AttachmentsTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Render',
    'name' => 'Drupal\\Core\\Render\\AttachmentsTrait',
    'shortName' => 'AttachmentsTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides an implementation of AttachmentsInterface.
 *
 * @see \\Drupal\\Core\\Render\\AttachmentsInterface
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 42,
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
      'attachments' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Render\\AttachmentsTrait',
        'implementingClassName' => 'Drupal\\Core\\Render\\AttachmentsTrait',
        'name' => 'attachments',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 23,
            'startFilePos' => 279,
            'endTokenPos' => 24,
            'endFilePos' => 280,
          ),
        ),
        'docComment' => '/**
 * The attachments for this response.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
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
      'getAttachments' => 
      array (
        'name' => 'getAttachments',
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
        'startLine' => 22,
        'endLine' => 24,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\AttachmentsTrait',
        'implementingClassName' => 'Drupal\\Core\\Render\\AttachmentsTrait',
        'currentClassName' => 'Drupal\\Core\\Render\\AttachmentsTrait',
        'aliasName' => NULL,
      ),
      'addAttachments' => 
      array (
        'name' => 'addAttachments',
        'parameters' => 
        array (
          'attachments' => 
          array (
            'name' => 'attachments',
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
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 34,
            'endColumn' => 51,
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
        'startLine' => 29,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\AttachmentsTrait',
        'implementingClassName' => 'Drupal\\Core\\Render\\AttachmentsTrait',
        'currentClassName' => 'Drupal\\Core\\Render\\AttachmentsTrait',
        'aliasName' => NULL,
      ),
      'setAttachments' => 
      array (
        'name' => 'setAttachments',
        'parameters' => 
        array (
          'attachments' => 
          array (
            'name' => 'attachments',
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
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 34,
            'endColumn' => 51,
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
        'startLine' => 37,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\AttachmentsTrait',
        'implementingClassName' => 'Drupal\\Core\\Render\\AttachmentsTrait',
        'currentClassName' => 'Drupal\\Core\\Render\\AttachmentsTrait',
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