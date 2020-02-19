<?php
require ('fonctions.php');
require ('config.inc.php');

// 1. Récupérer les données
$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);

// 2.Préparer la requête sql pour récupérer les articles.
$req = 'INSERT INTO chat(ip, pseudo, message) VALUES ("'.getIp().'", "'. $pseudo .'", "'. $message .'")';

// 3. Exécuter la requete
$ajout = connect_bdd()->query($req);

?>