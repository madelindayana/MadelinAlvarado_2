<?php
$conexion = new mysqli("localhost", "root", "", "Dayana");

$id = $_GET['id'];
$consulta = "SELECT * FROM usuarios WHERE id=$id";
$resultado = $conexion->query($consulta);
$fila = $resultado->fetch_assoc();
?>

<form action="actualizar.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
  Nombre: <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"><br>
  Correo: <input type="email" name="correo" value="<?php echo $fila['correo']; ?>"><br>
  Edad: <input type="number" name="edad" value="<?php echo $fila['edad']; ?>"><br>
  <input type="submit" value="Actualizar">
</form>

