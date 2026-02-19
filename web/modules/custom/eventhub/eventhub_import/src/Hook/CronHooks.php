<?php

declare(strict_types=1);

namespace Drupal\eventhub_import\Hook;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Queue\QueueFactory;
use GuzzleHttp\ClientInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

/**
 * Cron hooks for EventHub Import.
 */
class CronHooks {

  /**
   * List of department codes to import.
   */
  private const DEPARTMENTS = [
    '01', '02', '03', '04', '05', '06', '07', '08', '09', '10',
    '11', '12', '13', '14', '15', '16', '17', '18', '19', '21',
    '22', '23', '24', '25', '26', '27', '28', '29', '2A', '2B',
    '30', '31', '32', '33', '34', '35', '36', '37', '38', '39',
    '40', '41', '42', '43', '44', '45', '46', '47', '48', '49',
    '50', '51', '52', '53', '54', '55', '56', '57', '58', '59',
    '60', '61', '62', '63', '64', '65', '66', '67', '68', '69',
    '70', '71', '72', '73', '74', '75', '76', '77', '78', '79',
    '80', '81', '82', '83', '84', '85', '86', '87', '88', '89',
    '90', '91', '92', '93', '94', '95',
  ];

  public function __construct(
    private readonly ClientInterface $httpClient,
    private readonly QueueFactory $queueFactory,
    private readonly ConfigFactoryInterface $configFactory,
    #[Autowire(service: 'logger.channel.default')]
    private readonly LoggerInterface $logger,
  ) {}

  /**
   * Implements hook_cron().
   *
   * Fetches commune data from geo.api.gouv.fr and queues it for import.
   */
  #[Hook('cron')]
  public function cron(): void {
    $config = $this->configFactory->get('eventhub_core.settings');
    $endpoint = $config->get('api_endpoint') ?: 'https://geo.api.gouv.fr';
    $batchSize = (int) ($config->get('import_batch_size') ?: 50);

    $queue = $this->queueFactory->get('eventhub_geodata_import');

    // Track which departments have been imported via state.
    $state = \Drupal::state();
    $lastIndex = (int) $state->get('eventhub_import.last_dept_index', 0);

    // Import one department per cron run.
    if ($lastIndex >= count(self::DEPARTMENTS)) {
      // All departments have been imported, reset.
      $state->set('eventhub_import.last_dept_index', 0);
      $this->logger->info('EventHub Import: All departments have been processed. Resetting.');
      return;
    }

    $deptCode = self::DEPARTMENTS[$lastIndex];

    try {
      $response = $this->httpClient->request('GET', $endpoint . '/departements/' . $deptCode . '/communes', [
        'query' => [
          'fields' => 'nom,code,population,departement,region',
        ],
        'timeout' => 30,
      ]);

      $data = json_decode($response->getBody()->getContents(), TRUE);

      if (!is_array($data)) {
        $this->logger->error('EventHub Import: Invalid response for department @dept.', [
          '@dept' => $deptCode,
        ]);
        return;
      }

      $count = 0;
      foreach ($data as $commune) {
        $queue->createItem([
          'code_commune' => $commune['code'] ?? '',
          'nom' => $commune['nom'] ?? '',
          'population' => $commune['population'] ?? 0,
          'departement' => $deptCode,
          'region' => $commune['region']['nom'] ?? '',
        ]);
        $count++;

        if ($count >= $batchSize) {
          break;
        }
      }

      $state->set('eventhub_import.last_dept_index', $lastIndex + 1);

      $this->logger->info('EventHub Import: Queued @count communes from department @dept.', [
        '@count' => $count,
        '@dept' => $deptCode,
      ]);
    }
    catch (\Exception $e) {
      $this->logger->error('EventHub Import: Error fetching department @dept: @message', [
        '@dept' => $deptCode,
        '@message' => $e->getMessage(),
      ]);
    }
  }

}
