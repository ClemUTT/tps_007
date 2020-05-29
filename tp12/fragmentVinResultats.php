<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">cru</th>
        <th scope="col">année</th>
        <th scope="col">degré</th>
    </tr>
    </thead>
    <tbody>

    <?php

        while($tuple = $statement->fetch()){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%.2f</td></tr>\n", $tuple['id'], $tuple['cru'], $tuple['annee'], $tuple['degre']);
        }
        echo "</tbody></table>";
    ?>

    </tbody>
</table>