$(document).ready(function () {	
/* Hamburgar meny knappens funktionr */
$("#menu-btn").click( function(e){	
    $("#mobile-menu-container").toggleClass("toggled");
});
$("#page-after-slideshow").click( function(e){	
    $("#mobile-menu-container").removeClass("toggled");
});

/* Sidan skrollas ner till dess innehål vid klickning på ankarna i headern baserat på hur på mycket px som ska skrollas för att blocket för innehållet hamnar högst upp (offset of block to be on top of page)*/
$("#logorosa").click(function() {
	if(matchMedia('(max-width: 980px)').matches){
		$('html,body').animate({
        scrollTop: $("#introduktion-img").offset().top},
        'slow');
	}
	else{
		$('html,body').animate({
        scrollTop: $("#slideshow-container").offset().top},
        'slow');
	}
});
$("#introduktion, #introduktion2, #mobile-introduktion, #starta" ).click(function() {
    $('html,body').animate({
        scrollTop: $("#introduktion-container").offset().top -68},
        'slow');
});
$("#nyheter, #nyheter2, #mobile-nyheter").click(function() {
    $('html,body').animate({
        scrollTop: $("#nyheter-container").offset().top - 68},
        'slow');
});
$("#projekt, #projekt2, #mobile-projekt").click(function() {
    $('html,body').animate({
        scrollTop: $("#projekt-container").offset().top - 68},
        'slow');
});
$("#kontakt, #kontakt2, #mobile-kontakt").click(function() {
    $('html,body').animate({
        scrollTop: $("#kontakt-container").offset().top - 68},
        'slow');
});
	
/* Detta nedan kommer inte vara med när vi över går till lägre än 980px */
if(matchMedia('(min-width: 980px)').matches){


/* Hur min header beter sig vid skrollning */	
$(window).scroll(function() {
	
    var scrollYpos = $(document).scrollTop(); /* Deklarerar scrollYpos för längden/mängden av hur mycket man bläddrat */
	var win = $(window).height(); /* Deklarerar highten på skärmen */
	var hh = $('#header2-container').height(); /* Deklarerar highten på header2 */
	

	
    if (scrollYpos >= win - 68){
        $("#header2-container").css
		({ 
		    'position':'fixed',
			'height':'68px',
			'top':'0',
        });
		
        $("#header2-content").css
	    ({
			'opacity':'1',
        });		
    }						 
	else{ /* Om skrollningen är mindre än highten på skärmen så sker detta */
        $("#header2-container").css
	    ({
			'height':'0',
			'top':'-68px',
        });
		
        $("#header2-content").css
	    ({
			'opacity':'0',
        });		
	}
	
	
	if (hh < 68){
        $("#header-container").css
		({ 
		   
		 
        });						
    }						 
	else{ /* Om skrollningen är mindre än highten på skärmen så sker detta */
        $("#header-container").css
	    ({
			
        }); 
	}
	
	
});




/* Border hantering på min header för mina ankare */
$(window).scroll(function() {
	/* Andledningen varför jag har tilldelat klasserna border och t-border i html redan på ankarna för att de ska få ett basvärde innan man börjar skrolla; eftersom detta nedan sker bara vid skrollning 
	   Sammanfattningsvis så tar jag bort den transparanta borden på den ankare vars tur det är att få en border; anledningen varför jag har transparant border innan är för att det blir en jämnare
	   transition och räkning vid padding(placering)*/
	   
    var scrollYpos = $(document).scrollTop(); /* Deklarerar scrollYpos för längden/mängden av hur mycket man bläddrat */
	var header2 = $("#header2-container").offset().top; /* Deklarerar offest till toppen av skärmen för blocket */
	var introduktion = $("#introduktion-container").offset().top; /* Deklarerar offest till toppen av skärmen för blocket */
	var nyheter = $("#nyheter-container").offset().top; /* Deklarerar offest till toppen av skärmen för blocket */
	var projekt = $("#projekt-container").offset().top; /* Deklarerar offest till toppen av skärmen för blocket */
	var kontakt = $("#kontakt-container").offset().top; /* Deklarerar offest till toppen av skärmen för blocket */
	var footer = $("#footer-container").offset().top; /* Deklarerar offest till toppen av skärmen för blocket */
	var win = $(window).height(); /* Deklarerar highten på skärmen */
	
	   
    if (scrollYpos >= introduktion - 70){ /* Om skrollningen är mindre eller lika med än headern2:s offset till skärmtoppen*/
		$("#introduktion2").removeClass("t-border"); /* Tar bort transparant border eftersom det ska vara en border nu istället och annars överstryks den */
		$("#introduktion2").addClass("rosa-border"); /* Tilldelar transparant border som då överstryker den vanliga borden vid skroll upp */
    }
	else{			
		$("#introduktion2").addClass("t-border");  /* Tilldelar transparant border som då överstryker den vanliga borden för annars är bordern kvar vid skroll ner */
	}
	
    if (scrollYpos >= nyheter - 70){ /* Om skrollningen är mindre eller lika med än nyheter offset till skärmtoppen */
		$("#introduktion2").addClass("t-border"); /* Tilldelar transparant border som då överstryker den vanliga borden vid skroll upp */
		$("#nyheter2").removeClass("t-border"); /* Tar bort transparant border eftersom det ska vara en border nu istället och annars överstryks den */
		$("#nyheter2").addClass("rosa-border"); /* Tilldelar border på ankaret */
    }
	else{			
		$("#nyheter2").addClass("t-border");  /* Tilldelar transparant border som då överstryker den vanliga borden för annars är bordern kvar vid skroll ner */
	}
	
	
	if (scrollYpos >= projekt - 70){ /* Om skrollningen är mer än projekt och lite till */
		$("#nyheter2").addClass("t-border"); /* Tilldelar transparant border som då överstryker den vanliga borden vid skroll upp */
		$("#projekt2").removeClass("t-border"); /* Tar bort transparant border eftersom det ska vara en border nu istället och annars överstryks den */
		$("#projekt2").addClass("rosa-border"); /* Tilldelar border på ankaret */
    }
	else{		
		$("#projekt2").addClass("t-border"); /* Tilldelar transparant border som då överstryker den vanliga borden för annars är bordern kvar vid skroll ner */
	}
	
	
    if (scrollYpos >= kontakt - 70){ /* Om skrollningen är mer än kontekt och lite till */
        $("#projekt2").addClass("t-border"); /* Tilldelar transparant border som då överstryker den vanliga borden vid skroll upp */
        $("#kontakt2").removeClass("t-border"); /* Tar bort transparant border eftersom det ska vara en border nu istället och annars överstryks den */
        $("#kontakt2").addClass("rosa-border"); /* Tilldelar border på ankaret */
    } else if (scrollYpos >= 3287) { /* Om skrollningen är mer eller lika med 3287px(heighten på hela sidan,main) så att border kontakt funkar om man inte kan scrolla ner till kontakt,23" större. */
        $("#projekt2").addClass("t-border"); /* Tilldelar transparant border som då överstryker den vanliga borden vid skroll upp */
        $("#kontakt2").removeClass("t-border"); /* Tar bort transparant border eftersom det ska vara en border nu istället och annars överstryks den */
        $("#kontakt2").addClass("rosa-border"); /* Tilldelar border på ankaret */
    } else {
        $("#kontakt2").addClass("t-border"); /* Tilldelar transparant border som då överstryker den vanliga borden för annars är bordern kvar vid skroll ner */	
    }




	
	
	
	

});	

}


});
