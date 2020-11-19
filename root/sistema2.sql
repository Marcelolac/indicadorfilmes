-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 30-Abr-2019 às 15:59
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sistema2`
--
CREATE DATABASE IF NOT EXISTS `sistema2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema2`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE IF NOT EXISTS `filme` (
  `pk_filme` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(40) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `oscar` varchar(40) NOT NULL,
  `classificacao` varchar(40) NOT NULL,
  `decada` varchar(40) NOT NULL,
  `diretor` varchar(40) NOT NULL,
  `sinopse` text NOT NULL,
  PRIMARY KEY (`pk_filme`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`pk_filme`, `titulo`, `categoria`, `oscar`, `classificacao`, `decada`, `diretor`, `sinopse`) VALUES
(11, 'Velozes e Furiosos 7', 'acao', 'sim', '16', '2010', 'James Wan', 'ApÃ³s os acontecimentos em Londres, Dom (Vin Diesel), Brian (Paul Walker), Letty (Michelle Rodriguez) e o resto da equipe tiveram a chance de voltar...'),
(13, 'O Resgate do Soldado Ryan', 'acao', 'sim', '18', '90', 'Steven Spielberg', 'Ao desembarcar na Normandia, no dia 6 de junho de 1944, capitÃ£o Miller (Tom Hanks) recebe a missÃ£o de comandar um grupo do segundo batalhÃ£o para o...'),
(15, 'O Auto da Compadecida', 'comedia', 'nao', '12', '2000', 'Guel Arraes', 'As aventuras dos nordestinos JoÃ£o Grilo (Matheus Natchergaele), um sertanejo pobre e mentiroso, e ChicÃ³ (Selton Mello), o mais covarde dos homens. Ambos lutam pelo pÃ£o de cada dia e atravessam por vÃ¡rios episÃ³dios enganando a todos do pequeno vilarejo de TaperoÃ¡, no sertÃ£o da ParaÃ­ba. A salvaÃ§Ã£o da dupla acontece com a apariÃ§Ã£o da Nossa Senhora (Fernanda Montenegro). AdaptaÃ§Ã£o da obra de Ariano Suassuna.'),
(16, 'Simplismente Amor', 'comediaromantica', 'nao', 'livre', '2000', 'Richard Curtis', 'O novo Primeiro-Ministro da Inglaterra (Hugh Grant) se apaixona por uma de suas funcionÃ¡rias, Natalie (Martine McCutcheon). Numa tentativa de curar seu coraÃ§Ã£o, um escritor (Colin Firth) parte para o sul da FranÃ§a e lÃ¡ acaba se apaixonando. Karen (Emma Thompson) desconfia que Harry (Alan Rickman), seu marido, a estÃ¡ traindo. Juliet (Keira Knightley), que se casou recentemente, desconfia dos olhares e intenÃ§Ãµes de Mark (Andrew Lincoln), o melhor amigo de seu marido. Sam (Thomas Sangster) tem por objetivo chamar a atenÃ§Ã£o da garota mais difÃ­cil da escola. Sarah (Laura Linney) enfim tem a grande chance de sair com Karl (Rodrigo Santoro), por quem mantÃ©m uma paixÃ£o silenciosa. Billy Mack (Bill Nighy) busca retomar sua carreira como astro do rock. A vida de todos estes personagens se entrelaÃ§am e sÃ£o modificadas pela presenÃ§a do amor em suas vidas.'),
(17, 'Lincoln', 'drama', 'nao', '16', '2010', 'Steven Spielberg', 'Baseado no livro â€œTeam of Rivals: The Genius of Abraham Lincolnâ€, de Doris Kearns Goodwin, o filme se passa durante a Guerra Civil norte-americana, que acabou com a vitÃ³ria do Norte. Ao mesmo tempo em que se preocupava com o conflito, o o 16Âº presidente norte-americano, Abraham Lincoln (Daniel Day-Lewis), travava uma batalha ainda mais difÃ­cil em Washington. Ao lado de seus colegas de partido, ele tentava passar uma emenda Ã  ConstituiÃ§Ã£o dos Estados Unidos que acabava com a escravidÃ£o.'),
(21, 'IntocÃ¡veis', 'comedia', 'sim', '12', '2010', 'Eric Toledano', 'Philippe (FranÃ§ois Cluzet) Ã© um aristocrata rico que, apÃ³s sofrer um grave acidente, fica tetraplÃ©gico. Precisando de um assistente, ele decide contratar Driss (Omar Sy), um jovem problemÃ¡tico que nÃ£o tem a menor experiÃªncia em cuidar de pessoas no seu estado. Aos poucos ele aprende a funÃ§Ã£o, apesar das diversas gafes que comete. Philippe, por sua vez, se afeiÃ§oa cada vez mais a Driss por ele nÃ£o tratÃ¡-lo como um pobre coitado. Aos poucos a amizade entre eles se estabele, com cada um conhecendo melhor o mundo do outro.'),
(22, 'Orgulho e Preconceito', 'romance', 'nao', '12', '2000', 'Joe Wright', 'Inglaterra, 1797. As cinco irmÃ£s Bennet - Elizabeth (Keira Knightley), Jane (Rosamund Pike), Lydia (Jena Malone), Mary (Talulah Riley) e Kitty (Carey Mulligan) - foram criadas por uma mÃ£e (Brenda Blethyn) que tinha fixaÃ§Ã£o em lhes encontrar maridos que garantissem seu futuro. PorÃ©m Elizabeth deseja ter uma vida mais ampla do que apenas se dedicar ao marido, sendo apoiada pelo pai (Donald Sutherland). Quando o sr. Bingley (Simon Woods), um solteiro rico, passa a morar em uma mansÃ£o vizinha, as irmÃ£s logo ficam agitadas. Jane logo parece que conquistarÃ¡ o coraÃ§Ã£o do novo vizinho, enquanto que Elizabeth conhece o bonito e esnobe sr. Darcy (Matthew Macfadyen). Os encontros entre Elizabeth e Darcy passam a ser cada vez mais constantes, apesar deles sempre discutirem.'),
(23, 'O Poderoso ChefÃ£o', 'drama', 'sim', '16', '70', 'Francis Ford Coppola', 'Don Vito Corleone (Marlon Brando) Ã© o chefe de uma "famÃ­lia" de Nova York que estÃ¡ feliz, pois Connie (Talia Shire), sua filha, se casou com Carlo (Gianni Russo). PorÃ©m, durante a festa, Bonasera (Salvatore Corsitto) Ã© visto no escritÃ³rio de Don Corleone pedindo "justiÃ§a", vinganÃ§a na verdade contra membros de uma quadrilha, que espancaram barbaramente sua filha por ela ter se recusado a fazer sexo para preservar a honra. Vito discute, mas os argumentos de Bonasera o sensibilizam e ele promete que os homens, que maltrataram a filha de Bonasera nÃ£o serÃ£o mortos, pois ela tambÃ©m nÃ£o foi, mas serÃ£o severamente castigados...'),
(24, 'Vingadores Ultimato', 'acao', 'nao', '16', '2010', 'Joe Russo', 'ApÃ³s Thanos eliminar metade das criaturas vivas, os Vingadores precisam lidar com a dor da perda de amigos e seus entes queridos. Com Tony Stark (Robert Downey Jr.) vagando perdido no espaÃ§o sem Ã¡gua nem comida, Steve Rogers (Chris Evans) e Natasha Romanov (Scarlett Johansson) precisam liderar a resistÃªncia contra o titÃ£ louco.'),
(26, 'Forrest Gump - O Contador de HistÃ³rias', 'drama', 'sim', '12', '90', 'Robert Zemeckis', 'Quarenta anos da histÃ³ria dos Estados Unidos, vistos pelos olhos de Forrest Gump (Tom Hanks), um rapaz com QI abaixo da mÃ©dia e boas intenÃ§Ãµes. Por obra do acaso, ele consegue participar de momentos cruciais, como a Guerra do VietnÃ£ e Watergate, mas continua pensando no seu amor de infÃ¢ncia, Jenny Curran.'),
(27, 'Ã€ Espera de um Milagre', 'drama', 'sim', '12', '2000', 'Frank Darabont', '1935, no corredor da morte de uma prisÃ£o sulista. Paul Edgecomb (Tom Hanks) Ã© o chefe de guarda da prisÃ£o, que temJohn Coffey (Michael Clarke Duncan) como um de seus prisioneiros. Aos poucos, desenvolve-se entre eles uma relaÃ§Ã£o incomum, baseada na descoberta de que o prisioneiro possui um dom mÃ¡gico que Ã©, ao mesmo tempo, misterioso e milagroso.'),
(28, 'Batman - O Cavaleiro Das Trevas', 'acao', 'sim', '16', '2000', 'Christopher Nolan', 'ApÃ³s dois anos desde o surgimento do Batman (Christian Bale), os criminosos de Gotham City tÃªm muito o que temer. Com a ajuda do tenente James Gordon (Gary Oldman) e do promotor pÃºblico Harvey Dent (Aaron Eckhart), Batman luta contra o crime organizado. Acuados com o combate, os chefes do crime aceitam a proposta feita pelo Coringa (Heath Ledger) e o contratam para combater o Homem-Morcego.'),
(29, 'Titanic', 'romance', 'sim', '16', '90', 'James Cameron', 'Jack Dawson (Leonardo DiCaprio) Ã© um jovem aventureiro que, na mesa de jogo, ganha uma passagem para a primeira viagem do transatlÃ¢ntico Titanic. Trata-se de um luxuoso e imponente navio, anunciado na Ã©poca como inafundÃ¡vel, que parte para os Estados Unidos. Nele estÃ¡ tambÃ©m Rose DeWitt Bukater (Kate Winslet), a jovem noiva de Caledon Hockley (Billy Zane). Rose estÃ¡ descontente com sua vida, jÃ¡ que sente-se sufocada pelos costumes da elite e nÃ£o ama Caledon. Entretanto, ela precisa se casar com ele para manter o bom nome da famÃ­lia, que estÃ¡ falida. Um dia, desesperada, Rose ameaÃ§a se atirar do Titanic, mas Jack consegue demovÃª-la da ideia. Pelo ato ele Ã© convidado a jantar na primeira classe, onde comeÃ§a a se tornar mais prÃ³ximo de Rose. Logo eles se apaixonam, despertando a fÃºria de Caledon. A situaÃ§Ã£o fica ainda mais complicada quando o Titanic se choca com um iceberg, provocando algo que ninguÃ©m imaginava ser possÃ­vel: o naufrÃ¡gio do navio.'),
(30, 'A Lista de Schindler', 'drama', 'sim', '18', '90', 'Steven Spielberg', 'A inusitada histÃ³ria de Oskar Schindler (Liam Neeson), um sujeito oportunista, sedutor, "armador", simpÃ¡tico, comerciante no mercado negro, mas, acima de tudo, um homem que se relacionava muito bem com o regime nazista, tanto que era membro do prÃ³prio Partido Nazista (o que nÃ£o o impediu de ser preso algumas vezes, mas sempre o libertavam rapidamente, em razÃ£o dos seus contatos). No entanto, apesar dos seus defeitos, ele amava o ser humano e assim fez o impossÃ­vel, a ponto de perder a sua fortuna mas conseguir salvar mais de mil judeus dos campos de concentraÃ§Ã£o.'),
(31, 'Um Sonho de Liberdade', 'drama', 'sim', '12', '90', 'Frank Darabont', 'Em 1946, Andy Dufresne (Tim Robbins), um jovem e bem sucedido banqueiro, tem a sua vida radicalmente modificada ao ser condenado por um crime que nunca cometeu, o homicÃ­dio de sua esposa e do amante dela. Ele Ã© mandado para uma prisÃ£o que Ã© o pesadelo de qualquer detento, a PenitenciÃ¡ria Estadual de Shawshank, no Maine. LÃ¡ ele irÃ¡ cumprir a pena perpÃ©tua. Andy logo serÃ¡ apresentado a Warden Norton (Bob Gunton), o corrupto e cruel agente penitenciÃ¡rio, que usa a BÃ­blia como arma de controle e ao CapitÃ£o Byron Hadley (Clancy Brown) que trata os internos como animais. Andy faz amizade com Ellis Boyd Redding (Morgan Freeman), um prisioneiro que cumpre pena hÃ¡ 20 anos e controla o mercado negro da instituiÃ§Ã£o.'),
(32, 'A Vida Ã© Bela', 'drama', 'sim', 'livre', '90', 'Roberto Benigni', 'Durante a Segunda Guerra Mundial na ItÃ¡lia, o judeu Guido (Roberto Benigni) e seu filho GiosuÃ© sÃ£o levados para um campo de concentraÃ§Ã£o nazista....'),
(33, 'HistÃ³rias Cruzadas', 'drama', 'nao', 'livre', '2000', 'Tate Taylor', 'Jackson, pequena cidade no estado do Mississipi, anos 60. Skeeter (Emma Stone) Ã© uma garota da sociedade que retorna determinada a se tornar...'),
(34, 'De Volta para o Futuro', 'comedia', 'sim', 'livre', '80', 'Robert Zemeckis', 'Um jovem (Michael J. Fox) aciona acidentalmente uma mÃ¡quina do tempo construÃ­da por um cientista (Christopher Lloyd) em um Delorean, retornando aos...'),
(35, 'Homens de Honra', 'drama', 'sim', '12', '2000', 'George Tillman Jr.', 'Carl Brashear (Cuba Gooding Jr.) veio de uma humilde famÃ­lia negra, que vivia em uma Ã¡rea rural em Sonora, Kentucky. Ainda garoto, no inÃ­cio dos...');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
