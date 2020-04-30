<?php
session_start();
require_once 'Cursus.class.php';
class Cursus2{
    private $listeModules = array();

    public function __construct(){
        if(isset($_SESSION["cursus"])){
            array_push($this->listeModules, $_SESSION["cursus"]);
        } else {
            
        }
    }

    public function addModule($module){
        array_push($this->listeModules, $_SESSION["cursus"]);
        $_SESSION["cursus"] = $module;
    }

    public function __toString(){
        return implode(", ", $this->listeModules);
    }

    public function affiche(){
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }


}

?>