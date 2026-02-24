/**
 * @file
 * EventHub theme — Interactions.
 */
(function (Drupal, once) {
  'use strict';

  /**
   * Smooth scroll pour les ancres internes.
   */
  Drupal.behaviors.eventhubSmoothScroll = {
    attach: function (context) {
      var links = once('eh-smooth', 'a[href^="#"]', context);
      links.forEach(function (link) {
        link.addEventListener('click', function (e) {
          var targetId = this.getAttribute('href');
          if (targetId.length <= 1) {
            return;
          }
          var target = document.querySelector(targetId);
          if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        });
      });
    },
  };

})(Drupal, once);
