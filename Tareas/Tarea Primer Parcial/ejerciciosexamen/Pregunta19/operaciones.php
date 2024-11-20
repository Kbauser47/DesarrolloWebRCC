<?php

if (!isset($_COOKIE["numero"])) {
    echo "No se ha definido un número. Por favor, regrese y complete el formulario.";
    exit();
}

$numero = intval($_COOKIE["numero"]);
$opcion = isset($_GET["opcion"]) ? $_GET["opcion"] : "";

function calcularSumatoria($n) {
    return ($n * ($n + 1)) / 2;
}

function calcularFactorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

function calcularFibonacci($n) {
    $fibonacci = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

function dividirEntreDos($n) {
    return $n / 2;
}

echo "<h2>Resultado:</h2>";

switch ($opcion) {
    case "sumatoria":
        echo "La sumatoria desde 1 hasta $numero es: " . calcularSumatoria($numero);
        break;
    case "factorial":
        echo "El factorial de $numero es: " . calcularFactorial($numero);
        break;
    case "fibonacci":
        $fibonacci = calcularFibonacci($numero);
        echo "Los primeros $numero números de la serie Fibonacci son: " . implode(", ", $fibonacci);
        break;
    case "dividir":
        echo "$numero dividido entre 2 es: " . dividirEntreDos($numero);
        break;
    default:
        echo "Opción no válida.";
        break;
}
?>
