SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE `senaibrusque` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `senaibrusque`;

CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` varchar(60) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `dataAtualizacao` datetime DEFAULT NULL,
  `situacao` tinyint(1) NOT NULL DEFAULT '0',
  `codigo` varchar(40) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `newsletter` (`email`, `dataCadastro`, `dataAtualizacao`, `situacao`, `codigo`) VALUES
('xandy.bq@gmail.com', '2015-11-25 07:31:15', NULL, 0, '356a192b7913b04c54574d18c28d46e6395428ab'),
('ninny16@gmail.com', '2015-11-25 05:40:31', NULL, 0, 'da4b9237bacccdf19c0760cab7aec4a8359010b0'),
('osnildo@gmail.com', '2015-11-25 04:53:47', NULL, 0, '3074a9c691222a9f5e1764d537d1fd75b8ccf68a'),
('alexandre@teste.com', '2015-11-27 08:30:23', NULL, 0, 'c709f97ef124a957177247ba253c069f491b4c04'),
('allan@gmail.com', '2015-11-27 08:31:24', NULL, 0, '75ac3c821a7eef7371436b549c3d9c654213bb29'),
('tarx@gmail.com', '2015-11-27 08:32:01', '2015-11-27 09:40:13', 1, '651726940f1e40ced98c9d315cd7ae70242655a7'),
('aafraga@gmail.com', '2015-11-27 08:43:55', NULL, 0, '4bb80759d0eb8a312fb584055dee3eebe6cc0a39'),
('via@f.com', '2015-11-27 09:00:51', '2015-11-27 09:37:09', 1, '5f353f28a3ec95835f7561256782e03b2b08f0c4'),
('talita@gmail.com', '2015-11-27 09:50:39', '2015-11-27 09:51:31', 1, '63c6ef5aa3ea6c9abb83760c3137a4f8975e7061'),
('anderson@gmail.com', '2015-11-27 10:20:45', NULL, 0, 'cd15ab0700e7bf2fdbbc13f05d6e9098b4d23aba');