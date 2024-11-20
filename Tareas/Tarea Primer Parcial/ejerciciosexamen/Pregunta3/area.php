<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$b = $_GET["b"];
$h = $_GET["h"];

$a = ($b*$h)/2;
?>

<h1>El área del triangulo es: <?php echo $a ?></h1>
</body>
</html>


