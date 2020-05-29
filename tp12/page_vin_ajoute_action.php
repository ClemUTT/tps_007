<?php
include 'fragmentCaveHeader.html';
include 'fragmentDatabaseConfig.php';
include 'biblio_bt.php';
?>

    <body>
<div class="container">

    <?php
    include 'fragmentCaveMenu.html';
    include 'fragmentCaveJumbotron.html';
    ?>
    <?php
    panel_head("Vous avez ajouté un vin");

    $cru = $_GET['cru'];
    $annee = $_GET['annee'];
    $degre = $_GET['degre'];
    $new_id = $database->prepare("select max(id) from vin");
    $new_id->execute();
    $new_id = $new_id->fetch()['max(id)']+1;

    try {
        $requete = $database->prepare("insert into vin values (:id, :cru, :annee, :degre)");

        $requete->execute(array(
            'id' => $new_id,
            'cru' => $cru,
            'annee' => $annee,
            'degre' =>  $degre
        ));
        $statement = $database->prepare("select * from vin where id in (select max(id) from vin)");
        $statement->execute();
        echo "Un tuple ajouté : ";
        include 'fragmentVinResultats.php';
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    ?>


    <?php
    include 'fragmentCaveFooter.html';
    ?>

</div>