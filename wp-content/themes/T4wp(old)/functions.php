<?php
function your_scripts() {


                 wp_enqueue_style('t4', get_template_directory_uri() . '/css/t4.css', array(), '1.0.0', 'all');
                  wp_enqueue_style('slideshow', get_template_directory_uri() . '/css/slideshow.css', array(), '1.0.0', 'all');
                 wp_enqueue_script( 'tfyra', get_template_directory_uri() . '/js/tfyra.js', array('jquery') );

        }
        add_action('wp_enqueue_scripts', 'your_scripts');
        // This hook executes the enqueuing of your script at the proper moment.


 ?>
