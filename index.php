<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Datos</title>
</head>
<body>
    <h2>Formulario de Datos</h2>

    <form method="GET" action="mostrar_datos.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br>

        <label for="cedula">Número de cédula:</label>
        <input type="text" name="cedula" id="cedula" required><br>

        <input type="submit" value="Enviar">
    </form>

    <h2>Datos del Usuario</h2>

    <?php
    // Verificar si se han enviado los datos mediante GET
    if (isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['cedula'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cedula'];

        // Mostrar los datos capturados
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $apellido . "<br>";
        echo "Cédula: " . $cedula . "<br>";
    }
    ?>
</body>
</html>
