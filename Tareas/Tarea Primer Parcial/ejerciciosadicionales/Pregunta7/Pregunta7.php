<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            background-color: green;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            font-weight: bold;
            color: gray;
        }
    </style>
</head>
<body>

<?php 

$a = $_POST['a'];

$b = $_POST['b'];

function suma($a,$b){

    $suma = $a + $b;

    return $suma;
}

$result = suma($a,$b);
?>

<div class="tabla">
<table>

<tr>
    <td><?php echo $a?></td>
    <td> + </td>
    <td><?php echo $b ?></td>
    <td> = </td>
    <td><?php echo $result ?></td>
    
</tr>

</table>
</div>    
</body>
</html>

