<header>
    <a class="header" href="index.php">
        <img src="img/logo.svg" alt="Logo de chateau">
        <h1>Château Bourbon</h1>
    </a>
    <div class="headerPC">
        <div class="headerPCPartOne">
        <a href="index.php">Accueil</a>
        <a href="index.php?action=chateau">Nos Châteaux</a>
        <a href="index.php?action=contact">Nous Contacter</a>
        <a href="index.php?action=blog">Blog</a>
            <?php
            if (isset($_SESSION["login"])) {
            ?>
                <a href="index.php?action=admin">Admin</a>
                <a href="index.php?action=unLogin">Déconnexion</a>
            <?php
            }
            ?>
        </div>
            <a class="loginSVG" href="index.php?action=login">
        <svg id="Calque_2" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 470 470">
            <g id="Calque_1-2" data-name="Calque 1">
                <path d="M405.23,382.13c-41.25,47.69-102.21,77.87-170.23,77.87s-128.98-30.18-170.23-77.87c28.85-65.34,94.22-110.94,170.23-110.94s141.39,45.6,170.23,110.94Z" style="fill: #ffffff;"/>
                <circle cx="235" cy="178.1" r="93.5" style="fill: #ffffff;"/>
                <path d="M460,235c0,56.25-20.64,107.68-54.77,147.13-41.25,47.69-102.21,77.87-170.23,77.87s-128.98-30.18-170.23-77.87C30.65,342.68,10,291.25,10,235,10,110.73,110.74,10,235,10s225,100.73,225,225Z" style="fill: none; stroke: #ffffff; stroke-miterlimit: 10; stroke-width: 20px;"/>
            </g>
        </svg>
        </a>
    </div>
    <div class="menu" alt="Trois traits espacés">
        <img src="img/menu.svg">
    </div>
    <div class="menuOpen">
        <svg xmlns="http://www.w3.org/2000/svg" width="32.686" height="32.686" viewBox="0 0 32.686 32.686">
            <g id="Croix" transform="translate(16.343 -21.293) rotate(45)">
                <line id="Ligne_7" data-name="Ligne 7" y2="43.225" transform="translate(26.613 5)" fill="none"
                      stroke="#fff" stroke-linejoin="round" stroke-width="3"/>
                <line id="Ligne_8" data-name="Ligne 8" x2="43.225" transform="translate(5 26.613)" fill="none"
                      stroke="#fff" stroke-linejoin="round" stroke-width="3"/>
            </g>
        </svg>
        <div class="contenuMenu">
            <?php
            if (isset($_SESSION["login"])) {
            ?>
                    <style>
                        .contenuMenu {
                            gap: 2%;
                        }
                        @media only screen and (min-width: 800px) and  (max-width: 1439px) {
                            .contenuMenu {
                                gap: 5%;
                            }
                        }
                    </style>
                    <div>
                        <a href="index.php?action=admin">Administration</a>
                    </div>
                    <div>
                        <a href="index.php?action=gestBien">Gestion des biens</a>
                    </div>

                    <div>
                        <a href="index.php?action=gestUti">Gestion des utilisateurs</a>
                    </div>
                    <div>
                        <a href="index.php?action=formContact">Formulaire de contact</a>
                    </div>
                    <div>
                        <a href="index.php?action=gestBlog">Gestion du blog</a>
                    </div>
                    <div class="laBarre"></div>
            <?php
            }
            ?>
            <div>
                <a href="index.php">Accueil</a>
            </div>
            <div>
                <a href="index.php?action=chateau">Nos châteaux</a>
            </div>
            <div>
                <a href="index.php?action=contact">Nous contacter</a>
            </div>
            <div>
                <a href="index.php?action=blog">Blog</a>
            </div>
            <div>
                <?php
                if (!isset($_SESSION["login"])) {
                    ?>
                    <a href="index.php?action=login" class="menuConnexion">
                        <svg id="Calque_2" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 470 470">
                            <g id="Calque_1-2" data-name="Calque 1">
                                <path d="M405.23,382.13c-41.25,47.69-102.21,77.87-170.23,77.87s-128.98-30.18-170.23-77.87c28.85-65.34,94.22-110.94,170.23-110.94s141.39,45.6,170.23,110.94Z"
                                      style="fill: #FFFFFF;"/>
                                <circle cx="235" cy="178.1" r="93.5" style="fill: #FFFFFF;"/>
                                <path d="M460,235c0,56.25-20.64,107.68-54.77,147.13-41.25,47.69-102.21,77.87-170.23,77.87s-128.98-30.18-170.23-77.87C30.65,342.68,10,291.25,10,235,10,110.73,110.74,10,235,10s225,100.73,225,225Z"
                                      style="fill: none; stroke: #FFFFFF; stroke-miterlimit: 10; stroke-width: 20px;"/>
                            </g>
                        </svg>
                        <div>Se connecter</div>
                    </a>
                    <?php
                } else {
                    ?>
                    <a href="index.php?action=unLogin" class="menuConnexion">
                        <svg id="Calque_2" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 470 470">
                            <g id="Calque_1-2" data-name="Calque 1">
                                <path d="M405.23,382.13c-41.25,47.69-102.21,77.87-170.23,77.87s-128.98-30.18-170.23-77.87c28.85-65.34,94.22-110.94,170.23-110.94s141.39,45.6,170.23,110.94Z"
                                      style="fill: #FFFFFF;"/>
                                <circle cx="235" cy="178.1" r="93.5" style="fill: #FFFFFF;"/>
                                <path d="M460,235c0,56.25-20.64,107.68-54.77,147.13-41.25,47.69-102.21,77.87-170.23,77.87s-128.98-30.18-170.23-77.87C30.65,342.68,10,291.25,10,235,10,110.73,110.74,10,235,10s225,100.73,225,225Z"
                                      style="fill: none; stroke: #FFFFFF; stroke-miterlimit: 10; stroke-width: 20px;"/>
                            </g>
                        </svg>
                        <div>Se deconnecter</div>
                    </a>
                    <?php
                }
                ?>

            </div>
        </div>
        <div class="contourFooterMenu">
        <div class="footerMenu">
            <div>Copyright 2022 Château Bourbon</div>
            <a href="index.php?action=legal">A Propos</a>
        </div>
        </div>
    </div>
</header>
