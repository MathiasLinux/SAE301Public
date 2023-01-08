<?php
$title = "Château Bourbon";
ob_start();
?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
          integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
          crossorigin=""/>
    <main class="mainChateaux">
        <a class="boutonJaune retourChateaux" href="index.php?action=chateau">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                </svg>
                Revenir
            </div>
        </a>
        <div class="contourTotalChateaux">
            <div class="contourAnnonceChateau">
                <div class="topChateaux">
                    <h2><?= $chateauId["nom"] ?></h2>
                    <div class="prixBien"><?= number_format(intval($chateauId["prix"]), 0, ",", " ") ?> €</div>
                </div>
                <!-- Carousel -->
                <div id="photoChateau" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#photoChateau" data-bs-slide-to="0"
                                class="active"></button>
                        <?php
                        $scan = scandir('img/biens');
                        $i = 1;
                        foreach ($scan as $file) {
                            if (!is_dir("img/biens/$file") and stripos($file, $chateauId["id"] . "-") !== false) {
                                if ($file !== $chateauId["id"] . "-1.jpg" and $file !== $chateauId["id"] . "-1.jpeg" and $file !== $chateauId["id"] . "-1.png") {
                                    ?>
                                    <button type="button" data-bs-target="#photoChateau"
                                            data-bs-slide-to="<?= $i ?>"></button>
                                    <?php
                                    $i++;
                                }
                            }
                        }
                        ?>
                    </div>
                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <?php

                        if (is_file("img/biens/" . $chateauId["id"] . "-1.jpg")) {
                            ?>
                            <div class="carousel-item active">
                                <img src="img/biens/<?= $chateauId["id"] ?>-1.jpg" class="d-block w-100">
                            </div>
                            <?php
                        }
                        if (is_file("img/biens/" . $chateauId["id"] . "-1.jpeg")) {
                            ?>
                            <div class="carousel-item active">
                                <img src="img/biens/<?= $chateauId["id"] ?>-1.jpeg" class="d-block w-100">
                            </div>
                            <?php
                        }
                        if (is_file("img/biens/" . $chateauId["id"] . "-1.png")) {
                            ?>
                            <div class="carousel-item active">
                                <img src="img/biens/<?= $chateauId["id"] ?>-1.png" class="d-block w-100">
                            </div>
                            <?php
                        }
                        foreach ($scan as $file) {
                            if (!is_dir("img/biens/$file") and stripos($file, $chateauId["id"] . "-") !== false) {
                                if ($file !== $chateauId["id"] . "-1.jpg" and $file !== $chateauId["id"] . "-1.jpeg" and $file !== $chateauId["id"] . "-1.png") {
                                    ?>
                                    <div class="carousel-item">
                                        <img src="img/biens/<?= $file ?>" class="d-block w-100">
                                    </div>
                                    <?php
                                }
                            }
                        }
                        ?>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#photoChateau"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#photoChateau"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                    <div class="emplacementChateau">
                        <div class="dansEmplacementChateau">
                            <svg id="gpsPhoto" data-name="gpsPhoto" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 646.72 959.49">
                                <g id="Calque_1-2" data-name="Calque 1">
                                    <path d="M323.46,959.49c-4.67-8.07-8.91-15.4-13.14-22.72-52.28-90.38-104.31-180.9-156.96-271.06-26.12-44.71-53.88-88.46-80.01-133.17-23.64-40.45-44.02-82.53-58.75-127.2C-9.19,333.27-3.22,262.49,27.5,194.45,75.89,87.26,159.25,22.22,275.51,4.23c104.17-16.12,196.19,13.98,272.49,87.02,63.59,60.87,95.7,136.61,98.61,224.61,1.29,39-8.43,75.9-22.12,111.96-18.69,49.25-43.64,95.42-71.3,140.03-78.73,126.99-151.43,257.5-226.64,386.55-.83,1.43-1.71,2.83-3.09,5.1ZM485.6,322.66c-.02-88.81-72.78-161.36-161.87-161.41-89.61-.05-162.29,72.48-162.32,162-.03,89.4,72.86,162.36,162.16,162.31,89.58-.05,162.05-72.91,162.03-162.9Z"
                                          style="fill: #fdd030;"/>
                                </g>
                            </svg>
                            <div><?= $chateauId["adresse"] ?></div>
                        </div>
                    </div>
                </div>
                <div class="photosDesktop">
                    <?php

                    if (is_file("img/biens/" . $chateauId["id"] . "-1.jpg")) {
                        ?>
                        <div class="photoBienPrincipale">
                            <img src="img/biens/<?= $chateauId["id"] ?>-1.jpg" class="d-block w-100">
                        </div>
                        <?php
                    }
                    if (is_file("img/biens/" . $chateauId["id"] . "-1.jpeg")) {
                        ?>
                        <div class="photoBienPrincipale">
                            <img src="img/biens/<?= $chateauId["id"] ?>-1.jpeg" class="d-block w-100">
                        </div>
                        <?php
                    }
                    if (is_file("img/biens/" . $chateauId["id"] . "-1.png")) {
                        ?>
                        <div class="photoBienPrincipale">
                            <img src="img/biens/<?= $chateauId["id"] ?>-1.png" class="d-block w-100">
                        </div>
                        <?php
                    }
                    ?>
                    <div class="photosBiensSecondaires">
                        <?php
                        foreach ($scan as $file) {
                            if (!is_dir("img/biens/$file") and stripos($file, $chateauId["id"] . "-") !== false) {
                                if ($file !== $chateauId["id"] . "-1.jpg" and $file !== $chateauId["id"] . "-1.jpeg" and $file !== $chateauId["id"] . "-1.png") {
                                    ?>
                                    <div class="photoBienSecondaire">
                                        <img src="img/biens/<?= $file ?>" class="d-block w-100">
                                    </div>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="infoChateau">
                    <div class="contourNombreImportant">
                        <div><?= $chateauId["chambres"] ?></div>
                        <div>Chambres</div>
                    </div>
                    <div class="contourNombreImportant">
                        <div><?= $chateauId["sdb"] ?></div>
                        <div>Salles de bain</div>
                    </div>
                    <div class="contourNombreImportant">
                        <div><?= number_format(intval($chateauId["superficie"]), 0, ",", " ") ?></div>
                        <div>m²</div>
                    </div>
                    <div class="contourNombreImportant">
                        <div><?= $chateauId["pieces"] ?></div>
                        <div>Pièces</div>
                    </div>
                </div>
                <div class="descChateaux">
                    <h3>Description :</h3>
                    <div>
                        <?= $chateauId["description"] ?>
                    </div>
                </div>
                <div class="boutonsChateaux">
                    <a class="boutonJaune" href="index.php?action=visiteVirtuelle&id=<?= $chateauId["id"] ?>">
                        <div>Visite virtuelle</div>
                    </a>
                    <a class="boutonViolet" href="index.php?action=carte&id=<?= $chateauId["id"] ?>">
                        <div>Carte</div>
                    </a>
                    <a class="boutonGris" href="index.php?action=contact&id=<?= $chateauId["id"] ?>">
                        <div>Nous contacter</div>
                    </a>
                </div>
            </div>
            <div class="contourCarteChateau">
                <!-- récupération des coordonnées du château en PHP-->
                <div id="mapData" data-coordonneX="<?= $chateauXY["x"] ?>" data-coordonneY="<?= $chateauXY["y"] ?>"
                     data-adresse="<?= $chateauId["adresse"] ?>"></div>
                <div id="map"></div>
            </div>
    </main>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
            integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
            crossorigin=""></script>
    <script defer src="js/carte.js"></script>
    <script defer src="js/chateaux.js"></script>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";
