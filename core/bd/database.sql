
-- CREAR LA BASE DE DATOS CON EL COTEJAMIENTO

-- CREATE DATABASE `sigcombdb` DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;


CREATE TABLE `sigcombdb`.`users` (
  `id` INT(255) NOT NULL AUTO_INCREMENT ,
  `user` VARCHAR(50) NOT NULL ,
  `pass` VARCHAR(50) NOT NULL ,
  `email` VARCHAR(50) NOT NULL ,
  `permisos` INT(1) NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

  
