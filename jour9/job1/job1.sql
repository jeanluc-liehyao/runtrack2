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