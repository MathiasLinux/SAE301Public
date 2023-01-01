// Référence à l'élément HTML qui contient les données de la carte
let mapELement = document.querySelector("#mapData");

//Récupération des données de la carte via l'attribut data-map
const X = mapELement.getAttribute("data-coordonneX");
const Y = mapELement.getAttribute("data-coordonneY");
const ADRESSE = mapELement.getAttribute("data-adresse");

var map = L.map('map').setView([X, Y], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker([X, Y]).addTo(map);

marker.bindPopup(ADRESSE).openPopup();