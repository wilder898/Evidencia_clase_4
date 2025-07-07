<?php
require_once __DIR__ . '/../config/Database.php';

class BaseModel {
  protected $pdo;

  public function __construct() {
    $this->pdo = Database::getConnection();
  }
}