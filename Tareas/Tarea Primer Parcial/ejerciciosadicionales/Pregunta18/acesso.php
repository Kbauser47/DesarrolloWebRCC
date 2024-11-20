<?php
session_start(); 


if (!isset($_SESSION['usuario'])) {
    echo "No has iniciado sesión.";
    exit();
}


echo "<h2>Usuario: " . $_SESSION['usuario'] . "</h2>";


if ($_SESSION['usuario'] === 'admin') {
    echo "<h3>Menú Admin:</h3>";
    echo "<ul>
            <li><a href='crear.php'>Crear</a></li>
            <li><a href='listar.php'>Listar</a></li>
            <li><a href='borrar.php'>Borrar</a></li>
            <li><a href='salir.php'>Salir</a></li>
          </ul>";
} else {
    echo "<h3>Menú Usuario:</h3>";
    echo "<ul>
            <li><a href='listar.php'>Listar</a></li>
          </ul>";
}
?>
