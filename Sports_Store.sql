-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: sports_store
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `authentication`
--

DROP TABLE IF EXISTS `authentication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authentication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `user_Name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `created_At` datetime DEFAULT NULL,
  `created_By` datetime DEFAULT NULL,
  `updated_At` datetime DEFAULT NULL,
  `updated_By` int(11) DEFAULT NULL,
  `deleted_At` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authentication`
--

LOCK TABLES `authentication` WRITE;
/*!40000 ALTER TABLE `authentication` DISABLE KEYS */;
/*!40000 ALTER TABLE `authentication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catagory`
--

DROP TABLE IF EXISTS `catagory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catagory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `created_At` datetime DEFAULT NULL,
  `created_By` int(11) DEFAULT NULL,
  `updated_At` datetime DEFAULT NULL,
  `updated_By` int(11) DEFAULT NULL,
  `deleted_At` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catagory`
--

LOCK TABLES `catagory` WRITE;
/*!40000 ALTER TABLE `catagory` DISABLE KEYS */;
/*!40000 ALTER TABLE `catagory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `payment_Status` int(1) NOT NULL,
  `advance` int(11) NOT NULL,
  `due` int(11) DEFAULT NULL,
  `created_At` datetime DEFAULT NULL,
  `created_By` int(11) DEFAULT NULL,
  `updated_At` datetime DEFAULT NULL,
  `updated_By` int(11) DEFAULT NULL,
  `deleted_At` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itmes`
--

DROP TABLE IF EXISTS `itmes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itmes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_Name` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `catagory_Id` int(11) DEFAULT NULL,
  `company_Name` varchar(100) NOT NULL,
  `created_At` datetime NOT NULL,
  `created_By` int(11) NOT NULL,
  `updated_At` datetime DEFAULT NULL,
  `updated_By` int(11) DEFAULT NULL,
  `deleted_At` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itmes`
--

LOCK TABLES `itmes` WRITE;
/*!40000 ALTER TABLE `itmes` DISABLE KEYS */;
/*!40000 ALTER TABLE `itmes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_Id` int(11) NOT NULL,
  `purchase_Date` date NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_Amount` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `vat` decimal(10,2) NOT NULL,
  `total_Amount` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_By` int(11) NOT NULL,
  `updated_At` datetime NOT NULL,
  `updated_By` int(11) NOT NULL,
  `deleted_At` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase`
--

LOCK TABLES `purchase` WRITE;
/*!40000 ALTER TABLE `purchase` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_details`
--

DROP TABLE IF EXISTS `purchase_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchase_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_Id` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `product_Id` int(11) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_At` datetime NOT NULL,
  `created_By` int(11) NOT NULL,
  `updated_At` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_details`
--

LOCK TABLES `purchase_details` WRITE;
/*!40000 ALTER TABLE `purchase_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchase_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_Id` int(11) NOT NULL,
  `sales_Date` date NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_amount` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `vat` decimal(10,2) NOT NULL,
  `total_Amount` decimal(10,2) NOT NULL,
  `created_At` datetime NOT NULL,
  `created_By` int(11) NOT NULL,
  `updated_At` datetime NOT NULL,
  `updated_By` int(11) NOT NULL,
  `deleted_At` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_details`
--

DROP TABLE IF EXISTS `sales_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_Id` int(11) NOT NULL,
  `sales_date` date NOT NULL,
  `product_Id` int(11) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_At` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_At` datetime NOT NULL,
  `updated_By` int(11) NOT NULL,
  `deleted_At` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_details`
--

LOCK TABLES `sales_details` WRITE;
/*!40000 ALTER TABLE `sales_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_Id` int(11) NOT NULL,
  `product_Id` int(11) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_date` date NOT NULL,
  `created_At` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_At` datetime NOT NULL,
  `updated_By` int(11) NOT NULL,
  `deleted_At` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `suplayer_Catagory` char(1) NOT NULL,
  `created_At` datetime DEFAULT NULL,
  `created_By` int(11) DEFAULT NULL,
  `updated_At` datetime DEFAULT NULL,
  `updated_By` int(11) DEFAULT NULL,
  `deleted_At` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-10 11:54:03
