<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainUti">
        <a class="boutonJaune" href="index.php?action=admin">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                </svg>
                Revenir
            </div>
        </a>
        <h2 class="adminH2">Gestion des utilisateurs</h2>
        <a class="boutonJaune" href="index.php?action=gestUtis">
            <div>Nouvel utilisateur</div>
        </a>
        <form class="formUti" action="#" method="post">
            <table>
                <tr>
                    <th>Adresse Mail</th>
                    <th>Mots de passe</th>
                    <th>Rôles</th>
                </tr>
                <?php
                foreach ($utilisateurs as $item) {
                    ?>
                    <tr>
                        <td><?= $item["mail"] ?></td>
                        <td>
                            <div class="fakeMdp">••••••••••••••••••</div>
                        </td>
                        <td>
                            <div class="tableauFlex">
                                <div>Gestion Bien</div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="biens" name="biens"
                                           value="yes"
                                        <?php
                                        if (str_contains($item["roles"], "biens")) {
                                            echo "checked";
                                        }
                                        ?> disabled>
                                </div>
                            </div>
                            <div class="tableauFlex">
                                <div>Gestion Blog</div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="blog" name="blog"
                                           value="yes" <?php
                                    if (str_contains($item["roles"], "blog")) {
                                        echo "checked";
                                    }
                                    ?> disabled>
                                </div>
                            </div>
                            <a class="boutonJaune" href="index.php?action=gestUtis&id=<?= $item["id"] ?>">Modifier
                                l'utilisateur</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </form>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";