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

-- A despejar estrutura para tabela grupo202.comentarios
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `receitaId` int(11) unsigned NOT NULL DEFAULT 0,
  `email` varchar(50) DEFAULT '0',
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- A despejar dados para tabela grupo202.comentarios: ~8 rows (aproximadamente)
INSERT INTO `comentarios` (`id`, `receitaId`, `email`, `mensagem`) VALUES
	(6, 13, 'rgraca0508@gmail.com', 'Receita bem explicada, fácil de seguir!'),
	(7, 13, 'rgraca0508@gmail.com', 'A combinação de sabores é incrível, parabéns pela criatividade!'),
	(8, 7, 'rgraca0508@gmail.com', 'Adorei a apresentação, ficou muito claro e detalhado.'),
	(9, 1, 'rgraca0508@gmail.com', 'Teste'),
	(10, 13, 'rgraca0508@gmail.com', 'hhhh'),
	(11, 12, 'rgraca0508@gmail.com', 'teste'),
	(12, 12, 'rgraca0508@gmail.com', 'testar'),
	(13, 12, 'rgraca0508@gmail.com', 'ygty');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
