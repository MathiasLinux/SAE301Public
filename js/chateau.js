function openFiltre() {
    document.querySelector(".contourFiltre").classList.toggle("contourFiltreOpen");
    document.querySelector(".menuFiltre").classList.toggle("menuFiltreOpen");
}

document.querySelector(".menuFiltre").addEventListener("click", openFiltre);

//Fonctionnement du filtre

let input = document.querySelectorAll("form input");

console.log(input);

let biens = document.querySelectorAll(".contourBiens");

input.forEach(e => {
    e.addEventListener("change", () => {
        //If the input changed, we call the function
        biens.forEach(bien => {
            bien.classList.add("bienHidden");
            if (bien.getAttribute("data-epoque") == e.name || bien.getAttribute("data-statut") == e.name || bien.getAttribute("data-etat") == e.name) {
                bien.classList.remove("bienHidden");
            }
        })
    });
})