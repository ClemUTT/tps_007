<?php
session_start();
require_once 'Cursus.class.php';
class Cursus2{
    private $listeModules;

    public function __construct(){
        $this->listeModules = isset($_SESSION["cursus"]) ? $_SESSION["cursus"] : array();
    }

    public function addModule($module){
        $this->listeModules[$module->getSigle()] = $module;
        $_SESSION["cursus"] = $this->listeModules;
    }

    public function __toString(){
       return sprintf("Ce cursus contient le(s) module(s) suivant(s) : <br/> %s", implode("<br/>", $this->listeModules));
    }

    public function affiche(){
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }


}

?>