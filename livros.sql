-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/03/2026 às 15:54
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
-- Banco de dados: `bibliotech`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int(11) NOT NULL,
  `nome_livro` varchar(150) NOT NULL,
  `autor_livro` varchar(150) NOT NULL,
  `data_lancamento` date NOT NULL,
  `reservado` tinyint(1) NOT NULL,
  `capa_livro` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `nome_livro`, `autor_livro`, `data_lancamento`, `reservado`, `capa_livro`) VALUES
(1, 'Vermelho, Branco e Sangue Azul', 'Casey McQuiston', '2019-05-14', 0, './teste/img/capa-1.jpg'),
(2, 'Harry Potter e A Pedra Filosofal', 'JK Rolin', '1997-06-26', 0, './teste/img/capa-2.jpg'),
(3, 'Romeu e Julieta', 'Shakesper', '1597-01-01', 1, './teste/img/capa-3.jpg'),
(4, 'A Guerra dos Tronos', 'George R.R. Martin', '1996-08-01', 0, './teste/img/capa-4.jpg'),
(5, 'É Assim que Acaba', 'Collen Hoover', '2018-01-18', 0, './teste/img/capa-5.jpg'),
(6, 'Amor e Gelato', 'Jenna Evans Welch', '2017-07-21', 0, './teste/img/capa-6.jpg'),
(7, 'Os Sete Maridos de Eveliyn Hugo', 'Taylor Jenkins Reid', '2019-10-21', 0, './teste/img/capa-7.jpg'),
(8, 'O Morro dos Ventos Uivantes', 'Emily Brontë', '1847-12-01', 0, './teste/img/capa-8.jpg'),
(9, 'Veríth', 'Collen Hoover', '2026-10-02', 0, './teste/img/capa-9.jpg'),
(10, 'Por Lugares Incríveis', 'Jennifer Niven', '2015-01-01', 0, './teste/img/capa-10.jpg'),
(11, 'Pequeno Príncipe', 'Antoine de Saint-Exupéry', '1943-04-06', 0, './teste/img/capa-11.jpg'),
(12, 'O Duque e Eu', 'Julia Quinn', '2000-01-05', 0, './teste/img/capa-12.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
