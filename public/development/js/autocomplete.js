google.maps.event.addDomListener(window, 'load', function ()
{
    var places = new google.maps.places.Autocomplete(document.getElementById('ownPlaces'));
    google.maps.event.addListener(places, 'place_changed', function ()
    {
        console.log(places.getPlace());
        var getaddress = places.getPlace();
        //alert(getaddress.address_components[0].long_name);
        //alert(getaddress.formatted_address);
        var whole_address           = getaddress.formatted_address;
        var split_whole_address     = whole_address.split(',');
        //alert(split_whole_address);
        var whole_address_length    = split_whole_address.length;
        //alert(whole_address_length);

        if(whole_address_length == 2)
        {
            var ownCity    = split_whole_address[0]; //alert(ownCity+'ownCity');
            var ownState   = split_whole_address[0]; //alert(ownState+'ownState');
            var ownCountry = split_whole_address[1]; //alert(ownCountry+'ownCountry');

            $('#ownCity').val(ownCity);
            $('#ownState').val(ownState);
            $('#ownCountry').val(ownCountry);
        }
        else
        {
            var ownCity    = split_whole_address[0]; //alert(ownCity+'ownCity');
            var ownState   = split_whole_address[1]; //alert(ownState+'ownState');
            var ownCountry = split_whole_address[2]; //alert(ownCountry+'ownCountry');

            $('#ownCity').val(ownCity);
            $('#ownState').val(ownState);
            $('#ownCountry').val(ownCountry);
        }
    });
});
