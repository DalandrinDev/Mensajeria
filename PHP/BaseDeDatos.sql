#-----Esta es la base de datos que usaré en el proyecto-----#

#-----Creamos la base de datos e indicamos que la usamos-----#
CREATE DATABASE mensajeria;
USE mensajeria;

#-----La tabla facultad alamacena todas las facultades disponibles en la UNED de Melilla-----#

CREATE TABLE facultad (
	idfacultad INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	facultad VARCHAR(20) NOT NULL
);

#-----La tabla tutor guarda los tutores que trabajan en el centro, el alias es lo más importante-----#

CREATE TABLE tutor (
	idtutor INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	apellidos VARCHAR(50) NOT NULL,
	alias VARCHAR(25) NOT NULL,
	idfacultad INT NOT NULL,
	FOREIGN KEY (idfacultad) REFERENCES facultad(idfacultad)
);

#-----La tabla usuario almacena todos los administradores del centro-----#

CREATE TABLE usuario (
	idusuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(10) NOT NULL,
	apellidos VARCHAR(40) NOT NULL,
	contrasena VARCHAR(4) NOT NULL
);

#-----La tabla mensaje almacena el texto que enviaremos a los tutores-----#

CREATE TABLE mensaje (
	idmensaje INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	texto VARCHAR(200) NOT NULL,
	autor VARCHAR(15) NOT NULL 
);

#-----La tabla enviar es la que almacenará los datos necesarios para el correcto funcionamiento d ela aplicación, como el alias del tutor y el mensaje que se quiere enviar-----#

CREATE TABLE enviar (
	idenviar INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	mensaje_idmensaje INTEGER NOT NULL,
	fechacreacion datetime NOT NULL,
	fechaenvio datetime NOT NULL,
	idtutor INT NOT NULL,
	enviado BOOLEAN DEFAULT FALSE,
	FOREIGN KEY (idtutor) REFERENCES tutor(idtutor),
	FOREIGN KEY (mensaje_idmensaje) REFERENCES mensaje(idmensaje)
);

#-----Inserta los datos por defecto al cargar la base de datos-----#

INSERT INTO usuario VALUES(NULL,'admin','','uned');
INSERT INTO usuario VALUES(NULL,'pepe','','uned');
INSERT INTO usuario VALUES(NULL,'trini','','uned');
INSERT INTO usuario VALUES(NULL,'lupe','','uned');
INSERT INTO usuario VALUES(NULL,'otra','','uned');

INSERT INTO facultad VALUES(NULL, 'Ciencias e Ingenierias');
INSERT INTO facultad VALUES(NULL, 'Ciencias Sociales');
INSERT INTO facultad VALUES(NULL, 'Derecho o Economicas');
INSERT INTO facultad VALUES(NULL, 'Acceso');