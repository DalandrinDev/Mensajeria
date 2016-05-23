#Esta es la base de datos que usaré en el proyecto

CREATE DATABASE mensajeria;
USE mensajeria;

CREATE TABLE facultad (
	idfacultad INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	facultad VARCHAR(20) NOT NULL
);

#La tabla tutores guardará todos los tutores del centro, todos tendrán una ID, un nombre, dos apellidos, un álias propio
#de Telegram, así que será obligatorio crearselo
CREATE TABLE tutor (
	idtutor INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	apellidos VARCHAR(50) NOT NULL,
	alias VARCHAR(15) NOT NULL,
	idfacultad int NOT NULL,
	FOREIGN KEY (idfacultad) REFERENCES facultad(idfacultad)
);

#SELECT * FROM tutor WHERE idfacultad=(SELECT facultad FROM facultad);

#La tabla usuarios es la tabla donde se almacenarán los administradores, tendrán un ID, un nombre, dos apellidos y una
#contraseña, esta estará encriptada para proteger esos datos
CREATE TABLE usuario (
	idusuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	nombre VARCHAR(10) NOT NULL,
	apellidos VARCHAR(40) NOT NULL,
	contrasena VARCHAR(4) NOT NULL
);

CREATE TABLE mensaje (
	idmensaje INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	texto VARCHAR(200) NOT NULL,
	autor VARCHAR(15) NOT NULL 
);

#SELECT autor FROM enviar WHERE idmensaje = (SELECT idmensaje FROM mensaje WHERE idmensaje = 'iddelmensajequequieras');

#La tabla enviados almacenará la orden de envio del mensaje, en él se guarda la ID del envío, la fecha, la ID del mensaje
#que se quiere enviar, la ID del tutor al que hay que enviarle el mensaje, indicar si el mensaje se ha enviado, y el autor
#que ha escrito el mensaje
CREATE TABLE enviar (
	idenviar INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fechaenvio VARCHAR(10) NOT NULL,
	idtutor INT NOT NULL,
	enviado SET('Si', 'no') DEFAULT 'No',
	FOREIGN KEY (idtutor) REFERENCES tutor(idtutor)
	
); 

#Este es el unico registro que tendra la base de datos, guarda al SuperAdmin y la contraseña.
INSERT INTO usuario VALUES(NULL,'admin','','uned');

INSERT INTO facultad VALUES(NULL, 'Ciencias e Ingenierias');
INSERT INTO facultad VALUES(NULL, 'Ciencias Sociales');
INSERT INTO facultad VALUES(NULL, 'Derecho o Economicas');
INSERT INTO facultad VALUES(NULL, 'Acceso');