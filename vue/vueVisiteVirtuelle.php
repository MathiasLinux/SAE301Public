<?php
$title = "Château Bourbon";
ob_start();
?>
    <main>
        <a class="boutonJaune" href="index.php?action=chateaux&id=<?= $chateauId["id"] ?>">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                </svg>
                Revenir
            </div>
        </a>
        <?php
        $id = preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $chateauUrl["urlVisite"], $matches); //Récupère l'id de la vidéo youtube via une expression REGEX
        ?>
        <iframe width="100%" height="80%" src="https://www.youtube.com/embed/<?= $matches[1] ?>"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";
