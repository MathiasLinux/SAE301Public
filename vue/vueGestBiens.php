<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainGestBiens">
        <a class="boutonJaune" href="index.php?action=gestBien">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                </svg>
                Revenir
            </div>
        </a>
            <?php
            if (isset($_GET["id"]) and isset($bien)){
            ?>
                <form class="formBien" action="index.php?action=modifBien&id=<?= $bien["id"] ?>" method="post" enctype="multipart/form-data">
                    <div class="titreBiensAdmin">
                        <input type="text" id="titre" name="titre" placeholder="Nom du bien" class="" <?php
                        if (isset($bien["nom"])){
                            echo "value='".$bien["nom"]."'";
                        }
                        ?>>
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
                            <g id="Edit" transform="translate(-0.5 -0.5)">
                                <path id="Tracé_29" data-name="Tracé 29"
                                      d="M26,32.5H5A4.505,4.505,0,0,1,.5,28V7A4.505,4.505,0,0,1,5,2.5h8.01a1.5,1.5,0,0,1,0,3H5A1.5,1.5,0,0,0,3.5,7V28A1.5,1.5,0,0,0,5,29.5H26A1.5,1.5,0,0,0,27.5,28V19.99a1.5,1.5,0,0,1,3,0V28A4.505,4.505,0,0,1,26,32.5Z"
                                      transform="translate(0 1)" fill="#fff"/>
                                <path id="Tracé_30" data-name="Tracé 30"
                                      d="M23,.5a1.5,1.5,0,0,1,1.061.439l6,6a1.5,1.5,0,0,1,0,2.121l-15,15A1.5,1.5,0,0,1,14,24.5H8A1.5,1.5,0,0,1,6.5,23V17a1.5,1.5,0,0,1,.439-1.061l15-15A1.5,1.5,0,0,1,23,.5ZM26.879,8,23,4.121,9.5,17.621V21.5h3.879Z"
                                      transform="translate(3)" fill="#fff"/>
                            </g>
                        </svg>
                    </div>
            <div class="imageAdmin">
                <div class="imageAdmin">
                    <?php
                $scan = scandir('img/biens');
                    $input = preg_quote($bien["id"].'-', '~');
                    $result = preg_grep('~' . $input . '~', $scan);
                    if (count($result)) {
                foreach ($scan as $file) {
                    if (!is_dir("img/biens/$file") and stripos($file, $bien["id"] . "-") !== false) {
                        if ($file == $bien["id"] . "-1.jpg" or $file == $bien["id"] . "-1.jpeg" or $file == $bien["id"] . "-1.png") {
                            echo "<img src='img/biens/$file' alt='image du bien'>";
                        }
                    }
                }
                    } else {
                    echo "<img src='img/no_image.png' alt=\"pas d'image disponible\">";
                }

                    ?>
                    <div class="petitesImagesAdmin">
                        <?php
                foreach ($scan as $file) {
                    if (!is_dir("img/biens/$file") and stripos($file, $bien["id"] . "-") !== false) {
                        if ($file !== $bien["id"] . "-1.jpg" and $file !== $bien["id"] . "-1.jpeg" and $file !== $bien["id"] . "-1.png") {
                            echo "<img src='img/biens/$file' alt='image du bien'>";
                        }
                    }
                }
                        ?>
                        <label for="imgChateau">
                            <svg xmlns="http://www.w3.org/2000/svg" width="74.419" height="74.419"
                                 viewBox="0 0 74.419 74.419">
                                <path id="Tracé_27" data-name="Tracé 27"
                                      d="M3,50.613V66.484a7.959,7.959,0,0,0,7.935,7.936H66.484a7.936,7.936,0,0,0,7.936-7.936V50.613M58.548,22.839,38.71,3,18.871,22.839M38.71,7.761V48.629"
                                      transform="translate(-1.5 -1.5)" fill="none" stroke="#b2b2b2" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="3"/>
                            </svg>
                        </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="20000000">
                        <input type="file"
                               id="imgChateau" name="imgChateau"
                               accept="image/png, image/jpeg">
                    </div>
                </div>
            </div>
            <div class="affichageAdmin">
                <h3 class="adminH3">Affichage</h3>
                <div>Afficher le bien pour les clients</div>
                <div class="affichageAdminBouton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41.3" height="30.854" viewBox="0 0 41.3 30.854">
                        <g id="Groupe_5" data-name="Groupe 5" transform="translate(0.5 -2.5)">
                            <path id="Tracé_28" data-name="Tracé 28"
                                  d="M20.15,2.5a18.19,18.19,0,0,1,8.858,2.363,26.172,26.172,0,0,1,6.381,5.075,34.32,34.32,0,0,1,5.252,7.319,1.5,1.5,0,0,1,0,1.342,34.32,34.32,0,0,1-5.252,7.319,26.172,26.172,0,0,1-6.381,5.075,18.19,18.19,0,0,1-8.858,2.363,18.19,18.19,0,0,1-8.858-2.363,26.172,26.172,0,0,1-6.381-5.075A34.32,34.32,0,0,1-.342,18.6a1.5,1.5,0,0,1,0-1.342A34.32,34.32,0,0,1,4.911,9.938a26.172,26.172,0,0,1,6.381-5.075A18.19,18.19,0,0,1,20.15,2.5ZM37.591,17.927a32.865,32.865,0,0,0-4.443-5.994c-4.023-4.269-8.4-6.433-13-6.433s-8.974,2.164-13,6.433a32.864,32.864,0,0,0-4.443,5.994,32.865,32.865,0,0,0,4.443,5.994c4.023,4.269,8.4,6.433,13,6.433s8.974-2.164,13-6.433A32.864,32.864,0,0,0,37.591,17.927Z"
                                  transform="translate(0 0)"/>
                            <path id="Ellipse_5" data-name="Ellipse 5"
                                  d="M5-1.5A6.5,6.5,0,1,1-1.5,5,6.507,6.507,0,0,1,5-1.5Zm0,10A3.5,3.5,0,1,0,1.5,5,3.5,3.5,0,0,0,5,8.5Z"
                                  transform="translate(15 13)"/>
                        </g>
                    </svg>
                    <label for="visible">Visible</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="visible" name="visible" value="yes"
                               <?php
                                 if ($bien["visible"] == "1") {
                                      echo "checked";
                                 }
                                 ?>>
                    </div>
                </div>
            </div>
            <h3 class="adminH3">Informations :</h3>
                    <div class="gridAjoutBien">
                        <div>
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="prix" <?php
            if (isset($bien["prix"])) {
                echo "value='" . $bien["prix"] . "'";
            }
            ?>>
                        </div>
                        <div>
            <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" id="adresse"<?php
                    if (isset($bien["adresse"])) {
                        echo "value='" . $bien["adresse"] . "'";
                    }
                    ?>>
                        </div>
                        <div>
            <div>Coordonnées GPS</div>
            <label for="x">X</label>
            <input type="number" name="x" id="x" <?php
            if (isset($bien["x"])) {
                echo "value='" . $bien["x"] . "'";
            }
            ?>>
                        </div>
                        <div>
            <label for="y">Y</label>
            <input type="number" name="y" id="y"<?php
            if (isset($bien["y"])) {
                echo "value='" . $bien["y"] . "'";
            }
            ?>>
                        </div>
                        <div>
            <label for="chambres">Chambres</label>
            <input type="number" name="chambres" id="chambres" <?php
            if (isset($bien["chambres"])) {
                echo "value='" . $bien["chambres"] . "'";
            }
            ?>>
                        </div>
                        <div>
            <label for="sdb">Salles de bain</label>
            <input type="number" name="sdb" id="sdb"<?php
            if (isset($bien["sdb"])) {
                echo "value='" . $bien["sdb"] . "'";
            }
            ?>>
                        </div>
                        <div>
            <label for="superficie">Superficie</label>
            <input type="number" name="superficie" id="superficie"<?php
            if (isset($bien["superficie"])) {
                echo "value='" . $bien["superficie"] . "'";
            }
            ?>>
                        </div>
                        <div>
            <label for="pieces">Pièces</label>
            <input type="number" name="pieces" id="pieces"<?php
            if (isset($bien["pieces"])) {
                echo "value='" . $bien["pieces"] . "'";
            }
            ?>>
                        </div>
                        <div>
            <select id="epoque" name="epoque">
                <option value="">Choisir une epoque</option>
                <?php
                if (isset($bien["epoque"])) {
                    if ($bien["epoque"] == "XV"){
                        echo "<option value='XV' selected>XVème siècle</option>";
                    } else {
                        echo "<option value='XV'>XVème siècle</option>";
                    }
                    if ($bien["epoque"] == "XVI"){
                        echo "<option value='XVI' selected>XVIème siècle</option>";
                    } else {
                        echo "<option value='XVI'>XVIème siècle</option>";
                    }
                    if ($bien["epoque"] == "XVII"){
                        echo "<option value='XVII' selected>XVIIème siècle</option>";
                    } else {
                        echo "<option value='XVII'>XVIIème siècle</option>";
                    }
                    if ($bien["epoque"] == "XVIII"){
                        echo "<option value='XVIII' selected>XVIIIème siècle</option>";
                    } else {
                        echo "<option value='XVIII'>XVIIIème siècle</option>";
                    }
                    if ($bien["epoque"] == "XIX"){
                        echo "<option value='XIX' selected>XIXème siècle</option>";
                    } else {
                        echo "<option value='XIX'>XIXème siècle</option>";
                    }
                    if ($bien["epoque"] == "XX"){
                        echo "<option value='XX' selected>XXème siècle</option>";
                    } else {
                        echo "<option value='XX'>XXème siècle</option>";
                    }
                } else {
                        echo "<option value='XV'>XVème siècle</option>";
                        echo "<option value='XVI'>XVIème siècle</option>";
                        echo "<option value='XVII'>XVIIème siècle</option>";
                        echo "<option value='XVIII'>XVIIIème siècle</option>";
                        echo "<option value='XIX'>XIXème siècle</option>";
                        echo "<option value='XX'>XXème siècle</option>";

                }
                ?>

            </select>
            <select id="statut" name="statut">
                <option value="">Choisir un statut</option>
                <?php
                if (isset($bien["statut"])) {
                    if ($bien["statut"] == "classe"){
                        echo "<option value='classe' selected>Le château est classé</option>";
                    } else {
                        echo "<option value='classe'>Le château est classé</option>";
                    }
                    if ($bien["statut"] == "nonclasse"){
                        echo "<option value='nonclasse' selected>Le château n'est pas classé</option>";
                    } else {
                        echo "<option value='nonclasse'>Le château n'est pas classé</option>";
                    }
                } else {
                    echo "<option value='classe'>Le château est classé</option>";
                    echo "<option value='nonclasse'>Le château n'est pas classé</option>";
                }
                ?>
            </select>
            <select id="etat" name="etat">
                <option value="">Choisir un etat</option>
                <?php
                if (isset($bien["etat"])) {
                    if ($bien["etat"] == "restauration"){
                        echo "<option value='restauration' selected>Restauration nécessaire</option>";
                    } else {
                        echo "<option value='restauration'>Restauration nécessaire</option>";
                    }
                    if ($bien["etat"] == "excellent"){
                        echo "<option value='excellent' selected>Excellent état</option>";
                    } else {
                        echo "<option value='excellent'>Excellent état</option>";
                    }
                } else {
                    echo "<option value='restauration'>Restauration nécessaire</option>";
                    echo "<option value='excellent'>Excellent état</option>";
                }
                ?>
            </select>
            <select id="region" name="region">
                <option value="">Choisir une région</option>
                <?php
                if (isset($bien["region"])) {
                    if ($bien["region"] == "auverge-rhone-alpes"){
                        echo "<option value='auverge-rhone-alpes' selected>Auvergne-Rhône-Alpes</option>";
                    } else {
                        echo "<option value='auverge-rhone-alpes'>Auvergne-Rhône-Alpes</option>";
                    }
                    if ($bien["region"] == "bourgogne-franche-comte"){
                        echo "<option value='bourgogne-franche-comte' selected>Bourgogne-Franche-Comté</option>";
                    } else {
                        echo "<option value='bourgogne-franche-comte'>Bourgogne-Franche-Comté</option>";
                    }
                    if ($bien["region"] == "bretagne"){
                        echo "<option value='bretagne' selected>Bretagne</option>";
                    } else {
                        echo "<option value='bretagne'>Bretagne</option>";
                    }
                    if ($bien["region"] == "centre-val-de-loire"){
                        echo "<option value='centre-val-de-loire' selected>Centre-Val de Loire</option>";
                    } else {
                        echo "<option value='centre-val-de-loire'>Centre-Val de Loire</option>";
                    }
                    if ($bien["region"] == "corse"){
                        echo "<option value='corse' selected>Corse</option>";
                    } else {
                        echo "<option value='corse'>Corse</option>";
                    }
                    if ($bien["region"] == "grand-est"){
                        echo "<option value='grand-est' selected>Grand Est</option>";
                    } else {
                        echo "<option value='grand-est'>Grand Est</option>";
                    }
                    if ($bien["region"] == "hauts-de-france"){
                        echo "<option value='hauts-de-france' selected>Hauts-de-France</option>";
                    } else {
                        echo "<option value='hauts-de-france'>Hauts-de-France</option>";
                    }
                    if ($bien["region"] == "ile-de-france"){
                        echo "<option value='ile-de-france' selected>Île-de-France</option>";
                    } else {
                        echo "<option value='ile-de-france'>Île-de-France</option>";
                    }
                    if ($bien["region"] == "normandie"){
                        echo "<option value='normandie' selected>Normandie</option>";
                    } else {
                        echo "<option value='normandie'>Normandie</option>";
                    }
                    if ($bien["region"] == "nouvelle-aquitaine"){
                        echo "<option value='nouvelle-aquitaine' selected>Nouvelle-Aquitaine</option>";
                    } else {
                        echo "<option value='nouvelle-aquitaine'>Nouvelle-Aquitaine</option>";
                    }
                    if ($bien["region"] == "occitanie"){
                        echo "<option value='occitanie' selected>Occitanie</option>";
                    } else {
                        echo "<option value='occitanie'>Occitanie</option>";
                    }
                    if ($bien["region"] == "pays-de-la-loire"){
                        echo "<option value='pays-de-la-loire' selected>Pays-de-la-Loire</option>";
                    } else {
                        echo "<option value='pays-de-la-loire'>Pays-de-la-Loire</option>";
                    }
                    if ($bien["region"] == "paca"){
                        echo "<option value='paca' selected>Provence-Alpes-Côte d'Azur</option>";
                    } else {
                        echo "<option value='paca'>Provence-Alpes-Côte d'Azur</option>";
                    }
                } else {
                    ?>
                    <option value="auverge-rhone-alpes">Auvergne-Rhône-Alpes</option>
                    <option value="bourgogne-franche-comte">Bourgogne-Franche-Comté</option>
                    <option value="bretagne">Bretagne</option>
                    <option value="centre-val-de-loire">Centre-Val de Loire</option>
                    <option value="corse">Corse</option>
                    <option value="grand-est">Grand Est</option>
                    <option value="hauts-de-france">Hauts-de-France</option>
                    <option value="ile-de-france">Île-de-France</option>
                    <option value="normandie">Normandie</option>
                    <option value="nouvelle-aquitaine">Nouvelle-Aquitaine</option>
                    <option value="occitanie">Occitanie</option>
                    <option value='pays-de-la-loire'>Pays-de-la-Loire</option>
                    <option value="paca">Provence-Alpes-Côte d'Azur</option>
                        <?php
                }
                ?>

            </select>
                        </div>
                        <div>
            <label for="desc">Description</label>
            <textarea name="desc" id="desc" cols="25" rows="10"><?php
                if (isset($bien['description'])) {
                    echo $bien['description'];
                }
                ?></textarea>
                        </div>
                        <div>
            <h3 class="adminH3">Visite Virtuelle :</h3>
                    <?php
                    $id = preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $bien["urlVisite"], $matches); //Récupère l'id de la vidéo youtube via une expression REGEX
                    ?>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?= $matches[1] ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            <label for="lienVisite">Liens vers la visite</label>
            <input type="url" name="lienVisite" id="lienVisite"
                   placeholder="https://www.youtube.com/watch?v=Nlk9hoHP_kk"
                   pattern="https://.*" size="20" <?php
            if (isset($bien['urlVisite'])) {
                echo "value='" . $bien['urlVisite'] . "'";
            }
            ?>>
                        </div>
                    </div>
            <div class="envoyerContact">
                <input type="submit" value="Valider">
            </div>
        </form>
                <div class="boutonRouge firstDelButton">Supprimer ce bien</div>
                <div class="popUpDelete">
                    <div class="textePopUp">Etes-vous sûr de vouloir supprimer ce bien ?</div>
                    <a class="boutonRouge" href="index.php?action=delBien&id=<?= $bien["id"] ?>">Oui</a>
                    <div class="boutonVert closePopUp">Non</div>
                </div>
                <script defer src="js/gestBiens.js"></script>
                <?php
            }else{
                ?>
                <form class="formBien" action="index.php?action=ajoutBien" method="post" enctype="multipart/form-data">
                    <div class="titreBiensAdmin">
                        <input type="text" id="titre" name="titre" placeholder="Nom du bien" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
                            <g id="Edit" transform="translate(-0.5 -0.5)">
                                <path id="Tracé_29" data-name="Tracé 29"
                                      d="M26,32.5H5A4.505,4.505,0,0,1,.5,28V7A4.505,4.505,0,0,1,5,2.5h8.01a1.5,1.5,0,0,1,0,3H5A1.5,1.5,0,0,0,3.5,7V28A1.5,1.5,0,0,0,5,29.5H26A1.5,1.5,0,0,0,27.5,28V19.99a1.5,1.5,0,0,1,3,0V28A4.505,4.505,0,0,1,26,32.5Z"
                                      transform="translate(0 1)" fill="#fff"/>
                                <path id="Tracé_30" data-name="Tracé 30"
                                      d="M23,.5a1.5,1.5,0,0,1,1.061.439l6,6a1.5,1.5,0,0,1,0,2.121l-15,15A1.5,1.5,0,0,1,14,24.5H8A1.5,1.5,0,0,1,6.5,23V17a1.5,1.5,0,0,1,.439-1.061l15-15A1.5,1.5,0,0,1,23,.5ZM26.879,8,23,4.121,9.5,17.621V21.5h3.879Z"
                                      transform="translate(3)" fill="#fff"/>
                            </g>
                        </svg>
                    </div>
                <div class="imageAdmin">
                    <label for="imgChateau">
                        <svg class="svgUploadAdmin" xmlns="http://www.w3.org/2000/svg" width="74.419" height="74.419"
                             viewBox="0 0 74.419 74.419">
                            <path id="Tracé_27" data-name="Tracé 27"
                                  d="M3,50.613V66.484a7.959,7.959,0,0,0,7.935,7.936H66.484a7.936,7.936,0,0,0,7.936-7.936V50.613M58.548,22.839,38.71,3,18.871,22.839M38.71,7.761V48.629"
                                  transform="translate(-1.5 -1.5)" fill="none" stroke="#b2b2b2" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-width="3"/>
                        </svg>
                    </label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="20000000">
                    <input type="file"
                           id="imgChateau" name="imgChateau[]"
                           accept="image/png, image/jpeg" multiple="multiple">
                </div>
                <div class="affichageAdmin">
                    <h3 class="adminH3">Affichage</h3>
                    <div>Afficher le bien pour les clients</div>
                    <div class="affichageAdminBouton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41.3" height="30.854" viewBox="0 0 41.3 30.854">
                            <g id="Groupe_5" data-name="Groupe 5" transform="translate(0.5 -2.5)">
                                <path id="Tracé_28" data-name="Tracé 28"
                                      d="M20.15,2.5a18.19,18.19,0,0,1,8.858,2.363,26.172,26.172,0,0,1,6.381,5.075,34.32,34.32,0,0,1,5.252,7.319,1.5,1.5,0,0,1,0,1.342,34.32,34.32,0,0,1-5.252,7.319,26.172,26.172,0,0,1-6.381,5.075,18.19,18.19,0,0,1-8.858,2.363,18.19,18.19,0,0,1-8.858-2.363,26.172,26.172,0,0,1-6.381-5.075A34.32,34.32,0,0,1-.342,18.6a1.5,1.5,0,0,1,0-1.342A34.32,34.32,0,0,1,4.911,9.938a26.172,26.172,0,0,1,6.381-5.075A18.19,18.19,0,0,1,20.15,2.5ZM37.591,17.927a32.865,32.865,0,0,0-4.443-5.994c-4.023-4.269-8.4-6.433-13-6.433s-8.974,2.164-13,6.433a32.864,32.864,0,0,0-4.443,5.994,32.865,32.865,0,0,0,4.443,5.994c4.023,4.269,8.4,6.433,13,6.433s8.974-2.164,13-6.433A32.864,32.864,0,0,0,37.591,17.927Z"
                                      transform="translate(0 0)"/>
                                <path id="Ellipse_5" data-name="Ellipse 5"
                                      d="M5-1.5A6.5,6.5,0,1,1-1.5,5,6.507,6.507,0,0,1,5-1.5Zm0,10A3.5,3.5,0,1,0,1.5,5,3.5,3.5,0,0,0,5,8.5Z"
                                      transform="translate(15 13)"/>
                            </g>
                        </svg>
                        <label for="visible">Visible</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="visible" name="visible" value="yes"
                                   checked>
                        </div>
                    </div>
                </div>
                <h3 class="adminH3">Informations :</h3>
                    <div class="gridAjoutBien">
                        <div>
                <label for="prix">Prix</label>
                <input type="number" name="prix" id="prix">
                        </div>
                        <div>
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse">
                        </div>
                        <div>
                <div>Coordonnées GPS</div>
                <label for="x">X</label>
                <input type="number" name="x" id="x">
                        </div>
                        <div>
                <label for="y">Y</label>
                <input type="number" name="y" id="y">
                        </div>
                       <div>
                <label for="chambres">Chambres</label>
                <input type="number" name="chambres" id="chambres">
                          </div>
                            <div>
                <label for="sdb">Salles de bain</label>
                <input type="number" name="sdb" id="sdb">
                            </div>
                            <div>
                <label for="superficie">Superficie</label>
                <input type="number" name="superficie" id="superficie">
                            </div>
                            <div>
                <label for="pieces">Pièces</label>
                <input type="number" name="pieces" id="pieces">
                            </div>
                            <div>
                <select id="epoque" name="epoque">
                    <option value="">Choisir une epoque</option>
                    <option value="XV">XVème siècle</option>
                    <option value="XVI">XVIème siècle</option>
                    <option value="XVII">XVIIème siècle</option>
                    <option value="XVIII">XVIIIème siècle</option>
                    <option value="XIX">XIXème siècle</option>
                    <option value="XX">XXème siècle</option>
                </select>
                <select id="statut" name="statut">
                    <option value="">Choisir un statut</option>
                    <option value="classe">Le château est classé</option>
                    <option value="nonclasse">Le château n'est pas classé</option>
                </select>
                <select id="etat" name="etat">
                    <option value="">Choisir un etat</option>
                    <option value="restauration">Restauration nécessaire</option>
                    <option value="excellent">Excellent état</option>
                </select>
                <select id="region" name="region">
                    <option value="">Choisir une région</option>
                    <option value="auverge-rhone-alpes">Auvergne-Rhône-Alpes</option>
                    <option value="bourgogne-franche-comte">Bourgogne-Franche-Comté</option>
                    <option value="bretagne">Bretagne</option>
                    <option value="centre-val-de-loire">Centre-Val de Loire</option>
                    <option value="corse">Corse</option>
                    <option value="grand-est">Grand Est</option>
                    <option value="hauts-de-france">Hauts-de-France</option>
                    <option value="ile-de-france">Île-de-France</option>
                    <option value="normandie">Normandie</option>
                    <option value="nouvelle-aquitaine">Nouvelle-Aquitaine</option>
                    <option value="occitanie">Occitanie</option>
                    <option value="paca">Provence-Alpes-Côte d'Azur</option>
                </select>
                            </div>
                            <div>
                <label for="desc">Description</label>
                <textarea name="desc" id="desc" cols="25" rows="10"></textarea>
                            </div>
                            <div>
                <h3 class="adminH3">Visite Virtuelle :</h3>
                <label for="lienVisite">Liens vers la visite</label>
                <input type="url" name="lienVisite" id="lienVisite"
                       placeholder="https://www.youtube.com/watch?v=Nlk9hoHP_kk"
                       pattern="https://.*" size="20">
                    </div>
                </div>
                <div class="envoyerContact">
                    <input type="submit" value="Valider">
                </div>
                </form>
                <?php
                }
                ?>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";