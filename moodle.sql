-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jun-2019 às 19:09
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
-- Estrutura da tabela `t_aluno`
--

CREATE TABLE `t_aluno` (
  `id` int(11) NOT NULL,
  `utilizador_fk` int(11) DEFAULT NULL,
  `nrAluno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_contactos`
--

CREATE TABLE `t_contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(9) DEFAULT NULL,
  `telemovel` varchar(9) DEFAULT NULL,
  `telemovel2` varchar(9) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_contactos`
--

INSERT INTO `t_contactos` (`id`, `telefone`, `telemovel`, `telemovel2`, `email`) VALUES
(1, '919999999', '927777777', '935555555', 'alguem@meudominio.pt'),
(2, '226667755', '918765432', '920176588', 'soueu@empresa.pt'),
(3, '226667755', '918765432', '920176588', 'baptista@empresa.pt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_cp`
--

CREATE TABLE `t_cp` (
  `id` int(11) NOT NULL,
  `codigo` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_cp`
--

INSERT INTO `t_cp` (`id`, `codigo`) VALUES
(1, '4150-010'),
(2, '4500-122'),
(3, '4444-001');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_curso`
--

CREATE TABLE `t_curso` (
  `id` int(11) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_curso`
--

INSERT INTO `t_curso` (`id`, `descricao`) VALUES
(1, 'Programação e Gestão de Sistemas Informáticos'),
(2, 'Desenvolvimento em dispositivos móveis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_curso_disciplinas`
--

CREATE TABLE `t_curso_disciplinas` (
  `id` int(11) NOT NULL,
  `curso_fk` int(11) NOT NULL,
  `disciplinas_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_curso_disciplinas`
--

INSERT INTO `t_curso_disciplinas` (`id`, `curso_fk`, `disciplinas_fk`) VALUES
(1, 1, 4),
(2, 2, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_disciplinas`
--

CREATE TABLE `t_disciplinas` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `ano` varchar(50) DEFAULT NULL,
  `semestre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_disciplinas`
--

INSERT INTO `t_disciplinas` (`id`, `nome`, `ano`, `semestre`) VALUES
(1, 'Matemática', '1º Ano', '1º Semestre'),
(2, 'Estatística Descritiva', '1º Ano', '2º Semestre'),
(3, 'Algoritmos e Estruturas de Dados', '1º Ano', '2º Semestre'),
(4, 'Programação I', '1º Ano', '1º Semestre'),
(5, 'Tecnologias da Internet I', '1º Ano', '1º Semestre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_docente`
--

CREATE TABLE `t_docente` (
  `id` int(11) NOT NULL,
  `utilizador_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_docente`
--

INSERT INTO `t_docente` (`id`, `utilizador_fk`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_docente_disciplinas`
--

CREATE TABLE `t_docente_disciplinas` (
  `id` int(11) NOT NULL,
  `docente_fk` int(11) DEFAULT NULL,
  `disciplinas_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_docente_disciplinas`
--

INSERT INTO `t_docente_disciplinas` (`id`, `docente_fk`, `disciplinas_fk`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_eventos`
--

CREATE TABLE `t_eventos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `dtInicio` datetime DEFAULT NULL,
  `dtFim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_eventos`
--

INSERT INTO `t_eventos` (`id`, `descricao`, `dtInicio`, `dtFim`) VALUES
(1, 'Entrega do trabalho de Base de Dados Relacional', '2019-05-10 00:00:00', '2019-05-24 23:59:00'),
(2, 'Entrega do trabalho de Planeamento de Rede', '2019-05-03 00:00:00', '2019-06-06 23:59:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_evento_disciplina`
--

CREATE TABLE `t_evento_disciplina` (
  `id` int(11) NOT NULL,
  `eventos_fk` int(11) NOT NULL,
  `disciplinas_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_gestor`
--

CREATE TABLE `t_gestor` (
  `id` int(11) NOT NULL,
  `utilizador_fk` int(11) DEFAULT NULL,
  `nrFuncionario` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_gestor_noticia`
--

CREATE TABLE `t_gestor_noticia` (
  `id` int(11) NOT NULL,
  `noticia_fk` int(11) NOT NULL,
  `gestor_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_login`
--

CREATE TABLE `t_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` char(60) DEFAULT NULL,
  `utilizador_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_login`
--

INSERT INTO `t_login` (`id`, `username`, `password`, `utilizador_fk`) VALUES
(1, 'ricardo.braz', '202cb962ac59075b964b07152d234b70', 1),
(2, 'pdrgomes', '202cb962ac59075b964b07152d234b70', 2),
(3, 'rbaptista', '202cb962ac59075b964b07152d234b70', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_matricula`
--

CREATE TABLE `t_matricula` (
  `id` int(11) NOT NULL,
  `aluno_fk` int(11) DEFAULT NULL,
  `dtMat` date DEFAULT NULL,
  `curso_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_matricula`
--

INSERT INTO `t_matricula` (`id`, `aluno_fk`, `dtMat`, `curso_fk`) VALUES
(1, 1, '2019-05-22', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_morada`
--

CREATE TABLE `t_morada` (
  `id` int(11) NOT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `codigo_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_morada`
--

INSERT INTO `t_morada` (`id`, `endereco`, `codigo_fk`) VALUES
(1, 'Rua Costa Junior B3 E41 1C', 1),
(2, 'Rua das Pereiras 197 RC', 2),
(3, 'Baptista', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_noticias`
--

CREATE TABLE `t_noticias` (
  `id` int(11) NOT NULL,
  `dtPublicacao` datetime DEFAULT NULL,
  `corpoNoticia` varchar(8000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_perfil`
--

CREATE TABLE `t_perfil` (
  `id` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_perfil`
--

INSERT INTO `t_perfil` (`id`, `tipo`) VALUES
(1, 'docente'),
(2, 'Aluno'),
(3, 'Gestor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_turma`
--

CREATE TABLE `t_turma` (
  `id` int(11) NOT NULL,
  `nome` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_turma`
--

INSERT INTO `t_turma` (`id`, `nome`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_turma_curso`
--

CREATE TABLE `t_turma_curso` (
  `id` int(11) NOT NULL,
  `curso_fk` int(11) DEFAULT NULL,
  `turma_fk` int(11) DEFAULT NULL,
  `aluno_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_turma_curso`
--

INSERT INTO `t_turma_curso` (`id`, `curso_fk`, `turma_fk`, `aluno_fk`) VALUES
(1, 1, 1, NULL),
(2, 2, 1, NULL),
(3, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_utilizador`
--

CREATE TABLE `t_utilizador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `dtNasc` date DEFAULT NULL,
  `contacto_fk` int(11) DEFAULT NULL,
  `morada_fk` int(11) DEFAULT NULL,
  `perfil_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_utilizador`
--

INSERT INTO `t_utilizador` (`id`, `nome`, `dtNasc`, `contacto_fk`, `morada_fk`, `perfil_fk`) VALUES
(1, 'Ricardo', '1991-09-18', 1, 1, 2),
(2, 'Pedro', '1972-11-20', 2, 2, 2),
(3, 'Ricardo Baptista', '1975-01-01', 3, 3, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_aluno`
--
ALTER TABLE `t_aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilizador_fk` (`utilizador_fk`);

--
-- Índices para tabela `t_contactos`
--
ALTER TABLE `t_contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `t_cp`
--
ALTER TABLE `t_cp`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `t_curso`
--
ALTER TABLE `t_curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `t_curso_disciplinas`
--
ALTER TABLE `t_curso_disciplinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curso_fk` (`curso_fk`),
  ADD KEY `disciplinas_fk` (`disciplinas_fk`);

--
-- Índices para tabela `t_disciplinas`
--
ALTER TABLE `t_disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `t_docente`
--
ALTER TABLE `t_docente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilizador_fk` (`utilizador_fk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
