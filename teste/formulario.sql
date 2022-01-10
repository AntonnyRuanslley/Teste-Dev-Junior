-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jan-2022 às 16:14
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `email`, `senha`, `criado`, `modificado`) VALUES
(1, 'antonny', 'antonny@gmail.com', '$2y$10$m.ZJSL9tY.5HGpxd4bDgweL6aBK8/IDmP5bROBY6PUz6pMe3TZ9uq\r\n', '2022-01-10 14:40:23', '2022-01-10 14:40:23'),
(2, 'antony2', 'joa@hotmail.com', '$2y$10$OEqwXD5buSp3ry/RP59nPuf52mgPXdXW3vU8OspowbK3SYmMCJBrW\n', '2022-01-10 14:42:46', '2022-01-10 14:42:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rg` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imcpf` longblob NOT NULL,
  `imrg` longblob NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `cpf`, `rg`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `uf`, `descricao`, `imcpf`, `imrg`, `criado`, `modificado`) VALUES
(10, '', '', '', '', '', '', 0, '', '', '', 'AC', '', '', '', '2022-01-10 05:16:05', NULL),
(11, 'Antonny Ruanslley Magalhães de Sousa', 'antonnyruanslley@hotmail.com', '708.011.734', '12.345.67', '56312-12', 'Detinha Gomes', 150, 'São Gonçalo', 'Casa', 'Petrolina', 'PE', 'Exemplo...', '', '', '2022-01-10 05:17:45', NULL),
(12, '', '', '', '', '56312-120', 'Rua Detinha Gomes', 150, 'São Gonçalo', '', 'Petrolina', 'PE', '', '', '', '2022-01-10 11:51:45', NULL),
(13, '', '', '', '', '56312-120', 'Rua Detinha Gomes', 0, 'São Gonçalo', '', 'Petrolina', 'PE', '', '', '', '2022-01-10 12:00:27', NULL),
(14, '', '', '', '', '56312-120', 'Rua Detinha Gomes', 0, 'São Gonçalo', '', 'Petrolina', 'PE', '', '', '', '2022-01-10 12:01:00', NULL),
(15, '', '', '708.011.734-85', '', '56312-120', 'Rua Detinha Gomes', 0, 'São Gonçalo', '', 'Petrolina', 'PE', '', '', '', '2022-01-10 12:01:58', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
