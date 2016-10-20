$(document).ready(function () {



  var home = $("#boxett").offset().top; /* Deklarerar offest till toppen av skärmen för blocket */
  var about = $("#boxtva").offset().top; /* Deklarerar offest till toppen av skärmen för blocket */
  var contact = $("#boxtre").offset().top; /* Deklarerar offest till toppen av skärmen för blocket */
  var more = $("#boxfyra").offset().top; /* Deklarerar offest till toppen av skärmen för blocket */





/* Scroll funktion */
$("#Nyheter, #mobile-news" ).click(function() {
    $('html,body').animate({
        scrollTop: $("#boxett").offset().top - 77},
        'slow');
});
$("#Info, #mobile-info").click(function() {
    $('html,body').animate({
        scrollTop: $("#boxtva").offset().top - 77},
        'slow');
});
$("#Projekt, #mobile-projekt").click(function() {
    $('html,body').animate({
        scrollTop: $("#boxtre").offset().top -77},
        'slow');
});
$("#Kontakt, #mobile-kontakt").click(function() {
    $('html,body').animate({
        scrollTop: $("#boxfyra").offset().top -77},
        'slow');
});



/* Background hantering på header för ankarna vid scoll, etcetc.. */
$(window).scroll(function() {

    var scrollYpos = $(document).scrollTop(); /* Deklarerar scrollYpos för längden/mängden av hur mycket man bläddrat */



    if (scrollYpos > home - 80){ /* Om skrollningen är mindre än heighten på ett block(närmsta blocket)*/
    $("#Nyheter").removeClass("t-bgc");
		$("#Nyheter").addClass("bgc");
    }
    else{
      $("#Nyheter").addClass("t-bgc");
    }


    if (scrollYpos >= about - 80){ /* Om skrollningen är mer eller lika med more - heighten på header */
		$("#Nyheter").addClass("t-bgc"); /* Tilldelar transparant bgc som då överstryker den vanliga bgc vid skroll upp */
		$("#Info").removeClass("t-bgc"); /* Tar bort t-bgc border eftersom det ska vara en bgc nu istället och annars överstryks den */
		$("#Info").addClass("bgc"); /* Tilldelar bgc på ankaret */
    }
	else{
		$("#Info").addClass("t-bgc");  /* Tilldelar transparant bgc som då överstryker den vanliga bgc för annars är bgc kvar vid skroll ner */
	}


	if (scrollYpos >= contact - 80){ /* Om skrollningen är mer eller lika med more - heighten på header */
		$("#Info").addClass("t-bgc"); /* Tilldelar transparant bgc som då överstryker den vanliga bgc vid skroll upp */
		$("#Projekt").removeClass("t-bgc"); /* Tar bort t-bgc border eftersom det ska vara en bgc nu istället och annars överstryks den */
		$("#Projekt").addClass("bgc"); /* Tilldelar bgc på ankaret */
    }
	else{
		$("#Projekt").addClass("t-bgc"); /* Tilldelar transparant bgc som då överstryker den vanliga bgc för annars är bgc kvar vid skroll ner */
	}


	if (scrollYpos >= more - 80){ /* Om skrollningen är mer eller lika med more - heighten på header */
		$("#Projekt").addClass("t-bgc"); /* Tilldelar transparant bgc som då överstryker den vanliga bgc vid skroll upp */
		$("#Kontakt").removeClass("t-bgc"); /* Tar bort t-bgc border eftersom det ska vara en bgc nu istället och annars överstryks den */
		$("#Kontakt").addClass("bgc"); /* Tilldelar bgc på ankaret */
    }
	else{
		$("#Kontakt").addClass("t-bgc"); /* Tilldelar transparant bgc som då överstryker den vanliga bgc för annars är bgc kvar vid skroll ner */
	}
});


$( "#menu-icon" ).click(function() {
	$("#mobile-menu-container").toggleClass("displayblock");
});
$( "#page-container, #mobile-menu-container" ).click(function() {
	$("#mobile-menu-container").removeClass("displayblock");
});

});
