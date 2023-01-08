<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainBlog">
        <h2>Le Blog</h2>
        <div class="contourArticle">
            <h3>Comment gérer vos impôts</h3>
            <img src="img/articles/1.jpg">
            <div class="basBlog">
                <div class="descArticle">Il y a plusieurs façons de gérer vos impôts. Voici quelques conseils généraux :
                </div>
                <a class="boutonJaune" href="index.php?action=blogs">Lire la suite</a>
            </div>
        </div>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";