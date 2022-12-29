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
        <?php
        if (isset($_GET["id"]) and isset($utilisateur)) {
            /*echo "<div style='color: white'>";
            var_dump($utilisateur);
            echo "</div>";*/
            ?>
            <h2 class="adminH2">Modifier <?= $utilisateur["mail"] ?> :</h2>
            <form class="formUtis" action="index.php?action=modifUti&id=<?= $utilisateur["id"] ?>" method="post">
                <label for="mail">Adresse Mail</label>
                <input type="text" name="mail" id="mail" value="<?= $utilisateur["mail"] ?>">
                <label for="oldPassword">Ancien mot de passe</label>
                <input type="password" name="oldPassword" id="oldPassword">
                <label for="newPassword">Nouveau mot de passe</label>
                <input type="password" name="newPassword" id="newPassword">
                <label for="newPassword1">Confirmer votre nouveau mot de passe</label>
                <input type="password" name="newPassword1" id="newPassword1">
                <div class="rolesAdminUtis">
                    <h3 class="adminH3">Rôles</h3>
                    <div class="rolesAdminUtisSelect" id="premierRole">
                        <div>Gestion Bien</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="biens" name="biens"
                                   value="yes" <?php
                            if (str_contains($utilisateur["roles"], "biens")) {
                                echo "checked";
                            }
                            ?>>
                        </div>
                    </div>
                    <div class="rolesAdminUtisSelect">
                        <div>Gestion Blog</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="blog" name="blog"
                                   value="yes" <?php
                            if (str_contains($utilisateur["roles"], "blog")) {
                                echo "checked";
                            }
                            ?>>
                        </div>
                    </div>
                </div>
                <div class="envoyerContact">
                    <input type="submit" value="Valider">
                </div>
            </form>
            <?php
        } else {
            ?>
            <h2 class="adminH2">Nouvel utilisateur :</h2>
            <form class="formUtis" action="index.php?action=ajoutUti" method="post">
                <label for="mail">Adresse Mail</label>
                <input type="text" name="mail" id="mail">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
                <div class="rolesAdminUtis">
                    <h3 class="adminH3">Rôles</h3>
                    <div class="rolesAdminUtisSelect" id="premierRole">
                        <div>Gestion Bien</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="biens" name="biens"
                                   value="yes" checked>
                        </div>
                    </div>
                    <div class="rolesAdminUtisSelect">
                        <div>Gestion Blog</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="blog" name="blog"
                                   value="yes" checked>
                        </div>
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