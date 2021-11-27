DROP DATABASE IF EXISTS parcial;
CREATE DATABASE parcial;
USE parcial;
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE IF NOT EXISTS usuario(
username VARCHAR(16) NOT NULL PRIMARY KEY,
clave VARCHAR(16) NOT NULL,
estado ENUM('Conectado','Desconectado'),
puntos INT NOT NULL
);

CREATE TABLE IF NOT EXISTS simbolo(
idSimbolo INT NOT NULL PRIMARY KEY auto_increment,
simbolo VARCHAR(16) NOT NULL
);

CREATE TABLE IF NOT EXISTS carta(
idCarta INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
color VARCHAR(16) NOT NULL
);

CREATE TABLE IF NOT EXISTS especial(
idCarta INT NOT NULL,
color VARCHAR(16) NOT NULL,
PRIMARY KEY (idCarta),
estado ENUM('Bloqueado','Desbloqueado'),
FOREIGN KEY (idCarta) REFERENCES carta(idCarta)
);

CREATE TABLE IF NOT EXISTS comun(
idCarta INT NOT NULL PRIMARY KEY,
color INT NOT NULL,
numero INT NOT NULL,
FOREIGN KEY (idCarta) REFERENCES carta(idCarta)
);

CREATE TABLE IF NOT EXISTS compite(
user1 VARCHAR(16) NOT NULL,
user2 VARCHAR(16) NOT NULL,
fechaHora DATETIME NOT NULL,
ganador VARCHAR(16) NOT NULL,
perdedor VARCHAR(16) NOT NULL,
puntaje INT NOT NULL,
turno INT NOT NULL,
PRIMARY KEY (user1,user2,fechaHora),
FOREIGN KEY (user1) REFERENCES usuario(username),
FOREIGN KEY (user2) REFERENCES usuario(username)
);

CREATE TABLE IF NOT EXISTS tiene(
username VARCHAR(16) NOT NULL,
idCarta INT NOT NULL,
PRIMARY KEY(username,idCarta),
FOREIGN KEY (username) REFERENCES usuario(username),
FOREIGN KEY (idCarta) REFERENCES carta(idCarta)
);

CREATE TABLE pertenece(
idCarta INT NOT NULL PRIMARY KEY,
idSimbolo INT NOT NULL,
FOREIGN KEY (idCarta) REFERENCES carta(idCarta),
FOREIGN KEY (idSimbolo) REFERENCES simbolo(idSimbolo)
);

INSERT INTO usuario VALUES('IsmaF','1234','Conectado',0);
INSERT INTO usuario VALUES('RFSSK','1234','Conectado',0);
INSERT INTO usuario VALUES('Faka','1234','Conectado',0);
INSERT INTO usuario VALUES('Neekomata','1234','Conectado',0);
#Simbolos
INSERT INTO simbolo VALUES(idSimbolo,'-');
INSERT INTO simbolo VALUES(idSimbolo,'+2');
INSERT INTO simbolo VALUES(idSimbolo,'+4');
INSERT INTO simbolo VALUES(idSimbolo,'X');
INSERT INTO simbolo VALUES(idSimbolo,'C');
#Carta comun roja
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
#Carta comun verde
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
#Carta comun amarillo
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
#Carta comun azul
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');
#Carta especial roja
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
INSERT INTO carta VALUES(idCarta,'Rojo');
#Carta especial verde
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
INSERT INTO carta VALUES(idCarta,'Verde');
#carta especial amarillo
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
INSERT INTO carta VALUES(idCarta,'Amarillo');
#carta especial azul
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');
INSERT INTO carta VALUES(idCarta,'Azul');


INSERT INTO comun VALUES(1,'Rojo',0);
INSERT INTO comun VALUES(2,'Rojo',1);
INSERT INTO comun VALUES(3,'Rojo',2);
INSERT INTO comun VALUES(4,'Rojo',3);
INSERT INTO comun VALUES(5,'Rojo',4);
INSERT INTO comun VALUES(6,'Rojo',5);
INSERT INTO comun VALUES(7,'Rojo',6);
INSERT INTO comun VALUES(8,'Rojo',7);
INSERT INTO comun VALUES(9,'Rojo',8);
INSERT INTO comun VALUES(10,'Rojo',9);

INSERT INTO comun VALUES(11,'Verde',0);
INSERT INTO comun VALUES(12,'Verde',1);
INSERT INTO comun VALUES(13,'Verde',2);
INSERT INTO comun VALUES(14,'Verde',3);
INSERT INTO comun VALUES(15,'Verde',4);
INSERT INTO comun VALUES(16,'Verde',5);
INSERT INTO comun VALUES(17,'Verde',6);
INSERT INTO comun VALUES(18,'Verde',7);
INSERT INTO comun VALUES(19,'Verde',8);
INSERT INTO comun VALUES(20,'Verde',9);

INSERT INTO comun VALUES(21,'Amarillo',0);
INSERT INTO comun VALUES(22,'Amarillo',1);
INSERT INTO comun VALUES(23,'Amarillo',2);
INSERT INTO comun VALUES(24,'Amarillo',3);
INSERT INTO comun VALUES(25,'Amarillo',4);
INSERT INTO comun VALUES(26,'Amarillo',5);
INSERT INTO comun VALUES(27,'Amarillo',6);
INSERT INTO comun VALUES(28,'Amarillo',7);
INSERT INTO comun VALUES(29,'Amarillo',8);
INSERT INTO comun VALUES(30,'Amarillo',9);

INSERT INTO comun VALUES(31,'Azul',0);
INSERT INTO comun VALUES(32,'Azul',1);
INSERT INTO comun VALUES(33,'Azul',2);
INSERT INTO comun VALUES(34,'Azul',3);
INSERT INTO comun VALUES(35,'Azul',4);
INSERT INTO comun VALUES(36,'Azul',5);
INSERT INTO comun VALUES(37,'Azul',6);
INSERT INTO comun VALUES(38,'Azul',7);
INSERT INTO comun VALUES(39,'Azul',8);
INSERT INTO comun VALUES(40,'Azul',9);

INSERT INTO compite VALUES ('IsmaF','RFSSK',NOW(),'IsmaF','RFSSK',10,12);
INSERT INTO compite VALUES ('Faka','RFSSK',NOW(),'Faka','RFSSK',10,12);
INSERT INTO compite VALUES ('Neekomata','Faka',NOW(),'Neekomata','Faka',10,12);
INSERT INTO compite VALUES ('RFSSK','Neekomata',NOW(),'RFSSK','Neekomata',10,12);

INSERT INTO tiene VALUES ('IsmaF',1);
INSERT INTO tiene VALUES ('IsmaF',13);
INSERT INTO tiene VALUES ('IsmaF',23);
INSERT INTO tiene VALUES ('IsmaF',54);


INSERT INTO pertenece VALUES (41,2);
INSERT INTO pertenece VALUES (42,3);
INSERT INTO pertenece VALUES (43,4);
INSERT INTO pertenece VALUES (44,5);


INSERT INTO pertenece VALUES (45,2);
INSERT INTO pertenece VALUES (46,3);
INSERT INTO pertenece VALUES (47,4);
INSERT INTO pertenece VALUES (48,5);


INSERT INTO pertenece VALUES (49,2);
INSERT INTO pertenece VALUES (50,3);
INSERT INTO pertenece VALUES (51,4);
INSERT INTO pertenece VALUES (52,5);

INSERT INTO pertenece VALUES (53,2);
INSERT INTO pertenece VALUES (54,3);
INSERT INTO pertenece VALUES (55,4);
INSERT INTO pertenece VALUES (56,5);


SELECT * from carta WHERE idCarta = 41;