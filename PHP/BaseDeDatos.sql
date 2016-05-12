CREATE DATABASE mensajeria;
USE mensajeria;

CREATE TABLE tutores (
	clavetutores INT AUTO_INCREMENT NOT NULL,
	nombre VARCHAR(30) NOT NULL,
	apellidos VARCHAR(50) NOT NULL,
	alias VARCHAR(15) NOT NULL,
	facultad VARCHAR(15) NOT NULL,
	PRIMARY KEY (clavecontactos)
) ENGINE=InnoDB;

CREATE TABLE mensaje (
	clavemensaje INT AUTO_INCREMENT NOT NULL,
	texto VARCHAR(140) NOT NULL,
	autor VARCHAR(20) NOT NULL,
	PRIMARY KEY (clavemensaje)
) ENGINE=InnoDB;

CREATE TABLE usuarios (
	claveusuarios INT AUTO_INCREMENT NOT NULL,
	nombre VARCHAR(10) NOT NULL,
	apellidos VARCHAR(40) NOT NULL,
	contrasena VARCHAR(4) NOT NULL,
	PRIMARY KEY (claveadmin)
) ENGINE=InnoDB;

CREATE TABLE envios (
	claveenvios INT AUTO_INCREMENT NOT NULL,
	fecha VARCHAR(10) NOT NULL,
	mensaje
	tutores
	enviado VARCHAR(2) NOT NULL,
	autor 
)

INSERT INTO admin VALUES(1, "admin","","uned","Administrador");