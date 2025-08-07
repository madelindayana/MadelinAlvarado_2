<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = ""; // Por defecto en XAMPP no hay contraseña
$basedatos = "crud_usuarios"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

// Verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
