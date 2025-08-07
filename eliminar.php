<?php
$conexion = new mysqli("localhost", "root", "", "Dayana");

$id = $_GET['id'];

$consulta = "DELETE FROM usuarios WHERE id=$id";
$conexion->query($consulta);

header("Location: leer.php");
?>
