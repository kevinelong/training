CREATE DATABASE `training` /*!40100 DEFAULT CHARACTER SET utf8 */;
CREATE TABLE `fruit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
INSERT INTO `training`.`fruit` (`name`, `description`) VALUES ('Apple', 'Healthy');
INSERT INTO `training`.`fruit` (`name`, `description`) VALUES ('Orange', 'Colorful');
INSERT INTO `training`.`fruit` (`name`, `description`) VALUES ('Pear', 'Pretty');
