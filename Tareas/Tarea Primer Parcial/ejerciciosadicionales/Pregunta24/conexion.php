<?php
$con = new mysqli("localhost:3307", "root", "", "practicando");
if ($con->connect_error)
    die("conexion fallada" . $con->connect_error);
?>


