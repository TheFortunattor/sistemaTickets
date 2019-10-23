DROP DATABASE diluce;
CREATE DATABASE diluce;

USE diluce;


DELIMITER $$
DROP TABLE IF EXISTS identificacion $$
CREATE TABLE identificacion(
id INT NOT NULL AUTO_INCREMENT,
usuario VARCHAR(250) DEFAULT NULL,
pass VARCHAR(250) DEFAULT NULL,
PRIMARY KEY (id)
)$$
DELIMITER ;


INSERT INTO identificacion (usuario, pass) VALUES ('admin','admin'),('diluce','diluce');
