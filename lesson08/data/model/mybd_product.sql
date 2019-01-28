-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: mybd
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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) DEFAULT '1',
  `category_id` int(11) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_category_fk` (`category_id`),
  CONSTRAINT `product_category_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,94033003,'ASUS FX570UD-DM148T','Core i5-8250U 1.6ГГц / GeForce GTX1050 2GB / 28 ГБ SSD + 500 ГБ HDD',55000.00,110,1,'\\img\\products\\30039403b.jpg','\\img\\products\\30039403b1.jpg','\\img\\products\\30039403b21.jpg'),(2,94683003,'Samsung Galaxy Note 9','Android 8.1 / Exynos 9810 4 x 2.7ГГц + 4 x 1.7ГГц /  128 ГБ',69000.00,89,2,'\\img\\products\\30039468b.jpg','\\img\\products\\30039468b3.jpg','\\img\\products\\30039468b5.jpg'),(3,66361001,'LG 50UK6750','50(126.9 см) / 3840х2160 Пикс (Ultra HD) / True Motion 100',49000.00,96,3,'\\img\\products\\10016636b.jpg','\\img\\products\\10016636b2.jpg','\\img\\products\\10016636b3.jpg'),(4,94573002,'Lenovo Legion Y520','Core i5-7300HQ 2.5ГГц / GeForce GTX1050 2GB / 128 ГБ SSD + 500 ГБ HDD',58000.00,56,1,'\\img\\products\\30029457b.jpg','\\img\\products\\30029457b1.jpg','\\img\\products\\30029457b21.jpg'),(5,99661000,'Sony KDL32RD433','32(81.2 см) / 1366x768 Пикс (HD Ready) / S-Maste',21000.00,74,3,'\\img\\products\\10009966b.jpg','\\img\\products\\10009966b1.jpg','\\img\\products\\10009966b2.jpg'),(6,24801001,'Samsung UE49M6550AU','49(124.5 см) / 1920x1080 Пикс (FullHD) / Dolby Digital Plus',39000.00,32,3,'\\img\\products\\10012480b.jpg','\\img\\products\\10012480b1.jpg','\\img\\products\\10012480b2.jpg'),(7,85793002,'Apple MacBook Pro 13','Core i5 2.3ГГц / Intel Iris Plus Graphics 640 / 128 ГБ',89900.00,64,1,'\\img\\products\\30028579b.jpg','\\img\\products\\30028579b1.jpg','\\img\\products\\30028579b2.jpg'),(8,68173003,'Honor 10 Blue','Android 8.1 / HiSilicon Kirin 970 4 x 2.4ГГц + 4 x 1.8ГГц / 	64 ГБ',26000.00,54,2,'\\img\\products\\30036817b.jpg','\\img\\products\\30036817b1.jpg','\\img\\products\\30036817b3.jpg');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-01 14:42:02
