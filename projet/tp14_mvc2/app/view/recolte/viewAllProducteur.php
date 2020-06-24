
<!-- ----- début viewAllProducteur -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';

    ?>

    <form role="form" method='get' action='router2.php'>
        <div class="form-group">
            <input type="hidden" name='action' value='<?php echo ($target); ?>'>
            <label for="id">Nom : </label> <select class="form-control" id='id' name='id' style="width: 100px">

                <?php
                echo '<pre>';
                print_r($results);
                echo '</pre>';

                foreach ($results as $nom) {
                    $id = $nom->getId();
                    echo ("<option value='$id'>");
                    echo $nom->getNom();
                    echo ("</option>");
                }
                ?>
            </select>
        </div>
        <p/>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <p/>
</div>

<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewAllProducteur -->