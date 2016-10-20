$(document).ready(function () {
	
	


/* Slideshow cycle */
$("#slideshow-container").cycle({ 
    fx:     'scrollHorz',
    next:   '#next',
	prev:   '#prev',
	speed:1000,
	timeout:5000
});

/* Get started knapp som skrollar ned till our vision */
$("#getstarted").click(function() {
    $('html,body').animate({
        scrollTop: $("#page-after-slideshow").offset().top - 68}, 'slow');
});	


	
	






/* Our visions fade effect */
$(window).scroll( function(){
           
    $('.fadeInBlock').each( function(){
            
        var bottom_of_object = $(this).position().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
          
        if( bottom_of_window > bottom_of_object ){
			
            $(this).animate({'opacity':'1'},3000);     
            }
    });    
});





});