<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor y Menor de 5 Números</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }
        .result-box {
            border: 2px solid red;
            padding: 20px;
            margin: 20px 0;
            width: 300px;
            text-align: center;
            font-size: 1.5em;
        }
    </style>
</head>
<body>

<?php
$numeros = [8, 23, 15, 42, 4];

$mayor = max($numeros);
$menor = min($numeros);

echo "<div class='result-box'>Número Mayor: $mayor</div>";
echo "<div class='result-box'>Número Menor: $menor</div>";

?>

</body>
</html>
