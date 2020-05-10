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

<?php

class t {
    private $name = "toto";
    private $age = 6;
    public function __construct()
    {
    }
}

$a = array();
$b = array();
$t = new t();
array_push($b, $t);
array_push($a, $b);

echo "<pre>";
print_r($a);
echo "</pre>";

?>

</body>
</html>