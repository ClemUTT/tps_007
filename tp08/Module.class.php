<?php

require_once 'WebBean.interface.php';
require_once 'Charte.class.php';

class Module implements WebBean
{

    private $sigle;
    private $label;
    private $categorie;
    private $effectif;

    public function __construct($sigle, $label, $categorie, $effectif)
    {
        $this->sigle = $sigle;
        $this->label = $label;
        $this->categorie = $categorie;
        $this->effectif = $effectif;
    }

    public function getSigle()
    {
        return $this->sigle;
    }

    public function setSigle($sigle)
    {
        $this->sigle = $sigle;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function getEffectif()
    {
        return $this->effectif;
    }

    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }


    public function __toString()
    {
        return implode(", ", array($this->sigle, $this->label, $this->categorie, $this->effectif));
    }


    public function valide()
    {
        $res = true;
        if (strlen(filter_input(INPUT_GET, "sigle", FILTER_SANITIZE_STRING)) == 0) {
            $res = false;
        }
        if (strlen(filter_input(INPUT_GET, "label", FILTER_SANITIZE_STRING)) == 0) {
            $res = false;
        }
        if (strlen(filter_input(INPUT_GET, "categorie", FILTER_SANITIZE_STRING)) == 0) {
            $res = false;
        }
        if (strlen(filter_input(INPUT_GET, "effectif", FILTER_SANITIZE_NUMBER_INT)) == 0) {
            $res = false;
        }
        return $res;
    }

    public function pageKO()
    {
        echo Charte::html_head_bootstrap("Les WebBean Modules");
        echo "<h2>Votre formulaire n'est pas correct</h2>";
        echo Charte::html_foot_bootstrap();
    }

    public function pageOK()
    {
        echo Charte::html_head_bootstrap("Les WebBean Modules");
        echo "<h2>Votre formulaire est correct</h2>";
        foreach ($_GET as $key => $value) {
            echo("$key => $value <br/>");
        }
    }

    public function pageFoot()
    {
        echo Charte::html_foot_bootstrap();
    }

    public function sauveTXT()
    {
        $res = $this->sigle ." ; ";
        $res .= $this->label ." ; ";
        $res .= $this->categorie ." ; ";
        $res .= $this->effectif ." ; ";
        return $res;
    }

    public function sauveXML($file)
    {
        return "xml";
    }

    public function sauveBDR($table)
    {
        $res = "INSERT INTO $table VALUES (";
        $res .= "'" . $this->sigle . "',";
        $res .= "'" . $this->label . "',";
        $res .= "'" . $this->categorie . "',";
        $res .= "'" . $this->effectif . "')";
        return $res;
    }

    public function createTable($table)
    {
        $res = "CREATE TABLE $table (";
        $res .= "sigle varchar(6) not null, ";
        $res .= "categorie varchar(2) check ";
        $res .= "categorie in ('CS', 'TM, 'EC', 'ME', 'CT'), ";
        $res .= "label varchar(40) not null, ";
        $res .= "effectif integer, ";
        $res .= "primary key(sigle));";
        return $res;
    }
}

?>