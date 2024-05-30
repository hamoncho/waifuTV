<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fecha_estreno = $_POST["fecha_estreno"];
    $genero = $_POST["genero"];
    $url_cover = $_POST["url_cover"];
    $autor = $_POST["autor"];
    $estudio = $_POST["estudio"];

    $sql = "UPDATE animes SET titulo='$titulo', descripcion='$descripcion', fecha_estreno='$fecha_estreno', genero='$genero', url_cover='$url_cover', autor='$autor', estudio='$estudio' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Anime actualizado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
