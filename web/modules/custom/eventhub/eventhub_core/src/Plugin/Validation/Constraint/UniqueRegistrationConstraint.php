<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Plugin\Validation\Constraint;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Validation\Attribute\Constraint;
use Symfony\Component\Validator\Constraint as SymfonyConstraint;

/**
 * Validates that an email is unique per event.
 */
#[Constraint(
  id: 'UniqueRegistration',
  label: new TranslatableMarkup('Unique registration per event'),
)]
class UniqueRegistrationConstraint extends SymfonyConstraint {

  /**
   * The error message.
   */
  public string $message = 'L\'adresse email %value est déjà inscrite à cet événement.';

}
