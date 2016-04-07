CREATE DATABASE mensajeria;
USE mensajeria;

CREATE TABLE contactos (
	clavecontactos INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(15) NOT NULL,
	apellidos VARCHAR(50) NOT NULL,
	telefono VARCHAR(15),
	PRIMARY KEY (clavecontactos)
) ENGINE=InnoDB;

CREATE TABLE mensaje (
	clavemensaje INT NOT NULL,
	texto VARCHAR(140) Not NULL,
) ENGINE=InnoDB;

INSERT INTO contactos VALUES(1, "Manolo", "Camacho Torre", "630925773")