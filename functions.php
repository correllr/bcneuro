<?php


// Style & Scripts

function bcneuro_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
	wp_enqueue_script('cycle2', get_template_directory_uri() . '/js/cycle2.js');

}

add_action('wp_enqueue_scripts', 'bcneuro_resources');



// Navigation Menus
register_nav_menus(array(
'primary' => __( 'Primary Menu'),
));

// Featured images

add_theme_support( 'post-thumbnails' );

	// Add sizes
	add_image_size( 'square-thumbnail', 400, 400, true );
	add_image_size( 'excerpt-thumbnail', 400, 250, true );
	
// Remove ... after excerpt
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Custom post types
function create_post_type() {
  register_post_type( 'video',
    array(
      'labels' => array(
        'name' => __( 'Videos' ),
        'singular_name' => __( 'Video' )
      ),
      'public' => true,
      'has_archive' => true,
	  'menu_position' => 5,
	  'supports' => array(
        'title',
		'editor',
		'author',
		'thumbnail',
		'excerpt',
		'custom-fields',
		'comments',
		'page-attributes'
      ),
	  'taxonomies' => array( 'category', 'post_tag' ),
    )
  );
}
add_action( 'init', 'create_post_type' );



?>