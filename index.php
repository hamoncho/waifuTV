<?php
include './db/db_connection.php';

$sql = "SELECT id, titulo, descripcion, fecha_estreno, genero, url_cover, autor, estudio FROM animes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WaifuTV</title>
  <link rel="stylesheet" href="styles/home.css">
</head>

<body>
  <header>
    <div class="logo">
      <img src="source/img/logo/logo.png" width="30px" alt="tsukumichi">
      WaifuTV
    </div>

    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Películas</a></li>
        <li><a href="#">Series</a></li>
        <li><a href="#">Novedades</a></li>
        <li><a href="view/login.php">Login</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="hero">
      <div class="hero-text">
        <h1>Bienvenido a WaifuTV</h1>
        <p>Explora y disfruta de las mejores series Animes</p>
        <a href="./view/play.php?id_eps=2&id_anime=4" class="btn">Ver ahora</a>
      </div>
    </section>
    <section class="movies">
      <h2>Animes Populares</h2>
      <div class="movie-grid">
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

            echo '<a href="./view/play.php?id_anime='.$row["id"].'">
                  <div class="movie-item">
                    <img src="' . $row["url_cover"] . '" alt="tsukumichi">
                    <h3>' . $row["titulo"] . '</h3>
                  </div>
                  </a>';
          }
        } else {
          echo "<tr><td colspan='8'>No hay animes disponibles</td></tr>";
        }
        $conn->close();
        ?>

      </div>



    </section>
  </main>
  <footer>
    <p>&copy; 2024 WaifuTV. Todos los derechos reservados.</p>
  </footer>
</body>

</html>
