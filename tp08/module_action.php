<?php

    require_once 'Module.class.php';

    //création objet
    $module = new Module($_GET["sigle"], $_GET["label"], $_GET["categorie"], $_GET["effectif"]);

    if($module->valide()){
        $module->pageOK();

        //affichage des données du formulaire via l'objet Module
        echo $module->sauveTXT();

        echo "<table class='table'>";
        echo "<tr><th>Informations</th></tr>";
        foreach (explode(";", $module->sauveTXT()) as $key){
            echo "<tr><td>$key</td></tr>";
        }
        echo "</table>";

        $module->pageFoot();
    } else {
        $module->pageKO();
    }
?>