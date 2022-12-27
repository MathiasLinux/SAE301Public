<?php
$title = "Château Bourbon";
ob_start();
?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
          integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
          crossorigin=""/>
    <main>
        <div id="mapData" data-coordonneX="<?= $chateauXY["x"] ?>" data-coordonneY="<?= $chateauXY["y"] ?>"
             data-adresse="<?= $chateauId["adresse"] ?>"></div>
        <div id="map"></div>
    </main>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
            integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
            crossorigin=""></script>
    <script defer src="js/carte.js"></script>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";
