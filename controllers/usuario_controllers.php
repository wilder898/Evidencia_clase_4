<?php
require_once __DIR__ . '/../models/EjemploModel.php';

$ejemplo = new EjemploModel();
$registros = $ejemplo->obtenerTodos();

require_once __DIR__ . '/../views/ejemplo/index.php';