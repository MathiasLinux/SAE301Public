<?php
$title = "Château Bourbon";
ob_start();
?>
    <main class="mainChateaux">
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
            <div class="emplacementChateau">
                <svg id="gpsPhoto" data-name="gpsPhoto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 646.72 959.49">
                    <g id="Calque_1-2" data-name="Calque 1">
                        <path d="M323.46,959.49c-4.67-8.07-8.91-15.4-13.14-22.72-52.28-90.38-104.31-180.9-156.96-271.06-26.12-44.71-53.88-88.46-80.01-133.17-23.64-40.45-44.02-82.53-58.75-127.2C-9.19,333.27-3.22,262.49,27.5,194.45,75.89,87.26,159.25,22.22,275.51,4.23c104.17-16.12,196.19,13.98,272.49,87.02,63.59,60.87,95.7,136.61,98.61,224.61,1.29,39-8.43,75.9-22.12,111.96-18.69,49.25-43.64,95.42-71.3,140.03-78.73,126.99-151.43,257.5-226.64,386.55-.83,1.43-1.71,2.83-3.09,5.1ZM485.6,322.66c-.02-88.81-72.78-161.36-161.87-161.41-89.61-.05-162.29,72.48-162.32,162-.03,89.4,72.86,162.36,162.16,162.31,89.58-.05,162.05-72.91,162.03-162.9Z"
                              style="fill: #fdd030;"/>
                    </g>
                </svg>
                <div>Chambord, France</div>
            </div>
        </div>
        <div class="infoChateau">
            <div class="contourNombreImportant">
                <div>55</div>
                <div>Chambres</div>
            </div>
            <div class="contourNombreImportant">
                <div>25</div>
                <div>Salles de bain</div>
            </div>
            <div class="contourNombreImportant">
                <div>19 000</div>
                <div>m²</div>
            </div>
            <div class="contourNombreImportant">
                <div>426</div>
                <div>Pièces</div>
            </div>
        </div>
        <div class="descChateaux">
            <h3>Description :</h3>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, at, consectetur dolorum eligendi et
                eum
                facere harum libero nesciunt nostrum pariatur possimus reiciendis, repellendus ut vel. Fuga odio sed
                voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto, cumque dicta
                dolores
                earum eius eligendi fuga harum in ipsam nobis numquam odio officiis quibusdam quisquam saepe totam
                veritatis
                voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. At atque culpa deleniti earum
                facilis
                impedit in iure iusto, laborum minus odit officia pariatur quasi recusandae, sed sit tempore unde
                voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam, dolore ea
                exercitationem id
                ipsa, iure molestiae nemo non nostrum quae quisquam ratione, repellendus ut voluptatem. Distinctio
                maiores
                minus ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolores explicabo illum
                laboriosam nam odit reiciendis unde. Aut eveniet iste laudantium magnam magni neque quaerat quos
                repellat
                repudiandae, sit, voluptates.
            </div>
        </div>
        <div class="boutonsChateaux">
            <div class="boutonJaune">
                <a href="#">Visite virtuelle</a>
            </div>
            <div class="boutonViolet">
                <a href="#">Carte</a>
            </div>
            <div class="boutonGris">
                <a href="#">Nous contacter</a>
            </div>
        </div>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";
