<?php

declare(strict_types=1);

namespace Drupal\Tests\eventhub_core\Unit\Service;

use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Database\Connection;
use Drupal\Core\Database\Query\Select;
use Drupal\Core\Database\StatementInterface;
use Drupal\eventhub_core\Service\GeoDataRepository;
use Drupal\Tests\UnitTestCase;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Tests the GeoDataRepository service.
 *
 * @group eventhub
 * @coversDefaultClass \Drupal\eventhub_core\Service\GeoDataRepository
 */
class GeoDataRepositoryTest extends UnitTestCase {

  /**
   * The repository under test.
   */
  private GeoDataRepository $repository;

  /**
   * The mocked database connection.
   *
   * @var \Drupal\Core\Database\Connection|\PHPUnit\Framework\MockObject\MockObject
   */
  private Connection|MockObject $database;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->database = $this->createMock(Connection::class);
    $time = $this->createMock(TimeInterface::class);
    $this->repository = new GeoDataRepository($this->database, $time);
  }

  /**
   * Tests findByName returns results.
   *
   * @covers ::findByName
   */
  public function testFindByNameReturnsResults(): void {
    $expectedResults = [
      (object) [
        'id' => 1,
        'code_commune' => '75056',
        'nom' => 'Paris',
        'departement' => '75',
        'region' => 'Île-de-France',
      ],
    ];

    $statement = $this->createMock(StatementInterface::class);
    $statement->method('fetchAll')->willReturn($expectedResults);

    $select = $this->createMock(Select::class);
    $select->method('fields')->willReturnSelf();
    $select->method('condition')->willReturnSelf();
    $select->method('orderBy')->willReturnSelf();
    $select->method('range')->willReturnSelf();
    $select->method('execute')->willReturn($statement);

    $this->database
      ->method('select')
      ->with('eventhub_geodata', 'g')
      ->willReturn($select);

    $this->database
      ->method('escapeLike')
      ->with('Paris')
      ->willReturn('Paris');

    $results = $this->repository->findByName('Paris');

    $this->assertCount(1, $results);
    $this->assertEquals('Paris', $results[0]->nom);
  }

  /**
   * Tests findByName returns empty array for no results.
   *
   * @covers ::findByName
   */
  public function testFindByNameReturnsEmpty(): void {
    $statement = $this->createMock(StatementInterface::class);
    $statement->method('fetchAll')->willReturn([]);

    $select = $this->createMock(Select::class);
    $select->method('fields')->willReturnSelf();
    $select->method('condition')->willReturnSelf();
    $select->method('orderBy')->willReturnSelf();
    $select->method('range')->willReturnSelf();
    $select->method('execute')->willReturn($statement);

    $this->database
      ->method('select')
      ->willReturn($select);

    $this->database
      ->method('escapeLike')
      ->willReturn('Zzzzz');

    $results = $this->repository->findByName('Zzzzz');
    $this->assertEmpty($results);
  }

  /**
   * Tests getCount returns integer.
   *
   * @covers ::getCount
   */
  public function testGetCountReturnsInteger(): void {
    $countStatement = $this->createMock(StatementInterface::class);
    $countStatement->method('fetchField')->willReturn('42');

    $countQuery = $this->createMock(Select::class);
    $countQuery->method('execute')->willReturn($countStatement);

    $select = $this->createMock(Select::class);
    $select->method('countQuery')->willReturn($countQuery);

    $this->database
      ->method('select')
      ->with('eventhub_geodata', 'g')
      ->willReturn($select);

    $count = $this->repository->getCount();
    $this->assertSame(42, $count);
  }

}
