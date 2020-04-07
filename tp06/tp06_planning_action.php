<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Affichage des données du formulaire</title>
</head>
<body>

<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            Liste des paramètres reçus
        </div>
        <div class="panel-body">


            <?php
            echo "<table style='background-color: lemonchiffon' class='table table-striped'>";
            foreach ($_GET as $key => $value) {
                $value = is_array($value) ? implode(", ", $value) : $value;
                echo "<tr><th>$key</th><td>$value</td></tr>";
            }
            echo "</table>";


            ?>
        </div>
    </div>
</div>
</body>
</html>