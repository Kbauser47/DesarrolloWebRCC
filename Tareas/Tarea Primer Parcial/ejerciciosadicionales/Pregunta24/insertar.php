<?php
include ("conexion.php");

$filas = $_COOKIE['filas'];

for ($i = 0; $i < $filas; $i++) {

    $nombre = $_POST['txtNombre' . $i];

    $apellido = $_POST['txtApellido' . $i];

    $cu = $_POST['txtCU' . $i];

    $sexo = $_POST['txtSexo' . $i];

    $carrera = $_POST['carrera_id' . $i];


    $sql = "INSERT INTO alumnos(nombres,apellidos,cu,sexo,id_carrera) values
        ('$nombre','$apellido','$cu','$sexo','$carrera')";

    $con->query($sql);

}
?>
<meta http-equiv="refresh" content="2;URL=ListaAlumnos.php">




