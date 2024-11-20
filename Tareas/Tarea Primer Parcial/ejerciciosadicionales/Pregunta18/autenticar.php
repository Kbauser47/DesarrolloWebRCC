<?php
session_start(); 

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if ($usuario === 'admin' && $contrasena === 'admin') {
    $_SESSION['usuario'] = 'admin'; 
} else {
    $_SESSION['usuario'] = 'usuario'; 
}

header('Location: acceso.php');
exit();
?>

