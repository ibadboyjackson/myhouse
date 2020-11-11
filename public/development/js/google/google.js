$.getJSON('https://geolocation-db.com/json/')

.done(function(location) {
    $('#geolocal').html(location.country_name);
    $('#state').html(location.state);
    $('#city').html(location.city);
    $('#latitude').html(location.latitude);
    $('#longitude').html(location.longitude);
    $('#ip').html(location.IPv4);


    if (location.city != null) {

        document.getElementById('geolocal').value = location.city;
        document.getElementById('input-search').value = location.longitude;
    } else

    {

        document.getElementById('geolocal').value = location.country_name;
        document.getElementById('input-search').value = location.city;
    }


});