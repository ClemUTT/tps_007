
<!-- ----- debut ControllerDocumentation -->
<?php
require_once '../model/ModelDocumentation.php';

class ControllerDocumentation {
    // --- page d'acceuil
    public static function mesPropositions() {
        include 'config.php';
        $vue = $root . '/public/documentation/mesPropositions.php';
        if (DEBUG)
            echo ("ControllerDocumentation : mesPropositions : vue = $vue");
        require ($vue);
    }

    public static function monProjet() {
        include 'config.php';
        $vue = $root . '/public/documentation/monProjet.php';
        if (DEBUG)
            echo ("ControllerDocumentation : monProjet : vue = $vue");
        require ($vue);
    }


}
?>
<!-- ----- fin ControllerDocumentation -->


