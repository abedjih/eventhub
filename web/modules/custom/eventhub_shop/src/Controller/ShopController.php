<?php

declare(strict_types=1);

namespace Drupal\eventhub_shop\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Controller for the pet shop pages.
 */
final class ShopController extends ControllerBase {

  /**
   * Main catalog page with category navigation.
   */
  public function catalog(): array {
    $build = [];

    // Hero section.
    $build['hero'] = [
      '#type' => 'container',
      '#attributes' => ['class' => ['shop-hero']],
      'title' => [
        '#markup' => '<h1>Boutique Animaux</h1><p>Tout pour le bonheur de vos compagnons !</p>',
      ],
    ];

    // Category cards.
    $build['categories'] = [
      '#type' => 'container',
      '#attributes' => ['class' => ['shop-categories']],
    ];

    $categories = [
      'chiens' => [
        'title' => 'Chiens',
        'description' => 'Nourriture, jouets, accessoires et plus pour votre chien',
        'icon' => '&#128054;',
        'route' => 'view.shop_catalog.page_chiens',
      ],
      'chats' => [
        'title' => 'Chats',
        'description' => 'Nourriture, jouets, accessoires et plus pour votre chat',
        'icon' => '&#128049;',
        'route' => 'view.shop_catalog.page_chats',
      ],
    ];

    foreach ($categories as $key => $category) {
      $build['categories'][$key] = [
        '#type' => 'container',
        '#attributes' => ['class' => ['shop-category-card']],
        'icon' => [
          '#markup' => '<div class="category-icon">' . $category['icon'] . '</div>',
        ],
        'title' => [
          '#markup' => '<h2>' . $category['title'] . '</h2>',
        ],
        'description' => [
          '#markup' => '<p>' . $category['description'] . '</p>',
        ],
        'link' => [
          '#type' => 'link',
          '#title' => 'Voir les produits',
          '#url' => Url::fromRoute($category['route']),
          '#attributes' => ['class' => ['btn', 'btn-primary']],
        ],
      ];
    }

    // Product types section - use embedded view instead of entity loading.
    $build['product_types'] = [
      '#type' => 'container',
      '#attributes' => ['class' => ['shop-product-types']],
      'title' => [
        '#markup' => '<h2>Nos rayons</h2>',
      ],
    ];

    // Static product type links to avoid entity loading bubbling issues.
    $rayons = [
      'Nourriture',
      'Jouets',
      'Accessoires',
      'Hygiène & Soins',
      'Couchage',
      'Colliers & Laisses',
      'Gamelles & Distributeurs',
      'Transport',
    ];

    $items = [];
    foreach ($rayons as $rayon) {
      $items[] = [
        '#type' => 'link',
        '#title' => $rayon,
        '#url' => Url::fromRoute('view.shop_catalog.page_1'),
      ];
    }

    $build['product_types']['list'] = [
      '#theme' => 'item_list',
      '#items' => $items,
      '#attributes' => ['class' => ['product-type-list']],
    ];

    // All products link.
    $build['all_products'] = [
      '#type' => 'container',
      '#attributes' => ['class' => ['shop-all-products']],
      'link' => [
        '#type' => 'link',
        '#title' => 'Voir tous les produits',
        '#url' => Url::fromRoute('view.shop_catalog.page_1'),
        '#attributes' => ['class' => ['btn', 'btn-outline-primary', 'btn-lg']],
      ],
    ];

    $build['#attached']['library'][] = 'eventhub_shop/shop';

    return $build;
  }

  /**
   * Category page - redirects to the appropriate view.
   */
  public function category(string $category): RedirectResponse {
    $route = match ($category) {
      'chiens' => 'view.shop_catalog.page_chiens',
      'chats' => 'view.shop_catalog.page_chats',
      default => 'view.shop_catalog.page_1',
    };

    return $this->redirect($route);
  }

}
