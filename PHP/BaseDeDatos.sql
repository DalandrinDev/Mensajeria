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
