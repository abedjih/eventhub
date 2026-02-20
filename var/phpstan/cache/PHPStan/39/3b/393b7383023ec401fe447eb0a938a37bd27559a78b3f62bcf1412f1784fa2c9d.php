<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Render/PlaceholderGeneratorInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Render\PlaceholderGeneratorInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-342e2133991d25867ef51188e96470ad1baf84fb1d177807c2d27a8afd2162fa-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Render/PlaceholderGeneratorInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Render',
    'name' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
    'shortName' => 'PlaceholderGeneratorInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for turning a render array into a placeholder.
 *
 * This encapsulates logic related to generating placeholders.
 *
 * Makes it possible to determine whether a render array can be placeholdered
 * (it can be reconstructed independently of the request context), whether a
 * render array should be placeholdered (its cacheability meets the conditions),
 * and to create a placeholder.
 *
 * @see \\Drupal\\Core\\Render\\RendererInterface
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 80,
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
      'canCreatePlaceholder' => 
      array (
        'name' => 'canCreatePlaceholder',
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
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 40,
            'endColumn' => 53,
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
 * Analyzes whether the given render array can be placeholdered.
 *
 * @param array $element
 *   A render array. Its #lazy_builder and #create_placeholder properties are
 *   analyzed.
 *
 * @return bool
 *   Returns TRUE is the render array can be overwritten with placeholders,
 *   FALSE otherwise.
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 3,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'implementingClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'currentClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'aliasName' => NULL,
      ),
      'shouldAutomaticallyPlaceholder' => 
      array (
        'name' => 'shouldAutomaticallyPlaceholder',
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
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 50,
            'endColumn' => 63,
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
 * Whether the given render array should be automatically placeholdered.
 *
 * The render array should be placeholdered if its cacheability either has a
 * cache context with too high cardinality, a cache tag with a too high
 * invalidation rate, or a max-age that is too low. Either of these would make
 * caching ineffective, and thus we choose to placeholder instead.
 *
 * @param array $element
 *   The render array whose cacheability to analyze.
 *
 * @return bool
 *   Whether the given render array\'s cacheability meets the placeholdering
 *   conditions.
 */',
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 3,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'implementingClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'currentClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'aliasName' => NULL,
      ),
      'createPlaceholder' => 
      array (
        'name' => 'createPlaceholder',
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
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 37,
            'endColumn' => 50,
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
 * Turns the given element into a placeholder.
 *
 * Placeholdering allows us to avoid "poor cacheability contamination": this
 * maps the current render array to one that only has #markup and #attached,
 * and #attached contains a placeholder with this element\'s prior cacheability
 * metadata. In other words: this placeholder is perfectly cacheable, the
 * placeholder replacement logic effectively cordons off poor cacheability.
 *
 * @param array $element
 *   The render array to create a placeholder for.
 *
 * @return array
 *   Render array with placeholder markup and the attached placeholder
 *   replacement metadata.
 */',
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 3,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'implementingClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'currentClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'aliasName' => NULL,
      ),
      'createPlaceholderTag' => 
      array (
        'name' => 'createPlaceholderTag',
        'parameters' => 
        array (
          'tag' => 
          array (
            'name' => 'tag',
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
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 47,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'attributes' => 
          array (
            'name' => 'attributes',
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
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 60,
            'endColumn' => 76,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generates a placeholder HTML tag.
 *
 * @param string $tag
 *   The placeholder tag.
 * @param array $attributes
 *   An array of key-value pairs to use as tag attributes.
 *
 * @return string
 *   The HTML placeholder.
 */',
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 3,
        'endColumn' => 86,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'implementingClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
        'currentClassName' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
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