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
<body>

<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
            SuperGlobale GET
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <tr>
                    <th>name</th>
                    <th>valeur(s)</th>
                </tr>
                <?php
                    for ($i = 0; $i < sizeof($_GET); $i++){
                        $key = array_keys($_GET)[$i];
                        $value = array_values($_GET)[$i];
                        echo "<tr><td>$key</td><td>$value</td></tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</div>

</body>
</html>