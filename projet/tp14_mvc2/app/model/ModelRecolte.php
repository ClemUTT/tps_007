<!-- ----- debut ModelProducteur -->
<?php
require_once 'Model.php';

class ModelRecolte
{

    private $quantite, $nom, $vinId, $id, $region, $annee;

    public function __construct($quantite = NULL, $nom = NULL, $id = NULL, $vinId = NULL, $region = NULL, $annee = NULL)
    {
        if (!is_null($id)) {
            $this->quantite = $quantite;
            $this->nom = $nom;
            $this->id = $id;
            $this->vinId = $vinId;
            $this->region = $region;
            $this->annee = $annee;
        }
    }

    public static function getVinQuantite($id){
        try {
            $database = Model::getInstance();
            $query = "SELECT vin.id as vinId, sum(recolte.quantite) as quantite FROM vin, recolte
                      WHERE recolte.vin_id = vin.id AND vin.id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                    'id' => $id
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getAllProducteur(){
        try {
            $database = Model::getInstance();
            $query = "SELECT * FROM `producteur` WHERE producteur.id IN (SELECT producteur.id FROM recolte, producteur WHERE recolte.producteur_id = producteur.id)";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getRecolteProducteur($id){
        try {
            $database = Model::getInstance();
//            $query = "SELECT producteur.nom as nom, producteur.id as id, recolte.vin_id as vinId, recolte.quantite as quantite
//                      FROM recolte, producteur WHERE id =:id AND recolte.producteur_id = :id";
            $query = "SELECT producteur.nom as nom, producteur.id as id, recolte.vin_id as vinId, recolte.quantite as quantite FROM recolte, vin, producteur WHERE producteur.id = :id and recolte.vin_id = vin.id and recolte.producteur_id = producteur.id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    // Liste des tuples de la table recolte
    public static function getAllRecolte()
    {
        try {
            $database = Model::getInstance();
            $query = "select recolte.vin_id as vinId, recolte.producteur_id as id, recolte.quantite as quantite from recolte";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }


    // retourne une liste des régions
    public static function getAllRegion()
    {
        try {
            $database = Model::getInstance();
            $query = "select distinct region from producteur";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getBiggestProducteur($region)
    {
        try {
            $database = Model::getInstance();
            $query = "select producteur.nom as nom, producteur.id, sum(recolte.quantite) as quantite, producteur.region from producteur, recolte, vin where
                      vin.id = recolte.vin_id and recolte.producteur_id = producteur.id and region = :region
                      group by nom, producteur.id order by quantite desc LIMIT 1";
            $statement = $database->prepare($query);
            $statement->execute([
                'region' => $region
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }


    public static function getTotalQuantite($order)
    {
        try {
            $database = Model::getInstance();
            $query = "SELECT vin.annee, sum(recolte.quantite) as quantite FROM vin, recolte
                      WHERE recolte.vin_id = vin.id
                      group by vin.annee ORDER BY $order DESC";
            $statement = $database->prepare($query);
            //$statement->bindParam(':order', $order, PDO::PARAM_STR);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    /**
     * @return null
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param null $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }


    /**
     * @return null
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param null $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return null
     */
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * @param null $nom
     */
    public function setnom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getVinId()
    {
        return $this->vinId;
    }

    /**
     * @param mixed $vinId
     */
    public function setVinId($vinId)
    {
        $this->vinId = $vinId;
    }

    /**
     * @return null
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param null $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }


    public function __toString()
    {
        return $this->nom + " " + $this->quantite;
    }

    // Persistance .......


    public static function view()
    {
        printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%s</td></tr>", $this->getQuantite(), $this->getNom(), $this->getId(), $this->getRegion());
    }


    public static function update()
    {
        echo("ModelProducteur : update() TODO ....");
        return null;
    }

//    public static function delete() {
//        echo ("ModelRecolte : delete() TODO ....");
//        return null;
//    }

}

?>
<!-- ----- fin ModelProducteur -->
