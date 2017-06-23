CREATE DATABASE  IF NOT EXISTS `agenda` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `agenda`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: agenda
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `mp_contatos`
--

LOCK TABLES `mp_contatos` WRITE;
/*!40000 ALTER TABLE `mp_contatos` DISABLE KEYS */;
INSERT INTO `mp_contatos` VALUES (1,'Murilo Peres do Carmo','murilo@gmail.com','Rua 227',62981922860,3),(2,'Marcelo Peres do Carmo','marcelo_pc@hotmail.com','Rua Dr. Pedro nunes',6281922860,3);
/*!40000 ALTER TABLE `mp_contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `mp_usuario`
--

LOCK TABLES `mp_usuario` WRITE;
/*!40000 ALTER TABLE `mp_usuario` DISABLE KEYS */;
INSERT INTO `mp_usuario` VALUES ('Marcelo','marcelopc04@gmail.com',2147483647,'Av.Bela vista Condominio Cachoeira do Rosario','ad10fbf58e184b21660a085d7e5f0296',1),('Murilo','murilo@gmail.com',34133273,'pedro nunes','827ccb0eea8a706c4c34a16891f84e7b',2),('Amannda Alves','amannda902@gmail.com',6281922860,'Av.Bela vista Condominio Cachoeira do Rosario','5dab0ae7440cfb2b865aee8f7c2d5fbb',3);
/*!40000 ALTER TABLE `mp_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-23  9:34:47
