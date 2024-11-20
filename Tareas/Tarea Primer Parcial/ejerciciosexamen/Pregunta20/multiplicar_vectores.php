<?php
session_start();


if (!isset($_SESSION["n"])) {
    echo "No se ha definido el valor de n. Por favor, regrese y complete el formulario.";
    exit();
}

$n = $_SESSION["n"];


$vector1 = [];
$vector2 = [];

for ($i = 0; $i < $n; $i++) {
    $vector1[] = rand(1, 10); 
    $vector2[] = rand(1, 10);
}

$resultado = 0;
for ($i = 0; $i < $n; $i++) {
    $resultado += $vector1[$i] * $vector2[$i];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicación de Vectores</title>
</head>
<body>
    <h2>Multiplicación de Vectores de 1x<?php echo $n; ?> y <?php echo $n; ?>x1</h2>
    <p>Vector 1 (1x<?php echo $n; ?>): <?php echo implode(", ", $vector1); ?></p>
    <p>Vector 2 (<?php echo $n; ?>x1): <?php echo implode(", ", $vector2); ?></p>
    <h3>Resultado de la multiplicación: <?php echo $resultado; ?></h3>
</body>
</html>
