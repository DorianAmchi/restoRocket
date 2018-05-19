-- On crée la database si elle n'existe pas.
CREATE DATABASE IF NOT EXISTS RESTO_DB_BWB;

-- On se place sur la bonne base de données.
USE RESTO_DB_BWB;

DROP TABLE IF EXISTS USERS;
-- On crée une table USERS si elle n'existe pas.
create table if not exists USERS(
  id INT PRIMARY KEY KEY NOT NULL AUTO_INCREMENT,
  username VARCHAR(20),
  password VARCHAR(1024),
  email VARCHAR(320)
);

DROP TABLE IF EXISTS RESTOS;
-- On crée une table RESTO si elle n'existe pas.
create table if not exists RESTOS(
  id INT PRIMARY KEY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(20),
  adresse VARCHAR(360),
  email VARCHAR(320),
  tel VARCHAR(10)
);


DROP TABLE IF EXISTS CARTES;
-- On crée une table Cartes si elle n'existe pas.
create table if not exists CARTES(
  id INT PRIMARY KEY KEY NOT NULL AUTO_INCREMENT,
  id_resto INT,
  nom VARCHAR(48),
  description VARCHAR(1024)
);


DROP TABLE IF EXISTS MENUS;
-- On crée une table Menu si elle n'existe pas.
create table if not exists MENUS(
  id INT PRIMARY KEY KEY NOT NULL AUTO_INCREMENT,
  id_carte INT,
  nom VARCHAR(48),
  description VARCHAR(1024),
  url_image VARCHAR(4242)
);

DROP TABLE IF EXISTS PLATS;
-- On crée une table Plat si elle n'existe pas.
create table if not exists PLATS(
  id INT PRIMARY KEY KEY NOT NULL AUTO_INCREMENT,
  id_menu INT,
  id_type INT,
  prix FLOAT(4.2),
  nom VARCHAR(48)
);

DROP TABLE IF EXISTS TYPES_DE_PLAT;
-- On crée une table Type de Plat si elle n'existe pas.
create table if not exists TYPES_DE_PLAT(
  id INT PRIMARY KEY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(48)
);

/*Insertion de données - jeu de test*/

/*Ajout des entrées dans la table des types de plats.*/
insert into USERS (username, password, email) VALUES("dorian","amchi","dorian.amchji@goak.com");
insert into USERS (username, password, email) VALUES("fa","chi","amchji@goak.com");
insert into USERS (username, password, email) VALUES("qsd","aqdsi","qsdqsdji@goak.com");
-- insert into TYPES_DE_PLAT (nom) VALUES('entree');
-- insert into TYPES_DE_PLAT (nom) VALUES('plat');
-- insert into TYPES_DE_PLAT (nom) VALUES('dessert');
-- 
-- insert into PLATS(id_type, nom, prix) VALUES(1, 'salade grecque', 4.5);
-- insert into PLATS(id_type, nom, prix) VALUES(2, 'doner  kebab', 5.5);
-- insert into PLATS(id_type, nom, prix) VALUES(3, 'spaghout', 3);
-- 
-- insert into MENUS(nom, description)  VALUES("Les romains","Les jeux pour le plaisirs");
-- 
-- update PLATS SET id_menu = 1 where id=1;
-- update PLATS SET id_menu = 1 where id=2;
-- update PLATS SET id_menu = 1 where id=3;
