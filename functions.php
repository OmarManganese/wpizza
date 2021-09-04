<?php

function wpizza_script_enqueue() {
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/wpizza.css');
}

add_action( 'wp_enqueue_scripts', 'wpizza_script_enqueue');