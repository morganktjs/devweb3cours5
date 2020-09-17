CREATE DATABASE  IF NOT EXISTS `db_cours2` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `db_cours2`;

DROP TABLE IF EXISTS `tbl_class`;
CREATE TABLE `tbl_class` (
  `id_class` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_class`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_class` VALUES (1,'Math'),(2,'Anglais'),(3,'Informatique');

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_user` 
  VALUES  (1,'Lachance','Jean','jean.lachance@gmail.com', 'G5Y2V1', '4182263918', '1030 rue du gouverneur','Québec'),
          (2,'Mercier','Roger','rMercier@hotmail.com', 'G9I3G7', '5182260805', '759 87e rue','Saint-Georges'),
          (3,'Lepetit','Frank','FL107@outlook.com', 'G8U3B5', '3132256', '750 6e avenue','Beauceville');



/*!50003 DROP PROCEDURE IF EXISTS `get_all_users` */;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_all_users`()
BEGIN
	SELECT * FROM tbl_user;
END ;;
DELIMITER ;

/*!50003 DROP PROCEDURE IF EXISTS `get_user_by_id` */;

DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_user_by_id`(
	IN filter_id_user int
)
BEGIN
	SELECT * FROM tbl_user WHERE id_user = filter_id_user limit 1;
END ;;
DELIMITER ;


DROP procedure IF EXISTS `add_user`;

DELIMITER $$
USE `db_cours2`$$
CREATE PROCEDURE `add_user` (
	IN first_name VARCHAR(45),
    last_name VARCHAR(45),
    email VARCHAR(45),
    postal_code VARCHAR(45),
    phone_number VARCHAR(45),
    address VARCHAR(45),
    city VARCHAR(45)
)
BEGIN
	insert into tbl_user(first_name, last_name, email, postal_code, phone_number, address, city) 
			values (first_name, last_name, email, postal_code, phone_number, address, city);
END$$

DELIMITER ;
DROP procedure IF EXISTS `delete_user`;

DELIMITER $$
USE `db_cours2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_user`(
	IN filter_id_user int
)
BEGIN
	DELETE FROM tbl_user WHERE tbl_user.id_user = filter_id_user;
END$$

DELIMITER ;
