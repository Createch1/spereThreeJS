<?php

// connexion à la bdd
/*$host = 'mysql:host=localhost;dbname=';
$login = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // option 1 : pour afficher les erreurs SQL pour afficher les erreurs SQL
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // option 2 : définit le jeu de caractères des echanges avec la BDD, pour forcer l'encodage en utf8
);
	$pdo = new PDO('mysql:host=localhost;dbname=', //  mysql : serveur ; nom de la bdd
		'root', // pseudo de la bdd
		'', // mdp de la bdd
		array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // option 1 : pour afficher les erreurs SQL
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // option 2 : définit le jeu de caractères des échanges avec la BDD
		)
	);*/

//declaration des constantes
//constante contenant le chemin racine du projet
define('URL', 'http://localhost/PHP/spereThreeJS/'); // on met le / à la fin pour éviter les erreurs de chemin
// chemin projet
define('PROJECT_PATH', '/PHP/spereThreeJS/');
// chemin server
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']); // cette ligne ne sera jamais à modifier


// envoie de mail 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;