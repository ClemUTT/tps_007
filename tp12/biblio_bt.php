<?php

function panel_head($titre){
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'>";
    echo "<h4>$titre</h4>";
    echo "</div>";
    echo "</div>";
}

function generate_table($request, $statement){
    echo "<table class='table table-bordered bg-success'>";
    for ($i=0; $i < $statement->columnCount(); $i+=1){
        echo '<th class="bg-danger">'. $statement->getColumnMeta($i)['name'];
        echo '</th>';
    }
    while($row = $statement->fetch()){
        echo "<tr>";
        for ($i=0; $i < $statement->columnCount(); $i+=1){
            echo '<td>'. $row[$statement->getColumnMeta($i)['name']] .'</td>';
        }
        echo "</tr>";
    }
    echo "</table>";
    }

?>