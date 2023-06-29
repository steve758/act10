<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "consulta";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida care verga: " . $conn->connect_error);
}

// Filtrar y consultar los datos
$sql = "SELECT * FROM usuarios WHERE apellido = 'Pérez'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos obtenidos
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nombre: " . $row["nombre"] . "<br>";
        echo "Apellido: " . $row["apellido"] . "<br>";
        echo "Cédula: " . $row["cedula"] . "<br><br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>
