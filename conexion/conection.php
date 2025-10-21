<?php
// Parámetros de conexión
$servername = "localhost";
$username = "root";      // usuario por defecto en XAMPP
$password = "";          // por defecto viene vacío
$database = "database"; // nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
}

// Si llega acá, la conexión fue exitosa
// echo "✅ Conexión exitosa a la base de datos";
?>
