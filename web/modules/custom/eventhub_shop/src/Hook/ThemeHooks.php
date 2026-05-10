<?php

declare(strict_types=1);

namespace Drupal\eventhub_shop\Hook;

use Drupal\Core\Hook\Attribute\Hook;

/**
 * Theme hooks for the EventHub Shop module.
 */
final class ThemeHooks {

  /**
   * Implements hook_page_attachments().
   */
  #[Hook('page_attachments')]
  public function pageAttachments(array &$attachments): void {
    $route = \Drupal::routeMatch()->getRouteName();

    // Attach shop CSS on all shop-related pages.
    $shop_routes = [
      'eventhub_shop.catalog',
      'eventhub_shop.category',
      'view.shop_catalog.page_1',
      'view.shop_catalog.page_chiens',
      'view.shop_catalog.page_chats',
    ];

    if (in_array($route, $shop_routes, TRUE)) {
      $attachments['#attached']['library'][] = 'eventhub_shop/shop';
    }

    // Also attach on commerce product pages.
    if ($route === 'entity.commerce_product.canonical') {
      $attachments['#attached']['library'][] = 'eventhub_shop/shop';
    }
  }

}
