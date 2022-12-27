<?php
require_once "modele/bdd.php";
require_once "modele/chateau.php";

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
