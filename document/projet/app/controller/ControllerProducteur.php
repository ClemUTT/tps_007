
<!-- ----- debut ControllerProducteur -->
<?php
require_once '../model/ModelProducteur.php';

class ControllerProducteur {

    // --- Liste des producteurs
    public static function producteurReadAll() {
        $results = ModelProducteur::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewAll.php';
        if (DEBUG)
            echo ("ControllerProducteur : producteurReadAll : vue = $vue");
        require ($vue);
    }

    // Supprime un producteur
    public static function producteurDeleted()
    {
        $results = ModelProducteur::delete(
            htmlspecialchars($_GET['id'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewDeleted.php';
        require($vue);
    }

    // Affiche un formulaire pour sélectionner un id qui existe
    public static function producteurReadId($args) {
        $results = ModelProducteur::getAllId();

        $target = $args['target'];

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewId.php';
        require ($vue);
    }

    // Affiche un producteur particulier (id)
    public static function producteurReadOne() {
        $producteur_id = $_GET['id'];
        $results = ModelProducteur::getOne($producteur_id);

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewAll.php';
        require ($vue);
    }

    // Affiche le formulaire de creation d'un producteur
    public static function producteurCreate() {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewInsert.php';
        require ($vue);
    }

    // --- Liste des regions sans doublons
    public static function producteurRegions() {
        $results = ModelProducteur::getAllRegions();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewRegionsSansDoublons.php';
        if (DEBUG)
            echo ("ControllerProducteur : producteurRegions : vue = $vue");
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'un nouveau producteur.
    public static function producteurCreated() {
        // ajouter une validation des informations du formulaire
        $results = ModelProducteur::insert(
            htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['region'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewInserted.php';
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerProducteur -->


