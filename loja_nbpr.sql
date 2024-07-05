-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/07/2024 às 01:51
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
-- Banco de dados: `loja_nbpr`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `info_carros`
--

CREATE TABLE `info_carros` (
  `id` int(11) NOT NULL,
  `imagem_carro` varchar(50) DEFAULT NULL,
  `modelo_carro` varchar(30) DEFAULT NULL,
  `ano` varchar(10) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `kilometragem` varchar(20) DEFAULT NULL,
  `motorizacao` varchar(10) DEFAULT NULL,
  `cambio` varchar(20) DEFAULT NULL,
  `carroceria` varchar(30) DEFAULT NULL,
  `combustivel` varchar(20) DEFAULT NULL,
  `cor` varchar(20) DEFAULT NULL,
  `descricao_opcionais` varchar(200) DEFAULT NULL,
  `informacao` varchar(200) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `info_carros`
--

INSERT INTO `info_carros` (`id`, `imagem_carro`, `modelo_carro`, `ano`, `cidade`, `kilometragem`, `motorizacao`, `cambio`, `carroceria`, `combustivel`, `cor`, `descricao_opcionais`, `informacao`, `email`, `telefone`) VALUES
(26, 'Carro', 'Volvo XC60', '2022', 'Campinas', '10.000', '2.0', 'Automatico', 'SUV', 'Gasolina', 'Branco', 'Banco de couro e teto solar', 'Veiculo com IPVA pago', 'Brunoarruda@mail.com', '11989038694');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_formulario`
--

CREATE TABLE `tbl_formulario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `info_carros`
--
ALTER TABLE `info_carros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_formulario`
--
ALTER TABLE `tbl_formulario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `info_carros`
--
ALTER TABLE `info_carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `tbl_formulario`
--
ALTER TABLE `tbl_formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
