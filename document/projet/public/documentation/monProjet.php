<!-- ----- debut de la page mon projet -->
<?php include '../../app/view/fragment/fragmentCaveHeader.html'; ?>
<body>
<div class="container">
    <?php
    include '../../app/view/fragment/fragmentCaveMenu.html';
    include '../../app/view/fragment/fragmentCaveJumbotron.html';

    ?>


    <h3>Introduction</h3>
    <p>Pour des raisons de lisibilité et de sémantique, j'ai décidé de créer 2 fichiers <strong>ModelRecolte.php</strong> et <strong>ControllerRecolte.php</strong>.</p>
    <p>Comme leurs noms l'indiquent, ils serviront respectivement à récupérer les données, et à les manipuler.</p>

    <h3>Fonctionnalités</h3>
    <ol>
        <li>
            <h4 class="text-danger">Plus grand producteur selon une région</h4>
            <p>Cette fonctionnalité me paraît utile dans la mesure où il est intéressant de connaître quels sont les plus grands producteurs de chaque région.
            On peut s'amuser à en faire un classement par la suite.</p>
            <ul>
                <li>
                    <p>Voici les fonctions que j'ai utilisées dans le Modèle :</p>

                    <ul>
                        <li><strong class="text-success">getAllRegion</strong> --> <em>Récupère toutes les régions dans la base de données</em></li>
                        <li><strong class="text-success">getBiggestProducteur($region)</strong> --> <em>Récupère le plus grand producteur selon la région sélectionnée</em></li>
                    </ul>
                    </p>
                </li>
                <li>
                    <p>Dans le Contrôleur j'ai utilisé les fonctions suivantes :
                    <ul>
                        <li><strong class="text-success">recolteReadRegion($args)</strong> --> <em>Manipule les régions obtenues par le modèle. Cette méthode
                            permettra d'insérer les régions dans un select grâce à la vue appelée.</em></li>
                        <li><strong class="text-success">recolteBiggestProducteur</strong> --> <em>Manipule le plus grand producteur obtenu en appelant la vue viewBiggestProducteur.php</em></li>
                    </ul>
                    </p>
                </li>
            </ul>



        </li>
        <li>

            <h4 class="text-danger">Quantité de vin produit par année</h4>
            <p>Avoir connaissance de la quantité de vin produit chaque année est intéressant afin de voir l'évolution de l'efficacité de production.</p>
            <p>Par ailleurs, il est possible de choisir sous quelle forme on veut afficher les données. On peut les trier par <strong>quantité produite décroissante</strong> ou bien
            par <strong>année allant du plus récent au plus ancien</strong>.</p>
            <ul>
                <li>
                    <p>Voici les fonctions que j'ai utilisées dans le Modèle :</p>

                    <ul>
                        <li><strong class="text-success">getTotalQuantite($order)</strong> --> <em>Récupère toutes les années ainsi que la somme des quantités par année selon l'ordre passé en paramètre.</em></li>
                    </ul>
                    </p>
                </li>
                <li>
                    <p>Dans le Contrôleur j'ai utilisé les fonctions suivantes :
                    <ul>
                        <li><strong class="text-success">recolteOrderBy($args)</strong> --> <em>Manipule l'ordre choisi par l'utilisateur, pour ensuite le transmettre à la méthode inclue dans le "&target=" via le formulaire.</em></li>
                        <li><strong class="text-success">recolteTotalQuantite</strong> --> <em>Manipule toutes les années ainsi que leurs quantités de vins respectives, avec l'ordre choisi par l'utilisateur.</em></li>
                    </ul>
                    </p>
                </li>
            </ul>

        </li>
        <li>

            <h4 class="text-danger">Liste des récoltes</h4>
            <p>Il est toujours intéressant d'avoir un visuel de chaque table, la table Recole ne fait pas exception.</p>
            <p>Cette fonctionnalité permet de visualiser récolte par récolte au besoin.</p>
            <ul>
                <li>
                    <p>Voici les fonctions que j'ai utilisées dans le Modèle :</p>

                    <ul>
                        <li><strong class="text-success">getAllRecolte</strong> --> <em>Récupère l'intégralité des données présentes dans la table Récolte.</em></li>
                    </ul>
                    </p>
                </li>
                <li>
                    <p>Dans le Contrôleur j'ai utilisé les fonctions suivantes :
                    <ul>
                        <li><strong class="text-success">recolteViewAll</strong> --> <em>Manipule les données de la table Récolte, en les affichant dans un tableau grâce à la vue.</em></li>
                    </ul>
                    </p>
                </li>
            </ul>

        </li>
        <li>

            <h4 class="text-danger">Choix des récoltes d'un producteur</h4>
            <p>Il peut y avoir un intérêt à controller et à visualiser les récoltes d'un producteur en particulier.</p>
            <ul>
                <li>
                    <p>Voici les fonctions que j'ai utilisées dans le Modèle :</p>

                    <ul>
                        <li><strong class="text-success">getAllProducteur</strong> --> <em>Récupère tous les producteurs qui ont déjà produit au moins une fois.</em></li>
                        <li><strong class="text-success">getRecolteProducteur($id)</strong> --> <em>Récupère les récoltes des producteurs selon l'id de producteur sélectionné.</em></li>
                    </ul>
                    </p>
                </li>
                <li>
                    <p>Dans le Contrôleur j'ai utilisé les fonctions suivantes :
                    <ul>
                        <li><strong class="text-success">recolteChoixProducteur($args)</strong> --> <em>Manipule les données récupérées par le modèle concernant les producteurs, et affiche leurs noms dans un
                            select grâce à la vue appelée.</em></li>
                        <li><strong class="text-success">recolteReadRecolteProducteur</strong> --> <em>Manipule les récoltes du producteur sélectionné, en les affichant sous forme de tableau grâce à la vue appelée.
                            Si ancun producteur n'a de lien avec la table récolte, alors un message s'affichera pour prévenir l'utilisateur que le nom du producteur sélectionné n'a pas encore produit.</em></li>
                    </ul>
                    </p>
                </li>
            </ul>

        </li>
        <li>

            <h4 class="text-danger">Quantité totale d'un vin sélectionné</h4>
            <p>Il peut y avoir un intérêt à contrôler et à visualiser les récoltes d'un producteur en particulier.</p>
            <ul>
                <li>
                    <p>Voici les fonctions que j'ai utilisées dans le Modèle :</p>

                    <ul>
                        <li><strong class="text-success">getAllId</strong> --> <em>Utilisation du ModelVin.php en récupèrant tous les vins de la table Vin.</em></li>
                        <li><strong class="text-success">getVinQuantite($id)</strong> --> <em>Récupère la quantité totale de l'id du vin passé en paramètre.</em></li>
                    </ul>
                    </p>
                </li>
                <li>
                    <p>Dans le Contrôleur j'ai utilisé les fonctions suivantes :
                    <ul>
                        <li><strong class="text-success">vinReadId($args)</strong> --> <em>Je me permets ici d'utiliser la méthode existante dans le ControllerVin.php en utilisant
                            le "&target=vinQuantite" afin d'éviter de me répéter dans mon code.</em></li>
                        <li><strong class="text-success">vinQuantite</strong> --> <em>Cette méthode permet de manipuler la quantité totale d'un vin récupérée par le modèle.</em></li>
                    </ul>
                    </p>
                </li>
            </ul>

        </li>
    </ol>


    <?php
    include '../../app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin de la page mon projet -->
