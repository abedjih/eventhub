<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Access/AccessResultNeutral.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Access\AccessResultNeutral
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-dff1774355604510904a0406bbe94747b6695c515877b0dceca148d2d68d63c8-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Access/AccessResultNeutral.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Access',
    'name' => 'Drupal\\Core\\Access\\AccessResultNeutral',
    'shortName' => 'AccessResultNeutral',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Value object indicating a neutral access result, with cacheability metadata.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 49,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Access\\AccessResult',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'reason' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'name' => 'reason',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The reason why access is neutral. For use in messages.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 3,
        'endColumn' => 20,
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
          'reason' => 
          array (
            'name' => 'reason',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 23,
                'endLine' => 23,
                'startTokenPos' => 42,
                'startFilePos' => 545,
                'endTokenPos' => 42,
                'endFilePos' => 548,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 23,
            'endLine' => 23,
            'startColumn' => 31,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs a new AccessResultNeutral instance.
 *
 * @param null|string $reason
 *   (optional) A message to provide details about this access result.
 */',
        'startLine' => 23,
        'endLine' => 25,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'aliasName' => NULL,
      ),
      'isNeutral' => 
      array (
        'name' => 'isNeutral',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 30,
        'endLine' => 32,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'aliasName' => NULL,
      ),
      'getReason' => 
      array (
        'name' => 'getReason',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 37,
        'endLine' => 39,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'aliasName' => NULL,
      ),
      'setReason' => 
      array (
        'name' => 'setReason',
        'parameters' => 
        array (
          'reason' => 
          array (
            'name' => 'reason',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
            'startColumn' => 29,
            'endColumn' => 35,
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
 * {@inheritdoc}
 */',
        'startLine' => 44,
        'endLine' => 47,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Access',
        'declaringClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'implementingClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
        'currentClassName' => 'Drupal\\Core\\Access\\AccessResultNeutral',
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