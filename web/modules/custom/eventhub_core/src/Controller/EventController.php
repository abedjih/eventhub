<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\Url;
use Drupal\eventhub_core\Entity\Event;
use Drupal\eventhub_core\Service\EventManager;
use Drupal\eventhub_core\Service\GeoDataRepository;
use Drupal\eventhub_core\Service\RegistrationManager;

/**
 * Controller for event pages.
 */
class EventController extends ControllerBase {

  use AutowireTrait;

  public function __construct(
    private readonly EventManager $eventManager,
    private readonly RegistrationManager $registrationManager,
    private readonly GeoDataRepository $geoDataRepository,
  ) {}

  /**
   * Lists upcoming events.
   */
  public function list(): array {
    $events = $this->eventManager->getUpcomingEvents(20);

    $rows = [];
    foreach ($events as $event) {
      $count = $this->registrationManager->getRegistrationCount((int) $event->id());

      $actions = [];
      if ($event->access('update')) {
        $actions[] = [
          '#type' => 'link',
          '#title' => $this->t('Modifier'),
          '#url' => Url::fromRoute('eventhub.event_edit', ['event' => $event->id()]),
          '#attributes' => ['class' => ['btn', 'btn-sm', 'btn-outline-primary', 'me-1']],
        ];
      }
      if ($event->access('delete')) {
        $actions[] = [
          '#type' => 'link',
          '#title' => $this->t('Supprimer'),
          '#url' => Url::fromRoute('eventhub.event_delete', ['event' => $event->id()]),
          '#attributes' => ['class' => ['btn', 'btn-sm', 'btn-outline-danger']],
        ];
      }

      $rows[] = [
        [
          'data' => [
            '#type' => 'link',
            '#title' => $event->getName(),
            '#url' => Url::fromRoute('eventhub.event_view', ['event' => $event->id()]),
          ],
        ],
        $event->getEventDate(),
        $event->getLocation(),
        $count . ' / ' . $event->getCapacity(),
        $event->getCategoryLabel(),
        [
          'data' => $actions,
        ],
      ];
    }

    $build = [];

    if ($this->currentUser()->hasPermission('create event')) {
      $build['add_event'] = [
        '#type' => 'link',
        '#title' => $this->t('Créer un événement'),
        '#url' => Url::fromRoute('eventhub.event_create'),
        '#attributes' => ['class' => ['button', 'button--primary', 'mb-3']],
      ];
    }

    $build['table'] = [
      '#theme' => 'table',
      '#header' => [
        $this->t('Événement'),
        $this->t('Date'),
        $this->t('Lieu'),
        $this->t('Inscriptions'),
        $this->t('Catégorie'),
        $this->t('Actions'),
      ],
      '#rows' => $rows,
      '#empty' => $this->t('Aucun événement à venir.'),
    ];

    $build['#cache'] = [
      'contexts' => ['url', 'user.permissions'],
      'tags' => ['event_list'],
      'max-age' => -1,
    ];

    return $build;
  }

  /**
   * Displays an event with a lazy builder for registration count.
   */
  public function view(Event $event): array {
    $build = [];

    $build['title'] = [
      '#markup' => '<h2>' . $event->getName() . '</h2>',
    ];

    $build['details'] = [
      '#theme' => 'item_list',
      '#items' => [
        $this->t('Date : @date', ['@date' => $event->getEventDate()]),
        $this->t('Lieu : @location', ['@location' => $event->getLocation()]),
        $this->t('Catégorie : @category', ['@category' => $event->getCategoryLabel()]),
      ],
    ];

    $description = $event->getDescription();
    if ($description) {
      $build['description'] = [
        '#type' => 'container',
        '#attributes' => ['class' => ['event-description']],
        'label' => [
          '#markup' => '<h3>' . $this->t('Description') . '</h3>',
        ],
        'text' => [
          '#type' => 'processed_text',
          '#text' => $description,
          '#format' => $event->get('description')->format ?? 'basic_html',
        ],
      ];
    }

    // Lazy builder for dynamic registration count.
    $build['registration_count'] = [
      '#lazy_builder' => [
        'Drupal\eventhub_core\Service\RegistrationCountBuilder:build',
        [(int) $event->id()],
      ],
      '#create_placeholder' => TRUE,
    ];

    $build['register_link'] = [
      '#type' => 'link',
      '#title' => $this->t("S'inscrire à cet événement"),
      '#url' => Url::fromRoute('eventhub.registration_create', [
        'event' => $event->id(),
      ]),
      '#attributes' => ['class' => ['btn', 'btn-primary', 'me-2', 'mt-3']],
    ];

    $build['actions'] = [
      '#type' => 'container',
      '#attributes' => ['class' => ['event-actions', 'mt-3']],
    ];

    if ($event->access('update')) {
      $build['actions']['edit'] = [
        '#type' => 'link',
        '#title' => $this->t('Modifier'),
        '#url' => Url::fromRoute('eventhub.event_edit', ['event' => $event->id()]),
        '#attributes' => ['class' => ['btn', 'btn-outline-primary', 'me-2']],
      ];
    }

    if ($event->access('delete')) {
      $build['actions']['delete'] = [
        '#type' => 'link',
        '#title' => $this->t('Supprimer'),
        '#url' => Url::fromRoute('eventhub.event_delete', ['event' => $event->id()]),
        '#attributes' => ['class' => ['btn', 'btn-outline-danger']],
      ];
    }

    $build['#cache'] = [
      'contexts' => ['url', 'user.permissions'],
      'tags' => ['event:' . $event->id()],
      'max-age' => 3600,
    ];

    return $build;
  }

  /**
   * Admin dashboard.
   */
  public function dashboard(): array {
    $totalEvents = $this->eventManager->getTotalEventCount();
    $upcomingEvents = $this->eventManager->getUpcomingEvents(5);
    $totalCommunes = $this->geoDataRepository->getCount();

    $build = [];

    $build['stats'] = [
      '#theme' => 'item_list',
      '#title' => $this->t('Statistiques'),
      '#items' => [
        $this->t('Événements publiés : @count', ['@count' => $totalEvents]),
        $this->t('Communes importées : @count', ['@count' => $totalCommunes]),
      ],
    ];

    $build['upcoming'] = [
      '#type' => 'markup',
      '#markup' => '<h3>' . $this->t('Prochains événements') . '</h3>',
    ];

    $rows = [];
    foreach ($upcomingEvents as $event) {
      $count = $this->registrationManager->getRegistrationCount((int) $event->id());
      $rows[] = [
        $event->getName(),
        $event->getEventDate(),
        $count . ' / ' . $event->getCapacity(),
      ];
    }

    $build['upcoming_table'] = [
      '#theme' => 'table',
      '#header' => [$this->t('Nom'), $this->t('Date'), $this->t('Inscriptions')],
      '#rows' => $rows,
      '#empty' => $this->t('Aucun événement à venir.'),
    ];

    $build['#cache'] = [
      'contexts' => ['user'],
      'tags' => ['event_list'],
      'max-age' => -1,
    ];

    return $build;
  }

}
