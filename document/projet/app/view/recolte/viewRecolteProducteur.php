
<!-- ----- début viewRecolteProducteur.php -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <table class = "table table-striped table-bordered">
        <thead>
        <tr>
            <th scope = "col">Nom</th>
            <th scope = "col">producteur id</th>
            <th scope = "col">vin_id</th>
            <th scope = "col">quantite</th>
        </tr>
        </thead>
        <tbody>
        <?php

        if($results==-1) echo "<h3>Ce producteur n'a rien produit</h3>";
        else
        foreach ($results as $element) {
            printf("<tr><td>%s</td><td>%d</td><td>%d</td><td>%d</td></tr>", $element->getNom(), $element->getId(), $element->getVinId(), $element->getQuantite());
        }
        ?>
        </tbody>
    </table>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewRecolteProducteur.php -->