<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainLogin">
        <h2>Heureux de vous revoir</h2>
        <form action="#" class="formLogin">
            <label for="e-mail">E-mail :</label>
            <input type="text" name="e-mail" id="e-mail">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password">
            <input type="checkbox" name="resterConnecte" id="resterConnecte">
            <label for="resterConnecte">Rester connecté</label>
            <input type="submit" value="Se connecter">
        </form>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";