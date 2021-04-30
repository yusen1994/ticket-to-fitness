/* Registeration Form - Animation */

$(document).ready(function(){

    $("#btn_next").click(function(){
        $("#username_slide").fadeOut("slow");
        $("#firstname_slide").delay( 600).fadeIn("slow");
     });
    
    $("#btn_next1").click(function(){
        $("#firstname_slide").fadeOut("slow");
        $("#lastname_slide").delay( 600).fadeIn("slow");
     });
    
    $("#btn_next2").click(function(){
        $("#lastname_slide").fadeOut("slow");
        $("#email_slide").delay( 600).fadeIn("slow");
     });
        
    $("#btn_next3").click(function(){
         $("#email_slide").fadeOut("slow");
         $("#password_slide").delay( 600).fadeIn("slow");
    });
      
    $("#btn_next4").click(function(){
        $("#password_slide").fadeOut("slow");
        $("#cpassword_slide").delay( 600).fadeIn("slow");
    });

});

$(document).ready(function(){

    $("#btn_prev1").click(function(){
        
        $("#firstname_slide").fadeOut("slow");
        $("#username_slide").delay( 600).fadeIn("slow");
     });
    
    $("#btn_prev2").click(function(){
        
        $("#lastname_slide").fadeOut("slow");
        $("#firstname_slide").delay( 600).fadeIn("slow");
     });
    
    $("#btn_prev3").click(function(){
       
        $("#email_slide").delay( 600).fadeOut("slow");
        $("#lastname_slide").delay( 600).fadeIn("slow");
     });
        
    $("#btn_prev4").click(function(){
        
         $("#password_slide").delay( 600).fadeOut("slow");
         $("#email_slide").delay( 600).fadeIn("slow");
    });
      
    $("#btn_prev5").click(function(){
        
        $("#cpassword_slide").delay( 600).fadeOut("slow");
        $("#password_slide").delay( 600).fadeIn("slow");
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