<?php

declare(strict_types=1);

namespace Drupal\eventhub_import\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configuration form for EventHub settings.
 */
final class EventHubSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames(): array {
    return ['eventhub_import.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'eventhub_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $config = $this->config('eventhub_import.settings');

    $form['api_endpoint'] = [
      '#type' => 'url',
      '#title' => $this->t('Endpoint API géographique'),
      '#description' => $this->t("URL de base de l'API pour l'import des données de communes."),
      '#default_value' => $config->get('api_endpoint'),
      '#required' => TRUE,
    ];

    $form['import_batch_size'] = [
      '#type' => 'number',
      '#title' => $this->t("Taille de batch d'import"),
      '#description' => $this->t("Nombre de communes à importer par exécution de la queue."),
      '#default_value' => $config->get('import_batch_size'),
      '#min' => 10,
      '#max' => 500,
      '#required' => TRUE,
    ];

    $form['notification_email'] = [
      '#type' => 'email',
      '#title' => $this->t('Email de notification'),
      '#description' => $this->t("Adresse email pour recevoir les notifications d'import et d'inscriptions."),
      '#default_value' => $config->get('notification_email'),
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $this->config('eventhub_import.settings')
      ->set('api_endpoint', $form_state->getValue('api_endpoint'))
      ->set('import_batch_size', (int) $form_state->getValue('import_batch_size'))
      ->set('notification_email', $form_state->getValue('notification_email'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
