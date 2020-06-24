
<!-- ----- début viewABiggestProducteur -->
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
            <th scope = "col">Région sélectionnée</th>
            <th scope = "col">Plus grand producteur</th>
            <th scope = "col">somme des quantités produites</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($results as $element) {
           // echo '<pre>';
           // print_r($element);
           // echo '</pre>';
            printf("<tr><td>%s</td></td><td>%s</td><td>%d</td></tr>", $element->getRegion(), $element->getNom(), $element->getQuantite());
        }
        ?>
        </tbody>
    </table>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewABiggestProducteur -->