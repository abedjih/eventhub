<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/RevisionLogEntityTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\RevisionLogEntityTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f37369ffa4e6a604ed37e7d91f1e289a264c757949462f5507602e556dc1f785-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/RevisionLogEntityTrait.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
    'shortName' => 'RevisionLogEntityTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides a trait for accessing revision logging and ownership information.
 *
 * @ingroup entity_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 134,
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
      'revisionLogBaseFieldDefinitions' => 
      array (
        'name' => 'revisionLogBaseFieldDefinitions',
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
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 58,
            'endColumn' => 89,
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
 * Provides revision-related base field definitions for an entity type.
 *
 * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
 *   The entity type definition.
 *
 * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface[]
 *   An array of base field definitions for the entity type, keyed by field
 *   name.
 *
 * @see \\Drupal\\Core\\Entity\\FieldableEntityInterface::baseFieldDefinitions()
 */',
        'startLine' => 28,
        'endLine' => 64,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'aliasName' => NULL,
      ),
      'getRevisionCreationTime' => 
      array (
        'name' => 'getRevisionCreationTime',
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
        'startLine' => 69,
        'endLine' => 71,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'aliasName' => NULL,
      ),
      'setRevisionCreationTime' => 
      array (
        'name' => 'setRevisionCreationTime',
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
            'startLine' => 76,
            'endLine' => 76,
            'startColumn' => 43,
            'endColumn' => 52,
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
        'startLine' => 76,
        'endLine' => 79,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'aliasName' => NULL,
      ),
      'getRevisionUser' => 
      array (
        'name' => 'getRevisionUser',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Implements \\Drupal\\Core\\Entity\\RevisionLogInterface::getRevisionUser().
 */',
        'startLine' => 84,
        'endLine' => 86,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'aliasName' => NULL,
      ),
      'setRevisionUser' => 
      array (
        'name' => 'setRevisionUser',
        'parameters' => 
        array (
          'account' => 
          array (
            'name' => 'account',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\user\\UserInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 35,
            'endColumn' => 56,
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
 * Implements \\Drupal\\Core\\Entity\\RevisionLogInterface::setRevisionUser().
 */',
        'startLine' => 91,
        'endLine' => 94,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'aliasName' => NULL,
      ),
      'getRevisionUserId' => 
      array (
        'name' => 'getRevisionUserId',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Implements \\Drupal\\Core\\Entity\\RevisionLogInterface::getRevisionUserId().
 */',
        'startLine' => 99,
        'endLine' => 101,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'aliasName' => NULL,
      ),
      'setRevisionUserId' => 
      array (
        'name' => 'setRevisionUserId',
        'parameters' => 
        array (
          'user_id' => 
          array (
            'name' => 'user_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 106,
            'endLine' => 106,
            'startColumn' => 37,
            'endColumn' => 44,
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
 * Implements \\Drupal\\Core\\Entity\\RevisionLogInterface::setRevisionUserId().
 */',
        'startLine' => 106,
        'endLine' => 109,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'aliasName' => NULL,
      ),
      'getRevisionLogMessage' => 
      array (
        'name' => 'getRevisionLogMessage',
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
        'startLine' => 114,
        'endLine' => 116,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'aliasName' => NULL,
      ),
      'setRevisionLogMessage' => 
      array (
        'name' => 'setRevisionLogMessage',
        'parameters' => 
        array (
          'revision_log_message' => 
          array (
            'name' => 'revision_log_message',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 41,
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
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 121,
        'endLine' => 124,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'aliasName' => NULL,
      ),
      'getEntityType' => 
      array (
        'name' => 'getEntityType',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the entity type definition.
 *
 * @return \\Drupal\\Core\\Entity\\ContentEntityTypeInterface
 *   The content entity type definition.
 */',
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'implementingClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
        'currentClassName' => 'Drupal\\Core\\Entity\\RevisionLogEntityTrait',
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