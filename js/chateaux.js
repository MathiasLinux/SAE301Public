document.querySelectorAll(".photoBienSecondaire>img").forEach(e => {
    e.addEventListener("click", f => {
        let clickedElement = e;
        let otherElement = document.querySelector(".photoBienPrincipale>img").src
        document.querySelector(".photoBienPrincipale>img").src = clickedElement.src;
        e.src = otherElement;
    })
});