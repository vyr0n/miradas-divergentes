<?php
/**
 * Miradas Divergentes Wordpress Theme functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package WordPress
 * @subpackage mdwt
 * @since 1.0.0
 * @version 1.5.0
 */

 if(!function_exists('mdwt_scripts')):
    function mdwt_scripts(){
        wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700', array(), '1.0.0', 'all');
        wp_register_style('style', get_stylesheet_uri(), array('google-fonts'), '1.0.0', 'all');

        wp_enqueue_style('google-fonts');
        wp_enqueue_style('style');

        wp_register_script( 'scripts', get_template_directory_uri().'/scripts.js', array('jquery'), '1.0.0', true );

        wp_enqueue_script( 'jquery');
        wp_enqueue_script( 'scripts');
    }
 endif;

 add_action( 'wp_enqueue_scripts', 'mdwt_scripts');

 if(!function_exists('mdwt_setup')):
    function mdwt_setup(){
        add_theme_support( 'post-thumbnails' );
        
        add_theme_support( 'html5', array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption'
        ));
        //Logo Personalizado
        add_theme_support( 'custom-logo', array(
            'height'=> 100,
            'width'=> 100,
            'flex-height'=> true,
            'flex-width'=> true
        ));
        //Fondo / Background Personalizado
        add_theme_support( 'custom-background', array(
            'default-color'=> '000',
            'default-image'=> get_template_directory_uri().'', //'/img/background-image.jpg',
            'default-repeat'=> 'repeat',
            'default-position-x'=> '',
            'default-position-y'=> '',
            'default-size'=> '',
            'default-attachment'=> 'fixed'
        ));

        // Activa la actualizacion selectiva de widgets en el personalizador
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
 endif;

 add_action('after_setup_theme', 'mdwt_setup');

if(!function_exists('mdwt_menus')):
    function mdwt_menus(){
        register_nav_menus(array(
            'main_menu' => __('Menú Principal', 'mdwt'),
            'social_menu' => __('Menú Redes Sociales', 'mdwt'),
        ));
    }
endif;

add_action('init', 'mdwt_menus');

if(!function_exists('mdwt_register_sidebars')):
    function mdwt_register_sidebars(){
        register_sidebar(array(
            'name' => __('Sidebar Principal', 'mdwt'),
            'id' => 'main_sidebar',
            'description' => __('Este es el sidebar principal', 'mdwt'),
            'before_widget' => '<article id="%1$s" class="Widget %2$s">',
            'after_widget' => '</article>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        register_sidebar(array(
            'name' => __('Sidebar del Pie de Página', 'mdwt'),
            'id' => 'footer_sidebar',
            'description' => __('Este es el sidebar del pie de página', 'mdwt'),
            'before_widget' => '<article id="%1$s" class="Widget %2$s">',
            'after_widget' => '</article>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
    }
endif;

add_action('widgets_init', 'mdwt_register_sidebars');

require_once get_template_directory().'/inc/custom-header.php';

require_once get_template_directory().'/inc/customizer.php';

require_once get_template_directory().'/inc/custom-login.php';

require_once get_template_directory().'/inc/custom-admin.php';