<?php 
		
		add_action( 'wp_enqueue_scripts', 'ws_theme_styles' );


			add_action( 'wp_enqueue_scripts', 'jquery_lib' );
function jquery_lib(){

		wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//code.jquery.com/jquery-2.2.4.js');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/js/snap.svg-min.js', array('jquery'), null, true);

}





function ws_theme_styles() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style ( 'bootstrap-grid', get_template_directory_uri(). '/assets/style/bootstrap-grid.min.css');
	wp_enqueue_style ( 'bootstrap', get_template_directory_uri(). '/assets/style/bootstrap.min.css');
	wp_enqueue_style ( 'slider', get_template_directory_uri(). '/assets/style/slider.css');
	wp_enqueue_style ( 'tarif', get_template_directory_uri(). '/assets/style/tarif.css');
	wp_enqueue_style ( 'cd-modal', get_template_directory_uri(). '/assets/style/cd-modal.css');
	wp_enqueue_style ( 'offers', get_template_directory_uri(). '/assets/style/offers.css');
	wp_enqueue_style ( 'settings', get_template_directory_uri(). '/assets/style/settings.css');
	wp_enqueue_style ( 'fonts', get_template_directory_uri(). '/assets/fonts/font-awesome.min.css');
}

add_filter( 'excerpt_length', function(){
	return 10;
} );



add_theme_support ('custom-logo');
add_theme_support ('post-thumbnails');

add_image_size( 'post-preview', 250, 180, true );
add_image_size( 'news-preview', 200, 200, true );
add_image_size( 'big-photo',    500, 200, true );



 ?>