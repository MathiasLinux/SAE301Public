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
        <h2 class="adminH2 formContactH2">Achat</h2>
        <div class="gridFormContact">
        <table>
            <tr>
                <th>Nom</th>
                <th>Adresse mail</th>
                <th>Intéressé par le bien</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
            <?php
            foreach ($contactsAchat as $item) {
                ?>
                <tr>
                    <td><?= $item["nom"] ?></td>
                    <td><?= $item["mail"] ?></td>
                    <?php
                    $nomBien = $objFormContact->getOnlyBienNom($item["bienId"])
                    ?>
                    <?php
                    if (isset($nomBien["nom"])){
                    ?>
                    <td><?= $nomBien["nom"] ?></td>
                        <?php
                    } else {
                        ?>
                        <td><strong>Le bien a été supprimé</strong></td>
                        <?php
                    }
                        ?>
                    <td><?= $item["message"] ?></td>
                    <?php
                    $dateContactAchat = $objFormContact->viewContactAchatDate($item["id"]);
                    ?>
                    <td><?= $dateContactAchat["date"] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <h2 class="adminH2 formContactH2">Vente</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Adresse mail</th>
                <th>Description</th>
                <th>Date</th>
            </tr>
            <?php
            foreach ($contactsVente as $item) {
                ?>
                <tr>
                    <td><?= $item["nom"] ?></td>
                    <td><?= $item["mail"] ?></td>
                    <td><?= $item["description"] ?></td>
                    <?php
                    $dateContactVente = $objFormContact->viewContactVenteDate($item["id"])
                    ?>
                    <td><?= $dateContactVente["date"] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        </div>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";