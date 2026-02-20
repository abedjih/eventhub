<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Render/AttachmentsInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Render\AttachmentsInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-63606eac5f52e086a908e67f206d4216868159dcc96f30f83a58b247c40620cc-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Render\\AttachmentsInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Render/AttachmentsInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Render',
    'name' => 'Drupal\\Core\\Render\\AttachmentsInterface',
    'shortName' => 'AttachmentsInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * The attached metadata collection for a renderable element.
 *
 * Libraries, JavaScript settings, feeds, HTML <head> tags, HTML <head> links,
 * HTTP headers, and the HTTP status code are attached to render arrays using
 * the #attached property. The #attached property is an associative array, where
 * the keys are the attachment types and the values are the attached data. For
 * example:
 *
 * @code
 *  $build[\'#attached\'][\'library\'][] = \'core/jquery\';
 *  $build[\'#attached\'][\'http_header\'] = [
 *    [\'Content-Type\', \'application/rss+xml; charset=utf-8\'],
 *  ];
 * @endcode
 *
 * The keys used by core are:
 * - drupalSettings: (optional) JavaScript settings.
 * - feed: (optional) RSS feeds.
 * - html_head: (optional) Tags used in HTML <head>.
 * - html_head_link: (optional) The <link> tags in HTML <head>.
 * - http_header: (optional) HTTP headers and status code.
 * - html_response_attachment_placeholders: (optional) Placeholders used in a
 *   response attachment
 * - library: (optional) Asset libraries.
 * - placeholders: (optional) Any placeholders.
 *
 * @todo If in Drupal 9, we remove attachments other than assets (libraries +
 *   drupalSettings), then we can look into unifying this with
 *   \\Drupal\\Core\\Asset\\AttachedAssetsInterface.
 *
 * @see \\Drupal\\Core\\Render\\AttachmentsTrait
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 38,
    'endLine' => 68,
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
 * Gets this object\'s attached collection.
 *
 * @return array
 *   The attachments array.
 */',
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\AttachmentsInterface',
        'implementingClassName' => 'Drupal\\Core\\Render\\AttachmentsInterface',
        'currentClassName' => 'Drupal\\Core\\Render\\AttachmentsInterface',
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
            'startLine' => 56,
            'endLine' => 56,
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
 * Merges an array of attached data into this object\'s collection.
 *
 * @param array $attachments
 *   The attachments to add.
 *
 * @return $this
 */',
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\AttachmentsInterface',
        'implementingClassName' => 'Drupal\\Core\\Render\\AttachmentsInterface',
        'currentClassName' => 'Drupal\\Core\\Render\\AttachmentsInterface',
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
            'startLine' => 66,
            'endLine' => 66,
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
 * Replaces this object\'s attached data with the provided array.
 *
 * @param array $attachments
 *   The attachments to set.
 *
 * @return $this
 */',
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\AttachmentsInterface',
        'implementingClassName' => 'Drupal\\Core\\Render\\AttachmentsInterface',
        'currentClassName' => 'Drupal\\Core\\Render\\AttachmentsInterface',
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