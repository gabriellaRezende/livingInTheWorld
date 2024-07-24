-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2024 at 02:36 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `litw`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name`, `description`) VALUES
(1, 'Cidadania', 'Oferecemos serviços especializados para processos de obtenção de cidadania portuguesa, seja por matrimônio ou por descendência sanguínea. Nossa equipe de advogados experientes está pronta para orientar e acompanhar você em cada etapa, garantindo que todos os requisitos legais sejam atendidos de forma eficiente e segura.'),
(2, 'Visto', 'Auxiliamos na obtenção de diferentes tipos de vistos para Portugal. Nosso objetivo é facilitar o processo de imigração, oferecendo suporte completo desde a preparação da documentação até a aprovação final, para que você possa se estabelecer em Portugal com tranquilidade.'),
(3, 'Documentação ', 'A seção de Documentação é dedicada a ajudar você a obter os documentos essenciais para viver e trabalhar em Portugal, como NIF (Número de Identificação Fiscal), NISS (Número de Identificação da Segurança Social) e assessoria jurídica. Nossa equipe está aqui para garantir que todo o processo seja rápido e sem complicações, proporcionando a você a segurança e a legalidade necessárias para sua nova vida em Portugal.');

-- --------------------------------------------------------

--
-- Table structure for table `processo`
--

CREATE TABLE `processo` (
  `name` text NOT NULL,
  `description` text NOT NULL,
  `icon_svg` text NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_process` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `processo`
--

INSERT INTO `processo` (`name`, `description`, `icon_svg`, `id_category`, `id_process`) VALUES
('Descendente', 'Assistência completa para obter a sua cidadania portuguesa por descendência. Nossa equipe especializada ajuda a reunir e preparar toda a documentação necessária, garantindo que o processo seja conduzido de forma eficiente e conforme as exigências legais.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-people-fill\" viewBox=\"0 0 16 16\">\r\n  <path d=\"M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5\"/>\r\n</svg>', 1, 4),
('Temporário', 'Facilitamos a obtenção de vistos temporários para Portugal, seja para turismo, estudos ou negócios. Nosso serviço inclui a preparação e revisão de toda a documentação necessária, além de acompanhamento durante todo o processo de solicitação.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-calendar-week-fill\" viewBox=\"0 0 16 16\">\r\n  <path d=\"M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5\"/>\r\n</svg>', 2, 5),
('Obtenção do NIF', 'Assistimos na obtenção do NIF (Número de Identificação Fiscal), essencial para qualquer atividade financeira em Portugal. Nosso serviço inclui a preparação e submissão dos documentos necessários, garantindo que você obtenha seu NIF de forma rápida e sem complicações.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-fill\" viewBox=\"0 0 16 16\">\r\n  <path d=\"M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z\"/>\r\n</svg>', 3, 6),
('Matrimonio', 'Auxiliamos casais na obtenção da cidadania portuguesa por matrimônio. Orientamos sobre os requisitos legais e cuidamos de toda a documentação, proporcionando um processo tranquilo e seguro.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-through-heart-fill\" viewBox=\"0 0 16 16\">\r\n  <path fill-rule=\"evenodd\" d=\"M2.854 15.854A.5.5 0 0 1 2 15.5V14H.5a.5.5 0 0 1-.354-.854l1.5-1.5A.5.5 0 0 1 2 11.5h1.793l3.103-3.104a.5.5 0 1 1 .708.708L4.5 12.207V14a.5.5 0 0 1-.146.354zM16 3.5a.5.5 0 0 1-.854.354L14 2.707l-1.006 1.006c.236.248.44.531.6.845.562 1.096.585 2.517-.213 4.092-.793 1.563-2.395 3.288-5.105 5.08L8 13.912l-.276-.182A24 24 0 0 1 5.8 12.323L8.31 9.81a1.5 1.5 0 0 0-2.122-2.122L3.657 10.22a9 9 0 0 1-1.039-1.57c-.798-1.576-.775-2.997-.213-4.093C3.426 2.565 6.18 1.809 8 3.233c1.25-.98 2.944-.928 4.212-.152L13.292 2 12.147.854A.5.5 0 0 1 12.5 0h3a.5.5 0 0 1 .5.5z\"/>\r\n</svg>', 1, 7),
('Residência', 'Oferecemos suporte completo para a obtenção de vistos de residência em Portugal. Desde a preparação dos documentos até a submissão e acompanhamento do processo, garantimos que você tenha todas as informações e suporte necessários para se estabelecer legalmente no país.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-house-fill\" viewBox=\"0 0 16 16\">\r\n  <path d=\"M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z\"/>\r\n  <path d=\"m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z\"/>\r\n</svg>', 2, 8),
('Procura de Trabalho', 'Ajudamos você a obter o visto de procura de trabalho em Portugal, permitindo que você busque oportunidades de emprego no país. Nossa equipe orienta sobre os requisitos e cuida de toda a documentação, facilitando sua transição para o mercado de trabalho português.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-briefcase-fill\" viewBox=\"0 0 16 16\">\r\n  <path d=\"M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5\"/>\r\n  <path d=\"M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z\"/>\r\n</svg>', 2, 9),
('Obtenção de NISS', 'Oferecemos suporte para a obtenção do NISS (Número de Identificação da Segurança Social), necessário para trabalhar e acessar benefícios sociais em Portugal. Cuidamos de todo o processo, desde a preparação dos documentos até a obtenção do número.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-earmark-fill\" viewBox=\"0 0 16 16\">\r\n  <path d=\"M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z\"/>\r\n</svg>', 3, 10),
('Assessoria Jurídica', 'Disponibilizamos assessoria jurídica especializada para todas as suas necessidades em Portugal. Nossa equipe de advogados experientes está pronta para oferecer orientação e suporte em questões legais, garantindo que você esteja sempre em conformidade com as leis portuguesas.', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-mortarboard-fill\" viewBox=\"0 0 16 16\">\r\n  <path d=\"M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z\"/>\r\n  <path d=\"M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z\"/>\r\n</svg>', 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `psw` varchar(250) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `cod_postal` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `genero` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `psw`, `dt_nascimento`, `cod_postal`, `endereco`, `genero`) VALUES
(1, 'gabi', 'gabi@email.com', '123456', '1998-06-21', '66093082', 'tv lugar nenhum', NULL),
(2, 'gabriella', 'gab@email.com', '123', '1998-06-21', '66093082', 'tv lugar algum', ' '),
(3, 'maria', 'maria@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-07-01', '1990-067', '2 Rua comandante Cousteau', ' '),
(4, 'bruna', 'brubru@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-07-01', '1990-067', '2 Rua comandante Cousteau', ' '),
(5, 'bruna', 'bruna@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-07-01', '1990-067', '2 Rua comandante Cousteau', ' '),
(6, 'gabriella rezende', 'gabi.gol@email.com', '202cb962ac59075b964b07152d234b70', '2024-07-01', '1990-067', '2 Rua comandante Cousteau', ' '),
(7, 'Gabi Gol', 'gab.gol@teste.com', '202cb962ac59075b964b07152d234b70', '2024-01-01', '66093082', 'Rua Antônio Baena', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `user_docs`
--

CREATE TABLE `user_docs` (
  `id_userDocs` int(11) NOT NULL,
  `id_processUser` int(11) NOT NULL,
  `name_doc` text NOT NULL,
  `dt_create` date NOT NULL,
  `link` text NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_processo`
--

CREATE TABLE `user_processo` (
  `id_user` int(11) NOT NULL,
  `id_process` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `id_processUser` int(11) NOT NULL,
  `dt_create` date NOT NULL,
  `dt_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `processo`
--
ALTER TABLE `processo`
  ADD PRIMARY KEY (`id_process`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_docs`
--
ALTER TABLE `user_docs`
  ADD PRIMARY KEY (`id_userDocs`);

--
-- Indexes for table `user_processo`
--
ALTER TABLE `user_processo`
  ADD PRIMARY KEY (`id_processUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `processo`
--
ALTER TABLE `processo`
  MODIFY `id_process` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_docs`
--
ALTER TABLE `user_docs`
  MODIFY `id_userDocs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_processo`
--
ALTER TABLE `user_processo`
  MODIFY `id_processUser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
