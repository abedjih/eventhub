<?php

declare(strict_types=1);

namespace Drupal\eventhub_registration\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Datetime\DateFormatterInterface;
use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\Url;
use Drupal\eventhub_core\Entity\Event;
use Drupal\eventhub_registration\Service\RegistrationManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Controller for registration pages.
 */
class RegistrationController extends ControllerBase {

  use AutowireTrait;

  public function __construct(
    private readonly RegistrationManager $registrationManager,
    private readonly DateFormatterInterface $dateFormatter,
  ) {}

  /**
   * Lists registrations for an event.
   */
  public function listForEvent(Event $event): array {
    $registrations = $this->registrationManager->getRegistrationsForEvent((int) $event->id());

    $rows = [];
    foreach ($registrations as $registration) {
      $rows[] = [
        $registration->participant_name,
        $registration->email,
        $registration->registration_status,
        $this->dateFormatter->format(
          (int) $registration->created,
          'short',
        ),
      ];
    }

    return [
      '#theme' => 'table',
      '#caption' => $this->t('Inscriptions pour « @name »', [
        '@name' => $event->label(),
      ]),
      '#header' => [
        $this->t('Nom'),
        $this->t('Email'),
        $this->t('Statut'),
        $this->t('Date'),
      ],
      '#rows' => $rows,
      '#empty' => $this->t('Aucune inscription pour cet événement.'),
      '#cache' => [
        'contexts' => ['user'],
        'tags' => ['event:' . $event->id()],
        'max-age' => 0,
      ],
    ];
  }

  /**
   * Cancels a registration (CSRF-protected route).
   */
  public function cancel(int $registration): RedirectResponse {
    $record = $this->registrationManager->loadRegistration($registration);

    if ($record === NULL) {
      throw new NotFoundHttpException();
    }

    $eventId = (int) $record->event_id;

    if ($this->registrationManager->cancelRegistration($registration)) {
      $this->messenger()->addStatus(
        $this->t("L'inscription de @name a été annulée.", [
          '@name' => $record->participant_name,
        ])
      );
    }
    else {
      $this->messenger()->addWarning(
        $this->t("Impossible d'annuler cette inscription.")
      );
    }

    $url = Url::fromRoute('entity.event.canonical', ['event' => $eventId]);
    return new RedirectResponse($url->toString());
  }

}
