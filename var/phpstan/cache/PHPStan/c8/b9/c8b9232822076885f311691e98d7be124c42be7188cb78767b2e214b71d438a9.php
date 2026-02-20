<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityChangedInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityChangedInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b28ea115ebd1682e29d714bda56a2a6c055ab8cf5e24d2949383286118da4efa-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityChangedInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
    'shortName' => 'EntityChangedInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines an interface for entity change timestamp tracking.
 *
 * This data may be useful for more precise cache invalidation (especially
 * on the client side) and concurrent editing locking.
 *
 * The entity system automatically adds in the \'EntityChanged\' constraint for
 * entity types implementing this interface in order to disallow concurrent
 * editing.
 *
 * @see \\Drupal\\Core\\Entity\\Plugin\\Validation\\Constraint\\EntityChangedConstraint
 *
 * @ingroup entity_type_characteristics
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 54,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityInterface',
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
      'getChangedTime' => 
      array (
        'name' => 'getChangedTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the timestamp of the last entity change for the current translation.
 *
 * @return int|null
 *   The timestamp of the last entity save operation. Some entities allow a
 *   NULL value indicating the changed time is unknown.
 */',
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        'aliasName' => NULL,
      ),
      'setChangedTime' => 
      array (
        'name' => 'setChangedTime',
        'parameters' => 
        array (
          'timestamp' => 
          array (
            'name' => 'timestamp',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 34,
            'endColumn' => 43,
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
 * Sets the timestamp of the last entity change for the current translation.
 *
 * @param int $timestamp
 *   The timestamp of the last entity save operation.
 *
 * @return $this
 */',
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        'aliasName' => NULL,
      ),
      'getChangedTimeAcrossTranslations' => 
      array (
        'name' => 'getChangedTimeAcrossTranslations',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the timestamp of the last entity change across all translations.
 *
 * This method will return the highest timestamp across all translations. To
 * check that no translation is older than in another version of the entity
 * (e.g. to avoid overwriting newer translations with old data), compare each
 * translation to the other version individually.
 *
 * @return int
 *   The timestamp of the last entity save operation across all
 *   translations.
 */',
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
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