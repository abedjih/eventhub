<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Render/BubbleableMetadata.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Render\BubbleableMetadata
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b1aea2a1b9442b7d0c9aa8b175d5e15bfb258e69dd03ff691a8ae15f3e38253a-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Render/BubbleableMetadata.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Render',
    'name' => 'Drupal\\Core\\Render\\BubbleableMetadata',
    'shortName' => 'BubbleableMetadata',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Value object used for bubbleable rendering metadata.
 *
 * @see \\Drupal\\Core\\Render\\RendererInterface::render()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 177,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Cache\\CacheableMetadata',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Render\\AttachmentsInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Render\\AttachmentsTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'merge' => 
      array (
        'name' => 'merge',
        'parameters' => 
        array (
          'other' => 
          array (
            'name' => 'other',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Cache\\CacheableMetadata',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 25,
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
 * Creates a new bubbleable metadata object by merging this one with another.
 *
 * @param \\Drupal\\Core\\Cache\\CacheableMetadata $other
 *   The other bubbleable metadata object.
 *
 * @return static
 *   A new bubbleable metadata object, with the merged data.
 */',
        'startLine' => 26,
        'endLine' => 44,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'implementingClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'currentClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'aliasName' => NULL,
      ),
      'applyTo' => 
      array (
        'name' => 'applyTo',
        'parameters' => 
        array (
          'build' => 
          array (
            'name' => 'build',
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
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 27,
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
 * Applies the values of this bubbleable metadata object to a render array.
 *
 * @param array &$build
 *   A render array.
 */',
        'startLine' => 52,
        'endLine' => 55,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'implementingClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'currentClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'aliasName' => NULL,
      ),
      'createFromRenderArray' => 
      array (
        'name' => 'createFromRenderArray',
        'parameters' => 
        array (
          'build' => 
          array (
            'name' => 'build',
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
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 48,
            'endColumn' => 59,
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
 * Creates a bubbleable metadata object with values taken from a render array.
 *
 * @param array $build
 *   A render array.
 *
 * @return static
 */',
        'startLine' => 65,
        'endLine' => 69,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'implementingClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'currentClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'aliasName' => NULL,
      ),
      'createFromObject' => 
      array (
        'name' => 'createFromObject',
        'parameters' => 
        array (
          'object' => 
          array (
            'name' => 'object',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 43,
            'endColumn' => 49,
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
 * Creates a bubbleable metadata object from a depended object.
 *
 * @param \\Drupal\\Core\\Cache\\CacheableDependencyInterface|mixed $object
 *   The object whose cacheability metadata to retrieve. If it implements
 *   CacheableDependencyInterface, its cacheability metadata will be used,
 *   otherwise, the passed in object must be assumed to be uncacheable, so
 *   max-age 0 is set.
 *
 * @return static
 */',
        'startLine' => 82,
        'endLine' => 90,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'implementingClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'currentClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'aliasName' => NULL,
      ),
      'addCacheableDependency' => 
      array (
        'name' => 'addCacheableDependency',
        'parameters' => 
        array (
          'other_object' => 
          array (
            'name' => 'other_object',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 95,
            'endLine' => 95,
            'startColumn' => 42,
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
 * {@inheritdoc}
 */',
        'startLine' => 95,
        'endLine' => 103,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'implementingClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'currentClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'aliasName' => NULL,
      ),
      'mergeAttachments' => 
      array (
        'name' => 'mergeAttachments',
        'parameters' => 
        array (
          'a' => 
          array (
            'name' => 'a',
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
            'startLine' => 147,
            'endLine' => 147,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'b' => 
          array (
            'name' => 'b',
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
            'startLine' => 147,
            'endLine' => 147,
            'startColumn' => 53,
            'endColumn' => 60,
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
 * Merges two attachments arrays (which live under the \'#attached\' key).
 *
 * The values under the \'drupalSettings\' key are merged in a special way, to
 * match the behavior of:
 *
 * @code
 *   jQuery.extend(true, {}, $settings_items[0], $settings_items[1], ...)
 * @endcode
 *
 * This means integer indices are preserved just like string indices are,
 * rather than re-indexed as is common in PHP array merging.
 *
 * Example:
 * @code
 * function module1_page_attachments(&$page) {
 *   $page[\'a\'][\'#attached\'][\'drupalSettings\'][\'foo\'] = [\'a\', \'b\', \'c\'];
 * }
 * function module2_page_attachments(&$page) {
 *   $page[\'#attached\'][\'drupalSettings\'][\'foo\'] = [\'d\'];
 * }
 * // When the page is rendered after the above code, and the browser runs the
 * // resulting <SCRIPT> tags, the value of drupalSettings.foo is
 * // [\'d\', \'b\', \'c\'], not [\'a\', \'b\', \'c\', \'d\'].
 * @endcode
 *
 * By following jQuery.extend() merge logic rather than common PHP array merge
 * logic, the following are ensured:
 * - Attaching JavaScript settings is idempotent: attaching the same settings
 *   twice does not change the output sent to the browser.
 * - If pieces of the page are rendered in separate PHP requests and the
 *   returned settings are merged by JavaScript, the resulting settings are
 *   the same as if rendered in one PHP request and merged by PHP.
 *
 * @param array $a
 *   An attachments array.
 * @param array $b
 *   Another attachments array.
 *
 * @return array
 *   The merged attachments array.
 */',
        'startLine' => 147,
        'endLine' => 175,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'implementingClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        'currentClassName' => 'Drupal\\Core\\Render\\BubbleableMetadata',
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