-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jul-2022 às 04:53
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
-- Banco de dados: `devweb_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `born` date NOT NULL DEFAULT '2000-01-01',
  `password` varchar(160) NOT NULL,
  `avatar` enum('1','2','3','4','5','6') NOT NULL DEFAULT '1',
  `coins` int(3) UNSIGNED NOT NULL DEFAULT 0,
  `teacher` enum('Henklain','Marcelle','Thais','Md Chefe') NOT NULL DEFAULT 'Thais',
  `own_Henklain` tinyint(1) NOT NULL DEFAULT 0,
  `own_Marcelle` tinyint(1) NOT NULL DEFAULT 0,
  `own_MD_Chefe` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl1exe1` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl1exe2` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl1exe3` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl1exe4` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl1exe5` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl1` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl2exe1` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl2exe2` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl2exe3` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl2exe4` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl2exe5` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl2exe6` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl2exe7` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl2exe8` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl2` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl3exe1` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl3exe2` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl3exe3` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl3exe4` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl3exe5` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl3exe6` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl3exe7` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl3exe8` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl3exe9` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl3exe10` tinyint(1) NOT NULL DEFAULT 0,
  `has_completed_lvl3` tinyint(1) NOT NULL DEFAULT 0,
  `lvl0_evaluation` decimal(4,2) NOT NULL DEFAULT 0.00,
  `lvl1_evaluation` decimal(4,2) NOT NULL DEFAULT 0.00,
  `lvl2_evaluation` decimal(4,2) NOT NULL DEFAULT 0.00,
  `lvl3_evaluation` decimal(4,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `born`, `password`, `avatar`, `coins`, `teacher`, `own_Henklain`, `own_Marcelle`, `own_MD_Chefe`, `has_completed_lvl1exe1`, `has_completed_lvl1exe2`, `has_completed_lvl1exe3`, `has_completed_lvl1exe4`, `has_completed_lvl1exe5`, `has_completed_lvl1`, `has_completed_lvl2exe1`, `has_completed_lvl2exe2`, `has_completed_lvl2exe3`, `has_completed_lvl2exe4`, `has_completed_lvl2exe5`, `has_completed_lvl2exe6`, `has_completed_lvl2exe7`, `has_completed_lvl2exe8`, `has_completed_lvl2`, `has_completed_lvl3exe1`, `has_completed_lvl3exe2`, `has_completed_lvl3exe3`, `has_completed_lvl3exe4`, `has_completed_lvl3exe5`, `has_completed_lvl3exe6`, `has_completed_lvl3exe7`, `has_completed_lvl3exe8`, `has_completed_lvl3exe9`, `has_completed_lvl3exe10`, `has_completed_lvl3`, `lvl0_evaluation`, `lvl1_evaluation`, `lvl2_evaluation`, `lvl3_evaluation`) VALUES
(1, 'Alex Silva', 'SalexS@gmail.com', '2001-01-01', 'vivi', '5', 0, 'Thais', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00'),
(12, 'Vinícius Nolêto de Araújo', 'noleto.vinicius.a@gmail.com', '2001-11-23', '1234567890', '1', 149, 'Thais', 1, 1, 1, 0, 1, 1, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, '1.00', '4.00', '5.80', '8.00'),
(18, 'Sarah Fadul Nolêto', 'sarinha.historiadora@gmail.com', '2001-06-23', 'umbrela', '4', 0, 'Thais', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
