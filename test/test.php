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

<?php



try{
    $bdd = new PDO('mysql:host=localhost;dbname=LO07_2020;character=utf8', 'phpmyadmin', 'root');
} catch (PDOException $e){
    echo "erreur !!!!!! <br/>";
    printf("%s - %s<p/>\n", $e->getMessage(), $e->getCode());
}

try {
    $requete5 = "select * from vinXYZ";
    $statement5 = $bdd->query($requete5);
} catch (PDOException $e){
    echo "il y aerreur";
}



?>

</body>
</html>