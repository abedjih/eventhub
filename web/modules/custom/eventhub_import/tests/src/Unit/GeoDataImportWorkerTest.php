<?php

declare(strict_types=1);

namespace Drupal\Tests\eventhub_import\Unit;

use Drupal\eventhub_import\Service\GeoDataRepository;
use Drupal\eventhub_import\Plugin\QueueWorker\GeoDataImportWorker;
use Drupal\Tests\UnitTestCase;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Response;
use Psr\Log\LoggerInterface;

/**
 * Tests the GeoDataImportWorker queue worker.
 *
 * @group eventhub
 * @coversDefaultClass \Drupal\eventhub_import\Plugin\QueueWorker\GeoDataImportWorker
 */
class GeoDataImportWorkerTest extends UnitTestCase {

  /**
   * The queue worker under test.
   */
  private GeoDataImportWorker $worker;

  /**
   * The mocked geodata repository.
   *
   * @var \Drupal\eventhub_import\Service\GeoDataRepository|\PHPUnit\Framework\MockObject\MockObject
   */
  private GeoDataRepository $geoDataRepository;

  /**
   * The mocked HTTP client.
   *
   * @var \GuzzleHttp\ClientInterface|\PHPUnit\Framework\MockObject\MockObject
   */
  private ClientInterface $httpClient;

  /**
   * The mocked logger.
   *
   * @var \Psr\Log\LoggerInterface|\PHPUnit\Framework\MockObject\MockObject
   */
  private LoggerInterface $logger;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->geoDataRepository = $this->createMock(GeoDataRepository::class);
    $this->httpClient = $this->createMock(ClientInterface::class);
    $this->logger = $this->createMock(LoggerInterface::class);

    $this->worker = new GeoDataImportWorker(
      [],
      'eventhub_geodata_import',
      ['cron' => ['time' => 60]],
      $this->geoDataRepository,
      $this->httpClient,
      $this->logger,
    );
  }

  /**
   * Tests processItem with a valid department.
   *
   * @covers ::processItem
   */
  public function testProcessItemWithValidDepartment(): void {
    $apiResponse = [
      [
        'code' => '75056',
        'nom' => 'Paris',
        'population' => 2133111,
        'codeDepartement' => '75',
        'codeRegion' => '11',
      ],
      [
        'code' => '75101',
        'nom' => 'Paris 1er Arrondissement',
        'population' => 16000,
        'codeDepartement' => '75',
        'codeRegion' => '11',
      ],
    ];

    $this->httpClient
      ->expects($this->once())
      ->method('request')
      ->with('GET', $this->stringContains('/departements/75/communes'))
      ->willReturn(new Response(200, [], (string) json_encode($apiResponse)));

    $this->geoDataRepository
      ->expects($this->once())
      ->method('insertBatch')
      ->with($this->callback(function (array $records): bool {
        $first = $records[0] ?? NULL;
        $second = $records[1] ?? NULL;
        if (!is_array($first) || !is_array($second)) {
          return FALSE;
        }
        return count($records) === 2
          && $first['code_commune'] === '75056'
          && $first['nom'] === 'Paris'
          && $first['population'] === 2133111
          && $first['departement'] === '75'
          && $second['code_commune'] === '75101';
      }))
      ->willReturn(2);

    $this->worker->processItem(['code' => '75', 'nom' => 'Paris']);
  }

  /**
   * Tests processItem skips items with missing department code.
   *
   * @covers ::processItem
   */
  public function testProcessItemSkipsMissingCode(): void {
    $this->httpClient
      ->expects($this->never())
      ->method('request');

    $this->geoDataRepository
      ->expects($this->never())
      ->method('insertBatch');

    $this->logger
      ->expects($this->once())
      ->method('warning');

    $this->worker->processItem(['code' => '', 'nom' => 'Test']);
  }

  /**
   * Tests processItem handles empty API response.
   *
   * @covers ::processItem
   */
  public function testProcessItemHandlesEmptyResponse(): void {
    $this->httpClient
      ->method('request')
      ->willReturn(new Response(200, [], (string) json_encode([])));

    $this->geoDataRepository
      ->expects($this->never())
      ->method('insertBatch');

    $this->worker->processItem(['code' => '99', 'nom' => 'Vide']);
  }

  /**
   * Tests processItem skips communes with missing required fields.
   *
   * @covers ::processItem
   */
  public function testProcessItemSkipsInvalidCommunes(): void {
    $apiResponse = [
      ['code' => '', 'nom' => 'No Code'],
      ['code' => '01001', 'nom' => ''],
      [
        'code' => '01002',
        'nom' => 'Valid',
        'population' => 500,
        'codeDepartement' => '01',
        'codeRegion' => '84',
      ],
    ];

    $this->httpClient
      ->method('request')
      ->willReturn(new Response(200, [], (string) json_encode($apiResponse)));

    $this->geoDataRepository
      ->expects($this->once())
      ->method('insertBatch')
      ->with($this->callback(function (array $records): bool {
        $first = $records[0] ?? NULL;
        if (!is_array($first)) {
          return FALSE;
        }
        return count($records) === 1
          && $first['code_commune'] === '01002';
      }))
      ->willReturn(1);

    $this->worker->processItem(['code' => '01', 'nom' => 'Ain']);
  }

  /**
   * Tests processItem rethrows exceptions from HTTP client.
   *
   * @covers ::processItem
   */
  public function testProcessItemRethrowsException(): void {
    $this->httpClient
      ->method('request')
      ->willThrowException(new \RuntimeException('Connection error'));

    $this->expectException(\RuntimeException::class);
    $this->expectExceptionMessage('Connection error');

    $this->worker->processItem(['code' => '75', 'nom' => 'Paris']);
  }

}
