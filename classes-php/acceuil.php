<?php 
require 'user-pdo.php';
session_start();

if(isset($_SESSION['login'])) {
    echo 'Bonjour '.$_SESSION['login'];
}

// // SE DECONNECTER
// if(isset($_POST['deconnect'])) {
//     $user = new Userpdo();
//     $user->disconnect();
//     header("Refresh:0");
// }


// // SUPPRIMER
// if(isset($_POST['supprimer'])) {
//     $user = new Userpdo();
//     $user->delete($_SESSION['login']);
//     // header("Refresh:0");
// }

$user = new Userpdo();
$res = $user->getAllInfos();
var_dump($res);

// $user = new Userpdo();
// $res = $user->getLogin();
// var_dump($res);


?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
        <meta name="description" content="Création d'un site web de réservation de salles">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
        <link href="../styles/css/css.css" rel="stylesheet">
    </head>
    <body>
        <?php require 'header.php'?>
        <main>
            <section>
                <h1>Accueil</h1>

                <form action="" method="post">
                    <input type="submit" id="deconnect" name="deconnect" value="Déconnexion">
                </form> 

                <form action="" method="post">
                    <input type="submit" id="supprimer" name="supprimer" value="Supprimer">
                </form>
            </section>
        </main>
        <footer>

        </footer>
    </body>
</html>