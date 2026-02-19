<?php

declare(strict_types=1);

namespace Drupal\Tests\eventhub_import\Unit;

use Drupal\eventhub_core\Service\GeoDataRepository;
use Drupal\eventhub_import\Plugin\QueueWorker\GeoDataImportWorker;
use Drupal\Tests\UnitTestCase;
use Psr\Log\LoggerInterface;

/**
 * Tests the GeoDataImportWorker queue worker.
 *
 * @group eventhub
 * @coversDefaultClass \Drupal\eventhub_import\Plugin\QueueWorker\GeoDataImportWorker
 */
class GeoDataImportWorkerTest extends UnitTestCase {

  private GeoDataImportWorker $worker;
  private GeoDataRepository $geoDataRepository;
  private LoggerInterface $logger;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->geoDataRepository = $this->createMock(GeoDataRepository::class);
    $this->logger = $this->createMock(LoggerInterface::class);

    $this->worker = new GeoDataImportWorker(
      [],
      'eventhub_geodata_import',
      ['cron' => ['time' => 60]],
      $this->geoDataRepository,
      $this->logger,
    );
  }

  /**
   * Tests processItem with valid data.
   *
   * @covers ::processItem
   */
  public function testProcessItemWithValidData(): void {
    $data = [
      'code_commune' => '75056',
      'nom' => 'Paris',
      'population' => 2133111,
      'departement' => '75',
      'region' => 'Île-de-France',
    ];

    $this->geoDataRepository
      ->expects($this->once())
      ->method('upsert')
      ->with($this->callback(function ($arg) {
        return $arg['code_commune'] === '75056'
          && $arg['nom'] === 'Paris'
          && $arg['population'] === 2133111;
      }));

    $this->worker->processItem($data);
  }

  /**
   * Tests processItem skips items with missing code_commune.
   *
   * @covers ::processItem
   */
  public function testProcessItemSkipsMissingCode(): void {
    $data = [
      'code_commune' => '',
      'nom' => 'Paris',
    ];

    $this->geoDataRepository
      ->expects($this->never())
      ->method('upsert');

    $this->logger
      ->expects($this->once())
      ->method('warning');

    $this->worker->processItem($data);
  }

  /**
   * Tests processItem skips items with missing nom.
   *
   * @covers ::processItem
   */
  public function testProcessItemSkipsMissingNom(): void {
    $data = [
      'code_commune' => '75056',
      'nom' => '',
    ];

    $this->geoDataRepository
      ->expects($this->never())
      ->method('upsert');

    $this->worker->processItem($data);
  }

  /**
   * Tests processItem rethrows exceptions from repository.
   *
   * @covers ::processItem
   */
  public function testProcessItemRethrowsException(): void {
    $data = [
      'code_commune' => '75056',
      'nom' => 'Paris',
      'departement' => '75',
    ];

    $this->geoDataRepository
      ->method('upsert')
      ->willThrowException(new \RuntimeException('Database error'));

    $this->expectException(\RuntimeException::class);
    $this->expectExceptionMessage('Database error');

    $this->worker->processItem($data);
  }

}
