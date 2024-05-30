-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: waifutv
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `animes`
--

DROP TABLE IF EXISTS `animes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `animes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text,
  `fecha_estreno` date DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `url_cover` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `estudio` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animes`
--

LOCK TABLES `animes` WRITE;
/*!40000 ALTER TABLE `animes` DISABLE KEYS */;
INSERT INTO `animes` VALUES (3,'Dr. Stone','Dr. Stone (ドクターストーン Dokutā Sutōn?), estilizado como Dr. STONE, es un manga de ficción post-apocalíptico escrito por Riichiro Inagaki (escritor de Eyeshield 21) e ilustrado por Boichi (autor de Sun-Ken Rock). La historia cuenta las aventuras de Senku y Taiju, dos adolescentes que se ven atrapados en un mundo post-apocalíptico en el que la raza humana se ha convertido en piedra y ellos buscan la manera de revertir la petrificación en la mayor cantidad de personas posibles, para así reconstruir la sociedad tal como la conocieron.','2017-03-06','Aventura, ciencia ficción apocalíptica, comedia','https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=1200,height=675/catalog/crunchyroll/f3accca2b543e1d3b7b9533ca55d2119.jpe','Riichiro Inagaki','TMS Entertainment'),(4,'Kaiju No. 8','Japón es constantemente invadido por criaturas llamadas “kaiju”, Monstruos de diferentes formas y tamaños que causan catástrofes y destrucción donde quiera que van. Debido a ello, existe el \"Cuerpo de Defensa\", un servicio que se encargan de aniquilar y asesinar a los kaijuu cuando llegan a las ciudades, y el \"Monster Sweeper\", un servicio que se encarga de limpiar los cadáveres de los kaijuu en las ciudades cuando estos son exterminados por el Cuerpo de Defensa. Kafka Hibino es un hombre de 32 años que trabaja en \"Monster Sweeper\", pero que anteriormente aspiraba a trabajar en el Cuerpo de Defensa, pero se rindió con el paso de los años, de hecho, había hecho una promesa en su niñez con su amiga de la infancia de entrar al cuerpo y combatir juntos, pero en este punto, el ya lo veía imposible. ','0204-04-13','Acción, horror, sobrenatural, ciencia ficción fantástica, aventura','https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=1200,height=675/catalog/crunchyroll/e66d5a8f5167c8bc7a7fd5baa52961c5.jpe','Naoya Matsumoto','Production I.G'),(5,'Demon Slayer','Nos encontramos en la Era Taisho en Japón, la historia se centra en un joven llamado Tanjiro Kamado; un joven inteligente y de buen corazón que vive con su familia en las montañas, el cual se ha convertido en la única fuente de ingresos de su familia tras el fallecimiento de su padre, haciendo viajes constantes al pueblo cercano para vender carbón. Sin embargo, toda su vida cotidiana cambia radicalmente cuando en uno de estos viajes, regresa a casa y descubre que toda su familia había sido asesinada por un poderoso demonio llamado Muzan Kibutsuji, siendo únicamente su hermana menor llamada Nezuko Kamado la única sobreviviente de aquel incidente, pero mientras trata de llevar a Nezuko al pueblo cercano para pedir ayuda, inesperadamente su hermana se despierta en pleno trayecto y se transforma en una demonio y trata de atacar a Tanjiro, pero a pesar de su condición, Nezuko aún guarda signos de recuerdos, emociones y pensamiento humanos y trata en todo lo posible por no matar a su hermano. ','2019-04-06','Acción, aventura,​ comedia, drama, fantasía oscura, histórico, sobrenatural','https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=1200,height=675/catalog/crunchyroll/6b17182a3518d7406f0e69687f773f4f.jpe','Koyoharu Gotōge','Ufotable'),(6,'Hells Paradise','Capturado durante una misión de asesinato, Gabimaru es sentenciado a ser ejecutado, pero nada parece matarlo debido a su cuerpo sobrehumano. Creyendo que su amor por su esposa lo mantiene inconscientemente vivo, la verdugo Yamada Asaemon Sagiri le ofrece la oportunidad de ser perdonado de todos los crímenes por el shogunato si encuentra el elixir de la vida en Shinsenkyo, un reino legendario recientemente descubierto al suroeste del Reino de Ryūkyū. ','2023-04-01','Acción, aventura, fantasía','https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=1200,height=675/catalog/crunchyroll/4d79ae401c93ecfef612a5f0bb0928f3.jpe','Yūji Kaku','MAPPA');
/*!40000 ALTER TABLE `animes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `id_episodio` int DEFAULT NULL,
  `comentario` text,
  `fecha_comentario` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_episodio` (`id_episodio`),
  CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_episodio`) REFERENCES `episodios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `episodios`
--

DROP TABLE IF EXISTS `episodios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `episodios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_anime` int DEFAULT NULL,
  `numero_episodio` int DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `url_video` varchar(255) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_anime` (`id_anime`),
  CONSTRAINT `episodios_ibfk_1` FOREIGN KEY (`id_anime`) REFERENCES `animes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `episodios`
--

LOCK TABLES `episodios` WRITE;
/*!40000 ALTER TABLE `episodios` DISABLE KEYS */;
/*!40000 ALTER TABLE `episodios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(100) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_usuario` (`nombre_usuario`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-29 18:32:15
