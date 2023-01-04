//PopOver menu admin Desktop

//let url = "https://mathias-kliem.fr/chateau-bourbon/index.php?action=gestBien";

//console.log("?" + url.split("?")[1]);

document.querySelectorAll(".boutonAdminDesktop").forEach((e) => {
    let url = e.href
    let urlArange = "?" + url.split("?")[1];
    if (urlArange == window.location.search) {
        e.style.backgroundColor = "#B2B2B2";
        e.style.padding = "10px";
        e.style.color = "black";
        e.children[0].style.filter = "invert(100%)";
    }
});

function openMenuA() {
    document.querySelector(".blocAdminPage .blocAdminCote").style.left = "0";
    document.querySelectorAll("main").forEach((e) => {
        e.style.filter = "opacity(10%)";
        document.querySelectorAll("main").forEach((e) => {
            e.addEventListener("click", closeMenuA);
        });
    });

}

function closeMenuA() {
    document.querySelector(".blocAdminPage .blocAdminCote").style.left = "-25%";
    document.querySelectorAll("main").forEach((e) => {
        e.style.filter = "opacity(100%)";
        e.removeEventListener("click", closeMenuA);
    });

    console.log("aaa");
}

document.querySelector(".popOver").addEventListener("click", openMenuA);