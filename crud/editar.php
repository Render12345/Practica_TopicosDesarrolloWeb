<?php
require "../config/conexion.php";

$id = $_GET['id'];
$actor = $conexion
    ->prepare("SELECT * FROM actor WHERE actor_id = ?");
$actor->execute([$id]);
$actor = $actor->fetch(PDO::FETCH_ASSOC);

if ($_POST) {
    $sql = "UPDATE actor SET first_name=?, last_name=? WHERE actor_id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([
        $_POST['first_name'],
        $_POST['last_name'],
        $id
    ]);
    header("Location: listar.php");
}
?>
<form method="POST">
    Nombre:
    <input type="text" name="first_name" value="<?= $actor['first_name'] ?>"><br>
    Apellido:
    <input type="text" name="last_name" value="<?= $actor['last_name'] ?>"><br>
    <button>Actualizar</button>
</form>