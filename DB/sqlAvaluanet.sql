drop database if exists avaluanet;
create database avaluanet;
use avaluanet;

CREATE TABLE IF NOT EXISTS professor (
	dni VARCHAR(9) PRIMARY KEY,
    cognoms VARCHAR(30) NOT NULL,
    login VARCHAR(10) NOT NULL,
    password VARCHAR(15) NOT NULL,
	email VARCHAR(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS grup (
	codi INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (15) NOT NULL,
    curs VARCHAR(20) NOT NULL,
    aula VARCHAR(10) NOT NULL,
    n_alumnes INT NOT NULL
);

CREATE TABLE IF NOT EXISTS asignatura (
	codi int PRIMARY KEY AUTO_INCREMENT,
	nom varchar(50) NOT NULL,
	grup varchar(10),
	hores int NOT NULL,
	dni_prof VARCHAR(9),
	foreign key (dni_prof) references professor (dni)
);

CREATE TABLE IF NOT EXISTS alumne(
	NIA INT PRIMARY KEY,
	nom VARCHAR(20) NOT NULL,
	cognoms VARCHAR(40) NOT NULL,
	tel INT NOT NULL,
	email VARCHAR(50) NOT NULL,
	codi_grup int NOT NULL,
		foreign key (codi_grup) references grup (codi)
		ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS avaluable (
	id INT PRIMARY KEY,
	data_lliurament DATE  NOT NULL,
	tipus varchar(10) NOT NULL,
	ponderacio INT NOT NULL,
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

insert into grup (codi,nom,curs,aula,n_alumnes)
VALUES ('01', '1DAW', 'GS', '20', '15');
insert into alumne (NIA,nom,cognoms,tel,email,codi_grup)
VALUES ('88888888', 'Andreu', 'Mico Bleda', '999999999', 'andreu@gmail.com', '01');
INSERT INTO professor (dni,nom,cognoms,login,password,email) VALUES ('12345678A', 'Jorge', 'Nose', 'jorge', '123','jorge@hola.es');
insert into asignatura (nom,grup,hores,dni_prof) VALUE ('info', '1DAW', '20','12345678A');