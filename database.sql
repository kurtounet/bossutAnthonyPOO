-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour concession_motos
CREATE DATABASE IF NOT EXISTS `concession_motos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `concession_motos`;

-- Listage de la structure de table concession_motos. motos
CREATE TABLE IF NOT EXISTS `motos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(100) NOT NULL,
  `model` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table concession_motos.motos : ~12 rows (environ)
INSERT INTO `motos` (`id`, `brand`, `model`, `type`, `price`, `image`) VALUES
	(5, 'Yamaha', 'YZ450F', 'Enduro', 9500, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSgHv5Qa-Fi7btsVOo6BVqlLRw1zA-6mU9NXs0zznXMvJ0P_XyMNP2K2Mv5JqL27S-qQ1I5dkWIc3zLSVqyxledxuGTiuAKfZkhRvbjWgdZO2TVo2ogtsH_Docv5XKdqBTRTnLubaGGKRM&usqp=CAc'),
	(7, 'Ducati', 'Panigale V4', 'Sportive', 25000, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ5Ig-vhxdwdX3kVJ7cXeLH5xx6wMWjTGGfbZVAgBZIpvyI3JZlchtzkAV6RUhX8EJHswtNeb8PKxsUUSYXI7rxcMBJnze02X34uAsIHsH95YdI1wzOdl1WCB8opkQ4pz7SUAYCPh9nyg&usqp=CAc'),
	(8, 'Kawasaki', 'Z900', 'Roadster', 9000, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSgHv5Qa-Fi7btsVOo6BVqlLRw1zA-6mU9NXs0zznXMvJ0P_XyMNP2K2Mv5JqL27S-qQ1I5dkWIc3zLSVqyxledxuGTiuAKfZkhRvbjWgdZO2TVo2ogtsH_Docv5XKdqBTRTnLubaGGKRM&usqp=CAc'),
	(9, 'Honda', 'CRF450R', 'Enduro', 9300, 'http://localhost/bossutAnthonyPOO/assets/uploads/moto2.jpg'),
	(10, 'Triumph', 'Bonneville Bobber', 'Custom', 13500, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ5Ig-vhxdwdX3kVJ7cXeLH5xx6wMWjTGGfbZVAgBZIpvyI3JZlchtzkAV6RUhX8EJHswtNeb8PKxsUUSYXI7rxcMBJnze02X34uAsIHsH95YdI1wzOdl1WCB8opkQ4pz7SUAYCPh9nyg&usqp=CAc'),
	(11, 'BMW', 'S1000RR', 'Sportive', 23000, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSgHv5Qa-Fi7btsVOo6BVqlLRw1zA-6mU9NXs0zznXMvJ0P_XyMNP2K2Mv5JqL27S-qQ1I5dkWIc3zLSVqyxledxuGTiuAKfZkhRvbjWgdZO2TVo2ogtsH_Docv5XKdqBTRTnLubaGGKRM&usqp=CAc'),
	(13, 'KTM', '450 EXC-F', 'Enduro', 9800, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ-So4KvxM9TD0QdNwhBX0tXb0qQSHG_sPZCLACkrk6aBRispslo7o7k_he7xKKSTsLZgIkqIVjlcpsj305ENkPkCt4icmCLl0dPMoCqKdx7tAZw8wNog8m&usqp=CAc'),
	(14, 'Indian', 'Scout', 'Custom', 13000, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSgHv5Qa-Fi7btsVOo6BVqlLRw1zA-6mU9NXs0zznXMvJ0P_XyMNP2K2Mv5JqL27S-qQ1I5dkWIc3zLSVqyxledxuGTiuAKfZkhRvbjWgdZO2TVo2ogtsH_Docv5XKdqBTRTnLubaGGKRM&usqp=CAc'),
	(16, 'Yamaha', 'MT-09', 'Roadster', 9500, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ5Ig-vhxdwdX3kVJ7cXeLH5xx6wMWjTGGfbZVAgBZIpvyI3JZlchtzkAV6RUhX8EJHswtNeb8PKxsUUSYXI7rxcMBJnze02X34uAsIHsH95YdI1wzOdl1WCB8opkQ4pz7SUAYCPh9nyg&usqp=CAc'),
	(18, 'Harley-Davidson', 'Fat Boy', 'Roadster', 16000, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ5Ig-vhxdwdX3kVJ7cXeLH5xx6wMWjTGGfbZVAgBZIpvyI3JZlchtzkAV6RUhX8EJHswtNeb8PKxsUUSYXI7rxcMBJnze02X34uAsIHsH95YdI1wzOdl1WCB8opkQ4pz7SUAYCPh9nyg&usqp=CAc'),
	(19, 'Ducati', 'Streetfighter V4', 'Custom', 25000, 'https://media.gqmagazine.fr/photos/5fe09d243b7b5653fe5bb1f8/master/w_1600,c_limit/honda_CB500f-2021-urbaanews.jpg'),
	(50, 'Super Tony 6', 'Anthony 6', 'Sportive', 10006, 'http://localhost/bossutAnthonyPOO/assets/uploads/moto2.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
