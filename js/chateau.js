function openFiltre() {
    document.querySelector(".contourFiltre").classList.toggle("contourFiltreOpen");
    document.querySelector(".menuFiltre").classList.toggle("menuFiltreOpen");
}

document.querySelector(".menuFiltre").addEventListener("click", openFiltre);

/*function updateTextInput() {
    console.log(this.value);
    //add space between thousands
    let valueRange = this.value.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    document.querySelector(".valuePrix").innerText = valueRange + " €";
}

document.querySelector("form input[type=range]").addEventListener("change", updateTextInput);*/

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

/*
function filtreEpoque(epoque) {
    console.log(epoque);
    selector = "input[name=" + epoque + "]";
    console.log("First if");
    biens.forEach(bien => {
        if ((bien.classList.contains(epoque) && document.querySelector(selector).checked == true)) {
            console.log("Second if");
            bien.classList.remove("bienHidden");
        } else if (document.querySelectorAll("input:checked").length > 1) {
            console.log("Third if");
            document.querySelectorAll("input:checked").forEach(e => {
                console.log("restant = " + e.name);
                document.querySelectorAll(".contourBiens." + e.name).forEach(bien2 => {
                    console.log("bien2 = " + bien2);
                    bien2.classList.remove("bienHidden");
                });
            });
        } else if (document.querySelectorAll("input:checked").length == 0) {
            console.log("Fourth if");
            bien.classList.remove("bienHidden");
        } else {
            console.log("Second else");
            if (document.querySelectorAll("input:checked").length >= 1 && bien.classList.contains(epoque) == false) {
                console.log("Fourth if");
                bien.classList.remove("bienHidden");
            } else {
                bien.classList.add("bienHidden");
            }
        }
    });
}

input.forEach(e => {
    e.addEventListener("change", () => {
        filtreEpoque(e.name);
        console.log(e.name);
    });
});
*/

/*
filtreEpoque("XV");
        filtreEpoque("XVI");
        filtreEpoque("XVII");
        filtreEpoque("XVIII");
        filtreEpoque("XIX");
        filtreEpoque("XX");
 */
