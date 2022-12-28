<?php
require_once "modele/bdd.php";
require_once "modele/chateau.php";
require_once "modele/login.php";
require_once "modele/gestBien.php";

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
    require "vue/vueContact.php";
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
    require "vue/vueGestBiens.php";
}

function gestUti()
{
    require "vue/vueGestUti.php";
}

function gestUtis()
{
    require "vue/vueGestUtis.php";
}

function formContact()
{
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
    //$objGestBien->ajoutBien;

    $objGestBien->addBien($_POST["titre"], $_POST["visible"], $_POST["prix"], $_POST["adresse"], $_POST["region"], $_POST["x"], $_POST["y"], $_POST["chambres"], $_POST["sdb"], $_POST["superficie"], $_POST["pieces"], $_POST["epoque"], $_POST["statut"], $_POST["etat"], $_POST["desc"], $_POST["lienVisite"]);
    //$nom, $visible, $prix, $adresse, $region, $x, $y, $chambres, $sdb, $superficie, $pieces, $epoque, $statut, $etat, $description, $urlVisite

    //header("Location: index.php?action=gestBien");
}
