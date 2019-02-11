<?php
// https://codex.wordpress.org/Dashboard_Widgets_API
// https://codex.wordpress.org/Plugin_API/Admin_Screen_Reference
// https://codex.wordpress.org/Administration_Screens
// https://codex.wordpress.org/Adding_Administration_Menus

if( !function_exists( 'mdwt_admin_scripts' ) ):
    function mdwt_admin_scripts () {
        wp_register_style( 'custom-properties', get_stylesheet_directory_uri() .'/css/custom_properties.css', array(), '1.0.0', 'all' );
        wp_register_style( 'admin-page-style', get_template_directory_uri() .'/css/admin_page.css', array(), '1.0.0', 'all' );
        
        wp_enqueue_style( 'custom-properties' );
        wp_enqueue_style( 'admin-page-style' );

        // wp_register_script( 'admin-page-script', get_template_directory_uri() . '/js/admin_page.js', array('jquery'), '1.0.0', true );

        // wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'admin-page-script');
    }
endif;

add_action( 'admin_enqueue_scripts', 'mdwt_admin_scripts');

if ( !function_exists( 'mdwt_add_editor_styles' ) ):
    function mdwt_add_editor_styles () {
        add_editor_style( 'https://fonts.googleapis.com/css?family=Roboto:400,700' );
        add_editor_style('css/custom_properties.css');
        add_editor_style('css/custom_editor_style.css');
    }
endif;

add_action( 'admin_init', 'mdwt_add_editor_styles' );

