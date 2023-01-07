function openFiltre() {
    document.querySelector(".contourFiltre").classList.toggle("contourFiltreOpen");
    document.querySelector(".menuFiltre").classList.toggle("menuFiltreOpen");
}

document.querySelector(".menuFiltre").addEventListener("click", openFiltre);

//Fonctionnement du filtre

let input = document.querySelectorAll("form input");

console.log(input);

let biens = document.querySelectorAll(".contourBiens");

/*
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
})*/

/*
document.querySelectorAll(".selecteurCase .labelEtInput input").forEach(e => {
    e.addEventListener("click", () => {
        biens.forEach(bien => {
            if (!(bien.getAttribute("data-epoque") == e.name && e.checked == true)) {
                bien.classList.add("bienHidden");
            } else {
                bien.classList.remove("bienHidden");
                console.log(e);
            }
        });
    });
});*/

function filtreEpoque(epoque) {
    console.log(epoque);
    selector = "input[name=" + epoque + "]";
    document.querySelector(selector).addEventListener("click", () => {
        biens.forEach(bien => {
            if ((document.querySelector(selector).checked == true)) {
                bien.classList.remove("bienHidden");
            } else {
                bien.classList.add("bienHidden");
            }
        });
    });
}

input.forEach(e => {
    e.addEventListener("change", () => {
        filtreEpoque(e.name);
        console.log(e.name);
    });
});

/*
filtreEpoque("XV");
        filtreEpoque("XVI");
        filtreEpoque("XVII");
        filtreEpoque("XVIII");
        filtreEpoque("XIX");
        filtreEpoque("XX");
 */
