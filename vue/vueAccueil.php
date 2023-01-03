<?php
$title = "Château Bourbon";
ob_start();
?>
    <video playsinline="true" autoplay="true" muted="true" loop="true" id="bgvid">
    </video>
    <main class="centerIndex">
        <div class="indexH2">
            <h2>Vente de biens d'exception</h2>
        </div>
        <div class="decouvrezIndex">
            <a href="index.php?action=chateau">Découvrez</a>
        </div>
    </main>
    <script defer src="js/accueil.js"></script>

<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";