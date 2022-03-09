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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_category`,`id_game`),
  KEY `FOREIGN` (`id_game`,`id_category`) USING BTREE,
  KEY `category_game_ibfk_1` (`id_category`),
  CONSTRAINT `category_game_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  CONSTRAINT `category_game_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_game`
--

LOCK TABLES `category_game` WRITE;
/*!40000 ALTER TABLE `category_game` DISABLE KEYS */;
INSERT INTO `category_game` VALUES (1,1,1),(2,3,1),(3,4,1),(4,5,1),(5,1,2),(6,3,2),(7,4,2),(8,5,2),(9,1,3),(10,2,3),(11,3,3),(12,4,3);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developper`
--

LOCK TABLES `developper` WRITE;
/*!40000 ALTER TABLE `developper` DISABLE KEYS */;
INSERT INTO `developper` VALUES (1,'Santa Monica Studio'),(2,'Ubisoft'),(3,'CD PROJEKT RED'),(4,'Crystal Dynamics'),(5,'Square Enix'),(6,'FromSoftware');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editor`
--

LOCK TABLES `editor` WRITE;
/*!40000 ALTER TABLE `editor` DISABLE KEYS */;
INSERT INTO `editor` VALUES (1,'PlayStation PC LLC'),(2,'Ubisoft'),(3,'CD PROJEKT RED'),(4,'Square Enix'),(5,'BANDAI NAMCO');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game`
--

LOCK TABLES `game` WRITE;
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
INSERT INTO `game` VALUES (1,'God of War','2022-01-14',49.99,'Incarnez Kratos, et partez à l\'aventure dans le dernier opus de la série de jeux mondialement connue : God of War ','https://www.youtube-nocookie.com/embed/8O4uT214kak?controls=0','2022-03-08',5,1,1),(2,'FINAL FANTASY VII REMAKE INTERGRADE','2021-12-16',79.99,'Le classique intemporel FINAL FANTASY VII REMAKE INTERGRADE est de retour avec une aventure, des graphismes et un système de combat inédits.','https://www.youtube-nocookie.com/embed/FxTWyAmDqJI?controls=0','2022-03-08',4,4,5),(3,'Elden ring','2022-02-25',59.99,'UNE NOUVELLE AVENTURE GRANDIOSE VOUS ATTEND Levez-vous, Sans-éclat, et puisse la grâce guider vos pas.','https://www.youtube-nocookie.com/embed/M2EZDQ6_jfA?controls=0','2022-03-08',4,5,4);
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'god_of_war.png',1),(2,'god_of_war_miniature1.png',1),(3,'god_war_logo.png',1),(4,'godofwarYoutube.png',1),(5,'god_of_war_miniature2.png',1),(6,'god_of_war_miniature3.png',1),(7,'final_fantasy_intergrade.png',2),(8,'final_fantasy_intergrade1.png',2),(9,'FF7R_INTERGRADE_Logo_W.png',2),(10,'miniatureff.png',2),(11,'ff2.png',2),(12,'ff3.png',2),(13,'er0.png',3),(14,'er1.png',3),(15,'ER_LOGO_TM_RGB_DARK_BKG.png',3),(16,'eldenRingYt.png',3),(17,'er2.png',3),(18,'er3.png',3);
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_language` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `isAudio` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`,`id_language`,`id_game`),
  KEY `FOREIGN` (`id_game`,`id_language`) USING BTREE,
  KEY `language_game_ibfk_1` (`id_language`),
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
  `title` varchar(150) DEFAULT NULL,
  `paragraph` text DEFAULT NULL,
  `id_game` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `paragraph_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paragraph`
--

LOCK TABLES `paragraph` WRITE;
/*!40000 ALTER TABLE `paragraph` DISABLE KEYS */;
INSERT INTO `paragraph` VALUES (1,'Pénétrez dans le royaume du nord','Sa vengeance contre les dieux de l\'Olympe étant bien derrière lui, Kratos vit désormais comme un simple habitant du royaume des dieux (et des monstres) nordiques. C\'est dans ce monde inhospitalier et cruel qu\'il doit combattre pour sa survie... et apprendre à son fils à en faire de même.',1),(2,'Profitez de votre deuxième chance','Kratos est à nouveau père. En tant que mentor et protecteur d\'Atreus, un fils prêt à tout pour gagner son respect, Kratos se retrouve contraint de dominer la rage qui l\'a défini pendant si longtemps alors qu\'il explore avec son fils un monde rempli de dangers.',1),(3,'Voyagez dans un monde sombre peuplé de terribles créatures','Du marbre et des colonnes d\'une Olympe resplendissante aux environnements bruts des forêts, montagnes et cavernes de la mythologie nordique pré-viking, ce nouveau royaume possède un panthéon de créatures, monstres et dieux qui lui sont propres.',1),(4,'Prenez part à des combats physiques et viscéraux','Grâce à une caméra libre à la troisième personne qui plonge le joueur encore plus au cœur de l\'action, les combats de God of War™ sont à l\'image du panthéon de créatures nordiques que Kratos affronte : grandioses, brutaux et ardus. La nouvelle arme principale et les capacités inédites de Kratos conservent l\'esprit de la série God of War, tout en proposant une vision inédite des conflits qui redéfinit le genre.',1),(5,'Graphismes haute-fidélité','Des visuels saisissants améliorés sur PC. Profitez d\'une véritable résolution 4K sur les appareils compatibles, avec des fréquences d\'image déverrouillées pour une performance inégalée. Gérez vos paramètres avec une vaste sélection d\'options et de réglages graphiques prédéfinis, dont des ombres à haute résolution, des reflets d\'espace-écran améliorés, l\'ajout des technologies de GTAO et SSDO, et bien plus encore !',1),(6,'Compatibilité avec NVIDIA® DLSS et NVIDIA® Reflex','Quand la qualité rencontre la performance. Mettez à profit la puissance de l\'IA du super-échantillonnage par Deep Learning (Deep Learning Super Sampling, DLSS) de NVIDIA, qui améliore la fréquence d\'images et génère des images aussi belles que nettes sur les cartes graphiques NVIDIA compatibles. Utilisez la technologie NVIDIA Reflex de faible latence, qui vous permet de réagir plus rapidement et d\'enchaîner des combos plus dévastateurs grâce au temps de réponse inégalé des cartes graphiques GeForce.',1),(7,'Personnalisation des commandes','Jouez à votre façon. Grâce à une compatibilité avec les manettes sans fil DUALSHOCK®4 et DUALSENSE® et bien d\'autres périphériques de jeu, ainsi que des commandes souris et clavier entièrement personnalisables, vous avez la possibilité d\'ajuster la moindre de vos actions à votre style de jeu.',1),(8,'Compatibilité avec les écrans ultra-larges','Profitez d\'un niveau d\'immersion inédit. Voyagez à travers les royaumes du nord et leurs paysages époustouflants en vue panoramique. Grâce à une compatibilité avec les écrans ultra-larges en 21:9, God of War™ offre une expérience de qualité cinématographique qui améliore encore davantage les visuels théâtraux et fluides du jeu.',1),(9,NULL,'Vivez l\'histoire passionnante de Cloud Strife à Midgar dans cette renaissance de l\'emblématique FINAL FANTASY VII à travers des graphismes de pointe, des combats épiques mêlant action et commandes classiques, et un épisode bonus consacré à Yuffie Kisaragi.',2),(10,'SYNOPSIS','Le monde est contrôlé par la compagnie Shinra qui exploite la mako, l\'énergie vitale de la planète. Dans la mégalopole de Midgar, un groupe de hors-la-loi idéalistes connu sous le nom d\'Avalanche consistue l\'un des derniers bastions de la résistance.\r\nCloud, un ex-membre des troupes d\'élite de la Shinra, accompagne Avalanche lors d\'une opération de destruction du réacteur mako nº 1. L\'explosion plonge la ville dans un brasier chaotique et Cloud est tourmenté par des visions d\'un ennemi qu\'il pensait mort depuis longtemps.\r\nEmbarquez dans une grande aventure qui décidera du sort de la planète !\r\nCe jeu est une réinterprétation en plusieurs volets de FINAL FANTASY VII, initialement sorti en 1997.\r\nL\'histoire de ce premier volet retrace la fuite des héros hors de Midgar et nous fait vivre les événements qui secouent la ville avec une profondeur nouvelle.',2),(11,'FF7R EPISODE INTERmission (Épisode de Yuffie)','Cet épisode est constitué de deux chapitres séparés de l\'histoire principale de FINAL FANTASY VII REMAKE. Jouez Yuffie, une shinobi du Wutai qui s\'infiltre à Midgar avec son partenaire grâce à l\'aide de la branche principale d\'Avalanche afin de dérober une matéria ultime créée par la Shinra.',2),(12,'Contenu','FINAL FANTASY VII REMAKE INTERGRADE contient :\r\n\r\n    FINAL FANTASY VII REMAKE\r\n    FF7R EPISODE INTERmission (Épisode de Yuffie)\r\n    Arme : Shuricac (pour Yuffie)\r\n    Protection : Bracelet Midgar\r\n    Protection : Bracelet Shinra\r\n    Protection : Bracelet Don Cornéo\r\n    Accessoire : Ceinture de superstar\r\n    Accessoire : Cristal de mako\r\n    Accessoire : Boucles d\'oreilles séraphiques\r\n    Matéria d\'invocation : Carbuncle\r\n    Matéria d\'invocation : Poussin chocobo\r\n    Matéria d\'invocation : Pampa\r\n\r\nL\'arme, les protections, les accessoires et les matérias d\'invocation peuvent être obtenus dans la \"Boîte à cadeaux\" depuis le menu principal.\r\nL\'arme Shuricac ne peut utilisée que dans FF7R EPISODE INTERmission (Épisode de Yuffie).',2),(17,NULL,'UNE NOUVELLE AVENTURE GRANDIOSE VOUS ATTEND\r\nLevez-vous, Sans-éclat, et puisse la grâce guider vos pas. Brandissez la puissance du Cercle d\'Elden. Devenez Seigneur de l\'Entre-terre.',3),(18,'Un vaste monde à explorer','Un monde immense aux environnements riches et variés, parsemé d\'obscurs et tortueux donjons tous reliés naturellement entre eux, vous attend. Au fil de votre exploration, goûtez à l\'inconnu, bravez les menaces permanentes et accomplissez votre destinée.',3),(19,'Créez votre propre personnage','En plus de l\'apparence de votre personnage, vous êtes libre de personnaliser votre arsenal d\'armes, d\'armures et de sorts. Construisez un personnage qui correspond à votre style de jeu, et devenez un guerrier surpuissant, ou encore un maître de la magie.',3),(20,'Un scénario épique né d\'un mythe','Plusieurs histoires se mêlent dans un récit narré par fragments. Vous rencontrerez des personnages complexes au fil de votre découverte épique de l\'Entre-terre.',3),(21,'Connectez-vous librement à d\'autres joueurs grâce au mode en ligne','En plus du mode multijoueur, vous permettant de vous connecter directement à d\'autres joueurs et de voyager ensemble, le jeu propose un système en ligne asynchrone unique vous permettant de ressentir la présence des autres Sans-éclat. ',3),(22,'Description du contenu pour adultes','Voici la description de l\'équipe de développement à propos du contenu du produit :\r\n\r\nCe jeu peut inclure du contenu qui n\'est pas approprié pour tous les âges ou pour la consultation au travail : Violence fréquente ou gore, Contenu générique destiné aux adultes ',3);
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_platform` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_platform`,`id_game`),
  KEY `FOREIGN` (`id_game`,`id_platform`) USING BTREE,
  KEY `platform_game_ibfk_1` (`id_platform`),
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'Système d\'exploitation'),(2,'Processeur Intel'),(3,'Processeur AMD'),(4,'Mémoire vive'),(5,'Stockage'),(6,'DirectX'),(7,'Carte Graphique NVIDIA'),(8,'Carte Graphique AMD');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_requirement_game`
--

DROP TABLE IF EXISTS `type_requirement_game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_requirement_game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL,
  `id_requirement` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `minimum` varchar(100) DEFAULT NULL,
  `recomandation` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`id_type`,`id_requirement`,`id_game`),
  KEY `FOREIGN` (`id_requirement`,`id_type`,`id_game`) USING BTREE,
  KEY `type_requirement_game_ibfk_3` (`id_game`),
  KEY `type_requirement_game_ibfk_1` (`id_type`),
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_user`,`id_game`),
  KEY `FOREIGN` (`id_game`,`id_user`) USING BTREE,
  KEY `user_game_ibfk_1` (`id_user`),
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

-- Dump completed on 2022-03-09  1:54:45
