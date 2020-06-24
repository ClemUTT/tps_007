
<!-- ----- debut config -->
<?php

// Utile pour le débugage car c'est un interrupteur pour les echos et print_r.
const DEBUG = FALSE;

// Configuration de la base de données
$dsn = 'mysql:dbname=plantiec;host=localhost;charset=utf8';
$username = 'plantiec';
$password = 'nXPgHawY';


// chemin absolu vers le répertoire du projet SUR DEV-ISI 
$root = "/home/etu/plantiec/www/lo07_tp/projet";


if (DEBUG) {
 echo ("<ul>");
 echo (" <li>dsn = $dsn</li>");
 echo (" <li>username = $username</li>");
 echo (" <li>password = $password</li>");
 echo ("<li>---</li>");
 echo (" <li>root = $root</li>");

 echo ("</ul>");
}
?>

<!-- ----- fin config -->




