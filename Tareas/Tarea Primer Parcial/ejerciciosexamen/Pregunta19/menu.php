<?php

if (!isset($_COOKIE["numero"])) {
    echo "No se ha definido un número. Por favor, regrese y complete el formulario.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Operaciones</title>
</head>
<body>
    <h2>Seleccione una operación:</h2>
    <ul>
        <li><a href="operaciones.php?opcion=sumatoria">Sumatoria</a></li>
        <li><a href="operaciones.php?opcion=factorial">Factorial</a></li>
        <li><a href="operaciones.php?opcion=fibonacci">Fibonacci</a></li>
        <li><a href="operaciones.php?opcion=dividir">Dividir</a></li>
    </ul>
</body>
</html>
