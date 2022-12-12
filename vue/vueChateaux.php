<?php
$title = "Château Bourbon";
ob_start();
?>
    <div class="boutonJaune">Revenir</div>
    <div class="contourAnnonceChateau">
        <h2>Château de chambord</h2>
        <!-- Carousel -->
        <div id="photoChateau" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#photoChateau" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#photoChateau" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#photoChateau" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#photoChateau" data-bs-slide-to="3"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/biens/1-1.jpg" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/biens/1-2.jpg" alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/biens/1-3.jpg" alt="New York" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/biens/1-4.jpg" alt="New York" class="d-block w-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#photoChateau" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#photoChateau" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";
