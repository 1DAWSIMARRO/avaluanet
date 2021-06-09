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

	codi INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (15) NOT NULL,
    curs VARCHAR(20) NOT NULL,
    aula VARCHAR(10) NOT NULL,
    n_alumnes INT NOT NULL
);

CREATE TABLE IF NOT EXISTS asignatures (

	codi int(6) PRIMARY KEY AUTO_INCREMENT,
	nom varchar(50) NOT NULL,
	nivell varchar(10) NOT NULL,
	curs int(1) NOT NULL,
	grup varchar(1),
	hores int(2) NOT NULL
);

CREATE TABLE IF NOT EXISTS impartir(

	dni VARCHAR(9) NOT NULL,
	codi_asignatures INT(6) NOT NULL,
	codi_grup INT NOT NULL,
		FOREIGN KEY (dni) references professor(dni),
		FOREIGN KEY (codi_asignatures) REFERENCES asignatures (codi),
		FOREIGN KEY (codi_grup) REFERENCES grup (codi)
);

CREATE TABLE IF NOT EXISTS alumne(

	NIA INT(8) PRIMARY KEY,
	nom VARCHAR(20) NOT NULL,
	cognoms VARCHAR(40) NOT NULL,
	tel INT(9) NOT NULL,
	email VARCHAR(50) NOT NULL,
	codi INT NOT NULL,
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
	codi_asignatures int(6) NOT NULL,
	primary key(id,NIA,codi_asignatures),
		foreign key(NIA) references alumne(NIA),
		foreign key(codi_asignatures) references asignatures(codi),
		foreign key(id) references avaluable(id)
);

INSERT INTO grup (nom, curs, aula, n_alumnes) VALUES ('DAW','Primer','1A','15');