<?php

declare(strict_types=1);

namespace Drupal\eventhub_entity_example;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining an eventexample entity type.
 */
interface EventExampleInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
