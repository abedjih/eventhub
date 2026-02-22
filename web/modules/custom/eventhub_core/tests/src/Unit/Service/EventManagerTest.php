<?php

declare(strict_types=1);

namespace Drupal\Tests\eventhub_core\Unit\Service;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\eventhub_core\Entity\Event;
use Drupal\eventhub_core\Service\EventManager;
use Drupal\eventhub_registration\Service\RegistrationManager;
use Drupal\Tests\UnitTestCase;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Tests the EventManager service.
 *
 * @group eventhub
 * @coversDefaultClass \Drupal\eventhub_core\Service\EventManager
 */
class EventManagerTest extends UnitTestCase {

  /**
   * The event manager under test.
   */
  private EventManager $eventManager;

  /**
   * The mocked entity type manager.
   */
  private EntityTypeManagerInterface $entityTypeManager;

  /**
   * The mocked registration manager.
   *
   * @var \Drupal\eventhub_registration\Service\RegistrationManager|\PHPUnit\Framework\MockObject\MockObject
   */
  private RegistrationManager|MockObject $registrationManager;

  /**
   * The mocked entity storage.
   */
  private EntityStorageInterface $storage;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->entityTypeManager = $this->createMock(EntityTypeManagerInterface::class);
    $this->registrationManager = $this->createMock(RegistrationManager::class);
    $this->storage = $this->createMock(EntityStorageInterface::class);

    $this->entityTypeManager
      ->method('getStorage')
      ->with('event')
      ->willReturn($this->storage);

    $this->eventManager = new EventManager(
      $this->entityTypeManager,
      $this->registrationManager,
    );
  }

  /**
   * Tests getRemainingCapacity with available spots.
   *
   * @covers ::getRemainingCapacity
   */
  public function testGetRemainingCapacityWithAvailableSpots(): void {
    $event = $this->createMock(Event::class);
    $event->method('getCapacity')->willReturn(100);

    $this->storage
      ->method('load')
      ->with(1)
      ->willReturn($event);

    $this->registrationManager
      ->method('getRegistrationCount')
      ->with(1)
      ->willReturn(30);

    $result = $this->eventManager->getRemainingCapacity(1);
    $this->assertEquals(70, $result);
  }

  /**
   * Tests getRemainingCapacity when event is full.
   *
   * @covers ::getRemainingCapacity
   */
  public function testGetRemainingCapacityWhenFull(): void {
    $event = $this->createMock(Event::class);
    $event->method('getCapacity')->willReturn(50);

    $this->storage
      ->method('load')
      ->with(1)
      ->willReturn($event);

    $this->registrationManager
      ->method('getRegistrationCount')
      ->with(1)
      ->willReturn(50);

    $result = $this->eventManager->getRemainingCapacity(1);
    $this->assertEquals(0, $result);
  }

  /**
   * Tests getRemainingCapacity when event does not exist.
   *
   * @covers ::getRemainingCapacity
   */
  public function testGetRemainingCapacityEventNotFound(): void {
    $this->storage
      ->method('load')
      ->with(999)
      ->willReturn(NULL);

    $result = $this->eventManager->getRemainingCapacity(999);
    $this->assertEquals(0, $result);
  }

  /**
   * Tests isEventFull returns true when full.
   *
   * @covers ::isEventFull
   */
  public function testIsEventFullReturnsTrue(): void {
    $event = $this->createMock(Event::class);
    $event->method('getCapacity')->willReturn(10);

    $this->storage
      ->method('load')
      ->with(1)
      ->willReturn($event);

    $this->registrationManager
      ->method('getRegistrationCount')
      ->with(1)
      ->willReturn(10);

    $this->assertTrue($this->eventManager->isEventFull(1));
  }

  /**
   * Tests isEventFull returns false when not full.
   *
   * @covers ::isEventFull
   */
  public function testIsEventFullReturnsFalse(): void {
    $event = $this->createMock(Event::class);
    $event->method('getCapacity')->willReturn(100);

    $this->storage
      ->method('load')
      ->with(1)
      ->willReturn($event);

    $this->registrationManager
      ->method('getRegistrationCount')
      ->with(1)
      ->willReturn(5);

    $this->assertFalse($this->eventManager->isEventFull(1));
  }

  /**
   * Tests getRemainingCapacity never returns negative.
   *
   * @covers ::getRemainingCapacity
   */
  public function testGetRemainingCapacityNeverNegative(): void {
    $event = $this->createMock(Event::class);
    $event->method('getCapacity')->willReturn(10);

    $this->storage
      ->method('load')
      ->with(1)
      ->willReturn($event);

    // More registrations than capacity (edge case).
    $this->registrationManager
      ->method('getRegistrationCount')
      ->with(1)
      ->willReturn(15);

    $result = $this->eventManager->getRemainingCapacity(1);
    $this->assertEquals(0, $result);
  }

}
