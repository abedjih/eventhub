<?php

declare(strict_types=1);

namespace Drupal\eventhub_import\Plugin\QueueWorker;

use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Queue\Attribute\QueueWorker;
use Drupal\Core\Queue\QueueWorkerBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\eventhub_import\Service\GeoDataRepository;
use Drupal\eventhub_import\Constants\GeoApiConstants;
use GuzzleHttp\ClientInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Queue worker for importing communes by department from the geo API.
 *
 * Each queue item represents a single department. The worker fetches all
 * communes for that department and inserts them in batch.
 */
#[QueueWorker(
  id: GeoApiConstants::QUEUE_NAME,
  title: new TranslatableMarkup('EventHub Geodata Import'),
  cron: ['time' => 60],
)]
final class GeoDataImportWorker extends QueueWorkerBase implements ContainerFactoryPluginInterface {

  /**
   * Constructs a GeoDataImportWorker object.
   *
   * @param array<string, mixed> $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\eventhub_import\Service\GeoDataRepository $geoDataRepository
   *   The geodata repository.
   * @param \GuzzleHttp\ClientInterface $httpClient
   *   The HTTP client.
   * @param \Psr\Log\LoggerInterface $logger
   *   The logger.
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    private readonly GeoDataRepository $geoDataRepository,
    private readonly ClientInterface $httpClient,
    #[Autowire(service: 'logger.channel.eventhub_import')]
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
      $container->get('http_client'),
      $container->get('logger.channel.eventhub_import'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function processItem($data): void {
    if (!is_array($data) || empty($data['code'])) {
      $this->logger->warning('EventHub Import: Skipping queue item with missing department code.');
      return;
    }

    $deptCode = (string) $data['code'];
    $deptNom = (string) ($data['nom'] ?? $deptCode);

    try {
      $url = GeoApiConstants::API_BASE . sprintf(GeoApiConstants::COMMUNES_ENDPOINT, $deptCode);
      $response = $this->httpClient->request('GET', $url, [
        'query' => [
          'fields' => GeoApiConstants::COMMUNES_FIELDS,
        ],
        'timeout' => GeoApiConstants::REQUEST_TIMEOUT,
      ]);

      $communes = json_decode($response->getBody()->getContents(), TRUE);

      if (!is_array($communes)) {
        $this->logger->error('EventHub Import: Invalid response for department @dept.', [
          '@dept' => $deptCode,
        ]);
        return;
      }

      $records = [];
      foreach ($communes as $commune) {
        if (!is_array($commune) || empty($commune['code']) || empty($commune['nom'])) {
          continue;
        }

        $records[] = [
          'code_commune' => (string) $commune['code'],
          'nom' => (string) $commune['nom'],
          'population' => (int) ($commune['population'] ?? 0),
          'departement' => (string) ($commune['codeDepartement'] ?? $deptCode),
          'region' => (string) ($commune['codeRegion'] ?? ''),
        ];
      }

      if (!empty($records)) {
        $count = $this->geoDataRepository->insertBatch($records);
        $this->logger->info('EventHub Import: Imported @count communes for department @dept (@nom).', [
          '@count' => $count,
          '@dept' => $deptCode,
          '@nom' => $deptNom,
        ]);
      }
    }
    catch (\Exception $e) {
      $this->logger->error('EventHub Import: Error importing department @dept: @message', [
        '@dept' => $deptCode,
        '@message' => $e->getMessage(),
      ]);
      throw $e;
    }
  }

}
