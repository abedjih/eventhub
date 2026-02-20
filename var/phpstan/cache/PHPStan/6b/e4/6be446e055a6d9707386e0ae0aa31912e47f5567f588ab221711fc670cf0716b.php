<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../symfony/validator/Constraint.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\Validator\Constraint
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-d05fd44cca1485254f6a5e27bafdc98b9f179a565174d146446d5ccb1180b01e-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Component\\Validator\\Constraint',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../symfony/validator/Constraint.php',
      ),
    ),
    'namespace' => 'Symfony\\Component\\Validator',
    'name' => 'Symfony\\Component\\Validator\\Constraint',
    'shortName' => 'Constraint',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Contains the properties of a constraint definition.
 *
 * A constraint can be defined on a class, a property or a getter method.
 * The Constraint class encapsulates all the configuration required for
 * validating this class, property or getter result successfully.
 *
 * Constraint instances are immutable and serializable.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 30,
    'endLine' => 332,
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
      'DEFAULT_GROUP' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'name' => 'DEFAULT_GROUP',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'Default\'',
          'attributes' => 
          array (
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 49,
            'startFilePos' => 1100,
            'endTokenPos' => 49,
            'endFilePos' => 1108,
          ),
        ),
        'docComment' => '/**
 * The name of the group given to all constraints with no explicit group.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 43,
      ),
      'CLASS_CONSTRAINT' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'name' => 'CLASS_CONSTRAINT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'class\'',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 62,
            'startFilePos' => 1220,
            'endTokenPos' => 62,
            'endFilePos' => 1226,
          ),
        ),
        'docComment' => '/**
 * Marks a constraint that can be put onto classes.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 44,
      ),
      'PROPERTY_CONSTRAINT' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'name' => 'PROPERTY_CONSTRAINT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'property\'',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 45,
            'startTokenPos' => 75,
            'startFilePos' => 1344,
            'endTokenPos' => 75,
            'endFilePos' => 1353,
          ),
        ),
        'docComment' => '/**
 * Marks a constraint that can be put onto properties.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 50,
      ),
      'ERROR_NAMES' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'name' => 'ERROR_NAMES',
        'modifiers' => 2,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 52,
            'endLine' => 52,
            'startTokenPos' => 88,
            'startFilePos' => 1505,
            'endTokenPos' => 89,
            'endFilePos' => 1506,
          ),
        ),
        'docComment' => '/**
 * Maps error codes to the names of their constants.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 37,
      ),
    ),
    'immediateProperties' => 
    array (
      'payload' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'name' => 'payload',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * Domain-specific data attached to a constraint.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'groups' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'name' => 'groups',
        'modifiers' => 1,
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
                  'name' => 'array',
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 112,
            'startFilePos' => 1730,
            'endTokenPos' => 112,
            'endFilePos' => 1733,
          ),
        ),
        'docComment' => '/**
 * The groups that the constraint belongs to.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 33,
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
      'getErrorName' => 
      array (
        'name' => 'getErrorName',
        'parameters' => 
        array (
          'errorCode' => 
          array (
            'name' => 'errorCode',
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
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 41,
            'endColumn' => 57,
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
 * Returns the name of the given error code.
 *
 * @throws InvalidArgumentException If the error code does not exist
 */',
        'startLine' => 71,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'aliasName' => NULL,
      ),
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 109,
                'endLine' => 109,
                'startTokenPos' => 200,
                'startFilePos' => 3774,
                'endTokenPos' => 200,
                'endFilePos' => 3777,
              ),
            ),
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
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 33,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'groups' => 
          array (
            'name' => 'groups',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 109,
                'endLine' => 109,
                'startTokenPos' => 210,
                'startFilePos' => 3797,
                'endTokenPos' => 210,
                'endFilePos' => 3800,
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
                      'name' => 'array',
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
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 56,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 109,
                'endLine' => 109,
                'startTokenPos' => 219,
                'startFilePos' => 3820,
                'endTokenPos' => 219,
                'endFilePos' => 3823,
              ),
            ),
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
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 79,
            'endColumn' => 99,
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
 * Initializes the constraint with options.
 *
 * You should pass an associative array. The keys should be the names of
 * existing properties in this class. The values should be the value for these
 * properties.
 *
 * Alternatively you can override the method getDefaultOption() to return the
 * name of an existing property. If no associative array is passed, this
 * property is set instead.
 *
 * You can force that certain options are set by overriding
 * getRequiredOptions() to return the names of these options. If any
 * option is not set here, an exception is thrown.
 *
 * @param mixed    $options The options (as associative array)
 *                          or the value for the default
 *                          option (any other type)
 * @param string[] $groups  An array of validation groups
 * @param mixed    $payload Domain-specific data attached to a constraint
 *
 * @throws InvalidOptionsException       When you pass the names of non-existing
 *                                       options
 * @throws MissingOptionsException       When you don\'t pass any of the options
 *                                       returned by getRequiredOptions()
 * @throws ConstraintDefinitionException When you don\'t pass an associative
 *                                       array, but getDefaultOption() returns
 *                                       null
 */',
        'startLine' => 109,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'aliasName' => NULL,
      ),
      'normalizeOptions' => 
      array (
        'name' => 'normalizeOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 41,
            'endColumn' => 54,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated since Symfony 7.4
 *
 * @return array<string, mixed>
 */',
        'startLine' => 140,
        'endLine' => 191,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'aliasName' => NULL,
      ),
      '__set' => 
      array (
        'name' => '__set',
        'parameters' => 
        array (
          'option' => 
          array (
            'name' => 'option',
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
            'startLine' => 202,
            'endLine' => 202,
            'startColumn' => 27,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 202,
            'endLine' => 202,
            'startColumn' => 43,
            'endColumn' => 54,
            'parameterIndex' => 1,
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
 * Sets the value of a lazily initialized option.
 *
 * Corresponding properties are added to the object on first access. Hence
 * this method will be called at most once per constraint instance and
 * option name.
 *
 * @throws InvalidOptionsException If an invalid option name is given
 */',
        'startLine' => 202,
        'endLine' => 211,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
        'parameters' => 
        array (
          'option' => 
          array (
            'name' => 'option',
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
            'startLine' => 222,
            'endLine' => 222,
            'startColumn' => 27,
            'endColumn' => 40,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the value of a lazily initialized option.
 *
 * Corresponding properties are added to the object on first access. Hence
 * this method will be called at most once per constraint instance and
 * option name.
 *
 * @throws InvalidOptionsException If an invalid option name is given
 */',
        'startLine' => 222,
        'endLine' => 231,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'aliasName' => NULL,
      ),
      '__isset' => 
      array (
        'name' => '__isset',
        'parameters' => 
        array (
          'option' => 
          array (
            'name' => 'option',
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
            'startLine' => 233,
            'endLine' => 233,
            'startColumn' => 29,
            'endColumn' => 42,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 233,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'aliasName' => NULL,
      ),
      'addImplicitGroupName' => 
      array (
        'name' => 'addImplicitGroupName',
        'parameters' => 
        array (
          'group' => 
          array (
            'name' => 'group',
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
            'startLine' => 241,
            'endLine' => 241,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Adds the given group if this constraint is in the Default group.
 */',
        'startLine' => 241,
        'endLine' => 250,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'aliasName' => NULL,
      ),
      'getDefaultOption' => 
      array (
        'name' => 'getDefaultOption',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the name of the default option.
 *
 * Override this method to define a default option.
 *
 * @deprecated since Symfony 7.4
 * @see __construct()
 */',
        'startLine' => 260,
        'endLine' => 267,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'aliasName' => NULL,
      ),
      'getRequiredOptions' => 
      array (
        'name' => 'getRequiredOptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the name of the required options.
 *
 * Override this method if you want to define required options.
 *
 * @return string[]
 *
 * @deprecated since Symfony 7.4
 * @see __construct()
 */',
        'startLine' => 279,
        'endLine' => 286,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'aliasName' => NULL,
      ),
      'validatedBy' => 
      array (
        'name' => 'validatedBy',
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
 * Returns the name of the class that validates this constraint.
 *
 * By default, this is the fully qualified name of the constraint class
 * suffixed with "Validator". You can override this method to change that
 * behavior.
 */',
        'startLine' => 295,
        'endLine' => 298,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'aliasName' => NULL,
      ),
      'getTargets' => 
      array (
        'name' => 'getTargets',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'array',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns whether the constraint can be put onto classes, properties or
 * both.
 *
 * @return self::CLASS_CONSTRAINT|self::PROPERTY_CONSTRAINT|array<self::CLASS_CONSTRAINT|self::PROPERTY_CONSTRAINT>
 */',
        'startLine' => 306,
        'endLine' => 309,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'aliasName' => NULL,
      ),
      '__serialize' => 
      array (
        'name' => '__serialize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Optimizes the serialized value to minimize storage space.
 */',
        'startLine' => 314,
        'endLine' => 331,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Constraint',
        'currentClassName' => 'Symfony\\Component\\Validator\\Constraint',
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