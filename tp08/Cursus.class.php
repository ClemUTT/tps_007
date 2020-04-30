<?php

class Cursus{
    private $listeModules;

    public function __construct(){
        $this->listeModules = array();
    }

    public function addModule($module){
        $this->listeModules[$module->getSigle()] = $module;
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