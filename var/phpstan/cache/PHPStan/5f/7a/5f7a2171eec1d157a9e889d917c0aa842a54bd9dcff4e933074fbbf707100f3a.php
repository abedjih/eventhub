<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/TranslatableRevisionableStorageInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\TranslatableRevisionableStorageInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-37f27f8aeaf1885b7bcee4a1b570fea6cd849d7a0772c06d678aa484227a4aac-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\TranslatableRevisionableStorageInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/TranslatableRevisionableStorageInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\TranslatableRevisionableStorageInterface',
    'shortName' => 'TranslatableRevisionableStorageInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A storage that supports translatable and revisionable entity types.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 46,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\RevisionableStorageInterface',
      1 => 'Drupal\\Core\\Entity\\TranslatableStorageInterface',
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
      'createRevision' => 
      array (
        'name' => 'createRevision',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\RevisionableInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 34,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 30,
                'endLine' => 30,
                'startTokenPos' => 39,
                'startFilePos' => 1274,
                'endTokenPos' => 39,
                'endFilePos' => 1277,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 65,
            'endColumn' => 79,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'keep_untranslatable_fields' => 
          array (
            'name' => 'keep_untranslatable_fields',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 30,
                'endLine' => 30,
                'startTokenPos' => 46,
                'startFilePos' => 1310,
                'endTokenPos' => 46,
                'endFilePos' => 1313,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 82,
            'endColumn' => 115,
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
 * Creates a new revision starting off from the specified entity object.
 *
 * When dealing with a translatable entity, this will merge the default
 * revision with the active translation of the passed entity.
 *
 * @param \\Drupal\\Core\\Entity\\RevisionableInterface $entity
 *   The revisionable entity object being modified.
 * @param bool $default
 *   (optional) Whether the new revision should be marked as default. Defaults
 *   to TRUE.
 * @param bool|null $keep_untranslatable_fields
 *   (optional) Whether untranslatable field values should be kept or copied
 *   from the default revision when generating a merged revision. Defaults to
 *   TRUE if the provided entity is the default translation and untranslatable
 *   fields should only affect the default translation, FALSE otherwise.
 *
 * @return \\Drupal\\Core\\Entity\\TranslatableRevisionableInterface
 *   A new translatable entity revision object.
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 3,
        'endColumn' => 117,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableStorageInterface',
        'aliasName' => NULL,
      ),
      'getLatestTranslationAffectedRevisionId' => 
      array (
        'name' => 'getLatestTranslationAffectedRevisionId',
        'parameters' => 
        array (
          'entity_id' => 
          array (
            'name' => 'entity_id',
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
            'startColumn' => 58,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
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
            'startColumn' => 70,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the latest revision affecting the specified translation.
 *
 * @param int|string $entity_id
 *   The entity identifier.
 * @param string $langcode
 *   The language code of the translation.
 *
 * @return int|string|null
 *   A revision ID or NULL if no revision affecting the specified translation
 *   could be found.
 */',
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 3,
        'endColumn' => 80,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableStorageInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableStorageInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableStorageInterface',
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