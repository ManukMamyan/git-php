-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: gallery
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(120) NOT NULL,
  `name` varchar(45) NOT NULL,
  `size` varchar(10) NOT NULL,
  `views` int(11) NOT NULL,
  `format` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'.\\img\\01.jpg','space1','1280x720',0,'jpg'),(2,'.\\img\\02.jpg','space2','1547x900',0,'jpg'),(3,'.\\img\\03.jpg','space3','3840x1956',0,'jpg'),(4,'.\\img\\04.jpg','space4','1200x680',0,'jpg'),(5,'.\\img\\05.jpg','space5','1920x1080',0,'jpg'),(6,'.\\img\\06.jpg','space6','1920x1080',0,'jpg'),(7,'.\\img\\07.jpg','space7','1680x1050',0,'jpg'),(8,'.\\img\\08.jpg','space8','1920x1080',0,'jpg'),(9,'.\\img\\09.jpg','space9','1500x775',0,'jpg'),(10,'.\\img\\10.jpg','space10','1920x1185',0,'jpg'),(11,'.\\img\\11.jpg','space11','1600x914',0,'jpg'),(12,'.\\img\\12.jpg','space12','1920x1080',0,'jpg'),(13,'.\\img\\13.jpg','space13','2048x1152',0,'jpg'),(14,'.\\img\\14.jpg','space14','1920x1080',0,'jpg'),(15,'.\\img\\15.jpg','space14','1280x720',0,'jpg'),(16,'.\\img\\16.jpg','space16','1920x1080',0,'jpg'),(17,'.\\img\\17.jpg','space17','2560x1600',0,'jpg'),(18,'.\\img\\18.jpg','space18','3840x2160',0,'jpg'),(19,'.\\img\\19.jpg','space19','1530x808',0,'jpg'),(20,'.\\img\\20.jpg','space20','1920x1080',0,'jpg');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-20 19:11:26
