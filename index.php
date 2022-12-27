<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
    } elseif ($_GET["action"] == "blog") {
        blog();
    } elseif ($_GET["action"] == "blogs") {
        blogs();
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
    } elseif ($_GET["action"] == "gestUtis") {
        gestUtis();
    } elseif ($_GET["action"] == "formContact") {
        formContact();
    } elseif ($_GET["action"] == "gestBlog") {
        gestBlog();
    } elseif ($_GET["action"] == "gestBlogs") {
        gestBlogs();
    }
} else {
    accueil();
}