<?php
$conexion = new mysqli("localhost", "root", "", "Dayana");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];

$consulta = "UPDATE usuarios SET nombre='$nombre', correo='$correo', edad=$edad WHERE id=$id";
$conexion->query($consulta);

header("Location: leer.php");
?>
