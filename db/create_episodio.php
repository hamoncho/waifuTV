<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_anime = $_POST["id_anime"];
    $numero_episodio = $_POST["numero_episodio"];
    $titulo = $_POST["titulo"];
    $url_video = $_POST["url_video"];
    $fecha_publicacion = $_POST["fecha_publicacion"];

    $sql = "INSERT INTO episodios (id_anime, numero_episodio, titulo, url_video, fecha_publicacion) VALUES ('$id_anime', '$numero_episodio', '$titulo', '$url_video', '$fecha_publicacion')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo episodio creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
