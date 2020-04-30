<?php
include 'tp06_biblio_formulaire_bt.php';
require_once 'Charte.class.php';
echo Charte::html_head_bootstrap("Formulaire cursus");

        form_begin("lo07", "get", "cursus_action.php");
        form_text("sigle", "sigle", 4);
        form_text("label", "label");
        form_select("categorie", "categorie", "", 5, array("CS", "TM", "EC", "ME", "CT"));
        form_nombre("effectif", "effectif");
        form_input_submit("Envoyer");
        form_end();

echo Charte::html_foot_bootstrap();
?>