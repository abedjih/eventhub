<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Attribute/Plugin.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Plugin\Attribute\Plugin
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-05dce4aa62fb9b06086cda7cea12b25ba8fb1af3d34fd1e6eab1e53c56b05c01-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Plugin\\Attribute\\Plugin',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Attribute/Plugin.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Plugin\\Attribute',
    'name' => 'Drupal\\Component\\Plugin\\Attribute\\Plugin',
    'shortName' => 'Plugin',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines a Plugin attribute object.
 *
 * Attributes in plugin classes can use this class in order to pass various
 * metadata about the plugin through the parser to
 * DiscoveryInterface::getDefinitions() calls.
 *
 * @ingroup plugin_api
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Attribute',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '\\Attribute::TARGET_CLASS',
            'attributes' => 
            array (
              'startLine' => 14,
              'endLine' => 14,
              'startTokenPos' => 12,
              'startFilePos' => 315,
              'endTokenPos' => 14,
              'endFilePos' => 338,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 14,
    'endLine' => 30,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Component\\Plugin\\Attribute\\AttributeBase',
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
      'id' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Attribute\\Plugin',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Attribute\\Plugin',
        'name' => 'id',
        'modifiers' => 2177,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'deriver' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Attribute\\Plugin',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Attribute\\Plugin',
        'name' => 'deriver',
        'modifiers' => 2177,
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
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 43,
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
          'id' => 
          array (
            'name' => 'id',
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 5,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'deriver' => 
          array (
            'name' => 'deriver',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 27,
                'endLine' => 27,
                'startTokenPos' => 57,
                'startFilePos' => 663,
                'endTokenPos' => 57,
                'endFilePos' => 666,
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
                      'name' => 'string',
                      'isIdentifier' => true,
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 5,
            'endColumn' => 43,
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
 * Constructs a plugin attribute object.
 *
 * @param string $id
 *   The plugin ID.
 * @param class-string|null $deriver
 *   (optional) The deriver class.
 */',
        'startLine' => 25,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Attribute',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Attribute\\Plugin',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Attribute\\Plugin',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Attribute\\Plugin',
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