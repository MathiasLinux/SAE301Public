<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("controleur/controleur.php");

if (isset($_GET["action"])) {
    if ($_GET["action"] == "chateau") {
        chateau();
    } elseif ($_GET["action"] == "chateaux") {
        chateaux();
    } elseif ($_GET["action"] == "contact") {
        contact();
    } elseif ($_GET["action"] == "login") {
        login();
    } elseif ($_GET["action"] == "legal") {
        legal();
    } elseif ($_GET["action"] == "admin") {
        admin();
    } elseif ($_GET["action"] == "gestBien") {
        gestBien();
    } elseif ($_GET["action"] == "gestBiens") {
        gestBiens();
    } elseif ($_GET["action"] == "gestUti") {
        gestUti();
    }
} else {
    accueil();
}