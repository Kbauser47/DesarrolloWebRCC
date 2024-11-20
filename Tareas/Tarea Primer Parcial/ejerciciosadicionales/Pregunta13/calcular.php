<?php
function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function factorial($n) {
    if ($n < 0) {
        return "Error: Factorial no definido para números negativos.";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];
    
    echo "<h2>Resultados para el número: $numero</h2>";
    echo "<a href='?opcion=fibonacci&numero=$numero'>Fibonacci</a><br>";
    echo "<a href='?opcion=factorial&numero=$numero'>Factorial</a><br>";

    if (isset($_GET['opcion'])) {
        $opcion = $_GET['opcion'];

        if ($opcion === 'fibonacci') {
            echo "<h3>El número de Fibonacci en la posición $numero es: " . fibonacci($numero) . "</h3>";
        } elseif ($opcion === 'factorial') {
            echo "<h3>El factorial de $numero es: " . factorial($numero) . "</h3>";
        }
    }
}
?>
