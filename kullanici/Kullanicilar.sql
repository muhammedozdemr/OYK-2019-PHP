-- Adminer 4.7.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Kullanicilar`;
CREATE TABLE `Kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adisoyadi` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `parola` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `tur` varchar(1) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


-- 2019-10-22 18:55:21
