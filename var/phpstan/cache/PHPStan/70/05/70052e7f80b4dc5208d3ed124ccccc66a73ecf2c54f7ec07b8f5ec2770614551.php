<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/ContentEntityInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\ContentEntityInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-db1ba41c2cb7ff8bb89dc13622343e64f7d3a91b6d193fa777ac7c4d2af6ef04-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/ContentEntityInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
    'shortName' => 'ContentEntityInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines a common interface for all content entity objects.
 *
 * Content entities use fields for all their entity properties and can be
 * translatable and revisionable. Translations and revisions can be
 * enabled per entity type through annotation and using entity type hooks.
 *
 * It\'s best practice to always implement ContentEntityInterface for
 * content-like entities that should be stored in some database, and
 * enable/disable revisions and translations as desired.
 *
 * When implementing this interface which extends Traversable, make sure to list
 * IteratorAggregate or Iterator before this interface in the implements clause.
 *
 * @see \\Drupal\\Core\\Entity\\ContentEntityBase
 * @see \\Drupal\\Core\\Entity\\EntityTypeInterface
 *
 * @ingroup entity_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 35,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Traversable',
      1 => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
      2 => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
      3 => 'Drupal\\Core\\Entity\\SynchronizableInterface',
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
      'getBundleEntity' => 
      array (
        'name' => 'getBundleEntity',
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
                  'name' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Gets the bundle entity of this entity.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface|null
 *   The entity which is the bundle of this entity, or NULL if this entity\'s
 *   entity type does not represent bundles with an entity.
 */',
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
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