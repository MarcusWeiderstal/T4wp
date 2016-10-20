<?php
function your_scripts() {


                 wp_enqueue_style('t4', get_template_directory_uri() . '/css/t4index.css', array(), '1.0.0', 'all');
                  wp_enqueue_style('slideshow', get_template_directory_uri() . '/css/t4slideshow.css', array(), '1.0.0', 'all');
                    wp_enqueue_style('mobil', get_template_directory_uri() . '/css/t4mobile.css', array(), '1.0.0', 'all');
                 wp_enqueue_script( 'cycle', get_template_directory_uri() . '/js/cycle2.js', array('jquery') );
                 wp_enqueue_script( 'header', get_template_directory_uri() . '/js/header-functions.js', array('jquery') );
                
                 wp_enqueue_script( 'mix', get_template_directory_uri() . '/js/mix.js', array('jquery') );








        }
        add_action('wp_enqueue_scripts', 'your_scripts');
        // This hook executes the enqueuing of your script at the proper moment.



        //Making jQuery Google API
function modify_jquery() {
if (!is_admin()) {
  // comment out the next two lines to load the local copy of jQuery
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', false, '1.8.1');
  wp_enqueue_script('jquery');
}
}
add_action('init', 'modify_jquery');

 ?>
