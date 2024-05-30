<?php
include '../db/db_connection.php';

$id = $_GET["id"];
$sql = "SELECT * FROM animes WHERE id=$id";
$result = $conn->query($sql);
$anime = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Anime</title>
</head>
<body>
    <h2>Actualizar Anime</h2>
    <form method="post" action="../db/update_anime.php">
        <input type="hidden" name="id" value="<?php echo $anime['id']; ?>">
        Título: <input type="text" name="titulo" value="<?php echo $anime['titulo']; ?>" required><br>
        Descripción: <textarea name="descripcion" required><?php echo $anime['descripcion']; ?></textarea><br>
        Fecha de Estreno: <input type="date" name="fecha_estreno" value="<?php echo $anime['fecha_estreno']; ?>" required><br>
        Género: <input type="text" name="genero" value="<?php echo $anime['genero']; ?>" required><br>
        URL del Cover: <input type="text" name="url_cover" value="<?php echo $anime['url_cover']; ?>"><br>
        Autor: <input type="text" name="autor" value="<?php echo $anime['autor']; ?>"><br>
        Estudio: <input type="text" name="estudio" value="<?php echo $anime['estudio']; ?>"><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
