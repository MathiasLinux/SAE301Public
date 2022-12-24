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
        <h2 class="adminH2">Gestion du blog</h2>
        <a class="boutonJaune" href="index.php?action=gestBlogs">
            <div>Nouvel article</div>
        </a>
        <div class="contourArticle">
            <h2>Comment gérer vos impots</h2>
            <img src="img/articles/1.jpg">
            <div class="descArticle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur cum
                distinctio doloremque,
                est eveniet ex expedita id ipsa, libero magni minima molestiae neque nulla perferendis repellendus
                tempora totam velit.
            </div>
            <a class="boutonJaune" href="index.php?action=gestBlogs">Modifier</a>
        </div>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";