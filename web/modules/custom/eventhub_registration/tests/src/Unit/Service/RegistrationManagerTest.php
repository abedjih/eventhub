<?php

declare(strict_types=1);

namespace Drupal\Tests\eventhub_registration\Unit\Service;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\eventhub_registration\Entity\Registration;
use Drupal\eventhub_registration\Service\RegistrationManager;
use Drupal\Tests\UnitTestCase;

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
   * The mocked entity type manager.
   */
  private EntityTypeManagerInterface $entityTypeManager;

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
    $this->storage = $this->createMock(EntityStorageInterface::class);

    $this->entityTypeManager
      ->method('getStorage')
      ->with('registration')
      ->willReturn($this->storage);

    $this->registrationManager = new RegistrationManager(
      $this->entityTypeManager,
    );
  }

  /**
   * Tests cancelRegistration with valid registration.
   *
   * @covers ::cancelRegistration
   */
  public function testCancelRegistrationSuccess(): void {
    $registration = $this->createMock(Registration::class);
    $registration->method('isCancelled')->willReturn(FALSE);
    $registration->expects($this->once())
      ->method('set')
      ->with('registration_status', 'cancelled');
    $registration->expects($this->once())
      ->method('save');

    $this->storage
      ->method('load')
      ->with(1)
      ->willReturn($registration);

    $result = $this->registrationManager->cancelRegistration(1);
    $this->assertTrue($result);
  }

  /**
   * Tests cancelRegistration with non-existent registration.
   *
   * @covers ::cancelRegistration
   */
  public function testCancelRegistrationNotFound(): void {
    $this->storage
      ->method('load')
      ->with(999)
      ->willReturn(NULL);

    $result = $this->registrationManager->cancelRegistration(999);
    $this->assertFalse($result);
  }

  /**
   * Tests cancelRegistration with already cancelled registration.
   *
   * @covers ::cancelRegistration
   */
  public function testCancelRegistrationAlreadyCancelled(): void {
    $registration = $this->createMock(Registration::class);
    $registration->method('isCancelled')->willReturn(TRUE);
    $registration->expects($this->never())->method('save');

    $this->storage
      ->method('load')
      ->with(1)
      ->willReturn($registration);

    $result = $this->registrationManager->cancelRegistration(1);
    $this->assertFalse($result);
  }

}
