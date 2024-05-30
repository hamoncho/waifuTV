<?php
include '../db/db_connection.php';

$sql = "SELECT id, titulo, descripcion, fecha_estreno, genero, url_cover, autor, estudio FROM animes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Crear Anime</title>
  <link rel="stylesheet" href="../styles/admin.css">
</head>

<body>
  <div class="dashboard">
    <aside class="sidebar">
      <div class="sidebar-header">
        <h2>Dashboard</h2>
      </div>
      <ul class="sidebar-menu">
        <li><a href="#ver-animes">Ver Animes</a></li>
        <li><a href="#crear-anime">Crear Anime</a></li>
      </ul>
    </aside>
    <main class="content">
      <section id="ver-animes">
        <h2>Lista de Animes</h2>
        <div class="anime-cards">
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo  "<div class='card'>
                      <div>
                      <img src='" . $row["url_cover"] . "' alt='_blank'/>
                      <a class='btn' href='./create_episodios.php?id=".$row['id']."'>Agregar Episodios</a>
                      <a class='btn' href='./update_anime_form.php?id=".$row['id']."'>Editar</a>
                      <a class='btn-red' href='./delete_anime_form.php?id=".$row['id']."'>Eliminar</a>

                     </div> 
                      <div class='card-detalles'>
                      <h3>" . $row["titulo"] . "</h3>
                      <p><strong>Descripción:</strong> " . $row["descripcion"] . "</p>
                      <p><strong>Fecha de Estreno:</strong> " . $row["fecha_estreno"] . "</p>
                      <p><strong>Género:</strong> " . $row["genero"] . "</p>
                      <p><strong>Autor:</strong> " . $row["autor"] . "</p>
                      <p><strong>Estudio:</strong> " . $row["estudio"] . "</p>
                      </div>
                     </div>";
            }
          } else {
            echo "<p>No hay animes disponibles</p>";
          }
          $conn->close();
          ?>
        </div>
      </section>

      <section id="crear-anime">
        <h2>Crear Nuevo Anime</h2>
        <form method="post" action="../db/create_anime.php">
          <label for="titulo">Título:</label>
          <input type="text" id="titulo" name="titulo" required><br>
          <label for="descripcion">Descripción:</label>
          <textarea id="descripcion" name="descripcion" required></textarea><br>
          <label for="fecha_estreno">Fecha de Estreno:</label>
          <input type="date" id="fecha_estreno" name="fecha_estreno" required><br>
          <label for="genero">Género:</label>
          <input type="text" id="genero" name="genero" required><br>
          <label for="url_cover">URL del Cover:</label>
          <input type="text" id="url_cover" name="url_cover"><br>
          <label for="autor">Autor:</label>
          <input type="text" id="autor" name="autor"><br>
          <label for="estudio">Estudio:</label>
          <input type="text" id="estudio" name="estudio"><br>
          <input type="submit" value="Crear">
        </form>
      </section>

    </main>
  </div>
</body>

</html>
