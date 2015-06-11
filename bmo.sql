-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 11/06/2015 às 20:03
-- Versão do servidor: 5.6.24-0ubuntu2
-- Versão do PHP: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `bmo`
--
CREATE DATABASE IF NOT EXISTS `bmo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bmo`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `festa`
--

CREATE TABLE IF NOT EXISTS `festa` (
`idfesta` int(10) unsigned NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `dataFesta` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nomeEvento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `festa`
--

INSERT INTO `festa` (`idfesta`, `descricao`, `dataFesta`, `foto`, `nomeEvento`) VALUES
(6, 'eggrsgsegs', '2015-05-07', 'images/7b7197708cea47818c61d8518d9791cd.jpg', 'Festa 1'),
(7, 'afawiofjafwiawjfawfj', '2015-05-07', 'images/82fa3c9858eb0c2f5edd0add97145f6a.jpg', 'Testeee 22'),
(8, '243235235', '2015-05-14', 'images/c22ad2b09a726d564cd5666c93e080ac.jpg', 'Festa 1'),
(9, '1313423235', '2015-05-14', 'images/432aca3a1e345e339f35a30c8f65edce.jpg', 'Festa 2'),
(10, 'refesfsgsgs', '2015-05-14', 'images/8750cece0f8b031d0df80ea8d1345d01.jpg', 'Festa 3'),
(12, '1qesfsgsgsgsg', '2015-05-14', 'images/3b86abce42cb80b3ec668367e182b352.jpg', 'Festa 29'),
(13, 'teste', '2015-05-14', 'images/107387d5d48032f826cb8b095753b055.jpg', 'test');

-- --------------------------------------------------------

--
-- Estrutura para tabela `participante`
--

CREATE TABLE IF NOT EXISTS `participante` (
`idParticipante` int(10) unsigned NOT NULL,
  `festa_idfesta` int(10) unsigned NOT NULL,
  `nomePessoa` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `festa`
--
ALTER TABLE `festa`
 ADD PRIMARY KEY (`idfesta`);

--
-- Índices de tabela `participante`
--
ALTER TABLE `participante`
 ADD PRIMARY KEY (`idParticipante`), ADD KEY `participante_FKIndex1` (`festa_idfesta`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `festa`
--
ALTER TABLE `festa`
MODIFY `idfesta` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de tabela `participante`
--
ALTER TABLE `participante`
MODIFY `idParticipante` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
