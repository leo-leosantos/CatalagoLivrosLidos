-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/08/2020 às 19:11
-- Versão do servidor: 8.0.21-0ubuntu0.20.04.3
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cakephp_meus_livros_lidos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `footers`
--

CREATE TABLE `footers` (
  `id` int NOT NULL,
  `descricao` text NOT NULL,
  `autor_frase` varchar(45) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `footers`
--

INSERT INTO `footers` (`id`, `descricao`, `autor_frase`, `created`, `modified`) VALUES
(1, '<p>“Meus filhos terão computadores, sim, mas antes terão livros. Sem livros, sem leitura, os nossos filhos serão incapazes de escrever – inclusive a sua própria história.”</p>', 'Bill Gates', '2020-07-14 18:29:08', '2020-07-15 14:44:13');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int NOT NULL,
  `nome` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `livro_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id` int NOT NULL,
  `nome_livro` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nome_autor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sinopse` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `editora` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `numero_paginas` int NOT NULL,
  `data_inicio_leitura` date NOT NULL,
  `data_fim_leitura` date DEFAULT NULL,
  `serie` varchar(222) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `volume` varchar(222) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `imagem` varchar(220) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id`, `nome_livro`, `nome_autor`, `sinopse`, `editora`, `numero_paginas`, `data_inicio_leitura`, `data_fim_leitura`, `serie`, `volume`, `imagem`, `created`, `modified`) VALUES
(1, 'Pássaro da Tempestade', 'Conn Iggulden', 'UMA SÉRIE NO ESTILO GUERRA DOS TRONOS, COM ACONTECIMENTOS BASEADOS EM FATOS REAIS Quando o rei Henrique VI enfim ocupa o trono da Inglaterra, todo o reino fica abalado. Sua saúde fraca e sua falta de coragem e braveza ficam aparentes e, dessa forma, é responsabilidade de seus homens de confiança garantir a segurança da Coroa. A pedido de Henrique, o espião-mor Derry Brewer e William de la Pole, duque de Suffolk, propõem um armistício com a França através de um casamento arranjado com Margarida de Anjou, jovem da nobreza francesa. Porém, nem todos veem esse acordo com bons olhos, e assim nasce uma conspiração, liderada por Ricardo Plantageneta, duque de York, que deseja destronar o rei e ocupar seu lugar. É o início de um período sangrento na Inglaterra, uma guerra civil com alianças e traições na qual a morte está sempre à espreita. • “Guerra dos Tronos é a Guerras das Rosas do gênero fantasia. Guerras das Rosas é o original, muito mais espetacular, mais frenético, e muito, muito mais violento.” – Manda Scott, autora de Águia, Cão e Touro, publicados pela Bertrand. • Os livros das séries O Imperador e O Conquistador de Conn Iggulden, publicados pela Record, já venderam cerca de 160 mil exemplares. • Conn Iggulden é também autor de O livro perigoso para garotos, lançado pelo selo Galera, que já vendeu quase 100 mil exemplares.', 'Record', 406, '2020-07-09', '2020-09-26', 'Guerra das Rosas', 'Vol. 1', 'guerravalumeum.jpg', '2020-07-09 17:10:51', '2020-07-09 17:10:51'),
(2, 'Trindade', 'Iggulden', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">O segundo volume da s&eacute;rie Guerra das Rosas Ricardo Plantageneta, duque de York, est&aacute; no poder. Agora, como protetor e defensor do reino, ele &eacute; capaz de aumentar sua influ&ecirc;ncia na Inglaterra. Com os condes de Salisbury e de Warwick, ele forma uma trindade com poder inigual&aacute;vel. Enquanto isso, Henrique VI, rei da Inglaterra, permanece acamado. Sua doen&ccedil;a n&atilde;o parece ter cura, restando &agrave; rainha Margarida de Anjou, sua leal esposa, ao espi&atilde;o-mor DerryBrewer e aos outros aliados do rei manterem o legado da fam&iacute;lia Lancaster. Mas quando Henrique misteriosamente desperta, tudo que os espera &eacute; um cen&aacute;rio de conflitos e batalhas sangrentas.</span></p>\r\n</body>\r\n</html>', 'Record', 420, '2020-07-11', NULL, 'Guerra das Rosas', 'Vol. 2', 'guerradasrosasdois.jpg', '2020-07-11 16:56:49', '2020-07-11 16:56:49'),
(3, 'Herança de sangue ', 'Iggulden', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Dois homens podem reivindicar um trono. Apenas um pode ocup&aacute;-lo. O terceiro volume da s&eacute;rie Guerra das Rosas Ap&oacute;s a vit&oacute;ria na batalha contra as for&ccedil;as de York, a rainha Margarida de Anjou, ao lado do marido, o rei Henrique, e com o apoio do espi&atilde;o-mor Derry Brewer e do conde de Somerset, avan&ccedil;a para o sul, para a cidade de Londres. No entanto, com a morte do duque de York, o ex&eacute;rcito lancastriano atrai a vingan&ccedil;a de seu filho, Eduardo de March, que agora ocupa a posi&ccedil;&atilde;o do pai. Ent&atilde;o a cidade de Londres n&atilde;o abre seus port&otilde;es para Henrique, e Eduardo, auxiliado pelo conde de Warwick, se coroa rei. Em meio a sangue e trai&ccedil;&atilde;o, aos desejos de um homem alquebrado e aos anseios de uma mulher em busca de vingan&ccedil;a, irm&atilde;os lutar&atilde;o contra irm&atilde;os, reis confrontar&atilde;o reis neste novo cap&iacute;tulo da Guerra das Rosas.</span></p>\r\n</body>\r\n</html>', 'Record', 420, '2020-07-08', NULL, 'Guerra das Rosas', 'Vol. 3', 'guerradasrosastres.jpg', '2020-07-11 17:00:36', '2020-07-11 17:00:36'),
(4, 'A Guerra dos Tronos', 'George R. R. Martin', '<p>A guerra dos tronos é o primeiro livro da série best-seller internacional As Crônicas de Gelo e Fogo, que deu origem à adaptação de sucesso da HBO, Game of Thrones.<br>O verão pode durar décadas. O inverno, toda uma vida. E a guerra dos tronos começou. Como Guardião do Norte, lorde Eddard Stark não fica feliz quando o rei Robert o proclama a nova Mão do Rei. Sua honra o obriga a aceitar o cargo e deixar seu posto em Winterfell para rumar para a corte, onde os homens fazem o que lhes convém, não o que devem... e onde um inimigo morto é algo a ser admirado.<br><br>Longe de casa e com a família dividida, Eddard se vê cada vez mais enredado nas intrigas mortais de Porto Real, sem saber que perigos ainda maiores espreitam a distância.<br><br>Nas florestas ao norte de Winterfell, forças sobrenaturais se espalham por trás da Muralha que protege a região. E, nas Cidades Livres, o jovem Rei Dragão exilado na Rebelião de Robert planeja sua vingança e deseja recuperar sua herança de família: o Trono de Ferro de Westeros.</p>', 'Suma', 600, '2020-01-13', '2020-03-13', 'As Crônicas de Gelo e Fogo', 'Vol.1', '0714164020-guerradostronosum.jpg', '2020-07-14 00:57:59', '2020-07-14 16:40:20'),
(5, 'Caminho das Sombras', 'Brent Weeks', '<p>Caminho das sombras é o primeiro livro da série Anjo da Noite, que tem mais de 3 milhões de exemplares vendidos.&nbsp; “Aventura, magia e várias reviravoltas… O ritmo acelerado de Caminho das sombras deixará o leitor sem fôlego até o fim.” – INtocados&nbsp; “Fiquei fascinado. Personagens inesquecíveis, trama instigante,&nbsp;ação ininterrupta... É o tipo de narrativa que me faz admirar o trabalho de um escritor.” – Terry Brooks, autor de A espada de Shannara&nbsp; Para Durzo Blint, matar é uma arte... e ele é o artista mais talentoso da cidade. Temido por muitos, Durzo é uma lenda viva com as mãos manchadas de sangue e nenhuma culpa pelas vítimas que deixa pelo caminho.&nbsp; Esse mundo sombrio também não é novidade para o jovem Azoth. Sobrevivendo entre becos sujos, ele aprendeu que a esperança é uma piada. Pelas regras das guildas, crianças são agredidas e surradas todos os dias.&nbsp; Tentar contestar essa realidade seria um risco alto demais. Mas quando a morte se torna questão de tempo para ele e seus amigos, Azoth se vê forçado a vencer o medo e agarrar a chance de virar um derramador, um assassino. Ele precisa se tornar discípulo de Durzo Blint.&nbsp; Para ser aceito, o garoto abandona sua antiga vida e abraça uma nova identidade. Ao se tornar Kylar Stern, ele aprenderá a transitar no mundo dos nobres, sobreviver às magias de seus inimigos e cultivar uma amizade muito especial: a da escuridão. **** “Uma estreia literária&nbsp;impressionante.” – SFFWorld – A vida é vazia. uando tiramos uma vida, não estamos tirando nada de valor. Derramadores são matadores. É só isso que fazemos. É só isso que somos. Não há poesia no ofício da amargura – falou Durzo Blint. Sentindo-se muito desajeitado, Azoth segurava uma espada pequena o suficiente para uma criança de 11 anos. – Agora me ataque – ordenou Blint. – O quê? A lateral da espada de madeira de Blint acertou a cabeça de Azoth. – Eu mando. Você obedece. Sem hesitação. Entendeu? – Sim, mestre. – Azoth se levantou e pegou a espada. Coçou a cabeça. – Ataque – repetiu Blint. Azoth atacou de qualquer maneira. Blint se esquivou de seus golpes e o garoto caiu com a força dos próprios movimentos. Durante todo esse tempo, Durzo não parou de falar. – Abrace as sombras… Respire o silêncio… Seja normal, seja inisível… Localize sua vítima… Conheça cada saída… Quando Azoth errava, Blint não gritava. Quando o discípulo não bloqueava um golpe da maneira certa, recebia o que merecia no momento que a espada de madeira o acertava na canela. Se não conseguisse recitar a lição do dia ou comentar sobre qualquer outra que Blint perguntasse, levava um cascudo para cada esquecimento. Era tudo equilibrado, meticulosamente desferido, mas Azoth nunca relaxava. Se acassasse um número excessivo de vezes, mestre Blint poderia facilmente matá-lo, da mesma forma descompromissada com que dava um cascudo. Azoth jamais saberia que havia fracassado até constatar que estava morrendo. Mais de uma vez, quis desistir. Mas desistir era impossível. Mais de uma vez, quis matar Blint. Mas isso o levaria à morte, com certeza. Mais de uma vez, quis chorar. Mas havia jurado não fazê-lo, e não o fez.</p>', 'Arqueiro', 432, '2019-01-14', '2019-03-14', 'Anjo da Noite', 'Volume 1', 'caminhodassombras.jpg', '2020-07-14 15:26:58', '2020-07-14 15:26:58'),
(6, 'À margem das sombras', '	 Brent Weeks', '<p>\"“É inegável que Brent Weeks criou uma história fantástica, principalmente pelo seu talento com reviravoltas na trama. São muitas durante a obra e a maioria delas deixa você de queixo caído.” – Intocados.com.br “Brent Weeks é tão bom que está começando a me irritar.” – Peter V. Brett, autor da série Ciclo das Trevas “Melhor fantasia do ano, possivelmente da década.” – BooksMonthly.co.uk O jogo parece perdido para a cidade de Cenária. O golpe impiedoso de Garoth Ursuul, o Deus-rei, foi bem-sucedido. Agora ele domina a cidade, enquanto os invasores de Khalidor massacram habitantes e destroem casas, lojas e esperanças. O antigo governo da cidade foi subjugado e seu líder, substituído. A magia do Deus-rei é poderosa demais para ser controlada e sua influência se expande até os círculos mais nobres da cidade. As únicas chances de vitória nessa guerra injusta são o honrado Logan Gyre e o derramador Kylar Stern, o Anjo da Noite. Contudo, enquanto o primeiro está enclausurado na mais terrível prisão do reino, o segundo abandonou o caminho da espada e, em nome de Elene, seu grande amor, jurou nunca mais matar. A resistência agora se resume a ladrões, comerciantes pobres e prostitutas. Mas talvez isso mude muito em breve. Ao descobrir que Logan está vivo, Kylar pode abrir mão da paz que encontrou na nova família e arriscar tudo para retornar ao caminho das sombras.\"</p>', 'Arqueiro', 416, '2019-11-18', '2020-01-02', 'Anjo da Noite', 'Volume 2', 'amargemdassombras.jpg', '2020-07-14 16:05:53', '2020-07-14 16:05:53'),
(7, 'A Fúria dos Reis', 'George R. R. Martin', '<p>Edição comemorativa. Novo formato 16x23cm e nova capa, criada pelo ilustrador francês Marc Simonetti. De um dos maiores mestres da fantasia surge um épico magistral, poderoso como você jamais viu. Em A fúria dos reis, o segundo livro da aclamada série As crônicas de gelo e fogo, George R. R. Martin segue a épica aventura nos Sete Reinos, onde muitos perigos e disputas ainda estão por vir. Além dos combates que se estendem por todos os lados, a ameaça agora também chega pelo céu! Mistério, intriga, romance e aventura encherão as páginas deste livro, agora também um seriado de sucesso da HBO! Quando um cometa vermelho cruza os céus de Westeros, os Sete Reinos estão em plena guerra civil. Os exércitos dos Stark e dos Lannister estão se preparando para o confronto final, e Stannis – irmão do falecido Rei Robert –, desejoso de possuir um exército que lute pela sua reivindicação ao trono, alia-se a uma misteriosa religião oriental. Porém, seu irmão mais novo também se proclama rei. E, enquanto isso, os Greyjoy planejam vingança contra todos os que os humilharam dez anos atrás. Ainda, no distante Leste, poderosos dragões estão prestes a chegar aos Sete Reinos, trazendo fogo e morte... Um perigo de proporções gigantescas, muito maior do que as grandes guerras! Nesta tão esperada sequência de A guerra dos tronos, George R. R. Martin cria uma obra de incrível poder e imaginação. A fúria dos reis nos transporta até um mundo de glória e vingança, de guerras e magia, onde poder e miséria podem se alterar no virar de uma página. Uma obra singular da literatura fantástica.</p>', 'LeYa', 656, '2018-01-16', '2018-03-09', 'As Crônicas de Gelo e Fogo', 'Volume 2', '0715165427-furiadosreis.jpg', '2020-07-14 16:29:56', '2020-07-15 20:13:31'),
(8, 'A tormenta de espadas ', 'George R. R. Martin', '<p>O futuro de Westeros está em jogo, e ninguém descansará até que os Sete Reinos tenham explodido em uma verdadeira tormenta de espadas.<br>Dos cinco pretendentes ao trono, um está morto e outro caiu em desgraça, e ainda assim a guerra continua em toda sua fúria, enquanto alianças são feitas e desfeitas. Joffrey, da Casa Lannister, ocupa o Trono de Ferro, como o instável governante dos Sete Reinos, ao passo que seu rival mais amargo, lorde Stannis, jaz derrotado e enfeitiçado pelas promessas da Mulher Vermelha.<br>O jovem Robb, da Casa Stark, ainda comanda o Norte, contudo, e planeja sua batalha contra os Lannister, mesmo que sua irmã seja refém deles em Porto Real. Enquanto isso, Daenerys Targaryen atravessa um continente deixando um rastro de sangue a caminho de Westeros, levando consigo os três únicos dragões existentes em todo o mundo.<br>Enquanto forças opostas avançam para uma gigantesca batalha final, um exército de selvagens chega dos confins da civilização. Em seu rastro vem uma horda de terríveis criaturas místicas – os Outros: um batalhão de mortos-vivos cujos corpos são imparáveis.</p>', 'Suma', 832, '2019-09-01', '2019-11-01', 'As Crônicas de Gelo e Fogo', ' volume 3', 'tormedalivro3.jpg', '2020-07-14 20:10:25', '2020-07-14 20:10:25'),
(10, 'O Festim dos Corvos', 'George R. R. Martin ', '<p>Edição comemorativa. Novo formato 16x23cm e nova capa, criada pelo ilustrador francês Marc Simonetti.De um dos grandes mestres da fantasia surge um épico magistral, poderoso como você jamais viu. Em O festim dos corvos, o quarto livro da aclamada série As crônicas de gelo e fogo, George R. R. Martin continua a narrativa das épicas aventuras nos Sete Reinos, onde muitos perigos e disputas ainda estão por acontecer. Além dos combates que se estendem por todos os lados, a ameaça agora também chega pelo céu! Dando continuidade à saga mais ambiciosa e imaginativa desde O senhor dos anéis, As crônicas de gelo e fogo prosseguem após o violento triunfo dos traidores. Enquanto os senhores do Norte lutam incessantemente uns contra os outros e os Homens de Ferro estão prestes a emergir como uma força implacável, a rainha regente Cersei tenta manter intacta a força dos leões em Porto Real. Os jovens lobos, sedentos por vingança, estão dispersos pela terra, cada um envolvido à sua maneira no perigoso jogo dos tronos. Arya abandonou Westeros rumo a Bravos, Bran desapareceu na vastidão enigmática para além da Muralha, Sansa está nas mãos do ambicioso e maquiavélico Mindinho, Jon Snow foi proclamado comandante da Muralha, mas tem que enfrentar a vontade férrea do rei Stannis. No meio de toda a intriga, do outro lado do mar começam a surgir histórias sobre dragões e fogo. Quando os habitantes das Ilhas de Ferro se reúnem em Assembleia para escolher seu novo Rei, não é apenas o destino dessas ilhas que está em jogo. O novo rei tem como objetivo declarado conquistar Westeros. E seu povo parece acreditar nele. Mas conseguirá esse rei cumprir seu objetivo? Em Porto Real, Cersei enreda-se cada vez mais nas teias da corte. Desprovida do apoio da família e cercada por um conselho que ela mesma considera incapaz, precisa lidar ainda com a ameaçadora presença de uma nova corrente militante da Fé. Como se desvencilhará de tal enredo? A guerra está prestes a terminar, mas as terras fluviais continuam assoladas por bandos de salteadores. Apesar da morte do Jovem Lobo, Correrrio ainda resiste ao poderio dos Lannister, e Jaime parte para conquistar o baluarte dos Tully. O mesmo Jaime que jurara solenemente a Catelyn Stark não voltar a pegar em armas contra os Tully ou os Stark. Mas todos sabem que o Regicida é um homem sem honra. Ou será que estão todos errados?</p>', 'LeYa', 608, '2019-05-01', '2019-06-14', 'As Crônicas de Gelo e Fogo ', 'Livro 4', 'festimdoscorvos.jpg', '2020-07-14 20:14:54', '2020-07-14 20:14:54'),
(11, 'A Torre Partida', 'J. Barton Mitchell', '<p>Nesse segundo volume da Saga da Terra Conquistada, Mira, Holt, Zoey e Max embarcam numa jornada épica em busca da Torre Partida - um marco famoso e sombrio no meio do cenário mais perigoso do mundo: as Terras Estranhas. Os poderes de Zoey despertam, mas quem ela é continua sendo um mistério. Tudo o que ela sabe é que precisa chegar à Torre Partida. Os alienígenas, chamados pelos sobreviventes de Confederados, perseguem Zoey, e entre eles um novo grupo cujas intenções parecem diferir das dos demais. Para tornar tudo pior, o Bando - grupo que persegue Holt - também está nas Terras Estranhas, liderado por uma bela e ameaçadora pirata chamada Ravan. Assim como o primeiro amor de Mira, Benjamin Aubertine, cuja ambição desmedida para chegar à misteriosa Torre pode levar todos à morte. E há também as próprias Terras Estranhas, que inexplicavelmente começam a se expandir, tornando-se ainda mais poderosas e mortais. De alguma forma, tudo parece ligado à Zoey, e quanto mais perto da Torre mais enfraquecida ela parece ficar.</p>', 'Jangada', 472, '2020-02-03', '2020-03-31', 'Saga Da Terra Conquistada', ' Volume 2', 'torrepartida.jpg', '2020-07-15 13:24:01', '2020-07-15 13:24:01'),
(12, 'Vale Das Chamas ', ' J. Barton Mitchell', '<p>Vale das Chamas é o desfecho eletrizante e surpreendente da Saga da Terra Conquistada. Agora, a Torre Partida, o mais famoso marco das Terras Estranhas, não existe mais. Zoe foi sequestrada pelos Confederados e Holt Hawkins e Mira Toombs tentam unir os últimos sobreviventes na luta contra os invasores. Mira sai em busca de Zoey, ao mesmo tempo em que tenta reunir uma frágil coalização de Mercadores do Vento, guerreiros Hélices Brancas e uma facção rebelde dos Confederados, um grupo heterogêneo em que a desconfiança impera. Enquanto isso, Holt viaja com Ravan e Avril, de volta ao lugar para onde jurou que jamais voltaria: o Fausto, a cidade desértica e perigosa do Bando. Ele vai para lá para resolver questões do passado com Tiberius e convencê-lo a lutar contra os Confederados. Tiberius, porém, tem seus próprios problemas para resolver. O Bando vive uma verdadeira guerra civil. Rebeldes tomam uma parte da cidade. Se Holt quer a ajuda do Bando, em troca ele talvez tenha que se aliar ao seu pior inimigo.</p>', 'Jangada', 496, '2020-04-01', '2020-05-27', 'Saga Da Terra Conquistada', 'Vol 3', 'valedaschamas.jpg', '2020-07-15 13:25:50', '2020-07-15 13:25:50'),
(13, 'Cidade da Meia-Noite', ' J. Barton Mitchell ', '<p>A Terra é conquistada por uma raça alienígena. A população adulta da Terra desaparece de vista, mas as crianças e os adolescentes são imunes aos efeitos de sua poderosa arma sônica. Enquanto isso, Holt Hawkins, um caçador de recompensas, tem como alvo Mira Toombs. Ele captura sua presa, mas a forte atração que surge entre os dois não é algo com que ele contasse. Eles ficam acampados próximos de onde ocorre a queda de uma nave alienígena, a qual a única sobrevivente é uma garotinha que não se lembra de mais nada a não ser do próprio nome: Zoey. Logo eles descobrem que todo o exército alienígena está à procura de Zoey. O que ela tem de tão especial? Esta fascinante história pós-apocalíptica, leva você a uma aventura repleta de criaturas assustadoras, tecnomagia e uma ação vertiginosa de tirar o fôlego.</p>', 'Jangada', 448, '2016-10-11', '2016-12-13', 'Saga da Terra Conquistada', 'Volume 1', 'cidadedameianoite.jpg', '2020-07-15 13:36:47', '2020-07-15 13:36:47'),
(14, 'O CAVALEIRO DOS SETE REINOS', 'GEORGE R.R. MARTIN', '<p>Duzentos anos após a Conquista, a dinastia Targaryen vive seu auge. Os Sete Reinos de Westeros atravessam um tempo de relativa paz, nos últimos anos do reinado do Bom Rei Daeron.É neste cenário que Dunk, um menino pobre da Baixada das Pulgas, tem uma chance única: deixar a vida miserável em Porto Real para se tornar escudeiro de um cavaleiro andante. Quando adulto, o cavaleiro morre e Dunk decide tomar seu lugar e fazer fama no torneio de Campina de Vaufreixo.É quando conhece Egg, um menino de dez anos, cabeça totalmente raspada, que é muito mais do que aparenta ser. Dunk aceita Egg como seu escudeiro e, juntos, viajam por Westeros em busca de trabalho e aventuras. Uma grande amizade nasce entre eles uma amizade pela vida toda, mesmo quando, anos mais tarde, os dois personagens assumem papéis centrais na estrutura de poder dos Sete Reinos.As aventuras de Dunk e Egg trazem para os fãs de As Crônicas de Gelo e Fogo a oportunidade única de vivenciar outro momento da história de Westeros, de conhecer e analisar fatos que teriam desdobramentos noventa anos depois, na guerra dos tronos.</p>', 'Leya', 400, '2016-01-01', '2016-03-03', '', '', '0715134739-cavaleiros7reinos.jpg', '2020-07-15 13:45:21', '2020-07-15 13:47:39'),
(15, 'A morte da luz ', 'GEORGE R.R. MARTIN', '<p>Primeiro livro escrito por George R. R. Martin, autor da renomada série As crônicas de gelo e fogo e premiado com os principais prêmios do mundo de fantasia e ficção científica. Desde essa primeira história o autor já mostra o que o tornaria mundialmente famoso, seus personagens que não são nem vilões, nem heróis, mas seres complexos como todos nós. Worlorn não é o planeta que Dirk t ́Larien imaginava, e Gwen Delvano não é mais a mulher que conhecera. Ela está ligada a outro homem e a esse planeta moribundo preso no crepúsculo, seguindo em direção à noite sem fim. Em meio à paisagem desoladora, há um violento choque de culturas, no qual não há códigos ou honra e uma batalha se espalhará rapidamente. Sobre o autor: George R.R. Martin trabalhou dez anos em Hollywood como escritor e produtor de diversas séries e filmes de grande sucesso. Autor de diversos best-sellers nos EUA e na Europa, foi em meados dos anos 1990 que Martin deu início a sua mais importante obra: As crônicas de gelo e fogo, a saga de fantasia mais vendida dos últimos anos, vencedora de diversos prêmios, que ganhou a premiada adaptaçãoGame of Thrones pela HBO e também chegou aos</p>', 'Leya', 336, '2016-03-04', '2016-04-02', '', '', 'mortedaluz.jpg', '2020-07-15 13:51:59', '2020-07-15 13:51:59'),
(16, 'A revolta de Atlas ', 'Ayn Rand', '<p>Considerado o livro mais influente nos Estados Unidos depois da Bíblia, segundo a Biblioteca do Congresso americano, <i>A revolta de Atlas</i> é um romance monumental. A história se passa numa época imprecisa, quando as forças políticas de esquerda estão no poder. Último baluarte do que ainda resta do capitalismo num mundo infestado de repúblicas populares, os Estados Unidos estão em decadência e sua economia caminha para o colapso.</p><p>Nesse cenário desolador em que a intervenção estatal se sobrepõe a qualquer iniciativa privada de reerguer a economia, os principais líderes da indústria, do empresariado, das ciências e das artes começam a sumir sem deixar pistas. Com medidas arbitrárias e leis manipuladas, o Estado logo se apossa de suas propriedades e invenções, mas não é capaz de manter a lucratividade de seus negócios.</p><p>Ayn Rand traça um panorama estarrecedor de uma realidade em que o desaparecimento das mentes criativas põe em xeque toda a existência. Com personagens fascinantes, a autora apresenta os princípios de sua filosofia: a defesa da razão, do individualismo, do livre mercado e da liberdade de expressão, bem como os valores segundo os quais o homem deve viver – a racionalidade, a honestidade, a justiça, a independência, a integridade, a produtividade e o orgulho.</p><p>Best-seller há mais de 50 anos, com mais de 11 milhões de exemplares vendidos no mundo, <i>A revolta de Atlas</i> desafia algumas das crenças mais arraigadas da sociedade atual. Sua mensagem transformadora conquistou uma legião de leitores e fãs: cada indivíduo é responsável por suas ações e por buscar a liberdade e a felicidade como valores supremos.</p>', 'Arqueiro', 350, '2020-05-01', '2020-07-16', 'A revolta de Atlas ', 'Volume Um', 'arevoltaatlas1.jpeg', '2020-07-15 13:56:41', '2020-07-20 19:28:36'),
(17, 'O NADADOR', 'JOAQUIM ZANDER', '<p>Damasco, Síria, início dos anos 1980. Um agente secreto norte-americano abandona a filha recém-nascida em meio a um bombardeio, entregando-a a um destino incerto. A incapacidade de se perdoar o faz fugir do passado, levando-o ao Líbano, ao Afeganistão, ao Iraque – a qualquer lugar onde o perigo e a tensão o permitam esquecer seu erro.</p><p>Klara Walldéen foi criada pelos avós em uma ilha remota na Suécia. Assessora em início de carreira no Parlamento Europeu, em Bruxelas, ainda está aprendendo a navegar pelo ardiloso mundo da política quando acessa informações que não deveria, e se torna alvo de uma perigosa perseguição pela Europa. Apenas o ex-agente secreto poderá salvá-la. Mas, para isso, os dois precisarão revelar quem são. E o tempo está se esgotandoAlternando habilmente entre passado e presente, entre Suécia, Síria e Estados Unidos, Joakim Zander tece uma rede de intrigas e suspense em um estilo sofisticado e descritivo que transformou <i>O nadador </i>em um estrondoso sucesso.</p>', 'Intrínseca', 320, '2019-12-11', '2020-01-09', '', '', 'nadador.jpg', '2020-07-15 14:09:33', '2020-07-15 14:09:33'),
(18, 'DEUSES AMERICANOS', 'NEIL GAIMAN', '<p>Obra-prima de Neil Gaiman, <i>Deuses americanos </i>é relançado pela Intrínseca com conteúdo extra, em Edição Preferida do Autor.<i>Deuses americanos </i>é, acima de tudo, um livro estranho. E foi essa estranheza que tornou o romance de Neil Gaiman, publicado pela primeira vez em 2001, um clássico imediato. Nesta nova edição, preferida do autor, o leitor encontrará capítulos revistos e ampliados, artigos, uma entrevista com Gaiman e um inspirado texto de introdução.A saga de Deuses americanos é contada ao longo da jornada de Shadow Moon, um ex-presidiário de trinta e poucos anos que acabou de ser libertado e cujo único objetivo é voltar para casa e para a esposa, Laura. Os planos de Shadow se transformam em poeira quando ele descobre que Laura morreu em um acidente de carro. Sem lar, sem emprego e sem rumo, ele conhece Wednesday, um homem de olhar enigmático que está sempre com um sorriso no rosto, embora pareça nunca achar graça de nada.Depois de apostas, brigas e um pouco de hidromel, Shadow aceita trabalhar para Wednesday e embarca em uma viagem tumultuada e reveladora por cidades inusitadas dos Estados Unidos, um país tão estranho para Shadow quanto para Gaiman. É nesses encontros e desencontros que o protagonista se depara com os deuses — os antigos (que chegaram ao Novo Mundo junto dos imigrantes) e os modernos (o dinheiro, a televisão, a tecnologia, as drogas) —, que estão se preparando para uma guerra que ninguém viu, mas que já começou. O motivo? O poder de não ser esquecidoO que Gaiman constrói em Deuses americanos é um amálgama de múltiplas referências, uma mistura de road trip, fantasia e mistério — um exemplo máximo da versatilidade e da prosa lúdica e ao mesmo tempo cortante de Neil Gaiman, que, ao falar sobre deuses, fala sobre todos nós.</p>', 'Intrínseca', 576, '2019-05-15', '2019-07-20', '', '', 'deusesamericanos.jpg', '2020-07-15 15:50:33', '2020-07-15 15:50:33'),
(20, 'ABHACKY', 'MARIO PAIVA', '<p>Abhacky é uma aventura clássica, que conta a história de dois irmãos que vivem em uma cidade pacificada. Eles, sedentos por aventura, acabam infiltrados em uma expedição do exército. Daí pra frente muitas coisas estranhas começam a acontecer e Valentim e Senty descobrem que não são apenas humanos comuns.<br><strong>Valentim</strong><br>Um jovem pobre em uma cidade rica com um sonho, se tornar parte do exército de Abhacky. Sempre curioso vai acabar se colocando em perigos mortais junto com seu irmão Senty.<br><strong>Senty</strong><br>Faz de tudo para proteger seu irmão caçula, até mesmo colocar sua própria vida em risco. Senty passará por provações terríveis que questionarão até mesmo sua identidade.<br><strong>Lesath</strong><br>General dos elfos Filhos da Lua, Lesath é um dos seres milenares que habitam a Ilha. Dono de poderes extraordinários o elfo fará amigos humanos e se surpreenderá com a força dos seres inferiores.<br><strong>Alshain</strong><br>Obrigada a cavalgar lado a lado com seu inimigo de séculos atrás, a general dos Filhos do Sol carrega uma ferida profunda em seu corpo e sua alma. A elfa clama por vingança.<br><strong>Mellen</strong><br>Quando seu pai é nomeado Rei, Mel se vê destinada a uma vida de afazeres tediosos e escolhas difíceis. Todavia o reino de Abhacky passará por suas maiores tribulações dos últimos milênios e a princesa será mais importante do que imagina.</p>', 'Letras e Versos', 247, '2015-03-15', '2015-04-28', '', '', 'abrackum.jpg', '2020-07-15 16:00:05', '2020-07-15 16:00:05'),
(21, 'HERDEIROS DE ATLÂNTIDA', 'EDUARDO SPOHR', '<p>Autor do bestseller A Batalha do Apocalipse, o carioca Eduardo Spohr lança seu aguardado segundo romance Filhos do Éden: Herdeiros de Atlântida. Com mais de 145 mil exemplares de seu livro de estreia vendidos, o autor comprouve-se um fenômeno editorial por ter sido o único brasileiro presente por vários meses nas listas de mais vendidos do gênero ficção em 2010, revelando a força de consumo cultural de um segmento de jovens cada vez maior, comumente denominados nerds. Seu novo romance, um fascinante thriller de fantasia é o primeiro volume de uma saga que mistura História, romance e mitologia. Em meio a uma guerra no céu entre o arcanjo Miguel e os exércitos rebeldes do arcanjo Gabriel, dois anjos são enviados à Terra para encontrar Kaira, líder dos rebeldes há anos desaparecida. Vivendo no plano físico, a brava jovem luta para recuperar sua memória. Para encontrá-la os anjos vão contar ainda com ajuda de Denyel, um querubim exilado, que trabalhara como assassino das legiões inimigas, mas que hoje, solitário e desonrado, procura ser incorporado às fileiras rebeldes. Em paralelo, o leitor acompanha um terceiro personagem, conhecido como Primeiro Anjo, o líder dos sentinelas – poderosos agentes designados por Deus para, num passado remoto, instruir e proteger as primeiras tribos humanas. Punidos por se recusarem a tomar parte nas catástrofes antigas, os sentinelas agora buscam vingança.</p>', 'Verus', 476, '2015-02-01', '2015-03-11', 'FILHOS DO ÉDEN ', 'Volume um', 'herdeirosatlantita.jpg', '2020-07-15 16:02:55', '2020-07-15 16:02:55'),
(22, 'A Espada do Verão', 'Rick Riordan ', '<p>A vida de Magnus Chase nunca foi fácil. Desde a morte da mãe em um acidente misterioso, ele tem vivido nas ruas de Boston, usando de muito jogo de cintura para sobreviver e ficar fora das vistas de policiais e assistentes sociais. Até que um dia ele reencontra tio Randolph – um homem que ele mal conhece e de quem a mãe o mandara manter distância. Randolph é perigoso, mas revela um segredo improvável: Magnus é filho de um deus nórdico.As lendas vikings são reais. Os deuses de Asgard estão se preparando para a guerra. Trolls, gigantes e outros monstros horripilantes estão se unindo para o Ragnarök, o Juízo Final. Para impedir o fim do mundo Magnus deve empreender uma importante jornada até encontrar uma poderosa arma perdida há mais de mil anos.Quando um ataque de gigantes do fogo o força a escolher entre a própria segurança e a vida de centenas de inocentes, Magnus toma uma decisão fatal.</p><p>Às vezes é necessário morrer para começar uma nova vida...Com personagens já conhecidos do público, como Annabeth Chase, prima de Magnus, e deuses como Thor e Loki, Rick nos apresenta mais uma aventura surpreendente, repleta de ação e humor.</p>', 'Intrínseca', 448, '2019-08-15', '2019-10-09', 'Série Magnus Chase e os deuses de Asgard', 'Volume Um', 'espadaverao.jpg', '2020-07-15 16:14:37', '2020-07-15 20:28:40'),
(24, 'A DANÇA DOS DRAGÕES', 'GEORGE R.R. MARTIN', '<p><i><strong>A dança dos dragões</strong></i><strong> é o quinto livro da saga As Crônicas de Gelo e Fogo, dando continuidade à trama de </strong><i><strong>O festim dos corvos</strong></i><strong> e trazendo personagens novos e conhecidos em disputas acirradas por um reino à beira da ruína.</strong></p><p>É outono em Westeros, e a Guerra dos Cinco Reis parece finalmente entrar na reta final. Stannis Baratheon se instala no Norte e jura conquistar o apoio dos senhores da região para continuar sua luta pelo trono, embora seja atrapalhado pela invasão de homens de ferro em grande parte da costa.<br>Na Muralha, Jon Snow é eleito o 998º Senhor Comandante da Patrulha da Noite, mas inimigos o cercam de todos os lados, tanto na Patrulha quanto para além da Muralha. Enquanto isso, Tyrion Lannister atravessa o Mar Estreito rumo a Pentos, sem objetivos definidos, sem aliados e cada vez mais sem opções.<br>Na Baía dos Escravos, Daenerys Targaryen conquista a cidade de Meereen e decide ficar e governá-la, praticando as habilidades de liderança que serão tão necessárias quando partir para Westeros. No entanto, sua presença já foi notada por muitos senhores nos Sete Reinos, e das Ilhas de Ferro e de Dorne, de Vilavelha e das Cidades Livres, emissários estão a caminho, querendo se unir à sua causa e, se possível, usá-la para os próprios fins.<br>Em todos os cantos conflitos ganham vida e traições vêm daqueles mais próximos. Guerreiros, selvagens, nobres e escravos – todos têm pela frente um longo inverno, enquanto destino, ambição e política ditam o ritmo da dança mais perigosa de todas.</p>', 'Leya', 824, '2013-07-15', '2013-09-11', 'AS CRÔNICAS DE GELO E FOGO', 'Volume 5', 'dancadodragoes.jpg', '2020-07-15 20:43:04', '2020-08-03 19:01:34'),
(25, 'A Revolta de Atlas', 'Ayn Rand', '<p>Na mitologia grega, o titã Atlas recebe de Zeus o castigo eterno de carregar sobre os ombros o peso dos céus. Neste romance de Ayn Rand, os pensadores, os inovadores e os indivíduos criativos suportam o peso de um mundo decadente enquanto são explorados por parasitas que não reconhecem o valor do trabalho e da produtividade e que se valem da corrupção, da mediocridade e da burocracia para impedir o progresso individual e da sociedade. Mas até quando irão aguentar? A Revolta de Atlas é uma revolução intelectual com uma trama brilhante e um suspense irresistível. É um bestseller profético que, 62 anos depois da sua publicação, continua a vender mais de meio milhão de exemplares anualmente, em parte porque explica e prevê a crise que o mundo enfrenta hoje.</p>', 'Arqueiro', 381, '2020-07-20', NULL, '', 'Volume 2', 'arevoltaatlas1.jpeg', '2020-07-20 19:30:57', '2020-07-20 19:30:57'),
(26, 'Ravenspur', ' Conn Iggulden ', '<p>Batalhas sangrentas e jogos de intriga marcam o fim épico da Guerra das Rosas, narrado com maestria por Conn Iggulden.O rei yorkista Eduardo é expulso da Inglaterra enquanto sua esposa e seus filhos são obrigados a procurar refúgio para se proteger da Casa de Lancaster. Porém, a raiva e a humilhação levam Eduardo de volta à grandeza. Ele aporta em Ravenspur com o irmão e um pequeno exército. Ainda que esteja cercado de inimigos, ainda que os portões de todas as cidades estejam fechados à sua passagem, Eduardo está de volta e só vai parar quando recuperar sua coroa.No entanto, nem Eduardo nem Ricardo percebem que o verdadeiro inimigo de York ainda não se revelou e que, apesar de suas vitórias, a causa de Lancaster vive. Longe deles, Henrique Tudor é agora um homem adulto. Ele é o Dragão Vermelho, o Homem do Destino, que busca acabar com a Guerra das Rosas. E sua reivindicação o levará a uma batalha sangrenta em Bosworth Field.Haverá silêncio e rainhas de luto. Haverá sacrifícios e traições terríveis. Príncipes serão mortos; linhagens encontrarão seu fim. A guerra acabará, e uma nova casa real se erguerá acima de todas as outras no capítulo final da Guerra das Rosas.“Um dos melhores autores de romances históricos.” Daily Express</p>', 'Record', 476, '2020-08-03', NULL, 'Guerra das rosas', 'Volume 4 ', 'ravenspur.jpg', '2020-08-03 10:45:06', '2020-08-03 10:45:06'),
(27, 'A garota marcada para morrer', 'David Lagercrantz', '<p>Um homem é encontrado morto num parque no centro de Estocolmo. Parece se tratar apenas da morte trágica de um sem-teto, mas, apesar de ter características muito distintivas, ninguém é capaz de identificá-lo. A médica legista Fredrika Nyman suspeita que haja algo de errado e contacta Mikael Blomkvist.<br>O jornalista se interessa pelo caso, ainda que com relutância. O mendigo foi ouvido muitas vezes murmurando coisas sobre Johannes Forsell, o ministro da defesa da Suécia. Haveria uma conexão genuína entre eles?<br>Blomkvist precisa da ajuda de Lisbeth Salander. Mas depois do funeral de Holer Palmgren, ela saiu do país sem deixar qualquer rastro. O paradeiro que ninguém conhece é Moscou, onde ela está para acertar contas com sua irmã Camilla de uma vez por todas.<br>No sexto e último volume da série Millennium, criada por Stieg Larsson e assumida por David Lagercrantz a partir do quarto livro, estão interligados escândalos políticos e jogos de poder internacionais com tecnologia de DNA, expedições nos Himalaias e fábricas de trolls que espalham ódio e notícias falsas.</p>', 'Companhia das Letras', 336, '2020-08-03', NULL, 'Serie Millenium', 'Volume 6 ', 'garatamarcadamorrer.jpeg', '2020-08-03 14:47:50', '2020-08-03 17:09:55');

-- --------------------------------------------------------

--
-- Estrutura para tabela `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20190402225811, 'CreateLivros', '2019-04-03 04:46:30', '2019-04-03 04:46:31', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(220) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `imagem` varchar(220) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `imagem`, `created`, `modified`) VALUES
(2, 'Leandro Santos', 'lds.leosantos@gmail.com', 'lds.leosantos@gmail.com', '$2y$10$b6O1oYmjyT3hNYJoTVuIJelf7TcHKFvydfpyAEd1bpdFz.CHMOPeS', '0803165915-perfiluser.jpeg', '2020-07-09 11:35:18', '2020-08-03 17:07:56'),
(3, 'Greice Anne', 'greiceanne@email.com', 'greiceanne@email.com', '$2y$10$LqxaZapItihAp6c2eruLVOmLx3zBRnS4FCrER7kpVkPD11b3ed2ce', NULL, '2020-07-09 12:43:59', '2020-07-09 12:43:59');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_img_prod` (`livro_id`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `fk_livro_id` FOREIGN KEY (`livro_id`) REFERENCES `livros` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
