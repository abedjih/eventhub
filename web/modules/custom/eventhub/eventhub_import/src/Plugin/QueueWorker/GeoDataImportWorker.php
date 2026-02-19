<?php

declare(strict_types=1);

namespace Drupal\eventhub_import\Plugin\QueueWorker;

use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Queue\Attribute\QueueWorker;
use Drupal\Core\Queue\QueueWorkerBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\eventhub_core\Service\GeoDataRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Queue worker for importing geodata from the API.
 */
#[QueueWorker(
  id: 'eventhub_geodata_import',
  title: new TranslatableMarkup('EventHub Geodata Import'),
  cron: ['time' => 60],
)]
class GeoDataImportWorker extends QueueWorkerBase implements ContainerFactoryPluginInterface {

  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    private readonly GeoDataRepository $geoDataRepository,
    #[Autowire(service: 'logger.channel.default')]
    private readonly LoggerInterface $logger,
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition): static {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get(GeoDataRepository::class),
      $container->get('logger.channel.default'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function processItem($data): void {
    if (empty($data['code_commune']) || empty($data['nom'])) {
      $this->logger->warning('EventHub Import: Skipping item with missing code_commune or nom.');
      return;
    }

    try {
      $this->geoDataRepository->upsert([
        'code_commune' => $data['code_commune'],
        'nom' => $data['nom'],
        'population' => (int) ($data['population'] ?? 0),
        'departement' => $data['departement'] ?? '',
        'region' => $data['region'] ?? '',
      ]);
    }
    catch (\Exception $e) {
      $this->logger->error('EventHub Import: Error processing commune @nom (@code): @message', [
        '@nom' => $data['nom'],
        '@code' => $data['code_commune'],
        '@message' => $e->getMessage(),
      ]);
      throw $e;
    }
  }

}
