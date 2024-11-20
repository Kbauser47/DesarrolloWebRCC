<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="autenticar.php" method="post">
        <label for="usuario">Usuario:</label><br>
        <input type="text" name="usuario" id="usuario" required><br><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" name="contrasena" id="contrasena" required><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
