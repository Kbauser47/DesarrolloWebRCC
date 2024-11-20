<?php
include 'utiles.php';

if (isset($_GET['cadena']) && isset($_GET['guiones'])) {
    $cadena = $_GET['cadena'];
    $guiones = intval($_GET['guiones']);

    $utiles = new Utiles($cadena);

    echo "<h3>Resultado:</h3>";
    echo $utiles->aumentarGuiones($guiones);
} else {
    echo "Faltan parámetros para procesar la solicitud.";
}
?>
