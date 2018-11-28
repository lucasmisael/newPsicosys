-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2018 às 01:04
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
-- Database: `newpsicosys`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_clientes`
--

CREATE TABLE `tab_clientes` (
  `CLI_COD` int(11) NOT NULL,
  `CLI_NOME` varchar(100) DEFAULT NULL,
  `CLI_STATUS` varchar(3) DEFAULT NULL,
  `CLI_CPF` varchar(50) NOT NULL,
  `CLI_DATA_NASC` date NOT NULL,
  `CLI_ENDERECO` varchar(200) DEFAULT NULL,
  `CLI_CEP` varchar(20) DEFAULT NULL,
  `CLI_CONTATO_FONE1` varchar(50) DEFAULT NULL,
  `CLI_FONE1` varchar(50) DEFAULT NULL,
  `CLI_CONTATO_CEL1` varchar(50) DEFAULT NULL,
  `CLI_CEL1` varchar(50) DEFAULT NULL,
  `CLI_CONTATO_FONE2` varchar(50) DEFAULT NULL,
  `CLI_FONE2` varchar(50) DEFAULT NULL,
  `CLI_CONTATO_CEL2` varchar(50) DEFAULT NULL,
  `CLI_CEL2` varchar(50) DEFAULT NULL,
  `CLI_EMAIL` varchar(100) DEFAULT NULL,
  `CLI_COD_CID` varchar(20) DEFAULT NULL,
  `CLI_LIBERACAO` varchar(20) DEFAULT NULL,
  `CLI_CONVENIO` int(11) DEFAULT NULL,
  `CLI_OBS` varchar(500) DEFAULT NULL,
  `CLI_TIPO` varchar(20) DEFAULT NULL,
  `CLI_RESP` varchar(100) DEFAULT NULL,
  `CLI_DATA_CADASTRO` date NOT NULL,
  `CLI_PERIODO` varchar(20) DEFAULT NULL,
  `CRIADO_EM` datetime DEFAULT NULL,
  `USUARIO_CRI` varchar(50) DEFAULT NULL,
  `ALTERADO_EM` datetime DEFAULT NULL,
  `USUARIO_ALT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_clientes`
--

INSERT INTO `tab_clientes` (`CLI_COD`, `CLI_NOME`, `CLI_STATUS`, `CLI_CPF`, `CLI_DATA_NASC`, `CLI_ENDERECO`, `CLI_CEP`, `CLI_CONTATO_FONE1`, `CLI_FONE1`, `CLI_CONTATO_CEL1`, `CLI_CEL1`, `CLI_CONTATO_FONE2`, `CLI_FONE2`, `CLI_CONTATO_CEL2`, `CLI_CEL2`, `CLI_EMAIL`, `CLI_COD_CID`, `CLI_LIBERACAO`, `CLI_CONVENIO`, `CLI_OBS`, `CLI_TIPO`, `CLI_RESP`, `CLI_DATA_CADASTRO`, `CLI_PERIODO`, `CRIADO_EM`, `USUARIO_CRI`, `ALTERADO_EM`, `USUARIO_ALT`) VALUES
(1, 'Maria Helena Nogueira Ferreira Oliveira', 'off', '295.664.168-90', '1980-09-04', 'Rua Pedro Gusso', '81.050-200', 'Maria Helena', '(41) 3079-5449', 'Miguel', '(41) 98864-0013', 'Tiago', '(41) 3276-6487', 'Tiago', '(41) 98805-5870', 'lenaenf@hotmail.com', '102030405060708090', 'JPK3080', 1, 'observacaaooooooooooooooooooooooooooooooooooo', 'Crianca', 'TiagÃ£o das Meninas', '0000-00-00', 'Manha', NULL, NULL, NULL, NULL),
(2, 'Lucas Misael Barbosa do Nascimento', 'on', '098.137.912-14', '1997-07-02', 'Joana roncaglio bertoldi', '81.490-468', 'Lucas Misael', '(41) 3232-3232', '', '', '', '', '', '', 'lucas.ms.elo84@gmail.com', '1215', '', 1, '', 'Adulto', '', '0000-00-00', 'Manha', NULL, NULL, NULL, NULL),
(4, 'JoÃ£o Nascimento Soares', 'on', '121.354.545-45', '1978-04-05', 'XV de Novembro 1235', '', 'JoÃ£o ', '(41) 3223-2323', '', '', '', '', '', '', '', '', '', 1, '', 'Adulto', '', '0000-00-00', 'Manha', NULL, NULL, NULL, NULL),
(5, 'JÃ©ssica do NascimentoS', 'on', '123.154.554-54', '2000-12-12', 'Joao Bertoldi 365', '81.495-656', 'MÃ£e ', '(41) 3232-3232', 'MÃ£e', '(41) 99959-5565', '', '', '', '', '', '35454', '45545454', 1, '', 'Crianca', 'Margarida', '0000-00-00', 'Manha', NULL, NULL, NULL, NULL),
(6, 'Tiazinha', 'on', '295.664.168-90', '2018-11-27', 'Rua Pedro Gusso', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-11-27 21:08:12', 'Tiago', '2018-11-27 21:13:55', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_convenios`
--

CREATE TABLE `tab_convenios` (
  `CONV_COD` int(11) NOT NULL,
  `CONV_STATUS` varchar(3) NOT NULL,
  `CONV_NOME` varchar(100) NOT NULL,
  `CONV_CNPJ` varchar(50) NOT NULL,
  `CONV_ENDERECO` varchar(200) NOT NULL,
  `CONV_CEP` varchar(20) DEFAULT NULL,
  `CONV_FONE` varchar(50) DEFAULT NULL,
  `CONV_CONTATO_FONE` varchar(50) DEFAULT NULL,
  `CONV_CEL` varchar(50) DEFAULT NULL,
  `CONV_CONTATO_CEL` varchar(50) DEFAULT NULL,
  `CONV_CONTATO` varchar(100) DEFAULT NULL,
  `CONV_EMAIL` varchar(100) DEFAULT NULL,
  `CONV_SITE` varchar(100) DEFAULT NULL,
  `CONV_OBS` varchar(500) DEFAULT NULL,
  `CRIADO_EM` datetime DEFAULT NULL,
  `USUARIO_CRI` varchar(50) DEFAULT NULL,
  `ALTERADO_EM` datetime DEFAULT NULL,
  `USUARIO_ALT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_convenios`
--

INSERT INTO `tab_convenios` (`CONV_COD`, `CONV_STATUS`, `CONV_NOME`, `CONV_CNPJ`, `CONV_ENDERECO`, `CONV_CEP`, `CONV_FONE`, `CONV_CONTATO_FONE`, `CONV_CEL`, `CONV_CONTATO_CEL`, `CONV_CONTATO`, `CONV_EMAIL`, `CONV_SITE`, `CONV_OBS`, `CRIADO_EM`, `USUARIO_CRI`, `ALTERADO_EM`, `USUARIO_ALT`) VALUES
(1, 'on', 'NÃ£o', '00.000.000/0000-00', '', '', '(00) 0000-0000', '', '', '', NULL, '00000@0000.com', '', '', NULL, NULL, NULL, NULL),
(2, 'off', 'Clinipam', '78.784.511/5515-15', 'Alferes Poli 1254', '88.478-151', '(11) 2325-6554', 'RecepÃ§Ã£o', '', '', NULL, 'atendimento@clinipam.com.br', 'clinipam.com.br', '', NULL, NULL, NULL, NULL),
(3, 'on', 'Unimed', '84.664.298/0001-52', 'Rua Alferes Poli, 5404', '81.000-050', '(41) 3300-5400', 'Alceu', '(41) 98765-4321', 'Ricardo', NULL, 'unimed@unimed.com.br', 'www.unimed.com.br', 'venhaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_eventos`
--

CREATE TABLE `tab_eventos` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(100) DEFAULT NULL,
  `START` datetime DEFAULT NULL,
  `END` datetime DEFAULT NULL,
  `PROF_ID` int(11) NOT NULL,
  `CLI_ID` int(11) NOT NULL,
  `CRIADO_EM` datetime DEFAULT NULL,
  `USUARIO_CRI` varchar(50) DEFAULT NULL,
  `ALTERADO_EM` datetime DEFAULT NULL,
  `USUARIO_ALT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_eventos`
--

INSERT INTO `tab_eventos` (`ID`, `TITLE`, `START`, `END`, `PROF_ID`, `CLI_ID`, `CRIADO_EM`, `USUARIO_CRI`, `ALTERADO_EM`, `USUARIO_ALT`) VALUES
(2, 'Maria Helena Nogueira Ferreira Oliveira', '2018-11-26 21:00:00', '2018-11-26 22:00:00', 1, 1, NULL, NULL, NULL, NULL),
(3, 'Lucas Misael Barbosa do Nascimento', '2018-11-27 19:00:00', '2018-11-27 19:00:00', 2, 1, NULL, NULL, NULL, NULL),
(4, 'Lucas Misael Barbosa do Nascimento', '2018-11-27 20:00:00', '2018-11-27 20:00:10', 2, 1, NULL, NULL, NULL, NULL),
(5, 'Maria Helena Nogueira Ferreira Oliveira', '2018-11-27 20:00:00', '2018-11-27 21:00:00', 1, 1, NULL, NULL, NULL, NULL),
(6, 'Lucas Misael Barbosa do Nascimento', '2018-11-27 21:00:00', '0000-00-00 00:00:00', 2, 2, NULL, NULL, NULL, NULL),
(7, 'Lucas Misael Barbosa do Nascimento', '2018-11-27 21:00:00', '0000-00-00 00:00:00', 2, 2, NULL, NULL, NULL, NULL),
(8, 'Lucas Misael Barbosa do Nascimento', '2018-11-27 21:00:00', '0000-00-00 00:00:00', 2, 2, NULL, NULL, NULL, NULL),
(9, 'Lucas Misael Barbosa do Nascimento', '2018-11-27 21:00:00', '0000-00-00 00:00:00', 2, 2, NULL, NULL, NULL, NULL),
(10, 'Lucas Misael Barbosa do Nascimento', '2018-11-27 21:00:00', '0000-00-00 00:00:00', 2, 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_profissionais`
--

CREATE TABLE `tab_profissionais` (
  `PROF_COD` int(11) NOT NULL,
  `PROF_NOME` varchar(100) NOT NULL,
  `PROF_STATUS` varchar(3) NOT NULL,
  `PROF_ESPECIALIDADE` varchar(100) DEFAULT NULL,
  `PROF_TIPO_CRIANCA` varchar(1) DEFAULT NULL,
  `PROF_TIPO_ADOLESCENTE` varchar(1) DEFAULT NULL,
  `PROF_TIPO_ADULTO` varchar(1) DEFAULT NULL,
  `PROF_TIPO_IDOSO` varchar(1) DEFAULT NULL,
  `PROF_CNPJ_CPF` varchar(50) NOT NULL,
  `PROF_CONSELHO` varchar(100) DEFAULT NULL,
  `PROF_DATA_NASC` date NOT NULL,
  `PROF_ENDERECO` varchar(200) NOT NULL,
  `PROF_CEP` varchar(20) DEFAULT NULL,
  `PROF_FONE1` varchar(50) DEFAULT NULL,
  `PROF_CEL1` varchar(50) DEFAULT NULL,
  `PROF_EMAIL` varchar(100) DEFAULT NULL,
  `PROF_CONVENIO` int(11) DEFAULT NULL,
  `PROF_OBS` varchar(500) DEFAULT NULL,
  `PROF_FONE2` varchar(50) DEFAULT NULL,
  `PROF_CEL2` varchar(50) DEFAULT NULL,
  `CRIADO_EM` datetime DEFAULT NULL,
  `USUARIO_CRI` varchar(50) DEFAULT NULL,
  `ALTERADO_EM` datetime DEFAULT NULL,
  `USUARIO_ALT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_profissionais`
--

INSERT INTO `tab_profissionais` (`PROF_COD`, `PROF_NOME`, `PROF_STATUS`, `PROF_ESPECIALIDADE`, `PROF_TIPO_CRIANCA`, `PROF_TIPO_ADOLESCENTE`, `PROF_TIPO_ADULTO`, `PROF_TIPO_IDOSO`, `PROF_CNPJ_CPF`, `PROF_CONSELHO`, `PROF_DATA_NASC`, `PROF_ENDERECO`, `PROF_CEP`, `PROF_FONE1`, `PROF_CEL1`, `PROF_EMAIL`, `PROF_CONVENIO`, `PROF_OBS`, `PROF_FONE2`, `PROF_CEL2`, `CRIADO_EM`, `USUARIO_CRI`, `ALTERADO_EM`, `USUARIO_ALT`) VALUES
(1, 'Tiago Dantas de Oliveira', 'on', 'Ginecologista', 'A', NULL, NULL, NULL, '030.471.279-56', 'COREN', '1980-09-26', 'Rua Pedro Gusso, 12 ', '81.050-200', '(41) 3276-6457', '(41) 98805-5870', 'tiago@softdib.com.br', 1, 'Ã© tudo nossoo', '(41) 3079-5449', '(41) 98864-0013', NULL, NULL, NULL, ''),
(2, 'Lucas Misael Barbosa do Nascimento', 'off', '', 'A', NULL, NULL, NULL, '', '', '1997-07-02', 'Joana roncaglio bertoldi', '81.490-468', '', '', 'lucas.ms.elo84@gmail.com', 1, '', '', '', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_tpconsulta`
--

CREATE TABLE `tab_tpconsulta` (
  `CONS_COD` int(11) NOT NULL,
  `CONS_DESC` varchar(50) NOT NULL,
  `CONS_VALOR` decimal(10,2) NOT NULL,
  `CONS_TEMPO` float DEFAULT NULL,
  `CRIADO_EM` datetime DEFAULT NULL,
  `USUARIO_CRI` varchar(50) DEFAULT NULL,
  `ALTERADO_EM` datetime DEFAULT NULL,
  `USUARIO_ALT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_tpconsulta`
--

INSERT INTO `tab_tpconsulta` (`CONS_COD`, `CONS_DESC`, `CONS_VALOR`, `CONS_TEMPO`, `CRIADO_EM`, `USUARIO_CRI`, `ALTERADO_EM`, `USUARIO_ALT`) VALUES
(4, '30 min.', '50.00', 30, NULL, NULL, NULL, NULL),
(5, '1 hora', '90.00', 60, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_usuarios`
--

CREATE TABLE `tab_usuarios` (
  `USU_COD` int(11) NOT NULL,
  `USU_NOME` varchar(100) DEFAULT NULL,
  `USU_EMAIL` varchar(100) NOT NULL,
  `USU_SENHA` varchar(100) NOT NULL,
  `USU_STATUS` varchar(3) DEFAULT NULL,
  `CRIADO_EM` datetime DEFAULT NULL,
  `USUARIO_CRI` varchar(50) DEFAULT NULL,
  `ALTERADO_EM` datetime DEFAULT NULL,
  `USUARIO_ALT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_usuarios`
--

INSERT INTO `tab_usuarios` (`USU_COD`, `USU_NOME`, `USU_EMAIL`, `USU_SENHA`, `USU_STATUS`, `CRIADO_EM`, `USUARIO_CRI`, `ALTERADO_EM`, `USUARIO_ALT`) VALUES
(3, 'Admin', 'administrador@psicosys.com.br', '1234', 'on', '2018-11-22 21:35:11', '', '2018-11-26 21:26:13', 'administrador'),
(4, 'Tiago ', 'tiago@softdib.com.br', 'tiago', 'on', '2018-11-22 21:35:25', '', '2018-11-26 21:34:18', 'Tiago'),
(7, 'Juca bala', 'jucabala@psicosys.com.br', '123', 'on', '2018-11-26 21:51:35', 'Tiago', '0000-00-00 00:00:00', ''),
(8, 'Juca bala', 'jucabala@psicosys.com.br', '234', 'on', '0000-00-00 00:00:00', 'Tiago', '0000-00-00 00:00:00', ''),
(9, 'Juca bala', 'jucabala@psicosys.com.br', '234', 'on', '2018-11-26 22:03:37', '', '0000-00-00 00:00:00', ''),
(10, 'Juca bala', 'jucabala@psicosys.com.br', '234', 'on', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(11, 'Juca bala', 'jucabala@psicosys.com.br', '234', 'on', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(12, 'Luiz ', 'luis@softdib,com.br', 'luiz', 'off', '2018-11-27 13:11:56', 'Tiago', '2018-11-27 13:15:51', 'Tiago');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_clientes`
--
ALTER TABLE `tab_clientes`
  ADD PRIMARY KEY (`CLI_COD`);

--
-- Indexes for table `tab_convenios`
--
ALTER TABLE `tab_convenios`
  ADD PRIMARY KEY (`CONV_COD`);

--
-- Indexes for table `tab_eventos`
--
ALTER TABLE `tab_eventos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_cli` (`CLI_ID`);

--
-- Indexes for table `tab_profissionais`
--
ALTER TABLE `tab_profissionais`
  ADD PRIMARY KEY (`PROF_COD`);

--
-- Indexes for table `tab_tpconsulta`
--
ALTER TABLE `tab_tpconsulta`
  ADD PRIMARY KEY (`CONS_COD`);

--
-- Indexes for table `tab_usuarios`
--
ALTER TABLE `tab_usuarios`
  ADD PRIMARY KEY (`USU_COD`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_clientes`
--
ALTER TABLE `tab_clientes`
  MODIFY `CLI_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tab_convenios`
--
ALTER TABLE `tab_convenios`
  MODIFY `CONV_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tab_eventos`
--
ALTER TABLE `tab_eventos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tab_profissionais`
--
ALTER TABLE `tab_profissionais`
  MODIFY `PROF_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tab_tpconsulta`
--
ALTER TABLE `tab_tpconsulta`
  MODIFY `CONS_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tab_usuarios`
--
ALTER TABLE `tab_usuarios`
  MODIFY `USU_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
