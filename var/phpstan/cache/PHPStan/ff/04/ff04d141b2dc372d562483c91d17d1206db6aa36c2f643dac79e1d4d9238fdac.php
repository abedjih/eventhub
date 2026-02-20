<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\EntityInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ceb98f14a543597893347ae1f41cf82e925e0aea12d3d13bdcae0ff0ce9623df-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\EntityInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/EntityInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity',
    'name' => 'Drupal\\Core\\Entity\\EntityInterface',
    'shortName' => 'EntityInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Defines a common interface for all entity objects.
 *
 * @ingroup entity_api
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 474,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Access\\AccessibleInterface',
      1 => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
      2 => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
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
 * Gets the entity UUID (Universally Unique Identifier).
 *
 * The UUID is guaranteed to be unique and can be used to identify an entity
 * across multiple systems.
 *
 * @return string|null
 *   The UUID of the entity, or NULL if the entity does not have one.
 */',
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 3,
        'endColumn' => 25,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Gets the identifier.
 *
 * @return string|int|null
 *   The entity identifier, or NULL if the object does not yet have an
 *   identifier.
 */',
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 3,
        'endColumn' => 23,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Gets the language of the entity.
 *
 * @return \\Drupal\\Core\\Language\\LanguageInterface
 *   The language object.
 */',
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 3,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Determines whether the entity is new.
 *
 * Usually an entity is new if no ID exists for it yet. However, entities may
 * be enforced to be new with existing IDs too.
 *
 * @return bool
 *   TRUE if the entity is new, or FALSE if the entity has already been saved.
 *
 * @see \\Drupal\\Core\\Entity\\EntityInterface::enforceIsNew()
 */',
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 3,
        'endColumn' => 26,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'enforceIsNew' => 
      array (
        'name' => 'enforceIsNew',
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
                'startLine' => 71,
                'endLine' => 71,
                'startTokenPos' => 96,
                'startFilePos' => 1879,
                'endTokenPos' => 96,
                'endFilePos' => 1882,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 32,
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
 * Enforces an entity to be new.
 *
 * Allows migrations to create entities with pre-defined IDs by forcing the
 * entity to be new before saving.
 *
 * @param bool $value
 *   (optional) Whether the entity should be forced to be new. Defaults to
 *   TRUE.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Entity\\EntityInterface::isNew()
 */',
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 3,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'getEntityTypeId' => 
      array (
        'name' => 'getEntityTypeId',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the ID of the type of the entity.
 *
 * @return string
 *   The entity type ID.
 */',
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Gets the bundle of the entity.
 *
 * @return string
 *   The bundle of the entity. Defaults to the entity type ID if the entity
 *   type does not make use of different bundles.
 */',
        'startLine' => 88,
        'endLine' => 88,
        'startColumn' => 3,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Gets the label of the entity.
 *
 * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup|null
 *   The label of the entity, or NULL if there is no label defined.
 */',
        'startLine' => 96,
        'endLine' => 96,
        'startColumn' => 3,
        'endColumn' => 26,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
                'startLine' => 136,
                'endLine' => 136,
                'startTokenPos' => 145,
                'startFilePos' => 3845,
                'endTokenPos' => 145,
                'endFilePos' => 3848,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 136,
            'endLine' => 136,
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
                'startLine' => 136,
                'endLine' => 136,
                'startTokenPos' => 154,
                'startFilePos' => 3868,
                'endTokenPos' => 155,
                'endFilePos' => 3869,
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
            'startLine' => 136,
            'endLine' => 136,
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
 * Gets the URL object for the entity.
 *
 * The entity must have an id already. Content entities usually get their IDs
 * by saving them.
 *
 * URI templates might be set in the links array in an annotation, for
 * example:
 * @code
 * links = {
 *   "canonical" = "/node/{node}",
 *   "edit-form" = "/node/{node}/edit",
 *   "version-history" = "/node/{node}/revisions"
 * }
 * @endcode
 * or specified in a callback function set like:
 * @code
 * uri_callback = "comment_uri",
 * @endcode
 * If the path is not set in the links array, the uri_callback function is
 * used for setting the path. If this does not exist and the link relationship
 * type is canonical, the path is set using the default template:
 * entity/entityType/id.
 *
 * @param string $rel
 *   The link relationship type, for example: canonical or edit-form. If none
 *   is provided, canonical is assumed, or edit-form if no canonical link
 *   exists.
 * @param array $options
 *   See \\Drupal\\Core\\Routing\\UrlGeneratorInterface::generateFromRoute() for
 *   the available options.
 *
 * @return \\Drupal\\Core\\Url
 *   The URL object.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityMalformedException
 * @throws \\Drupal\\Core\\Entity\\Exception\\UndefinedLinkTemplateException
 */',
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 3,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'toLink' => 
      array (
        'name' => 'toLink',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 156,
                'endLine' => 156,
                'startTokenPos' => 171,
                'startFilePos' => 4642,
                'endTokenPos' => 171,
                'endFilePos' => 4645,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 156,
            'endLine' => 156,
            'startColumn' => 26,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'rel' => 
          array (
            'name' => 'rel',
            'default' => 
            array (
              'code' => '\'canonical\'',
              'attributes' => 
              array (
                'startLine' => 156,
                'endLine' => 156,
                'startTokenPos' => 178,
                'startFilePos' => 4655,
                'endTokenPos' => 178,
                'endFilePos' => 4665,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 156,
            'endLine' => 156,
            'startColumn' => 40,
            'endColumn' => 57,
            'parameterIndex' => 1,
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
                'startLine' => 156,
                'endLine' => 156,
                'startTokenPos' => 187,
                'startFilePos' => 4685,
                'endTokenPos' => 188,
                'endFilePos' => 4686,
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
            'startLine' => 156,
            'endLine' => 156,
            'startColumn' => 60,
            'endColumn' => 78,
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
 * Generates the HTML for a link to this entity.
 *
 * @param string|null|array|\\Drupal\\Component\\Render\\MarkupInterface $text
 *   (optional) The link text for the anchor tag as a translated string or
 *   render array. If NULL, it will use the entity\'s label. Defaults to NULL.
 * @param string $rel
 *   (optional) The link relationship type. Defaults to \'canonical\'.
 * @param array $options
 *   See \\Drupal\\Core\\Routing\\UrlGeneratorInterface::generateFromRoute() for
 *   the available options.
 *
 * @return \\Drupal\\Core\\Link
 *   A Link to the entity.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityMalformedException
 * @throws \\Drupal\\Core\\Entity\\Exception\\UndefinedLinkTemplateException
 */',
        'startLine' => 156,
        'endLine' => 156,
        'startColumn' => 3,
        'endColumn' => 80,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'hasLinkTemplate' => 
      array (
        'name' => 'hasLinkTemplate',
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
            'startLine' => 167,
            'endLine' => 167,
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
 * Indicates if a link template exists for a given key.
 *
 * @param string $key
 *   The link type.
 *
 * @return bool
 *   TRUE if the link template exists, FALSE otherwise.
 */',
        'startLine' => 167,
        'endLine' => 167,
        'startColumn' => 3,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'uriRelationships' => 
      array (
        'name' => 'uriRelationships',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a list of URI relationships supported by this entity.
 *
 * @return string[]
 *   An array of link relationships supported by this entity.
 */',
        'startLine' => 175,
        'endLine' => 175,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'load' => 
      array (
        'name' => 'load',
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
            'startLine' => 186,
            'endLine' => 186,
            'startColumn' => 31,
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
 * Loads an entity.
 *
 * @param mixed $id
 *   The id of the entity to load.
 *
 * @return static|null
 *   The entity object or NULL if there is no entity with the given ID.
 */',
        'startLine' => 186,
        'endLine' => 186,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'loadMultiple' => 
      array (
        'name' => 'loadMultiple',
        'parameters' => 
        array (
          'ids' => 
          array (
            'name' => 'ids',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 197,
                'endLine' => 197,
                'startTokenPos' => 246,
                'startFilePos' => 5649,
                'endTokenPos' => 246,
                'endFilePos' => 5652,
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
                      'name' => 'array',
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
            'startLine' => 197,
            'endLine' => 197,
            'startColumn' => 39,
            'endColumn' => 56,
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
 * Loads one or more entities.
 *
 * @param array $ids
 *   An array of entity IDs, or NULL to load all entities.
 *
 * @return static[]
 *   An array of entity objects indexed by their IDs.
 */',
        'startLine' => 197,
        'endLine' => 197,
        'startColumn' => 3,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
                'startLine' => 209,
                'endLine' => 209,
                'startTokenPos' => 266,
                'startFilePos' => 6011,
                'endTokenPos' => 267,
                'endFilePos' => 6012,
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
            'startLine' => 209,
            'endLine' => 209,
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
 * Constructs a new entity object, without permanently saving it.
 *
 * @param array $values
 *   (optional) An array of values to set, keyed by property name. If the
 *   entity type has bundles, the bundle key has to be specified.
 *
 * @return static
 *   The entity object.
 */',
        'startLine' => 209,
        'endLine' => 209,
        'startColumn' => 3,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Saves an entity permanently.
 *
 * When saving existing entities, the entity is assumed to be complete,
 * partial updates of entities are not supported.
 *
 * @return int
 *   Either SAVED_NEW or SAVED_UPDATED, depending on the operation performed.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *   In case of failures an exception is thrown.
 */',
        'startLine' => 223,
        'endLine' => 223,
        'startColumn' => 3,
        'endColumn' => 25,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Deletes an entity permanently.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *   In case of failures an exception is thrown.
 */',
        'startLine' => 231,
        'endLine' => 231,
        'startColumn' => 3,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
            'startLine' => 254,
            'endLine' => 254,
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
 * Acts on an entity before the presave hook is invoked.
 *
 * Used before the entity is saved and before invoking the presave hook. Note
 * that in case of translatable content entities this callback is only fired
 * on their current translation. It is up to the developer to iterate
 * over all translations if needed. This is different from its counterpart in
 * the Field API, FieldItemListInterface::preSave(), which is fired on all
 * field translations automatically.
 *
 * @todo Adjust existing implementations and the documentation according to
 *   https://www.drupal.org/node/2577609 to have a consistent API.
 *
 * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
 *   The entity storage object.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemListInterface::preSave()
 *
 * @throws \\Exception
 *   When there is a problem that should prevent saving the entity.
 */',
        'startLine' => 254,
        'endLine' => 254,
        'startColumn' => 3,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
            'startLine' => 269,
            'endLine' => 269,
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
                'startLine' => 269,
                'endLine' => 269,
                'startTokenPos' => 324,
                'startFilePos' => 8254,
                'endTokenPos' => 324,
                'endFilePos' => 8257,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 269,
            'endLine' => 269,
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
 * Acts on a saved entity before the insert or update hook is invoked.
 *
 * Used after the entity is saved, but before invoking the insert or update
 * hook. Note that in case of translatable content entities this callback is
 * only fired on their current translation. It is up to the developer to
 * iterate over all translations if needed.
 *
 * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
 *   The entity storage object.
 * @param bool $update
 *   TRUE if the entity has been updated, or FALSE if it has been inserted.
 */',
        'startLine' => 269,
        'endLine' => 269,
        'startColumn' => 3,
        'endColumn' => 76,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'preCreate' => 
      array (
        'name' => 'preCreate',
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
            'startLine' => 282,
            'endLine' => 282,
            'startColumn' => 36,
            'endColumn' => 66,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 282,
            'endLine' => 282,
            'startColumn' => 69,
            'endColumn' => 82,
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
 * Changes the values of an entity before it is created.
 *
 * Load defaults for example.
 *
 * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
 *   The entity storage object.
 * @param mixed[] $values
 *   An array of values to set, keyed by property name. If the entity type has
 *   bundles the bundle key has to be specified.
 */',
        'startLine' => 282,
        'endLine' => 282,
        'startColumn' => 3,
        'endColumn' => 84,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
            'startLine' => 297,
            'endLine' => 297,
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
 * Acts on a created entity before hooks are invoked.
 *
 * Used after the entity is created, but before saving the entity and before
 * any of the presave hooks are invoked.
 *
 * See the @link entity_crud Entity CRUD topic @endlink for more information.
 *
 * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
 *   The entity storage object.
 *
 * @see \\Drupal\\Core\\Entity\\EntityInterface::create()
 */',
        'startLine' => 297,
        'endLine' => 297,
        'startColumn' => 3,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
            'startLine' => 309,
            'endLine' => 309,
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
            'startLine' => 309,
            'endLine' => 309,
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
 * Acts on entities before they are deleted and before hooks are invoked.
 *
 * Used before the entities are deleted and before invoking the delete hook.
 *
 * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
 *   The entity storage object.
 * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
 *   An array of entities.
 */',
        'startLine' => 309,
        'endLine' => 309,
        'startColumn' => 3,
        'endColumn' => 85,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'postDelete' => 
      array (
        'name' => 'postDelete',
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
            'startLine' => 321,
            'endLine' => 321,
            'startColumn' => 37,
            'endColumn' => 67,
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
            'startLine' => 321,
            'endLine' => 321,
            'startColumn' => 70,
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
 * Acts on deleted entities before the delete hook is invoked.
 *
 * Used after the entities are deleted but before invoking the delete hook.
 *
 * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
 *   The entity storage object.
 * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
 *   An array of entities.
 */',
        'startLine' => 321,
        'endLine' => 321,
        'startColumn' => 3,
        'endColumn' => 86,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'postLoad' => 
      array (
        'name' => 'postLoad',
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
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 35,
            'endColumn' => 65,
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 68,
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
 * Acts on loaded entities.
 *
 * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
 *   The entity storage object.
 * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
 *   An array of entities.
 */',
        'startLine' => 331,
        'endLine' => 331,
        'startColumn' => 3,
        'endColumn' => 85,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Creates a duplicate of the entity.
 *
 * @return static
 *   A clone of $this with all identifiers unset, so saving it inserts a new
 *   entity into the storage system.
 */',
        'startLine' => 340,
        'endLine' => 340,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * @return \\Drupal\\Core\\Entity\\EntityTypeInterface
 *   The entity type definition.
 */',
        'startLine' => 348,
        'endLine' => 348,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Gets a list of entities referenced by this entity.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface[]
 *   An array of entities.
 */',
        'startLine' => 356,
        'endLine' => 356,
        'startColumn' => 3,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Gets the original ID.
 *
 * @return int|string|null
 *   The original ID, or NULL if no ID was set or for entity types that do not
 *   support renames.
 */',
        'startLine' => 365,
        'endLine' => 365,
        'startColumn' => 3,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Returns the cache tags that should be used to invalidate caches.
 *
 * This will not return additional cache tags added through addCacheTags().
 *
 * @return string[]
 *   Set of cache tags.
 *
 * @see \\Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface::addCacheTags()
 * @see \\Drupal\\Core\\Cache\\CacheableDependencyInterface::getCacheTags()
 */',
        'startLine' => 378,
        'endLine' => 378,
        'startColumn' => 3,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
            'startLine' => 389,
            'endLine' => 389,
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
 * Sets the original ID.
 *
 * @param int|string|null $id
 *   The new ID to set as original ID. If the entity supports renames, setting
 *   NULL will prevent an update from being considered a rename.
 *
 * @return $this
 */',
        'startLine' => 389,
        'endLine' => 389,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Gets an array of all property values.
 *
 * @return mixed[]
 *   An array of property values, keyed by property name.
 */',
        'startLine' => 397,
        'endLine' => 397,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'getTypedData' => 
      array (
        'name' => 'getTypedData',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a typed data object for this entity object.
 *
 * The returned typed data object wraps this entity and allows dealing with
 * entities based on the generic typed data API.
 *
 * @return \\Drupal\\Core\\TypedData\\ComplexDataInterface
 *   The typed data object for this entity.
 *
 * @see \\Drupal\\Core\\TypedData\\TypedDataInterface
 */',
        'startLine' => 410,
        'endLine' => 410,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'getConfigDependencyKey' => 
      array (
        'name' => 'getConfigDependencyKey',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the key that is used to store configuration dependencies.
 *
 * @return string
 *   The key to be used in configuration dependencies when storing
 *   dependencies on entities of this type.
 *
 * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::getConfigDependencyKey()
 */',
        'startLine' => 421,
        'endLine' => 421,
        'startColumn' => 3,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Gets the configuration dependency name.
 *
 * Configuration entities can depend on content and configuration entities.
 * They store an array of content and config dependency names in their
 * "dependencies" key.
 *
 * @return string
 *   The configuration dependency name.
 *
 * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
 */',
        'startLine' => 435,
        'endLine' => 435,
        'startColumn' => 3,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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
 * Gets the configuration target identifier for the entity.
 *
 * Used to supply the correct format for storing a reference targeting this
 * entity in configuration.
 *
 * @return string
 *   The configuration target identifier.
 */',
        'startLine' => 446,
        'endLine' => 446,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'getOriginal' => 
      array (
        'name' => 'getOriginal',
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
                  'name' => 'static',
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
 * Returns the original unchanged entity.
 *
 * If the entity being saved was not the default revision then the original
 * entity is that specific revision to allow for reliable comparisons.
 *
 * This is only available while an entity is being saved.
 *
 * @return static|null
 *   The original entity.
 */',
        'startLine' => 459,
        'endLine' => 459,
        'startColumn' => 3,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'aliasName' => NULL,
      ),
      'setOriginal' => 
      array (
        'name' => 'setOriginal',
        'parameters' => 
        array (
          'original' => 
          array (
            'name' => 'original',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 472,
            'endLine' => 472,
            'startColumn' => 31,
            'endColumn' => 56,
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
 * Sets the original unchanged entity.
 *
 * This method may be used as a performance optimization when unchanged entity
 * is already available.
 *
 * @param \\Drupal\\Core\\Entity\\EntityInterface|null $original
 *   The unchanged entity.
 *
 * @return $this
 */',
        'startLine' => 472,
        'endLine' => 472,
        'startColumn' => 3,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity',
        'declaringClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\EntityInterface',
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