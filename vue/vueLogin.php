<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainLogin">
        <div class="contourLogin">
            <h2>Heureux de vous revoir</h2>
            <form action="index.php?action=verifLogin" class="formLogin" method="post">
                <label for="e-mail">E-mail :</label>
                <input type="text" name="e-mail" id="e-mail">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password">
                <div class="resterConnecte">
                    <input type="checkbox" name="resterConnecte" id="resterConnecte">
                    <label for="resterConnecte">Rester connecté</label>
                </div>
                <input type="submit" value="Se connecter">
            </form>
        </div>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";