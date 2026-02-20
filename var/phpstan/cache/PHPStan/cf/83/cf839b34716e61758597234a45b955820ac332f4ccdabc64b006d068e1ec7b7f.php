<?php declare(strict_types = 1);

// odsl-/var/www/html/web/modules/custom/eventhub_import/src/Plugin/QueueWorker/GeoDataImportWorker.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_import\Plugin\QueueWorker\GeoDataImportWorker
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-6bf11df78ea19dcf5a1580af5aeed2344d3ba844dc77b06359a74d7ebcf04a45',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'filename' => '/var/www/html/web/modules/custom/eventhub_import/src/Plugin/QueueWorker/GeoDataImportWorker.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker',
    'name' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
    'shortName' => 'GeoDataImportWorker',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * Queue worker for importing communes by department from the geo API.
 *
 * Each queue item represents a single department. The worker fetches all
 * communes for that department and inserts them in batch.
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Drupal\\Core\\Queue\\Attribute\\QueueWorker',
        'isRepeated' => false,
        'arguments' => 
        array (
          'id' => 
          array (
            'code' => '\\Drupal\\eventhub_import\\Constants\\GeoApiConstants::QUEUE_NAME',
            'attributes' => 
            array (
              'startLine' => 25,
              'endLine' => 25,
              'startTokenPos' => 74,
              'startFilePos' => 809,
              'endTokenPos' => 76,
              'endFilePos' => 835,
            ),
          ),
          'title' => 
          array (
            'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'EventHub Geodata Import\')',
            'attributes' => 
            array (
              'startLine' => 26,
              'endLine' => 26,
              'startTokenPos' => 82,
              'startFilePos' => 847,
              'endTokenPos' => 87,
              'endFilePos' => 895,
            ),
          ),
          'cron' => 
          array (
            'code' => '[\'time\' => 60]',
            'attributes' => 
            array (
              'startLine' => 27,
              'endLine' => 27,
              'startTokenPos' => 93,
              'startFilePos' => 906,
              'endTokenPos' => 99,
              'endFilePos' => 919,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 24,
    'endLine' => 136,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'geoDataRepository' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'implementingClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'name' => 'geoDataRepository',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 57,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'httpClient' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'implementingClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'name' => 'httpClient',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'GuzzleHttp\\ClientInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'logger' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'implementingClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'name' => 'logger',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Psr\\Log\\LoggerInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Symfony\\Component\\DependencyInjection\\Attribute\\Autowire',
            'isRepeated' => false,
            'arguments' => 
            array (
              'service' => 
              array (
                'code' => '\'logger.channel.eventhub_import\'',
                'attributes' => 
                array (
                  'startLine' => 53,
                  'endLine' => 53,
                  'startTokenPos' => 165,
                  'startFilePos' => 1855,
                  'endTokenPos' => 165,
                  'endFilePos' => 1886,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 53,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 44,
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
          'configuration' => 
          array (
            'name' => 'configuration',
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
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 5,
            'endColumn' => 24,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 5,
            'endColumn' => 14,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'plugin_definition' => 
          array (
            'name' => 'plugin_definition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 5,
            'endColumn' => 22,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'geoDataRepository' => 
          array (
            'name' => 'geoDataRepository',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\eventhub_core\\Service\\GeoDataRepository',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 5,
            'endColumn' => 57,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'httpClient' => 
          array (
            'name' => 'httpClient',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'GuzzleHttp\\ClientInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 5,
            'endColumn' => 48,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
          'logger' => 
          array (
            'name' => 'logger',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Psr\\Log\\LoggerInterface',
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
                'name' => 'Symfony\\Component\\DependencyInjection\\Attribute\\Autowire',
                'isRepeated' => false,
                'arguments' => 
                array (
                  'service' => 
                  array (
                    'code' => '\'logger.channel.eventhub_import\'',
                    'attributes' => 
                    array (
                      'startLine' => 53,
                      'endLine' => 53,
                      'startTokenPos' => 165,
                      'startFilePos' => 1855,
                      'endTokenPos' => 165,
                      'endFilePos' => 1886,
                    ),
                  ),
                ),
              ),
            ),
            'startLine' => 53,
            'endLine' => 54,
            'startColumn' => 5,
            'endColumn' => 44,
            'parameterIndex' => 5,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs a GeoDataImportWorker object.
 *
 * @param array<string, mixed> $configuration
 *   A configuration array containing information about the plugin instance.
 * @param string $plugin_id
 *   The plugin ID for the plugin instance.
 * @param mixed $plugin_definition
 *   The plugin implementation definition.
 * @param \\Drupal\\eventhub_core\\Service\\GeoDataRepository $geoDataRepository
 *   The geodata repository.
 * @param \\GuzzleHttp\\ClientInterface $httpClient
 *   The HTTP client.
 * @param \\Psr\\Log\\LoggerInterface $logger
 *   The logger.
 */',
        'startLine' => 47,
        'endLine' => 57,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker',
        'declaringClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'implementingClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'currentClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 33,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'configuration' => 
          array (
            'name' => 'configuration',
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
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 64,
            'endColumn' => 83,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 86,
            'endColumn' => 95,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'plugin_definition' => 
          array (
            'name' => 'plugin_definition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 98,
            'endColumn' => 115,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 62,
        'endLine' => 71,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker',
        'declaringClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'implementingClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'currentClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'aliasName' => NULL,
      ),
      'processItem' => 
      array (
        'name' => 'processItem',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 76,
            'endLine' => 76,
            'startColumn' => 31,
            'endColumn' => 35,
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
 * {@inheritdoc}
 */',
        'startLine' => 76,
        'endLine' => 134,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker',
        'declaringClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'implementingClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
        'currentClassName' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
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