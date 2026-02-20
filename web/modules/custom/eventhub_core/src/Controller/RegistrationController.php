<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Datetime\DateFormatterInterface;
use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\Url;
use Drupal\eventhub_core\Entity\Event;
use Drupal\eventhub_core\Entity\Registration;
use Drupal\eventhub_core\Service\RegistrationManager;
use Symfony\Component\HttpFoundation\RedirectResponse;

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
        $registration->getParticipantName(),
        $registration->getEmail(),
        $registration->getRegistrationStatus(),
        $this->dateFormatter->format(
          (int) $registration->get('created')->value,
          'short',
        ),
      ];
    }

    return [
      '#theme' => 'table',
      '#caption' => $this->t('Inscriptions pour « @name »', [
        '@name' => $event->getName(),
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
  public function cancel(Registration $registration): RedirectResponse {
    $eventId = $registration->getEventId();

    if ($this->registrationManager->cancelRegistration((int) $registration->id())) {
      $this->messenger()->addStatus(
        $this->t("L'inscription de @name a été annulée.", [
          '@name' => $registration->getParticipantName(),
        ])
      );
    }
    else {
      $this->messenger()->addWarning(
        $this->t("Impossible d'annuler cette inscription.")
      );
    }

    $url = Url::fromRoute('eventhub.event_view', ['event' => $eventId]);
    return new RedirectResponse($url->toString());
  }

}
