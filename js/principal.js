function menu() {
    document.querySelector(".menuOpen").style.left = "0";
}

function menuclose() {
    document.querySelector(".menuOpen").style.left = "100%";
}

document.querySelector(".menu").addEventListener("click", menu);

document.querySelector(".menuOpen>svg").addEventListener("click", menuclose);

if (!window.location.search) {
    document.querySelector("footer").style.backgroundColor = "#00000082";
}

// Page des annnonces de chateaux