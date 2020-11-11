let $map = document.querySelector('#map');

class leafletMap {

    constructor() {
        this.map = null
    }

    async load(element) {

        return new Promise((resolve, reject) => {
            this.map = L.map(element);
            L.tileLayer('//{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
                minZoom: 1,
                maxZoom: 20,
            }).addTo(this.map);
            resolve()
        });
    }

    addMarker(lat, long, text) {

    }

}


const initMap = async function() {
    let map = new leafletMap();

    await map.load($map);


    Array.from(document.querySelectorAll('#item')).forEach((item) => {
        map.addMarker(item.dataset.lat, item.dataset.long);
    })

};


/*



var map = L.map('map').setView([-37.82, 175.23], 13);



*/

let map = L.map('map').setView([33.5814, -7.6733], 11);





L.tileLayer('//{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
    minZoom: 1,
    maxZoom: 20,
    draggable: true

}).addTo(map);

/*

let marker = L.marker([33.5814, -7.6733], {
    draggable: true
}).addTo(map);

*/








let addressPoints = [
    [33.5893102, -7.6113801, "2"],
    [33.5873102, -7.6113901, "3"],
    [33.5893102, -7.6112801, "3A"],
    [33.5833102, -7.6111801, "1"],
    [33.5863102, -7.6113801, "5"],
    [33.5873102, -7.6114801, "7"],
    [33.5863102, -7.6143801, "537"],
    [33.5883102, -7.6153801, "454"],
    [33.5873102, -7.6113801, "176"],
    [33.5883102, -7.6163801, "178"],
    [33.5783102, -7.6173801, "190"],
    [33.5583102, -7.6123801, "156"],
    [33.5283102, -7.6173801, "210"],
    [33.5983102, -7.6193801, "212"],
    [33.5883102, -7.6143801, "146"],
    [33.5783102, -7.6163801, "125"],
    [33.5883102, -7.6143801, "174"],
    [33.5873102, -7.6123801, "129"],
    [33.5893112, -7.6113801, "2"],

    [33.5873122, -7.6113901, "3"],
    [33.5893132, -7.6114801, "3A"],
    [33.5833142, -7.6117801, "1"],
    [33.5863152, -7.6115801, "5"],
    [33.5873162, -7.6119801, "7"],
    [33.5863172, -7.6144801, "537"],
    [33.5883182, -7.6157801, "454"],
    [33.5873192, -7.6111801, "176"],
    [33.5881102, -7.6163701, "178"],
    [33.5782102, -7.6173801, "190"],
    [33.5583102, -7.6123901, "156"],
    [33.5284102, -7.6173201, "210"],
    [33.5985102, -7.6193601, "212"],
    [33.5886102, -7.6143701, "146"],
    [33.5787102, -7.6163501, "125"],
    [33.5883802, -7.6443801, "174"],
    [33.5873902, -7.6423801, "129"],

    [33.5193112, -7.6113801, "2"],
    [33.5273122, -7.6213901, "3"],
    [33.5393132, -7.6314801, "3A"],
    [33.5433142, -7.6417801, "1"],
    [33.5563152, -7.6515801, "5"],
    [33.5673162, -7.6619801, "7"],
    [33.5763172, -7.6744801, "537"],
    [33.5883182, -7.6857801, "454"],
    [33.5973192, -7.6911801, "176"],
    [33.5811102, -7.6113701, "178"],
    [33.5722102, -7.6123801, "190"],
    [33.5533102, -7.6133901, "156"],
    [33.5244102, -7.6143201, "210"],
    [33.5955102, -7.6153601, "212"],
    [33.5866102, -7.6163701, "146"],
    [33.5777102, -7.6173501, "125"],
    [33.5883802, -7.6483801, "174"],
    [33.5893902, -7.6493801, "129"],

]



let markers = L.markerClusterGroup();

console.log(markers)

/*for (let i = 0; i < addressPoints.length; i++) {

    let a = addressPoints[i];
    let title = a[2];
    let marker = L.marker(new L.LatLng(a[0], a[1]), {
        title: title
    });

    marker.bindPopup(title);
    markers.addLayer(marker);
}

map.addLayer(markers);
map.zoomControl.remove();


/*






var markers = L.markerClusterGroup();
markers.addLayer(L.marker(getRandomLatLng(map)));

map.addLayer(markers);





function getRandomLatLng(map) {
    var bounds = map.getBounds(),
        southWest = bounds.getSouthWest(),
        northEast = bounds.getNorthEast(),
        lngSpan = northEast.lng - southWest.lng,
        latSpan = northEast.lat - southWest.lat;

    return new L.LatLng(
        southWest.lat + latSpan * Math.random(),
        southWest.lng + lngSpan * Math.random());
}








***/
















marker.on('dragend', function(e) {


    let lat = marker.getLatLng().lat;

    let long = marker.getLatLng().lng;

    let rad = 1;

    $.ajax({
        url: "http://myhouse.com/api/address/" + lat + "/" + long + "/" + rad,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            let country = res.address.Response.View[0].Result[0].Location.Address.Country;
            let city = res.address.Response.View[0].Result[0].Location.Address.City;
            let district = res.address.Response.View[0].Result[0].Location.Address.District;

            document.getElementById('input-search').value = res.address.Response.View[0].Result[0].Location.Address.Street;
            document.getElementById('country').value = country;
            document.getElementById('city').value = city;
            document.getElementById('district').value = district;

        }
    });


});




function getColor(d) {
    return d > 1000 ? '#800026' :
        d > 500 ? '#BD0026' :
        d > 200 ? '#E31A1C' :
        d > 100 ? '#FC4E2A' :
        d > 50 ? '#FD8D3C' :
        d > 20 ? '#FEB24C' :
        d > 10 ? '#FED976' :
        '#FFEDA0';
}


function style(feature) {
    return {
        fillColor: getColor(feature.properties.density),
        weight: 2,
        opacity: 1,
        color: 'White',
        dashArray: '3',
        fillOpacity: 0.7
    };
}

/*
 ************* POPUP ******************
 */

/*
L.popup()
    .setLatLng([33.5814, -7.6733])
    .setContent('<p>MyHouse!<br />This is a nice popup.</p>')
    .openOn(map);
map.zoomControl.remove();

*/

/*
 ********* GEO JSON ******************
 */

/*
L.geoJson(houses, {style: style}).addTo(map);
let city = L.geoJson(houses);
city.addTo(map);
*/



/*



var BING_KEY = 'AkfAOBKY6GHTPjJvFiyQjkRjgh7DTSWWVRQLPn18hq4suNwmHZnbCIcPv-T347Kd';
var map = L.map('map').setView([33.589886, -7.603869], 13);


var bingLayer = L.tileLayer.bing(BING_KEY).addTo(map);

L.popup()
    .setLatLng([33.55416445, -7.656330708])
    .setContent('<p>MyHouse!<br />MyHouse Casablanca by Geomark.</p>')
    .openOn(map);
 */
