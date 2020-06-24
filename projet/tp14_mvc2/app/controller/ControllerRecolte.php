<!-- ----- debut ControllerProducteur -->
<?php
require_once '../model/ModelRecolte.php';

class ControllerRecolte
{
    // --- page d'acceuil
    public static function caveAccueil()
    {
        include 'config.php';
        $vue = $root . '/app/view/viewCaveAccueil.html';
        if (DEBUG)
            echo("ControllerProducteur : caveAccueil : vue = $vue");
        require($vue);
    }

    public static function vinQuantite(){
        $id = $_GET['id'];
        $results = ModelRecolte::getVinQuantite($id);

        include 'config.php';
        $vue = $root . '/app/view/recolte/viewVinQuantite.php';
        require($vue);
    }

    public static function recolteChoixProducteur($args){
        $target = $args['target'];
        $results = ModelRecolte::getAllProducteur();
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewAllProducteur.php';
        require($vue);
    }

    public static function recolteReadRecolteProducteur(){
        $id = $_GET['id'];
        $results = ModelRecolte::getRecolteProducteur($id);
        if(empty($results)){
            $results = -1;
        }

        include 'config.php';
        $vue = $root . '/app/view/recolte/viewRecolteProducteur.php';
        require($vue);
    }

    public static function recolteViewAll(){
        $results = ModelRecolte::getAllRecolte();
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewAll.php';
        require($vue);
    }

    // --- Liste des régions
    public static function recolteReadRegion($args)
    {
        $target = $args['target'];
        $results = ModelRecolte::getAllRegion();
        include 'config.php';

        $vue = $root . '/app/view/recolte/viewRegion.php';
        require($vue);
    }

    public static function recolteBiggestProducteur(){
        $region = $_GET['region'];
        $results = ModelRecolte::getBiggestProducteur($region);

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewBiggestProducteur.php';
        require($vue);
    }

    // --- Liste des quantités de vin par année
    public static function recolteOrderBy($args){
        $target = $args['target'];
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewOrderBy.php';
        require($vue);
    }

    public static function recolteTotalQuantite(){
        $order = $_GET['order'];
        $results = ModelRecolte::getTotalQuantite($order);

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewTotalQuantite.php';
        require($vue);
    }


}

?>
<!-- ----- fin ControllerRecolte -->


