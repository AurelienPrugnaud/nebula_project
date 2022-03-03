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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game`
--

LOCK TABLES `game` WRITE;
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
INSERT INTO `game` VALUES (1,'blabla','2022-02-26',2.00,'https://youtube.com','2022-02-26',1,1,1),(2,'blabla','2022-02-19',2.00,'blabla','2022-02-19',1,1,1),(3,'test','2022-03-24',2.00,'https://www.youtube.com','2022-03-24',1,1,1),(4,'test','2022-03-24',2.00,'https://www.youtube.com','2022-03-01',1,1,1),(5,'test','2022-03-24',2.00,'https://youtube.com','2022-03-02',1,1,1),(6,'test','2022-03-24',2.00,'https://youtube.com','2022-03-02',1,1,1),(7,'test','2022-03-24',2.00,'https://youtube.com','2022-03-02',1,1,1),(8,'test','2022-03-24',2.00,'https://youtube.com','2022-03-02',1,1,1),(9,'test','2022-03-24',2.00,'https://youtube.com','2022-03-02',1,1,1),(10,'test','2022-03-24',2.00,'https://youtube.com','2022-03-02',1,1,1),(11,'test','2022-03-24',2.00,'https://youtube.com','2022-03-02',1,1,1),(12,'test','2022-03-24',2.00,'https://youtube.com','2022-03-02',1,1,1),(13,'test','2022-03-25',3.00,'https://youtube','2022-03-02',1,1,1),(14,'test','2022-03-25',3.00,'https://youtube','2022-03-02',1,1,1),(15,'test','2022-03-25',3.00,'https://youtube','2022-03-02',1,1,1),(16,'test3','2022-03-30',56.00,'https://youtube.com','2022-03-02',1,1,1),(17,'test3','2022-03-30',56.00,'https://youtube.com','2022-03-02',1,1,1),(18,'test','2022-03-27',3.00,'https://youtube.com','2022-03-02',1,2,2),(19,'test','2022-03-27',3.00,'https://youtube.com','2022-03-02',1,2,2),(20,'test5','2022-03-19',3.00,'https://youtube.com','2022-03-02',1,1,1),(21,'test5','2022-03-19',3.00,'https://youtube.com','2022-03-02',1,1,1),(22,'test','2022-03-27',3.00,'https','2022-03-03',1,1,1),(23,'test','2022-03-26',3.00,'https://youtube.com','2022-03-03',1,1,1),(24,'test','2022-03-26',3.00,'https://youtube.com','2022-03-03',1,1,1),(25,'test','2022-03-26',3.00,'https://youtube.com','2022-03-03',1,1,1),(26,'test','2022-03-26',3.00,'https://youtube.com','2022-03-03',1,1,1),(27,'test','2022-03-26',3.00,'https://youtube.com','2022-03-03',1,1,1),(28,'test','2022-03-26',3.00,'https://youtube.com','2022-03-03',1,1,1),(29,'test','2022-03-26',3.00,'https://youtube.com','2022-03-03',1,1,1),(30,'test','2022-03-26',3.00,'https://youtube.com','2022-03-03',1,1,1),(31,'test','2022-03-26',3.00,'https://youtube.com','2022-03-03',1,1,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,NULL,NULL),(2,NULL,NULL),(3,'god_of_war.png',NULL),(4,'god_of_war.png',NULL),(5,'god_of_war.png',NULL),(6,'god_of_war.png',NULL),(7,'god_of_war.png',NULL),(8,'god_of_war.png',NULL),(9,'god_of_war.png',NULL),(10,'god_of_war.jpg',NULL),(11,'god_of_war.jpg',NULL),(12,'god_of_war.jpg',NULL),(13,'god_of_war.jpg',NULL),(14,'god_of_war.jpg',NULL),(15,'god_of_war.jpg',NULL),(16,'god_of_war.jpg',NULL),(17,'god_of_war.jpg',NULL),(18,'god_of_war.jpg',NULL),(19,'god_of_war.jpg',NULL),(20,'god_of_war.png',NULL),(21,'god_of_war.png',NULL),(22,'god_of_war.png',NULL),(23,'god_of_war.png',NULL),(24,'god_of_war.png',NULL),(25,'god_of_war.png',NULL),(26,'god_of_war.png',NULL),(27,'god_of_war.png',NULL),(28,'god_of_war.png',NULL),(29,'god_of_war.png',NULL),(30,'god_of_war.png',NULL),(31,'god_of_war.png',NULL),(32,'god_of_war.png',NULL),(33,'god_of_war.png',NULL),(34,'god_of_war.png',NULL),(35,'god_of_war.png',NULL),(36,'god_of_war.png',NULL),(37,'god_of_war.png',NULL),(38,'god_of_war.png',NULL),(39,'god_of_war.png',NULL),(40,'god_of_war.jpg',NULL),(41,'god_of_war.jpg',NULL),(42,'god_of_war.jpg',NULL),(43,'god_of_war.jpg',NULL),(44,'god_of_war.jpg',NULL),(45,NULL,NULL),(46,NULL,NULL),(47,NULL,NULL),(48,NULL,NULL),(49,NULL,NULL),(50,NULL,NULL),(51,NULL,NULL),(52,NULL,NULL),(53,NULL,NULL),(54,NULL,NULL),(55,NULL,NULL),(56,NULL,NULL),(57,NULL,NULL),(58,NULL,NULL),(59,NULL,NULL),(60,NULL,NULL),(61,NULL,NULL),(62,NULL,NULL),(63,NULL,NULL),(64,NULL,NULL),(65,NULL,NULL),(66,NULL,NULL),(67,NULL,NULL),(68,NULL,NULL),(69,NULL,NULL),(70,NULL,NULL),(71,NULL,NULL),(72,NULL,NULL),(73,NULL,NULL),(74,NULL,NULL),(75,NULL,NULL),(76,NULL,NULL),(77,NULL,NULL),(78,NULL,NULL),(79,NULL,NULL),(80,'Array',NULL),(81,'Array',NULL),(82,'Array',NULL),(83,'Array',NULL),(84,'Array',NULL),(85,'Array',NULL),(86,'Array',NULL),(87,'Array',NULL),(88,'Array',NULL),(89,'Array',NULL);
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
INSERT INTO `page` VALUES (1,'Acceuil','home/home','/'),(2,'Jeu','game/show','/game'),(3,'Connexion','security/login','/login'),(4,'Profil','user/user','/profil'),(5,'CrÃ©ation de compte','registration/registration','/register'),(6,'Panier','cart/cart','/cart'),(7,'Contact','contact/contact','/contact'),(8,'BibliothÃ¨que','library/library','/library'),(9,'Nouveau jeu','game/new','/new'),(10,'Modifier un jeu','game/modify','/modify'),(11,'Liste des jeux','game/index','/list'),(12,'Liste des utilisateurs','user/index','/users');
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
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paragraph`
--

LOCK TABLES `paragraph` WRITE;
/*!40000 ALTER TABLE `paragraph` DISABLE KEYS */;
INSERT INTO `paragraph` VALUES (1,'god_of_war.jpg','god_of_war.jpg',NULL),(2,'god_of_war.jpg','god_of_war.jpg',NULL),(3,'god_of_war.jpg','god_of_war.jpg',NULL),(4,'god_of_war.jpg','god_of_war.jpg',NULL),(5,'god_of_war.jpg','god_of_war.jpg',NULL),(6,'god_of_war.jpg','god_of_war.jpg',NULL),(7,'god_of_war.jpg','god_of_war.jpg',NULL),(8,'god_of_war.jpg','god_of_war.jpg',NULL),(9,'god_of_war.png','god_of_war.png',NULL),(10,'god_of_war.png','god_of_war.png',NULL),(11,'god_of_war.png','god_of_war.png',NULL),(12,'god_of_war.png','god_of_war.png',NULL),(13,'god_of_war.png','god_of_war.png',NULL),(14,'god_of_war.png','god_of_war.png',NULL),(15,'god_of_war.png','god_of_war.png',NULL),(16,'god_of_war.png','god_of_war.png',NULL),(17,'god_of_war.png','god_of_war.png',NULL),(18,'god_of_war.png','god_of_war.png',NULL),(19,'god_of_war.png','god_of_war.png',NULL),(20,'god_of_war.png','god_of_war.png',NULL),(21,'god_of_war.png','god_of_war.png',NULL),(22,'god_of_war.png','god_of_war.png',NULL),(23,'god_of_war.png','god_of_war.png',NULL),(24,'god_of_war.png','god_of_war.png',NULL),(25,'god_of_war.png','god_of_war.png',NULL),(26,'god_of_war.png','god_of_war.png',NULL),(27,'god_of_war.png','god_of_war.png',NULL),(28,'god_of_war.png','god_of_war.png',NULL),(29,'god_of_war.png','god_of_war.png',NULL),(30,'god_of_war.png','god_of_war.png',NULL),(31,'god_of_war.png','god_of_war.png',NULL),(32,'god_of_war.png','god_of_war.png',NULL),(33,'lorem1','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like',NULL),(34,'god_of_war.png','god_of_war.png',NULL),(35,'god_of_war.png','god_of_war.png',NULL),(36,'god_of_war.png','god_of_war.png',NULL),(37,'god_of_war.png','god_of_war.png',NULL),(38,'god_of_war.png','god_of_war.png',NULL),(39,'god_of_war.png','god_of_war.png',NULL),(40,'god_of_war.png','god_of_war.png',NULL),(41,'god_of_war.png','god_of_war.png',NULL),(42,'god_of_war.jpg',NULL,NULL),(43,'god_of_war.jpg',NULL,NULL),(44,'god_of_war.jpg',NULL,NULL),(45,'god_of_war.jpg',NULL,NULL),(46,'god_of_war.jpg',NULL,NULL),(47,'god_of_war.jpg',NULL,NULL),(48,'god_of_war.jpg',NULL,NULL),(49,'god_of_war.jpg',NULL,NULL),(50,NULL,NULL,NULL),(51,NULL,NULL,NULL),(52,NULL,NULL,NULL),(53,NULL,NULL,NULL),(54,NULL,NULL,NULL),(55,NULL,NULL,NULL),(56,NULL,NULL,NULL),(57,NULL,NULL,NULL),(58,NULL,NULL,NULL),(59,NULL,NULL,NULL),(60,NULL,NULL,NULL),(61,NULL,NULL,NULL),(62,NULL,NULL,NULL),(63,NULL,NULL,NULL),(64,NULL,NULL,NULL),(65,NULL,NULL,NULL),(66,NULL,NULL,NULL),(67,NULL,NULL,NULL),(68,NULL,NULL,NULL),(69,NULL,NULL,NULL),(70,NULL,NULL,NULL),(71,NULL,NULL,NULL),(72,NULL,NULL,NULL),(73,NULL,NULL,NULL),(74,NULL,NULL,NULL),(75,NULL,NULL,NULL),(76,NULL,NULL,NULL),(77,NULL,NULL,NULL),(78,NULL,NULL,NULL),(79,NULL,NULL,NULL),(80,NULL,NULL,NULL),(81,NULL,NULL,NULL),(82,NULL,NULL,NULL),(83,NULL,NULL,NULL),(84,NULL,NULL,NULL),(85,NULL,NULL,NULL),(86,NULL,NULL,NULL),(87,NULL,NULL,NULL),(88,NULL,NULL,NULL),(89,NULL,NULL,NULL),(90,NULL,NULL,NULL),(91,NULL,NULL,NULL),(92,NULL,NULL,NULL),(93,NULL,NULL,NULL),(94,NULL,NULL,NULL),(95,NULL,NULL,NULL),(96,NULL,NULL,NULL),(97,NULL,NULL,NULL),(98,NULL,NULL,NULL),(99,NULL,NULL,NULL),(100,NULL,NULL,NULL),(101,NULL,NULL,NULL),(102,NULL,NULL,NULL),(103,NULL,NULL,NULL),(104,NULL,NULL,NULL),(105,NULL,NULL,NULL),(106,'Array','Array',NULL),(107,'Array','Array',NULL),(108,'Array','Array',NULL),(109,'Array','Array',NULL),(110,'Array','Array',NULL),(111,'Array','Array',NULL),(112,'Array','Array',NULL),(113,'Array','Array',NULL),(114,'Array','Array',NULL),(115,'Array','Array',NULL),(116,'Array','Array',NULL),(117,'Array','Array',NULL),(118,'Array','Array',NULL),(119,'Array','Array',NULL),(120,'Array','Array',NULL),(121,'Array','Array',NULL);
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
INSERT INTO `type` VALUES (1,'SystÃ¨me d\'exploitation'),(2,'Processeur'),(3,'MÃ©moire vive'),(4,'Stockage'),(5,'DirectX'),(6,'Carte Graphique');
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

-- Dump completed on 2022-03-03 12:50:05
