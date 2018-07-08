<?php


// Style & Scripts

function bcneuro_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');

}

add_action('wp_enqueue_scripts', 'bcneuro_resources');



// Navigation Menus
register_nav_menus(array(
'primary' => __( 'Primary Menu'),
));



?>