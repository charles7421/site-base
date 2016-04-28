-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.28-0ubuntu0.14.04.1 - (Ubuntu)
-- OS do Servidor:               debian-linux-gnu
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para tsagro
CREATE DATABASE IF NOT EXISTS `tsagro` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tsagro`;


-- Copiando estrutura para tabela tsagro.albuns
CREATE TABLE IF NOT EXISTS `albuns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `caminho_capa` varchar(255) DEFAULT NULL,
  `descricao` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tsagro.albuns: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `albuns` DISABLE KEYS */;
/*!40000 ALTER TABLE `albuns` ENABLE KEYS */;


-- Copiando estrutura para tabela tsagro.empresas
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` text,
  `missao` text,
  `visao` text,
  `valores` text,
  `facebook` varchar(250) DEFAULT NULL,
  `link_video` varchar(250) DEFAULT NULL,
  `plus` varchar(250) DEFAULT NULL,
  `twitter` varchar(250) DEFAULT NULL,
  `telefone` varchar(250) DEFAULT NULL,
  `whatsapp` varchar(250) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tsagro.empresas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;


-- Copiando estrutura para tabela tsagro.imagens
CREATE TABLE IF NOT EXISTS `imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `albun_id` int(11) DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tsagro.imagens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `imagens` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagens` ENABLE KEYS */;


-- Copiando estrutura para tabela tsagro.parceiros
CREATE TABLE IF NOT EXISTS `parceiros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL DEFAULT '0',
  `slug` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `link` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tsagro.parceiros: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `parceiros` DISABLE KEYS */;
/*!40000 ALTER TABLE `parceiros` ENABLE KEYS */;


-- Copiando estrutura para tabela tsagro.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `link` text,
  `subtitulo` varchar(255) DEFAULT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  `slug` text,
  `descricao` text NOT NULL,
  `caminho_capa` varchar(250) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tsagro.produtos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;


-- Copiando estrutura para tabela tsagro.promocoes
CREATE TABLE IF NOT EXISTS `promocoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) DEFAULT NULL,
  `descricao` text,
  `ativo` varchar(3) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tsagro.promocoes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `promocoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `promocoes` ENABLE KEYS */;


-- Copiando estrutura para tabela tsagro.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tsagro.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `created`, `modified`) VALUES
	(1, 'Administrador', 'admin', 'c73722a28edee61fa1f0379c827d44a82b8cc0bf', '2016-01-08 16:06:31', '2016-01-11 17:23:33');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
