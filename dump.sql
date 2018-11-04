-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: db_banca
-- ------------------------------------------------------
-- Server version	5.7.23-log

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
-- Table structure for table `tbl_bancas`
--

DROP TABLE IF EXISTS `tbl_bancas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_bancas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bancas`
--

LOCK TABLES `tbl_bancas` WRITE;
/*!40000 ALTER TABLE `tbl_bancas` DISABLE KEYS */;
INSERT INTO `tbl_bancas` VALUES (1,'Vila Maria','Rua Souza, 126','(11)12345-3456',1),(2,'Jandira','Rua Oitava, 5','(11)12345-3456',1),(9,'Vila Yara','Rua Oitenta, 20','01142432227',1);
/*!40000 ALTER TABLE `tbl_bancas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_celebridades`
--

DROP TABLE IF EXISTS `tbl_celebridades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_celebridades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `sobre` longtext NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_celebridades`
--

LOCK TABLES `tbl_celebridades` WRITE;
/*!40000 ALTER TABLE `tbl_celebridades` DISABLE KEYS */;
INSERT INTO `tbl_celebridades` VALUES (1,'Rodrigo Santoro','asuighdasidhiuasdhiashdiaus','arquivos/02c12dcce415f688b658df4628244a1b.jpg',1),(3,'Manoel','dasuidiasuhd iauhdiashdisuahd iasdhi asdiuashdiasdhiasu dias diasd ias di hsiasdhi as diaus aiu dhais iashsda','arquivos/4138bdf0358cefa2e939732db9e52b0b.png',1);
/*!40000 ALTER TABLE `tbl_celebridades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contatos`
--

DROP TABLE IF EXISTS `tbl_contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `homepage` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `sugestao` varchar(255) DEFAULT NULL,
  `informacao` varchar(255) DEFAULT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  `profissao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contatos`
--

LOCK TABLES `tbl_contatos` WRITE;
/*!40000 ALTER TABLE `tbl_contatos` DISABLE KEYS */;
INSERT INTO `tbl_contatos` VALUES (2,'Igor','1345678','12345678','igorfs10@gmail.com','http://www.ig.com.br','http://www.ig.com.br','asdsad','asadssdds','m','sadsdads'),(3,'Mario','1345678','12345678','igorfs10@gmail.com','http://www.ig.com.br','http://www.ig.com.br','asndoasidnoasidnoaisndoasindasndiaosndasndoaisndoiasndosandoainsodainsdoanssodiansodnaosndoaisndoaisndiasndiasndasoindaisndoasdnaosndiosanodaisndoansdoainsdoiasndoasndoaisndoaisndoasindoasino','asndoasidnoasidnoaisndoasindasndiaosndasndoaisndoiasndosandoainsodainsdoanssodiansodnaosndoaisndoaisndiasndiasndasoindaisndoasdnaosndiosanodaisndoansdoainsdoiasndoasndoaisndoaisndoasindoasino','m','nnasoaisnoaidncxxz'),(5,'Igor','12345678','123 12345-1234','mario@nintendo.com.br','http://www.google.com','www.facebook.com','ghvuasdu','uidasuisdhia','m','Aluno'),(6,'Igor','12345678','123 12345-1234','tomas@limao.com.br','http://www.google.com','igor.facebook.com','adsdas','asdasd','f','asdasd');
/*!40000 ALTER TABLE `tbl_contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_niveis`
--

DROP TABLE IF EXISTS `tbl_niveis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_niveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_niveis`
--

LOCK TABLES `tbl_niveis` WRITE;
/*!40000 ALTER TABLE `tbl_niveis` DISABLE KEYS */;
INSERT INTO `tbl_niveis` VALUES (1,'Editor',1),(2,'Redator',1),(3,'Jogador',1),(5,'sannin',1),(7,'Operador',1),(9,'Mario',1);
/*!40000 ALTER TABLE `tbl_niveis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_noticias`
--

DROP TABLE IF EXISTS `tbl_noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `noticia` longtext NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_noticias`
--

LOCK TABLES `tbl_noticias` WRITE;
/*!40000 ALTER TABLE `tbl_noticias` DISABLE KEYS */;
INSERT INTO `tbl_noticias` VALUES (1,'Hei','dasdasdasdasd adsasd','arquivos/3299e8858fb9414ff5c2465ca7b41f51.png',1),(3,'Ferramenta','dasdyasgdiasduhiasduh iuasdh iasuhiash diaushdiuas dhiasdh asid ','arquivos/73b5bb7b77d3b01c8327f5bde24a1a4c.png',1);
/*!40000 ALTER TABLE `tbl_noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sobre`
--

DROP TABLE IF EXISTS `tbl_sobre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sobre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `sobre` longtext NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id`,`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sobre`
--

LOCK TABLES `tbl_sobre` WRITE;
/*!40000 ALTER TABLE `tbl_sobre` DISABLE KEYS */;
INSERT INTO `tbl_sobre` VALUES (1,'Woodpecker','orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s wi',1),(2,'Emanuel','isdiuas hdiuash diuashdiuthesh diheyahsdiashi auishasi udhmanisau duashiahiusahiasu',1),(3,'Luis Luis','udhaiusd hiusahdiasu dhiauhdiasuhd iasuhdiuashdiuasdhiausdhaisudh asiudh aiusdh iasudhiausdhiuasdhia sdhiasu dhasuihdiash diash diuash diashdiuha siudhas iduhasiud ahsiudh asidu hasiudhaisu diuash diadiasjd aoisdj oaisdjoiasjdoiasodasjusd hauish dauishd asuid hiasudha isudhaisud hia',1),(4,'Manoel','jsahdjashdiuahwiuhiquwheiuah dushdiusdhfius idufshfsdiuhfiweu iuhif weifhweir weiruhweiurh weiurhweiurhwei rwehiurhweriuweh riwuerhweiur hwierhfbgjsxbfnkjs djfskj',1),(5,'joisajoidasjda','sasjdnaskjdndajnsdkjasasjkdnklasj dajsk ndalksj dlkasjdiuashdi uas hdiuas hiudah s ',1);
/*!40000 ALTER TABLE `tbl_sobre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome_UNIQUE` (`nome`),
  KEY `fk_usuarios_niveis_idx` (`id_nivel`),
  CONSTRAINT `fk_usuarios_niveis` FOREIGN KEY (`id_nivel`) REFERENCES `tbl_niveis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (1,'Igor','1234',1,1),(3,'Lara','1234',7,1),(4,'Operador','123',5,1),(5,'Julio','123456',2,1);
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-04 18:56:15
