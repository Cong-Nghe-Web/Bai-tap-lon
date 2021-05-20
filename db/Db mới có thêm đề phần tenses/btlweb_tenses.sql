-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: btlweb
-- ------------------------------------------------------
-- Server version	8.0.24

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
-- Table structure for table `tenses`
--

DROP TABLE IF EXISTS `tenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tenses` (
  `ID` int NOT NULL,
  `Question` longtext NOT NULL,
  `A` varchar(45) NOT NULL,
  `B` varchar(45) NOT NULL,
  `C` varchar(45) NOT NULL,
  `D` varchar(45) NOT NULL,
  `Answer` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenses`
--

LOCK TABLES `tenses` WRITE;
/*!40000 ALTER TABLE `tenses` DISABLE KEYS */;
INSERT INTO `tenses` VALUES (1,'I ............Louisiana state University','A. am attending','B. attend','C. was attending','D. attended','B'),(2,'He has been selling motorcycles.................','A. ten years ago','B. since 10 years','C. for 10 years ago','D. for 10 years','D'),(3,'Columbus............America more than 400 years ago.','A. discovered','B. has discovered','C. had discovered','D. he has gone','A'),(4,'He fell down when he ............towards the church.','A. run ','B. runs ','C. was running ','D. had run','C'),(5,'We ............there when our father died.','A. still lived ','B. lived still ','C. was still living ','D. were still living','D'),(6,'They ............pingpong when their father comes back home.','A. will play ','B. will be playing ','C. play ','D. would play','B'),(7,'By Christmas, I.............for you for 6 months','A. Shall have been working ','B. shall work','C. have been working ','D. shall be working','A'),(8,'I............in the room now.','A. am being ','B. was being ','C. have been being ','D. am','D'),(9,'I.............to New york three times this year.','A. have been ','B. was ','C. were ','D. had been','A'),(10,'I will come and see you before I.............for America.','A. leave ','B. will leave ','C. have left ','D. shall leave','A');
/*!40000 ALTER TABLE `tenses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-20 15:36:25
