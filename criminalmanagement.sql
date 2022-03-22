-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ghpolice
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

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
-- Table structure for table `chargesheet`
--

DROP TABLE IF EXISTS `chargesheet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chargesheet` (
  `ch_id` int(11) NOT NULL AUTO_INCREMENT,
  `cr_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `crime_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`ch_id`),
  KEY `cr_id` (`cr_id`),
  KEY `v_id` (`v_id`),
  KEY `crime_id` (`crime_id`),
  CONSTRAINT `chargesheet_ibfk_1` FOREIGN KEY (`cr_id`) REFERENCES `criminal` (`Crid`),
  CONSTRAINT `chargesheet_ibfk_2` FOREIGN KEY (`v_id`) REFERENCES `victim` (`Victim_id`),
  CONSTRAINT `chargesheet_ibfk_3` FOREIGN KEY (`crime_id`) REFERENCES `crime` (`crime_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10002 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chargesheet`
--

LOCK TABLES `chargesheet` WRITE;
/*!40000 ALTER TABLE `chargesheet` DISABLE KEYS */;
INSERT INTO `chargesheet` VALUES (1,101,202,303,'0000-00-00'),(3,420,2,7,'2021-03-20'),(44,101,2,303,'2021-03-20'),(101,100001,202,303,'0000-00-00'),(404,101,202,303,'2001-08-04'),(1001,100001,202,303,'2001-03-02'),(10000,420,2,1,'2021-03-20'),(10001,100001,202,303,'0000-00-00');
/*!40000 ALTER TABLE `chargesheet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crime`
--

DROP TABLE IF EXISTS `crime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crime` (
  `crime_id` int(11) NOT NULL,
  `crime_type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`crime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crime`
--

LOCK TABLES `crime` WRITE;
/*!40000 ALTER TABLE `crime` DISABLE KEYS */;
INSERT INTO `crime` VALUES (1,'robbery'),(7,'Theft'),(303,'ASSAULT'),(10001,'Murder');
/*!40000 ALTER TABLE `crime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `criminal`
--

DROP TABLE IF EXISTS `criminal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `criminal` (
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Crid` int(11) NOT NULL,
  PRIMARY KEY (`Crid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `criminal`
--

LOCK TABLES `criminal` WRITE;
/*!40000 ALTER TABLE `criminal` DISABLE KEYS */;
INSERT INTO `criminal` VALUES ('A','B','M',22,1),('DON','AMIT','M',33,101),('Abhishek','Kr','M',22,420),('Aman','kr','M',22,666),('ashu','kumari','F',22,999),('AMIT','V','M',21,1000),('abcd','xyz','M',20,100001);
/*!40000 ALTER TABLE `criminal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userlogin`
--

DROP TABLE IF EXISTS `userlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `staffid` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  PRIMARY KEY (`staffid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userlogin`
--

LOCK TABLES `userlogin` WRITE;
/*!40000 ALTER TABLE `userlogin` DISABLE KEYS */;
INSERT INTO `userlogin` VALUES (0,'1101','Admin','d2f75e8204fedf2eacd261e2461b2964e3bfd5be','AMIT','VIKRAM'),(0,'1111','Admin','f865b53623b121fd34ee5426c792e5c33af8c227','Vikram','Amit');
/*!40000 ALTER TABLE `userlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `victim`
--

DROP TABLE IF EXISTS `victim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `victim` (
  `FName` varchar(20) DEFAULT NULL,
  `LName` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Victim_id` int(11) NOT NULL,
  PRIMARY KEY (`Victim_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `victim`
--

LOCK TABLES `victim` WRITE;
/*!40000 ALTER TABLE `victim` DISABLE KEYS */;
INSERT INTO `victim` VALUES ('Avi','Arnav','M',19,2),('SIMPLE','AMIT','M',33,202),('Abi','av','M',1,800),('abhi','kumar','M',21,100001);
/*!40000 ALTER TABLE `victim` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-22 20:22:06
