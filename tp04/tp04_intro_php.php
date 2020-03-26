<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="bootstrap.css">
</head>
  <body>

  <script>
      window.onload = function(){
          var navElements = document.getElementsByClassName("navbar-nav")[0].getElementsByTagName("li");

          for (var i=0; i < navElements.length; i++){
              navElements[i].firstChild.addEventListener('click', function(e) {
                  e.preventDefault();
                  var exX = document.getElementById(e["currentTarget"].getAttribute("href").substr(1)).offsetTop;
                  window.scrollTo({
                      top: exX - navElements[0].offsetHeight,
                      behavior: 'smooth'
                  });
              });
          }

      }

  </script>

  <?php

    //exo 2
    $nom = "Plantier";
    $prenom = "Clément";
    $age = 20;
    $ingenieur = true;

    //exo 3
    $capitalesAfrique = array("Alger", "Bamako", "Conakry", "Cotonou", " ", "Freetown", "Kanpala", "Loné", "Nairobi", "Yamoussoukro");
    array_push($capitalesAfrique, "Maputo");
    unset($capitalesAfrique[4]);
  ?>

    <div style="margin-top: 60px"; class="container">

        <nav class="navbar-fixed-top navbar-inverse">
            <div class="navbar-header">
                <a href="" class="navbar-brand">Web 04</a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="#exo1">Exercice 1</a></li>
                <li><a href="#exo2">Exercice 2</a></li>
                <li><a href="#exo3">Exercice 3</a></li>
                <li><a href="#exo4">Exercice 4</a></li>
                <li><a href="#exo5">Exercice 5</a></li>
            </ul>
        </nav>

      <div class="panel panel-success">
        <div id="exo1" class="panel-heading">Exercice 1 : validation de la configuration div-isi</div>
        <div class="panel-body">
          <?php echo 'Bonjour à tous !'; ?>
        </div>
      </div>

        <div class="panel panel-primary">
            <div id="exo2" class="panel-heading">Exercice 2</div>
            <div class="panel-body">
                <ul class="list-group">
                    <?php
                    echo '<li class=" list-group-item">Nom = '.$nom.'</li>';
                    echo '<li class=" list-group-item">Prénom = '.$prenom.'</li>';
                    echo '<li class=" list-group-item">Age = '.$age.'</li>';
                    echo '<li class=" list-group-item">Ingénieur = '.$ingenieur.'</li>';
                    ?>
                </ul>
            </div>
        </div>

        <div class="panel-group">
            <div class="panel panel-success">
                <div id="exo3" class="panel-heading">Exercice 3 : Tableau des capitales d'Afrique</div>
                <div class="panel-body">
                    <h2 class="text-info">print_r</h2>
                    <pre><?php print_r($capitalesAfrique) ?></pre>

                    <h2 class="text-info">foreach</h2>
                    <?php
                    echo '<ul class="list-group text-info">';
                        foreach ($capitalesAfrique as $a){
                            echo '<li class="list-group-item text-info">'.$a.'</li>';
                    }
                        echo '</ul>';
                    ?>
                    <h2 class="text-info">Implode</h2>
                    <div class="panel panel-warning">
                        <?php echo '<div class="panel-heading">'.implode(" ; ", $capitalesAfrique).'</div>'; ?>
                    </div>

                    <h2 class="text-info">Accès aux données</h2>
                    <div class="panel panel-default">
                        <?php
                        echo '<div class="panel-heading"> Nombre d\'éléments = '.sizeof($capitalesAfrique).'</div>';
                        ?>
                    </div>
                    <div class="panel panel-danger">
                        <?php
                            sort($capitalesAfrique, SORT_NATURAL);
                            echo '<div class="panel-heading">Tableau trié = '.implode(", ", $capitalesAfrique).'</div>';
                        ?>
                    </div>

                </div>
            </div>

        </div>


        <div class="panel panel-success">
            <div id="exo4" class="panel-heading">Exercice 4 : Tableaux associatifs</div>
                <div class="panel-body">
                    <?php
                    $capitalesEurope = array(
                        "France" => "Paris",
                        "Italie" => "Rome",
                        "Belgique" => "Bruxelles",
                        "Espagne" => "Madrid",
                        "Allemagne" => "Berlin",
                        "Portugal" => "Lisbonne"
                    );
                    ?>
                    <ul class="list-group">
                        <li class="list-group-item">Capitale de l'Allemagne = <?php echo $capitalesEurope["Allemagne"] ?></li>
                    </ul>
                    <ul class="list-group">
                    <?php
                        foreach ($capitalesEurope as $key => $value){
                            echo '<li class="list-group-item">'.$key.' = '.$value.'</li>';
                        }
                    ?>
                    </ul>
                    <h2 class="text-info">Liste de clés</h2>
                    <ul class="list-group">
                        <?php
                        foreach (array_keys($capitalesEurope) as $key){
                            echo '<li class="list-group-item">'.$key.'</li>';
                        }
                        ?>
                    </ul>
                    <h2 class="text-info">Liste de valeurs</h2>
                    <ul class="list-group">
                        <?php
                        foreach (array_values($capitalesEurope) as $values){
                            echo '<li class="list-group-item">'.$values.'</li>';
                        }
                        ?>
                    </ul>

            </div>
        </div>



        <div class="panel panel-success">
            <div id="exo5" class="panel-heading">Exercice 5 : fonctions</div>
            <div class="panel-body">
                <?php
                function badge_danger($label, $compteur){
                    return '<button class="btn btn-danger" type="button">'.$label.' <span class="badge">'.$compteur.'</span></button>';
                }
                echo badge_danger("Web", 6).'<br/>';

                foreach ($capitalesAfrique as $a){
                    echo badge_danger($a, strlen($a));
                }
                ?>
            </div>
        </div>











    </div>


  </body>
</html>
