<?php
try
{
	$bdd = new PDO('mysql:host=localhost;','root','bailoba112');
	$bdd -> exec('CREATE DATABASE if not exists tpinscription');
	$bdd = new PDO('mysql:host=localhost;dbname=tpinscription;','root','bailoba112');
	$bdd -> exec('CREATE TABLE if not exists etudiant
	(
	numero int(25) primary key auto_increment,
	matricule varchar (255),
	prenom varchar(255),
	nom varchar(255),
	date_naiss date,
	lieu_naiss varchar(255),
	email varchar (255),
	adresse varchar (255),
	sexe varchar (255),
	serie varchar (255),
	filiere varchar (255),
	somme int(25),
	reliquat varchar (255)
		)');
	$bdd->exec('CREATE TABLE if not exists administrateur
						(
	login varchar(255) primary key NOT NULL,
	 mot_de_passe varchar(255) NOT NULL
						)');
}
catch (Exception $e)
{
	die('Error'.$e->getMessage());
}
?>