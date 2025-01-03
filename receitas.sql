-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           11.5.2-MariaDB - mariadb.org binary distribution
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- A despejar estrutura para tabela grupo202.receitas
DROP TABLE IF EXISTS `receitas`;
CREATE TABLE IF NOT EXISTS `receitas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `imagem` varchar(128) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `ingredientes` text DEFAULT NULL,
  `temp_prep` int(11) DEFAULT NULL,
  `preparacao` longtext DEFAULT NULL,
  `dificuldade` varchar(50) DEFAULT NULL,
  `n_pessoas` int(11) DEFAULT NULL,
  `tipo_receita` varchar(50) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- A despejar dados para tabela grupo202.receitas: ~20 rows (aproximadamente)
INSERT INTO `receitas` (`id`, `imagem`, `titulo`, `ingredientes`, `temp_prep`, `preparacao`, `dificuldade`, `n_pessoas`, `tipo_receita`, `descricao`) VALUES
	(1, 'almondegas-com-quinoa-salada-e-molho-de-iogurte.jpg', 'Almôndegas com quinoa', 'carne de vitela picada  500 g,\r\ncurcuma  1 c. de sopa,\r\npimenta 5 bagas  1 q.b.,\r\nalho em pó       1,\r\nsalsa   1 c. de chá,\r\nhortelã fresca 1 c. de chá,\r\nsementes de sésamo  1 c. de sopa,\r\ncebola roxa 1 c. de sopa,\r\nazeite virgem extra  1 c. de sopa', 30, 'Passo 1: Misture a carne com cúrcuma, pimenta moída, alho em pó, salsa, hortelã picada, sementes de sésamo e cebola picada. Faça 24 bolas e reserve.;  \r\nPasso 2: Para o molho, misture todos os ingredientes no robot de cozinha até obter um molho cremoso e reserve.;  \r\nPasso 3: Rale o pepino e a couve, junte hortelã, manjericão, cebola em fatias finas e tempere com pimenta, azeite e vinagre.;  \r\nPasso 4: Aqueça o azeite numa frigideira e cozinhe as almôndegas por 10 minutos ou até dourarem.;  \r\nPasso 5: Lave a quinoa, coloque-a num tacho com água, alho, casca de limão e folhas de manjericão.;  \r\nPasso 6: Quando ferver, adicione a quinoa, cozinhe em lume médio-alto por 5 minutos, depois em lume brando por mais 10 minutos.;  \r\nPasso 7: Desligue o lume, tape e deixe repousar por 5 minutos, solte a quinoa e retire a casca de limão e o alho.;  \r\nPasso 8: Sirva as almôndegas com a salada, o molho e a quinoa.', 'Fácil', 4, 'carne', 'Estas almôndegas com quinoa cativam pela sua combinação da carne de vitela com os benefícios nutricionais da quinoa. Uma escolha saudável e saborosa de fácil preparação.'),
	(2, 'carne-de-porco-jardineira.jpg', 'Carne de porco à jardineira', 'rojões de porco 400 g,\r\npimentão-doce   1 c. de sobremesa,\r\nsal             1 ½ c. de chá,\r\npimenta         q.b.,\r\nazeite virgem extra Pingo Doce   2 unid.,\r\ncebola cortada em meias-luas finas 1 unid. (100 g),\r\nalho picado    2 dente,\r\njardineira de vegetais congelada    1 emb. (750 g),\r\nvinho branco  100 ml,\r\npolpa de tomate com cebola e alho    ½ frasco (250 ml),\r\nbatata-doce descascada e cortada em cubos     400 g,\r\ncoentros frescos picados q.b.', 45, 'Passo 1: Tempere os rojões com o pimentão, meia colher de chá de sal e pimenta a gosto.;\r\nPasso 2: Aloure a carne num tacho com azeite quente em lume forte, reduza o lume, adicione cebola, alho, jardineira de vegetais, regue com vinho branco, tape e deixe cozinhar por 10 minutos.;\r\nPasso 3: Junte a polpa de tomate e a batata-doce, tempere com o restante sal e cozinhe tapado por mais 25 minutos.;\r\nPasso 4: Salpique com coentros, deixe arrefecer, coloque num recipiente hermético e guarde no frigorífico.', 'Fácil', 4, 'carne', 'Procura uma refeição fácil e saudável para o dia a dia? Prepare esta deliciosa receita de carne de porco à jardineira.'),
	(3, 'hamburguer-de-peru-com-ananas.jpg', 'Hambúrguer de peru com ananás', 'curgete pequena 1 unid. (200 g),\r\ncarne picada de peru    400 g,\r\novo M 1 unid.,\r\nfarinha 2 c. de sopa,\r\ncoentros frescos    1 c. de sopa,\r\nalho em pó          1 c. de chá,\r\ncominhos em pó      1 c. de café,\r\nsal      2 c. de chá,\r\npimenta  1 q.b.,\r\ncebola picada  100 g,\r\nalho-francês em rodelas  100 g,\r\nazeite virgem extra  2 c. de sopa,\r\ncenoura ralada       150 g,\r\narroz selvagem       200 g,\r\nágua  500 ml,\r\nananás dos Açores (sem casca)    200 g,\r\nespinafres em folha    1 emb. (170 g),\r\namendoim em pó Go Active 2 c. de sobremesa', 45, 'Passo 1: Lave as batatas e coza-as em água com uma colher de sobremesa de sal até estarem macias.;\r\nPasso 2: Aloure a cebola picada no azeite bem quente, junte a carne e deixe saltear, mexendo frequentemente até perder o tom rosado.;\r\nPasso 3: Lave o tomate, limpe-o de sementes, pique-o em pedaços e junte-o à carne.;\r\nPasso 4: Tempere com o restante sal, adicione os orégãos e deixe cozinhar em lume moderado cerca de 10 minutos.;\r\nPasso 5: Escorra as batatas, corte-as ao meio e escave, cuidadosamente, parte da polpa com a ajuda de uma colher de chá.;\r\nPasso 6: Esmague grosseiramente a polpa e adicione-a à carne. Junte os espinafres e misture bem.;\r\nPasso 7: Retire do lume assim que os espinafres estiverem moles e junte o queijo, reservando algum para polvilhar as batatas.;\r\nPasso 8: Pré-aqueça o forno a 180° C, com a função grill ligada.;\r\nPasso 9: Disponha as meias-batatas sobre um tabuleiro de forno e recheie-as com o preparado.;\r\nPasso 10: Polvilhe com o Mozzarella reservado e leve ao forno a gratinar cerca de 10 minutos.', 'Fácil', 4, 'carne', 'Experimente um hambúrguer de peru com ananás. Acompanhe com espinafres e arroz selvagem. Uma refeição saudável, saborosa e rica em proteínas.'),
	(4, 'batatas-recheadas-com-carne.jpeg', 'Batatas recheadas com carne', 'batata para cozer média e arredondada\r\n6 unid.,\r\nsal\r\n1,\r\ncebola picada congelada\r\n50 g,\r\nazeite\r\n1 c. de sopa,\r\ncarne picada\r\n250 g,\r\ntomate maduro\r\n250 g,\r\norégão\r\n1,\r\nespinafre em folha\r\n1 emb.,\r\nqueijo mozzarella ralado\r\n50 g', 60, 'Passo 1: Lave as batatas e coza-as em água com uma colher de sobremesa de sal até estarem macias.;\r\nPasso 2: Aloure a cebola picada no azeite bem quente, junte a carne e deixe saltear, mexendo frequentemente até perder o tom rosado.;\r\nPasso 3: Lave o tomate, limpe-o de sementes, pique-o em pedaços e junte-o à carne.;\r\nPasso 4: Tempere com o restante sal, adicione os orégãos e deixe cozinhar em lume moderado cerca de 10 minutos.;\r\nPasso 5: Escorra as batatas, corte-as ao meio e escave, cuidadosamente, parte da polpa com a ajuda de uma colher de chá.;\r\nPasso 6: Esmague grosseiramente a polpa e adicione-a à carne. Junte os espinafres e misture bem.;\r\nPasso 7: Retire do lume assim que os espinafres estiverem moles e junte o queijo, reservando algum para polvilhar as batatas.;\r\nPasso 8: Pré-aqueça o forno a 180° C, com a função grill ligada.;\r\nPasso 9: Disponha as meias-batatas sobre um tabuleiro de forno e recheie-as com o preparado.;\r\nPasso 10: Polvilhe com o Mozzarella reservado e leve ao forno a gratinar cerca de 10 minutos.', 'Média', 6, 'carne', 'Uma receita que aquece a alma, perfeita para um jantar delicioso em família ou com amigos. Ideal para quem procura conforto e sabor num só prato, com uma combinação irresistível de texturas.'),
	(5, 'omelete-de-frango.jpg', 'Omelete de frango', 'ovo M   4 unid.,\r\nleite evaporado 20 ml,\r\nsal   1 c. de chá,\r\nazeite virgem extra  1 c. de chá,\r\nalface 4 folha,\r\nagrião em folha    50 g,\r\ncoxa de frango assada 2 unid. (250 g),\r\ntomate-cereja  100 g,\r\nmilho cozido   1 emb. (100 g)', 30, 'Passo 1: Bata os ovos dentro de uma tigela. Junte o leite e tempere com sal e misture.;\r\nPasso 2: Unte uma frigideira de crepes com o azeite, aqueça e deite nela parte da mistura de ovo. Espalhe bem até cobrir toda a frigideira. Deixe cozinhar por um minuto ou menos, até obter uma omelete totalmente cozinhada.;\r\nPasso 3: Retire e repita o processo com a restante mistura de ovo.;\r\nPasso 4: Distribua por cima de cada omelete a alface, o agrião, o frango desfi ado, o tomate picado e o milho. Enrole e em seguida corte ao meio.;\r\nPasso 5: Repita com os restantes ingredientes.', 'Fácil', 4, 'carne', 'Uma opção saudável e deliciosa para o lanche dos miúdos! Esta omelete de frango, recheada com tomate, alface e agrião, é perfeita para um snack nutritivo e cheio de sabor. Fácil de preparar e ideal para dar energia às crianças ao longo do dia!'),
	(6, 'polvo-com-broa-crocante.jpg', 'Polvo com broa crocante', 'polvo descongelado      3 kg,\r\ncebola                  100 g,\r\nlouro                   1 folha,\r\nbatatas fritas          500 g,\r\nalho    4 dente,\r\nsal     3 c. de chá,\r\nazeite virgem extra     4 c. de sopa,\r\nbroa de milho 300 g,\r\ncoentros frescos  3 c. de sopa,\r\nespinafre         2 emb. (340 g)', 30, 'Passo 1: Coloque um tacho com água a aquecer. Quando estiver quente, mergulhe o polvo três vezes na água. Em seguida, mergulhe-o dentro da água com a cebola inteira e o louro. Deixe cozinhar por 1 hora em lume brando.;\r\nPasso 2: Cozinhe as batatas no micro-ondas conforme as instruções da embalagem. Retire e coloque-as num tabuleiro de forno. Esmague-as com um copo.;\r\nPasso 3: Pré-aqueça o forno a 190 ºC.;\r\nPasso 4: Disponha ao lado o polvo cortado pelos tentáculos. Polvilhe com metade do alho picado, uma colher de sobremesa de sal e regue com metade do azeite. Leve ao forno por 15 minutos.;\r\nPasso 5: Numa frigideira, aqueça uma colher de sopa de azeite, um dente de alho e a broa esfarelada.;\r\nPasso 6: Cozinhe até a broa estar torrada. Polvilhe com os coentros picados e uma colher de sobremesa de sal. Reserve numa taça.;\r\nPasso 7: Na mesma frigideira, salteie os espinafres com o restante dente de alho e tempere com o restante sal.;\r\nPasso 8: Sirva o polvo com as batatas, os espinafres e a broa torrada, temperados com o restante azeite.', 'Fácil', 4, 'peixe', 'Neste Natal inove os pratos típicos de peixe e prepare um polvo com broa crocante. Preparado em apenas 30 minutos é um prato saudável e saboroso.'),
	(7, 'lasagna-de-sardinha-e-curgete.jpg', 'Lasanha de sardinha e curgete', 'curgete 1 unid. (350 g),\r\nmolho de tomate e manjericão    1 emb. (340 g),\r\nmassa de lasanha fresca      125 g,\r\nsardinha sem pele e sem espinhas em tomate   2 unid. (240 g),\r\nqueijo parmigiano reggiano DOP Iguarias      20 g,\r\nrúcula 1 unid. (70 g),\r\nmanjericão     1 q.b.\r\n', 40, 'Passo 1: Pré-aqueça o forno a 180 graus.;\r\nPasso 2: Lave a curgete e com a ajuda de uma mandolina corte em fatias finas a todo o comprimento.;\r\nPasso 3: Espalhe um pouco de molho de tomate sobre o fundo de um tabuleiro de forno com as medidas das placas de lasanha. Comece por colocar uma placa de massa e por cima as sardinhas de uma das latas, assim como o respetivo molho. Cubra com 1/3 das tiras de curgete.;\r\nPasso 4: Espalhe mais um pouco de molho de tomate sobre a camada de curgete e disponha por cima mais uma placa de massa, as sardinhas e o molho, metade das restantes fatias de curgete e mais um pouco de molho de tomate. Termine com a última placa de massa, cubra com os restantes molho de tomate e tiras de curgete. Polvilhe com o parmesão e leve ao forno durante 30 minutos.;\r\nPasso 5: Sirva com a rúcula e folhas de manjericão.', 'Média', 4, 'peixe', 'Descubra a fusão perfeita entre a clássica lasanha italiana e o sabor autêntico da sardinha portuguesa nesta deliciosa lasanha de sardinha e curgete. Uma receita inovadora que surpreende pelo equilíbrio de sabores e pela sua leveza irresistível.\r\n\r\n'),
	(8, 'lombos-de-perca-com-pure-rosa-2.jpg', 'Lombos de perca com puré de beterraba', 'lombos de bacalhau congelados   3 unid.,\r\nsal    2 c. de chá,\r\nalho em pó  1 c. de chá,\r\npaprika 1 c. de chá,\r\npimenta de moinho  1 q.b.,\r\nlimão sumo 1 unid.,\r\npuré de batata congelado 1 unid. (1kg),\r\nleite magro    200 ml,\r\nbeterraba cozida   150 g,\r\nbrócolos raminhos  300 g,\r\nazeite virgem extra    3 c. de sopa,\r\nsal fresca    2 c. de sopa', 30, 'Passo 1: Corte cada porção de perca ao meio e tempere com o sal, o alho em pó, a paprika e pimenta moída no momento. Regue com o sumo de meio limão e reserve.;\r\nPasso 2: Leve ao lume um tacho com o puré de batata e com o leite quente.;\r\nPasso 3: Entretanto, corte a beterraba em pedaços, esmague bem com um garfo e junte-a ao puré de batata. Misture e deixe cozinhar até o puré estar quente, mexendo ocasionalmente.;\r\nPasso 4: Passe os raminhos de brócolos por água, coloque-os numa taça de vidro, tape e leve ao micro-ondas durante cerca de 7 minutos na potência máxima.;\r\nPasso 5: Ao mesmo tempo, aqueça metade do azeite numa frigideira larga antiaderente, introduza nela o peixe e cozinhe durante cerca de 4 minutos de cada lado, sobre lume médio a forte.;\r\nPasso 6: Junte o restante azeite e regue com o sumo do restante limão.;\r\nPasso 7: Acompanhe com o puré polvilhado com a salsa picada e com os brócolos cozidos.', 'Difícil', 4, 'peixe', 'Dê mais cor à sua alimentação com esta receita de lombos de perca com puré de beterraba. Uma receita saudável de peixe branco finalizada em apenas 30 minutos.'),
	(9, 'salada-russa.jpg', 'Salada russa', 'batata  5 unid.,\r\ncenoura 1 unid.,\r\novo M   2 unid.,\r\nervilhas congeladas  300 g,\r\nfeijão redondo      250 g,\r\nmaionese            4 c. de sopa,\r\npimenta             1 q.b.,\r\nsal                 1 c. de chá,\r\ncebolinho           1 q.b', 20, 'Passo 1: Corte as batatas e as cenouras em cubos de um centímetro.;\r\nPasso 2: Corte o feijão-verde e retire as ervilhas do congelador.;\r\nPasso 3: Coza os ovos 10 minutos em água fervente com uma colher de chá de sal.;\r\nPasso 4: Use dois tachos com água fervente e tempere com sal de forma moderada. Deixe as cenouras ferver por alguns minutos e adicione as batatas. No outro tacho ferva as ervilhas e o feijão-verde. Deixe cozer durante 10 minutos.;\r\nPasso 5: Escorra os vegetais e deixe arrefecer. Corte os ovos em pedaços pequenos e reserve uma metade para decorar.;\r\nPasso 6: Numa taça larga misture os ingredientes e adicione a maionese.;\r\nPasso 7: Envolva lentamente, tempere com sal e pimenta com moderação.;\r\nPasso 8: Coloque película aderente e reserve no frigorífico.;\r\nPasso 9: Depois de tirar do frigorífico aguarde alguns minutos antes de servir. Decore com cebolinho e ovo.', 'Fácil', 2, 'salada', 'Prática e fácil de preparar, a salada russa é uma mistura de vegetais coloridos, envolvidos em maionese, e ovos de gema firme e macia. Veja como fazer salada fresca, leve e perfeita.'),
	(10, 'pesto-de-iogurte-hortela-e-manjericao-617.jpg', 'Massa com pesto de iogurte', 'miolo de noz    70 g,\r\niogurte natural 200 g,\r\nfolhas de manjericão 8 folha,\r\nfolhas de hortelã    8 folha,\r\nazeite 1 c. de sopa,\r\nsal    1 c. de café,\r\nsal    1 c. de chá,\r\npimenta de moinho 1 q.b.,\r\nmassa integral    280 g', 30, 'Passo 1: Coloque o miolo de noz no robot de cozinha, ou no copo do liquidificador, junte-lhe o iogurte, as oito folhas de manjericão e de hortelã, o azeite, a colher de café de sal e um pouco de pimenta e triture até obter uma pasta.;\r\nPasso 2: Leve ao lume uma panela com água temperada com o restante sal e coza a massa até estar al dente.;\r\nPasso 3: Retire duas colheres de sopa da água da cozedura da massa e adicione-a ao molho. Mexa e reserve.;\r\nPasso 4: Escorra a massa, junte-lhe o pesto e envolva.;\r\nPasso 5: Salpique com as folhas de manjericão e hortelã reservadas e sirva.', 'Fácil', 4, 'massa', 'Prepare um refeição de massa integral em apenas 30 minutos, envolvida num pesto de iogurte, com o sabor fresco da hortelã e do manjericão. Simples e muito saboroso!'),
	(11, 'salada-de-bagos-com-camarao.jpg', 'Salada de bagos com camarão', 'massa bagos     140 g,\r\nsal   2 c. de café,\r\nmiolo de camarão  200 g,\r\nalho em pó        1 q.b.,\r\nlimão (sumo e raspa)    100 g,\r\nazeite virgem extra     2 c. de sobremesa,\r\ntomate-cereja 250 g,\r\nazeitona verde em rodelas 1 unid.,\r\nmix de frutos secos       20 g,\r\nhortelã fresca            1 q.b.,\r\ncoentros frescos          1 q.b.,\r\nvinagre de vinho tinto    1 c. de sopa\r\n', 20, 'Passo 1: Cozinhe os bagos em água com metade do sal durante o tempo indicado na embalagem.;\r\nPasso 2: Tempere o miolo de camarão descongelado com o restante sal, alho em pó e sumo de limão.;\r\nPasso 3: Salteie o camarão numa frigideira antiaderente com azeite. Deixe cozinhar até os camarões estarem dourados. Reserve.;\r\nPasso 4: Escorra a massa e coloque numa taça. Adicione raspa de limão, tomate-cereja em metades, as azeitonas, os frutos secos e as ervas picadas.;\r\nPasso 5: Junte o camarão, envolva e tempere com o restante azeite e o vinagre.', 'Fácil', 2, 'salada', 'Uma opção deliciosa e nutritiva para quem procura uma alimentação equilibrada, uma salada fresca e leve, perfeita para qualquer ocasião, que combina sabores simples e saborosos.'),
	(12, 'pasta-de-beterraba.jpg', 'Pasta de beterraba', 'beterraba cozida        200 g (2 unid.),\r\ngrão-de-bico cozido em frasco 540 g (1 unid.),\r\nalho         2 dente,\r\nlimão (sumo) 1 unid.,\r\nazeite virgem extra 2 c. de sopa,\r\nsal    1 c. de chá,\r\ncominhos 1 q.b.,\r\ncoentros frescos  1 q.b.,\r\nhortelã fresca  1 q.b.,\r\ncenoura grande  200 g (1 unid.),\r\npepino  200 g (1 unid.),\r\nmini-pimento  50 g (2 unid.)', 30, 'Passo 1: Deite as beterrabas cortadas em pedaços, o grão escorrido, os dentes de alho e o sumo de limão num robot de cozinha e triture.;\r\nPasso 2: Adicione o azeite, o sal e tempere a gosto com cominhos. Triture novamente.;\r\nPasso 3: Coloque numa taça e decore com os coentros e a hortelã.;\r\nPasso 4: Sirva com a cenoura, o pepino e os minipimentos cortados em palitos.', 'Fácil', 6, 'pates', 'O sabor extremamente forte da beterraba não agrada a todos, mas esta receita de pasta de beterraba é capaz de mudar opiniões. Experimente e comprove por si prórpio.'),
	(13, 'ovos-benedict-legumes-pao-cereais.jpeg', 'Ovos benedict com legumes no pão', 'vegetais grelhados congelados   400 g,\r\novo M    4 unid.,\r\npão de trigo e centeio          400 g,\r\nazeite 2 c. de sopa,\r\nmistura de pimenta em moinho    1 q.b.,\r\nalho em pó 1 q.b.,\r\nflor de sal  1', 30, 'Passo 1: Salteie os legumes numa colher de sopa de azeite e tempere a gosto com pimenta, alho em pó e metade da flor de sal.;\r\nPasso 2: Ponha água a ferver numa frigideira alta. Abra um ovo para dentro de uma taça e coloque-o numa concha de sopa, introduza-a cuidadosamente na água a ferver, mantendo o ovo dentro dela até a clara coagular e obter um ovo escalfado. Reserve-o e repita este processo com os restantes ovos.;\r\nPasso 3: Torre ligeiramente as fatias de pão.;\r\nPasso 4: Divida os legumes salteados pelas fatias de pão, regue com o restante azeite e tempere com a restante flor de sal e pimenta.;\r\nPasso 5: Coloque por cima de cada fatia um ovo escalfado e tempere com pimenta a gosto.', 'Fácil', 4, 'outras', 'Esta versão mais portuguesa de ovos Benedict, com azeite, legumes frescos e pão de cereais, vai transformar os seus pequenos-almoços de fim de semana numa verdadeira experiência gastronómica.'),
	(14, 'tostas-de-abacate-e-ovos-escalfados.jpeg', 'Tostas de abacate e ovos escalfados', 'pão cereais ancestrais  180 g,\r\nazeite      2 c. de sopa,\r\ntomate de rama   200 g,\r\novo S  4 unid.,\r\nsal 1,\r\nsal 1 c. de café,\r\nvinagre  1 c. de sopa,\r\nfolhas de canónigos  50 g,\r\nabacate   200 g,\r\nlimão (sumo)  1 q.b.,\r\nsementes de sésamo  1,\r\npimenta em pó       1 q.b.', 15, 'Passo 1: Abra os pães ao meio, pincele as partes cortadas com metade do azeite e toste-as levemente numa tostadeira.;\r\nPasso 2: Lave o tomate, retire as sementes, corte em cubos pequenos e salteie rapidamente numa frigideira antiaderente com metade do restante azeite.;\r\nPasso 3: Escalfe os ovos em água a ferver temperada com uma colher de sobremesa de sal e o vinagre.;\r\nPasso 4: Assim que as claras estiverem coaguladas, retire-as cuidadosamente com uma escumadeira.;\r\nPasso 5: Distribua as folhas de canónigos pelas torradas e, por cima, disponha os cubos de tomate.;\r\nPasso 6: Reserve, mantendo as torradas quentes.;\r\nPasso 7: Deite o restante azeite na frigideira, deixe aquecer bem e introduza o abacate, limpo e fatiado, e cozinhe-o rapidamente de ambos os lados, virando cuidadosamente as fatias com uma espátula.;\r\nPasso 8: Coloque as fatias de abacate sobre as torradas, regue com umas gotas de sumo de limão e polvilhe com sementes de sésamo.;\r\nPasso 9: Por cima, disponha os ovos escalfados e tempere com pimenta a gosto.;\r\nPasso 10: Sirva de imediato.', 'Fácil', 4, 'tosta', 'Quando pensar em entradas lembre-se desta. Muito fácil de fazer, estas tostas de abacate e ovos escalfados vão surpreender os seus convidados e podem ser servidas em qualquer estação do ano, completando a sua refeição.'),
	(15, 'salame-de-chocolate-com-frutos-secos.jpg', 'Salame de chocolate com frutos secos', 'chocolate preto 200 g,\r\nmanteiga de amendoim 2 c. de sopa,\r\ncreme para barrar de frutos secos com cacau     1 c. de sopa,\r\nbebida à base de arroz Pura Vida  30 ml,\r\nwhey protein cookies and cream    40 g,\r\nmix de frutos secos  200 g,\r\ncacau  3 c. de sopa', 30, 'Passo 1: Coloque o chocolate partido num recipiente que possa ir ao micro-ondas. Junte as manteigas e a bebida vegetal.;\r\nPasso 2: Leve a derreter por cerca de 2 minutos, mexendo sempre que necessário até obter um creme liso.;\r\nPasso 3: Adicione a whey protein, os frutos secos picados e envolva.;\r\nPasso 4: Coloque a mistura anterior sobre uma folha de papel vegetal e molde num formato cilíndrico.;\r\nPasso 5: Leve ao frio por 3 horas, ou até ficar firme.;\r\nPasso 6: Antes de servir, polvilhe com o cacau em pó e corte em fatias.', 'Fácil', 8, 'doce', 'O salame de chocolate com frutos secos combina o sabor do chocolate com os frutos secos. Simples e delicioso, perfeito para qualquer momento.'),
	(16, 'copos-de-iogurte-com-fruta.jpg', 'Iogurte com fruta', 'aveia   50 g,\r\namêndoa com pele        5 unid.,\r\nnoz     3 unid.,\r\nmix de sementes         1 c. de sopa,\r\ncanela 1 q.b.,\r\nmel    1 c. de sopa,\r\nmorango  4 unid. (60 g),\r\nkiwi     1 unid. (100 g),\r\nabacaxi  1 rodela,\r\niogurte natural  2 unid. (125 g),\r\nchocolate preto picado   2', 15, 'Passo 1: Numa frigideira antiaderente, coloque a aveia, as amêndoas, as nozes picadas e as sementes. Deixe que torrem ligeiramente.;\r\nPasso 2: Junte a canela, o mel, aumente o lume e deixe que caramelize.;\r\nPasso 3: Reserve dois morangos e duas fatias de kiwi. Corte a restante fruta em cubos pequenos e distribua pelas taças. Deite por cima o iogurte.;\r\nPasso 4: Sirva decorado com o morango e o kiwi reservados, com chocolate picado e a mistura de aveia preparada.', 'Fácil', 2, 'fruta', 'Prepare iogurte com fruta, uma fusão deliciosa de sabores e benefícios para a saúde, pronto em apenas 15 minutos! Este lanche prático é rico em nutrientes essenciais, incluindo proteínas, probióticos e vitaminas.'),
	(17, 'tarte-de-tres-frutos.jpg', 'Tarte de três frutos', 'farinha sem fermento    225 g,\r\nmanteiga (fria e aos cubos) 125 g + 1 c. de sobremesa,\r\ngema ovo M     1 unid.,\r\nágua fria      2 c. de sopa,\r\npêssego        4 unid. (480 g),\r\nameixa         4 unid. (280 g),\r\nnectarina      4 unid. (240 g),\r\naçúcar amarelo 2 c. de sopa,\r\naçúcar em pó   2 c. de sopa', 90, 'Passo 1: Para a massa, ponha a farinha e os 125g de manteiga num robot de cozinha e misture até obter uma areia grossa.;\r\nPasso 2: Junte a gema e a água fria de forma a obter uma massa homogénea.;\r\nPasso 3: Transfira a massa para uma superfície enfarinhada e amasse até que fique lisa. Envolva em película aderente e leve ao frigorífico por 30 minutos.;\r\nPasso 4: Unte uma forma de tarte redonda com a restante manteiga.;\r\nPasso 5: Ponha a massa entre duas folhas de papel vegetal, estique-a com a ajuda de um rolo até obter o diâmetro da forma e transfira-a cuidadosamente para dentro da forma. Pressione as laterais e o fundo. Leve novamente ao frigorífico por 30 minutos.;\r\nPasso 6: Pré-aqueça o forno a 180 ºC.;\r\nPasso 7: Entretanto, corte a fruta ao meio, retire-lhe o caroço, corte em fatias e disponha-as lado a lado por cima da massa. Polvilhe com o açúcar amarelo.;\r\nPasso 8: Leve ao forno por 30 minutos. Retire e finalize com o açúcar em pó.;\r\nPasso 9: Sirva com o gelado de nata decorado com folhas de hortelã.', 'Média', 8, 'fruta', 'A tarte de três frutos combina pêssegos, ameixas e nectarinas numa base crocante, criando uma sobremesa equilibrada, doce e refrescante.'),
	(18, 'tabua-de-doces.jpg', 'Tábua de doces', 'groselha        2 ramo,\r\nhortelã         1 q.b.,\r\nmini crepes dentelle recheados com creme de cacau e avelã Iguarias      1 emb.,\r\nsortido triplo bolacha com cobertura de chocolate branco e leite preto Iguarias     1 emb.,\r\nbolacha de amêndoa e arandos com cobertura de chocolate branco Iguarias 1 emb.,\r\nbolacha de arroz crocante com cobertura de chocolate negro Iguarias     1 emb.,\r\nbolacha de amêndoa e chocolate com cobertura de chocolate preto Iguarias  1 emb.,\r\nmini sticks com recheio de sabor a menta Iguarias         1 emb.,\r\ncopos de chocolate belga com pepitas de chocolate Iguarias  1 emb.\r\nmel de rosmaninho Iguarias ', 20, 'Passo 1: Retire todos os ingredientes das embalagens e preencha a tábua ao seu gosto.;\r\nPasso 2: Decore com groselha e hortelã.', 'Fácil', 12, 'doce', 'Delicie-se com uma tábua de doces Pingo Doce, repleta de iguarias irresistíveis. Descubra sabores únicos para tornar os momentos especiais ainda mais doces.'),
	(19, 'chili-vegetariano-com-grao.jpg', 'Chili vegetariano com grão', 'soja granulada fina     200 g,\r\nágua 250 ml,\r\ncebola picada  150 g,\r\nazeite virgem extra 2 c. de sopa,\r\nfeijão-verde cortado congelado  200 g,\r\ncenoura em rodelas   250 g,\r\ncurgete em rodelas   250 g,\r\nsal     meia c. de chá,\r\npimenta 1 q.b.,\r\ncominhos em pó 1 c. de chá,\r\ntomate em pedaços com orégaos e manjericao      1 lata (390 g),\r\ngrão-de-bico cozido   1 lata (820 g),\r\ncoentros frescos      1 q.b.,\r\ntortilhas chips       4 unid. (160 g)', 45, 'Passo 1: Numa panela, escalde a soja com a água a ferver e deixe hidratar.;\r\nPasso 2: Enquanto isso, aloure a cebola num tacho com o azeite quente. Junte o feijão-verde, a cenoura e a curgete. Tempere com o sal, pimenta e os cominhos. Tape e deixe suar cerca de 10 minutos.;\r\nPasso 3: Adicione ao tacho a soja já hidratada, o tomate e o grão-de-bico escorrido. Tape e cozinhe por mais 15 minutos.;\r\nPasso 4: Na altura de servir, polvilhe com folhas de coentros.;\r\nPasso 5: Acompanhe com as tortilhas aquecidas na frigideira ou no forno e cortadas em quartos.', 'Fácil', 6, 'outras', 'Descubra uma receita de chili vegetariano com grão repleta de sabor e proteína vegetal. Prepare um prato vegan, saudável e delicioso.'),
	(20, 'tosta-de-cogumelos-e-burrata.jpg', 'Tosta de cogumelos e burrata', 'alho picado     1 dente,\r\nazeite virgem extra    1 c. de sobremesa,\r\nmistura de cogumelos silvestres         200 g,\r\ntomilho fresco       1 q.b.,\r\nsal     1 c. de chá,\r\npimenta 1 q.b.,\r\nburrata com leite de búfala             1 unid. (125 g),\r\npão de centeio    2 fatia (160 g),\r\ncebolinho fresco  1 c. de sopa\r\n', 20, 'Passo 1: Salteie o alho numa frigideira com o azeite. Adicione os cogumelos e envolva. Deixe cozinhar por cerca de 3 minutos.;\r\nPasso 2: Tempere com tomilho, sal e pimenta. Deixe cozinhar por mais 10 minutos em lume brando. No fim deste tempo, aumente o lume de forma a evaporar o líquido.;\r\nPasso 3: Escorra a burrata e abra-a ao meio.;\r\nPasso 4: Torre o pão, coloque sobre ele a burrata e por cima a mistura de cogumelos.;\r\nPasso 5: Polvilhe com cebolinho picado, pimenta e sirva de imediato.', 'Fácil', 2, 'tosta', 'Saboreie esta tosta de cogumelos e burrata. Os cogumelos salteados combinam com a cremosidade e frescura da burrata, uma fusão de sabor e textura irresistível. Yummy!'),
	(21, 'esparguete-a-carbonara.jpg', 'Esparguete à carbonara', 'gemas de ovo M  2 unid.,\r\nqueijo parmesão 40 g,\r\nalho picado     1 dente,\r\nazeite          1 c. de sopa,\r\nbacon           100 g,\r\nesparguete      200 g,\r\npimenta preta   1 q.b.', 20, 'Passo 1: Misture numa taça as gemas com 30g de queijo acabado de ralar, de forma a obter uma pasta grossa. Reserve.;\r\nPasso 2: Coloque o dente de alho, o azeite e o bacon numa frigideira e deixe cozinhar, em lume médio-alto, durante 5 minutos. Retire e reserve. Coza a massa em água até estar al dente. Escorra-a e guarde um pouco da água da cozedura.;\r\nPasso 3: Coza a massa em água até estar al dente. Escorra-a e guarde um pouco da água da cozedura.;\r\nPasso 4: Adicione a massa à frigideira, envolvendo-a no bacon, e leve a aquecer ligeiramente. Retire do lume, junte a mistura de gemas e um pouco da água da cozedura e envolva muito bem. Sirva de imediato, polvilhada com o restante queijo e um pouco de pimenta.', 'Fácil', 2, 'massa', 'As vezes sobram claras, outras vezes sobram gemas! Evite o desperdício alimentar com um clássico da cozinha italiana, esparguete à carbonara. A combinação da massa, do bacon, com as gemas de ovo e o queijo parmesão fazem desta receita um prato muito guloso.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
