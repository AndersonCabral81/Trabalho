-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Abr-2021 às 00:32
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `geral`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `cor` varchar(50) DEFAULT NULL,
  `preco` decimal(20,0) NOT NULL,
  `datafab` date NOT NULL,
  `datacad` datetime NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` int(20) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `marca`, `modelo`, `cor`, `preco`, `datafab`, `datacad`, `nome`, `telefone`, `email`, `endereco`, `numero`, `cidade`, `bairro`, `estado`, `cep`) VALUES
(1, 'hp', 'desktop 6600', 'preto', '2500', '2019-01-25', '0000-00-00 00:00:00', 'lilica', 2147483647, 'lilica@gmail.com', 'rua 5', 12, 'porto alegre', 'cristo redentor', 'rs', 92865987),
(3, 'realmi', '7 pro', 'azul metalico', '2049', '2021-01-01', '2021-04-11 17:08:52', 'tu sabe', 457812369, 'tusabe@outlook.com', 'avenida da flores', 700, 'tocantins', 'sarandi', 'mg', 99999900),
(4, 'hp', 'notebook', 'preto', '1300', '2021-03-28', '2021-04-10 18:25:00', 'ninguem', 565656598, 'ninguem@live.com', 'sertorio', 4568, 'porto alegre', 'sarandi', 'rs', 80000000),
(6, 'sansung', 'm51', 'azul', '1800', '2019-12-02', '2021-04-11 17:12:26', 'sortetua', 417258632, 'sortetua@live.com', 'copacabana', 36, 'rio de janeiro', 'copacabana', 'rj', 65987123),
(7, 'redmi', 'poco x3', 'amarelo', '1500', '2021-04-01', '2021-04-11 17:00:13', 'quem sabe', 56568989, 'quemsabe@hotmail.com', 'rua felipe', 45, 'cascavel', 'picada', 'sc', 68945032),
(8, 'redmi', 'note 9', 'rosa', '1832', '0000-00-00', '0000-00-00 00:00:00', 'Lilica', 555555555, 'lilica@gmail.com', 'avenida assis brasil', 986, 'porto alegre', 'cristo redentor', 'rs', 90000000),
(9, 'redmi', 'note 9', 'rosa', '1832', '0000-00-00', '0000-00-00 00:00:00', 'Lilica', 555555555, 'lilica@gmail.com', 'avenida assis brasil', 986, 'porto alegre', 'cristo redentor', 'rs', 90000000),
(10, 'realmi ', 'note 7', 'preto', '2500', '0000-00-00', '0000-00-00 00:00:00', 'carlos', 2147483647, 'carlos@outlook.com', 'rua 5', 597, 'alegrete', 'feitosa', 'rs', 88920563),
(11, 'realmi ', 'note 7', 'preto', '2500', '0000-00-00', '0000-00-00 00:00:00', 'carlos', 2147483647, 'carlos@outlook.com', 'rua 5', 597, 'alegrete', 'feitosa', 'rs', 88920563),
(12, 'Acer', 'desktop ', 'cinza', '3200', '0000-00-00', '0000-00-00 00:00:00', 'deltrano', 232323232, 'deltrano@live.com.br', 'almirante carlos', 258, 'uruguaiana', 'boa vista', 'rs', 91564987),
(13, 'Acer', 'desktop ', 'cinza', '3200', '0000-00-00', '0000-00-00 00:00:00', 'deltrano', 232323232, 'deltrano@live.com.br', 'almirante carlos', 258, 'uruguaiana', 'boa vista', 'rs', 91564987),
(14, 'Acer', 'desktop ', 'cinza', '3200', '0000-00-00', '0000-00-00 00:00:00', 'deltrano', 232323232, 'deltrano@live.com.br', 'almirante carlos', 258, 'uruguaiana', 'boa vista', 'rs', 91564987),
(18, 'sansung', 'A71', 'preto', '2000', '0000-00-00', '0000-00-00 00:00:00', 'lilica', 2147483647, 'lilica@gmail.com', 'rua 5', 12, 'porto alegre', 'cristo redentor', 'rs', 92865987),
(19, 'Sansung', 'tablet', 'branca', '800', '2019-01-25', '2021-04-08 00:00:00', 'carlos', 2147483647, 'carlos@outlook.com', 'rua 5', 150, 'alegrete', 'afonso', 'ac', 88920563),
(20, 'realmi', 'note 10 pro', 'cinza', '3000', '0000-00-00', '0000-00-00 00:00:00', 'lilica', 2147483647, 'lilica@gmail.com', 'rua 5', 700, 'porto alegre', 'cristo redentor', 'rs', 92865987),
(21, 'hp', '', '', '0', '0000-00-00', '0000-00-00 00:00:00', '', 0, '', '', 0, '', '', '', 0),
(22, 'realmi', 'note 10 pro', 'preto', '2000', '0000-00-00', '0000-00-00 00:00:00', 'lilica', 2147483647, 'lilica@gmail.com', 'rua 5', 12, 'porto alegre', 'assis', 'rs', 92865987),
(23, 'redmi', 'note 9', 'azul', '1000', '0000-00-00', '0000-00-00 00:00:00', 'deltrano', 232323232, 'deltrano@live.com.br', 'almirante carlos', 150, 'uruguaiana', 'cristo redentor', 'ac', 91564987),
(24, 'redmi', 'note 9', 'azul', '1000', '0000-00-00', '0000-00-00 00:00:00', 'deltrano', 232323232, 'deltrano@live.com.br', 'almirante carlos', 150, 'uruguaiana', 'cristo redentor', 'ac', 91564987);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `adm` int(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`email`, `senha`, `nome`, `adm`, `id`) VALUES
('anderson@gmail.com', '12345', 'anderson', 1, 1),
('lilica@gmail.com', '12345', 'lilica', 0, 2),
('fulano@live.com', '827ccb0eea8a706c4c34a16891f84e7b', 'fulano', 0, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
