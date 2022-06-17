-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Jun-2022 às 01:08
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdfatura`
--
CREATE DATABASE IF NOT EXISTS `bdfatura` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdfatura`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacaosocial` varchar(150) NOT NULL,
  `telefone` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `morada` varchar(150) NOT NULL,
  `codigopostal` varchar(150) NOT NULL,
  `localidade` varchar(150) NOT NULL,
  `capitalsocial` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `designacaosocial`, `telefone`, `email`, `morada`, `codigopostal`, `localidade`, `capitalsocial`) VALUES
(1, 'InformaticaLeiria.Lda', '244587965', 'componentesleiria.inform@gmail.com', 'Rua da escola n1', '2040-786', 'Leiria', '10.000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faturas`
--

DROP TABLE IF EXISTS `faturas`;
CREATE TABLE IF NOT EXISTS `faturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `valortotal` float NOT NULL,
  `ivatotal` float NOT NULL,
  `estado` enum('em lancamento','emitido') NOT NULL,
  `localidade` varchar(50) NOT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `empresa_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cliente_id` (`cliente_id`),
  KEY `empresa_id` (`empresa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `faturas`
--

INSERT INTO `faturas` (`id`, `data`, `valortotal`, `ivatotal`, `estado`, `localidade`, `cliente_id`, `empresa_id`) VALUES
(1, '2022-06-17 00:36:33', 555, 100, 'emitido', 'leiria', 2, 1),
(2, '2022-06-17 00:44:07', 12313, 223, 'em lancamento', '12313', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ivas`
--

DROP TABLE IF EXISTS `ivas`;
CREATE TABLE IF NOT EXISTS `ivas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `percentagem` int(11) DEFAULT NULL,
  `descricao` varchar(90) DEFAULT NULL,
  `vigor` enum('sim','nao') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ivas`
--

INSERT INTO `ivas` (`id`, `percentagem`, `descricao`, `vigor`) VALUES
(1, 23, 'Taxa Normal', 'sim'),
(2, 13, 'Taxa Intermedia', 'sim'),
(3, 6, 'Taxa Reduzida', 'sim'),
(4, 0, 'Taxa Nula', 'nao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `linhafaturas`
--

DROP TABLE IF EXISTS `linhafaturas`;
CREATE TABLE IF NOT EXISTS `linhafaturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(100) DEFAULT NULL,
  `valorunitario` float DEFAULT NULL,
  `valoriva` float DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `fatura_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produto_id` (`produto_id`),
  KEY `fatura_id` (`fatura_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `linhafaturas`
--

INSERT INTO `linhafaturas` (`id`, `quantidade`, `valorunitario`, `valoriva`, `produto_id`, `fatura_id`) VALUES
(1, 4, 55, 21, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(150) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` float NOT NULL,
  `stock` int(150) NOT NULL,
  `taxaiva` float NOT NULL,
  `iva_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iva_id` (`iva_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `referencia`, `descricao`, `preco`, `stock`, `taxaiva`, `iva_id`) VALUES
(1, '1234567897', 'Iphone SE 2020', 450, 10, 23, NULL),
(2, '7895859856', 'Iphone 13', 850, 5, 23, NULL),
(3, '1247894646', 'Monitor HP', 100, 3, 13, NULL),
(4, '9875485265', 'Rato HP', 12, 20, 23, NULL),
(5, '3548494882', 'Disco SSD', 30, 7, 23, NULL),
(6, '7878189894', 'Samsung A32 5G', 220, 2, 6, NULL),
(7, '8887895225', 'Iphone SE 2020', 450, 10, 23, NULL),
(8, '1234567898', 'Samsung A32 4G', 240, 1, 23, NULL),
(9, '8887895225', 'Iphone 11', 650, 4, 23, NULL),
(10, '7878189894', 'Portatil LENOVO V15-ADA', 600, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `morada` varchar(100) NOT NULL,
  `codigopostal` varchar(7) NOT NULL,
  `localidade` varchar(45) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `telefone`, `morada`, `codigopostal`, `localidade`, `role`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '99999999', 'Leiria', '2040-52', 'Leiria', 'administrador'),
(2, 'Joana Mendes', 'cliente', 'joana@gmail.com', '123456789', 'Pombal', '3100-89', 'Pombal', 'cliente'),
(3, 'Pedro Silva', 'cliente', 'pedro@gmail.com', '987654321', 'Lisboa', '1000-54', 'Lisboa', 'cliente'),
(4, 'Alexandra Mendes', 'cliente', 'alexandra@gmail.com', '123459876', 'Faro', '8000-54', 'Faro', 'cliente'),
(5, 'funcionario1', 'funcionario1', 'funcionario1@gmail.com', '555444888', 'Pombal', '3100-87', 'Pombal', 'funcionario'),
(6, 'funcionario2', 'funcionario2', 'funcionario2@gmail.com', '444777154', 'Porto', '4000-87', 'Porto', 'funcionario');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `faturas`
--
ALTER TABLE `faturas`
  ADD CONSTRAINT `faturas_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `faturas_ibfk_2` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`);

--
-- Limitadores para a tabela `linhafaturas`
--
ALTER TABLE `linhafaturas`
  ADD CONSTRAINT `linhafaturas_ibfk_1` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `linhafaturas_ibfk_2` FOREIGN KEY (`fatura_id`) REFERENCES `faturas` (`id`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`iva_id`) REFERENCES `ivas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
