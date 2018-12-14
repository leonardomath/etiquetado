-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 31/10/2018 às 17:24
-- Versão do servidor: 5.6.41
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `admindel_etiquetado`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `etiquetas`
--

CREATE TABLE `etiquetas` (
  `id` int(11) NOT NULL,
  `nome_etiqueta` varchar(150) DEFAULT NULL,
  `descricao` text,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `lista_de_etiquetas`
--

CREATE TABLE `lista_de_etiquetas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text,
  `preco1` varchar(255) DEFAULT NULL,
  `preco2` varchar(255) DEFAULT NULL,
  `preco3` varchar(255) DEFAULT NULL,
  `x` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `cargo` varchar(10) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_usuario`, `cargo`, `foto`, `senha`) VALUES
(1, 'admin', 'admin', 'default.png', '21232f297a57a5a743894a0e4a801fc3'),
(33, 'convidado', 'convidado', 'default.png', '446c055e591ce907debee78e5f71b1fd');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `etiquetas`
--
ALTER TABLE `etiquetas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `lista_de_etiquetas`
--
ALTER TABLE `lista_de_etiquetas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `etiquetas`
--
ALTER TABLE `etiquetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `lista_de_etiquetas`
--
ALTER TABLE `lista_de_etiquetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
