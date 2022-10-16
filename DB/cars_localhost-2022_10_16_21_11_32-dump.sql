-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: cars
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `KTEO`
--

DROP TABLE IF EXISTS `KTEO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `KTEO` (
  `date` date NOT NULL,
  `kteo` text NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `car_id` int NOT NULL,
  `next_check` date NOT NULL,
  `result` int NOT NULL,
  `emissions` tinyint(1) NOT NULL,
  `comments` longtext,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `KTEO_car_null_fk` (`car_id`),
  CONSTRAINT `KTEO_car_null_fk` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KTEO`
--

LOCK TABLES `KTEO` WRITE;
/*!40000 ALTER TABLE `KTEO` DISABLE KEYS */;
/*!40000 ALTER TABLE `KTEO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car` (
  `license_plate` varchar(15) DEFAULT NULL,
  `vehicle_type` varchar(40) NOT NULL,
  `ownership_type` varchar(40) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `owner` varchar(40) NOT NULL,
  `fuel` varchar(40) NOT NULL,
  `manufacturer` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `color` varchar(15) DEFAULT NULL,
  `displasment` int NOT NULL,
  `year_man` year NOT NULL,
  `year_license` year NOT NULL,
  `year_purch` year NOT NULL,
  `service_reg_km` int DEFAULT NULL,
  `service_reg_months` int DEFAULT NULL,
  `service_oil_km` int DEFAULT NULL,
  `service_oil_months` int DEFAULT NULL,
  `service_tyre_km` int NOT NULL,
  `KTEO_years` int NOT NULL,
  `emission_years` int NOT NULL,
  `escort_id` int DEFAULT NULL,
  `comments` longtext,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `car_car_id_fk` (`escort_id`),
  CONSTRAINT `car_car_id_fk` FOREIGN KEY (`escort_id`) REFERENCES `car` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES ('KSA-1234','SUV','I.X.',1,'KORO_PERI','gas','Ford','focus','black',2500,2009,2010,2010,60000,18,50000,12,10000,2,3,NULL,NULL,1),('KRE-4567','van','ix',2,'katsa','petrol','mazda','mx-5','red',1800,2010,2011,2012,2000,12,30000,15,10000,2,3,NULL,NULL,1),('REA-5555','TRACK','ix',3,'kostas','gas','ford','ranger','blue',3000,2005,2005,2005,2222,2,2222,22,22222,2,3,NULL,NULL,1),('LRE-9999','suv','ix',4,'john','petrol','toyote','corola','grey',2000,2002,2002,2002,22222,33,3333,33,33333,2,3,NULL,NULL,1);
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`peri`@`localhost`*/ /*!50003 TRIGGER `first_km` AFTER INSERT ON `car` FOR EACH ROW begin
    insert into km(date, odometer, car_id)
        values (cast(now()as date ),0,new.id);
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `damages`
--

DROP TABLE IF EXISTS `damages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `damages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `repair_date` date NOT NULL,
  `price` float NOT NULL,
  `car_id` int NOT NULL,
  `description` longtext,
  `images` varbinary(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `damages_car_null_fk` (`car_id`),
  CONSTRAINT `damages_car_null_fk` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `damages`
--

LOCK TABLES `damages` WRITE;
/*!40000 ALTER TABLE `damages` DISABLE KEYS */;
/*!40000 ALTER TABLE `damages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emissions`
--

DROP TABLE IF EXISTS `emissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emissions` (
  `date` date NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `kteo` text NOT NULL,
  `next_check` date NOT NULL,
  `result` tinyint(1) NOT NULL,
  `comments` longtext NOT NULL,
  `price` float NOT NULL,
  `car_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emissions_car_null_fk` (`car_id`),
  CONSTRAINT `emissions_car_null_fk` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emissions`
--

LOCK TABLES `emissions` WRITE;
/*!40000 ALTER TABLE `emissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `emissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insurance`
--

DROP TABLE IF EXISTS `insurance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `insurance` (
  `contract_number` text NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `agent` text NOT NULL,
  `price` float NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `car_id` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `insurance_car_id_index` (`car_id`),
  CONSTRAINT `insurance_car_null_fk` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insurance`
--

LOCK TABLES `insurance` WRITE;
/*!40000 ALTER TABLE `insurance` DISABLE KEYS */;
/*!40000 ALTER TABLE `insurance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `km`
--

DROP TABLE IF EXISTS `km`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `km` (
  `date` date NOT NULL,
  `odometer` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `car_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `km_car_id_index` (`car_id`),
  CONSTRAINT `km_car_null_fk` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `km`
--

LOCK TABLES `km` WRITE;
/*!40000 ALTER TABLE `km` DISABLE KEYS */;
INSERT INTO `km` VALUES ('2020-10-15',1000,2,1),('2022-09-26',222223,3,2),('2022-09-26',24222234,4,3),('2022-09-26',24222234,5,1),('2022-10-16',0,6,4);
/*!40000 ALTER TABLE `km` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `road_assistance`
--

DROP TABLE IF EXISTS `road_assistance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `road_assistance` (
  `start_date` date NOT NULL,
  `car_id` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `end_date` date NOT NULL,
  `road_as_name` text NOT NULL,
  `price` float NOT NULL,
  `contract_number` text NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `road_assistance_car_null_fk` (`car_id`),
  CONSTRAINT `road_assistance_car_null_fk` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `road_assistance`
--

LOCK TABLES `road_assistance` WRITE;
/*!40000 ALTER TABLE `road_assistance` DISABLE KEYS */;
/*!40000 ALTER TABLE `road_assistance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_type`
--

DROP TABLE IF EXISTS `service_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_type`
--

LOCK TABLES `service_type` WRITE;
/*!40000 ALTER TABLE `service_type` DISABLE KEYS */;
INSERT INTO `service_type` VALUES (1,'regular'),(2,'oil'),(3,'non-regular');
/*!40000 ALTER TABLE `service_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `car_id` int NOT NULL,
  `date` date NOT NULL,
  `km` int NOT NULL,
  `price` float NOT NULL,
  `shop` text NOT NULL,
  `comments` longtext,
  `type` int NOT NULL,
  `service_reg_km` int NOT NULL,
  `service_reg_date` date NOT NULL,
  `service_oil_km` int NOT NULL,
  `service_oil_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `services_car_null_fk` (`car_id`),
  KEY `services_service_type_null_fk` (`type`),
  CONSTRAINT `services_car_null_fk` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`),
  CONSTRAINT `services_service_type_null_fk` FOREIGN KEY (`type`) REFERENCES `service_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (2,1,'2020-10-15',1000,20.2,'mitroulias','injection',2,10000,'2022-10-15',20000,'2020-10-08');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`peri`@`localhost`*/ /*!50003 TRIGGER `odom_serv` BEFORE INSERT ON `services` FOR EACH ROW begin
    insert into km (date,odometer,car_id) values (new.date,new.km,new.car_id);
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `tyre_change`
--

DROP TABLE IF EXISTS `tyre_change`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tyre_change` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `km` int NOT NULL,
  `price` float NOT NULL,
  `shop` text NOT NULL,
  `comments` longtext,
  `car_id` int NOT NULL,
  `dimensions` varchar(15) NOT NULL,
  `manufacturer` text NOT NULL,
  `changed_front` tinyint(1) NOT NULL,
  `changed_rear` tinyint(1) DEFAULT NULL,
  `next_change_km` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tyre_change_car_null_fk` (`car_id`),
  CONSTRAINT `tyre_change_car_null_fk` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tyre_change`
--

LOCK TABLES `tyre_change` WRITE;
/*!40000 ALTER TABLE `tyre_change` DISABLE KEYS */;
/*!40000 ALTER TABLE `tyre_change` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`peri`@`localhost`*/ /*!50003 TRIGGER `odom_tyres` BEFORE INSERT ON `tyre_change` FOR EACH ROW begin
    insert into km (date,odometer,car_id) values (new.date,new.km,new.car_id);
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-16 21:11:32
