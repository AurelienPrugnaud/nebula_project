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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_game`
--

LOCK TABLES `category_game` WRITE;
/*!40000 ALTER TABLE `category_game` DISABLE KEYS */;
INSERT INTO `category_game` VALUES (1,1,1),(2,3,1),(3,4,1),(4,5,1),(5,1,2),(6,2,2),(7,3,2),(8,4,2),(9,1,3),(10,3,3),(11,4,3),(12,5,3),(13,1,4),(14,3,4),(15,5,4),(16,1,5),(17,3,5),(18,4,5),(19,5,5);
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developper`
--

LOCK TABLES `developper` WRITE;
/*!40000 ALTER TABLE `developper` DISABLE KEYS */;
INSERT INTO `developper` VALUES (1,'Santa Monica Studio'),(2,'Ubisoft'),(3,'CD PROJEKT RED'),(4,'Crystal Dynamics'),(5,'Square Enix'),(6,'FromSoftware'),(7,'Ember Lab'),(8,'Remedy Entertainment'),(9,'Luminous Productions');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editor`
--

LOCK TABLES `editor` WRITE;
/*!40000 ALTER TABLE `editor` DISABLE KEYS */;
INSERT INTO `editor` VALUES (1,'PlayStation PC LLC'),(2,'Ubisoft'),(3,'CD PROJEKT RED'),(4,'Square Enix'),(5,'BANDAI NAMCO'),(6,'Ember Lab'),(7,'505 Games');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game`
--

LOCK TABLES `game` WRITE;
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
INSERT INTO `game` VALUES (1,'God of War','2022-01-14',49.99,'Incarné de nouveau Kratos dans ce nouvel opus de la série mondialement connu: God of War.','https://www.youtube.com/embed/8O4uT214kak','2022-03-09',5,1,1),(2,'Elden ring','2022-02-25',59.99,'UNE NOUVELLE AVENTURE GRANDIOSE VOUS ATTEND Levez-vous, Sans-éclat, et puisse la grâce guider vos pas. ','https://www.youtube.com/watch?v=M2EZDQ6_jfA','2022-03-09',4,5,6),(3,'Kena: Bridge of Spirits','2021-09-21',39.99,'Un jeu d\'action-aventure narratif combiné à de l\'exploration et des combats effrénés.','https://www.youtube.com/watch?v=2PGn19xvfh0','2022-03-14',3,6,7),(4,'Control','2019-08-27',31.99,'Suite à l\'invasion d\'une agence secrète new-yorkaise par une force mystique inconnue, il vous revient de devenir directrice afin de reprendre le contrôle.','https://www.youtube.com/watch?v=aKgTwA9ugdQ','2022-03-14',4,7,8),(5,'Forspoken','2022-10-11',79.99,'Forspoken suit l\'aventure de Frey, une New-Yorkaise catapultée dans le monde beau et cruel d\'Athia.','https://www.youtube.com/watch?v=Xo6Cjl0law0','2022-03-14',5,4,9);
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
  `orderImg` int(11) DEFAULT NULL,
  `id_game` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'gow0.png',0,1),(2,'gow1.png',1,1),(3,'gow2.png',2,1),(4,'gow3.png',3,1),(5,'gowYt.png',4,1),(6,'gowLogo.png',5,1),(7,'er0.png',0,2),(8,'er1.png',1,2),(9,'er2.png',2,2),(10,'er3.png',3,2),(11,'erYt.png',4,2),(12,'erLogo.png',5,2),(13,'kena1.png',0,3),(14,'kena2.png',1,3),(15,'kena3.png',2,3),(16,'kena4.png',3,3),(17,'kenaLogo.png',4,3),(18,'kenaLogo.png',5,3),(19,'control1.png',0,4),(20,'control2.png',1,4),(21,'control3.png',2,4),(22,'control4.jpg',3,4),(23,'controlyt.png',4,4),(24,'controlLogo.png',5,4),(25,'forspoken1.png',0,5),(26,'forspoken2.png',1,5),(27,'forspoken3.png',2,5),(28,'forspoken4.png',3,5),(29,'forspokenyt.png',4,5),(30,'forspoken_logo.png',5,5);
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` VALUES (1,'anglais'),(2,'français'),(3,'allemand'),(4,'italien'),(5,'japonais'),(6,'polonais'),(7,'portugais'),(8,'portugais (Brésil)'),(9,'russe'),(10,'espagnol (Espagne)'),(11,'espagnol (Amérique latine)'),(12,'coréen'),(13,'turc'),(14,'chinois traditionnel'),(15,'chinois simplifié'),(16,'hongrois'),(17,'tchèque'),(18,'grec'),(19,'arabe'),(20,'thaï'),(21,'hindi');
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
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language_game`
--

LOCK TABLES `language_game` WRITE;
/*!40000 ALTER TABLE `language_game` DISABLE KEYS */;
INSERT INTO `language_game` VALUES (1,1,1,1),(2,2,1,1),(3,3,1,1),(4,4,1,1),(5,5,1,1),(6,1,1,0),(7,2,1,0),(8,3,1,0),(9,4,1,0),(10,5,1,0),(11,6,1,0),(12,7,1,0),(13,8,1,0),(14,9,1,0),(15,10,1,0),(16,6,1,1),(17,7,1,1),(18,8,1,1),(19,9,1,1),(20,10,1,1),(21,11,1,0),(22,12,1,0),(23,13,1,0),(24,14,1,0),(25,15,1,0),(26,16,1,0),(27,17,1,0),(28,18,1,0),(29,19,1,0),(30,20,1,0),(31,1,2,1),(32,2,2,1),(33,3,2,1),(34,6,2,1),(35,9,2,1),(36,10,2,0),(37,13,2,0),(38,10,2,0),(39,11,2,0),(40,13,2,0),(41,10,2,0),(42,12,2,0),(43,4,2,0),(44,8,2,0),(45,9,2,0),(46,3,2,1),(47,11,2,1),(48,15,2,1),(49,12,2,1),(50,9,2,1),(51,13,2,0),(52,14,2,0),(53,13,2,0),(54,11,2,0),(55,13,2,0),(56,15,2,0),(57,5,2,0),(58,4,2,0),(59,6,2,0),(60,9,2,0),(61,1,3,1),(62,2,3,1),(63,3,3,1),(64,4,3,1),(65,5,3,1),(66,1,3,0),(67,2,3,0),(68,3,3,0),(69,4,3,0),(70,5,3,0),(71,7,3,0),(72,8,3,0),(73,9,3,0),(74,10,3,0),(75,11,3,0),(76,6,3,1),(77,7,3,1),(78,8,3,1),(79,9,3,1),(80,10,3,1),(81,12,3,0),(82,13,3,0),(83,14,3,0),(84,15,3,0),(85,16,3,0),(86,17,3,0),(87,18,3,0),(88,19,3,0),(89,20,3,0),(90,21,3,0),(91,1,5,1),(92,2,5,1),(93,3,5,1),(94,4,5,1),(95,5,5,1),(96,1,5,0);
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
  `id_game` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `page_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,'Acceuil','home/home','/', null),(2,'Jeu','game/show','/game', null),(3,'Connexion','security/login','/login', null),(4,'Profil','user/user','/profil', null),(5,'Création de compte','registration/registration','/register', null),(6,'Panier','cart/cart','/cart', null),(7,'Contact','contact/contact','/contact', null),(8,'Bibliothèque','library/library','/library', null),(9,'Nouveau jeu','game/new','/new', null),(10,'Modifier un jeu','game/modify','/modify', null),(11,'Liste des jeux','game/index','/list', null),(12,'Liste des utilisateurs','user/index','/users', null), (13, 'Jeu', 'game/show', '/game/god_of_war', 1);
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
  `orderParagraph` int(11) DEFAULT NULL,
  `id_game` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_game` (`id_game`),
  CONSTRAINT `paragraph_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paragraph`
--

LOCK TABLES `paragraph` WRITE;
/*!40000 ALTER TABLE `paragraph` DISABLE KEYS */;
INSERT INTO `paragraph` VALUES (1,'Pénétrez dans le royaume du nord','Sa vengeance contre les dieux de l\'Olympe étant bien derrière lui, Kratos vit désormais comme un simple habitant du royaume des dieux (et des monstres) nordiques. C\'est dans ce monde inhospitalier et cruel qu\'il doit combattre pour sa survie... et apprendre à son fils à en faire de même. ',0,1),(2,'Profitez de votre deuxième chance','Kratos est à nouveau père. En tant que mentor et protecteur d\'Atreus, un fils prêt à tout pour gagner son respect, Kratos se retrouve contraint de dominer la rage qui l\'a défini pendant si longtemps alors qu\'il explore avec son fils un monde rempli de dangers. ',1,1),(3,'Voyagez dans un monde sombre peuplé de terribles créatures','Du marbre et des colonnes d\'une Olympe resplendissante aux environnements bruts des forêts, montagnes et cavernes de la mythologie nordique pré-viking, ce nouveau royaume possède un panthéon de créatures, monstres et dieux qui lui sont propres. ',2,1),(4,'Prenez part à des combats physiques et viscéraux','Grâce à une caméra libre à la troisième personne qui plonge le joueur encore plus au cœur de l\'action, les combats de God of War™ sont à l\'image du panthéon de créatures nordiques que Kratos affronte : grandioses, brutaux et ardus. La nouvelle arme principale et les capacités inédites de Kratos conservent l\'esprit de la série God of War, tout en proposant une vision inédite des conflits qui redéfinit le genre. ',3,1),(5,'Graphismes haute-fidélité','Des visuels saisissants améliorés sur PC. Profitez d\'une véritable résolution 4K sur les appareils compatibles, avec des fréquences d\'image déverrouillées pour une performance inégalée. Gérez vos paramètres avec une vaste sélection d\'options et de réglages graphiques prédéfinis, dont des ombres à haute résolution, des reflets d\'espace-écran améliorés, l\'ajout des technologies de GTAO et SSDO, et bien plus encore !',4,1),(6,'Compatibilité avec NVIDIA® DLSS et NVIDIA® Reflex','Quand la qualité rencontre la performance. Mettez à profit la puissance de l\'IA du super-échantillonnage par Deep Learning (Deep Learning Super Sampling, DLSS) de NVIDIA, qui améliore la fréquence d\'images et génère des images aussi belles que nettes sur les cartes graphiques NVIDIA compatibles. Utilisez la technologie NVIDIA Reflex de faible latence, qui vous permet de réagir plus rapidement et d\'enchaîner des combos plus dévastateurs grâce au temps de réponse inégalé des cartes graphiques GeForce.',5,1),(7,'Personnalisation des commandes','Jouez à votre façon. Grâce à une compatibilité avec les manettes sans fil DUALSHOCK®4 et DUALSENSE® et bien d\'autres périphériques de jeu, ainsi que des commandes souris et clavier entièrement personnalisables, vous avez la possibilité d\'ajuster la moindre de vos actions à votre style de jeu.',6,1),(8,'Compatibilité avec les écrans ultra-larges','Profitez d\'un niveau d\'immersion inédit. Voyagez à travers les royaumes du nord et leurs paysages époustouflants en vue panoramique. Grâce à une compatibilité avec les écrans ultra-larges en 21:9, God of War™ offre une expérience de qualité cinématographique qui améliore encore davantage les visuels théâtraux et fluides du jeu.',7,1),(9,'Une nouvelle aventure grandiose vous attend','Levez-vous, Sans-éclat, et puisse la grâce guider vos pas. Brandissez la puissance du Cercle d\'Elden. Devenez Seigneur de l\'Entre-terre.',0,2),(10,'Un vaste monde à explorer','Un monde immense aux environnements riches et variés, parsemé d\'obscurs et tortueux donjons tous reliés naturellement entre eux, vous attend. Au fil de votre exploration, goûtez à l\'inconnu, bravez les menaces permanentes et accomplissez votre destinée.',1,2),(11,'Créez votre propre personnage','En plus de l\'apparence de votre personnage, vous êtes libre de personnaliser votre arsenal d\'armes, d\'armures et de sorts. Construisez un personnage qui correspond à votre style de jeu, et devenez un guerrier surpuissant, ou encore un maître de la magie.',2,2),(12,'Un scénario épique né d\'un mythe','Plusieurs histoires se mêlent dans un récit narré par fragments. Vous rencontrerez des personnages complexes au fil de votre découverte épique de l\'Entre-terre.',3,2),(13,'Connectez-vous librement à d\'autres joueurs grâce au mode en ligne','En plus du mode multijoueur, vous permettant de vous connecter directement à d\'autres joueurs et de voyager ensemble, le jeu propose un système en ligne asynchrone unique vous permettant de ressentir la présence des autres Sans-éclat. ',4,2),(14,'Description du contenu pour adultes','Voici la description de l\'équipe de développement à propos du contenu du produit :\r\n\r\nCe jeu peut inclure du contenu qui n\'est pas approprié pour tous les âges ou pour la consultation au travail : Violence fréquente ou gore, Contenu générique destiné aux adultes ',5,2),(15,'','',6,2),(16,'','',7,2),(17,'','Un jeu d\'action-aventure narratif combiné à de l\'exploration et des combats effrénés. Incarnez Kena et développez une équipe de compagnons-esprits charmants appelés les Rots. Améliorez leurs compétences et inventez de nouvelles façons de manipuler l\'environnement.',0,3),(18,'L\'histoire','Kena, une jeune guide d\'esprits, voyage jusqu\'à un village abandonné à la recherche du temple de la montagne sacrée.  Elle lutte pour découvrir les secrets d\'une communauté oubliée, cachée dans une forêt impénétrable où des esprits vagabonds sont piégés.',1,3),(19,'Trouvez les Rots','Timides et fantomatiques, les esprits sont présents dans toute la forêt. Ils maintiennent leur équilibre en se nourrissant d\'éléments morts et en décomposition.',2,3),(20,'Principales caractéristiques','Composez votre équipe : trouvez et collectez des Rots pour gagner des pouvoirs, faire des découvertes et transformer l\'environnement.',3,3),(21,'','Explorez : découvrez un village oublié et une étrange malédiction. Faites appel au pouvoir du royaume des esprits pour restaurer ce monde autrefois majestueux.',4,3),(22,'','Combat effréné : les esprits sont corrompus, piégés et incapables de passer à autre chose, mettant Kena à l\'épreuve à chaque tournant.',5,3),(23,'','',6,3),(24,'','',7,3),(25,'','Suite à l\'invasion d\'une agence secrète new-yorkaise par une force mystique inconnue, il vous revient de devenir directrice afin de reprendre le contrôle.',0,4),(26,'','Dans ce jeu d\'action-aventure surnaturel à la 3ème personne créé par le studio de développement de jeux vidéo Remedy Entertainment, il vous faudra maîtriser pouvoirs surnaturels, munitions modifiables et environnements réactifs, le tout en combattant au sein d\'un monde implacable et imprévisible. ',1,4),(27,'','',2,4),(28,'','Control raconte l\'histoire de Jesse Faden et de sa quête personnelle de réponses, tandis qu\'elle endosse son nouveau rôle de directrice. Le monde de Control possède sa propre histoire, tout comme les alliés que Jesse se fera au fil du temps. Alors que Jesse coopère avec d\'autres agents du Bureau, elle fait la découverte d\'étranges expériences et secrets.',3,4),(29,'','',4,4),(30,'','',5,4),(31,'','',6,4),(32,'','',7,4),(33,'','Forspoken suit l\'aventure de Frey, une New-Yorkaise catapultée dans le monde beau et cruel d\'Athia. Frey devra utiliser ses nouvelles compétences magiques pour traverser de vastes paysages, affronter des créatures monstrueuses, et rentrer chez elle.',0,5),(34,'L\'odyssée d\'une héroïne récalcitrante','Emmenez Frey dans une aventure inoubliable en quête du chemin du retour après son arrivée mystérieuse dans un impressionnant monde fantastique. Élucidez les mystères d\'Athia à mesure que Frey explore la Brume funeste et découvre comment exploiter un pouvoir immense. ',1,5),(35,'Un monde ouvert aussi beau que cruel','Explorez les vastes royaumes d\'Athia, un magnifique continent doté de paysages à couper le souffle et de créatures surnaturelles prenant vie grâce à de superbes graphismes et des technologies de pointe. ',2,5),(36,'Un arsenal de sorts personnalisable','Affrontez des monstres retors dans des combats magiques à l\'aide d\'un vaste arsenal de puissantes compétences qui conviendront tout autant aux styles de jeu rapides et effrénés qu\'aux styles plus stratégiques et méthodiques. ',3,5),(37,'Du parkour intuitif, amélioré par la magie','Escaladez des murs, franchissez des canyons, sautez de hauteurs vertigineuses et sprintez à travers d\'immenses paysages. Les compétences uniques de Frey lui permettent de parcourir le monde ouvert aisément et en toute fluidité. ',4,5),(38,'','',5,5),(39,'','',6,5),(40,'','',7,5);
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platform_game`
--

LOCK TABLES `platform_game` WRITE;
/*!40000 ALTER TABLE `platform_game` DISABLE KEYS */;
INSERT INTO `platform_game` VALUES (1,1,1),(2,4,1),(3,1,2),(4,4,2),(5,5,2),(6,1,3),(7,1,5);
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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_requirement_game`
--

LOCK TABLES `type_requirement_game` WRITE;
/*!40000 ALTER TABLE `type_requirement_game` DISABLE KEYS */;
INSERT INTO `type_requirement_game` VALUES (1,1,1,1,'1','0'),(2,2,2,1,'1','0'),(3,3,3,1,'1','0'),(4,4,4,1,'1','0'),(5,5,5,1,'1','0'),(6,6,6,1,'1','0'),(7,7,7,1,'1','0'),(8,8,8,1,'1','0'),(9,1,1,1,'0','1'),(10,2,9,1,'0','1'),(11,3,10,1,'0','1'),(12,4,4,1,'0','1'),(13,5,11,1,'0','1'),(14,6,6,1,'0','1'),(15,7,12,1,'0','1'),(16,8,13,1,'0','1'),(17,1,1,2,'1','0'),(18,2,5,2,'1','0'),(19,3,9,2,'1','0'),(20,4,8,2,'1','0'),(21,5,5,2,'1','0'),(22,6,4,2,'1','0'),(23,7,9,2,'1','0'),(24,8,4,2,'1','0'),(25,1,1,2,'0','1'),(26,2,9,2,'0','1'),(27,3,11,2,'0','1'),(28,4,6,2,'0','1'),(29,5,6,2,'0','1'),(30,6,9,2,'0','1'),(31,7,9,2,'0','1'),(32,8,8,2,'0','1'),(33,1,1,3,'1','0'),(34,2,9,3,'1','0'),(35,3,3,3,'1','0'),(36,4,4,3,'1','0'),(37,5,5,3,'1','0'),(38,6,6,3,'1','0'),(39,7,7,3,'1','0'),(40,8,8,3,'1','0'),(41,1,1,3,'0','1'),(42,2,9,3,'0','1'),(43,3,10,3,'0','1'),(44,4,4,3,'0','1'),(45,5,11,3,'0','1'),(46,6,6,3,'0','1'),(47,7,12,3,'0','1'),(48,8,13,3,'0','1'),(49,1,1,5,'1','0'),(50,2,2,5,'1','0'),(51,3,3,5,'1','0'),(52,4,4,5,'1','0'),(53,5,5,5,'1','0'),(54,6,6,5,'1','0'),(55,7,7,5,'1','0'),(56,8,8,5,'1','0'),(57,1,1,5,'0','1'),(58,2,9,5,'0','1'),(59,3,10,5,'0','1'),(60,4,4,5,'0','1'),(61,5,11,5,'0','1'),(62,6,6,5,'0','1'),(63,7,12,5,'0','1'),(64,8,13,5,'0','1');
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

-- Dump completed on 2022-03-14 11:51:21
