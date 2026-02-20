<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/TranslatableRevisionableInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\TranslatableRevisionableInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-1fcc98835d8921f92040f85d2c3efea7d9a634e760436cde1a76adf56efaff70-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Entity/TranslatableRevisionableInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
    'shortName' => 'TranslatableRevisionableInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides methods for an entity to support revision translation.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 85,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Entity\\TranslatableInterface',
      1 => 'Drupal\\Core\\Entity\\RevisionableInterface',
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
 * Checks whether this is the latest revision affecting this translation.
 *
 * @return bool
 *   TRUE if this revision is the latest one affecting the active translation,
 *   FALSE otherwise.
 */',
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 3,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
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
            'startLine' => 35,
            'endLine' => 35,
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
 * Marks the current revision translation as affected.
 *
 * Setting the revision translation affected flag through the setter or
 * through the field directly will always enforce it, which will be used by
 * the entity storage to determine if the flag should be recomputed or the set
 * value should be used instead.
 *
 * @param bool|null $affected
 *   The flag value. A NULL value can be specified to reset the current value
 *   and make sure a new value will be computed by the system.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Entity\\ContentEntityStorageBase::populateAffectedRevisionTranslations()
 */',
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 3,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
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
 * Checks whether the current translation is affected by the current revision.
 *
 * @return bool
 *   TRUE if the entity object is affected by the current revision, FALSE
 *   otherwise.
 */',
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 3,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
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
 * Checks if the revision translation affected flag value has been enforced.
 *
 * @return bool
 *   TRUE if revision translation affected flag is enforced, FALSE otherwise.
 *
 * @internal
 */',
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 3,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
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
            'startLine' => 74,
            'endLine' => 74,
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
 * Enforces the revision translation affected flag value.
 *
 * Note that this method call will not have any influence on the storage if
 * the value of the revision translation affected flag is NULL which is used
 * as an indication for the storage to recompute the flag.
 *
 * @param bool $enforced
 *   If TRUE, the value of the revision translation affected flag will be
 *   enforced so that on entity save the entity storage will not recompute it.
 *   Otherwise the storage will recompute it.
 *
 * @return $this
 *
 * @internal
 *
 * @see \\Drupal\\Core\\Entity\\ContentEntityInterface::setRevisionTranslationAffected()
 */',
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 3,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
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
 * Checks if untranslatable fields should affect only the default translation.
 *
 * @return bool
 *   TRUE if untranslatable fields should affect only the default translation,
 *   FALSE otherwise.
 */',
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 3,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
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