/*
 * Création de la carte
 */


//Fond de carte Mapbox
var mapbox = L.tileLayer('http://{s}.tiles.mapbox.com/v3/phil6611.ikebkh58/{z}/{x}/{y}.png', {
    attribution: 'Carte Verte des Pyrénées-Orientales © OpenStreetMap contributors, CC-BY-SA, Imagery © Mapbox'
});

//Création de la carte.
var map = L.map('map', {
    center: new L.LatLng(42.5096936, 2.1208774),
    zoom: 15,
    maxZoom: 18,
    layers: [mapbox]
});


//Récupếration des données GEOJSON.

var mont_louis_layer = L.geoJson(mont_louis);
mont_louis_layer.addTo(map);

/*
 * Création des contrôles.
 */

//Contrôles pour les fonds de cartes.
var baseMap = {
    "Rendu Mapbox" : mapbox
};

//Contrôles pour les layers contenant les données.
var overlaysMaps = {

    "Mont Louis" : mont_louis_layer

};

L.control.layers(baseMap, overlaysMaps,{ collapsed: false }).addTo(map);
L.control.scale({imperial: false}).addTo(map);
