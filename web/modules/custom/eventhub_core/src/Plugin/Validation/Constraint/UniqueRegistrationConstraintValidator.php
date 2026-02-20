<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Plugin\Validation\Constraint;

use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\eventhub_core\Entity\Registration;
use Drupal\eventhub_core\Service\RegistrationManager;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the UniqueRegistration constraint.
 */
class UniqueRegistrationConstraintValidator extends ConstraintValidator implements ContainerInjectionInterface {

  use AutowireTrait;

  public function __construct(
    private readonly RegistrationManager $registrationManager,
  ) {}

  /**
   * {@inheritdoc}
   */
  public function validate(mixed $value, Constraint $constraint): void {
    if (!isset($value) || $value === '') {
      return;
    }

    /** @var \Drupal\eventhub_core\Plugin\Validation\Constraint\UniqueRegistrationConstraint $constraint */
    $root = $this->context->getRoot();

    // Get the entity from the typed data tree.
    $entity = NULL;
    if (method_exists($root, 'getEntity')) {
      $entity = $root->getEntity();
    }

    if (!$entity instanceof Registration) {
      return;
    }

    $eventId = $entity->getEventId();
    if ($eventId <= 0) {
      return;
    }

    // Get the email value.
    $email = $value;
    if (is_object($value) && method_exists($value, 'getValue')) {
      $values = $value->getValue();
      $email = $values[0]['value'] ?? '';
    }

    if (empty($email)) {
      return;
    }

    $excludeId = $entity->isNew() ? NULL : (int) $entity->id();

    if ($this->registrationManager->isAlreadyRegistered($eventId, (string) $email, $excludeId)) {
      $this->context->addViolation($constraint->message, ['%value' => $email]);
    }
  }

}
