<?php
require_once "modele/bdd.php";

class gestBien extends database
{
    public function addBien($nom, $visible, $prix, $adresse, $region, $x, $y, $chambres, $sdb, $superficie, $pieces, $epoque, $statut, $etat, $description, $urlVisite)
    {
        var_dump($_POST);
        if ($visible == "yes") {
            $visible = 1;
        } else {
            $visible = 0;
        }
        echo "<br>";
        echo "<br>";
        echo "INSERT INTO biens (nom, visible, prix, adresse, region, x, y, chambres, sdb, superficie, pieces, epoque, statut, etat, description, urlVisite) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        echo "<br>";
        echo "<br>";
        var_dump($nom, $visible, $prix, $adresse, $region, $x, $y, $chambres, $sdb, $superficie, $pieces, $epoque, $statut, $etat, $description, $urlVisite);
        echo "<br>";
        echo "<br>";
        $req = "INSERT INTO biens (nom, visible, prix, adresse, region, x, y, chambres, sdb, superficie, pieces, epoque, statut, etat, description, urlVisite) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->execReqPrepModif($req, array($nom, $visible, $prix, $adresse, $region, $x, $y, $chambres, $sdb, $superficie, $pieces, $epoque, $statut, $etat, $description, $urlVisite));
    }
}