-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/11/2024 às 18:54
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
-- Banco de dados: `estacio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `formularios`
--

CREATE TABLE `formularios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mensagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `formularios`
--

INSERT INTO `formularios` (`id`, `nome`, `email`, `mensagem`) VALUES
(1, 'Ana Souza', 'anasouza@gmail.com', 'Tenho dúvida sobre as especificações das mochilas de trilha. Elas são impermeáveis?'),
(2, 'Pedro Mendes', 'pedromendes@gmail.com', 'Vocês podem me ajudar a escolher o tamanho certo para luvas de goleiro?'),
(3, 'Carla Ferreira', 'carlaferreira@gmail.com', 'Gostaria de entender mais sobre os tipos de amortecimento disponíveis nos tênis de corrida que vocês vendem.'),
(4, 'Julio Machado', 'juliom@gmail.com', 'Gostaria de ter mais informações de como eu consigo realizar a conclusão de minha compra\r\n'),
(5, 'Julio Machado', 'juliom@gmail.com', 'Gostaria de ter mais informações de como eu consigo realizar a conclusão de minha compra\r\n'),
(6, 'Julio', 'julio@gmail.com', 'Envio teste de formulário');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `colecao` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `colecao`, `preco`, `imagem`, `categoria`) VALUES
(1, 'Tênis Esportivo Dunk 3 Masculino', 'Nike 2024', 219.99, 'nike.png', 'calcado'),
(2, 'Camisa Sportwear Pride Adidas', 'Adidas 2024', 179.99, 'adidas.png', 'camisa'),
(3, 'Jaqueta CRF 21/22 Chuva Masculina', 'Adidas/CRF 21/22', 449.99, 'crf.png', 'casaco'),
(4, 'Chuteira X SpeedFlow Campo', 'Adidas 2024', 439.99, 'adidas2.png', 'calcado'),
(5, 'Jaqueta Windrunner Masculina', 'Nike 2022', 579.99, 'nike2.png', 'casaco'),
(6, 'Boné Tiro League', 'Adidas 2022', 119.99, 'adidas3.png', 'acessorio'),
(7, 'Camisa Manchester City 2023', 'Puma 2023', 319.99, 'puma.png', 'camisa'),
(11, 'Short Basic Run Masculino', 'Mizuno 2023', 119.99, 'mizuno.png', 'short'),
(12, 'Camiseta Nike Nsw Futura Masculina', 'Nike 2023', 139.95, 'nike_camisa.png', 'camisa'),
(13, 'Camiseta Jordan Masculina Nike Manga Curta Dri-Fit Sportswear SS TOP', 'Jordan 2024', 279.99, 'jordan_camisa.png', 'camisa'),
(14, 'Camisa Jogo 3 Flamengo 2024', 'Adidas/CRF 24/25', 349.99, 'flamengo_3.png', 'camisa'),
(15, 'Camisa Umbro Essence Masculina', 'Umbro 2023', 119.95, 'umbro_camisa.png', 'camisa'),
(16, 'Shorts Dois em Um AEROREADY Made for Training Minimal', 'Adidas 2024', 199.93, 'short_adidas.png', 'short'),
(17, 'Shorts Nike Court Dri-Fit ADV Rafa Masculino', 'Nike Dri-Fit 2024', 384.93, 'short_nike.png', 'short'),
(18, 'Bermuda de Goleiro Umbro Shelter - Masculina', 'Umbro 22/23', 84.98, 'short_umbro.png', 'short'),
(19, 'Shorts Feminino Olympikus Casual Rosa Tutti-frutti', 'Olympikus 2023', 63.65, 'short_olympikus .png', 'short'),
(20, 'Shorts Neymar Jr Football Masculino', 'Puma/Neymar 2023', 129.97, 'short_puma .png', 'short'),
(21, 'Corta Vento Essencial Masculino Preto', 'Olympikus 2022', 219.99, 'olympikus.png', 'casaco'),
(22, 'Casaco Puma Neymar Jr Teamgoal Infantil', 'Puma/Neymar 2023', 149.99, 'casaco_puma.png', 'casaco'),
(23, 'Jaqueta Corta Vento Nike Masculino Azul', 'Nike 2024', 319.95, 'casaco_nike.png', 'casaco'),
(24, 'Jaqueta Corta Vento Adidas Designed To Move Ativated Tech Aeroready Masculina', 'Adidas 2024', 412.98, 'casaco_adidas.png', 'casaco'),
(25, 'Oculos de Sol Nike DJ2036 011 72 LJ2', 'Nike 24/25', 1310, 'oculos_nike.png', 'acessorio'),
(26, 'Luva Adidas Performance Climacool', 'Adidas 2023', 112.99, 'luva_adidas.png', 'acessorio'),
(27, 'Running Visor Headband R299', 'Puma 2022', 98.75, 'handband_puma.png', 'acessorio'),
(28, 'Manguito Nike Lightweight Running Arm Sleeves S/M Pink', 'Nike 24/25', 199.95, 'manguito_nike.png', 'acessorio'),
(29, 'Tênis Nike Dunk Low Retro Panda Masculino', 'Nike Dunk 2024', 864.93, 'dunk_nike.png', 'calcado'),
(30, 'Tênis Galaxy 6 Feminino', 'Adidas 2023', 399.99, 'tenis_adidas.png', 'calcado'),
(31, 'CHUTEIRA SOCIETY UMBRO MARINHO NEO STRIKER', 'Umbro 2021', 149.99, 'chuteira_umbro.png', 'calcado'),
(32, 'Chuteira Nike Zoom', 'Nike 2019', 149.99, 'chuteira_nike.png', 'calcado'),
(33, 'Tênis de Basquete MB.03 Toxic Infantil', 'Puma Basquete 2024', 649.99, 'tenis_puma.png', 'calcado'),
(34, 'Mochila Adidas Classic Badge Of Sport Orquídea - ORCHID FUSION/WONDER ORCHID único', 'Adidas 2024', 229.99, 'mochila_adidas_rosa.png', 'mochila'),
(35, 'Mochila Adidas Power VII Unissex Cinza Claro Cinza Claro', 'Adidas 2023', 379.95, 'mochila_adidas_bege.png', 'mochila'),
(36, 'Mochila Brasília JDI Mini Nike - 5559 CANELA', 'Nike 2022', 199.99, 'mochila_nike_bronze.png', 'mochila'),
(37, 'Mochila Puma Phase II Unissex', 'Puma 2024', 229.95, 'mochila_puma_azul.png', 'mochila'),
(38, 'Mochila Umbro GT Acolchoada', 'Umbro 2021', 59.98, 'mochila_umbro.png', 'mochila'),
(39, 'MOCHILA POWER 3 LISTRAS ADIDAS PRETO/BRANCO NT IP9774', 'Adidas 2023', 299.99, 'mochila_adidas_preta.png', 'mochila');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cargo` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `cpf`, `telefone`, `cep`, `email`, `senha`, `cargo`) VALUES
(1, 'Júlio', 'Fernandes', '000.000.000-00', '(21) 91010-1010', '21210-320', 'juliomf@gmail.com', '1234@Juliocf', 'admin'),
(3, 'Maria', 'Oliveira', '987.654.321-09', '(21) 98765-4321', '22030-000', 'maria.oliveira@gmail.com', 'maria123!', 'cliente'),
(4, 'Pedro', 'Silva', '321.654.987-45', '(31) 99876-5432', '30140-100', 'pedro.silva@gmail.com', 'pedro123!', 'cliente'),
(5, 'Carlos', 'Silveira', '121.212.121-21', '(21) 94378-2752', '93274-983', 'carlos.silveira@gmail.com', 'carlos123!', 'cliente');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `formularios`
--
ALTER TABLE `formularios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formularios`
--
ALTER TABLE `formularios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
