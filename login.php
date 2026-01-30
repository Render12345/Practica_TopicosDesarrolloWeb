<?php
session_start();
require "config/conexion.php";

if ($_POST) {
    $username = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM staff WHERE username = :username";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $password === $user['password']) {
        $_SESSION['usuario'] = $user['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h2>Login</h2>

<?php if (isset($error)) echo "<p>$error</p>"; ?>

<form method="POST">
    Usuario: <input type="text" name="usuario" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Entrar</button>
</form>
</body>
</html>