<?php
require ('fonctions.php');
require ('config.inc.php');

// 1. Récupérer les données
$pseudo = $_POST['pseudo'];

$message = $_POST['message'];

// 2.Préparer la requête sql pour récupérer les articles.
$req = 'INSERT INTO chat(pseudo, message) VALUES ("'. $pseudo .'", "'. $message .'")';

// 3. Exécuter la requete
$ajout = connect_bdd()->query($req);

?>