<?php
include '../db/db_connection.php';

$id = $_GET["id"];
$sql = "SELECT * FROM animes WHERE id=$id";
$result = $conn->query($sql);
$anime = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Actualizar Anime</title>
    <link rel="stylesheet" href="../styles/admin.css">
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="admin.php#ver-animes">Ver Animes</a></li>
                <li><a href="admin.php#crear-anime">Crear Anime</a></li>
            </ul>
        </aside>
        <main class="content">
            <section id="actualizar-anime">
                <h2>Actualizar Anime</h2>
                <form method="post" action="../db/update_anime.php">
                    <input type="hidden" name="id" value="<?php echo $anime['id']; ?>">
                    <label for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo" value="<?php echo $anime['titulo']; ?>" required><br>
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" required><?php echo $anime['descripcion']; ?></textarea><br>
                    <label for="fecha_estreno">Fecha de Estreno:</label>
                    <input type="date" id="fecha_estreno" name="fecha_estreno" value="<?php echo $anime['fecha_estreno']; ?>" required><br>
                    <label for="genero">Género:</label>
                    <input type="text" id="genero" name="genero" value="<?php echo $anime['genero']; ?>" required><br>
                    <label for="url_cover">URL del Cover:</label>
                    <input type="text" id="url_cover" name="url_cover" value="<?php echo $anime['url_cover']; ?>"><br>
                    <label for="autor">Autor:</label>
                    <input type="text" id="autor" name="autor" value="<?php echo $anime['autor']; ?>"><br>
                    <label for="estudio">Estudio:</label>
                    <input type="text" id="estudio" name="estudio" value="<?php echo $anime['estudio']; ?>"><br>
                    <input type="submit" value="Actualizar">
                </form>
            </section>
        </main>
    </div>
</body>
</html>

