<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Query/ConditionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\Query\ConditionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-1ff25bc5934a14c5da00583192f7789d8dcfe12bbe2f1c580943d61b5e1b52c7-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Query/ConditionInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity\\Query',
    'name' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
    'shortName' => 'ConditionInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines the entity query condition interface.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 94,
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
      'getConjunction' => 
      array (
        'name' => 'getConjunction',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the current conjunction.
 *
 * @return string
 *   Can be AND or OR.
 */',
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Implements \\Countable::count().
 *
 * Returns the size of this conditional. The size of the conditional is the
 * size of its conditional array.
 */',
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 3,
        'endColumn' => 26,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'condition' => 
      array (
        'name' => 'condition',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 43,
                'endLine' => 43,
                'startTokenPos' => 52,
                'startFilePos' => 991,
                'endTokenPos' => 52,
                'endFilePos' => 994,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 37,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 43,
                'endLine' => 43,
                'startTokenPos' => 59,
                'startFilePos' => 1009,
                'endTokenPos' => 59,
                'endFilePos' => 1012,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 52,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 43,
                'endLine' => 43,
                'startTokenPos' => 66,
                'startFilePos' => 1027,
                'endTokenPos' => 66,
                'endFilePos' => 1030,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 70,
            'endColumn' => 85,
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
 * Adds a condition.
 *
 * @param string|\\Drupal\\Core\\Entity\\Query\\ConditionInterface $field
 *   The field.
 * @param mixed $value
 *   (optional) The value.
 * @param string $operator
 *   (optional) The operator.
 * @param string $langcode
 *   (optional) For which language the entity should be prepared, defaults to
 *   the current content language.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Entity\\Query\\QueryInterface::condition()
 */',
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 3,
        'endColumn' => 87,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'exists' => 
      array (
        'name' => 'exists',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 58,
                'endLine' => 58,
                'startTokenPos' => 85,
                'startFilePos' => 1443,
                'endTokenPos' => 85,
                'endFilePos' => 1446,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 34,
            'endColumn' => 49,
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
 * Queries for the existence of a field.
 *
 * @param string $field
 *   The field to query for existence.
 * @param string $langcode
 *   (optional) For which language the entity should be prepared, defaults to
 *   the current content language.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Entity\\Query\\QueryInterface::exists()
 */',
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 3,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'notExists' => 
      array (
        'name' => 'notExists',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 104,
                'startFilePos' => 1871,
                'endTokenPos' => 104,
                'endFilePos' => 1874,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 37,
            'endColumn' => 52,
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
 * Queries for the nonexistence of a field.
 *
 * @param string $field
 *   The field to query for nonexistence.
 * @param string $langcode
 *   (optional) For which language the entity should be prepared, defaults to
 *   the current content language.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Entity\\Query\\QueryInterface::notExists()
 */',
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'conditions' => 
      array (
        'name' => 'conditions',
        'parameters' => 
        array (
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a complete list of all conditions in this conditional clause.
 *
 * This method returns by reference. That allows alter hooks to access the
 * data structure directly and manipulate it before it gets compiled.
 *
 * @return array
 *   An array of all conditions in this conditional clause.
 */',
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 3,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'aliasName' => NULL,
      ),
      'compile' => 
      array (
        'name' => 'compile',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Compiles this conditional clause.
 *
 * @param \\Drupal\\Core\\Entity\\Query\\QueryInterface $query
 *   The query object this conditional clause belongs to.
 */',
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
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