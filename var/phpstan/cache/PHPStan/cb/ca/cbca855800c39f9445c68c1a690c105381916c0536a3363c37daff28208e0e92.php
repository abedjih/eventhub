<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Exception/InvalidPluginDefinitionException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-445d478e9eac3caf7a813049e1875facc0750d680f8ad4cd5ab87506ea7f82ea-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Component/Plugin/Exception/InvalidPluginDefinitionException.php',
      ),
    ),
    'namespace' => 'Drupal\\Component\\Plugin\\Exception',
    'name' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
    'shortName' => 'InvalidPluginDefinitionException',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines a class for invalid plugin definition exceptions.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 46,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
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
      'pluginId' => 
      array (
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
        'name' => 'pluginId',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The plugin ID of the mapper.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 3,
        'endColumn' => 22,
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
          'plugin_id' => 
          array (
            'name' => 'plugin_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 31,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 31,
                'endLine' => 31,
                'startTokenPos' => 41,
                'startFilePos' => 699,
                'endTokenPos' => 41,
                'endFilePos' => 700,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 43,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'code' => 
          array (
            'name' => 'code',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 31,
                'endLine' => 31,
                'startTokenPos' => 48,
                'startFilePos' => 711,
                'endTokenPos' => 48,
                'endFilePos' => 711,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 58,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'previous' => 
          array (
            'name' => 'previous',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 31,
                'endLine' => 31,
                'startTokenPos' => 58,
                'startFilePos' => 738,
                'endTokenPos' => 58,
                'endFilePos' => 741,
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
                      'name' => 'Throwable',
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
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 69,
            'endColumn' => 96,
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
 * Constructs an InvalidPluginDefinitionException.
 *
 * @param string $plugin_id
 *   The plugin ID of the mapper.
 * @param string $message
 *   The exception message.
 * @param int $code
 *   The exception code.
 * @param \\Throwable|null $previous
 *   The previous throwable used for exception chaining.
 *
 * @see \\Exception
 */',
        'startLine' => 31,
        'endLine' => 34,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Exception',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
        'aliasName' => NULL,
      ),
      'getPluginId' => 
      array (
        'name' => 'getPluginId',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the plugin ID of the mapper that raised the exception.
 *
 * @return string
 *   The plugin ID.
 */',
        'startLine' => 42,
        'endLine' => 44,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Component\\Plugin\\Exception',
        'declaringClassName' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
        'implementingClassName' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
        'currentClassName' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
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