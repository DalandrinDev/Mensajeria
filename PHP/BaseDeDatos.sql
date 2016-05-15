CREATE DATABASE mensajeria;
USE mensajeria;

CREATE TABLE tutores (
	clavetutores INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	apellidos VARCHAR(50) NOT NULL,
	alias VARCHAR(15) NOT NULL,
	facultad VARCHAR(15) NOT NULL
);

CREATE TABLE usuarios (
	claveusuarios INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	nombre VARCHAR(10) NOT NULL,
	apellidos VARCHAR(40) NOT NULL,
	rol SET('admin','tutor','superadmin','user') DEFAULT 'admin',
	contrasena VARCHAR(4) NOT NULL
);

CREATE TABLE mensajes (
	clavemensajes INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	texto VARCHAR(140) NOT NULL,
	autor VARCHAR(20) NOT NULL,
	claveusuarios int not null,
	FOREIGN KEY (claveusuarios) REFERENCES usuarios(claveusuarios)
);


CREATE TABLE enviados(
	claveenvio int(10) ZEROFILL NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fechaenvio timestamp not null, 
	claveusuarios int NOT NULL, 
	clavemensajes int NOT NULL, 
	FOREIGN KEY (claveusuarios) REFERENCES usuarios(claveusuarios),
	FOREIGN KEY (clavemensajes) REFERENCES mensajes(clavemensajes)
); 
