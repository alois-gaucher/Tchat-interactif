<?php
include("config.inc.php");
$bdd = new PDO('mysql:host=localhost;dbname=m3206', $user, $pass);

// on récupère les messages ayant un id plus grand que celui donné
$requete = 'SELECT * FROM chat ORDER BY id DESC LIMIT 10';
$resultat = $bdd->query($requete);
    // on inscrit tous les nouveaux messages dans une variable
    while ($donnees = $resultat->fetch()) {
      echo '<tr><td>'.$donnees['pseudo'].'</td><td>'.str_replace(':)', '😀', $donnees['message']).'</td></tr>';
    }

?>
