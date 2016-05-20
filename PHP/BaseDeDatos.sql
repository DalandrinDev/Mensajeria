<<<<<<< HEAD
#Esta es la base de datos que usaré en el proyecto

CREATE DATABASE mensajeria;
USE mensajeria;

#La tabla tutores guardará todos los tutores del centro, todos tendrán una ID, un nombre, dos apellidos, un álias propio
#de Telegram, así que será obligatorio crearselo
=======
CREATE DATABASE mensajeria;
USE mensajeria;

>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
CREATE TABLE tutores (
	clavetutores INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	apellidos VARCHAR(50) NOT NULL,
	alias VARCHAR(15) NOT NULL,
	facultad VARCHAR(15) NOT NULL
);

<<<<<<< HEAD
#La tabla usuarios es la tabla donde se almacenarán los administradores, tendrán un ID, un nombre, dos apellidos y una
#contraseña, esta estará encriptada para proteger esos datos
=======
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
CREATE TABLE usuarios (
	claveusuarios INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	nombre VARCHAR(10) NOT NULL,
	apellidos VARCHAR(40) NOT NULL,
	contrasena VARCHAR(4) NOT NULL
);

<<<<<<< HEAD
#La tabla mensajes almacenará todos los mensajes que se escriban, tendrán un ID, el mensaje en sí, y el autor que lo escriba 
CREATE TABLE mensajes (
	clavemensajes INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	texto VARCHAR(140) NOT NULL,
	autor VARCHAR (15) NOT NULL
);

#La tabla enviados almacenará la orden de envio del mensaje, en él se guarda la ID del envío, la fecha, la ID del mensaje
#que se quiere enviar, la ID del tutor al que hay que enviarle el mensaje, indicar si el mensaje se ha enviado, y el autor
#que ha escrito el mensaje
CREATE TABLE enviados(
	claveenvio INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fechaenvio VARCHAR(10) NOT NULL, 
	clavemensajes int NOT NULL,
	clavetutores int NOT NULL,
	enviado SET('si', 'no') DEFAULT 'no',
	autor VARCHAR (15) NOT NULL,
	FOREIGN KEY (clavetutores) REFERENCES tutores(clavetutores),
	FOREIGN KEY (clavemensajes) REFERENCES mensajes(clavemensajes)
); 

#Este es el unico registro que tendra la base de datos, guarda al SuperAdmin y la contraseña.
INSERT INTO usuarios VALUES(NULL,'SuperAdmin','','uned');
=======
CREATE TABLE mensajes (
	clavemensajes INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	texto VARCHAR(140) NOT NULL,
	claveusuarios int not null,
	FOREIGN KEY (claveusuarios) REFERENCES usuarios(claveusuarios)
);


CREATE TABLE enviados(
	claveenvio int(10) ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fechaenvio timestamp not null, 
	clavemensajes int NOT NULL,
	clavetutores int NOT NULL,
	enviado SET('si', 'no') DEFAULT 'no',
	claveusuarios int not null,
	FOREIGN KEY (clavetutores) REFERENCES tutores(clavetutores),
	FOREIGN KEY (clavemensajes) REFERENCES mensajes(clavemensajes),
	FOREIGN KEY (claveusuarios) REFERENCES usuarios(claveusuarios)
); 
>>>>>>> c861466fcb0c0aa2c5f0ebb5828109e33c5737ab
