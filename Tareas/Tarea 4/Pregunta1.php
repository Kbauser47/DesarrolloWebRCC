<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta1</title>
</head>
<body>
    
<?php

$numeros = range(1, 20);
    
$numerosPares = array();
$numerosImpares = array();

foreach ($numeros as $numero){
    if($numero % 2 == 0){
        $numerosPares[] = $numero;
    } else {
        $numerosImpares[] = $numero;
    }
}

echo "Números del 1 al 20: " . implode(", ", $numeros) . "<br>";
    
echo "Los números pares son: " . implode(", ", $numerosPares) . "<br>";

echo "Los números impares son: " . implode(", ", $numerosImpares) . "<br>";
    
?>
    
</body>
</html>