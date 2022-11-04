-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Ago-2022 às 03:08
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etec2sem2022`
--
DROP DATABASE IF EXISTS `etec2sem2022`;
CREATE DATABASE IF NOT EXISTS `etec2sem2022` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `etec2sem2022`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `nomeLogin` varchar(100) NOT NULL,
  `enderecoLogin` varchar(100) NOT NULL,
  `telefoneLogin` varchar(50) NOT NULL,
  `emailLogin` varchar(100) NOT NULL,
  `senhaLogin` varchar(250) NOT NULL,
  `nivelLogin` int(11) NOT NULL,
  `statusLogin` int(11) NOT NULL,
  `fotoLogin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idLogin`, `nomeLogin`, `enderecoLogin`, `telefoneLogin`, `emailLogin`, `senhaLogin`, `nivelLogin`, `statusLogin`, `fotoLogin`) VALUES
(1, 'Etec', 'Av. Prestes Maia, 1764', '18 3625 8677', 'etec@etec.com.br', '123', 1, 1, 'foto.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
