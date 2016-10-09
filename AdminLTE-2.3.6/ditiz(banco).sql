-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Out-2016 às 03:53
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ditiz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idLogin` int(11) NOT NULL AUTO_INCREMENT,
  `nomeLogin` varchar(80) NOT NULL,
  `emailLogin` varchar(80) NOT NULL,
  `senhaLogin` varchar(80) NOT NULL,
  PRIMARY KEY (`idLogin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idLogin`, `nomeLogin`, `emailLogin`, `senhaLogin`) VALUES
(1, 'Breno', 'bbrandaog@icloud.com', 'breno12345'),
(2, 'adm', 'adm@gmail.com', 'adm123'),
(3, 'Marie', 'marie@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `descricaoProduto` varchar(100) NOT NULL,
  `precoProduto` double NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `descricaoProduto`, `precoProduto`) VALUES
(16, 'Palio', 19000),
(18, 'Freemont', 70000),
(20, 'CRV', 75000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
