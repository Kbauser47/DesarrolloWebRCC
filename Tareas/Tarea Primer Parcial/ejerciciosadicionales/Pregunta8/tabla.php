<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Generada</title>
    <style>
        table {
            border-collapse: collapse;
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
    $filas = $_POST["filas"];
    $columnas = $_POST["columnas"];

    echo "<table>";
    for ($i = 0; $i <= $filas; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= $columnas; $j++) {
            if ($i == 0 && $j == 0) {
                echo "<th></th>";
            } elseif ($i == 0) {
                echo "<th>$j</th>";
            } elseif ($j == 0) {
                echo "<th>$i</th>";
            } else {
                echo "<td>" . ($i * $j) . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>