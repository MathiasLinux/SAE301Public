function popupDelete(){
    document.querySelector(".popUpDelete").style.display = "flex";
}

document.querySelector(".firstDelButton").addEventListener("click", popupDelete);

function popupClose(event){
    document.querySelector(".popUpDelete").style.display = "none";
    event.stopPropagation();
}

document.querySelector(".closePopUp").addEventListener("click", popupClose);

document.querySelector(".popUpDelete").addEventListener("click", popupClose);