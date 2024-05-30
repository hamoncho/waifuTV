<?php
include 'db_connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre_usuario = $_POST["username"];
  $contrasena = $_POST["password"];

  $sql = "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    if ($contrasena === $usuario['contrasena']) {
      $_SESSION['username'] = $usuario['nombre_usuario'];
      if ($usuario['nombre_usuario'] === 'admin') {
        header("Location: ../view/admin.php");
      } else {
        header("Location: ../index.php");
      }
    } else {
      echo "Contraseña incorrecta";
    }
  } else {
    echo "Usuario no encontrado";
  }

  $conn->close();
}
