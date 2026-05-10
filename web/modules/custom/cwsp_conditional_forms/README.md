# CWSP Conditional Forms

Custom Webform elements for the CWSP project.

## Requirements

- Drupal 10.3+ or 11
- [Webform](https://www.drupal.org/project/webform) (`drupal/webform`)

## Installation

```bash
drush en cwsp_conditional_forms
```

The module lives at `web/modules/custom/cwsp_conditional_forms`.

## What it ships

| Element ID                | Render element                                   | Webform plugin                                                    |
|---------------------------|--------------------------------------------------|-------------------------------------------------------------------|
| `cwsp_conditional_text`   | `src/Element/CwspConditionalText.php`            | `src/Plugin/WebformElement/CwspConditionalText.php`               |

The shipped element is a thin text-input skeleton — use it as the template for
new CWSP elements.

## Adding a new element

1. Create the render element under `src/Element/MyElement.php` (extends
   `FormElementBase`, declared with `@FormElement("cwsp_my_element")`).
2. Create the Webform wrapper under `src/Plugin/WebformElement/MyElement.php`
   (extends `WebformElementBase`, declared with
   `@WebformElement(id = "cwsp_my_element", …)`).
3. Clear caches: `drush cr`.

The new element appears in the Webform UI under the **CWSP** category.
