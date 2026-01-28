<?php
require "../config/conexion.php";

if ($_POST) {
    $sql = "INSERT INTO actor (first_name, last_name) VALUES (?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([
        $_POST['first_name'],
        $_POST['last_name']
    ]);
    header("Location: listar.php");
}
?>
<form method="POST">
    Nombre: <input type="text" name="first_name" required><br>
    Apellido: <input type="text" name="last_name" required><br>
    <button>Guardar</button>
</form>