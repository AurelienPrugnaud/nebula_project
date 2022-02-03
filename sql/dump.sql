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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_games`
--

DROP TABLE IF EXISTS `categories_games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_games` (
  `id_category` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `category1` int(11) NOT NULL,
  PRIMARY KEY (`id_category`,`id_game`,`category1`),
  KEY `id_game` (`id_game`,`category1`),
  CONSTRAINT `categories_games_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id_category`),
  CONSTRAINT `categories_games_ibfk_2` FOREIGN KEY (`id_game`, `category1`) REFERENCES `games` (`id_game`, `category1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_games`
--

LOCK TABLES `categories_games` WRITE;
/*!40000 ALTER TABLE `categories_games` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories_games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `developpers`
--

DROP TABLE IF EXISTS `developpers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `developpers` (
  `id_developper` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_developper`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developpers`
--

LOCK TABLES `developpers` WRITE;
/*!40000 ALTER TABLE `developpers` DISABLE KEYS */;
/*!40000 ALTER TABLE `developpers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `editors`
--

DROP TABLE IF EXISTS `editors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `editors` (
  `id_editor` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_editor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editors`
--

LOCK TABLES `editors` WRITE;
/*!40000 ALTER TABLE `editors` DISABLE KEYS */;
/*!40000 ALTER TABLE `editors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `id_game` int(11) NOT NULL,
  `name` text NOT NULL,
  `category1` int(11) NOT NULL,
  `category2` int(11) DEFAULT NULL,
  `category3` int(11) DEFAULT NULL,
  `category4` int(11) DEFAULT NULL,
  `platform` text NOT NULL,
  `dateLaunch` date NOT NULL,
  `price` decimal(5,0) NOT NULL,
  `img1` text NOT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text DEFAULT NULL,
  `description1` text NOT NULL,
  `description2` text DEFAULT NULL,
  `description3` text DEFAULT NULL,
  `description4` text DEFAULT NULL,
  `description5` text DEFAULT NULL,
  `description6` text DEFAULT NULL,
  `description7` text DEFAULT NULL,
  `description8` text DEFAULT NULL,
  `youtubeLink` text NOT NULL,
  `osMin` text NOT NULL,
  `cpuMin` text NOT NULL,
  `ramMin` text NOT NULL,
  `storageMin` text NOT NULL,
  `directxMin` text NOT NULL,
  `gpuMin` text NOT NULL,
  `osRec` text NOT NULL,
  `cpuRec` text NOT NULL,
  `ramRec` text NOT NULL,
  `storageRec` text NOT NULL,
  `directxRec` text NOT NULL,
  `gpuRec` text NOT NULL,
  `languageAudio1` text NOT NULL,
  `languageAudio2` text DEFAULT NULL,
  `languageAudio3` text DEFAULT NULL,
  `languageAudio4` text DEFAULT NULL,
  `languageAudio5` text DEFAULT NULL,
  `languageAudio6` text DEFAULT NULL,
  `languageAudio7` text DEFAULT NULL,
  `languageAudio8` text DEFAULT NULL,
  `languageAudio9` text DEFAULT NULL,
  `languageAudio10` text DEFAULT NULL,
  `languageText1` text NOT NULL,
  `languageText2` text DEFAULT NULL,
  `languageText3` text DEFAULT NULL,
  `languageText4` text DEFAULT NULL,
  `languageText5` text DEFAULT NULL,
  `languageText6` text DEFAULT NULL,
  `languageText7` text DEFAULT NULL,
  `languageText8` text DEFAULT NULL,
  `languageText9` text DEFAULT NULL,
  `languageText10` text DEFAULT NULL,
  `languageText11` text DEFAULT NULL,
  `languageText12` text DEFAULT NULL,
  `languageText13` text DEFAULT NULL,
  `languageText14` text DEFAULT NULL,
  `languageText15` text DEFAULT NULL,
  `languageText16` text DEFAULT NULL,
  `languageText17` text DEFAULT NULL,
  `languageText18` text DEFAULT NULL,
  `languageText19` text DEFAULT NULL,
  `languageText20` text DEFAULT NULL,
  `dateAdd` date NOT NULL,
  `id_pegi` int(11) DEFAULT NULL,
  `id_developper` int(11) DEFAULT NULL,
  `id_editor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_game`,`category1`),
  KEY `id_pegi` (`id_pegi`),
  KEY `id_developper` (`id_developper`),
  KEY `id_editor` (`id_editor`),
  CONSTRAINT `games_ibfk_1` FOREIGN KEY (`id_pegi`) REFERENCES `pegis` (`id_pegi`),
  CONSTRAINT `games_ibfk_2` FOREIGN KEY (`id_developper`) REFERENCES `developpers` (`id_developper`),
  CONSTRAINT `games_ibfk_3` FOREIGN KEY (`id_editor`) REFERENCES `editors` (`id_editor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id_language` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages_games`
--

DROP TABLE IF EXISTS `languages_games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages_games` (
  `id_language` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `category1` int(11) NOT NULL,
  PRIMARY KEY (`id_language`,`id_game`,`category1`),
  KEY `id_game` (`id_game`,`category1`),
  CONSTRAINT `languages_games_ibfk_1` FOREIGN KEY (`id_language`) REFERENCES `languages` (`id_language`),
  CONSTRAINT `languages_games_ibfk_2` FOREIGN KEY (`id_game`, `category1`) REFERENCES `games` (`id_game`, `category1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages_games`
--

LOCK TABLES `languages_games` WRITE;
/*!40000 ALTER TABLE `languages_games` DISABLE KEYS */;
/*!40000 ALTER TABLE `languages_games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id_page` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `template` varchar(25) NOT NULL,
  `url` varchar(25) NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegis`
--

DROP TABLE IF EXISTS `pegis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegis` (
  `id_pegi` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `img` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pegi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegis`
--

LOCK TABLES `pegis` WRITE;
/*!40000 ALTER TABLE `pegis` DISABLE KEYS */;
/*!40000 ALTER TABLE `pegis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requirements`
--

DROP TABLE IF EXISTS `requirements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requirements` (
  `id_requirement` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_requirement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirements`
--

LOCK TABLES `requirements` WRITE;
/*!40000 ALTER TABLE `requirements` DISABLE KEYS */;
/*!40000 ALTER TABLE `requirements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requirements_games`
--

DROP TABLE IF EXISTS `requirements_games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requirements_games` (
  `id_requirement` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `category1` int(11) NOT NULL,
  PRIMARY KEY (`id_requirement`,`id_game`,`category1`),
  KEY `id_game` (`id_game`,`category1`),
  CONSTRAINT `requirements_games_ibfk_1` FOREIGN KEY (`id_requirement`) REFERENCES `requirements` (`id_requirement`),
  CONSTRAINT `requirements_games_ibfk_2` FOREIGN KEY (`id_game`, `category1`) REFERENCES `games` (`id_game`, `category1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirements_games`
--

LOCK TABLES `requirements_games` WRITE;
/*!40000 ALTER TABLE `requirements_games` DISABLE KEYS */;
/*!40000 ALTER TABLE `requirements_games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
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
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_games`
--

DROP TABLE IF EXISTS `users_games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_games` (
  `id_user` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `category1` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_game`,`category1`),
  KEY `id_game` (`id_game`,`category1`),
  CONSTRAINT `users_games_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  CONSTRAINT `users_games_ibfk_2` FOREIGN KEY (`id_game`, `category1`) REFERENCES `games` (`id_game`, `category1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_games`
--

LOCK TABLES `users_games` WRITE;
/*!40000 ALTER TABLE `users_games` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_games` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-03 16:42:09
