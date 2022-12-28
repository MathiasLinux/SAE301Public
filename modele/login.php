<?php
require_once "modele/bdd.php";

class login extends database
{
    public function compareLogin($login, $password)
    {
        $req = "SELECT * FROM utilisateur WHERE mail = ?"; // Envoie de la requête SQL

        $verif = $this->execReqPrep($req, array($login));

        if (empty($verif[0])) {
            return false;
        } else {
            if ($verif[0]["mail"] == $login && password_verify($password, $verif[0]["mdp"])) {
                return true;
            } else {
                return false;
            }

        }
    }
}
//echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
