
<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fecha_estreno = $_POST["fecha_estreno"];
    $genero = $_POST["genero"];
    $url_cover = $_POST["url_cover"];
    $autor = $_POST["autor"];
    $estudio = $_POST["estudio"];

    $sql = "INSERT INTO animes (titulo, descripcion, fecha_estreno, genero, url_cover, autor, estudio) VALUES ('$titulo', '$descripcion', '$fecha_estreno', '$genero', '$url_cover', '$autor', '$estudio')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo anime creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

