<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Plugin\Validation\Constraint;

use Drupal\Core\Datetime\DrupalDateTime;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the FutureDate constraint.
 */
class FutureDateConstraintValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate(mixed $value, Constraint $constraint): void {
    if (!isset($value) || $value === '') {
      return;
    }

    /** @var \Drupal\eventhub_core\Plugin\Validation\Constraint\FutureDateConstraint $constraint */
    $dateValue = $value;

    // Handle field item list.
    if (is_object($value) && method_exists($value, 'getValue')) {
      $values = $value->getValue();
      if (empty($values) || empty($values[0]['value'])) {
        return;
      }
      $dateValue = $values[0]['value'];
    }

    if (is_string($dateValue)) {
      try {
        $eventDate = new DrupalDateTime($dateValue, 'UTC');
        $now = new DrupalDateTime('now', 'UTC');

        if ($eventDate <= $now) {
          $this->context->addViolation($constraint->message);
        }
      }
      catch (\Exception $e) {
        // Invalid date format, let other validators handle it.
      }
    }
  }

}
