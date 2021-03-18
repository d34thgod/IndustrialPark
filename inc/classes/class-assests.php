<?php 
/**
*Enqueue Theme assests
*
* @package INDUSTRIALPARK
*/

namespace INDUSTRIALPARK_THEME\Inc;

use INDUSTRIALPARK_THEME\Inc\Traits\Singleton;

class Assests {
    use Singleton;

    protected function __construct() {
        
        $this->setup_hooks();
    }

    protected function setup_hooks() {

        add_action( 'wp_enqueue_scripts', [$this,'register_styles'] );
        add_action( 'wp_enqueue_scripts', [$this,'register_scripts'] );
    }

    public function register_styles() {
        //Register styles
        wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( INDUSTRIALPARK_DIR_PATH . '/style.css' ), 'all' );
        wp_register_style( 'components-css', INDUSTRIALPARK_DIR_URI . '/assests/src/library/css/components.css', [], false, 'all' );
        wp_register_style( 'normalize-css', INDUSTRIALPARK_DIR_URI . '/assests/src/library/css/normalize.css', [], false, 'all' );
        wp_register_style( 'rahman-css', INDUSTRIALPARK_DIR_URI . '/assests/src/library/css/rahman-industrial-park.css', [], false, 'all' );
        
        //Enqueue styles
        wp_enqueue_style( 'style-css' );
        wp_enqueue_style( 'components-css' );
        wp_enqueue_style( 'normalize-css' );
        wp_enqueue_style( 'rahman-css' );
        
    }

    public function register_scripts() {
        //Register Scripts
        wp_register_script( 'main-js' , INDUSTRIALPARK_DIR_URI .  '/assests/main.js',[] ,filemtime( INDUSTRIALPARK_DIR_PATH . '/assests/main.js'),true );
        wp_register_script( 'rahman-js' , INDUSTRIALPARK_DIR_URI .  '/assests/src/library/js/rahman-industrial-park.js',['jquery'] ,false,true );
        wp_register_script( 'webflow-js' , 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js' ,false,true );
        wp_register_script( 'jquery-js' , 'https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=604f4c4c5860d44c6c0d270a',false,true );

        //Enqueue scripts
        wp_enqueue_script( 'main-js' );
        wp_enqueue_script( 'rahman-js' );
        wp_enqueue_script( 'weblow-js' );
        wp_enqueue_script( 'jquery-js' );
}
}