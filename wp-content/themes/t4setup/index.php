<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>T4</title>



	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto:" rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>
<body>

  <?php include 'header.php';?>

  <?php include 'slideshow.php';?>


<div id="introduktion-img"></div><!-- Scollbildens plats -->





<!-- Mobil dropdown meny, container -->
<div id="mobile-menu-container" class="card-2">
    <nav>
        <ul id="mobile-ul">
            <li id="mobile-introduktion" class="mobile-li">
		        <a> Introduktion </a>
	        </li>

	        <li id="mobile-nyheter" class="mobile-li">
		        <a> Nyheter </a>
	        </li>

	        <li id="mobile-projekt" class="mobile-li">
	            <a> Projekt </a>
	        </li>

			<li id="mobile-kontakt" class="mobile-li">
	            <a> Kontakt </a>
	        </li>
        </ul><!-- /#mobile-ul -->
    </nav>
</div>
<!-- /#mobile-menu-container -->






<main id="page-after-slideshow"><!-- wrapper för content efter slideshow -->


<!-- header2-container -->
<div id="header2-container" class="card-1">
    <div id="header2-content">
        <nav id="header2-nav">
	        <ul id="header2-ul">
		        <li class="header2-li">
			        <a id="introduktion2"> Introduktion </a>
			    </li>

			    <li class="header2-li">
			        <a id="nyheter2"> Nyheter </a>
			    </li>

			    <li class="header2-li">
			        <a id="projekt2"> Projekt </a>
			    </li>

				<li class="header2-li">
			        <a id="kontakt2"> Kontakt </a>
			    </li>
		    </ul><!-- /#header2-ul -->

			<img id="logorosa"  src="http://www.t4tumba.se/wp-content/uploads/2016/10/logorosa.png" alt="Home"/><!-- Hamburgar ikonet-->
			<button id="menu-btn">
			    <img id="menu-icon" class="displayNone" src="http://www.t4tumba.se/wp-content/uploads/2016/10/menu-icon.png" alt="Menu"/><!-- Hamburgar ikonet för mobilen sen-->
			</button>
	    </nav><!-- /#header2-nav -->
	</div><!-- /#header2-content -->
</div>
<!-- /#header2-container -->


<!-- #introduktion-container, | SECTION 2 | -->
<section id="introduktion-container" class="card-1">
    <div id="introduktion-content">
	    <h2 class="fadeInBlock"> Introduktion </h2>


		<div class="fadeInBlock"><?php $id =27; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?></div>

		<button id="intro-btn" class="card-1-hover"> Läs mer</button><!-- Läsa mer knappen, används i js -->
	</div><!-- /#introduktion-content -->
</section>
<!-- /#introduktion-container -->




<div id="introdukion-img-show"></div><!-- Scrollbildens fönster(lucka) som man ser bilden in i -->



<!-- #nyheter-container, | SECTION 3 | -->

<section id="nyheter-container" class="card-1">
    <h2 class="fadeInBlock"> Nyheter </h2>
    <div id="nyheter-content" class="fadeInBlock">

<?php
//kod för att fetcha poster i kategorin nyheter
//term id = 2

$args = array( 'category' => 2 );
   $myposts = get_posts( $args );
   foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
     <div class="nyheter-box-container">
       <div class="nyheter-box-content card-1">
         <h3 class="nyheter-h3"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
       </div>
 </div>

   <?php endforeach;
   wp_reset_postdata();?>
</div>
<!---
    <div id="nyheter-content" class="fadeInBlock">
	    <div class="nyheter-box-container">
		    <div class="nyheter-box-content card-1">
			    <h3 class="nyheter-h3"> Nyhet 1 </h3>
		    </div>
		</div>
		<div class="nyheter-box-container">
		    <div class="nyheter-box-content card-1">
			    <h3 class="nyheter-h3"> Nyhet 2 </h3>
		    </div>
		</div>
		<div class="nyheter-box-container">
		    <div class="nyheter-box-content card-1">
			    <h3 class="nyheter-h3"> Nyhet 3</h3>
		    </div>
		</div>
	</div>

-->
<button id="nyheter-btn" class="card-1-hover">Fler nyheter</button><!-- Nyheter knappen, används i js -->
</section>
<!-- /#nyheter-container -->


<!-- #projekt-container, | SECTION 4 | -->
<section id="projekt-container" class="card-1">
    <h2 class="fadeInBlock"> Projekt </h2>

    <div id="projekt-content" class="fadeInBlock">
	    <div id="projekt-boxS-container">
		    <div id="storbild" class="projekt-box-content card-1">
			    <h3 class="projekt-h3"> Tekniksida </h3>
		    </div>
		</div>
		<div class="projekt-boxL-container">
		    <div class="projekt-box-content card-1">
			    <h3 class="projekt-h3"> Lansidan </h3>
		    </div>
		</div>
		<div class="projekt-boxL-container">
		    <div class="projekt-box-content card-1">
			    <h3 class="projekt-h3"> T4 Tumba </h3>
		    </div>
		</div>
	</div>
	<a href="#"><button id="projekt-btn" class="card-1-hover"> Fler projekt</button></a><!-- Nyheter knappen, används i js -->
</section>
<!-- /#projekt-container -->


<!-- #kontakt-container, | SECTION 5 | -->
<section id="kontakt-container">
    <div id="kontakt-content">
        <h2 class="fadeInBlock"> Kontakt </h2>

		<div id="p-info-container1" class="fadeInBlock">
            <div class="p-info-content">
                <img class="kontakt-img" src="http://www.t4tumba.se/wp-content/uploads/2016/10/marcus.jpg"></img>
				<h3 class="kontakt-namn"> Marcus Weiderstål </h3>
				<p class="kontakt-p1"> Lärare och ansvarig för T4</p>
				<p class="kontakt-p2"> marcus.weiderstal@botkyrka.se </p>
            </div>
		</div>
        <div id="p-info-container2" class="fadeInBlock">
            <div class="p-info-content">
                <img class="kontakt-img" src="http://www.t4tumba.se/wp-content/uploads/2016/10/claes.jpg"></img>
				<h3 class="kontakt-namn"> Claes Carlström </h3>
				<p class="kontakt-p1"> Lärare i front-end för T4 </p>
				<p class="kontakt-p2"> claes.carlstrom@botkyrka.se </p>
            </div>
		</div>
    </div>

    <div id="kontakt-show"></div>
</section>
<!-- /#kontakt-container -->






<?php include 'footer.php';?>

</main>
<!-- /#page-after-content -->


<?php wp_footer(); ?>
</body>

</html>
