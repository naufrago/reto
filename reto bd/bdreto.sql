#base de datos reto

CREATE TABLE niveles (
	id_nivel INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	nombre_nivel VARCHAR(255) NOT NULL, 
	url VARCHAR(255) NOT NULL 
	);

CREATE TABLE usuario (
	id_usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	nombre VARCHAR(255) NOT NULL, 
	apellido VARCHAR(255) NOT NULL, 
	user VARCHAR(255) NOT NULL, 
	password varchar(255) NOT NULL,
	tipo int
	);

CREATE TABLE niveles_completos (
	id_usuario int,
	id_nivel int, 
	time_stamp timestamp
	);
ALTER TABLE niveles_completos ADD FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario);
ALTER TABLE niveles_completos ADD FOREIGN KEY(id_nivel) REFERENCES niveles(id_nivel);

CREATE TABLE ganadores (
	id_ganador INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    id_usuario INT,
	usuario_g VARCHAR(20), 
	time_stamp timestamp);
ALTER TABLE ganadores ADD FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario);

CREATE TABLE nivel_keys (
	id_key INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	nombre_key VARCHAR(255) NOT NULL
	);

CREATE TABLE locked (
	id_locked INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	id_usuario int NOT NULL, 
	url VARCHAR(255) NOT NULL 
	);
ALTER TABLE locked ADD FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario);





CREATE TRIGGER INSER_USER BEFORE INSERT ON usuario
FOR EACH ROW
	
	BEGIN
	Declare encontrado int;
		SET encontrado=(SELECT count(id_usuario) FROM usuario WHERE user=new.user)
			IF(encontrado>0)THEN
            (SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT='el usuario que quiere registrar ya esta asignado ');	
			END IF;
	END;


CREATE TRIGGER INSER_USER BEFORE INSERT ON usuario
FOR EACH ROW
	BEGIN
		IF(new.usuario.user == old.usuario.user )THEN
            (SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT='el usuario que quiere registrar ya esta asignado ');	
		END IF;
	END;

