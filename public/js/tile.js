var mcg = L.markerClusterGroup({
    chunkedLoading: true,
    //singleMarkerMode: true,
    spiderfyOnMaxZoom: false
});

for (var i = 0; i < addressPoints.length; i++) {
    var a = addressPoints[i];
    var title = a[2];
    var marker = L.marker(new L.LatLng(a[0], a[1]), { title: title });
    marker.bindPopup(title);
    mcg.addLayer(marker);
}

map.addLayer(mcg);