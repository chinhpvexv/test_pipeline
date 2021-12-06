CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `laravel`;
CREATE TABLE IF NOT EXISTS `tests_dump` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `des` varchar(255) NOT NULL DEFAULT '',
  `flg` BOOLEAN,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='demo test';
