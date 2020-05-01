<?php
require_once 'Module.class.php';
require_once 'Cursus.class.php';
require_once 'Cursus2.class.php';

$module = new Module($_GET["sigle"], $_GET["label"], $_GET["categorie"], $_GET["effectif"]);

if($module->valide()){
    $module->pageOK();

    //Exo  3.8
    $cursus1 = new Cursus();
    $cursus1->addModule($module);
    echo '<p>Création d\'un cursus et ajout d\'un module '.$module.'</p>';

    //Exo 3.11 et 3.12
    $cursus2 = new Cursus2();
    $cursus2->addModule($module);

    echo "<h3>Visualisation des modules</h3>";
    echo $cursus2;

    echo "<pre>";
    print_r((array) $cursus2);
    echo "</pre>";


    $module->pageFoot();
} else{
    $module->pageKO();
}

?>