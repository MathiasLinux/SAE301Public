<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainBlog">
        <a class="boutonJaune" href="index.php?action=blog">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                </svg>
                Revenir
            </div>
        </a>
        <h2>Comment gérer vos impots</h2>
        <div>12 décembre 2022</div>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";