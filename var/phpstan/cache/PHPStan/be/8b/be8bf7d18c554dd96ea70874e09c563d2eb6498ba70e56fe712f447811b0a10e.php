<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../symfony/validator/Context/ExecutionContextInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\Validator\Context\ExecutionContextInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5f525883599504f103e950f1522138ad293936df3d553261209e186f2d777af7-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'filename' => '/var/www/html/vendor/composer/../symfony/validator/Context/ExecutionContextInterface.php',
      ),
    ),
    'namespace' => 'Symfony\\Component\\Validator\\Context',
    'name' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
    'shortName' => 'ExecutionContextInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * The context of a validation run.
 *
 * The context collects all violations generated during the validation. By
 * default, validators execute all validations in a new context:
 *
 *     $violations = $validator->validate($object);
 *
 * When you make another call to the validator, while the validation is in
 * progress, the violations will be isolated from each other:
 *
 *     public function validate(mixed $value, Constraint $constraint): void
 *     {
 *         $validator = $this->context->getValidator();
 *
 *         // The violations are not added to $this->context
 *         $violations = $validator->validate($value);
 *     }
 *
 * However, if you want to add the violations to the current context, use the
 * {@link ValidatorInterface::inContext()} method:
 *
 *     public function validate(mixed $value, Constraint $constraint): void
 *     {
 *         $validator = $this->context->getValidator();
 *
 *         // The violations are added to $this->context
 *         $validator
 *             ->inContext($this->context)
 *             ->validate($value)
 *         ;
 *     }
 *
 * Additionally, the context provides information about the current state of
 * the validator, such as the currently validated class, the name of the
 * currently validated property and more. These values change over time, so you
 * cannot store a context and expect that the methods still return the same
 * results later on.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 62,
    'endLine' => 285,
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
    ),
    'immediateMethods' => 
    array (
      'addViolation' => 
      array (
        'name' => 'addViolation',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
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
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 34,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 70,
                'endLine' => 70,
                'startTokenPos' => 66,
                'startFilePos' => 2514,
                'endTokenPos' => 67,
                'endFilePos' => 2515,
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
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 51,
            'endColumn' => 68,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a violation at the current node of the validation graph.
 *
 * @param string|\\Stringable $message The error message as a string or a stringable object
 * @param array              $params  The parameters substituted in the error message
 */',
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 76,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'buildViolation' => 
      array (
        'name' => 'buildViolation',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
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
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 36,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 87,
                'endLine' => 87,
                'startTokenPos' => 93,
                'startFilePos' => 3309,
                'endTokenPos' => 94,
                'endFilePos' => 3310,
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
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 53,
            'endColumn' => 74,
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
            'name' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a builder for adding a violation with extended information.
 *
 * Call {@link ConstraintViolationBuilderInterface::addViolation()} to
 * add the violation when you\'re done with the configuration:
 *
 *     $context->buildViolation(\'Please enter a number between %min% and %max%.\')
 *         ->setParameter(\'%min%\', \'3\')
 *         ->setParameter(\'%max%\', \'10\')
 *         ->setTranslationDomain(\'number_validation\')
 *         ->addViolation();
 *
 * @param string|\\Stringable $message    The error message as a string or a stringable object
 * @param array              $parameters The parameters substituted in the error message
 */',
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 113,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'getValidator' => 
      array (
        'name' => 'getValidator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the validator.
 *
 * Useful if you want to validate additional constraints:
 *
 *     public function validate(mixed $value, Constraint $constraint): void
 *     {
 *         $validator = $this->context->getValidator();
 *
 *         $violations = $validator->validate($value, new Length(min: 3));
 *
 *         if (count($violations) > 0) {
 *             // ...
 *         }
 *     }
 */',
        'startLine' => 105,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'getObject' => 
      array (
        'name' => 'getObject',
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
                  'name' => 'object',
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
 * Returns the currently validated object.
 *
 * If the validator is currently validating a class constraint, the
 * object of that class is returned. If it is validating a property or
 * getter constraint, the object that the property/getter belongs to is
 * returned.
 *
 * In other cases, null is returned.
 */',
        'startLine' => 117,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'setNode' => 
      array (
        'name' => 'setNode',
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
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 29,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'object' => 
          array (
            'name' => 'object',
            'default' => NULL,
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
                      'name' => 'object',
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
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 43,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'metadata' => 
          array (
            'name' => 'metadata',
            'default' => NULL,
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
                      'name' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
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
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 60,
            'endColumn' => 87,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'propertyPath' => 
          array (
            'name' => 'propertyPath',
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
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 90,
            'endColumn' => 109,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Warning: Should not be called by user code, to be used by the validator engine only.
 *
 * @param object|null $object       The currently validated object
 * @param string      $propertyPath The property path to the current value
 */',
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 117,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'setGroup' => 
      array (
        'name' => 'setGroup',
        'parameters' => 
        array (
          'group' => 
          array (
            'name' => 'group',
            'default' => NULL,
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
            'startLine' => 132,
            'endLine' => 132,
            'startColumn' => 30,
            'endColumn' => 43,
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
 * Warning: Should not be called by user code, to be used by the validator engine only.
 *
 * @param string|null $group The validated group
 */',
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'setConstraint' => 
      array (
        'name' => 'setConstraint',
        'parameters' => 
        array (
          'constraint' => 
          array (
            'name' => 'constraint',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\Validator\\Constraint',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 35,
            'endColumn' => 56,
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
 * Warning: Should not be called by user code, to be used by the validator engine only.
 */',
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 64,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'markGroupAsValidated' => 
      array (
        'name' => 'markGroupAsValidated',
        'parameters' => 
        array (
          'cacheKey' => 
          array (
            'name' => 'cacheKey',
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
            'startLine' => 146,
            'endLine' => 146,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'groupHash' => 
          array (
            'name' => 'groupHash',
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
            'startLine' => 146,
            'endLine' => 146,
            'startColumn' => 60,
            'endColumn' => 76,
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
 * Warning: Should not be called by user code, to be used by the validator engine only.
 *
 * @param string $cacheKey  The hash of the object
 * @param string $groupHash The group\'s name or hash, if it is group
 *                          sequence
 */',
        'startLine' => 146,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 84,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'isGroupValidated' => 
      array (
        'name' => 'isGroupValidated',
        'parameters' => 
        array (
          'cacheKey' => 
          array (
            'name' => 'cacheKey',
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
            'startLine' => 155,
            'endLine' => 155,
            'startColumn' => 38,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'groupHash' => 
          array (
            'name' => 'groupHash',
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
            'startLine' => 155,
            'endLine' => 155,
            'startColumn' => 56,
            'endColumn' => 72,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Warning: Should not be called by user code, to be used by the validator engine only.
 *
 * @param string $cacheKey  The hash of the object
 * @param string $groupHash The group\'s name or hash, if it is group
 *                          sequence
 */',
        'startLine' => 155,
        'endLine' => 155,
        'startColumn' => 5,
        'endColumn' => 80,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'markConstraintAsValidated' => 
      array (
        'name' => 'markConstraintAsValidated',
        'parameters' => 
        array (
          'cacheKey' => 
          array (
            'name' => 'cacheKey',
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
            'startLine' => 163,
            'endLine' => 163,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'constraintHash' => 
          array (
            'name' => 'constraintHash',
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
            'startLine' => 163,
            'endLine' => 163,
            'startColumn' => 65,
            'endColumn' => 86,
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
 * Warning: Should not be called by user code, to be used by the validator engine only.
 *
 * @param string $cacheKey       The hash of the object
 * @param string $constraintHash The hash of the constraint
 */',
        'startLine' => 163,
        'endLine' => 163,
        'startColumn' => 5,
        'endColumn' => 94,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'isConstraintValidated' => 
      array (
        'name' => 'isConstraintValidated',
        'parameters' => 
        array (
          'cacheKey' => 
          array (
            'name' => 'cacheKey',
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
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'constraintHash' => 
          array (
            'name' => 'constraintHash',
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
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 61,
            'endColumn' => 82,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Warning: Should not be called by user code, to be used by the validator engine only.
 *
 * @param string $cacheKey       The hash of the object
 * @param string $constraintHash The hash of the constraint
 */',
        'startLine' => 171,
        'endLine' => 171,
        'startColumn' => 5,
        'endColumn' => 90,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'markObjectAsInitialized' => 
      array (
        'name' => 'markObjectAsInitialized',
        'parameters' => 
        array (
          'cacheKey' => 
          array (
            'name' => 'cacheKey',
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
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 45,
            'endColumn' => 60,
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
 * Warning: Should not be called by user code, to be used by the validator engine only.
 *
 * @param string $cacheKey The hash of the object
 *
 * @see ObjectInitializerInterface
 */',
        'startLine' => 180,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'isObjectInitialized' => 
      array (
        'name' => 'isObjectInitialized',
        'parameters' => 
        array (
          'cacheKey' => 
          array (
            'name' => 'cacheKey',
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
            'startLine' => 189,
            'endLine' => 189,
            'startColumn' => 41,
            'endColumn' => 56,
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
        'docComment' => '/**
 * Warning: Should not be called by user code, to be used by the validator engine only.
 *
 * @param string $cacheKey The hash of the object
 *
 * @see ObjectInitializerInterface
 */',
        'startLine' => 189,
        'endLine' => 189,
        'startColumn' => 5,
        'endColumn' => 64,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'getViolations' => 
      array (
        'name' => 'getViolations',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the violations generated by the validator so far.
 */',
        'startLine' => 194,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'getRoot' => 
      array (
        'name' => 'getRoot',
        'parameters' => 
        array (
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
 * Returns the value at which validation was started in the object graph.
 *
 * The validator, when given an object, traverses the properties and
 * related objects and their properties. The root of the validation is the
 * object from which the traversal started.
 *
 * The current value is returned by {@link getValue}.
 */',
        'startLine' => 205,
        'endLine' => 205,
        'startColumn' => 5,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'getValue' => 
      array (
        'name' => 'getValue',
        'parameters' => 
        array (
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
 * Returns the value that the validator is currently validating.
 *
 * If you want to retrieve the object that was originally passed to the
 * validator, use {@link getRoot}.
 */',
        'startLine' => 213,
        'endLine' => 213,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'getMetadata' => 
      array (
        'name' => 'getMetadata',
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
                  'name' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the metadata for the currently validated value.
 *
 * With the core implementation, this method returns a
 * {@link Mapping\\ClassMetadataInterface} instance if the current value is an object,
 * a {@link Mapping\\PropertyMetadata} instance if the current value is
 * the value of a property and a {@link Mapping\\GetterMetadata} instance if
 * the validated value is the result of a getter method.
 *
 * If the validated value is neither of these, for example if the validator
 * has been called with a plain value and constraint, this method returns
 * null.
 */',
        'startLine' => 228,
        'endLine' => 228,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'getGroup' => 
      array (
        'name' => 'getGroup',
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
 * Returns the validation group that is currently being validated.
 */',
        'startLine' => 233,
        'endLine' => 233,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'getClassName' => 
      array (
        'name' => 'getClassName',
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
 * Returns the class name of the current node.
 *
 * If the metadata of the current node does not implement
 * {@link Mapping\\ClassMetadataInterface} or if no metadata is available for the
 * current node, this method returns null.
 */',
        'startLine' => 242,
        'endLine' => 242,
        'startColumn' => 5,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'getPropertyName' => 
      array (
        'name' => 'getPropertyName',
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
 * Returns the property name of the current node.
 *
 * If the metadata of the current node does not implement
 * {@link PropertyMetadataInterface} or if no metadata is available for the
 * current node, this method returns null.
 */',
        'startLine' => 251,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'aliasName' => NULL,
      ),
      'getPropertyPath' => 
      array (
        'name' => 'getPropertyPath',
        'parameters' => 
        array (
          'subPath' => 
          array (
            'name' => 'subPath',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 284,
                'endLine' => 284,
                'startTokenPos' => 437,
                'startFilePos' => 10784,
                'endTokenPos' => 437,
                'endFilePos' => 10785,
              ),
            ),
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
            'startLine' => 284,
            'endLine' => 284,
            'startColumn' => 37,
            'endColumn' => 56,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the property path to the value that the validator is currently
 * validating.
 *
 * For example, take the following object graph:
 *
 * <pre>
 * (Person)---($address: Address)---($street: string)
 * </pre>
 *
 * When the <tt>Person</tt> instance is passed to the validator, the
 * property path is initially empty. When the <tt>$address</tt> property
 * of that person is validated, the property path is "address". When
 * the <tt>$street</tt> property of the related <tt>Address</tt> instance
 * is validated, the property path is "address.street".
 *
 * Properties of objects are prefixed with a dot in the property path.
 * Indices of arrays or objects implementing the {@link \\ArrayAccess}
 * interface are enclosed in brackets. For example, if the property in
 * the previous example is <tt>$addresses</tt> and contains an array
 * of <tt>Address</tt> instance, the property path generated for the
 * <tt>$street</tt> property of one of these addresses is for example
 * "addresses[0].street".
 *
 * @param string $subPath Optional. The suffix appended to the current
 *                        property path.
 *
 * @return string The current property path. The result may be an empty
 *                string if the validator is currently validating the
 *                root value of the validation graph.
 */',
        'startLine' => 284,
        'endLine' => 284,
        'startColumn' => 5,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Validator\\Context',
        'declaringClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'implementingClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
        'currentClassName' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
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