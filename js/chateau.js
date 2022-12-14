function openFiltre() {
    document.querySelector(".contourFiltre").classList.toggle("contourFiltreOpen");
    document.querySelector(".menuFiltre").classList.toggle("menuFiltreOpen");
}

document.querySelector(".menuFiltre").addEventListener("click", openFiltre);