<?php
require_once "modele/bdd.php";

class chateau extends database
{

    /*******************************************************
     * Retourne la liste des chateaux
     * Entrée :
     * Retour :
     * [array] : Tableau associatif contenant la liste des chateaux
     *******************************************************/
    public function getChateaux()
    {
        $req = "SELECT id, nom, adresse, prix, chambres, sdb, superficie, pieces, epoque, statut, etat FROM biens"; // Envoie de la requête SQL

        $chateaux = $this->execReq($req); //Execution de la requête SQL

        return $chateaux; // Retour de la liste des chateaux
    }

    public function getChateauxVisible()
    {
        $req = "SELECT id, nom, adresse, prix, chambres, sdb, superficie, pieces, epoque, statut, etat FROM biens WHERE visible = '1'"; // Envoie de la requête SQL

        $chateauxVisi = $this->execReq($req); //Execution de la requête SQL

        return $chateauxVisi; // Retour de la liste des chateaux
    }

    public function getChateauxTri($region, $prixMin, $prixMax, $epoque, $statut, $etat)
    {
        $req = "SELECT id, nom, adresse, prix, chambres, sdb, superficie, pieces, epoque, statut, etat FROM biens WHERE visible = '1'"; // Envoie de la requête SQL

        $modif = [];

        if (!empty($region)) {
            $req .= " AND region = ?";
            //add to the arrau $modif the value of $region
            $modif[] .= $region;
        }
        if (!empty($prixMin)) {
            $req .= " AND prix >= ?";
            $modif[] .= $prixMin;
        }
        if (!empty($prixMax)) {
            $req .= " AND prix <= ?";
            $modif[] .= $prixMax;
        }
        if (!empty($epoque)) {
            if (count($epoque) > 1) {
                $req .= " AND (";
                foreach ($epoque as $key => $value) {
                    $req .= "epoque = ? OR ";
                    $modif[] .= $value;
                }
                $req = substr($req, 0, -4);
                $req .= ")";
            } else {
                $req .= " AND epoque = ?";
                $modif[] .= $epoque[0];
            }
        }
        if (!empty($statut)) {
            if (count($statut) > 1) {
                $req .= " AND (";
                foreach ($statut as $key => $value) {
                    $req .= "statut = ? OR ";
                    $modif[] .= $value;
                }
                $req = substr($req, 0, -4);
                $req .= ")";
            } else {
                $req .= " AND statut = ?";
                $modif[] .= $statut[0];
            }
        }
        if (!empty($etat)) {
            if (count($etat) > 1) {
                $req .= " AND (";
                foreach ($etat as $key => $value) {
                    $req .= "etat = ? OR ";
                    $modif[] .= $value;
                }
                $req = substr($req, 0, -4);
                $req .= ")";
            } else {
                $req .= " AND etat = ?";
                $modif[] .= $etat[0];
            }
        }

        $chateauxTri = $this->execReqPrep($req, $modif);

        return $chateauxTri; // Retour de la liste des chateaux
    }

    public function getChateauxTriGest($region, $prixMin, $prixMax, $epoque, $statut, $etat)
    {
        $req = "SELECT id, nom, adresse, prix, chambres, sdb, superficie, pieces, epoque, statut, etat FROM biens WHERE"; // Envoie de la requête SQL

        $modif = [];

        if (!empty($region)) {
            $req .= " AND region = ?";
            //add to the arrau $modif the value of $region
            $modif[] .= $region;
        }
        if (!empty($prixMin)) {
            $req .= " AND prix >= ?";
            $modif[] .= $prixMin;
        }
        if (!empty($prixMax)) {
            $req .= " AND prix <= ?";
            $modif[] .= $prixMax;
        }
        if (!empty($epoque)) {
            if (count($epoque) > 1) {
                $req .= " AND (";
                foreach ($epoque as $key => $value) {
                    $req .= "epoque = ? OR ";
                    $modif[] .= $value;
                }
                $req = substr($req, 0, -4);
                $req .= ")";
            } else {
                $req .= " AND epoque = ?";
                $modif[] .= $epoque[0];
            }
        }
        if (!empty($statut)) {
            if (count($statut) > 1) {
                $req .= " AND (";
                foreach ($statut as $key => $value) {
                    $req .= "statut = ? OR ";
                    $modif[] .= $value;
                }
                $req = substr($req, 0, -4);
                $req .= ")";
            } else {
                $req .= " AND statut = ?";
                $modif[] .= $statut[0];
            }
        }
        if (!empty($etat)) {
            if (count($etat) > 1) {
                $req .= " AND (";
                foreach ($etat as $key => $value) {
                    $req .= "etat = ? OR ";
                    $modif[] .= $value;
                }
                $req = substr($req, 0, -4);
                $req .= ")";
            } else {
                $req .= " AND etat = ?";
                $modif[] .= $etat[0];
            }
        }

        if (!count($modif)) {
            //Remove WHERE with a REGEX expression
            $req = preg_replace('/WHERE/', '', $req, 1);
        } else {
            //Remove AND with a REGEX expression
            $req = preg_replace('/AND/', '', $req, 1);
        }

        $chateauxTri = $this->execReqPrep($req, $modif);

        return $chateauxTri; // Retour de la liste des chateaux
    }

    public function getChateauId($id)
    {
        $req = "SELECT id, nom, prix, adresse, chambres, sdb, superficie, pieces, description FROM biens WHERE id = ?"; // Envoie de la requête SQL

        $chateauId = $this->execReqPrep($req, array($id));

        return $chateauId[0]; // Retourne toute les infos d'un chateau
    }

    public function getChateauUrl($id)
    {
        $req = "SELECT urlVisite FROM biens WHERE id = ?"; // Envoie de la requête SQL

        $chateauUrl = $this->execReqPrep($req, array($id));

        return $chateauUrl[0]; // Retourne l'url de la viste d'un chateau
    }

    public function getChateauXY($id)
    {
        $req = "SELECT x, y FROM biens WHERE id = ?"; // Envoie de la requête SQL

        $chateauXY = $this->execReqPrep($req, array($id));

        return $chateauXY[0]; // Retourne les coordonnées x et y d'un chateau
    }

    public function getChateauIdFromName($name)
    {
        $req = "SELECT id FROM biens WHERE nom = ?"; // Envoie de la requête SQL

        $chateauId = $this->execReqPrep($req, array($name));

        return $chateauId[0]["id"]; // Retourne l'id du chateau
    }
}