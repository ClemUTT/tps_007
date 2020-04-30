<?php
require_once 'Module.class.php';
require_once 'Cursus.class.php';
require_once 'Cursus2.class.php';

    $module1 = new Module($_GET["sigle"], $_GET["label"], $_GET["categorie"], $_GET["effectif"]);
    if($module1->valide()){
        $module1->pageOK();

        $cursus = new Cursus();
        $cursus->addModule($module1);
        $_SESSION["cursus"] = $cursus;

        print_r($_SESSION["cursus"]);
        $cursus2 = new Cursus2();

        $cursus->affiche();
        print_r($_SESSION["cursus"]);

        $cursus2->addModule();
        $cursus2->affiche();

        $module1->pageFoot();
    } else{
        $module1->pageKO();
    }

?>