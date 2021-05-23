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
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test` (
  `id` int NOT NULL,
  `Question` longtext NOT NULL,
  `A` longtext NOT NULL,
  `B` longtext NOT NULL,
  `C` longtext NOT NULL,
  `D` longtext NOT NULL,
  `Answer` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (1,'John has been working as a journalist since he________ from university in 2000.','A. had graduated','B. graduate','C. will be graduate','D. graduated','A'),(2,'None of the people________ could come.','A. were invited to the party','B. invited to the party','C. who invited to the party','D. was invited to the party','C'),(3,'They had a global ______ hit with their album concept about “The dark side of the Moon”.','A. popular','B. top','C. smash','D. song','A'),(4,'It won\'t be safe to use these stairs_________','A. after they will repair them','B. until they have them repaired','C. before they repair them','D. when they repaired them','B'),(5,'I _____ a bike to school every day but today I _____ to school by bus because it was stolen yesterday.','A. ride - am going','B. is riding - am going','C. ride - go','D. rode - went','D'),(6,'If you _________ Mary by chance, please give her my phone number.','A. should meet','B. could meet','C. will meet','D. met','D'),(7,'Would you kindly inform me who is responsible________.the travel arrangements?','A. on','B. in','C. for','D. to','C'),(8,'People are advised to _________ smoking because of its harm to their health.','A. cut off','B. cut down','C. cut down on','D. cut in','A'),(9,'His poor standard of play fully justifies his ________from the team for the next match.','A. expulsion','B. rejection','C. dismissal','D. exclusion','B'),(10,'He left on ______ 10 o\'clock train yesterday to see his father who was taken to ______ hospital last week when he broke his right leg.','A. the - a','B. the - Ø','C. the - the','D. a - a','B'),(11,'Faraday made many_______in the field of physics and chemistry.','A. discoveries','B. discovering','C. discover','D. discovered','D'),(12,'“Jenny’s always wanted to get to the top of her career, _______?”- “Yes, she’s an ambitious girl”.','A. hasn’t her','B. isn’t she','C. has she','D. hasn’t she','A'),(13,'My neighbor offered_________us to the airport.','A. take','B. employment will be given to me by the university','C. to taking','D. taking','C'),(14,'According to the conditions of my scholarship, after finishing my degree,_______.','A. my education will be employed by the university','C. I will be employed by the university','B. employment will be given to me by the university','D. the university will employ me','B'),(15,'If my time-management skills had been better, I ________ from serious stress when I was in university.','A. hadn\'t sufferedA. hadn\'t suffered','B. will not suffer','C. wouldn\'t suffer','D. wouldn\'t have suffered','C'),(16,'A: What a wonderful party! B: __________','A. Same to you. Thanks!','B. I am fine. Thank you!','C. I don\'t know. Let me check.','D. I am happy you like it.','D'),(17,'\"Hello, I\'d like to speak to Mr. Green, please.\" “__________”','A. I\'m sorry. I\'ll call again later.','B. Sure, I\'ll put you through.','C. Sorry. Can you take a message?','D. I\'m afraid I don\'t know.','A'),(18,'Urban development (A) ean magnify the risk of (B) environmental hazards for example (C) flash flooding (D)','A','B','C','D','A'),(19,'Last month, while my friend was traveling (A) round England by the (B) car, he crashed the (C) car into a (D) tree.','A','B','C','D','B'),(20,'Because of (A) severe asthma attacks, (B) the doctor suggested (C) his patient to stop (D) smoking.','A','B','C','D','A'),(21,'There was a 5% drop in the student enrollment of the university.','A. The student enrollment of the university dropped in 5%.','B. The student enrollment of the university dropped for 5%.','C. The student enrollment of the university dropped by 5%.','D. The student enrollment of the university dropped to 5%.','C'),(22,'We might stop here if you don\'t change your way of speaking.','A. We might stop here if not you change your way of speaking.','B. We might stop here if you change your way of speaking.','C. We might stop here unless you change your way of speaking.','D. We might stop here unless you don\'t change your way of speaking.','D'),(23,'At no time Jane asks me when she uses my bathroom.','A. Jane has no time to ask me when she uses my bathroom.','B. Jane is always using my bathroom without asking!','C. Sometimes Jane asks me when she uses my bathroom.','D. It is very unusual for Jane to ask me when she uses my bathroom.','B'),(24,'He lost in the election because he is a weak and _______ leader.','A. undeciding','B. undecided','C. undecisive','D. indecisive','D'),(25,'When she was _______ grade 11, she wished to have someone who would stand beside her through thick and thin.','A. of','B. in','C. at','D. on','B'),(26,'The astronauts had to be given a clean _____ of health before embarking on the space mission.','A. certificate','B. bill','C. receipt','D. statement','B'),(27,' _______ , she often wears in red and black.','A. After I have met my beloved teacher','B. Whenever I meet my beloved teacher','C. By the time I meet my beloved teacher','D. Until I will meet my beloved teacher','B'),(28,'_______ George Wilkins has transferred to the St Louis branch, there is a vacancy in our division. Would you like to apply for?','A. Owing to','B. Now that','C. Even though','D. As to','D'),(29,'Species become extinct or endangered for _______ number of reasons, but _______ primary cause is the destruction of habitat by human activities.','A. Ø / a','B. a / the','C. the / a','D. Ø / Ø','A'),(30,'Being _____ to Manchester City, their sons have got lost many times since they moved there.','A. useless','B. unused','C. unfamiliar','D. unacquainted','C'),(31,'Scholars believe that there are still relics _____ under the tomb and awaiting to be excavated.','A. burying','B. buried','C. are burying','D. to bury','D'),(32,'There has been little rain in this area for too long, _______?','A. has it','B. has there','C. hasn\'t it','D. hasn\'t there','D'),(33,'Looking down at the coral reef, we saw _______ of tiny, multi-colored fish.','A. swarms','B. flocks','C. teams','D. shoals','A'),(34,'My daughter was playing computer games while her little brother _______ a football match.','A. watched','B. watches','C. was watching','D. watching','B'),(35,'If I _______ an astronaut travelling in a cabin, I would not be annoyed by the weightlessness.','A. am','B. be','C. will be','D. were','C'),(36,'I remember _______ a beautiful woolen mob-cap a few days before Christmas.','A. to receive','B. to receiving','C. receiving','D. receive','B'),(37,'Don\'t be _______ by those slick-talking salesmen.','A. put aside','B. put up','C. taken in','D. taken away','B'),(38,'The old man _______ when he found out that the children had damaged his car.','A. hit the roof','B. saw pink elephants','C. made my blood boil','D. brought the house down','D');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-21 14:54:57
