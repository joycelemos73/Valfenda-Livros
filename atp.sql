-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2022 at 01:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atp`
--
CREATE DATABASE IF NOT EXISTS `atp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `atp`;

-- --------------------------------------------------------

--
-- Table structure for table `cadastro_novos_itens`
--

DROP TABLE IF EXISTS `cadastro_novos_itens`;
CREATE TABLE `cadastro_novos_itens` (
  `id` int(11) NOT NULL,
  `titulo_item` varchar(50) NOT NULL,
  `descricao_item` varchar(2000) NOT NULL,
  `preco_item` varchar(100) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `dtdev` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cadastro_novos_itens`
--

INSERT INTO `cadastro_novos_itens` (`id`, `titulo_item`, `descricao_item`, `preco_item`, `usuario_id`, `dtdev`) VALUES
(17, 'Drácula', 'Drácula é um romance de terror gótico publicado em 1897, escrito pelo autor irlandês Bram Stoker. Como um romance epistolar, a narrativa é relatada por meio de cartas, diários e artigos de jornal.', '1ª edição - Darkside Books', 27, '2022-12-21'),
(18, 'Frankenstein', 'Frankenstein ou o Prometeu Moderno, mais conhecido simplesmente por Frankenstein, é um romance de terror gótico com inspirações do movimento romântico, de autoria de Mary Shelley, escritora britânica nascida em Londres. É considerada a primeira obra de ficção científica da história.', '2ª edição - Editora Principis', NULL, NULL),
(19, 'O Retrato de Dorian Gray', 'O Retrato de Dorian Gray é um romance sobre a destruição da vida através da perfeição da arte, dos preços que pagamos pelos crimes deixados em segredo, das paixões nominadas e inomináveis que transformam quem somos naquilo que deveríamos ser, não pelos outros e sim por nós mesmos.', '17ª edição - L&PM Editores', NULL, NULL),
(20, 'H.P. Lovecraft - Vol. 1 - Myskatonic Edition', 'Uma seleção especial de contos e novelas do autor que revolucionou o terror e a ficção científica no século XX, seguindo aquele padrão de qualidade quase psicopata como só a DarkSide® Books sabe fazer.Uma homenagem àquele que foi tão bem-sucedido na tarefa de pensar o impensável, a edição da DarkSide® é feita de fã para fã: da capa dura à nova tradução com notas comentadas de Ramon Mapa, grande estudioso da obra, dialogando com as ilustrações de Walter Pax, que parecem ter saído do próprio Necronomicon.', '1ª edição - Darkside Books', NULL, NULL),
(21, 'A Guerra dos Tronos : As Crônicas de Gelo e Fogo', 'Como Guardião do Norte, lorde Eddard Stark não fica feliz quando o rei Robert o proclama a nova Mão do Rei. Sua honra o obriga a aceitar o cargo e deixar seu posto em Winterfell para rumar para a corte, onde os homens fazem o que lhes convém, não o que devem... e onde um inimigo morto é algo a ser admirado.', '4ª edição - Editora Suma', NULL, NULL),
(22, 'O Hobbit', 'Bilbo Bolseiro era um dos mais respeitáveis hobbits de todo o Condado até que, um dia, o mago Gandalf bate à sua porta. A partir de então, toda sua vida pacata e campestre soprando anéis de fumaça com seu belo cachimbo começa a mudar. Ele é convocado a participar de uma aventura por ninguém menos do que Thorin Escudo-de-Carvalho, um príncipe do poderoso povo dos Anãos.', '1ª edição - Harper Collins', NULL, NULL),
(23, 'O Iluminado', 'Danny Torrance não é um menino comum. É capaz de ouvir pensamentos e transportar-se no tempo. Danny é iluminado. Será uma maldição ou uma bênção? A resposta pode estar guardada na imponência assustadora do hotel Overlook.', '10ª edição - Editora Suma', NULL, NULL),
(24, 'Duna: livro 1', 'Duna se passa em um futuro distante no meio de um império intergaláctico feudal em expansão, onde feudos planetários são controlados por Casas nobres que devem aliança à casta imperial da Casa Corrino.', 'Edição Especial - Editora Aleph', NULL, NULL),
(25, 'Homo Deus', 'Neste Homo Deus: uma breve história do amanhã, Yuval Noah Harari, autor do estrondoso best-seller Sapiens: uma breve história da humanidade, volta a combinar ciência, história e filosofia, desta vez para entender quem somos e descobrir para onde vamos', 'Edição padrão - Editora Companhia das Letras', NULL, NULL),
(27, 'Fogo & Sangue – Volume 1', 'Séculos antes dos eventos de A guerra dos tronos, a Casa Targaryen – única família de senhores dos dragões a sobreviver à Destruição de Valíria – tomou residência em Pedra do Dragão. A história de Fogo e sangue começa com o lendário Aegon, o Conquistador, criador do Trono de Ferro, e segue narrando as gerações de Targaryen que lutaram para manter o assento, até a guerra civil que quase destruiu sua dinastia.', '1ª edição - Editora Suma', NULL, NULL),
(28, 'O Silmarillion', 'O Silmarillion é o relato dos Dias Antigos da Primeira Era do mundo criado por J.R.R. Tolkien. É a história longínqua para a qual os personagens de O Senhor dos Anéis e O Hobbit olham para trás, e em cujos eventos alguns deles, como Elrond e Galadriel, tomaram parte.', '1ª Edição - Editora Harper Collins', NULL, NULL),
(29, 'O CONTO DA AIA', 'O romance distópico O conto da aia, de Margaret Atwood, se passa num futuro muito próximo e tem como cenário uma república onde não existem mais jornais, revistas, livros nem filmes. As universidades foram extintas. Também já não há advogados, porque ninguém tem direito a defesa. Os cidadãos considerados criminosos são fuzilados e pendurados mortos no Muro, em praça pública, para servir de exemplo enquanto seus corpos apodrecem à vista de todos.', '3ª Edição - Editora Rocco', NULL, NULL),
(30, '1984', '1984 é um dos mais importantes romances de ficção científica do século XX. Publicada originalmente em 1949, poucos meses antes da morte do autor, George Orwell, essa sátira política ambientada em uma distopia futurista influencia a literatura até hoje.', '5ª Edição - Editora Via Leitura', NULL, NULL),
(31, 'O Colecionador', 'O COLECIONADOR é a história de Frederick Clegg, um homem solitário, de origem humilde, menosprezado por uma sociedade esnobe, que encontra o grande amor de sua vida. Tudo o que ele deseja é passar um tempo a sós com ela, demonstrar seus nobres sentimentos e deixar claro que eles nasceram um para o outro.', '2ª Edição - Editora Darkside', NULL, NULL),
(32, 'Lady Killers: As mulheres mais letais da história', 'Quando pensamos em assassinos em série, pensamos em homens. Mais precisamente, em homens matando mulheres inocentes, vítimas de um apetite atroz por sangue e uma vontade irrefreável de carnificina. As mulheres podem ser tão letais quanto os homens e deixar um rastro de corpos por onde passam ― então o que acontece quando as pessoas são confrontadas com uma assassina em série? ', '2ª Edição - Editora Darkside ', NULL, NULL),
(33, 'The Witcher: O último desejo', 'Geralt de Rívia é um bruxo sagaz e habilidoso. Um assassino impiedoso e de sangue-frio treinado, desde a infância, para caçar e eliminar monstros. Seu único objetivo: destruir as criaturas do mal que assolam o mundo. Um mundo fantástico criado por Sapkowski com claras influências da mitologia eslava. Um mundo em que nem todos os que parecem monstros são maus e nem todos os que parecem anjos são bons...', '5ª Edição - Editora WMF Martins Fontes', NULL, NULL),
(34, 'O último reino (Vol. 1 Crônicas Saxônicas)', 'O último reino é o primeiro romance de uma série que conta a história de Alfredo, o Grande, e seus descendentes. Aqui, Cornwell reconstrói a saga do monarca que livrou o território britânico da fúria dos vikings. Pelos olhos do órfão Uthred, que aos 9 anos se tornou escravo dos guerreiros no norte, surge uma história de lealdades divididas, amor relutante e heroísmo desesperado.', '7ª edição - Editora Record', NULL, NULL),
(35, 'Harry Potter', 'ajfgkufgakhfgaghua', '1ª edição - Editora Suma', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(110) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `email` varchar(110) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `endereco`, `cpf`, `email`, `senha`) VALUES
(8, 'Edgarzinho', '203 North Amity St. in Baltimore, Maryland', '21223', 'edgarapoe@raven.com', 'nevermore'),
(20, 'Mr Love', '65 Prospect St, Providence, RI', '02906', 'hplovecraft@cthulhu.com', 'necronomicon'),
(24, 'Joyce Lemos', '1016 Drake Drive', '532534634', 'joyce.lemoss@gmail.com', '111'),
(25, 'Joyce Lemos', '1016 Drake Drive', '111111111', 'joyce.lemoss@gmail.com', '12345'),
(26, 'Joyce Lemos', 'Brasília DF', '11122233344', 'joycelemos@email.com', '12345'),
(27, 'Joyce Abreu', 'Brasília DF', '111445635', 'joyce.lemos@pucpr.edu.br', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_novos_itens`
--
ALTER TABLE `cadastro_novos_itens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emprestimo` (`usuario_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_novos_itens`
--
ALTER TABLE `cadastro_novos_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cadastro_novos_itens`
--
ALTER TABLE `cadastro_novos_itens`
  ADD CONSTRAINT `emprestimo` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
