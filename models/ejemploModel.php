<?php
require_once 'BaseModel.php';

class EjemploModel extends BaseModel {
  public function obtenerTodos() {
    return $this->pdo->query("SELECT * FROM ejemplo")->fetchAll();
  }

  public function crear($nombre) {
    $stmt = $this->pdo->prepare("INSERT INTO ejemplo (nombre) VALUES (?)");
    $stmt->execute([$nombre]);
  }
}