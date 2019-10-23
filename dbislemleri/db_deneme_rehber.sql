-- Adminer 4.7.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `db_deneme_rehber`;
CREATE TABLE `db_deneme_rehber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


-- 2019-10-23 15:56:20
