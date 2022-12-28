<?php
$title = "Château Bourbon";
ob_start();
?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
          integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
          crossorigin=""/>
    <main>
        <a class="boutonJaune" href="index.php?action=chateaux&id=<?= $chateauId["id"] ?>">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                </svg>
                Revenir
            </div>
        </a>
        <!-- récupération des coordonnées du château en PHP-->
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
