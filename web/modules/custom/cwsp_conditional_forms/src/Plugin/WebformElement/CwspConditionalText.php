<?php

declare(strict_types=1);

namespace Drupal\cwsp_conditional_forms\Plugin\WebformElement;

use Drupal\Core\Form\FormStateInterface;
use Drupal\webform\Plugin\WebformElementBase;
use Drupal\webform\WebformSubmissionInterface;

/**
 * Provides a 'cwsp_conditional_text' Webform element.
 *
 * @WebformElement(
 *   id = "cwsp_conditional_text",
 *   label = @Translation("CWSP conditional text"),
 *   description = @Translation("A text field provided by the CWSP Conditional Forms module."),
 *   category = @Translation("CWSP"),
 * )
 *
 * @see \Drupal\cwsp_conditional_forms\Element\CwspConditionalText
 */
class CwspConditionalText extends WebformElementBase {

  /**
   * {@inheritdoc}
   */
  protected function defineDefaultProperties(): array {
    return [
      'multiple' => '',
      'size' => '',
      'minlength' => '',
      'maxlength' => '',
      'placeholder' => '',
      'cwsp_key' => '',
    ] + parent::defineDefaultProperties();
  }

  /**
   * {@inheritdoc}
   */
  public function prepare(array &$element, ?WebformSubmissionInterface $webform_submission = NULL): void {
    parent::prepare($element, $webform_submission);

    // Map the chosen predefined key to the HTML autocomplete attribute so the
    // browser can suggest the right value at submission time.
    if (!empty($element['#cwsp_key'])) {
      $element['#attributes']['autocomplete'] = $element['#cwsp_key'];
      $element['#attributes']['data-cwsp-key'] = $element['#cwsp_key'];
    }
  }

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state): array {
    $form = parent::form($form, $form_state);

    $form['cwsp'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('CWSP settings'),
    ];
    $form['cwsp']['cwsp_key'] = [
      '#type' => 'select',
      '#title' => $this->t('Predefined key'),
      '#description' => $this->t('Tags this field with a semantic role. The value is also exposed as the HTML <code>autocomplete</code> attribute.'),
      '#options' => $this->getCwspKeyOptions(),
      '#empty_option' => $this->t('- None -'),
    ];

    return $form;
  }

  /**
   * Returns the predefined keys available for this element.
   *
   * Values are HTML autocomplete tokens (see the WHATWG HTML spec) so the
   * browser can autofill them. Add or remove entries to fit project needs.
   *
   * @return array<string, \Drupal\Core\StringTranslation\TranslatableMarkup>
   *   Keyed by autocomplete token, valued by the human-readable label.
   */
  protected function getCwspKeyOptions(): array {
    return [
      'given-name' => $this->t('Prénom'),
      'family-name' => $this->t('Nom'),
      'name' => $this->t('Nom complet'),
      'email' => $this->t('Email'),
      'tel' => $this->t('Téléphone'),
      'organization' => $this->t('Organisation'),
      'street-address' => $this->t('Adresse'),
      'postal-code' => $this->t('Code postal'),
      'address-level2' => $this->t('Ville'),
      'country-name' => $this->t('Pays'),
      'bday' => $this->t('Date de naissance'),
    ];
  }

}
