<?php
$title = "Château Bourbon";
ob_start();
?>
    <video playsinline="true" autoplay="true" muted="true" loop="true" id="bgvid">
        <source src="video/Chateau_mobile_1080p_Medium.mp4" type="video/mp4">
    </video>
    <main class="centerIndex">
        <h2>Vente de biens d'exception</h2>
        <div class="decouvrezIndex">
            <a href="index.php?action=chateau">Découvrez</a>
        </div>
    </main>

<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";