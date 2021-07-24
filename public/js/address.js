

var input = document.getElementById('gymaddress');
var autocomplete = new google.maps.places.Autocomplete(input);

google.maps.event.addListener(autocomplete, 'place_changed', function () {
    var near_place = autocomplete.getPlace();
    document.getElementById('latitude').value = near_place.geometry.location.lat();
    document.getElementById('longitude').value = near_place.geometry.location.lng();
});


