<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainBlog">
        <h2>Le Blog</h2>
        <div class="contourArticle">
            <h3>Comment gérer vos impots</h3>
            <img src="img/articles/1.jpg">
            <div class="basBlog">
            <div class="descArticle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur cum
                distinctio doloremque,
                est eveniet ex expedita id ipsa, libero magni minima molestiae neque nulla perferendis repellendus
                tempora totam velit.
            </div>
            <a class="boutonJaune" href="index.php?action=blogs">Lire la suite</a>
            </div>
        </div>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";