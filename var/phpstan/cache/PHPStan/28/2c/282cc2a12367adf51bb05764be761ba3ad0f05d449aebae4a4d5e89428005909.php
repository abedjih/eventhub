<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../phpspec/prophecy-phpunit/src/ProphecyTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Prophecy\PhpUnit\ProphecyTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-fd94fc588e225e33c1f61e17e9171674bb4ee6185a869e7a82d9f03621bf09e5-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../phpspec/prophecy-phpunit/src/ProphecyTrait.php',
      ),
    ),
    'namespace' => 'Prophecy\\PhpUnit',
    'name' => 'Prophecy\\PhpUnit\\ProphecyTrait',
    'shortName' => 'ProphecyTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @mixin TestCase
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 126,
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
      'prophet' => 
      array (
        'declaringClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'implementingClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'name' => 'prophet',
        'modifiers' => 4,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var Prophet|null
 *
 * @internal
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'prophecyAssertionsCounted' => 
      array (
        'declaringClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'implementingClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'name' => 'prophecyAssertionsCounted',
        'modifiers' => 4,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 33,
            'startTokenPos' => 87,
            'startFilePos' => 721,
            'endTokenPos' => 87,
            'endFilePos' => 725,
          ),
        ),
        'docComment' => '/**
 * @var bool
 *
 * @internal
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 47,
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
      'prophesize' => 
      array (
        'name' => 'prophesize',
        'parameters' => 
        array (
          'classOrInterface' => 
          array (
            'name' => 'classOrInterface',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 45,
                'endLine' => 45,
                'startTokenPos' => 105,
                'startFilePos' => 1103,
                'endTokenPos' => 105,
                'endFilePos' => 1106,
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 35,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Prophecy\\Prophecy\\ObjectProphecy',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @throws DoubleException
 * @throws InterfaceNotFoundException
 *
 * @template T of object
 * @phpstan-param class-string<T>|null $classOrInterface
 * @phpstan-return ($classOrInterface is null ? ObjectProphecy<object> : ObjectProphecy<T>)
 *
 * @not-deprecated
 */',
        'startLine' => 45,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Prophecy\\PhpUnit',
        'declaringClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'implementingClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'currentClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'aliasName' => NULL,
      ),
      'verifyProphecyDoubles' => 
      array (
        'name' => 'verifyProphecyDoubles',
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
          0 => 
          array (
            'name' => 'PHPUnit\\Framework\\Attributes\\PostCondition',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * @postCondition
 */',
        'startLine' => 65,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Prophecy\\PhpUnit',
        'declaringClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'implementingClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'currentClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'aliasName' => NULL,
      ),
      'tearDownProphecy' => 
      array (
        'name' => 'tearDownProphecy',
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
          0 => 
          array (
            'name' => 'PHPUnit\\Framework\\Attributes\\After',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * @after
 */',
        'startLine' => 84,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Prophecy\\PhpUnit',
        'declaringClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'implementingClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'currentClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'aliasName' => NULL,
      ),
      'countProphecyAssertions' => 
      array (
        'name' => 'countProphecyAssertions',
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
 * @internal
 */',
        'startLine' => 98,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Prophecy\\PhpUnit',
        'declaringClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'implementingClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'currentClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'aliasName' => NULL,
      ),
      'getProphet' => 
      array (
        'name' => 'getProphet',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Prophecy\\Prophet',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @internal
 */',
        'startLine' => 118,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Prophecy\\PhpUnit',
        'declaringClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'implementingClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
        'currentClassName' => 'Prophecy\\PhpUnit\\ProphecyTrait',
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