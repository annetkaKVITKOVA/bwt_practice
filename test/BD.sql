-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.41-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица BD1.shoutbox
CREATE TABLE IF NOT EXISTS `shoutbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(20) NOT NULL DEFAULT '0',
  `email` varchar(20) NOT NULL DEFAULT '0',
  `message` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы BD1.shoutbox: 3 rows
/*!40000 ALTER TABLE `shoutbox` DISABLE KEYS */;
INSERT INTO `shoutbox` (`id`, `date_time`, `name`, `email`, `message`) VALUES
	(1, '0000-00-00 00:00:00', 'anna', 'annetka.vitkova@gmai', 'ghghh'),
	(2, '2017-06-22 12:15:24', 'hjhjh', 'jkk', 'jkjk'),
	(3, '2017-06-22 12:22:27', 'hjhjh', 'jkk444', 'jkjk');
/*!40000 ALTER TABLE `shoutbox` ENABLE KEYS */;


-- Дамп структуры для таблица BD1.users
CREATE TABLE IF NOT EXISTS `users` (
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `sex` enum('M','F') DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы BD1.users: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `sex`, `birthday`, `id`) VALUES
	('Anna', 'Vitkova', 'annetka.kvitkova@gmail.com', 'пароль', 'F', '1997-04-20', 1),
	('Анна', 'Виткова', 'email', 'парапапап', 'F', '2017-06-07', 2),
	('Иван', 'Иванов', 'почта', 'суперпароль', 'M', '2016-12-26', 3),
	('Anna', 'Vitkova', 'annetka.vitkova@gmail.com', 'parol', 'F', '2017-06-01', 4);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
