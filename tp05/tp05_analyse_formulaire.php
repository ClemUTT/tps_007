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
    <div class="panel panel-info">
        <div class="panel-heading">
            GET
        </div>
        <div class="panel-body">
            <?php
            echo "<table  style=\"background-color: lemonchiffon\" class='table table-striped'>";
            echo '<thead>';
            echo '<tr><th>name</th><th>valeur {s}</th></tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach ($_GET as $key => $value) {
                $value = is_array($value) ? implode(", ", $value) : $value;
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo '</tbody>';
            echo "</table>";
            ?>
        </div>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading">
            POST
        </div>
        <div class="panel-body">
            <?php
            echo "<table  style=\"background-color: lemonchiffon\" class='table table-striped'>";
            echo '<thead>';
            echo '<tr><th>name</th><th>valeur {s}</th></tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach ($_POST as $key => $value) {
                $value = is_array($value) ? implode(", ", $value) : $value;
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo '</tbody>';
            echo "</table>";
            ?>
        </div>
    </div>
</div>

</body>
</html>
