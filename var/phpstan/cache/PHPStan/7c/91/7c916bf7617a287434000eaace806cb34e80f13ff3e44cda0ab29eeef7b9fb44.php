<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityPublishedTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityPublishedTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5daf42448ab14b7926b380f7f11d1b96923cd9b0e21f25b97610b1a252bf5b68-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityPublishedTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
    'shortName' => 'EntityPublishedTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides a trait for published status.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 71,
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
      'publishedBaseFieldDefinitions' => 
      array (
        'name' => 'publishedBaseFieldDefinitions',
        'parameters' => 
        array (
          'entity_type' => 
          array (
            'name' => 'entity_type',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 56,
            'endColumn' => 87,
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
 * Returns an array of base field definitions for publishing status.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type to add the publishing status field to.
 *
 * @return \\Drupal\\Core\\Field\\BaseFieldDefinition[]
 *   An array of base field definitions.
 *
 * @throws \\Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException
 *   Thrown when the entity type does not implement EntityPublishedInterface
 *   or if it does not have a "published" entity key.
 */',
        'startLine' => 27,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'aliasName' => NULL,
      ),
      'isPublished' => 
      array (
        'name' => 'isPublished',
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
        'startLine' => 47,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'aliasName' => NULL,
      ),
      'setPublished' => 
      array (
        'name' => 'setPublished',
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
        'startLine' => 54,
        'endLine' => 59,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'aliasName' => NULL,
      ),
      'setUnpublished' => 
      array (
        'name' => 'setUnpublished',
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
        'startLine' => 64,
        'endLine' => 69,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
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