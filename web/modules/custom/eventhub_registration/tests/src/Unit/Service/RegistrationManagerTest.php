<?php

declare(strict_types=1);

namespace Drupal\Tests\eventhub_registration\Unit\Service;

use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Database\Connection;
use Drupal\Core\Database\Query\SelectInterface;
use Drupal\Core\Database\Query\Update;
use Drupal\Core\Database\StatementInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\eventhub_registration\Service\RegistrationManager;
use Drupal\Tests\UnitTestCase;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Tests the RegistrationManager service.
 *
 * @group eventhub
 * @coversDefaultClass \Drupal\eventhub_registration\Service\RegistrationManager
 */
class RegistrationManagerTest extends UnitTestCase {

  /**
   * The registration manager under test.
   */
  private RegistrationManager $registrationManager;

  /**
   * The mocked database connection.
   */
  private Connection&MockObject $database;

  /**
   * The mocked time service.
   */
  private TimeInterface&MockObject $time;

  /**
   * The mocked entity type manager.
   */
  private EntityTypeManagerInterface&MockObject $entityTypeManager;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->database = $this->createMock(Connection::class);
    $this->time = $this->createMock(TimeInterface::class);
    $this->entityTypeManager = $this->createMock(EntityTypeManagerInterface::class);

    $this->registrationManager = new RegistrationManager(
      $this->database,
      $this->time,
      $this->entityTypeManager,
    );
  }

  /**
   * Tests cancelRegistration with valid registration.
   *
   * @covers ::cancelRegistration
   */
  public function testCancelRegistrationSuccess(): void {
    $record = (object) [
      'id' => 1,
      'event_id' => 1,
      'registration_status' => 'confirmed',
    ];

    $statement = $this->createMock(StatementInterface::class);
    $statement->method('fetchObject')->willReturn($record);

    $select = $this->createMock(SelectInterface::class);
    $select->method('fields')->willReturnSelf();
    $select->method('condition')->willReturnSelf();
    $select->method('execute')->willReturn($statement);

    $update = $this->createMock(Update::class);
    $update->method('fields')->willReturnSelf();
    $update->method('condition')->willReturnSelf();
    $update->method('execute')->willReturn(1);

    $this->database->method('select')->willReturn($select);
    $this->database->method('update')->willReturn($update);

    $result = $this->registrationManager->cancelRegistration(1);
    $this->assertTrue($result);
  }

  /**
   * Tests cancelRegistration with non-existent registration.
   *
   * @covers ::cancelRegistration
   */
  public function testCancelRegistrationNotFound(): void {
    $statement = $this->createMock(StatementInterface::class);
    $statement->method('fetchObject')->willReturn(FALSE);

    $select = $this->createMock(SelectInterface::class);
    $select->method('fields')->willReturnSelf();
    $select->method('condition')->willReturnSelf();
    $select->method('execute')->willReturn($statement);

    $this->database->method('select')->willReturn($select);

    $result = $this->registrationManager->cancelRegistration(999);
    $this->assertFalse($result);
  }

  /**
   * Tests cancelRegistration with already cancelled registration.
   *
   * @covers ::cancelRegistration
   */
  public function testCancelRegistrationAlreadyCancelled(): void {
    $record = (object) [
      'id' => 1,
      'event_id' => 1,
      'registration_status' => 'cancelled',
    ];

    $statement = $this->createMock(StatementInterface::class);
    $statement->method('fetchObject')->willReturn($record);

    $select = $this->createMock(SelectInterface::class);
    $select->method('fields')->willReturnSelf();
    $select->method('condition')->willReturnSelf();
    $select->method('execute')->willReturn($statement);

    $this->database->method('select')->willReturn($select);
    $this->database->expects($this->never())->method('update');

    $result = $this->registrationManager->cancelRegistration(1);
    $this->assertFalse($result);
  }

}
