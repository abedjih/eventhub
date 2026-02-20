<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Utility/Html.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Utility\Html
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-0ac88e2ad194c98dce81e1c315bb1ae1bf63fb5cbca040fb54a75634d5c45e75-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Utility\\Html',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Utility/Html.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Utility',
    'name' => 'Drupal\\Component\\Utility\\Html',
    'shortName' => 'Html',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides DOMDocument helpers for parsing and serializing HTML strings.
 *
 * @ingroup utility
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 495,
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
      'classes' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'name' => 'classes',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 20,
            'startTokenPos' => 35,
            'startFilePos' => 344,
            'endTokenPos' => 36,
            'endFilePos' => 345,
          ),
        ),
        'docComment' => '/**
 * An array of previously cleaned HTML classes.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 3,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'seenIdsInit' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'name' => 'seenIdsInit',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * An array of the initial IDs used in one request.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 3,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'seenIds' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'name' => 'seenIds',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * An array of IDs, including incremented versions when an ID is duplicated.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 3,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isAjax' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'name' => 'isAjax',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 41,
            'endLine' => 41,
            'startTokenPos' => 67,
            'startFilePos' => 732,
            'endTokenPos' => 67,
            'endFilePos' => 736,
          ),
        ),
        'docComment' => '/**
 * Stores whether the current request was sent via AJAX.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 3,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'uriAttributes' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'name' => 'uriAttributes',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'href\', \'poster\', \'src\', \'cite\', \'data\', \'action\', \'formaction\', \'srcset\', \'about\']',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 80,
            'startFilePos' => 1591,
            'endTokenPos' => 106,
            'endFilePos' => 1674,
          ),
        ),
        'docComment' => '/**
 * All attributes that may contain URIs.
 *
 * - The attributes \'code\' and \'codebase\' are omitted, because they only exist
 *   for the <applet> tag. The time of Java applets has passed.
 * - The attribute \'icon\' is omitted, because no browser implements the
 *   <command> tag anymore.
 *  See https://developer.mozilla.org/en-US/docs/Web/HTML/Element/command.
 * - The \'manifest\' attribute is omitted because it only exists for the <html>
 *   tag. That tag only makes sense in an HTML-served-as-HTML context, in
 *   which case relative URLs are guaranteed to work.
 *
 * @var string[]
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
 * @see https://stackoverflow.com/questions/2725156/complete-list-of-html-tag-attributes-which-have-a-url-value
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 3,
        'endColumn' => 121,
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
      'getClass' => 
      array (
        'name' => 'getClass',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 75,
            'endLine' => 75,
            'startColumn' => 35,
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
 * Prepares a string for use as a valid class name.
 *
 * Do not pass one string containing multiple classes as they will be
 * incorrectly concatenated with dashes, i.e. "one two" will become "one-two".
 *
 * @param mixed $class
 *   The class name to clean. It can be a string or anything that can be cast
 *   to string.
 *
 * @return string
 *   The cleaned class name.
 */',
        'startLine' => 75,
        'endLine' => 81,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'cleanCssIdentifier' => 
      array (
        'name' => 'cleanCssIdentifier',
        'parameters' => 
        array (
          'identifier' => 
          array (
            'name' => 'identifier',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 5,
            'endColumn' => 15,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'filter' => 
          array (
            'name' => 'filter',
            'default' => 
            array (
              'code' => '[\' \' => \'-\', \'_\' => \'-\', \'/\' => \'-\', \'[\' => \'-\', \']\' => \'\']',
              'attributes' => 
              array (
                'startLine' => 101,
                'endLine' => 107,
                'startTokenPos' => 204,
                'startFilePos' => 2920,
                'endTokenPos' => 241,
                'endFilePos' => 3015,
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
            'startLine' => 101,
            'endLine' => 107,
            'startColumn' => 5,
            'endColumn' => 5,
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
 * Prepares a string for use as a CSS identifier (element, class, or ID name).
 *
 * Link below shows the syntax for valid CSS identifiers (including element
 * names, classes, and IDs in selectors).
 *
 * @param string $identifier
 *   The identifier to clean.
 * @param array $filter
 *   An array of string replacements to use on the identifier.
 *
 * @return string
 *   The cleaned identifier.
 *
 * @see https://www.w3.org/TR/CSS21/syndata.html#characters
 */',
        'startLine' => 99,
        'endLine' => 139,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'setIsAjax' => 
      array (
        'name' => 'setIsAjax',
        'parameters' => 
        array (
          'is_ajax' => 
          array (
            'name' => 'is_ajax',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 147,
            'endLine' => 147,
            'startColumn' => 36,
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
 * Sets if this request is an Ajax request.
 *
 * @param bool $is_ajax
 *   TRUE if this request is an Ajax request, FALSE otherwise.
 */',
        'startLine' => 147,
        'endLine' => 149,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'getUniqueId' => 
      array (
        'name' => 'getUniqueId',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 38,
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
 * Prepares a string for use as a valid HTML ID and guarantees uniqueness.
 *
 * This function ensures that each passed HTML ID value only exists once on
 * the page. By tracking the already returned ids, this function enables
 * forms, blocks, and other content to be output multiple times on the same
 * page, without breaking HTML validation.
 *
 * For already existing IDs, a counter is appended to the ID string.
 * Therefore, JavaScript and CSS code should not rely on any value that was
 * generated by this function and instead should rely on manually added CSS
 * classes or similarly reliable constructs.
 *
 * Two consecutive hyphens separate the counter from the original ID. To
 * manage uniqueness across multiple Ajax requests on the same page, Ajax
 * requests POST an array of all IDs currently present on the page, which are
 * used to prime this function\'s cache upon first invocation.
 *
 * To allow reverse-parsing of IDs submitted via Ajax, any multiple
 * consecutive hyphens in the originally passed $id are replaced with a
 * single hyphen.
 *
 * @param string $id
 *   The ID to clean.
 *
 * @return string
 *   The cleaned ID.
 */',
        'startLine' => 179,
        'endLine' => 210,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'getId' => 
      array (
        'name' => 'getId',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 226,
            'endLine' => 226,
            'startColumn' => 32,
            'endColumn' => 34,
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
 * Prepares a string for use as a valid HTML ID.
 *
 * Only use this function when you want to intentionally skip the uniqueness
 * guarantee of self::getUniqueId().
 *
 * @param string $id
 *   The ID to clean.
 *
 * @return string
 *   The cleaned ID.
 *
 * @see self::getUniqueId()
 */',
        'startLine' => 226,
        'endLine' => 240,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'resetSeenIds' => 
      array (
        'name' => 'resetSeenIds',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets the list of seen IDs.
 */',
        'startLine' => 245,
        'endLine' => 247,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'normalize' => 
      array (
        'name' => 'normalize',
        'parameters' => 
        array (
          'html' => 
          array (
            'name' => 'html',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 261,
            'endLine' => 261,
            'startColumn' => 36,
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
 * Normalizes an HTML snippet.
 *
 * This function is essentially \\DOMDocument::normalizeDocument(), but
 * operates on an HTML string instead of a \\DOMDocument.
 *
 * @param string $html
 *   The HTML string to normalize.
 *
 * @return string
 *   The normalized HTML string.
 */',
        'startLine' => 261,
        'endLine' => 264,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'load' => 
      array (
        'name' => 'load',
        'parameters' => 
        array (
          'html' => 
          array (
            'name' => 'html',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 282,
            'endLine' => 282,
            'startColumn' => 31,
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
 * Parses an HTML snippet and returns it as a DOM object.
 *
 * This function loads the body part of a partial HTML document and returns a
 * full \\DOMDocument object that represents this document.
 *
 * Use \\Drupal\\Component\\Utility\\Html::serialize() to serialize this
 * \\DOMDocument back to a string.
 *
 * @param string|\\Stringable $html
 *   The partial HTML snippet to load. Invalid markup will be corrected on
 *   import.
 *
 * @return \\DOMDocument
 *   A \\DOMDocument that represents the loaded HTML snippet.
 */',
        'startLine' => 282,
        'endLine' => 290,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'serialize' => 
      array (
        'name' => 'serialize',
        'parameters' => 
        array (
          'document' => 
          array (
            'name' => 'document',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DOMDocument',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 36,
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
 * Converts the body of a \\DOMDocument back to an HTML snippet.
 *
 * The function serializes the body part of a \\DOMDocument back to an HTML
 * snippet. The resulting HTML snippet will be properly formatted to be
 * compatible with HTML user agents.
 *
 * @param \\DOMDocument $document
 *   A \\DOMDocument object to serialize, only the tags below the first <body>
 *   node will be converted.
 *
 * @return string
 *   A valid HTML snippet, as a string.
 */',
        'startLine' => 306,
        'endLine' => 335,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'escapeCdataElement' => 
      array (
        'name' => 'escapeCdataElement',
        'parameters' => 
        array (
          'node' => 
          array (
            'name' => 'node',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DOMNode',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 356,
            'endLine' => 356,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'comment_start' => 
          array (
            'name' => 'comment_start',
            'default' => 
            array (
              'code' => '\'//\'',
              'attributes' => 
              array (
                'startLine' => 356,
                'endLine' => 356,
                'startTokenPos' => 1155,
                'startFilePos' => 12011,
                'endTokenPos' => 1155,
                'endFilePos' => 12014,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 356,
            'endLine' => 356,
            'startColumn' => 61,
            'endColumn' => 81,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'comment_end' => 
          array (
            'name' => 'comment_end',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 356,
                'endLine' => 356,
                'startTokenPos' => 1162,
                'startFilePos' => 12032,
                'endTokenPos' => 1162,
                'endFilePos' => 12033,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 356,
            'endLine' => 356,
            'startColumn' => 84,
            'endColumn' => 100,
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
 * Adds comments around a <!CDATA section in a \\DOMNode.
 *
 * \\DOMDocument::loadHTML() in \\Drupal\\Component\\Utility\\Html::load() makes
 * CDATA sections from the contents of inline script and style tags. This can
 * cause HTML4 browsers to throw exceptions.
 *
 * This function attempts to solve the problem by creating a
 * \\DOMDocumentFragment to comment the CDATA tag.
 *
 * @param \\DOMNode $node
 *   The element potentially containing a CDATA node.
 * @param string $comment_start
 *   (optional) A string to use as a comment start marker to escape the CDATA
 *   declaration. Defaults to \'//\'.
 * @param string $comment_end
 *   (optional) A string to use as a comment end marker to escape the CDATA
 *   declaration. Defaults to an empty string.
 */',
        'startLine' => 356,
        'endLine' => 373,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'decodeEntities' => 
      array (
        'name' => 'decodeEntities',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
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
            'startLine' => 395,
            'endLine' => 395,
            'startColumn' => 41,
            'endColumn' => 52,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Decodes all HTML entities including numerical ones to regular UTF-8 bytes.
 *
 * Double-escaped entities will only be decoded once ("&amp;lt;" becomes
 * "&lt;", not "<"). Be careful when using this function, as it will revert
 * previous sanitization efforts (&lt;script&gt; will become <script>).
 *
 * This method is not the opposite of Html::escape(). For example, this method
 * will convert "&eacute;" to "é", whereas Html::escape() will not convert "é"
 * to "&eacute;".
 *
 * @param string $text
 *   The text to decode entities in.
 *
 * @return string
 *   The input $text, with all HTML entities decoded once.
 *
 * @see html_entity_decode()
 * @see \\Drupal\\Component\\Utility\\Html::escape()
 */',
        'startLine' => 395,
        'endLine' => 397,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'escape' => 
      array (
        'name' => 'escape',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
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
            'startLine' => 433,
            'endLine' => 433,
            'startColumn' => 33,
            'endColumn' => 44,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Escapes text by converting special characters to HTML entities.
 *
 * This method escapes HTML for sanitization purposes by replacing the
 * following special characters with their HTML entity equivalents:
 * - & (ampersand) becomes &amp;
 * - " (double quote) becomes &quot;
 * - \' (single quote) becomes &#039;
 * - < (less than) becomes &lt;
 * - > (greater than) becomes &gt;
 * Special characters that have already been escaped will be double-escaped
 * (for example, "&lt;" becomes "&amp;lt;"), and invalid UTF-8 encoding
 * will be converted to the Unicode replacement character ("�").
 *
 * This method is not the opposite of Html::decodeEntities(). For example,
 * this method will not encode "é" to "&eacute;", whereas
 * Html::decodeEntities() will convert all HTML entities to UTF-8 bytes,
 * including "&eacute;" and "&lt;" to "é" and "<".
 *
 * When constructing @link theme_render render arrays @endlink passing the
 * output of Html::escape() to \'#markup\' is not recommended. Use the
 * \'#plain_text\' key instead and the renderer will autoescape the text.
 *
 * @param string $text
 *   The input text.
 *
 * @return string
 *   The text with all HTML special characters converted.
 *
 * @see htmlspecialchars()
 * @see \\Drupal\\Component\\Utility\\Html::decodeEntities()
 *
 * @ingroup sanitization
 */',
        'startLine' => 433,
        'endLine' => 435,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
        'aliasName' => NULL,
      ),
      'transformRootRelativeUrlsToAbsolute' => 
      array (
        'name' => 'transformRootRelativeUrlsToAbsolute',
        'parameters' => 
        array (
          'html' => 
          array (
            'name' => 'html',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 464,
            'endLine' => 464,
            'startColumn' => 62,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'scheme_and_host' => 
          array (
            'name' => 'scheme_and_host',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 464,
            'endLine' => 464,
            'startColumn' => 69,
            'endColumn' => 84,
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
 * Converts all root-relative URLs to absolute URLs.
 *
 * Does not change any existing protocol-relative or absolute URLs. Does not
 * change other relative URLs because they would result in different absolute
 * URLs depending on the current path. For example: when the same content
 * containing such a relative URL (for example \'image.png\'), is served from
 * its canonical URL (for example \'https://example.com/some-article\') or from
 * a listing or feed (for example \'https://example.com/all-articles\') their
 * "current path" differs, resulting in different absolute URLs:
 * \'https://example.com/some-article/image.png\' versus
 * \'https://example.com/all-articles/image.png\'. Only one can be correct.
 * Therefore relative URLs that are not root-relative cannot be safely
 * transformed and should generally be avoided.
 *
 * Necessary for HTML that is served outside of a website, for example, RSS
 * and email.
 *
 * @param string $html
 *   The partial HTML snippet to load. Invalid markup will be corrected on
 *   import.
 * @param string $scheme_and_host
 *   The root URL, which has a URI scheme, host and optional port.
 *
 * @return string
 *   The updated HTML snippet.
 */',
        'startLine' => 464,
        'endLine' => 493,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Component\\Utility',
        'declaringClassName' => 'Drupal\\Component\\Utility\\Html',
        'implementingClassName' => 'Drupal\\Component\\Utility\\Html',
        'currentClassName' => 'Drupal\\Component\\Utility\\Html',
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