<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/ContentEntityBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\ContentEntityBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a3b2530074e8b606afc412c5f6bcb36f828b9bb746ae0369d3d727f99a517826-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/ContentEntityBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\ContentEntityBase',
    'shortName' => 'ContentEntityBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Implements Entity Field API specific enhancements to the Entity class.
 *
 * @ingroup entity_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 20,
    'endLine' => 1546,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Entity\\EntityBase',
    'implementsClassNames' => 
    array (
      0 => 'IteratorAggregate',
      1 => 'Drupal\\Core\\Entity\\ContentEntityInterface',
      2 => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
      1 => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'values' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'values',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 104,
            'startFilePos' => 1343,
            'endTokenPos' => 105,
            'endFilePos' => 1344,
          ),
        ),
        'docComment' => '/**
 * The plain data values of the contained fields.
 *
 * This always holds the original, unchanged values of the entity. The values
 * are keyed by language code, whereas LanguageInterface::LANGCODE_DEFAULT
 * is used for values in default language.
 *
 * @var array
 *
 * @todo Add methods for getting original fields and for determining
 * changes.
 * @todo Provide a better way for defining default values.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fields' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'fields',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 47,
            'startTokenPos' => 116,
            'startFilePos' => 1479,
            'endTokenPos' => 117,
            'endFilePos' => 1480,
          ),
        ),
        'docComment' => '/**
 * The array of fields, each being an instance of FieldItemListInterface.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fieldDefinitions' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'fieldDefinitions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Local cache for field definitions.
 *
 * @var array
 *
 * @see ContentEntityBase::getFieldDefinitions()
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'languages' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'languages',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Local cache for the available language objects.
 *
 * @var \\Drupal\\Core\\Language\\LanguageInterface[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'langcodeKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'langcodeKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The language entity key.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 3,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultLangcodeKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'defaultLangcodeKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The default langcode entity key.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 3,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'activeLangcode' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'activeLangcode',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\Drupal\\Core\\Language\\LanguageInterface::LANGCODE_DEFAULT',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 156,
            'startFilePos' => 2220,
            'endTokenPos' => 158,
            'endFilePos' => 2254,
          ),
        ),
        'docComment' => '/**
 * Language code identifying the entity active language.
 *
 * This is the language field accessors will use to determine which field
 * values to manipulate.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 3,
        'endColumn' => 66,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'enforceDefaultTranslation' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'enforceDefaultTranslation',
        'modifiers' => 2,
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
                  'name' => 'bool',
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
          'code' => 'NULL',
          'attributes' => 
          array (
            'startLine' => 99,
            'endLine' => 99,
            'startTokenPos' => 172,
            'startFilePos' => 2543,
            'endTokenPos' => 172,
            'endFilePos' => 2546,
          ),
        ),
        'docComment' => '/**
 * Override the result of isDefaultTranslation().
 *
 * Under certain circumstances, such as when changing default translation, the
 * default value needs to be overridden.
 *
 * @var bool|null
 *
 * @internal
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 3,
        'endColumn' => 52,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultLangcode' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'defaultLangcode',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Local cache for the default language code.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 3,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'translations' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'translations',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 117,
            'endLine' => 117,
            'startTokenPos' => 190,
            'startFilePos' => 2970,
            'endTokenPos' => 191,
            'endFilePos' => 2971,
          ),
        ),
        'docComment' => '/**
 * An array of entity translation metadata.
 *
 * An associative array keyed by translation language code. Every value is an
 * array containing the translation status and the translation object, if it
 * has already been instantiated.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 117,
        'endLine' => 117,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'translationInitialize' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'translationInitialize',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 124,
            'endLine' => 124,
            'startTokenPos' => 202,
            'startFilePos' => 3118,
            'endTokenPos' => 202,
            'endFilePos' => 3122,
          ),
        ),
        'docComment' => '/**
 * A flag indicating whether a translation object is being initialized.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 124,
        'endLine' => 124,
        'startColumn' => 3,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'newRevision' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'newRevision',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 131,
            'endLine' => 131,
            'startTokenPos' => 213,
            'startFilePos' => 3259,
            'endTokenPos' => 213,
            'endFilePos' => 3263,
          ),
        ),
        'docComment' => '/**
 * Boolean indicating whether a new revision should be created on save.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 131,
        'endLine' => 131,
        'startColumn' => 3,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isDefaultRevision' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'isDefaultRevision',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'TRUE',
          'attributes' => 
          array (
            'startLine' => 138,
            'endLine' => 138,
            'startTokenPos' => 224,
            'startFilePos' => 3385,
            'endTokenPos' => 224,
            'endFilePos' => 3388,
          ),
        ),
        'docComment' => '/**
 * Indicates whether this is the default revision.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 138,
        'endLine' => 138,
        'startColumn' => 3,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'entityKeys' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'entityKeys',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 145,
            'endLine' => 145,
            'startTokenPos' => 235,
            'startFilePos' => 3530,
            'endTokenPos' => 236,
            'endFilePos' => 3531,
          ),
        ),
        'docComment' => '/**
 * Holds untranslatable entity keys such as the ID, bundle, and revision ID.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 145,
        'endLine' => 145,
        'startColumn' => 3,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'translatableEntityKeys' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'translatableEntityKeys',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 152,
            'endLine' => 152,
            'startTokenPos' => 247,
            'startFilePos' => 3661,
            'endTokenPos' => 248,
            'endFilePos' => 3662,
          ),
        ),
        'docComment' => '/**
 * Holds translatable entity keys such as the label.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 152,
        'endLine' => 152,
        'startColumn' => 3,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'validated' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'validated',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 159,
            'endLine' => 159,
            'startTokenPos' => 259,
            'startFilePos' => 3769,
            'endTokenPos' => 259,
            'endFilePos' => 3773,
          ),
        ),
        'docComment' => '/**
 * Whether entity validation was performed.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 159,
        'endLine' => 159,
        'startColumn' => 3,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'validationRequired' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'validationRequired',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 166,
            'endLine' => 166,
            'startTokenPos' => 270,
            'startFilePos' => 3912,
            'endTokenPos' => 270,
            'endFilePos' => 3916,
          ),
        ),
        'docComment' => '/**
 * Whether entity validation is required before saving the entity.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 166,
        'endLine' => 166,
        'startColumn' => 3,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'loadedRevisionId' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'loadedRevisionId',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The loaded revision ID before the new revision was set.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 173,
        'endLine' => 173,
        'startColumn' => 3,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'revisionTranslationAffectedKey' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'revisionTranslationAffectedKey',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The revision translation affected entity key.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 180,
        'endLine' => 180,
        'startColumn' => 3,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'enforceRevisionTranslationAffected' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'enforceRevisionTranslationAffected',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 189,
            'endLine' => 189,
            'startTokenPos' => 295,
            'startFilePos' => 4390,
            'endTokenPos' => 296,
            'endFilePos' => 4391,
          ),
        ),
        'docComment' => '/**
 * Whether the revision translation affected flag has been enforced.
 *
 * An array, keyed by the translation language code.
 *
 * @var bool[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 189,
        'endLine' => 189,
        'startColumn' => 3,
        'endColumn' => 53,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fieldsToSkipFromTranslationChangesCheck' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'name' => 'fieldsToSkipFromTranslationChangesCheck',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 196,
            'endLine' => 196,
            'startTokenPos' => 309,
            'startFilePos' => 4569,
            'endTokenPos' => 310,
            'endFilePos' => 4570,
          ),
        ),
        'docComment' => '/**
 * Local cache for fields to skip from the checking for translation changes.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 196,
        'endLine' => 196,
        'startColumn' => 3,
        'endColumn' => 65,
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
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
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
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 31,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entity_type' => 
          array (
            'name' => 'entity_type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 46,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'bundle' => 
          array (
            'name' => 'bundle',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 201,
                'endLine' => 201,
                'startTokenPos' => 333,
                'startFilePos' => 4674,
                'endTokenPos' => 333,
                'endFilePos' => 4678,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 60,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'translations' => 
          array (
            'name' => 'translations',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 201,
                'endLine' => 201,
                'startTokenPos' => 340,
                'startFilePos' => 4697,
                'endTokenPos' => 341,
                'endFilePos' => 4698,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 77,
            'endColumn' => 94,
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
 * {@inheritdoc}
 */',
        'startLine' => 201,
        'endLine' => 275,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getLanguages' => 
      array (
        'name' => 'getLanguages',
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
        'startLine' => 280,
        'endLine' => 291,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'postCreate' => 
      array (
        'name' => 'postCreate',
        'parameters' => 
        array (
          'storage' => 
          array (
            'name' => 'storage',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 296,
            'endLine' => 296,
            'startColumn' => 30,
            'endColumn' => 60,
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
        'startLine' => 296,
        'endLine' => 298,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'setNewRevision' => 
      array (
        'name' => 'setNewRevision',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 303,
                'endLine' => 303,
                'startTokenPos' => 1181,
                'startFilePos' => 9116,
                'endTokenPos' => 1181,
                'endFilePos' => 9119,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 303,
            'endLine' => 303,
            'startColumn' => 34,
            'endColumn' => 46,
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
 * {@inheritdoc}
 */',
        'startLine' => 303,
        'endLine' => 320,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getLoadedRevisionId' => 
      array (
        'name' => 'getLoadedRevisionId',
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
        'startLine' => 325,
        'endLine' => 327,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'updateLoadedRevisionId' => 
      array (
        'name' => 'updateLoadedRevisionId',
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
        'startLine' => 332,
        'endLine' => 335,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'isNewRevision' => 
      array (
        'name' => 'isNewRevision',
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
        'startLine' => 340,
        'endLine' => 342,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'isDefaultRevision' => 
      array (
        'name' => 'isDefaultRevision',
        'parameters' => 
        array (
          'new_value' => 
          array (
            'name' => 'new_value',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 347,
                'endLine' => 347,
                'startTokenPos' => 1440,
                'startFilePos' => 10410,
                'endTokenPos' => 1440,
                'endFilePos' => 10413,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 37,
            'endColumn' => 53,
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
 * {@inheritdoc}
 */',
        'startLine' => 347,
        'endLine' => 355,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'wasDefaultRevision' => 
      array (
        'name' => 'wasDefaultRevision',
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
        'startLine' => 360,
        'endLine' => 370,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'isLatestRevision' => 
      array (
        'name' => 'isLatestRevision',
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
        'startLine' => 375,
        'endLine' => 380,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'isLatestTranslationAffectedRevision' => 
      array (
        'name' => 'isLatestTranslationAffectedRevision',
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
        'startLine' => 385,
        'endLine' => 390,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'isRevisionTranslationAffected' => 
      array (
        'name' => 'isRevisionTranslationAffected',
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
        'startLine' => 395,
        'endLine' => 397,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'setRevisionTranslationAffected' => 
      array (
        'name' => 'setRevisionTranslationAffected',
        'parameters' => 
        array (
          'affected' => 
          array (
            'name' => 'affected',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 402,
            'endLine' => 402,
            'startColumn' => 50,
            'endColumn' => 58,
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
        'startLine' => 402,
        'endLine' => 407,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'isRevisionTranslationAffectedEnforced' => 
      array (
        'name' => 'isRevisionTranslationAffectedEnforced',
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
        'startLine' => 412,
        'endLine' => 414,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'setRevisionTranslationAffectedEnforced' => 
      array (
        'name' => 'setRevisionTranslationAffectedEnforced',
        'parameters' => 
        array (
          'enforced' => 
          array (
            'name' => 'enforced',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 419,
            'endLine' => 419,
            'startColumn' => 58,
            'endColumn' => 66,
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
        'startLine' => 419,
        'endLine' => 422,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'setDefaultTranslationEnforced' => 
      array (
        'name' => 'setDefaultTranslationEnforced',
        'parameters' => 
        array (
          'enforce_default_translation' => 
          array (
            'name' => 'enforce_default_translation',
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
                      'name' => 'bool',
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
            'startLine' => 434,
            'endLine' => 434,
            'startColumn' => 49,
            'endColumn' => 82,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set or clear an override of the isDefaultTranslation() result.
 *
 * @param bool|null $enforce_default_translation
 *   If boolean value is passed, the value will override the result of
 *   isDefaultTranslation() method. If NULL is passed, the default logic will
 *   be used.
 *
 * @return $this
 */',
        'startLine' => 434,
        'endLine' => 437,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'isDefaultTranslation' => 
      array (
        'name' => 'isDefaultTranslation',
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
        'startLine' => 442,
        'endLine' => 447,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getRevisionId' => 
      array (
        'name' => 'getRevisionId',
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
        'startLine' => 452,
        'endLine' => 454,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'isTranslatable' => 
      array (
        'name' => 'isTranslatable',
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
        'startLine' => 459,
        'endLine' => 464,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'preSave' => 
      array (
        'name' => 'preSave',
        'parameters' => 
        array (
          'storage' => 
          array (
            'name' => 'storage',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 469,
            'endLine' => 469,
            'startColumn' => 27,
            'endColumn' => 57,
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
        'startLine' => 469,
        'endLine' => 480,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'preSaveRevision' => 
      array (
        'name' => 'preSaveRevision',
        'parameters' => 
        array (
          'storage' => 
          array (
            'name' => 'storage',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 485,
            'endLine' => 485,
            'startColumn' => 35,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'record' => 
          array (
            'name' => 'record',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'stdClass',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 485,
            'endLine' => 485,
            'startColumn' => 68,
            'endColumn' => 84,
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
 * {@inheritdoc}
 */',
        'startLine' => 485,
        'endLine' => 486,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'postSave' => 
      array (
        'name' => 'postSave',
        'parameters' => 
        array (
          'storage' => 
          array (
            'name' => 'storage',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 491,
            'endLine' => 491,
            'startColumn' => 28,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'update' => 
          array (
            'name' => 'update',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 491,
                'endLine' => 491,
                'startTokenPos' => 2185,
                'startFilePos' => 14784,
                'endTokenPos' => 2185,
                'endFilePos' => 14787,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 491,
            'endLine' => 491,
            'startColumn' => 61,
            'endColumn' => 74,
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
 * {@inheritdoc}
 */',
        'startLine' => 491,
        'endLine' => 511,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
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
        'startLine' => 516,
        'endLine' => 520,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'isValidationRequired' => 
      array (
        'name' => 'isValidationRequired',
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
        'startLine' => 525,
        'endLine' => 527,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'setValidationRequired' => 
      array (
        'name' => 'setValidationRequired',
        'parameters' => 
        array (
          'required' => 
          array (
            'name' => 'required',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 532,
            'endLine' => 532,
            'startColumn' => 41,
            'endColumn' => 49,
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
        'startLine' => 532,
        'endLine' => 535,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'clearTranslationCache' => 
      array (
        'name' => 'clearTranslationCache',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clears entity translation object cache to remove stale references.
 */',
        'startLine' => 540,
        'endLine' => 544,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      '__sleep' => 
      array (
        'name' => '__sleep',
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
 * {@inheritdoc}
 */',
        'startLine' => 549,
        'endLine' => 562,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'id' => 
      array (
        'name' => 'id',
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
        'startLine' => 567,
        'endLine' => 569,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'bundle' => 
      array (
        'name' => 'bundle',
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
        'startLine' => 574,
        'endLine' => 576,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
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
 * {@inheritdoc}
 */',
        'startLine' => 581,
        'endLine' => 587,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'uuid' => 
      array (
        'name' => 'uuid',
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
        'startLine' => 592,
        'endLine' => 594,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'hasField' => 
      array (
        'name' => 'hasField',
        'parameters' => 
        array (
          'field_name' => 
          array (
            'name' => 'field_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 599,
            'endLine' => 599,
            'startColumn' => 28,
            'endColumn' => 38,
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
        'startLine' => 599,
        'endLine' => 601,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'field_name' => 
          array (
            'name' => 'field_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 606,
            'endLine' => 606,
            'startColumn' => 23,
            'endColumn' => 33,
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
        'startLine' => 606,
        'endLine' => 611,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getTranslatedField' => 
      array (
        'name' => 'getTranslatedField',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 619,
            'endLine' => 619,
            'startColumn' => 41,
            'endColumn' => 45,
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
            'startLine' => 619,
            'endLine' => 619,
            'startColumn' => 48,
            'endColumn' => 56,
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
 * Gets a translated field.
 *
 * @return \\Drupal\\Core\\Field\\FieldItemListInterface<\\Drupal\\Core\\Field\\FieldItemInterface>
 *   The translated field.
 */',
        'startLine' => 619,
        'endLine' => 660,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 665,
            'endLine' => 665,
            'startColumn' => 23,
            'endColumn' => 27,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 665,
            'endLine' => 665,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'notify' => 
          array (
            'name' => 'notify',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 665,
                'endLine' => 665,
                'startTokenPos' => 3242,
                'startFilePos' => 19984,
                'endTokenPos' => 3242,
                'endFilePos' => 19987,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 665,
            'endLine' => 665,
            'startColumn' => 38,
            'endColumn' => 51,
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
 * {@inheritdoc}
 */',
        'startLine' => 665,
        'endLine' => 671,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getFields' => 
      array (
        'name' => 'getFields',
        'parameters' => 
        array (
          'include_computed' => 
          array (
            'name' => 'include_computed',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 676,
                'endLine' => 676,
                'startTokenPos' => 3288,
                'startFilePos' => 20329,
                'endTokenPos' => 3288,
                'endFilePos' => 20332,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 676,
            'endLine' => 676,
            'startColumn' => 29,
            'endColumn' => 52,
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
 * {@inheritdoc}
 */',
        'startLine' => 676,
        'endLine' => 684,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getTranslatableFields' => 
      array (
        'name' => 'getTranslatableFields',
        'parameters' => 
        array (
          'include_computed' => 
          array (
            'name' => 'include_computed',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 689,
                'endLine' => 689,
                'startTokenPos' => 3376,
                'startFilePos' => 20659,
                'endTokenPos' => 3376,
                'endFilePos' => 20662,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 689,
            'endLine' => 689,
            'startColumn' => 41,
            'endColumn' => 64,
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
 * {@inheritdoc}
 */',
        'startLine' => 689,
        'endLine' => 697,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getIterator' => 
      array (
        'name' => 'getIterator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'ArrayIterator',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 702,
        'endLine' => 704,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getFieldDefinition' => 
      array (
        'name' => 'getFieldDefinition',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 709,
            'endLine' => 709,
            'startColumn' => 38,
            'endColumn' => 42,
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
        'startLine' => 709,
        'endLine' => 716,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getFieldDefinitions' => 
      array (
        'name' => 'getFieldDefinitions',
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
        'startLine' => 721,
        'endLine' => 726,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'toArray' => 
      array (
        'name' => 'toArray',
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
        'startLine' => 731,
        'endLine' => 737,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'access' => 
      array (
        'name' => 'access',
        'parameters' => 
        array (
          'operation' => 
          array (
            'name' => 'operation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 742,
            'endLine' => 742,
            'startColumn' => 26,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'account' => 
          array (
            'name' => 'account',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 742,
                'endLine' => 742,
                'startTokenPos' => 3705,
                'startFilePos' => 21943,
                'endTokenPos' => 3705,
                'endFilePos' => 21946,
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
                      'name' => 'Drupal\\Core\\Session\\AccountInterface',
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
            'startLine' => 742,
            'endLine' => 742,
            'startColumn' => 38,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'return_as_object' => 
          array (
            'name' => 'return_as_object',
            'default' => 
            array (
              'code' => 'FALSE',
              'attributes' => 
              array (
                'startLine' => 742,
                'endLine' => 742,
                'startTokenPos' => 3712,
                'startFilePos' => 21969,
                'endTokenPos' => 3712,
                'endFilePos' => 21973,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 742,
            'endLine' => 742,
            'startColumn' => 73,
            'endColumn' => 97,
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
 * {@inheritdoc}
 */',
        'startLine' => 742,
        'endLine' => 751,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'language' => 
      array (
        'name' => 'language',
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
        'startLine' => 756,
        'endLine' => 773,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'setDefaultLangcode' => 
      array (
        'name' => 'setDefaultLangcode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Populates the local cache for the default language code.
 */',
        'startLine' => 778,
        'endLine' => 806,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'updateFieldLangcodes' => 
      array (
        'name' => 'updateFieldLangcodes',
        'parameters' => 
        array (
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
            'startLine' => 811,
            'endLine' => 811,
            'startColumn' => 43,
            'endColumn' => 51,
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
 * Updates language for already instantiated fields.
 */',
        'startLine' => 811,
        'endLine' => 817,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'onChange' => 
      array (
        'name' => 'onChange',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 822,
            'endLine' => 822,
            'startColumn' => 28,
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
 * {@inheritdoc}
 */',
        'startLine' => 822,
        'endLine' => 883,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getTranslation' => 
      array (
        'name' => 'getTranslation',
        'parameters' => 
        array (
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
            'startLine' => 888,
            'endLine' => 888,
            'startColumn' => 34,
            'endColumn' => 42,
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
        'startLine' => 888,
        'endLine' => 918,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getUntranslated' => 
      array (
        'name' => 'getUntranslated',
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
        'startLine' => 923,
        'endLine' => 925,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'initializeTranslation' => 
      array (
        'name' => 'initializeTranslation',
        'parameters' => 
        array (
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
            'startLine' => 941,
            'endLine' => 941,
            'startColumn' => 44,
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
 * Instantiates a translation object for an existing translation.
 *
 * The translated entity will be a clone of the current entity with the
 * specified $langcode. All translations share the same field data structures
 * to ensure that all of them deal with fresh data.
 *
 * @param string $langcode
 *   The language code for the requested translation.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface
 *   The translation object. The content properties of the translation object
 *   are stored as references to the main entity.
 */',
        'startLine' => 941,
        'endLine' => 970,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'hasTranslation' => 
      array (
        'name' => 'hasTranslation',
        'parameters' => 
        array (
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
            'startLine' => 975,
            'endLine' => 975,
            'startColumn' => 34,
            'endColumn' => 42,
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
        'startLine' => 975,
        'endLine' => 980,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'isNewTranslation' => 
      array (
        'name' => 'isNewTranslation',
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
        'startLine' => 985,
        'endLine' => 987,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'addTranslation' => 
      array (
        'name' => 'addTranslation',
        'parameters' => 
        array (
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
            'startLine' => 992,
            'endLine' => 992,
            'startColumn' => 34,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 992,
                'endLine' => 992,
                'startTokenPos' => 5364,
                'startFilePos' => 31872,
                'endTokenPos' => 5365,
                'endFilePos' => 31873,
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
            'startLine' => 992,
            'endLine' => 992,
            'startColumn' => 45,
            'endColumn' => 62,
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
 * {@inheritdoc}
 */',
        'startLine' => 992,
        'endLine' => 1008,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'removeTranslation' => 
      array (
        'name' => 'removeTranslation',
        'parameters' => 
        array (
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
            'startLine' => 1013,
            'endLine' => 1013,
            'startColumn' => 37,
            'endColumn' => 45,
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
        'startLine' => 1013,
        'endLine' => 1037,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getTranslationStatus' => 
      array (
        'name' => 'getTranslationStatus',
        'parameters' => 
        array (
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
            'startLine' => 1042,
            'endLine' => 1042,
            'startColumn' => 40,
            'endColumn' => 48,
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
        'startLine' => 1042,
        'endLine' => 1047,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getTranslationLanguages' => 
      array (
        'name' => 'getTranslationLanguages',
        'parameters' => 
        array (
          'include_default' => 
          array (
            'name' => 'include_default',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 1052,
                'endLine' => 1052,
                'startTokenPos' => 5877,
                'startFilePos' => 34472,
                'endTokenPos' => 5877,
                'endFilePos' => 34475,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1052,
            'endLine' => 1052,
            'startColumn' => 43,
            'endColumn' => 65,
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
 * {@inheritdoc}
 */',
        'startLine' => 1052,
        'endLine' => 1064,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'updateOriginalValues' => 
      array (
        'name' => 'updateOriginalValues',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Updates the original values with the interim changes.
 */',
        'startLine' => 1069,
        'endLine' => 1081,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1089,
            'endLine' => 1089,
            'startColumn' => 26,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => true,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Implements the magic method for getting object properties.
 *
 * @todo A lot of code still uses non-fields (e.g. $entity->content in view
 *   builders) by reference. Clean that up.
 */',
        'startLine' => 1089,
        'endLine' => 1114,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      '__set' => 
      array (
        'name' => '__set',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1121,
            'endLine' => 1121,
            'startColumn' => 25,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1121,
            'endLine' => 1121,
            'startColumn' => 32,
            'endColumn' => 37,
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
 * Implements the magic method for setting object properties.
 *
 * Uses default language always.
 */',
        'startLine' => 1121,
        'endLine' => 1153,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      '__isset' => 
      array (
        'name' => '__isset',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1158,
            'endLine' => 1158,
            'startColumn' => 27,
            'endColumn' => 31,
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
 * Implements the magic method for isset().
 */',
        'startLine' => 1158,
        'endLine' => 1165,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      '__unset' => 
      array (
        'name' => '__unset',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1170,
            'endLine' => 1170,
            'startColumn' => 27,
            'endColumn' => 31,
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
 * Implements the magic method for unset().
 */',
        'startLine' => 1170,
        'endLine' => 1182,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1187,
                'endLine' => 1187,
                'startTokenPos' => 6698,
                'startFilePos' => 38714,
                'endTokenPos' => 6699,
                'endFilePos' => 38715,
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
            'startLine' => 1187,
            'endLine' => 1187,
            'startColumn' => 33,
            'endColumn' => 50,
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
 * {@inheritdoc}
 */',
        'startLine' => 1187,
        'endLine' => 1199,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'createDuplicate' => 
      array (
        'name' => 'createDuplicate',
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
        'startLine' => 1204,
        'endLine' => 1237,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      '__clone' => 
      array (
        'name' => '__clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Magic method: Implements a deep clone.
 */',
        'startLine' => 1242,
        'endLine' => 1323,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'label' => 
      array (
        'name' => 'label',
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
        'startLine' => 1328,
        'endLine' => 1332,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'referencedEntities' => 
      array (
        'name' => 'referencedEntities',
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
        'startLine' => 1337,
        'endLine' => 1353,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getEntityKey' => 
      array (
        'name' => 'getEntityKey',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1364,
            'endLine' => 1364,
            'startColumn' => 35,
            'endColumn' => 38,
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
 * Gets the value of the given entity key, if defined.
 *
 * @param string $key
 *   Name of the entity key, for example id, revision or bundle.
 *
 * @return mixed
 *   The value of the entity key, NULL if not defined.
 */',
        'startLine' => 1364,
        'endLine' => 1393,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'baseFieldDefinitions' => 
      array (
        'name' => 'baseFieldDefinitions',
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
            'startLine' => 1398,
            'endLine' => 1398,
            'startColumn' => 47,
            'endColumn' => 78,
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
        'startLine' => 1398,
        'endLine' => 1451,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'bundleFieldDefinitions' => 
      array (
        'name' => 'bundleFieldDefinitions',
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
            'startLine' => 1456,
            'endLine' => 1456,
            'startColumn' => 49,
            'endColumn' => 80,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bundle' => 
          array (
            'name' => 'bundle',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1456,
            'endLine' => 1456,
            'startColumn' => 83,
            'endColumn' => 89,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'base_field_definitions' => 
          array (
            'name' => 'base_field_definitions',
            'default' => NULL,
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
            'startLine' => 1456,
            'endLine' => 1456,
            'startColumn' => 92,
            'endColumn' => 120,
            'parameterIndex' => 2,
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
        'startLine' => 1456,
        'endLine' => 1458,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'getFieldsToSkipFromTranslationChangesCheck' => 
      array (
        'name' => 'getFieldsToSkipFromTranslationChangesCheck',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns an array of field names to skip in ::hasTranslationChanges.
 *
 * @return array
 *   An array of field names.
 */',
        'startLine' => 1466,
        'endLine' => 1472,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'hasTranslationChanges' => 
      array (
        'name' => 'hasTranslationChanges',
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
        'startLine' => 1477,
        'endLine' => 1534,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
      'isDefaultTranslationAffectedOnly' => 
      array (
        'name' => 'isDefaultTranslationAffectedOnly',
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
        'startLine' => 1539,
        'endLine' => 1544,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'currentClassName' => 'Drupal\\Core\\Entity\\ContentEntityBase',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
        'Drupal\\Core\\Entity\\EntityChangesDetectionTrait' => 
        array (
          0 => 
          array (
            'alias' => 'traitGetFieldsToSkipFromTranslationChangesCheck',
            'method' => 'getFieldsToSkipFromTranslationChangesCheck',
            'hash' => 'drupal\\core\\entity\\entitychangesdetectiontrait::getfieldstoskipfromtranslationchangescheck',
          ),
        ),
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
        'drupal\\core\\entity\\entitychangesdetectiontrait::getfieldstoskipfromtranslationchangescheck' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait::getFieldsToSkipFromTranslationChangesCheck',
      ),
    ),
  ),
));