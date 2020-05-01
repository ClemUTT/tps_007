<?php
require_once 'Module.class.php';
require_once  'Cursus.class.php';
require_once 'Charte.class.php';
echo Charte::html_head_bootstrap("Cursus main");

    echo "<h1>Définition des modules</h1>";

    $module1 = new Module("LO07", "Technologies du Web", "TM", 140);
    echo '<p>'. $module1->__toString() .'</p>';
    $module2 = new Module("LO09", "Construction d'applications réparties", "TM", 24);
    echo '<p>'. $module2->__toString() .'</p>';

    echo "<h1>Définition d'un cursus</h1>";

    $cursus = new Cursus();
    $cursus->addModule($module1);
    echo '<p>addModule : '. $module1->__toString() .'</p>';
    $cursus->addModule($module2);
    echo '<p>addModule : '. $module2->__toString() .'</p>';

    $cursus->affiche();

echo Charte::html_foot_bootstrap();
?>