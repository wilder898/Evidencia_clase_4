<?php


class Conexion {
    private static $pdo = null;

    public static function getConexion() {
        if (self::$pdo === null) {
            $host = 'localhost';
            $db   = 'nombre_de_tu_base_de_datos';
            $user = 'root';
            $pass = '';
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            try {
                self::$pdo = new PDO($dsn, $user, $pass, $options);
            } catch (PDOException $e) {
                die('Error de conexión: ' . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
?>