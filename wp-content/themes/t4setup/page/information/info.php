
<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

 ?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title></title>

        <link rel="stylesheet" href="css/info.css">
        <link rel="stylesheet" href="css/t4.css">

  </head>
  <body >

    <header id="header-container" class="card-2">
    		    <a id="logo-container" href="http://www.t4tumba.se">Tillbaka</a>

    </header>
    <div id= "head-c">
    </div>



<div id="box1">
  <div class="content">
    <h1>Information</h1>



  <div class="parf"><?php $id =171; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?></div>



<div id="kurs">
     <p >
       Utbildningen omfattar minst 10 veckors praktik och 900 poängs studier:
       Gymnasieingenjören i praktiken 200 p
       Examensarbete 100 p
       Mjukvarudesign 100 p
       Gränssnittsdesign 100 p
       Webbutveckling 2 100 p
       Webbutveckling 3 100 p
       Webbserverprogrammering 2 100 p
       Mobila applikationer 100 p
</p>
</div>

<div id="krav">
     <p>
       Sammarbete
       Mycket av projekten vi utför är grupp projekt, där klassen bidrar på olika sätt. Studenterna kommer dessutom skapa sociala förbindningar med varandra, eftersom att klassen kommer vara relativ liten.
       Efterfråga
       Efterfrågan efter utbildade programmerare är hög i dagens samhälle. Det var just den anledningen till att detta utbildningen bildades.
       ”Det ska vara KRAV på tillvaron”
       Eftersom T4 är en statlig utbildning så har läraren resurser till kvalité läromaterial och program service, inklusive vanliga program varor som används inom branschen.
       ”Work Hard, Play Hard (, Sleep Hard)”
       Vi ger studenterna väldigt mycket frihet, så länge studenterna utför uppgiften som utdelas till dem. Det inkluderar fria raster, underhållning område, samt planerade evenemanger som bestäms av klassen. Detta är till för att förbättra sin självständighet. (Glöm inte att lägga dig under natten, så att man kommer i tid.)
       ”Kill your Darlings”
       Här lär vi också oss att döda våra älskade funktioner och/eller design, för att göra det bästa för hela projektet.
 </p>
 </div>

  <!--  	<p>Det här är vi</p>
      <p class="related">Nästa: <a href="" target="_blank">Nyhet</a></p> -->
  </div>
</div>

<footer>
 <div id="footinfo">
   <p>Tumba Gymnasium</p>
   <br>
   <p>Utbildningsvägen 2, 147 40 Tumba</p>
   <p>Växel: 08-53061000, Fax: 08-53061629</p>
   <p>Org.nr: 212000-2882</p>
 </div>

 <div class="link-container">
    <a class="link-a" href="http://tumbagymnasium.se/" target="blank"><img id="tg" class="link-img" alt="tg" src="http://www.t4tumba.se/wp-content/uploads/2016/09/TGLogo.gif"></a>
 </div>

 <div class="link-container">
    <a class="link-a" href="http://www.botkyrka.se/" target="blank"><img id="botkyrka" class="link-img" alt="botkyrka" src="http://www.t4tumba.se/wp-content/uploads/2016/09/Botkyrka.gif"></a>
  </div>
</footer>




  </body>
</html>
