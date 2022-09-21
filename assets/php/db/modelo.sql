-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 15/09/2020 às 16:07
-- Versão do servidor: 5.5.59-0ubuntu0.14.04.1-log
-- Versão do PHP: 7.0.33-30+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestccon2_testes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ambiente`
--

CREATE TABLE `ambiente` (
  `id` int(11) NOT NULL,
  'nome' varchar(255) NOT NULL,
  'imagem' varchar(64),
  'valor' varchar(255) NOT NULL,
  'duracao' varchar(255) NOT NULL,
  'status' varchar(255) NOT NULL,
  'exibicao' varchar(255) NOT NULL,
  'padrao' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `achadosPerdidos`
--

CREATE TABLE `achadosPerdidos` (
  `id` int(11) NOT NULL,
  'descricao' varchar(255) NOT NULL,
  'imagem' varchar(255) NOT NULL,
  'dataCadastro	' varchar(255) NOT NULL,
  'tipo' int(11) NOT NULL,
  'local' varchar(255) NOT NULL,
  'status' int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `controleEntrada`
--

CREATE TABLE `controleEntrada` (
  `id` int(11) NOT NULL,
  'nome' varchar(255) NOT NULL,
  'tipoEntrada' varchar(255) NOT NULL,
  'documento' varchar(255) NOT NULL,
  'placa' varchar(255) NOT NULL,
  'cor' varchar(255) NOT NULL,
  'modelo' varchar(255) NOT NULL,
  'ocupantes' varchar(255) NOT NULL,
  'bloco' int(11) NOT NULL,
  'apartamento' int(11) NOT NULL,
  'morador' int(11) NOT NULL,
  'cartao' varchar(255) NOT NULL,
  'dataEntrada' varchar(255) NOT NULL,
  'horaEntrada' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `correspondencia`
--

CREATE TABLE `correspondencia` (
  `id` int(11) NOT NULL,
  'remetente' varchar(255) NOT NULL,
  'dataRecebimento' varchar(64) NOT NULL,
  'tipoCorrespondencia' int(11) NOT NULL,
  'bloco' int(11) NOT NULL,
  'apto' int(11) NOT NULL,
  'morador' int(11) NOT NULL,
  'codRastreio' varchar(64) NOT NULL,
  'observacao' varchar(255) NOT NULL,
  'status' int(11) NOT NULL,
  'dataBaixa' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `obsCorrespondencia`
--

CREATE TABLE `obsCorrespondencia` (
  `id` int(11) NOT NULL,
  'observacao' varchar(255) NOT NULL,
  'bloco' int(11) NOT NULL,
  'apto' int(11) NOT NULL,
  'morador' int(11) NOT NULL,
  'codRastreio' varchar(64) NOT NULL,
  'data' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipoCorrespondencia`
--

CREATE TABLE `tipoCorrespondencia` (
  `id` int(11) NOT NULL,
  'nome' varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `statusCorrespondencia`
--

CREATE TABLE `statusCorrespondencia` (
  `id` int(11) NOT NULL,
  'nome' varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `controleSaida`
--

CREATE TABLE `controleSaida` (
  `id` int(11) NOT NULL,
  'placa' varchar(255) NOT NULL,
  'visitante' varchar(255) NOT NULL,
  'identificacao' varchar(255) NOT NULL,
  'cartao' varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `documentoAta`
--

CREATE TABLE `documentoAta` (
  `id` int(11) NOT NULL,
  'assunto' varchar(255) NOT NULL,
  'dataCadastro' varchar(255) NOT NULL,
  'arquivo' varchar(255) NOT NULL,
  'bloco' int(11) NOT NULL,
  'idTipo' int(11) NOT NULL,
  'usuario' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipoDocumento`
--

CREATE TABLE `tipoDocumento` (
  `id` int(11) NOT NULL,
  'nome' varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `apartamento`
--

CREATE TABLE `apartamento` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bloco` varchar(50) NOT NULL,
  `apartamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `bloco`
--

CREATE TABLE `bloco` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bloco` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `geral`
--

CREATE TABLE `geral` (
  `id` int(11) NOT NULL,
  `ts` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `site` varchar(150) NOT NULL,
  `logradouro` varchar(150) NOT NULL,
  `numero_logradouro` varchar(10) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `estado` varchar(150) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `tipo_logradouro` varchar(50) NOT NULL,
  `email_reserva` varchar(15) NOT NULL,
  `cartao` varchar(15) NOT NULL,
  `painel` varchar(15) NOT NULL,
  `validar_nascimento` varchar(8) NOT NULL,
  `lista_convidados` varchar(15) NOT NULL,
  `imagem` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva_ambiente`
--

CREATE TABLE `reserva_ambiente` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `ambiente` int(11) NOT NULL,
  `hora_inicial` varchar(255) NOT NULL,
  `hora_final` varchar(255) NOT NULL,
  `bloco` int(11) NOT NULL,
  `apto` int(11) NOT NULL,
  `morador` int(11) NOT NULL,
  `seguranca` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `isento` varchar(64) NOT NULL,
  `observacao` varchar(255) NOT NULL,
  `convidados` varchar(64) NOT NULL,
  `nome_convidados` varchar(255) NOT NULL,
  `doc_convidados` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `ts` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nome` varchar(300) NOT NULL,
  `imagem` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `perfil` varchar(80) DEFAULT NULL,
  `categoria` varchar(80) NOT NULL,
  `acesso_site` varchar(3) DEFAULT NULL,
  `liberar_permissao` varchar(3) DEFAULT NULL,
  `tipo_usuario` varchar(14) NOT NULL,
  `bloco` varchar(80) DEFAULT NULL,
  `apartamento` varchar(80) DEFAULT NULL,
  `telefone` varchar(80) DEFAULT NULL,
  `status` varchar(7) NOT NULL,
  `recebe_mensagens` varchar(3) DEFAULT NULL,
  `realiza_reservas` varchar(3) DEFAULT NULL,
  `email_opcional` text,
  `telefone_opcional` text,
  `celular_opcional` text,
  `endereco` text,
  `veiculo` text,
  `bicicleta` text,
  `documento` text,
  `atestado` text,
  `observacao` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `fornecedor` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
  `ramo` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
  `logo` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL , 
  `site` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
  `cnpj` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL , 
  `cep` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL , 
  `logradouro` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL , 
  `numero` INT(5) NOT NULL , 
  `bairro` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL , 
  `tipologradouro` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL , 
  `cidade` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL , 
  `estado` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL , 
  `telefone` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL , 
  `email` VARCHAR(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL , 
  PRIMARY KEY (`id`(11))) ENGINE = InnoDB;

--
-- Estrutura para tabela `usuario_categoria`
--

CREATE TABLE `usuario_categoria` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_perfil`
--

CREATE TABLE `usuario_perfil` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `perfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `visitante`
--

CREATE TABLE `visitante` (
  `id` int(11) NOT NULL,
  'nome' varchar(255) NOT NULL,
  'documento' varchar(255) NOT NULL,
  'placa' varchar(255) NOT NULL,
  'observacao' varchar(255) NOT NULL,
  'perfil' varchar(255) NOT NULL,
  'moradorCadastro' int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Estrutura para tabela `visitanteLog`
--

CREATE TABLE `visitanteLog` (
  `id` int(11) NOT NULL,
  'idVisitante' int(11) NOT NULL
  'idMorador' int(11) NOT NULL
  'dataEntrada' varchar(255) NOT NULL,
  'dataSaida' varchar(255) NOT NULL,
  'horaEntrada' varchar(255) NOT NULL,
  'status' int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Estrutura para tabela `statusAchadosPerdidos`
--

CREATE TABLE `statusAchadosPerdidos` (
  `id` int(11) NOT NULL,
  'nome' varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Estrutura para tabela `tipoAchadosPerdidos`
--

CREATE TABLE `tipoAchadosPerdidos` (
  `id` int(11) NOT NULL,
  'nome' varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Índices de tabela `statusAchadosPerdidos`
--
ALTER TABLE `statusAchadosPerdidos`
  ADD PRIMARY KEY (`id`);

  
--
-- Índices de tabela `statusAchadosPerdidos`
--
ALTER TABLE `visitanteLog`
  ADD PRIMARY KEY (`id`);


--
-- Índices de tabela `tipoAchadosPerdidos`
--
ALTER TABLE `tipoAchadosPerdidos`
  ADD PRIMARY KEY (`id`);


--
-- Índices de tabela `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ambiente`
--
ALTER TABLE `achadosPerdidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `apartamento`
--
ALTER TABLE `apartamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `bloco`
--
ALTER TABLE `bloco`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `geral`
--
ALTER TABLE `geral`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `reserva_ambiente`
--
ALTER TABLE `reserva_ambiente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario_categoria`
--
ALTER TABLE `usuario_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario_perfil`
--
ALTER TABLE `usuario_perfil`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipoDocumento`
--
ALTER TABLE `tipoDocumento`
  ADD PRIMARY KEY (`id`);


--
-- Índices de tabela `documentoAta`
--
ALTER TABLE `documentoAta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `statusCorrespondencia`
--
ALTER TABLE `statusCorrespondencia`
  ADD PRIMARY KEY (`id`);


--
-- Índices de tabela `tipoCorrespondencia`
--
ALTER TABLE `tipoCorrespondencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `obsCorrespondencia`
--
ALTER TABLE `obsCorrespondencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `controleEntrada`
--
ALTER TABLE `controleEntrada`
  ADD PRIMARY KEY (`id`);


--
-- Índices de tabela `controleSaida`
--
ALTER TABLE `controleSaida`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT de tabela `statusAchadosPerdidos`
--
ALTER TABLE `statusAchadosPerdidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `statusAchadosPerdidos`
--
ALTER TABLE `visitanteLog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `statusAchadosPerdidos`
--
ALTER TABLE `tipoAchadosPerdidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `controleSaida`
--
ALTER TABLE `controleSaida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


  --
-- AUTO_INCREMENT de tabela `controleSaida`
--
ALTER TABLE `achadosPerdidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT de tabela `controleEntrada`
--
ALTER TABLE `controleEntrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT de tabela `obsCorrespondencia`
--
ALTER TABLE `obsCorrespondencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT de tabela `tipoCorrespondencia`
--
ALTER TABLE `tipoCorrespondencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT de tabela `statusCorrespondencia`
--
ALTER TABLE `statusCorrespondencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT de tabela `documentoAta`
--
ALTER TABLE `documentoAta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT de tabela `tipoDocumento`
--
ALTER TABLE `tipoDocumento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT de tabela `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `apartamento`
--
ALTER TABLE `apartamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de tabela `bloco`
--
ALTER TABLE `bloco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de tabela `geral`
--
ALTER TABLE `geral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `reserva_ambiente`
--
ALTER TABLE `reserva_ambiente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de tabela `usuario_categoria`
--
ALTER TABLE `usuario_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT de tabela `usuario_perfil`
--
ALTER TABLE `usuario_perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT de tabela `visitante`
--
ALTER TABLE `visitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
