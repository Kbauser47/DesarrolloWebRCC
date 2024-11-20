<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["n"])) {

    $_SESSION["n"] = intval($_GET["n"]);

    header("Location: multiplicar_vectores.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Valor de n</title>
</head>
<body>
    <h2>Ingrese el valor de n</h2>
    <form method="get" action="">
        <label for="n">n:</label>
        <input type="number" id="n" name="n" required>
        <input type="submit" value="Guardar y Continuar">
    </form>
</body>
</html>
