<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Plugin\Validation\Constraint;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Validation\Attribute\Constraint;
use Symfony\Component\Validator\Constraint as SymfonyConstraint;

/**
 * Validates that a date is in the future.
 */
#[Constraint(
  id: 'FutureDate',
  label: new TranslatableMarkup('Future date'),
)]
class FutureDateConstraint extends SymfonyConstraint {

  /**
   * The error message.
   */
  public string $message = 'La date de l\'événement doit être dans le futur.';

}
