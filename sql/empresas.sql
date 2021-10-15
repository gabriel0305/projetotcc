-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Out-2021 às 02:58
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estagio`
--

CREATE TABLE `estagio` (
  `empresa` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `cidade` varchar(15) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `cursos` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estagio`
--

INSERT INTO `estagio` (`empresa`, `email`, `senha`, `cnpj`, `telefone`, `cidade`, `cep`, `cursos`) VALUES
('Eduardo LTDA 2', 'eduardo@teste', 'eebb', '14.785/6988-77', '(11) 1111-1', 'IbiCity', '14.785-558', ''),
('Eduardo LTDA', 'eduardo@teste', 'gg24g24', '14.785/6988-88', '(11) 1111-1', 'IbiCity', '14.785-558', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estagio`
--
ALTER TABLE `estagio`
  ADD PRIMARY KEY (`cnpj`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
