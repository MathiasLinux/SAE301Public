<?php
$title = "Château Bourbon";
ob_start();
?>
    <main>
        <div class="contourChateau">
            <div class="menuFiltre">
                <div>Filtrer</div>
                <svg xmlns="http://www.w3.org/2000/svg" width="14.828" height="8.414" viewBox="0 0 14.828 8.414">
                    <path id="Tracé_3" data-name="Tracé 3" d="M6,9l6,6,6-6" transform="translate(-4.586 -7.586)"
                          fill="none"
                          stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
            </div>
            <div class="contourFiltre">
                <div class="boutonJaune boutonRegion">
                    <div>Régions</div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.828" height="8.414" viewBox="0 0 14.828 8.414">
                        <path id="Tracé_3" data-name="Tracé 3" d="M6,9l6,6,6-6" transform="translate(-4.586 -7.586)"
                              fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"/>
                    </svg>
                </div>
                <form action="#">
                    <div class="selecteurPrix">
                        <label class="labelFiltre" for="prix">Prix :</label>
                        <input type="range" name="prix" id="prix">
                    </div>
                    <div class="totalSelecteurCase">
                        <div class="labelFiltre">Époque du château :</div>
                        <div class="selecteurCase">
                            <div>
                                <input type="checkbox" name="XV" id="XVsiecle">
                                <label for="XVsiecle">XV<sup>ème</sup> siècle</label>
                            </div>
                            <div>
                                <input type="checkbox" name="XVI" id="XVIsiecle">
                                <label for="XVIsiecle">XVI<sup>ème</sup> siècle</label>
                            </div>
                            <div>
                                <input type="checkbox" name="XVII" id="XVIIsiecle">
                                <label for="XVIIsiecle">XVII<sup>ème</sup> siècle</label>
                            </div>
                            <div>
                                <input type="checkbox" name="XVIII" id="XVIIIsiecle">
                                <label for="XVIIIsiecle">XVIII<sup>ème</sup> siècle</label>
                            </div>
                            <div>
                                <input type="checkbox" name="XIX" id="XIXsiecle">
                                <label for="XIXsiecle">XIX<sup>ème</sup> siècle</label>
                            </div>
                            <div>
                                <input type="checkbox" name="XX" id="XXsiecle">
                                <label for="XXsiecle">XX<sup>ème</sup> siècle</label>
                            </div>
                        </div>
                    </div>
                    <div class="totalSelecteurCase">
                        <div class="labelFiltre">Statut du château :</div>
                        <div class="selecteurCase">
                            <input type="checkbox" name="classe" id="classe">
                            <label for="classe">Le château est classé</label>
                            <input type="checkbox" name="nonclasse" id="nonClasse">
                            <label for="nonClasse">Le château n'est classé</label>
                        </div>
                    </div>
                    <div class="totalSelecteurCase">
                        <div class="labelFiltre">État du château :</div>
                        <div class="selecteurCase">
                            <input type="checkbox" name="restauration" id="restoNecessaire">
                            <label for="restoNecessaire">Restauration nécessaire</label>
                            <input type="checkbox" name="excellent" id="excellentEtat">
                            <label for="excellentEtat">Excellent état</label>
                        </div>
                    </div>
                </form>
            </div>
            <?php
            foreach ($chateaux as $item) {
                ?>
                <div class="contourBiens" data-epoque="<?= $item["epoque"] ?>" data-statut="<?= $item["statut"] ?>"
                     data-etat="<?= $item["etat"] ?>">
                    <div class="bien">
                        <?php
                        if (is_file("img/biens/" . $item["id"] . "-1.jpg")) {
                            ?>
                            <img src="img/biens/<?= $item["id"] ?>-1.jpg">
                            <?php
                        } elseif (is_file("img/biens/" . $item["id"] . "-1.jpeg")) {
                            ?>
                            <img src="img/biens/<?= $item["id"] ?>-1.jpeg">
                            <?php
                        } elseif (is_file("img/biens/" . $item["id"] . "-1.png")) {
                            ?>
                            <img src="img/biens/<?= $item["id"] ?>-1.png">
                            <?php
                        } else {
                            ?>
                            <img src="img/no_image.png">
                            <?php
                        }
                        ?>
                        <div class="localisationChateau">
                            <svg id="location" data-name="location" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 646.72 959.49">
                                <g id="Calque_1-2" data-name="Calque 1">
                                    <path d="M323.46,959.49c-4.67-8.07-8.91-15.4-13.14-22.72-52.28-90.38-104.31-180.9-156.96-271.06-26.12-44.71-53.88-88.46-80.01-133.17-23.64-40.45-44.02-82.53-58.75-127.2C-9.19,333.27-3.22,262.49,27.5,194.45,75.89,87.26,159.25,22.22,275.51,4.23c104.17-16.12,196.19,13.98,272.49,87.02,63.59,60.87,95.7,136.61,98.61,224.61,1.29,39-8.43,75.9-22.12,111.96-18.69,49.25-43.64,95.42-71.3,140.03-78.73,126.99-151.43,257.5-226.64,386.55-.83,1.43-1.71,2.83-3.09,5.1ZM485.6,322.66c-.02-88.81-72.78-161.36-161.87-161.41-89.61-.05-162.29,72.48-162.32,162-.03,89.4,72.86,162.36,162.16,162.31,89.58-.05,162.05-72.91,162.03-162.9Z"
                                          style="fill: #fdd030;"/>
                                </g>
                            </svg>
                            <div class="titreChateau"><?= $item["adresse"] ?></div>
                        </div>
                        <div>
                            <div class="prixChateaux"><?= number_format(intval($item["prix"]), 0, ",", " ") ?>
                                €
                            </div>
                            <div class="contourIcone">
                                <div class="ligneIcone">
                                    <div class="iconeChateau iconeDroit">
                                        <svg id="bed" data-name="bed" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 471.99 314.53">
                                            <g id="Calque_1-2" data-name="Calque 1" fill="#FFF">
                                                <path d="M.5,216.33c-.2-.96-.51-1.74-.5-2.52,.1-16.63-.14-33.27,.5-49.87,.53-13.65,12.69-25.11,26.36-25.95,1.99-.12,3.98-.25,5.98-.25,135.37-.01,270.73,.03,406.1-.07,13.28,0,23.83,4.37,29.78,16.69,1.88,3.9,2.95,8.56,3.05,12.9,.37,15.63,.17,31.26,.16,46.9,0,.63-.28,1.26-.49,2.18H.5Zm393.28-38.97v19.09h18.64v-19.09h-18.64Zm57.74,19.14v-19.05h-18.51v19.05h18.51Z"/>
                                                <path d="M69.19,117.81h-19.64c-.11-1.04-.29-1.99-.29-2.93-.01-28.28-.1-56.57,.03-84.85,.07-14.73,8.89-25.8,23.05-29.19,2.7-.65,5.6-.66,8.41-.66C184.22,.15,287.69,.32,391.15,0c18.11-.06,32.01,13.91,31.68,31.51-.54,28.59-.15,57.2-.15,86.18h-19.89c0-9.05,.02-17.98,0-26.92-.06-25.16-13.96-43.35-38.26-49.82-3.17-.84-6.56-1.22-9.85-1.22-21.29-.03-42.6-.49-63.86,.35-24.13,.95-44.52,22.87-44.87,47.02-.15,10.11-.02,20.23-.02,30.65h-19.91c0-8.65,.37-17.42-.12-26.13-.36-6.39-1.17-12.91-2.96-19.03-5.1-17.48-23.09-31.99-41.32-32.49-22.76-.62-45.58-.77-68.33,.03-23.31,.82-43.64,22.73-44.07,46.12-.19,10.43-.03,20.86-.03,31.55Z"/>
                                                <path d="M471.7,314.53h-21.77c-2.43-9.66-4.86-19.25-7.27-28.86-2-7.97-4.6-10.04-12.93-10.04-129.23,0-258.46,0-387.69,0-8.18,0-10.74,2.11-12.78,10.22-2.37,9.48-4.78,18.95-7.23,28.61H.3v-78.17H471.7v78.24Z"/>
                                                <path d="M206.49,117.8H88.33c0-4.02-.08-8.1,.02-12.17,.16-7.3-.23-14.69,.79-21.88,2.05-14.47,14.09-24.52,28.75-24.6,18.79-.11,37.59,.5,56.35-.19,16.23-.6,31.4,10.64,32.18,28.32,.44,10.07,.08,20.18,.08,30.53Z"/>
                                                <path d="M383.42,117.87h-118.93c.77-12.76,.34-25.48,2.6-37.69,2.37-12.81,14.37-20.94,27.45-21.02,19.45-.12,38.9-.07,58.35-.02,16.66,.04,28.94,10.7,30.36,27.41,.87,10.2,.16,20.54,.16,31.32Z"/>
                                            </g>
                                        </svg>
                                        <div><?= $item["chambres"] ?></div>
                                    </div>
                                    <div class="iconeChateau iconeGauche">
                                        <svg id="bathtub" data-name="bathub"
                                             xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 380.77 382.8">
                                            <g id="Calque_1-2" data-name="Calque 1" fill="#fff">
                                                <path d="M16.67,240.25c17.83,4.34,35.05,8.53,52.58,12.8,0,3.92,0,8.02,0,12.13,0,16.22,0,32.43,0,48.65,0,1-.06,2,.04,2.99,.33,3.49,2.92,6.05,6,6.02,3.09-.03,5.72-2.59,5.89-6.11,.18-3.73,.04-7.47,.04-11.5h17.98c0,3.37-.04,6.82,0,10.26,.06,4.39,2.33,7.23,5.81,7.36,3.59,.13,6.09-2.84,6.16-7.39,.05-3.35,0-6.7,0-10.28h17.96c0,3.56-.04,7.02,.01,10.47,.07,4.33,2.49,7.19,5.97,7.2,3.49,0,5.98-2.85,5.99-7.18,.04-16.22,.02-32.43,.02-48.65,0-1.35,0-2.7,0-4.42,74.78,5.76,147.88-1.98,219.67-22.6-1.18,5.29-3.13,10.3-3.27,15.36-.58,20.56-.63,41.13-.81,61.7-.08,8.98-3.01,16.86-8.94,23.55-7.06,7.96-15.95,12.2-26.66,12.2-88.06,.02-176.13,.03-264.19,0-19.52,0-35.46-15.95-35.54-35.41-.06-14.59-.1-29.19,.02-43.78,.09-11.25-.06-22.43-4.71-33.36Z"/>
                                                <path d="M141.23,250.88v-49.25c6.28,.34,12.44,.89,18.6,.97,18.33,.22,36.68,.83,54.98,.22,28.17-.94,56.14-4.31,83.71-10.22,16.76-3.59,33.37-7.94,49.97-12.26,14.04-3.66,27.33,3.06,31.24,16.25,3.91,13.16-3.42,26.39-17.34,30.62-25.73,7.82-51.92,13.62-78.47,17.9-37.41,6.03-75.05,8.24-112.89,7.3-9.82-.24-19.63-.99-29.8-1.52Z"/>
                                                <path d="M278.8,51.51c-12.02-5.32-23.75-5.3-35.5-.16-.36-.2-.72-.4-1.08-.6,1.6-5.9,2.62-12.05,4.92-17.67C256.28,10.67,279.25-2.42,303.75,.37c23.31,2.65,42.43,21.32,46.3,45.26,.34,2.08,.62,4.2,.62,6.3,.04,37.67,.03,75.33,.03,113,0,.86-.08,1.72-.13,2.77-11.79,3.16-23.51,6.3-35.78,9.59,0-1.99,0-3.43,0-4.87,0-39.16,.02-78.33-.01-117.49,0-10.21-6.25-17.74-15.51-18.91-9.37-1.18-17.24,4.11-19.74,13.27-.16,.58-.37,1.15-.71,2.21Z"/>
                                                <path d="M128.91,268.91h-47.67c0-1.38,0-2.69,0-4,0-26.18,0-52.35,0-78.53,0-8.44,4.73-13.19,13.13-13.2,7.73-.01,15.46-.07,23.18,.02,6.28,.08,11.52,5.14,11.54,11.37,.07,27.55,.03,55.09,.02,82.64,0,.47-.11,.94-.21,1.69Z"/>
                                                <path d="M260.5,113.29c-7.61,0-15.22,.03-22.83-.01-4.53-.03-6.77-2.14-6.7-6.59,.12-7.96-.5-16.08,.86-23.85,2.66-15.15,17.04-24.96,32.6-23.36,14.68,1.51,26.3,14.54,26.38,29.61,.03,5.74,.03,11.48,0,17.21-.03,4.92-2.1,6.95-7.1,6.97-7.73,.03-15.47,0-23.2,0Z"/>
                                                <path d="M104.64,364.73c-4.73,5.88-8.71,11.1-13.04,16.02-1.05,1.2-3.26,1.9-4.95,1.93-9.59,.18-19.18,.12-28.76,.07-4.44-.02-6.53-2.19-6.58-6.7-.04-3.72,0-7.44,0-11.32h53.35Z"/>
                                                <path d="M326.73,364.88c0,4.13,.12,8.23-.04,12.32-.12,3.3-2.43,5.5-5.83,5.53-10.08,.08-20.17,.11-30.25-.06-1.44-.02-3.28-.85-4.21-1.93-4.27-4.97-8.28-10.16-12.86-15.87h53.18Z"/>
                                                <path d="M81.41,292.69v-11.52h47.42v11.52h-47.42Z"/>
                                                <path d="M242.85,128.59c0,1.24,.21,2.53-.04,3.72-.67,3.18-2.7,4.99-6.03,4.91-3.31-.08-5.36-1.93-5.76-5.18-.27-2.2-.14-4.47-.06-6.7,.13-3.73,2.59-6.1,6.1-6.03,3.35,.07,5.65,2.39,5.83,5.94,.06,1.11,0,2.24,0,3.35-.02,0-.03,0-.05,0Z"/>
                                                <path d="M266.86,128.31c0,6.26-1.69,8.84-5.85,8.93-4.34,.09-6.12-2.54-6.12-9.02,0-6.3,1.66-8.84,5.84-8.92,4.35-.09,6.13,2.53,6.13,9.01Z"/>
                                                <path d="M290.76,128.6c0,1.24,.21,2.53-.04,3.72-.68,3.18-2.72,4.99-6.04,4.89-3.31-.09-5.35-1.94-5.75-5.2-.27-2.2-.14-4.47-.06-6.7,.14-3.72,2.6-6.1,6.11-6.02,3.34,.07,5.64,2.41,5.82,5.95,.06,1.11,0,2.24,0,3.35-.02,0-.03,0-.05,0Z"/>
                                                <path d="M242.89,152.37c0,1.12,.08,2.24-.02,3.35-.29,3.24-2.72,5.46-5.92,5.47-3.2,.02-5.73-2.18-5.97-5.4-.16-2.1-.09-4.22-.03-6.33,.11-3.81,2.43-6.19,5.93-6.21,3.5-.02,5.86,2.37,6.02,6.14,.04,.99,0,1.99,0,2.98h-.01Z"/>
                                                <path d="M266.86,152.33c0,.99,.05,1.99-.01,2.98-.2,3.52-2.56,5.84-5.9,5.88-3.35,.04-5.83-2.27-6.02-5.74-.11-1.98-.07-3.97-.02-5.96,.11-3.82,2.39-6.21,5.9-6.25,3.5-.04,5.88,2.35,6.05,6.1,.04,.99,0,1.99,0,2.98Z"/>
                                                <path d="M290.81,152.26c0,6.26-1.69,8.84-5.84,8.93-4.34,.09-6.12-2.54-6.12-9.02,0-6.3,1.66-8.84,5.84-8.93,4.35-.09,6.13,2.53,6.13,9.01Z"/>
                                                <path d="M242.85,176.5c0,1.24,.21,2.53-.04,3.72-.67,3.18-2.7,4.99-6.03,4.91-3.32-.08-5.36-1.93-5.76-5.19-.27-2.2-.14-4.47-.06-6.7,.13-3.72,2.59-6.1,6.1-6.03,3.35,.07,5.65,2.39,5.83,5.94,.06,1.11,0,2.24,0,3.35-.02,0-.03,0-.05,0Z"/>
                                                <path d="M254.89,176.08c0-.87-.03-1.74,0-2.61,.13-3.83,2.38-6.22,5.88-6.27,3.5-.05,5.92,2.34,6.07,6.08,.07,1.86,.06,3.73,0,5.59-.11,3.8-2.41,6.23-5.88,6.28-3.65,.05-5.96-2.4-6.07-6.46-.02-.87,0-1.74,0-2.61Z"/>
                                                <path d="M278.89,175.97c0-1.24-.19-2.52,.04-3.72,.59-3.22,2.59-5.03,5.92-5.03,3.33,0,5.42,1.83,5.87,5.06,.32,2.32,.18,4.72,.07,7.07-.16,3.49-2.62,5.8-5.97,5.79-3.35,0-5.74-2.32-5.95-5.82-.07-1.11-.01-2.24-.01-3.35,.01,0,.02,0,.03,0Z"/>
                                                <path d="M71.83,191.09v49.74c-6.78-1.54-13.39-2.91-19.93-4.57-11.31-2.89-22.63-5.78-33.85-9.02-13.35-3.85-20.75-17.08-17.14-30.05,3.61-13,16.74-20.47,30.16-16.99,13.56,3.52,27.07,7.23,40.76,10.9Z"/>
                                            </g>
                                        </svg>
                                        <div><?= $item["sdb"] ?></div>
                                    </div>
                                </div>
                                <div class="ligneIcone">
                                    <div class="iconeChateau iconeDroit">
                                        <svg id="surface" data-name="surface"
                                             xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 164.38 164.19">
                                            <g id="Calque_1-2" data-name="Calque 1" fill="#fff">
                                                <g>
                                                    <path d="M1.23,17.96C5.7,13.34,10.14,8.69,14.66,4.11,18.93-.23,22.73-1.18,25.84,1.48c3.96,3.38,3.16,7.2,.02,11.47h52.44c-.57-.81-1.37-2.12-1.93-3.87-.46-1.44-.81-2.54-.51-3.84,.52-2.23,2.59-3.43,3.21-3.75,2.85-1.48,6.37-.98,7.97,.32,5.23,4.26,9.85,9.3,14.43,14.3,2.98,3.26,2.11,6.76-.78,9.74-4.03,4.16-8.18,8.21-12.27,12.31-2.95,2.96-6.37,3.83-9.8,1.25-3.45-2.6-3.64-6.06-1.28-9.66,.33-.51,.58-1.07,1.06-1.97H26.06c.59,1.14,.99,1.98,1.44,2.78,1.91,3.43,1.27,6.56-1.69,8.84-2.95,2.27-6.3,2.15-9.03-.54-5.28-5.22-10.38-10.61-15.56-15.93-.12-.09-1.29-1.04-1.22-2.62,.06-1.42,1.07-2.23,1.22-2.35Z"/>
                                                    <path d="M141.37,163.08c-5.11-4.94-10.23-9.85-15.32-14.81-3.01-2.94-3.73-6.44-1.1-9.79,2.45-3.13,5.8-3.58,9.29-1.33,.53,.34,1.1,.6,2.16,1.17v-52.41c-.66,.55-1.86,1.38-3.55,1.86-.96,.27-2.44,.68-4.22,.18-.26-.07-2.31-.68-3.55-2.45-1.79-2.55-1.41-6.25-.34-7.52,4.78-5.66,10.16-10.88,15.75-15.75,2.94-2.55,6.28-1.03,8.87,1.53,3.77,3.72,7.52,7.47,11.24,11.23,3.95,3.98,4.71,7.76,2.25,10.88-2.54,3.22-5.91,3.36-11.46,.21v52.15c1.09-.57,1.93-1.03,2.79-1.44,3.5-1.66,6.61-.91,8.79,2.12,2.04,2.85,1.89,6.05-.67,8.62-5.24,5.27-10.63,10.39-15.96,15.57-.16,.18-.96,1.02-2.26,1.11-1.57,.1-2.58-.97-2.71-1.11Z"/>
                                                    <rect x=".24" y="60.27" width="102.84" height="103.33" rx="22.3"
                                                          ry="22.3"
                                                          style="fill: #fff;"/>
                                                </g>
                                            </g>
                                        </svg>
                                        <div><?= number_format(intval($item["superficie"]), 0, ",", " ") ?> m²</div>
                                    </div>
                                    <div class="iconeChateau iconeGauche">
                                        <svg id="dinning_table" data-name="dinning_table"
                                             xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 335.51 335.07" fill="#fff">
                                            <g id="Calque_1-2" data-name="Calque 1">
                                                <path d="M323.42,335.07h-23.73v-71.52h-72.03v71.42h-24.01c0-1.29,0-2.6,0-3.91,0-30.31,0-60.63,0-90.94,0-14.45,10.25-24.73,24.65-24.74,22.2-.01,44.4,0,66.61,0,1.35,0,2.71,0,4.25,0,.12-.78,.3-1.36,.3-1.94-.13-21.1,1.17-42.12,4.62-62.94,1.85-11.15,4.33-22.21,6.95-33.21,1.72-7.24,9.09-11.49,15.43-9.58,7.02,2.12,10.29,9.24,8.63,17.18-3.15,15.08-6.72,30.14-8.6,45.39-1.94,15.67-2.71,31.56-2.88,47.37-.41,37.55-.16,75.1-.18,112.65,0,1.48,0,2.95,0,4.77Z"/>
                                                <path d="M35.08,216.21c1.52,.07,2.74,.17,3.96,.17,23.08-.02,46.17-.02,69.25-.08,13.4-.03,23.45,9.87,23.46,23.3,.03,30.57,0,61.15,0,91.72,0,1.11,0,2.21,0,3.57h-23.82v-71.34H36.01v71.4H11.99c0-1.42,0-2.86,0-4.3-.02-37.69,.16-75.38-.12-113.06-.22-29.96-2.36-59.76-10.31-88.86-.84-3.08-1.65-6.33-1.55-9.47,.21-6.03,4.54-10.44,9.87-10.89,5.72-.48,11.69,3.13,12.88,8.65,3.1,14.34,6.69,28.65,8.43,43.17,2.1,17.54,2.51,35.29,3.65,52.95,.06,.87,.14,1.73,.24,3.05Z"/>
                                                <path d="M275.51,191.25H60.02c0-8.95-.32-17.78,.12-26.57,.26-5.15,5.01-8.87,10.26-9.2,.99-.06,2-.03,2.99-.03,62.88,0,125.76,0,188.64,0,9.4,0,13.47,4.03,13.47,13.35,0,7.35,0,14.7,0,22.44Z"/>
                                                <path d="M108.02,107.26c-1.12-20.19,12.87-50,47.53-58.54V0h24.02V48.63c16.54,4.07,29.62,12.74,38.73,26.94,6.12,9.54,9.33,20,9.3,31.68H108.02Z"/>
                                                <path d="M149.99,203.57h35.5v131.3h-35.5V203.57Z"/>
                                            </g>
                                        </svg>
                                        <div><?= $item["pieces"] ?></div>
                                    </div>
                                </div>
                            </div>
                            <a class="boutonJaune" href="index.php?action=chateaux&id=<?= $item["id"] ?>">
                                <div>En apprendre plus</div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
    </main>
    <script defer src="js/chateau.js"></script>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";
