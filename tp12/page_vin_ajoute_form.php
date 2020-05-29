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
    panel_head("Ajout d'un vin (form)");
    ?>
    <form action="page_vin_ajoute_action.php" class="focus" method="get">
        <div class="form-group">
            <label>cru ?</label>
            <input class="form-control" type="text" name="cru" />
        </div>
        <div class="form-group">
            <label>annee ?</label>
            <input class="form-control"  type="number" name="annee" />
        </div>
        <div class="form-group">
            <label>degre ?</label>
            <input class="form-control" step= "0.01" type="number" name="degre" />
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

    <?php
    include 'fragmentCaveFooter.html';
    ?>

</div>