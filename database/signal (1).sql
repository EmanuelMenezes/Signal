-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Jan-2021 às 09:41
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `signal`
--
CREATE DATABASE IF NOT EXISTS `signal` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `signal`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `telefone`, `rg`) VALUES
(2, 'Mateus Furiati', '(31)99535-5010', '22786501');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empreendimentos`
--

DROP TABLE IF EXISTS `empreendimentos`;
CREATE TABLE IF NOT EXISTS `empreendimentos` (
  `empreendimento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(80) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `numero` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `bairro` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cidade` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `valor_total_obra` decimal(20,2) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `fk_responsavel` int(11) NOT NULL,
  PRIMARY KEY (`empreendimento`),
  KEY `fk_responsavel` (`fk_responsavel`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `empreendimentos`
--

INSERT INTO `empreendimentos` (`empreendimento`, `nome`, `cep`, `endereco`, `numero`, `estado`, `bairro`, `cidade`, `valor_total_obra`, `data_inicio`, `data_fim`, `fk_responsavel`) VALUES
(8, 'EdifÃ­cio Everest', '87665772', 'Paulo Piedade Campos', '123', 'BA', 'Santa Monica', 'Salvador', '1609988.00', '2021-01-27', '2021-01-30', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel_tecnico`
--

DROP TABLE IF EXISTS `responsavel_tecnico`;
CREATE TABLE IF NOT EXISTS `responsavel_tecnico` (
  `id_responsavel` int(11) NOT NULL AUTO_INCREMENT,
  `nome_responsavel` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `crea` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_responsavel`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `responsavel_tecnico`
--

INSERT INTO `responsavel_tecnico` (`id_responsavel`, `nome_responsavel`, `crea`, `rg`) VALUES
(1, 'Oswaldo Cruz', '1234441A99', '22786501'),
(5, 'Emanuel Menezes', '997705094-6', '34007895'),
(4, 'Mateus Furiati', '260450431-7', '22786501'),
(7, 'William Campos', '260450431-7', '89654164');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidades`
--

DROP TABLE IF EXISTS `unidades`;
CREATE TABLE IF NOT EXISTS `unidades` (
  `unidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_unidade` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `numero_unidade` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `area_total` int(11) NOT NULL,
  `area_privativa` int(11) NOT NULL,
  `area_coberta` int(11) NOT NULL,
  `flag_cobertura` set('S','N') COLLATE utf8_unicode_ci NOT NULL,
  `valor_venda` decimal(11,2) NOT NULL,
  `valor_avaliacao_banco` decimal(11,2) NOT NULL,
  `fk_empreendimento` int(11) NOT NULL,
  PRIMARY KEY (`unidade`),
  KEY `fk_empreendimento` (`fk_empreendimento`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `unidades`
--

INSERT INTO `unidades` (`unidade`, `nome_unidade`, `numero_unidade`, `area_total`, `area_privativa`, `area_coberta`, `flag_cobertura`, `valor_venda`, `valor_avaliacao_banco`, `fk_empreendimento`) VALUES
(7, 'Emanuel Menezes', '1212', 131, 12, 121, 'S', '1231231.00', '1123123.00', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `venda` int(11) NOT NULL AUTO_INCREMENT,
  `fk_cliente` int(11) NOT NULL,
  `fk_vendedor` int(11) NOT NULL,
  `fk_unidade` int(11) NOT NULL,
  `valor_final_venda` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `valor_descontos_gerais` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `data_venda` date NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`venda`),
  KEY `fk_vendedor` (`fk_vendedor`),
  KEY `fk_cliente` (`fk_cliente`),
  KEY `fk_unidade` (`fk_unidade`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`venda`, `fk_cliente`, `fk_vendedor`, `fk_unidade`, `valor_final_venda`, `valor_descontos_gerais`, `data_venda`, `status`) VALUES
(4, 2, 1, 7, '121233,45', '13131,00', '2021-01-14', 'concluÃ­da'),
(6, 2, 2, 7, '121233,45', '13131,00', '2021-01-08', 'pendente'),
(7, 2, 2, 7, '121233,45', '13131,00', '2021-01-20', 'pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

DROP TABLE IF EXISTS `vendedor`;
CREATE TABLE IF NOT EXISTS `vendedor` (
  `id_vendedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_vendedor` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `contato` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_vendedor`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nome_vendedor`, `contato`, `rg`) VALUES
(1, 'Emanuel Menezes', '(31)99535-5010', '22786502'),
(2, 'William Campos', '(31)99535-5010', '89654164'),
(3, 'Mateus Furiati', '(31)99535-5010', '22786502');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
