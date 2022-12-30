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
                       id="imgChateau" name="imgChateau"
                       accept="image/png, image/jpeg">
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
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="prix">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse">
            <div>Coordonnées GPS</div>
            <label for="x">X</label>
            <input type="number" name="x" id="x">
            <label for="y">Y</label>
            <input type="number" name="y" id="y">
            <label for="chambres">Chambres</label>
            <input type="number" name="chambres" id="chambres">
            <label for="sdb">Salles de bain</label>
            <input type="number" name="sdb" id="sdb">
            <label for="superficie">Superficie</label>
            <input type="number" name="superficie" id="superficie">
            <label for="pieces">Pièces</label>
            <input type="number" name="pieces" id="pieces">
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
            <label for="desc">Description</label>
            <textarea name="desc" id="desc" cols="25" rows="10"></textarea>
            <h3 class="adminH3">Visite Virtuelle :</h3>
            <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/Nlk9hoHP_kk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            <label for="lienVisite">Liens vers la visite</label>
            <input type="url" name="lienVisite" id="lienVisite"
                   placeholder="https://example.com"
                   pattern="https://.*" size="20">
            <div class="envoyerContact">
                <input type="submit" value="Valider">
            </div>
        </form>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";