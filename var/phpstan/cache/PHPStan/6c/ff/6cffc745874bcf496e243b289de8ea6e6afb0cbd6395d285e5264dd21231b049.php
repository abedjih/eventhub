<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../symfony/validator/ConstraintValidator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\Validator\ConstraintValidator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-83f596b06bf9627a2254e5c2806338523519d89230b9eaea248271f791f7c62e-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../symfony/validator/ConstraintValidator.php',
      ),
    ),
    'namespace' => 'Symfony\\Component\\Validator',
    'name' => 'Symfony\\Component\\Validator\\ConstraintValidator',
    'shortName' => 'ConstraintValidator',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for constraint validators.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 151,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Symfony\\Component\\Validator\\ConstraintValidatorInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'PRETTY_DATE' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'implementingClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'name' => 'PRETTY_DATE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 27,
            'startTokenPos' => 38,
            'startFilePos' => 734,
            'endTokenPos' => 38,
            'endFilePos' => 734,
          ),
        ),
        'docComment' => '/**
 * Whether to format {@link \\DateTime} objects, either with the {@link \\IntlDateFormatter}
 * (if it is available) or as RFC-3339 dates ("Y-m-d H:i:s").
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 33,
      ),
      'OBJECT_TO_STRING' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'implementingClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'name' => 'OBJECT_TO_STRING',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 51,
            'startFilePos' => 862,
            'endTokenPos' => 51,
            'endFilePos' => 862,
          ),
        ),
        'docComment' => '/**
 * Whether to cast objects with a "__toString()" method to strings.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
    ),
    'immediateProperties' => 
    array (
      'context' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'implementingClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'name' => 'context',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 49,
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
      'initialize' => 
      array (
        'name' => 'initialize',
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
                'name' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 32,
            'endColumn' => 65,
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
        'docComment' => NULL,
        'startLine' => 36,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'implementingClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'currentClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'aliasName' => NULL,
      ),
      'formatTypeOf' => 
      array (
        'name' => 'formatTypeOf',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 37,
            'endColumn' => 48,
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
 * Returns a string representation of the type of the value.
 *
 * This method should be used if you pass the type of a value as
 * message parameter to a constraint violation. Note that such
 * parameters should usually not be included in messages aimed at
 * non-technical people.
 */',
        'startLine' => 49,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'implementingClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'currentClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'aliasName' => NULL,
      ),
      'formatValue' => 
      array (
        'name' => 'formatValue',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 135,
                'startFilePos' => 2557,
                'endTokenPos' => 135,
                'endFilePos' => 2557,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 50,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
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
 * Returns a string representation of the value.
 *
 * This method returns the equivalent PHP tokens for most scalar types
 * (i.e. "false" for false, "1" for 1 etc.). Strings are always wrapped
 * in double quotes ("). Objects, arrays and resources are formatted as
 * "object", "array" and "resource". If the $format bitmask contains
 * the PRETTY_DATE bit, then {@link \\DateTime} objects will be formatted
 * with the {@link \\IntlDateFormatter}. If it is not available, they will be
 * formatted as RFC-3339 dates ("Y-m-d H:i:s").
 *
 * Be careful when passing message parameters to a constraint violation
 * that (may) contain objects, arrays or resources. These parameters
 * should only be displayed for technical users. Non-technical users
 * won\'t know what an "object", "array" or "resource" is and will be
 * confused by the violation message.
 *
 * @param int $format A bitwise combination of the format constants in this class
 */',
        'startLine' => 73,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'implementingClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'currentClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'aliasName' => NULL,
      ),
      'formatValues' => 
      array (
        'name' => 'formatValues',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 37,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 143,
                'endLine' => 143,
                'startTokenPos' => 488,
                'startFilePos' => 4452,
                'endTokenPos' => 488,
                'endFilePos' => 4452,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 52,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
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
 * Returns a string representation of a list of values.
 *
 * Each of the values is converted to a string using
 * {@link formatValue()}. The values are then concatenated with commas.
 *
 * @param array $values A list of values
 * @param int   $format A bitwise combination of the format
 *                      constants in this class
 *
 * @see formatValue()
 */',
        'startLine' => 143,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'implementingClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
        'currentClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
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