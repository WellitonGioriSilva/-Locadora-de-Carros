

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/08/2023 às 04:09

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
-- Banco de dados: `locacar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cli` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_cli` varchar(100) DEFAULT NULL,
  `cpf_cli` varchar(20) DEFAULT NULL,
  `rg_cli` varchar(20) DEFAULT NULL,
  `email_cli` varchar(100) DEFAULT NULL,
  `contato_cli` varchar(50) DEFAULT NULL,
  `nacionalidade_cli` varchar(50) DEFAULT NULL,
  `senha_cli` varchar(100) DEFAULT NULL,
  `genero_cli` varchar(10) DEFAULT NULL,
  `dataNascimento_cli` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id_cli`, `nome_cli`, `cpf_cli`, `rg_cli`, `email_cli`, `contato_cli`, `nacionalidade_cli`, `senha_cli`, `genero_cli`, `dataNascimento_cli`) VALUES
(2, 'Welliton', '043.366.062-77', '1425675', 'gioriwelliton47@gmail.com', '(69)98142-3642', 'Brasil', '1234', 'Masculino', '2023-08-09');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente_premium`
--

CREATE TABLE `cliente_premium` (
  `id_cli_pre` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_cli_pre` varchar(100) DEFAULT NULL,
  `cpf_cli_pre` varchar(100) DEFAULT NULL,
  `email_cli_pre` varchar(150) DEFAULT NULL,
  `assinatura_cli_pre` varchar(150) DEFAULT NULL,
  `tempo_cli_pre` varchar(150) DEFAULT NULL,
  `pagamento_cli_pre` varchar(150) DEFAULT NULL,
  `celular_cli_pre` varchar(150) DEFAULT NULL,
  `data_cli_pre` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente_premium`
--

INSERT INTO `cliente_premium` (`id_cli_pre`, `nome_cli_pre`, `cpf_cli_pre`, `email_cli_pre`, `assinatura_cli_pre`, `tempo_cli_pre`, `pagamento_cli_pre`, `celular_cli_pre`, `data_cli_pre`) VALUES
(1, 'Welliton', '043.366.062-77', 'gioriwelliton47@gmail.com', 'platinum', 'anual', 'pix', '(69)98142-3642', '0000-00-00'),
(2, 'Welliton', '043.366.062-77', 'gioriwelliton47@gmail.com', 'platinum', 'anual', 'pix', '(69)98142-3642', '2023-08-12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_fun` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_fun` varchar(100) DEFAULT NULL,
  `cpf_fun` varchar(20) DEFAULT NULL,
  `email_fun` varchar(100) DEFAULT NULL,
  `contato_fun` varchar(50) DEFAULT NULL,
  `genero_fun` varchar(10) DEFAULT NULL,
  `dataNascimento_fun` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id_fun`, `nome_fun`, `cpf_fun`, `email_fun`, `contato_fun`, `genero_fun`, `dataNascimento_fun`) VALUES
(1, 'Welliton', '043.366.062-77', 'gioriwelliton47@gmail.com', '69984879410', 'masculino', '2023-08-16');

-- --------------------------------------------------------

--
-- Estrutura para tabela `promocao`
--

CREATE TABLE `promocao` (
  `id_vei` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_vei` varchar(150) DEFAULT NULL,
  `valor_atual_vei` float DEFAULT NULL,
  `valor_promocional_vei` float DEFAULT NULL,
  `inicio_vei` date DEFAULT NULL,
  `fim_vei` date DEFAULT NULL,
  `tipo_vei` varchar(50) DEFAULT NULL,
  `tipo_promocao_vei` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `promocao`
--

INSERT INTO `promocao` (`id_vei`, `nome_vei`, `valor_atual_vei`, `valor_promocional_vei`, `inicio_vei`, `fim_vei`, `tipo_vei`, `tipo_promocao_vei`) VALUES
(3, 'Strada', 1500, 700, '2023-08-17', '2023-08-11', 'Compacto estate', '50% no primeiro aluguel');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva`
--

CREATE TABLE `reserva` (
  `id_res` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `condutor_res` varchar(150) DEFAULT NULL,
  `contato_res` varchar(150) DEFAULT NULL,
  `cpf_res` varchar(150) DEFAULT NULL,
  `cnh_res` varchar(150) DEFAULT NULL,
  `valor_res` double DEFAULT NULL,
  `modelo_res` varchar(150) DEFAULT NULL,
  `cidade_res` varchar(150) DEFAULT NULL,
  `data_ini_res` date DEFAULT NULL,
  `data_fim_res` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `reserva`
--

INSERT INTO `reserva` (`id_res`, `condutor_res`, `contato_res`, `cpf_res`, `cnh_res`, `valor_res`, `modelo_res`, `cidade_res`, `data_ini_res`, `data_fim_res`) VALUES
(1, 'Giori', '(54)64949-8498', '85498494989', '49846849646', 8466, 'asfda', 'asfdasf', '2023-08-24', '2023-08-31');

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id_vei` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome_vei` varchar(100) DEFAULT NULL,
  `quant_portas_vei` varchar(50) DEFAULT NULL,
  `ar_vei` varchar(5) DEFAULT NULL,
  `trava_vei` varchar(5) DEFAULT NULL,
  `airbag_vei` varchar(5) DEFAULT NULL,
  `direcao_vei` varchar(20) DEFAULT NULL,
  `freio_vei` varchar(20) DEFAULT NULL,
  `cambio_vei` varchar(20) DEFAULT NULL,
  `porta_malas_vei` varchar(20) DEFAULT NULL,
  `quantPessoas_vei` varchar(20) DEFAULT NULL,
  `tracao_vei` varchar(20) DEFAULT NULL,
  `placa_vei` varchar(20) DEFAULT NULL,
  `valor_vei` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cli`);

--
-- Índices de tabela `cliente_premium`
--
ALTER TABLE `cliente_premium`
  ADD PRIMARY KEY (`id_cli_pre`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_fun`);

--
-- Índices de tabela `promocao`
--
ALTER TABLE `promocao`
  ADD PRIMARY KEY (`id_vei`);

--
-- Índices de tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_res`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cliente_premium`
--
ALTER TABLE `cliente_premium`
  MODIFY `id_cli_pre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_fun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `promocao`
--
ALTER TABLE `promocao`
  MODIFY `id_vei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
