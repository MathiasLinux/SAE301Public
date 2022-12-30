<?php
$title = "Château Bourbon";
ob_start();
?>
    <main>
        <div class="centerContact">
            <h2>Je cherche à</h2>
            <div class="autourBouton">
                <input type="radio" id="acheter" name="contact" value="acheter">
                <label class="boutonContact" for="acheter">Acheter</label>
                <input type="radio" id="vendre" name="contact" value="vendre">
                <label class="boutonContact" for="vendre">Vendre</label>
            </div>
            <div class="coordonees">
                <div class="coordonnesAncienne">
                    <h2>Nos coordonnées</h2>
                    <div class="coordoneesBas">
                        <svg id="tel" data-name="tel" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.09 20.46">
                            <g id="Calque_1-2" data-name="Calque 1" fill="#FFF">
                                <path d="M4.42,0c.64,.19,1.07,.64,1.42,1.16,.5,.74,.97,1.5,1.4,2.27,.29,.53,.43,1.11,.3,1.73-.08,.38-.27,.71-.56,.97-.39,.35-.77,.7-1.19,1-.86,.59-1.02,1.33-.64,2.27,.22,.56,.52,1.1,.86,1.59,.8,1.17,1.74,2.23,2.82,3.14,.52,.44,1.07,.83,1.76,.99,.56,.13,1.05-.02,1.46-.42,.39-.37,.78-.75,1.18-1.1,.73-.63,1.55-.7,2.41-.26,.79,.4,1.43,.99,2.08,1.58,.37,.33,.72,.7,1.02,1.09,.53,.68,.47,1.37-.17,1.96-.65,.59-1.26,1.22-2.04,1.66-1.2,.67-2.47,.93-3.84,.8-1.65-.15-3.1-.82-4.45-1.73-1.89-1.27-3.43-2.9-4.85-4.66-1.01-1.27-1.9-2.61-2.55-4.11C.34,8.77,0,7.56,0,6.29,0,4.18,.75,2.42,2.43,1.08c.16-.12,.31-.26,.45-.39,.33-.29,.66-.57,1.1-.69h.44Z"/>
                            </g>
                        </svg>
                        <div>Téléphone :</div>
                        <a href="telto:0389898989">03 89 89 89 89</a>
                    </div>
                    <div class="coordoneesBas">
                        <svg id="home" data-name="home" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 371.66 331.67">
                            <g id="Calque_1-2" data-name="Calque 2" fill="#FFF">
                                <g>
                                    <path d="M0,157.05c4.6-4.38,8.99-8.99,13.82-13.11C68.73,97.07,123.71,50.28,178.66,3.46c5.41-4.61,8.96-4.62,14.34-.02,16.64,14.22,33.3,28.42,49.95,42.62,.72,.62,1.51,1.15,2.7,2.05,.11-1.41,.25-2.42,.25-3.42,.02-8.71-.04-17.42,.03-26.13,.06-6.94,3.31-10.16,10.25-10.18,11.25-.04,22.5-.04,33.75,0,7.26,.02,10.57,3.39,10.57,10.7,0,24.19,.04,48.38-.05,72.57,0,2.4,.72,3.92,2.56,5.48,21.58,18.3,43.09,36.69,64.6,55.08,3.86,3.29,4.97,6.94,3.31,10.51-1.66,3.58-5.02,5.42-8.91,4.42-1.78-.46-3.55-1.53-4.98-2.74-55.83-47.47-111.61-95-167.4-142.51-1.18-1-2.38-1.98-3.79-3.15-8.16,6.94-16.16,13.73-24.15,20.54C112.61,81.05,63.55,122.85,14.47,164.62,9.18,169.13,4.86,168.34,0,162.13,0,160.43,0,158.74,0,157.05ZM284.14,25.04h-21.69c-.17,.37-.36,.58-.36,.79-.04,11.6-.1,23.21,0,34.81,0,1.09,.9,2.43,1.78,3.21,4.35,3.84,8.82,7.53,13.27,11.26,2.17,1.82,4.38,3.59,6.99,5.73V25.04Z"/>
                                    <path d="M58.3,173.37c-3.4,2.95-5.93,5.19-8.51,7.37-4.68,3.95-9.27,3.97-12.48,.09-3.1-3.74-2.3-8.62,2.12-12.4,21.59-18.47,43.2-36.93,64.8-55.39,24.27-20.74,48.54-41.47,72.82-62.2,.74-.63,1.46-1.27,2.21-1.88,5.06-4.14,8.23-4.2,13.21,0,8.78,7.41,17.48,14.91,26.21,22.37,37.69,32.21,75.4,64.4,113.03,96.67,1.76,1.51,3.46,3.54,4.19,5.67,1.14,3.34-.11,6.48-3.07,8.59-3.01,2.14-6.24,1.98-9.11-.16-3.36-2.5-6.47-5.33-10.4-8.62,0,2.11,0,3.48,0,4.86,0,47.05,0,94.1-.02,141.15,0,1.8-.14,3.63-.47,5.39-.66,3.59-2.95,5.7-6.5,6.36-1.53,.28-3.12,.41-4.68,.42-77.29,.02-154.58,.03-231.86-.04-2.34,0-4.91-.33-6.98-1.33-3.85-1.86-4.51-5.65-4.51-9.57,0-12.82,0-25.64,0-38.46,0-34.59,0-69.18,0-103.78v-5.11Zm127.74-108.55c-.56,.3-.79,.38-.97,.53-36.09,30.73-72.17,61.48-108.31,92.16-1.84,1.56-2.11,3.23-2.11,5.36,.03,49.47,.02,98.94,.02,148.42,0,1.27,0,2.55,0,3.82h63.11c0-1.64,0-3.06,0-4.49,0-28.67,0-57.33,0-86,0-1.45,0-2.91,.13-4.35,.4-4.27,3.28-7.05,7.55-7.33,1.08-.07,2.18-.04,3.26-.04,25.16,0,50.32-.01,75.48,0,6.62,0,9.47,2.77,9.75,9.34,.05,1.09,.02,2.18,.02,3.27,0,28.43,0,56.85,0,85.28,0,1.42,0,2.83,0,4.32h63.01v-4.49c0-48.87-.05-97.73,.1-146.6,.01-3.57-1.21-5.74-3.78-7.9-16.09-13.56-32.07-27.25-48.09-40.89-19.7-16.77-39.4-33.55-59.19-50.4Zm-32,250.25h63.46v-85.96h-63.46v85.96Z"/>
                                </g>
                            </g>
                        </svg>
                        <div>Adresse : 61 rue Albert Camus, 68200 Mulhouse</div>
                    </div>
                </div>
                <div class="coordoneesFormulaireAchat">
                    <form action="index.php?action=formAchat" method="post">
                        <label for="achatNom">Votre nom :</label>
                        <input type="text" name="achatNom" id="achatNom">
                        <label for="achatNom">Votre adresse e-mail :</label>
                        <input type="text" name="achatMail" id="achatMail">
                        <label for="achatBien">Le bien qui vous intéresse :</label>
                        <select id="achatBien" name="achatBien">
                            <option value="">Choisir un bien</option>
                            <?php
                            foreach ($chateaux as $item) {
                                echo '<option value="' . $item['id'] . '">' . $item['nom'] . '</option>';
                            }
                            ?>
                        </select>
                        <div></div>
                        <label for="achatMessage">Message :</label>

                        <textarea id="achatMessage" name="achatMessage"
                                  rows="4" cols="25"></textarea>
                        <div class="envoyerContact">
                            <input type="submit" value="Envoyer">
                        </div>
                    </form>
                </div>
                <div class="coordoneesFormulaireVente">
                    <form action="index.php?action=formVente" method="post">
                        <label for="venteNom">Votre nom :</label>
                        <input type="text" name="venteNom" id="venteNom">
                        <label for="venteNom">Votre adresse e-mail :</label>
                        <input type="text" name="venteMail" id="venteNom">
                        <label for="venteDescription">Description de votre bien :</label>

                        <textarea id="venteDescription" name="venteDescription"
                                  rows="4" cols="25"></textarea>
                        <div class="envoyerContact">
                            <input type="submit" value="Envoyer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="js/contact.js"></script>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";