<?php
class Database {
  private static $pdo = null;

  private function __construct() {}

  public static function getConnection() {
    if (!self::$pdo) {
      try {
        self::$pdo = new PDO("mysql:host=localhost;dbname=nombre_bd", "usuario", "contraseña");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
      }
    }
    return self::$pdo;
  }
}