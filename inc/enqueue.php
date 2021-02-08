<?php
function theme_cs_js(){
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'font-solaiman', 'https://fonts.maateen.me/solaiman-lipi/font.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
	

	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.6.0.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts','theme_cs_js');