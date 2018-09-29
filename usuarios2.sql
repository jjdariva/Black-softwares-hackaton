-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 29-Set-2018 às 12:12
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `u_name` varchar(255) NOT NULL,
  `u_pwd` varchar(255) NOT NULL,
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `morto1` int(255) NOT NULL,
  `morto2` int(11) NOT NULL,
  `morto3` int(11) NOT NULL,
  `morto4` int(11) NOT NULL,
  `morto5` int(11) NOT NULL,
  `morto6` int(11) NOT NULL,
  `morto7` int(11) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`u_name`, `u_pwd`, `u_id`, `morto1`, `morto2`, `morto3`, `morto4`, `morto5`, `morto6`, `morto7`) VALUES
('Admin1', 'dasa', 1, 50, 40, 121, 112, 150, 80, 300);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
