
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
    <title>Dashboard - Eliminar Anime</title>
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
            <section id="eliminar-anime">
                <h2>Eliminar Anime</h2>
                <form method="post" action="../db/delete_anime.php">
                    <input type="hidden" name="id" value="<?php echo $anime['id']; ?>">
                    <p>¿Estás seguro de que deseas eliminar el anime "<strong><?php echo $anime['titulo']; ?></strong>"?</p>
                    <input type="submit" value="Eliminar">
                </form>
            </section>
        </main>
    </div>
</body>
</html>

