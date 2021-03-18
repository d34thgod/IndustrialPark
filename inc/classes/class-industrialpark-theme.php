<?php 
/**
*Bootstrap the Theme
*
*@package INDUSTRAILPARK
*/

namespace INDUSTRIALPARK_THEME\Inc;

use INDUSTRIALPARK_THEME\Inc\Traits\Singleton;

class INDUSTRIALPARK_THEME {
    use Singleton;

    protected function __construct() {

        Assests::get_instance();
        Menus::get_instance();
        
        $this->setup_hooks();
    }

    protected function setup_hooks() {
  
        add_action( 'after_setup_theme', [ $this, 'setup_theme'] );
    }

    public function setup_theme(){



        add_theme_support( 'title-tag' );

        add_theme_support('custom-logo', [
            'header-text'   =>  ['site-title', 'site-description'],
            'height'        =>  78,
            'width'         =>  71,
            'flex-height'   =>  true,
            'flex-width'    =>  true,
        ] );

        add_theme_support( 'custom-background',  [
            'default-color' => '#fff',
            'default-image' =>  ''
        ]);
        
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'html5', 
             [
                 'search-form',
                 'comment-form',
                 'gallery',
                 'caption',
                 'script',
                 'style',
             ]);
        add_editor_style();
        
        add_theme_support( 'wp_block-styles' );

        add_theme_support( 'align-wide' );

        global $content_width;
        if( !isset( $content_width) ) {
            $content_width = 1240;
        }
    }
}
