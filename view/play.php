<?php
include '../db/db_connection.php';

$id_anime = $_GET["id_anime"];

$sql_eps = "SELECT e.id, e.id_anime, e.numero_episodio, e.titulo, e.url_video, e.fecha_publicacion, a.titulo as anime_titulo 
        FROM episodios e 
        JOIN animes a ON e.id_anime = a.id WHERE e.id_anime = " . $id_anime;
$result_eps = $conn->query($sql_eps);
$result_eps_default = $conn->query($sql_eps);
$eps_default = $result_eps_default->fetch_assoc();


if(isset($_GET["id_eps"])){
  $id_eps = $_GET["id_eps"];
}else{
  $id_eps = $eps_default['id'];
}

$sql = "SELECT * FROM animes WHERE id=$id_anime";
$result = $conn->query($sql);
$anime = $result->fetch_assoc();


$sql_eps_play = "SELECT e.id, e.id_anime, e.numero_episodio, e.titulo, e.url_video, e.fecha_publicacion, a.titulo as anime_titulo 
        FROM episodios e 
        JOIN animes a ON e.id_anime = a.id WHERE e.id = " . $id_eps;
$result_eps_play = $conn->query($sql_eps_play);
$eps_play = $result_eps_play->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaifuTV</title>
    <link rel="stylesheet" href="../styles/play.css">
</head>
<body>
    <header>

    <a href="../index.php" class="logo">
      <img src="../source/img/logo/logo.png" width="30px" alt="tsukumichi">
      WaifuTV
    </a>

        <nav>
            <ul>
                <li><a href="#">Películas</a></li>
                <li><a href="#">Series</a></li>
                <li><a href="#">Novedades</a></li>
                <li><a href="../view/login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="movie-player">
            <div class="player-container">
            <iframe width="100%"  src="https://www.youtube.com/embed/<?php echo $eps_play['url_video']; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="movie-details">
            <h2><?php echo $eps_play['titulo'];?></h2>
            <h3>Episodio <?php echo $eps_play['numero_episodio'];?></h3>
            <p><?php echo $anime['descripcion'] ?></p>
                <div class="movie-meta">
                <span>Género: <?php echo $anime['genero']; ?></span>
                <span>Fecha De Publicación: <?php echo $eps_play['fecha_publicacion']; ?></span>
                </div>
            </div>
        </section>
        <section class="next-episodes">
            <h2>Siguientes Episodios</h2>
            <ul>
 <?php
        if ($result_eps->num_rows > 0) {
            while($row_eps = $result_eps->fetch_assoc()) {
              echo "
                        <li><a href='./play.php?id_eps=" . $row_eps["id"] . "&id_anime=". $row_eps["id_anime"] ."'> ".$row_eps['titulo'] . "</a></li>
                      ";
            }
        } else {
            echo "<li>No hay episodios disponibles</li>";
        }
        $conn->close();
        ?>
            </ul>
        </section>

    </main>
    <footer>
        <p>&copy; 2024 WaifuTV. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

