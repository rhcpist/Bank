-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cnp` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `customer` (`id`, `name`, `cnp`) VALUES
(1,	'John Dou',	'124-23-6545'),
(2,	'Phil Collins',	'345-55-7566'),
(3,	'Elza Wilkinson',	'871-99-353'),
(4,	'Alfred Tool',	'345-34-363'),
(5,	'Nikki Dot',	'093-16-874'),
(6,	'David Sol',	'562-30-045'),
(7,	'Fernando Max',	'754-98-983'),
(8,	'Kevin Gigs',	'938-355-3424'),
(9,	'Mike Lassard',	'034-643-346'),
(10,	'Tony Home',	'111-446-234'),
(11,	'Jacky Chan',	'444-355-322');

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `customId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_723705D14CDC50F6` (`customId`),
  CONSTRAINT `FK_723705D14CDC50F6` FOREIGN KEY (`customId`) REFERENCES `customer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `transaction` (`id`, `date`, `amount`, `customId`) VALUES
(1,	'2017-06-08',	234.45,	1),
(2,	'2017-06-08',	256.99,	2),
(3,	'2017-06-08',	346.99,	2),
(4,	'2017-06-08',	888.01,	1),
(5,	'2017-06-08',	454.34,	1),
(6,	'2017-06-08',	454.34,	2),
(7,	'2017-06-14',	725.10,	3),
(8,	'2017-06-22',	659.20,	11),
(9,	'2017-06-22',	50.50,	5),
(10,	'2017-06-22',	446.21,	6),
(11,	'2017-06-22',	446.21,	7),
(12,	'2017-06-22',	63.40,	4),
(13,	'2017-06-22',	289.00,	9),
(14,	'2017-06-22',	50.50,	5),
(15,	'2017-06-22',	50.50,	5),
(16,	'2017-06-22',	50.50,	5),
(17,	'2017-06-22',	659.20,	11),
(18,	'2017-06-22',	659.20,	11),
(19,	'2017-06-22',	346.99,	2),
(20,	'2017-06-22',	123.00,	4),
(21,	'2017-06-23',	238.40,	4);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_1483A5E9A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_1483A5E9C05FB297` (`confirmation_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(2,	'admin',	'admin',	'admin@mail.com',	'admin@mail.com',	1,	NULL,	'$2y$13$zydFdSnSX8y4g8aLq8TeEeglJbBrPPcEwywI.lzB3cvssTyoeWgv.',	'2017-06-23 11:47:54',	NULL,	NULL,	'a:0:{}');

-- 2017-06-23 11:50:45
