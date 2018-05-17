DROP database IF EXISTS project;

CREATE database project CHARACTER SET = 'utf8';

USE project;

CREATE TABLE IF NOT EXISTS users(
	username VARCHAR(32) NOT NULL,
	password VARCHAR(255) NOT NULL,
	mail VARCHAR(128) NOT NULL,
	birthDate DATE NOT NULL,
	firstName VARCHAR(40) NOT NULL,
	lastName VARCHAR(40) NOT NULL,
	image VARCHAR(50),
	phone VARCHAR(16),
	bankAccount CHAR(34),
	isAdmin BOOLEAN NOT NULL DEFAULT FALSE,
	PRIMARY KEY(username, mail)
) engine = innodb;

CREATE TABLE IF NOT EXISTS rents(
	id BIGINT UNSIGNED NOT NULL auto_increment,
	username VARCHAR(32) NOT NULL,
	num VARCHAR(5) NOT NULL,
	address VARCHAR(80) NOT NULL,
	cp VARCHAR(10) NOT NULL,
	location VARCHAR(80) NOT NULL,
	country VARCHAR(50) NOT NULL,
	price NUMERIC(7, 2) NOT NULL,
	isLocated BOOLEAN NOT NULL DEFAULT FALSE,
	dateBegin DATE,
	dateEnd DATE,
	rooms TINYINT NOT NULL,
	animals BOOLEAN,
	PRIMARY KEY(id),
	KEY(username)
) engine = innodb;

ALTER TABLE rents ADD CONSTRAINT fkusersrents
FOREIGN KEY(username) REFERENCES users(username);


--country
CREATE TABLE IF NOT EXISTS country(
    id int(11) NOT NULL auto_increment,
    sortname varchar(3) not null,
    name varchar(150) NOT NULL,
    phoneSample int(11) NOT NULL,
    PRIMARY KEY (id)
) engine = innodb;

--states
CREATE TABLE IF NOT EXISTS states (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(30) NOT NULL,
  country_id int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (id)
) ENGINE = InnoDB;

--cities
CREATE TABLE IF NOT EXISTS cities (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(30) NOT NULL,
  state_id int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB;



--Sign up
INSERT INTO users(username, password, mail, birthDate, firstName, lastName) VALUES
('example', 'example', 'example@student.helha.be', '1993/03/15', 'Jean', 'Dubuisson');			--if wrong("username / mail already exists")

--Sign up with phone number
INSERT INTO users(username, password, mail, birthDate, firstName, lastName, phone) VALUES
('example2', 'example', 'example2@student.helha.be', '1993/03/15', 'Melissa', 'Perlipopette', '065355022');			--if wrong("username / mail already exists")

--Sign up with bank account
INSERT INTO users(username, password, mail, birthDate, firstName, lastName, phone, bankAccount) VALUES
('example3', 'example', 'example3@student.helha.be', '1993/03/15', 'Pierre', 'Kiroule', '065355022', 'BE12-3456-1234-5678');			--if wrong("username / mail already exists")

--add image
UPDATE users SET image = 'image' where username like 'example';		--Changer d'image

--Add Location
INSERT INTO rents(username, num, address, cp, location, country, rooms, price) VALUES
('example',1, 'example street', '7000', 'Mons', 'Belgium', 3, 66.66);

INSERT INTO rents(username, num, address, cp, location, country, rooms, price) VALUES
('example',2, 'example street', '7000', 'Mons', 'Belgium', 3, 66.66);

--get usermail
SELECT mail FROM users INNER JOIN rents ON users.username = rents.username WHERE rents.id = 1;    

-- login
SELECT username, password, mail FROM users WHERE password LIKE 'example' AND (username LIKE 'example' OR mail LIKE 'example@student.helha.be');			--if wrong password, error ("wrong password)

--Set location
-- if located
UPDATE rents SET isLocated = true WHERE id = 1;
UPDATE rents SET dateBegin = '2018/05/15' WHERE id = 1 AND isLocated = 1;
UPDATE rents SET dateEnd = '2018/05/25' WHERE ('2018/05/25' > dateBegin) AND id = 1;		--id donné par php

--Calculer le prix
SELECT DATEDIFF(dateEnd, dateBegin) * price AS 'total price' FROM rents WHERE id = 1;

--Short version
UPDATE rents SET isLocated = true,
dateBegin = 'implements beginDate',
dateEnd = 'implements endDate' WHERE id == 1 AND('endDate' > 'beginDate')
WHERE id == 1;		--id donné par php

-- if ended location
UPDATE rents SET isLocated = false, dateBegin = null, dateEnd = null WHERE dateEnd < CURDATE();			--id donné par php

--tri par cp
SELECT(*) FROM rents WHERE cp LIKE 'cp%';			--cp donné par php

--tri par pays
SELECT(*) FROM rents WHERE country LIKE 'country%';		--Pays donné par php, on trie en direct au moment ou le gars écrit donc on prend toutes les lettres après

--tri par localité
SELECT(*) FROM rents WHERE localite LIKE 'localite%';		--Ville donnée par php, on trie en direct ...

--par utilisateur
SELECT(*) FROM rents WHERE username LIKE 'username%';		--username donné par php, on trie en direct

--par nombre de chambres
SELECT (*) FROM rents WHERE rooms >= 2			--Nombre de chambes donné par php

--Fusionner les requêtes pour un tri multiple



