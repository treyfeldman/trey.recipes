<?php
        // Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js');

}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

function include_jQuery() {

    // comment out the next two lines to load the local copy of jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1');
    wp_enqueue_script('jquery');
}

add_action('init', 'include_jQuery');

// Add Google Fonts
function startwordpress_google_fonts() {
    wp_register_style('Dosis', 'http://fonts.googleapis.com/css?family=Dosis');
    wp_enqueue_style( 'Dosis');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

// Custom settings
function custom_settings_add_menu() {
    add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );


//Header Image
$args = array(
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );
