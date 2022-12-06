<?php
$title = "Château Bourbon";
ob_start();
?>
    <div class="centerContact">
        <h2>Je cherche à</h2>
        <div>
            <div>Acheter</div>
            <div>Vendre</div>
        </div>
        <div>
            <h2>Nos coordonnées</h2>
            <div>
                <div>Téléphone :</div>
                <a href="telto:0389898989">03 89 89 89 89</a>
            </div>
            <div>
                <div>Adresse : 61 rue Albert Camus, 68200 Mulhouse</div>
            </div>
        </div>
    </div>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";