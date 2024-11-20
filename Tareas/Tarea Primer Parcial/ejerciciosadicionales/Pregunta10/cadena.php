<?php
$cadena = $_GET['cadena'];
echo "<h1>Cadena ingresada:</h1>";
echo "<p>$cadena</p>";



function encontrarScript($oracion)
{
    $palabras = explode(" ", $oracion);
    foreach ($palabras as $palabra) {
        if ($palabra == "SCRIPT") {
            return true;
        }
    }
    return false;
}





if (encontrarScript($cadena)) {
    echo "La oracion tiene la Palabra scritp <br>";
    echo "Nueva Oración sin SCRIPT: <br>";
    

    $palabras = explode(" ", $cadena);
    foreach ($palabras as $valor=>$palabra) {
        if ($palabra == "SCRIPT") {
            $posicion = $valor;
        } 
    }

    foreach ($palabras as $nuevoValor=>$nuevaPalabra){
        if($nuevoValor!=$posicion){
           echo $nuevaPalabra. " ";
        }

    };



} else {
    echo "No se encontro la Palabra SCRIPT";
}

?>