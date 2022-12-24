<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainUti">
        <a class="boutonJaune" href="index.php?action=gestUti">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                </svg>
                Revenir
            </div>
        </a>
        <h2 class="adminH2">Nouvel utilisateur :</h2>
        <form class="formUtis" action="#">
            <label for="mail">Adresse Mail</label>
            <input type="text" name="mail" id="mail">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <div class="rolesAdminUtis">
                <h3 class="adminH3">Rôles</h3>
                <div class="rolesAdminUtisSelect" id="premierRole">
                    <div>Gestion Bien</div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode"
                               value="yes" checked>
                    </div>
                </div>
                <div class="rolesAdminUtisSelect">
                    <div>Gestion Blog</div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode"
                               value="yes" checked>
                    </div>
                </div>
            </div>
            <div class="envoyerContact">
                <input type="submit" value="Valider">
            </div>
        </form>

    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";