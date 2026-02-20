<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Render/Renderer.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Render\Renderer
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-054340609a598f3456ee07bfdb4aeef1794bcb3e428f69a5b00ebfd80ad73e8c-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Render\\Renderer',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Render/Renderer.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Render',
    'name' => 'Drupal\\Core\\Render\\Renderer',
    'shortName' => 'Renderer',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Turns a render array into an HTML string.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 976,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Render\\RendererInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'rendererConfig' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'name' => 'rendererConfig',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The renderer configuration array.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 3,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isRenderingRoot' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'name' => 'isRenderingRoot',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 119,
            'startFilePos' => 1078,
            'endTokenPos' => 119,
            'endFilePos' => 1082,
          ),
        ),
        'docComment' => '/**
 * Whether we\'re currently in a ::renderRoot() call.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'contextCollection' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'name' => 'contextCollection',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The render context collection.
 *
 * An individual global render context is tied to the current request. We then
 * need to maintain a different context for each request to correctly handle
 * rendering in subrequests.
 *
 * This must be static as long as some controllers rebuild the container
 * during a request. This causes multiple renderer instances to co-exist
 * simultaneously, render state getting lost, and therefore causing pages to
 * fail to render correctly. As soon as it is guaranteed that during a request
 * the same container is used, it no longer needs to be static.
 *
 * @var \\Drupal\\Core\\Render\\RenderContext[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 3,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'callableResolver' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'name' => 'callableResolver',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Utility\\CallableResolver',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'theme' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'name' => 'theme',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'elementInfo' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'name' => 'elementInfo',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 54,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'placeholderGenerator' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'name' => 'placeholderGenerator',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 81,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 65,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'renderCache' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'name' => 'renderCache',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\Core\\Render\\RenderCacheInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 82,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'requestStack' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'name' => 'requestStack',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
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
          'callableResolver' => 
          array (
            'name' => 'callableResolver',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Utility\\CallableResolver',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 5,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'theme' => 
          array (
            'name' => 'theme',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 79,
            'endLine' => 79,
            'startColumn' => 5,
            'endColumn' => 42,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'elementInfo' => 
          array (
            'name' => 'elementInfo',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 80,
            'endLine' => 80,
            'startColumn' => 5,
            'endColumn' => 54,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'placeholderGenerator' => 
          array (
            'name' => 'placeholderGenerator',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Render\\PlaceholderGeneratorInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 81,
            'endLine' => 81,
            'startColumn' => 5,
            'endColumn' => 65,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'renderCache' => 
          array (
            'name' => 'renderCache',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Render\\RenderCacheInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 5,
            'endColumn' => 47,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
          'requestStack' => 
          array (
            'name' => 'requestStack',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 5,
            'endColumn' => 40,
            'parameterIndex' => 5,
            'isOptional' => false,
          ),
          'renderer_config' => 
          array (
            'name' => 'renderer_config',
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
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 5,
            'endColumn' => 26,
            'parameterIndex' => 6,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs a new Renderer.
 *
 * @param \\Drupal\\Core\\Utility\\CallableResolver $callableResolver
 *   The callable resolver.
 * @param \\Drupal\\Core\\Theme\\ThemeManagerInterface $theme
 *   The theme manager.
 * @param \\Drupal\\Core\\Render\\ElementInfoManagerInterface $elementInfo
 *   The element info.
 * @param \\Drupal\\Core\\Render\\PlaceholderGeneratorInterface $placeholderGenerator
 *   The placeholder generator.
 * @param \\Drupal\\Core\\Render\\RenderCacheInterface $renderCache
 *   The render cache service.
 * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $requestStack
 *   The request stack.
 * @param array $renderer_config
 *   The renderer configuration array.
 */',
        'startLine' => 77,
        'endLine' => 95,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'renderRoot' => 
      array (
        'name' => 'renderRoot',
        'parameters' => 
        array (
          'elements' => 
          array (
            'name' => 'elements',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 30,
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
 * {@inheritdoc}
 */',
        'startLine' => 100,
        'endLine' => 135,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'renderInIsolation' => 
      array (
        'name' => 'renderInIsolation',
        'parameters' => 
        array (
          'elements' => 
          array (
            'name' => 'elements',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 37,
            'endColumn' => 46,
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
        'startLine' => 140,
        'endLine' => 145,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'renderPlain' => 
      array (
        'name' => 'renderPlain',
        'parameters' => 
        array (
          'elements' => 
          array (
            'name' => 'elements',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 150,
            'endLine' => 150,
            'startColumn' => 31,
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
 * {@inheritdoc}
 */',
        'startLine' => 150,
        'endLine' => 153,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'doRenderPlaceholder' => 
      array (
        'name' => 'doRenderPlaceholder',
        'parameters' => 
        array (
          'placeholder_element' => 
          array (
            'name' => 'placeholder_element',
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
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 42,
            'endColumn' => 68,
            'parameterIndex' => 0,
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
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Renders a placeholder into markup.
 *
 * @param array $placeholder_element
 *   The placeholder element by reference.
 *
 * @return \\Drupal\\Component\\Render\\MarkupInterface|string
 *   The rendered HTML.
 */',
        'startLine' => 164,
        'endLine' => 171,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'doReplacePlaceholder' => 
      array (
        'name' => 'doReplacePlaceholder',
        'parameters' => 
        array (
          'placeholder' => 
          array (
            'name' => 'placeholder',
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
            'startLine' => 188,
            'endLine' => 188,
            'startColumn' => 43,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'markup' => 
          array (
            'name' => 'markup',
            'default' => NULL,
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
                      'name' => 'Drupal\\Component\\Render\\MarkupInterface',
                      'isIdentifier' => false,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 188,
            'endLine' => 188,
            'startColumn' => 64,
            'endColumn' => 93,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'elements' => 
          array (
            'name' => 'elements',
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
            'startLine' => 188,
            'endLine' => 188,
            'startColumn' => 96,
            'endColumn' => 110,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'placeholder_element' => 
          array (
            'name' => 'placeholder_element',
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
            'startLine' => 188,
            'endLine' => 188,
            'startColumn' => 113,
            'endColumn' => 138,
            'parameterIndex' => 3,
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
 * Replaces a placeholder with its markup.
 *
 * @param string $placeholder
 *   The placeholder HTML.
 * @param \\Drupal\\Component\\Render\\MarkupInterface|string $markup
 *   The markup to replace the placeholder with.
 * @param array $elements
 *   The render array that the placeholder is from.
 * @param array $placeholder_element
 *   The placeholder element render array.
 *
 * @return \\Drupal\\Component\\Render\\MarkupInterface|string
 *   The rendered HTML.
 */',
        'startLine' => 188,
        'endLine' => 198,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'renderPlaceholder' => 
      array (
        'name' => 'renderPlaceholder',
        'parameters' => 
        array (
          'placeholder' => 
          array (
            'name' => 'placeholder',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 203,
            'endLine' => 203,
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'elements' => 
          array (
            'name' => 'elements',
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
            'startLine' => 203,
            'endLine' => 203,
            'startColumn' => 51,
            'endColumn' => 65,
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
        'endLine' => 208,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'render' => 
      array (
        'name' => 'render',
        'parameters' => 
        array (
          'elements' => 
          array (
            'name' => 'elements',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 213,
            'endLine' => 213,
            'startColumn' => 37,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'is_root_call' => 
          array (
            'name' => 'is_root_call',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 213,
                'endLine' => 213,
                'startTokenPos' => 776,
                'startFilePos' => 7457,
                'endTokenPos' => 776,
                'endFilePos' => 7461,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 213,
            'endLine' => 213,
            'startColumn' => 49,
            'endColumn' => 69,
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
 * {@inheritdoc}
 */',
        'startLine' => 213,
        'endLine' => 231,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'doRenderRoot' => 
      array (
        'name' => 'doRenderRoot',
        'parameters' => 
        array (
          'elements' => 
          array (
            'name' => 'elements',
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
            'startLine' => 236,
            'endLine' => 236,
            'startColumn' => 35,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'context' => 
          array (
            'name' => 'context',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Render\\RenderContext',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 236,
            'endLine' => 236,
            'startColumn' => 53,
            'endColumn' => 74,
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
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Drupal\\Component\\Render\\MarkupInterface',
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
 * See the docs for ::render().
 */',
        'startLine' => 236,
        'endLine' => 268,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'doRender' => 
      array (
        'name' => 'doRender',
        'parameters' => 
        array (
          'elements' => 
          array (
            'name' => 'elements',
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
            'startLine' => 273,
            'endLine' => 273,
            'startColumn' => 31,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'context' => 
          array (
            'name' => 'context',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Render\\RenderContext',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 273,
            'endLine' => 273,
            'startColumn' => 49,
            'endColumn' => 70,
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
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Drupal\\Component\\Render\\MarkupInterface',
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
 * See the docs for ::render().
 */',
        'startLine' => 273,
        'endLine' => 612,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'hasRenderContext' => 
      array (
        'name' => 'hasRenderContext',
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
        'startLine' => 617,
        'endLine' => 619,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'executeInRenderContext' => 
      array (
        'name' => 'executeInRenderContext',
        'parameters' => 
        array (
          'context' => 
          array (
            'name' => 'context',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Render\\RenderContext',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 624,
            'endLine' => 624,
            'startColumn' => 42,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callable' => 
          array (
            'name' => 'callable',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 624,
            'endLine' => 624,
            'startColumn' => 66,
            'endColumn' => 83,
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
        'startLine' => 624,
        'endLine' => 665,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'loadElementDefaults' => 
      array (
        'name' => 'loadElementDefaults',
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
            'startLine' => 673,
            'endLine' => 673,
            'startColumn' => 42,
            'endColumn' => 56,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Loads an element\'s default values based on its type.
 *
 * @param array $element
 *   The render array representing the element.
 */',
        'startLine' => 673,
        'endLine' => 677,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'getCurrentRenderContext' => 
      array (
        'name' => 'getCurrentRenderContext',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the current render context.
 *
 * @return \\Drupal\\Core\\Render\\RenderContext|null
 *   The current render context.
 */',
        'startLine' => 685,
        'endLine' => 693,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'setCurrentRenderContext' => 
      array (
        'name' => 'setCurrentRenderContext',
        'parameters' => 
        array (
          'context' => 
          array (
            'name' => 'context',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 704,
                'endLine' => 704,
                'startTokenPos' => 3981,
                'startFilePos' => 29853,
                'endTokenPos' => 3981,
                'endFilePos' => 29856,
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
                      'name' => 'Drupal\\Core\\Render\\RenderContext',
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 704,
            'endLine' => 704,
            'startColumn' => 46,
            'endColumn' => 75,
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
 * Sets the current render context.
 *
 * @param \\Drupal\\Core\\Render\\RenderContext|null $context
 *   The render context. This can be NULL for instance when restoring the
 *   original render context, which is in fact NULL.
 *
 * @return $this
 */',
        'startLine' => 704,
        'endLine' => 708,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'replacePlaceholders' => 
      array (
        'name' => 'replacePlaceholders',
        'parameters' => 
        array (
          'elements' => 
          array (
            'name' => 'elements',
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
            'startLine' => 732,
            'endLine' => 732,
            'startColumn' => 42,
            'endColumn' => 57,
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
 * Replaces placeholders.
 *
 * Placeholders may have:
 * - #lazy_builder callback, to build a render array to be rendered into
 *   markup that can replace the placeholder
 * - #cache: to cache the result of the placeholder
 *
 * Also merges the bubbleable metadata resulting from the rendering of the
 * contents of the placeholders. Hence $elements will be contain the entirety
 * of bubbleable metadata.
 *
 * @param array &$elements
 *   The structured array describing the data being rendered. Including the
 *   bubbleable metadata associated with the markup that replaced the
 *   placeholders.
 *
 * @return bool
 *   Whether placeholders were replaced.
 *
 * @see \\Drupal\\Core\\Render\\Renderer::renderPlaceholder()
 */',
        'startLine' => 732,
        'endLine' => 801,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'mergeBubbleableMetadata' => 
      array (
        'name' => 'mergeBubbleableMetadata',
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
            'startLine' => 806,
            'endLine' => 806,
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
            'startLine' => 806,
            'endLine' => 806,
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
 * {@inheritdoc}
 */',
        'startLine' => 806,
        'endLine' => 811,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'addCacheableDependency' => 
      array (
        'name' => 'addCacheableDependency',
        'parameters' => 
        array (
          'elements' => 
          array (
            'name' => 'elements',
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
            'startLine' => 816,
            'endLine' => 816,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'dependency' => 
          array (
            'name' => 'dependency',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 816,
            'endLine' => 816,
            'startColumn' => 60,
            'endColumn' => 70,
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
        'startLine' => 816,
        'endLine' => 823,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'xssFilterAdminIfUnsafe' => 
      array (
        'name' => 'xssFilterAdminIfUnsafe',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 839,
            'endLine' => 839,
            'startColumn' => 45,
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
 * Applies a very permissive XSS/HTML filter for admin-only use.
 *
 * Note: This method only filters if $string is not marked safe already. This
 * ensures that HTML intended for display is not filtered.
 *
 * @param string|\\Drupal\\Core\\Render\\Markup $string
 *   A string.
 *
 * @return \\Drupal\\Core\\Render\\Markup
 *   The escaped string wrapped in a Markup object. If the string is an
 *   instance of \\Drupal\\Component\\Render\\MarkupInterface, it won\'t be escaped
 *   again.
 */',
        'startLine' => 839,
        'endLine' => 844,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'ensureMarkupIsSafe' => 
      array (
        'name' => 'ensureMarkupIsSafe',
        'parameters' => 
        array (
          'elements' => 
          array (
            'name' => 'elements',
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
            'startLine' => 874,
            'endLine' => 874,
            'startColumn' => 41,
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
 * Escapes #plain_text or filters #markup as required.
 *
 * Drupal uses Twig\'s auto-escape feature to improve security. This feature
 * automatically escapes any HTML that is not known to be safe. Due to this
 * the render system needs to ensure that all markup it generates is marked
 * safe so that Twig does not do any additional escaping.
 *
 * By default all #markup is filtered to protect against XSS using the admin
 * tag list. Render arrays can alter the list of tags allowed by the filter
 * using the #allowed_tags property. This value should be an array of tags
 * that Xss::filter() would accept. Render arrays can escape text instead
 * of XSS filtering by setting the #plain_text property instead of #markup. If
 * #plain_text is used #allowed_tags is ignored.
 *
 * @param array $elements
 *   A render array with #markup set.
 *
 * @return array
 *   The given array with the escaped markup wrapped in a Markup object.
 *   If $elements[\'#markup\'] is an instance of
 *   \\Drupal\\Component\\Render\\MarkupInterface, it won\'t be escaped or filtered
 *   again.
 *
 * @see \\Drupal\\Component\\Utility\\Html::escape()
 * @see \\Drupal\\Component\\Utility\\Xss::filter()
 * @see \\Drupal\\Component\\Utility\\Xss::filterAdmin()
 */',
        'startLine' => 874,
        'endLine' => 885,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'doCallback' => 
      array (
        'name' => 'doCallback',
        'parameters' => 
        array (
          'callback_type' => 
          array (
            'name' => 'callback_type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 902,
            'endLine' => 902,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 902,
            'endLine' => 902,
            'startColumn' => 49,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
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
            'startLine' => 902,
            'endLine' => 902,
            'startColumn' => 60,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Performs a callback.
 *
 * @param string $callback_type
 *   The type of the callback. For example, \'#post_render\'.
 * @param string|callable $callback
 *   The callback to perform.
 * @param array $args
 *   The arguments to pass to the callback.
 *
 * @return mixed
 *   The callback\'s return value.
 *
 * @see \\Drupal\\Core\\Security\\TrustedCallbackInterface
 */',
        'startLine' => 902,
        'endLine' => 911,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
        'aliasName' => NULL,
      ),
      'addDebugOutput' => 
      array (
        'name' => 'addDebugOutput',
        'parameters' => 
        array (
          'elements' => 
          array (
            'name' => 'elements',
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
            'startLine' => 928,
            'endLine' => 928,
            'startColumn' => 37,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'is_cache_hit' => 
          array (
            'name' => 'is_cache_hit',
            'default' => NULL,
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
            'startLine' => 928,
            'endLine' => 928,
            'startColumn' => 54,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'pre_bubbling_elements' => 
          array (
            'name' => 'pre_bubbling_elements',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 928,
                'endLine' => 928,
                'startTokenPos' => 4923,
                'startFilePos' => 39103,
                'endTokenPos' => 4924,
                'endFilePos' => 39104,
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
            'startLine' => 928,
            'endLine' => 928,
            'startColumn' => 74,
            'endColumn' => 106,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'render_time' => 
          array (
            'name' => 'render_time',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 928,
                'endLine' => 928,
                'startTokenPos' => 4933,
                'startFilePos' => 39128,
                'endTokenPos' => 4933,
                'endFilePos' => 39128,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'float',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 928,
            'endLine' => 928,
            'startColumn' => 109,
            'endColumn' => 130,
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
 * Add cache debug information to the render array.
 *
 * @param array $elements
 *   The renderable array that must be wrapped with the cache debug output.
 * @param bool $is_cache_hit
 *   A flag indicating that the cache is hit or miss.
 * @param array $pre_bubbling_elements
 *   The renderable array for pre-bubbling elements.
 * @param float $render_time
 *   The rendering time.
 *
 * @return array
 *   The renderable array.
 */',
        'startLine' => 928,
        'endLine' => 974,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Render',
        'declaringClassName' => 'Drupal\\Core\\Render\\Renderer',
        'implementingClassName' => 'Drupal\\Core\\Render\\Renderer',
        'currentClassName' => 'Drupal\\Core\\Render\\Renderer',
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