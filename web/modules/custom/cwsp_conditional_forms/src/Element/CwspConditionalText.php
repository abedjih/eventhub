<?php

declare(strict_types=1);

namespace Drupal\cwsp_conditional_forms\Element;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element;
use Drupal\Core\Render\Element\FormElementBase;

/**
 * Provides a 'cwsp_conditional_text' render element.
 *
 * A simple text input used as a starting point for CWSP custom Webform
 * elements. Mirrors webform_example_element so it can be evolved without
 * surprises.
 *
 * @FormElement("cwsp_conditional_text")
 */
class CwspConditionalText extends FormElementBase {

  /**
   * {@inheritdoc}
   */
  public function getInfo(): array {
    $class = static::class;
    return [
      '#input' => TRUE,
      '#size' => 60,
      '#process' => [
        [$class, 'processCwspConditionalText'],
        [$class, 'processAjaxForm'],
      ],
      '#element_validate' => [
        [$class, 'validateCwspConditionalText'],
      ],
      '#pre_render' => [
        [$class, 'preRenderCwspConditionalText'],
      ],
      '#theme' => 'input__cwsp_conditional_text',
      '#theme_wrappers' => ['form_element'],
    ];
  }

  /**
   * Processes a 'cwsp_conditional_text' element.
   */
  public static function processCwspConditionalText(array &$element, FormStateInterface $form_state, array &$complete_form): array {
    return $element;
  }

  /**
   * Element validation handler.
   */
  public static function validateCwspConditionalText(array &$element, FormStateInterface $form_state, array &$complete_form): void {
    // Add custom validation logic here.
  }

  /**
   * Prepares the element for rendering.
   */
  public static function preRenderCwspConditionalText(array $element): array {
    $element['#attributes']['type'] = 'text';
    Element::setAttributes($element, ['id', 'name', 'value', 'size', 'maxlength', 'placeholder']);
    static::setAttributes($element, ['form-text', 'cwsp-conditional-text']);
    return $element;
  }

}
