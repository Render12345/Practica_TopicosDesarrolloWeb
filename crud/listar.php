<?php
require "../config/conexion.php";
$actores = $conexion->query("SELECT * FROM actor")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head><title>Actores</title></head>
<body>
<h2>Lista de actores</h2>
<a href="crear.php">Nuevo actor</a>
<table border="1">
<tr>
  <th>ID</th>
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Acciones</th>
</tr>

<?php foreach ($actores as $actor): ?>
<tr>
  <td><?= $actor['actor_id'] ?></td>
  <td><?= $actor['first_name'] ?></td>
  <td><?= $actor['last_name'] ?></td>
  <td>
    <a href="editar.php?id=<?= $actor['actor_id'] ?>">Editar</a>
    <a href="eliminar.php?id=<?= $actor['actor_id'] ?>">Eliminar</a>
  </td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>