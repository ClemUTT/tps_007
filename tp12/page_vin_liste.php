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
    panel_head("Liste des Vins (select * from vin order by id");
    $requete1 = 'select * from vin order by id';
    $statement = $database->query($requete1);
    include 'fragmentVinResultats.php';

    include 'fragmentCaveFooter.html';

?>

    </div>

?>;