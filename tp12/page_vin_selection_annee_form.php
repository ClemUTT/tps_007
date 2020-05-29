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
    panel_head("Formulaire de sélection une année");
    ?>
    <form action="page_vin_annee_action.php" class="focus" method="get">
        <div class="form-group">
            <label for="an">année :</label>
            <select class="form-control" name="annee" id="an">
                <?php
                $requete = 'select distinct annee from vin order by annee';
                $statement = $database->query($requete);
                while ($tuple = $statement->fetch()) {
                    $annee = $tuple['annee'];
                    echo "<option value='$annee'>$annee</option>";
                }

                ?>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

    <?php
    include 'fragmentCaveFooter.html';
    ?>

</div>