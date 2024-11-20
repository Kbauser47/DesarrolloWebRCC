<?php
require 'cola.php';

session_start(); 


if (!isset($_SESSION['cola'])) {
    $_SESSION['cola'] = new Cola('Normal'); 
}


$cola = $_SESSION['cola'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['operacion'])) {
        $operacion = $_POST['operacion'];

        if ($operacion == 'insertarDelante' && isset($_POST['elemento'])) {
            $elemento = $_POST['elemento'];
            $cola->insertarDelante($elemento);
        } elseif ($operacion == 'insertarDetras' && isset($_POST['elemento'])) {
            $elemento = $_POST['elemento'];
            $cola->insertarDetras($elemento);
        } elseif ($operacion == 'eliminar') {
            $elementoEliminado = $cola->eliminar();
            if ($elementoEliminado !== null) {
                echo "Elemento eliminado: $elementoEliminado<br>";
            } else {
                echo "La cola está vacía, no hay elementos para eliminar.<br>";
            }
        }
    }
}

// Guardar la cola actualizada en la sesión
$_SESSION['cola'] = $cola;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cola</title>
</head>
<body>
    <h2>Cola: Tipo - <?php echo $cola->getTipo(); ?></h2>
    <h3>Elementos en la Cola:</h3>
    <pre><?php print_r($cola->mostrar()); ?></pre>

    <h3>Operaciones:</h3>
    <form method="post">
        <label>Operación:</label><br>
        <select name="operacion">
            <option value="insertarDelante">Insertar Delante</option>
            <option value="insertarDetras">Insertar Detrás</option>
            <option value="eliminar">Eliminar</option>
        </select><br><br>

        <label>Elemento (solo para insertar):</label><br>
        <input type="text" name="elemento"><br><br>

        <input type="submit" value="Ejecutar">
    </form>
</body>
</html>

