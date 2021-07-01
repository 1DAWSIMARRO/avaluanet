drop database if exists avaluanet;
create database avaluanet;
use avaluanet;

CREATE TABLE IF NOT EXISTS professor (
	dni VARCHAR(9) PRIMARY KEY,
    username VARCHAR(15) NOT NULL,
    cognoms VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
    password VARCHAR(15) NOT NULL
);

ALTER TABLE professor
MODIFY username VARCHAR(15)
CHARACTER SET utf8mb4
COLLATE utf8mb4_0900_as_cs;

CREATE TABLE IF NOT EXISTS grup (
    nom VARCHAR (15) PRIMARY KEY,
    curs VARCHAR(20) NOT NULL
);

CREATE TABLE IF NOT EXISTS asignat (
	codi INT PRIMARY KEY AUTO_INCREMENT,
    nom_grup VARCHAR (15) NOT NULL,
	dni_prof VARCHAR(9) NOT NULL,
	foreign key (nom_grup) references grup (nom),
	foreign key (dni_prof) references professor (dni)
);

CREATE TABLE IF NOT EXISTS asignatura (
	codi int PRIMARY KEY AUTO_INCREMENT,
	nom varchar(50) NOT NULL,
	hores int NOT NULL,
	dni_prof VARCHAR(9),
	foreign key (dni_prof) references professor (dni)
);

-- CREATE TABLE IF NOT EXISTS impartix (
--     dni_prof VARCHAR(9),
--     codi_grup INT,
--     codi_asignatura int,
-- 	primary key(dni_prof,codi_grup,codi_asignatura),
-- 		foreign key(dni_prof) references professor(dni),
-- 		foreign key(codi_grup) references grup(codi),
-- 		foreign key(codi_asignatura) references asignatura(codi)
-- );

CREATE TABLE IF NOT EXISTS alumne(
	NIA INT PRIMARY KEY,
	nom VARCHAR(20) NOT NULL,
	cognoms VARCHAR(40) NOT NULL,
	tel INT NOT NULL,
	email VARCHAR(50) NOT NULL,
	nom_grup VARCHAR (15) NOT NULL,
		foreign key (nom_grup) references grup (nom)
		ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS avaluable (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nom varchar(30) NOT NULL,
	data_lliurament DATE  NOT NULL,
	tipus varchar(10) NOT NULL,
	avaluacio INT NOT NULL
);

CREATE TABLE IF NOT EXISTS qualiflicacio (
	nota int NOT NULL,
	id int NOT NULL,
	NIA int(8) NOT NULL,
	codi_asignatura int NOT NULL,
	primary key(id,NIA,codi_asignatura),
		foreign key(NIA) references alumne(NIA),
		foreign key(codi_asignatura) references asignatura(codi),
		foreign key(id) references avaluable(id)
);

CREATE TABLE IF NOT EXISTS matricula (
	NIA int(8) NOT NULL,
	codi_asignatura int NOT NULL,
	primary key(NIA,codi_asignatura),
		foreign key(NIA) references alumne(NIA),
		foreign key(codi_asignatura) references asignatura(codi)
		ON DELETE CASCADE
);

INSERT INTO professor (dni,username,cognoms,email,password) VALUES ('12345678A', 'Jorge', 'Nose','jorge@hola.es', '123');
insert into asignatura (nom,hores,dni_prof) VALUE ('info', '20','12345678A');
insert into grup (nom,curs) VALUES ('1DAW', 'GS');
insert into alumne (NIA,nom,cognoms,tel,email,nom_grup) VALUES ('88888888', 'Andreu', 'Mico Bleda', '999999999', 'andreu@gmail.com', '1DAW');
INSERT INTO avaluable (nom, data_lliurament, tipus, avaluacio) VALUES ("ex1", STR_TO_DATE("03-04-21","%d-%m-%y"), "activitat","3");
