
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `bmo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bmo`;


CREATE TABLE IF NOT EXISTS `festa` (
  `idfesta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `dataFesta` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nomeEvento` varchar(50) DEFAULT NULL,
  `ip_criador` varchar(25) DEFAULT NULL,
  `cor_texto` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`idfesta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;
