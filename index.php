<?php
// Pour afficher les erreurs décommenté les lignes en dessous
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
session_start();
require_once "config/config.php";
require_once "controleur/controleur.php";

if (isset($_GET["action"])) {
    if ($_GET["action"] == "chateau") {
        chateau();
    } elseif ($_GET["action"] == "chateaux" and isset($_GET["id"])) {
        chateaux();
    } elseif ($_GET["action"] == "visiteVirtuelle" and isset($_GET["id"])) {
        visiteVirtuelle();
    } elseif ($_GET["action"] == "carte" and isset($_GET["id"])) {
        carte();
    } elseif ($_GET["action"] == "contact") {
        contact();
    } elseif ($_GET["action"] == "formAchat") {
        formAchat();
    } elseif ($_GET["action"] == "formVente") {
        formVente();
    } elseif ($_GET["action"] == "blog") {
        blog();
    } elseif ($_GET["action"] == "blogs") {
        blogs();
    } elseif ($_GET["action"] == "login") {
        login();
    } elseif ($_GET["action"] == "verifLogin") {
        verifLogin();
    } elseif ($_GET["action"] == "legal") {
        legal();
    } elseif ($_GET["action"] == "admin") {
        if (isset($_SESSION["login"])) {
            admin();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "gestBien") {
        if (isset($_SESSION["login"]) and str_contains($_SESSION["login"][1], "biens")) {
            gestBien();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "gestBiens") {
        if (isset($_SESSION["login"]) and str_contains($_SESSION["login"][1], "biens")) {
            gestBiens();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "gestUti") {
        if (isset($_SESSION["login"]) and str_contains($_SESSION["login"][1], "biens") and str_contains($_SESSION["login"][1], "blog")) {
            gestUti();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "gestUtis") {
        if (isset($_SESSION["login"]) and str_contains($_SESSION["login"][1], "biens") and str_contains($_SESSION["login"][1], "blog")) {
            gestUtis();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "formContact") {
        if (isset($_SESSION["login"])) {
            formContact();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "gestBlog") {
        if (isset($_SESSION["login"]) and str_contains($_SESSION["login"][1], "blog")) {
            gestBlog();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "gestBlogs") {
        if (isset($_SESSION["login"]) and str_contains($_SESSION["login"][1], "blog")) {
            gestBlogs();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "unLogin") {
        if (isset($_SESSION["login"])) {
            unLogin();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "ajoutBien") {
        if (isset($_SESSION["login"]) and str_contains($_SESSION["login"][1], "biens")) {
            ajoutBien();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "modifBien") {
        if (isset($_SESSION["login"]) and str_contains($_SESSION["login"][1], "biens")) {
            modifBien();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "delBien" and isset($_GET["id"])) {
        if (isset($_SESSION["login"]) and str_contains($_SESSION["login"][1], "biens")) {
            delBien();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "ajoutUti") {
        if (isset($_SESSION["login"]) and str_contains($_SESSION["login"][1], "biens") and str_contains($_SESSION["login"][1], "blog")) {
            ajoutUti();
        } else {
            header("Location: index.php?action=login");
        }
    } elseif ($_GET["action"] == "modifUti") {
        if (isset($_SESSION["login"]) and str_contains($_SESSION["login"][1], "biens") and str_contains($_SESSION["login"][1], "blog")) {
            modifUti();
        } else {
            header("Location: index.php?action=login");
        }
    }
} else {
    accueil();
}