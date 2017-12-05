-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tcg
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fotos_recetas`
--

DROP TABLE IF EXISTS `fotos_recetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fotos_recetas` (
  `id_recetas` int(11) NOT NULL,
  `ruta_foto` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `num_paso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fotos_recetas`
--

LOCK TABLES `fotos_recetas` WRITE;
/*!40000 ALTER TABLE `fotos_recetas` DISABLE KEYS */;
INSERT INTO `fotos_recetas` VALUES (1,'paso_1.webp',1),(1,'paso_2.webp',2),(1,'paso_3.webp',3),(1,'paso_4.webp',4),(1,'paso_5.webp',5),(1,'paso_6.webp',6),(1,'paso_7.webp',7),(1,'paso_8.webp',8),(1,'paso_9.webp',9),(1,'paso_10.webp',10),(1,'paso_11.webp',11),(1,'paso_12.webp',12);
/*!40000 ALTER TABLE `fotos_recetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredientes`
--

DROP TABLE IF EXISTS `ingredientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredientes` (
  `idIngredientes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_ingrediente` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idIngredientes`),
  UNIQUE KEY `idIngredientes_UNIQUE` (`idIngredientes`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredientes`
--

LOCK TABLES `ingredientes` WRITE;
/*!40000 ALTER TABLE `ingredientes` DISABLE KEYS */;
INSERT INTO `ingredientes` VALUES (1,'Harina de trigo'),(2,'Azúcar extafina'),(3,'Huevo'),(4,'Chocolate en polvo'),(5,'Mantequilla'),(6,'Margarina'),(7,'Polvo de hornear'),(8,'Chispas de chocolate'),(9,'Sal'),(10,'Azúcar');
/*!40000 ALTER TABLE `ingredientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredientes_receta`
--

DROP TABLE IF EXISTS `ingredientes_receta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredientes_receta` (
  `id_ingrediente` int(11) NOT NULL,
  `id_receta` int(11) NOT NULL,
  `cantidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredientes_receta`
--

LOCK TABLES `ingredientes_receta` WRITE;
/*!40000 ALTER TABLE `ingredientes_receta` DISABLE KEYS */;
INSERT INTO `ingredientes_receta` VALUES (1,1,'55 g'),(2,1,'225 g'),(3,1,'2'),(4,1,'3 cda'),(5,1,'55 g'),(7,1,'1/4 cdta'),(8,1,'170 g'),(9,1,'1/4 cdta'),(10,1,'');
/*!40000 ALTER TABLE `ingredientes_receta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasos_receta`
--

DROP TABLE IF EXISTS `pasos_receta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasos_receta` (
  `id_receta` int(11) NOT NULL,
  `pasos` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ruta_foto` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `num_paso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasos_receta`
--

LOCK TABLES `pasos_receta` WRITE;
/*!40000 ALTER TABLE `pasos_receta` DISABLE KEYS */;
INSERT INTO `pasos_receta` VALUES (1,'Precalienta el horno a 190 ºC (375 ºF).','paso_1.webp',1),(1,'Engrasa y forra una bandeja para hornear de 20 x 20 cm (9 x 9 pulgadas) de unos 3 cm (1 pulgada) de profundidad. También si quieres, podrás forrar la bandeja con papel aluminio.','paso_2.webp',2),(1,'Derrite la mantequilla o margarina en una cacerola pequeña a fuego lento. Mientras esté derritiéndose, haz los dos siguientes pasos. Se supone que derretirla te tomará 1 o 2 minutos. Se derretirá más rápidamente si antes está a temperatura ambiente.','paso_3.webp',3),(1,'Mezcla la azúcar extrafina y los huevos en un tazón por separado. Vierte la azúcar y los huevos a un tazón mediano y revuelve los ingredientes hasta que estén bien integrados. Te tomará 1 minuto. Podrás hacerlo con una cuchara de palo, un batidor manual o incluso una batidora eléctrica.','paso_4.webp',4),(1,'Mezcla la harina y el chocolate en polvo en un tazón separado. Luego, vierte esos ingredientes en un tazón separado y revuélvelos hasta que estén completamente integrados.','paso_5.webp',5),(1,'Vierte la mantequilla derretida en la mezcla de azúcar y huevo. Luego, revuelve hasta que la mantequilla esté bien integrada. Así tendrás una mezcla cremosa y de color amarillo claro.','paso_6.webp',6),(1,'Tamiza la mezcla de cacao dentro de la mezcla de huevo poco a poco. Solo vierte los ingredientes en un tamizador y sacúdelo suavemente para que se airee mientras la mezcla de cacao cae a la mezcla de huevo. Incluso podrás pasar suavemente un tenedor en el fondo del colador para que el cacao se tamice mejor.','paso_7.webp',7),(1,'Añade las chispas de chocolate en la masa. Ahora podrás agregar las chispas de chocolate al resto de los ingredientes. Podrás usar las chispas regulares o las mini chispas, si las quieres usar. Si quieres experimentar y variar un poco las cosas, también podrás optar por las chispas de chocolate blanco.','paso_8.webp',8),(1,'Vierte la mezcla en la bandeja para hornear. Como la bandeja ya está enmantequillada, estará lista para que eches la masa. Uniformiza la masa con un batidor de mano o un cuchillo. No tendrá que estar perfectamente uniforme, pero procura distribuirla lo más uniformemente que puedas para que todos los brownies salgan con una altura parecida.','paso_9.webp',9),(1,'Introduce la bandeja en la rejilla del medio del horno y hornéala durante 30 minutos. Después del minuto 25, sigue revisando los brownies para que no se quemen. Incluso podrías hacer la limpieza mientras esperas a que se horneen. Si rondas por la cocina mientras los brownies empiezan a solidificarse, ¡te darán muchas más ganas de comértelos!','paso_10.webp',10),(1,'Saca los brownies del horno y déjalos enfriar. Espera al menos 5 minutos para que enfríen. A su vez, se solidificarán un poco. Si los cortas mientras todavía estén enfriando, será más difícil hacer cortes limpios.','paso_11.webp',11),(1,'Corta los brownies en trozos masticables. Podrás cortarlos en trozos pequeños para que te los puedas comer de un solo mordisco. También podrás cortar brownies más grandes para que cada porción sea más sustanciosa. ','paso_12.webp',12);
/*!40000 ALTER TABLE `pasos_receta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recetas`
--

DROP TABLE IF EXISTS `recetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recetas` (
  `idrecetas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_receta` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `costo_aprox` double NOT NULL,
  `foto` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idrecetas`),
  UNIQUE KEY `idrecetas_UNIQUE` (`idrecetas`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recetas`
--

LOCK TABLES `recetas` WRITE;
/*!40000 ALTER TABLE `recetas` DISABLE KEYS */;
INSERT INTO `recetas` VALUES (1,'Brownies','2017-11-29',200,'brownie_demicroondas.jpg'),(2,'Hamburgesa con Queso','2017-11-29',150,'brownie_demicroondas.jpg'),(3,'Pechuga de pollo a la parrilla','2017-11-29',220,'brownie_demicroondas.jpg'),(4,'Club Sandwich','2017-11-29',140,'brownie_demicroondas.jpg'),(5,'Caldo de Pollo','2017-11-29',350,'brownie_demicroondas.jpg');
/*!40000 ALTER TABLE `recetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nombre_usuario` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_usuario` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `correo_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idusuarios`),
  UNIQUE KEY `idusuarios_UNIQUE` (`idusuarios`),
  UNIQUE KEY `corre_usuario_UNIQUE` (`correo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
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

-- Dump completed on 2017-12-05  9:08:07
