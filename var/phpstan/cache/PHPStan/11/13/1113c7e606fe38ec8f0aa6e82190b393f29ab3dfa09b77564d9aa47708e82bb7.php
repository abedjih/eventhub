<?php declare(strict_types = 1);

// odsl-/var/www/html/web/modules/custom/eventhub_core/src/Plugin/Validation/Constraint/UniqueRegistrationConstraintValidator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\eventhub_core\Plugin\Validation\Constraint\UniqueRegistrationConstraintValidator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-c1cbb9fa820f0ffe7337011b214e544363fbef88bdd3cd439df0240670a7c6d3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint\\UniqueRegistrationConstraintValidator',
        'filename' => '/var/www/html/web/modules/custom/eventhub_core/src/Plugin/Validation/Constraint/UniqueRegistrationConstraintValidator.php',
      ),
    ),
    'namespace' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint',
    'name' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint\\UniqueRegistrationConstraintValidator',
    'shortName' => 'UniqueRegistrationConstraintValidator',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Validates the UniqueRegistration constraint.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 69,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Symfony\\Component\\Validator\\ConstraintValidator',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\DependencyInjection\\AutowireTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'registrationManager' => 
      array (
        'declaringClassName' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint\\UniqueRegistrationConstraintValidator',
        'implementingClassName' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint\\UniqueRegistrationConstraintValidator',
        'name' => 'registrationManager',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 61,
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
          'registrationManager' => 
          array (
            'name' => 'registrationManager',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\eventhub_core\\Service\\RegistrationManager',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 5,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 21,
        'endLine' => 23,
        'startColumn' => 3,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint',
        'declaringClassName' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint\\UniqueRegistrationConstraintValidator',
        'implementingClassName' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint\\UniqueRegistrationConstraintValidator',
        'currentClassName' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint\\UniqueRegistrationConstraintValidator',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
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
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 42,
            'endColumn' => 63,
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
 * {@inheritdoc}
 */',
        'startLine' => 28,
        'endLine' => 67,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint',
        'declaringClassName' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint\\UniqueRegistrationConstraintValidator',
        'implementingClassName' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint\\UniqueRegistrationConstraintValidator',
        'currentClassName' => 'Drupal\\eventhub_core\\Plugin\\Validation\\Constraint\\UniqueRegistrationConstraintValidator',
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