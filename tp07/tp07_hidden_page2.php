<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    $data = "";
    $ville = ($_GET["ville"] == "Troyes") ? "UTT" : (($_GET["ville"] == "Compiègne") ? "UTC" : "UTBM");
    foreach ($_GET as $key=>$value){
        $data .= $key.'='.$value."&";
    }
    $lien = "<a href=\"analyse_superglobales.php?$data\">analyse_superglobales.php? $data</a>";
    echo 'Pour '.$ville.', l\'URL = '.$lien;
?>

</body>
</html>