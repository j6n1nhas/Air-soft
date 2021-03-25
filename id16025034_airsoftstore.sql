-- MariaDB dump 10.19  Distrib 10.5.9-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: id16025034_airsoftstore
-- ------------------------------------------------------
-- Server version	10.5.9-MariaDB-1:10.5.9+maria~focal

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
-- Current Database: `id16025034_airsoftstore`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `id16025034_airsoftstore` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `id16025034_airsoftstore`;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  `morada` varchar(300) NOT NULL,
  `codigoPostal` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `nif` varchar(100) NOT NULL,
  `numeroaep` varchar(50) DEFAULT NULL,
  `nomeaep` varchar(100) DEFAULT NULL,
  `datainscrição` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Fernando Carlos Costa','Rua Barbosa du Bocage nº 14 2 drt','2620-214','fccgestao@gmail.com','963522557','217850952',NULL,NULL,'0000-00-00'),(2,'Fernando Carlos Costa','Rua Barbosa du Bocage nº 14 2 drt','2620-214','fccgestao@gmail.com','963522557','217850952',NULL,NULL,'0000-00-00'),(3,'Carlos ','Loures','1100-112','dashdk@hotmail.com','121231212','123123123',NULL,NULL,'0000-00-00'),(4,'Cátia Sofia Oliveira Gonçalves','Rua Barbosa du Bocage nº 14 2 drt','2620-214','catialaureano@gmail.com','643445685','231534485',NULL,NULL,'0000-00-00');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  `modelo` varchar(300) NOT NULL,
  `tipologia` varchar(300) NOT NULL,
  `fabricante` varchar(300) NOT NULL,
  `idTipoProdutos` int(11) NOT NULL,
  `foto` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Glock 18c','TM_Glock18c','GBB','Tokio Marui',1,NULL),(2,'Cybergun1911','CB1911','GBB','Cybergun',1,NULL),(3,'COLT1911','Military1911','Pistola','COLT',1,NULL),(4,'M4 KRYTAC FULL METAL','M4','GBB','KRYTAC',2,NULL),(5,'\r\nMira Red Dot Samurai Delta Tactics','Black \r\nAC10264','Red Dots','Delta Tactics ',4,NULL),(6,'Glock','19 TAN','GBB','UMAREX',1,NULL),(8,'Glock','18C BLACK','EBB','TOKIO MARUI',1,NULL),(10,'9879','98798','987987','98798',1,'bd/fotos/9879-98798-987987-98798-1.jpg'),(11,'6456498799','8978978887','987987898','798798',1,'bd/fotos/6456498799-8978978887-987987898-798798-1.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoprodutos`
--

DROP TABLE IF EXISTS `tipoprodutos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipoprodutos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoprodutos`
--

LOCK TABLES `tipoprodutos` WRITE;
/*!40000 ALTER TABLE `tipoprodutos` DISABLE KEYS */;
INSERT INTO `tipoprodutos` VALUES (1,'Pistolas'),(2,'Espingardas'),(3,'Carregadores'),(4,'Miras'),(5,'BBs'),(6,'Green Gas'),(7,'Itens'),(8,'Luzes'),(9,'Mascaras'),(10,'Oculos'),(11,'Luvas'),(12,'Capacetes');
/*!40000 ALTER TABLE `tipoprodutos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissoes` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','1234','Admin',1),(2,'Tester','abcd','Tester',0),(3,'Fernando','','Fernando Carlos Costa',0),(4,'Fernando','Clara','Fernando Carlos Costa',0),(5,'Fernando','Clara','Fernando Carlos Costa',0),(6,'Carlos','cinel','Carlos ',0),(7,'Cátia Laureano','ClaraSofia','Cátia Sofia Oliveira Gonçalves',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendas`
--

DROP TABLE IF EXISTS `vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nif_cliente` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `nome_produto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_venda` date NOT NULL,
  `data_pagamento` date NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `cod_postal` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nif_cliente` (`nif_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendas`
--

LOCK TABLES `vendas` WRITE;
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-25 19:51:00
