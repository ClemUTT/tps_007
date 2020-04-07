<!DOCTYPE html>
<?php
require ('tp06_biblio_formulaire_bt.php');
//require ('tp06_biblio_planning.php');
$titre = "Formulaire pour le planning des soutenance";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet"/>
    <link href="tp06_css.css" rel="stylesheet" type="text/css"/>
    <title><?php echo $titre; ?></title>
</head>
<body>
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $titre; ?></h3>
        </div>
    </div>
    <?php
    form_begin("lo07", "get", "tp06_planning_action.php");
    form_select("JourLabel", "jourlabel", "", 5, listeJourLabel());
    form_select("JourIndice", "jourIndice", "", 5, listeJourIndice());
    form_select("Mois", "mois", "", 3, listeMois());
    form_select("Séance", "seance", "multiple", 6, listeSeance());
    form_input_reset("effacer");
    form_input_submit("envoyer");
    form_end();

    function listeJourLabel(){
        return array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    }

    function listeJourIndice(){
        $indice = array();
        for ($i = 1; $i <=30; $i++){
            array_push($indice, $i);
        }
        return $indice;
    }

    function listeMois(){
        return array(
            'janvier',
            'février',
            'mars',
            'avril',
            'mai',
            'juin',
            'juillet',
            'aout',
            'septembre',
            'octobre',
            'novembre',
            'décembre'
            );
    }

    function listeSeance(){
        $seance = array();
        for($i=8;$i<=12;$i++){
            $i = $i<10 ? '0'.$i : $i;
            for($j=0;$j<=40;$j+=20){
                $jformated = $j<10 ? '00' : $j;
                array_push($seance, $i.'h'.$jformated);
                if($i==12){break;}
            }
        }

        for($i=14;$i<=18;$i++){
            $i = $i<10 ? '0'.$i : $i;
            for($j=0;$j<=40;$j+=20){
                $jformated = $j<10 ? '00' : $j;
                array_push($seance, $i.'h'.$jformated);
                if($i==18){break;}
            }
        }
        return $seance;
    }
    ?>
</div>

</body>
</html>


