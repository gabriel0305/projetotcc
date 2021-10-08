-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Out-2021 às 03:02
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aluno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(191) NOT NULL,
  `senha` varchar(191) NOT NULL,
  `genero` char(1) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `cidade` varchar(191) NOT NULL,
  `bairro` varchar(191) NOT NULL,
  `rua` varchar(191) NOT NULL,
  `numero` varchar(191) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `criado_em` datetime NOT NULL,
  `editado_em` datetime NOT NULL,
  `deletado_em` datetime DEFAULT NULL,
  `curso` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `cpf`, `email`, `senha`, `genero`, `data_nascimento`, `telefone`, `cidade`, `bairro`, `rua`, `numero`, `cep`, `criado_em`, `editado_em`, `deletado_em`, `curso`) VALUES
(1, 'Gabriel Rosa', '321.323.131-23', 'stamgamer34@gmail.com', '312312312', 'M', '1970-01-01', '(16) 9887-3273', 'Ibitinga', '1231232323', 'Avenida João Farah', '1123', '14.943-216', '2021-10-08 02:50:59', '2021-10-08 02:50:59', NULL, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
