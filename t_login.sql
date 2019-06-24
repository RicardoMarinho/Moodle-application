-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jun-2019 às 21:53
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `moodle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_login`
--

CREATE TABLE `t_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `utilizador_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_login`
--

INSERT INTO `t_login` (`id`, `username`, `password`, `utilizador_fk`) VALUES
(1, 'ricardo.braz', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'pdrgomes', '6c78aa39b8f20cb8007360e44090256e', 2),
(3, 'rbaptista', '202cb962ac59075b964b07152d234b70', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilizador_fk` (`utilizador_fk`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `t_login`
--
ALTER TABLE `t_login`
  ADD CONSTRAINT `t_login_ibfk_1` FOREIGN KEY (`utilizador_fk`) REFERENCES `t_utilizador` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
