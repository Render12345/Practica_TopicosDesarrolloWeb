<?php
require "../config/conexion.php";
$id = $_GET['id'];

$stmt = $conexion->prepare("DELETE FROM actor WHERE actor_id = ?");
$stmt->execute([$id]);

header("Location: listar.php");