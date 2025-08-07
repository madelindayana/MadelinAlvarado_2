<?php
$mascotas = [
    ["nombre" => "Luna", "especie" => "Perro", "edad" => 3],
    ["nombre" => "Nala", "especie" => "Gato", "edad" => 2],
    ["nombre" => "Toby", "especie" => "Conejo", "edad" => 1],
    ["nombre" => "Max", "especie" => "Perro", "edad" => 5],
    ["nombre" => "Rocky", "especie" => "Gato", "edad" => 4]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Mascotas</title>
    <style>
        body {
            background-color: #fef6f9;
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
        }
        h1 {
            color: #c77094;
            text-align: center;
        }
        table {
            width: 60%;
            margin: auto;
            border-collapse: collapse;
            box-shadow: 0px 4px 12px rgba(199, 112, 148, 0.3);
        }
        th, td {
            border: 1px solid #f7cfe2;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f7cfe2;
            color: #5c3d53;
        }
        tr:nth-child(even) {
            background-color: #fff0f7;
        }
        tr:hover {
            background-color: #fde4ec;
        }
    </style>
</head>
<body>
    <h1>🐾 Lista de Mascotas en la Clínica</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Edad</th>
        </tr>
        <?php foreach ($mascotas as $mascota): ?>
            <tr>
                <td><?php echo $mascota['nombre']; ?></td>
                <td><?php echo $mascota['especie']; ?></td>
                <td><?php echo $mascota['edad']; ?> años</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
