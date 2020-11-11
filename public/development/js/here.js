let APP_ID_HERE = "iQreBCeFEKCr6KCIroPh";
let APP_CODE_HERE = "vRlmaaEMIcI14Qtw-6Icnw";

let APP_LANG = $('meta[name="has-locale"]').attr('content');



// by default, Paris...
let coordinates = "33.5814,-7.6733";

// let's get HTML5 geolocation
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(position => {
        coordinates = position.coords.latitude + "," + position.coords.longitude;

        console.log(coordinates)

        document.getElementById("coords").innerHTML = "Location: " + coordinates;

    });
} else

{
    console.log("Geolocation is not supported by this browser.");
}







$("#input-search").autocomplete({
    source: placeAC,
    minLength: 2,
    select: function(event, ui) {
        console.log("Selected: " + ui.item.value + " with LocationId " + ui.item.id);
    }
});


$("#address").autocomplete({
    source: addressAC,
    minLength: 2,
    select: function(event, ui) {
        console.log("Selected: " + ui.item.value + " with LocationId " + ui.item.id);
    }
});

$("#full").autocomplete({
    source: fullAC,
    minLength: 2,
    select: function(event, ui) {
        console.log("Selected: " + ui.item.value + " with LocationId " + ui.item.id);
    }
});


$("#input-search").autocomplete({

    source: placeAC,

    minLength: 1,


    select: function(event, ui) {


        event.preventDefault();


        $('#input-search').val(ui.item.title);
        $('#loaders').show();


        let addresse = ui.item.value;
        let label = ui.item;
    }

});









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

// autocomplete using Address autocomplete
// jquery autocomplete needs 2 fields: title and value
// id holds the LocationId which can be used at a later stage to get the coordinate of the selected choice
function addressAC(query, callback) {
    $.getJSON("https://autocomplete.geocoder.api.here.com/6.2/suggest.json?prox=" + coordinates + "&query=" + query.term + "&app_id=" + APP_ID_HERE + "&app_code=" + APP_CODE_HERE, function(data) {
        var addresses = data.suggestions;
        addresses = addresses.map(addr => {
            return {
                title: addr.label,
                value: addr.label,
                id: addr.locationId
            };
        });

        return callback(addresses);
    });
}

// Combination of both Address and Place autocomplete
function fullAC(query, callback) {

    let p1 = $.getJSON("https://places.cit.api.here.com/places/v1/autosuggest?at=" + coordinates + "&result_types=Place" + "&q=" + query.term + "&app_id=" + APP_ID_HERE + "&app_code=" + APP_CODE_HERE);
    let p2 = $.getJSON("https://autocomplete.geocoder.api.here.com/6.2/suggest.json?prox=" + coordinates + "&query=" + query.term + "&app_id=" + APP_ID_HERE + "&app_code=" + APP_CODE_HERE);

    $.when(p1, p2).done(function(data1, data2) {

        //data1 is from Places autosuggest
        var places = data1[0].results.filter(place => place.vicinity);
        places = places.map(place => {
            return {
                title: place.title,
                value: place.title + ',' + place.vicinity.replace(/<br\/>/g, ", ") + '(' + place.category + ')',
                distance: place.distance,
                id: place.id
            };
        });

        // data2 is from address autocomplete
        var addresses = data2[0].suggestions;
        addresses = addresses.map(addr => {
            return {
                title: addr.label,
                value: addr.label + ' (address)',
                distance: addr.distance,
                id: addr.locationId
            };
        });

        // lets merge the two arrays into the first
        $.merge(places, addresses);

        // let's sort by distance
        places.sort(function(p1, p2) { return p1.distance - p2.distance });

        // limit display to 10 results
        return callback(places.slice(0, 10));
    })

}