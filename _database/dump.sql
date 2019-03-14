-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 29-Nov-2017 às 21:29
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_shift`
--
CREATE DATABASE IF NOT EXISTS `db_shift` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_shift`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_artigos`
--

CREATE TABLE IF NOT EXISTS `tb_artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor_id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `previa` varchar(100) NOT NULL,
  `conteudo` mediumtext NOT NULL,
  `view` int(11) DEFAULT '0',
  `banner` varchar(124) DEFAULT 'artigos/banners/jinx.jpg',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_criacao` datetime NOT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `game_id` int(11) DEFAULT NULL,
  `partida_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `artigos_autor_id_idx` (`autor_id`),
  KEY `tags_artigo_id_idx` (`tag_id`),
  KEY `games_artigo_id_idx` (`game_id`),
  KEY `partida_id` (`partida_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `tb_artigos`
--

INSERT INTO `tb_artigos` (`id`, `autor_id`, `titulo`, `previa`, `conteudo`, `view`, `banner`, `timestamp`, `data_criacao`, `tag_id`, `game_id`, `partida_id`) VALUES
(12, 1, 'CampeÃµes vencem BLAST Pro Series em cima da ', 'Um show por parte da SK no BLAST Pro Series', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>A Dinamarca foi palco para um campeonato de <strong>Counter-Strike: Global Offensive</strong>, o<strong> BLAST Pro Series: Copenhagen 2017</strong>, e os brasileiros da <strong>SK Gaming</strong> foram para a grande final contra a <strong>Astralis</strong>, equipe da casa.</p>\r\n<p>O primeiro mapa, <strong>Mirage</strong>, come&ccedil;ou muito forte para a Astralis apesar de ter sido uma escolha da SK Gaming. A primeira metade terminou a favor dos dinamarqueses, e, apesar de terem reagido um pouco no segundo half, os brasileiros estavam muito atr&aacute;s e n&atilde;o conseguiram aproximar o placar. Mirage acabou em 16-11 a favor do time da casa.</p>\r\n<p>O segundo mapa foi <strong>Inferno</strong>, escolhido pela Astralis, e o jogo virou: a SK come&ccedil;ou a partida muito bem e arrastou a vantagem at&eacute; o final, impedindo que os dinamarqueses conseguissem uma boa quantidade de dinheiro para se equiparem para os rounds. Os brasileiros encerraram o segundo mapa em 16-8.</p>\r\n<p>O terceiro mapa foi <strong>Cache</strong> e foi at&eacute; o overtime. A Astralis come&ccedil;ou na frente fazendo um 9-0, mas nunca se deve contar a SK Gaming fora de uma disputa: os brasileiros conseguiram se recuperar e venceram v&aacute;rios rounds em sequ&ecirc;ncia, culminando em um overtime para testar o cora&ccedil;&atilde;o dos torcedores, vencendo por 19-16.</p>\r\n<div>Com a vit&oacute;ria a SK faturou US$ 125 mil, o que equivale a R$ 400 mil.</div>\r\n<div>&nbsp;</div>\r\n<div>O <strong>BLAST Pro Series: Copenhagen 2017</strong> aconteceu inteiramente no dia 25 de novembro em Copenhague, na Dinamarca.</div>\r\n</body>\r\n</html>', 2, '1-1511892218.jpg', '2017-11-28 18:03:38', '2017-11-28 16:03:38', NULL, NULL, NULL),
(13, 1, 'paiN Gaming vence CNB e lidera grupo A', 'paiN surpreende adversÃ¡rio e garante a vitoria. ', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Para o segundo confronto do dia da Superliga de League of Legends, a&nbsp;<strong>CNB</strong>&nbsp;encarou a&nbsp;<strong>paiN Gaming</strong>, em um cl&aacute;ssico do League of Legends nacional! As 2 com novas lineups, com Takeshi estreando na equipe, enquanto que os Blumers estavam com Rakin, Devo e Wisdom.</p>\r\n<p>Ser&aacute; a hora de testar as novas lineups em prepara&ccedil;&atilde;o para o CBLOL em 2018. Saiba mais sobre os confrontos em nosso resumo!</p>\r\n<p><strong>Escala&ccedil;&otilde;es:</strong></p>\r\n<table border="1" width="569" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td width="78">\r\n<p align="center"><strong>Fun&ccedil;&otilde;es</strong></p>\r\n</td>\r\n<td width="214">\r\n<p><strong>paiN Gaming</strong></p>\r\n</td>\r\n<td width="277">\r\n<p align="center"><strong>&nbsp;CNB e-Sports Club</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Toplaner</p>\r\n</td>\r\n<td width="214">\r\n<p>&nbsp;Murilo "<strong>Takeshi</strong>" Alves</p>\r\n</td>\r\n<td width="277">\r\n<p>&nbsp;Jefferson "<strong>SoulDevourer</strong>" de Aguiar</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Ca&ccedil;ador</p>\r\n</td>\r\n<td width="214">\r\n<p>&nbsp;Rodrigo "<strong>Tay</strong>" Panisa</p>\r\n</td>\r\n<td width="277">\r\n<p>&nbsp;Yan "<strong>Yampi</strong>" Petermann</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Midlaner</p>\r\n</td>\r\n<td width="214">\r\n<p>&nbsp;Thiago "<strong>Tinowns</strong>" Sartori</p>\r\n</td>\r\n<td width="277">\r\n<p>&nbsp;Rafael "<strong>Rakin</strong>" Knittel</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Atirador</p>\r\n</td>\r\n<td width="214">\r\n<p>&nbsp;Pedro "<strong>Matsukaze</strong>" Gama</p>\r\n</td>\r\n<td width="277">\r\n<p>&nbsp;Pablo "<strong>pbo</strong>" Yuri</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Suporte</p>\r\n</td>\r\n<td width="214">\r\n<p>&nbsp;Caio "<strong>Loop</strong>" Almeida</p>\r\n</td>\r\n<td width="277">\r\n<p>&nbsp;Benjamin "<strong>Visdom</strong>" Ruberg</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Reserva</p>\r\n</td>\r\n<td width="214">\r\n<p>&nbsp;Gabriel "<strong>Kami</strong>" Santos</p>\r\n</td>\r\n<td width="277">\r\n<p align="center"><strong>-</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">&nbsp;</p>\r\n</td>\r\n<td width="214">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td width="277">\r\n<p align="center"><strong>&nbsp;</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">&nbsp;</p>\r\n</td>\r\n<td width="214">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td width="277">\r\n<p align="center"><strong>&nbsp;</strong></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><strong>Jogo 1</strong></p>\r\n<p><strong>Picks e Bans</strong></p>\r\n<table border="1" width="569" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td width="78">\r\n<p align="center"><strong>Fun&ccedil;&otilde;es</strong></p>\r\n</td>\r\n<td width="214">\r\n<p><strong>&nbsp;CNB e-Sports Club</strong></p>\r\n</td>\r\n<td width="277">\r\n<p align="center"><strong>paiN Gaming</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Toplaner</p>\r\n</td>\r\n<td width="214">\r\n<p align="center">Cho&lsquo;gath</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Ornn</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Ca&ccedil;ador</p>\r\n</td>\r\n<td width="214">\r\n<p align="center">Jarvan IV</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Sejuani</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Midlaner</p>\r\n</td>\r\n<td width="214">\r\n<p align="center">Ziggs</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Syndra</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Atirador</p>\r\n</td>\r\n<td width="214">\r\n<p align="center">Varus</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Xayah</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Suporte</p>\r\n</td>\r\n<td width="214">\r\n<p align="center">Braum</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Bardo</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="3" width="569">\r\n<p align="center"><strong>Bans</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="2" width="292">\r\n<p align="center">Talya</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Kalista</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="2" width="292">\r\n<p align="center">Leblanc</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Tristana</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="2" width="292">\r\n<p align="center">Rakan</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Caitlyn</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="2" width="292">\r\n<p align="center">Ryze</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Vladmir</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="2" width="292">\r\n<p align="center">Azir</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Tham Kench</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>Um come&ccedil;o muito bom para a CNB na rota superior, com first blood e torre, mas a vantagem foi praticamente dilu&iacute;da com uma boa team fight da pain, empatando em abates e torres com uma boa rota&ccedil;&atilde;o.</p>\r\n<p>A partida estava bem equilibrada para as 2 equipes e estava chegando o primeiro momento importante do confronto: a disputa pelo Bar&atilde;o, onde as equipes tentam conseguir ter vis&atilde;o ao redor do covil, al&eacute;m de abater os advers&aacute;rios e ter vantagem num&eacute;rica. A paiN tem essa oportunidade ao abater Yampi, mas eles n&atilde;o iniciam o objetivo, acabando optando por um drag&atilde;o infernal.</p>\r\n<p>Posteriormente a paiN garante o Bar&atilde;o ap&oacute;s uma team fight e eles usam a vantagem para avan&ccedil;ar na rota inferior, destruindo inibidor. Eles rotacionam e derrubam depois a torre de inibidor da rota superior. Nesse meio tempo a CNB consegue se defender, mas a paiN garantiu outro bar&atilde;o e com a vantagem eles j&aacute; garantem um drag&atilde;o anci&atilde;o e v&atilde;o direto pra base, finalizando o primeiro jogo!</p>\r\n<p><strong>Vit&oacute;ria da paiN Gaming</strong>&nbsp;nesta primeira partida da s&eacute;rie. Mas ainda falta outro confronto nesta s&eacute;rie, para assim fechar o primeiro dia da Superliga de League of Legends!</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Jogo 2</strong></p>\r\n<p><strong>Picks e Bans</strong></p>\r\n<table border="1" width="569" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td width="78">\r\n<p align="center"><strong>Fun&ccedil;&otilde;es</strong></p>\r\n</td>\r\n<td width="214">\r\n<p><strong>paiN Gaming</strong></p>\r\n</td>\r\n<td width="277">\r\n<p align="center"><strong>CNB e-Sports Club</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Toplaner</p>\r\n</td>\r\n<td width="214">\r\n<p align="center">Galio</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Ornn</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Ca&ccedil;ador</p>\r\n</td>\r\n<td width="214">\r\n<p align="center">Jarvan IV</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Sejuani</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Midlaner</p>\r\n</td>\r\n<td width="214">\r\n<p align="center">Syndra</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Vladmir</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Atirador</p>\r\n</td>\r\n<td width="214">\r\n<p align="center">Varus</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Xayah</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="78">\r\n<p align="center">Suporte</p>\r\n</td>\r\n<td width="214">\r\n<p align="center">Braum</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Bardo</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="3" width="569">\r\n<p align="center"><strong>Bans</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="2" width="292">\r\n<p align="center">Maokai</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Kalista</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="2" width="292">\r\n<p align="center">Gnar</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Ryze</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="2" width="292">\r\n<p align="center">Rakan</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Jayce</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="2" width="292">\r\n<p align="center">Tristana</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Shen</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="2" width="292">\r\n<p align="center">Cho&rsquo;gath</p>\r\n</td>\r\n<td width="277">\r\n<p align="center">Thresh</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>Um in&iacute;cio de jogo com muito farm, mas que acabou ficando muito bom pra paiN, com o first blood e um &oacute;timo gank na rota inferior, conseguindo mais abates e a primeira torre aos 13 minutos de jogo.</p>\r\n<p>A paiN chegou a garantir um drag&atilde;o e a CNB desconta em abates na disputa pelo Arauto. S&oacute; que os Blumers n&atilde;o quiseram terminar de abater o Arauto, deixando-a para a paiN, em uma decis&atilde;o relativamente estranha da equipe, mas talvez eles tenham feito isso por n&atilde;o terem recursos de engajar uma nova team fight contra os advers&aacute;rios.</p>\r\n<p>A paiN usou o Arauto na rota inferior, quase derrubando uma das torres e logo em seguida eles j&aacute; garantiram um drag&atilde;o infernal, enquanto que a CNB chegou a conseguir a primeira torre e um abate.</p>\r\n<p>A paiN garantiu um bar&atilde;o, abre quase toda a rota do meio e rotaciona para a rota inferior, destruindo o inibidor. Rapidamente eles garantem tamb&eacute;m um drag&atilde;o e come&ccedil;am a encaminhar a partida. Eles avan&ccedil;am pela rota superior e conseguem uma &oacute;tima team fight, dizimando toda a CNB. Com o Ace eles invadem a base Blumer e finalizam o confronto!</p>\r\n<p><strong>Vit&oacute;ria da paiN Gaming</strong>, em uma partida r&aacute;pida. A equipe sai na frente no Grupo A, j&aacute; que na primeira s&eacute;rie do dia tivemos o empate entre Brave e Vivo Keyd.</p>\r\n</body>\r\n</html>', 1, '1-1511893335.jpg', '2017-11-28 18:22:15', '2017-11-28 16:22:15', NULL, NULL, NULL),
(14, 1, 'Fnatic faz troca inusitada com Godsent', 'A mudanÃ§a realizada no Fnatic acontece apÃ³s uma queda no desempenho da line-up.', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>O an&uacute;ncio com a troca de jogadores entre<strong>&nbsp;Fnatic</strong>&nbsp;e&nbsp;<strong>Godsent</strong>&nbsp;veio &agrave; tona nesta segunda-feira (15) atrav&eacute;s do portal&nbsp;<strong>HLTV</strong>. Especializado em acompanhar e fazer coberturas de eventos relacionados ao&nbsp;<strong>CS:GO</strong>, o site divulgou que o&nbsp;<strong>Godsent</strong>&nbsp;trouxe tr&ecirc;s jogadores da equipe sueca: Freddy &ldquo;<strong>KRiMZ</strong>&rdquo; Johansson, Jesper &ldquo;<strong>JW&rdquo;</strong>&nbsp;Wecksell e Robin &ldquo;<strong>flusha</strong>&rdquo; R&ouml;nnquist.&nbsp;Em compensa&ccedil;&atilde;o agora os cyber-atletas, Jonas &ldquo;<strong>Lekr0</strong>&rdquo; Olofsson e Simon &ldquo;<strong>twist</strong>&rdquo; Eliasson fazem parte do&nbsp;<strong>Fnatic</strong>.</p>\r\n<p>A mudan&ccedil;a realizada no&nbsp;<strong>Fnatic</strong>&nbsp;acontece ap&oacute;s uma queda no desempenho da line-up. O time que j&aacute; dominou o cen&aacute;rio de CS:GO de dezembro a mar&ccedil;o deste ano, em seis torneios seguidos, n&atilde;o acrescentou nenhum trof&eacute;u nas &uacute;ltimas competi&ccedil;&otilde;es.</p>\r\n<p>Ao contr&aacute;rio do&nbsp;<strong>Fnatic</strong>, o&nbsp;<strong>Godsent</strong>&nbsp;mostrou que a semi-final da&nbsp;<strong>DreamHack Mestres Malm&ouml;</strong>&nbsp;foi o melhor resultado da equipe desde a cria&ccedil;&atilde;o.&nbsp;De acordo com&nbsp;<a href="http://www.twitlonger.com/show/n_1sp0n0q"><strong>um comunicado da Godsent</strong></a>, todos os jogadores em breve se tornar&atilde;o copropriet&aacute;rios do time. Desta forma, a equipe seguir&aacute; os passos do<strong>&nbsp;Astralis</strong>, que atualmente tem o jogador como propriet&aacute;rio.</p>\r\n<p>No site&nbsp;<a href="http://fnatic.com/content/96730/the-end-of-an-era"><strong>oficial do&nbsp;</strong></a><strong>Fnatic,</strong>&nbsp;a organiza&ccedil;&atilde;o adverte que as mudan&ccedil;as foram essenciais para corrigir problemas internos e estabelecer a qu&iacute;mica necess&aacute;ria para o sucesso da equipe.</p>\r\n<p>*Confira como ficou a line-up de cada equipe:</p>\r\n<p><strong>Fnatic</strong></p>\r\n<p>Olof &ldquo;<strong>olofmeister</strong>&rdquo; Kajbjer<br /> Dennis &ldquo;<strong>dennis</strong>&rdquo; Edman<br /> John &ldquo;<strong>wenton</strong>&rdquo; Eriksson<br /> Simon &ldquo;<strong>twist</strong>&rdquo; Eliasson<br /> Jonas &ldquo;<strong>Lekr0</strong>&rdquo; Olofsson</p>\r\n<p>&nbsp;</p>\r\n<p><strong>GODSENT</strong></p>\r\n<p>Markus &ldquo;<strong>pronax</strong>&rdquo; Wallsten<br /> Andreas &ldquo;<strong>znajder</strong>&rdquo; Lindberg<br /> Jesper &ldquo;<strong>JW</strong>&rdquo; Wecksell<br /> Robin &ldquo;<strong>flusha</strong>&rdquo; R&ouml;nnquist<br /> Freddy &ldquo;<strong>KRIMZ</strong>&rdquo; Johansson</p>\r\n</body>\r\n</html>', 1, '1-1511894731.jpg', '2017-11-28 18:45:31', '2017-11-28 16:45:31', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comentarios`
--

CREATE TABLE IF NOT EXISTS `tb_comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `criado` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `artigo_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `comentario` varchar(360) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`artigo_id`,`user_id`),
  KEY `fk_users_comentario_idx` (`user_id`),
  KEY `fk_resposta_idx` (`res_id`),
  KEY `fk_artigos_comentario` (`artigo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_games`
--

CREATE TABLE IF NOT EXISTS `tb_games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game` varchar(124) NOT NULL,
  `banner_game` varchar(145) DEFAULT 'league.jpg',
  `data_lancamento` date DEFAULT NULL,
  `descricao` varchar(800) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `desenvolvedora` varchar(100) DEFAULT NULL,
  `fundo` varchar(124) DEFAULT 'league.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tb_games`
--

INSERT INTO `tb_games` (`id`, `game`, `banner_game`, `data_lancamento`, `descricao`, `genero`, `desenvolvedora`, `fundo`) VALUES
(1, 'League of Legends', 'league.jpg', '2009-10-27', '-', 'MOBA', 'Riot Games', 'league.jpg'),
(2, 'Counter-Strike', 'csgo.jpg', '2017-08-21', '-', 'FPS', 'Valve', 'csgo.jpg'),
(8, 'Rainbow Six Siege', 'rain.jpg', '2015-12-01', '-', 'FPS', 'Ubisoft', 'rain.jpg'),
(9, 'Sem jogo', 'eve.jpg', '0000-00-00', '-', '-', '-', 'league.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_games_rel`
--

CREATE TABLE IF NOT EXISTS `tb_games_rel` (
  `id_artigo` int(11) NOT NULL DEFAULT '0',
  `id_game` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_artigo`,`id_game`),
  KEY `fk_rel_game_idx` (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_games_rel`
--

INSERT INTO `tb_games_rel` (`id_artigo`, `id_game`) VALUES
(13, 1),
(12, 2),
(14, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_partida`
--

CREATE TABLE IF NOT EXISTS `tb_partida` (
  `id_proPlayer` int(11) NOT NULL DEFAULT '0',
  `id_artigo` int(11) NOT NULL DEFAULT '0',
  `id_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_proPlayer`,`id_artigo`,`id_time`),
  KEY `fk_artigo_idx` (`id_artigo`),
  KEY `fk_time_idx` (`id_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_proplayers`
--

CREATE TABLE IF NOT EXISTS `tb_proplayers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pro` varchar(100) NOT NULL,
  `nm_user` int(11) DEFAULT NULL,
  `time_id` int(11) DEFAULT NULL,
  `num_titulos` int(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `nacionalidade` varchar(124) DEFAULT NULL,
  `nickname` varchar(75) NOT NULL,
  `game_id` int(11) DEFAULT NULL,
  `nivel_pro` int(11) DEFAULT '0',
  `banner_pro` varchar(145) DEFAULT 'mylon.jpg',
  `cidade_pro` varchar(45) DEFAULT '-',
  PRIMARY KEY (`id`),
  KEY `pro_users_id_idx` (`nm_user`),
  KEY `pro_game_id_idx` (`game_id`),
  KEY `pro_time_id_idx` (`time_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- Extraindo dados da tabela `tb_proplayers`
--

INSERT INTO `tb_proplayers` (`id`, `nome_pro`, `nm_user`, `time_id`, `num_titulos`, `data_nascimento`, `nacionalidade`, `nickname`, `game_id`, `nivel_pro`, `banner_pro`, `cidade_pro`) VALUES
(1, 'Sem jogador', NULL, 1, 0, '0000-00-00', '-', 'sem-jogador', 1, 2, 'k.jpg', '-'),
(13, 'Jorginho', NULL, 6, 45, '1998-11-03', 'sssss', 'ee', 1, 0, 'pro-1511633117.jpg', 'bahia'),
(31, 'Caio Almeida', NULL, 6, 2, '0000-00-00', 'Brasileiro', 'Loop', 1, 0, 'pro-Loop-1511819894.jpg', 'SÃ£o Paulo'),
(32, 'Cesar Barbosa', NULL, 6, 3, '0000-00-00', 'Brasileiro', 'Juc', 1, 2, 'pro-Juc-1511819994.jpg', 'SÃ£o Paulo'),
(39, 'Benjamim Ruberg', NULL, 5, 0, '1993-11-05', 'Dinamarques', 'Visdom', 1, 0, 'pro-Visdom-1511820493.jpg', 'Dinamarca'),
(40, 'Jefferson de Aguiar', NULL, 5, 0, '1999-02-04', 'Brasileiro', 'Devo', 1, 0, 'pro-Devo-1511820569.jpg', 'FlorianÃ³polis - SC'),
(42, 'Pablo Yuri', NULL, 5, 0, '0000-00-00', 'Brasileiro', 'pbO', 1, 0, 'pro-pbO-1511820666.jpg', 'SÃ£o Bernardo do Campo - SP'),
(43, 'Pedro Ramos', NULL, 5, 0, '0000-00-00', 'Brasileiro', 'Gafone', 1, 2, 'pro-Gafone-1511820708.jpg', 'SÃ£o Paulo'),
(44, 'Rafael Kittel', NULL, 5, 0, '0000-00-00', 'Brasileiro', 'Rakin', 1, 0, 'pro-Rakin-1511820750.jpg', 'SÃ£o Paulo'),
(45, 'Yan Pettermann', NULL, 5, 0, '0000-00-00', 'Brasileiro', 'Yampi', 1, 0, 'pro-Yampi-1511820816.jpg', 'SÃ£o Paulo'),
(46, 'Carlos Ruker', NULL, 8, 1, '0000-00-00', 'Brasileiro', 'Nappon', 1, 0, 'pro-Nappon-1511821547.jpg', 'SÃ£o Paulo'),
(47, 'Felipe GonÃ§alves', NULL, 8, 3, '0000-00-00', 'Brasileiro', 'brTT', 1, 0, 'pro-brTT-1511821594.jpg', 'Rio de Janeiro'),
(48, 'Gustavo Rossi', NULL, 8, 1, '0000-00-00', 'Brasileiro', 'Sacy', 1, 1, 'pro-Sacy-1511821648.jpg', 'SÃ£o Paulo'),
(49, 'Hugo Padioleau', NULL, 8, 2, '0000-00-00', 'Brasileiro', 'Dioud', 1, 0, 'pro-Dioud-1511821716.jpg', 'SÃ£o Paulo'),
(50, 'Kwon Noh-hoon', NULL, 8, 0, '0000-00-00', 'Coreia ', 'M1rage', 1, 1, 'pro-M1rage-1511821778.jpg', 'Coreia'),
(51, 'Leonardo Souza', NULL, 8, 1, '0000-00-00', 'Brasileiro', 'Robo', 1, 0, 'pro-Robo-1511821840.jpg', 'SÃ£o Paulo'),
(52, 'Pedro Marcani', NULL, 8, 1, '0000-00-00', 'Brasileiro', 'Lep', 1, 1, 'pro-Lep-1511821881.jpg', 'SÃ£o Paulo'),
(53, 'Ram Djemal', NULL, 8, 0, '0000-00-00', 'Brasileiro', 'Djemal', 1, 2, 'pro-Djemal-1511821927.jpg', 'SÃ£o Paulo'),
(55, 'Murilo Alves', NULL, 6, 0, '0000-00-00', 'Brasileiro', 'takeshi', 1, 0, 'pro-takeshi-1511822163.jpg', 'SÃ£o Paulo'),
(56, 'Pedro Gama', NULL, 6, 0, '0000-00-00', 'Brasileiro', 'Matsukaze', 1, 0, 'pro-Matsukaze-1511822206.jpg', 'SÃ£o Paulo'),
(57, 'Rodrigo Panisa', NULL, 6, 0, '0000-00-00', 'Brasileiro', 'Tay ', 1, 0, 'pro-Tay -1511822241.jpg', 'SÃ£o Paulo'),
(58, 'Thiago Sartori', NULL, 6, 0, '0000-00-00', 'Brasileiro', 'tinOwns', 1, 0, 'pro-tinOwns-1511822290.jpg', 'SÃ£o Paulo'),
(59, 'Gabriel Bohm Santos', NULL, 6, 3, '0000-00-00', 'Brasileiro', 'Kami', 1, 1, 'pro-Kami-1511822374.jpg', 'SÃ£o Paulo'),
(60, 'David Couto', NULL, 6, 2, '0000-00-00', 'Brasileiro', 'SpawNss', 8, 0, 'pro-SpawNss-1511822669.jpg', 'SÃ£o Paulo'),
(61, 'Gabriel Fernandes', NULL, 6, 1, '0000-00-00', 'Brasileiro', 'pino', 8, 1, 'pro-pino-1511822711.jpg', 'SÃ£o Paulo'),
(62, 'Guilherme Constacio', NULL, 6, 2, '0000-00-00', 'Brasileiro', 'Revol1Tz', 8, 0, 'pro-Revol1Tz-1511822764.jpg', 'SÃ£o Paulo'),
(63, 'JoÃ£o Gabriel', NULL, 6, 2, '0000-00-00', 'Brasileiro', 'yoona', 8, 0, 'pro-yoona-1511822814.jpg', 'SÃ£o Paulo'),
(64, 'Leonardo Andreotti', NULL, 6, 2, '0000-00-00', 'Brasileiro', 'MosK', 8, 2, 'pro-MosK-1511822862.jpg', 'SÃ£o Paulo'),
(65, 'Marcelo David', NULL, 10, 6, '0000-00-00', 'Brasileiro', 'coldzera', 2, 0, 'pro-coldzera-1511891506.jpg', 'SÃ£o Paulo'),
(66, 'Gabriel Toledo', NULL, 10, 13, '0000-00-00', 'Brasileiro', 'FalleN', 2, 0, 'pro-FalleN-1511891596.jpg', 'ItararÃ©-SP'),
(67, 'EpitÃ¡cio de Melo', NULL, 10, 10, '0000-00-00', 'Brasileiro', 'TACO', 2, 0, 'pro-TACO-1511891664.jpg', 'SÃ£o Paulo'),
(68, 'Fernando Alvarenga', NULL, 10, 12, '0000-00-00', 'Brasileiro', 'fer', 2, 0, 'pro-fer-1511891726.jpg', 'Rio de Janeiro'),
(69, 'JoÃ£o Vasconsellos', NULL, 10, 7, '0000-00-00', 'Brasileiro', 'felps', 2, 0, 'pro-felps-1511891782.jpg', 'Rio de Janeiro'),
(70, 'Andreas Samuelsson', NULL, 11, 6, '0000-00-00', 'Sueco', 'samuelsson', 2, 2, 'pro-samuelsson-1511893796.jpg', 'GÃ¶teborg, Sverige'),
(71, 'Freddy Johansson', NULL, 11, 10, '0000-00-00', 'Sueco', 'KRiMZ', 2, 0, 'pro-KRiMZ-1511893933.jpg', 'Upplands-VÃ¤sby, Sverige'),
(72, 'Jesper Wecksell', NULL, 1, 5, '0000-00-00', 'Sueco', 'JW', 2, 0, 'pro-JW-1511894020.jpg', '-'),
(73, 'Jimmy Berndtsson', NULL, 11, 3, '1986-04-12', 'Sueco', 'JUMPY', 2, 2, 'pro-JUMPY-1511894189.jpg', '-'),
(74, 'Jonas Olofsson', NULL, 11, 9, '1993-02-07', 'Sueco', 'Lekr0', 2, 0, 'pro-Lekr0-1511894265.jpg', '-'),
(75, 'Maikil Selim', NULL, 11, 5, '1994-02-02', 'Sueco', 'Golden', 2, 0, 'pro-Golden-1511894323.jpg', '-'),
(76, 'Robin Ronnquist', NULL, 11, 15, '1993-12-08', 'Sueco', 'flusha', 2, 0, 'pro-flusha-1511894397.jpg', '-');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pros_rel`
--

CREATE TABLE IF NOT EXISTS `tb_pros_rel` (
  `id_artigo` int(11) NOT NULL DEFAULT '0',
  `id_pro` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_artigo`,`id_pro`),
  KEY `fk_rel_pro_idx` (`id_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_pros_rel`
--

INSERT INTO `tb_pros_rel` (`id_artigo`, `id_pro`) VALUES
(13, 31),
(13, 39),
(13, 40),
(13, 42),
(13, 43),
(13, 44),
(13, 55),
(13, 56),
(13, 57),
(13, 59),
(12, 65),
(12, 66),
(12, 67),
(12, 68),
(12, 69),
(14, 70),
(14, 71),
(14, 72),
(14, 73),
(14, 74),
(14, 75),
(14, 76);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tags`
--

CREATE TABLE IF NOT EXISTS `tb_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(124) NOT NULL,
  `artigo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `artigos_tags_id_idx` (`artigo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_times`
--

CREATE TABLE IF NOT EXISTS `tb_times` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_time` varchar(124) NOT NULL,
  `banner_time` varchar(145) DEFAULT 'pain.jpg',
  `nick_time` varchar(45) DEFAULT NULL,
  `criado_time` date DEFAULT NULL,
  `criador_time` varchar(140) DEFAULT '-',
  `bio_time` varchar(200) DEFAULT '-',
  `local_time` varchar(140) DEFAULT '-',
  `titulos_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `tb_times`
--

INSERT INTO `tb_times` (`id`, `nome_time`, `banner_time`, `nick_time`, `criado_time`, `criador_time`, `bio_time`, `local_time`, `titulos_time`) VALUES
(1, 'Sem time', 'eve.jpg', 'semtime', NULL, NULL, NULL, NULL, NULL),
(4, 'Burst', 'timeBurst--1511805690.jpg', NULL, '2003-07-11', 'Pedro Vitorino', 'daora', 'Praia Grande', 14),
(5, 'CNB e-Sports Club', 'timeCNB e-Sports Club--1511818709.jpg', NULL, '0000-00-00', 'NÃ£o informado', 'A CNB Ã© uma das organizaÃ§Ãµes mais tradicionais de eSports no Brasil, e foi a primeira equipe brasileira a conquistar um trofÃ©u em evento oficial no paÃ­s.', '', 46),
(6, 'Pain Gaming', 'timePain Gaming--1511819014.jpg', NULL, '2010-09-11', 'Arthur "PAADA" Zarzur', 'Pain Gaming Ã© uma equipe brasileira de esportes eletrÃ´nicos, fundada em 2010 como time de DotA por Arthur "PAADA" Zarzur, ex-jogador profissional do game.', 'Brasil', 51),
(8, 'RED Canids', 'timeRED Canids--1511821443.jpg', NULL, '0000-00-00', 'Felippe Corradini', 'RED Canids (ex INTZ Red) Ã© um time Brasileiro atuante no ramo de e-Sports, mais popularmente em League of Legends e Heroes of The Storm.', 'SÃ£o Paulo', 1),
(9, 'Keyd Stars', 'timeKeyd Stars--1511890900.jpg', NULL, '2010-02-11', ' AndrÃ© Pontes', 'Keyd Stars Ã© uma equipe brasileira de esportes eletrÃ´nicos.', 'SÃ£o Paulo', 28),
(10, 'Sk Gaming', 'timeSk Gaming--1511891230.jpg', NULL, '1997-05-11', 'Schroet Kommando', 'Um dos primeiros times de Quake, e com passar do tempo ganhando admiraÃ§Ã£o no cenÃ¡rio de e-Sports.', 'Oberhausen, Alemanha', 60),
(11, 'Fnatic', 'timeFnatic--1511893672.jpg', NULL, '0000-00-00', 'Sam Mathews', 'Fnatic Ã© uma organizaÃ§Ã£o profissional de e-sports sediada em Londres, Reino Unido. ', 'Londres, Reino Unido', 64);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_times_rel`
--

CREATE TABLE IF NOT EXISTS `tb_times_rel` (
  `id_artigo` int(11) NOT NULL DEFAULT '0',
  `id_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_artigo`,`id_time`),
  KEY `fk_rel_time_idx` (`id_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_times_rel`
--

INSERT INTO `tb_times_rel` (`id_artigo`, `id_time`) VALUES
(13, 5),
(13, 6),
(12, 10),
(14, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_user` varchar(80) NOT NULL,
  `pass_user` varchar(1000) NOT NULL,
  `login_user` varchar(80) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `data_nascimento_user` date DEFAULT NULL,
  `status_user` int(1) DEFAULT '1',
  `data_registro_user` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sexo_user` int(11) DEFAULT NULL,
  `nivel_user` int(11) DEFAULT '1',
  `artigo_id` int(11) DEFAULT NULL,
  `avatar_user` varchar(155) DEFAULT '1.jpg',
  `proPlayer_id` int(11) DEFAULT NULL,
  `banner_user` varchar(124) DEFAULT 'league.jpg',
  `fav_pro_id` int(11) DEFAULT '1',
  `fav_time_id` int(11) DEFAULT '1',
  `fav_game_id` int(11) DEFAULT '9',
  PRIMARY KEY (`id`),
  KEY `users_artigo_id_idx` (`artigo_id`),
  KEY `proPlayers_users_id_idx` (`proPlayer_id`),
  KEY `favPRO_proPlayer_id_idx` (`fav_pro_id`),
  KEY `favGAME_game_id_idx` (`fav_game_id`),
  KEY `favTIME_time_id_idx` (`fav_time_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`id`, `nm_user`, `pass_user`, `login_user`, `email_user`, `data_nascimento_user`, `status_user`, `data_registro_user`, `sexo_user`, `nivel_user`, `artigo_id`, `avatar_user`, `proPlayer_id`, `banner_user`, `fav_pro_id`, `fav_time_id`, `fav_game_id`) VALUES
(1, 'Matheus GonÃ§alves', '25f9e794323b453885f5181f1b624d0b', 'mgmadvance', 'matheusgt4@hotmail.com', NULL, 1, '2017-11-25 16:31:56', NULL, 0, NULL, 'perfil-1-1511809353.jpg', NULL, 'perfil-1-capa1511809353.jpg', 1, 6, 1),
(4, 'Rodrigo', 'caf1a3dfb505ffed0d024130f58c5cfa', 'testando', 'marverick@ok.com', '2014-05-01', 1, '2017-11-26 18:47:32', 2, 1, NULL, 'perfil-7-1511809193.jpg', NULL, 'perfil-7-capa1511809193.jpg', NULL, NULL, NULL),
(6, 'Ricardo', '202cb962ac59075b964b07152d234b70', 'rodori28', 'marverick@ok.com', '2013-03-05', 1, '2017-11-26 18:57:22', 1, 1, NULL, 'perfil-7-1511809193.jpg', NULL, 'perfil-7-capa1511809193.jpg', 48, 5, 1),
(7, 'Afonso', '202cb962ac59075b964b07152d234b70', 'afonlol', 'marverick@ok.com', '2014-03-09', 1, '2017-11-27 18:59:15', 1, 1, NULL, 'thresh.jpg', NULL, 'perfil-7-capa1511809193.jpg', 1, 8, 1),
(8, 'Alessandro', '202cb962ac59075b964b07152d234b70', 'wingerter', 'alessandro.silva91@etec.sp.gov.br', '1984-10-20', 1, '2017-11-27 23:21:16', 1, 1, NULL, '1.jpg', NULL, 'league.jpg', 47, 6, 2),
(9, 'Felipe', '202cb962ac59075b964b07152d234b70', 'felps', 'felps@felps.com', '1999-05-08', 1, '2017-11-28 16:32:16', 1, 1, NULL, '1.jpg', NULL, 'league.jpg', 1, 1, 9);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_artigos`
--
ALTER TABLE `tb_artigos`
  ADD CONSTRAINT `artigos_autor_id` FOREIGN KEY (`autor_id`) REFERENCES `tb_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_partida_id` FOREIGN KEY (`partida_id`) REFERENCES `tb_partida` (`id_artigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `games_artigo_id` FOREIGN KEY (`game_id`) REFERENCES `tb_games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tags_artigo_id` FOREIGN KEY (`tag_id`) REFERENCES `tb_tags` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  ADD CONSTRAINT `fk_artigos_comentario` FOREIGN KEY (`artigo_id`) REFERENCES `tb_artigos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_resposta` FOREIGN KEY (`res_id`) REFERENCES `tb_comentarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_comentario` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_games_rel`
--
ALTER TABLE `tb_games_rel`
  ADD CONSTRAINT `fk_rel_artigo` FOREIGN KEY (`id_artigo`) REFERENCES `tb_artigos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rel_game` FOREIGN KEY (`id_game`) REFERENCES `tb_games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_partida`
--
ALTER TABLE `tb_partida`
  ADD CONSTRAINT `fk_artigo` FOREIGN KEY (`id_artigo`) REFERENCES `tb_artigos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proPlayer` FOREIGN KEY (`id_proPlayer`) REFERENCES `tb_proplayers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_time` FOREIGN KEY (`id_time`) REFERENCES `tb_times` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_proplayers`
--
ALTER TABLE `tb_proplayers`
  ADD CONSTRAINT `pro_game_id` FOREIGN KEY (`game_id`) REFERENCES `tb_games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pro_time_id` FOREIGN KEY (`time_id`) REFERENCES `tb_times` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pro_users_id` FOREIGN KEY (`nm_user`) REFERENCES `tb_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_pros_rel`
--
ALTER TABLE `tb_pros_rel`
  ADD CONSTRAINT `fk_rel_artigo3` FOREIGN KEY (`id_artigo`) REFERENCES `tb_artigos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rel_pro` FOREIGN KEY (`id_pro`) REFERENCES `tb_proplayers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_tags`
--
ALTER TABLE `tb_tags`
  ADD CONSTRAINT `artigos_tags_id` FOREIGN KEY (`artigo_id`) REFERENCES `tb_artigos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_times_rel`
--
ALTER TABLE `tb_times_rel`
  ADD CONSTRAINT `fk_rel_artigo2` FOREIGN KEY (`id_artigo`) REFERENCES `tb_artigos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rel_time` FOREIGN KEY (`id_time`) REFERENCES `tb_times` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `favGAME_game_id` FOREIGN KEY (`fav_game_id`) REFERENCES `tb_games` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `favPRO_proPlayer_id` FOREIGN KEY (`fav_pro_id`) REFERENCES `tb_proplayers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `favTIME_time_id` FOREIGN KEY (`fav_time_id`) REFERENCES `tb_times` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `proPlayers_users_id` FOREIGN KEY (`proPlayer_id`) REFERENCES `tb_proplayers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_artigo_id` FOREIGN KEY (`artigo_id`) REFERENCES `tb_artigos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
