<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body style='background-color: lemonchiffon'>
<div class="container">
    <?php
    $name = "";
    $post_or_get = array();

    if (!empty($_GET)) {
        $name = "GET";
        $post_or_get = $_GET;
    } else if (!empty($_POST)) {
        $post_or_get = $_POST;
        $name = "POST";
    }
    ?>

    <div class="panel panel-info">
        <div class="panel-heading">
            <?php echo $name; ?>
        </div>
        <div class="panel-body">
            <?php
            echo "<table  style=\"background-color: lemonchiffon\" class='table table-striped'>";
            echo '<thead>';
            echo '<tr><th>name</th><th>valeur {s}</th></tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach ($post_or_get as $key => $value) {
                $value = is_array($value) ? implode(", ", $value) : $value;
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo '</tbody>';
            echo "</table>";
            ?>
        </div>
    </div>

    <div class="panel panel-danger">
        <div class="panel-heading">
            Analyse de la superglobale $_COOKIE.
        </div>
        <div class="panel-body">
            <?php

            echo "<table  style=\"background-color: lemonchiffon\" class='table table-striped'>";
            echo '<thead>';
            echo '<tr><th>name</th><th>valeur {s}</th></tr>';
            echo '</thead>';
            echo '<tbody>';
            if(isset($_COOKIE)){
                foreach($_COOKIE as $key=>$value){
                    echo "<tr><td>$key</td><td>$value</td></tr>";

                }
            }
            echo '</tbody>';
            echo "</table>";

            ?>
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading">
            Analyse de la superglobale $_SESSION.
        </div>
        <div class="panel-body">
            <?php

            echo "<table  style=\"background-color: lemonchiffon\" class='table table-striped'>";
            echo '<thead>';
            echo '<tr><th>name</th><th>valeur {s}</th></tr>';
            echo '</thead>';
            echo '<tbody>';
            session_start();
            if(isset($_SESSION)){
                foreach($_SESSION as $key=>$value){
                    $v = is_array($value) ? implode(", ", $value) : $value;
                    echo "<tr><td>$key</td><td>$v</td></tr>";
                }
            }
            echo '</tbody>';
            echo "</table>";

            ?>
        </div>
    </div>
</div>

</body>
</html>
