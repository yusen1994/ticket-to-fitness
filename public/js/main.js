//Open Modal Add Activity via link


$(document).ready(function () {

  if (window.location.href.indexOf('#addActivityModal') != -1) {
    $('#addActivityModal').modal('show');
  }

});




//Auto complete address with coordinates



/*
var searchInput = 'location-gymRegister';

$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
	
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('latitude').value = near_place.geometry.location.lat();
        document.getElementById('longitude').value = near_place.geometry.location.lng();
    });
});

$(document).on('change', '#'+searchInput, function () {
    document.getElementById('latitude').value = '';
    document.getElementById('longitude').value = '';
});

*/