<?php

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