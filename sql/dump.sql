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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Solo'),(2,'Multijoueur'),(3,'Action'),(4,'Jeu de rôle'),(5,'Aventure'),(6,'Tir'),(7,'Plateforme'),(8,'Indépendant'),(9,'Course'),(10,'Stratégie'),(11,'Rythme');
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
  KEY `FOREIGN` (`id_game`,`id_category`) USING BTREE,
  CONSTRAINT `category_game_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  CONSTRAINT `category_game_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developper`
--

LOCK TABLES `developper` WRITE;
/*!40000 ALTER TABLE `developper` DISABLE KEYS */;
INSERT INTO `developper` VALUES (1,'Santa Monica Studio'),(2,'Ubisoft'),(3,'CD PROJEKT RED'),(4,'Crystal Dynamics'),(5,'Square Enix');
/*!40000 ALTER TABLE `developper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `editor`
--

DROP TABLE IF EXISTS `editor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `editor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editor`
--

LOCK TABLES `editor` WRITE;
/*!40000 ALTER TABLE `editor` DISABLE KEYS */;
INSERT INTO `editor` VALUES (1,'PlayStation PC LLC'),(2,'Ubisoft'),(3,'CD PROJEKT RED'),(4,'Square Enix');
/*!40000 ALTER TABLE `editor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `releaseDate` date DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `hook` text DEFAULT NULL,
  `youtubeLink` varchar(250) DEFAULT NULL,
  `addDate` date DEFAULT NULL,
  `id_pegi` int(11) DEFAULT NULL,
  `id_editor` int(11) DEFAULT NULL,
  `id_developper` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pegi` (`id_pegi`),
  KEY `id_editor` (`id_editor`),
  KEY `id_developper` (`id_developper`),
  CONSTRAINT `game_ibfk_1` FOREIGN KEY (`id_pegi`) REFERENCES `pegi` (`id`),
  CONSTRAINT `game_ibfk_2` FOREIGN KEY (`id_editor`) REFERENCES `editor` (`id`),
  CONSTRAINT `game_ibfk_3` FOREIGN KEY (`id_developper`) REFERENCES `developper` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game`
--

LOCK TABLES `game` WRITE;
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
INSERT INTO `game` VALUES (1,'God of War','2022-01-14',49.99,'Incarné de nouveau Kratos dans ce nouvel opus de la série mondialement connu: God of War.','https://www.youtube-nocookie.com/embed/8O4uT214kak?controls=0','2022-03-06',5,1,5);
/*!40000 ALTER TABLE `game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `id_game` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'god_of_war.png',1),(2,'god_of_war_miniature1.png',1),(3,'god_war_logo.png',1),(4,'godofwarYoutube.png',1),(5,'god_of_war_miniature2.png',1),(6,'god_of_war_miniature3.png',1);
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` VALUES (1,'anglais'),(2,'français'),(3,'allemand'),(4,'italien'),(5,'japonais'),(6,'polonais'),(7,'portugais'),(8,'portugais (Brésil)'),(9,'russe'),(10,'espagnol (Espagne)'),(11,'espagnol (Amérique latine)'),(12,'coréen'),(13,'turc'),(14,'chinois traditionnel'),(15,'chinois simplifié'),(16,'hongrois'),(17,'tchèque'),(18,'grec');
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
  KEY `FOREIGN` (`id_game`,`id_language`) USING BTREE,
  CONSTRAINT `language_game_ibfk_1` FOREIGN KEY (`id_language`) REFERENCES `language` (`id`),
  CONSTRAINT `language_game_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) NOT NULL,
  `template` varchar(25) NOT NULL,
  `url` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,'Acceuil','home/home','/'),(2,'Jeu','game/show','/game'),(3,'Connexion','security/login','/login'),(4,'Profil','user/user','/profil'),(5,'Création de compte','registration/registration','/register'),(6,'Panier','cart/cart','/cart'),(7,'Contact','contact/contact','/contact'),(8,'Bibliothèque','library/library','/library'),(9,'Nouveau jeu','game/new','/new'),(10,'Modifier un jeu','game/modify','/modify'),(11,'Liste des jeux','game/index','/list'),(12,'Liste des utilisateurs','user/index','/users');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paragraph`
--

DROP TABLE IF EXISTS `paragraph`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paragraph` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `paragraph` text DEFAULT NULL,
  `id_game` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `paragraph_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paragraph`
--

LOCK TABLES `paragraph` WRITE;
/*!40000 ALTER TABLE `paragraph` DISABLE KEYS */;
INSERT INTO `paragraph` VALUES (1,'Pénétrez dans le royaume du nord','Sa vengeance contre les dieux de l\'Olympe étant bien derrière lui, Kratos vit désormais comme un simple habitant du royaume des dieux (et des monstres) nordiques. C\'est dans ce monde inhospitalier et cruel qu\'il doit combattre pour sa survie... et apprendre à son fils à en faire de même.\r\n',1),(2,'Profitez de votre deuxième chance','Kratos est à nouveau père. En tant que mentor et protecteur d\'Atreus, un fils prêt à tout pour gagner son respect, Kratos se retrouve contraint de dominer la rage qui l\'a défini pendant si longtemps alors qu\'il explore avec son fils un monde rempli de dangers. ',1);
/*!40000 ALTER TABLE `paragraph` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegi`
--

DROP TABLE IF EXISTS `pegi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegi`
--

LOCK TABLES `pegi` WRITE;
/*!40000 ALTER TABLE `pegi` DISABLE KEYS */;
INSERT INTO `pegi` VALUES (1,'PEGI 3','pegi3.png'),(2,'PEGI 7','pegi7.png'),(3,'PEGI 12','pegi12.png'),(4,'PEGI 16','pegi16.png'),(5,'PEGI 18','pegi18.png');
/*!40000 ALTER TABLE `pegi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `platform`
--

DROP TABLE IF EXISTS `platform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `platform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `img` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platform`
--

LOCK TABLES `platform` WRITE;
/*!40000 ALTER TABLE `platform` DISABLE KEYS */;
INSERT INTO `platform` VALUES (1,'Windows','windows.png'),(2,'Mac','mac.png'),(3,'linux','linux.png'),(4,'Playstation 5','playstation.png'),(5,'Xbox Series','xbox.png'),(6,'Nintendo Switch','switch.png');
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
  KEY `FOREIGN` (`id_game`,`id_platform`) USING BTREE,
  CONSTRAINT `platform_game_ibfk_1` FOREIGN KEY (`id_platform`) REFERENCES `platform` (`id`),
  CONSTRAINT `platform_game_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
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
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirement`
--

LOCK TABLES `requirement` WRITE;
/*!40000 ALTER TABLE `requirement` DISABLE KEYS */;
INSERT INTO `requirement` VALUES (1,'Windows 10 64 bits'),(2,'Intel i5-2500k (4 cœurs 3,3 GHz)'),(3,'AMD Ryzen 3 1200 (4 cœurs 3,1 GHz)'),(4,'8 Go DDR '),(5,'70 Go HDD'),(6,'DirectX 11 (niveau de fonctionnalité 11_1)'),(7,'NVIDIA GTX 960 (4 Go)'),(8,'AMD R9 290X (4 Go)'),(9,'Intel i5-6600k (4 cœurs 3,5 GHz)'),(10,'AMD Ryzen 5 2400 G (4 cœurs 3,6 GHz)'),(11,'70 Go SSD'),(12,'NVIDIA GTX 1060 (6 Go)'),(13,'AMD RX 570 (4 Go)');
/*!40000 ALTER TABLE `requirement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'Système d\'exploitation'),(2,'Processeur'),(3,'Mémoire vive'),(4,'Stockage'),(5,'DirectX'),(6,'Carte Graphique');
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
  KEY `FOREIGN` (`id_requirement`,`id_type`,`id_game`) USING BTREE,
  KEY `type_requirement_game_ibfk_3` (`id_game`),
  CONSTRAINT `type_requirement_game_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id`),
  CONSTRAINT `type_requirement_game_ibfk_2` FOREIGN KEY (`id_requirement`) REFERENCES `requirement` (`id`),
  CONSTRAINT `type_requirement_game_ibfk_3` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
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
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `adress1` varchar(100) DEFAULT NULL,
  `adress2` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `cityCode` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
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
  KEY `FOREIGN` (`id_game`,`id_user`) USING BTREE,
  CONSTRAINT `user_game_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  CONSTRAINT `user_game_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
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

-- Dump completed on 2022-03-06 18:02:49
