<?php
session_start();
require 'estante.php';

$estante = unserialize($_SESSION['estante']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['operacion'])) {
        $operacion = $_POST['operacion'];
        
        if ($operacion == 'insertar' && isset($_POST['fila']) && isset($_POST['libro'])) {
            $fila = (int)$_POST['fila'];
            $libro = $_POST['libro'];
            $estante->insertarLibro($fila, $libro);
        } elseif ($operacion == 'mostrar' && isset($_POST['fila'])) {
            $fila = (int)$_POST['fila'];
            $elementos = $estante->mostrar($fila);
            echo "Elementos en la fila $fila: " . implode(", ", $elementos) . "<br>";
        } elseif ($operacion == 'mostrar_todo') {
            $armario = $estante->mostrarArmario();
            foreach ($armario as $key => $fila) {
                echo strtoupper($key) . ": " . implode(", ", $fila) . "<br>";
            }
        }
    }

    $_SESSION['estante'] = serialize($estante);
}
?>

<h2>Menú del Estante</h2>
<form method="post" action="">
    <label>Operación:</label><br>
    <select name="operacion">
        <option value="insertar">Insertar Libro</option>
        <option value="mostrar">Mostrar Fila</option>
        <option value="mostrar_todo">Mostrar Armario</option>
    </select><br><br>

    <label>Fila (1-3):</label><br>
    <input type="number" name="fila" min="1" max="3"><br><br>

    <label>Libro (solo para insertar):</label><br>
    <input type="text" name="libro"><br><br>

    <input type="submit" value="Ejecutar">
</form>
