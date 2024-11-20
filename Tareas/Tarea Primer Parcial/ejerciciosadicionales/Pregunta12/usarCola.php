<?php 
include("cola.php");
session_start();


if(!isset($_SESSION['colita'])){
$_SESSION['colita'] = new Cola('normal');
}


if(isset($_GET['tipoColita'])){

$_SESSION['tipoColita'] = $_GET['tipoColita'];
}

print_r($_SESSION['tipoColita']);

if($_SESSION['tipoColita'] == "normal"){

    echo "<h1>BIENVENIDO A LA COLA NORMAL</h1> <br>";
    $_SESSION['colita']->mostrar();
?>



<a href="FormInsertarDetras.html">Añadir Elemento</a><br>

<a href="eliminar.php">Eliminar elemento de la Cola</a><br>


<?php
 
}else{
    echo "<h1>BIENVENIDO A LA COLA DE DOBLE ENTRADA</h1> <br>";
    $_SESSION['colita']->mostrar();
?>


<a href="FormInsertarDetras.html">Añadir Elemento por DETRAS</a><br>

<a href="FormInsertarDelante.html">Añadir Elemento por DELANTE</a><br>

<a href="eliminar.php">Eliminar elemento de la Cola</a><br>
<?php
    
}
?>
