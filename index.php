<?php
$seccion = $_GET['seccion'] ?? 'ejemplo';
$ruta = __DIR__ . '/../controllers/' . $seccion . 'Controller.php';

if (file_exists($ruta)) {
  require_once $ruta;
} else {
  echo "404 - Sección no encontrada";
}