<?php

declare(strict_types=1);

namespace Drupal\eventhub_import\Hook;

use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Queue\QueueFactory;
use Drupal\eventhub_import\Constants\GeoApiConstants;
use GuzzleHttp\ClientInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

/**
 * Cron hooks for EventHub Import.
 */
class CronHooks {

  public function __construct(
    private readonly ClientInterface $httpClient,
    private readonly QueueFactory $queueFactory,
    #[Autowire(service: 'logger.channel.eventhub_import')]
    private readonly LoggerInterface $logger,
  ) {}

  /**
   * Implements hook_cron().
   *
   * Fetches the list of departments from the geo API and queues one item
   * per department for commune import.
   */
  #[Hook('cron')]
  public function cron(): void {
    $queue = $this->queueFactory->get(GeoApiConstants::QUEUE_NAME);

    // Skip if the queue still has items to process.
    if ($queue->numberOfItems() > 0) {
      return;
    }

    try {
      $response = $this->httpClient->request('GET', GeoApiConstants::API_BASE . GeoApiConstants::DEPARTMENTS_ENDPOINT, [
        'timeout' => GeoApiConstants::REQUEST_TIMEOUT,
      ]);

      $departments = json_decode($response->getBody()->getContents(), TRUE);

      if (!is_array($departments)) {
        $this->logger->error('EventHub Import: Invalid response from /departements.');
        return;
      }

      $count = 0;
      foreach ($departments as $department) {
        if (empty($department['code'])) {
          continue;
        }

        $queue->createItem([
          'code' => $department['code'],
          'nom' => $department['nom'] ?? '',
        ]);
        $count++;
      }

      $this->logger->info('EventHub Import: Queued @count departments for commune import.', [
        '@count' => $count,
      ]);
    }
    catch (\Exception $e) {
      $this->logger->error('EventHub Import: Error fetching departments: @message', [
        '@message' => $e->getMessage(),
      ]);
    }
  }

}
