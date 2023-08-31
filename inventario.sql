-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/08/2023 às 18:24
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `inventario`
--
  CREATE DATABASE inventario;

-- Select banco.
  USE inventario;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `name_produto` varchar(255) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `qtd_produto` varchar(255) NOT NULL,
  `qld_produto` varchar(250) NOT NULL,
  `local_produto` varchar(255) NOT NULL,
  `setor_produto` varchar(255) NOT NULL,
  `obs_produto` mediumtext NOT NULL,
  PRIMARY KEY (id_produto),
  FOREIGN KEY (id_usuario) REFERENCES usuario(id_user)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`,`id_produto`, `name_produto`, `cod_produto`, `qtd_produto`, `qld_produto`, `local_produto`, `setor_produto`, `obs_produto`) VALUES
(1, 'CADEIRA COM BRAçOS',276784, '50', 'ÓTIMO', 'MATRIZ', 'CANTINA', 'CADEIRAS COM BRAçOS FORTES E ACOLCHOADAS. | ANO: 2015'),
(2, 'MICROFONE SEM FIO', 936185, '2', ' ÓTIMO', 'CATIRI', 'TEMPLO', 'MICROFONES SEM FIO |  MARCA: SAMSUNG.'),
(3, 'PULPITO DE MADEIRA', 38257, '1', ' ÓTIMO', 'BARROSO', 'TEMPLO', 'PULPITO DE MADEIRA');

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `full_name_user` varchar(255) NOT NULL,
  `login_name` varchar(255) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  PRIMARY KEY (id_user)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Índices para tabelas despejadas
--
INSERT INTO `usuario` (`full_name_user`, `login_name`,`pass_user`) VALUES
('admin', 'admin', 'root'),('JEFERSON DUARTE', 'jeferson.duarte', 'duarte'),('SANDRO DINIZ', 'sandro.diniz', 'diniz');




--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
