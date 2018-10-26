-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jul-2018 às 02:00
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psicosys`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_clientes`
--

CREATE TABLE `tab_clientes` (
  `Cliente_Cod` int(11) NOT NULL,
  `Cliente_Desc` varchar(100) NOT NULL,
  `Cliente_Status` int(11) NOT NULL,
  `Cliente_Cpf` varchar(50) NOT NULL,
  `Cliente_Data_Nasc` date NOT NULL,
  `Cliente_Endereco` varchar(200) NOT NULL,
  `Cliente_Cep` varchar(20) DEFAULT NULL,
  `Cliente_Contato_Fone1` varchar(50) DEFAULT NULL,
  `Cliente_Fone1` varchar(50) DEFAULT NULL,
  `Cliente_Contato_Celular1` varchar(50) DEFAULT NULL,
  `Cliente_Celular1` varchar(50) DEFAULT NULL,
  `Cliente_Contato_Fone2` varchar(50) DEFAULT NULL,
  `Cliente_Fone2` varchar(50) DEFAULT NULL,
  `Cliente_Contato_Celular2` varchar(50) DEFAULT NULL,
  `Cliente_Celular2` varchar(50) DEFAULT NULL,
  `Cliente_Email` varchar(100) DEFAULT NULL,
  `Cliente_Cod_Cid` varchar(20) DEFAULT NULL,
  `Cliente_Liberacao` varchar(20) DEFAULT NULL,
  `Cliente_Convenio` int(11) DEFAULT NULL,
  `Cliente_Observacao` varchar(500) DEFAULT NULL,
  `Cliente_Tipo` varchar(20) DEFAULT NULL,
  `Cliente_Responsavel` varchar(100) DEFAULT NULL,
  `Cliente_Data_Cadastro` date NOT NULL,
  `Cliente_Periodo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_colaboradores`
--

CREATE TABLE `tab_colaboradores` (
  `Colaborador_Cod` int(11) NOT NULL,
  `Colaborador_Desc` varchar(100) NOT NULL,
  `Colaborador_Status` int(11) NOT NULL,
  `Colaborador_Especialidade` varchar(100) DEFAULT NULL,
  `Colaborador_TipoCrianca` varchar(1) DEFAULT NULL,
  `Colaborador_TipoAdolescente` varchar(1) DEFAULT NULL,
  `Colaborador_TipoAdulto` varchar(1) DEFAULT NULL,
  `Colaborador_TipoIdoso` varchar(1) DEFAULT NULL,
  `Colaborador_Cnpj_Cpf` varchar(50) NOT NULL,
  `Colaborador_Conselho` varchar(100) DEFAULT NULL,
  `Colaborador_Data_Nasc` date NOT NULL,
  `Colaborador_Endereco` varchar(200) NOT NULL,
  `Colaborador_Cep` varchar(20) DEFAULT NULL,
  `Colaborador_Fone1` varchar(50) DEFAULT NULL,
  `Colaborador_Celular1` varchar(50) DEFAULT NULL,
  `Colaborador_Email` varchar(100) DEFAULT NULL,
  `Colaborador_Convenio` int(11) DEFAULT NULL,
  `Colaborador_Observacao` varchar(500) DEFAULT NULL,
  `Colaborador_Fone2` varchar(50) DEFAULT NULL,
  `Colaborador_Celular2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_convenios`
--

CREATE TABLE `tab_convenios` (
  `Convenio_Cod` int(11) NOT NULL,
  `Convenio_Status` int(11) NOT NULL,
  `Convenio_Desc` varchar(100) NOT NULL,
  `Convenio_Cnpj` varchar(50) NOT NULL,
  `Convenio_Endereco` varchar(200) NOT NULL,
  `Convenio_Cep` varchar(20) DEFAULT NULL,
  `Convenio_Fone` varchar(50) DEFAULT NULL,
  `Convenio_Contato_Fone` varchar(50) DEFAULT NULL,
  `Convenio_Cel` varchar(50) DEFAULT NULL,
  `Convenio_Contato_Cel` varchar(50) DEFAULT NULL,
  `Convenio_Contato` varchar(100) DEFAULT NULL,
  `Convenio_Email` varchar(100) DEFAULT NULL,
  `Convenio_Site` varchar(100) DEFAULT NULL,
  `Convenio_Observacao` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_usuarios`
--

CREATE TABLE `tab_usuarios` (
  `usuario_cod` int(11) NOT NULL,
  `usuario_nome` varchar(100) DEFAULT NULL,
  `usuario_email` varchar(100) NOT NULL,
  `usuario_senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_clientes`
--
ALTER TABLE `tab_clientes`
  ADD PRIMARY KEY (`Cliente_Cod`);

--
-- Indexes for table `tab_colaboradores`
--
ALTER TABLE `tab_colaboradores`
  ADD PRIMARY KEY (`Colaborador_Cod`);

--
-- Indexes for table `tab_convenios`
--
ALTER TABLE `tab_convenios`
  ADD PRIMARY KEY (`Convenio_Cod`);

--
-- Indexes for table `tab_usuarios`
--
ALTER TABLE `tab_usuarios`
  ADD PRIMARY KEY (`usuario_cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_clientes`
--
ALTER TABLE `tab_clientes`
  MODIFY `Cliente_Cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `tab_colaboradores`
--
ALTER TABLE `tab_colaboradores`
  MODIFY `Colaborador_Cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tab_convenios`
--
ALTER TABLE `tab_convenios`
  MODIFY `Convenio_Cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tab_usuarios`
--
ALTER TABLE `tab_usuarios`
  MODIFY `usuario_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
