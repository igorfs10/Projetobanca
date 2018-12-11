-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: db_banca
-- ------------------------------------------------------
-- Server version	5.6.10-log

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
-- Temporary view structure for view `selectprodutoaleatorio`
--

DROP TABLE IF EXISTS `selectprodutoaleatorio`;
/*!50001 DROP VIEW IF EXISTS `selectprodutoaleatorio`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `selectprodutoaleatorio` AS SELECT 
 1 AS `id`,
 1 AS `nome`,
 1 AS `sobre`,
 1 AS `preco`,
 1 AS `desconto`,
 1 AS `id_subcategoria`,
 1 AS `ativo`,
 1 AS `imagem`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `selectprodutosbanca`
--

DROP TABLE IF EXISTS `selectprodutosbanca`;
/*!50001 DROP VIEW IF EXISTS `selectprodutosbanca`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `selectprodutosbanca` AS SELECT 
 1 AS `id`,
 1 AS `nome`,
 1 AS `sobre`,
 1 AS `preco`,
 1 AS `desconto`,
 1 AS `id_subcategoria`,
 1 AS `ativo`,
 1 AS `imagem`,
 1 AS `sub`,
 1 AS `cat`*/;
SET character_set_client = @saved_cs_client;

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bancas`
--

LOCK TABLES `tbl_bancas` WRITE;
/*!40000 ALTER TABLE `tbl_bancas` DISABLE KEYS */;
INSERT INTO `tbl_bancas` VALUES (2,'Jandira','Rua Oitava, 5','(11)12345-3456',1),(9,'Vila Yara','Rua Oitenta, 20','01142432227',0),(13,'Aqui 123','rua de teste, 666','(11) 1111-1111',1);
/*!40000 ALTER TABLE `tbl_bancas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_categorias`
--

DROP TABLE IF EXISTS `tbl_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categorias`
--

LOCK TABLES `tbl_categorias` WRITE;
/*!40000 ALTER TABLE `tbl_categorias` DISABLE KEYS */;
INSERT INTO `tbl_categorias` VALUES (1,'Livros',1),(3,'Quadrinhos',1);
/*!40000 ALTER TABLE `tbl_categorias` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_celebridades`
--

LOCK TABLES `tbl_celebridades` WRITE;
/*!40000 ALTER TABLE `tbl_celebridades` DISABLE KEYS */;
INSERT INTO `tbl_celebridades` VALUES (1,'Morena Baccarin','Filha do jornalista Fernando Baccarin e da atriz Vera Setta, mudou-se com a família para os Estados Unidos, quando tinha sete anos de idade, se estabelecendo em Nova Iorque.[3][4] Ali estudou no Juilliard School,[1] e foi colega de escola da também atriz Claire Danes (com quem contracenou na série Homeland).[3]\r\n\r\nSeu nome foi escolhido por sua mãe, que ao saber que a maquiadora com quem trabalhou tinha batizado sua filha de \"Morena\", gostou da ideia e decidiu fazer o mesmo.\r\n\r\nTrabalhou, desde o ano 2000, como atriz no circuito off-Broadway, onde chegou a substituir nos ensaios de uma peça de Tchecov a atriz Natalie Portman e contracenou com Meryl Streep, de quem recebeu então um elogio indireto: \"Ninguém pode ficar doente aqui, pois os substitutos são melhores que nós\"; apesar disto, ganhava mal pelos trabalhos e resolveu experimentar conseguir algo melhor em Los Angeles, em 2001, dando a si mesma um prazo de 7 dias para conseguir algo.[1]\r\n\r\nEm menos de uma semana, contudo, fez um teste para Firefly, sendo então contratada,[1] fazendo parte do elenco da série de ficção-científica ambientada no ano 2517, interpretando Inara Serra, uma cortesã de luxo.[3] Fez também aparições em seriados como The O.C. e How I Met Your Mother.[5]','arquivos/cd1411f942e0c9b4c51fe58f927adf12.jpg',1),(3,'Manoel','dasuidiasuhd iauhdiashdisuahd iasdhi asdiuashdiasdhiasu dias diasd ias di hsiasdhi as diaus aiu dhais iashsda','arquivos/4138bdf0358cefa2e939732db9e52b0b.png',1),(5,'Eu','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.\r\nNunc viverra imperdiet enim. Fusce est. Vivamus a tellus.\r\n','arquivos/103645d414df5313d852e613cc0299d9.jpg',0);
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contatos`
--

LOCK TABLES `tbl_contatos` WRITE;
/*!40000 ALTER TABLE `tbl_contatos` DISABLE KEYS */;
INSERT INTO `tbl_contatos` VALUES (11,'Igor','12345678','123 12345-1234','igor@igor.igor','http://www.google.com','www.facebook.com','asdas','asdasdas','m','asdasasd');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_niveis`
--

LOCK TABLES `tbl_niveis` WRITE;
/*!40000 ALTER TABLE `tbl_niveis` DISABLE KEYS */;
INSERT INTO `tbl_niveis` VALUES (1,'Administrador',1),(2,'Operador',1),(7,'Cataloguista',1),(10,'nivel do marcel',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_noticias`
--

LOCK TABLES `tbl_noticias` WRITE;
/*!40000 ALTER TABLE `tbl_noticias` DISABLE KEYS */;
INSERT INTO `tbl_noticias` VALUES (3,'Ferramenta','dasdyasgdiasduhiasduh iuasdh iasuhiash diaushdiuas dhiasdh asid ','arquivos/73b5bb7b77d3b01c8327f5bde24a1a4c.png',0),(4,'Noticia 01','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.\r\nNunc viverra imperdiet enim. Fusce est. Vivamus a tellus.\r\n','arquivos/54a14641707e5ef640319bf5d5a29166.png',1);
/*!40000 ALTER TABLE `tbl_noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produtos`
--

DROP TABLE IF EXISTS `tbl_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `sobre` varchar(200) NOT NULL,
  `preco` float NOT NULL,
  `desconto` float NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produtos`
--

LOCK TABLES `tbl_produtos` WRITE;
/*!40000 ALTER TABLE `tbl_produtos` DISABLE KEYS */;
INSERT INTO `tbl_produtos` VALUES (1,'Harry Potter','ha sjd jsha j ja j hajah djhas dj',6,0,5,1,'arquivos/884467b4b76678ff79684f382ea839ba.jpg'),(4,'Tomb Raider','uiasdushdiua sui sdhaiushd iuashdiu',7,3,1,1,'arquivos/95aa430fa81f9e502b6af7d3d33e29e2.jpg'),(5,'O Senhor Do Aneis','jdaijdasiuasiud',10,0,1,1,'arquivos/11338ddc0d0a85cba6533d3282b58eb1.jpg'),(6,'Torre Negra','jsan kjasj kdank',8,2,2,1,'arquivos/237e8e68fd33858697e4922428dc8597.jpg'),(7,'O Nevoeiro','dassadasdsasddsadassdadsa dssadasd asdasdas',10,3,1,1,'arquivos/0e5ad1449bb2ef2054590143c671c629.jpg'),(9,'Quiz','dasdasdasd',60,0,5,1,'arquivos/9e8b74b38c56c4a03d7315904151c696.png'),(10,'Dom Casmurro','jsna ksajd kj',5,2,4,1,'arquivos/f357e0fdc56506907576db0b54a75239.jpg'),(11,'O Pequeno Principe','Livrinhooooooo',1000,998,5,1,'arquivos/1db663a7f98261e028b7937894d4cedd.jpg');
/*!40000 ALTER TABLE `tbl_produtos` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sobre`
--

LOCK TABLES `tbl_sobre` WRITE;
/*!40000 ALTER TABLE `tbl_sobre` DISABLE KEYS */;
INSERT INTO `tbl_sobre` VALUES (1,'Woodpecker','orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s wi',1),(2,'Emanuel','isdiuas hdiuash diuashdiuthesh diheyahsdiashi auishasi udhmanisau duashiahiusahiasu',0),(3,'Luis Luis','udhaiusd hiusahdiasu dhiauhdiasuhd iasuhdiuashdiuasdhiausdhaisudh asiudh aiusdh iasudhiausdhiuasdhia sdhiasu dhasuihdiash diash diuash diashdiuha siudhas iduhasiud ahsiudh asidu hasiudhaisu diuash diadiasjd aoisdj oaisdjoiasjdoiasodasjusd hauish dauishd asuid hiasudha isudhaisud hia',1),(4,'Manoel','jsahdjashdiuahwiuhiquwheiuah dushdiusdhfius idufshfsdiuhfiweu iuhif weifhweir weiruhweiurh weiurhweiurhwei rwehiurhweriuweh riwuerhweiur hwierhfbgjsxbfnkjs djfskj',0),(6,'Sobre eu','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.\r\nNunc viverra imperdiet enim. Fusce est. Vivamus a tellus.\r\n',1);
/*!40000 ALTER TABLE `tbl_sobre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_subcategorias`
--

DROP TABLE IF EXISTS `tbl_subcategorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_subcategorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_tbl_categoria_subcategoria_idx` (`id_categoria`),
  CONSTRAINT `fk_tbl_categoria_subcategoria` FOREIGN KEY (`id_categoria`) REFERENCES `tbl_categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_subcategorias`
--

LOCK TABLES `tbl_subcategorias` WRITE;
/*!40000 ALTER TABLE `tbl_subcategorias` DISABLE KEYS */;
INSERT INTO `tbl_subcategorias` VALUES (1,'Terror',1,1),(2,'Acao',1,1),(4,'Ciencia',1,1),(5,'Aventura',3,1);
/*!40000 ALTER TABLE `tbl_subcategorias` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (1,'Igor','1234',1,1),(3,'Lara','1234',7,1),(4,'Operador','1234',2,1),(5,'Julio','123456',2,1),(6,'marcelnt','123123',10,1);
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `selectprodutoaleatorio`
--

/*!50001 DROP VIEW IF EXISTS `selectprodutoaleatorio`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `selectprodutoaleatorio` AS select `produtos`.`id` AS `id`,`produtos`.`nome` AS `nome`,`produtos`.`sobre` AS `sobre`,`produtos`.`preco` AS `preco`,`produtos`.`desconto` AS `desconto`,`produtos`.`id_subcategoria` AS `id_subcategoria`,`produtos`.`ativo` AS `ativo`,`produtos`.`imagem` AS `imagem` from ((`tbl_produtos` `produtos` join `tbl_categorias` `categorias`) join `tbl_subcategorias` `subcategorias`) where ((`categorias`.`id` = `subcategorias`.`id_categoria`) and (`produtos`.`id_subcategoria` = `subcategorias`.`id`) and (`produtos`.`ativo` = 1) and (`categorias`.`ativo` = 1) and (`subcategorias`.`ativo` = 1)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `selectprodutosbanca`
--

/*!50001 DROP VIEW IF EXISTS `selectprodutosbanca`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `selectprodutosbanca` AS select `produtos`.`id` AS `id`,`produtos`.`nome` AS `nome`,`produtos`.`sobre` AS `sobre`,`produtos`.`preco` AS `preco`,`produtos`.`desconto` AS `desconto`,`produtos`.`id_subcategoria` AS `id_subcategoria`,`produtos`.`ativo` AS `ativo`,`produtos`.`imagem` AS `imagem`,`subcategorias`.`nome` AS `sub`,`categorias`.`nome` AS `cat` from ((`tbl_produtos` `produtos` join `tbl_categorias` `categorias`) join `tbl_subcategorias` `subcategorias`) where ((`categorias`.`id` = `subcategorias`.`id_categoria`) and (`produtos`.`id_subcategoria` = `subcategorias`.`id`) and (`produtos`.`ativo` = 1) and (`categorias`.`ativo` = 1) and (`subcategorias`.`ativo` = 1)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-11 10:20:54
