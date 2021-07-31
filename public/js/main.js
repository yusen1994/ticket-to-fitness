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

/*Add activity Modal dispose when clicked close*/

$("#closeAddActivityModal").click(function () {

  $("#addActivityModal").modal("dispose");
});

//-----------------------------------------------------------------------------------------------------------------------

/*Time Picker for the Gym Add Activity modal*/

function closeOtherTimePicker(curr) {

  var a = document.getElementById("monday_time_wrapper");
  var b = document.getElementById("tuesday_time_wrapper");
  var c = document.getElementById("wednesday_time_wrapper");
  var d = document.getElementById("thursday_time_wrapper");
  var e = document.getElementById("friday_time_wrapper");
  var f = document.getElementById("saturday_time_wrapper");
  var g = document.getElementById("sunday_time_wrapper");
  var h = "monday";
  var i = "tuesday";
  var j = "wednesday";
  var k = "thursday";
  var l = "friday";
  var m = "saturday";
  var n = "sunday";

  if (document.body.contains(a)) {
    if (a.style.display === "block" && h != curr) {

      a.style.display = "none";
    }
  }
  if (document.body.contains(b)) {
    if (b.style.display === "block" && i != curr) {

      b.style.display = "none";
    }
  }
  if (document.body.contains(c)) {
    if (c.style.display === "block" && j != curr) {

      c.style.display = "none";
    }
  }
  if (document.body.contains(d)) {
    if (d.style.display === "block" && k != curr) {

      d.style.display = "none";
    }
  }
  if (document.body.contains(e)) {
    if (e.style.display === "block" && l != curr) {

      e.style.display = "none";
    }
  }
  if (document.body.contains(f)) {
    if (f.style.display === "block" && m != curr) {

      f.style.display = "none";
    }
  }
  if (document.body.contains(g)) {
    if (g.style.display === "block" && n != curr) {

      g.style.display = "none";
    }
  }

}

// initialize input widgets first

//Monday
function mondayshowTimePicker() {
  var curr = "monday";
  closeOtherTimePicker(curr);
  var x = document.getElementById("monday_time_wrapper");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

}

//add time slot when add more clicked
$('.monday_addmore_Time').click(function () {

  var fieldHTML = '<div class = "mt-2"><input type="text" name="monday_starttimeArray[]" class="monday_timepicker_start" value=""/> to <input type="text" name="monday_endtimeArray[]" class="monday_timepicker_end" value=""/><i class="pl-3 fas fa-trash-alt monday_remove_button" onclick = "mondayremoveTime()"></i></div>'; //New input field html 

  $('.monday_time_wrapper').append(fieldHTML); //Add field html
});

//remove time slot
function mondayremoveTime() {

  //Once remove button is clicked
  $('.monday_time_wrapper').on('click', '.monday_remove_button', function (e) {
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html

  });
}

//time picker jquery with dropdown

$('input.monday_timepicker_start').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

$('input.monday_timepicker_end').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

//-----------------------------------------------------------------------------------------------------------------------
//Tuesday

//-----------------------------------------------------------------------------------------------------------------------


/*Time Picker for the Gym Add Activity modal*/

// initialize input widgets first

//tuesday
function tuesdayshowTimePicker() {
  var curr = "tuesday";
  closeOtherTimePicker(curr);
  var x = document.getElementById("tuesday_time_wrapper");

  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

}

//add time slot when add more clicked
$('.tuesday_addmore_Time').click(function () {

  var fieldHTML = '<div class = "mt-2"><input type="text" name="tuesday_starttimeArray[]" class="tuesday_timepicker_start" value=""/> to <input type="text" name="tuesday_endtimeArray[]" class="tuesday_timepicker_end" value=""/><i class="pl-3 fas fa-trash-alt tuesday_remove_button" onclick = "tuesdayremoveTime()"></i></div>'; //New input field html 

  $('.tuesday_time_wrapper').append(fieldHTML); //Add field html
});

//remove time slot
function tuesdayremoveTime() {

  //Once remove button is clicked
  $('.tuesday_time_wrapper').on('click', '.tuesday_remove_button', function (e) {
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html

  });
}

//time picker jquery with dropdown

$('input.tuesday_timepicker_start').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

$('input.tuesday_timepicker_end').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

//-----------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------
//wednesday

//-----------------------------------------------------------------------------------------------------------------------


///wednesday
function wednesdayshowTimePicker() {
  var curr = "wednesday";
  closeOtherTimePicker(curr);
  var x = document.getElementById("wednesday_time_wrapper");

  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

}

//add time slot when add more clicked
$('.wednesday_addmore_Time').click(function () {

  var fieldHTML = '<div class = "mt-2"><input type="text" name="wednesday_starttimeArray[]" class="wednesday_timepicker_start" value=""/> to <input type="text" name="wednesday_endtimeArray[]" class="wednesday_timepicker_end" value=""/><i class="pl-3 fas fa-trash-alt wednesday_remove_button" onclick = "wednesdayremoveTime()"></i></div>'; //New input field html 

  $('.wednesday_time_wrapper').append(fieldHTML); //Add field html
});

//remove time slot
function wednesdayremoveTime() {

  //Once remove button is clicked
  $('.wednesday_time_wrapper').on('click', '.wednesday_remove_button', function (e) {
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html

  });
}

//time picker jquery with dropdown

$('input.wednesday_timepicker_start').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

$('input.wednesday_timepicker_end').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

//-----------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------
//thursday

//-----------------------------------------------------------------------------------------------------------------------


///thursday
function thursdayshowTimePicker() {
  var curr = "thursday";
  closeOtherTimePicker(curr);
  var x = document.getElementById("thursday_time_wrapper");

  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

}

//add time slot when add more clicked
$('.thursday_addmore_Time').click(function () {

  var fieldHTML = '<div class = "mt-2"><input type="text" name="thursday_starttimeArray[]" class="thursday_timepicker_start" value=""/> to <input type="text" name="thursday_endtimeArray[]" class="thursday_timepicker_end" value=""/><i class="pl-3 fas fa-trash-alt thursday_remove_button" onclick = "thursdayremoveTime()"></i></div>'; //New input field html 

  $('.thursday_time_wrapper').append(fieldHTML); //Add field html
});

//remove time slot
function thursdayremoveTime() {

  //Once remove button is clicked
  $('.thursday_time_wrapper').on('click', '.thursday_remove_button', function (e) {
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html

  });
}

//time picker jquery with dropdown

$('input.thursday_timepicker_start').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

$('input.thursday_timepicker_end').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

//-----------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------
//friday

//-----------------------------------------------------------------------------------------------------------------------


///friday
function fridayshowTimePicker() {
  var curr = "friday";
  closeOtherTimePicker(curr);
  var x = document.getElementById("friday_time_wrapper");

  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

}

//add time slot when add more clicked
$('.friday_addmore_Time').click(function () {

  var fieldHTML = '<div class = "mt-2"><input type="text" name="friday_starttimeArray[]" class="friday_timepicker_start" value=""/> to <input type="text" name="friday_endtimeArray[]" class="friday_timepicker_end" value=""/><i class="pl-3 fas fa-trash-alt friday_remove_button" onclick = "fridayremoveTime()"></i></div>'; //New input field html 

  $('.friday_time_wrapper').append(fieldHTML); //Add field html
});

//remove time slot
function fridayremoveTime() {

  //Once remove button is clicked
  $('.friday_time_wrapper').on('click', '.friday_remove_button', function (e) {
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html

  });
}

//time picker jquery with dropdown

$('input.friday_timepicker_start').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

$('input.friday_timepicker_end').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

//-----------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------
//saturday

//-----------------------------------------------------------------------------------------------------------------------


///saturday
function saturdayshowTimePicker() {
  var curr = "saturday";
  closeOtherTimePicker(curr);
  var x = document.getElementById("saturday_time_wrapper");

  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

}

//add time slot when add more clicked
$('.saturday_addmore_Time').click(function () {

  var fieldHTML = '<div class = "mt-2"><input type="text" name="saturday_starttimeArray[]" class="saturday_timepicker_start" value=""/> to <input type="text" name="saturday_endtimeArray[]" class="saturday_timepicker_end" value=""/><i class="pl-3 fas fa-trash-alt saturday_remove_button" onclick = "saturdayremoveTime()"></i></div>'; //New input field html 

  $('.saturday_time_wrapper').append(fieldHTML); //Add field html
});

//remove time slot
function saturdayremoveTime() {

  //Once remove button is clicked
  $('.saturday_time_wrapper').on('click', '.saturday_remove_button', function (e) {
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html

  });
}

//time picker jquery with dropdown

$('input.saturday_timepicker_start').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

$('input.saturday_timepicker_end').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

//-----------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------
//sunday

//-----------------------------------------------------------------------------------------------------------------------


///sunday
function sundayshowTimePicker() {
  var curr = "sunday";
  closeOtherTimePicker(curr);
  var x = document.getElementById("sunday_time_wrapper");

  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

}

//add time slot when add more clicked
$('.sunday_addmore_Time').click(function () {

  var fieldHTML = '<div class = "mt-2"><input type="text" name="sunday_starttimeArray[]" class="sunday_timepicker_start" value=""/> to <input type="text" name="sunday_endtimeArray[]" class="sunday_timepicker_end" value=""/><i class="pl-3 fas fa-trash-alt sunday_remove_button" onclick = "sundayremoveTime()"></i></div>'; //New input field html 

  $('.sunday_time_wrapper').append(fieldHTML); //Add field html
});

//remove time slot
function sundayremoveTime() {

  //Once remove button is clicked
  $('.sunday_time_wrapper').on('click', '.sunday_remove_button', function (e) {
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html

  });
}

//time picker jquery with dropdown

$('input.sunday_timepicker_start').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

$('input.sunday_timepicker_end').timepicker({

  dropdown: true,
  scrollbar: true,
  zindex: 9999999
});

//-----------------------------------------------------------------------------------------------------------------------