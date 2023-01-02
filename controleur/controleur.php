<?php
require_once "modele/bdd.php";
require_once "modele/chateau.php";
require_once "modele/login.php";
require_once "modele/gestBien.php";
require_once "modele/gestUti.php";
require_once "modele/formContact.php";

function accueil()
{
    require "vue/vueAccueil.php";
}

function chateau()
{
    $objCha = new chateau();
    $chateaux = $objCha->getChateaux();
    require "vue/vueChateau.php";
}

function chateaux()
{
    $objCha = new chateau();
    $chateauId = $objCha->getChateauId($_GET["id"]);
    require "vue/vueChateaux.php";
}

function visiteVirtuelle()
{
    $objCha = new chateau();
    $chateauUrl = $objCha->getChateauUrl($_GET["id"]);
    $chateauId = $objCha->getChateauId($_GET["id"]);
    require "vue/vueVisiteVirtuelle.php";
}

function carte()
{
    $objCha = new chateau();
    $chateauXY = $objCha->getChateauXY($_GET["id"]);
    $chateauId = $objCha->getChateauId($_GET["id"]);
    require "vue/vueCarte.php";
}

function contact()
{
    $objCha = new chateau();
    $chateaux = $objCha->getChateaux();
    require "vue/vueContact.php";
}

function formAchat()
{
    $objFormContact = new formContact();
    $objFormContact->addContactAchat($_POST["achatNom"], $_POST["achatMail"], $_POST["achatBien"], $_POST["achatMessage"]);
    header("Location: index.php?action=contact");
}

function formVente()
{
    $objFormContact = new formContact();
    $objFormContact->addContactVente($_POST["venteNom"], $_POST["venteMail"], $_POST["venteDescription"]);
    header("Location: index.php?action=contact");
}

function blog()
{
    require "vue/vueBlog.php";
}

function blogs()
{
    require "vue/vueBlogs.php";
}

function login()
{
    require "vue/vueLogin.php";
}

function verifLogin()
{
    var_dump($_POST);
    $objLog = new login();
    $verif = $objLog->compareLogin($_POST["e-mail"], $_POST["password"]);
    if ($verif == true) {
        $_SESSION["login"] = $_POST["e-mail"];
        header("Location: index.php?action=admin");
    } else {
        header("Location: index.php?action=login");
    }
}

function legal()
{
    require "vue/vueLegal.php";
}

function admin()
{
    require "vue/vueAdmin.php";
}

function gestBien()
{
    $objCha = new chateau();
    $chateaux = $objCha->getChateaux();
    require "vue/vueGestBien.php";
}

function gestBiens()
{
    if (isset($_GET["id"])) {
        $objBien = new gestBien();
        $bien = $objBien->getBienID($_GET["id"]);
    }
    require "vue/vueGestBiens.php";
}

function gestUti()
{
    $objGestUtis = new gestUti();
    $utilisateurs = $objGestUtis->getUti();
    require "vue/vueGestUti.php";
}

function gestUtis()
{
    if (isset($_GET["id"])) {
        $objUtis = new gestUti();
        $utilisateur = $objUtis->getUtiId($_GET["id"]);
    }

    require "vue/vueGestUtis.php";
}

function formContact()
{
    $objFormContact = new formContact();
    $contactsAchat = $objFormContact->viewContactAchat();
    $contactsVente = $objFormContact->viewContactVente();
    require "vue/vueFormContact.php";
}

function gestBlog()
{
    require "vue/vueGestBlog.php";
}

function gestBlogs()
{
    require "vue/vueGestBlogs.php";
}

function unLogin()
{
    session_destroy();
    setcookie(session_name(), "", 1, "/");
    header("Location: index.php");
}

function ajoutBien()
{
    $objGestBien = new gestBien();
    $objChateau= new chateau();
    $objGestBien->addBien($_POST["titre"], $_POST["visible"], $_POST["prix"], $_POST["adresse"], $_POST["region"], $_POST["x"], $_POST["y"], $_POST["chambres"], $_POST["sdb"], $_POST["superficie"], $_POST["pieces"], $_POST["epoque"], $_POST["statut"], $_POST["etat"], $_POST["desc"], $_POST["lienVisite"]);
    $id = $objChateau->getChateauIdFromName($_POST["titre"]);
    $objGestBien->addFiles("imgChateau", "biens", $id);
    header("Location: index.php?action=gestBien");
}

function modifBien(){
   // var_dump($_POST);
    $objBien = new gestBien();
    $bien = $objBien->getBienID($_GET["id"]);
    if ($_POST["titre"] != $bien["nom"]) {
        $objBien->updateBien("nom" ,$_POST["titre"], $bien["id"]);
    }
    $visible = "";
    if (isset($_POST["visible"])) {

    if ($_POST["visible"] == "yes") {
        $visible = "1";
    } else {
        $visible = "0";
    }
    } else {
        $visible = "0";
    }
    if ($visible != $bien["visible"]) {
        $objBien->updateBien("visible" ,$visible, $bien["id"]);
    }
    if ($_POST["prix"] != $bien["prix"]) {
        $objBien->updateBien("prix" ,$_POST["prix"], $bien["id"]);
    }
    if ($_POST["adresse"] != $bien["adresse"]) {
        $objBien->updateBien("adresse" ,$_POST["adresse"], $bien["id"]);
    }
    if ($_POST["region"] != $bien["region"]) {
        $objBien->updateBien("region" ,$_POST["region"], $bien["id"]);
    }
    if ($_POST["x"] != $bien["x"]) {
        $objBien->updateBien("x" ,$_POST["x"], $bien["id"]);
    }
    if ($_POST["y"] != $bien["y"]) {
        $objBien->updateBien("y" ,$_POST["y"], $bien["id"]);
    }
    if ($_POST["chambres"] != $bien["chambres"]) {
        $objBien->updateBien("chambres" ,$_POST["chambres"], $bien["id"]);
    }
    if ($_POST["sdb"] != $bien["sdb"]) {
        $objBien->updateBien("sdb" ,$_POST["sdb"], $bien["id"]);
    }
    if ($_POST["superficie"] != $bien["superficie"]) {
        $objBien->updateBien("superficie" ,$_POST["superficie"], $bien["id"]);
    }
    if ($_POST["pieces"] != $bien["pieces"]) {
        $objBien->updateBien("pieces" ,$_POST["pieces"], $bien["id"]);
    }
    if ($_POST["epoque"] != $bien["epoque"]) {
        $objBien->updateBien("epoque" ,$_POST["epoque"], $bien["id"]);
    }
    if ($_POST["statut"] != $bien["statut"]) {
        $objBien->updateBien("statut" ,$_POST["statut"], $bien["id"]);
    }
    if ($_POST["etat"] != $bien["etat"]) {
        $objBien->updateBien("etat" ,$_POST["etat"], $bien["id"]);
    }
    if ($_POST["desc"] != $bien["description"]) {
        $objBien->updateBien("description" ,$_POST["desc"], $bien["id"]);
    }
    if ($_POST["lienVisite"] != $bien["urlVisite"]) {
        $objBien->updateBien("urlVisite" ,$_POST["lienVisite"], $bien["id"]);
    }
    header("Location: index.php?action=gestBien");

}

function delBien(){
    $objBien = new gestBien();
    $objBien->delBien($_GET["id"]);
    header("Location: index.php?action=gestBien");
}

function ajoutUti()
{
    $objGestUti = new gestUti();
    $roles = "";
    if ($_POST["biens"] == "yes") {
        $roles .= "biens";
    }
    if ($_POST["blog"] == "yes") {
        if ($roles != "") {
            $roles .= ",blog";
        } else {
            $roles .= "blog";
        }
    }

    $objGestUti->addUti($_POST["mail"], $_POST["password"], $roles);
    header("Location: index.php?action=gestUti");
}

function modifUti()
{
    var_dump($_POST);
    if (isset($_GET["id"])) {
        $objUtis = new gestUti();
        $utilisateur = $objUtis->getUtiId($_GET["id"]);
        if (isset($_POST["mail"]) and str_contains($_POST["mail"], "@") and str_contains($_POST["mail"], ".")) {
            if (isset($_POST["oldPassword"]) and password_verify($_POST["oldPassword"], $utilisateur["mdp"])) {
                if (isset($_POST["newPassword"]) and $_POST["newPassword"] == $_POST["newPassword1"]) {
                    if (isset($_POST["biens"]) and isset($_POST["blog"])) {
                        $roles = "";
                        if ($_POST["biens"] == "yes") {
                            $roles .= "biens";
                        }
                        if ($_POST["blog"] == "yes") {
                            if ($roles != "") {
                                $roles .= ",blog";
                            } else {
                                $roles .= "blog";
                            }
                        }
                        $objUtis->modifUti($_GET["id"], $_POST["mail"], $_POST["newPassword"], $roles);
                        header("Location: index.php?action=gestUti");
                    }
                }
            }
        }
    }
}
