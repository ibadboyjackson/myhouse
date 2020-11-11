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


marker = L.marker([33.5814, -7.6733], {

    draggable: true

}).addTo(map);




$('#loader').hide();
$('#loaders').hide();





let APP_ID_HERE = "iQreBCeFEKCr6KCIroPh";
let APP_CODE_HERE = "vRlmaaEMIcI14Qtw-6Icnw";

let APP_LANG = $('meta[name="has-locale"]').attr('content');


console.log(APP_LANG);

// by default, Paris...
let coordinates = "33.5814,-7.6733";

// let's get HTML5 geolocation
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(position => {
        coordinates = position.coords.latitude + "," + position.coords.longitude;
        document.getElementById("coords").innerHTML = "Location: " + coordinates;
    });
} else

{
    console.log("Geolocation is not supported by this browser.");
}


$("#input-search").autocomplete({

    source: placeAC,

    minLength: 1,


    select: function(event, ui) {


        event.preventDefault();


        $('#input-search').val(ui.item.title);
        $('#loaders').show();


        let addresse = ui.item.value;
        let label = ui.item;





        let list = addresse.split(",");



        let a = list[0] // adresse
        let b = list[1] // quartier
        let c = list[2] //  ville
        let d = list[3] // pays



        let lat = ui.item.position[0];
        let long = ui.item.position[1];
        let rad = 1;




        document.getElementById('district').value = b;
        document.getElementById('city').value = c;



        let dist = $('#district').val();
        let cit = $('#city').val();


        if (dist == 'undefined') {

            if (APP_LANG == 'fr') {
                $('#district').attr('value', 'indéfini');
            } else if (APP_LANG == 'en') {
                $('#district').attr('value', 'undefined');
            }

        }

        if (cit == 'undefined') {

            if (APP_LANG == 'fr') {
                $('#city').attr('value', 'indéfini');
            } else if (APP_LANG == 'en') {
                $('#city').attr('value', 'undefined');
            }

        }






        $.ajax({

            url: "http://myhouse.local/api/address/" + lat + "/" + long + "/" + rad,

            type: 'GET',

            dataType: 'json', // added data type

            success: function(res) {

                let country = res.address.Response.View[0].Result[0].Location.Address.Country;

                document.getElementById('country').value = country;

                $('#loaders').hide();

                let counts = $('#country').val();

                if (counts == 'undefined') {

                    if (APP_LANG == 'fr') {
                        $('#country').attr('value', 'indéfini');
                    } else if (APP_LANG == 'en') {
                        $('#country').attr('value', 'undefined');
                    }

                }

            },


        });




        marker.setLatLng([lat, long]).update();

        map.flyTo(new L.LatLng(lat, long), 11);











        // let firstWord = addresse.replace(/ .*/, '');


        // console.log("Selected: " + ui.item.value + " with LocationId " + ui.item.id);

    }



});



$('#input-search').keyup(function() {

    if (!this.value) {

        $('#country').val('');
        $('#city').val('');
        $('#district').val('');

    }

})















// autocomplete using Place autosuggest
// jquery autocomplete needs 2 fields: title and value
// id holds the LocationId which can be used at a later stage to get the coordinate of the selected choice

function placeAC(query, callback) {



    $.ajaxSetup({
        headers: {
            'Accept-Language': 'fr-FR'
        }
    });


    $.getJSON("https://places.api.here.com/places/v1/autosuggest?at=" + coordinates + "&q=" + query.term + "&result_types=address" + "&Accept-Language=fr-FR" + "&addressFilter=countryCode=MA" + "&size=5" + "&app_id=" + APP_ID_HERE + "&app_code=" + APP_CODE_HERE, function(data) {


        var places = data.results.filter(place => place.vicinity);

        places = places.map(place => {


            return {
                title: place.title,
                value: place.title + ', ' + place.vicinity.replace(/<br\/>/g, ", "),
                id: place.id,
                position: place.position
            };
        });
        return callback(places);
    });



}












marker.on('dragend', function(e) {


    let lat = marker.getLatLng().lat;

    let long = marker.getLatLng().lng;

    let rad = 1;

    $.ajax({

        beforeSend: function() {
            $('#loader').show();
        },

        url: "http://myhouse.local/api/address/" + lat + "/" + long + "/" + rad,
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

        },


        complete: function() {

            $('#loader').hide();

            let searcht = $('#input-search').val();


            if (searcht == 'undefined') {

                if (APP_LANG == 'fr') {
                    $('#input-search').attr('value', 'indéfini');
                } else if (APP_LANG == 'en') {
                    $('#input-search').attr('value', 'undefined');
                }

            }

            let dist = $('#district').val();
            let cit = $('#city').val();


            if (dist == 'undefined') {

                if (APP_LANG == 'fr') {

                    $('#district').attr('value', 'indéfini');

                } else if (APP_LANG == 'en') {

                    $('#district').attr('value', 'undefined');

                }

            }

            if (cit == 'undefined') {

                if (APP_LANG == 'fr') {
                    $('#city').val();
                    $('#city').val('indéfini');
                } else if (APP_LANG == 'en') {
                    $('#city').val('undefined');
                }

            }


            let count = $('#country').val();

            if (count == 'undefined') {

                if (APP_LANG == 'fr') {
                    $('#country').attr('value', 'indéfini');
                } else if (APP_LANG == 'en') {
                    $('#country').attr('value', 'undefined');
                }

            }
        }

    });


});


map.zoomControl.remove();