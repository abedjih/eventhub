<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Form;

use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\eventhub_core\Entity\Event;
use Drupal\eventhub_core\Service\RegistrationManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Event delete confirmation form.
 */
class EventDeleteForm extends ConfirmFormBase {

  public function __construct(
    protected RegistrationManager $registrationManager,
  ) {}

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): static {
    return new static(
      $container->get(RegistrationManager::class),
    );
  }

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
  public function getQuestion(): string {
    $event = $this->getEvent();
    return (string) $this->t('Voulez-vous vraiment supprimer l\'événement « @name » ?', [
      '@name' => $event->getName(),
    ]);
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription(): string {
    return (string) $this->t('Cette action est irréversible. Toutes les inscriptions associées seront également supprimées.');
  }

  /**
   * {@inheritdoc}
   */
  public function getConfirmText(): string {
    return (string) $this->t('Supprimer');
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
      $this->t('L\'événement « @name » a été supprimé.', [
        '@name' => $name,
      ])
    );

    $form_state->setRedirect('eventhub.event_list');
  }

}
