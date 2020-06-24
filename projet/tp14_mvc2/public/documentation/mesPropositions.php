<!-- ----- debut de la page mes propositions -->
<?php include '../../app/view/fragment/fragmentCaveHeader.html'; ?>
<body>
<div class="container">
    <?php
    include '../../app/view/fragment/fragmentCaveMenu.html';
    include '../../app/view/fragment/fragmentCaveJumbotron.html';

    ?>


    <h3>Idées d'améliorations : </h3>
    <ul>
        <li>Rendre possible le routage vers des pages qui n'ont pas vocation à être dynamique (c'est à dire des pages "vitrines"). En effet, cette page de documentation par exemple
        peut avoir vocation à possèder un contenu fixe. Il semble alors ne pas être très utile de créer un fichier controller et model pour chaque page qui contiendrait des données
        fixes. Pour convenir à cela, il suffirait par exemple de créer un seul controller permettant le routage vers n'importe quelle page dont le chemin est spécifié en paramètre,
        ou bien d'aggrémenter le switch de conditions pour chaque page.</li>
    </ul>


    <?php
    include '../../app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin de la page mes propositions -->
