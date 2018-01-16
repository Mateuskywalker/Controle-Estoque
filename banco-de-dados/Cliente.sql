-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 16-Jan-2018 às 22:28
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Cliente`
--

CREATE TABLE `Cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Cliente`
--

INSERT INTO `Cliente` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'Mateus Henrique', 'mhenrique977@gmail.com', '1234-5678'),
(2, 'Mateus Henrique', 'mhenrique977@gmail.com', '1234-5678'),
(3, 'Gabriel', 'gabriel@gmail.com', '1234-5678'),
(4, 'Leticia', 'leticia@gmail.com', '4567-6567'),
(5, 'Leticia', 'leticia@gmail.com', '4567-6567'),
(6, 'Joao', 'joao@gmail.com', '1234-3456'),
(7, 'ksjfnsdkfj', 'sdjknsdflj@gmail.com', '1234-234234'),
(8, 'JA', 'cksjndsk@gmail.com', '1234-4345'),
(9, 'dssdsd', 'sdlfjsd@gmail.com', '1234-4345'),
(10, 'Mateus', 'dkfjnsdfkjnds@gmail.com', '1234-3243'),
(11, 'fsdfdsf', 'dsffsd@gmail.com', '1234-2334'),
(12, 'fbfgbfgb', 'fkjsndfk@gmail.com', '1234-23423'),
(13, 'agora vai', 'agoravai@gmail.com', '1234-4345'),
(14, 'vamo ver', 'vamover@gmail.com', '1234-3421'),
(15, 'Jorginho', 'jorge@gmail.com', '1234-4345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
