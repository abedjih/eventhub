<?php declare(strict_types = 1);

// odsl-/var/www/html/web/modules/custom/eventhub_import/tests/src/Unit/GeoDataImportWorkerTest.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Tests\eventhub_import\Unit\GeoDataImportWorkerTest
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-44790bdf0ffe9244f3adb2c2ba83c25cba32f9fcfc662a6df818db2e96f45869',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'filename' => '/var/www/html/web/modules/custom/eventhub_import/tests/src/Unit/GeoDataImportWorkerTest.php',
      ),
    ),
    'namespace' => 'Drupal\\Tests\\eventhub_import\\Unit',
    'name' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
    'shortName' => 'GeoDataImportWorkerTest',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Tests the GeoDataImportWorker queue worker.
 *
 * @group eventhub
 * @coversDefaultClass \\Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 20,
    'endLine' => 210,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Tests\\UnitTestCase',
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
      'worker' => 
      array (
        'declaringClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'name' => 'worker',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\eventhub_import\\Plugin\\QueueWorker\\GeoDataImportWorker',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The queue worker under test.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 3,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'geoDataRepository' => 
      array (
        'declaringClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'name' => 'geoDataRepository',
        'modifiers' => 4,
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
        'docComment' => '/**
 * The mocked geodata repository.
 *
 * @var \\Drupal\\eventhub_core\\Service\\GeoDataRepository|\\PHPUnit\\Framework\\MockObject\\MockObject
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'httpClient' => 
      array (
        'declaringClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'name' => 'httpClient',
        'modifiers' => 4,
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
        'docComment' => '/**
 * The mocked HTTP client.
 *
 * @var \\GuzzleHttp\\ClientInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 3,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'logger' => 
      array (
        'declaringClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'name' => 'logger',
        'modifiers' => 4,
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
        'docComment' => '/**
 * The mocked logger.
 *
 * @var \\Psr\\Log\\LoggerInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 3,
        'endColumn' => 34,
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
      'setUp' => 
      array (
        'name' => 'setUp',
        'parameters' => 
        array (
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
        'startLine' => 51,
        'endLine' => 66,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Tests\\eventhub_import\\Unit',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'aliasName' => NULL,
      ),
      'testProcessItemWithValidDepartment' => 
      array (
        'name' => 'testProcessItemWithValidDepartment',
        'parameters' => 
        array (
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
 * Tests processItem with a valid department.
 *
 * @covers ::processItem
 */',
        'startLine' => 73,
        'endLine' => 116,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Tests\\eventhub_import\\Unit',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'aliasName' => NULL,
      ),
      'testProcessItemSkipsMissingCode' => 
      array (
        'name' => 'testProcessItemSkipsMissingCode',
        'parameters' => 
        array (
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
 * Tests processItem skips items with missing department code.
 *
 * @covers ::processItem
 */',
        'startLine' => 123,
        'endLine' => 137,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Tests\\eventhub_import\\Unit',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'aliasName' => NULL,
      ),
      'testProcessItemHandlesEmptyResponse' => 
      array (
        'name' => 'testProcessItemHandlesEmptyResponse',
        'parameters' => 
        array (
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
 * Tests processItem handles empty API response.
 *
 * @covers ::processItem
 */',
        'startLine' => 144,
        'endLine' => 154,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Tests\\eventhub_import\\Unit',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'aliasName' => NULL,
      ),
      'testProcessItemSkipsInvalidCommunes' => 
      array (
        'name' => 'testProcessItemSkipsInvalidCommunes',
        'parameters' => 
        array (
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
 * Tests processItem skips communes with missing required fields.
 *
 * @covers ::processItem
 */',
        'startLine' => 161,
        'endLine' => 192,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Tests\\eventhub_import\\Unit',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'aliasName' => NULL,
      ),
      'testProcessItemRethrowsException' => 
      array (
        'name' => 'testProcessItemRethrowsException',
        'parameters' => 
        array (
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
 * Tests processItem rethrows exceptions from HTTP client.
 *
 * @covers ::processItem
 */',
        'startLine' => 199,
        'endLine' => 208,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Tests\\eventhub_import\\Unit',
        'declaringClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'implementingClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
        'currentClassName' => 'Drupal\\Tests\\eventhub_import\\Unit\\GeoDataImportWorkerTest',
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