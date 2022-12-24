<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainBlog">
        <div class="contourArticle">
            <h2>Comment gérer vos impots</h2>
            <img src="img/articles/1.jpg">
            <div class="descArticle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur cum
                distinctio doloremque,
                est eveniet ex expedita id ipsa, libero magni minima molestiae neque nulla perferendis repellendus
                tempora totam velit.
            </div>
            <a class="boutonJaune" href="index.php?action=blogs">Lire la suite</a>
        </div>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";