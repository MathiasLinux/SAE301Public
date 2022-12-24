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
        <h2 class="adminH2">Achat</h2>
        <table>
            <tr>
                <th>Nom</th>
            </tr>
            <tr>
                <td>Mathias KLIEM</td>
            </tr>
            <tr>
                <th>Adresse mail</th>
            </tr>
            <tr>
                <td>
                    mathias.kliem@uha.fr
                </td>
            </tr>
            <tr>
                <th>Intéressé par le bien</th>
            </tr>
            <tr>
                <td>Château de Chambord</td>
            </tr>
            <tr>
                <th>Message</th>
            </tr>
            <tr>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque deleniti dolor
                    doloremque, ex fugiat illo iure laudantium libero magnam maiores odit provident, quas quis rem
                    repellendus reprehenderit vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                    cumque dicta doloribus impedit molestias odit sunt vel velit voluptas voluptatibus. At dolores eaque
                    ex laborum molestias quo quos sunt! Sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores at consequuntur dignissimos error labore, nobis possimus quae quam. Ea facilis fugiat
                    sapiente sed tempora. Animi aut delectus deserunt distinctio repudiandae!
                </td>
            </tr>
        </table>
        <h2 class="adminH2">Vente</h2>
        <table>
            <tr>
                <th>Nom</th>
            </tr>
            <tr>
                <td>Mathias KLIEM</td>
            </tr>
            <tr>
                <th>Adresse mail</th>
            </tr>
            <tr>
                <td>
                    mathias.kliem@uha.fr
                </td>
            </tr>
            <tr>
                <th>Description</th>
            </tr>
            <tr>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque deleniti dolor
                    doloremque, ex fugiat illo iure laudantium libero magnam maiores odit provident, quas quis rem
                    repellendus reprehenderit vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                    cumque dicta doloribus impedit molestias odit sunt vel velit voluptas voluptatibus. At dolores eaque
                    ex laborum molestias quo quos sunt! Sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores at consequuntur dignissimos error labore, nobis possimus quae quam. Ea facilis fugiat
                    sapiente sed tempora. Animi aut delectus deserunt distinctio repudiandae!
                </td>
            </tr>
        </table>
    </main>
<?php
$contenue = ob_get_clean();

require_once "vue/gabarit/gabarit.php";