/* Registeration Form - Animation */

$(document).ready(function(){

    $("#btn_next").click(function(){
        $("#username_slide").hide();
        $("#firstname_slide").show();
     });
    
    $("#btn_next1").click(function(){
        $("#firstname_slide").hide();
        $("#lastname_slide").show();
     });
    
    $("#btn_next2").click(function(){
        $("#lastname_slide").hide();
        $("#email_slide").show();
     });
        
    $("#btn_next3").click(function(){
         $("#email_slide").hide();
         $("#password_slide").show();
    });
      
    $("#btn_next4").click(function(){
        $("#password_slide").hide();
        $("#cpassword_slide").show();
    });

});

$(document).ready(function(){

    $("#btn_prev1").click(function(){
        
        $("#firstname_slide").hide();
        $("#username_slide").show();
     });
    
    $("#btn_prev2").click(function(){
        
        $("#lastname_slide").hide();
        $("#firstname_slide").show();
     });
    
    $("#btn_prev3").click(function(){
       
        $("#email_slide").hide();
        $("#lastname_slide").show();
     });
        
    $("#btn_prev4").click(function(){
        
         $("#password_slide").hide();
         $("#email_slide").show();
    });
      
    $("#btn_prev5").click(function(){
        
        $("#cpassword_slide").hide();
        $("#password_slide").show();
    });

});



/*Navbar*/

$(document).ready(function () {
    if ($(window).width() > 991){
    $('.navbar-light .d-menu').hover(function () {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
        });
        }
    });