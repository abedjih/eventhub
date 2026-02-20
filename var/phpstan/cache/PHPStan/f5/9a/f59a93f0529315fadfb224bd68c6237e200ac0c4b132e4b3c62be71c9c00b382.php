<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Render/MarkupInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Render\MarkupInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a7b6e9c158c4fc0f2e675e3f256c2dec33076f3ce51fcb204d017793eb1f66e1-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Render\\MarkupInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Render/MarkupInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Render',
    'name' => 'Drupal\\Component\\Render\\MarkupInterface',
    'shortName' => 'MarkupInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Marks an object\'s __toString() method as returning markup.
 *
 * Objects that implement this interface will not be automatically XSS filtered
 * by the render system or automatically escaped by the theme engine.
 *
 * If there is any risk of the object\'s __toString() method returning
 * user-entered data that has not been filtered first, it must not be used. If
 * the object that implements this does not perform automatic escaping or
 * filtering itself, then it must be marked as "@internal". For example, Views
 * has the internal ViewsRenderPipelineMarkup object to provide a custom render
 * pipeline in order to render JSON and to fast render fields. By contrast,
 * FormattableMarkup and TranslatableMarkup always sanitize their output when
 * used correctly.
 *
 * If the object is going to be used directly in Twig templates it should
 * implement \\Countable so it can be used in if statements.
 *
 * @see \\Drupal\\Component\\Render\\MarkupTrait
 * @see \\Drupal\\Core\\Template\\TwigExtension::escapeFilter()
 * @see \\Drupal\\Component\\Render\\FormattableMarkup
 * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 * @see \\Drupal\\views\\Render\\ViewsRenderPipelineMarkup
 * @see twig_render_template()
 * @see sanitization
 * @see theme_render
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 32,
    'endLine' => 42,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'JsonSerializable',
      1 => 'Stringable',
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
      '__toString' => 
      array (
        'name' => '__toString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns markup.
 *
 * @return string
 *   The markup.
 */',
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Render',
        'declaringClassName' => 'Drupal\\Component\\Render\\MarkupInterface',
        'implementingClassName' => 'Drupal\\Component\\Render\\MarkupInterface',
        'currentClassName' => 'Drupal\\Component\\Render\\MarkupInterface',
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