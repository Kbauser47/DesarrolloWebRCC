<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php");

// Consulta SQL para obtener los datos de los alumnos con el nombre de la carrera
$sql = "SELECT alumnos.*, carreras.nombre AS nombre_carrera 
        FROM alumnos 
        INNER JOIN carreras ON alumnos.id_carrera = carreras.id";

// Ejecutar la consulta
$resultado = $con->query($sql);
?>

<table>
<tr>
    <th>Nro</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>CU</th>
    <th>Sexo</th>
    <th>Carrera</th>
</tr>
<?php
$i = 0;
while($fila = $resultado->fetch_assoc()){
?>
<tr>
    <td><?php echo $i+1 ?></td>
    <td><?php echo $fila['nombres'] ?></td>
    <td><?php echo $fila['apellidos'] ?></td>
    <td><?php echo $fila['cu'] ?></td>
    <td><?php echo $fila['sexo'] ?></td>
    <td><?php echo $fila['nombre_carrera'] ?></td> <!-- Aquí se muestra el nombre de la carrera -->
    <?php $i++; ?>
</tr>
<?php
}        
?>
</table>
</body>
</html>