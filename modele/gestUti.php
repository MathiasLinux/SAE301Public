<?php
require_once "modele/bdd.php";

class gestUti extends database
{
    public function getUti()
    {
        $req = "SELECT id, mail, roles FROM utilisateur;"; // Envoie de la requête SQL

        $utilisateurs = $this->execReq($req); //Execution de la requête SQL

        return $utilisateurs; // Retour de la liste des chateaux
    }

    public function addUti($mail, $mdp, $roles)
    {
        if (isset($mail) and isset($mdp) and isset($roles)) {
            if (str_contains($mail, "@") and str_contains($mail, ".")) {
                $req = "INSERT INTO utilisateur (mail, mdp, roles) VALUES (?, ?, ?)";
                $this->execReqPrepModif($req, array($mail, password_hash($mdp, PASSWORD_DEFAULT), $roles));
            }
        }
    }

    public function getUtiId($id)
    {
        $req = "SELECT id, mail, mdp, roles FROM utilisateur WHERE id = ?"; // Envoie de la requête SQL

        $chateauId = $this->execReqPrep($req, array($id));

        return $chateauId[0]; // Retourne toute les infos d'un chateau
    }

    public function modifUti($id, $mail, $password, $roles)
    {
        if (isset($id) and isset($mail) and isset($password) and isset($roles)) {
            $req = "UPDATE utilisateur SET mail = ?, mdp = ?, roles = ? WHERE id = ?";
            $this->execReqPrepModif($req, array($mail, password_hash($password, PASSWORD_DEFAULT), $roles, $id));
        }
    }
}