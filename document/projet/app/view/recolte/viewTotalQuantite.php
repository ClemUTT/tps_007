
<!-- ----- début viewTotalQuantite -->
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
            <th scope = "col">Année</th>
            <th scope = "col">somme des quantités de vin produit</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($results as $element) {
            printf("<tr><td>%d</td></td><td>%d</td></tr>", $element->getAnnee(), $element->getQuantite());
        }
        ?>
        </tbody>
    </table>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewTotalQuantite -->