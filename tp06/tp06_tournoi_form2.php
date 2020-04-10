<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <form method="get" action="tp06_tournoi_action.php">
        <?php
        $nbJoueurs = $_GET["nbjoueurs"];

        for ($i = 1; $i <= $nbJoueurs; $i+=1){
            $nom = 'nom_'.$i;
            $prenom = 'prenom_'.$i;
            $email = 'email_'.$i;
            echo "<h3>Joueur n° $i</h3>";
            echo "<div class='form-group'>";
            echo "<label>Nom</label>";
            echo "<input class='form-control' type='text' name=$nom />";
            echo "<label>Prénom</label>";
            echo "<input class='form-control' type='text' name=$prenom />";
            echo "<label>Email</label>";
            echo "<input class='form-control' type='email' name=$email />";
            echo "</div>";
        }
        echo "<input class='form-control' type='submit' />";
        ?>
    </form>
</div>


</body>
</html>


