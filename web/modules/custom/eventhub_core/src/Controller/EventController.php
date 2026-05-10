<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Controller;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\Url;
use Drupal\eventhub_core\Entity\Event;
use Drupal\eventhub_core\Service\EventManager;
use Drupal\eventhub_import\Service\GeoDataRepository;
use Drupal\eventhub_registration\Service\RegistrationManager;
use Symfony\Component\HttpFoundation\RedirectResponse;

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
          '#url' => Url::fromRoute('entity.event.edit_form', ['event' => $event->id()]),
          '#attributes' => ['class' => ['btn', 'btn-sm', 'btn-outline-primary', 'me-1']],
        ];
      }
      if ($event->access('delete')) {
        $actions[] = [
          '#type' => 'link',
          '#title' => $this->t('Supprimer'),
          '#url' => Url::fromRoute('entity.event.delete_form', ['event' => $event->id()]),
          '#attributes' => ['class' => ['btn', 'btn-sm', 'btn-outline-danger']],
        ];
      }

      $rows[] = [
        [
          'data' => [
            '#type' => 'link',
            '#title' => $event->getName(),
            '#url' => Url::fromRoute('entity.event.canonical', ['event' => $event->id()]),
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
        '#url' => Url::fromRoute('entity.event.add_form'),
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
   * Displays an event detail page.
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

    // Register link is injected via #[Hook('entity_view')] in
    // eventhub_registration EntityHooks.
    $build['actions'] = [
      '#type' => 'container',
      '#attributes' => ['class' => ['event-actions', 'mt-3']],
    ];

    if ($event->access('update')) {
      $build['actions']['edit'] = [
        '#type' => 'link',
        '#title' => $this->t('Modifier'),
        '#url' => Url::fromRoute('entity.event.edit_form', ['event' => $event->id()]),
        '#attributes' => ['class' => ['btn', 'btn-outline-primary', 'me-2']],
      ];
    }

    if ($event->access('delete')) {
      $build['actions']['delete'] = [
        '#type' => 'link',
        '#title' => $this->t('Supprimer'),
        '#url' => Url::fromRoute('entity.event.delete_form', ['event' => $event->id()]),
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
   * Toggles the published status of an event.
   *
   * This route is protected by _csrf_token in routing.yml.
   */
  public function toggleStatus(Event $event): RedirectResponse {
    $currentStatus = (bool) $event->get('status')->value;
    $newStatus = !$currentStatus;
    $event->set('status', $newStatus);
    $event->save();

    Cache::invalidateTags(['event_list', 'event:' . $event->id()]);

    $this->messenger()->addStatus(
      $newStatus
        ? $this->t("L'événement %name a été publié.", ['%name' => $event->label()])
        : $this->t("L'événement %name a été dépublié.", ['%name' => $event->label()])
    );

    return new RedirectResponse(Url::fromRoute('entity.event.collection')->toString());
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
