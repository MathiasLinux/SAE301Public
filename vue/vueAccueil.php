<?php
$title = "Château Bourbon";
ob_start();
?>
    <video playsinline autoplay muted loop id="bgvid">
        <source src="video/Chateau_mobile_1080p_Medium.mp4" type="video/mp4">
    </video>
    <div class="centerIndex">
        <h2>Vente de biens d'exeption</h2>
        <div class="decouvrezIndex">
            <a href="#">Découvrez</a>
        </div>
    </div>

<?php
$contenue = ob_get_clean();

require "vue/gabarit/gabarit.php";