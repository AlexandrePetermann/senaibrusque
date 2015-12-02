SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE `senaibrusque` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `senaibrusque`;

GRANT USAGE ON *.* TO 'sistema'@'localhost' IDENTIFIED BY PASSWORD '*3B57F5C59A470AA0E51DA3000123C5FC1738C8CD';

GRANT ALL PRIVILEGES ON `senaibrusque`.* TO 'sistema'@'localhost';

CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` varchar(60) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `dataAtualizacao` datetime DEFAULT NULL,
  `situacao` tinyint(1) NOT NULL DEFAULT '0',
  `codigo` varchar(40) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `noticias` (
  `datapostagem` datetime NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `resumo` varchar(120) NOT NULL,
  `noticia` varchar(1500) NOT NULL,
  PRIMARY KEY (`datapostagem`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;