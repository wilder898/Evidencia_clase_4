<?php

require_once 'conexion.php';

class UsuarioDao{
    private $pdo;

    public function __construct(){
        $this->pdo = Conexion::getConexion();
    }

    public function crear($nombre, $correo){
        $sql = "INSERT INTO tareas (nombre, correo) VALUES (:nombre, :correo)";
        $stmt = $this->pdo->prepare($sql);
        $stmt ->execute([
            ':nombre' => $nombre,
            ':correo' => $correo
        ]);
        return $this->pdo->lastInsertId();
    }

    public function obtenerTodos(){
        $stmt = $this->pdo->query("SELECT * FROM tareas");
        return $stmt->fetchAll();
    }
    public function actualiazar($titulo, $descripcion){
        
    }
}

?>