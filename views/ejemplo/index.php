<h2>Listado de ejemplos</h2>
<ul>
  <?php foreach ($registros as $fila): ?>
    <li><?= htmlspecialchars($fila['nombre']) ?></li>
  <?php endforeach; ?>
</ul>