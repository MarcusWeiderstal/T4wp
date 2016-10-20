<!DOCTYPE html>


<html>



<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body>

<?php include 'header.php';?>

<?php include 'slideshow.php';?>


<div id="page-container">
  <div id="boxett">
    <p class="p1"> Introduktion </p>
    <div class="parf"><?php $id =27; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?></div>

<a href="http://www.t4tumba.se/Information" class="mer">Läs mer</a>

  </div>




	<div id="boxtva">
    <p class="p1"> Nyheter </p>


  <?php
$catquery = new WP_Query( 'cat=2&posts_per_page=3' );
while($catquery->have_posts()) : $catquery->the_post();
?>


<div class= "post">
<h3 class= "urubrik"><?php the_title(); ?></h3>
<p class= "parf"><?php the_content(); ?></p>
</div>


<?php endwhile; ?>

<a href="http://www.botkyrka.se/" class="mer">Mer</a>



  </div>
	<div id="boxtre">
    <p class="p1"> Projekt </p>

    <?php
  $catquery = new WP_Query( 'cat=3&posts_per_page=5' );
  while($catquery->have_posts()) : $catquery->the_post();
  ?>
  <div class="post">
  <h3 class= "urubrik"><?php the_title(); ?></h3>
  <p><?php the_content(); ?></p>
  <img> <?php the_content(); ?> </img>
  </div>

  <?php endwhile; ?>

  <a href="http://www.botkyrka.se/" class="mer">Mer</a>


  </div>
	<div id="boxfyra">
    <p class="p1"> Kontakt </p>
    <?php $id =36; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>
  </div>
</div>

<?php include 'footer.php';?>

<?php wp_footer(); ?>
</body>

</html>
