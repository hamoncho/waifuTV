<?php
$servername = "localhost";
$username = "waifutv_user";
$password = "password123";
$dbname = "waifutv";// Crear conexión

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
