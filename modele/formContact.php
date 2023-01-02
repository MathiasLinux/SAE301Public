<?php
require_once "modele/bdd.php";

class formContact extends database
{
    public function addContactAchat($nom, $mail, $bienid, $message)
    {
        $req = "INSERT INTO contactAchat (nom, mail, bienid, message) VALUES (?, ?, ?, ?)";
        $this->execReqPrepModif($req, array($nom, $mail, $bienid, $message));
    }

    public function addContactVente($nom, $mail, $description)
    {
        $req = "INSERT INTO contactVente (nom, mail, description) VALUES (?, ?, ?)";
        $this->execReqPrepModif($req, array($nom, $mail, $description));
    }

    public function viewContactAchat()
    {
        $req = "SELECT * FROM contactAchat;"; // Envoie de la requête SQL

        $contactAchat = $this->execReq($req); //Execution de la requête SQL

        return $contactAchat; // Retour de la liste des contacts pour les achats
    }

    public function viewContactAchatDate($id)
    {
        $req = "SELECT DATE_FORMAT(date,'%d/%m/%Y') AS 'date' FROM contactAchat WHERE id = ?;"; // Envoie de la requête SQL

        $contactAchatDate = $this->execReqPrep($req, array($id)); //Execution de la requête SQL

        return $contactAchatDate[0]; // Retour de la date pour les achat
    }

    public function viewContactVente()
    {
        $req = "SELECT * FROM contactVente;"; // Envoie de la requête SQL

        $contactVente = $this->execReq($req); //Execution de la requête SQL

        return $contactVente; // Retour de la liste des contacts pour les achats
    }

    public function viewContactVenteDate($id)
    {
        $req = "SELECT DATE_FORMAT(date,'%d/%m/%Y') AS 'date' FROM contactVente WHERE id = ?;"; // Envoie de la requête SQL

        $contactVenteDate = $this->execReqPrep($req, array($id)); //Execution de la requête SQL

        return $contactVenteDate[0]; // Retour de la date pour les achat
    }


    public function getOnlyBienNom($id)
    {
        $req = "SELECT nom FROM biens WHERE id = ?;"; // Envoie de la requête SQL

        $bienId = $this->execReqPrep($req, array($id));

        if (isset($bienId[0])){
            return $bienId[0];
        } else {
            return false;
        }
    }
}
