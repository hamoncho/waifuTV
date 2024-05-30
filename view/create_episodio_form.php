
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Crear Episodio</title>
    <link rel="stylesheet" href="../styles/admin.css">
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="./admin.php#crear-anime">Crear Anime</a></li>
                <li><a href="./admin.php#ver-animes">Ver Animes</a></li>
                <li><a href="../logout.php">Cerrar Sesion</a></li>
            </ul>
        </aside>
        <main class="content">
            <section id="crear-episodio">
                <h2>Crear Nuevo Episodio</h2>
                <form method="post" action="../db/create_episodio.php">
                    <input type="hidden" name="id_anime" value="<?php echo $anime['id']; ?>">
                    <label for="numero_episodio">Número de Episodio:</label>
                    <input type="number" id="numero_episodio" name="numero_episodio" required><br>
                    <label for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo" required><br>
                    <label for="url_video">URL del Video:</label>
                    <input type="text" id="url_video" name="url_video" required><br>
                    <label for="fecha_publicacion">Fecha de Publicación:</label>
                    <input type="date" id="fecha_publicacion" name="fecha_publicacion" required><br>
                    <input type="submit" value="Crear">
                </form>
            </section>

            <section id="ver-episodios">
                <h2>Lista de Episodios</h2>
                <div class="anime-cards">
                    <?php
                    if ($result_eps->num_rows > 0) {
                        while($row_eps = $result_eps->fetch_assoc()) {
                            echo "<div class='card'>
                                    <h3>" . $row_eps["titulo"] . "</h3>
                                    <p><strong>Anime:</strong> " . $row_eps["anime_titulo"] . "</p>
                                    <p><strong>Número de Episodio:</strong> " . $row_eps["numero_episodio"] . "</p>
                                    <p><strong>Fecha de Publicación:</strong> " . $row_eps["fecha_publicacion"] . "</p>
                                    <a href='https://www.youtube.com/watch?v=" . $row_eps["url_video"] . "'>Ver Video</a>
                                  </div>";
                        }
                    } else {
                        echo "<p>No hay episodios disponibles</p>";
                    }
                    $conn->close();
                    ?>
                </div>
            </section>
        </main>
    </div>
</body>
</html>

