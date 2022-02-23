-- MariaDB dump 10.19  Distrib 10.6.5-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: mariadb    Database: database
-- ------------------------------------------------------
-- Server version	10.6.5-MariaDB-1:10.6.5+maria~focal

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `database`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `database` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `database`;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (0,'Solo'),(1,'Multijoueur'),(2,'Action'),(3,'Jeu de rôle'),(4,'Aventure'),(5,'Tir'),(6,'Plateforme'),(7,'Indépendant'),(8,'Course'),(9,'Stratégie'),(10,'Rythme');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_game`
--

DROP TABLE IF EXISTS `category_game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_game` (
  `id_category` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  PRIMARY KEY (`id_category`,`id_game`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `category_game_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
  CONSTRAINT `category_game_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_game`
--

LOCK TABLES `category_game` WRITE;
/*!40000 ALTER TABLE `category_game` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `developper`
--

DROP TABLE IF EXISTS `developper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `developper` (
  `id_developper` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_developper`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developper`
--

LOCK TABLES `developper` WRITE;
/*!40000 ALTER TABLE `developper` DISABLE KEYS */;
INSERT INTO `developper` VALUES (0,'Santa Monica Studio'),(1,'Ubisoft'),(2,'CD PROJEKT RED'),(3,'Crystal Dynamics'),(4,'Square Enix');
/*!40000 ALTER TABLE `developper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `editor`
--

DROP TABLE IF EXISTS `editor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `editor` (
  `id_editor` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_editor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editor`
--

LOCK TABLES `editor` WRITE;
/*!40000 ALTER TABLE `editor` DISABLE KEYS */;
INSERT INTO `editor` VALUES (0,'PlayStation PC LLC'),(1,'Ubisoft'),(2,'CD PROJEKT RED'),(3,'Square Enix');
/*!40000 ALTER TABLE `editor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game` (
  `id_game` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dateLaunch` date NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `youtubeLink` varchar(250) NOT NULL,
  `dateAdd` date NOT NULL,
  `id_pegi` int(11) DEFAULT NULL,
  `id_editor` int(11) DEFAULT NULL,
  `id_developper` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_game`),
  KEY `id_pegi` (`id_pegi`),
  KEY `id_editor` (`id_editor`),
  KEY `id_developper` (`id_developper`),
  CONSTRAINT `game_ibfk_1` FOREIGN KEY (`id_pegi`) REFERENCES `pegi` (`id_pegi`),
  CONSTRAINT `game_ibfk_2` FOREIGN KEY (`id_editor`) REFERENCES `editor` (`id_editor`),
  CONSTRAINT `game_ibfk_3` FOREIGN KEY (`id_developper`) REFERENCES `developper` (`id_developper`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game`
--

LOCK TABLES `game` WRITE;
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
/*!40000 ALTER TABLE `game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_game` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_image`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language` (
  `id_language` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` VALUES (0,'anglais'),(1,'français'),(2,'allemand'),(3,'italien'),(4,'japonais'),(5,'polonais'),(6,'portugais'),(7,'portugais (Brésil)'),(8,'russe'),(9,'espagnol (Espagne)'),(10,'espagnol (Amérique latine)'),(11,'coréen'),(12,'turc'),(13,'chinois traditionnel'),(14,'chinois simplifié'),(15,'hongrois'),(16,'tchèque'),(17,'grec');
/*!40000 ALTER TABLE `language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language_game`
--

DROP TABLE IF EXISTS `language_game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language_game` (
  `id_language` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `isAudio` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_language`,`id_game`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `language_game_ibfk_1` FOREIGN KEY (`id_language`) REFERENCES `language` (`id_language`),
  CONSTRAINT `language_game_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language_game`
--

LOCK TABLES `language_game` WRITE;
/*!40000 ALTER TABLE `language_game` DISABLE KEYS */;
/*!40000 ALTER TABLE `language_game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id_page` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `template` varchar(25) NOT NULL,
  `url` varchar(25) NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (0,'Acceuil','home/home','/'),(1,'Jeu','game/show','/game'),(2,'Connexion','security/login','/login'),(3,'Profil','user/user','/profil'),(4,'Création de compte','registration/registration','/register'),(5,'Panier','cart/cart','/cart'),(6,'Contact','contact/contact','/contact'),(7,'Bibliothèque','library/library','/library'),(8,'Nouveau jeu','game/new','/new'),(9,'Modifier un jeu','game/modify','/modify'),(10,'Liste des jeux','game/index','/list'),(11,'Liste des utilisateurs','user/index','/users');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paragraph`
--

DROP TABLE IF EXISTS `paragraph`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paragraph` (
  `id_paragraph` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `paragraph` text DEFAULT NULL,
  `id_game` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_paragraph`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `paragraph_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paragraph`
--

LOCK TABLES `paragraph` WRITE;
/*!40000 ALTER TABLE `paragraph` DISABLE KEYS */;
/*!40000 ALTER TABLE `paragraph` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegi`
--

DROP TABLE IF EXISTS `pegi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegi` (
  `id_pegi` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `img` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pegi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegi`
--

LOCK TABLES `pegi` WRITE;
/*!40000 ALTER TABLE `pegi` DISABLE KEYS */;
INSERT INTO `pegi` VALUES (0,'PEGI 3','pegi3.png'),(1,'PEGI 7','pegi7.png'),(2,'PEGI 12','pegi12.png'),(3,'PEGI 16','pegi16.png'),(4,'PEGI 18','pegi18.png');
/*!40000 ALTER TABLE `pegi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `platform`
--

DROP TABLE IF EXISTS `platform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `platform` (
  `id_platform` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `img` varchar(25) NOT NULL,
  PRIMARY KEY (`id_platform`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platform`
--

LOCK TABLES `platform` WRITE;
/*!40000 ALTER TABLE `platform` DISABLE KEYS */;
INSERT INTO `platform` VALUES (0,'Windows','windows.png'),(1,'MAC OS','mac.png'),(2,'Linux','linux.png');
/*!40000 ALTER TABLE `platform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `platform_game`
--

DROP TABLE IF EXISTS `platform_game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `platform_game` (
  `id_platform` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  PRIMARY KEY (`id_platform`,`id_game`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `platform_game_ibfk_1` FOREIGN KEY (`id_platform`) REFERENCES `platform` (`id_platform`),
  CONSTRAINT `platform_game_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platform_game`
--

LOCK TABLES `platform_game` WRITE;
/*!40000 ALTER TABLE `platform_game` DISABLE KEYS */;
/*!40000 ALTER TABLE `platform_game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requirement`
--

DROP TABLE IF EXISTS `requirement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requirement` (
  `id_requirement` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_requirement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirement`
--

LOCK TABLES `requirement` WRITE;
/*!40000 ALTER TABLE `requirement` DISABLE KEYS */;
INSERT INTO `requirement` VALUES (0,'Windows 10 64 bits'),(1,'Intel i5-2500k (4 cœurs 3,3 GHz)'),(2,'AMD Ryzen 3 1200 (4 cœurs 3,1 GHz)'),(3,'8 Go DDR '),(4,'70 Go HDD'),(5,'DirectX 11 (niveau de fonctionnalité 11_1)'),(6,'NVIDIA GTX 960 (4 Go)'),(7,'AMD R9 290X (4 Go)'),(8,'Intel i5-6600k (4 cœurs 3,5 GHz)'),(9,'AMD Ryzen 5 2400 G (4 cœurs 3,6 GHz)'),(10,'70 Go SSD'),(11,'NVIDIA GTX 1060 (6 Go)'),(12,'AMD RX 570 (4 Go)');
/*!40000 ALTER TABLE `requirement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (0,'Système d\'exploitation'),(1,'Processeur'),(2,'Mémoire vive'),(3,'Stockage'),(4,'DirectX'),(5,'Carte Graphique');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_requirement_game`
--

DROP TABLE IF EXISTS `type_requirement_game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_requirement_game` (
  `id_type` int(11) NOT NULL,
  `id_requirement` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `minimum` varchar(100) DEFAULT NULL,
  `recomandation` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_type`,`id_requirement`,`id_game`),
  KEY `id_requirement` (`id_requirement`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `type_requirement_game_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`),
  CONSTRAINT `type_requirement_game_ibfk_2` FOREIGN KEY (`id_requirement`) REFERENCES `requirement` (`id_requirement`),
  CONSTRAINT `type_requirement_game_ibfk_3` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_requirement_game`
--

LOCK TABLES `type_requirement_game` WRITE;
/*!40000 ALTER TABLE `type_requirement_game` DISABLE KEYS */;
/*!40000 ALTER TABLE `type_requirement_game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `adress1` varchar(100) DEFAULT NULL,
  `adress2` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `cityCode` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_game`
--

DROP TABLE IF EXISTS `user_game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_game` (
  `id_user` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_game`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `user_game_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  CONSTRAINT `user_game_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_game`
--

LOCK TABLES `user_game` WRITE;
/*!40000 ALTER TABLE `user_game` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_game` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-23 14:28:21
