<?php
// Connexion bdd
function connect_bdd() {
    include("config.inc.php");
    $bdd = new PDO('mysql:host=localhost;dbname=m3206', $user, $pass);
    return $bdd;
}

function getIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

?>