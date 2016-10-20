<?php
/**
 * Template Name: Informationssida
 *
 * @package WordPress
 *
 *
 */

?>

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

    <div id="nyheter-container">
      <h2>
    <?php the_title(); ?>
    </h2>
    </div>
<!-- Fixa css -->
<br><br>
    <div class="underrubrik">
      <h1>
 Gymnasingenjör
 </h1>

  <p>
    MAssa text </p>


<h1>Kurser</h1>
  </p>
  <p>
    MAssa text </p>



<h1>Riktiga kunder</h1>
  </p>
  <p>
    MAssa text </p>


<h1>Praktik</h1>
  </p>
  <p>
    MAssa text </p>
    </div>
</div>
<?php get_footer(); ?>
