-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Dez-2018 às 04:11
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
(1, 'Maria Helena Nogueira Ferreira Oliveira', 'on', '098.137.959-13', '1980-09-04', 'Rua Pedro Gusso', '81.050-200', 'Maria Helena', '(41) 3079-5449', 'Miguel', '(41) 98864-0013', 'Tiago', '(41) 3276-6487', 'Tiago', '(41) 98805-5870', 'lenaenf@hotmail.com', '102030405060708090', 'JPK3080', 1, 'observacaaooooooooooooooooooooooooooooooooooo', 'Crianca', 'TiagÃ£o das Meninas', '0000-00-00', 'Manha', '0000-00-00 00:00:00', '', '2018-11-28 20:36:55', 'admin'),
(2, 'Lucas Misael Barbosa do Nascimento', 'on', '098.137.912-14', '1997-07-02', 'Joana roncaglio bertoldi', '81.490-468', 'Lucas Misael', '(41) 3232-3232', '', '', '', '', '', '', 'lucas.ms.elo84@gmail.com', '1215', '', 1, '', 'Adulto', '', '0000-00-00', 'Manha', NULL, NULL, NULL, NULL),
(4, 'JoÃ£o Nascimento Soares', 'on', '121.354.545-45', '1978-04-05', 'XV de Novembro 1235', '', 'JoÃ£o ', '(41) 3223-2323', '', '', '', '', '', '', '', '', '', 1, '', 'Adulto', '', '0000-00-00', 'Manha', NULL, NULL, NULL, NULL),
(5, 'JÃ©ssica do NascimentoS', 'on', '123.154.554-54', '2000-12-12', 'Joao Bertoldi 365', '81.495-656', 'MÃ£e ', '(41) 3232-3232', 'MÃ£e', '(41) 99959-5565', '', '', '', '', '', '35454', '45545454', 1, '', 'Crianca', 'Margarida', '0000-00-00', 'Manha', NULL, NULL, NULL, NULL),
(6, 'Terezinha GuimarÃ£es', 'on', '295.664.168-90', '2018-11-27', 'Rua Pedro Gusso', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-11-27 21:08:12', 'Tiago', '2018-11-28 20:31:58', 'admin'),
(8, 'Luana Priscila Fernandes', NULL, '123.454.545-45', '1997-07-02', 'Rua Joana Roncaglio Bertoldi', '81.490-468', '', '', 'Pai', '(41) 99959-5565', '', '', '', '', 'lucas.ms.elo84@gmail.com', '1215', '45545454', 1, '', 'Adulto', '', '0000-00-00', 'Manha', '2018-11-28 20:33:33', 'admin', '0000-00-00 00:00:00', ''),
(9, 'Simone Karla Costa da Silva', 'on', '123.454.545-45', '2008-11-11', 'Rua Joana Roncaglio Bertoldi', '81.490-468', 'Cleonice', '(41) 3232-3232', 'MÃ£e', '(41) 99959-5565', '', '', '', '', 'lucas.ms.elo84@gmail.com', '1215', '45545454', 1, '', 'Crianca', 'Margarida', '0000-00-00', 'Manha', '2018-11-28 20:36:07', 'admin', '2018-11-28 20:36:44', 'admin'),
(10, 'Alexandre Bento', 'on', '295.664.168-90', '1990-08-10', 'Rua Joana Roncaglio Bertoldi', '81.490-468', '', '', 'Alexandre', '(41) 89989-89', '', '', '', '', 'lucas.ms.elo84@gmail.com', '1215', '45545454', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-11-28 21:30:37', 'admin', '2018-12-02 15:04:10', 'Tiago'),
(11, 'Astolfo', 'on', '030.471.279-56', '2018-12-02', '', '', '', '', 'llllllll', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 02:47:40', 'Tiago', '2018-12-02 14:21:46', 'Tiago'),
(12, 'Tuvia', NULL, '555.454.547-88', '2018-12-02', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 02:58:51', 'tiago', '0000-00-00 00:00:00', ''),
(13, 'Lucas', NULL, '419.808.181-19', '2018-12-02', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:17:22', 'tiago', '0000-00-00 00:00:00', ''),
(14, 'Lucas', NULL, '419.808.181-19', '2018-12-02', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:19:50', 'tiago', '0000-00-00 00:00:00', ''),
(15, 'Lucas', NULL, '419.808.181-19', '2018-12-02', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:19:55', 'tiago', '0000-00-00 00:00:00', ''),
(16, 'tatataknanga', 'on', '616.161.616-16', '2018-12-03', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:21:05', 'tiago', '0000-00-00 00:00:00', ''),
(17, 'tatataknanga', 'on', '616.161.616-16', '2018-12-03', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:21:33', 'tiago', '0000-00-00 00:00:00', ''),
(18, 'tatataknanga', 'on', '616.161.616-16', '2018-12-03', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:21:57', 'tiago', '0000-00-00 00:00:00', ''),
(19, 'tatataknanga', 'on', '616.161.616-16', '2018-12-03', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:22:44', 'tiago', '0000-00-00 00:00:00', ''),
(20, 'fksfkdsfjsd', NULL, '123.456.554-54', '2018-12-02', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:41:39', 'tiago', '0000-00-00 00:00:00', ''),
(21, 'fksfkdsfjsd', NULL, '123.456.554-54', '2018-12-02', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:43:06', 'tiago', '0000-00-00 00:00:00', ''),
(22, 'fksfkdsfjsd', NULL, '123.456.554-54', '2018-12-02', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:44:26', 'tiago', '0000-00-00 00:00:00', ''),
(23, 'fksfkdsfjsd', NULL, '123.456.554-54', '2018-12-02', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:45:39', 'tiago', '0000-00-00 00:00:00', ''),
(24, 'fksfkdsfjsd', NULL, '123.456.554-54', '2018-12-02', '', '', '', '', 'Miguel', '(41) 98864-0013', '', '', '', '', '', '', '', 1, '', 'Crianca', '', '0000-00-00', 'Manha', '2018-12-02 03:46:19', 'tiago', '0000-00-00 00:00:00', '');

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
(1, 'on', 'Particular', '00.000.000/0000-00', '', '', '(00) 0000-0000', '', '', '', NULL, '00000@0000.com', '', '', '0000-00-00 00:00:00', '', '2018-11-28 20:58:02', 'admin'),
(2, 'off', 'Clinipam', '15.995.831/0001-18', 'Alferes Poli 1254', '88.478-151', '(11) 2325-6554', 'RecepÃ§Ã£o', '', '', NULL, 'atendimento@clinipam.com.br', 'clinipam.com.br', '', '0000-00-00 00:00:00', '', '2018-12-05 00:32:57', 'Admin'),
(3, 'on', 'Unimed', '00.000.000/0000-00', 'Rua Alferes Poli, 5404', '81.000-050', '(41) 3300-5400', 'Alceu', '(41) 98765-4321', 'Ricardo', NULL, 'unimed@unimed.com.br', 'www.unimed.com.br', 'venhaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00', '', '2018-12-05 00:33:10', 'Admin'),
(4, 'on', 'PsicoCentro', '78.784.511/5515-15', 'Rua Joana Roncaglio Bertoldi', '81.490-468', '(11) 2325-6554', 'RecepÃ§Ã£o', '', '', NULL, 'psicodentro@hotmail.com', 'psicocentro.com.br', '', '2018-11-28 20:34:25', 'admin', '0000-00-00 00:00:00', ''),
(5, 'on', 'Todos', '78.784.511/5515-15', '', '', '(11) 2325-6554', '', '', '', NULL, 'teste@posicosys', '', '', '2018-11-28 20:58:52', 'admin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_eventos`
--

CREATE TABLE `tab_eventos` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `PROF_ID` int(11) NOT NULL,
  `CLI_ID` int(11) NOT NULL,
  `CRIADO_EM` datetime DEFAULT NULL,
  `USUARIO_CRI` varchar(50) DEFAULT NULL,
  `ALTERADO_EM` datetime DEFAULT NULL,
  `USUARIO_ALT` varchar(50) DEFAULT NULL,
  `STATUS` varchar(1) NOT NULL,
  `ID_TPCONSULTA` int(11) NOT NULL,
  `SALA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_eventos`
--

INSERT INTO `tab_eventos` (`ID`, `title`, `start`, `end`, `PROF_ID`, `CLI_ID`, `CRIADO_EM`, `USUARIO_CRI`, `ALTERADO_EM`, `USUARIO_ALT`, `STATUS`, `ID_TPCONSULTA`, `SALA_ID`) VALUES
(9, 'Maria Helena Nogueira Ferreira Oliveira', '2018-11-28 21:00:00', '2018-11-28 21:30:00', 12, 1, NULL, NULL, NULL, NULL, 'A', 4, 2),
(10, 'Lucas Misael Barbosa do Nascimento', '2018-11-29 11:00:00', '2018-11-29 12:00:00', 2, 2, NULL, NULL, NULL, NULL, 'C', 5, 0),
(11, 'Lucas Misael Barbosa do Nascimento', '2018-11-29 11:00:00', '2018-11-29 12:00:00', 2, 2, NULL, NULL, NULL, NULL, 'C', 5, 0),
(12, 'Lucas Misael Barbosa do Nascimento', '2018-11-29 11:00:00', '2018-11-29 12:00:00', 2, 2, NULL, NULL, NULL, NULL, 'A', 5, 0),
(15, 'Maria Helena Nogueira Ferreira Oliveira', '2018-11-15 19:46:00', '2018-11-15 20:16:00', 2, 1, NULL, NULL, NULL, NULL, 'F', 4, 0),
(17, 'Lucas Misael Barbosa do Nascimento', '2018-11-29 11:00:00', '2018-11-29 12:00:00', 2, 2, NULL, NULL, NULL, NULL, 'D', 5, 0),
(18, 'Maria Helena Nogueira Ferreira Oliveira', '2018-11-29 12:00:00', '2018-11-29 12:30:00', 2, 1, NULL, NULL, NULL, NULL, 'C', 4, 0),
(19, 'Ruy Arruda Cassiano', '2018-11-29 10:00:00', '2018-11-29 10:30:00', 7, 2, NULL, NULL, NULL, NULL, 'A', 4, 0),
(20, 'Maria Helena Nogueira Ferreira Oliveira', '2018-11-28 21:00:00', '2018-11-28 21:30:00', 12, 1, NULL, NULL, NULL, NULL, 'A', 4, 2),
(21, 'Alexandre Bento', '2018-11-29 12:00:00', '2018-11-29 13:00:00', 10, 10, NULL, NULL, NULL, NULL, 'C', 5, 0),
(22, 'Alexandre Bento', '2018-11-09 20:00:00', '2018-11-09 20:30:00', 10, 10, NULL, NULL, NULL, NULL, 'C', 4, 0),
(23, 'JoÃ£o Nascimento Soares', '2018-11-09 19:00:00', '2018-11-09 19:30:00', 10, 4, NULL, NULL, NULL, NULL, 'F', 4, 0),
(24, 'Lucas Misael Barbosa do Nascimento', '2018-12-03 23:00:00', '2018-12-03 23:30:00', 2, 2, NULL, NULL, NULL, NULL, 'A', 4, 3),
(25, 'JÃ©ssica do NascimentoS', '2018-12-03 16:00:00', '2018-12-03 16:30:00', 11, 5, NULL, NULL, NULL, NULL, 'A', 4, 1),
(26, '', '2018-12-06 16:00:00', '2018-12-06 16:30:00', 11, 0, NULL, NULL, NULL, NULL, 'D', 4, 1);

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
(1, 'Tiago Dantas de Oliveira', 'on', 'Ginecologista', 'A', NULL, NULL, NULL, '000.001.111-11', 'COREN', '1980-09-26', 'Rua Pedro Gusso, 12 ', '81.050-200', '(41) 3276-6457', '(41) 98805-5870', 'tiago@softdib.com.br', 1, 'Ã© tudo nossoo', '(41) 3079-5449', '(41) 98864-0013', '0000-00-00 00:00:00', '', '2018-12-02 14:31:04', 'Tiago'),
(2, 'Lucas Gabriel da Silva', 'on', 'Psicologo', 'A', NULL, NULL, NULL, '098.137.959-13', 'CREA', '1997-07-02', 'Joana roncaglio bertoldi', '81.490-468', '', '(41) 99987-6456', 'lucas.ms.elo84@gmail.com', 1, '', '', '', '0000-00-00 00:00:00', '', '2018-12-05 00:17:49', 'Admin'),
(4, 'Amarildo da Silva', 'on', 'Psicologo', 'A', NULL, NULL, NULL, '249.395.834-95', '1234354465', '1990-11-22', 'Joao bettega 1123', '', '', '(41) 99999-8876', 'amarildo@psicosys.com', 2, '', '', '', '2018-11-28 20:10:42', 'admin', '0000-00-00 00:00:00', ''),
(6, 'Amanda da Silva ', 'off', 'Psicologo', NULL, NULL, NULL, NULL, '098.137.959-13', 'CRM', '1985-09-15', 'Joao bettega 8989', '40.985-743', '', '(42) 98898-9898', 'amanda@psicosys.com', 1, '', '', '', '2018-11-28 20:24:59', 'admin', '2018-12-02 15:03:22', 'Tiago'),
(7, 'Debora Kaynara Patricio da Silva', 'on', 'Psiquiatria', 'C', NULL, NULL, NULL, '534.589.385-40', 'CRM', '1990-06-04', 'lucas barros 1234', '40.859-384', '', '(41) 98989-8988', 'debora@psicosys.com', 3, '', '', '', '2018-11-28 20:28:12', 'admin', '0000-00-00 00:00:00', ''),
(8, 'Arthur Felipe R. Costa', '', 'Psicologo', 'A', NULL, NULL, NULL, '249.395.834-95', 'CRM', '1995-11-14', 'Alferes Poli 1345', '45.469-809', '', '(41) 87653-4335', 'arthur@psicosys.com', 1, '', '', '', '2018-11-28 20:29:28', 'admin', '0000-00-00 00:00:00', ''),
(9, 'Paulo Holanda Ribeiro Netto', 'on', 'Psicologo', 'A', NULL, NULL, NULL, '234.567.865-43', 'CRM', '1970-12-09', 'Rua Joana Roncaglio Bertoldi', '81.490-468', '', '(41) 87653-4335', 'paulo@psicosys.com', 1, '', '', '', '2018-11-28 20:30:25', 'admin', '0000-00-00 00:00:00', ''),
(10, 'Gustavo Gosmatti', 'on', 'Psicologo', 'A', NULL, NULL, NULL, '249.395.834-95', 'CRM', '1998-06-23', 'Rua Alferes Poli 123', '98989898', '', '(41) 87653-4335', '', 1, '', '', '', '2018-11-28 21:31:59', 'admin', '0000-00-00 00:00:00', ''),
(11, 'Gustavo Gosmatti', 'on', 'Psicologo', 'A', NULL, NULL, NULL, '249.395.834-95', 'CRM', '1998-06-23', 'Rua Alferes Poli 123', '98989898', '', '(41) 87653-4335', '', 1, '', '', '', '2018-11-28 21:32:00', 'admin', '0000-00-00 00:00:00', ''),
(12, 'Gustavo Gosmatti', 'on', 'Psicologo', 'A', NULL, NULL, NULL, '249.395.834-95', 'CRM', '1998-06-23', 'Rua Alferes Poli 123', '98989898', '', '(41) 87653-4335', '', 1, '', '', '', '2018-11-28 21:32:00', 'admin', '0000-00-00 00:00:00', ''),
(13, 'profissa', '', 'Psiquiatra', NULL, NULL, NULL, NULL, '123.456.789-01', 'COREN', '2018-12-03', 'Rua Pedro Gusso, 12 ', '', '', '(41) 98805-5870', '', 1, '', '', '', '2018-12-02 14:37:28', 'Tiago', '0000-00-00 00:00:00', ''),
(14, 'Cavalo', '', 'Ginecologista', NULL, NULL, NULL, NULL, '030.471.279-56', 'COREN', '2018-12-12', 'Rua Pedro Gusso, 12 ', '', '', '(41) 99860-3019', '', 1, '', '', '', '2018-12-02 14:38:42', 'Tiago', '0000-00-00 00:00:00', ''),
(15, 'Cavalo', '', 'Ginecologista', NULL, NULL, NULL, NULL, '030.471.279-56', 'COREN', '2018-12-12', 'Rua Pedro Gusso, 12 ', '', '', '(41) 99860-3019', '', 1, '', '', '', '2018-12-02 14:52:46', 'Tiago', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_prontuarios`
--

CREATE TABLE `tab_prontuarios` (
  `PRON_ID` int(11) NOT NULL,
  `PRON_PROFISSIONAL` varchar(50) NOT NULL,
  `PRON_IDPROF` int(11) NOT NULL,
  `PRON_CLIENTE` int(11) NOT NULL,
  `PRON_DESC` varchar(5000) DEFAULT NULL,
  `PRON_DATAHORA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_prontuarios`
--

INSERT INTO `tab_prontuarios` (`PRON_ID`, `PRON_PROFISSIONAL`, `PRON_IDPROF`, `PRON_CLIENTE`, `PRON_DESC`, `PRON_DATAHORA`) VALUES
(3, 'Admin', 3, 1, 'AAAAAAAAAAAAAAAAAAAAAAAAAAA', '2018-12-02 23:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_salas`
--

CREATE TABLE `tab_salas` (
  `SALA_COD` int(11) NOT NULL,
  `SALA_DESC` varchar(50) DEFAULT NULL,
  `CRIADO_EM` datetime DEFAULT NULL,
  `USUARIO_CRI` varchar(50) DEFAULT NULL,
  `ALTERADO_EM` datetime DEFAULT NULL,
  `USUARIO_ALT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_salas`
--

INSERT INTO `tab_salas` (`SALA_COD`, `SALA_DESC`, `CRIADO_EM`, `USUARIO_CRI`, `ALTERADO_EM`, `USUARIO_ALT`) VALUES
(1, 'Sala 13', '2018-12-02 16:01:22', 'Tiago', '0000-00-00 00:00:00', ''),
(2, 'Sala 17', '2018-12-02 16:01:34', 'Tiago', '0000-00-00 00:00:00', ''),
(3, 'Sala 51', '2018-12-02 16:01:46', 'Tiago', '0000-00-00 00:00:00', '');

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
  `USU_TIPO` varchar(20) DEFAULT NULL,
  `CRIADO_EM` datetime DEFAULT NULL,
  `USUARIO_CRI` varchar(50) DEFAULT NULL,
  `ALTERADO_EM` datetime DEFAULT NULL,
  `USUARIO_ALT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_usuarios`
--

INSERT INTO `tab_usuarios` (`USU_COD`, `USU_NOME`, `USU_EMAIL`, `USU_SENHA`, `USU_STATUS`, `USU_TIPO`, `CRIADO_EM`, `USUARIO_CRI`, `ALTERADO_EM`, `USUARIO_ALT`) VALUES
(3, 'Admin', 'administrador@psicosys.com.br', '1234', 'on', NULL, '2018-11-22 21:35:11', '', '2018-11-26 21:26:13', 'administrador'),
(4, 'Tiago ', 'tiago@softdib.com.br', 'tiago', 'on', NULL, '2018-11-22 21:35:25', '', '2018-11-26 21:34:18', 'Tiago'),
(7, 'Juca bala', 'jucabala@psicosys.com.br', '123', 'on', NULL, '2018-11-26 21:51:35', 'Tiago', '0000-00-00 00:00:00', ''),
(8, 'Juca bala', 'jucabala@psicosys.com.br', '234', 'on', NULL, '0000-00-00 00:00:00', 'Tiago', '0000-00-00 00:00:00', ''),
(9, 'Juca bala', 'jucabala@psicosys.com.br', '234', 'on', NULL, '2018-11-26 22:03:37', '', '0000-00-00 00:00:00', ''),
(10, 'Juca bala', 'jucabala@psicosys.com.br', '234', 'on', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(11, 'Juca bala', 'jucabala@psicosys.com.br', '234', 'on', NULL, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(12, 'Luiz ', 'luis@softdib,com.br', 'luiz', 'off', NULL, '2018-11-27 13:11:56', 'Tiago', '2018-11-27 13:15:51', 'Tiago'),
(13, 'Marco AurÃ©lio', 'marcoaurelio@pop.com.br', 'marco', 'on', 'Administrativo', '2018-12-02 01:08:33', '', '2018-12-02 01:10:09', 'Tiago'),
(14, 'Tatu', 'tatu@hotmail.com', 'tatu', NULL, 'Psiquiatra', '2018-12-02 01:14:49', 'Tiago', '0000-00-00 00:00:00', ''),
(15, 'JoÃ£o das Coves', 'joaodascoves@orkut.com', 'coves', 'on', 'Administrativo', '2018-12-02 01:16:33', 'Tiago', '0000-00-00 00:00:00', ''),
(16, 'lucas', 'lucas.ms.elo84@gmail.com', '1234', 'on', 'Administrativo', '2018-12-05 00:56:48', 'Admin', '0000-00-00 00:00:00', ''),
(17, 'tiago', 'tiago@hotmail', '12345', NULL, 'Administrativo', '2018-12-05 00:57:44', 'Admin', '0000-00-00 00:00:00', ''),
(18, 'KARLOS ANDRE', 'KARLOSANDRE@PSICOSYS.COM.BR', '1324', 'ON', 'PSICOLOGO', '2018-12-05 01:00:17', 'ADMIN', '0000-00-00 00:00:00', '');

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
  ADD KEY `fk_cli` (`CLI_ID`),
  ADD KEY `fk_prof` (`PROF_ID`),
  ADD KEY `fk_tpconsulta` (`ID_TPCONSULTA`);

--
-- Indexes for table `tab_profissionais`
--
ALTER TABLE `tab_profissionais`
  ADD PRIMARY KEY (`PROF_COD`);

--
-- Indexes for table `tab_prontuarios`
--
ALTER TABLE `tab_prontuarios`
  ADD PRIMARY KEY (`PRON_ID`),
  ADD KEY `fk_pron_cli` (`PRON_CLIENTE`);

--
-- Indexes for table `tab_salas`
--
ALTER TABLE `tab_salas`
  ADD PRIMARY KEY (`SALA_COD`);

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
  MODIFY `CLI_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tab_convenios`
--
ALTER TABLE `tab_convenios`
  MODIFY `CONV_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tab_eventos`
--
ALTER TABLE `tab_eventos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tab_profissionais`
--
ALTER TABLE `tab_profissionais`
  MODIFY `PROF_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tab_prontuarios`
--
ALTER TABLE `tab_prontuarios`
  MODIFY `PRON_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tab_salas`
--
ALTER TABLE `tab_salas`
  MODIFY `SALA_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tab_tpconsulta`
--
ALTER TABLE `tab_tpconsulta`
  MODIFY `CONS_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tab_usuarios`
--
ALTER TABLE `tab_usuarios`
  MODIFY `USU_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tab_prontuarios`
--
ALTER TABLE `tab_prontuarios`
  ADD CONSTRAINT `fk_pron_cli` FOREIGN KEY (`PRON_CLIENTE`) REFERENCES `tab_clientes` (`CLI_COD`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
