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

    public function getToken($login)
    {
        $req = "SELECT id_connexion FROM utilisateur WHERE mail = ?"; // Envoie de la requête SQL

        $token = $this->execReqPrep($req, array($login));

        return $token[0]["id_connexion"];
    }

    public function getLoginRoleFromToken($token)
    {
        $req = "SELECT mail, roles FROM utilisateur WHERE id_connexion = ?"; // Envoie de la requête SQL

        $loginRole = $this->execReqPrep($req, array($token));

        if (empty($loginRole[0])) {
            return false;
        } else {
            return $loginRole[0];
        }
    }

    public function getInfoUserName($login)
    {
        $req = "SELECT * FROM utilisateur WHERE mail = ?"; // Envoie de la requête SQL

        $userInfo = $this->execReqPrep($req, array($login));
        return $userInfo[0];
    }
}
//echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
