<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = intval($_POST["numero"]);

    setcookie("numero", $numero, time() + 3600);
    
    header("Location: menu.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Número</title>
</head>
<body>
    <h2>Ingrese un número</h2>
    <form method="post" action="">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Guardar y Continuar">
    </form>
</body>
</html>
