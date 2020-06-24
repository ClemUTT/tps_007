
<!-- ----- début viewVinQuantite -->
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
            <th scope = "col">Vin Id</th>
            <th scope = "col">Quantité produite au total</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($results as $element) {
//             echo '<pre>';
//             print_r($element);
//             echo '</pre>';
            printf("<tr><td>%d</td></td><td>%s</td></tr>", $element->getVinId(), $element->getQuantite());
        }
        ?>
        </tbody>
    </table>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewVinQuantite -->