<?php
require('config.inc.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tchat - Aloïs GAUCHER</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Image and text -->
<nav class="navbar navbar-dark rgba-black-strong">
    <a class="navbar-brand" href="#">
        <img src="img/logo.png" height="30" class="d-inline-block align-top"
             alt="mdb logo"> Tchat interactif
    </a>
</nav>

<div class="container pt-lg-3">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <table class="table mx-auto">
                <thead>
                <tr>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Message</th>
                </tr>
                </thead>
                <tbody id="chat">
                </tbody>
            </table>
        </div>
        <div class="col-md-4 col-sm-12">
            <form method="POST" action="dire.php" class="border border-light p-5 mx-auto">
                <p class="h4 mb-4 text-center">Envoyer un message</p>
                <div class="md-form">
                    <input name="pseudo" type="text" id="pseudo" class="form-control">
                    <label for="pseudo">Pseudo</label>
                </div>
                <div class="md-form">
                    <textarea name="message" type="text" id="message" class="md-textarea form-control"
                              rows="3"></textarea>
                    <label for="message">Message</label>
                </div>
                <button class="btn btn-info btn-block my-4" id="envoi" type="submit">Envoyer le message</button>
        </div>
        </form>
    </div>
</div>
</div>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>

<script>
    $('#envoi').click(function (e) {
        e.preventDefault(); // on empêche le bouton d'envoyer le formulaire

        var pseudo = $('#pseudo').val();
        var message = $('#message').val();

        if (pseudo != "" && message != "") { // on vérifie que les variables ne sont pas vides
            $.ajax({
                url: "dire.php", // on donne l'URL du fichier de traitement
                type: "POST", // la requête est de type POST
                data: "pseudo=" + pseudo + "&message=" + message // et on envoie nos données
            });

            $('#chat').prepend('<tr><td>' + pseudo + '</td><td>' + message + '</td></tr>'); // on ajoute le message dans la zone prévue
        }
    });
</script>

<script>
    $(document).ready(function () {
        setInterval(function () {
            console.info('ça tourne');
            $.get("affiche.php").done(function (donnees) {
                $("#chat").html(donnees);
            });
        }, 1000);
    });
</script>

</body>
</html>