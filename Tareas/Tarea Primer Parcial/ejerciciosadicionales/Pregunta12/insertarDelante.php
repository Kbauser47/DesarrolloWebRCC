<?php

include("cola.php");

session_start();

$_SESSION['colita']->insertarDelante($_GET['nuevoElemento']);


?>

<h3>se inserto el elemento con exito por DELANTE</h3>

<meta http-equiv="refresh" content="3;URL=usarCola.php">
