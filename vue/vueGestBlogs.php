<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainUti">
        <a class="boutonJaune" href="index.php?action=gestBlog">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                </svg>
                Revenir
            </div>
        </a>
        <form class="formBien" action="#">
            <div class="titreBiensAdmin">
                <input type="text" id="titre" name="titre" placeholder="Nom de l'article" class="">
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
                <img src="img/articles/1.jpg">
                <div class="uploadImg">
                    <label for="imgArticle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="74.419" height="74.419"
                             viewBox="0 0 74.419 74.419">
                            <path id="Tracé_27" data-name="Tracé 27"
                                  d="M3,50.613V66.484a7.959,7.959,0,0,0,7.935,7.936H66.484a7.936,7.936,0,0,0,7.936-7.936V50.613M58.548,22.839,38.71,3,18.871,22.839M38.71,7.761V48.629"
                                  transform="translate(-1.5 -1.5)" fill="none" stroke="#b2b2b2" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-width="3"/>
                        </svg>
                    </label>
                </div>
                <input type="file"
                       id="imgArticle" name="imgArticle"
                       accept="image/png, image/jpeg">

            </div>
            <div class="affichageAdmin">
                <h3 class="adminH3">Affichage</h3>
                <div>Afficher l'article pour les clients</div>
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
                        <input class="form-check-input" type="checkbox" id="visible" name="darkmode" value="yes"
                               checked>
                    </div>
                </div>
            </div>
            <h3 class="adminH3">Informations :</h3>
            <label for="auteur">Auteur</label>
            <input type="text" name="auteur" id="auteur">
            <label for="datePubli">Date de publication</label>
            <input type="date" name="datePubli" id="datePubli">
            <h3 class="adminH3">Article :</h3>
            <textarea name="article" id="article" cols="25" rows="10"></textarea>

            <div class="envoyerContact">
                <input type="submit" value="Valider">
            </div>
        </form>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";