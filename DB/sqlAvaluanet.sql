drop database if exists avaluanet;
create database avaluanet;
use avaluanet;

CREATE TABLE IF NOT EXISTS professor (
	dni VARCHAR(9) PRIMARY KEY,
    nom VARCHAR (15) NOT NULL,
    cognoms VARCHAR(30) NOT NULL,
    login VARCHAR(10) NOT NULL,
    password VARCHAR(15) NOT NULL,
	email VARCHAR(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS grup (
	codi INT PRIMARY KEY,
    nom VARCHAR (15) NOT NULL,
    curs VARCHAR(20) NOT NULL,
    aula VARCHAR(10) NOT NULL,
    n_alumnes INT NOT NULL
);

CREATE TABLE IF NOT EXISTS asignatura (
	codi int PRIMARY KEY AUTO_INCREMENT,
	nom varchar(50) NOT NULL,
	grup varchar(10),
	hores int NOT NULL
);

CREATE TABLE IF NOT EXISTS impartir(
	dni VARCHAR(9) NOT NULL,
	codi_asignatura INT NOT NULL,
	codi_grup INT NOT NULL,
		FOREIGN KEY (dni) references professor(dni),
		FOREIGN KEY (codi_asignatura) REFERENCES asignatura (codi),
		FOREIGN KEY (codi_grup) REFERENCES grup (codi)
);

CREATE TABLE IF NOT EXISTS alumne(
	NIA INT PRIMARY KEY,
	nom VARCHAR(20) NOT NULL,
	cognoms VARCHAR(40) NOT NULL,
	tel INT NOT NULL,
	email VARCHAR(50) NOT NULL,
	codi_grup int NOT NULL,
		foreign key (codi_grup) references grup (codi)
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
);

insert into grup (codi,nom,curs,aula,n_alumnes)
VALUES ('01', '1DAW', 'GS', '20', '15');
insert into alumne (NIA,nom,cognoms,tel,email,codi_grup)
VALUES ('88888888', 'Andreu', 'Mico Bleda', '999999999', 'andreu@gmail.com', '01');
insert into asignatura (nom,grup,hores) VALUE ('info', '1DAW', '20')
