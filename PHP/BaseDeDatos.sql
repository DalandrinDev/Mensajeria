CREATE DATABASE mensajeria;
USE mensajeria;

CREATE TABLE contactos (
	clavecontactos INT AUTO_INCREMENT NOT NULL,
	nombre VARCHAR(15) NOT NULL,
	apellidos VARCHAR(50) NOT NULL,
	telefono VARCHAR(15) NOT NULL,
	PRIMARY KEY (clavecontactos)
) ENGINE=InnoDB;

CREATE TABLE mensaje (
	clavemensaje INT NOT NULL,
	texto VARCHAR(140) NOT NULL,
	PRIMARY KEY (clavemensaje)
) ENGINE=InnoDB;

CREATE TABLE admin (
	claveadmin INT NOT NULL,
	nombre VARCHAR(5) NOT NULL,
	contrasena VARCHAR(4) NOT NULL,
	PRIMARY KEY (claveadmin)
) ENGINE=InnoDB;

INSERT INTO contactos VALUES(1, "Manolo", "Camacho Torre", "630925773");
INSERT INTO admin VALUES(1, "admin", "uned");

//mysql workbench