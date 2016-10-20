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

  <main role="main">
  <!-- section -->
  <section>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <!-- post thumbnail -->
      <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail(); // Fullsize image for the single post ?>
        </a>
      <?php endif; ?>
      <!-- /post thumbnail -->

      <!-- post title -->
  <br><br><br>
        <div id="nyheter-container">
          <h2>
      <?php the_title(); ?>
</h2>
      </div>
  <br>

      <!-- /post title -->

      <!-- post details -->
      <div id="introduktion-content">
        <p class="kontakt-p1">
      <?php the_time('F j, Y'); ?>
      <?php //the_time('g:i a'); ?>
      <br>
      <br>

</p>
      <!-- /post details -->
<br><br>

      <?php the_content(); // Dynamic Content ?>
      	</div>
<br><br><br><br>
  <?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?>
      <?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

      <p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

      <p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

      <?php edit_post_link(); // Always handy to have Edit Post Links available ?>



    </article>
    <!-- /article -->

  <?php endwhile; ?>

  <?php else: ?>

    <!-- article -->
    <article>

      <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

    </article>
    <!-- /article -->

  <?php endif; ?>

  </section>
  <!-- /section -->
  </main>



  <?php get_footer(); ?>
