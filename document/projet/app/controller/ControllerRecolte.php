<!-- ----- debut ControllerProducteur -->
<?php
require_once '../model/ModelRecolte.php';

class ControllerRecolte
{

    //Liste la quantité totale par vin
    public static function vinQuantite(){
        $id = $_GET['id'];
        $results = ModelRecolte::getVinQuantite($id);

        include 'config.php';
        $vue = $root . '/app/view/recolte/viewVinQuantite.php';
        require($vue);
    }

    //liste tous les producteurs
    public static function recolteChoixProducteur($args){
        $target = $args['target'];
        $results = ModelRecolte::getAllProducteur();
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewAllProducteur.php';
        require($vue);
    }

    //Liste des récoltes du producteur sélectionné par son id
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

    //Liste de toute la table Récolte
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

    //Donne le plus grand producteur de vin selon la région sélectionnée
    public static function recolteBiggestProducteur(){
        $region = $_GET['region'];
        $results = ModelRecolte::getBiggestProducteur($region);

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewBiggestProducteur.php';
        require($vue);
    }

    // --- Liste des quantités de vin par année ou par quantité
    public static function recolteOrderBy($args){
        $target = $args['target'];
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewOrderBy.php';
        require($vue);
    }

    //Liste des quantités de vin selon l'ordre choisi
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


