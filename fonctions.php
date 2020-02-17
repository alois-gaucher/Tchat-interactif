<?php
// Connexion bdd
function connect_bdd() {
    include("config.inc.php");
    $bdd = new PDO('mysql:host=localhost;dbname=m3206', $user, $pass);
    return $bdd;
}

?>