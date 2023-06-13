-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jun-2023 às 01:43
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site`
--
CREATE DATABASE site;
-- --------------------------------------------------------
USE site;
--
-- Estrutura da tabela `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `nome_area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`id_area`, `nome_area`) VALUES
(1, 'Desenvolvedor Web'),
(2, 'Desenvolvedor Mobile'),
(3, 'QA'),
(4, 'DBA'),
(5, 'Arquiteto de Redes'),
(6, 'Cientista de Dados'),
(7, 'Analista de Dados'),
(8, 'Product Manager'),
(9, 'DevOps');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao_pe` varchar(500) NOT NULL,
  `data_entrega_pe` date NOT NULL,
  `id_cliente` varchar(14) NOT NULL,
  `id_prestador` varchar(14) DEFAULT NULL,
  `id_area` int(255) NOT NULL,
  `id_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `titulo`, `descricao_pe`, `data_entrega_pe`, `id_cliente`, `id_prestador`, `id_area`, `id_status`) VALUES
(19, 'teste', 'asdasdas', '2023-06-27', '95184623750', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `nome_perfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nome_perfil`) VALUES
(1, 'Prestador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nome_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id_status`, `nome_status`) VALUES
(1, 'Aguardando'),
(2, 'Em andamento'),
(3, 'Concluído');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(18) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `endereço` varchar(50) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `data_nascimento` date NOT NULL,
  `pre_especialidade` varchar(50) DEFAULT NULL,
  `pre_outras_opc` varchar(500) DEFAULT NULL,
  `FK_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cpf`, `nome`, `telefone`, `email`, `estado`, `cidade`, `endereço`, `cep`, `sexo`, `data_nascimento`, `pre_especialidade`, `pre_outras_opc`, `FK_perfil`) VALUES
('12345678910', 'Wanessa Estrela da Silva', '11987102156', 'viniciushp00@gmail.com', 'SP', 'São Paulo', 'Rua e isso ai', '1455030', 'feminino', '2001-09-18', NULL, NULL, 2),
('44444444444', 'teste', NULL, 'teste@gmail.com', NULL, NULL, NULL, NULL, NULL, '2002-09-23', '0', 'teste', 1),
('95184623750', 'Marcos Vinicius Reis de Souza', '12198715265', 'viniciushp00@gmail.com', 'SP', 'São Paulo', 'Rua e isso ai', '4458', 'masculino', '2023-06-21', NULL, NULL, 2),
('96385274110', 'Maria de Fatima', '321231231213', 'maria@gmail.com', 'SP', 'São Paulo', 'Rua e isso ai', '1455030', 'feminino', '2023-06-01', NULL, NULL, 2),
('98765432110', 'Yasmin Reis de Souza', '11987102156', 'yasmin@gmail.com', 'SP', 'São Paulo', 'Rua e isso ai', '4458030', 'feminino', '2023-06-01', NULL, NULL, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `FK_id_area` (`id_area`),
  ADD KEY `FK_id_status` (`id_status`),
  ADD KEY `FK_id_cliente` (`id_cliente`),
  ADD KEY `FK_id_prestador` (`id_prestador`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Índices para tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cpf`) USING BTREE,
  ADD KEY `FK_id_perfil` (`FK_perfil`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `FK_id_area` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`),
  ADD CONSTRAINT `FK_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `usuarios` (`cpf`),
  ADD CONSTRAINT `FK_id_prestador` FOREIGN KEY (`id_prestador`) REFERENCES `usuarios` (`cpf`),
  ADD CONSTRAINT `FK_id_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_id_perfil` FOREIGN KEY (`FK_perfil`) REFERENCES `perfil` (`id_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
