<!-- ----- début viewInserted -->
<?php
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results>0) {
        echo("<h3>Le vin d'id $results vient d'être supprimé</h3>");
    } else {
        echo("<p>Problème de suppression du vin, il est probable qu'il soit présent dans la table de récoltes.</p>");
        echo("id = " . $results);
    }

    echo("</div>");

    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->


