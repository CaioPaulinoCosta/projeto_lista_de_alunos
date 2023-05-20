-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Maio-2023 às 08:43
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto-media`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `ra` varchar(100) DEFAULT NULL,
  `p1` varchar(10) DEFAULT NULL,
  `p2` varchar(10) DEFAULT NULL,
  `p3` varchar(10) DEFAULT NULL,
  `p4` varchar(10) DEFAULT NULL,
  `media` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `curso`, `ra`, `p1`, `p2`, `p3`, `p4`, `media`) VALUES
(1, 'Caio', 'Análise e Desenvolvimento de Sistemas', '#6406', '10', '9', '8', '10', '9.25'),
(2, 'Jessica', 'Análise e Desenvolvimento de Sistemas', '#8969', '8', '9', '7', '10', '8.5'),
(3, 'Gabriel', 'Análise e Desenvolvimento de Sistemas', '#2425', NULL, NULL, NULL, NULL, NULL),
(4, 'Felipe', 'Análise e Desenvolvimento de Sistemas', '#9845', NULL, NULL, NULL, NULL, NULL),
(5, 'Jefferson', 'Análise e Desenvolvimento de Sistemas', '#6787', NULL, NULL, NULL, NULL, NULL),
(6, 'Patricia', 'Análise e Desenvolvimento de Sistemas', '#3256', NULL, NULL, NULL, NULL, NULL),
(7, 'Nice', 'Análise e Desenvolvimento de Sistemas', '#7564', NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
