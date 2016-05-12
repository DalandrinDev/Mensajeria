CREATE DATABASE mensajeria;
USE mensajeria;

CREATE TABLE tutores (
	clavetutores INT AUTO_INCREMENT NOT NULL,
	nombre VARCHAR(30) NOT NULL,
	apellidos VARCHAR(50) NOT NULL,
	alias VARCHAR(15) NOT NULL,
	facultad VARCHAR(15) NOT NULL,
	PRIMARY KEY (clavetutores)
) ENGINE=InnoDB;

CREATE TABLE mensajes (
	clavemensajes INT AUTO_INCREMENT NOT NULL,
	texto VARCHAR(140) NOT NULL,
	autor VARCHAR(20) NOT NULL,
	PRIMARY KEY (clavemensajes)
) ENGINE=InnoDB;

CREATE TABLE usuarios (
	claveusuarios INT AUTO_INCREMENT NOT NULL,
	nombre VARCHAR(10) NOT NULL,
	apellidos VARCHAR(40) NOT NULL,
	contrasena VARCHAR(4) NOT NULL,
	PRIMARY KEY (claveusuarios)
) ENGINE=InnoDB;
