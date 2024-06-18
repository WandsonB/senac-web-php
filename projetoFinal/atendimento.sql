-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/06/2024 às 01:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atendimento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id_ag` int(11) NOT NULL,
  `data` varchar(8) NOT NULL,
  `hora` varchar(5) NOT NULL,
  `fk_fc` int(11) NOT NULL,
  `fk_cl` int(11) NOT NULL,
  `fk_sv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cl` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefone` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_fc` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `n_interno` varchar(20) NOT NULL,
  `area` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id_sv` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `valor` varchar(10) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `imgLink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `servicos`
--

INSERT INTO `servicos` (`id_sv`, `tipo`, `valor`, `descricao`, `imgLink`) VALUES
(1, 'Espelhamento de pintura', 'R$ 700,00', '', 'https://blog.fras-le.com/wp-content/uploads/2021/09/post_thumbnail-b74619dc3de1a08d3f469fcb12d869c3.jpeg'),
(2, 'Avaliação', 'Gratis', 'Venha fazer um orçamento conosco', 'https://www.acquazero.com/wp-content/uploads/2022/02/montar-uma-estetica-automotiva-1.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id_ag`),
  ADD KEY `fk_fc` (`fk_fc`),
  ADD KEY `fk_cl` (`fk_cl`),
  ADD KEY `fk_sv` (`fk_sv`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cl`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_fc`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id_sv`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id_ag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_fc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_sv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_cl` FOREIGN KEY (`fk_cl`) REFERENCES `clientes` (`id_cl`),
  ADD CONSTRAINT `fk_fc` FOREIGN KEY (`fk_fc`) REFERENCES `funcionario` (`id_fc`),
  ADD CONSTRAINT `fk_sv` FOREIGN KEY (`fk_sv`) REFERENCES `servicos` (`id_sv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
