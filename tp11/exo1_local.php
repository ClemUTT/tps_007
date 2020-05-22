<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>TP11</title>
</head>
<body style="background-color: lemonchiffon">
<div class="container">
<?php
//Exercice 1
function panel_head($titre){
    echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'>";
            echo "<h4>$titre</h4>";
        echo "</div>";
    echo "</div>";
}
panel_head("Connexion à la base LO07_2020 sur mon ordinateur personnel");

$dsn = 'mysql:host=localhost;dbname=LO07_2020;character=utf8';
$username = 'phpmyadmin';
$password = 'root';

echo "<ul>";
    echo "<li>$dsn</li>";
    echo "<li>$username</li>";
    echo "<li>$password</li>";
echo "</ul>";

$bdd;
try {
    $bdd = new PDO($dsn, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    printf("%s - %s<p/>\n", $e->getMessage(), $e->getCode());
}

panel_head("Requete SQL : query = select * from vin where annee = 1976)");

$requete = "select * from vin where annee = 1976";
$response = $bdd->query($requete);

//print_r($response->fetch());
//while($row = $response->fetch()){
//    print_r($row);
//}
echo "<ol>";
while($row = $response->fetch()){
    echo "<li>";
    $res = 'vin ('. $row['id'];
    $res .= ', '. $row['cru'];
    $res .= ', '. $row['annee'];
    $res .= ', '. $row['degre'] .')';
    echo $res;
    echo "</li>";
}
echo "</ol>";

panel_head("Insertion d'un tuple : insert into vin values (1002, 'Champagne de Troyes', 2019, 11.45)");
$req = "insert into vin values (1002, 'Champagne de Troyes', 2019, 11.45)";
$send = $bdd->exec($req);
echo "<p>Nombre de tuples ajoutés : $send</p>";

panel_head("Résultats sans un tableau Bootstrap (query = select * from vin where annee = 1976)");
$requete1 = "select * from vin where annee = 1976";
$response1 = $bdd->query($requete);
echo "<table class='table table-bordered bg-success'>";
while($row = $response1->fetch()){
    echo "<tr>";
    echo '<td>'. $row['id'] .'</td>';
    echo '<td> '. $row['cru'] .'</td>';
    echo '<td> '. $row['annee'] .'</td>';
    echo '<td> '. $row['degre'] .'' .'</td>';
    echo "</tr>";
}
echo "</table>";

panel_head("Récupération dynamique des noms des attributs (query = select id, cru, from vin where annee = 1976)");
$requete2 = "select id, cru from vin where annee = 1976";
$response2 = $bdd->query($requete2);
$nbColumn = $response2->columnCount();
echo "<table class='table table-bordered bg-success'>";
for ($i=0; $i < $nbColumn; $i+=1){
    echo '<th class="bg-danger">'. $response2->getColumnMeta($i)['name'];
    echo '</th>';
}
while($row = $response2->fetch()){
    echo "<tr>";
    for ($i=0; $i < $nbColumn; $i+=1){
        echo '<td>'. $row[$response2->getColumnMeta($i)['name']] .'</td>';
    }
    echo "</tr>";
}
echo "</table>";

panel_head("Requete paramétrée (par position avec annee = 1980)");
$requete3 = "select cru, annee from vin where annee = ?";
$statement = $bdd->prepare($requete3);
$statement->execute([1980]);

echo "<table class='table table-bordered bg-success'>";
for ($i=0; $i < $statement->columnCount(); $i+=1){
    echo '<th class="bg-danger">'. $statement->getColumnMeta($i)['name'];
    echo '</th>';
}
while($row = $statement->fetch()){
    echo "<tr>";
    for ($i=0; $i < $statement->columnCount(); $i+=1){
        echo '<td>'. $row[$statement->getColumnMeta($i)['name']] .'</td>';
    }
    echo "</tr>";
}
echo "</table>";


panel_head("Parametre nommés");
$requete4 = "select * from vin where annee = :an and degre = :dg";
$statement4 = $bdd->prepare($requete4);
$statement4->execute([
        'an' => 1980,
        'dg' => 10.00
]);

echo "<table class='table table-bordered bg-success'>";
for ($i=0; $i < $statement4->columnCount(); $i+=1){
    echo '<th class="bg-danger">'. $statement4->getColumnMeta($i)['name'];
    echo '</th>';
}
while($row = $statement4->fetch()){
    echo "<tr>";
    for ($i=0; $i < $statement4->columnCount(); $i+=1){
        echo '<td>'. $row[$statement4->getColumnMeta($i)['name']] .'</td>';
    }
    echo "</tr>";
}
echo "</table>";


panel_head("Gestion des erreurs");

$requete5 = "select * from vinXYZ";
$statement5 = $bdd->query($requete5);

panel_head("Gestion des transactions");

try {
    $database = new PDO($dsn, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    echo "début de la transaction <br/>";
    $database->beginTransaction();

    echo "insertion  <br/>";
    $requete6 = "insert into vin values (2000, 'Champagne de Troyes', 2019, 11.45)";
    $database->exec($requete6);
    $database->exec($requete6);

    echo "fin  <br/>";
    $database->commit();

} catch (PDOException $e) {
    //$database->rollBack();
    echo "Transaction eronnée ! ";
   // printf("%s - %s<p/>\n", $e->getMessage(), $e->getCode());
}
?>
</div>
</body>
</html>
