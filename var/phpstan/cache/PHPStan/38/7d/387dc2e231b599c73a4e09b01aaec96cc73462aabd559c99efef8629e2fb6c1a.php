<?php declare(strict_types = 1);

// osfsl-/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Query/QueryInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Drupal\Core\Entity\Query\QueryInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b9fc804f249463c6a0eaeb4a324088434e5082900ff9b3c2df2eb38d74708d44-8.3.29-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'filename' => '/home/ben/projects/training/eventhub/vendor/composer/../../web/core/lib/Drupal/Core/Entity/Query/QueryInterface.php',
      ),
    ),
    'namespace' => 'Drupal\\Core\\Entity\\Query',
    'name' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
    'shortName' => 'QueryInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface for entity queries.
 *
 * Never instantiate classes implementing this interface directly. Always use
 * the QueryFactory class.
 *
 * @ingroup database
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 316,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
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
 * Gets the ID of the entity type for this query.
 *
 * @return string
 *   The entity type ID.
 */',
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'condition' => 
      array (
        'name' => 'condition',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 115,
                'endLine' => 115,
                'startTokenPos' => 52,
                'startFilePos' => 5021,
                'endTokenPos' => 52,
                'endFilePos' => 5024,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 37,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 115,
                'endLine' => 115,
                'startTokenPos' => 59,
                'startFilePos' => 5039,
                'endTokenPos' => 59,
                'endFilePos' => 5042,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 52,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 115,
                'endLine' => 115,
                'startTokenPos' => 66,
                'startFilePos' => 5057,
                'endTokenPos' => 66,
                'endFilePos' => 5060,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 70,
            'endColumn' => 85,
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
 * Add a condition to the query or a condition group.
 *
 * For example, to find all entities containing both the Turkish \'merhaba\'
 * and the Polish \'siema\' within a \'greetings\' text field:
 * @code
 *   $entity_ids = \\Drupal::entityQuery($entity_type)
 *     ->accessCheck(FALSE)
 *     ->condition(\'greetings\', \'merhaba\', \'=\', \'tr\')
 *     ->condition(\'greetings.value\', \'siema\', \'=\', \'pl\')
 *     ->execute();
 * @endcode
 *
 * @param string|\\Drupal\\Core\\Entity\\Query\\ConditionInterface $field
 *   Name of the field being queried or an instance of ConditionInterface.
 *   In the case of the name, it must contain a field name, optionally
 *   followed by a column name. The column can be the reference property,
 *   usually "entity", for reference fields and that can be followed
 *   similarly by a field name and so on. Additionally, the target entity type
 *   can be specified by appending the ":target_entity_type_id" to "entity".
 *   Some examples:
 *   - nid
 *   - tags.value
 *   - tags
 *   - tags.entity.name
 *   - tags.entity:taxonomy_term.name
 *   - uid.entity.name
 *   - uid.entity:user.name
 *   "tags" "is the same as "tags.value" as value is the default column.
 *   If two or more conditions have the same field names they apply to the
 *   same delta within that field. In order to limit the condition to a
 *   specific item a numeric delta should be added between the field name and
 *   the column name.
 *   @code
 *   ->condition(\'tags.5.value\', \'news\')
 *   @endcode
 *   This will require condition to be satisfied on a specific delta of the
 *   field. The condition above will require the 6th value of the field to
 *   match the provided value. Further, it\'s possible to create a condition on
 *   the delta itself by using \'%delta\'. For example,
 *   @code
 *   ->condition(\'tags.%delta\', 5)
 *   @endcode
 *   will find only entities which have at least six tags. Finally, the
 *   condition on the delta itself accompanied with a condition on the value
 *   will require the value to appear in the specific delta range. For
 *   example,
 *   @code
 *   ->condition(\'tags.%delta\', 0, \'>\'))
 *   ->condition(\'tags.%delta.value\', \'news\'))
 *   @endcode
 *   will only find the "news" tag if it is not the first value. It should be
 *   noted that conditions on specific deltas and delta ranges are only
 *   supported when querying content entities.
 * @param string|int|bool|array|null $value
 *   (optional) The value for $field. In most cases, this is a scalar and it\'s
 *   treated as case-insensitive. For more complex operators, it is an array.
 *   The meaning of each element in the array is dependent on $operator.
 *   Defaults to NULL, for most operators (except: \'IS NULL\', \'IS NOT NULL\')
 *   it always makes the condition false.
 * @param string|null $operator
 *   (optional) The comparison operator. Possible values:
 *   - \'=\', \'<>\', \'>\', \'>=\', \'<\', \'<=\', \'STARTS_WITH\', \'CONTAINS\',
 *     \'ENDS_WITH\': These operators expect $value to be a literal of the
 *     same type as the column.
 *   - \'IN\', \'NOT IN\': These operators expect $value to be an array of
 *     literals of the same type as the column.
 *   - \'IS NULL\', \'IS NOT NULL\': These operators ignore $value, for that
 *     reason it is recommended to use a $value of NULL for clarity.
 *   - \'BETWEEN\', \'NOT BETWEEN\': These operators expect $value to be an array
 *     of two literals of the same type as the column.
 *   If NULL, defaults to the \'=\' operator.
 * @param string|null $langcode
 *   (optional) The language code allows filtering results by specific
 *   language. If two or more conditions omit the langcode within
 *   one condition group then they are presumed to apply to the same
 *   translation. If within one condition group one condition has a langcode
 *   and another does not they are not presumed to apply to the same
 *   translation. If omitted (NULL), any translation satisfies the condition.
 *
 * @return $this
 *
 * @see \\Drupal\\Core\\Entity\\Query\\QueryInterface::andConditionGroup()
 * @see \\Drupal\\Core\\Entity\\Query\\QueryInterface::orConditionGroup()
 * @see \\Drupal\\Core\\Entity\\Query\\ConditionInterface
 * @see \\Drupal\\Core\\Entity\\Query\\QueryInterface::exists()
 * @see \\Drupal\\Core\\Entity\\Query\\QueryInterface::notExists()
 */',
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 3,
        'endColumn' => 87,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'exists' => 
      array (
        'name' => 'exists',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 128,
                'endLine' => 128,
                'startTokenPos' => 85,
                'startFilePos' => 5432,
                'endTokenPos' => 85,
                'endFilePos' => 5435,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 34,
            'endColumn' => 49,
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
 * Queries for a non-empty value on a field.
 *
 * @param string $field
 *   Name of a field.
 * @param string|null $langcode
 *   (optional) The language code allows filtering results by specific
 *   language. If omitted (NULL), any translation satisfies the condition.
 *
 * @return $this
 */',
        'startLine' => 128,
        'endLine' => 128,
        'startColumn' => 3,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'notExists' => 
      array (
        'name' => 'notExists',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 141,
                'endLine' => 141,
                'startTokenPos' => 104,
                'startFilePos' => 5796,
                'endTokenPos' => 104,
                'endFilePos' => 5799,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 37,
            'endColumn' => 52,
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
 * Queries for an empty field.
 *
 * @param string $field
 *   Name of a field.
 * @param string|null $langcode
 *   (optional) The language code allows filtering results by specific
 *   language. If omitted (NULL), any translation satisfies the condition.
 *
 * @return $this
 */',
        'startLine' => 141,
        'endLine' => 141,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'pager' => 
      array (
        'name' => 'pager',
        'parameters' => 
        array (
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => '10',
              'attributes' => 
              array (
                'startLine' => 156,
                'endLine' => 156,
                'startTokenPos' => 120,
                'startFilePos' => 6273,
                'endTokenPos' => 120,
                'endFilePos' => 6274,
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
            'startColumn' => 25,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'element' => 
          array (
            'name' => 'element',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 156,
                'endLine' => 156,
                'startTokenPos' => 127,
                'startFilePos' => 6288,
                'endTokenPos' => 127,
                'endFilePos' => 6291,
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
            'startColumn' => 38,
            'endColumn' => 52,
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
 * Enables a pager for the query.
 *
 * @param int $limit
 *   (optional) An integer specifying the number of elements per page. If
 *   passed 0, the pager is disabled.
 * @param int|null $element
 *   (optional) An integer to distinguish between multiple pagers on one page.
 *   If not provided, one is automatically calculated by incrementing the
 *   next pager element value.
 *
 * @return $this
 */',
        'startLine' => 156,
        'endLine' => 156,
        'startColumn' => 3,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'range' => 
      array (
        'name' => 'range',
        'parameters' => 
        array (
          'start' => 
          array (
            'name' => 'start',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 172,
                'endLine' => 172,
                'startTokenPos' => 143,
                'startFilePos' => 6831,
                'endTokenPos' => 143,
                'endFilePos' => 6834,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 172,
            'endLine' => 172,
            'startColumn' => 25,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 172,
                'endLine' => 172,
                'startTokenPos' => 150,
                'startFilePos' => 6847,
                'endTokenPos' => 150,
                'endFilePos' => 6850,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 172,
            'endLine' => 172,
            'startColumn' => 40,
            'endColumn' => 53,
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
 * Defines the range of the query.
 *
 * @param int|null $start
 *   (optional) The first record from the result set to return. If NULL,
 *   removes any range directives that are set.
 * @param int|null $length
 *   (optional) The maximum number of rows to return. If $start and $length
 *   are NULL, then a complete result set will be generated. If $start is
 *   not NULL and $length is NULL, then an empty result set will be
 *   generated.
 *
 * @return $this
 */',
        'startLine' => 172,
        'endLine' => 172,
        'startColumn' => 3,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'sort' => 
      array (
        'name' => 'sort',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 24,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'direction' => 
          array (
            'name' => 'direction',
            'default' => 
            array (
              'code' => '\'ASC\'',
              'attributes' => 
              array (
                'startLine' => 191,
                'endLine' => 191,
                'startTokenPos' => 169,
                'startFilePos' => 7460,
                'endTokenPos' => 169,
                'endFilePos' => 7464,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 32,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'langcode' => 
          array (
            'name' => 'langcode',
            'default' => 
            array (
              'code' => 'NULL',
              'attributes' => 
              array (
                'startLine' => 191,
                'endLine' => 191,
                'startTokenPos' => 176,
                'startFilePos' => 7479,
                'endTokenPos' => 176,
                'endFilePos' => 7482,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 52,
            'endColumn' => 67,
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
 * Sorts the result set by a given field.
 *
 * @param string $field
 *   Name of a field.
 * @param string $direction
 *   (optional) The direction to sort. Allowed values are "ASC" and "DESC".
 *   Defaults to "ASC".
 * @param string|null $langcode
 *   (optional) The language code allows filtering results by specific
 *   language. If omitted (NULL), any translation satisfies the condition.
 *
 * @return $this
 *
 * @todo standardize $direction options in
 * https://www.drupal.org/project/drupal/issues/3079258
 */',
        'startLine' => 191,
        'endLine' => 191,
        'startColumn' => 3,
        'endColumn' => 69,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Makes this a count query.
 *
 * For count queries, execute() returns the number entities found.
 *
 * @return $this
 */',
        'startLine' => 200,
        'endLine' => 200,
        'startColumn' => 3,
        'endColumn' => 26,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'tableSort' => 
      array (
        'name' => 'tableSort',
        'parameters' => 
        array (
          'headers' => 
          array (
            'name' => 'headers',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 213,
            'endLine' => 213,
            'startColumn' => 29,
            'endColumn' => 37,
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
 * Enables sortable tables for this query.
 *
 * @param array $headers
 *   An array of headers of the same structure as described in
 *   \\Drupal\\Core\\Theme\\ThemePreprocess::preprocessTable(). Use a \'specifier\'
 *   in place of a \'field\' to specify what to sort on. This can be an entity
 *   or a field as described in condition().
 *
 * @return $this
 */',
        'startLine' => 213,
        'endLine' => 213,
        'startColumn' => 3,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'accessCheck' => 
      array (
        'name' => 'accessCheck',
        'parameters' => 
        array (
          'access_check' => 
          array (
            'name' => 'access_check',
            'default' => 
            array (
              'code' => 'TRUE',
              'attributes' => 
              array (
                'startLine' => 223,
                'endLine' => 223,
                'startTokenPos' => 216,
                'startFilePos' => 8334,
                'endTokenPos' => 216,
                'endFilePos' => 8337,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 223,
            'endLine' => 223,
            'startColumn' => 31,
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
 * Enables or disables access checking for this query.
 *
 * @param bool $access_check
 *   (optional) Whether access check is requested or not. Defaults to TRUE.
 *
 * @return $this
 */',
        'startLine' => 223,
        'endLine' => 223,
        'startColumn' => 3,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'execute' => 
      array (
        'name' => 'execute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the query.
 *
 * @return int|array
 *   Returns an integer for count queries or an array of ids. The values of
 *   the array are always entity ids. The keys will be revision ids if the
 *   entity supports revision and entity ids if not.
 */',
        'startLine' => 233,
        'endLine' => 233,
        'startColumn' => 3,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'andConditionGroup' => 
      array (
        'name' => 'andConditionGroup',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new group of conditions ANDed together.
 *
 * For example, consider a drawing entity type with a \'figures\' multi-value
 * field containing \'shape\' and \'color\' columns. To find all drawings
 * containing both a red triangle and a blue circle:
 * @code
 *   $query = \\Drupal::entityQuery(\'drawing\')->accessCheck(FALSE);
 *   $group = $query->andConditionGroup()
 *     ->condition(\'figures.color\', \'red\')
 *     ->condition(\'figures.shape\', \'triangle\');
 *   $query->condition($group);
 *   $group = $query->andConditionGroup()
 *     ->condition(\'figures.color\', \'blue\')
 *     ->condition(\'figures.shape\', \'circle\');
 *   $query->condition($group);
 *   $entity_ids = $query->execute();
 * @endcode
 *
 * @return \\Drupal\\Core\\Entity\\Query\\ConditionInterface
 *   A condition object whose conditions will be combined with AND.
 */',
        'startLine' => 257,
        'endLine' => 257,
        'startColumn' => 3,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'orConditionGroup' => 
      array (
        'name' => 'orConditionGroup',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new group of conditions ORed together.
 *
 * For example, consider a map entity with an \'attributes\' field
 * containing \'building_type\' and \'color\' columns. To find all green and
 * red sheds:
 * @code
 *   $query = \\Drupal::entityQuery(\'map\')->accessCheck(FALSE);
 *   $group = $query->orConditionGroup()
 *     ->condition(\'attributes.color\', \'red\')
 *     ->condition(\'attributes.color\', \'green\');
 *   $entity_ids = $query
 *     ->condition(\'attributes.building_type\', \'shed\')
 *     ->condition($group)
 *     ->execute();
 * @endcode
 * Note that this particular example can be simplified:
 * @code
 *   $entity_ids = $query
 *     ->condition(\'attributes.color\', [\'red\', \'green\'])
 *     ->condition(\'attributes.building_type\', \'shed\')
 *     ->execute();
 * @endcode
 *
 * @return \\Drupal\\Core\\Entity\\Query\\ConditionInterface
 *   A condition object whose conditions will be combined with OR.
 */',
        'startLine' => 286,
        'endLine' => 286,
        'startColumn' => 3,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'currentRevision' => 
      array (
        'name' => 'currentRevision',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Limits the query to only default revisions.
 *
 * See the @link entity_api Entity API topic @endlink for information about
 * the current revision.
 *
 * @return $this
 */',
        'startLine' => 296,
        'endLine' => 296,
        'startColumn' => 3,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'latestRevision' => 
      array (
        'name' => 'latestRevision',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Queries the latest revision.
 *
 * The latest revision is the most recent revision of an entity. This will be
 * either the default revision, or a pending revision if one exists and it is
 * newer than the default.
 *
 * @return $this
 */',
        'startLine' => 307,
        'endLine' => 307,
        'startColumn' => 3,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'aliasName' => NULL,
      ),
      'allRevisions' => 
      array (
        'name' => 'allRevisions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Queries all the revisions.
 *
 * @return $this
 */',
        'startLine' => 314,
        'endLine' => 314,
        'startColumn' => 3,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Drupal\\Core\\Entity\\Query',
        'declaringClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'implementingClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
        'currentClassName' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
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