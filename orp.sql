-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 31-Maio-2019 às 16:43
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `orp`
--
CREATE DATABASE IF NOT EXISTS `orp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `orp`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_cliente`
--

CREATE TABLE IF NOT EXISTS `cad_cliente` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `tel_fixo` char(12) DEFAULT NULL,
  `tel_cel` char(15) NOT NULL,
  `cep` char(10) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `num_estabe` varchar(6) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `complemento` varchar(40) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_fornecedor`
--

CREATE TABLE IF NOT EXISTS `cad_fornecedor` (
  `id_forne` int(11) NOT NULL AUTO_INCREMENT,
  `nome_empresa` varchar(60) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `tel_fixo` char(12) DEFAULT NULL,
  `tel_cel` varchar(15) NOT NULL,
  `cep` char(10) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `num_estabe` varchar(6) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `complemento` varchar(40) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `imgForne` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_forne`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `cad_fornecedor`
--

INSERT INTO `cad_fornecedor` (`id_forne`, `nome_empresa`, `cnpj`, `tel_fixo`, `tel_cel`, `cep`, `rua`, `bairro`, `num_estabe`, `cidade`, `estado`, `complemento`, `email`, `senha`, `imgForne`) VALUES
(1, 'Agata Vitoria', '59.666.123/0001-09', NULL, '(12) 31231-3213', '085.88-350', 'Rua Padre Benedito de Camargo', 'Jardim Carolina', '123', 'Itaquaquecetuba', 'SP', NULL, 'agata@123', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
(2, 'Oie ', '59.666.123/0001-09', NULL, '(11) 4646-9911', '085.88-350', 'Rua Padre Benedito de Camargo', 'Jardim Carolina', '98', 'Itaquaquecetuba', 'SP', NULL, 'joaocleber@gmail.com', '2a16c2236d7403da44b5c6f9b2cc83cd', NULL),
(3, 'Oiiiiee', '59.666.123/0001-09', NULL, '(11) 95487-1425', '085.88-350', 'Rua Padre Benedito de Camargo', 'Jardim Carolina', '98', 'Itaquaquecetuba', 'SP', NULL, 'teste@gmail.com', '2a16c2236d7403da44b5c6f9b2cc83cd', NULL),
(4, 'Denise Santos', '59.666.123/0001-09', NULL, '(53) 21321-3213', '085.88-350', 'Rua Padre Benedito de Camargo', 'Jardim Carolina', '5665', 'Itaquaquecetuba', 'SP', NULL, 'denise@123', 'e10adc3949ba59abbe56e057f20f883e', NULL),
(5, 'Agata Vitoria', '', NULL, '(12) 32123-1313', '085.88-315', 'Estrada Alberto Hinoto', 'Jardim Carolina', '56', 'Itaquaquecetuba', 'SP', NULL, 'agata@exemplo', '827ccb0eea8a706c4c34a16891f84e7b', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idProd` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProd` varchar(20) NOT NULL,
  `qtddProd` int(11) NOT NULL,
  `precoProd` decimal(11,2) NOT NULL,
  `tipoProd` varchar(20) NOT NULL,
  `descriProd` varchar(255) NOT NULL,
  `generoProd` char(1) DEFAULT NULL,
  `tamanhoprod` varchar(10) NOT NULL,
  `materialProd` varchar(8) NOT NULL,
  `dataCadProd` date NOT NULL,
  `imgProd` varchar(40) NOT NULL,
  PRIMARY KEY (`idProd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProd`, `nomeProd`, `qtddProd`, `precoProd`, `tipoProd`, `descriProd`, `generoProd`, `tamanhoprod`, `materialProd`, `dataCadProd`, `imgProd`) VALUES
(1, 'Blusa Supreme', 45, '155000.00', 'blusa', 'Ele nÃ£o voa mais porque Ã© veterano de guerra contra as minhocas voadoras', 'm', 'Ainda nÃ£o', 'malha', '2019-05-30', 'a1f4b99030eb824e8d87eaba003322d8.jpg'),
(2, 'Camisa Einstein', 50, '23000.00', 'camisa', 'Blusa do Deus', 'm', 'Ainda nÃ£o', 'algodao', '2019-05-30', '5a196e8553ed600b9a348a9cce74fea0.jpg'),
(3, 'Blusa Mickey', 320, '600.00', 'blusa', 'Blusa macia e top', 'f', 'Ainda nÃ£o', 'algodao', '2019-05-31', '161f8d8e559dbddfd381e34a56b958ec.jpg'),
(4, 'Camiseta Never Again', 120, '300.00', 'camisa', 'Macia', 'f', 'Ainda nÃ£o', 'algodao', '2019-05-31', 'f8b011d9e9c8ef00cf1a63ea7c6bdb62.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
