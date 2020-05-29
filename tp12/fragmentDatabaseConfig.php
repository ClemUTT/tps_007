<?php

$database;
try {
    $username = 'phpmyadmin';
    $pwd = 'root';
    $dsn = 'mysql:host=localhost;dbname=LO07_2020;character=utf8;';
    $database = new PDO($dsn, $username, $pwd);

} catch (PDOException $e){
    echo $e->getMessage();
}


?>