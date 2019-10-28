-- Adminer 4.7.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `kullanicikayit`;
CREATE TABLE `kullanicikayit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(30) NOT NULL,
  `soyadi` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


-- 2019-10-28 19:46:56
