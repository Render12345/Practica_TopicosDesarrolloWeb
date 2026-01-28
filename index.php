<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistema Web</title>
</head>
<body>
    <h1>Bienvenido al sistema</h1>
    <a href="login.php">Iniciar sesión</a>
</body>
</html>