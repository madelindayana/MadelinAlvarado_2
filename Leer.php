<?php
<a href="eliminar.php?id=<?php echo $fila['id']; ?>" onclick="return confirm('¿Estás segura que quieres eliminar este registro?')">Eliminar</a>

$conexion = new mysqli("localhost", "root", "", "Dayana"); // Cambia "Dayana" si tu base se llama diferente

$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->query($consulta);
?>

<table border="1">
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Edad</th>
    <th>Acciones</th>
  </tr>

  <?php while($fila = $resultado->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $fila['id']; ?></td>
      <td><?php echo $fila['nombre']; ?></td>
      <td><?php echo $fila['correo']; ?></td>
      <td><?php echo $fila['edad']; ?></td>
      <td>
        <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a> |
        <a href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
      </td>
    </tr>
  <?php } ?>
</table>
