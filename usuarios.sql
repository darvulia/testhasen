CREATE DATABASE crudproduct character set utf8;


USE crudproduct;

CREATE TABLE productos (
productId int(10) NOT NULL AUTO_INCREMENT,
code varchar(120) DEFAULT NULL,
description varchar(120) DEFAULT NULL,
PRIMARY KEY (productId)
)


--Creación de un usuario y sus privilegios para la base de datos php2
--user: userweb
--pass: php2

grant all privileges on crudproduct.* to userweb@localhost identified by "php2";
