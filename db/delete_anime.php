<?php
include '../db/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM animes WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Anime eliminado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
