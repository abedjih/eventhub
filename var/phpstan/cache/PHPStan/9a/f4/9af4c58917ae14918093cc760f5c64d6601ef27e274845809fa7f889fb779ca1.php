<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ConfigEntityBase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Config\Entity\ConfigEntityBase
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c1e27391d3f3416fba2108877afc65e55c89f9ed2e6e4fe900fa9677cafc1bfd-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'filename' => '/var/www/html/vendor/composer/../../web/core/lib/Drupal/Core/Config/Entity/ConfigEntityBase.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Config\\Entity',
    'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
    'shortName' => 'ConfigEntityBase',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Defines a base configuration entity class.
 *
 * @ingroup entity_api
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'AllowDynamicProperties',
        'isRepeated' => false,
        'arguments' => 
        array (
        ),
      ),
    ),
    'startLine' => 25,
    'endLine' => 640,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Drupal\\Core\\Entity\\EntityBase',
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
      1 => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'originalId' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'name' => 'originalId',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The original ID of the configuration entity.
 *
 * The ID of a configuration entity is a unique string (machine name). When a
 * configuration entity is updated and its machine name is renamed, the
 * original ID needs to be known.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'status' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'name' => 'status',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'TRUE',
          'attributes' => 
          array (
            'startLine' => 49,
            'endLine' => 49,
            'startTokenPos' => 134,
            'startFilePos' => 1454,
            'endTokenPos' => 134,
            'endFilePos' => 1457,
          ),
        ),
        'docComment' => '/**
 * The enabled/disabled status of the configuration entity.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 3,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'uuid' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'name' => 'uuid',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The UUID for this entity.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 3,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isUninstalling' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'name' => 'isUninstalling',
        'modifiers' => 4,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 63,
            'endLine' => 63,
            'startTokenPos' => 152,
            'startFilePos' => 1673,
            'endTokenPos' => 152,
            'endFilePos' => 1677,
          ),
        ),
        'docComment' => '/**
 * Whether the config is being deleted by the uninstall process.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 3,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'langcode' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'name' => 'langcode',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'en\'',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 79,
            'startTokenPos' => 163,
            'startFilePos' => 2394,
            'endTokenPos' => 163,
            'endFilePos' => 2397,
          ),
        ),
        'docComment' => '/**
 * The language code of the entity\'s default language.
 *
 * Assumed to be English by default. ConfigEntityStorage will set an
 * appropriate language when creating new entities. This default applies to
 * imported default configuration where the language code is missing. Those
 * should be assumed to be English. All configuration entities support third
 * party settings, so even configuration entities that do not directly
 * store settings involving text in a human language may have such third
 * party settings attached. This means configuration entities should be in one
 * of the configured languages or the built-in English.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 3,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'third_party_settings' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'name' => 'third_party_settings',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 89,
            'endLine' => 89,
            'startTokenPos' => 176,
            'startFilePos' => 2637,
            'endTokenPos' => 177,
            'endFilePos' => 2638,
          ),
        ),
        'docComment' => '/**
 * Third party entity settings.
 *
 * An array of key/value pairs keyed by provider.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 89,
        'endLine' => 89,
        'startColumn' => 3,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_core' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'name' => '_core',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 101,
            'endLine' => 101,
            'startTokenPos' => 190,
            'startFilePos' => 3004,
            'endTokenPos' => 191,
            'endFilePos' => 3005,
          ),
        ),
        'docComment' => '/**
 * Information maintained by Drupal core about configuration.
 *
 * Keys:
 * - default_config_hash: A hash calculated by the config.installer service
 *   and added during installation.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 3,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'trustedData' => 
      array (
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'name' => 'trustedData',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'FALSE',
          'attributes' => 
          array (
            'startLine' => 108,
            'endLine' => 108,
            'startTokenPos' => 202,
            'startFilePos' => 3135,
            'endTokenPos' => 202,
            'endFilePos' => 3139,
          ),
        ),
        'docComment' => '/**
 * Trust supplied data and not use configuration schema on save.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 3,
        'endColumn' => 33,
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
            'startLine' => 113,
            'endLine' => 113,
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
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 46,
            'endColumn' => 57,
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
        'startLine' => 113,
        'endLine' => 122,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'getOriginalId' => 
      array (
        'name' => 'getOriginalId',
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
        'startLine' => 127,
        'endLine' => 129,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'setOriginalId' => 
      array (
        'name' => 'setOriginalId',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 134,
            'endLine' => 134,
            'startColumn' => 33,
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
        'startLine' => 134,
        'endLine' => 142,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'isNew' => 
      array (
        'name' => 'isNew',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Overrides EntityBase::isNew().
 *
 * EntityInterface::enforceIsNew() is only supported for newly created
 * configuration entities but has no effect after saving, since each
 * configuration entity is unique.
 */',
        'startLine' => 151,
        'endLine' => 153,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'property_name' => 
          array (
            'name' => 'property_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 158,
            'endLine' => 158,
            'startColumn' => 23,
            'endColumn' => 36,
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
        'startLine' => 158,
        'endLine' => 160,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'property_name' => 
          array (
            'name' => 'property_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 166,
            'endLine' => 166,
            'startColumn' => 23,
            'endColumn' => 36,
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
            'startLine' => 166,
            'endLine' => 166,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Drupal\\Core\\Config\\Action\\Attribute\\ActionMethod',
            'isRepeated' => false,
            'arguments' => 
            array (
              'adminLabel' => 
              array (
                'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Set a value\')',
                'attributes' => 
                array (
                  'startLine' => 165,
                  'endLine' => 165,
                  'startTokenPos' => 402,
                  'startFilePos' => 4547,
                  'endTokenPos' => 407,
                  'endFilePos' => 4583,
                ),
              ),
              'pluralize' => 
              array (
                'code' => '\'setMultiple\'',
                'attributes' => 
                array (
                  'startLine' => 165,
                  'endLine' => 165,
                  'startTokenPos' => 413,
                  'startFilePos' => 4597,
                  'endTokenPos' => 413,
                  'endFilePos' => 4609,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 165,
        'endLine' => 178,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'enable' => 
      array (
        'name' => 'enable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Drupal\\Core\\Config\\Action\\Attribute\\ActionMethod',
            'isRepeated' => false,
            'arguments' => 
            array (
              'adminLabel' => 
              array (
                'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Enable\')',
                'attributes' => 
                array (
                  'startLine' => 183,
                  'endLine' => 183,
                  'startTokenPos' => 520,
                  'startFilePos' => 5150,
                  'endTokenPos' => 525,
                  'endFilePos' => 5181,
                ),
              ),
              'pluralize' => 
              array (
                'code' => 'FALSE',
                'attributes' => 
                array (
                  'startLine' => 183,
                  'endLine' => 183,
                  'startTokenPos' => 531,
                  'startFilePos' => 5195,
                  'endTokenPos' => 531,
                  'endFilePos' => 5199,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 183,
        'endLine' => 186,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'disable' => 
      array (
        'name' => 'disable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Drupal\\Core\\Config\\Action\\Attribute\\ActionMethod',
            'isRepeated' => false,
            'arguments' => 
            array (
              'adminLabel' => 
              array (
                'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Disable\')',
                'attributes' => 
                array (
                  'startLine' => 191,
                  'endLine' => 191,
                  'startTokenPos' => 565,
                  'startFilePos' => 5332,
                  'endTokenPos' => 570,
                  'endFilePos' => 5364,
                ),
              ),
              'pluralize' => 
              array (
                'code' => 'FALSE',
                'attributes' => 
                array (
                  'startLine' => 191,
                  'endLine' => 191,
                  'startTokenPos' => 576,
                  'startFilePos' => 5378,
                  'endTokenPos' => 576,
                  'endFilePos' => 5382,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 191,
        'endLine' => 194,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'setStatus' => 
      array (
        'name' => 'setStatus',
        'parameters' => 
        array (
          'status' => 
          array (
            'name' => 'status',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 200,
            'endLine' => 200,
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
          0 => 
          array (
            'name' => 'Drupal\\Core\\Config\\Action\\Attribute\\ActionMethod',
            'isRepeated' => false,
            'arguments' => 
            array (
              'adminLabel' => 
              array (
                'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Set status\')',
                'attributes' => 
                array (
                  'startLine' => 199,
                  'endLine' => 199,
                  'startTokenPos' => 610,
                  'startFilePos' => 5517,
                  'endTokenPos' => 615,
                  'endFilePos' => 5552,
                ),
              ),
              'pluralize' => 
              array (
                'code' => 'FALSE',
                'attributes' => 
                array (
                  'startLine' => 199,
                  'endLine' => 199,
                  'startTokenPos' => 621,
                  'startFilePos' => 5566,
                  'endTokenPos' => 621,
                  'endFilePos' => 5570,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 199,
        'endLine' => 203,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'status' => 
      array (
        'name' => 'status',
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
        'startLine' => 208,
        'endLine' => 210,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'setUninstalling' => 
      array (
        'name' => 'setUninstalling',
        'parameters' => 
        array (
          'uninstalling' => 
          array (
            'name' => 'uninstalling',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 215,
            'endLine' => 215,
            'startColumn' => 35,
            'endColumn' => 47,
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
        'startLine' => 215,
        'endLine' => 217,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'isUninstalling' => 
      array (
        'name' => 'isUninstalling',
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
        'startLine' => 222,
        'endLine' => 224,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
        'startLine' => 229,
        'endLine' => 235,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'sort' => 
      array (
        'name' => 'sort',
        'parameters' => 
        array (
          'a' => 
          array (
            'name' => 'a',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 240,
            'endLine' => 240,
            'startColumn' => 31,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'b' => 
          array (
            'name' => 'b',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 240,
            'endLine' => 240,
            'startColumn' => 57,
            'endColumn' => 80,
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
 * Callback for uasort() to sort configuration entities by weight and label.
 */',
        'startLine' => 240,
        'endLine' => 249,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
        'startLine' => 254,
        'endLine' => 282,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'getTypedConfig' => 
      array (
        'name' => 'getTypedConfig',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the typed config manager.
 *
 * @return \\Drupal\\Core\\Config\\TypedConfigManagerInterface
 *   The typed configuration plugin manager.
 */',
        'startLine' => 290,
        'endLine' => 292,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
            'startLine' => 297,
            'endLine' => 297,
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
        'startLine' => 297,
        'endLine' => 348,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
        'startLine' => 353,
        'endLine' => 377,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'calculateDependencies' => 
      array (
        'name' => 'calculateDependencies',
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
        'startLine' => 382,
        'endLine' => 403,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'toUrl' => 
      array (
        'name' => 'toUrl',
        'parameters' => 
        array (
          'rel' => 
          array (
            'name' => 'rel',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 408,
                'endLine' => 408,
                'startTokenPos' => 1964,
                'startFilePos' => 13023,
                'endTokenPos' => 1964,
                'endFilePos' => 13026,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 408,
            'endLine' => 408,
            'startColumn' => 25,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 408,
                'endLine' => 408,
                'startTokenPos' => 1973,
                'startFilePos' => 13046,
                'endTokenPos' => 1974,
                'endFilePos' => 13047,
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
            'startLine' => 408,
            'endLine' => 408,
            'startColumn' => 38,
            'endColumn' => 56,
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
        'startLine' => 408,
        'endLine' => 412,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'getCacheTagsToInvalidate' => 
      array (
        'name' => 'getCacheTagsToInvalidate',
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
        'startLine' => 417,
        'endLine' => 421,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'addDependency' => 
      array (
        'name' => 'addDependency',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 36,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 43,
            'endColumn' => 47,
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
 * Overrides \\Drupal\\Core\\Entity\\DependencyTrait:addDependency().
 *
 * Note that this function should only be called from implementations of
 * \\Drupal\\Core\\Config\\Entity\\ConfigEntityInterface::calculateDependencies(),
 * as dependencies are recalculated during every entity save.
 *
 * @see \\Drupal\\Core\\Config\\Entity\\ConfigEntityDependency::hasDependency()
 */',
        'startLine' => 432,
        'endLine' => 441,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'getDependencies' => 
      array (
        'name' => 'getDependencies',
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
        'startLine' => 446,
        'endLine' => 455,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'getConfigDependencyName' => 
      array (
        'name' => 'getConfigDependencyName',
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
        'startLine' => 460,
        'endLine' => 462,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'getConfigTarget' => 
      array (
        'name' => 'getConfigTarget',
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
        'startLine' => 467,
        'endLine' => 473,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'onDependencyRemoval' => 
      array (
        'name' => 'onDependencyRemoval',
        'parameters' => 
        array (
          'dependencies' => 
          array (
            'name' => 'dependencies',
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
            'startLine' => 478,
            'endLine' => 478,
            'startColumn' => 39,
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
        'startLine' => 478,
        'endLine' => 501,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'invalidateTagsOnSave' => 
      array (
        'name' => 'invalidateTagsOnSave',
        'parameters' => 
        array (
          'update' => 
          array (
            'name' => 'update',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 509,
            'endLine' => 509,
            'startColumn' => 43,
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
 *
 * Override to never invalidate the entity\'s cache tag; the config system
 * already invalidates it.
 */',
        'startLine' => 509,
        'endLine' => 511,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'invalidateTagsOnDelete' => 
      array (
        'name' => 'invalidateTagsOnDelete',
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
            'startLine' => 519,
            'endLine' => 519,
            'startColumn' => 52,
            'endColumn' => 83,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entities' => 
          array (
            'name' => 'entities',
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
            'startLine' => 519,
            'endLine' => 519,
            'startColumn' => 86,
            'endColumn' => 100,
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
 *
 * Override to never invalidate the individual entities\' cache tags; the
 * config system already invalidates them.
 */',
        'startLine' => 519,
        'endLine' => 525,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'setThirdPartySetting' => 
      array (
        'name' => 'setThirdPartySetting',
        'parameters' => 
        array (
          'module' => 
          array (
            'name' => 'module',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 531,
            'endLine' => 531,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 531,
            'endLine' => 531,
            'startColumn' => 49,
            'endColumn' => 52,
            'parameterIndex' => 1,
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
            'startLine' => 531,
            'endLine' => 531,
            'startColumn' => 55,
            'endColumn' => 60,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Drupal\\Core\\Config\\Action\\Attribute\\ActionMethod',
            'isRepeated' => false,
            'arguments' => 
            array (
              'adminLabel' => 
              array (
                'code' => 'new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup(\'Set third-party setting\')',
                'attributes' => 
                array (
                  'startLine' => 530,
                  'endLine' => 530,
                  'startTokenPos' => 2605,
                  'startFilePos' => 17301,
                  'endTokenPos' => 2610,
                  'endFilePos' => 17349,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 530,
        'endLine' => 534,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'getThirdPartySetting' => 
      array (
        'name' => 'getThirdPartySetting',
        'parameters' => 
        array (
          'module' => 
          array (
            'name' => 'module',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 539,
            'endLine' => 539,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 539,
            'endLine' => 539,
            'startColumn' => 49,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 539,
                'endLine' => 539,
                'startTokenPos' => 2671,
                'startFilePos' => 17593,
                'endTokenPos' => 2671,
                'endFilePos' => 17596,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 539,
            'endLine' => 539,
            'startColumn' => 55,
            'endColumn' => 69,
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
        'startLine' => 539,
        'endLine' => 546,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'getThirdPartySettings' => 
      array (
        'name' => 'getThirdPartySettings',
        'parameters' => 
        array (
          'module' => 
          array (
            'name' => 'module',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 551,
            'endLine' => 551,
            'startColumn' => 41,
            'endColumn' => 47,
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
        'startLine' => 551,
        'endLine' => 553,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'unsetThirdPartySetting' => 
      array (
        'name' => 'unsetThirdPartySetting',
        'parameters' => 
        array (
          'module' => 
          array (
            'name' => 'module',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 558,
            'endLine' => 558,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 558,
            'endLine' => 558,
            'startColumn' => 51,
            'endColumn' => 54,
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
        'startLine' => 558,
        'endLine' => 566,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'getThirdPartyProviders' => 
      array (
        'name' => 'getThirdPartyProviders',
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
        'startLine' => 571,
        'endLine' => 573,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'preDelete' => 
      array (
        'name' => 'preDelete',
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
            'startLine' => 578,
            'endLine' => 578,
            'startColumn' => 36,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'entities' => 
          array (
            'name' => 'entities',
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
            'startLine' => 578,
            'endLine' => 578,
            'startColumn' => 69,
            'endColumn' => 83,
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
        'startLine' => 578,
        'endLine' => 597,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'getConfigManager' => 
      array (
        'name' => 'getConfigManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the configuration manager.
 *
 * @return \\Drupal\\Core\\Config\\ConfigManager
 *   The configuration manager.
 */',
        'startLine' => 605,
        'endLine' => 607,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'isInstallable' => 
      array (
        'name' => 'isInstallable',
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
        'startLine' => 612,
        'endLine' => 614,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'trustData' => 
      array (
        'name' => 'trustData',
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
        'startLine' => 619,
        'endLine' => 622,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'hasTrustedData' => 
      array (
        'name' => 'hasTrustedData',
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
        'startLine' => 627,
        'endLine' => 629,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
      'save' => 
      array (
        'name' => 'save',
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
        'startLine' => 634,
        'endLine' => 638,
        'startColumn' => 3,
        'endColumn' => 3,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Config\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'implementingClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'currentClassName' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
        'Drupal\\Core\\Plugin\\PluginDependencyTrait' => 
        array (
          0 => 
          array (
            'alias' => 'addDependencyTrait',
            'method' => 'addDependency',
            'hash' => 'drupal\\core\\plugin\\plugindependencytrait::adddependency',
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
        'drupal\\core\\plugin\\plugindependencytrait::adddependency' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait::addDependency',
      ),
    ),
  ),
));