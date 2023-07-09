<?php

add_action('wp_enqueue_scripts', function() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri(  ) . '/style.css');
	
	wp_enqueue_script('circetype-js', get_stylesheet_directory_uri()  . '/js/circletype.min.js');
	// wp_enqueue_script('my-js', get_stylesheet_directory_uri() . '/js/my.js', array('jquery'));
	// wp_enqueue_script('my-js', get_stylesheet_directory_uri() . '/assets/js/app.min.js', array('jquery'));
	wp_enqueue_script('my-js', get_stylesheet_directory_uri() . '/assets/js/mine.js');
});

?>