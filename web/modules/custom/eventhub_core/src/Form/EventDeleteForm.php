<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Form;

use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Url;
use Drupal\eventhub_core\Entity\Event;
use Drupal\eventhub_registration\Service\RegistrationManager;

/**
 * Event delete confirmation form.
 */
final class EventDeleteForm extends ConfirmFormBase {

  use AutowireTrait;

  public function __construct(
    protected RegistrationManager $registrationManager,
  ) {}

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'eventhub_event_delete_form';
  }

  /**
   * Gets the event from the route.
   */
  private function getEvent(): Event {
    return $this->getRouteMatch()->getParameter('event');
  }

  /**
   * {@inheritdoc}
   */
  public function getQuestion(): TranslatableMarkup {
    $event = $this->getEvent();
    return $this->t("Voulez-vous vraiment supprimer l'événement « @name » ?", [
      '@name' => $event->getName(),
    ]);
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription(): TranslatableMarkup {
    return $this->t('Cette action est irréversible. Toutes les inscriptions associées seront également supprimées.');
  }

  /**
   * {@inheritdoc}
   */
  public function getConfirmText(): TranslatableMarkup {
    return $this->t('Supprimer');
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelUrl(): Url {
    $event = $this->getEvent();
    return Url::fromRoute('eventhub.event_view', ['event' => $event->id()]);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $event = $this->getEvent();
    $name = $event->getName();

    // Delete registrations first.
    $this->registrationManager->deleteRegistrationsForEvent((int) $event->id());

    // Delete the event.
    $event->delete();

    $this->messenger()->addStatus(
      $this->t("L'événement « @name » a été supprimé.", [
        '@name' => $name,
      ])
    );

    $form_state->setRedirect('eventhub.event_list');
  }

}
