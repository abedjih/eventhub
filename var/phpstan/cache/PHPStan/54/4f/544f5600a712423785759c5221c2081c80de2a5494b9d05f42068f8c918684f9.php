<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Queue/QueueFactory.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Queue\QueueFactory
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-0e93a3692aca89d704cc511a51ab008cb343b40da5052619151cb60a9f686425-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Queue\\QueueFactory',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Queue/QueueFactory.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Queue',
    'name' => 'Drupal\\Core\\Queue\\QueueFactory',
    'shortName' => 'QueueFactory',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the queue factory.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 74,
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
      'queues' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
        'name' => 'queues',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 19,
            'endLine' => 19,
            'startTokenPos' => 38,
            'startFilePos' => 332,
            'endTokenPos' => 39,
            'endFilePos' => 333,
          ),
        ),
        'docComment' => '/**
 * Instantiated queues, keyed by name.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'settings' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
        'name' => 'settings',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The settings object.
 *
 * @var \\Drupal\\Core\\Site\\Settings
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 3,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'container' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
        'name' => 'container',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Psr\\Container\\ContainerInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Symfony\\Component\\DependencyInjection\\Attribute\\AutowireLocator',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'queue_factory\'',
                'attributes' => 
                array (
                  'startLine' => 38,
                  'endLine' => 38,
                  'startTokenPos' => 66,
                  'startFilePos' => 763,
                  'endTokenPos' => 66,
                  'endFilePos' => 777,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 38,
        'endLine' => 39,
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
          'settings' => 
          array (
            'name' => 'settings',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Site\\Settings',
                'isIdentifier' => false,
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
            'startColumn' => 5,
            'endColumn' => 22,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Psr\\Container\\ContainerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
              0 => 
              array (
                'name' => 'Symfony\\Component\\DependencyInjection\\Attribute\\AutowireLocator',
                'isRepeated' => false,
                'arguments' => 
                array (
                  0 => 
                  array (
                    'code' => '\'queue_factory\'',
                    'attributes' => 
                    array (
                      'startLine' => 38,
                      'endLine' => 38,
                      'startTokenPos' => 66,
                      'startFilePos' => 763,
                      'endTokenPos' => 66,
                      'endFilePos' => 777,
                    ),
                  ),
                ),
              ),
            ),
            'startLine' => 38,
            'endLine' => 39,
            'startColumn' => 5,
            'endColumn' => 43,
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
 * Constructs QueueFactory object.
 *
 * @param \\Drupal\\Core\\Site\\Settings $settings
 *   The site settings.
 * @param \\Psr\\Container\\ContainerInterface $container
 *   A service locator that contains the queue services.
 */',
        'startLine' => 36,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
        'currentClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 23,
            'endColumn' => 27,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'reliable' => 
          array (
            'name' => 'reliable',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 57,
                'endLine' => 57,
                'startTokenPos' => 107,
                'startFilePos' => 1342,
                'endTokenPos' => 107,
                'endFilePos' => 1346,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 30,
            'endColumn' => 46,
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
 * Constructs a new queue.
 *
 * @param string $name
 *   The name of the queue to work with.
 * @param bool $reliable
 *   (optional) TRUE if the ordering of items and guaranteeing every item
 *   executes at least once is important, FALSE if scalability is the main
 *   concern. Defaults to FALSE.
 *
 * @return \\Drupal\\Core\\Queue\\QueueInterface
 *   A queue implementation for the given name.
 */',
        'startLine' => 57,
        'endLine' => 72,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Queue',
        'declaringClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
        'implementingClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
        'currentClassName' => 'Drupal\\Core\\Queue\\QueueFactory',
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