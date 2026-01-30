<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h1>Panel principal</h1>
<p>Usuario: <?php echo $_SESSION['usuario']; ?></p>

<a href="crud/listar.php">Ver registros</a><br>
<a href="logout.php">Cerrar sesión</a>
</body>
</html>