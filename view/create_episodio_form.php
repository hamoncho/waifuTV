<?php
include '../db/db_connection.php';

$id = $_GET["id"];
$sql = "SELECT * FROM animes WHERE id=$id";
$result = $conn->query($sql);
$anime = $result->fetch_assoc();

$sql_eps = "SELECT e.id, e.id_anime, e.numero_episodio, e.titulo, e.url_video, e.fecha_publicacion, a.titulo as anime_titulo 
        FROM episodios e 
        JOIN animes a ON e.id_anime = a.id WHERE e.id_anime = " . $id;
$result_eps = $conn->query($sql_eps);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Episodio</title>
</head>
<body>

<section>
    <h2>Crear Nuevo Episodio</h2>
    <form method="post" action="../db/create_episodio.php">
        <input type="hidden" name="id_anime" value="<?php echo $anime['id']; ?>">
        Número de Episodio: <input type="number" name="numero_episodio" required><br>
        Título: <input type="text" name="titulo" required><br>
        URL del Video: <input type="text" name="url_video" required><br>
        Fecha de Publicación: <input type="date" name="fecha_publicacion" required><br>
        <input type="submit" value="Crear">
    </form>
</section>

<section>
<h2>Lista de Episodios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Anime</th>
            <th>Número de Episodio</th>
            <th>Título</th>
            <th>URL del Video</th>
            <th>Fecha de Publicación</th>
        </tr>
        <?php
        if ($result_eps->num_rows > 0) {
            while($row_eps = $result_eps->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row_eps["id"]. "</td>
                        <td>" . $row_eps["anime_titulo"]. "</td>
                        <td>" . $row_eps["numero_episodio"]. "</td>
                        <td>" . $row_eps["titulo"]. "</td>
                        <td><a href='https://www.youtube.com/watch?v=" . $row_eps["url_video"] . "'>Ver Video</a></td>
                        <td>" . $row_eps["fecha_publicacion"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No hay episodios disponibles</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</section>
</body>
</html>
