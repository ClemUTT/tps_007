<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Réponse</title>
</head>
<body style='background-color: lemonchiffon'>
<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Utilisation de tableaux
        </div>
        <div class="panel-body">
            Liste des paramètres reçus
        </div>
    </div>
    <?php

    // exercice 3.5 : dans l'url il n'y a pas les valeurs des champs entrés par l'utilisateur
    /* exercice 3.6 : Il faut utiliser POST lorsque l'on veut gérer un grand volume de données (ex : l'envoi de fichiers...). En effet, le nombre de caractère dans une URL est limité.
    C'est également recommendé lorsque l'utilisateur rentre un mot de passe ou autres données sensibles*/

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $ddn = $_POST["ddn"];
    $sexe = $_POST["sexe"];
    $origine = $_POST["origine"];
    $st07 = isset($_POST["st07"]) ? "oui" : "non";
    $st09 = isset($_POST["st09"]) ? "oui" : "non";
    $st10 = isset($_POST["st10"]) ? "oui" : "non";
    $se = isset($_POST["se"]) ? "oui" : "non";
    $modules = implode(", ", $_POST["modules"]);
    $infos = $_POST["infos"];

    echo "<table class='table table-striped'>";
    echo '<thead>';
    echo '<tr><th>name</th><th>valeur {s}</th></tr>';
    echo '</thead>';
    echo '<tbody>';
    echo "<tr><td>nom</td><td>$nom</td></tr>";
    echo "<tr><td>prénom</td><td>$prenom</td></tr>";
    echo "<tr><td>email</td><td>$email</td></tr>";
    echo "<tr><td>date_naissance</td><td>$ddn</td></tr>";
    echo "<tr><td>sexe</td><td>$sexe</td></tr>";
    echo "<tr><td>origine</td><td>$origine</td></tr>";
    echo "<tr><td>ST07</td><td>$st07</td></tr>";
    echo "<tr><td>ST09</td><td>$st09</td></tr>";
    echo "<tr><td>ST10</td><td>$st10</td></tr>";
    echo "<tr><td>SE</td><td>$se</td></tr>";
    echo "<tr><td>modules</td><td>$modules</td></tr>";
    echo "<tr><td>textarea</td><td>$infos</td></tr>";
    echo '</tbody>';
    echo "</table>";
    ?>
</div>
</body>
</html>

