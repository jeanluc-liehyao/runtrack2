-- Active: 1754299775448@@127.0.0.1@3306@jour9
DROP DATABASE JOUR9;
CREATE DATABASE JOUR9;

USE JOUR9;

CREATE TABLE etudiants (
    id int AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(255) NOT NULL,
    nom VARCHAR(255) NOT NULL,
    naissance DATE NOT NULL,
    sexe VARCHAR(25) NOT NULL,
    email VARCHAR(255) NOT NULL
)

CREATE TABLE etages (
    id int AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    numero int NOT NULL,
    superficie int NOT NULL
)

CREATE TABLE salles (
    id int AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    id_etage int NOT NULL,
    capacite int NOT NULL
)

/* JOB2 */

INSERT INTO etudiants (prenom, nom, naissance, sexe, email) VALUES
('Cyril',' Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
('Jessica', 'Soriano','1995-09-08', 'Femme', 'jessica@laplateforme.io'),
('Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
( 'Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
( 'Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
( 'Ruben',' Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
( 'Toto',' Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io' );

INSERT INTO etages (nom, numero, superficie) VALUES
('RDC', 0, 500),
('R+1', 1, 500);


INSERT INTO salles(nom, id_etage, capacite) VALUES
( 'Lounge', 1, 100),
( 'Studio Son', 1, 5),
( 'Broadcasting', 2, 50),
('Bocal Peda', 2, 4),
( 'Coworking', 2, 80),
( 'Studio Video', 2, 5);

/* JOB3 */

SELECT * FROM etudiants;

/* JOB4 */

SELECT nom, capacite FROM salles;

/* JOB5 */
SELECT nom, prenom, naissance FROM etudiants WHERE sexe = 'Femme';

/* JOB6 */
SELECT * FROM etudiants WHERE prenom LIKE 'T%';

