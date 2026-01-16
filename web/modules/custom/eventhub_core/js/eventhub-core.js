/**
 * @file
 * Collapse functionality for EventHub events.
 */

(function (Drupal, once) {
  'use strict';

  /**
   * Behavior for collapsing eventhub-events elements.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.eventhubCollapse = {
    attach: function (context, settings) {
      // Sélectionne les éléments avec la classe eventhub-events.
      const elements = once('eventhub-collapse', '.eventhub-events', context);

      elements.forEach(function (element) {
        // Crée le bouton toggle.
        const toggleButton = document.createElement('button');
        toggleButton.type = 'button';
        toggleButton.className = 'eventhub-collapse-toggle';
        toggleButton.setAttribute('aria-expanded', 'true');
        toggleButton.setAttribute('aria-controls', element.id || 'eventhub-content');
        toggleButton.innerHTML = '<span class="eventhub-collapse-icon"></span>' + Drupal.t('Toggle events');

        // Insère le bouton avant l'élément.
        element.parentNode.insertBefore(toggleButton, element);

        // Ajoute la classe pour le state initial.
        element.classList.add('eventhub-events--expanded');

        // Gère le clic sur le bouton.
        toggleButton.addEventListener('click', function () {
          const isExpanded = element.classList.contains('eventhub-events--expanded');

          if (isExpanded) {
            element.classList.remove('eventhub-events--expanded');
            element.classList.add('eventhub-events--collapsed');
            toggleButton.setAttribute('aria-expanded', 'false');
          }
          else {
            element.classList.remove('eventhub-events--collapsed');
            element.classList.add('eventhub-events--expanded');
            toggleButton.setAttribute('aria-expanded', 'true');
          }
        });
      });
    }
  };

})(Drupal, once);