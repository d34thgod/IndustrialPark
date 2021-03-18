<?php 
/**
* Theme Functions
* @package IndustrialPark
 */ 
 include( get_theme_file_path( '/inc/theme_customizer.php' ));
 add_action( 'customize_register', 'IndustrailPark_customize_register' );

if (! defined('INDUSTRIALPARK_DIR_PATH') ) {
    define( 'INDUSTRIALPARK_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if (! defined('INDUSTRIALPARK_DIR_URI') ) {
    define( 'INDUSTRIALPARK_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once INDUSTRIALPARK_DIR_PATH . '/inc/helpers/autoloader.php';


function industrialpark_get_theme_instance(){
    \INDUSTRIALPARK_THEME\Inc\INDUSTRIALPARK_THEME::get_instance();
}

industrialpark_get_theme_instance();
