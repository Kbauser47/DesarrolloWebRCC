<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }

        th, td{
            border: 2px solid black;
            padding: 8px;
        }
        
        .rojo{
            background-color: red;
        }
        .amarillo{
            background-color: yellow;
        }
        .verde{
            background-color: green;
        }
    </style>
</head>

<body>

    <?php


    $filas = $_POST["filas"];
    $columnas = $_POST["columnas"];

    echo "<table>";


    for ($i = 4; $i < $filas + 4; $i++) {
        ?>
        <tr class='<?php
        if ($i % 3 == 1) {
            echo "rojo";
        } elseif ($i % 3 == 2) {
            echo "amarillo";
        } else {
            echo "verde";
        }

        ?>'><?php

        for ($j = 1; $j <= $columnas; $j++) {


            ?>
                <td></td>
            <?php

        }

        echo "</tr>";

    }


    echo "</table>";
    ?>
</body>

</html>