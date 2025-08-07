<?php
$conexion = new mysqli("localhost", "root", "", "crud_usuarios");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];

$sql = "INSERT INTO usuarios (nombre, correo, edad) VALUES ('$nombre', '$correo', $edad)";
if ($conexion->query($sql) === TRUE) {
    echo "Usuario guardado correctamente.";
} else {
    echo "Error: " . $conexion->error;
}
?>
