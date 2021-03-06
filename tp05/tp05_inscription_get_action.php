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

    // exercice 2.8 : Si l'utilisateur ne rempli pas un champ du formulaire, php le considère commme une chaîne de caractère vide.
    // exercice 2.9 : On doit préciser l'indice. exemple : $_GET["test"][0]

    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $email = $_GET["email"];
    $ddn = $_GET["ddn"];
    $sexe = $_GET["sexe"];
    $origine = $_GET["origine"];
    $st07 = isset($_GET["st07"]) ? "oui" : "non";
    $st09 = isset($_GET["st09"]) ? "oui" : "non";
    $st10 = isset($_GET["st10"]) ? "oui" : "non";
    $se = isset($_GET["se"]) ? "oui" : "non";
    $modules = implode(", ", $_GET["modules"]);
    $infos = $_GET["infos"];

    echo "<table style='background-color: lemonchiffon' class='table table-striped'>";
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

