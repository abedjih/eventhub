<?php

declare(strict_types=1);

namespace Drupal\eventhub_core\Service;

use Drupal\Core\Database\Connection;

/**
 * Repository for geodata custom table operations.
 */
class GeoDataRepository {

  public function __construct(
    private readonly Connection $database,
  ) {}

  /**
   * Inserts or updates a commune record.
   *
   * @param array $data
   *   Associative array with keys: code_commune, nom, population,
   *   departement, region.
   *
   * @return int
   *   The record ID.
   */
  public function upsert(array $data): int {
    // Check if the commune already exists.
    $existing = $this->database->select('eventhub_geodata', 'g')
      ->fields('g', ['id'])
      ->condition('code_commune', $data['code_commune'])
      ->execute()
      ->fetchField();

    if ($existing) {
      $this->database->update('eventhub_geodata')
        ->fields([
          'nom' => $data['nom'],
          'population' => $data['population'] ?? 0,
          'departement' => $data['departement'],
          'region' => $data['region'] ?? '',
          'imported_at' => \Drupal::time()->getRequestTime(),
        ])
        ->condition('id', $existing)
        ->execute();

      return (int) $existing;
    }

    return (int) $this->database->insert('eventhub_geodata')
      ->fields([
        'code_commune' => $data['code_commune'],
        'nom' => $data['nom'],
        'population' => $data['population'] ?? 0,
        'departement' => $data['departement'],
        'region' => $data['region'] ?? '',
        'imported_at' => \Drupal::time()->getRequestTime(),
      ])
      ->execute();
  }

  /**
   * Inserts multiple records in a transaction.
   *
   * @param array $records
   *   Array of commune data arrays.
   *
   * @return int
   *   Number of records processed.
   */
  public function insertBatch(array $records): int {
    $transaction = $this->database->startTransaction();
    $count = 0;

    try {
      foreach ($records as $data) {
        $this->upsert($data);
        $count++;
      }
    }
    catch (\Exception $e) {
      $transaction->rollBack();
      throw $e;
    }

    return $count;
  }

  /**
   * Finds communes by name (for autocomplete).
   *
   * @param string $search
   *   The search string.
   * @param int $limit
   *   Maximum number of results.
   *
   * @return array
   *   Array of commune records.
   */
  public function findByName(string $search, int $limit = 10): array {
    return $this->database->select('eventhub_geodata', 'g')
      ->fields('g', ['id', 'code_commune', 'nom', 'departement', 'region'])
      ->condition('nom', '%' . $this->database->escapeLike($search) . '%', 'LIKE')
      ->orderBy('nom', 'ASC')
      ->range(0, $limit)
      ->execute()
      ->fetchAll();
  }

  /**
   * Finds communes by department code.
   *
   * @param string $code
   *   The department code.
   *
   * @return array
   *   Array of commune records.
   */
  public function findByDepartement(string $code): array {
    return $this->database->select('eventhub_geodata', 'g')
      ->fields('g')
      ->condition('departement', $code)
      ->orderBy('nom', 'ASC')
      ->execute()
      ->fetchAll();
  }

  /**
   * Gets the total record count.
   *
   * @return int
   *   The number of records.
   */
  public function getCount(): int {
    return (int) $this->database->select('eventhub_geodata', 'g')
      ->countQuery()
      ->execute()
      ->fetchField();
  }

  /**
   * Deletes all records.
   */
  public function deleteAll(): void {
    $this->database->truncate('eventhub_geodata')->execute();
  }

}
