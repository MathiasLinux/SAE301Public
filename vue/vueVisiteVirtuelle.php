<?php
$title = "Château Bourbon";
ob_start();
?>
    <main>
        <?php
        $id = preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $chateauUrl["urlVisite"], $matches);
        ?>
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?= $matches[1] ?>"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";
