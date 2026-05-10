<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Hook;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Hook\Attribute\Hook;

/**
 * Form hooks for EventHub.
 */
class FormHooks {

  /**
   * Adds "Enable email collection" checkbox to article node form.
   */
  #[Hook('form_node_article_form_alter')]
  public function articleFormAlter(array &$form, FormStateInterface $form_state): void {
    $this->addEmailCollectionCheckbox($form);
  }

  /**
   * Adds "Enable email collection" checkbox to article node edit form.
   */
  #[Hook('form_node_article_edit_form_alter')]
  public function articleEditFormAlter(array &$form, FormStateInterface $form_state): void {
    $this->addEmailCollectionCheckbox($form);
  }

  /**
   * Adds the email collection checkbox to the advanced section.
   */
  private function addEmailCollectionCheckbox(array &$form): void {
    $form['email_collection_settings'] = [
      '#type' => 'details',
      '#title' => 'Email collection',
      '#group' => 'advanced',
      '#weight' => 100,
    ];

    $form['email_collection_settings']['enable_email_collection'] = [
      '#type' => 'checkbox',
      '#title' => 'Enable email collection',
      '#default_value' => FALSE,
    ];
  }

}
