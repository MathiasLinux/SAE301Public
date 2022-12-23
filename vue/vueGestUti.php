<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainUti">
        <a class="boutonJaune" href="index.php?action=gestBien">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                </svg>
                Revenir
            </div>
        </a>
        <h2 class="adminH2">Gestion des utilisateurs</h2>
        <a class="boutonJaune" href="index.php?action=gestBiens">
            <div>Nouvel utilisateur</div>
        </a>
        <form class="formUti" action="#">
            <table>
                <tr>
                    <th>Adresse Mail</th>
                </tr>
                <tr>
                    <td>mathias.kliem@uha.fr</td>
                </tr>
                <tr>
                    <th>Mots de passe</th>
                </tr>
                <tr>
                    <td>
                        <div>••••••••••••••••••</div>
                        <a href="index.php?action=" class="boutonJaune">Changer</a>
                    </td>
                </tr>
                <tr>
                    <th>Rôles</th>
                </tr>
                <tr>
                    <td>
                        <div class="tableauFlex">
                            <div>Gestion Bien</div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode"
                                       value="yes" checked>
                            </div>
                        </div>
                        <div class="tableauFlex">
                            <div>Gestion Blog</div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode"
                                       value="yes" checked>
                            </div>
                        </div>
                        <div></div>
                    </td>
                </tr>
            </table>
            <div class="envoyerContact">
                <input type="submit" value="Valider">
            </div>
        </form>
    </main>
    <script src="js/chateau.js"></script>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";