<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Render/FormattableMarkup.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Render\FormattableMarkup
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-fcb376c39f9483134fe2c182e9421dca9f3e037f192f2cbfe6e4db55beb9a04f-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Render/FormattableMarkup.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Render',
    'name' => 'Drupal\\Component\\Render\\FormattableMarkup',
    'shortName' => 'FormattableMarkup',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Formats a string for HTML display by replacing variable placeholders.
 *
 * When cast to a string, this object replaces variable placeholders in the
 * string with the arguments passed in during construction and escapes the
 * values so they can be safely displayed as HTML. See the documentation of
 * \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for details
 * on the supported placeholders and how to use them securely. Incorrect use of
 * this class can result in security vulnerabilities.
 *
 * In most cases, you should use TranslatableMarkup or PluralTranslatableMarkup
 * rather than this object, since they will translate the text (on
 * non-English-only sites) in addition to formatting it. Variables concatenated
 * without the insertion of language-specific words or punctuation are some
 * examples where translation is not applicable and using this class directly
 * is appropriate.
 *
 * This class is designed for formatting messages that are mostly text, not as
 * an HTML template language. As such:
 * - The passed in string should contain no (or minimal) HTML.
 * - The result from casting an object to a string should not be used within
 *   the "<" and ">" of an HTML tag, such as in HTML attribute values. This
 *   would be a security risk.
 * To build non-minimal HTML, use an HTML template language such as Twig,
 * rather than this class.
 *
 * @ingroup sanitization
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 * @see \\Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup
 * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 40,
    'endLine' => 241,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Component\\Render\\MarkupInterface',
      1 => 'Countable',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'string' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'implementingClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'name' => 'string',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The string containing placeholders.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 3,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'arguments' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'implementingClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'name' => 'arguments',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 54,
            'endLine' => 54,
            'startTokenPos' => 47,
            'startFilePos' => 2010,
            'endTokenPos' => 48,
            'endFilePos' => 2011,
          ),
        ),
        'docComment' => '/**
 * The arguments to replace placeholders with.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 3,
        'endColumn' => 28,
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
      '__construct' => 
      array (
        'name' => '__construct',
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
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
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
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 40,
            'endColumn' => 55,
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
 * Constructs a new class instance.
 *
 * @param string $string
 *   A string containing placeholders. The string itself will not be escaped,
 *   any unsafe content must be in $args and inserted via placeholders.
 * @param array $arguments
 *   An array with placeholder replacements, keyed by placeholder. See
 *   \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
 *   additional information about correct and secure use of placeholders.
 *
 * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
 */',
        'startLine' => 69,
        'endLine' => 72,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Render',
        'declaringClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'implementingClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'currentClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'aliasName' => NULL,
      ),
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
 * {@inheritdoc}
 */',
        'startLine' => 77,
        'endLine' => 79,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Render',
        'declaringClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'implementingClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'currentClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the string length.
 *
 * @return int
 *   The length of the string.
 */',
        'startLine' => 87,
        'endLine' => 89,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Render',
        'declaringClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'implementingClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'currentClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'aliasName' => NULL,
      ),
      'jsonSerialize' => 
      array (
        'name' => 'jsonSerialize',
        'parameters' => 
        array (
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
 * Returns a representation of the object for use in JSON serialization.
 *
 * @return string
 *   The safe string content.
 */',
        'startLine' => 97,
        'endLine' => 99,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Render',
        'declaringClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'implementingClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'currentClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'aliasName' => NULL,
      ),
      'placeholderFormat' => 
      array (
        'name' => 'placeholderFormat',
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
            'startLine' => 175,
            'endLine' => 175,
            'startColumn' => 47,
            'endColumn' => 53,
            'parameterIndex' => 0,
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
            'startLine' => 175,
            'endLine' => 175,
            'startColumn' => 56,
            'endColumn' => 66,
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
 * Replaces placeholders in a string with values.
 *
 * For convenience examples are listed here. Refer to the parameter
 * description for $args for details of the placeholders "@", "%", and ":".
 *
 * Secure examples.
 * @code
 * // Return the HTML string "Prefix $some_variable".
 * $this->placeholderFormat(\'Prefix @foo\', [\'@foo\' => $some_variable]);
 * // Convert an object to a sanitized string.
 * $this->placeholderFormat(\'Non-sanitized replacement value: @foo\', [\'@foo\' => (string) $safe_string_interface_object]);
 * // Wrap $some_variable in an <em> tag.
 * $this->placeholderFormat(\'Prefix %foo\', [\'%foo\' => $some_variable]);
 * // The following are using the : placeholder inside an HTML tag.
 * $this->placeholderFormat(\'<a href=":foo">link text</a>\', [\':foo\' => $some_variable]);
 * $this->placeholderFormat(\'<a href=":foo" title="static text">link text</a>\', [\':foo\' => $some_variable]);
 * $this->placeholderFormat(\'<a href=":foo">link text</a>\', [\':foo\' => $some_variable]);
 * // Use a : placeholder inside an HTML tag.
 * $this->placeholderFormat(\'<img src=":foo" />\', [\':foo\' => \'/image.png\']);
 * @endcode
 * The above are typical examples of using the placeholders correctly.
 *
 * Insecure examples.
 * @code
 * // The following are using the @ placeholder inside an HTML tag.
 * $this->placeholderFormat(\'<@foo>text</@foo>\', [\'@foo\' => $some_variable]);
 * $this->placeholderFormat(\'<a @foo>link text</a>\', [\'@foo\' => $some_variable]);
 * $this->placeholderFormat(\'<a href="@foo">link text</a>\', [\'@foo\' => $some_variable]);
 * $this->placeholderFormat(\'<a title="@foo">link text</a>\', [\'@foo\' => $some_variable]);
 * // Implicitly convert an object to a string, which is not sanitized.
 * $this->placeholderFormat(\'Non-sanitized replacement value: @foo\', [\'@foo\' => $safe_string_interface_object]);
 * @endcode
 * These are the more common mistakes that can be made. Make sure that your
 * site is not using any insecure usages of these placeholders.
 *
 * @param string $string
 *   A string containing placeholders. The string itself is expected to be
 *   safe and correct HTML. Any unsafe content must be in $args and inserted
 *   via placeholders. It is insecure to use the @ or % placeholders within
 *   the "<"  and ">" of an HTML tag.
 * @param array $args
 *   An associative array of replacements. Each array key should be the same
 *   as a placeholder in $string. The corresponding value should be a string
 *   or an object that implements \\Drupal\\Component\\Render\\MarkupInterface.
 *   The args[] value replaces the placeholder in $string. Sanitization and
 *   formatting will be done before replacement. The type of sanitization
 *   and formatting depends on the first character of the key:
 *   - @variable: Use as the default choice for anything displayed on the
 *     site. Do not use within the "<" and ">" of an HTML tag, such as in
 *     HTML attribute values. Doing so is a security risk.
 *   - %variable: Use when @variable would be appropriate, but you want the
 *     placeholder value to be wrapped in an <em> tag with a placeholder
 *     class. As with @variable, do not use within the "<" and ">" of an HTML
 *     tag, such as in HTML attribute values. Doing so is a security risk.
 *   - :variable: Use when the return value is to be used as a URL value of an
 *     HTML attribute. Only the "href" attribute is supported. The return
 *     value is escaped with
 *     \\Drupal\\Component\\Utility\\Html::escape() and filtered for dangerous
 *     protocols using UrlHelper::stripDangerousProtocols(). Use this when
 *     using the "href" attribute, ensuring the value is always wrapped in
 *     quotes.
 *
 * @return string
 *   A formatted HTML string with the placeholders replaced.
 *
 * @ingroup sanitization
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 * @see \\Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup
 * @see \\Drupal\\Component\\Utility\\Html::escape()
 * @see \\Drupal\\Component\\Utility\\UrlHelper::stripDangerousProtocols()
 * @see \\Drupal\\Core\\Url::fromUri()
 */',
        'startLine' => 175,
        'endLine' => 226,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Drupal\\Component\\Render',
        'declaringClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'implementingClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'currentClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'aliasName' => NULL,
      ),
      'placeholderEscape' => 
      array (
        'name' => 'placeholderEscape',
        'parameters' => 
        array (
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
            'startLine' => 237,
            'endLine' => 237,
            'startColumn' => 47,
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
 * Escapes a placeholder replacement value if needed.
 *
 * @param string|\\Drupal\\Component\\Render\\MarkupInterface $value
 *   A placeholder replacement value.
 *
 * @return string
 *   The properly escaped replacement value.
 */',
        'startLine' => 237,
        'endLine' => 239,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Drupal\\Component\\Render',
        'declaringClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'implementingClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
        'currentClassName' => 'Drupal\\Component\\Render\\FormattableMarkup',
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